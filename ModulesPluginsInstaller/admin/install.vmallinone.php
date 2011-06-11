<?php defined('_JEXEC') or die('Restricted access');

require_once dirname(__FILE__).'/vminstall.php';
/* PLZ look in #vminstall.php# to add your plugin and module */
function com_install(){
	$vminstaller = new VMInstaller();	
	$vminstaller->install();
	echo "<H3>Installing Virtuemart Plugins and modules Success</h3>"; 
	return true;

}
function com_uninstall(){
	$vminstaller = new VMInstaller();	
	$vminstaller->uninstall();
	echo "<H3>Uninstalling Virtuemart Plugins and modules Success</h3>"; 
	return true;
}
// pure php no tag
