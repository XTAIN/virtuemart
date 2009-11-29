<?php
/**
* @package		VirtueMart
* @license		GNU/GPL, see LICENSE.php
*/

// no direct access
defined('_JEXEC') or die('Restricted access');

jimport( 'joomla.application.component.model');

/**
 * Model for Macola
 *
 * @package		VirtueMart
 */
class VirtueMartModelVirtueMart extends JModel
{
    
    /**
	 * creates a bulleted of the childen of this category if they exist
	 * @author pablo
	 * @param int $category_id
	 * @return string The HTML code
	 */
	function GetVendorDetails($vendor_id) 
	{		
		$db = JFactory::getDBO();

		$query = "SELECT category_id, category_thumb_image, category_child_id, category_name ";
		$query .= "FROM #__vm_category, #__vm_category_xref ";
		$query .= "WHERE #__vm_category_xref.category_parent_id = '$category_id' ";
		$query .= "AND #__vm_category.category_id = #__vm_category_xref.category_child_id ";
		//$query .= "AND #__vm_category.vendor_id = '$hVendor_id' ";
		$query .= "AND #__vm_category.vendor_id = '1' ";
		$query .= "AND #__vm_category.category_publish = 'Y' ";
		$query .= "ORDER BY #__vm_category.list_order, #__vm_category.category_name ASC";
		
		$childList = $this->_getList( $query );
		return $childList;	    
	}


	/**
	 * Gets the total number of customers
	 *
     * @author RickG	 
	 * @return int Total number of customers in the database
	 */
	function getTotalCustomers() {
		$query = 'SELECT `user_id`  FROM `#__vm_user_info` WHERE `address_type` = "BT"';	  		
        return $this->_getListCount($query);
    }

	/**
	 * Gets the total number of active products
	 *
     * @author RickG	 
	 * @return int Total number of active products in the database
	 */
	function getTotalActiveProducts() {
		$query = 'SELECT `product_id` FROM `#__vm_product` WHERE `product_publish`="Y"';	  		
        return $this->_getListCount($query);
    }
    
	/**
	 * Gets the total number of inactive products
	 *
     * @author RickG	 
	 * @return int Total number of inactive products in the database
	 */
	function getTotalInActiveProducts() {
		$query = 'SELECT `product_id` FROM `#__vm_product` WHERE  `product_publish`="N"';
        return $this->_getListCount($query);
    } 
    
	/**
	 * Gets the total number of featured products
	 *
     * @author RickG	 
	 * @return int Total number of featured products in the database
	 */
	function getTotalFeaturedProducts() {
		$query = 'SELECT `product_id` FROM `#__vm_product` WHERE `product_special`="Y"';
        return $this->_getListCount($query);
    }       


	/**
	 * Gets the total number of orders with the given status
	 *
     * @author RickG	 
	 * @return int Total number of orders with the given status
	 */
	function getTotalOrdersByStatus() {
		$query = 'SELECT `#__vm_order_status`.`order_status_name`,'; 
		$query .= '(SELECT count(order_id) FROM `#__vm_orders` WHERE `#__vm_orders`.`order_status` = `#__vm_order_status`.`order_status_code`) as order_count ';
 		$query .= 'FROM `#__vm_order_status`';
        return $this->_getList($query);
    } 


	/**
	 * Gets a list of recent orders
	 *
     * @author RickG	 
	 * @return ObjectList List of recent orders.
	 */
	function getRecentOrders($nbrOrders=5) {
		$query = 'SELECT `order_id`, `order_total` FROM `#__vm_orders` ORDER BY `cdate` desc';
        return $this->_getList($query, 0, $nbrOrders);
    }
    
    
	/**
	 * Gets a list of recent customers
	 *
     * @author RickG	 
	 * @return ObjectList List of recent orders.
	 */
	function getRecentCustomers($nbrCusts=5) {
		$query = 'SELECT `id`, `first_name`, `last_name`, `username` FROM `#__users`, `#__vm_user_info` ';
		$query .= 'WHERE `address_type` = "BT" AND `perms` <> "admin" '; 
        $query .= 'AND `perms` <> "storeadmin" ';
        $query .= 'AND INSTR(`usertype`, "administrator") = 0 AND INSTR(`usertype`, "Administrator") = 0 ';
        $query .= 'AND id = `user_id`';
        return $this->_getList($query, 0, $nbrCusts);
    }  
}  
?>