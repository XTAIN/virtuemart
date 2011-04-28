<?php
/**
*
* Description
*
* @package	VirtueMart
* @subpackage
* @author RolandD
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
 * Model for VirtueMart Discounts
 *
 * @package VirtueMart
 * @author RolandD
 */
class VirtueMartModelProducttypes extends JModel {

	var $_total;
	var $_pagination;

	function __construct() {
		parent::__construct();

		// Get the pagination request variables
		$mainframe = JFactory::getApplication() ;
		$limit = $mainframe->getUserStateFromRequest( 'global.list.limit', 'limit', $mainframe->getCfg('list_limit'), 'int' );
		$limitstart = $mainframe->getUserStateFromRequest( JRequest::getVar('option').JRequest::getVar('view').'.limitstart', 'limitstart', 0, 'int' );

		// In case limit has been changed, adjust limitstart accordingly
		$limitstart = ($limit != 0 ? (floor($limitstart / $limit) * $limit) : 0);

		$this->setState('limit', $limit);
		$this->setState('limitstart', $limitstart);
	}

	/**
	 * Loads the pagination
	 */
    public function getPagination() {
		if ($this->_pagination == null) {
			jimport('joomla.html.pagination');
			$this->_pagination = new JPagination( $this->getTotal(), $this->getState('limitstart'), $this->getState('limit') );
		}
		return $this->_pagination;
	}

	/**
	 * Gets the total number of products
	 */
	private function getTotal() {
    	if (empty($this->_total)) {
			$q = "SELECT COUNT(*) ".$this->getProductTypesListQuery().$this->getProductTypesFilter();
			$this->_db->setQuery($q);
			$this->_total = $this->_db->loadResult();
        }

        return $this->_total;
    }

    /**
     * Select the products to list on the product list page
     */
    public function getProductTypes() {
     	/* Pagination */
     	$this->getPagination();

     	/* Build the query */
     	$q = "SELECT *, p.product_type_id, published ".$this->getProductTypesListQuery().$this->getProductTypesFilter();
     	$this->_db->setQuery($q, $this->_pagination->limitstart, $this->_pagination->limit);
     	return $this->_db->loadObjectList('product_type_id');
    }

    /**
    * List of tables to include for the product query
    * @author RolandD
    */
    private function getProductTypesListQuery() {
    	return 'FROM #__vm_product_type p
    			LEFT JOIN #__vm_product_product_type_xref x
    			ON p.product_type_id = x.product_type_id';
    }

    /**
    * Collect the filters for the query
    * @author RolandD
    */
    private function getProductTypesFilter() {

    	$filter_order = JRequest::getCmd('filter_order', 'ordering');
		if ($filter_order == '') $filter_order = 'ordering';
		$filter_order_Dir = JRequest::getWord('filter_order_Dir', 'desc');
		if ($filter_order_Dir == '') $filter_order_Dir = 'desc';

    	/* Check some filters */
     	$filters = array();
     	if (JRequest::getVar('filter_producttypes', false)) $filters[] = '#__vm_product_type.`product_type_name` LIKE '.$this->_db->Quote('%'.JRequest::getVar('filter_producttypes').'%');
     	if (JRequest::getInt('product_id', false)) $filters[] = 'product_id = '.JRequest::getInt('product_id');

     	if (count($filters) > 0) $filter = ' WHERE '.implode(' AND ', $filters);
     	else $filter = '';

     	return $filter.' ORDER BY '.$filter_order." ".$filter_order_Dir;
    }

    /**
    * Load a single discount
    * @author RolandD
    */
    public function getProductType() {
		/* Get the product IDs to remove */
		$cids = array();
		$cids = JRequest::getVar('cid', false);
		if ($cids && !is_array($cids)) $cids = array($cids);

		/* First copy the product in the product table */
		$product_type_data = $this->getTable('product_type');

		/* Load the rating */
		if ($cids) {
			$product_type_data->load($cids[0]);
			$product_type_data->list_order = $this->getListOrder($cids[0], $product_type_data->ordering);
		}
		else {
			$product_type_data->list_order = $this->getListOrder();
		}

		return $product_type_data;
    }

	/* load the Parameter for the slected product type */
	public function getProducttypeParameter() {
		$cids = JRequest::getVar('cid', false);
		$q = 'SELECT * FROM `#__vm_product_type_parameter` WHERE `product_type_id`='.$cids[0];
		$this->_db->setQuery($q);
		if ($parameters = $this->_db->loadObjectList()) {
			foreach ($parameters as $parameter ) {
				$this->renderParameterList($parameter) ;
				$parameter->list_order = $this->renderParameterListOrder($cids[0] , $parameter->parameter_name, $parameter->ordering) ;
			}
			return $parameters ;
		}
		else return false;
	}

	/* add list to parameter type */
	public function renderParameterList ( &$parameter) {

		$options = array();
		$options[] = JHTML::_('select.option', 'I', JText::_('COM_VIRTUEMART_PRODUCT_TYPE_PARAMETER_FORM_TYPE_INTEGER'));
		$options[] = JHTML::_('select.option', 'T', JText::_('COM_VIRTUEMART_PRODUCT_TYPE_PARAMETER_FORM_TYPE_TEXT'));
		$options[] = JHTML::_('select.option', 'S', JText::_('COM_VIRTUEMART_PRODUCT_TYPE_PARAMETER_FORM_TYPE_SHORTTEXT'));
		$options[] = JHTML::_('select.option', 'F', JText::_('COM_VIRTUEMART_PRODUCT_TYPE_PARAMETER_FORM_TYPE_FLOAT'));
		$options[] = JHTML::_('select.option', 'C', JText::_('COM_VIRTUEMART_PRODUCT_TYPE_PARAMETER_FORM_TYPE_CHAR'));
		$options[] = JHTML::_('select.option', 'D', JText::_('COM_VIRTUEMART_PRODUCT_TYPE_PARAMETER_FORM_TYPE_DATETIME'));
		$options[] = JHTML::_('select.option', 'A', JText::_('COM_VIRTUEMART_PRODUCT_TYPE_PARAMETER_FORM_TYPE_DATE'));
		$options[] = JHTML::_('select.option', 'M', JText::_('COM_VIRTUEMART_PRODUCT_TYPE_PARAMETER_FORM_TYPE_TIME'));
		$options[] = JHTML::_('select.option', 'V', JText::_('COM_VIRTUEMART_PRODUCT_TYPE_PARAMETER_FORM_TYPE_MULTIVALUE'));
		$options[] = JHTML::_('select.option', 'B', JText::_('COM_VIRTUEMART_PRODUCT_TYPE_PARAMETER_FORM_TYPE_BREAK'));

		$parameter->lists = JHTML::_('select.genericlist', $options, 'parameter_type', 'class="inputbox"', 'value', 'text', $parameter->parameter_type);
	}

	    public function renderParameterListOrder($product_type_id=0, $parameter_name = '', $list_order=0) {

    	$db = JFactory::getDBO();
    	$options = array();
		if (empty($parameter_name)) {
			return JText::_('COM_VIRTUEMART_CMN_NEW_ITEM_LAST');
		}
		else {

			$q = "SELECT ordering,parameter_label,parameter_name FROM #__vm_product_type_parameter " ;
			if ($product_type_id) {
				$q .= 'WHERE product_type_id='.$product_type_id;
			}
			$q .= " ORDER BY ordering ASC" ;
			$db->setQuery($q) ;
			$parameters = $db->loadObjectList();
			foreach ($parameters as $key => $parameter) {
				$options[] = JHTML::_('select.option', $parameter->ordering, $parameter->ordering.". ".$parameter->parameter_label.' ('.$parameter->parameter_name.')');
			}
			return JHTML::_('select.genericlist', $options, 'list_order', '', 'value', 'text', $list_order);
		}
    }
		
	/**
	* Delete a product type
	* @author RolandD
	*/
    public function removeProductType() {

		/* Get the product IDs to remove */
		$cids = array();
		$cids = JRequest::getVar('cid');
		if (!is_array($cids)) $cids = array($cids);

		/* Start removing */
		foreach ($cids as $key => $product_type_id) {
			/* Delete all product parameters from this product type */
			$q = 'SELECT `parameter_name` FROM `#__vm_product_type_parameter` WHERE `product_type_id`='.$product_type_id;
			$this->_db->setQuery($q);
			$parameter_names = $this->_db->loadObjectList();
			foreach ($parameter_names as $key => $name) {
			}

			$q = "DELETE FROM #__vm_product_type WHERE product_type_id = ".$product_type_id;
			$this->_db->setQuery($q);
			$this->_db->query();

			$q  = "DELETE FROM #__vm_product_product_type_xref WHERE product_type_id = ".$product_type_id;
			$this->_db->setQuery($q);
			$this->_db->query();

			$q  = "DROP TABLE IF EXISTS `#__vm_product_type_".$product_type_id."`";
			$this->_db->setQuery($q);
			$this->_db->query();
		}
		return true;
    }

    /**
    * Save a discount
    *
    * @author RolandD
    * @todo Use the J! table for moving up and down
    */
    public function saveProductType() {

		/* Get the product IDs to remove */
		$cids = array();
		$cids = JRequest::getVar('cid');
		if (!is_array($cids)) $cids = array($cids);

		/* First copy the product in the product table */
		$product_type_data = $this->getTable('product_type');

		/* Get the posted data */
		$data = JRequest::get('post', 4);

		/* Bind the table */
		$product_type_data->bind($data);

		if ($cids[0] == 0) {
			/* Let's find out the last Product Type */
			$q = "SELECT MAX(ordering)+1 AS list_order FROM #__vm_product_type";
			$this->_db->setQuery($q);
			$product_type_data->ordering = $this->_db->loadResult();

			/* Check publish state */
			if ($product_type_data->published != "1") $product_type_data->published = "0";
		}

		/* Store the product type */
		$product_type_data->store();

		/* Make a new product_type_<id> table if this is a new product type */
		if ($cids[0] == 0) {
			/* Make new table product_type_<id> */
			$q = "CREATE TABLE `#__vm_product_type_";
			$q .= $product_type_data->product_type_id. "` (";
			$q .= "`product_id` int(11) NOT NULL,";
			$q .= "PRIMARY KEY (`product_id`)";
			$q .= ") TYPE=MyISAM;";
			$this->_db->setQuery($q);
			$this->_db->query();
			return $product_type_data->product_type_id ;
		}

		/* Re-Order the Product Type table IF the ordering has been changed */
		if ($cids[0] > 0 && intval($data['list_order']) != intval($data['currentpos'])) {

			/* Moved UP in the list order */
			if( intval($data['list_order']) < intval($data['currentpos']) ) {
				$q  = "SELECT product_type_id FROM #__vm_product_type WHERE ";
				$q .= "product_type_id <> '" . $data["product_type_id"] . "' ";
				$q .= "AND ordering >= '" . intval($data["list_order"]) . "'";
				$this->_db->setQuery($q);
				$moveup = $this->_db->loadObjectList();
				foreach ($moveup as $key => $move) {
					$this->_db->setQuery("UPDATE #__vm_product_type SET ordering=ordering+1 WHERE product_type_id='".$move->product_type_id."'");
					$this->_db->query();
				}
			}
			// Moved DOWN in the list order
			else {
				$q = "SELECT product_type_id FROM #__vm_product_type WHERE ";
				$q .= "product_type_id <> '".$data["product_type_id"] . "' ";
				$q .= "AND ordering > '".intval($data["currentpos"])."'";
				$q .= "AND ordering <= '".intval($data["list_order"])."'";
				$this->_db->setQuery($q);
				$movedown = $this->_db->loadObjectList();
				foreach ($movedown as $key => $move) {
					$this->_db->setQuery("UPDATE #__vm_product_type SET ordering=ordering-1 WHERE product_type_id='".$move->product_type_id."'");
					$this->_db->query();
				}

			}
		} // END Re-Ordering

		return $cids[0];
    }

    /**
    * Count products using this product type
    * @author RolandD
    */
    public function getProductCount($product_type_id) {
    	$count  = "SELECT COUNT(*) AS num_rows FROM #__vm_product p
    		LEFT JOIN #__vm_product_product_type_xref x
    		ON p.product_id = x.product_id
    		WHERE x.product_type_id = ".$product_type_id."
    		AND p.product_parent_id = 0
    		ORDER BY published DESC, product_name";
		$this->_db->setQuery($count);
		return $this->_db->loadResult();
    }

    /**
    * Count parameters using this product type
    * @author RolandD
    */
    public function getParameterCount($product_type_id) {
    	$count  = "SELECT count(*) AS num_rows
    		FROM #__vm_product_type_parameter
    		WHERE product_type_id = ".$product_type_id;
		$this->_db->setQuery($count);
		return $this->_db->loadResult();
    }

	/**
	 * Publish/Unpublish all the ids selected
     *
     * @author Max Milbers
     * @param boolean $publishId True is the ids should be published, false otherwise.
     * @return boolean True is the publishing was successful, false otherwise.
     */
	public function publish($publishId = false){

		if(!class_exists('modelfunctions')) require(JPATH_VM_ADMINISTRATOR.DS.'helpers'.DS.'modelfunctions.php');
		return modelfunctions::publish('cid','product_type',$publishId);

	}

	/* 
	 *MOVE selected row
	 */
	public function orderChange( $inc = 1){

	$cid = JRequest::getVar( 'cid', array(0), '', 'array' );
	$row = $this->getTable('product_type' );
	$row->load( $cid[0] );
	return ($row->move( $inc ));
	}
	/* 
	 * reorder all rows
	 * 
	 */
	public function saveOrder( ){

	$cid = JRequest::getVar( 'cid', array(0), '', 'array' );
	$total		= count( $cid );
	$order 		= JRequest::getVar( 'order', array(0), 'post', 'array' );
	JArrayHelper::toInteger($order, array(0));
	$row = $this->getTable('product_type' );
		// update ordering values
	for( $i=0; $i < $total; $i++ ) {
		$row->load( (int) $cid[$i] );
		if ($row->ordering != $order[$i]) {
			$row->ordering = $order[$i];
			if (!$row->store()) {
				JError::raiseError(500, $this->_db->getErrorMsg());
			}
		}
	}
		$row->reorder();
	return true ;
	}
    /**
    * Get the position where the product type needs to be
    * @author RolandD
    * @return string Dropdown list with product types
    */
    public function getListOrder($product_type_id=0, $list_order=0) {

    	$options = array();
		if (!$product_type_id) {
			return JText::_('COM_VIRTUEMART_CMN_NEW_ITEM_LAST');
		}
		else {

			$q  = "SELECT ordering, product_type_name FROM #__vm_product_type ";
			/*if ($product_type_id) {
				$q .= 'WHERE product_type_id='.$product_type_id;
			}*/
			$q .= " ORDER BY ordering ASC";
			$this->_db->setQuery($q);
			$producttypes = $this->_db->loadObjectList();

			foreach ($producttypes as $key => $producttype) {
				$options[] = JHTML::_('select.option', $producttype->ordering, $producttype->ordering.". ".$producttype->product_type_name);
			}
			return JHTML::_('select.genericlist', $options, 'list_order', '', 'value', 'text', $list_order);
		}
    }
	
	/* Add product types in product */
	public function  getProductProducttypes($product_id) {
		/* get types of product*/
		 $q = "SELECT x.product_type_id , product_type_name, product_type_description
			 FROM `#__vm_product_product_type_xref` as x
			 LEFT JOIN #__vm_product_type on #__vm_product_type.product_type_id = x.product_type_id
			 WHERE published = 1 and product_id = ".$product_id."
			 ORDER BY ordering";
		$this->_db->setQuery($q);
		$types = $this->_db->loadObjectList();

		foreach ($types as $type) {
		/* get each parameter details*/
			$q  = 'SELECT * FROM #__vm_product_type_parameter WHERE 
				product_type_id='.$type->product_type_id.' 
				ORDER BY ordering';	
			$this->_db->setQuery($q);
			$type->parameter = $this->_db->loadObjectList();
			
			/* get parameter value of product */
			$q = "SELECT * FROM `#__vm_product_type_".$type->product_type_id."` 
				WHERE product_id = ".$product_id;
			$this->_db->setQuery($q);
			$type->value = $this->_db->loadAssocList();
		}
		return $types;
	}
	public function  saveProductProducttypes($tables) {
		foreach ($tables as $key => $table) {
			/* Insert type Fields and value */
			$fields = implode(',' ,array_keys($table) );
			foreach ($table as & $value) {
				if (is_array($value)) $value = implode(";", $value);
			}
			$values = implode("','", $table);
			
			$q = 'REPLACE INTO #__vm_product_type_'.$key.' ( product_id,'.$fields.' )';
			$q .= " VALUES( '".$product_data->product_id."', '". $values ."') ";
			$this->_db->setQuery($q);
			$this->_db->query();
		}
		
	}
}
// pure php no closing tag