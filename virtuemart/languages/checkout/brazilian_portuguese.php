<?php
if( !defined( '_VALID_MOS' ) && !defined( '_JEXEC' ) ) die( 'Direct Access to '.basename(__FILE__).' is not allowed.' ); 
/**
*
* @version : brazilian_portuguese.php 1071 2007-12-03 08:42:28Z thepisu $
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
$VM_LANG->initModule('checkout',array (
	'CHARSET' => 'ISO-8859-1',
	'PHPSHOP_NO_CUSTOMER' => 'Sentimos muito mas voc� n�o � um clinte registado.<BR>Por favor registar-se em nossa loja primeiro.<BR>Obrigado.',
	'PHPSHOP_THANKYOU' => 'Obrigado pelo seu pedido.',
	'PHPSHOP_EMAIL_SENDTO' => 'Um email de confirma��o foi enviado para',
	'PHPSHOP_CHECKOUT_NEXT' => 'Pr�ximo',
	'PHPSHOP_CHECKOUT_CONF_BILLINFO' => 'Informa��o de pagamento',
	'PHPSHOP_CHECKOUT_CONF_COMPANY' => 'Empresa',
	'PHPSHOP_CHECKOUT_CONF_NAME' => 'Nome',
	'PHPSHOP_CHECKOUT_CONF_ADDRESS' => 'Endere�o',
	'PHPSHOP_CHECKOUT_CONF_EMAIL' => 'Email',
	'PHPSHOP_CHECKOUT_CONF_SHIPINFO' => 'Informa��o de envio',
	'PHPSHOP_CHECKOUT_CONF_SHIPINFO_COMPANY' => 'Empresa',
	'PHPSHOP_CHECKOUT_CONF_SHIPINFO_NAME' => 'Nome',
	'PHPSHOP_CHECKOUT_CONF_SHIPINFO_ADDRESS' => 'Endere�o',
	'PHPSHOP_CHECKOUT_CONF_SHIPINFO_PHONE' => 'Telefone',
	'PHPSHOP_CHECKOUT_CONF_SHIPINFO_FAX' => 'Fax',
	'PHPSHOP_CHECKOUT_CONF_PAYINFO_METHOD' => 'M�todo de pagamento',
	'PHPSHOP_CHECKOUT_CONF_PAYINFO_REQINFO' => 'Informa��o requerida quando Pagamento via cart�o de cr�dito � selecionada',
	'PHPSHOP_PAYPAL_THANKYOU' => 'Obrigado pelo seu pagamento. A transa��o foi um sucesso. Voc� receber� um e-mail de confirma��o da transa��o pela PayPal. Voc� pode agora continuar ou entrar em <a href=http://www.paypal.com>www.paypal.com</a> para ver os detalhes da transa��o.',
	'PHPSHOP_PAYPAL_ERROR' => 'Um erro ocorreu enquanto processava sua transa��o. A situa��o de seu pedido n�o pode ser atualizada.',
	'PHPSHOP_THANKYOU_SUCCESS' => 'Seu pedido foi encaminhado com sucesso!',
	'VM_CHECKOUT_TITLE_TAG' => 'Checkout: Step %s of %s',
	'VM_CHECKOUT_ORDERIDNOTSET' => 'Order ID is not set or emtpy!',
	'VM_CHECKOUT_FAILURE' => 'Failure',
	'VM_CHECKOUT_SUCCESS' => 'Success',
	'VM_CHECKOUT_PAGE_GATEWAY_EXPLAIN_1' => 'This page is located on the webshop\'s website.',
	'VM_CHECKOUT_PAGE_GATEWAY_EXPLAIN_2' => 'The gateway execute the page on the website, and the shows the result SSL Encrypted.',
	'VM_CHECKOUT_CCV_CODE' => 'Credit Card Validation Code',
	'VM_CHECKOUT_CCV_CODE_TIPTITLE' => 'What\'s the Credit Card Validation Code?',
	'VM_CHECKOUT_MD5_FAILED' => 'MD5 Check failed',
	'VM_CHECKOUT_ORDERNOTFOUND' => 'Order not found',
	'VM_CHECKOUT_PBS_APPROVED_ORDERCOMMENT' => '
                The Payment Transaction was approved by PBS. \n
                The Transaction has received the following Transaction Number:\n\n
                Transaction Number: {transactionnumber}\n',
	'VM_CHECKOUT_PBS_NOTAPPROVED_ORDERCOMMENT' => '
                The Payment Transaction was not approved by PBS. \n
                The Transaction has received the following Transaction Number:\n\n
                Transaction Number: {transactionnumber}\n',
	'VM_CHECKOUT_DD_ERROR_0' => 'Merchant/forretningsnummer ugyldigt',
	'VM_CHECKOUT_DD_ERROR_1' => 'Ugyldigt kreditkortnummer',
	'VM_CHECKOUT_DD_ERROR_2' => 'Ugyldigt belob',
	'VM_CHECKOUT_DD_ERROR_3' => 'OrderID mangler eller er ugyldig',
	'VM_CHECKOUT_DD_ERROR_4' => 'PBS afvisning - (Oftest - ugyldig kortdata, sp?rret kort osv...)',
	'VM_CHECKOUT_DD_ERROR_5' => 'Intern server fejl hos DanDomain eller PBS',
	'VM_CHECKOUT_DD_ERROR_6' => 'E-dankort ikke tilladt. Kontakt DanDomain',
	'VM_CHECKOUT_DD_ERROR_DEFAULT' => 'System fejl',
	'VM_CHECKOUT_FP_ERROR_1' => 'Error: Transaction declined',
	'VM_CHECKOUT_FP_ERROR_2' => 'Error: Transaction declined',
	'VM_CHECKOUT_FP_ERROR_3' => 'Error: wrong number format',
	'VM_CHECKOUT_FP_ERROR_4' => 'Error: illegal transaction',
	'VM_CHECKOUT_FP_ERROR_5' => 'Error: no answer',
	'VM_CHECKOUT_FP_ERROR_6' => 'Error_system_failure',
	'VM_CHECKOUT_FP_ERROR_7' => 'Error: Card expired',
	'VM_CHECKOUT_FP_ERROR_8' => 'Error: Communication Failure',
	'VM_CHECKOUT_FP_ERROR_9' => 'Error: Internal Failure',
	'VM_CHECKOUT_FP_ERROR_10' => 'Error: Card not registered',
	'VM_CHECKOUT_FP_ERROR_DEFAULT' => 'Error: unknown Error',
	'VM_CHECKOUT_WF_ERROR_1' => 'Transaktionen blev ikke godkendt',
	'VM_CHECKOUT_WF_ERROR_2' => 'Mulig snyd',
	'VM_CHECKOUT_WF_ERROR_3' => 'Kommunikations fejl',
	'VM_CHECKOUT_WF_ERROR_4' => 'Kort udlobet',
	'VM_CHECKOUT_WF_ERROR_5' => 'Intern fejl',
	'VM_CHECKOUT_WF_ERROR_6' => 'Invalid Transaktion',
	'VM_CHECKOUT_WF_ERROR_7' => 'System fejl',
	'VM_CHECKOUT_WF_ERROR_8' => 'Forkert forretningsnummer',
	'VM_CHECKOUT_WF_ERROR_9' => 'Kortet eksistere ikke',
	'VM_CHECKOUT_WF_ERROR_10' => 'Kort l?ngen er for kort.',
	'VM_CHECKOUT_WF_ERROR_11' => 'Transaktion kan ikke gennemfores igennem denne terminal',
	'VM_CHECKOUT_WF_ERROR_12' => 'Kortejeren har ikke rettigheder til at gennemfore denne transaktion.',
	'VM_CHECKOUT_WF_ERROR_13' => 'Kortnummeret eksistere ikke',
	'VM_CHECKOUT_WF_ERROR_14' => 'Error unknown'
	));
?>