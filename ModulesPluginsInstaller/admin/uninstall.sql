--  plugins --

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
OR (`element` = 'worldpay' AND `folder` = 'vmpayment') 
OR (`element` = 'standard' AND `folder` = 'vmshipper') 
OR (`element` = 'virtuemart' AND `folder` = 'search');

--  modules --
DELETE FROM `#__modules_menu` where `moduleid` IN (SELECT `id` FROM `#__modules` where `module` = 'mod_virtuemart_currencies');
DELETE FROM `#__modules_menu` where `moduleid` IN (SELECT `id` FROM `#__modules` where `module` = 'mod_virtuemart_search');
DELETE FROM `#__modules_menu` where `moduleid` IN (SELECT `id` FROM `#__modules` where `module` = 'mod_virtuemart_product');
DELETE FROM `#__modules_menu` where `moduleid` IN (SELECT `id` FROM `#__modules` where `module` = 'mod_virtuemart_manufacturer');
DELETE FROM `#__modules_menu` where `moduleid` IN (SELECT `id` FROM `#__modules` where `module` = 'mod_virtuemart');
DELETE FROM `#__modules_menu` where `moduleid` IN (SELECT `id` FROM `#__modules` where `module` = 'mod_virtuemart_cart');

DELETE FROM `#__modules` 
WHERE ( `module` = 'mod_virtuemart_currencies') 
OR ( `module` = 'mod_virtuemart_search') 
OR ( `module` = 'mod_virtuemart_product') 
OR ( `module` = 'mod_virtuemart_manufacturer') 
OR ( `module` = 'mod_virtuemart') 
OR ( `module` = 'mod_virtuemart_cart');

DROP TABLE `#__com_vm_all-in-one`;
