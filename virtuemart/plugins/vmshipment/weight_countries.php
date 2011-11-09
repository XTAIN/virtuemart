<?php

if (!defined('_JEXEC'))
    die('Direct Access to ' . basename(__FILE__) . ' is not allowed.');

/**
 * Shipment plugin for weight_countries shipments, like regular postal services
 *
 * @version $Id: weight_countries.php 3220 2011-05-12 20:09:14Z Milbo $
 * @package VirtueMart
 * @subpackage Plugins - shippper
 * @copyright Copyright (C) 2004-2011 VirtueMart Team - All rights reserved.
 * @license http://www.gnu.org/copyleft/gpl.html GNU/GPL, see LICENSE.php
 * VirtueMart is free software. This version may have been modified pursuant
 * to the GNU General Public License, and as distributed it includes or
 * is derivative of works licensed under the GNU General Public License or
 * other free or open source software licenses.
 * See /administrator/components/com_virtuemart/COPYRIGHT.php for copyright notices and details.
 *
 * http://virtuemart.org
 * @author Valerie Isaksen
 *
 */
if (!class_exists('ShopFunctions'))
    require(JPATH_VM_ADMINISTRATOR . DS . 'helpers' . DS . 'shopfunctions.php');

class plgVmShipmentWeight_countries extends vmShipmentPlugin {

    /**
     * Constructor
     *
     * For php4 compatability we must not use the __constructor as a constructor for plugins
     * because func_get_args ( void ) returns a copy of all passed arguments NOT references.
     * This causes problems with cross-referencing necessary for the observer design pattern.
     *
     * @param object $subject The object to observe
     * @param array  $config  An array that holds the plugin configuration
     */
    function plgVmShipmentWeight_countries(&$subject, $config) {
	$this->_pelement = basename(__FILE__, '.php');
	$this->_tablename = '#__virtuemart_order_shipment_' . $this->_pelement;
	$this->_createTable();
	parent::__construct($subject, $config);
    }

    /**
     * Create the table for this plugin if it does not yet exist.
     * @author Oscar van Eijk
     */
    protected function _createTable() {
	$scheme = DbScheme::get_instance();
	$scheme->create_scheme($this->_tablename);
	$schemeCols = array(
	    'id' => array(
		'type' => 'int'
		, 'length' => 11
		, 'auto_inc' => true
		, 'null' => false
	    )
	    , 'virtuemart_order_id' => array(
		'type' => 'int'
		, 'length' => 11
		, 'null' => false
	    )
	    , 'order_number' => array(
		'type' => 'varchar'
		, 'length' => 32
		, 'null' => false
	    )
	    , 'shipment_id' => array(
		'type' => 'bigint'
		, 'length' => 20
		, 'null' => false
	    )
	    , 'shipment_name' => array(
		'type' => 'text'
		, 'null' => false
	    )
	    , 'order_weight' => array(
		'type' => 'int'
		, 'length' => 11
		, 'null' => false
	    )
	    , 'shipment_weight_unit' => array(
		'type' => 'varchar '
		, 'length' => 3
		, 'null' => false
	    )
	    , 'shipment_cost' => array(
		'type' => 'text'
		, 'null' => false
	    )
	    , 'shipment_package_fee' => array(
		'type' => 'int'
		, 'length' => 11
		, 'null' => false
	    )
	    , 'tax_id' => array(
		'type' => 'int'
		, 'length' => 11
		, 'null' => false
	    )
	);
	$schemeIdx = array(
	    'idx_order_shipment' => array(
		'columns' => array('virtuemart_order_id')
		, 'primary' => false
		, 'unique' => false
		, 'type' => null
	    )
	);
	$scheme->define_scheme($schemeCols);
	$scheme->define_index($schemeIdx);
	if (!$scheme->scheme(true)) {
	    JError::raiseWarning(500, 'DbScheme _createTable' . $scheme->get_db_error());
	}
	$scheme->reset();
    }

    /**
     * Get the total weight for the order, based on which the proper shipment rate
     * can be selected.
     * @param object $cart Cart object
     * @return float Total weight for the order
     * @author Oscar van Eijk
     */
    protected function getOrderWeight(VirtueMartCart $cart, $to_weight_unit) {
	$weight = 0;
	foreach ($cart->products as $product) {
	    $weight += ( ShopFunctions::convertWeigthUnit($product->product_weight, $product->product_weight_uom, $to_weight_unit) * $product->quantity);
	}
	return $weight;
    }

    /**
     * This event is fired after the shipment method has been selected. It can be used to store
     * additional shipment info in the cart.
     *
     * @param object $cart Cart object
     * @param integer $selected ID of the shipment selected
     * @return boolean True on succes, false on failures, null when this plugin was not selected.
     * On errors, JError::raiseWarning (or JError::raiseError) must be used to set a message.
     * @author Valérie Isaksen
     */
    public function plgVmOnShipmentSelected(VirtueMartCart $cart, $selectedShipment = 0) {
	if (!$this->selectedThisShipment($this->_pelement, $selectedShipment)) {
	    return null; // Another shipment was selected, do nothing
	} else {
	    return true;
	}
    }

    /**
     * This method is fired when showing the order details in the frontend.
     * It displays the shipment-specific data.
     *
     * @param integer $order_number The order Number
     * @return mixed Null for shipments that aren't active, text (HTML) otherwise
     * @author Valérie Isaksen
     */
    public function plgVmOnShowOrderShipmentFE($virtuemart_order_id) {

	$db = JFactory::getDBO();
	$q = 'SELECT * FROM `' . $this->_tablename . '` '
		. 'WHERE `virtuemart_order_id` = ' . $virtuemart_order_id;
	$db->setQuery($q);
	if (!($shipinfo = $db->loadObject())) {
	    JError::raiseWarning(500, $q . " " . $db->getErrorMsg());
	    return '';
	}
	if (!($this->selectedThisShipment($this->_pelement, $shipinfo->shipment_id))) {
	    return null;
	}
	return $shipinfo->shipment_name;
    }

    /**
     * Select the shipment rate ID, based on the selected shipment in combination with the
     * shipto address (country and zipcode) and the total order weight.
     * @param object $cart Cart object
     * @param int $shipmentID Shipment ID, by default taken from the cart
     * @return int Shipment rate ID, -1 when no match is found. Only 1 selected ID will be returned;
     * if more ID's match, the cheapest will be selected.
     */
    protected function selectShipmentRate(VirtueMartCart $cart, $selectedShipment = 0) {
	$shipment_params = $this->getVmShipmentParams($cart->vendorId, $cart->virtuemart_shipmentmethod_id);
	$params = new JParameter($shipment_params);

	if ($selectedShipment == 0) {
	    $selectedShipment = $cart->virtuemart_shipmentmethod_id;
	}
	$address = (($cart->ST == 0) ? $cart->BT : $cart->ST);

	$shipment_params = $this->getVmShipmentParams($cart->vendorId, $selectedShipment);

	$shipment->shipment_name = $params->get('shipment_name');
	$shipment->shipment_rate_vat_id = $params->get('shipment_tax_id');
	$shipment->shipment_value = $this->_getShipmentCost($params, $cart);
	return $selectedShipment;
    }

    /**
     * This event is fired after the order has been stored; it gets the shipment method-
     * specific data.
     *
     * @param int $order_id The order_id being processed
     * @param object $cart  the cart
     * @param array $priceData Price information for this order
     * @return mixed Null when this method was not selected, otherwise true
     * @author Valerie Isaksen
     */
    function plgVmOnConfirmedOrderStoreShipmentData($orderID, VirtueMartCart $cart, $priceData) {

	if (!($shipment = $this->getShipment($cart->virtuemart_shipmentmethod_id))) {
	    return null; // Another method was selected, do nothing
	}
	if (!class_exists('JParameter'))
	    require(JPATH_LIBRARIES . DS . 'joomla' . DS . 'html' . DS . 'parameter.php' );

	if (!class_exists('VirtueMartModelOrders'))
	    require( JPATH_VM_ADMINISTRATOR . DS . 'models' . DS . 'orders.php' );

	$params = new JParameter($shipment->shipment_params);

	$values['order_number'] = VirtueMartModelOrders::getOrderNumber($orderID);
	$values['virtuemart_order_id'] = $orderID;
	$values['shipment_id'] = $cart->virtuemart_shipmentmethod_id;
	$values['shipment_name'] = parent::getShipmentName($shipment);
	$values['order_weight'] = $this->getOrderWeight($cart, $params->get('weight_unit'));
	$values['shipment_weight_unit'] = $params->get('weight_unit');
	$values['shipment_cost'] = $params->get('rate_value');
	$values['shipment_package_fee'] = $params->get('package_fee');
	$values['tax_id'] = $params->get('shipment_tax_id');

	$this->writeData($values, $this->_tablename);
	return true;
    }

    /**
     * This method is fired when showing the order details in the backend.
     * It displays the shipment-specific data.
     * NOTE, this plugin should NOT be used to display form fields, since it's called outside
     * a form! Use plgVmOnUpdateOrderBE() instead!
     *
     * @param integer $virtuemart_order_id The order ID
     * @param integer $vendorId Vendor ID
     * @param object $_shipInfo Object with the properties 'carrier' and 'name'
     * @return mixed Null for shipments that aren't active, text (HTML) otherwise
     * @author Valerie Isaksen
     */
    public function plgVmOnShowOrderShipmentBE($virtuemart_order_id, $vendorId, $ship_method_id) {
	if (!($this->selectedThisShipment($this->_pelement, $ship_method_id))) {
	    return null;
	}
	$html = $this->getOrderShipmentHtml($virtuemart_order_id);
	return $html;
    }

    function getOrderShipmentHtml($virtuemart_order_id) {

	$db = JFactory::getDBO();
	$q = 'SELECT * FROM `' . $this->_tablename . '` '
		. 'WHERE `virtuemart_order_id` = ' . $virtuemart_order_id;
	$db->setQuery($q);
	if (!($shipinfo = $db->loadObject())) {
	    JError::raiseWarning(500, $q . " " . $db->getErrorMsg());
	    return '';
	}
	if (!class_exists('ShopFunctions'))
	    require(JPATH_VM_ADMINISTRATOR . DS . 'helpers' . DS . 'shopfunctions.php');
	if (!class_exists('CurrencyDisplay')
	)
	    require(JPATH_VM_ADMINISTRATOR . DS . 'helpers' . DS . 'currencydisplay.php');
	$currency = CurrencyDisplay::getInstance();
	$tax = ShopFunctions::getTaxByID($shipinfo->tax_id);
	$taxDisplay = is_array($tax) ? $tax['calc_value'] . ' ' . $tax['calc_value_mathop'] : $shipinfo->tax_id;
	$taxDisplay = ($taxDisplay == -1 ) ? JText::_('COM_VIRTUEMART_PRODUCT_TAX_NONE') : $taxDisplay;

	$html = '<table class="admintable">' . "\n";
	$html .=$this->getHtmlHeaderBE();
	$html .= $this->getHtmlRowBE('WEIGHT_COUNTRIES_SHIPPING_NAME', $shipinfo->shipment_name);
	$html .= $this->getHtmlRowBE('WEIGHT_COUNTRIES_WEIGHT', ShopFunctions::renderWeightUnit($shipinfo->shipment_weight_unit));
	$html .= $this->getHtmlRowBE('WEIGHT_COUNTRIES_RATE_VALUE', $currency->priceDisplay($shipinfo->shipment_cost, '', false));
	$html .= $this->getHtmlRowBE('WEIGHT_COUNTRIES_PACKAGE_FEE', $currency->priceDisplay($shipinfo->shipment_package_fee, '', false));
	$html .= $this->getHtmlRowBE('WEIGHT_COUNTRIES_TAX', $taxDisplay);
	$html .= '</table>' . "\n";

	return $html;
    }

    function _getShipmentCost($params, VirtueMartCart $cart) {
	$value = $this->getShipmentValue($params, $cart->pricesUnformatted);
	$shipment_tax_id = $this->getShipmentTaxId($params, $cart);
	$tax = ShopFunctions::getTaxByID($shipment_tax_id);
	$taxDisplay = is_array($tax) ? $tax['calc_value'] . ' ' . $tax['calc_value_mathop'] : $shipment_tax_id;
	$taxDisplay = ($taxDisplay == -1 ) ? JText::_('COM_VIRTUEMART_PRODUCT_TAX_NONE') : $taxDisplay;
    }

    function getShipmentValue($params, $cart_prices) {
	$free_shipment = $params->get('free_shipment', 0);
	if ($free_shipment && $cart_prices['salesPrice'] >= $free_shipment) {
	    return 0;
	} else {
	    return $params->get('rate_value', 0) + $params->get('package_fee', 0);
	}
    }

    function getShipmentTaxId($params) {
	return $params->get('shipment_tax_id', 0);
    }

    /*
     * This method returns the logo image form the shipment
     */

    /*   function _getShipmentLogo($shipment_logo, $alt_text) {

      $img = "";

      // 	$path = JURI::root() . 'images' . DS . 'stories' . DS . 'virtuemart' . DS . 'shipment' . DS;
      $url = JURI::root() . 'images/stories/virtuemart/shipment/';
      $img = "";
      if (!(empty($shipment_logo))) {
      $img = '<img align="middle" src="' . $url . $shipment_logo . '"  alt="' . $alt_text . '" > ';
      }
      return $img;
      }
     */

    function checkShipmentConditions($cart, $shipment) {

	$params = new JParameter($shipment->shipment_params);
	$orderWeight = $this->getOrderWeight($cart, $params->get('weight_unit'));
	$address = (($cart->ST == 0) ? $cart->BT : $cart->ST);

	$nbShipment = 0;
	$countries = array();
	if (!class_exists('JParameter'))
	    require(JPATH_LIBRARIES . DS . 'joomla' . DS . 'html' . DS . 'parameter.php' );

	$country_list = $params->get('countries');
	if (!empty($country_list)) {
	    if (!is_array($country_list)) {
		$countries[0] = $country_list;
	    } else {
		$countries = $country_list;
	    }
	}
	// probably did not gave his BT:ST address
	if (!is_array($address)) {
	    $address = array();
	    $address['zip'] = 0;
	    $address['virtuemart_country_id'] = 0;
	}
	$weight_cond = $this->_weightCond($orderWeight, $params);

	if (isset($address['zip'])) {
	    $zip_cond = $this->_zipCond($address['zip'], $params);
	} else {
	    //no zip in address data normally occurs only, when it is removed from the form by the shopowner
	    //Todo for  valerie, you may take a look, maybe should be false, or configurable.
	    $zip_cond = true;
	}

	if (!isset($address['virtuemart_country_id']))
	    $address['virtuemart_country_id'] = 0;
	if (in_array($address['virtuemart_country_id'], $countries) || count($countries) == 0) {
	    if ($weight_cond AND $zip_cond) {
		return true;
	    }
	}

	return false;
    }

    function _weightCond($orderWeight, $params) {
	if ($orderWeight) {

	    $weight_cond = ($orderWeight >= $params->get('weight_start', 0) AND $orderWeight <= $params->get('weight_stop', 0)
		    OR
		    ($params->get('weight_start', 0) <= $orderWeight AND ($params->get('weight_stop', '') == '') ));
	} else
	    $weight_cond = true;
	return $weight_cond;
    }

    /**
     * Check the conditions on Zip code
     * @param int $zip : zip code
     * @param $params paremters for this specific shiper
     * @author Valérie Isaksen
     * @return string if Zip condition is ok or not
     */
    function _zipCond($zip, $params) {
	if (!empty($zip)) {
	    $zip_cond = (( $zip >= $params->get('zip_start', 0) AND $zip <= $params->get('zip_stop', 0) )
		    OR
		    ($params->get('zip_start', 0) <= $zip AND ($params->get('zip_stop', '') == '') ) );
	} else {
	    $zip_cond = true;
	}
	return $zip_cond;
    }

}

// No closing tag