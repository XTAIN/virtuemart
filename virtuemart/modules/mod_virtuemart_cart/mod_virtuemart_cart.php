<?php
defined('_JEXEC') or  die( 'Direct Access to '.basename(__FILE__).' is not allowed.' );
/*
*Cart Ajax Module
*
* @version $Id$
* @package VirtueMart
* @subpackage modules
*
* www.virtuemart.net
*/

$doc = JFactory::getDocument();
$doc->addScript("modules/mod_virtuemart_cart/assets/js/update_cart.js");
$js = '
jQuery(document).ready(function(){
    jQuery("body").live("updateVirtueMartCartModule", function(e) {
        jQuery("#vmCartModule").updateVirtueMartCartModule();
    });
});
';
$doc->addScriptDeclaration($js);

$jsVars  = ' jQuery(document).ready(function(){
	jQuery(".vmCartModule").productUpdate();
});' ;

if (!class_exists( 'VmConfig' )) require(JPATH_ROOT .'/administrator/components/com_virtuemart/helpers/config.php');

VmConfig::loadConfig();
VmConfig::loadJLang('mod_virtuemart_cart', true);
VmConfig::loadJLang('com_virtuemart', true);

//This is strange we have the whole thing again in controllers/cart.php public function viewJS()
if(!class_exists('VirtueMartCart')) require(JPATH_VM_SITE.DS.'helpers'.DS.'cart.php');
$cart = VirtueMartCart::getCart(false);

$viewName = vRequest::getString('view',0);
if($viewName=='cart'){
	$checkAutomaticPS = true;
} else {
	$checkAutomaticPS = false;
}
$data = $cart->prepareAjaxData($checkAutomaticPS);
if (!class_exists('CurrencyDisplay')) require(JPATH_ROOT .'/administrator/components/com_virtuemart/helpers/currencydisplay.php');
$currencyDisplay = CurrencyDisplay::getInstance( );

vmJsApi::cssSite();

$moduleclass_sfx = $params->get('moduleclass_sfx', '');
$show_price = (bool)$params->get( 'show_price', 1 ); // Display the Product Price?
$show_product_list = (bool)$params->get( 'show_product_list', 1 ); // Display the Product Price?
/* Laod tmpl default */
require(JModuleHelper::getLayoutPath('mod_virtuemart_cart'));
 ?>