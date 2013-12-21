<?php
/**
*
* Handle the Product Custom Fields
*
* @package	VirtueMart
* @subpackage Product
* @author RolandD, Patrick khol, Valérie Isaksen
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
if (isset($this->product->customfields_fromParent)) { ?>
	<label><?php echo vmText::_('COM_VIRTUEMART_CUSTOM_SAVE_FROM_CHILD');?><input type="checkbox" name="save_customfields" value="1" /></label>
<?php } else {
	?> <input type="hidden" name="save_customfields" value="1" />
<?php }  ?>
<table id="customfieldsTable" width="100%">
	<tr>
		<td valign="top" width="%100">

		<?php
			$i=0;
			$tables= array('categories'=>'','products'=>'','fields'=>'','customPlugins'=>'',);
			if (isset($this->product->customfields)) {
				$customfieldsModel = VmModel::getModel('customfields');
				$i=0;

				foreach ($this->product->customfields as $k=>$customfield) {
					//vmdebug('$customfield->field_type '.$customfield->field_type);
					/*if($this->product->customfields_fromParent){
						$virtuemart_product_id = $this->product->product_parent_id;
					} else {
						$virtuemart_product_id = $this->product->virtuemart_product_id;
					}*/
					$virtuemart_product_id = $this->product->virtuemart_product_id;
					$customfield->display = $customfieldsModel->displayProductCustomfieldBE ($customfield, $virtuemart_product_id, $i);

					if ($customfield->is_cart_attribute) $cartIcone=  'default';
					else  $cartIcone= 'default-off';
					if ($customfield->field_type == 'Z') {
						// R: related categories
						$tables['categories'] .=  '
							<div class="vm_thumb_image">
								<span>'.$customfield->display.'</span>
								<div class="vmicon vmicon-16-remove"></div>'.
								VirtueMartModelCustomfields::setEditCustomHidden($customfield, $i)
							  .'</div>';

					} elseif ($customfield->field_type == 'R') {
					// R: related products
						$tables['products'] .=  '
							<div class="vm_thumb_image">
								<span>'.$customfield->display.'</span>
								<div class="vmicon vmicon-16-remove"></div>'.
								VirtueMartModelCustomfields::setEditCustomHidden($customfield, $i)
							  .'</div>';

					} elseif ($customfield->field_type == 'G') {
						// no display (group of) child , handled by plugin;
					} elseif ($customfield->field_type == 'E'){
						$tables['fields'] .= '<tr class="removable">
							<td>'.vmText::_($customfield->custom_title).'</td>
							<td>'.$customfield->custom_tip.'</td>
							<td>'.$customfield->display.'</td>'.
							VirtueMartModelCustomfields::setEditCustomHidden($customfield, $i)
							.'</td>
							<td>'.vmText::_('COM_VIRTUEMART_CUSTOM_EXTENSION').'</td>
							<td>
							<span class="vmicon vmicon-16-'.$cartIcone.'"></span>
							</td>
							<td><span class="vmicon vmicon-16-remove"></span><input class="ordering" type="hidden" value="'.$customfield->ordering.'" name="field['.$i .'][ordering]" /></td>
							<td ><span class="vmicon vmicon-16-move"></span></td>
						 </tr>';
						/*$tables['fields'] .= '
							<tr class="removable">
								<td>'.vmText::_($customfield->custom_title).'</td>
								<td colspan="3"><span>'.$customfield->display.$customfield->custom_tip.'</span>'.
								VirtueMartModelCustomfields::setEditCustomHidden($customfield, $i)
							  .'</td><span class="vmicon icon-nofloat vmicon-16-'.$cartIcone.'"></span>
								<span class="vmicon vmicon-16-remove"></span>
							</tr>';*/
					} else {
						$fromParent = '';
						if($customfield->virtuemart_product_id==$this->product->product_parent_id){
							$fromParent = vmText::_('COM_VIRTUEMART_CUSTOM_INHERITED');
							$fromParent .= ' d:'.VmHtml::checkbox('field[' . $i . '][disabler]',0).' o:'.VmHtml::checkbox('field['.$i.'][override]',0,$customfield->virtuemart_customfield_id);

						}
						$override = '';
						if($customfield->override){
							$override = vmText::sprintf('COM_VIRTUEMART_CUSTOM_OVERRIDE',$customfield->override);
							if($customfield->disabler!=0){
								$override .= ' d:'.VmHtml::checkbox('field[' . $i . '][disabler]', $customfield->disabler, $customfield->disabler);
							} else {
								$override .= ' d:'.VmHtml::checkbox('field[' . $i . '][disabler]', $customfield->disabler, $customfield->virtuemart_customfield_id);
							}

							if($customfield->override!=0){
								$override .= ' o:'.VmHtml::checkbox('field[' . $i . '][override]', $customfield->override, $customfield->override);
							} else {
								$override .= ' o:'.VmHtml::checkbox('field[' . $i . '][override]', $customfield->override, $customfield->virtuemart_customfield_id);
							}
						}
						$tables['fields'] .= '<tr class="removable">
							<td>'.$fromParent.$override.vmText::_($customfield->custom_title).'</td>
							<td>'.$customfield->custom_tip.'</td>
							<td>'.$customfield->display.'</td>
							<td>'.vmText::_($this->fieldTypes[$customfield->field_type]).
							VirtueMartModelCustomfields::setEditCustomHidden($customfield, $i)
							.'</td>
							<td>
							<span class="vmicon vmicon-16-'.$cartIcone.'"></span>
							</td>
							<td><span class="vmicon vmicon-16-remove"></span><input class="ordering" type="hidden" value="'.$customfield->ordering.'" name="field['.$i .'][ordering]" /></td>
							<td ><span class="vmicon vmicon-16-move"></span></td>
						 </tr>';
						}

					$i++;
				}
			}

			 $emptyTable = '
				<tr>
					<td colspan="8">'.vmText::_( 'COM_VIRTUEMART_CUSTOM_NO_TYPES').'</td>
				<tr>';
			?>
			<fieldset style="background-color:#F9F9F9;">
				<legend><?php echo vmText::_('COM_VIRTUEMART_RELATED_CATEGORIES'); ?></legend>
				<?php echo vmText::_('COM_VIRTUEMART_CATEGORIES_RELATED_SEARCH'); ?>
				<div class="jsonSuggestResults" style="width: auto;">
					<input type="text" size="40" name="search" id="relatedcategoriesSearch" value="" />
					<button class="reset-value"><?php echo vmText::_('COM_VIRTUEMART_RESET') ?></button>
				</div>
				<div id="custom_categories"><?php echo  $tables['categories']; ?></div>
			</fieldset>
			<fieldset style="background-color:#F9F9F9;">
				<legend><?php echo vmText::_('COM_VIRTUEMART_RELATED_PRODUCTS'); ?></legend>
				<?php echo vmText::_('COM_VIRTUEMART_PRODUCT_RELATED_SEARCH'); ?>
				<div class="jsonSuggestResults" style="width: auto;">
					<input type="text" size="40" name="search" id="relatedproductsSearch" value="" />
					<button class="reset-value"><?php echo vmText::_('COM_VIRTUEMART_RESET') ?></button>
				</div>
				<div id="custom_products"><?php echo  $tables['products']; ?></div>
			</fieldset>

			<fieldset style="background-color:#F9F9F9;">
				<legend><?php echo vmText::_('COM_VIRTUEMART_CUSTOM_FIELD_TYPE' );?></legend>
				<div><?php echo  '<div class="inline">'.$this->customsList; ?></div>

				<table id="custom_fields" class="adminlist" cellspacing="0" cellpadding="0">
					<thead>
					<tr class="row1">
						<th><?php echo vmText::_('COM_VIRTUEMART_TITLE');?></th>
						<th><?php echo vmText::_('COM_VIRTUEMART_VALUE');?></th>
						<th><?php echo vmText::_('COM_VIRTUEMART_CART_PRICE');?></th>
						<th><?php echo vmText::_('COM_VIRTUEMART_TYPE');?></th>
						<th><?php echo vmText::_('COM_VIRTUEMART_MOVE'); ?></th>

					</tr>
					</thead>
					<tbody id="custom_field">
						<?php
						if ($tables['fields']) echo $tables['fields'] ;
						else echo $emptyTable;
						?>
					</tbody>
				</table><!-- custom_fields -->
			</fieldset>
			<!--fieldset style="background-color:#F9F9F9;">
				<legend><?php echo vmText::_('COM_VIRTUEMART_CUSTOM_EXTENSION'); ?></legend>
				<div id="custom_customPlugins"><?php echo  $tables['customPlugins']; ?></div>
			</fieldset-->
		</td>

	</tr>
</table>


<div style="clear:both;"></div>


<script type="text/javascript">
	nextCustom = <?php echo $i ?>;

	jQuery(document).ready(function(){
		jQuery('#custom_field').sortable({handle: ".vmicon-16-move"});
		// Need to declare the update routine outside the sortable() function so
		// that it can be called when adding new customfields
		jQuery('#custom_field').bind('sortupdate', function(event, ui) {
			jQuery(this).find('.ordering').each(function(index,element) {
				jQuery(element).val(index);
				//console.log(index+' ');

			});
		});
	});
	jQuery('select#customlist').chosen().change(function() {
		selected = jQuery(this).find( 'option:selected').val() ;
		jQuery.getJSON('<?php echo JURI::root(false) ?>administrator/index.php?option=com_virtuemart&view=product&task=getData&format=json&type=fields&id='+selected+'&row='+nextCustom+'&virtuemart_product_id=<?php echo $this->product->virtuemart_product_id; ?>',
		function(data) {
			jQuery.each(data.value, function(index, value){
				jQuery("#custom_field").append(value);
				jQuery('#custom_field').trigger('sortupdate');
			});
		});
		nextCustom++;
	});

		jQuery('input#relatedproductsSearch').autocomplete({

		source: '<?php echo JURI::root(false) ?>administrator/index.php?option=com_virtuemart&view=product&task=getData&format=json&type=relatedproducts&row='+nextCustom,
		select: function(event, ui){
			jQuery("#custom_products").append(ui.item.label);
			nextCustom++;
			jQuery(this).autocomplete( "option" , 'source' , '<?php echo JURI::root(false) ?>administrator/index.php?option=com_virtuemart&view=product&task=getData&format=json&type=relatedproducts&row='+nextCustom )
			jQuery('input#relatedproductsSearch').autocomplete( "option" , 'source' , '<?php echo JURI::root(false) ?>administrator/index.php?option=com_virtuemart&view=product&task=getData&format=json&type=relatedproducts&row='+nextCustom )
		},
		minLength:1,
		html: true
	});
	jQuery('input#relatedcategoriesSearch').autocomplete({

		source: '<?php echo JURI::root(false) ?>administrator/index.php?option=com_virtuemart&view=product&task=getData&format=json&type=relatedcategories&row='+nextCustom,
		select: function(event, ui){
			jQuery("#custom_categories").append(ui.item.label);
			nextCustom++;
			jQuery(this).autocomplete( "option" , 'source' , '<?php echo JURI::root(false) ?>administrator/index.php?option=com_virtuemart&view=product&task=getData&format=json&type=relatedcategories&row='+nextCustom )
			jQuery('input#relatedcategoriesSearch').autocomplete( "option" , 'source' , '<?php echo JURI::root(false) ?>administrator/index.php?option=com_virtuemart&view=product&task=getData&format=json&type=relatedcategories&row='+nextCustom )
		},
		minLength:1,
		html: true
	});
	// jQuery('#customfieldsTable').delegate('td','click', function() {
		// jQuery('#customfieldsParent').remove();
		// jQuery(this).undelegate('td','click');
	// });
	// jQuery.each(jQuery('#customfieldsTable').filter(":input").data('events'), function(i, event) {
		// jQuery.each(event, function(i, handler){
		// console.log(handler);
	  // });
	// });


eventNames = "click.remove keydown.remove change.remove focus.remove"; // all events you wish to bind to

function removeParent() {jQuery('#customfieldsParent').remove();console.log($(this));//jQuery('#customfieldsTable input').unbind(eventNames, removeParent)
 }

// jQuery('#customfieldsTable input').bind(eventNames, removeParent);

  // jQuery('#customfieldsTable').delegate('*',eventNames,function(event) {
    // var $thisCell, $tgt = jQuery(event.target);
	// console.log (event);
	// });
		jQuery('#customfieldsTable').find('input').each(function(i){
			current = jQuery(this);
        // var dEvents = curent.data('events');
        // if (!dEvents) {return;}

		current.click(function(){
				jQuery('#customfieldsParent').remove();
			});
		//console.log (curent);
        // jQuery.each(dEvents, function(name, handler){
            // if((new RegExp('^(' + (events === '*' ? '.+' : events.replace(',','|').replace(/^on/i,'')) + ')$' ,'i')).test(name)) {
               // jQuery.each(handler, function(i,handler){
                   // outputFunction(elem, '\n' + i + ': [' + name + '] : ' + handler );


               // });
           // }
        // });
    });


	//onsole.log(jQuery('#customfieldsTable').data('events'));

</script>