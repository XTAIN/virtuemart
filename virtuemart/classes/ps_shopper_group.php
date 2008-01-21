<?php
if( !defined( '_VALID_MOS' ) && !defined( '_JEXEC' ) ) die( 'Direct Access to '.basename(__FILE__).' is not allowed.' );
/**
*
* @version $Id$
* @package VirtueMart
* @subpackage classes
* @copyright Copyright (C) 2004-2007 soeren - All rights reserved.
* @license http://www.gnu.org/copyleft/gpl.html GNU/GPL, see LICENSE.php
* VirtueMart is free software. This version may have been modified pursuant
* to the GNU General Public License, and as distributed it includes or
* is derivative of works licensed under the GNU General Public License or
* other free or open source software licenses.
* See /administrator/components/com_virtuemart/COPYRIGHT.php for copyright notices and details.
*
* http://virtuemart.net
*/

class ps_shopper_group {
	var $classname = "ps_shopper_group";
	var $id = "";
	var $error;

	/**************************************************************************
	** name: validate
	** created by:
	** description:
	** parameters:
	** returns:
	***************************************************************************/
	function validate_add($d) {
		$db = new ps_DB;
		$ps_vendor_id = $_SESSION["ps_vendor_id"];

		if (empty($d["shopper_group_name"])) {
			$GLOBALS['vmLogger']->err('You must enter a shopper group name.' );
			return False;
		}
		else {
			$q = "SELECT count(*) as num_rows from #__{vm}_shopper_group";
			$q .= " WHERE shopper_group_name='" . $d["shopper_group_name"] . "'";
			$q .= " AND vendor_id='" . $ps_vendor_id . "'";

			$db->query($q);
			$db->next_record();
			if ($db->f("num_rows") > 0) {
				$GLOBALS['vmLogger']->err('Shopper group already exists for this vendor.' );
				return False;
			}
			else {
				return True;
			}
		}
		if (empty($d["shopper_group_discount"])) {
			$d["shopper_group_discount"] = 0;
		}
	}

	/**************************************************************************
	** name: validate
	** created by:
	** description:
	** parameters:
	** returns:
	***************************************************************************/
	function validate_update($d) {

		if (!$d["shopper_group_name"]) {
			$GLOBALS['vmLogger']->err('You must enter a shopper group name.' );
			return False;
		}
		if (empty($d["shopper_group_discount"])) {
			$d["shopper_group_discount"] = 0;
		}

		return True;
	}

	/**************************************************************************
	** name: validate
	** created by:
	** description:
	** parameters:
	** returns:
	***************************************************************************/
	function validate_delete( $shopper_group_id, &$d) {

		$db = new ps_DB;

		if (!$shopper_group_id) {
			$GLOBALS['vmLogger']->err('Please select a shopper group to delete.' );
			return False;
		}

		$q = "SELECT shopper_group_id FROM #__{vm}_shopper_group WHERE shopper_group_id='";
		$q .= $shopper_group_id . "' AND `default`='1'";
		$db->query($q);
		if ($db->next_record()) {
			$GLOBALS['vmLogger']->err('Cannot delete the default shopper group.' );
			return False;
		}

		return True;
	}

	/**************************************************************************
	* name: add()
	* created by:
	* description:
	* parameters:
	* returns:
	**************************************************************************/
	function add(&$d) {
		global $perm, $vmLogger;
		$hash_secret = "virtuemart";
		if( $perm->check( "admin" ) ) {
			$vendor_id = $d["vendor_id"];
		}
		else {
			$vendor_id = $_SESSION["ps_vendor_id"];
		}

		$db = new ps_DB;
		$timestamp = time();
		$default = @$d["default"]=="1" ? "1" : "0";

		if (!$this->validate_add($d)) {
			return False;
		}
		$user_id=md5(uniqid($hash_secret));
		$fields = array('vendor_id' => $vendor_id,
						'shopper_group_name' => $d["shopper_group_name"],
						'shopper_group_desc' => $d["shopper_group_desc"],
						'shopper_group_discount' => $d["shopper_group_discount"],
						'show_price_including_tax' => $d["show_price_including_tax"],
						'default' => $default
					);
		$db->buildQuery( 'INSERT', '#__{vm}_shopper_group', $fields );
		if( $db->query() ) {
			$_REQUEST['shopper_group_id'] = $db->last_insert_id();
			$GLOBALS['vmLogger']->info('The Shopper Group has been added.');
			return $_REQUEST['shopper_group_id'];
		}
		return false;
	}

	/**************************************************************************
	* name: update()
	* created by:
	* description:
	* parameters:
	* returns:
	**************************************************************************/
	function update($d) {
		global $perm;

		if( $perm->check( "admin" ) ) {
			$vendor_id = $d["vendor_id"];
		}
		else {
			$vendor_id = $_SESSION["ps_vendor_id"];
		}
		$db = new ps_DB;
		$timestamp = time();
		$default = @$d["default"]=="1" ? "1" : "0";

		if (!$this->validate_update($d)) {
			return false;
		}
		$fields = array('vendor_id' => $vendor_id,
						'shopper_group_name' => $d["shopper_group_name"],
						'shopper_group_desc' => $d["shopper_group_desc"],
						'shopper_group_discount' => $d["shopper_group_discount"],
						'show_price_including_tax' => $d["show_price_including_tax"],
						'default' => $default
					);
		$db->buildQuery( 'UPDATE', '#__{vm}_shopper_group', $fields, 'WHERE shopper_group_id=' . (int)$d["shopper_group_id"] );
		if( $db->query() ) {
			$_REQUEST['shopper_group_id'] = $db->last_insert_id();
			$GLOBALS['vmLogger']->info('The Shopper Group has been updated.');
			
			if ($default == "1") {
				$q = "UPDATE #__{vm}_shopper_group ";
				$q .= "SET `default`='0' ";
				$q .= "WHERE shopper_group_id != '" . $d["shopper_group_id"] . "' ";
				$q .= "AND vendor_id = '$vendor_id' ";
				$db->query($q);
				$db->next_record();
			}
			return true;
		}
		return false;
	}

	/**
	* Controller for Deleting Records.
	*/
	function delete(&$d) {

		$record_id = $d["shopper_group_id"];

		if( is_array( $record_id)) {
			foreach( $record_id as $record) {
				if( !$this->delete_record( $record, $d ))
				return false;
			}
			return true;
		}
		else {
			return $this->delete_record( $record_id, $d );
		}
	}
	/**
	* Deletes one Record.
	*/
	function delete_record( $record_id, &$d ) {
		global $db;

		if ($this->validate_delete( $record_id, $d)) {
			$q = "DELETE FROM #__{vm}_shopper_group WHERE shopper_group_id='$record_id'";
			$db->query($q);
			$db->next_record();

			$q = "DELETE FROM #__{vm}_shopper_vendor_xref WHERE shopper_group_id='$record_id'";
			$db->query($q);
			$db->next_record();

			$q = "DELETE FROM #__{vm}_product_price WHERE shopper_group_id='$record_id'";
			$db->query($q);
			$db->next_record();
			return True;
		}
		else {
			return False;
		}
	}

	/**************************************************************************
	** name: list_shopper_groups
	** created by:
	** description:
	** parameters:
	** returns:
	***************************************************************************/
	function list_shopper_groups($name,$shopper_group_id='0',$product_id='0', $extra='') {
		$ps_vendor_id = $_SESSION["ps_vendor_id"];
		global $perm;
		$db = new ps_DB;

		if( !$perm->check("admin")) {
			$q  = "SELECT shopper_group_id,shopper_group_name,vendor_id,'' AS vendor_name FROM #__{vm}_shopper_group ";
			$q .= "WHERE vendor_id = '$ps_vendor_id' ";
		}
		else {
			$q  = "SELECT shopper_group_id,shopper_group_name,#__{vm}_shopper_group.vendor_id,vendor_name FROM #__{vm}_shopper_group ";
			$q .= ",#__{vm}_vendor WHERE #__{vm}_shopper_group.vendor_id = #__{vm}_vendor.vendor_id ";
		}
		$q .= "ORDER BY shopper_group_name";
		$db->query($q);
		while ($db->next_record()) {
			$shopper_groups[$db->f("shopper_group_id")] = $db->f("shopper_group_name"); // . '; '.$db->f('vendor_name').' (Vendor ID: '.$db->f('vendor_id').")";			
		}
		return ps_html::selectList( $name, $shopper_group_id, $shopper_groups, 1, '', $extra );
	}

	/**************************************************************************
	** name: get_field
	** created by: pablo
	** description:
	** parameters:
	** returns:
	***************************************************************************/
	function get_field($shopper_group_id, $field_name) {
		$db = new ps_DB;

		$q =  "SELECT $field_name FROM shopper_group ";
		$q .= "WHERE shopper_group_id='$shopper_group_id'";
		$db->query($q);
		if ($db->next_record()) {
			return $db->f($field_name);
		}
		else {
			return False;
		}
	}
	/**************************************************************************
	** name: get_id
	** created by: ekkehard
	** description:
	** parameters:
	** returns:
	***************************************************************************/
	function get_id() {
		$auth = $_SESSION['auth'];

		$db = new ps_DB;

		$q =  "SELECT #__{vm}_shopper_group.shopper_group_id FROM #__{vm}_shopper_group,#__{vm}_shopper_vendor_xref ";
		$q .= "WHERE #__{vm}_shopper_vendor_xref.user_id='" . $auth["user_id"] . "' ";
		$q .= "AND #__{vm}_shopper_group.shopper_group_id=#__{vm}_shopper_vendor_xref.shopper_group_id";
		$db->query($q);
		$db->next_record();

		return $db->f("shopper_group_id");


	}

	/**************************************************************************
	** name: get_shoppergroup_by_id
	** created by: ekkehard
	** description:
	** parameters:
	** returns:
	***************************************************************************/
  	function get_shoppergroup_by_id($id, $default_group = false) {
    	global $my;
    	$ps_vendor_id = vmGet($_SESSION, 'ps_vendor_id', 1 );
    	$db = new ps_DB;

    	$q =  "SELECT #__{vm}_shopper_group.shopper_group_id, show_price_including_tax, `default`, shopper_group_discount 
    		FROM `#__{vm}_shopper_group`";
    	if( !empty( $my->id ) && !$default_group) {
      		$q .= ",`#__{vm}_shopper_vendor_xref`";
      		$q .= " WHERE #__{vm}_shopper_vendor_xref.user_id='" . $id . "' AND ";
      		$q .= "#__{vm}_shopper_group.shopper_group_id=#__{vm}_shopper_vendor_xref.shopper_group_id";
    	}
    	else {
    		$q .= " WHERE #__{vm}_shopper_group.vendor_id='$ps_vendor_id' AND `default`='1'";
    	}
    	$db->query($q);
    	if ($db->next_record()){ //not sure that is is filled in database (Steve)
            $group["shopper_group_id"] = $db->f("shopper_group_id");
            $group["shopper_group_discount"] = $db->f("shopper_group_discount");
            $group["show_price_including_tax"] = $db->f("show_price_including_tax");
            $group["default_shopper_group"] = $db->f("default");
        }
        else {
			$q = "SELECT #__{vm}_shopper_group.shopper_group_id, show_price_including_tax, `default`, shopper_group_discount 
    				FROM `#__{vm}_shopper_group`
    				WHERE #__{vm}_shopper_group.vendor_id='$ps_vendor_id' AND `default`='1'";
			$db->query($q);
			$db->next_record();
			$group["shopper_group_id"] = $db->f("shopper_group_id");
            $group["shopper_group_discount"] = $db->f("shopper_group_discount");
            $group["show_price_including_tax"] = $db->f("show_price_including_tax");
            $group["default_shopper_group"] = $db->f("default");
	    	
        }
    	return $group;
  	}
  	/**
  	 * Creates superglobals with the information regarding the default shopper group
  	 *
  	 */
  	function makeDefaultShopperGroupInfo() {
  		$vendor_id  =$_SESSION['ps_vendor_id'];
  		
		if( empty($GLOBALS['vendor_info'][$vendor_id]['default_shopper_group_id']) ) {
			$db = new ps_DB;
			// Get the default shopper group id for this vendor
			$q = "SELECT shopper_group_id,shopper_group_discount FROM #__{vm}_shopper_group WHERE ";
			$q .= "vendor_id='$vendor_id' AND `default`='1'";
			$db->query( $q );
			$db->next_record();
			$GLOBALS['vendor_info'][$vendor_id]['default_shopper_group_id'] = $default_shopper_group_id = $db->f("shopper_group_id");
			$GLOBALS['vendor_info'][$vendor_id]['default_shopper_group_discount']= $default_shopper_group_discount = $db->f("shopper_group_discount");
			unset( $db );
		}
  	}
	/**************************************************************************
	** name: get_customer_num
	** created by: soeren
	** description:
	** parameters:
	** returns:
	***************************************************************************/
	function get_customer_num($id) {

		$db = new ps_DB;

		$q =  "SELECT customer_number FROM #__{vm}_shopper_vendor_xref ";
		$q .= "WHERE user_id='" . $id . "' ";
		$db->query($q);
		$db->next_record();

		return $db->f("customer_number");

	}


}
$ps_shopper_group = new ps_shopper_group;

?>
