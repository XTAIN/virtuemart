<?php
/**
 *
 * Realex payment plugin
 *
 * @author Valerie Isaksen
 * @version $Id$
 * @package VirtueMart
 * @subpackage payment
 * ${PHING.VM.COPYRIGHT}
 * @license http://www.gnu.org/copyleft/gpl.html GNU/GPL, see LICENSE.php
 * VirtueMart is free software. This version may have been modified pursuant
 * to the GNU General Public License, and as distributed it includes or
 * is derivative of works licensed under the GNU General Public License or
 * other free or open source software licenses.
 * See /administrator/components/com_virtuemart/COPYRIGHT.php for copyright notices and details.
 *
 * http://virtuemart.net
 */
defined('JPATH_BASE') or die();

jimport('joomla.form.formfield');
class JFormFieldGetPaypal extends JFormField {

	/**
	 * Element name
	 *
	 * @access    protected
	 * @var        string
	 */
	var $type = 'getPaypal';

	protected function getInput() {

		JHtml::_('behavior.colorpicker');

		$doc = JFactory::getDocument();
		vmJsApi::addJScript( '/plugins/vmpayment/paypal/paypal/assets/js/admin.js');
		$doc->addStyleSheet(JURI::root(true) . '/plugins/vmpayment/paypal/paypal/assets/css/paypal.css');

		$url = "https://www.paypal.com/us/webapps/mpp/referral/paypal-payments-standard?partner_id=83EP5DJG9FU6L";
		$logo = '<img src="https://www.paypalobjects.com/webstatic/en_US/logo/pp_cc_mark_111x69.png" />';
		$html = '<p><a target="_blank" href="' . $url . '"  >' . $logo . '</a></p>';
		$html .= '<p><a target="_blank" href="' . $url . '" class="signin-button-link">' . vmText::_('VMPAYMENT_PAYPAL_REGISTER') . '</a>';
		$html .= ' <a target="_blank" href="http://docs.virtuemart.net/manual/shop-menu/payment-methods/paypal.html" class="signin-button-link">' . vmText::_('VMPAYMENT_PAYPAL_DOCUMENTATION') . '</a></p>';

		return $html;
	}

}