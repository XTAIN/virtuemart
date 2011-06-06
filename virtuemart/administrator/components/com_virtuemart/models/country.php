<?php
/**
*
* Data module for shop countries
*
* @package	VirtueMart
* @subpackage Country
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

if(!class_exists('VmModel')) require(JPATH_VM_ADMINISTRATOR.DS.'helpers'.DS.'vmmodel.php');

/**
 * Model class for shop countries
 *
 * @package	VirtueMart
 * @subpackage Country
 * @author RickG
 */
class VirtueMartModelCountry extends VmModel {

	/**
	 * constructs a VmModel
	 * setMainTable defines the maintable of the model
	 * @author Max Milbers
	 */
	function __construct() {
		parent::__construct();
		$this->setMainTable('countries');
	}

    /**
     * Retreive a country record given a country code.
     *
     * @author RickG
     * @param string $code Country code to lookup
     * @return object Country object from database
     */
    function getCountryByCode($code) {
	$db = JFactory::getDBO();

	$countryCodeLength = strlen($code);
	switch ($countryCodeLength) {
	    case 2:
		$countryCodeFieldname = 'country_2_code';
		break;
	    case 3:
		$countryCodeFieldname = 'country_3_code';
		break;
	    default:
		return false;
	}

	$query = 'SELECT *';
	$query .= ' FROM `#__virtuemart_countries`';
	$query .= ' WHERE `' . $countryCodeFieldname . '` = ' . (int)$code;
	$db->setQuery($query);

	return $db->loadObject();
    }


//    /**
//     * Bind the post data to the country table and save it
//     *
//     * @author RickG
//     * @return boolean True is the save was successful, false otherwise.
//     */
//    function store() {
//	$table = $this->getTable('countries');
//
//	$data = JRequest::get('post');
//
//	// Bind the form fields to the country table
//	if (!$table->bind($data)) {
//	    $this->setError($table->getError());
//	    return false;
//	}
//
//	// Make sure the country record is valid
//	if (!$table->check()) {
//	    $this->setError($table->getError());
//	    return false;
//	}
//
//	// Save the country record to the database
//	if (!$table->store()) {
//	    $this->setError($table->getError());
//	    return false;
//	}
//
//	return $table->virtuemart_country_id;
//    }

//    /**
//     * Publish/Unpublish all the ids selected
//     *
//     * @author RickG
//     * @param boolean $publishId True is the ids should be published, false otherwise.
//     * @return boolean True is the remove was successful, false otherwise.
//     */
//    function publish($publishId = false) {
//
//    	if(!class_exists('modelfunctions')) require(JPATH_VM_ADMINISTRATOR.DS.'helpers'.DS.'modelfunctions.php');
//		return modelfunctions::publish('cid','countries',$publishId);
//
//    }


    /**
     * Retrieve a list of countries from the database.
     *
     * @author RickG
     * @param string $onlyPublished True to only retrieve the publish countries, false otherwise
     * @param string $noLimit True if no record count limit is used, false otherwise
     * @return object List of country objects
     */
    function getCountries($onlyPublished=true, $noLimit=false) {
		
		$where = array();
		$query = 'SELECT * FROM `#__virtuemart_countries` ';
		/* add filters */
		if ($onlyPublished) $where[] = '`#__virtuemart_countries`.`published` = 1';
		if (JRequest::getVar('filter_country', false)) $where[] = '`country_name` LIKE '.$this->_db->Quote('%'.JRequest::getWord('filter_country').'%');

		if (count($where) > 0) $query .= ' WHERE '.implode(' AND ', $where) ;

		$query .= $this->_getOrdering();
		if ($noLimit) {
		    $this->_data = $this->_getList($query);
		}
		else {
		    $this->_data = $this->_getList($query, $this->getState('limitstart'), $this->getState('limit'));
		}

		return $this->_data;
    }

	/**
	 * Get the SQL Ordering statement
	 *
	 * @return string text to add to the SQL statement
	 */
	function _getOrdering()
	{
		$option = JRequest::getCmd( 'option');
		$mainframe = JFactory::getApplication() ;

		$filter_order_Dir = $mainframe->getUserStateFromRequest( $option.JRequest::getVar('view').'filter_order_Dir', 'filter_order_Dir', 'asc', 'word' );
		$filter_order     = $mainframe->getUserStateFromRequest( $option.JRequest::getVar('view').'filter_order', 'filter_order', 'country_name', 'cmd' );

		return (' ORDER BY '.$filter_order.' '.$filter_order_Dir);
	}
}

//no closing tag pure php