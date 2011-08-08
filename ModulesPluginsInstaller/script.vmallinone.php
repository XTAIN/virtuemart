<?php
defined('_JEXEC') or die('Restricted access');

/**
* VirtueMart script file
*
* This file is executed during install/upgrade and uninstall
*
* @author Patrick Kohl, Max Milbers
* @package VirtueMart
*/



// hack to prevent defining these twice in 1.6 installation
if (!defined('_VM_SCRIPT_INCLUDED')) {

	define('_VM_SCRIPT_INCLUDED', true);
	require_once dirname(__FILE__).DS.'vminstall.php';

	class com_virtuemart_allinoneInstallerScript {

		public function install () {

			$vminstaller = new VMInstaller();
			$success = $vminstaller->install();

			if($success){
				echo "<H3>Installing Virtuemart Plugins and modules Success</h3>";
				return true;
			} else {
				echo "<H3>Installing Virtuemart Plugins and modules Error</h3>";
				return false;
			}

		}

	}

	// PLZ look in #vminstall.php# to add your plugin and module
	function com_install(){

		$vmInstall = new com_virtuemart_allinoneInstallerScript();
		$vmInstall->install();

		return true;
	}

	function com_uninstall(){

		$vmInstall = new com_virtuemart_allinoneInstallerScript();
		$vmINstall->install();

		return true;
	}

} //if defined
// pure php no tag
