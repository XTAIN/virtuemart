<?php
/**
*
* Description
*
* @package	VirtueMart
* @subpackage UpdatesMigration
* @author Max Milbers
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

if(!VmConfig::get('dangeroustools', false)){
	$uri = JFactory::getURI();
	$link = $uri->root() . 'administrator/index.php?option=com_virtuemart&view=config';
	?>

	<div class="vmquote" style="text-align:left;margin-left:20px;">
	<span style="font-weight:bold;color:green;"> <?php echo JText::sprintf('COM_VIRTUEMART_SYSTEM_DANGEROUS_TOOL_ENABLED',$link) ?></span>
	</div>

	<?php
}

?>
<table cellpadding="10">
    <tr>
<?php /*	<td align="center">
		<?php $link=JROUTE::_('index.php?option=com_virtuemart&view=updatesmigration&task=installSampleData&token='.JUtility::getToken()); ?>
	    <span onclick="javascript:confirmation('<?php echo JText::_('COM_VIRTUEMART_UPDATE_INSTALLSAMPLE_CONFIRM'); ?>', '<?php echo $link; ?>');">
		<img src="components/com_virtuemart/assets/images/icon_48/vm_install_48.png">
	    </span>
	    <br /><?php echo JText::_('COM_VIRTUEMART_SAMPLE_DATA'); ?>
	</td>
	<td align="center">
	    <a href="<?php echo JROUTE::_('index.php?option=com_virtuemart&view=updatesmigration&task=userSync&token='.JUtility::getToken()); ?>">
		<img src="components/com_virtuemart/assets/images/icon_48/vm_shoppers_48.png">
	    </a>
	    <br /><?php echo JText::_('COM_VIRTUEMART_SYNC_JOOMLA_USERS'); ?>
	</td>*/ ?>
 	<td align="center">
		<?php $link=JROUTE::_('index.php?option=com_virtuemart&view=updatesmigration&task=portMedia&token='.JUtility::getToken() ); ?>
	    <span onclick="javascript:confirmation('<?php echo 'Start migrate Media?'; ?>', '<?php echo $link; ?>');">
		<img src="components/com_virtuemart/assets/images/icon_48/vm_categories_48.png">
	    </span>
	    <br /><?php echo JText::_('COM_VIRTUEMART_SYNC_MEDIA_FILES'); ?>
	</td>
	<td align="center">
		<?php $link=JROUTE::_('index.php?option=com_virtuemart&view=updatesmigration&task=renewConfig&token='.JUtility::getToken() ); ?>
	    <span onclick="javascript:confirmation('<?php echo JText::_('COM_VIRTUEMART_TOOLS_RENEW_CONFIG_CONFIRM'); ?>', '<?php echo $link; ?>');">
		<img src="components/com_virtuemart/assets/images/icon_48/vm_install_48.png">
	    </span>
	    <br />
            <?php echo Jtext::_('COM_VIRTUEMART_TOOLS_RENEW_CONFIG'); ?>
	</td>
	<td align="left" colspan="3" >
	    Synchronize media: Just upload your media to the paths:<br />
	    Media product url: <?php echo VmConfig::get('media_product_path'); ?><br />
	    Media category url: <?php echo VmConfig::get('media_category_path'); ?><br />
	    Media manufacturer url: <?php echo VmConfig::get('media_manufacturer_path'); ?><br />
<br />
	    You can change these urls in the config settings.<br /><br />
	    Renew config by file means that the config settings are reset by the values from the file /administrator/components/com_virtuemart/virtuemart_defaults.cfg
	</td>
    </tr>

    <tr>
   <td align="center">
		<?php $link=JROUTE::_('index.php?option=com_virtuemart&view=updatesmigration&task=migrateUsersFromVmOne&token='.JUtility::getToken() ); ?>
	    <span onclick="javascript:confirmation('<?php echo 'Start to migrate users?'; ?>', '<?php echo $link; ?>');">
		<img src="components/com_virtuemart/assets/images/icon_48/vm_install_48.png">
	    </span>
	    <br />
	    Migrate users we can from VM1 to VM2
	</td>

   <td align="center">
		<?php $link=JROUTE::_('index.php?option=com_virtuemart&view=updatesmigration&task=migrateGeneralFromVmOne&token='.JUtility::getToken() ); ?>
	    <span onclick="javascript:confirmation('<?php echo 'Start to migrate general?'; ?>', '<?php echo $link; ?>');">
		<img src="components/com_virtuemart/assets/images/icon_48/vm_install_48.png">
	    </span>
	    <br />
	    Migrate general we can from VM1 to VM2
	</td>

	<td align="center">
		<?php $link=JROUTE::_('index.php?option=com_virtuemart&view=updatesmigration&task=migrateProductsFromVmOne&token='.JUtility::getToken() ); ?>
	    <span onclick="javascript:confirmation('<?php echo 'Start to migrate products?'; ?>', '<?php echo $link; ?>');">
		<img src="components/com_virtuemart/assets/images/icon_48/vm_install_48.png">
	    </span>
	    <br />
	    Migrate products we can from VM1 to VM2
	</td>
		<td align="center">
		<?php $link=JROUTE::_('index.php?option=com_virtuemart&view=updatesmigration&task=migrateOrdersFromVmOne&token='.JUtility::getToken() ); ?>
	    <span onclick="javascript:confirmation('<?php echo 'Start to migrate orders?'; ?>', '<?php echo $link; ?>');">
		<img src="components/com_virtuemart/assets/images/icon_48/vm_install_48.png">
	    </span>
	    <br />
	    Migrate orders we can from VM1 to VM2
	</td>

 	<td align="center">
		<?php $link=JROUTE::_('index.php?option=com_virtuemart&view=updatesmigration&task=migrateAllInOne&token='.JUtility::getToken() ); ?>
	    <span onclick="javascript:confirmation('<?php echo 'Start to migrate?'; ?>', '<?php echo $link; ?>');">
		<img src="components/com_virtuemart/assets/images/icon_48/vm_install_48.png">
	    </span>
	    <br />
	    Migrate everything we can from VM1 to VM2
	</td>
<?php /*	<td align="center">
		<?php $link=JROUTE::_('index.php?option=com_virtuemart&view=updatesmigration&task=migrateVmOneUsers&token='.JUtility::getToken() ); ?>
	    <span onclick="javascript:confirmation('<?php echo 'Start migrate Users?'; ?>', '<?php echo $link; ?>');">
		<img src="components/com_virtuemart/assets/images/icon_48/vm_install_48.png">
	    </span>
	    <br />
	    Migrate VM1.1 users to VM2
	</td>
 	<td align="center">
		<?php $link=JROUTE::_('index.php?option=com_virtuemart&view=updatesmigration&task=migrateVmOneOrders&token='.JUtility::getToken() ); ?>
	    <span onclick="javascript:confirmation('<?php echo 'Start migrate Orders?'; ?>', '<?php echo $link; ?>');">
		<img src="components/com_virtuemart/assets/images/icon_48/vm_install_48.png">
	    </span>
	    <br />
	    Migrate VM1.1 orders to VM2
	</td>
	<td align="left">
		To import data from virtuemart1.1 you must have the tables of virtuemart1.1 in your database. That means the migrator
		is looking for tables with the format "joomla prefix" + "vm". When you followed the defaults than it should be
		jos_vm_.<br />
		You should start with migrating medias, then users (not working yet), then products, then orders (not working yet).
	</td>*/ ?>
    </tr>

    <tr><td colspan="4"><?php echo JText::_('COM_VIRTUEMART_UPDATE_MIGRATION_TOOLS_WARNING'); ?></td></tr>
    <tr>
	<td align="center">
		<?php $link=JROUTE::_('index.php?option=com_virtuemart&view=updatesmigration&task=restoreSystemDefaults&token='.JUtility::getToken()); ?>
	    <span onclick="javascript:confirmation('<?php echo JText::_('COM_VIRTUEMART_UPDATE_RESTOREDEFAULTS_CONFIRM'); ?>', '<?php echo $link; ?>');">
		<img src="components/com_virtuemart/assets/images/icon_48/vm_cpanel_48.png">
	    </span>
	    <br /><?php echo JText::_('COM_VIRTUEMART_UPDATE_RESTOREDEFAULTS'); ?>
	</td>
	<td align="center">
		<?php $link=JROUTE::_('index.php?option=com_virtuemart&view=updatesmigration&task=deleteVmData&token='.JUtility::getToken() ); ?>
	    <span onclick="javascript:confirmation('<?php echo JText::_('COM_VIRTUEMART_UPDATE_REMOVEDATA_CONFIRM'); ?>', '<?php echo $link; ?>');">
		<img src="components/com_virtuemart/assets/images/icon_48/vm_trash_48.png">
	    </span>
	    <br /> <?php echo Jtext::_('COM_VIRTUEMART_UPDATE_REMOVEDATA'); ?>
	</td>
	<td align="center">
		<?php $link=JROUTE::_('index.php?option=com_virtuemart&view=updatesmigration&task=deleteVmTables&token='.JUtility::getToken() ); ?>
	    <span onclick="javascript:confirmation('<?php echo JText::_('COM_VIRTUEMART_UPDATE_REMOVETABLES_CONFIRM'); ?>', '<?php echo $link; ?>');">
		<img src="components/com_virtuemart/assets/images/icon_48/vm_trash_48.png">
	    </span>
	    <br />
            <?php echo Jtext::_('COM_VIRTUEMART_UPDATE_REMOVETABLES'); ?>
	</td>

    <td align="center">
		<?php $link=JROUTE::_('index.php?option=com_virtuemart&view=updatesmigration&task=refreshCompleteInstall&token='.JUtility::getToken() ); ?>
	    <span onclick="javascript:confirmation('<?php echo JText::_('COM_VIRTUEMART_DELETES_ALL_VM_TABLES_AND_FRESH_CONFIRM'); ?>', '<?php echo $link; ?>');">
		<img src="components/com_virtuemart/assets/images/icon_48/vm_trash_48.png">
	    </span>
	    <br />
            <?php echo Jtext::_('COM_VIRTUEMART_DELETES_ALL_VM_TABLES_AND_FRESH'); ?>
	</td>

<?php /*   <td align="center">
		<?php $link=JROUTE::_('index.php?option=com_virtuemart&view=updatesmigration&task=updateTable&token='.JUtility::getToken() ); ?>
	    <span onclick="javascript:confirmation('<?php echo JText::_('UPDATE table'); ?>', '<?php echo $link; ?>');">
		<img src="components/com_virtuemart/assets/images/icon_48/vm_trash_48.png">
	    </span>
	    <br />
            <?php echo Jtext::_('COM_VIRTUEMART_DELETES_ALL_VM_TABLES_AND_FRESH'); ?>
	</td> */ ?>
    </tr>
</table>

<script type="text/javascript">
<!--
function confirmation(message, destnUrl) {
	var answer = confirm(message);
	if (answer) {
		window.location = destnUrl;
	}
}
//-->
</script>