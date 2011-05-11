<?php
/**
*
* Data module for shop configuration
*
* @package	VirtueMart
* @subpackage Config
* @author Max Milbers
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

// Load the model framework
jimport( 'joomla.application.component.model');

/**
 * Model class for shop configuration
 *
 * @package	VirtueMart
 * @subpackage Config
 * @author Max Milbers
 * @author RickG
 */
class VirtueMartModelConfig extends JModel {


    /**
     * Retrieve a list of layouts from the default and choosen templates directory.
     *
     * @author Max Milbers
     * @param name of the view
     * @return object List of flypage objects
     */
    function getLayoutList($view) {

		$dirs[] = JPATH_ROOT.DS.'components'.DS.'com_virtuemart'.DS.'views'.DS.$view.DS.'tmpl';

		//This does not work, joomla takes only overrides of their standard template
//		$tplpath = VmConfig::get('vmtemplate',0);
		//So we lookf for template overrides in the joomla standard template
		$app =& JFactory::getApplication('site');
		$tplpath = $app->getTemplate();
		if($tplpath){
			if(is_dir(JPATH_ROOT.DS.'templates'.DS.$tplpath.DS.'html'.DS.'com_virtuemart'.DS.$view)){
				$dirs[] = JPATH_ROOT.DS.'templates'.DS.$tplpath.DS.'html'.DS.'com_virtuemart'.DS.$view;
			}
		}

		$result = '';
		$alreadyAddedFile = array();
		foreach($dirs as $dir){
			if ($handle = opendir($dir)) {
			    while (false !== ($file = readdir($handle))) {
			    	//Handling directly for extension is much cleaner
					$path_info = pathinfo($file);
					if ($path_info['extension'] == 'php' && !in_array($file,$alreadyAddedFile)) {
					    $alreadyAddedFile[] = $file;
					    //There is nothing to translate here
						$result[] = JHTML::_('select.option', $file, $path_info['filename']);
					}
			    }
			}
		}
		return $result;
    }


    /**
     * Retrieve a list of possible images to be used for the 'no image' image.
     *
     * @author RickG
     * @author Max Milbers
     * @return object List of image objects
     */
    function getNoImageList() {

    	//TODO set config value here
		$dirs[] = JPATH_ROOT.DS.'components'.DS.'com_virtuemart'.DS.'assets'.DS.'images'.DS.'vmgeneral';

		$tplpath = VmConfig::get('vmtemplate',0);
		if($tplpath){
			if(is_dir(JPATH_ROOT.DS.'templates'.DS.$tplpath.DS.'images'.DS.'vmgeneral')){
				$dirs[] = JPATH_ROOT.DS.'templates'.DS.$tplpath.DS.'images'.DS.'vmgeneral';
			}
		}

		$result = '';

		foreach($dirs as $dir){
			if ($handle = opendir($dir)) {
			    while (false !== ($file = readdir($handle))) {
					if ($file != "." && $file != ".." && $file != '.svn' && $file != 'index.html') {
					    if (filetype($dir.DS.$file) != 'dir') {
						$result[] = JHTML::_('select.option', $file, JText::_(str_replace('.php', '', $file)));
					    }
					}
			    }
			}
		}
		return $result;
    }


    /**
     * Retrieve a list of currency converter modules from the plugins directory.
     *
     * @author RickG
     * @return object List of theme objects
     */
    function getCurrencyConverterList() {
	$dir = JPATH_VM_ADMINISTRATOR.DS.'plugins'.DS.'currency_converter';
	$result = '';

	if ($handle = opendir($dir)) {
	    while (false !== ($file = readdir($handle))) {
		if ($file != "." && $file != ".." && $file != '.svn') {
		    $info = pathinfo($file);
		    if ((filetype($dir.DS.$file) == 'file') && ($info['extension'] == 'php')) {
			$result[] = JHTML::_('select.option', $file, JText::_($file));
		    }
		}
	    }
	}

	return $result;
    }


    /**
     * Retrieve a list of possible order statuses.
     *
     * @author RickG
     * @return object List of status objects
     */
    function getOrderStatusList() {
	$db = JFactory::getDBO();

	$query = 'SELECT `order_status_code`, `order_status_name` FROM `#__vm_order_status` ';
	$query .= ' ORDER BY `#__vm_order_status`.`order_status_name`';
	$db->setQuery($query);

	return $db->loadObjectList();
    }


    /**
     * Retrieve a list of modules.
     *
     * @author RickG
     * @return object List of module objects
     */
    function getModuleList() {
	$db = JFactory::getDBO();

	$query = 'SELECT `module_id`, `module_name` FROM `#__vm_module` ';
	$query .= 'ORDER BY `module_id`';
	$db->setQuery($query);

	return $db->loadObjectList();
    }


    /**
     * Retrieve a list of Joomla content items.
     *
     * @author RickG
     * @return object List of content objects
     */
    function getContentLinks() {
	$db = JFactory::getDBO();

	$query = 'SELECT `id`, CONCAT(`title`, " (", `title_alias`, ")") AS text FROM `#__content` ';
	$query .= 'ORDER BY `id`';
	$db->setQuery($query);

	return $db->loadObjectList();
    }

    /**
     * Retrieve a list of Order By Fields
     *
     * @author Kohl Patrick
     * @return array of order list
     */
    function getOrderByFields( $orderByChecked ) {

	if (empty ($orderByChecked)) $orderByChecked = array('product_sku','category_name','mf_name','product_name');
	else if (!is_array($orderByChecked)) $orderByChecked = array($orderByChecked);
	$orderByFields = new stdClass();
	$orderByFields->checkbox ='';

	$orderByFieldsArray = array('product_id', 'product_sku','product_price','category_name','category_description','mf_name', 'product_s_desc', 'product_desc', 'product_weight', 'product_weight_uom', 'product_length', 'product_width', 'product_height', 'product_lwh_uom', 'product_in_stock', 'low_stock_notification', 'product_available_date', 'product_availability', 'product_special', 'ship_code_id', 'cdate', 'mdate', 'product_name', 'product_sales','product_unit', 'product_packaging', 'product_order_levels', 'intnotes', 'metadesc', 'metakey', 'metarobot', 'metaauthor');
	foreach ($orderByFieldsArray as $field ) {
		if (in_array($field, $orderByChecked) ) {
			$checked = 'checked="checked"';
		}
		else {
			$checked = '';
		}
		$text = JText::_('COM_VIRTUEMART_SEARCH_ORDER_'.strtoupper($field)) ;
		$orderByFields->select[] = JHTML::_('select.option', $field, $text) ;
		$orderByFields->checkbox.= '<input type="checkbox" id="' .$field. '" name="browse_orderby_fields[]" value="' .$field. '" ' .$checked. ' /><label for="' .$field. '">' .$text. '</label>';
	}
	return $orderByFields;
    }
    /**
     * Retrieve a list of search Fields
     *
     * @author Kohl Patrick
     * @return array of order list
     */
    function getSearchFields( $searchChecked ) {

	if (empty ($searchChecked)) $searchChecked = array('product_sku','category_name','category_description','mf_name','product_name', 'product_s_desc');
	else if (!is_array($searchChecked)) $searchChecked = array($searchChecked);
	$searchFields = '';
	$searchFieldsArray = array('product_sku','product_price','category_name','category_description','mf_name','product_name', 'product_s_desc', 'product_desc', 'product_weight', 'product_weight_uom', 'product_length', 'product_width', 'product_height', 'product_lwh_uom', 'product_in_stock', 'low_stock_notification', 'product_available_date', 'product_availability', 'product_special', 'ship_code_id', 'cdate', 'mdate',  'product_sales','product_unit', 'product_packaging', 'product_order_levels', 'intnotes', 'metadesc', 'metakey', 'metarobot', 'metaauthor');
	foreach ($searchFieldsArray as $field ) {
		if (in_array($field, $searchChecked) ) {
			$checked = 'checked="checked"';
		}
		else {
			$checked = '';
		}
		$text = JText::_('COM_VIRTUEMART_SEARCH_ORDER_'.strtoupper($field)) ;
		$searchFields.= '<input type="checkbox" id="' .$field. '" name="browse_search_fields[]" value="' .$field. '" ' .$checked. ' /><label for="' .$field. '">' .$text. '</label>';
	}
	return $searchFields;
    }

	/**
	 * Retrieve the configuration record
	 *
	 * @author RickG
	 * @author Oscar van Eijk
	 * @return object A JParameter of the configuration, null when not found
	 */
	function getConfig()
	{
		$db = JFactory::getDBO();

		$query = "SELECT `config` FROM `#__virtuemart_configs` WHERE `config_id` = 1";
		$db->setQuery($query);
		$config = $db->loadResult();
		if ($config) {
			return new JParameter($config);
		} else {
			JError::raiseWarning(E_WARNING,'There is no configuration in the database yet. This messages should not appear again once you configured youir shop for the first time.');
			// ... which is nonsense since is has been loaded during install (vm_config.dat), so probably there is in error...
			return null;
		}
	}


    /**
     * Save the configuration record
     *
     * @author RickG
     * @return boolean True is successful, false otherwise
     */
    function store($data) {

	if ($data) {
	    $curConfigParams = $this->getConfig();
	    $curConfigParams->bind($data);

	    $db = JFactory::getDBO();
	    $query = 'UPDATE `#__virtuemart_configs` SET `config` = ' . $db->Quote($curConfigParams->toString()) .' WHERE config_id ="1"' ;
	    $db->setQuery($query);
	    if (!$db->query()) {
		$this->setError($table->getError());
		return false;
	    }
	}
	else {
	    $this->setError('No configuration parameters to save!');
	    return false;
	}

	return true;
    }
}

//pure php no closing tag