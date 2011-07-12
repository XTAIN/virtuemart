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
INSERT INTO `#__plugins` (`id`, `name`, `element`, `folder`, `access`, `ordering`
, `published`, `iscore`, `client_id`, `checked_out`, `checked_out_time`, `params`)
VALUES
 (NULL, 'VMPayment - Paypal', 'paypal', 'vmpayment', 0, 0, 1, 0, 0, 0, '0000-00-00 00:00:00', '')
,(NULL, 'VMPayment - Standard', 'standard', 'vmpayment', 0, 0, 1, 0, 0, 0, '0000-00-00 00:00:00','')
,(NULL, 'VMShipper -- By weight, ZIP and countries', 'weight_countries', 'vmshipper', 0, 0, 1, 0, 0, 0, '0000-00-00 00:00:00', '');

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
VALUES ( 'Shopping cart', '', 4, 'left', 1, 'mod_virtuemart_cart', 0, 0, 1, 'moduleclass_sfx=\nshow_price=1\nshow_product_list=1\n\n', 0, 0, '');
INSERT INTO `#__modules_menu` (`moduleid`, `menuid`) VALUES( LAST_INSERT_ID() , '0');


CREATE TABLE IF NOT EXISTS `#__com_vm_all-in-one` (
				`id` INT(10) UNSIGNED NULL,
				`plugins` TEXT NULL,
				`modules` TEXT NULL,
				`languageFE` TEXT NULL,
				`languageBE` TEXT NULL,
				PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='To store the installed plugins and modules of VM' AUTO_INCREMENT=1 ;