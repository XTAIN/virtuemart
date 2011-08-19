<?php
/**
*
* Description
*
* @package	VirtueMart
* @subpackage
* @author
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
AdminUIHelper::startAdminArea();

$j15 = VmConfig::isJ15();

?>


<form action="index.php" method="post" name="adminForm" id="adminForm">
    <div id="header">
	<div id="filterbox" >
	    <table>
		<tr>
		    <td align="left" width="100%">
				<?php echo ShopFunctions::displayDefaultViewSearch ('COM_VIRTUEMART_ORDER_PRINT_NAME'); ?>
		    </td>
		</tr>
	    </table>
	</div>
	<div id="resultscounter"><?php echo $this->pagination->getResultsCounter();?></div>
    </div>
    <table class="adminlist" cellspacing="0" cellpadding="0">
	<thead>
	    <tr>
		<th><input type="checkbox" name="toggle" value="" onclick="checkAll('<?php echo count($this->orderslist); ?>')" /></th>
		<th><?php echo JHTML::_('grid.sort', 'COM_VIRTUEMART_ORDER_LIST_ID', 'virtuemart_order_id', $this->lists['filter_order_Dir'], $this->lists['filter_order'] ); ?></th>
                <th><?php echo JHTML::_('grid.sort', 'COM_VIRTUEMART_ORDER_LIST_NUMBER', 'order_number', $this->lists['filter_order_Dir'], $this->lists['filter_order'] ); ?></th>
		<th><?php echo JHTML::_('grid.sort', 'COM_VIRTUEMART_ORDER_PRINT_NAME', 'order_name', $this->lists['filter_order_Dir'], $this->lists['filter_order'] ); ?></th>
		<th><?php echo JHTML::_('grid.sort', 'COM_VIRTUEMART_ORDER_PRINT_PAYMENT_LBL', 'payment_method', $this->lists['filter_order_Dir'], $this->lists['filter_order'] ); ?></th>
		<th><?php echo JText::_('COM_VIRTUEMART_PRINT_VIEW'); ?></th>
		<th><?php echo JHTML::_('grid.sort', 'COM_VIRTUEMART_ORDER_CDATE', 'created_on', $this->lists['filter_order_Dir'], $this->lists['filter_order'] ); ?></th>
		<th><?php echo JHTML::_('grid.sort', 'COM_VIRTUEMART_ORDER_LIST_MDATE', 'modified_on', $this->lists['filter_order_Dir'], $this->lists['filter_order'] ); ?></th>
		<th><?php echo JHTML::_('grid.sort', 'COM_VIRTUEMART_STATUS', 'order_status', $this->lists['filter_order_Dir'], $this->lists['filter_order'] ); ?></th>
		<th><?php echo JText::_('COM_VIRTUEMART_ORDER_LIST_NOTIFY' ); ?></th>
		<th><?php echo JHTML::_('grid.sort', 'COM_VIRTUEMART_TOTAL', 'order_total', $this->lists['filter_order_Dir'], $this->lists['filter_order'] ); ?></th>
	    </tr>
	</thead>
	<tbody>
	    <?php
	    if (count($this->orderslist) > 0) {
		$i = 0;
		$k = 0;
		$keyword = JRequest::getWord('keyword');
		foreach ($this->orderslist as $key => $order) {
		    $checked = JHTML::_('grid.id', $i , $order->virtuemart_order_id);
		    ?>
		    <tr class="<?php echo "row$k"; ?>">
		    <!-- Checkbox -->
		    <td><?php echo $checked; ?></td>
		    <!-- Order id -->
			<?php
			$link = 'index.php?option=com_virtuemart&view=orders&task=edit&virtuemart_order_id='.$order->virtuemart_order_id;
			?>
		<td><?php echo JHTML::_('link', JRoute::_($link), $order->virtuemart_order_id, array('title' => JText::_('COM_VIRTUEMART_EDIT').' '.$order->virtuemart_order_id)); ?></td>
		<!-- Name -->
		<td><?php echo $order->order_number; ?></td>
                <!-- Name -->
		<td><?php echo $order->order_name; ?></td>
		<!-- Payment method -->
		<td><?php echo $order->payment_method; ?></td>
		<!-- Print view -->
			<?php
			/* Print view URL */
			$details_url = JURI::base()."?option=com_virtuemart&view=orders&task=orderPrint&format=raw&virtuemart_order_id=".$order->virtuemart_order_id;
			$details_link = "<a href=\"javascript:void window.open('$details_url', 'win2', 'status=no,toolbar=no,scrollbars=yes,titlebar=no,menubar=no,resizable=yes,width=640,height=480,directories=no,location=no');\"  >";
			$details_link .= '<span class="hasTip print_32" title="'.JText::_('COM_VIRTUEMART_PRINT').'">&nbsp;</span></a>';
			?>
		<td><?php echo $details_link; ?></td>
		<!-- Order date -->
		<td><?php echo $order->created_on //date('d-M-y H:i', $order->created_on); ?></td>
		<!-- Last modified -->
		<td><?php echo $order->modified_on //date('d-M-y H:i', $order->modified_on); ?></td>
		<!-- Status -->
		<td>
				<?php echo JHTML::_('select.genericlist', $this->orderstatuses, 'order_status['.$order->virtuemart_order_id.']', '', 'order_status_code', 'order_status_name', $order->order_status, 'order_status'.$i,true); ?>
				<input type="hidden" name="current_order_status['<?php echo $order->virtuemart_order_id; ?>']" value="<?php echo $order->order_status; ?>" />
				<br />
				<textarea class="element-hidden vm-order_comment vm-showable" name="order_comment['<?php echo $order->virtuemart_order_id; ?>']" value="" cols="40" rows="5"/></textarea>
				<?php echo JHTML::_('link', '#', JText::_('COM_VIRTUEMART_ADD_COMMENT'), array('class' => 'show_comment')); ?>
		</td>
		<!-- Update -->
		<td>
			<input type="checkbox" class="inputbox" name="notify_customer['<?php echo $order->virtuemart_order_id; ?>']" /><?php echo JText::_('COM_VIRTUEMART_ORDER_LIST_NOTIFY'); ?>
			<br />
			&nbsp;&nbsp;&nbsp;<input type="checkbox" class="inputbox" name="include_comment['<?php echo $order->virtuemart_order_id; ?>']" /><?php echo JText::_('COM_VIRTUEMART_ORDER_HISTORY_INCLUDE_COMMENT'); ?>
			<br />
			<input type="checkbox" class="inputbox" name="update_lines['.$order->virtuemart_order_id.']"  checked="checked" /><?php echo JText::_('COM_VIRTUEMART_ORDER_UPDATE_LINESTATUS'); ?>
		</td>
		<!-- Total -->
		<td><?php echo $order->order_total; ?></td>
	    </tr>
		    <?php
		    $k = 1 - $k;
		    $i++;
		}
	    }
	    ?>
	</tbody>
	<tfoot>
	    <tr>
		<td colspan="11">
		    <?php echo $this->pagination->getListFooter(); ?>
		</td>
	    </tr>
	</tfoot>
    </table>
    <!-- Hidden Fields -->
    <input type="hidden" name="filter_order" value="<?php echo $this->lists['filter_order']; ?>" />
    <input type="hidden" name="filter_order_Dir" value="<?php echo $this->lists['filter_order_Dir']; ?>" />
    <input type="hidden" name="task" value="" />
    <input type="hidden" name="option" value="com_virtuemart" />
    <input type="hidden" name="view" value="orders" />
    <input type="hidden" name="boxchecked" value="0" />
    <?php echo JHTML::_( 'form.token' ); ?>
</form>
<?php AdminUIHelper::endAdminArea(); ?>
<script type="text/javascript">
<!--

jQuery('.show_comment').click(function() {
  jQuery(this).prev('.element-hidden').show();
  return false
});

jQuery('.element-hidden').mouseleave(function() {
  jQuery(this).hide();
});
jQuery('.element-hidden').mouseout(function() {
  jQuery(this).hide();
});
-->
</script>