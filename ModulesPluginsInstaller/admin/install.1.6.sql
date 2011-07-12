-- VM Plugin -- 
INSERT INTO `#__extensions` (`extension_id`, `name`, `type`, `element`, `folder`, `client_id`, `enabled`, `access`, `protected`, `manifest_cache`, `params`, `custom_data`, `system_data`, `checked_out`, `checked_out_time`, `ordering`, `state`)
VALUES 
(NULL, 'VMPayment - Paypal', 'plugin', 'paypal', 'vmpayment', 0, 1, 1, 0, '', '', '', '', 0, '0000-00-00 00:00:00', '0', '0'),
(NULL, 'VMPayment - Standard', 'plugin', 'standard', 'vmpayment', 0, 1, 1, 0, '', '', '', '', 0, '0000-00-00 00:00:00', '0', '0'),
(NULL, 'VMShipper - By weight, ZIP and countries', 'plugin', 'weight_countries', 'vmshipper', 0, 1, 1, 0, '', '', '', '', 0, '0000-00-00 00:00:00', '0', '0'),
(NULL, 'Search - Virtuemart Product', 'plugin', 'virtuemart', 'search', 0, 1, 1, 0, '', '', '', '', 0, '0000-00-00 00:00:00', '0', '0');

-- Joomla Module --
INSERT INTO `#__extensions` (`extension_id`, `name`, `type`, `element`, `folder`, `client_id`, `enabled`, `access`, `protected`, `manifest_cache`, `params`, `custom_data`, `system_data`, `checked_out`, `checked_out_time`, `ordering`, `state`)
VALUES (NULL, 'mod_virtuemart_currencies', 'module', 'mod_virtuemart_currencies', '', 0, 1, 1, 0, '', '', '', '', 0, '0000-00-00 00:00:00', '0', '0'),
(NULL, 'mod_virtuemart_product', 'module', 'mod_virtuemart_product', '', 0, 1, 1, 0, '', '', '', '', 0, '0000-00-00 00:00:00', '0', '0'),
(NULL, 'mod_virtuemart_search', 'module', 'mod_virtuemart_search', '', 0, 1, 1, 0, '', '', '', '', 0, '0000-00-00 00:00:00', '0', '0'),
(NULL, 'mod_virtuemart_manufacturers', 'module', 'mod_virtuemart_manufacturers', '', 0, 1, 1, 0, '', '', '', '', 0, '0000-00-00 00:00:00', '0', '0'),
(NULL, 'mod_virtuemart_cart', 'module', 'mod_virtuemart_cart', '', 0, 1, 1, 0, '', '', '', '', 0, '0000-00-00 00:00:00', '0', '0');

INSERT INTO `#__modules` (`id`, `title`, `note`,`content`, `ordering`, `position`, `checked_out`, `checked_out_time`, `publish_up`, `publish_down`, `published`, `module`, `access`, `showtitle`, `params`, `client_id`, `language`) 
VALUES (NULL, 'Currencies Selector'	, '', ''		, 5, 		'left', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 'mod_virtuemart_currencies', 0, 1, 'text_before=\nproduct_currency=\ncache=1\nmoduleclass_sfx=\nclass_sfx=\n\n', 0, '*');
INSERT INTO `#__modules_menu` (`moduleid`, `menuid`) VALUES( LAST_INSERT_ID() , '0');

INSERT INTO `#__modules` (`id`, `title`, `note`, `content`, `ordering`, `position`, `checked_out`, `checked_out_time`, `publish_up`, `publish_down`, `published`, `module`, `access`, `showtitle`, `params`, `client_id`, `language`) 
VALUES (NULL, 'Featured', '', '', 3, 'left',  0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 'mod_virtuemart_product', 0, 1, 'product_group=featured\nmax_items=2\nproducts_per_row=\ndisplay_style=list\nshow_price=1\nshow_addtocart=1\nheaderText=Best products\nfooterText=\nfilter_category=0\ncategory_id=1\ncache=0\nmoduleclass_sfx=\nclass_sfx=\n\n', 0, '*');
INSERT INTO `#__modules_menu` (`moduleid`, `menuid`) VALUES( LAST_INSERT_ID() , '0');

INSERT INTO `#__modules` (`id`, `title`, `note`, `content`, `ordering`, `position`, `checked_out`, `checked_out_time`, `publish_up`, `publish_down`, `published`, `module`, `access`, `showtitle`, `params`, `client_id`, `language`) 
VALUES (NULL, 'Best Sales', '', '', 0, 'left', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 'mod_virtuemart_product', 0, 1, 'product_group=topten\nmax_items=3\nproducts_per_row=\ndisplay_style=list\nshow_price=1\nshow_addtocart=1\nheaderText=\nfooterText=\nfilter_category=0\ncategory_id=1\ncache=0\nmoduleclass_sfx=\nclass_sfx=\n\n', 0, '*');
INSERT INTO `#__modules_menu` (`moduleid`, `menuid`) VALUES( LAST_INSERT_ID() , '0');

INSERT INTO `#__modules` (`id`, `title`, `note`, `content`, `ordering`, `position`, `checked_out`, `checked_out_time`, `publish_up`, `publish_down`, `published`, `module`, `access`, `showtitle`, `params`, `client_id`, `language`) 
VALUES (NULL, 'Search in Shop', '', '', 4, 'left', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 'mod_virtuemart_search', 0, 1, 'width=20\ntext=\nbutton=\nbutton_pos=right\nimagebutton=\nbutton_text=\nmoduleclass_sfx=\ncache=1\ncache_time=900\n\n', 0, '*');
INSERT INTO `#__modules_menu` (`moduleid`, `menuid`) VALUES( LAST_INSERT_ID() , '0');

INSERT INTO `#__modules` (`id`, `title`, `note`, `content`, `ordering`, `position`, `checked_out`, `checked_out_time`, `publish_up`, `publish_down`, `published`, `module`, `access`, `showtitle`, `params`, `client_id`, `language`) 
VALUES (NULL, 'Manufacturers', '', '', 4, 'left', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 'mod_virtuemart_manufacturers', 0, 1, 'show=all\ndisplay_style=div\nmanufacturers_per_row=\nheaderText=\nfooterText=\ncache=0\nmoduleclass_sfx=\nclass_sfx=', 0, '*');
INSERT INTO `#__modules_menu` (`moduleid`, `menuid`) VALUES( LAST_INSERT_ID() , '0');

INSERT INTO `#__modules` (`id`, `title`, `note`, `content`, `ordering`, `position`, `checked_out`, `checked_out_time`, `publish_up`, `publish_down`, `published`, `module`, `access`, `showtitle`, `params`, `client_id`, `language`) 
VALUES (NULL, 'shopping cart', '', '', 4, 'left', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 'mod_virtuemart_cart', 0, 1, 'moduleclass_sfx=\nshow_price=1\nshow_product_list=1\n\n', 0, '*');
INSERT INTO `#__modules_menu` (`moduleid`, `menuid`) VALUES( LAST_INSERT_ID() , '0');

CREATE TABLE IF NOT EXISTS `#__com_vm_all-in-one` (
				`id` INT(10) UNSIGNED NULL,
				`plugins` TEXT NULL,
				`modules` TEXT NULL,
				`languageFE` TEXT NULL,
				`languageBE` TEXT NULL,
				PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='To store the installed plugins and modules of VM' AUTO_INCREMENT=1 ;

