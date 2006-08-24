<?php defined( '_VALID_MOS' ) or die( 'Direct Access to this location is not allowed.' ); ?>

<?php
// User is not allowed to see a price or there is no price
if( !$auth['show_prices'] || !isset($price_info["product_price_id"] )) {
	
	$link = $vendor_mail.'?subject='. $VM_LANG->_PHPSHOP_PRODUCT_CALL.": $product_name";
	echo @mosHTML::emailCloaking( $link, 1, $VM_LANG->_PHPSHOP_PRODUCT_CALL );
}
?>

<?php
// DISCOUNT: Show old price!
if(!empty($discount_info["amount"])) {
	?>
	<span class="product-Old-Price">
		<?php echo $CURRENCY_DISPLAY->getFullValue($undiscounted_price); ?></span>
	
	<br/>
	<?php
}
?>
<?php
if( !empty( $price_info["product_price_id"] )) { ?>
	<span class="productPrice">
		<?php echo $CURRENCY_DISPLAY->getFullValue($base_price) ?>
		<?php echo $text_including_tax ?>
	</span>
<?php
}
?>


<?php
// DISCOUNT: Show the amount the customer saves
if(!empty($discount_info["amount"])) {
	echo "<br />";
	echo $VM_LANG->_PHPSHOP_PRODUCT_DISCOUNT_SAVE.": ";
	if($discount_info["is_percent"]==1) {
		echo $discount_info["amount"]."%";
	}
	else {
		echo $CURRENCY_DISPLAY->getFullValue($discount_info["amount"]);
	}
}
?>