<?php
/**
*
* Shipping Rate View
*
* @package	VirtueMart
* @subpackage ShippingRate
* @author RickG
* @link http://www.virtuemart.net
* @copyright Copyright (c) 2004 - 2010 VirtueMart Team. All rights reserved.
* @license http://www.gnu.org/copyleft/gpl.html GNU/GPL, see LICENSE.php
* VirtueMart is free software. This version may have been modified pursuant
* to the GNU General Public License, and as distributed it includes or
* is derivative of works licensed under the GNU General Public License or
* other free or open source software licenses.
* @version $Id$
*/

// Check to ensure this file is included in Joomla!
defined('_JEXEC') or die('Restricted access');

// Load the view framework
jimport( 'joomla.application.component.view');

/**
 * HTML View class for maintaining the list of shipping rates
 *
 * @package	VirtueMart
 * @subpackage ShippingRate
 * @author RickG
 */
class VirtuemartViewShippingRate extends JView {

	function display($tpl = null) {

		// Load the helper(s)
		$this->loadHelper('adminMenu');

		$model = $this->getModel();
        $shippingRate = $model->getShippingRate();

        $layoutName = JRequest::getVar('layout', 'default');
        $isNew = ($shippingRate->shipping_rate_id < 1);

		if ($layoutName == 'edit') {
			if ($isNew) {
				JToolBarHelper::title(  JText::_('VM_RATE_LIST_LBL' ).': <small><small>[ New ]</small></small>', 'vm_shipping_rates_48');
				JToolBarHelper::divider();
				JToolBarHelper::save();
				JToolBarHelper::cancel();
			}
			else {
				JToolBarHelper::title( JText::_('VM_RATE_FORM_LBL' ).': <small><small>[ Edit ]</small></small>', 'vm_shipping_rates_48');
				JToolBarHelper::divider();
				JToolBarHelper::save();
				JToolBarHelper::cancel('cancel', 'Close');
			}
			$this->assignRef('rate', $shippingRate);

			$carrierModel = $this->getModel('shippingcarrier');
        	$carriers = $carrierModel->getShippingCarriers(false, true);
        	$this->assignRef('carriers', $carriers);

			$currencyModel = $this->getModel('currency');
        	$currencies = $currencyModel->getCurrencies(false, true);
        	$this->assignRef('currencies', $currencies);

			$countrymodel = $this->getModel('country');
        	$countries = $countrymodel->getCountries(false, true);
        	$this->assignRef('countries', $countries);

			$taxratemodel = $this->getModel('taxrate');
        	$taxrates = $taxratemodel->getTaxRates(false, true);
        	
        	$this->assignRef('taxRates', $taxrates);
        }
        else {
			JToolBarHelper::title( JText::_('VM_RATE_LIST_LBL' ), 'vm_shipping_rates_48');
			JToolBarHelper::deleteList('', 'remove', 'Delete');
			JToolBarHelper::editListX();
			JToolBarHelper::addNewX();

			$pagination = $model->getPagination();
			$this->assignRef('pagination',	$pagination);

			$shippingRates = $model->getShippingRates();
			$this->assignRef('shippingRates', $shippingRates);
		}

		parent::display($tpl);
	}

}
// pure php no closing tag
