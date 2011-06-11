DELETE FROM `#__plugins` 
WHERE (`element` = 'authorize' AND `folder` = 'vmpayment')
OR (`element` = 'authorize' AND `folder` = 'vmpayment')
OR (`element` = 'cashondel' AND `folder` = 'vmpayment')
OR (`element` = 'echeck' AND `folder` = 'vmpayment')
OR (`element` = 'epay' AND `folder` = 'vmpayment')
OR (`element` = 'epn' AND `folder` = 'vmpayment')
OR (`element` = 'eway' AND `folder` = 'vmpayment')
OR (`element` = 'linkpoint' AND `folder` = 'vmpayment')
OR (`element` = 'montrada' AND `folder` = 'vmpayment')
OR (`element` = 'nochex' AND `folder` = 'vmpayment')
OR (`element` = 'payflow_pro' AND `folder` = 'vmpayment')
OR (`element` = 'paymate' AND `folder` = 'vmpayment')
OR (`element` = 'paymenow' AND `folder` = 'vmpayment')
OR (`element` = 'paypal' AND `folder` = 'vmpayment')
OR (`element` = 'twocheckout' AND `folder` = 'vmpayment')
OR (`element` = 'worldpay' AND `folder` = 'vmpayment');


-- VM Plugin -- 
INSERT INTO `#__plugins` (`name`, `element`, `folder`, `access`, `ordering`, `published`, `iscore`, `client_id` ) 
VALUES ('VMPayment - Authorize', 'authorize', 'vmpayment', 0, 0, 1, 0, 0),
('VMPayment - Cash on delivery', 'cashondel', 'vmpayment', 0, 0, 1, 0, 0),
('VMShipper - Standard', 'standard', 'vmshipper', 0, 0, 1, 0, 0),
('Search - Virtuemart Product', 'virtuemart', 'search', 0, 0, 1, 0, 0);

-- Joomla Module --
INSERT INTO `#__modules` (`title`, `content`, `ordering`, `position`, `published`, `module`, `numnews`, `access`, `showtitle`, `params`, `iscore`, `client_id`, `control`) 
VALUES ( 'currencies selector'	, ''		, 5, 		'left', 1, 'mod_virtuemart_currencies', 0, 0, 1, 'text_before=\nproduct_currency=\ncache=1\nmoduleclass_sfx=\nclass_sfx=\n\n', 0, 0, '');
INSERT INTO `#__modules_menu` (`moduleid`, `menuid`) VALUES( LAST_INSERT_ID() , '0');

INSERT INTO `#__modules` (`title`, `content`, `ordering`, `position`, `published`, `module`, `numnews`, `access`, `showtitle`, `params`, `iscore`, `client_id`, `control`) 
VALUES ( 'Featured', '', 3, 'left',  1, 'mod_virtuemart_product', 0, 0, 1, 'product_group=featured\nmax_items=2\nproducts_per_row=\ndisplay_style=list\nshow_price=1\nshow_addtocart=1\nheaderText=Best products\nfooterText=\nfilter_category=0\ncategory_id=1\ncache=0\nmoduleclass_sfx=\nclass_sfx=\n\n', 0, 0, '');
INSERT INTO `#__modules_menu` (`moduleid`, `menuid`) VALUES( LAST_INSERT_ID() , '0');

INSERT INTO `#__modules` (`title`, `content`, `ordering`, `position`, `published`, `module`, `numnews`, `access`, `showtitle`, `params`, `iscore`, `client_id`, `control`) 
VALUES ( 'Best Sales', '', 0, 'left', 1, 'mod_virtuemart_product', 0, 0, 1, 'product_group=topten\nmax_items=3\nproducts_per_row=\ndisplay_style=list\nshow_price=1\nshow_addtocart=1\nheaderText=\nfooterText=\nfilter_category=0\ncategory_id=1\ncache=0\nmoduleclass_sfx=\nclass_sfx=\n\n', 0, 0, '');
INSERT INTO `#__modules_menu` (`moduleid`, `menuid`) VALUES( LAST_INSERT_ID() , '0');

INSERT INTO `#__modules` (`title`, `content`, `ordering`, `position`, `published`, `module`, `numnews`, `access`, `showtitle`, `params`, `iscore`, `client_id`, `control`) 
VALUES ( 'Search in Shop', '', 4, 'left', 1, 'mod_virtuemart_search', 0, 0, 1, 'width=20\ntext=\nbutton=\nbutton_pos=right\nimagebutton=\nbutton_text=\nmoduleclass_sfx=\ncache=1\ncache_time=900\n\n', 0, 0, '');
INSERT INTO `#__modules_menu` (`moduleid`, `menuid`) VALUES( LAST_INSERT_ID() , '0');

INSERT INTO `#__modules` (`title`, `content`, `ordering`, `position`, `published`, `module`, `numnews`, `access`, `showtitle`, `params`, `iscore`, `client_id`, `control`) 
VALUES ( 'Manufacturer', '', 4, 'left', 1, 'mod_virtuemart_manufacturer', 0, 0, 1, 'show=all\ndisplay_style=div\nmanufacturers_per_row=\nheaderText=\nfooterText=\ncache=0\nmoduleclass_sfx=\nclass_sfx=', 0, 0, '');
INSERT INTO `#__modules_menu` (`moduleid`, `menuid`) VALUES( LAST_INSERT_ID() , '0');

INSERT INTO `#__modules` (`title`, `content`, `ordering`, `position`, `published`, `module`, `numnews`, `access`, `showtitle`, `params`, `iscore`, `client_id`, `control`) 
VALUES ( 'VM2 Shop', '', 4, 'left', 1, 'mod_virtuemart', 0, 0, 1,'class_sfx=\nmoduleclass_sfx=\npretext=\nshow_login_form=no\nshow_categories=yes\nshow_listall=yes\nshow_adminlink=yes\nshow_accountlink=yes\nuseGreyBox_accountlink=0\nshow_minicart=yes\nuseGreyBox_cartlink=0\nshow_productsearch=yes\nshow_product_parameter_search=no\nmenutype=jscook\njscook_type=tree\njscookMenu_style=ThemeOffice\nmenu_orientation=hbr\njscookTree_style=ThemeXP\nroot_label=VMShop\n\n', 0, 0, '');
INSERT INTO `#__modules_menu` (`moduleid`, `menuid`) VALUES( LAST_INSERT_ID() , '0');

INSERT INTO `#__modules` (`title`, `content`, `ordering`, `position`, `published`, `module`, `numnews`, `access`, `showtitle`, `params`, `iscore`, `client_id`, `control`) 
VALUES ( 'Shopping cart', '', 4, 'left', 1, 'mod_virtuemart_cart', 0, 0, 1, 'moduleclass_sfx=\nshow_price=1\nshow_product_list=1\n\n', 0, 0, '');
INSERT INTO `#__modules_menu` (`moduleid`, `menuid`) VALUES( LAST_INSERT_ID() , '0');

