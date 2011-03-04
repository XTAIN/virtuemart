<?php
/**
 *
 * Show the product details page
 *
 * @package	VirtueMart
 * @subpackage
 * @author Max Milbers
 * @author RolandD
 * @todo handle child products
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
defined ( '_JEXEC' ) or die ( 'Restricted access' );
// addon for joomla modal Box
JHTML::_( 'behavior.modal' );
/* Let's see if we found the product */
if (empty ( $this->product )) {
	echo JText::_ ( 'VM_PRODUCT_NOT_FOUND' );
	echo '<br /><br />  ' . $this->continue_link_html;
} else { ?>
<div class="productdetails-view">
	<?php // Product Navigation
	if (VmConfig::get ( 'product_navigation', 1 )) {
		?>
	<div class="marginbottom25">
		<?php
		if (! empty ( $this->product->neighbours ['previous'] )) {
			$prev_link = JRoute::_ ( 'index.php?option=com_virtuemart&view=productdetails&product_id=' . $this->product->neighbours ['previous'] ['product_id'] . '&category_id=' . $this->product->category_id );
			echo JHTML::_ ( 'link', $prev_link, $this->product->neighbours ['previous'] ['product_name'], array ('class' => 'previous_page' ) );
		}
		if (! empty ( $this->product->neighbours ['next'] )) {
			$next_link = JRoute::_ ( 'index.php?option=com_virtuemart&view=productdetails&product_id=' . $this->product->neighbours ['next'] ['product_id'] . '&category_id=' . $this->product->category_id );
			echo JHTML::_ ( 'link', $next_link, $this->product->neighbours ['next'] ['product_name'], array ('class' => 'next_page' ) );
		}
		echo '<br style="clear: both;" />';
		?>
	</div>
<?php
	}
	?>

	<div>
		<div class="width30 floatleft center">

		<?php // Product Image
		/** @todo make the image popup */
		echo $this->productImage->displayImage('class="product-image"',$this->product->product_name,1,0, 'class="modal"');
		?>
		</div>

		<div class="width70 floatleft">

			<div class="width15 floatright center paddingtop5">
			<?php // PDF - Print - Email Icon
			$link = 'index2.php?tmpl=component&option=com_virtuemart&view=productdetails&product_id='.$this->product->product_id; ?>
			<?php echo shopFunctionsF::PdfIcon( $link.'&output=pdf' ); ?>
			<?php echo shopFunctionsF::PrintIcon($link.'&print=1'); ?>
			<?php echo shopFunctionsF::EmailIcon($this->product->product_id); ?>
			<br style="clear:both;" />
			</div>

			<h1><?php echo $this->product->product_name.' '.$this->edit_link; ?></h1>

			<?php // Product Short Description
			if (!empty($this->product->product_s_desc)) { ?>
			<p class="short-description">
				<?php
				echo '<span class="bold">'.JText::_('VM_PRODUCT_DETAILS_SHORE_DESC_LBL').'</span><br />';
				echo $this->product->product_s_desc ?>
			</p>
			<?php } // Product Short Description END ?>

			<?php // Ask a question about this product
			$url = JRoute::_('index.php?&option=com_virtuemartview=productdetails&task=askquestion&product_id='.$this->product->product_id.'&category_id='.$this->product->category_id);
			echo JHTML::_('link', $url, JText::_('VM_PRODUCT_ENQUIRY_LBL'), array('class' => 'ask-a-question')).'<br style="clear:both;" />';
			// Ask a question about this product END ?>

			<div class="margintop8">

			<?php // TO DO in Multi-Vendor not needed at the moment and just would lead to confusion
/*			$link = JRoute::_('index2.php?option=com_virtuemart&view=virtuemart&task=vendorinfo&vendor_id='.$this->product->vendor_id);
			$text = JText::_('VM_VENDOR_FORM_INFO_LBL');
			echo '<span class="bold">'. JText::_('VM_PRODUCT_DETAILS_VENDOR_LBL'). '</span>'; ?><a class="modal" href="<?php echo $link ?>"><?php echo $text ?></a><br />
*/ ?>
			<?php // Manufacturer of the Product
			$link = JRoute::_('index.php?option=com_virtuemart&view=manufacturer&manufacturer_id='.$this->product->manufacturer_id.'&tmpl=component');
			$text = $this->product->mf_name;
			/* Avoid JavaScript on PDF Output */
			if (strtolower(JRequest::getVar('output')) == "pdf") echo JHTML::_('link', $link, $text);
			else { ?>
			<?php echo '<span class="bold">'. JText::_('VM_PRODUCT_DETAILS_MANUFACTURER_LBL'). '</span>'; ?><a class="modal" href="<?php echo $link ?>"><?php echo $text ?></a>
			<?PHP } ?>

			</div>
		</div>

	<div class="clear"></div>
	</div>

	<div class="horizontal-separator margintop15 marginbottom15"></div>

	<div>
		<div class="width45 floatleft">

			<div class="product-price marginbottom12" id="productPrice<?php echo $this->product->product_id ?>">
		<?php
				/** @todo format price */
				if ($this->show_prices) {
					if( $this->product->product_unit && VmConfig::get('vm_price_show_packaging_pricelabel')) {
						echo "<strong>". JText::_('VM_CART_PRICE_PER_UNIT').' ('.$this->product->product_unit."):</strong>";
					} else echo "<strong>". JText::_('VM_CART_PRICE'). ": </strong>";


					if( $this->showBasePrice ){
						echo shopFunctionsF::createPriceDiv('basePrice','VM_PRODUCT_BASEPRICE',$this->product->prices);
						echo shopFunctionsF::createPriceDiv('basePriceVariant','VM_PRODUCT_BASEPRICE_VARIANT',$this->product->prices);
					}
					echo shopFunctionsF::createPriceDiv('variantModification','VM_PRODUCT_VARIANT_MOD',$this->product->prices);
					echo shopFunctionsF::createPriceDiv('basePriceWithTax','VM_PRODUCT_BASEPRICE_WITHTAX',$this->product->prices);
					echo shopFunctionsF::createPriceDiv('discountedPriceWithoutTax','VM_PRODUCT_DISCOUNTED_PRICE',$this->product->prices);
					echo shopFunctionsF::createPriceDiv('salesPriceWithDiscount','VM_PRODUCT_SALESPRICE_WITH_DISCOUNT',$this->product->prices);
					echo shopFunctionsF::createPriceDiv('salesPrice','VM_PRODUCT_SALESPRICE',$this->product->prices);
					echo shopFunctionsF::createPriceDiv('priceWithoutTax','VM_PRODUCT_SALESPRICE_WITHOUT_TAX',$this->product->prices);
					echo shopFunctionsF::createPriceDiv('discountAmount','VM_PRODUCT_DISCOUNT_AMOUNT',$this->product->prices);
					echo shopFunctionsF::createPriceDiv('taxAmount','VM_PRODUCT_TAX_AMOUNT',$this->product->prices);

				}
				?>
			</div>
		</div>

		<div class="width55 floatleft">

			<?php // Add To Cart Button
			if (VmConfig::get('use_as_catalogue') != '1') { ?>
			<div class="addtocart-area">
				<form  method="post" action="index.php" id="addtocartproduct<?php echo $this->product->product_id ?>">

					<?php // Product Variants Drop Down Box
					$variantExist=false;
					/* Show the variants */
					foreach ($this->product->variants as $variant_name => $variant) {

						$variantExist=true;
						$options = array();
						foreach ($variant as $name => $price) {
							if (!empty($price)){
								$name .= ' ('.$price.')';
							}
							$options[] = JHTML::_('select.option', $name, $name);
						}
						if (!empty($options)) {
						echo '<span class="variant-name">'.$variant_name.'</span> <span class="variant-dropdown">'.JHTML::_('select.genericlist', $options, $this->product->product_id.$variant_name).'</span><br style="clear:left;" />';
						}
					} // Product Variants Drop Down Box END ?>

					<?php // Show the custom attributes
					foreach($this->product->customvariants as $ckey => $customvariant) { ?>
					<span class="custom-variant-name">
						<label for="<?php echo $customvariant ?>_field"><?php echo $customvariant ?></label>:
					</span> <span class="custom-variant-inputbox">
						<input type="text" class="custom-attribute" id="<?php echo $customvariant ?>_field" name="<?php echo $this->product->product_id.$customvariant; ?>" />
					</span>
					<br style="clear:left;" />
					<?php } // Show the custom attributes END ?>

					<?php // Display the quantity box ?>
					<!-- <label for="quantity<?php echo $this->product->product_id;?>" class="quantity_box"><?php echo JText::_('VM_CART_QUANTITY'); ?>: </label> -->
					<span class="quantity-box">
						<input type="text" class="quantity-input" id="quantity<?php echo $this->product->product_id;?>" name="quantity[]" value="1" />
					</span>
					<span class="quantity-controls">
						<input type="button" class="quantity-controls quantity-plus" onClick="add(<?php echo $this->product->product_id;?>); return false;" />
						<input type="button" class="quantity-controls quantity-minus" onClick="minus(<?php echo $this->product->product_id;?>); return false;" />
					</span>
					<?php // Display the quantity box END ?>

					<?php // Add the button
					$button_lbl = JText::_('VM_CART_ADD_TO');
					$button_cls = ''; //$button_cls = 'addtocart_button';
					if (VmConfig::get('check_stock') == '1' && !$this->product->product_in_stock) {
						$button_lbl = JText::_('VM_CART_NOTIFY');
						$button_cls = 'notify_button';
					}
					?>

					<?php // Display the add to cart button ?>
					<span class="addtocart-button">
						<input type="submit" name="addtocart"  class="addtocart" value="<?php echo $button_lbl ?>" title="<?php echo $button_lbl ?>" />
					</span>
					<?php // Display the add to cart button END ?>
					<input type="hidden" class="pname" value="<?php echo $this->product->product_name ?>">
					<input type="hidden" name="option" value="com_virtuemart" />
					<input type="hidden" name="view" value="cart" />
			<noscript><input type="hidden" name="task" value="add" /> </noscript>
					<input type="hidden" name="product_id[]" value="<?php echo $this->product->product_id ?>" />

					<?php /** @todo Handle the manufacturer view */ ?>
					<input type="hidden" name="manufacturer_id" value="<?php echo $this->product->manufacturer_id ?>" />
					<input type="hidden" name="category_id[]" value="<?php echo $this->product->category_id ?>" />
				</form>

			<div class="clear"></div>
			</div>
			<?php }  // Add To Cart Button END ?>
		</div>

	<div class="clear"></div>
	</div>

	<div class="horizontal-separator margintop15 marginbottom15"></div>

	<?php // Product Description
	if (!empty($this->product->product_desc)) { ?>
	<div class="product-description">
		<?php /** @todo Test if content plugins modify the product description */
		echo '<span class="bold">'. JText::_('VM_PRODUCT_DESC_TITLE'). '</span><br />';
		echo $this->product->product_desc; ?>
	</div>
	<?php } // Product Description END ?>

	<?php // Product Packaging
	$product_packaging = '';
	if ($this->product->packaging || $this->product->box) { ?>
	<div class="product-packaging margintop15">
		<?php
		echo '<span class="bold">'. JText::_('VM_PRODUCT_PACKAGING2'). '</span><br />';
		if ($this->product->packaging) {
			$product_packaging .= JText::_('VM_PRODUCT_PACKAGING1').$this->product->packaging;
			if ($this->product->box) $product_packaging .= '<br />';
		}
		if ($this->product->box) $product_packaging .= JText::_('VM_PRODUCT_PACKAGING2').$this->product->box;
		echo str_replace("{unit}",$this->product->product_unit ? $this->product->product_unit : JText::_('VM_PRODUCT_FORM_UNIT_DEFAULT'), $product_packaging); ?>
	</div>
	<?php } // Product Packaging END ?>



<?php // Product Files
					foreach ($this->product->files as $fkey => $file) {
						if( $file->filesize > 0.5) $filesize_display = ' ('. number_format($file->filesize, 2,',','.')." MB)";
						else $filesize_display = ' ('. number_format($file->filesize*1024, 2,',','.')." KB)";

						/* Show pdf in a new Window, other file types will be offered as download */
						$target = stristr($file->file_mimetype, "pdf") ? "_blank" : "_self";
						$link = JRoute::_('index.php?view=productdetails&task=getfile&file_id='.$file->file_id.'&product_id='.$this->product->product_id);
						echo JHTMl::_('link', $link, $file->file_title.$filesize_display, array('target' => $target));
					}
					?>



	<?php // Related Products
					if ($this->product->related && !empty($this->product->related)) {
						foreach ($this->product->related as $rkey => $related) {
							?>
							<hr />
		<h3><?php echo JText::_('VM_RELATED_PRODUCTS_HEADING') ?></h3>

		<table width="100%" align="center">
			<tr>
									<td valign="top">
										<!-- The product name DIV. -->
										<div style="height:77px; float:left; width: 100%;line-height:14px;">
										<?php echo JHTML::_('link', $related->link, $related->product_name); ?>
										<br />
				</div>

				<!-- The product image DIV. -->
										<div style="height:90px;width: 100%;float:left;margin-top:-15px;">
											<?php
												echo JHTML::_('link', $related->link, VmImage::getImageByProduct($related)->displayImage('title="'.$related->product_name.'"',$related->product_name));
											?>
										</div>

				<!-- The product price DIV. -->
				<div style="width: 100%; float: left; text-align: center;">
											<?php /** @todo Format pricing */ ?>
											<?php if (is_array($related->price)) echo $related->price['salesPrice']; ?>
										</div>



				<!-- The add to cart DIV. -->
				<div>


										</div>
				</td>
			</tr>
		</table>
						<?php }
					}
				?>



<?php
				/* Child categories */
				if (!empty($this->category->children)) {
					$iCol = 1;
					if (empty($this->category->categories_per_row)) {
						$this->category->categories_per_row = 4;
					}
					$cellwidth = intval( 100 / $this->category->categories_per_row );
					?>
					<br />
		<table width="100%" cellspacing="0" cellpadding="0">
						<?php
						foreach($this->category->children as $category ) {
							if ($iCol == 1) { // this is an indicator wether a row needs to be opened or not
								echo "<tr>\n";
							}
							?>
							<td align="center" width="<?php echo $cellwidth ?>%" >
								<br />
								<?php //TODO
								$url = JRoute::_('index.php?option=com_virtuemart&view=category&task=browse&category_id='.$category->category_id);
								//Todo add this 'alt="'.$category->category_name.'"', false).'<br /><br />'.$category->category_name.' ('.$category->number_of_products.')');
								echo JHTML::link($url, VmImage::getImageByCat($category)->displayImage('',$category->category_name));
								?>
								<br />
			</td>

							<?php
							// Do we need to close the current row now?
							if ($iCol == $this->category->categories_per_row) { // If the number of products per row has been reached
								echo "</tr>\n";
								$iCol = 1;
							}
							else {
								$iCol++;
							}
						}
						// Do we need a final closing row tag?
						if ($iCol != 1) {
							echo "</tr>\n";
						}
						?>
					</table>
				<?php } ?>



<table border="0" align="center" style="width: 100%;">

	<tr>
			<td colspan="2">
				<!-- List of product reviews -->
		<h4><?php echo JText::_('VM_REVIEWS') ?>:</h4>

				<?php
				/** @todo Handle review submission */
				$alreadycommented = false;
				foreach($this->product_reviews as $review ) { // Loop through all reviews
					/* Check if user already commented */
					if ($review->userid == $this->user->id) $alreadycommented = true;
					/**
					 * Available indexes:
					 *
					 * $review->userid => The user ID of the comment author
					 * $review->username => The username of the comment author
					 * $review->name => The name of the comment author
					 * $review->time => The UNIX timestamp of the comment ("when" it was posted)
					 * $review->user_rating => The rating; an integer from 1 - 5

					 *
					 */
					?>
					<div><?php echo $review->comment; ?></div>
					<strong><?php echo $review->username.'&nbsp;&nbsp;('.JHTML::date($review->time, JText::_('DATE_FORMAT_LC')).')'; ?></strong>
		<br />
					<?php
						echo JText::_('VM_RATE_NOM');
//						$url = JURI::root().VmConfig::get('assets_general_path').'/reviews/'.$review->user_rating.'.gif';
//						echo JHTML::image($url, $review->user_rating, array('border' => 0));
					?>
					<br />
					<blockquote><div><?php echo wordwrap($review->comment, 150, "<br/>\n", true ); ?></div></blockquote>
					<br /><br />
					<?php
				}
				if (count($this->product_reviews) < 1) echo JText::_('VM_NO_REVIEWS')." <br />"; // "There are no reviews for this product"
				else {
					/* Show all reviews */
					if (!JRequest::getBool('showall', false) && count($this->product_reviews) >=5 ) {
						echo JHTML::link($this->more_reviews, JText::_('MORE_REVIEWS').'<br />');
					}
				}

				if (!empty($this->user->id)) {
					if (!$alreadycommented) {
						echo JText::_('VM_WRITE_FIRST_REVIEW'); // "Be the first to write a review!"
						?>
						<script language="javascript" type="text/javascript">
						function check_reviewform() {
							var form = document.getElementById('reviewform');

							var ausgewaehlt = false;
							for (var i=0; i<form.user_rating.length; i++)
							   if (form.user_rating[i].checked)
								  ausgewaehlt = true;
							if (!ausgewaehlt)  {
							  alert('<?php echo JText::_('VM_REVIEW_ERR_RATE',false)  ?>');
							  return false;
							}
							else if (form.comment.value.length < <?php echo VmConfig::get('vm_reviews_minimum_comment_length', 100); ?>) {
								alert('<?php echo JText::sprintf('VM_REVIEW_ERR_COMMENT1', VmConfig::get('vm_reviews_minimum_comment_length', 100)); ?>');
							  return false;
							}
							else if (form.comment.value.length > <?php echo VmConfig::get('vm_reviews_maximum_comment_length', 2000); ?>) {
								alert('<?php echo JText::sprintf('VM_REVIEW_ERR_COMMENT2', VmConfig::get('vm_reviews_maximum_comment_length', 2000)); ?>');
							  return false;
							}
							else {
							  return true;
							}
						}

						function refresh_counter() {
						  var form = document.getElementById('reviewform');
						  form.counter.value= form.comment.value.length;
						}
						</script>

		<h4><?php echo JText::_('VM_WRITE_REVIEW')  ?></h4>
		<br /><?php echo JText::_('VM_REVIEW_RATE')  ?>
						<form method="post" action="<?php echo JRoute::_('index.php?option=com_virtuemart&view=productdetails&product_id='.$this->product->product_id.'&category_id='.$this->product->category_id) ; ?>" name="reviewForm" id="reviewform">
						<table cellpadding="5" summary="<?php echo JText::_('VM_REVIEW_RATE') ?>">
			<tr>
							<?php $url = JURI::root().VmConfig::get('assets_general_path').'images/stars/'; ?>
							<th id="five_stars">
							<label for="user_rating5"><?php echo JHTML::image($url.'5.gif', JText::_('5_STARS')); ?></label>
				</th>
							<th id="four_stars">
								<label for="user_rating4"><?php echo JHTML::image($url.'4.gif', JText::_('4_STARS')); ?></label>
				</th>
							<th id="three_stars">
								<label for="user_rating3"><?php echo JHTML::image($url.'3.gif', JText::_('3_STARS')); ?></label>
				</th>
							<th id="two_stars">
								<label for="user_rating2"><?php echo JHTML::image($url.'2.gif', JText::_('2_STARS')); ?></label>
				</th>
							<th id="one_star">
								<label for="user_rating1"><?php echo JHTML::image($url.'1.gif', JText::_('1_STARS')); ?></label>
				</th>
							<th id="null_stars">
								<label for="user_rating0"><?php echo JHTML::image($url.'0.gif', JText::_('0_STARS')); ?></label>
				</th>
			</tr>
			<tr>
							<td headers="five_stars" style="text-align:center;">
							  <input type="radio" id="user_rating5" name="user_rating" value="5" />
							</td>
							<td headers="four_stars" style="text-align:center;">
								<input type="radio" id="user_rating4" name="user_rating" value="4" />
							</td>
							<td headers="three_stars" style="text-align:center;">
								<input type="radio" id="user_rating3" name="user_rating" value="3" />
							</td>
							<td headers="two_stars" style="text-align:center;">
								<input type="radio" id="user_rating2" name="user_rating" value="2" />
							</td>
							<td headers="one_star" style="text-align:center;">
								<input type="radio" id="user_rating1" name="user_rating" value="1" />
							</td>
							<td headers="null_stars" style="text-align:center;">
								<input type="radio" id="user_rating0" name="user_rating" value="0" />
							</td>
			</tr>
		</table>
						<br /><br />
							<?php
								$review_comment = JText::sprintf('VM_REVIEW_COMMENT', VmConfig::get('vm_reviews_minimum_comment_length', 100), VmConfig::get('vm_reviews_maximum_comment_length', 2000));
								echo $review_comment;
							?><br />
						<textarea title="<?php echo $review_comment ?>" class="inputbox" id="comment" onblur="refresh_counter();" onfocus="refresh_counter();" onkeypress="refresh_counter();" name="comment" rows="10" cols="55"></textarea>
		<br />
						<input class="button" type="submit" onclick="return( check_reviewform());" name="submit_review" title="<?php echo JText::_('VM_REVIEW_SUBMIT')  ?>" value="<?php echo JText::_('VM_REVIEW_SUBMIT')  ?>" />

		<div align="right"><?php echo JText::_('VM_REVIEW_COUNT')  ?>
						<input type="text" value="0" size="4" class="inputbox" name="counter" maxlength="4" readonly="readonly" />
						</div>

						<input type="hidden" name="product_id" value="<?php echo JRequest::getInt('product_id'); ?>" />
						<input type="hidden" name="option" value="<?php echo JRequest::getVar('option'); ?>" />
						<input type="hidden" name="category_id" value="<?php echo JRequest::getInt('category_id'); ?>" />
						<input type="hidden" name="review_id" value="0" />
						<input type="hidden" name="task" value="review" />
					</form>
					<?php
					}
					else {
						echo JText::_('VM_REVIEW_ALREADYDONE');
					}
				}
				else echo JText::_('VM_REVIEW_LOGIN'); // Login to write a review!
				?>
			</td>
	</tr>

</table>

</div>
<?php } ?>

<script type="text/javascript">



</script>