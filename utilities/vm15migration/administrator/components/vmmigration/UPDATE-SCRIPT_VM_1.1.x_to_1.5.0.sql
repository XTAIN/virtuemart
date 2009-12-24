CREATE TABLE IF NOT EXISTS `#__vm_calc` (
  `calc_id` int(11) NOT NULL auto_increment,
  `calc_vendor_id` text NOT NULL COMMENT 'Belongs to vendor, if no vendor => for all',
  `calc_name` text NOT NULL COMMENT 'Name of the rule',
  `calc_descr` text COMMENT 'Description',
  `calc_kind` text COMMENT 'Discount/Tax/Margin/Commission',
  `calc_value_mathop` text COMMENT 'the mathematical operation like (+,-,+%,-%)',
  `calc_value` text COMMENT 'The Amount',
  `calc_categories` text COMMENT 'Affected Categories Ids',
  `calc_country` text COMMENT 'Affected Country Ids',
  `calc_state` text COMMENT 'Affected State Ids',
  `calc_shopper_published` tinyint(1) default NULL COMMENT 'Visible for Shoppers',
  `calc_vendor_published` tinyint(1) default NULL COMMENT 'Visible for Vendors',
  `calc_start_date` date default NULL COMMENT 'Startdate if nothing is set = permanent',
  `calc_end_date` date default NULL COMMENT 'Enddate if nothing is set = permanent',
  `calc_mdate` date default NULL COMMENT 'modified date',
  `calc_qualify` text COMMENT 'qualifying productId''s',
  `calc_affected` text COMMENT 'affected productId''s',
  `calc_amount_cond` float default NULL COMMENT 'Number of affected products',
  `calc_amount_dimunit` text COMMENT 'The dimension, kg, m, €',
  `published` tinyint(1) NOT NULL default '0',
  PRIMARY KEY  (`calc_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

ALTER TABLE `#__vm_category` CHANGE `list_order` `ordering` INT NOT NULL DEFAULT `0`, CHANGE `category_publish` `published` TINYINT(1) NOT NULL DEFAULT `1`;

ALTER TABLE `#__vm_category_xref` CHANGE `category_shared` `category_shared` TINYINT(1) NOT NULL DEFAULT `1`;
ALTER TABLE `#__vm_category_xref` ADD `category_shared` VARCHAR( 1 ) NOT NULL DEFAULT 'Y' ;

CREATE TABLE IF NOT EXISTS `#__vm_config` (
    `config_id` INT(11) UNSIGNED NOT NULL AUTO_INCREMENT,
    `config` TEXT NULL,
    PRIMARY KEY (`config_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='Holds configuration settings';

UPDATE `#__components` SET `params` = 'RELEASE=1.5.0' WHERE `name` = 'virtuemart_version';

ALTER TABLE `#__vm_coupons`
ADD `coupon_start_date` DATETIME NULL ,
ADD `coupon_expiry_date` DATETIME NULL ,
ADD `coupon_value_valid` DECIMAL(15,5) NOT NULL DEFAULT '0.00000';
ALTER TABLE `#__vm_coupons` CHANGE `coupon_value` `coupon_value` DECIMAL(15, 5) NULL DEFAULT '0.00000';

ALTER TABLE `#__vm_country` ADD `published` tinyint(4) NOT NULL default '0';

INSERT INTO `#__vm_function` (`function_id`, `module_id`, `function_name`, `function_class`, `function_method`, `function_description`, `function_perms`)
	VALUES(195, 1, 'uninstallExtension', 'installer.class', 'uninstall', 'Uninstalls an Extension', 'admin');
INSERT INTO `#__vm_function` (`function_id`, `module_id`, `function_name`, `function_class`, `function_method`, `function_description`, `function_perms`)
	VALUES(196, 1, 'installExtension', 'installer.class', 'install', 'Installs an Extension', 'admin');
INSERT INTO `#__vm_function` (`function_id`, `module_id`, `function_name`, `function_class`, `function_method`, `function_description`, `function_perms`)
	VALUES(197, 1, 'pluginUpdate', 'pluginEntity.class', 'update', 'Updates a VM Plugin and saves all new parameter settings.', 'storeadmin,admin');
UPDATE `#__vm_function` SET `function_class` = 'paymentMethod.class' WHERE `function_class` = 'ps_payment_method';
UPDATE `#__vm_function` SET `function_class` = 'shippingMethod.class' WHERE `function_class` = 'ps_shipping_method';

ALTER TABLE `#__vm_manufacturer` ADD `mf_thumb_image` VARCHAR( 255 ) default NULL ,
ADD `mf_full_image` VARCHAR( 255 ) default NULL ;

CREATE TABLE IF NOT EXISTS `#__vm_menu_admin` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `module_id` int(10) unsigned NOT NULL COMMENT 'The ID of the VM Module, this Item is assigned to',
  `parent_id` int(11) unsigned NOT NULL,
  `name` varchar(255) NOT NULL,
  `link` text NOT NULL,
  `depends` text NOT NULL COMMENT 'Names of the Parameters, this Item depends on',
  `icon_class` varchar(255) NOT NULL,
  `ordering` tinyint(4) NOT NULL,
  `published` enum('0','1') NOT NULL,
  `tooltip` text NOT NULL,
  `view` varchar(255) default NULL,
  `task` varchar(255) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='Administration Menu Items';

TRUNCATE TABLE `#__vm_menu_admin`;

INSERT INTO `#__vm_menu_admin` (`id`, `module_id`, `parent_id`, `name`, `link`, `depends`, `icon_class`, `ordering`, `published`, `tooltip`, `view`, `task`) VALUES
(10, 1, 0, 'VM_CONFIG', 'page=admin.show_cfg', '', 'vmicon vmicon-16-config', 2, '1', '', '', ''),
(20, 1, 0, 'VM_USERS', 'page=admin.user_list', '', 'vmicon vmicon-16-user', 4, '1', '', '', ''),
(30, 1, 0, 'VM_USERGROUP_LBL', 'page=admin.usergroup_list', '', 'vmicon vmicon-16-user', 6, '1', '', '', ''),
(40, 1, 0, 'VM_MANAGE_USER_FIELDS', 'page=admin.user_field_list', '', 'vmicon vmicon-16-content', 8, '1', '', '', ''),
(50, 1, 0, 'VM_COUNTRY_LIST_MNU', 'page=admin.country_list', '', 'vmicon vmicon-16-content', 10, '1', '', 'country', ''),
(60, 1, 0, 'VM_CURRENCY_LIST_MNU', 'page=admin.curr_list', '', 'vmicon vmicon-16-content', 12, '1', '', 'currency', ''),
(70, 1, 0, 'VM_MODULE_LIST_MNU', 'page=admin.module_list', '', 'vmicon vmicon-16-content', 14, '1', '', '', ''),
(80, 1, 0, 'VM_CHECK_UPDATES_MNU', 'page=admin.update_check', '', 'vmicon vmicon-16-content', 16, '1', '', 'updatesMigration', ''),
(90, 8, 0, 'VM_STATISTIC_SUMMARY', 'page=store.index', '', 'vmicon vmicon-16-info', 2, '1', '', 'virtuemart', ''),
(100, 8, 0, 'VM_STORE_FORM_MNU', 'page=store.store_form', '', 'vmicon vmicon-16-config', 4, '1', '', 'store', ''),
(110, 8, 0, 'VM_PAYMENT_METHOD_LIST_MNU', 'page=store.payment_method_list', '', 'vmicon vmicon-16-content', 6, '1', '', '', ''),
(120, 8, 0, 'VM_PAYMENT_METHOD_FORM_MNU', 'page=store.payment_method_form', '', 'vmicon vmicon-16-editadd', 8, '1', '', '', ''),
(130, 8, 0, 'VM_SHIPPING_MODULE_LIST_LBL', 'page=store.shipping_module_list', '', 'vmicon vmicon-16-content', 10, '1', '', '', ''),
(140, 8, 0, 'VM_CREDITCARD_LIST_LBL', 'page=store.creditcard_list', '', 'vmicon vmicon-16-content', 12, '1', '', 'creditcard', ''),
(150, 8, 0, 'VM_CREDITCARD_FORM_LBL', 'page=store.creditcard_form', '', 'vmicon vmicon-16-editadd', 14, '1', '', 'creditcard', 'add'),
(180, 2, 0, 'CSVIMPROVED_TITLE', 'http://www.csvimproved.com/', '', 'vmicon vmicon-16-import', 2, '1', 'CSVIMPROVED_NEEDINSTALL', '', ''),
(190, 2, 0, 'VM_PRODUCT_LIST_MNU', 'page=product.product_list', '', 'vmicon vmicon-16-content', 4, '1', '', 'product', 'product'),
(200, 2, 0, 'VM_PRODUCT_FORM_MNU', 'page=product.product_form', '', 'vmicon vmicon-16-editadd', 6, '1', '', 'product','add'),
(210, 2, 0, 'VM_PRODUCT_INVENTORY_MNU', 'page=product.product_inventory', '', 'vmicon vmicon-16-install', 8, '1', '', 'inventory', 'inventory'),
(220, 2, 0, 'VM_SPECIAL_PRODUCTS', 'page=product.specialprod', '', 'vmicon vmicon-16-content', 10, '1', '', 'productSpecial', 'productSpecial'),
(240, 2, 0, 'VM_REVIEWS', 'page=product.review_list', '', 'vmicon vmicon-16-content', 14, '1', '', 'ratings', 'ratings'),
(250, 2, 0, 'VM_PRODUCT_DISCOUNT_LIST_LBL', 'page=product.product_discount_list', '', 'vmicon vmicon-16-content', 16, '1', '', 'discounts', 'discounts'),
(260, 2, 0, 'VM_PRODUCT_DISCOUNT_FORM_MNU', 'page=product.product_discount_form', '', 'vmicon vmicon-16-editadd', 18, '1', '', 'discounts', 'add'),
(270, 2, 0, 'VM_PRODUCT_TYPE_LIST_LBL', 'page=product.product_type_list', '', 'vmicon vmicon-16-content', 20, '1', '', '', ''),
(280, 2, 0, 'VM_PRODUCT_PRODUCT_TYPE_FORM_MNU', 'page=product.product_type_form', '', 'vmicon vmicon-16-editadd', 22, '1', '', '', ''),
(290, 2, 0, 'VM_CATEGORY_LIST_MNU', 'page=product.product_category_list', '', 'vmicon vmicon-16-content', 24, '1', '', '', ''),
(300, 2, 0, 'VM_CATEGORY_FORM_MNU', 'page=product.product_category_form', '', 'vmicon vmicon-16-editadd', 26, '1', '', '', ''),
(310, 4, 0, 'VM_SHOPPER_GROUP_LIST_MNU', 'page=shopper.shopper_group_list', '', 'vmicon vmicon-16-content', 2, '1', '', '', ''),
(320, 4, 0, 'VM_SHOPPER_GROUP_FORM_MNU', 'page=shopper.shopper_group_form', '', 'vmicon vmicon-16-editadd', 4, '1', '', '', ''),
(330, 5, 0, 'VM_ORDER_LIST_MNU', 'page=order.order_list', '', 'vmicon vmicon-16-content', 2, '1', '', 'orders', 'orders'),
(340, 5, 0, 'VM_ORDER_STATUS_LIST_MNU', 'page=order.order_status_list', '', 'vmicon vmicon-16-orderstatus', 4, '1', '', 'orderStatus', ''),
(350, 5, 0, 'VM_ORDER_STATUS_FORM_MNU', 'page=order.order_status_form', '', 'vmicon vmicon-16-orderstatus', 6, '1', '', 'orderStatus', 'edit'),
(400, 12, 0, 'VM_REPORTBASIC_MOD', 'page=reportbasic.index', '', 'vmicon vmicon-16-info', 2, '1', '', '', ''),
(410, 11, 0, 'VM_TAX_LIST_MNU', 'page=tax.tax_list', '', 'vmicon vmicon-16-content', 2, '1', '', '', ''),
(420, 11, 0, 'VM_TAX_FORM_MNU', 'page=tax.tax_form', '', 'vmicon vmicon-16-editadd', 4, '1', '', '', ''),
(430, 12839, 0, 'VM_CARRIER_LIST_MNU', 'page=shipping.carrier_list', '', 'vmicon vmicon-16-content', 2, '1', '', 'shippingcarrier', ''),
(440, 12839, 0, 'VM_CARRIER_FORM_MNU', 'page=shipping.carrier_form', '', 'vmicon vmicon-16-editadd', 4, '1', '', 'shippingcarrier', 'add'),
(450, 12839, 0, 'VM_RATE_LIST_MNU', 'page=shipping.rate_list', '', 'vmicon vmicon-16-content', 6, '1', '', 'shippingrate', ''),
(460, 12839, 0, 'VM_RATE_FORM_MNU', 'page=shipping.rate_form', '', 'vmicon vmicon-16-editadd', 8, '1', '', 'shippingrate', 'add'),
(470, 12843, 0, 'VM_COUPON_LIST', 'page=coupon.coupon_list', '', 'vmicon vmicon-16-content', 2, '1', '', 'coupon', ''),
(480, 12843, 0, 'VM_COUPON_NEW_HEADER', 'page=coupon.coupon_form', '', 'vmicon vmicon-16-editadd', 4, '1', '', 'coupon', 'add'),
(490, 99, 0, 'VM_MANUFACTURER_LIST_MNU', 'page=manufacturer.manufacturer_list', '', 'vmicon vmicon-16-content', 2, '1', '', '', ''),
(500, 99, 0, 'VM_MANUFACTURER_FORM_MNU', 'page=manufacturer.manufacturer_form', '', 'vmicon vmicon-16-editadd', 4, '1', '', '',''),
(510, 99, 0, 'VM_MANUFACTURER_CAT_LIST_MNU', 'page=manufacturer.manufacturer_category_list', '', 'vmicon vmicon-16-content', 6, '1', '', '', ''),
(520, 99, 0, 'VM_MANUFACTURER_CAT_FORM_MNU', 'page=manufacturer.manufacturer_category_form', '', 'vmicon vmicon-16-editadd', 8, '1', '', '', ''),
(530, 12842, 0, 'VM_ABOUT', 'page=help.about', '', 'vmicon vmicon-16-info', 2, '1', '', '', ''),
(540, 12842, 0, 'VM_HELP_TOPICS', 'http://virtuemart.net/', '', 'vmicon vmicon-16-help', 4, '1', '', '', ''),
(550, 12842, 0, 'VM_COMMUNITY_FORUM', 'http://forum.virtuemart.net/', '', 'vmicon vmicon-16-language', 6, '1', '', '', ''),
(560, 2, 0, 'VM_PRODUCT_FILES_LIST_MNU', 'page=product.file_list', '', 'vmicon vmicon-16-content', 28, '1', '', 'media', 'media'),
(570, 1, 0, 'VM_ATTRIBUTE_LIST_MNU', 'page=product.attributes', '', 'vmicon vmicon-16-content', 29, '1', '', 'attributes', 'attributes'),
(580, 1, 0, '-', '', '', '', 11, '1', '', '', ''),
(590, 1, 0, '-', '', '', '', 13, '1', '', '', ''),
(600, 1, 0, '-', '', '', '', 15, '1', '', '', ''),
(610, 2, 0, '-', '', '', '', 7, '1', '', '', ''),
(620, 2, 0, '-', '', '', '', 3, '1', '', '', ''),
(630, 2, 0, '-', '', '', '', 9, '1', '', '', ''),
(640, 2, 0, '-', '', '', '', 11, '1', '', '', ''),
(650, 2, 0, '-', '', '', '', 15, '1', '', '', ''),
(660, 8, 0, '-', '', '', '', 3, '1', '', '', ''),
(670, 8, 0, '-', '', '', '', 9, '1', '', '', ''),
(680, 8, 0, '-', '', '', '', 11, '1', '', '', ''),
(690, 8, 0, '-', '', '', '', 15, '1', '', '', ''),
(700, 8, 0, '-', '', '', '', 5, '1', '', '', ''),
(710, 2, 0, '-', '', '', '', 19, '1', '', '', ''),
(720, 2, 0, '-', '', '', '', 23, '1', '', '', ''),
(730, 1, 0, 'Extension Manager', 'page=admin.extension_list', '', 'vmicon vmicon-16-content', 15, '1', '', '', ''),
(740, 1, 0, 'Plugin List', 'page=admin.plugin_list', '', 'vmicon vmicon-16-content', 16, '1', '', '', '');

ALTER TABLE `#__vm_module` ADD `is_admin` ENUM( '0', '1' ) NOT NULL AFTER `module_publish` ;
UPDATE `#__vm_module` SET `is_admin` = '1'
	WHERE FIND_IN_SET( `module_name` , 'admin,product,vendor,shopper,order,store,tax,repotbasic, zone,shipping,manufacturer,help,coupon' ) >0 ;

DELETE FROM `#__vm_module` WHERE module_name='affiliate' LIMIT 1;

ALTER TABLE `#__vm_order_item` CHANGE `product_final_price` `product_final_price` DECIMAL(15, 5) NULL DEFAULT '0.00000';

ALTER TABLE `#__vm_order_status` CHANGE `list_order` `ordering` INT;

UPDATE `#__vm_payment_method` SET `payment_class` = REPLACE( `payment_class` , 'ps_', '' ) ;
ALTER TABLE `#__vm_payment_method` CHANGE `payment_method_id` `id` INT( 11 ) NOT NULL AUTO_INCREMENT  ;
ALTER TABLE `#__vm_payment_method` CHANGE `payment_method_name` `name` VARCHAR( 255 ) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL  ;
ALTER TABLE `#__vm_payment_method` CHANGE `payment_class` `element` VARCHAR( 50 ) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL  ;
ALTER TABLE `#__vm_payment_method` CHANGE `payment_method_discount` `discount` DECIMAL( 12, 2 ) NULL DEFAULT NULL  ;
ALTER TABLE `#__vm_payment_method` CHANGE `payment_method_discount_is_percent` `discount_is_percentage` TINYINT( 1 ) NOT NULL  ;
ALTER TABLE `#__vm_payment_method` CHANGE `payment_method_discount_max_amount` `discount_max_amount` DECIMAL( 10, 2 ) NOT NULL  ;
ALTER TABLE `#__vm_payment_method` CHANGE `payment_method_discount_min_amount` `discount_min_amount` DECIMAL( 10, 2 ) NOT NULL  ;
ALTER TABLE `#__vm_payment_method` CHANGE `enable_processor` `type` CHAR( 1 ) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL  ;
ALTER TABLE `#__vm_payment_method` CHANGE `payment_enabled` `published` CHAR( 1 ) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT 'N' ;
ALTER TABLE `#__vm_payment_method` CHANGE `payment_extrainfo` `extra_info` TEXT CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL  ;
ALTER TABLE `#__vm_payment_method` CHANGE `payment_passkey` `secret_key` BLOB NOT NULL  ;
ALTER TABLE `#__vm_payment_method` ADD `params` TEXT NOT NULL ;
UPDATE `#__vm_payment_method` SET `element`='payment' WHERE `element`='';

ALTER TABLE `#__vm_payment_method` CHANGE `list_order` `ordering` INT( 11 ) NULL DEFAULT NULL;

CREATE TABLE `#__vm_plugins` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(100) NOT NULL default '',
  `element` varchar(100) NOT NULL default '',
  `folder` varchar(100) NOT NULL default '',
  `ordering` int(11) NOT NULL default '0',
  `published` tinyint(3) NOT NULL default '0',
  `iscore` tinyint(3) NOT NULL default '0',
  `vendor_id` tinyint(3) NOT NULL default '0',
  `shopper_group_id` int(10) unsigned NOT NULL,
  `checked_out` int(11) unsigned NOT NULL default '0',
  `checked_out_time` datetime NOT NULL default '0000-00-00 00:00:00',
  `params` text NOT NULL,
  `secrets` blob NOT NULL,
  PRIMARY KEY  (`id`),
  KEY `idx_folder` (`published`,`vendor_id`,`folder`)
) TYPE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=12;
INSERT INTO `#__vm_plugins` (`id`, `name`, `element`, `folder`, `ordering`, `published`, `iscore`, `vendor_id`, `shopper_group_id`, `checked_out`, `checked_out_time`, `params`, `secrets`) VALUES(1, 'auspost', 'auspost', 'shipping', 11, 0, 0, 1, 5, 0, '0000-00-00 00:00:00', '', '');
INSERT INTO `#__vm_plugins` (`id`, `name`, `element`, `folder`, `ordering`, `published`, `iscore`, `vendor_id`, `shopper_group_id`, `checked_out`, `checked_out_time`, `params`, `secrets`) VALUES(2, 'canadapost', 'canadapost', 'shipping', 9, 0, 0, 1, 5, 0, '0000-00-00 00:00:00', '', '');
INSERT INTO `#__vm_plugins` (`id`, `name`, `element`, `folder`, `ordering`, `published`, `iscore`, `vendor_id`, `shopper_group_id`, `checked_out`, `checked_out_time`, `params`, `secrets`) VALUES(3, 'dhl', 'dhl', 'shipping', 4, 0, 0, 1, 5, 0, '0000-00-00 00:00:00', '', '');
INSERT INTO `#__vm_plugins` (`id`, `name`, `element`, `folder`, `ordering`, `published`, `iscore`, `vendor_id`, `shopper_group_id`, `checked_out`, `checked_out_time`, `params`, `secrets`) VALUES(4, 'fedex', 'fedex', 'shipping', 3, 0, 0, 1, 5, 0, '0000-00-00 00:00:00', '', '');
INSERT INTO `#__vm_plugins` (`id`, `name`, `element`, `folder`, `ordering`, `published`, `iscore`, `vendor_id`, `shopper_group_id`, `checked_out`, `checked_out_time`, `params`, `secrets`) VALUES(5, 'flex', 'flex', 'shipping', 2, 1, 0, 1, 5, 0, '0000-00-00 00:00:00', '', '');
INSERT INTO `#__vm_plugins` (`id`, `name`, `element`, `folder`, `ordering`, `published`, `iscore`, `vendor_id`, `shopper_group_id`, `checked_out`, `checked_out_time`, `params`, `secrets`) VALUES(6, 'intershipper', 'intershipper', 'shipping', 5, 0, 0, 1, 5, 0, '0000-00-00 00:00:00', '', '');
INSERT INTO `#__vm_plugins` (`id`, `name`, `element`, `folder`, `ordering`, `published`, `iscore`, `vendor_id`, `shopper_group_id`, `checked_out`, `checked_out_time`, `params`, `secrets`) VALUES(7, 'shipvalue', 'shipvalue', 'shipping', 8, 0, 0, 1, 5, 0, '0000-00-00 00:00:00', '', '');
INSERT INTO `#__vm_plugins` (`id`, `name`, `element`, `folder`, `ordering`, `published`, `iscore`, `vendor_id`, `shopper_group_id`, `checked_out`, `checked_out_time`, `params`, `secrets`) VALUES(8, 'standard_shipping', 'standard_shipping', 'shipping', 1, 1, 0, 1, 5, 0, '0000-00-00 00:00:00', '', '');
INSERT INTO `#__vm_plugins` (`id`, `name`, `element`, `folder`, `ordering`, `published`, `iscore`, `vendor_id`, `shopper_group_id`, `checked_out`, `checked_out_time`, `params`, `secrets`) VALUES(9, 'UPS Shipping Module', 'ups', 'shipping', 6, 0, 0, 1, 5, 0, '0000-00-00 00:00:00', '', '');
INSERT INTO `#__vm_plugins` (`id`, `name`, `element`, `folder`, `ordering`, `published`, `iscore`, `vendor_id`, `shopper_group_id`, `checked_out`, `checked_out_time`, `params`, `secrets`) VALUES(10, 'USPS Shipping Module', 'usps', 'shipping', 7, 0, 0, 1, 5, 0, '0000-00-00 00:00:00', '', '');
INSERT INTO `#__vm_plugins` (`id`, `name`, `element`, `folder`, `ordering`, `published`, `iscore`, `vendor_id`, `shopper_group_id`, `checked_out`, `checked_out_time`, `params`, `secrets`) VALUES(11, 'Zone Shipping Module', 'zone_shipping', 'shipping', 10, 0, 0, 1, 5, 0, '0000-00-00 00:00:00', '', '');

ALTER TABLE `#__vm_product` MODIFY COLUMN product_tax_id int;

ALTER TABLE `#__vm_product_attribute_sku` ADD `attribute_sku_id` int(11) NOT NULL auto_increment FIRST,
    ADD PRIMARY KEY (`attribute_sku_id`),
    ADD KEY `idx_product_attribute_sku_product_id` (`product_id`),
    ADD KEY `idx_product_attribute_sku_attribute_name` (`attribute_name`),
    ADD KEY `idx_product_attribute_list` (`attribute_list`);

ALTER TABLE `#__vm_product_price` CHANGE `product_price` `product_price` DECIMAL(15, 5) NULL DEFAULT '0.00000';

ALTER TABLE `#__vm_product_discount` CHANGE `amount` `amount` DECIMAL(15, 5) NULL DEFAULT '0.00000';

ALTER TABLE `#__vm_tax_rate` CHANGE `tax_rate` `tax_rate` DECIMAL( 10, 5 ) NULL DEFAULT NULL ;

ALTER TABLE `#__vm_user_info` ADD `user_is_vendor` TINYINT( 1 ) NOT NULL DEFAULT '0' AFTER `user_id` ;

ALTER TABLE `#__vm_vendor` ADD `vendor_nick` VARCHAR( 150 ) NOT NULL ;