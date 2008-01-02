<?php
if( !defined( '_VALID_MOS' ) && !defined( '_JEXEC' ) ) die( 'Direct Access to '.basename(__FILE__).' is not allowed.' ); 
/**
*
* @version : german.php 1071 2007-12-03 08:42:28Z thepisu $
* @package VirtueMart
* @subpackage languages
* @copyright Copyright (C) 2004-2007 soeren - All rights reserved.
* @translator soeren
* @license http://www.gnu.org/copyleft/gpl.html GNU/GPL, see LICENSE.php
* VirtueMart is free software. This version may have been modified pursuant
* to the GNU General Public License, and as distributed it includes or
* is derivative of works licensed under the GNU General Public License or
* other free or open source software licenses.
* See /administrator/components/com_virtuemart/COPYRIGHT.php for copyright notices and details.
*
* http://virtuemart.net
*/
global $VM_LANG;
$VM_LANG->initModule('affiliate',array (
	'CHARSET' => 'ISO-8859-1',
	'PHPSHOP_USER_FORM_EMAIL' => 'Email',
	'PHPSHOP_SHOPPER_LIST_LBL' => 'Kundenliste',
	'PHPSHOP_SHOPPER_FORM_BILLTO_LBL' => 'Informationen zur Rechnungsadresse',
	'PHPSHOP_SHOPPER_FORM_USERNAME' => 'Nutzername',
	'PHPSHOP_AFFILIATE_MOD' => 'Affiliate',
	'PHPSHOP_AFFILIATE_LIST_LBL' => 'Affiliates Liste',
	'PHPSHOP_AFFILIATE_LIST_AFFILIATE_NAME' => 'Affiliate - Name',
	'PHPSHOP_AFFILIATE_LIST_AFFILIATE_ACTIVE' => 'aktiv',
	'PHPSHOP_AFFILIATE_LIST_RATE' => 'Rate',
	'PHPSHOP_AFFILIATE_LIST_MONTH_TOTAL' => 'Monatsumsatz',
	'PHPSHOP_AFFILIATE_LIST_MONTH_COMMISSION' => 'monatliche Kommission',
	'PHPSHOP_AFFILIATE_LIST_ORDERS' => 'Bestellungen auflisten',
	'PHPSHOP_AFFILIATE_EMAIL_WHO' => 'Wem eine Email senden? (* = allen)',
	'PHPSHOP_AFFILIATE_EMAIL_CONTENT' => 'Ihre Email-Adresse',
	'PHPSHOP_AFFILIATE_EMAIL_SUBJECT' => 'Der Betreff',
	'PHPSHOP_AFFILIATE_EMAIL_STATS' => 'aktuelle Statistiken einbinden?',
	'PHPSHOP_AFFILIATE_FORM_RATE' => 'Commission Rate',
	'PHPSHOP_AFFILIATE_FORM_ACTIVE' => 'Aktiv?'
	));
?>