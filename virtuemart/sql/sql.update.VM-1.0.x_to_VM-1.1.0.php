<?php
defined( '_VALID_MOS' ) or die( 'Direct Access to this location is not allowed.' );
/**
*
* @version $Id:sql.update.VM-1.0.x_to_VM-1.1.0.php 431 2006-10-17 21:55:46 +0200 (Di, 17 Okt 2006) soeren_nb $
* @package VirtueMart
* @subpackage core
* @copyright Copyright (C) 2004-2005 Soeren Eberhardt. All rights reserved.
* @license http://www.gnu.org/copyleft/gpl.html GNU/GPL, see LICENSE.php
* VirtueMart is free software. This version may have been modified pursuant
* to the GNU General Public License, and as distributed it includes or
* is derivative of works licensed under the GNU General Public License or
* other free or open source software licenses.
* See /administrator/components/com_phpshop/COPYRIGHT.php for copyright notices and details.
*
* http://virtuemart.net
*/

$db->query( "CREATE TABLE IF NOT EXISTS `#__{vm}_userfield` (
  `fieldid` int(11) NOT NULL auto_increment,
  `name` varchar(50) NOT NULL default '',
  `title` varchar(255) NOT NULL,
  `description` mediumtext NOT NULL,
  `type` varchar(50) NOT NULL default '',
  `maxlength` int(11) default NULL,
  `size` int(11) default NULL,
  `required` tinyint(4) default '0',
  `ordering` int(11) default NULL,
  `cols` int(11) default NULL,
  `rows` int(11) default NULL,
  `value` varchar(50) default NULL,
  `default` int(11) default NULL,
  `published` tinyint(1) NOT NULL default '1',
  `registration` tinyint(1) NOT NULL default '0',
  `account` tinyint(1) NOT NULL default '1',
  `readonly` tinyint(1) NOT NULL default '0',
  `calculated` tinyint(1) NOT NULL default '0',
  `sys` tinyint(4) NOT NULL default '0',
  `vendor_id` int(11) default NULL,
  `params` mediumtext,
  PRIMARY KEY  (`fieldid`)
) TYPE=MyISAM AUTO_INCREMENT=30 COMMENT='Holds the fields for the user information';" );

## 
## Dumping data for table `#__{vm}_userfield`
## 

$db->query( "INSERT INTO `#__{vm}_userfield` VALUES (1, 'email', '_REGISTER_EMAIL', '', 'emailaddress', 100, 30, 1, 2, NULL, NULL, NULL, NULL, 1, 1, 1, 0, 0, 1, 1, NULL);" );
$db->query( "INSERT INTO `#__{vm}_userfield` VALUES (7, 'title', '_PHPSHOP_SHOPPER_FORM_TITLE', '', 'select', 0, 0, 0, 8, NULL, NULL, NULL, NULL, 1, 1, 1, 0, 0, 1, 1, NULL);" );
$db->query( "INSERT INTO `#__{vm}_userfield` VALUES (3, 'password', '_PHPSHOP_SHOPPER_FORM_PASSWORD_1', '', 'password', 25, 30, 1, 4, NULL, NULL, NULL, NULL, 1, 1, 1, 0, 0, 1, 1, NULL);" );
$db->query( "INSERT INTO `#__{vm}_userfield` VALUES (4, 'password2', '_PHPSHOP_SHOPPER_FORM_PASSWORD_2', '', 'password', 25, 30, 1, 5, NULL, NULL, NULL, NULL, 1, 1, 1, 0, 0, 1, 1, NULL);" );
$db->query( "INSERT INTO `#__{vm}_userfield` VALUES (6, 'company', '_PHPSHOP_SHOPPER_FORM_COMPANY_NAME', '', 'text', 64, 30, 0, 7, NULL, NULL, NULL, NULL, 1, 1, 1, 0, 0, 1, 1, NULL);" );
$db->query( "INSERT INTO `#__{vm}_userfield` VALUES (5, 'delimiter_billto', '_PHPSHOP_USER_FORM_BILLTO_LBL', '', 'delimiter', 25, 30, 0, 6, NULL, NULL, NULL, NULL, 1, 1, 1, 0, 0, 0, 1, NULL);" );
$db->query( "INSERT INTO `#__{vm}_userfield` VALUES (2, 'username', '_REGISTER_UNAME', '', 'text', 25, 30, 1, 3, 0, 0, '', 0, 1, 1, 1, 0, 0, 1, 1, '');" );
$db->query( "INSERT INTO `#__{vm}_userfield` VALUES (8, 'first_name', '_PHPSHOP_SHOPPER_FORM_FIRST_NAME', '', 'text', 32, 30, 1, 9, NULL, NULL, NULL, NULL, 1, 1, 1, 0, 0, 1, 1, NULL);" );
$db->query( "INSERT INTO `#__{vm}_userfield` VALUES (9, 'last_name', '_PHPSHOP_SHOPPER_FORM_LAST_NAME', '', 'text', 32, 30, 1, 10, NULL, NULL, NULL, NULL, 1, 1, 1, 0, 0, 1, 1, NULL);" );
$db->query( "INSERT INTO `#__{vm}_userfield` VALUES (10, 'middle_name', '_PHPSHOP_SHOPPER_FORM_MIDDLE_NAME', '', 'text', 32, 30, 0, 11, NULL, NULL, NULL, NULL, 1, 1, 1, 0, 0, 1, 1, NULL);" );
$db->query( "INSERT INTO `#__{vm}_userfield` VALUES (11, 'address_1', '_PHPSHOP_SHOPPER_FORM_ADDRESS_1', '', 'text', 64, 30, 1, 12, NULL, NULL, NULL, NULL, 1, 1, 1, 0, 0, 1, 1, NULL);" );
$db->query( "INSERT INTO `#__{vm}_userfield` VALUES (12, 'address_2', '_PHPSHOP_SHOPPER_FORM_ADDRESS_2', '', 'text', 64, 30, 0, 13, NULL, NULL, NULL, NULL, 1, 1, 1, 0, 0, 1, 1, NULL);" );
$db->query( "INSERT INTO `#__{vm}_userfield` VALUES (13, 'city', '_PHPSHOP_SHOPPER_FORM_CITY', '', 'text', 32, 30, 1, 14, NULL, NULL, NULL, NULL, 1, 1, 1, 0, 0, 1, 1, NULL);" );
$db->query( "INSERT INTO `#__{vm}_userfield` VALUES (14, 'zip', '_PHPSHOP_SHOPPER_FORM_ZIP', '', 'text', 32, 30, 1, 15, NULL, NULL, NULL, NULL, 1, 1, 1, 0, 0, 1, 1, NULL);" );
$db->query( "INSERT INTO `#__{vm}_userfield` VALUES (15, 'country', '_PHPSHOP_SHOPPER_FORM_COUNTRY', '', 'select', 0, 0, 1, 16, NULL, NULL, NULL, NULL, 1, 1, 1, 0, 0, 1, 1, NULL);" );
$db->query( "INSERT INTO `#__{vm}_userfield` VALUES (16, 'state', '_PHPSHOP_SHOPPER_FORM_STATE', '', 'select', 0, 0, 1, 17, NULL, NULL, NULL, NULL, 1, 1, 1, 0, 0, 1, 1, NULL);" );
$db->query( "INSERT INTO `#__{vm}_userfield` VALUES (17, 'phone_1', '_PHPSHOP_SHOPPER_FORM_PHONE', '', 'text', 32, 30, 1, 18, NULL, NULL, NULL, NULL, 1, 1, 1, 0, 0, 1, 1, NULL);" );
$db->query( "INSERT INTO `#__{vm}_userfield` VALUES (18, 'phone_2', '_PHPSHOP_SHOPPER_FORM_PHONE2', '', 'text', 32, 30, 0, 19, NULL, NULL, NULL, NULL, 1, 1, 1, 0, 0, 1, 1, NULL);" );
$db->query( "INSERT INTO `#__{vm}_userfield` VALUES (19, 'fax', '_PHPSHOP_SHOPPER_FORM_FAX', '', 'text', 32, 30, 0, 20, NULL, NULL, NULL, NULL, 1, 1, 1, 0, 0, 1, 1, NULL);" );
$db->query( "INSERT INTO `#__{vm}_userfield` VALUES (20, 'delimiter_bankaccount', '_PHPSHOP_ACCOUNT_BANK_TITLE', '', 'delimiter', 25, 30, 0, 21, NULL, NULL, NULL, NULL, 1, 0, 1, 0, 0, 0, 1, NULL);" );
$db->query( "INSERT INTO `#__{vm}_userfield` VALUES (21, 'bank_account_holder', '_PHPSHOP_ACCOUNT_LBL_BANK_ACCOUNT_HOLDER', '', 'text', 48, 20, 0, 22, NULL, NULL, NULL, NULL, 1, 0, 1, 0, 0, 1, 1, NULL);" );
$db->query( "INSERT INTO `#__{vm}_userfield` VALUES (22, 'bank_account_nr', '_PHPSHOP_ACCOUNT_LBL_BANK_ACCOUNT_NR', '', 'text', 32, 20, 0, 23, NULL, NULL, NULL, NULL, 1, 0, 1, 0, 0, 1, 1, NULL);" );
$db->query( "INSERT INTO `#__{vm}_userfield` VALUES (23, 'bank_sort_code', '_PHPSHOP_ACCOUNT_LBL_BANK_SORT_CODE', '', 'text', 16, 20, 0, 24, NULL, NULL, NULL, NULL, 1, 0, 1, 0, 0, 1, 1, NULL);" );
$db->query( "INSERT INTO `#__{vm}_userfield` VALUES (24, 'bank_name', '_PHPSHOP_ACCOUNT_LBL_BANK_NAME', '', 'text', 32, 20, 0, 25, NULL, NULL, NULL, NULL, 1, 0, 1, 0, 0, 1, 1, NULL);" );
$db->query( "INSERT INTO `#__{vm}_userfield` VALUES (25, 'bank_account_type', '_PHPSHOP_ACCOUNT_LBL_ACCOUNT_TYPE', '', 'select', 0, 0, 0, 26, 0, 0, '', 0, 1, 0, 1, 1, 0, 1, 1, '');" );
$db->query( "INSERT INTO `#__{vm}_userfield` VALUES (26, 'bank_iban', '_PHPSHOP_ACCOUNT_LBL_BANK_IBAN', '', 'text', 64, 20, 0, 27, NULL, NULL, NULL, NULL, 1, 0, 1, 0, 0, 1, 1, NULL);" );
$db->query( "INSERT INTO `#__{vm}_userfield` VALUES (27, 'delimiter_sendregistration', '_BUTTON_SEND_REG', '', 'delimiter', 25, 30, 0, 28, NULL, NULL, NULL, NULL, 1, 1, 0, 0, 0, 0, 1, NULL);" );
$db->query( "INSERT INTO `#__{vm}_userfield` VALUES (28, 'agreed', '_PHPSHOP_I_AGREE_TO_TOS', '', 'checkbox', NULL, NULL, 1, 29, NULL, NULL, NULL, NULL, 1, 1, 0, 0, 0, 1, 1, NULL);" );
$db->query( "INSERT INTO `#__{vm}_userfield` VALUES (29, 'delimiter_userinfo', '_PHPSHOP_ORDER_PRINT_CUST_INFO_LBL', '', 'delimiter', NULL, NULL, 0, 1, NULL, NULL, NULL, NULL, 1, 1, 1, 0, 0, 0, 1, NULL);" );
$db->query( "INSERT INTO `#__{vm}_userfield` VALUES (30, 'extra_field_1', '_PHPSHOP_SHOPPER_FORM_EXTRA_FIELD_1', '', 'text', 255, 30, 0, 31, NULL, NULL, NULL, NULL, 0, 1, 1, 0, 0, 0, 1, NULL);" );
$db->query( "INSERT INTO `#__{vm}_userfield` VALUES (31, 'extra_field_2', '_PHPSHOP_SHOPPER_FORM_EXTRA_FIELD_2', '', 'text', 255, 30, 0, 32, NULL, NULL, NULL, NULL, 0, 1, 1, 0, 0, 0, 1, NULL);" );
$db->query( "INSERT INTO `#__{vm}_userfield` VALUES (32, 'extra_field_3', '_PHPSHOP_SHOPPER_FORM_EXTRA_FIELD_3', '', 'text', 255, 30, 0, 33, NULL, NULL, NULL, NULL, 0, 1, 1, 0, 0, 0, 1, NULL);" );
$db->query( "INSERT INTO `#__{vm}_userfield` VALUES (33, 'extra_field_4', '_PHPSHOP_SHOPPER_FORM_EXTRA_FIELD_4', '', 'select', 1, 1, 0, 34, NULL, NULL, NULL, NULL, 0, 1, 1, 0, 0, 0, 1, NULL);" );
$db->query( "INSERT INTO `#__{vm}_userfield` VALUES (34, 'extra_field_5', '_PHPSHOP_SHOPPER_FORM_EXTRA_FIELD_5', '', 'select', 1, 1, 0, 35, NULL, NULL, NULL, NULL, 0, 1, 1, 0, 0, 0, 1, NULL);" );

## --------------------------------------------------------


$db->query( "CREATE TABLE IF NOT EXISTS `#__{vm}_userfield_values` (
  `fieldvalueid` int(11) NOT NULL auto_increment,
  `fieldid` int(11) NOT NULL default '0',
  `fieldtitle` varchar(255) NOT NULL default '',
  `fieldvalue` varchar(255) NOT NULL,
  `ordering` int(11) NOT NULL default '0',
  `sys` tinyint(4) NOT NULL default '0',
  PRIMARY KEY  (`fieldvalueid`)
) TYPE=MyISAM COMMENT='Holds the different values for dropdown and radio lists';" );

$db->query( "INSERT INTO `#__{vm}_userfield_values` VALUES (1, 25, '_PHPSHOP_ACCOUNT_LBL_ACCOUNT_TYPE_BUSINESSCHECKING','Checking', 1, 1);" );
$db->query( "INSERT INTO `#__{vm}_userfield_values` VALUES (2, 25, '_PHPSHOP_ACCOUNT_LBL_ACCOUNT_TYPE_CHECKING', 'Business Checking', 2, 1);" );
$db->query( "INSERT INTO `#__{vm}_userfield_values` VALUES (3, 25, '_PHPSHOP_ACCOUNT_LBL_ACCOUNT_TYPE_SAVINGS', 'Savings', 3, 1);" );

## New functions, required for using the new features
$db->query( "INSERT INTO `#__{vm}_function` VALUES ('', 1, 'userfieldSave', 'ps_userfield', 'savefield', 'add or edit a user field', 'admin');" );
$db->query( "INSERT INTO `#__{vm}_function` VALUES ('', 1, 'userfieldDelete', 'ps_userfield', 'deletefield', '', 'admin');" );
$db->query( "INSERT INTO `#__{vm}_function` VALUES ('', 1, 'changeordering', 'vmAbstractObject.class', 'handleordering', '', 'admin');" );
$db->query( "INSERT INTO `#__{vm}_function` VALUES ('', 2, 'moveProduct', 'ps_product', 'move', 'Move products from one category to another.', 'admin,storeadmin');" );

# http://virtuemart.net/index.php?option=com_smf&Itemid=71&topic=17143.0
$db->query( "INSERT INTO `#__{vm}_function` VALUES ('', 7, 'productAsk', 'ps_communication', 'mail_question', 'Lets the customer send a question about a specific product.', 'none');" );
$db->query( "INSERT INTO `#__{vm}_function` VALUES ('', 7, 'recommendProduct', 'ps_communication', 'sendRecommendation', 'Lets the customer send a recommendation about a specific product to a friend.', 'none');" );

$db->query( "INSERT INTO `#__{vm}_function` VALUES ('', 8, 'ExportUpdate', 'ps_export', 'update', '', 'admin,storeadmin');" );
$db->query( "INSERT INTO `#__{vm}_function` VALUES ('', 8, 'ExportAdd', 'ps_export', 'add', '', 'admin,storeadmin');" );
$db->query( "INSERT INTO `#__{vm}_function` VALUES ('', 8, 'ExportDelete', 'ps_export', 'delete', '', 'admin,storeadmin');" );
$db->query( "INSERT INTO `#__{vm}_function` VALUES ('', 1, 'writeThemeConfig', 'ps_config', 'writeThemeConfig', 'Writes a theme configuration file.', 'admin');" );

$db->query( "ALTER TABLE `#__{vm}_payment_method` ADD `payment_method_discount_is_percent` TINYINT( 1 ) NOT NULL AFTER `payment_method_discount` ,
ADD `payment_method_discount_max_amount` DECIMAL( 10, 2 ) NOT NULL AFTER `payment_method_discount_is_percent` ,
ADD `payment_method_discount_min_amount` DECIMAL( 10, 2 ) NOT NULL AFTER `payment_method_discount_max_amount` ;");

# DHL integration
$db->query( "CREATE TABLE IF NOT EXISTS `#__vm_shipping_label` (
	`order_id` int(11) NOT NULL default '0',
	`shipper_class` varchar(32) default NULL,
	`ship_date` varchar(32) default NULL,
	`service_code` varchar(32) default NULL,
	`special_service` varchar(32) default NULL,
	`package_type` varchar(16) default NULL,
	`order_weight` decimal(10,2) default NULL,
	`is_international` tinyint(1) default NULL,
	`additional_protection_type` varchar(16) default NULL,
	`additional_protection_value` decimal(10,2) default NULL,
	`duty_value` decimal(10,2) default NULL,
	`content_desc` varchar(255) default NULL,
	`label_is_generated` tinyint(1) NOT NULL default '0',
	`tracking_number` varchar(32) default NULL,
	`label_image` blob default NULL,
	`have_signature` tinyint(1) NOT NULL default '0',
	`signature_image` blob default NULL,
	PRIMARY KEY (`order_id`)
) TYPE=MyISAM COMMENT='Stores information used in generating shipping labels'; ");

## Export Modules
$db->query( "CREATE TABLE IF NOT EXISTS `#__{vm}_export` (
  `export_id` int(11) NOT NULL auto_increment,
  `vendor_id` int(11) default NULL,
  `export_name` varchar(255) default NULL,
  `export_desc` text NOT NULL,
  `export_class` varchar(50) NOT NULL,
  `export_enabled` char(1) NOT NULL default 'N',
  `export_config` text NOT NULL,
  `iscore` tinyint(3) NOT NULL default '0',
  PRIMARY KEY  (`export_id`)
) TYPE=MyISAM COMMENT='Export Modules';");

# NEW States
$db->query( "INSERT INTO `#__{vm}_state` (country_id, state_name, state_3_code, state_2_code)
VALUES
    (104, 'Gaza Strip', 'GZS', 'GZ'),
    (104, 'West Bank', 'WBK', 'WB'),
    (104, 'Other', 'OTH', 'OT'),
    (151, 'St. Maarten', 'STM', 'SM'),
    (151, 'Bonaire', 'BNR', 'BN'),
    (151, 'Curacao', 'CUR', 'CR') ;");
# NEW Countries
$db->query( "INSERT INTO `#__{vm}_country` (country_name, country_3_code, country_2_code)
VALUES
    ('East Timor', 'XET', 'XE'),
    ('Jersey', 'XJE', 'XJ'),
    ('St. Barthelemy', 'XSB', 'XB'),
    ('St. Eustatius', 'XSE', 'XU'),
    ('Canary Islands', 'XCA', 'XC');");

# 10.04.2006
$db->query( "ALTER TABLE `#__{vm}_product_reviews` ADD `review_id` INT( 11 ) NOT NULL AUTO_INCREMENT PRIMARY KEY FIRST ;");
$db->query( "ALTER TABLE `#__{vm}_product_reviews` ADD `published` CHAR( 1 ) NOT NULL DEFAULT 'Y';");
$db->query( "ALTER TABLE `#__{vm}_product_reviews` ADD UNIQUE ( `product_id` , `userid` ); ");

$db->query( "ALTER TABLE `#__{vm}_product_votes` ADD PRIMARY KEY ( `product_id` )");
$db->query( "ALTER TABLE `#__{vm}_zone_shipping` DROP INDEX `zone_id` ");

$db->query( "ALTER TABLE `#__{vm}_product_attribute` ADD `attribute_id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY FIRST ;");

# 02.05.2006 Multi-Currency Feature
$db->query( "ALTER TABLE `#__{vm}_vendor` ADD `vendor_accepted_currencies` TEXT NOT NULL " );

# 12.09.2006 improve category listing performance
$db->query( "ALTER TABLE `#__{vm}_category_xref` DROP INDEX `category_xref_category_child_id`;" );
$db->query( "ALTER TABLE `#__{vm}_category_xref` ADD PRIMARY KEY ( `category_child_id` ) ;" );

#13.09.2006 Allow Order Status Descriptions
$db->query( "ALTER TABLE `#__{vm}_order_status` ADD `order_status_description` TEXT NOT NULL AFTER `order_status_name`");

# 06.11.2006 Allow coupon code tracking
$db->query( "ALTER TABLE `#__{vm}_orders` ADD `coupon_code` VARCHAR( 32 ) NULL AFTER `coupon_discount`");

# 08.11.2006 Allowing new user groups
$db->query( "CREATE TABLE `#__{vm}_auth_group` (
	  `group_id` int(11) NOT NULL auto_increment,
	  `group_name` varchar(128) default NULL,
	  `group_level` int(11) default NULL,
	  PRIMARY KEY  (`group_id`)
	) TYPE=MyISAM AUTO_INCREMENT=5 COMMENT='Holds all the user groups' ;");

# these are the default user groups
$db->query( "INSERT INTO `#__{vm}_auth_group` (`group_id`, `group_name`, `group_level`) VALUES (1, 'admin', 0),(2, 'storeadmin', 250),(3, 'shopper', 500),(4, 'demo', 750);" );
		
$db->query( "CREATE TABLE `#__{vm}_auth_user_group` (
	  `user_id` int(11) NOT NULL default '0',
	  `group_id` int(11) default NULL,
	  PRIMARY KEY  (`user_id`)
	) TYPE=MyISAM COMMENT='Maps the user to user groups';");
# insert the user <=> group relationship
$db->query( "INSERT INTO `#__{vm}_auth_user_group` 
				SELECT user_id, 
					CASE `perms` 
					    WHEN 'admin' THEN 0
					    WHEN 'storeadmin' THEN 1
					    WHEN 'shopper' THEN 2
					    WHEN 'demo' THEN 3
					    ELSE 2 
					END
				FROM #__{vm}_user_info
				WHERE address_type='BT';");

$db->query( "INSERT INTO `#__{vm}_function` VALUES 
	(NULL, 1, 'usergroupAdd', 'usergroup.class', 'add', 'Add a new user group', 'admin'),
	(NULL, 1, 'usergroupUpdate', 'usergroup.class', 'update', 'Update an user group', 'admin'),
	(NULL, 1, 'usergroupDelete', 'usergroup.class', 'delete', 'Delete an user group', 'admin');" );

# Marks Child list options
$db->query( "ALTER TABLE `#__{vm}_product` ADD `child_options` varchar(45) default NULL" );
$db->query( "ALTER TABLE `#__{vm}_product` ADD `quantity_options` varchar(45) default NULL" );
$db->query( "ALTER TABLE `#__{vm}_product` ADD  `child_option_ids` varchar(45) default NULL" );
$db->query( "ALTER TABLE `#__{vm}_product` ADD  `product_order_levels` varchar(45) default NULL" );
# Update module and function permissions directly from the lists
$db->query( "INSERT INTO `#__{vm}_function` (`function_id`, `module_id`, `function_name`, `function_class`, `function_method`, `function_description`, `function_perms`) VALUES (null, 1, 'setModulePermissions', 'ps_module', 'update_permissions', '', 'admin'),
(null, 1, 'setFunctionPermissions', 'ps_function', 'update_permissions', '', 'admin')");

# Re-enable downloads and resend Download ID
$db->query( "INSERT INTO `#__{vm}_function` (`function_id`, `module_id`, `function_name`, `function_class`, `function_method`, `function_description`, `function_perms`) VALUES (185, 2, 'insertDownloadsForProduct', 'ps_order', 'insert_downloads_for_product', '', 'admin'),
(186, 5, 'mailDownloadId', 'ps_order', 'mail_download_id', '', 'storeadmin,admin');" );

# 12.04.2007 Cart Storage for registered users
$db->query( "CREATE TABLE IF NOT EXISTS `#__{vm}_cart` (
`user_id` INT( 11 ) NOT NULL ,
`cart_content` TEXT NOT NULL ,
`last_updated` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ,
PRIMARY KEY ( `user_id` )
) TYPE = MYISAM COMMENT = 'Stores the cart contents of a user'" );

$db->query( "ALTER TABLE `#__{vm}_product_reviews` CHANGE `product_id` `product_id` INT( 11 ) NOT NULL ");

# 25.07.2007: Allow to set address and date format
$db->query( "ALTER TABLE `#__{vm}_vendor` 
				ADD `vendor_address_format` TEXT NOT NULL ,
				ADD `vendor_date_format` VARCHAR( 255 ) NOT NULL ;" );
$db->query( "UPDATE `#__{vm}_vendor` SET
			`vendor_address_format` = '{storename}\n{address_1}\n{address_2}\n{city}, {zip}',
			`vendor_date_format` = '%A, %d %B %Y %H:%M'
			WHERE vendor_id=1;");
$db->query( "UPDATE `#__components` SET `params` = 'RELEASE=1.1.0\nDEV_STATUS=alpha' WHERE `name` = 'virtuemart_version'");

?>