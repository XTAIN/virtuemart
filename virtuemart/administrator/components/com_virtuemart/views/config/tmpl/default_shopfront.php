<?php
/**
 *
 * Description
 *
 * @package	VirtueMart
 * @subpackage Config
 * @author RickG
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

?>
<br />
<table width="100%">
	<tr>
		<td valign="top" width="50%">
			<fieldset>
				<legend>

				<?php echo JText::_('COM_VIRTUEMART_ADMIN_CFG_MORE_CORE_SETTINGS') ?></legend>
				<table class="admintable">

				<?php /*    <tr>
				<td class="key">
				<span class="hasTip" title="<?php echo JText::_('COM_VIRTUEMART_ADMIN_CFG_ERRORPAGE_EXPLAIN'); ?>">
				<?php echo JText::_('COM_VIRTUEMART_ADMIN_CFG_ERRORPAGE') ?>
				</span>
				</td>
				<td>
				<input type="text" name="errorpage" class="inputbox" value="<?php echo $this->config->get('errorpage'); ?>" />
				</td>
				</tr> */ ?>
					<tr>
						<td class="key"><span
							class="hasTip"
							title="<?php echo JText::_('COM_VIRTUEMART_ADMIN_CFG_PDF_BUTTON_EXPLAIN'); ?>">
								<label for="pdf_button_enable"><?php echo JText::_('COM_VIRTUEMART_ADMIN_CFG_PDF_BUTTON') ?>
							</label> </span>
						</td>
						<td>
						<?php echo VmHTML::checkbox('pdf_button_enable', $this->config->get('pdf_button_enable')); ?>
						</td>
					</tr>
					<tr>
						<td class="key"><span
							class="hasTip"
							title="<?php echo JText::_('COM_VIRTUEMART_ADMIN_SHOW_EMAILFRIEND_TIP'); ?>">
								<label for="show_emailfriend"><?php echo JText::_('COM_VIRTUEMART_ADMIN_SHOW_EMAILFRIEND') ?>
							</label> </span>
						</td>
						<td>
						<?php echo VmHTML::checkbox('show_emailfriend', $this->config->get('show_emailfriend')); ?>
						</td>
					</tr>
					<tr>
						<td class="key"><span
							class="hasTip"
							title="<?php echo JText::_('COM_VIRTUEMART_ADMIN_SHOW_PRINTICON_TIP'); ?>">
								<label for="show_printicon"><?php echo JText::_('COM_VIRTUEMART_ADMIN_SHOW_PRINTICON') ?>
							</label> </span>
						</td>
						<td>
						<?php echo VmHTML::checkbox('show_printicon', $this->config->get('show_printicon')); ?>
						</td>
					</tr>

<?php /*			<tr>
	    	<td class="key">
				<span class="hasTip" title="<?php echo JText::_('COM_VIRTUEMART_CFG_CONTENT_PLUGINS_ENABLE_TIP'); ?>">
				<label for="content_plugins_enable"><?php echo JText::_('COM_VIRTUEMART_CFG_CONTENT_PLUGINS_ENABLE') ?></label>
				</span>
	    	</td>
	    	<td>
				<?php echo VmHTML::checkbox('content_plugins_enable', $this->config->get('content_plugins_enable')); ?>
	    	</td>
			</tr> */ ?>
			<tr>
	    	<td class="key">
				<span class="hasTip" title="<?php echo JText::_('COM_VIRTUEMART_ADMIN_CFG_SHOW_OUT_OF_STOCK_PRODUCTS_EXPLAIN'); ?>">
				<label for="show_out_of_stock_products"><?php echo JText::_('COM_VIRTUEMART_ADMIN_CFG_SHOW_OUT_OF_STOCK_PRODUCTS') ?></label>
				</span>
	    	</td>
	    	<td valign="top">
				<?php echo VmHTML::checkbox('show_out_of_stock_products', $this->config->get('show_out_of_stock_products')); ?>
	    	</td>
			</tr>
			<tr>
	    	<td class="key">
				<span class="hasTip" title="<?php echo JText::_('COM_VIRTUEMART_COUPONS_ENABLE_EXPLAIN'); ?>">
				<label for="coupons_enable"><?php echo JText::_('COM_VIRTUEMART_COUPONS_ENABLE') ?></label>
				</span>
	   	 	</td>
	    	<td>
				<?php echo VmHTML::checkbox('coupons_enable', $this->config->get('coupons_enable')); ?>
	    	</td>
			</tr>
			<tr>
	    	<td class="key">
				<span class="hasTip" title="<?php echo JText::_('COM_VIRTUEMART_COUPONS_EXPIRE_EXPLAIN'); ?>">
				<label for="coupons_default_expire"><?php echo JText::_('COM_VIRTUEMART_COUPONS_EXPIRE') ?></label>
				</span>
	    	</td>
			<td>
				<?php
					// TODO This must go to the view.html.php.... but then... that goes for most of the config sruff I'ld say :-S
					$_defaultExpTime = array(
						 '1,D' => '1 '.JText::_('COM_VIRTUEMART_DAY')
						,'1,W' => '1 '.JText::_('COM_VIRTUEMART_WEEK')
						,'2,W' => '2 '.JText::_('COM_VIRTUEMART_WEEK_S')
						,'1,M' => '1 '.JText::_('COM_VIRTUEMART_MONTH')
						,'3,M' => '3 '.JText::_('COM_VIRTUEMART_MONTH_S')
						,'6,M' => '6 '.JText::_('COM_VIRTUEMART_MONTH_S')
						,'1,Y' => '1 '.JText::_('COM_VIRTUEMART_YEAR')
					);
echo VmHTML::selectList('coupons_default_expire',$this->config->get('coupons_default_expire'),$_defaultExpTime)
				?>
			</td>

	    	<td class="key">
				<span class="hasTip" title="<?php echo JText::_('COM_VIRTUEMART_WEIGHT_UNIT_DEFAULT_EXPLAIN'); ?>">
				<label for="weight_unit_default"><?php echo JText::_('COM_VIRTUEMART_WEIGHT_UNIT_DEFAULT') ?></label>
				</span>
	    	</td>
			<td>
				<?php
echo ShopFunctions::renderWeightUnitList('weight_unit_default', $this->config->get('weight_unit_default') );
				?>
			</td>
			</tr>
			<tr>
                              <tr>
	    	<td class="key">
				<span class="hasTip" title="<?php echo JText::_('COM_VIRTUEMART_LWH_UNIT_DEFAULT_EXPLAIN'); ?>">
				<label for="weight_unit_default"><?php echo JText::_('COM_VIRTUEMART_LWH_UNIT_DEFAULT') ?></label>
				</span>
	    	</td>
			<td>
				<?php
echo ShopFunctions::renderLWHUnitList('lwh_unit_default', $this->config->get('lwh_unit_default') );
				?>
			</td>
			</tr>
			<tr>
			<td class="key">
				<span class="hasTip" title="<?php echo JText::_('COM_VIRTUEMART_LIST_LIMIT_EXPLAIN'); ?>">
				<label for="list_limit"><?php echo JText::_('COM_VIRTUEMART_LIST_LIMIT') ?></label>
				</span>
			</td>
			<td>
				<input type="text" value="<?php echo $this->config->get('list_limit',10); ?>" class="inputbox" size="4" name="list_limit">
			</td>
			</tr>
<?php /*	    <tr>
			<td class="key">
			    <span class="hasTip" title="<?php echo JText::_('COM_VIRTUEMART_ADMIN_CFG_SHOWVM_VERSION_EXPLAIN'); ?>">
			    <?php echo JText::_('COM_VIRTUEMART_ADMIN_CFG_SHOWVM_VERSION') ?>
			    </span>
			</td>
			<td>
			    <?php echo VmHTML::checkbox('show_footer', $this->config->get('show_footer')); ?>
			</td>
		    </tr> */ ?>
		</table>
			</fieldset>

			<fieldset>
				<legend>



				<?php echo JText::_('COM_VIRTUEMART_ADMIN_CFG_REVIEW_TITLE') ?></legend>
				<table class="admintable">
					<tr>
						<td class="key"><span
							class="hasTip"
							title="<?php echo JText::_('COM_VIRTUEMART_ADMIN_CFG_REVIEW_SHOW_EXPLAIN'); ?>">
								<label><?php echo JText::_('COM_VIRTUEMART_ADMIN_CFG_REVIEW_SHOW') ?>
							</label> </span>
						</td>
						<td><fieldset class="checkboxes">




						<?php
						$showReviewFor = array(	'none' => JText::_('COM_VIRTUEMART_ADMIN_CFG_REVIEW_SHOW_NONE'),
											'registered' => JText::_('COM_VIRTUEMART_ADMIN_CFG_REVIEW_SHOW_REGISTERED'),
											'all' => JText::_('COM_VIRTUEMART_ADMIN_CFG_REVIEW_SHOW_ALL')
						); //showReviewFor
						echo VmHTML::radioList('showReviewFor', $this->config->get('showReviewFor',2),$showReviewFor); ?>

							</fieldset></td>
					</tr>
					<tr>
						<td class="key"><span
							class="hasTip"
							title="<?php echo JText::_('COM_VIRTUEMART_ADMIN_CFG_REVIEW_EXPLAIN'); ?>">
								<label><?php echo JText::_('COM_VIRTUEMART_ADMIN_CFG_REVIEW') ?>
							</label> </span>
						</td>
						<td><fieldset class="checkboxes">




						<?php
						$showReviewFor = array('none' => JText::_('COM_VIRTUEMART_ADMIN_CFG_REVIEW_MODE_NONE'),
				 						'bought' => JText::_('COM_VIRTUEMART_ADMIN_CFG_REVIEW_MODE_BOUGHT_PRODUCT'),
				 						'registered' => JText::_('COM_VIRTUEMART_ADMIN_CFG_REVIEW_MODE_REGISTERED'),
						//	3 => JText::_('COM_VIRTUEMART_ADMIN_CFG_REVIEW_MODE_ALL')
						);
						echo VmHTML::radioList('reviewMode', $this->config->get('reviewMode',2),$showReviewFor); ?>
							</fieldset></td>
					</tr>
					<tr>
						<td class="key"><span
							class="hasTip"
							title="<?php echo JText::_('COM_VIRTUEMART_ADMIN_CFG_RATING_SHOW_EXPLAIN'); ?>">
								<label><?php echo JText::_('COM_VIRTUEMART_ADMIN_CFG_RATING_SHOW') ?>
							</label> </span>
						</td>
						<td><fieldset class="checkboxes">




						<?php
						$showReviewFor = array(	'none' => JText::_('COM_VIRTUEMART_ADMIN_CFG_RATING_SHOW_NONE'),
		    								'registered' => JText::_('COM_VIRTUEMART_ADMIN_CFG_RATING_SHOW_REGISTERED'),
											'all' => JText::_('COM_VIRTUEMART_ADMIN_CFG_RATING_SHOW_ALL')
						);
						echo VmHTML::radioList('showRatingFor', $this->config->get('showRatingFor',2),$showReviewFor); ?>

							</fieldset></td>
					</tr>
					<tr>
						<td class="key"><span
							class="hasTip"
							title="<?php echo JText::_('COM_VIRTUEMART_ADMIN_CFG_RATING_EXPLAIN'); ?>">
								<label><?php echo JText::_('COM_VIRTUEMART_ADMIN_CFG_RATING') ?>
							</label> </span>
						</td>
						<td><fieldset class="checkboxes">




						<?php
						$showReviewFor = array('none' => JText::_('COM_VIRTUEMART_ADMIN_CFG_RATING_MODE_NONE'),
				 						'bought' => JText::_('COM_VIRTUEMART_ADMIN_CFG_RATING_MODE_BOUGHT_PRODUCT'),
										'registered' => JText::_('COM_VIRTUEMART_ADMIN_CFG_RATING_MODE_REGISTERED'),
						//	3 => JText::_('COM_VIRTUEMART_ADMIN_CFG_RATING_MODE_ALL')	//TODO write system for all users (cookies)
						);
						echo VmHTML::radioList('ratingMode', $this->config->get('ratingMode',2),$showReviewFor); ?>
							</fieldset></td>
					</tr>
					<tr>
						<td class="key"><span
							class="hasTip"
							title="<?php echo JText::_('COM_VIRTUEMART_REVIEWS_AUTOPUBLISH_TIP'); ?>">
								<label for="reviews_autopublish"><?php echo JText::_('COM_VIRTUEMART_REVIEWS_AUTOPUBLISH') ?>
							</label> </span>
						</td>
						<td>
						<?php echo VmHTML::checkbox('reviews_autopublish', $this->config->get('reviews_autopublish')); ?>
						</td>
					</tr>
					<tr>
						<td class="key"><span
							class="hasTip"
							title="<?php echo JText::_('COM_VIRTUEMART_ADMIN_CFG_REVIEW_MINIMUM_COMMENT_LENGTH_TIP'); ?>">
								<label for="reviews_minimum_comment_length"><?php echo JText::_('COM_VIRTUEMART_ADMIN_CFG_REVIEW_MINIMUM_COMMENT_LENGTH') ?>
							</label> </span>
						</td>
						<td><input
							type="text"
							size="6"
							id="reviews_minimum_comment_length"
							name="reviews_minimum_comment_length"
							class="inputbox"
							value="<?php echo $this->config->get('reviews_minimum_comment_length'); ?>" />
						</td>
					</tr>
					<tr>
						<td class="key"><span
							class="hasTip"
							title="<?php echo JText::_('COM_VIRTUEMART_ADMIN_CFG_REVIEW_MAXIMUM_COMMENT_LENGTH_TIP'); ?>">
								<label><?php echo JText::_('COM_VIRTUEMART_ADMIN_CFG_REVIEW_MAXIMUM_COMMENT_LENGTH'); ?>
							</label> </span>
						</td>
						<td><input
							type="text"
							size="6"
							id="reviews_maximum_comment_length"
							name="reviews_maximum_comment_length"
							class="inputbox"
							value="<?php echo $this->config->get('reviews_maximum_comment_length'); ?>" />
						</td>
					</tr>
				</table>
			</fieldset>
		</td>

	</tr>
</table>
