<?php
defined( '_VALID_MOS' ) or die( 'Direct Access to this location is not allowed.' );
/**
*
* @version $Id: usergroup.class.php 474 2006-11-08 19:59:17Z soeren_nb $
* @package VirtueMart
* @subpackage classes
* @copyright Copyright (C) 2004-2005 Soeren Eberhardt. All rights reserved.
* @license http://www.gnu.org/copyleft/gpl.html GNU/GPL, see LICENSE.php
* VirtueMart is free software. This version may have been modified pursuant
* to the GNU General Public License, and as distributed it includes or
* is derivative of works licensed under the GNU General Public License or
* other free or open source software licenses.
* See /administrator/components/com_virtuemart/COPYRIGHT.php for copyright notices and details.
*
* http://virtuemart.net
*/


/**
 * This class is is used to manage the function register.
 *
 */
class vmUserGroup extends vmAbstractObject {
	
	var $_table_name = "#__{vm}_auth_group";
	var $_key = 'group_id';
	var $_protected_groups = array('admin','storeadmin','shopper');

	function vmUserGroup() {
		$this->addRequiredField( array('group_name', 'group_level') );
		$this->addUniqueField( 'group_name' );
	}
	/**
    * Validates adding a function to a module.
    *
    * @param array $d
    * @return boolean
    */
	function validate_add( &$d ) {
		global $vmLogger;
		
		return $this->validate( $d );
	}

	/**
	 * Validates updating a module function
	 *
	 * @param array $d
	 * @return boolean
	 */
	function validate_update($d) {
		global $vmLogger;
		$db = $this->get_group($group);
		
		if( in_array( $db->f('group_name'), $this->_protected_groups ))  {
			$vmLogger->err( 'The group '.$db->f('group_name').' cannot be renamed!' );
			return false;
		}
		return $this->validate( $d );
		
	}
	
	/**
	 * Validates deleting a function record
	 *
	 * @param array $d
	 * @return boolean
	 */
	function validate_delete($group) {
		global $perm, $vmLogger;
		
		if (empty($group)) {
			$vmLogger->err( 'Please select a user group to delete.' );
			return False;
		}
		$db = $this->get_group($group);
		
		if( in_array( $db->f('group_name'), $this->_protected_groups ))  {
			$vmLogger->err( 'The group '.$db->f('group_name').' cannot be removed or modified!' );
			return false;
		}
		return true;
	}


	/**
	 * Creates a new function record
	 * @author pablo, soeren
	 *
	 * @param array $d
	 * @return boolean
	 */
	function add(&$d) {
			
		$db = new ps_DB;
		$timestamp = time();

		if (!$this->validate_add($d)) {
			return False;
		}

		$fields = array( 'group_name' => $d["group_name"],
						'group_level' => (int)$d["group_level"]
						);
		$db->buildQuery( 'INSERT', $this->_table_name, $fields );
		
		$db->query();
		
		$_REQUEST['function_id'] = $db->last_insert_id();
		return True;

	}

	/**
	 * updates function information
	 * @author pablo, soeren
	 * 
	 * @param array $d
	 * @return boolean
	 */
	function update(&$d) {
		
		$db = new ps_DB;
		$timestamp = time();

		if (!$this->validate_update($d)) {
			return False;
		}
		$fields = array( 'group_name' => $d["group_name"],
						'group_level' => (int)$d["group_level"]
						);
		$db->buildQuery( 'UPDATE', $this->_table_name, $fields, 'WHERE '.$this->_key.'='.(int)$d[$this->_key] );
		$db->query();
		
		return True;
	}

	/**
	 * Delete a function, but check permissions before
	 *
	 * @param array $d
	 * @return boolean
	 */
	function delete(&$d) {
		$db = new ps_DB;

		$record_id = $d[$this->_key];

		if( is_array( $record_id)) {
			foreach( $record_id as $record) {
				if (!$this->validate_delete($record)) {
					return False;
				}
				if( !$this->delete_record( $record, $d )) {
					return false;
				}
			}
			return true;
		}
		else {
			if (!$this->validate_delete($record_id)) {
				return False;
			}
			return $this->delete_record( $record_id, $d );
		}
	}
	/**
	* Deletes one Record.
	*/
	function delete_record( $record_id, &$d ) {
		global $db;
		$q = "DELETE FROM `{$this->_table_name}` WHERE {$this->_key} =".(int)$record_id;
		$db->query($q);
		return True;
	}

	/**
	 * Returns an information array about the function $func
	 *
	 * @param string $func
	 * @return mixed
	 */
	function get_group($group) {
		$db = new ps_DB;
		$result = array();
		
		$query ='SELECT group_id,group_name,group_level FROM `'.$this->_table_name.'`';
		if( is_int($group)) {
			$query.=' WHERE group_id='.$group;
		} else {
			$query.=' WHERE group_name=\''.$db->getEscaped($group).'\'';
		}
		$db->query( $query );
		$db->next_record();
		return $db;
	}

}

?>