<?php defined('_JEXEC') or die('Restricted access');

/**
 * Installer for module & plugins in component
 *
 * @author Kohl Patrick
* @link http://www.virtuemart.net
* @copyright Copyright (c) 2004 - 2010 VirtueMart Team. All rights reserved.
* @license http://www.gnu.org/copyleft/gpl.html GNU/GPL, see LICENSE.php
* VirtueMart is free software. This version may have been modified pursuant
* to the GNU General Public License, and as distributed it includes or
* is derivative of works licensed under the GNU General licence
* @PLZ ADD YOUR SQL
* $id$
 */
class VMInstaller extends JObject {

	/* *
	* create in constructor the array of files
	* ONE Array for all vmpayment, vmshipper or over pluggins
	* One aray for each modules
	*  PLZ USE  .DS. for the folder not '/'
	*/
	function __construct() {

	/* add plugin files here */
	$this->_vmpayment = array("standard.php",
		"standard.xml",
		"paypal.php",
		"paypal.xml");

	$this->_vmshipper = array("weight_countries.php",
		"weight_countries.xml");

	$this->_search = array("virtuemart.php",
		"virtuemart.xml");
	/* No more files definition for modules */
	}



	public function install() {

		if (!$this->executeSQL('install')) {
			return;
		}


		/* Plugin auto move*/
		$src= JPATH_ADMINISTRATOR.DS."components".DS."com_vm_all-in-one".DS."plugins" ;
		$dst= JPATH_ROOT . DS . "plugins" ;
		$this->recurse_copy( $src ,$dst , 'plugins' );
		echo " VirtueMart2 plugins moved to the joomla plugins folder<br/ >" ;


		/* Plugin to move*/
	/*	$plugins ="plugins";

		$this->moveFile( $this->_vmpayment, $plugins,"vmpayment" );
		$this->moveFile( $this->_vmshipper, $plugins,"vmshipper" );
		$this->moveFile( $this->_search, $plugins,"search" );*/

		/* modules auto move*/
		$src= JPATH_ADMINISTRATOR.DS."components".DS."com_vm_all-in-one".DS."modules" ;
		$dst= JPATH_ROOT . DS . "modules" ;
		$this->recurse_copy( $src ,$dst , 'modules');
		echo " VirtueMart2 modules moved to the joomla modules folder<br/ >" ;

		/* modules auto move*/
		$src= JPATH_ADMINISTRATOR.DS."components".DS."com_vm_all-in-one".DS."languageFE" ;
		$dst= JPATH_ROOT . DS . "language" ;
		$this->recurse_copy( $src ,$dst , 'languageFE');
		echo " VirtueMart2 language moved to the joomla language FE folder<br/ >" ;

		/* modules auto move*/
		$src= JPATH_ADMINISTRATOR.DS."components".DS."com_vm_all-in-one".DS."languageBE" ;
		$dst= JPATH_ADMINISTRATOR . DS . "language" ;
		$this->recurse_copy( $src ,$dst , 'languageBE');
		echo " VirtueMart2 language moved to the joomla language BE folder<br/ >" ;

		$q = 'INSERT INTO `#__com_vm_all-in-one` SET (
				`plugins` = "'.implode(',',$this->_plugins).'",
				`modules` = "'.implode(',',$this->_modules).'",
				`languageFE` = "'.implode(',',$this->_languageFE).'",
				`languageBE` = "'.implode(',',$this->_languageBE).'",
				) WHERE `id` = 1';

		$db = JFactory::getDBO();
		$db->setQuery($q);
		if(!$db->query()){
			$app = JFactory::getApplication();
			$app -> enqueueMessage($db->getErrorMsg());
		}


	}

	public function uninstall() {

	if (!$this->executeSQL('uninstall')) {
		return;
	}

	$q = 'SELECT * FROM `#__com_vm_all-in-one` WHERE `id` = "1" ';
	$db = JFactory::getDBO();
	$db->setQuery($q);
	$prevStored = $db->loadAssoc();


	/*  uninstall Plugin here */
	$this->deleteFile($prevStored);
// 	$plugins ="plugins";
// 	$this->deleteFile( $this->_vmpayment, $plugins,"vmpayment" );
// 	$this->deleteFile( $this->_vmshipper, $plugins,"vmshipper" );
// 	$this->deleteFile( $this->_search, $plugins,"search" );


	/* uninstall modules here*/
	$this->deleteModFolder( "mod_virtuemart_cart" );
	$this->deleteModFolder( "mod_virtuemart_category" );
	$this->deleteModFolder( "mod_virtuemart_currencies" );
	$this->deleteModFolder( "mod_virtuemart_manufacturer" );
	$this->deleteModFolder( "mod_virtuemart_product" );
	$this->deleteModFolder( "mod_virtuemart_search" );


	}

	/* Folder and Files delete
	  * $name  # folder to delete recursive
	  */
	private function deleteModFolder( $name ="" ) {
		if ($name) {
			$modulesPath = JPATH_ROOT . DS ."modules" . DS . $name ;
			if (is_dir($modulesPath)) $this->RemoveDir($modulesPath, true);
			echo $name . " removed<br/>";
		}
	}

	/**
	  * $files   # array of files to move
	  * $type   # folder 'plugins' or 'module'
	  * $name  # folder 'mod_module or plugin Name'
	  * Delete files in array
	  */
	private function deleteFile( $files = array(),$types='',$name ='' ) {

		$deletePaths = array();
		if(!empty($types) && !empty($name)){
			$deletePath = JPATH_ROOT . DS . $types . DS . $name . DS;
		} else {

			$deletePath = '';
		}

		foreach($files as $file){
			if (is_file(JPATH_ROOT.$fileName)) unlink(JPATH_ROOT.$fileName);

			$subfolder = explode ( DS , $fileName);
			$countfolder = count($subfolder);
			if ( $countfolder > 1 ) {
				for($i = 1;$i < $countfolder; $i++){
					rmdir(JPATH_ROOT.$fileName);
				}
			}
			if (is_dir(JPATH_ROOT.$fileName)) rmdir(JPATH_ROOT.$fileName);

			$deletePath = JPATH_ROOT.$subfolder[0].$subfolder[1];
			if ($this->is_empty_folder($deletePath)) rmdir($deletePath);
		}
		echo 'Plugins removed';
// 		foreach ($files as $fileName) {
// 			if(!empty($deletePath)){
// 				if (is_file($deletePath . DS . $fileName)) unlink($deletePath . DS . $fileName);
// 			} else {
// 				if (is_file($fileName)) unlink($fileName);
// 			}


// 			$subfolder = explode ( DS , $fileName);
// 			$countfolder = count($subfolder);
// 			$tempPath = $deletePath;
// 			if ( $countfolder > 1 ) {
// 				for($i = 0;$i < $countfolder-1; $i++){
// 					$deletePaths[] = $tempPath.$subfolder[$i] ;
// 					if (is_dir($tempPath.$subfolder[$i])){
// 						$tempPath.=  DS . $subfolder[$i];

// 					}
// 				}
// 			}
// 		}
// 		foreach ($deletePaths as $remove) {
// 			if (is_dir($remove)) rmdir($remove);
// 		}
		/* delete only empty folder (case you have more plugins installed) */
		//if ($this->is_empty_folder($deletePath)) rmdir($deletePath);
		//echo $types." ".$name . " removed<br/>";
	}

	/**
	  * $files   # array of files to move
	  * $type   # folder 'plugins' or 'module'
	  * $name  # folder 'mod_yourmodule or plugin Name'
	  * copy and delete
	  */
	private function moveFile( $files = array(),$types,$name ="" ) {

		$copyPath   = JPATH_ROOT . DS . $types . DS . $name . DS;
		$sourcePath = JPATH_ADMINISTRATOR.DS."components".DS."com_vm_all-in-one".DS.$types.DS ;

		if ($name)  $sourcePath .= $name . DS;
		if (!is_dir($copyPath)) mkdir($copyPath);

		foreach ($files as $fileName) {
			$subfolder = explode ( DS , $fileName);
			$countfolder = count($subfolder);
			$tempPath = $copyPath;
			if ( $countfolder > 1 ) {
				for($i = 0;$i < $countfolder-1; $i++){
					if (!is_dir($tempPath.$subfolder[$i])){
						$tempPath.=  DS . $subfolder[$i];
						mkdir($tempPath);
					}
				}
			}
			$to = $copyPath . DS . $fileName;
			if (is_file($to)) unlink($to);
			$from = $sourcePath . $fileName;
			copy($from , $to);
		}
		echo $types." ".$name . " Installed<br/>";
		if (is_dir($sourcePath)) $this->RemoveDir($sourcePath, true);
	}

	/**
	 * copy all $src to $dst folder and remove it
	 * Enter description here ...
	 * @param String $src path
	 * @param String $dst path
	 * @param String $type modules, plugins, languageBE, languageFE
	 */
	private function recurse_copy($src,$dst ,$type) {
		$dir = opendir($src);
		@mkdir($dst);
		$relpath = substr($dst,strlen(JPATH_ROOT));
		while(false !== ( $file = readdir($dir)) ) {
			if (( $file != '.' ) && ( $file != '..' )) {
				if ( is_dir($src .DS. $file) ) {
					$this->recurse_copy($src .DS. $file,$dst .DS. $file);
				}
				else {
					copy($src .DS. $file,$dst .DS. $file);
					$this->{'_'.$type}[] = $relpath.DS.$file;
				}
			}
		}
		closedir($dir);
		if (is_dir($src)) $this->RemoveDir($src, true);
	}
	/*
	  * $dir 		# the folder
	  * $DeleteMe	# true to delete root folder
	  * generic recursive delete function
	  */
	private function RemoveDir($dir, $DeleteMe) {
		if(!$dh = @opendir($dir)) return;
		while (($obj = readdir($dh))) {
			if($obj=='.' || $obj=='..') continue;
			if (!@unlink($dir.'/'.$obj)) $this->RemoveDir($dir.'/'.$obj, true);
		}
		if ($DeleteMe){
			closedir($dh);
			@rmdir($dir);
		}
	}
	/*
	  * $dir 		# the folder
	  * $DeleteMe	# true to delete root folder
	  * generic is empty dir function
	  */
	private function is_empty_folder($dir){
    $c=0;
    if(is_dir($dir) ){
        $files = opendir($dir);
        while ($file=readdir($files)){
            $c++;
            if ($c>2)
               return false; // dir contains something
        }
         return true; // empty dir
    }
    else return false; // not a dir
	}

	/**
	 * Select the proper SQL file for (un)install based on the actual Joomla version,
	 * and execute the SQL code.
	 * @param string 'install' of 'uninstall'
	 * @return boolean, true on success, false otherwise
	 * @author Oscar van Eijk
	 */
	private function executeSQL($_sqlf)
	{
		jimport('joomla.installer.helper');
		$_db = JFactory::getDBO();

		if (strpos(JVERSION,'1.6') === 0) {
			$_sqlf .= '.1.6';
		}
		$_sqlf = ('components'.DS.'com_vm_all-in-one'.DS.$_sqlf.'.sql');

		if ( !file_exists($_sqlf) ) {
			JError::raiseWarning(500, 'SQL file ' . $_sqlf . ' not found');
			return false;
		}
		$_qr = JInstallerHelper::splitSql(file_get_contents($_sqlf));

		foreach ($_qr as $_q) {
			$_q = trim($_q);
			if ($_q != '' && $_q{0} != '#') {
				$_db->setQuery($_q);
				if (!$_db->query()) {
					JError::raiseWarning(500, 'JInstaller::install: '.JText::_('SQL Error')." ".$_db->stderr(true));
					return false;
				}
			}
		}
		return true;
	}

}