<?php
defined( '_VALID_MOS' ) or die( 'Direct Access to this location is not allowed.' ); 
/**
* @version $Id: product.product_inventory.php,v 1.1 2005/09/06 20:04:22 soeren_nb Exp $
* @package mambo-phpShop
* @subpackage HTML
* @copyright (C) 2004-2005 Soeren Eberhardt
*
* @license http://www.gnu.org/copyleft/gpl.html GNU/GPL
* mambo-phpShop is Free Software.
* mambo-phpShop comes with absolute no warranty.
*
* www.mambo-phpshop.net
*/
mm_showMyFileName( __FILE__ );

$category_id = mosgetparam($_REQUEST, 'category_id', null );
$allproducts = mosgetparam($_REQUEST, 'allproducts', 0 );

require_once( CLASSPATH . "pageNavigation.class.php" );
require_once( CLASSPATH . "htmlTools.class.php" );

// Check to see if this is a search or a browse by category
// Default is to show all products
if( !empty($category_id)) {
	$list  = "SELECT * FROM #__pshop_product, #__pshop_product_category_xref WHERE ";
	$count  = "SELECT count(*) as num_rows FROM #__pshop_product, 
		#__pshop_product_category_xref WHERE ";
	$q  = "#__pshop_product.vendor_id = '$ps_vendor_id' ";
	$q .= "AND #__pshop_product_category_xref.category_id='$category_id' "; 
	$q .= "AND #__pshop_product.product_id=#__pshop_product_category_xref.product_id ";
	$q .= "AND product_in_stock > 0 ";
	$q .= "ORDER BY product_name ";
	$list .= $q . " LIMIT $limitstart, " . $limit;
	$count .= $q;
}
elseif( !empty($keyword)) {
	$list  = "SELECT * FROM #__pshop_product WHERE ";
	$count = "SELECT count(*) as num_rows FROM #__pshop_product WHERE ";
	$q  = "#__pshop_product.vendor_id = '$ps_vendor_id' ";
	$q .= "AND (#__pshop_product.product_name LIKE '%$keyword%' OR ";
	$q .= "#__pshop_product.product_sku LIKE '%$keyword%' OR ";
	$q .= "#__pshop_product.product_s_desc LIKE '%$keyword%' OR ";
	$q .= "#__pshop_product.product_desc LIKE '%$keyword%'";
	$q .= ") ";
	$q .= "AND product_in_stock > 0 ";
	$q .= "ORDER BY product_name ";
	$list .= $q . " LIMIT $limitstart, " . $limit;
	$count .= $q;   
}
else {
	$list  = "SELECT * FROM #__pshop_product WHERE ";
	$count = "SELECT count(*) as num_rows FROM #__pshop_product WHERE ";
	$q  = "#__pshop_product.vendor_id = '$ps_vendor_id' ";
	if ($allproducts != 1) 
		$q .= "AND product_in_stock > 0 ";
	$q .= "ORDER BY product_name ";
	$list .= $q . " LIMIT $limitstart, " . $limit;
	$count .= $q;   
}

$db->query($count);
$db->next_record();
$num_rows = $db->f("num_rows");
  
// Create the Page Navigation
$pageNav = new vmPageNav( $num_rows, $limitstart, $limit );

// Create the List Object with page navigation
$listObj = new listFactory( $pageNav );

// print out the search field and a list heading
$listObj->writeSearchHeader($PHPSHOP_LANG->_PHPSHOP_PRODUCT_INVENTORY_LBL, IMAGEURL."ps_image/inventory.gif", $modulename, "product_inventory");

echo '&nbsp;&nbsp;';
if($allproducts != 1) echo '<a href="'.$sess->url($_SERVER['PHP_SELF']."?page=$page&allproducts=1").'" title="'.$PHPSHOP_LANG->_PHPSHOP_LIST_ALL_PRODUCTS.'">';
echo $PHPSHOP_LANG->_PHPSHOP_LIST_ALL_PRODUCTS;
if ($allproducts != 1) echo '</a>';

echo '&nbsp;&nbsp;|&nbsp;&nbsp;';
if ($allproducts == 1) echo '<a href="'.$sess->url($_SERVER['PHP_SELF']."?page=$page&allproducts=0").'" title="'.$PHPSHOP_LANG->_PHPSHOP_HIDE_OUT_OF_STOCK.'">';
echo $PHPSHOP_LANG->_PHPSHOP_HIDE_OUT_OF_STOCK;
if ($allproducts == 1) '</a>';
echo '<br /><br />';

// start the list table
$listObj->startTable();

// these are the columns in the table
$columns = Array(  "#" => "width=\"20\"", 
					$PHPSHOP_LANG->_PHPSHOP_PRODUCT_LIST_NAME => '',
					$PHPSHOP_LANG->_PHPSHOP_PRODUCT_LIST_SKU => '',
					$PHPSHOP_LANG->_PHPSHOP_PRODUCT_INVENTORY_STOCK => '',
					$PHPSHOP_LANG->_PHPSHOP_PRODUCT_INVENTORY_PRICE => '',
					$PHPSHOP_LANG->_PHPSHOP_PRODUCT_INVENTORY_WEIGHT => '',
				);
$listObj->writeTableHeader( $columns );

$db->query($list);
$i = 0;
while ($db->next_record()) {
	$listObj->newRow();
	
	// The row number
	$listObj->addCell( $pageNav->rowNumber( $i ) );
	
	$url = $_SERVER['PHP_SELF'] . "?page=$modulename.product_form&product_id=" . $db->f("product_id");
	if ($db->f("product_parent_id")) {
		$url .= "&product_parent_id=" . $db->f("product_parent_id");
	}
	$tmp_cell = "<a href=\"" . $sess->url($url) . "\">". $db->f("product_name"). "</a>";
	$listObj->addCell( $tmp_cell );
	
	$listObj->addCell( $db->f("product_sku") );
	$listObj->addCell( $db->f("product_in_stock") );
	$price=$ps_product->get_price($db->f("product_id"));
	if ($price) {
		if (!empty($price["item"])) {
			$tmp_cell = $price["product_price"];
		} 
		else {
			$tmp_cell = "none";
		} 
	} 
	else {
		$tmp_cell = "none";
	} 
	$listObj->addCell( $tmp_cell );
       
	$listObj->addCell( $db->f("product_weight") );

	$i++;
}
$listObj->writeTable();

$listObj->endTable();

$listObj->writeFooter( $keyword, "&allproducts=$allproducts" );

?>