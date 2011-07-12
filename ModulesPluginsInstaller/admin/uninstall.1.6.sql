--  Extensions --
DELETE FROM `#__extensions` 
WHERE (`type` = 'plugin' AND `element` = 'authorize' AND `folder`  = 'vmpayment') 
OR (`type` = 'plugin' AND `element` = 'authorize' AND `folder` = 'vmpayment') 
OR (`type` = 'plugin' AND `element` = 'cashondel' AND `folder` = 'vmpayment') 
OR (`type` = 'plugin' AND `element` = 'echeck' AND `folder` = 'vmpayment') 
OR (`type` = 'plugin' AND `element` = 'epay' AND `folder` = 'vmpayment') 
OR (`type` = 'plugin' AND `element` = 'epn' AND `folder` = 'vmpayment') 
OR (`type` = 'plugin' AND `element` = 'eway' AND `folder` = 'vmpayment') 
OR (`type` = 'plugin' AND `element` = 'linkpoint' AND `folder` = 'vmpayment') 
OR (`type` = 'plugin' AND `element` = 'montrada' AND `folder` = 'vmpayment') 
OR (`type` = 'plugin' AND `element` = 'nochex' AND `folder` = 'vmpayment') 
OR (`type` = 'plugin' AND `element` = 'payflow_pro' AND `folder` = 'vmpayment') 
OR (`type` = 'plugin' AND `element` = 'paymate' AND `folder` = 'vmpayment') 
OR (`type` = 'plugin' AND `element` = 'paymenow' AND `folder` = 'vmpayment') 
OR (`type` = 'plugin' AND `element` = 'paypal' AND `folder` = 'vmpayment') 
OR (`type` = 'plugin' AND `element` = 'twocheckout' AND `folder` = 'vmpayment') 
OR (`type` = 'plugin' AND `element` = 'worldpay' AND `folder` = 'vmpayment') 
OR (`type` = 'plugin' AND `element` = 'standard' AND `folder` = 'vmshipper') 
OR (`type` = 'plugin' AND `element` = 'virtuemart' AND `folder` = 'search')
OR (`type` = 'module' AND `element` = 'mod_virtuemart_currencies')
OR (`type` = 'module' AND `element` = 'mod_virtuemart_product')
OR (`type` = 'module' AND `element` = 'mod_virtuemart_search')
OR (`type` = 'module' AND `element` = 'mod_virtuemart_manufacturers')
OR (`type` = 'module' AND `element` = 'mod_virtuemart')
OR (`type` = 'module' AND `element` = 'mod_virtuemart_cart');

--  modules --
DELETE FROM `#__modules_menu` where `moduleid` IN (SELECT `id` FROM `#__modules` where `module` = 'mod_virtuemart_currencies');
DELETE FROM `#__modules_menu` where `moduleid` IN (SELECT `id` FROM `#__modules` where `module` = 'mod_virtuemart_search');
DELETE FROM `#__modules_menu` where `moduleid` IN (SELECT `id` FROM `#__modules` where `module` = 'mod_virtuemart_product');
DELETE FROM `#__modules_menu` where `moduleid` IN (SELECT `id` FROM `#__modules` where `module` = 'mod_virtuemart_manufacturers');
DELETE FROM `#__modules_menu` where `moduleid` IN (SELECT `id` FROM `#__modules` where `module` = 'mod_virtuemart');
DELETE FROM `#__modules_menu` where `moduleid` IN (SELECT `id` FROM `#__modules` where `module` = 'mod_virtuemart_cart');

DELETE FROM `#__modules` 
WHERE ( `module` = 'mod_virtuemart_currencies') 
OR ( `module` = 'mod_virtuemart_search') 
OR ( `module` = 'mod_virtuemart_product') 
OR ( `module` = 'mod_virtuemart_manufacturers')
OR ( `module` = 'mod_virtuemart')
OR ( `module` = 'mod_virtuemart_cart');

