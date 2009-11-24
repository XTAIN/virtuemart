<?php
/**
 * Data module for updates and migrations
 *
 * @package	VirtueMart
 * @subpackage updatesMigration
 * @author Max Milbers, RickG
 * @copyright Copyright (c) 2009 VirtueMart Team. All rights reserved.
 */

// no direct access
defined('_JEXEC') or die('Restricted access');

jimport( 'joomla.application.component.model');

/**
 * Model class for updates and migrations
 *
 * @package	VirtueMart
 * @subpackage updatesMigration
 * @author Max Milbers, RickG
 */
class VirtueMartModelUpdatesMigration extends JModel
{      
	/**
	 * Parse a sql file executing each sql statement found.
	 *
	 * @author Max Milbers
	 */    
	function execSQLFile($sqlfile) 
	{ 
		// Check that sql files exists before reading. Otherwise raise error for rollback
		if ( !file_exists($sqlfile) ) {
			return false;
		}
		$buffer = file_get_contents($sqlfile);

		// Graceful exit and rollback if read not successful
		if ( $buffer == false ) {
			return false;
		}

		// Create an array of queries from the sql file
		jimport('joomla.installer.helper');
		$queries = JInstallerHelper::splitSql($buffer);

		if (count($queries) == 0) {
			// No queries to process
			return 0;
		}
		$db = JFactory::getDBO();
		// Process each query in the $queries array (split out of sql file).
		foreach ($queries as $query)
		{
			$query = trim($query);
			if ($query != '' && $query{0} != '#') {
				$db->setQuery($query);
				if (!$db->query()) {
					JError::raiseWarning(1, 'JInstaller::install: '.JText::_('SQL Error')." ".$db->stderr(true));
					return false;
				}
			}
		}
			      
    	return true; 
	}    
	
	
	/**
	 * Add existing Joomla users into the Virtuemart database.
	 *
	 * @author Max Milbers. RickG
	 */
	function integrateJoomlaUsers()
	{
		$db = JFactory::getDBO();
		$query = "SELECT `id`, `registerDate`, `lastvisitDate` FROM `#__users`";
		$db->setQuery($query);
		$row = $db->loadObjectList();
	
		foreach ($row as $user) {
			$query = "INSERT INTO `#__vm_shopper_vendor_xref` VALUES ('" . $user->id . "', '1', '5', '')"; 
			$db->setQuery($query);
			if (!$db->query()) {
				JError::raiseNotice(1, 'integrateJUsers INSERT '.$user->id.' INTO #__vm_shopper_vendor_xref FAILED' );
			}
			
			$query = "INSERT INTO `#__vm_user_info` (`user_info_id`, `user_id`, `address_type`, `cdate`, `mdate`) ";
			$query .= "VALUES( '" . md5(uniqid('virtuemart')) . "', '" . $user->id . "', 'BT', UNIX_TIMESTAMP('" . $user->registerDate . "'), UNIX_TIMESTAMP('" . $user->lastvisitDate."'))";
			$db->setQuery($query);
			if (!$db->query()) {
				JError::raiseNotice(1, 'integrateJUsers INSERT '.$user->id.' INTO #__vm_user_info FAILED' );
			}
		}
	}	
	
	
	/**
	 * @author Max Milbers
	 */	
	function determineStoreOwner(){
		global $hVendor;
		if(empty($hVendor)){
			require_once(JPATH_ROOT.DS.'administrator'.DS.'components'.DS.'com_virtuemart'.DS.'helpers'.DS.'vendor_helper.php');
			$hVendor = new vendor_helper;
		}
		$vendorid= 1;
		$user_id = $hVendor->getUserIdByVendorId($vendorid);
		if(isset($user_id)){
			$user = JFactory::getUser($user_id);
		}else{
			$user = JFactory::getUser();
		}
		
		$id = $user -> id;
		$this -> storeOwnerId = $id;
		$this -> userUserName = $user->username;
		$this -> userName = $user->name;
		return $id;
	}
	
	
	/**
	 * @author Max Milbers
	 */		
	function setStoreOwner($userId=0){
		
		if(empty($userId)){
			$userId = $this ->determineStoreOwner();
		}
		
		$oldUserId	= "";
		$oldVendorId = "";
		
		$db = JFactory::getDBO();
		
		$db->setQuery('SELECT * FROM  `#__vm_auth_user_vendor` WHERE `vendor_id`= "1" ');
		$db->query();
		$oldVendorId = $db->loadResult();
//		JError::raiseNotice(1, '$oldVendorId = '.$oldVendorId);
		
		$db->setQuery('SELECT * FROM  `#__vm_auth_user_vendor` WHERE `user_id`= "'.$userId.'" ');
		$db->query();
		$oldUserId = $db->loadResult();
//		JError::raiseNotice(1, '$oldUserId = '.$oldUserId);
		
		if(!isset($oldVendorId) && !isset($oldUserId)){
			$db->setQuery( 'INSERT `#__vm_auth_user_vendor` (`user_id`, `vendor_id`) VALUES ("'.$userId.'", "1")' );
			if($db->query() == false ) {
				JError::raiseNotice(1, 'setStoreOwner '.$userId.' was not possible to execute INSERT __vm_auth_user_vendor');
			} else {
				JError::raiseNotice(1, 'setStoreOwner INSERT __vm_auth_user_vendor '.$userId);
			}			
		}else{
			if(!isset($oldUserId)) {
				$db->setQuery( 'UPDATE `#__vm_auth_user_vendor` SET `user_id` ="'.$userId.'" WHERE `vendor_id` = "1" ');
			}else{
				$db->setQuery( 'UPDATE `#__vm_auth_user_vendor` SET `vendor_id` = "1" WHERE `user_id` ="'.$userId.'" ');
			}
			if($db->query() == false ) {
				
			}
		}
	
/*		$db->setQuery('SELECT `vendor_id` FROM  `#__vm_vendor` WHERE `vendor_id`= "1" ');
		$db->query();
		$oldVendorId = $db->loadResult();
//		JError::raiseNotice(1, '$oldVendorId = '.$oldVendorId);
		if(!isset($oldVendorId)){
			$db->setQuery( 'INSERT INTO `#__vm_vendor` (
										`vendor_id` ,
										`vendor_name` ,
										`vendor_phone` ,
										`vendor_store_name` ,
										`vendor_store_desc` ,
										`vendor_category_id` ,
										`vendor_thumb_image` ,
										`vendor_full_image` ,
										`vendor_currency` ,
										`cdate` ,
										`mdate` ,
										`vendor_image_path` ,
										`vendor_terms_of_service` ,
										`vendor_url` ,
										`vendor_min_pov` ,
										`vendor_freeshipping` ,
										`vendor_currency_display_style` ,
										`vendor_accepted_currencies` ,
										`vendor_address_format` ,
										`vendor_date_format`
				) VALUES (
"1", NULL , NULL , "", NULL , NULL , NULL , NULL , NULL , NULL , NULL , NULL , "", "", NULL , "0.00", "", "", "", "");' );
		} else {
		//	$db->setQuery( 'UPDATE INTO `#__vm_vendor` SET `vendor_id` VALUES ("1")' );
		}
		$db->query();
*/		
		
		$db->setQuery( 'UPDATE `#__vm_user_info` SET `user_is_vendor` = "1" WHERE `user_id` ="'.$userId.'"');
//		$db->query();
		if($db->query() === false ) {
			JError::raiseNotice(1, 'setStoreOwner failed Update. User with id = '.$userId.' not found in table');
			return 0;
		}else{
			return $this -> storeOwnerId;
		}
	
	}	
	
	
	/**
	 * @author Max Milbers
	 */		
	function setUserToShopperGroup(){
		# insert the user <=> group relationship
		$db = JFactory::getDBO();
		$db->setQuery( "INSERT INTO `#__vm_auth_user_group` 
				SELECT user_id, 
					CASE `perms` 
					    WHEN 'admin' THEN 0
					    WHEN 'storeadmin' THEN 1
					    WHEN 'shopper' THEN 2
					    WHEN 'demo' THEN 3
					    ELSE 2 
					END
				FROM #__vm_user_info
				WHERE address_type='BT' ");
		$db->query();
	
		$db->setQuery( "UPDATE `#__vm_auth_user_group` SET `group_id` = '0' WHERE `user_id` ='".$this -> userId."' ") ;
		$db->query();
	}
	
	
	function installSample($user_id=null) 
	{
		/*if($user_id==null){
			$user_id = $this -> storeOwnerId;
		}
		$vmLogIdentifier = 'VirtueMart';

		require_once(JPATH_COMPONENT_ADMINISTRATOR.DS."classes".DS."ps_database.php");
		require_once(JPATH_COMPONENT_ADMINISTRATOR.DS."classes".DS."ps_vendor.php");
		require_once(JPATH_COMPONENT_ADMINISTRATOR.DS."classes".DS."ps_user.php");
		require_once(JPATH_COMPONENT_ADMINISTRATOR.DS."classes".DS."ps_perm.php");
		require_once(JPATH_COMPONENT_ADMINISTRATOR.DS."helpers".DS."vendor_helper.php");
		
		global $perm, $hVendor;
		// Instantiate the permission class
		$perm = new ps_perm();
		$hVendor = new vendor_helper;

		$fields = array();
		
		$fields['address_type'] =  "BT";
		$fields['company'] =  "Washupito''s the User";
		$fields['title'] =  "Sire";
		$fields['last_name'] =  "upito";
		$fields['first_name'] =  "Wash";
		$fields['middle_name'] =  "the cheapest";
		$fields['phone_1'] =  "555-555-555";
		$fields['address_1'] =  "vendorra road 8";
		$fields['city'] =  "Canangra";
		$fields['state'] =  "72";
		$fields['country'] =  "13";
		ps_user::setUserInfoWithEmail($fields,$user_id);

		unset($fields);
		$currencyFields = array();
		$currencyFields[0] = 'EUR';
		$currencyFields[1] = 'USD';
		
		$fields = array();
		$fields['vendor_name'] =  "Washupito";
		$fields['vendor_phone'] =  "555-555-1212";
		$fields['vendor_store_name'] =  "Washupito''s Tiendita";
		$fields['vendor_store_desc'] =  " <p>We have the best tools for do-it-yourselfers.  Check us out! </p> <p>We were established in 1969 in a time when getting good tools was expensive, but the quality was good.  Now that only a select few of those authentic tools survive, we have dedicated this store to bringing the experience alive for collectors and master mechanics everywhere.</p> 		<p>You can easily find products selecting the category you would like to browse above.</p>	";
		$fields['vendor_full_image'] =  "c19970d6f2970cb0d1b13bea3af3144a.gif";
		$fields['vendor_currency '] =  "EUR";
		$fields['vendor_accepted_currencies'] = $currencyFields;
		$fields['vendor_currency_display_style'] =  "1|&euro;|2|,|.|0|0";
		$fields['vendor_terms_of_service'] =  "<h5>You haven''t configured any terms of service yet. Click <a href=administrator/index2.php?page=store.store_form&option=com_virtuemart>here</a> to change this text.</h5>";
		$fields['vendor_url'] = JURI::root();
		
		$fields['vendor_name'] =  "Washupito";
		
		ps_vendor::setVendorInfo($fields,$user_id);
		
		$this->execSQLFile("install_sample_data.sql");
		*/
	}		
}
?>