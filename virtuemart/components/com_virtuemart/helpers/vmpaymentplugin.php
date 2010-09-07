<?php
/**
 * abstract class for payment plugins
 *
 * @package	VirtueMart
 * @subpackage User
 * @author Max Milbers
 * @link http://www.virtuemart.net
 * @copyright Copyright (c) 2004 - 2010 VirtueMart Team. All rights reserved.
 * @license http://www.gnu.org/copyleft/gpl.html GNU/GPL, see LICENSE.php
 * VirtueMart is free software. This version may have been modified pursuant
 * to the GNU General Public License, and as distributed it includes or
 * is derivative of works licensed under the GNU General Public License or
 * other free or open source software licenses.
 * @version $Id: user_info.php 2494 2010-07-19 20:50:08Z milbo $
 */
 
 
abstract class vmPaymentPlugin extends JPlugin  {
	
	private $_paym_id = 0;
	private $_paym_name = '';
	
	/** var Must be overriden in every plugin file */
	var $_pelement = '';
	
	/** var Must be overriden in every plugin file */
	var $payment_code = '' ;

	/** var Must be overriden in every plugin file  atm without use, must be choosen while configuration
	 * 
	 *  C = Creditcart
	 *  Y = Payment processor
	 *  B = Bank debit
	 *  N = Address only (Cash on delivery)
	 *  P = HTML form based (paypal)
	 * 
	 * ATTENTION: Is now saved in the params !
	 * */
	var $paym_type = '' ;

	/**
	 * Constructor
	 *
	 * For php4 compatability we must not use the __constructor as a constructor for plugins
	 * because func_get_args ( void ) returns a copy of all passed arguments NOT references.
	 * This causes problems with cross-referencing necessary for the observer design pattern.
	 *
	 * @param object $subject The object to observe
	 * @param array  $config  An array that holds the plugin configuration
	 * @since 1.5
	 */
	function plgVmPaymentPlugin(& $subject, $config) {
		parent::__construct($subject, $config);
		
//		dump($config,'plgPaymentCashondel Constructor $config');
//		dump($this->params,'plgPaymentCashondel Constructor $this->params');		
	}
	
	/**
	 * This functions gets the used and configured payment method
	 * pelement of this class determines the used jplugin.
	 * The right payment method is determined by the vendor and the jplugin id.
	 * 
	 * This function sets the used payment plugin as variable of this class
	 * @author Max Milbers
	 * 
	 */
	function setVmParams($vendorId=0,$jplugin_id=0){
		
		if(!$vendorId) $vendorId = 1;
	 	$db = &JFactory::getDBO();
	 	if(!$jplugin_id){
			$q = 'SELECT `id` FROM #__plugins WHERE `element` = "'.$this->_pelement.'"';
			$db->setQuery($q);
			$this->_jplugin_id = $db->loadResult();
			if(!$this->_jplugin_id){
				return false;	
			}		
	 	}else{
	 		$this->_jplugin_id = $jplugin_id;
	 	}

		$q = 'SELECT `paym_id`,`paym_name` FROM #__vm_payment_method WHERE `paym_jplugin_id` = "'.$this->_jplugin_id.'" AND `paym_vendor_id` = "'.$vendorId.'" AND `published`="1" ';
		$db->setQuery($q);
		$result =  $db->loadAssoc();
		
		if($result){
			require_once(JPATH_ADMINISTRATOR.DS.'components'.DS.'com_virtuemart'.DS.'models'.DS.'paymentmethod.php');
			$this->paymentModel = new VirtueMartModelPaymentmethod();
			$this->paymentModel->setId($result['paym_id']);
			$this->paymentMethod = $this->paymentModel->getPaym();
			return true;	
		} else{
			return false;
		}

	}
		
	/**
	 * This shows the plugin for choosing in the payment list of the checkout process.
	 * 
	 * @author Max Milbers
	 */
	 
	function plgVmOnShowList($cart,$checkedPaymId=0){
		
		if(!$this -> setVmParams($cart['vendor_id'])) return ;
		
		if($checkedPaymId==$this->paymentMethod->paym_id) $checked = '"checked"'; else $checked = '';
		
		$html = '<fieldset>';
		$html .= '<input type="radio" name="paym_id" value="'.$this->paymentMethod->paym_id.'" '.$checked.'>'.$this->paymentMethod->paym_name.' ';
		$html .= ' </fieldset> ';
		return $html;
	}

	/**
	 * This is for setting the input data of the payment method, after selecting into the cart
	 * 
	 * @author Max Milbers
	 */
	function plgVmOnPaymentSelectCheck($cart){
		return true;	
	}
	
	/**
	 * This is for checking the input data of the payment method within the checkout
	 * 
	 * @author Max Milbers
	 */
	function plgVmOnCheckoutCheckPaymentData(){
		return true;
	}
	
	/**
	 * This method stores the data of the used payment method
	 * 
	 * @author Max Milbers
	 */
	function plgVmOnConfirmedOrderStorePaymentData(){
		return true;
	}
	
	/**
	 * This method displays the stored data of the transaction
	 * 
	 * @author Max Milbers
	 */
	function plgVmOnShowStoredOrder(){
		return true;
	}
	
}
