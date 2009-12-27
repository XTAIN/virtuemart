<?php 
defined('_JEXEC') or die('Restricted access'); 

AdminMenuHelper::startAdminArea(); 

$nrows = count( $this->categories );

if( $this->pagination->limit < $nrows ){
	if( ($this->pagination->limitstart + $this->pagination->limit) < $nrows ) {
		$nrows = $this->pagination->limitstart + $this->pagination->limit;
	}
}
?>
      	
<form action="index.php" method="post" name="adminForm">
	<div id="editcell">
		<table class="adminlist">
		<thead>
		<tr>
			<th width="20">
				<?php echo JText::_( '#' ); ?>
			</th>		            
			<th width="20">
				<input type="checkbox" name="toggle" value="" onclick="checkAll(<?php echo count($this->categories); ?>);" />
			</th>			
			<th>
				<?php echo JText::_( 'VM_CATEGORY_FORM_NAME' ); ?>
			</th>				
			<th>
				<?php echo JText::_( 'VM_CATEGORY_FORM_DESCRIPTION' ); ?>
			</th>						
			<th width="11%">
				<?php echo JText::_( 'VM_PRODUCTS_LBL' ); ?>
			</th>	
			<th width="5%">
				<?php echo JText::_( 'VM_PRODUCT_LIST_PUBLISH' ); ?>
			</th>
			<th width="5%">
				<?php echo JText::_( 'VM_PRODUCT_LIST_SHARED' ); ?>
			</th>	
			<th width="13%">
				<?php echo JText::_( 'ORDER' ); ?>
				<?php echo JHTML::_('grid.order', $this->categories, 'filesave.png', 'saveOrder' ); ?>
			</th>
			<th width="3%">
				<?php echo JText::_( 'ID' ); ?>
			</th>							
		</tr>
		</thead>
		<tbody>
		<?php
		$k = 0;
		$repeat = 0;
		
		for ($i = $this->pagination->limitstart; $i < $nrows; $i++) {
			
			if( !isset($this->rowList[$i])) $this->rowList[$i] = $i;
			if( !isset($this->depthList[$i])) $this->depthList[$i] = 0;
			
			$row = $this->categories[$this->rowList[$i]];
			
			$checked = JHTML::_('grid.id', $i, $row->category_id);
			$published = JHTML::_('grid.published', $row, $i);
			$editlink = JRoute::_('index.php?option=com_virtuemart&view=category&task=edit&cid[]=' . $row->category_id);
			$statelink	= JRoute::_('index.php?option=com_virtuemart&view=category&category_id=' . $row->category_id);
			$showProductsLink = JRoute::_('index.php?option=com_virtuemart&view=product&category_id=' . $row->category_id);
			
			$categoryLevel = '';
			$repeat = $this->depthList[$i] + 1;
			
			if($repeat > 1){
				$categoryLevel = str_repeat(".&nbsp;&nbsp;&nbsp;", $repeat - 1);
				$categoryLevel .= "<sup>|_</sup>&nbsp;";
			}
		?>
			<tr class="<?php echo "row".$k;?>">
				<td align="center">
					<?php echo ($i+1);?>
				</td>			            
				<td><?php echo $checked;?></td>
				<td align="left">
					<span class="categoryLevel"><?php echo $categoryLevel;?></span>
					<a href="<?php echo $editlink;?>"><?php echo $this->escape($row->category_name);?></a>
				</td>					
				<td align="left">
					<?php echo JText::_($row->category_description); ?>
				</td>				
				<td>
					<?php echo ShopFunctions::countProductsByCategory($row->category_id);?>
					&nbsp;<a href="<?php echo $showProductsLink; ?>">[ <?php echo JText::_('SHOW');?> ]</a>
				</td>	
				<td align="center">
					<?php echo $published;?>
				</td>
				<td align="center">
					<a href="#" onclick="return listItemTask('cb<?php echo $i;?>', 'toggleShared')" title="<?php echo ( $row->category_shared == 'Y' ) ? JText::_( 'Yes' ) : JText::_( 'No' );?>">
						<img src="images/<?php echo ( $row->category_shared) ? 'tick.png' : 'publish_x.png';?>" width="16" height="16" border="0" alt="<?php echo ( $row->category_shared == 'Y' ) ? JText::_( 'Yes' ) : JText::_( 'No' );?>" />
					</a>
				</td>
				<td align="center" class="order">
					<span><?php echo $this->pagination->orderUpIcon( $i, ($row->category_parent_id == 0 || $row->category_parent_id == @$this->categories[$this->rowList[$i - 1]]->category_parent_id), 'orderUp', 'Move Up'); ?></span>
					<span><?php echo $this->pagination->orderDownIcon( $i, $nrows, ($row->category_parent_id == 0 || $row->category_parent_id == @$this->categories[$this->rowList[$i + 1]]->category_parent_id), 'orderDown', 'Move Down'); ?></span>
					<input type="text" name="order[<?php echo $i?>]" id="order[<?php echo $i?>]" size="5" value="<?php echo $row->ordering; ?>" style="text-align: center" />
				</td>
				<td align="center">
					<?php echo $row->category_id;?>
				</td>				        																														
			</tr>
		<?php
			$k = 1 - $k;
		}
		?>
		</tbody>
		<tfoot>
			<tr>
				<td colspan="10">
					<?php echo $this->pagination->getListFooter(); ?>
				</td>
			</tr>
		</tfoot>		
	</table>	
</div>
	        
	<input type="hidden" name="option" value="com_virtuemart" />
	<input type="hidden" name="controller" value="category" />
	<input type="hidden" name="view" value="category" />	
	<input type="hidden" name="task" value="" />
	<input type="hidden" name="boxchecked" value="0" />
	<?php echo JHTML::_( 'form.token' ); ?>
</form>
            
            
<?php AdminMenuHelper::endAdminArea(); ?> 