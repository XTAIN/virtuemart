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


	class com_virtuemart_allinoneInstallerScript {

	public function preflight(){
		//$this->vmInstall();
	}

	public function install(){
		//$this->vmInstall();
	}

	public function discover_install(){
		//$this->vmInstall();
	}

	public function postflight () {
		$this->vmInstall();
	}

	public function vmInstall () {

		JFolder::create(JPATH_ROOT .DS. 'plugins'.DS.'vmpayment');
		JFolder::create(JPATH_ROOT .DS. 'plugins'.DS.'vmshipper');

		$this->path = JInstaller::getInstance()->getPath('extension_administrator');

		$this->installPlugin('VM - Payment, Standard', 'plugin','standard', 'vmpayment');
		$this->installPlugin('VM - Payment, Paypal', 'plugin', 'paypal', 'vmpayment');

		$this->installPlugin('VM - Shipper, By weight, ZIP and countries','plugin', 'weight_countries', 'vmshipper');
		$this->installPlugin('VM - Search, Virtuemart Product', 'plugin', 'virtuemart', 'search');

		$this->installModule('VM - Currencies Selector','mod_virtuemart_currencies',4,'text_before=\nproduct_currency=\ncache=1\nmoduleclass_sfx=\nclass_sfx=\n');
		$this->installModule('VM - Featured products', 'mod_virtuemart_product',3,'product_group=featured\nmax_items=2\nproducts_per_row=\ndisplay_style=list\nshow_price=1\nshow_addtocart=1\nheaderText=Best products\nfooterText=\nfilter_category=0\ncategory_id=1\ncache=0\nmoduleclass_sfx=\nclass_sfx=\n');
		$this->installModule('VM - Best Sales','mod_virtuemart_product',1,'product_group=topten\nmax_items=3\nproducts_per_row=\ndisplay_style=list\nshow_price=1\nshow_addtocart=1\nheaderText=\nfooterText=\nfilter_category=0\ncategory_id=1\ncache=0\nmoduleclass_sfx=\nclass_sfx=\n');
		$this->installModule('VM - Search in Shop','mod_virtuemart_search',2,'width=20\ntext=\nbutton=\nbutton_pos=right\nimagebutton=\nbutton_text=\nmoduleclass_sfx=\ncache=1\ncache_time=900\n');
		$this->installModule('VM - Manufacturer','mod_virtuemart_manufacturer',5,'show=all\ndisplay_style=div\nmanufacturers_per_row=\nheaderText=\nfooterText=\ncache=0\nmoduleclass_sfx=\nclass_sfx=');
		$this->installModule('VM - Shopping cart','mod_virtuemart_cart',0,'moduleclass_sfx=\nshow_price=1\nshow_product_list=1\n');
		$this->installModule('VM - Category','mod_virtuemart_category',6,'moduleclass_sfx=\nclass_sfx=\ncategory_name=default\ncache=no\n');


		// modules auto move
		$src= $this->path .DS."modules" ;
		$dst= JPATH_ROOT . DS . "modules" ;
		$this->recurse_copy( $src ,$dst);
		echo " VirtueMart2 modules moved to the joomla modules folder<br/ >" ;

		// language auto move
		$src= $this->path .DS."languageFE" ;
		$dst= JPATH_ROOT . DS . "language" ;
		$this->recurse_copy( $src ,$dst  );
		echo " VirtueMart2 language  moved to the joomla language FE folder   <br/ >" ;

		// language auto move
		$src= $this->path .DS."languageBE" ;
		$dst= JPATH_ADMINISTRATOR . DS . "language" ;
		$this->recurse_copy( $src ,$dst );
		echo " VirtueMart2 language   moved to the joomla language BE folder   <br/ >" ;


		echo "<H3>Installing Virtuemart Plugins and modules Success.</h3>";
			echo "<H3>You may directly uninstall this component. Your plugins will remain</h3>";

			echo "<H3>Ignore the message ".JText_::_('JLIB_INSTALLER_ABORT_COMP_BUILDADMINMENUS_FAILED')."</h3>";

			return true;

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
				$idfield = 'extension_id';
			} elseif(version_compare(JVERSION,'1.6.0','ge')) {

				// Joomla! 1.6 code here
				$table = JTable::getInstance('extension');
				$data['enabled'] = 1;
				$tableName = '#__extensions';
				$idfield = 'extension_id';
			} else {

				// Joomla! 1.5 code here
				$table = JTable::getInstance('plugin');
				$data['published'] = 1;
				$tableName = '#__plugins';
				$idfield = 'id';
			}

			$data['name'] = $name;
			$data['type'] = $type;
			$data['element'] = $element;
			$data['folder'] = $group;

			$data['client_id'] = 0;
			$data['access']  = 1;

			$src= $this->path .DS. 'plugins' .DS. $group .DS.$element;

			if(version_compare(JVERSION,'1.6.0','ge')) {
				$data['manifest_cache'] = json_encode(JApplicationHelper::parseXMLInstallFile($src.DS.$element.'.xml'));
			}

			$db = JFactory::getDBO();
			$q = 'SELECT '.$idfield.' FROM `'.$tableName.'` WHERE `name` = "'.$name.'" ';
			$db->setQuery($q);
			$count = $db->loadResult();

			if(!empty($count)){
				$table->load($count);
			}

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




			if(version_compare(JVERSION,'1.7.0','ge')) {
				// Joomla! 1.7 code here
				$dst= JPATH_ROOT . DS . 'plugins' .DS. $group.DS.$element;
			} elseif(version_compare(JVERSION,'1.6.0','ge')) {
				// Joomla! 1.6 code here
				$dst= JPATH_ROOT . DS . 'plugins' .DS. $group.DS.$element;
			} else {
				// Joomla! 1.5 code here
				$dst= JPATH_ROOT . DS . 'plugins' .DS. $group;
			}

			$this->recurse_copy( $src ,$dst );

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
			$q = 'SELECT id FROM `#__modules` WHERE `title` = "'.$title.'" ';
			$db->setQuery($q);
			$id = $db->loadResult();
			if(!empty($id)){
				$data['id'] = $id;
			}
// 			if(empty($count)){
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
// 			}

			$lastUsedId = $table->id;

			$q = 'SELECT moduleid FROM `#__modules_menu` WHERE `moduleid` = "'.$lastUsedId.'" ';
			$db->setQuery($q);
			$moduleid = $db->loadResult();

			$action = '';
			if(empty($moduleid)){
				$q = 'INSERT INTO `#__modules_menu` (`moduleid`, `menuid`) VALUES( "'.$lastUsedId.'" , "0");';
			} else {
				$q = 'UPDATE `#__modules_menu` SET `menuid`= "0" WHERE `moduleid`= "'.$moduleid.'" ';
			}
			$db->setQuery($q);
			$db->query();

			if(version_compare(JVERSION,'1.6.0','ge')) {

				$q = 'SELECT extension_id FROM `#__extensions` WHERE `element` = "'.$module.'" ';
				$db->setQuery($q);
				$ext_id = $db->loadResult();

				$action = '';
				if(empty($ext_id)){
					$q = 'INSERT INTO `#__extensions` 	(`name`, `type`, `element`, `folder`, `client_id`, `enabled`, `access`, `protected`, `params`, `ordering`) VALUES
																	( "'.$title.'" , "module", "'.$module.'", "", "0", "1","1", "0","'.$params.'","'.$ordering.'");';
				} else {
					$q = 'UPDATE `#__extensions` SET 	`name`= "'.$title.'",
																	`type`= "module",
																	`element`= "'.$module.'",
																	`folder`= "",
																	`client_id`= "0",
																	`enabled`= "1",
																	`access`= "1",
																	`protected`= "0",
																	`params`= "'.$params.'",
																	`ordering`= "'.$ordering.'"

					WHERE `extension_id`= "'.$ext_id.'" ';
				}
				$db->setQuery($q);
				$db->query();

			}
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

			if(is_resource($dir)){
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
			} else {
				$app = JFactory::getApplication();
				$app -> enqueueMessage('Couldnt read dir '.$dir.' source '.$src);
			}

		}


		public function uninstall() {

			return true;
		}

	}

	// PLZ look in #vminstall.php# to add your plugin and module
	function com_install(){

		if(!version_compare(JVERSION,'1.6.0','ge')) {
		$vmInstall = new com_virtuemart_allinoneInstallerScript();
		$vmInstall->vmInstall();
		}
		return true;
	}

	function com_uninstall(){

		return true;
	}

} //if defined
// pure php no tag
