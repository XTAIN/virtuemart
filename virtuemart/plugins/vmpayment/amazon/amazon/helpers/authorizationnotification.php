<?php

defined('_JEXEC') or die('Direct Access to ' . basename(__FILE__) . 'is not allowed.');

/**
 *
 * @package    VirtueMart
 * @subpackage vmpayment
 * @version $Id: authorizationnotification.php 8259 2014-08-31 13:43:36Z alatak $
 * @author Valérie Isaksen
 * @link http://www.virtuemart.net
 * @copyright Copyright (c) 2004 - ${PHING.VM.RELDATE} VirtueMart Team. All rights reserved.
 * @license http://www.gnu.org/copyleft/gpl.html GNU/GPL, see LICENSE.php
 * VirtueMart is free software. This version may have been modified pursuant
 * to the GNU General Public License, and as distributed it includes or
 * is derivative of works licensed under the GNU General Public License or
 * other free or open source software licenses.
 *
 */

class amazonHelperAuthorizationNotification extends amazonHelper {

	public function __construct (OffAmazonPaymentsNotifications_Model_authorizationNotification $authorizationNotification, $method) {
		parent::__construct($authorizationNotification, $method);
	}


	/**
	 * if asynchronous mode= state= pending
	 * if asynchronous mode=> timeOut was set to > 0
	 * if synchronous mode=> timeOut ==0
	 * -- if InvalidPaymentMethod and asynchronous mode, the state= suspended ==> send an email
	 * -- if InvalidPaymentMethod and synchronous mode: return to cart, redisplay wallet widget
	 * -- AmazonRejected: if state == open, then retry authorization, else Declined
	 * -- Processing failure: retry the request in 2 minutes ???
	 * --
	 * @return mixed
	 */
	function onNotificationUpdateOrderHistory ($order, $payments) {
		$order_history = array();
		$amazonState = "";
		$reasonCode = "";
		if (!$this->amazonData->isSetAuthorizationDetails()) {
			$this->debugLog('NO isSetAuthorizationDetails' . __FUNCTION__ . var_export($this->amazonData, true), 'error');
			return false;
		}
		$authorizationDetails = $this->amazonData->getAuthorizationDetails();
		if (!$authorizationDetails->isSetAuthorizationStatus()) {
			$this->debugLog('NO isSetAuthorizationStatus' . __FUNCTION__ . var_export($this->amazonData, true), 'error');
			return false;
		}

		$authorizationStatus = $authorizationDetails->getAuthorizationStatus();
		if (!$authorizationStatus->isSetState()) {
			$this->debugLog('NO isSetState' . __FUNCTION__ . var_export($this->amazonData, true), 'error');
			return false;
		}
		$amazonState = $authorizationStatus->getState();
		// In synchronous Mode, order history has been updated by the Authorization Response
		// Other notifications may be received, but they are more informative: MaxCapturesProcessed if the FULL amount Capture has been done


		if ($authorizationStatus->isSetReasonCode()) {
			$reasonCode = $authorizationStatus->getReasonCode();
		}

		$order_history['customer_notified'] = 1;

		if ($amazonState == 'Open') {
			$order_history['order_status'] = $this->_currentMethod->status_authorization;
			$order_history['comments'] = vmText::_('VMPAYMENT_AMAZON_COMMENT_STATUS_AUTHORIZATION_OPEN');
		} elseif ($amazonState == 'Declined') {
			if ($reasonCode == 'InvalidPaymentMethod'  ) {
				if (  $this->_currentMethod->soft_decline=='soft_decline_enabled' ) {
					$order_history['comments'] = vmText::sprintf('VMPAYMENT_AMAZON_COMMENT_STATUS_AUTHORIZATION_INVALIDPAYMENTMETHOD_SOFT_DECLINED', $reasonCode);
					$order_history['order_status'] = $this->_currentMethod->status_orderconfirmed;
				} else {
					$order_history['comments'] = vmText::sprintf('VMPAYMENT_AMAZON_COMMENT_STATUS_AUTHORIZATION_INVALIDPAYMENTMETHOD', $reasonCode);
					$order_history['order_status'] = $this->_currentMethod->status_cancel;
				}
			} elseif ($reasonCode == 'AmazonRejected') {
				$order_history['order_status'] = $this->_currentMethod->status_cancel;
			} elseif ($reasonCode == 'TransactionTimedOut') {
// TODO  retry the authorization again
				$order_history['order_status'] = $this->_currentMethod->status_cancel;
			}
			$order_history['comments'] = vmText::sprintf('VMPAYMENT_AMAZON_COMMENT_STATUS_AUTHORIZATION_DECLINED', $reasonCode);
			$order_history['customer_notified'] = 0;
		} elseif ($amazonState == 'Pending') {
			$order_history['order_status'] = $this->_currentMethod->status_orderconfirmed;
			$order_history['comments'] = vmText::_('VMPAYMENT_AMAZON_COMMENT_STATUS_AUTHORIZATION_PENDING');
			$order_history['customer_notified'] = 0;
		} elseif ($amazonState == 'Closed') {
			$order_history['order_status'] = $this->_currentMethod->status_cancel;
			$order_history['comments'] = vmText::sprintf('VMPAYMENT_AMAZON_COMMENT_STATUS_AUTHORIZATION_CLOSED', $reasonCode);
			$order_history['customer_notified'] = 0;
		}

		$orderModel = VmModel::getModel('orders');
		$orderModel->updateStatusForOneOrder($order['details']['BT']->virtuemart_order_id, $order_history, TRUE);
		return $amazonState;
	}


	private function isSynchronousMode () {
		if (($this->_currentMethod->erp_mode == "erp_mode_disabled" AND $this->_currentMethod->authorization_mode_erp_disabled == "automatic_synchronous")
			or
			($this->_currentMethod->erp_mode == "erp_mode_enabled" AND $this->_currentMethod->authorization_mode_erp_enabled == "automatic_synchronous")
		) {
			return true;
		}

		return false;
	}

	public function getStoreInternalData () {
		//$amazonInternalData = $this->getStoreResultParams();
		$amazonInternalData = new stdClass();
		if ($this->amazonData->isSetAuthorizationDetails()) {
			$authorizationDetails = $this->amazonData->getAuthorizationDetails();
			if ($authorizationDetails->isSetAmazonAuthorizationId()) {
				$amazonInternalData->amazon_response_amazonAuthorizationId = $authorizationDetails->getAmazonAuthorizationId();
			}
			if ($authorizationDetails->isSetAuthorizationStatus()) {
				$authorizationStatus = $authorizationDetails->getAuthorizationStatus();
				if ($authorizationStatus->isSetState()) {
					$amazonInternalData->amazon_response_state = $authorizationStatus->getState();
				}
				if ($authorizationStatus->isSetReasonCode()) {
					$amazonInternalData->amazon_response_reasonCode = $authorizationStatus->getReasonCode();
				}
				if ($authorizationStatus->isSetReasonDescription()) {
					$amazonInternalData->amazon_response_reasonDescription = $authorizationStatus->getReasonDescription();
				}
			}
		}
		return $amazonInternalData;
	}

	/**
	 * move to Pending =>GetAuthorizationDetails, closeAuhtorization
	 * move to Open => GetAuthorizationDetails, capture, closeAuhtorization
	 * move to Declined => GetAuthorizationDetails
	 * move to Closed => GetAuthorizationDetails
	 * @param $order
	 * @param $payments
	 * @param $amazonState
	 * @return bool|string
	 */
	public function onNotificationNextOperation($order, $payments, $amazonState) {
		return false;

	}

	public function getReferenceId () {
		if ($this->amazonData->isSetAuthorizationDetails()) {
			$authorizationDetails = $this->amazonData->getAuthorizationDetails();
			if ($authorizationDetails->isSetAuthorizationReferenceId()) {
				return $authorizationDetails->getAuthorizationReferenceId();
			}
		}
		return NULL;
	}


	public function isCaptureNow () {
		$authorizationDetails = $this->amazonData->getAuthorizationDetails();
		if ($authorizationDetails->isSetCaptureNow()) {
			return $authorizationDetails->getCaptureNow();
		}
		return false;
	}


	public function getAmazonAuthorizationId () {
		return $this->amazonData->getAuthorizationDetails()->getAmazonAuthorizationId();
	}

	public function getContents () {

		$contents=$this->tableStart("Authorization Notification");
		if ($this->amazonData->isSetAuthorizationDetails()) {
			$contents .=$this->getRowFirstCol("AuthorizeDetails");
			$authorizationDetails = $this->amazonData->getAuthorizationDetails();
			if ($authorizationDetails->isSetAmazonAuthorizationId()) {
				$contents .=$this->getRow("AmazonAuthorizationId: ",$authorizationDetails->getAmazonAuthorizationId() );
			}
			if ($authorizationDetails->isSetAuthorizationReferenceId()) {
				$contents .=$this->getRow("AuthorizationReferenceId: ", $authorizationDetails->getAuthorizationReferenceId() );
			}
			if ($authorizationDetails->isSetAuthorizationAmount()) {
				$more='';
				$authorizationAmount = $authorizationDetails->getAuthorizationAmount();
				if ($authorizationAmount->isSetAmount()) {
					$more .= "Amount: " . $authorizationAmount->getAmount() . "<br />";
				}
				if ($authorizationAmount->isSetCurrencyCode()) {
					$more .= "CurrencyCode: " . $authorizationAmount->getCurrencyCode() . "<br />";
				}
				$contents .=$this->getRow("AuthorizationAmount: ",$more);
			}
			if ($authorizationDetails->isSetCapturedAmount()) {
				$more='';
				$capturedAmount = $authorizationDetails->getCapturedAmount();
				if ($capturedAmount->isSetAmount()) {
					$more .= "Amount: " . $capturedAmount->getAmount() . "<br />";
				}
				if ($capturedAmount->isSetCurrencyCode()) {
					$more .= "CurrencyCode: " . $capturedAmount->getCurrencyCode() . "<br />";
				}
				$contents .=$this->getRow("CapturedAmount: ",$more);
			}
			if ($authorizationDetails->isSetAuthorizationFee()) {
				$more='';

				$authorizationFee = $authorizationDetails->getAuthorizationFee();
				if ($authorizationFee->isSetAmount()) {
					$more .= "Amount: " . $authorizationFee->getAmount() . "<br />";
				}
				if ($authorizationFee->isSetCurrencyCode()) {
					$more .= "CurrencyCode: " . $authorizationFee->getCurrencyCode() . "<br />";
				}
				$contents .=$this->getRow("AuthorizationFee: ",$more);
			}
			if ($authorizationDetails->isSetIdList()) {

				$idList = $authorizationDetails->getIdList();
				$memberList = $idList->getId();
				$more='';
				foreach ($memberList as $member) {
					$more .= "<br /> member: " . $member;
				}
				$contents .=$this->getRow("IdList: ",$more);
			}
			if ($authorizationDetails->isSetCreationTimestamp()) {
				$contents .=$this->getRow("CreationTimestamp: ",$authorizationDetails->getCreationTimestamp());
			}
			if ($authorizationDetails->isSetExpirationTimestamp()) {
				$contents .=$this->getRow("ExpirationTimestamp: ",$authorizationDetails->getExpirationTimestamp());
			}
			if ($authorizationDetails->isSetAuthorizationStatus()) {
				$authorizationStatus = $authorizationDetails->getAuthorizationStatus();
				$more='';
				if ($authorizationStatus->isSetState()) {
					$more .= "State: " . $authorizationStatus->getState() . "<br />";
				}
				if ($authorizationStatus->isSetLastUpdateTimestamp()) {
					$more .= "LastUpdateTimestamp: " . $authorizationStatus->getLastUpdateTimestamp() . "<br />";
				}
				if ($authorizationStatus->isSetReasonCode()) {
					$more .= "ReasonCode: " . $authorizationStatus->getReasonCode() . "<br />";
				}
				if ($authorizationStatus->isSetReasonDescription()) {
					$more .= "ReasonDescription: " . $authorizationStatus->getReasonDescription() . "<br />";
				}
				$contents .=$this->getRow("AuthorizationStatus",$more);

			}
			if ($authorizationDetails->isSetOrderItemCategories()) {
				$orderItemCategories = $authorizationDetails->getOrderItemCategories();
				$orderItemCategoryList = $orderItemCategories->getOrderItemCategory();
				$more='';
				foreach ($orderItemCategoryList as $orderItemCategory) {
					$more .= "OrderItemCategory: " . $orderItemCategory . "<br />";
				}
				$contents .=$this->getRow("OrderItemCategories",$more);

			}
			if ($authorizationDetails->isSetCaptureNow()) {
				$contents .=$this->getRow("CaptureNow",$authorizationDetails->getCaptureNow());

			}
			if ($authorizationDetails->isSetSoftDescriptor()) {
				$contents .=$this->getRow("SoftDescriptor",$authorizationDetails->getSoftDescriptor());
			}
		}
		$contents .= $this->tableEnd();

		return $contents;
	}





}