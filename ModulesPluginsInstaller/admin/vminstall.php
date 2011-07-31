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

		jimport('joomla.filesystem.file');
		jimport('joomla.filesystem.folder');
	}



	public function install() {


		$this->installPlugin('VM - Payment, Standard', 'plugin','standard', 'vmpayment');
		$this->installPlugin('VM - Payment,Paypal', 'plugin', 'paypal', 'vmpayment');

		$this->installPlugin('VM - Shipper, By weight, ZIP and countries','plugin', 'weight_countries', 'vmshipper');
		$this->installPlugin('VM - Search, Virtuemart Product', 'plugin', 'virtuemart', 'search');

		$this->installModule('VM - Currencies Selector','mod_virtuemart_currencies',4,'text_before=\nproduct_currency=\ncache=1\nmoduleclass_sfx=\nclass_sfx=\n');
		$this->installModule('VM - Featured products', 'mod_virtuemart_product',3,'product_group=featured\nmax_items=2\nproducts_per_row=\ndisplay_style=list\nshow_price=1\nshow_addtocart=1\nheaderText=Best products\nfooterText=\nfilter_category=0\ncategory_id=1\ncache=0\nmoduleclass_sfx=\nclass_sfx=\n');
		$this->installModule('VM - Best Sales','mod_virtuemart_product',1,'product_group=topten\nmax_items=3\nproducts_per_row=\ndisplay_style=list\nshow_price=1\nshow_addtocart=1\nheaderText=\nfooterText=\nfilter_category=0\ncategory_id=1\ncache=0\nmoduleclass_sfx=\nclass_sfx=\n');
		$this->installModule('VM - Search in Shop','mod_virtuemart_search',2,'width=20\ntext=\nbutton=\nbutton_pos=right\nimagebutton=\nbutton_text=\nmoduleclass_sfx=\ncache=1\ncache_time=900\n');
		$this->installModule('VM - Manufacturer','mod_virtuemart_manufacturer',5,'show=all\ndisplay_style=div\nmanufacturers_per_row=\nheaderText=\nfooterText=\ncache=0\nmoduleclass_sfx=\nclass_sfx=');
		$this->installModule('VM - Shopping cart','mod_virtuemart_cart',0,'moduleclass_sfx=\nshow_price=1\nshow_product_list=1\n');

		/* Plugin auto move*/
		$src= JPATH_ADMINISTRATOR.DS."components".DS."com_vm_all-in-one".DS."plugins" ;
		$dst= JPATH_ROOT . DS . "plugins" ;
		$this->recurse_copy( $src ,$dst );
		echo " VirtueMart2 plugins moved to the joomla plugins folder<br/ >" ;

		/* modules auto move*/
		$src= JPATH_ADMINISTRATOR.DS."components".DS."com_vm_all-in-one".DS."modules" ;
		$dst= JPATH_ROOT . DS . "modules" ;
		$this->recurse_copy( $src ,$dst);
		echo " VirtueMart2 modules moved to the joomla modules folder<br/ >" ;

		/* language auto move*/
		$src= JPATH_ADMINISTRATOR.DS."components".DS."com_vm_all-in-one".DS."languageFE" ;
		$dst= JPATH_ROOT . DS . "language" ;
		$this->recurse_copy( $src ,$dst  );
		echo " VirtueMart2 language  moved to the joomla language FE folder   <br/ >" ;

		/* language auto move*/
		$src= JPATH_ADMINISTRATOR.DS."components".DS."com_vm_all-in-one".DS."languageBE" ;
		$dst= JPATH_ADMINISTRATOR . DS . "language" ;
		$this->recurse_copy( $src ,$dst );
		echo " VirtueMart2 language   moved to the joomla language BE folder   <br/ >" ;

// 		$this->uninstall();
	}

	/**
	 * Installs a vm plugin into the database
	 *
	 */
	private function installPlugin($name, $type, $element, $group){

		$data = array();

		if(version_compare(JVERSION,'1.7.0','ge')) {

			// Joomla! 1.7 code here
			$table = JTable::getInstance('extension');
			$data['enabled'] = 1;
			$tableName = '#__extensions';
		} elseif(version_compare(JVERSION,'1.6.0','ge')) {

			// Joomla! 1.6 code here
			$table = JTable::getInstance('extension');
			$data['enabled'] = 1;
			$tableName = '#__extensions';
		} else {

			// Joomla! 1.5 code here
			$table = JTable::getInstance('plugin');
			$data['published'] = 1;
			$tableName = '#__plugins';
		}

		$data['name'] = $name;
		$data['type'] = $type;
		$data['element'] = $element;
		$data['folder'] = $group;

		$data['client_id'] = 0;
		$data['access']  = 1;

		$db = JFactory::getDBO();
		$q = 'SELECT COUNT(name) FROM `'.$tableName.'` WHERE `name` = "'.$name.'" ';
		$db->setQuery($q);
		$count = $db->loadResult();

// 		$app = JFactory::getApplication();
// 		$app -> enqueueMessage('VMInstaller count for '.$name.' '.$type.' '.$element.' '.$group.'  = '.$count.' and dingens '.$db->getErrorMsg());
// 		$app -> enqueueMessage('VMInstaller query for '.$name.' = '.$count.' and dingens '.$db->getQuery());

		if(empty($count)){
			if(!$table->bind($data)){
				$app = JFactory::getApplication();
				$app -> enqueueMessage('VMInstaller table->bind throws error for '.$name.' '.$type.' '.$element.' '.$group);
			}

			if(!$table->check($data)){
				$app = JFactory::getApplication();
				$app -> enqueueMessage('VMInstaller table->check throws error for '.$name.' '.$type.' '.$element.' '.$group);

			}

			if(!$table->store($data)){
				$app = JFactory::getApplication();
				$app -> enqueueMessage('VMInstaller table->store throws error for '.$name.' '.$type.' '.$element.' '.$group);
			}

			$errors = $table->getErrors();
			foreach($errors as $error){
				$app = JFactory::getApplication();
				$app -> enqueueMessage( get_class( $this ).'::store '.$error);
			}
		}


	}

	public function installModule($title,$module,$ordering,$params){

		$table = JTable::getInstance('module');
		if(version_compare(JVERSION,'1.7.0','ge')) {
			// Joomla! 1.7 code here
// 			$table = JTable::getInstance('module');
			$data['position'] = 'position-4 ';
		} elseif(version_compare(JVERSION,'1.6.0','ge')) {
			// Joomla! 1.6 code here
// 			$table = JTable::getInstance('module');
			$data['position'] ='left';
		} else {
			// Joomla! 1.5 code here

			$data['position'] = 'left';
		}

		$data['title'] 	= $title;
		$data['ordering'] = $ordering;
		$data['published'] = 1;
		$data['module'] 	= $module;
		$data['access'] 	= 0;
		$data['params'] 	= $params;

		$db = $table->getDBO();
		$q = 'SELECT COUNT(title) FROM `#__modules` WHERE `title` = "'.$title.'" ';
		$db->setQuery($q);
		$count = $db->loadResult();

		if(empty($count)){
			if(!$table->bind($data)){
				$app = JFactory::getApplication();
				$app -> enqueueMessage('VMInstaller table->bind throws error for '.$name.' '.$type.' '.$element.' '.$group);
			}

			if(!$table->check($data)){
				$app = JFactory::getApplication();
				$app -> enqueueMessage('VMInstaller table->check throws error for '.$name.' '.$type.' '.$element.' '.$group);

			}

			if(!$table->store($data)){
				$app = JFactory::getApplication();
				$app -> enqueueMessage('VMInstaller table->store throws error for '.$name.' '.$type.' '.$element.' '.$group);
			}

			$errors = $table->getErrors();
			foreach($errors as $error){
				$app = JFactory::getApplication();
				$app -> enqueueMessage( get_class( $this ).'::store '.$error);
			}
		}

		$lastUsedId = $table->id;

		$q = 'SELECT COUNT(moduleid) FROM `#__modules_menu` WHERE `moduleid` = "'.$lastUsedId.'" ';
		$db->setQuery($q);
		$count = $db->loadResult();

		$action = '';
		if(empty($count)){
			$q = 'INSERT INTO `#__modules_menu` (`moduleid`, `menuid`) VALUES( "'.$lastUsedId.'" , "0");';
			$db->setQuery($q);
			$db->query();
		} else {
// 			$action = 'UPDATE `#__modules_menu` SET (`menuid` = "0") WHERE `moduleid` = "'.$lastUsedId.'" ';
		}
// 		$q = $action.'

// 		$db->query($q);
// 		j1.6
// 		INSERT INTO `#__modules` (`id`, `title`, `note`,`content`, `ordering`, `position`, `checked_out`, `checked_out_time`, `publish_up`, `publish_down`, `published`, `module`, `access`, `showtitle`, `params`, `client_id`, `language`)
// 		VALUES (NULL, 'Currencies Selector'	, '', ''		, 5, 		'left', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 'mod_virtuemart_currencies', 0, 1, 'text_before=\nproduct_currency=\ncache=1\nmoduleclass_sfx=\nclass_sfx=\n\n', 0, '*');

// 		j1.5
// 		INSERT INTO `#__modules` (`title`, `content`, `ordering`, `position`, `published`, `module`, `numnews`, `access`, `showtitle`, `params`, `iscore`, `client_id`, `control`)
// 		VALUES ( 'currencies selector'	, ''		, 5, 		'left', 1, 'mod_virtuemart_currencies', 0, 0, 1, 'text_before=\nproduct_currency=\ncache=1\nmoduleclass_sfx=\nclass_sfx=\n\n', 0, 0, '');

	}

	/**
	* copy all $src to $dst folder and remove it
	* Enter description here ...
	* @param String $src path
	* @param String $dst path
	* @param String $type modules, plugins, languageBE, languageFE
	*/
	private function recurse_copy($src,$dst ) {

		$dir = opendir($src);
		@mkdir($dst);
		$tt=readdir($dir);

		while(false !== ( $file = readdir($dir)) ) {
			if (( $file != '.' ) && ( $file != '..' )) {
				if ( is_dir($src .DS. $file) ) {
					$this->recurse_copy($src .DS. $file,$dst .DS. $file);
				}
				else {
					JFile::move($src .DS. $file,$dst .DS. $file);
				}
			}
		}
		closedir($dir);
		//if (is_dir($src)) $this->RemoveDir($src, true);
		if (is_dir($src)) JFolder::delete($src);
	}


	public function uninstall() {

		if(version_compare(JVERSION,'1.7.0','ge')) {
			// Joomla! 1.7 code here
			$q = 'DELETE FROM #__extensions WHERE element = "com_vm_all-in-one" ';
		} elseif(version_compare(JVERSION,'1.6.0','ge')) {
			// Joomla! 1.6 code here
			$q = 'DELETE FROM #__extensions WHERE element = "com_vm_all-in-one" ';
		} else {
			// Joomla! 1.5 code here
			$q = 'DELETE FROM #__components WHERE name = "VM_All-in-one" ';
		}
		$db = JFactory::getDBO();
		$db->setQuery($q);
		if(!$db->query()){
			$app = JFactory::getApplication();
			$app -> enqueueMessage('All in one Installer error deleting component from table uninstall '.$db->getErrorMsg());
		}

		if(!JFolder::delete(JPATH_ADMINISTRATOR.DS."components".DS."com_vm_all-in-one")){
			$app = JFactory::getApplication();
			$app -> enqueueMessage('All in one Installer uninstall, error deleting files, path '.JPATH_ADMINISTRATOR.DS."components".DS."com_vm_all-in-one");

		}

		return true;

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


		if(version_compare(JVERSION,'1.7.0','ge')) {
			// Joomla! 1.7 code here
			$_sqlf .= '.1.6';
		} elseif(version_compare(JVERSION,'1.6.0','ge')) {
			// Joomla! 1.6 code here
			$_sqlf .= '.1.6';
		} else {
			// Joomla! 1.5 code here

		}

/*		if (strpos(JVERSION,'1.6') === 0) {
			$_sqlf .= '.1.6';
		}*/
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
