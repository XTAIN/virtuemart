<?php
/**
 * Store View
 *
 * @package	VirtueMart
 * @subpackage Store
 * @author RickG
 * @copyright Copyright (c) 2009 VirtueMart Team. All rights reserved.
 */

jimport( 'joomla.application.component.view');
require_once(JPATH_COMPONENT_ADMINISTRATOR.DS.'helpers'.DS.'adminMenu.php');
require_once(JPATH_COMPONENT_ADMINISTRATOR.DS.'helpers'.DS.'image.php');


/**
 * HTML View class for maintaining the store
 *
 * @package	VirtueMart
 * @subpackage Store
 * @author RickG, jseros
 */
class VirtueMartViewStore extends JView {
	
	function display($tpl = null) {
		$model = $this->getModel();
        $store = $model->getStore();
        
        $layoutName = JRequest::getVar('layout', 'default');
        $isNew = ($store->vendor_id < 1);
		
		if ($layoutName == 'edit') {
			if ($isNew) {
				JToolBarHelper::title(  JText::_('VM_STORE_FORM_LBL' ).': <small><small>[ New ]</small></small>', 'vm_store_48');
				JToolBarHelper::divider();
				JToolBarHelper::save();
				JToolBarHelper::cancel();
			}
			else {
				JToolBarHelper::title( JText::_('VM_STORE_FORM_LBL' ).': <small><small>[ Edit ]</small></small>', 'vm_store_48');
				JToolBarHelper::divider();
				JToolBarHelper::save();
				JToolBarHelper::cancel('cancel', 'Close');
			}
			
			// loading the ShopFunctions Helper by jseros
			$this->loadHelper('shopFunctions');
											
			$this->assignRef('store', $store);
			
			//singleton instance of editor
			$editor = JFactory::getEditor();
			$this->assignRef('editor', $editor);
        }	
        else {
			
			JToolBarHelper::title( JText::_( 'VM_STORE_FORM_LBL' ), 'vm_store_48' );
			JToolBarHelper::deleteList('', 'remove', 'Delete');
			JToolBarHelper::editListX();
			JToolBarHelper::addNewX();				
			
			$pagination = $model->getPagination();			
			$this->assignRef('pagination',	$pagination);	
			
			$stores = $model->getStores();						
			$this->assignRef('stores',	$stores);
		}        		
		
		parent::display($tpl);
	}
	
}
?>
