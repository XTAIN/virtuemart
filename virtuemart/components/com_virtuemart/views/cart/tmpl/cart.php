<?php
/**
*
* Template for the shopping cart
*
* @package	VirtueMart
* @subpackage Cart
* @author Max Milbers
*
* @link http://www.virtuemart.net
* @copyright Copyright (c) 2004 - 2010 VirtueMart Team. All rights reserved.
* @license http://www.gnu.org/copyleft/gpl.html GNU/GPL, see LICENSE.php
* VirtueMart is free software. This version may have been modified pursuant
* to the GNU General Public License, and as distributed it includes or
* is derivative of works licensed under the GNU General Public License or
* other free or open source software licenses.
* @version $Id$
*/
 
// Check to ensure this file is included in Joomla!
defined('_JEXEC') or die('Restricted access');

echo '<h2>'. JText::_('VM_CART_TITLE') .'</h2>';

/* Show Continue Shopping link when the cart is empty */ 
if ($this->cart["idx"] == 0) {
	echo JText::_('VM_EMPTY_CART');
	echo '<br />';
	echo JHTML::link($this->continue_link, JText::_('VM_CONTINUE_SHOPPING'), array('class' => 'continue_link'));
}
else {
	
		$total = 0;
		// Added for the zone shipping module
		//$vars["zone_qty"] = 0;
		$weight_total = 0;
		$weight_subtotal = 0;
		$tax_total = 0;
		$shipping_total = 0;
		$shipping_tax = 0;
		$order_total = 0;
		$discount_before=$discount_after=$show_tax=$shipping=false;
		$product_rows = array();
	
		for ($i=0; $i < $this->cart['idx']; $i++) {
			$product = $this->products[$i];
			// Added for the zone shipping module
			//$vars["zone_qty"] += $cart[$i]["quantity"];
	
			if ($i % 2) $product_rows[$i]['row_color'] = "sectiontableentry2";
			else $product_rows[$i]['row_color'] = "sectiontableentry1";
	
			/* Create product URL */
			$url = JRoute::_('index.php?option=com_virtuemart&view=productdetails&product_id='.$product->product_id.'&category_id='.$this->cart[$i]['category_id']);
			
			/** @todo Add variants */
			$product_rows[$i]['product_name'] = JHTML::link($url, $product->product_name).'';
			
			/* Add the variants */
			$product_rows[$i]['product_variants'] = '';
			foreach ($this->cart[$i]['variants'] as $vname => $vvalue) {
				$product_rows[$i]['product_variants'] .= '<br />'.$vname.': '.$vvalue;
			}
			
			/* Add the custom variants */
			$product_rows[$i]['product_customvariants'] = '';
			foreach ($this->cart[$i]['customvariants'] as $cname => $cvalue) {
				$product_rows[$i]['product_customvariants'] .= '<br />'.$cname.': '.$cvalue;
			}
			
	
			// Display attribute values if this an item
			$product_rows[$i]['product_attributes'] = '';
			if ($product->product_parent_id > 0) {
				foreach ($product->attributes as $attribute) {
					$product_rows[$i]['product_attributes'] .= "<br />".$attribute->attribute_name."&nbsp;";
					$product_rows[$i]['product_attributes'] .= "(" . $attribute->attribute_value.")";
				}
			}
			$product_rows[$i]['product_sku'] = $product->product_sku;
	
			/** @todo WEIGHT CALCULATION */
			//$weight_subtotal = vmShippingMethod::get_weight($cart[$i]["product_id"]) * $cart[$i]['quantity'];
			//$weight_total += $weight_subtotal;
	
			/* Product PRICE */
			/** @todo Format price */
			$product_rows[$i]['product_price'] = $this->prices[$i]['salesPrice'];
	
			/* SUBTOTAL CALCULATION */
			$subtotal = $this->prices[$i]['priceWithoutTax'] * $this->cart[$i]['quantity'];
			$subtotal_tax_amount = $this->prices[$i]['taxAmount'] * $this->cart[$i]['quantity'];
			$subtotal_discount_amount = $this->prices[$i]['discountAmount'] * $this->cart[$i]['quantity'];
			$subtotal_with_tax = $this->prices[$i]['salesPrice'] * $this->cart[$i]['quantity'];
	

			/** @todo Format price */
			$product_rows[$i]['subtotal'] = $subtotal;
			$product_rows[$i]['subtotal_tax_amount'] = $subtotal_tax_amount;
			$product_rows[$i]['subtotal_discount_tax'] = $subtotal_discount_amount;
			$product_rows[$i]['subtotal_with_tax'] = $subtotal_with_tax;
			
			// UPDATE CART / DELETE FROM CART
			$product_rows[$i]['update_form'] = '<form action="index.php" method="post" style="display: inline;">
				<input type="hidden" name="option" value="com_virtuemart" />
				<input type="text" title="'. JText::_('VM_CART_UPDATE') .'" class="inputbox" size="3" maxlength="4" name="quantity" value="'.$this->cart[$i]["quantity"].'" />
				<input type="hidden" name="view" value="cart" />
				<input type="hidden" name="task" value="update" />
				<input type="hidden" name="cart_id" value="'.$i.'" />
				<input type="hidden" name="product_id" value="'.$product->product_id.'" />
				<input type="image" name="update" title="'. JText::_('VM_CART_UPDATE') .'" src="'.JURI::root().'/components/com_virtuemart/assets/images/update_quantity_cart.png" alt="'. JText::_('VM_UPDATE') .'" align="middle" />
			  </form>';
			$product_rows[$i]['delete_form'] = '<form action="index.php" method="post" name="delete" style="display: inline;">
				<input type="hidden" name="option" value="com_virtuemart" />
				<input type="hidden" name="view" value="cart" />
				<input type="hidden" name="task" value="delete" />
				<input type="hidden" name="cart_id" value="'.$i.'" />
				<input type="hidden" name="product_id" value="'.$product->product_id.'" />
				<input type="image" name="delete" title="'. JText::_('VM_CART_DELETE') .'" src="'.JURI::root().'/components/com_virtuemart/assets/images/remove_from_cart.png" alt="'. JText::_('VM_CART_DELETE') .'" align="middle" />
			  </form>';
		} // End of for loop through the Cart
	
		//vmRequest::setVar( 'zone_qty', $vars['zone_qty'] );
	
//		$total = $total_undiscounted = round($total, 5);
//		$vars["total"] = $total;

//		$vars["total"] = $this->prices['withTax'];
		//$subtotal_display = $GLOBALS['CURRENCY_DISPLAY']->getFullValue($total);
		$subtotal_display = 0;
	
		/** @todo handle coupons */
		/**
		if (!empty($_POST["do_coupon"]) || (in_array( strtolower($func), array( 'cartadd', 'cartupdate', 'cartdelete' )) && !empty($_SESSION['coupon_redeemed'])) ) {
			require_once( CLASSPATH . "ps_coupon.php" );
			$vars["total"] = $total;
			ps_coupon::process_coupon_code( $vars );
	
		}
		*/
		/* HANDLE SHIPPING COSTS */
		/** @todo Shipping costs */
		/**
		if( !empty($shipping_rate_id) && !ps_checkout::noShippingMethodNecessary() ) {
			$shipping = true;
			$vars["weight"] = $weight_total;
			//$vm_mainframe is obsolete, please use JFactory::getApplication()
			$result = $vm_mainframe->triggerEvent('get_shipping_rate', array( $vars ));
			$shipping_total = is_array($result) ? round($result[0],5) : 0.00;
	
			$result = $vm_mainframe->triggerEvent('get_shippingtax_rate');
			$shipping_taxrate = is_array($result) ? $result[0] : 0.00;
	
			// When the Shipping rate is shown including Tax
			// we have to extract the Tax from the Shipping Total
			if( $auth["show_price_including_tax"] == 1 ) {
				$shipping_tax = round($shipping_total- ($shipping_total / (1+$shipping_taxrate)), 5);
			}
			else {
				$shipping_tax = round($shipping_total * $shipping_taxrate, 5);
			}
	
			$shipping_display = $GLOBALS['CURRENCY_DISPLAY']->getFullValue($shipping_total);
		}
		else {
			$shipping_total = $shipping_taxrate = 0;
			$shipping_display = "";
		}
		*/
		
		/** @todo handle coupons */
		/**
		//CT.COUPON VALIDITY CHECK ON ORDER
		if (
			(isset($_SESSION['coupon_redeemed'])) &&
			($_SESSION['coupon_redeemed'] == 1) &&
			($total+$shipping_total < @$_SESSION['coupon_value_valid'])){
	
			echo JText::_('VM_COUPON_REMOVED').$_SESSION['coupon_value_valid'];
	
			@$_SESSION['coupon_redeemed'] = 0;
			@$_SESSION['coupon_id'] = 0;
			@$_SESSION['coupon_code'] = "";
			@$_SESSION['coupon_type'] = "";
			@$_SESSION['coupon_value_valid'] = 0;
			@$_SESSION['coupon_discount'] = 0;
	
		}
	
		// COUPON DISCOUNT
		$coupon_display = '';
		if( PSHOP_COUPONS_ENABLE=='1' && @$_SESSION['coupon_redeemed']=="1" && PAYMENT_DISCOUNT_BEFORE=='1') {
	
			$total -= $_SESSION['coupon_discount'];
			$coupon_display = "- ".$GLOBALS['CURRENCY_DISPLAY']->getFullValue( $_SESSION['coupon_discount'] );
			$discount_before=true;
		}
	
		// SHOW TAX
		if (!empty($_REQUEST['ship_to_info_id']) || ps_checkout::tax_based_on_vendor_address() ) {
	
			$show_tax = true;
	
			if ($weight_total != 0 or TAX_VIRTUAL=='1') {
				$order_taxable = $ps_checkout->calc_order_taxable($vars);
				$tax_total = $ps_checkout->calc_order_tax($order_taxable, $vars);
			} else {
				$tax_total = 0;
			}
			if( $auth['show_price_including_tax']) {
				$tax_total *= $discount_factor;
			}
			$tax_total += $shipping_tax;
			$tax_total = round( $tax_total, 5 );
			$tax_display = $GLOBALS['CURRENCY_DISPLAY']->getFullValue($tax_total);
	
			$tax_display .= ps_checkout::show_tax_details( $order_tax_details );
		}
	
		// COUPON DISCOUNT
		if( PSHOP_COUPONS_ENABLE=='1' && @$_SESSION['coupon_redeemed']=="1" && PAYMENT_DISCOUNT_BEFORE != '1') {
			$discount_after=true;
			$total -= $_SESSION['coupon_discount'];
			$coupon_display = "- ".$GLOBALS['CURRENCY_DISPLAY']->getFullValue( $_SESSION['coupon_discount'] );
		}
		*/
		// Attention: When show_price_including_tax is 1,
		// we already have an order_total including the Tax!
		//if( $auth["show_price_including_tax"] == 0 ) {
		//	$order_total += $tax_total;
		//	$total_undiscounted += $tax_total;
		//}
//		$order_total += $shipping_total + $total;
//		$total_undiscounted += $shipping_total;
	
		//$order_total_display = $GLOBALS['CURRENCY_DISPLAY']->getFullValue($order_total);
//		$order_total_display = $order_total;


		$subtotal_display = $this->prices['priceWithoutTax'];
		$order_total_display = $this->prices['withTax'];
		$tax_display = $this->prices['taxAmount'];
		$coupon_display = $this->prices['couponValue'];
		$duty_display = $this->prices['duty'];
		
		$shipping_display = $this->prices['shippingValue'];
		$shipping_tax_display = $this->prices['shippingTax'];
		
		$payment_display = $this->prices['payment'];
		$payment_tax_display = $this->prices['paymentTax'];
		
		?>
		<table width="100%" cellspacing="2" cellpadding="4" border="0">
			<tr align="left" class="sectiontableheader">
				<th><?php echo JText::_('VM_CART_NAME') ?></th>
				<th align="left" ><?php echo JText::_('VM_CART_SKU') ?></th>
				<th align="right" width="60px" ><?php echo JText::_('VM_CART_PRICE') ?></th>
				<th align="right" width="140px" ><?php echo JText::_('VM_CART_QUANTITY') ?> / <?php echo JText::_('VM_CART_ACTION') ?></th>
				<th align="right" width="70px"><?php echo JText::_('VM_CART_SUBTOTAL') ?></th>
				<th align="right" width="60px"><?php echo JText::_('VM_CART_SUBTOTAL_TAX_AMOUNT') ?></th>
				<th align="right" width="60px"><?php echo JText::_('VM_CART_SUBTOTAL_DISCOUNT_AMOUNT') ?></th>
				<th align="right" width="70px"><?php echo JText::_('VM_CART_TOTAL') ?></th>
			</tr>
		<?php foreach( $product_rows as $product ) { ?>
			<tr valign="top" class="<?php echo $product['row_color'] ?>">
				<td align="left" ><?php echo $product['product_name'].$product['product_variants'].$product['product_customvariants'].$product['product_attributes']; ?></td>
				<td align="left" ><?php echo $product['product_sku'] ?></td>
				<td align="right" ><?php echo $product['product_price'] ?></td>
				<td align="right" ><?php echo $product['update_form'] ?>
					<?php echo $product['delete_form'] ?>
				</td>
				<td colspan="1" align="right"><?php echo $product['subtotal'] ?></td>
				<td align="right"><?php echo $product['subtotal_tax_amount'] ?></td>
				<td align="right"><?php echo $product['subtotal_discount_tax'] ?></td>			
				<td colspan="1" align="right"><?php echo $product['subtotal_with_tax'] ?></td>
			</tr>
		<?php } ?>
		<!--Begin of SubTotal, Tax, Shipping, Coupon Discount and Total listing -->
		<tr>
			<td colspan="4">&nbsp;</td>
			<td colspan="4"><hr /></td>
		</tr>
		  <tr class="sectiontableentry1">
			<td colspan="4" align="right"><?php echo JText::_('VM_ORDER_PRINT_PRODUCT_PRICES_TOTAL'); ?></td> 
			<td align="right"><?php echo $this->prices['priceWithoutTax'] ?></td>
			<td align="right"><?php echo $this->prices['taxAmount'] ?></td>
			<td align="right"><?php echo $this->prices['discountAmount'] ?></td>
			<td align="right"><?php echo $this->prices['salesPrice'] ?></td>
		  </tr>
		  

		  
		<?php if($this->prices['coupons']){ 
			$couponlink = JRoute::_('index.php?view=user&task=editcoupon'); ?> 
			<tr class="sectiontableentry2">
		<?php	/*	<td align="left"><?php echo JText::_('VM_COUPON_DISCOUNT'); ?> </td>  */  ?> 
				<td colspan="2" align="left"><?php echo JHTML::_('link', $couponlink, JText::_('VM_CART_EDIT_COUPON')); ?> </td>
				<td colspan="3" align="left"><?php echo $this->prices['couponName']; ?> </td>
				<td align="right"><?php echo $this->prices['couponTax']; ?> </td>
				<td align="right"><?php echo $this->prices['couponValue']; ?> </td>	
				<td align="right"><?php echo $this->prices['salesPriceCoupon']; ?> </td>
			</tr>
		<?php }  
		$shippinglink = JRoute::_('index.php?view=cart&task=editshipping');  ?>
		<tr class="sectiontableentry1">
				<td colspan="2" align="left"><?php echo JHTML::_('link', $shippinglink, JText::_('VM_CART_EDIT_SHIPPING')); ?> </td>
		<?php	/*	<td colspan="2" align="right"><?php echo JText::_('VM_ORDER_PRINT_SHIPPING'); ?> </td> */?>
				<td colspan="2" align="left"><?php echo $this->prices['shippingName']; ?> </td>
				<td align="right"><?php echo $this->prices['shippingValue']; ?> </td>
				<td align="right"><?php echo $this->prices['shippingTax']; ?> </td>	
				<td></td>
				<td align="right"><?php // echo $this->prices['salesPriceShipping']; ?> </td>
				
		</tr>
		<?php if($this->prices['shippingTax']) { ?>
		  	<tr class="sectiontableentry2">
				<td colspan="4" align="right"><?php echo JText::_('VM_ORDER_PRINT_SHIPPING_TAX') ?> </td> 
				<td colspan="4" align="right"><?php echo $this->prices['shippingTax']; ?> </td>		  		
			</tr>		
		<?php }
		$paymentlink = JRoute::_('index.php?view=cart&task=editpayment');  ?>
		<tr class="sectiontableentry1">
				<td colspan="2" align="right"><?php echo JHTML::_('link', $paymentlink, JText::_('VM_CART_EDIT_PAYMENT'));?> </td>
				<td colspan="2" align="right"><?php echo JText::_('VM_ORDER_PRINT_PAYMENT_LBL') ?> </td> 
				<td colspan="4" align="right"><?php echo $payment_display ?></td>
		</tr>
		<?php if($this->prices['paymentTax']) { ?>
		  	<tr class="sectiontableentry2">
				<td colspan="4" align="right"><?php echo JText::_('VM_ORDER_PRINT_PAYMENT_TAX') ?> </td> 
				<td colspan="4" align="right"><?php echo $this->prices['paymentTax'] ?> </td>		  		
			</tr>		
		<?php }
		if($this->prices['duty']) { ?>
		  <tr class="sectiontableentry1">
			<td colspan="4" align="right"><?php echo JText::_('VM_ORDER_PRINT_DUTY') ?> </td> 
			<td colspan="4" align="right"><?php echo $this->prices['duty'] ?> </td>
		  </tr>
		<?php } ?>
	
		  <tr>
			<td colspan="4">&nbsp;</td>
			<td colspan="4"><hr /></td>
		  </tr>
		  <tr class="sectiontableentry2">
			<td colspan="4" align="right"><?php echo JText::_('VM_ORDER_PRINT_TOTAL') ?>: </td>
			<td colspan="4" align="right"><strong><?php echo $this->prices['withTax'] ?></strong></td>
		  </tr>
		<?php if ( $show_tax ) { ?>
		  <tr class="sectiontableentry1">
				<td colspan="4" align="right" valign="top"><?php echo JText::_('VM_ORDER_PRINT_TOTAL_TAX') ?>: </td> 
				<td colspan="4" align="right"><?php echo $tax_display ?></td>
		  </tr>
		<?php } ?>
		  <tr>
			<td colspan="10"><hr /></td>
		  </tr>
		  <tr class="sectiontableentry2">
		 <?php $adresslink = JRoute::_('index.php?view=user&task=editaddress');  ?>
		 	<td colspan="2" align="right"><?php echo JHTML::_('link', $adresslink, JText::_('VM_CART_EDIT_ADRESS'));?> </td>
		  </tr>
	<?php /*maybe it is a good idea to start a form here also, so that the people can edit the adress directly,. I dont know, just an idea 	
		This exampel should just show how the adress should be shown and how the information is saved*/

	$_k = 0;
	$_set = false;
	$_table = false;
	$_hiddenFields = '';

	if (count($this->userFields['functions']) > 0) {
		echo '<script language="javascript">'."\n";
		echo join("\n", $this->userFields['functions']);
		echo '</script>'."\n";
	}
	for ($_i = 0, $_n = count($this->userFields['fields']); $_i < $_n; $_i++) {
		// Do this at the start of the loop, since we're using 'continue' below!
		if ($_i == 0) {
			$_field = current($this->userFields['fields']);
		} else {
			$_field = next($this->userFields['fields']);
		}

		if ($_field['hidden'] == true) {
			$_hiddenFields .= $_field['formcode']."\n";
			continue;
		}
		if ($_field['type'] == 'delimiter') {
			if ($_set) {
				// We're in Fieldset. Close this one and start a new
				if ($_table) {
					echo '	</table>'."\n";
					$_table = false;
				}
				echo '</fieldset>'."\n";
			}
			$_set = true;
			echo '<fieldset>'."\n";
			echo '	<legend>'."\n";
			echo '		' . $_field['title'];
			echo '	</legend>'."\n";
			continue;
		}

		
		if (!$_table) {
			// A table hasn't been opened as well. We need one here, 
			echo '	<table class="adminform">'."\n";
			$_table = true;
		}
		echo '		<tr>'."\n";
		echo '			<td class="key">'."\n";
		echo '				<label for="'.$_field['name'].'_field">'."\n";
		echo '					'.$_field['title'] . ($_field['required']?' *': '')."\n";
		echo '				</label>'."\n";
		echo '			</td>'."\n";
		echo '			<td>'."\n";
		echo '				'.$_field['formcode']."\n";
		echo '			</td>'."\n";
		echo '		</tr>'."\n";
	}

	if ($_table) {
		echo '	</table>'."\n";
	}
	if ($_set) {
		echo '</fieldset>'."\n";
	}
	
//		<?php
		/** @todo handle coupon field */
		/* Input Field for the Coupon Code */
		/**
		if( PSHOP_COUPONS_ENABLE=='1'
			&& !@$_SESSION['coupon_redeemed']
			//&& ($page == "shop.cart" )
		) {
			$basket_html .= $tpl->fetch( 'common/couponField.tpl.php' );
		}
		*/
	
		
		?>
		<div align="center">
			<?php
			if ($this->continue_link != '') echo JHTML::link($this->continue_link, JText::_('VM_CONTINUE_SHOPPING'), array('class' => 'continue_link'));
			
			if (VmStore::get('vendor_min_pov', 0) < $this->cart->totalsales) {
				/** @todo currency format totalsales */
				?>
				<span style="font-weight:bold;"><?php echo JText::_('VM_CHECKOUT_ERR_MIN_POV2'). " ".$this->cart->totalsales; ?></span>
				<?php
			}
			else {
				$href = JRoute::_('index.php?option=com_virtuemart&view=checkout');
				$href2 = JRoute::_('index2.php?option=com_virtuemart&view=checkout');
				$class_att = array('class' => 'checkout_link');
				$text = JText::_('VM_CHECKOUT_TITLE');
				
				/** @todo build the greybox checkout */
				//if ($this->get_cfg('useGreyBoxOnCheckout', 1)) echo vmCommonHTML::getGreyBoxPopupLink( $href2, $text, '', $text, $class_att, 500, 600, $href );
				echo JHTML::link($href, $text, $class_att);
			} ?>
		</div>
<?php } ?>