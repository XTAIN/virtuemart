-- VM Plugin -- 
INSERT INTO `#__extensions` (`extension_id`, `name`, `type`, `element`, `folder`, `client_id`, `enabled`, `access`, `protected`, `manifest_cache`, `params`, `custom_data`, `system_data`, `checked_out`, `checked_out_time`, `ordering`, `state`)
VALUES (NULL, 'VMPayment - Authorize', 'plugin', 'authorize', 'vmpayment', 0, 1, 1, 0, '', '', '', '', 0, '0000-00-00 00:00:00', '0', '0'),
(NULL, 'VMPayment - Cash on delivery', 'plugin', 'cashondel', 'vmpayment', 0, 1, 1, 0, '', '', '', '', 0, '0000-00-00 00:00:00', '0', '0'),
(NULL, 'VMShipper - Standard', 'plugin', 'standard', 'vmshipper', 0, 1, 1, 0, '', '', '', '', 0, '0000-00-00 00:00:00', '0', '0'),
(NULL, 'Search - Virtuemart Product', 'plugin', 'virtuemart', 'search', 0, 1, 1, 0, '', '', '', '', 0, '0000-00-00 00:00:00', '0', '0');

-- Joomla Module --
INSERT INTO `#__extensions` (`extension_id`, `name`, `type`, `element`, `folder`, `client_id`, `enabled`, `access`, `protected`, `manifest_cache`, `params`, `custom_data`, `system_data`, `checked_out`, `checked_out_time`, `ordering`, `state`)
VALUES (NULL, 'mod_virtuemart_currencies', 'module', 'mod_virtuemart_currencies', '', 0, 1, 1, 0, '', '', '', '', 0, '0000-00-00 00:00:00', '0', '0'),
(NULL, 'mod_virtuemart_product', 'module', 'mod_virtuemart_product', '', 0, 1, 1, 0, '', '', '', '', 0, '0000-00-00 00:00:00', '0', '0'),
(NULL, 'mod_virtuemart_search', 'module', 'mod_virtuemart_search', '', 0, 1, 1, 0, '', '', '', '', 0, '0000-00-00 00:00:00', '0', '0'),
(NULL, 'mod_virtuemart_manufacturers', 'module', 'mod_virtuemart_manufacturers', '', 0, 1, 1, 0, '', '', '', '', 0, '0000-00-00 00:00:00', '0', '0'),
(NULL, 'mod_virtuemart', 'module', 'mod_virtuemart', '', 0, 1, 1, 0, '', '', '', '', 0, '0000-00-00 00:00:00', '0', '0'),
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
VALUES (NULL, 'VM2 Shop', '', '', 4, 'left', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 'mod_virtuemart', 0, 1,'class_sfx=\nmoduleclass_sfx=\npretext=\nshow_login_form=no\nshow_categories=yes\nshow_listall=yes\nshow_adminlink=yes\nshow_accountlink=yes\nuseGreyBox_accountlink=0\nshow_minicart=yes\nuseGreyBox_cartlink=0\nshow_productsearch=yes\nshow_product_parameter_search=no\nmenutype=jscook\njscook_type=tree\njscookMenu_style=ThemeOffice\nmenu_orientation=hbr\njscookTree_style=ThemeXP\nroot_label=VMShop\n\n', 0, '*');
INSERT INTO `#__modules_menu` (`moduleid`, `menuid`) VALUES( LAST_INSERT_ID() , '0');

INSERT INTO `#__modules` (`id`, `title`, `note`, `content`, `ordering`, `position`, `checked_out`, `checked_out_time`, `publish_up`, `publish_down`, `published`, `module`, `access`, `showtitle`, `params`, `client_id`, `language`) 
VALUES (NULL, 'shopping cart', '', '', 4, 'left', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 'mod_virtuemart_cart', 0, 1, 'moduleclass_sfx=\nshow_price=1\nshow_product_list=1\n\n', 0, '*');
INSERT INTO `#__modules_menu` (`moduleid`, `menuid`) VALUES( LAST_INSERT_ID() , '0');



