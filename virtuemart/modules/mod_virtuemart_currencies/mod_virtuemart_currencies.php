<?php
defined('_JEXEC') or  die( 'Direct Access to '.basename(__FILE__).' is not allowed.' );
/**
* Currency Selector Module
*
* NOTE: THIS MODULE REQUIRES THE VIRTUEMART COMPONENT!
/*
* @version $Id$
* @package VirtueMart
* @subpackage modules
*
* @copyright (C) 2011 virtuemart team - All rights reserved.
* @license http://www.gnu.org/copyleft/gpl.html GNU/GPL
* VirtueMart is Free Software.
* VirtueMart comes with absolute no warranty.
*
* www.virtuemart.net
*/


/***********
 *
 * Prices in the orders are saved in the shop currency; these fields are required
 * to show the prices to the user in a later stadium.
  */

if (!class_exists( 'VmConfig' )) require(JPATH_ADMINISTRATOR .'/components/com_virtuemart/helpers/config.php');

VmConfig::loadConfig();
VmConfig::loadJLang('mod_virtuemart_currencies', true);
vmJsApi::jQuery();
$mainframe = Jfactory::getApplication();
$vendorId = vRequest::getInt('vendorid', 1);
$text_before = $params->get( 'text_before', '');

/* load the template */
$currencyModel = VmModel::getModel('currency');

$currencies = $currencyModel->getVendorAcceptedCurrrenciesList($vendorId);


if (!class_exists('CurrencyDisplay')) require(JPATH_VM_ADMINISTRATOR . DS . 'helpers' . DS . 'currencydisplay.php');
$currencyDisplay = CurrencyDisplay::getInstance();

$virtuemart_currency_id = $mainframe->getUserStateFromRequest( "virtuemart_currency_id", 'virtuemart_currency_id',vRequest::getInt('virtuemart_currency_id',$currencyDisplay->_vendorCurrency) );

require(JModuleHelper::getLayoutPath('mod_virtuemart_currencies'));
    ?>
