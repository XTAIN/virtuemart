<?php
/**
*
* Calculation View
*
* @package	VirtueMart
* @subpackage Calculation
* @author RickG, Max Milbers
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
 * HTML View class for maintaining the list of countries
 *
 * @package	VirtueMart
 * @subpackage Calculation tool
 * @author Max Milbers
 */
class VirtuemartViewCalc extends JView {

	function display($tpl = null) {

		// Load the helper(s)
		$this->loadHelper('adminMenu');

		$model = $this->getModel('calc');

        $calc = $model->getCalc();

        $layoutName = JRequest::getVar('layout', 'default');
        $isNew = ($calc->calc_id < 1);

		if ($layoutName == 'edit') {
			$this->assignRef('calc',	$calc);
			if ($isNew) {
				JToolBarHelper::title(  JText::_('VM_CALC_LIST_ADD' ).': <small><small>[ New ]</small></small>', 'vm_countries_48');
				JToolBarHelper::divider();
				JToolBarHelper::save();
				JToolBarHelper::cancel();
			}
			else {
				JToolBarHelper::title( JText::_('VM_CALC_LIST_ADD' ).': <small><small>[ Edit ]</small></small>', 'vm_countries_48');
				JToolBarHelper::divider();
				JToolBarHelper::save();
				JToolBarHelper::cancel('cancel', 'Close');
			}

			$this->loadHelper('shopFunctions');

			/* Load some common models */
			$categoryModel = $this->getModel('category');
//			$this->assignRef('categoryModel',	$categoryModel);
			$category_tree= null;

			/* Get the category tree */
//			if (isset($calc->calc_categories)) $category_tree = ShopFunctions::categoryListTree('', 0, 0, $calc->calc_categories);
//			else $category_tree = ShopFunctions::categoryListTree();
			$test[] = 1;$test[] = 2;
			$category_tree = ShopFunctions::categoryListTree(0, 0, 0, $test);

			$this->assignRef('category_tree', $category_tree);
        }
        else {
			JToolBarHelper::title( JText::_( 'VM_CALC_LIST_LBL' ), 'vm_countries_48' );
			JToolBarHelper::publishList();
			JToolBarHelper::unpublishList();
			JToolBarHelper::deleteList('', 'remove', 'Delete');
			JToolBarHelper::editListX();
			JToolBarHelper::addNewX();

			$pagination = $model->getPagination();
			$this->assignRef('pagination',	$pagination);

			$calcs = $model->getCalcs();
			$this->assignRef('calcs',	$calcs);
		}
		require_once(CLASSPATH. 'ps_perm.php' );
		$perm = new ps_perm();
		$perm->check( 'admin' );
		$this->assignRef('perm',	$perm);
		$this->assignRef('model',	$model);

//		$this->assignRef('calc_categories', $calc->calc_categories);


		parent::display($tpl);
	}

}
?>
