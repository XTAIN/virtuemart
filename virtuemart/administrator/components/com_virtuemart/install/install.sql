-- VirtueMart table SQL script
-- This will install all the tables need to run VirtueMart

-- --------------------------------------------------------


--
-- Table structure for table `#__virtuemart_adminmenuentries`
--

CREATE TABLE IF NOT EXISTS `#__virtuemart_adminmenuentries` (
  `id` tinyint(10) unsigned NOT NULL AUTO_INCREMENT,
  `module_id` tinyint(10) unsigned NOT NULL COMMENT 'The ID of the VM Module, this Item is assigned to',
  `parent_id` tinyint(11) unsigned NOT NULL,
  `name` char(64) NOT NULL,
  `link` char(64) NOT NULL,
  `depends` char(64) NOT NULL COMMENT 'Names of the Parameters, this Item depends on',
  `icon_class` char(32) NOT NULL,
  `ordering` int(2) NOT NULL DEFAULT '0',
  `published` tinyint(1) NOT NULL DEFAULT '1',
  `tooltip` char(128) NOT NULL,
  `view` char(32) DEFAULT NULL,
  `task` char(32) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `module_id` (`module_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='Administration Menu Items' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------
--
-- Table structure for table `#__virtuemart_calcs`
--

CREATE TABLE IF NOT EXISTS `#__virtuemart_calcs` (
  `virtuemart_calc_id` INT(11) UNSIGNED NOT NULL AUTO_INCREMENT UNIQUE,
  `virtuemart_vendor_id` int(11) NOT NULL COMMENT 'Belongs to vendor',
  `calc_name` char(64) NOT NULL COMMENT 'Name of the rule',
  `calc_descr` char(128) NOT NULL COMMENT 'Description',
  `calc_kind` char(16) NOT NULL COMMENT 'Discount/Tax/Margin/Commission',
  `calc_value_mathop` char(8) NOT NULL COMMENT 'the mathematical operation like (+,-,+%,-%)',
  `calc_value` float NOT NULL DEFAULT '0' COMMENT 'The Amount',
  `calc_currency` int(11) NOT NULL DEFAULT '0' COMMENT 'Currency of the Rule',
  `calc_shopper_published` tinyint(1) NOT NULL DEFAULT '0' COMMENT 'Visible for Shoppers',
  `calc_vendor_published` tinyint(1) NOT NULL DEFAULT '0' COMMENT 'Visible for Vendors',
  `publish_up` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' COMMENT 'Startdate if nothing is set = permanent',
  `publish_down` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' COMMENT 'Enddate if nothing is set = permanent',
  `calc_qualify` int(11) NOT NULL DEFAULT '0' COMMENT 'qualifying productId''s',
  `calc_affected` int(11) NOT NULL DEFAULT '0' COMMENT 'affected productId''s',
  `for_override` tinyint(1) NOT NULL  DEFAULT '0',
  `ordering` int(2) NOT NULL DEFAULT '0',
  `shared` tinyint(1) NOT NULL,
  `published` tinyint(1) NOT NULL DEFAULT '1',
  `created_on` datetime NOT NULL default '0000-00-00 00:00:00',
  `created_by` int(11) NOT NULL DEFAULT 0,
  `modified_on` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modified_by` int(11) NOT NULL DEFAULT 0,
  `locked_on` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `locked_by` int(11) NOT NULL DEFAULT 0,
  KEY (`virtuemart_vendor_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `#__virtuemart_calc_categories`
--

CREATE TABLE IF NOT EXISTS `#__virtuemart_calc_categories` (
  `id` INT(11) UNSIGNED NOT NULL AUTO_INCREMENT UNIQUE,
  `virtuemart_calc_id` int(11) NOT NULL DEFAULT '0',
  `virtuemart_category_id` int(11) NOT NULL DEFAULT '0',
  UNIQUE KEY `i_virtuemart_calc_id` (`virtuemart_calc_id`,`virtuemart_category_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `#__virtuemart_calc_shoppergroups`
--

CREATE TABLE IF NOT EXISTS `#__virtuemart_calc_shoppergroups` (
  `id` INT(11) UNSIGNED NOT NULL AUTO_INCREMENT UNIQUE,
  `virtuemart_calc_id` int(11) NOT NULL DEFAULT '0',
  `virtuemart_shoppergroup_id` int(11) NOT NULL DEFAULT '0',
  UNIQUE KEY `i_virtuemart_calc_id` (`virtuemart_calc_id`,`virtuemart_shoppergroup_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `#__virtuemart_calc_countries`
--

CREATE TABLE IF NOT EXISTS `#__virtuemart_calc_countries` (
  `id` INT(11) UNSIGNED NOT NULL AUTO_INCREMENT UNIQUE,
  `virtuemart_calc_id` int(11) NOT NULL DEFAULT '0',
  `virtuemart_country_id` int(11) NOT NULL DEFAULT '0',
  UNIQUE KEY `i_virtuemart_calc_id` (`virtuemart_calc_id`,`virtuemart_country_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `#__virtuemart_calc_states`
--

CREATE TABLE IF NOT EXISTS `#__virtuemart_calc_states` (
  `id` INT(11) UNSIGNED NOT NULL AUTO_INCREMENT UNIQUE,
  `virtuemart_calc_id` int(11) NOT NULL DEFAULT '0',
  `virtuemart_state_id` int(11) NOT NULL DEFAULT '0',
  UNIQUE KEY `i_virtuemart_calc_id` (`virtuemart_calc_id`,`virtuemart_state_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `#__virtuemart_carts`
--

CREATE TABLE IF NOT EXISTS `#__virtuemart_carts` (
  `virtuemart_user_id` INT(11) UNSIGNED NOT NULL AUTO_INCREMENT UNIQUE,
  `cart_content` text NOT NULL,
  `last_updated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 COMMENT='Stores the cart contents of a user';

-- --------------------------------------------------------

--
-- Table structure for table `#__virtuemart_categories`
--

CREATE TABLE IF NOT EXISTS `#__virtuemart_categories` (
  `virtuemart_category_id` INT(11) UNSIGNED NOT NULL AUTO_INCREMENT UNIQUE,
  `virtuemart_vendor_id` int(11) NOT NULL DEFAULT '0',
  `category_name` char(128) NOT NULL DEFAULT '',
  `slug` char(128) NOT NULL DEFAULT '',
  `category_description` text,
  `category_template` char(24) DEFAULT NULL,
  `category_layout` char(16) DEFAULT NULL,
  `category_product_layout` char(16) DEFAULT NULL,
  `products_per_row` tinyint(2) DEFAULT NULL,
  `limit_list_start` int(11) DEFAULT NULL,
  `limit_list_step` int(11) DEFAULT NULL,
  `limit_list_max` int(11) DEFAULT NULL,
  `limit_list_initial` int(11) DEFAULT NULL,
  `hits` int(11) unsigned NOT NULL DEFAULT '0',
  `metadesc` char(128) NOT NULL,
  `metakey` char(128) NOT NULL,
  `metarobot` char(40) NOT NULL,
  `metaauthor` char(64) NOT NULL,
  `ordering` int(2) NOT NULL DEFAULT '0',
  `shared` tinyint(1) NOT NULL,
  `published` tinyint(1) NOT NULL DEFAULT '1',
  `created_on` datetime NOT NULL default '0000-00-00 00:00:00',
  `created_by` int(11) NOT NULL DEFAULT 0,
  `modified_on` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modified_by` int(11) NOT NULL DEFAULT 0,
  `locked_on` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `locked_by` int(11) NOT NULL DEFAULT 0,
  KEY `idx_category_virtuemart_vendor_id` (`virtuemart_vendor_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 COMMENT='Product Categories are stored here' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `#__virtuemart_category_categories`
--

CREATE TABLE IF NOT EXISTS `#__virtuemart_category_categories` (
  `id` INT(11) UNSIGNED NOT NULL AUTO_INCREMENT UNIQUE,
  `category_parent_id` int(11) NOT NULL DEFAULT '0',
  `category_child_id` int(11) NOT NULL DEFAULT '0',
  `ordering` int(2) NOT NULL DEFAULT '0',
  KEY (`category_child_id`),
  UNIQUE KEY `i_category_parent_id` (`category_parent_id`,`category_child_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 COMMENT='Category child-parent relation list';

--
-- Table structure for table `#__virtuemart_category_medias`
--

CREATE TABLE IF NOT EXISTS `#__virtuemart_category_medias` (
  `id` INT(11) UNSIGNED NOT NULL AUTO_INCREMENT UNIQUE,
  `virtuemart_category_id` int(11) NOT NULL DEFAULT '0',
  `virtuemart_media_id` int(11) NOT NULL DEFAULT '0',
  `ordering` int(2) NOT NULL DEFAULT '0',
  UNIQUE KEY `i_virtuemart_category_id` (`virtuemart_category_id`,`virtuemart_media_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;


-- --------------------------------------------------------

--
-- Table structure for table `#__virtuemart_countries`
--

CREATE TABLE IF NOT EXISTS `#__virtuemart_countries` (
  `virtuemart_country_id` MEDIUMINT NOT NULL AUTO_INCREMENT UNIQUE,
  `virtuemart_worldzone_id` tinyint(11) NOT NULL DEFAULT '1',
  `country_name` char(64) DEFAULT NULL,
  `country_3_code` char(3) DEFAULT NULL,
  `country_2_code` char(2) DEFAULT NULL,
  `ordering` int(2) NOT NULL DEFAULT '0',
  `published` tinyint(1) NOT NULL DEFAULT '1',
  `created_on` datetime NOT NULL default '0000-00-00 00:00:00',
  `created_by` int(11) NOT NULL DEFAULT 0,
  `modified_on` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modified_by` int(11) NOT NULL DEFAULT 0,
  `locked_on` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `locked_by` int(11) NOT NULL DEFAULT 0,
  KEY `idx_country_3_code` (`country_3_code`),
  KEY `idx_country_2_code` (`country_2_code`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 COMMENT='Country records' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `#__virtuemart_coupons`
--

CREATE TABLE IF NOT EXISTS `#__virtuemart_coupons` (
  `virtuemart_coupon_id` INT(11) UNSIGNED NOT NULL AUTO_INCREMENT UNIQUE,
  `coupon_code` char(32) NOT NULL DEFAULT '',
  `percent_or_total` enum('percent','total') NOT NULL DEFAULT 'percent',
  `coupon_type` enum('gift','permanent') NOT NULL DEFAULT 'gift',
  `coupon_value` decimal(15,5) NOT NULL DEFAULT '0.00000',
  `coupon_start_date` datetime DEFAULT NULL,
  `coupon_expiry_date` datetime DEFAULT NULL,
  `coupon_value_valid` decimal(15,5) NOT NULL DEFAULT '0.00000',
  `published` tinyint(1) NOT NULL DEFAULT '1',
  `created_on` datetime NOT NULL default '0000-00-00 00:00:00',
  `created_by` int(11) NOT NULL DEFAULT 0,
  `modified_on` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modified_by` int(11) NOT NULL DEFAULT 0,
  `locked_on` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `locked_by` int(11) NOT NULL DEFAULT 0
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 COMMENT='Used to store coupon codes' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `#__virtuemart_currencies`
--

CREATE TABLE IF NOT EXISTS `#__virtuemart_currencies` (
  `virtuemart_currency_id` INT(11) UNSIGNED NOT NULL AUTO_INCREMENT UNIQUE,
  `virtuemart_vendor_id` int(11) NOT NULL DEFAULT '1',
  `currency_name` char(64) DEFAULT NULL,
  `currency_code_2` char(2) DEFAULT NULL,
  `currency_code_3` char(3) DEFAULT NULL,
  `currency_numeric_code` int(4) NOT NULL,
  `currency_exchange_rate` float DEFAULT NULL,
  `currency_symbol` char(4) DEFAULT NULL,
  `currency_decimal_place` char(4) DEFAULT NULL,
  `currency_decimal_symbol` char(4) DEFAULT NULL,
  `currency_thousands` char(4) DEFAULT NULL,
  `currency_positive_style` char(64) DEFAULT NULL,
  `currency_negative_style` char(64) DEFAULT NULL,
  `ordering` int(2) NOT NULL DEFAULT '0',
  `shared` tinyint(1) NOT NULL DEFAULT '1',
  `published` tinyint(1) NOT NULL DEFAULT '1',
  `created_on` datetime NOT NULL default '0000-00-00 00:00:00',
  `created_by` int(11) NOT NULL DEFAULT 0,
  `modified_on` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modified_by` int(11) NOT NULL DEFAULT 0,
  `locked_on` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `locked_by` int(11) NOT NULL DEFAULT 0,
  KEY `virtuemart_vendor_id` (`virtuemart_vendor_id`),
  KEY `idx_currency_code_3` (`currency_code_3`),
  KEY `idx_currency_numeric_code` (`currency_numeric_code`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 COMMENT='Used to store currencies';


-- --------------------------------------------------------
--
-- Table structure for table `#__virtuemart_customs`
--

CREATE TABLE IF NOT EXISTS `#__virtuemart_customs` (
  `virtuemart_custom_id` INT(11) UNSIGNED NOT NULL AUTO_INCREMENT UNIQUE,
  `custom_parent_id` int(11) NOT NULL DEFAULT '0',
  `admin_only` tinyint(1) NOT NULL DEFAULT '0' COMMENT '1:Display in admin only',
  `custom_title` char(255) NOT NULL COMMENT 'field title',
  `custom_tip` char(255) NOT NULL COMMENT 'tip',
  `custom_value` char(255) DEFAULT NULL COMMENT 'defaut value',
  `custom_field_desc` char(255) DEFAULT NULL COMMENT 'description or unit',
  `field_type` char(1) NOT NULL DEFAULT 'S' COMMENT 'S:string,I:int,P:parent, B:bool,D:date,T:time,H:hidden',
  `is_list` tinyint(1) DEFAULT '0' COMMENT 'list of values',
  `is_hidden` tinyint(1) NOT NULL DEFAULT '0' COMMENT '1:hidden',
  `is_cart_attribute` tinyint(1) NOT NULL DEFAULT '0' COMMENT 'Add attributes to cart',
  `published` tinyint(1) NOT NULL DEFAULT '1',
  `created_on` datetime NOT NULL default '0000-00-00 00:00:00',
  `created_by` int(11) NOT NULL DEFAULT 0,
  `ordering` int(2) NOT NULL DEFAULT '0',
  `modified_on` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modified_by` int(11) NOT NULL DEFAULT 0,
  `locked_on` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `locked_by` int(11) NOT NULL DEFAULT 0,
  KEY `idx_custom_parent_id` (`custom_parent_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='custom fields definition' AUTO_INCREMENT=1 ;


-- --------------------------------------------------------
--
-- Table structure for table `#_virtuemart_customplugins`
--

CREATE TABLE IF NOT EXISTS `#__virtuemart_customplugins` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `virtuemart_custom_id` bigint(20) unsigned NOT NULL,
  `virtuemart_vendor_id` int(11) NOT NULL DEFAULT '1',
  `custom_jplugin_id` int(11) NOT NULL,
  `custom_name` char(255) NOT NULL DEFAULT '',
  `custom_element` char(50) NOT NULL DEFAULT '',
  `discount` decimal(12,2) NOT NULL DEFAULT '0.00',
  `discount_is_percentage` tinyint(1) NOT NULL DEFAULT '0',
  `discount_max_amount` decimal(10,2) NOT NULL DEFAULT '0.00',
  `discount_min_amount` decimal(10,2) NOT NULL DEFAULT '0.00',
  `custom_params` text NOT NULL,
  `shared` tinyint(1) NOT NULL DEFAULT '0' COMMENT 'valide for all vendors?',
  `ordering` int(2) NOT NULL DEFAULT '0',
  `published` tinyint(1) NOT NULL DEFAULT '1',
  `created_on` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `created_by` int(11) NOT NULL DEFAULT '0',
  `modified_on` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modified_by` int(11) NOT NULL DEFAULT '0',
  `locked_on` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `locked_by` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `virtuemart_custom_id` (`virtuemart_custom_id`),
  KEY `idx_custom_plugin_virtuemart_vendor_id` (`virtuemart_vendor_id`),
  KEY `idx_custom_plugin_name` (`custom_name`),
  KEY `idx_custom_plugin_ordering` (`ordering`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='The custom plugins for product';



-- --------------------------------------------------------
--
-- Table structure for table `#__virtuemart_manufacturers`
--

CREATE TABLE IF NOT EXISTS `#__virtuemart_manufacturers` (
  `virtuemart_manufacturer_id` INT(11) UNSIGNED NOT NULL AUTO_INCREMENT UNIQUE,
  `mf_name` char(64) DEFAULT NULL,
  `mf_email` char(255) DEFAULT NULL,
  `mf_desc` text,
  `virtuemart_manufacturercategories_id` int(11) DEFAULT NULL,
  `mf_url` char(255) NOT NULL DEFAULT '',
  `hits` int(11) unsigned NOT NULL DEFAULT '0',
  `published` tinyint(1) NOT NULL DEFAULT '1',
  `created_on` datetime NOT NULL default '0000-00-00 00:00:00',
  `created_by` int(11) NOT NULL DEFAULT 0,
  `modified_on` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modified_by` int(11) NOT NULL DEFAULT 0,
  `locked_on` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `locked_by` int(11) NOT NULL DEFAULT 0,
   PRIMARY KEY (`virtuemart_manufacturer_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='Manufacturers are those who deliver products' AUTO_INCREMENT=1 ;

--
-- Table structure for table `#__virtuemart_manufacturer_medias`
--

CREATE TABLE IF NOT EXISTS `#__virtuemart_manufacturer_medias` (
  `id` INT(11) UNSIGNED NOT NULL AUTO_INCREMENT UNIQUE,
  `virtuemart_manufacturer_id` int(11) NOT NULL DEFAULT '0',
  `virtuemart_media_id` int(11) NOT NULL DEFAULT '0',
  `ordering` int(2) NOT NULL DEFAULT '0',
  UNIQUE KEY `i_virtuemart_category_id` (`virtuemart_manufacturer_id`,`virtuemart_media_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `#__virtuemart_manufacturercategories`
--

CREATE TABLE IF NOT EXISTS `#__virtuemart_manufacturercategories` (
  `virtuemart_manufacturercategories_id` INT(11) UNSIGNED NOT NULL AUTO_INCREMENT UNIQUE,
  `mf_category_name` char(64) DEFAULT NULL,
  `mf_category_desc` text,
  `published` tinyint(1) NOT NULL DEFAULT '1',
  `created_on` datetime NOT NULL default '0000-00-00 00:00:00',
  `created_by` int(11) NOT NULL DEFAULT 0,
  `modified_on` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modified_by` int(11) NOT NULL DEFAULT 0,
  `locked_on` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `locked_by` int(11) NOT NULL DEFAULT 0,
  KEY `idx_manufacturer_category_category_name` (`mf_category_name`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='Manufacturers are assigned to these categories' AUTO_INCREMENT=1 ;


-- --------------------------------------------------------
--
-- Table structure for table `#__virtuemart_medias` (was  `#__virtuemart_product_files`)
--

CREATE TABLE IF NOT EXISTS `#__virtuemart_medias` (
  `virtuemart_media_id` INT(11) UNSIGNED NOT NULL AUTO_INCREMENT UNIQUE,
  `virtuemart_vendor_id` int(11) NOT NULL,
  `file_title` char(126) NOT NULL DEFAULT '',
  `file_description` char(254) NOT NULL,
  `file_meta` char(254) NOT NULL,
  `file_mimetype` char(64) NOT NULL,
  `file_type` char(32) NOT NULL,
  `file_url` text,
  `file_url_thumb` char(254) NOT NULL,
  `file_is_product_image` tinyint(1) NOT NULL,
  `file_is_downloadable` tinyint(1) NOT NULL,
  `file_is_forSale` tinyint(1) NOT NULL,
  `file_params` text,
  `ordering` int(11) DEFAULT NULL,
  `shared` tinyint(1) NOT NULL,
  `published` tinyint(1) NOT NULL DEFAULT '1',
  `created_on` datetime NOT NULL default '0000-00-00 00:00:00',
  `created_by` int(11) NOT NULL DEFAULT 0,
  `modified_on` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modified_by` int(11) NOT NULL DEFAULT 0,
  `locked_on` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `locked_by` int(11) NOT NULL DEFAULT 0,
  KEY (`virtuemart_vendor_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='Additional Images and Files which are assigned to products' AUTO_INCREMENT=1 ;


-- --------------------------------------------------------
--
-- Table structure for table `#__virtuemart_migration_oldtonew_ids` (only used for migration)
--

CREATE TABLE IF NOT EXISTS `#__virtuemart_migration_oldtonew_ids` (
	    `id` int(1),
	    `cats` blob ,
	    `catsxref` blob ,
	    `manus` blob ,
	    `mfcats` blob ,
	    `shoppergroups` blob ,
	    `products` blob,
	    `orderstates` blob,
	    `orders` blob ,
	    PRIMARY KEY (`id`)
	) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 COMMENT='xref table for vm1 ids to vm2 ids' ;


-- --------------------------------------------------------
--
-- Table structure for table `#__virtuemart_modules`
--

CREATE TABLE IF NOT EXISTS `#__virtuemart_modules` (
  `module_id` INT(11) UNSIGNED NOT NULL AUTO_INCREMENT UNIQUE,
  `module_name` char(255) DEFAULT NULL,
  `module_description` text,
  `module_perms` char(255) DEFAULT NULL,
  `published` tinyint(1) NOT NULL DEFAULT '1',
  `is_admin` enum('0','1') NOT NULL,
  `ordering` int(11) DEFAULT NULL,
  KEY `idx_module_name` (`module_name`),
  KEY `idx_module_ordering` (`ordering`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='VirtueMart Core Modules, not: Joomla modules' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `#__virtuemart_orders`
--

CREATE TABLE IF NOT EXISTS `#__virtuemart_orders` (
  `virtuemart_order_id` INT(11) UNSIGNED NOT NULL AUTO_INCREMENT UNIQUE,
  `virtuemart_user_id` int(11) NOT NULL DEFAULT '0',
  `virtuemart_vendor_id` int(11) NOT NULL DEFAULT '0',
  `order_number` char(32) DEFAULT NULL,
  `order_pass` char(8) DEFAULT NULL,
  `virtuemart_userinfo_id` char(32) DEFAULT NULL,
  `order_total` decimal(15,5) NOT NULL DEFAULT '0.00000',
  `order_subtotal` decimal(15,5) DEFAULT NULL,
  `order_tax` decimal(10,5) DEFAULT NULL,
  `order_tax_details` text NOT NULL,
  `order_shipment` decimal(10,2) DEFAULT NULL,
  `order_shipment_tax` decimal(10,5) DEFAULT NULL,
  `order_payment` decimal(10,2) DEFAULT NULL,
  `order_payment_tax` decimal(10,5) DEFAULT NULL,
  `coupon_discount` decimal(12,2) NOT NULL DEFAULT '0.00',
  `coupon_code` char(32) DEFAULT NULL,
  `order_discount` decimal(12,2) NOT NULL DEFAULT '0.00',
  `order_currency` INT(11) DEFAULT NULL,
  `order_status` char(1) DEFAULT NULL,
  `user_currency_id` INT(11) DEFAULT NULL,
  `user_currency_rate` DECIMAL(10,5) NOT NULL DEFAULT '1.0',
  `virtuemart_paymentmethod_id` INT(11) NOT NULL,
  `virtuemart_shipmentmethod_id` INT(11) NOT NULL,
  `customer_note` text NOT NULL,
  `ip_address` char(15) NOT NULL DEFAULT '',
  `created_on` datetime NOT NULL default '0000-00-00 00:00:00',
  `created_by` int(11) NOT NULL DEFAULT 0,
  `modified_on` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modified_by` int(11) NOT NULL DEFAULT 0,
  `locked_on` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `locked_by` int(11) NOT NULL DEFAULT 0,
  KEY `idx_orders_virtuemart_user_id` (`virtuemart_user_id`),
  KEY `idx_orders_virtuemart_vendor_id` (`virtuemart_vendor_id`),
  KEY `idx_orders_order_number` (`order_number`),
  KEY `idx_orders_virtuemart_userinfo_id` (`virtuemart_userinfo_id`),
  KEY `idx_orders_virtuemart_paymentmethod_id` (`virtuemart_paymentmethod_id`),
  KEY `idx_orders_virtuemart_shipmentmethod_id` (`virtuemart_shipmentmethod_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='Used to store all orders' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `#__virtuemart_order_histories`
--

CREATE TABLE IF NOT EXISTS `#__virtuemart_order_histories` (
  `virtuemart_order_history_id` INT(11) UNSIGNED NOT NULL AUTO_INCREMENT UNIQUE,
  `virtuemart_order_id` int(11) NOT NULL DEFAULT '0',
  `order_status_code` char(1) NOT NULL DEFAULT '0',
  `customer_notified` int(1) DEFAULT '0',
  `comments` text,
  `published` tinyint(1) NOT NULL DEFAULT '1',
  `created_on` datetime NOT NULL default '0000-00-00 00:00:00',
  `created_by` int(11) NOT NULL DEFAULT 0,
  `modified_on` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modified_by` int(11) NOT NULL DEFAULT 0,
  `locked_on` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `locked_by` int(11) NOT NULL DEFAULT 0
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='Stores all actions and changes that occur to an order' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `#__virtuemart_order_items`
--

CREATE TABLE IF NOT EXISTS `#__virtuemart_order_items` (
  `virtuemart_order_item_id` INT(11) UNSIGNED NOT NULL AUTO_INCREMENT UNIQUE,
  `virtuemart_order_id` int(11) DEFAULT NULL,
  `virtuemart_userinfo_id` char(32) DEFAULT NULL,
  `virtuemart_vendor_id` int(11) DEFAULT NULL,
  `virtuemart_product_id` int(11) DEFAULT NULL,
  `order_item_sku` char(64) NOT NULL DEFAULT '',
  `order_item_name` char(255) NOT NULL DEFAULT '',
  `product_quantity` int(11) DEFAULT NULL,
  `product_item_price` decimal(15,5) DEFAULT NULL,
  `product_final_price` decimal(15,5) NOT NULL DEFAULT '0.00000',
  `order_item_currency` INT(11) DEFAULT NULL,
  `order_status` char(1) DEFAULT NULL,
  `product_attribute` text,
  `created_on` datetime NOT NULL default '0000-00-00 00:00:00',
  `created_by` int(11) NOT NULL DEFAULT 0,
  `modified_on` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modified_by` int(11) NOT NULL DEFAULT 0,
  `locked_on` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `locked_by` int(11) NOT NULL DEFAULT 0,
  KEY `virtuemart_product_id` (`virtuemart_product_id`),
  KEY `idx_order_item_virtuemart_order_id` (`virtuemart_order_id`),
  KEY `idx_order_item_virtuemart_userinfo_id` (`virtuemart_userinfo_id`),
  KEY `idx_order_item_virtuemart_vendor_id` (`virtuemart_vendor_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='Stores all items (products) which are part of an order' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `#__virtuemart_orderstates`
--

CREATE TABLE IF NOT EXISTS `#__virtuemart_orderstates` (
  `virtuemart_orderstate_id` INT(11) UNSIGNED NOT NULL AUTO_INCREMENT UNIQUE,
  `virtuemart_vendor_id` int(11) DEFAULT NULL,
  `order_status_code` char(1) NOT NULL DEFAULT '',
  `order_status_name` char(64) DEFAULT NULL,
  `order_status_description` text NOT NULL,
  `ordering` int(2) NOT NULL DEFAULT '0',
  `published` tinyint(1) NOT NULL DEFAULT '1',
 `created_on` datetime NOT NULL default '0000-00-00 00:00:00',
  `created_by` int(11) NOT NULL DEFAULT 0,
  `modified_on` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modified_by` int(11) NOT NULL DEFAULT 0,
  `locked_on` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `locked_by` int(11) NOT NULL DEFAULT 0,
  KEY `idx_order_status_ordering` (`ordering`),
  KEY `idx_order_status_virtuemart_vendor_id` (`virtuemart_vendor_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='All available order statuses' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `#__virtuemart_order_userinfos`
--

CREATE TABLE IF NOT EXISTS `#__virtuemart_order_userinfos` (
  `virtuemart_order_userinfo_id` INT(11) UNSIGNED NOT NULL AUTO_INCREMENT UNIQUE,
  `virtuemart_order_id` int(11) NOT NULL DEFAULT '0',
  `virtuemart_user_id` int(11) NOT NULL DEFAULT '0',
  `address_type` char(2) DEFAULT NULL,
  `address_type_name` char(32) DEFAULT NULL,
  `company` char(64) DEFAULT NULL,
  `title` char(32) DEFAULT NULL,
  `last_name` char(32) DEFAULT NULL,
  `first_name` char(32) DEFAULT NULL,
  `middle_name` char(32) DEFAULT NULL,
  `phone_1` char(24) DEFAULT NULL,
  `phone_2` char(24) DEFAULT NULL,
  `fax` char(24) DEFAULT NULL,
  `address_1` char(64) NOT NULL DEFAULT '',
  `address_2` char(64) DEFAULT NULL,
  `city` char(32) NOT NULL DEFAULT '',
  `virtuemart_state_id` int(4) NOT NULL DEFAULT '0',
  `virtuemart_country_id` int(4) NOT NULL DEFAULT '0',
  `zip` char(16) NOT NULL DEFAULT '',
  `email` char(255) DEFAULT NULL,
  `agreed` tinyint(1) NOT NULL DEFAULT '0',
  `created_on` datetime NOT NULL default '0000-00-00 00:00:00',
  `created_by` int(11) NOT NULL DEFAULT 0,
  `modified_on` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modified_by` int(11) NOT NULL DEFAULT 0,
  `locked_on` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `locked_by` int(11) NOT NULL DEFAULT 0,
  KEY `idx_order_info_virtuemart_order_id` (`virtuemart_order_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='Stores the BillTo and ShipTo Information at order time' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `#__virtuemart_paymentmethods`
--

CREATE TABLE IF NOT EXISTS `#__virtuemart_paymentmethods` (
  `virtuemart_paymentmethod_id` INT(11) UNSIGNED NOT NULL AUTO_INCREMENT UNIQUE,
  `virtuemart_vendor_id` int(11) NOT NULL DEFAULT '1',
  `payment_jplugin_id` int(11) NOT NULL,
  `payment_name` char(255) NOT NULL DEFAULT '',
  `payment_desc`  text NOT NULL COMMENT 'Description',
  `slug` char(255) NOT NULL DEFAULT '',
  `payment_element` char(50) NOT NULL DEFAULT '',
  `payment_params` text NOT NULL,
  `shared` tinyint(1) NOT NULL DEFAULT '0' COMMENT 'valide for all vendors?',
  `ordering` int(2) NOT NULL DEFAULT '0',
  `published` tinyint(1) NOT NULL DEFAULT '1',
  `created_on` datetime NOT NULL default '0000-00-00 00:00:00',
  `created_by` int(11) NOT NULL DEFAULT 0,
  `modified_on` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modified_by` int(11) NOT NULL DEFAULT 0,
  `locked_on` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `locked_by` int(11) NOT NULL DEFAULT 0,
	KEY `idx_virtuemart_paymentmethod_id` (`virtuemart_paymentmethod_id`),
	KEY `idx_payment_jplugin_id` (`payment_jplugin_id`),
	KEY `idx_payment_element` (payment_element,`virtuemart_vendor_id`),
	KEY `idx_payment_method_ordering` (`ordering`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='The payment methods of your store' AUTO_INCREMENT=1 ;


-- --------------------------------------------------------
--
-- Table structure for table `#__virtuemart_paymentmethod_shoppergroups`
--

CREATE TABLE IF NOT EXISTS `#__virtuemart_paymentmethod_shoppergroups` (
  `id` INT(11) UNSIGNED NOT NULL AUTO_INCREMENT UNIQUE,
  `virtuemart_paymentmethod_id` int(11) NOT NULL DEFAULT '0',
  `virtuemart_shoppergroup_id` int(11) NOT NULL DEFAULT '0',
  UNIQUE KEY `i_virtuemart_paymentmethod_id` (`virtuemart_paymentmethod_id`,`virtuemart_shoppergroup_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='xref table for paymentmethods to shoppergroup' AUTO_INCREMENT=1 ;



-- --------------------------------------------------------
--
-- Table structure for table `#__virtuemart_products`
--

CREATE TABLE IF NOT EXISTS `#__virtuemart_products` (
  `virtuemart_product_id` INT(11) UNSIGNED NOT NULL AUTO_INCREMENT UNIQUE,
  `virtuemart_vendor_id` int(11) NOT NULL DEFAULT '0',
  `product_parent_id` int(11) NOT NULL DEFAULT '0',
  `product_sku` char(64) NOT NULL DEFAULT '',
  `product_name` char(255) DEFAULT NULL,
  `product_s_desc` text,
  `product_desc` text,
  `product_weight` decimal(10,4) DEFAULT NULL,
  `product_weight_uom` char(3) DEFAULT 'KG',
  `product_length` decimal(10,4) DEFAULT NULL,
  `product_width` decimal(10,4) DEFAULT NULL,
  `product_height` decimal(10,4) DEFAULT NULL,
  `product_lwh_uom` char(3) DEFAULT 'M',
  `product_url` char(255) DEFAULT NULL,
  `product_in_stock` int(11) NOT NULL DEFAULT '0',
  `product_ordered` int(11) NOT NULL DEFAULT '0',
  `low_stock_notification` int(11) NOT NULL DEFAULT '0',
  `product_available_date` datetime NOT NULL default '0000-00-00 00:00:00',
  `product_availability` char(32) NOT NULL DEFAULT '',
  `product_special` tinyint(1) DEFAULT '0',
  `ship_code_id` int(11) DEFAULT NULL,
  `product_sales` int(11) NOT NULL DEFAULT '0',
  `product_unit` char(4) DEFAULT NULL,
  `product_packaging` int(11) DEFAULT NULL,
  `product_params` text NOT NULL,
  `hits` int(11) unsigned NOT NULL DEFAULT '0',
  `intnotes` text,
  `metadesc` text NOT NULL,
  `metakey` text NOT NULL,
  `metarobot` text NOT NULL,
  `metaauthor` text NOT NULL,
  `layout` char(16) NOT NULL,
  `published` tinyint(1) NOT NULL DEFAULT '1',
  `created_on` datetime NOT NULL default '0000-00-00 00:00:00',
  `created_by` int(11) NOT NULL DEFAULT 0,
  `modified_on` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modified_by` int(11) NOT NULL DEFAULT 0,
  `locked_on` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `locked_by` int(11) NOT NULL DEFAULT 0,
  KEY `idx_product_virtuemart_vendor_id` (`virtuemart_vendor_id`),
  KEY `idx_product_product_parent_id` (`product_parent_id`),
  KEY `idx_product_sku` (`product_sku`),
  KEY `idx_product_ship_code_id` (`ship_code_id`)

) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='All products are stored here.' AUTO_INCREMENT=1 ;


-- --------------------------------------------------------

--
-- Table structure for table `#__virtuemart_product_categories`
--

CREATE TABLE IF NOT EXISTS `#__virtuemart_product_categories` (
  `id` INT(11) UNSIGNED NOT NULL AUTO_INCREMENT UNIQUE,
  `virtuemart_product_id` int(11) NOT NULL DEFAULT '0',
  `virtuemart_category_id` int(11) NOT NULL DEFAULT '0',
  `ordering` int(11) DEFAULT NULL,
  UNIQUE KEY `i_virtuemart_product_id` (`virtuemart_product_id`,`virtuemart_category_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 COMMENT='Maps Products to Categories';

-- --------------------------------------------------------
--
-- Table structure for table `#__virtuemart_product_shoppergroups`
--
--

CREATE TABLE IF NOT EXISTS `#__virtuemart_product_shoppergroups` (
  `id` INT(11) UNSIGNED NOT NULL AUTO_INCREMENT UNIQUE,
  `virtuemart_product_id` int(11) NOT NULL DEFAULT '0',
  `virtuemart_shoppergroup_id` int(11) NOT NULL DEFAULT '0',
  UNIQUE KEY `i_virtuemart_product_id` (`virtuemart_product_id`,`virtuemart_shoppergroup_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 COMMENT='Maps Products to Categories';

-- --------------------------------------------------------
--
-- Table structure `#__virtuemart_product_customfields`
--

CREATE TABLE IF NOT EXISTS `#__virtuemart_product_customfields` (
  `virtuemart_customfield_id` INT(11) UNSIGNED NOT NULL AUTO_INCREMENT UNIQUE COMMENT 'field id',
  `virtuemart_product_id` int(11) NOT NULL,
  `virtuemart_custom_id` int(11) NOT NULL COMMENT 'custom group id',
  `custom_value` char(255) DEFAULT NULL COMMENT 'field value',
  `custom_price` char(255) DEFAULT NULL COMMENT 'price',
  `custom_param` text COMMENT 'Param for Plugins',
  `published` tinyint(1) NOT NULL DEFAULT '1',
  `created_on` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `created_by` int(11) NOT NULL DEFAULT '0',
  `modified_on` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modified_by` int(11) NOT NULL DEFAULT '0',
  `locked_on` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `locked_by` int(11) NOT NULL DEFAULT '0',
  `ordering` int(2) NOT NULL DEFAULT '0',
  KEY `idx_virtuemart_product_id` (`virtuemart_product_id`),
  KEY `idx_virtuemart_custom_id` (`virtuemart_custom_id`),
  KEY `idx_custom_value` (`custom_value`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='custom fields' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------
--
-- Table structure for table `#__virtuemart_product_downloads`
--

CREATE TABLE IF NOT EXISTS `#__virtuemart_product_downloads` (
  `virtuemart_product_id` INT(11) UNSIGNED NOT NULL AUTO_INCREMENT UNIQUE,
  `virtuemart_user_id` int(11) NOT NULL DEFAULT '0',
  `virtuemart_order_id` int(11) NOT NULL DEFAULT '0',
  `end_date` datetime NOT NULL default '0000-00-00 00:00:00',
  `download_max` int(11) NOT NULL DEFAULT '0',
  `download_id` char(32) NOT NULL DEFAULT '',
  `file_name` char(255) NOT NULL DEFAULT '',
  `published` tinyint(1) NOT NULL DEFAULT '1',
  `created_on` datetime NOT NULL default '0000-00-00 00:00:00',
  `created_by` int(11) NOT NULL DEFAULT 0,
  `modified_on` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modified_by` int(11) NOT NULL DEFAULT 0,
  `locked_on` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `locked_by` int(11) NOT NULL DEFAULT 0,
  KEY `virtuemart_user_id` (`virtuemart_user_id`),
  KEY `virtuemart_order_id` (`virtuemart_order_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 COMMENT='Active downloads for selling downloadable goods';


-- --------------------------------------------------------
--
-- Table structure for table `#__virtuemart_product_medias`
--

CREATE TABLE IF NOT EXISTS `#__virtuemart_product_medias` (
  `id` INT(11) UNSIGNED NOT NULL AUTO_INCREMENT UNIQUE,
  `virtuemart_product_id` int(11) NOT NULL DEFAULT '0',
  `virtuemart_media_id` int(11) NOT NULL DEFAULT '0',
  `ordering` int(2) NOT NULL DEFAULT '0',
  UNIQUE KEY `i_virtuemart_category_id` (`virtuemart_product_id`,`virtuemart_media_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;


-- --------------------------------------------------------
--
-- Table structure for table `#__virtuemart_product_manufacturers`
--

CREATE TABLE IF NOT EXISTS `#__virtuemart_product_manufacturers` (
  `id` INT(11) UNSIGNED NOT NULL AUTO_INCREMENT UNIQUE,
  `virtuemart_product_id` int(11) DEFAULT NULL,
  `virtuemart_manufacturer_id` int(11) DEFAULT NULL,
  UNIQUE KEY `i_virtuemart_product_id` (`virtuemart_product_id`,`virtuemart_manufacturer_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 COMMENT='Maps a product to a manufacturer';


-- --------------------------------------------------------
--
-- Table structure for table `#__virtuemart_product_prices`
--

CREATE TABLE IF NOT EXISTS `#__virtuemart_product_prices` (
  `virtuemart_product_price_id` INT(11) UNSIGNED NOT NULL AUTO_INCREMENT UNIQUE,
  `virtuemart_product_id` int(11) NOT NULL DEFAULT '0',
  `virtuemart_shoppergroup_id` int(11) DEFAULT NULL,
  `product_price` decimal(15,5) DEFAULT NULL,
  `override` tinyint(1) DEFAULT NULL,
  `product_override_price` decimal(15,5) NULL,
  `product_tax_id` int(11) DEFAULT NULL,
  `product_discount_id` int(11) DEFAULT NULL,
  `product_currency` MEDIUMINT(3) DEFAULT NULL,
  `product_price_vdate` datetime DEFAULT NULL,
  `product_price_edate` datetime DEFAULT NULL,
  `price_quantity_start` int(11) unsigned DEFAULT NULL,
  `price_quantity_end` int(11) unsigned DEFAULT NULL,
  `created_on` datetime NOT NULL default '0000-00-00 00:00:00',
  `created_by` int(11) NOT NULL DEFAULT 0,
  `modified_on` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modified_by` int(11) NOT NULL DEFAULT 0,
  `locked_on` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `locked_by` int(11) NOT NULL DEFAULT 0,
  KEY `idx_product_price_product_id` (`virtuemart_product_id`),
  KEY `idx_product_price_virtuemart_shoppergroup_id` (`virtuemart_shoppergroup_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='Holds price records for a product' AUTO_INCREMENT=1 ;


-- --------------------------------------------------------
--
-- Table structure for table `#__virtuemart_product_relations`
-- is that needed that way?

CREATE TABLE IF NOT EXISTS `#__virtuemart_product_relations` (
  `id` INT(11) UNSIGNED NOT NULL AUTO_INCREMENT UNIQUE,
  `virtuemart_product_id` int(11) NOT NULL DEFAULT '0',
  `related_products` int(11),
  UNIQUE KEY `i_virtuemart_product_id` (`virtuemart_product_id`,`related_products`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1;


-- --------------------------------------------------------
--
-- Table structure for table `#__virtuemart_rating_reviews`
--

CREATE TABLE IF NOT EXISTS `#__virtuemart_rating_reviews` (
  `virtuemart_rating_review_id` INT(11) UNSIGNED NOT NULL AUTO_INCREMENT UNIQUE,
  `virtuemart_product_id` int(11) NOT NULL DEFAULT '0',
  `comment` text NOT NULL,
  `review_ok` int(11) NOT NULL DEFAULT '0',
  `review_rates` int(11) NOT NULL DEFAULT '0',
  `review_ratingcount` int(11) NOT NULL DEFAULT '0',
  `review_rating` float(1) NOT NULL DEFAULT '0',
  `lastip` char(50) NOT NULL DEFAULT '0',
  `published` tinyint(1) NOT NULL DEFAULT '1',
  `created_on` datetime NOT NULL default '0000-00-00 00:00:00',
  `created_by` int(11) NOT NULL DEFAULT 0,
  `modified_on` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modified_by` int(11) NOT NULL DEFAULT 0,
  `locked_on` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `locked_by` int(11) NOT NULL DEFAULT 0,
  UNIQUE KEY `i_virtuemart_product_id` (`virtuemart_product_id`,`created_by`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;


-- --------------------------------------------------------
--
-- Table structure for table `#__virtuemart_ratings`
--

CREATE TABLE IF NOT EXISTS `#__virtuemart_ratings` (
  `virtuemart_rating_id` INT(11) UNSIGNED NOT NULL AUTO_INCREMENT UNIQUE,
  `virtuemart_product_id` int(11) NOT NULL DEFAULT '0',
  `rates` int(11) NOT NULL ,
  `ratingcount` int(11) NOT NULL DEFAULT '0',
  `rating` float(1) NOT NULL DEFAULT '0',
  `published` tinyint(1) NOT NULL DEFAULT '1',
  `created_on` datetime NOT NULL default '0000-00-00 00:00:00',
  `created_by` int(11) NOT NULL DEFAULT 0,
  `modified_on` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modified_by` int(11) NOT NULL DEFAULT 0,
  UNIQUE KEY `i_virtuemart_product_id` (`virtuemart_product_id`,`virtuemart_rating_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 COMMENT='Stores all ratings for a product';


-- --------------------------------------------------------
--
-- Table structure for table `#__virtuemart_rating_votes`
--

CREATE TABLE IF NOT EXISTS `#__virtuemart_rating_votes` (
  `virtuemart_rating_vote_id` INT(11) UNSIGNED NOT NULL AUTO_INCREMENT UNIQUE,
  `virtuemart_product_id` int(11) NOT NULL DEFAULT '0',
  `vote` int(11) NOT NULL,
  `lastip` char(50) NOT NULL DEFAULT '0',
  `created_on` datetime NOT NULL default '0000-00-00 00:00:00',
  `created_by` int(11) NOT NULL DEFAULT 0,
  `modified_on` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modified_by` int(11) NOT NULL DEFAULT 0,
  UNIQUE KEY `i_virtuemart_product_id` (`virtuemart_product_id`,`created_by`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 COMMENT='Stores all ratings for a product';


-- --------------------------------------------------------
--
-- Table structure for table `#__virtuemart_shipmentmethods`
--

CREATE TABLE IF NOT EXISTS `#__virtuemart_shipmentmethods` (
  `virtuemart_shipmentmethod_id` INT(11) UNSIGNED NOT NULL AUTO_INCREMENT UNIQUE,
  `virtuemart_vendor_id` int(11) DEFAULT NULL,
  `shipment_jplugin_id` int(11) NOT NULL,
  `shipment_name` char(200) NOT NULL DEFAULT '',
  `shipment_desc`  text NOT NULL COMMENT 'Description',
  `slug` char(255) NOT NULL DEFAULT '',
  `shipment_element` char(50) NOT NULL DEFAULT '',
  `shipment_params` text NOT NULL,
  `shipment_value` decimal(10,2) NOT NULL DEFAULT '0.00',
  `ordering` int(2) NOT NULL DEFAULT '0',
  `shared` tinyint(1) NOT NULL,
  `published` tinyint(1) NOT NULL DEFAULT '1',
  `created_on` datetime NOT NULL default '0000-00-00 00:00:00',
  `created_by` int(11) NOT NULL DEFAULT 0,
  `modified_on` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modified_by` int(11) NOT NULL DEFAULT 0,
  `locked_on` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `locked_by` int(11) NOT NULL DEFAULT 0,
	KEY `idx_virtuemart_shipmentmethod_id` (`virtuemart_shipmentmethod_id`),
	KEY `idx_shipment_jplugin_id` (`shipment_jplugin_id`),
	KEY `idx_shipment_element` (shipment_element,`virtuemart_vendor_id`),
	KEY `idx_shipment_method_ordering` (`ordering`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='Shipment created from the shipment plugins' AUTO_INCREMENT=1 ;


-- --------------------------------------------------------
--
-- Table structure for table `#__virtuemart_shipmentmethods_shoppergroups`
--

CREATE TABLE IF NOT EXISTS `#__virtuemart_shipmentmethod_shoppergroups` (
  `id` INT(11) UNSIGNED NOT NULL AUTO_INCREMENT UNIQUE,
  `virtuemart_shipmentmethod_id` int(11) NOT NULL DEFAULT '0',
  `virtuemart_shoppergroup_id` int(11) NOT NULL DEFAULT '0',
  UNIQUE KEY `i_virtuemart_shipmentmethod_id` (`virtuemart_shipmentmethod_id`,`virtuemart_shoppergroup_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='xref table for shipment to shoppergroup' AUTO_INCREMENT=1 ;


-- --------------------------------------------------------

--
-- Table structure for table `#__virtuemart_shoppergroups`
--

CREATE TABLE IF NOT EXISTS `#__virtuemart_shoppergroups` (
  `virtuemart_shoppergroup_id` INT(11) UNSIGNED NOT NULL AUTO_INCREMENT UNIQUE,
  `virtuemart_vendor_id` int(11) DEFAULT NULL,
  `shopper_group_name` char(32) DEFAULT NULL,
  `shopper_group_desc` char(128),
  `custom_price_display` tinyint(1) NOT NULL DEFAULT '0',
  `price_display` blob,
  `default` tinyint(1) NOT NULL DEFAULT '0',
  `ordering` int(2) NOT NULL DEFAULT '0',
  `shared` tinyint(1) NOT NULL,
  `published` tinyint(1) NOT NULL DEFAULT '1',
  `created_on` datetime NOT NULL default '0000-00-00 00:00:00',
  `created_by` int(11) NOT NULL DEFAULT 0,
  `modified_on` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modified_by` int(11) NOT NULL DEFAULT 0,
  `locked_on` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `locked_by` int(11) NOT NULL DEFAULT 0,
  KEY `idx_shopper_group_virtuemart_vendor_id` (`virtuemart_vendor_id`),
  KEY `idx_shopper_group_name` (`shopper_group_name`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='Shopper Groups that users can be assigned to' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------


--
-- Table structure for table `#__virtuemart_states`
--

CREATE TABLE IF NOT EXISTS `#__virtuemart_states` (
  `virtuemart_state_id` INT(11) UNSIGNED NOT NULL AUTO_INCREMENT UNIQUE,
  `virtuemart_vendor_id` int(11) DEFAULT NULL,
  `virtuemart_country_id` int(11) NOT NULL DEFAULT '1',
  `virtuemart_worldzone_id` int(11) NOT NULL,
  `state_name` char(64) DEFAULT NULL,
  `state_3_code` char(3) DEFAULT NULL,
  `state_2_code` char(2) DEFAULT NULL,
  `ordering` int(2) NOT NULL DEFAULT '0',
  `shared` tinyint(1) NOT NULL,
  `published` tinyint(1) NOT NULL DEFAULT '1',
  `created_on` datetime NOT NULL default '0000-00-00 00:00:00',
  `created_by` int(11) NOT NULL DEFAULT 0,
  `modified_on` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modified_by` int(11) NOT NULL DEFAULT 0,
  `locked_on` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `locked_by` int(11) NOT NULL DEFAULT 0,
  KEY `idx_virtuemart_vendor_id` (`virtuemart_vendor_id`),
  UNIQUE KEY `idx_state_3_code` (`virtuemart_country_id`,`state_3_code`),
  UNIQUE KEY `idx_state_2_code` (`virtuemart_country_id`,`state_2_code`),
  KEY `idx_virtuemart_country_id` (`virtuemart_country_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='States that are assigned to a country' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `#__virtuemart_vmusers`
--

CREATE TABLE IF NOT EXISTS `#__virtuemart_vmusers` (
  `virtuemart_user_id` INT(11) UNSIGNED NOT NULL AUTO_INCREMENT UNIQUE,
  `virtuemart_vendor_id` int(11) NOT NULL DEFAULT '0',
  `user_is_vendor` tinyint(1) NOT NULL DEFAULT '0',
  `customer_number` char(32) DEFAULT NULL,
  `perms` char(40) NOT NULL DEFAULT 'shopper',
  `virtuemart_paymentmethod_id` int NOT NULL DEFAULT '0',
  `virtuemart_shipmentmethod_id` int NOT NULL DEFAULT '0',
  `agreed` tinyint(1) NOT NULL DEFAULT '0',
  `created_on` datetime NOT NULL default '0000-00-00 00:00:00',
  `created_by` int(11) NOT NULL DEFAULT 0,
  `modified_on` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modified_by` int(11) NOT NULL DEFAULT 0,
  `locked_on` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `locked_by` int(11) NOT NULL DEFAULT 0,
  KEY `virtuemart_vendor_id` (virtuemart_vendor_id),
  UNIQUE KEY `i_virtuemart_user_id` (`virtuemart_user_id`,`virtuemart_vendor_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 COMMENT='Holds the unique user data' ;

-- --------------------------------------------------------

--
-- Table structure for table `#__virtuemart_vmuser_shoppergroups`
--

CREATE TABLE IF NOT EXISTS `#__virtuemart_vmuser_shoppergroups` (
  `id` INT(11) UNSIGNED NOT NULL AUTO_INCREMENT UNIQUE,
  `virtuemart_user_id` int(11) NOT NULL DEFAULT '0',
  `virtuemart_shoppergroup_id` int(11) NOT NULL DEFAULT '0',
  UNIQUE KEY `i_virtuemart_user_id` (`virtuemart_user_id`,`virtuemart_shoppergroup_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 COMMENT='xref table for users to shopper group' ;


-- --------------------------------------------------------

CREATE TABLE IF NOT EXISTS `#__virtuemart_permgroups` (
  `virtuemart_permgroup_id` INT(11) UNSIGNED NOT NULL AUTO_INCREMENT UNIQUE,
  `virtuemart_vendor_id` int(11) DEFAULT NULL,
  `group_name` char(128) DEFAULT NULL,
  `group_level` int(11) DEFAULT NULL,
  `ordering` int(2) NOT NULL DEFAULT '0',
  `shared` tinyint(1) NOT NULL,
  `published` tinyint(1) NOT NULL DEFAULT '1',
  `created_on` datetime NOT NULL default '0000-00-00 00:00:00',
  `created_by` int(11) NOT NULL DEFAULT 0,
  `modified_on` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modified_by` int(11) NOT NULL DEFAULT 0,
  `locked_on` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `locked_by` int(11) NOT NULL DEFAULT 0,
  KEY `virtuemart_vendor_id` (`virtuemart_vendor_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='Holds all the user groups' AUTO_INCREMENT=1 ;


-- --------------------------------------------------------
--
-- Table structure for table `#__virtuemart_userfields`
--

CREATE TABLE IF NOT EXISTS `#__virtuemart_userfields` (
  `virtuemart_userfield_id` INT(11) UNSIGNED NOT NULL AUTO_INCREMENT UNIQUE,
  `virtuemart_vendor_id` int(11) DEFAULT NULL,
  `name` char(50) NOT NULL DEFAULT '',
  `title` char(255) NOT NULL,
  `description` mediumtext NOT NULL,
  `type` char(50) NOT NULL DEFAULT '',
  `maxlength` int(11) DEFAULT NULL,
  `size` int(11) DEFAULT NULL,
  `required` tinyint(4) DEFAULT '0',
  `cols` int(11) DEFAULT NULL,
  `rows` int(11) DEFAULT NULL,
  `value` char(50) DEFAULT NULL,
  `default` int(11) DEFAULT NULL,
  `registration` tinyint(1) NOT NULL DEFAULT '0',
  `shipment` tinyint(1) NOT NULL DEFAULT '0',
  `account` tinyint(1) NOT NULL DEFAULT '1',
  `readonly` tinyint(1) NOT NULL DEFAULT '0',
  `calculated` tinyint(1) NOT NULL DEFAULT '0',
  `sys` tinyint(4) NOT NULL DEFAULT '0',
  `params` mediumtext,
  `ordering` int(2) NOT NULL DEFAULT '0',
  `shared` tinyint(1) NOT NULL,
  `published` tinyint(1) NOT NULL DEFAULT '1',
  `created_on` datetime NOT NULL default '0000-00-00 00:00:00',
  `created_by` int(11) NOT NULL DEFAULT 0,
  `modified_on` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modified_by` int(11) NOT NULL DEFAULT 0,
  `locked_on` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `locked_by` int(11) NOT NULL DEFAULT 0,
  KEY `virtuemart_vendor_id` (`virtuemart_vendor_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='Holds the fields for the user information' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `#__virtuemart_userfield_values`
--

CREATE TABLE IF NOT EXISTS `#__virtuemart_userfield_values` (
  `virtuemart_userfield_value_id` INT(11) UNSIGNED NOT NULL AUTO_INCREMENT UNIQUE,
  `virtuemart_userfield_id` int(11) NOT NULL DEFAULT '0',
  `fieldtitle` char(255) NOT NULL DEFAULT '',
  `fieldvalue` char(255) NOT NULL,
  `sys` tinyint(4) NOT NULL DEFAULT '0',
  `ordering` int(2) NOT NULL DEFAULT '0',
  `created_on` datetime NOT NULL default '0000-00-00 00:00:00',
  `created_by` int(11) NOT NULL DEFAULT 0,
  `modified_on` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modified_by` int(11) NOT NULL DEFAULT 0,
  `locked_on` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `locked_by` int(11) NOT NULL DEFAULT 0
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='Holds the different values for dropdown and radio lists' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `#__virtuemart_userinfos`
--

CREATE TABLE IF NOT EXISTS `#__virtuemart_userinfos` (
  `virtuemart_userinfo_id` char(32) NOT NULL DEFAULT '',
  `virtuemart_user_id` int(11) NOT NULL DEFAULT '0',
  `address_type` char(2) DEFAULT NULL,
  `address_type_name` char(32) DEFAULT '',
  `name` char(64) DEFAULT NULL,
  `company` char(64) DEFAULT NULL,
  `title` char(32) DEFAULT NULL,
  `last_name` char(32) DEFAULT NULL,
  `first_name` char(32) DEFAULT NULL,
  `middle_name` char(32) DEFAULT NULL,
  `phone_1` char(24) DEFAULT NULL,
  `phone_2` char(24) DEFAULT NULL,
  `fax` char(24) DEFAULT NULL,
  `address_1` char(64) NOT NULL DEFAULT '',
  `address_2` char(64) DEFAULT NULL,
  `city` char(32) NOT NULL DEFAULT '',
  `virtuemart_state_id` int(5) NOT NULL DEFAULT '0',
  `virtuemart_country_id` int(5) NOT NULL DEFAULT '0',
  `zip` char(32) NOT NULL DEFAULT '',
  `agreed` tinyint(1) NOT NULL DEFAULT '0',
  `created_on` datetime NOT NULL default '0000-00-00 00:00:00',
  `created_by` int(11) NOT NULL DEFAULT 0,
  `modified_on` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modified_by` int(11) NOT NULL DEFAULT 0,
  `locked_on` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `locked_by` int(11) NOT NULL DEFAULT 0,
  PRIMARY KEY (`virtuemart_userinfo_id`),
  KEY `idx_userinfo_virtuemart_user_id` (`virtuemart_user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 COMMENT='Customer Information, BT = BillTo and ST = ShipTo';

-- --------------------------------------------------------

--
-- Table structure for table `#__virtuemart_vendors`
--

CREATE TABLE IF NOT EXISTS `#__virtuemart_vendors` (
  `virtuemart_vendor_id` INT(11) UNSIGNED NOT NULL AUTO_INCREMENT UNIQUE,
  `vendor_name` char(64) DEFAULT NULL,
  `vendor_phone` char(24) DEFAULT NULL,
  `vendor_store_name` char(128) NOT NULL DEFAULT '',
  `vendor_store_desc` text,
  `vendor_currency` int(11) DEFAULT NULL,
  `vendor_terms_of_service` text NOT NULL,
  `vendor_url` char(255) NOT NULL DEFAULT '',
  `vendor_accepted_currencies` text NOT NULL,
  `vendor_params` text NOT NULL,
  `created_on` datetime NOT NULL default '0000-00-00 00:00:00',
  `created_by` int(11) NOT NULL DEFAULT 0,
  `modified_on` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modified_by` int(11) NOT NULL DEFAULT 0,
  `locked_on` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `locked_by` int(11) NOT NULL DEFAULT 0,
  KEY `idx_vendor_name` (`vendor_name`)
--  KEY `idx_vendor_category_id` (`vendor_category_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='Vendors manage their products in your store' AUTO_INCREMENT=1 ;


--
-- Table structure for table `#__virtuemart_vendor_medias`
--

CREATE TABLE IF NOT EXISTS `#__virtuemart_vendor_medias` (
  `id` INT(11) UNSIGNED NOT NULL AUTO_INCREMENT UNIQUE,
  `virtuemart_vendor_id` int(11) NOT NULL DEFAULT '0',
  `virtuemart_media_id` int(11) NOT NULL DEFAULT '0',
  `ordering` int(2) NOT NULL DEFAULT '0',
  UNIQUE KEY `i_virtuemart_vendor_id` (`virtuemart_vendor_id`,`virtuemart_media_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;


-- --------------------------------------------------------

--
-- Table structure for table `#__virtuemart_waitingusers`
--

CREATE TABLE IF NOT EXISTS `#__virtuemart_waitingusers` (
  `virtuemart_waitinguser_id` INT(11) UNSIGNED NOT NULL AUTO_INCREMENT UNIQUE,
  `virtuemart_product_id` int(11) NOT NULL DEFAULT '0',
  `virtuemart_user_id` int(11) NOT NULL DEFAULT '0',
  `notify_email` char(150) NOT NULL DEFAULT '',
  `notified` enum('0','1') DEFAULT '0',
  `notify_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `ordering` int(2) NOT NULL DEFAULT '0',
  `created_on` datetime NOT NULL default '0000-00-00 00:00:00',
  `created_by` int(11) NOT NULL DEFAULT 0,
  `modified_on` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modified_by` int(11) NOT NULL DEFAULT 0,
  `locked_on` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `locked_by` int(11) NOT NULL DEFAULT 0,
  KEY `virtuemart_product_id` (`virtuemart_product_id`),
  KEY `notify_email` (`notify_email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='Stores notifications, users waiting f. products out of stock' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `#__virtuemart_worldzones`
--

CREATE TABLE IF NOT EXISTS `#__virtuemart_worldzones` (
  `virtuemart_worldzone_id` INT(11) UNSIGNED NOT NULL AUTO_INCREMENT UNIQUE,
  `virtuemart_vendor_id` int(11) DEFAULT NULL,
  `zone_name` char(255) DEFAULT NULL,
  `zone_cost` decimal(10,2) DEFAULT NULL,
  `zone_limit` decimal(10,2) DEFAULT NULL,
  `zone_description` text NOT NULL,
  `zone_tax_rate` int(11) NOT NULL DEFAULT '0',
  `ordering` int(2) NOT NULL DEFAULT '0',
  `shared` tinyint(1) NOT NULL,
  `published` tinyint(1) NOT NULL DEFAULT '1',
  `created_on` datetime NOT NULL default '0000-00-00 00:00:00',
  `created_by` int(11) NOT NULL DEFAULT 0,
  `modified_on` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modified_by` int(11) NOT NULL DEFAULT 0,
  `locked_on` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `locked_by` int(11) NOT NULL DEFAULT 0,
  KEY `virtuemart_vendor_id` (`virtuemart_vendor_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='The Zones managed by the Zone Shipment Module' AUTO_INCREMENT=1 ;

