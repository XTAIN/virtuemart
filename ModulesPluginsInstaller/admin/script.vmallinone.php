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

			$this->createIndexFolder(JPATH_ROOT .DS. 'plugins'.DS.'vmcustom');
			$this->createIndexFolder(JPATH_ROOT .DS. 'plugins'.DS.'vmpayment');
			$this->createIndexFolder(JPATH_ROOT .DS. 'plugins'.DS.'vmshipper');

			$this->path = JInstaller::getInstance()->getPath('extension_administrator');

			$this->installPlugin('VM - Payment, Standard', 'plugin','standard', 'vmpayment');
			$this->installPlugin('VM - Payment, Paypal', 'plugin', 'paypal', 'vmpayment');

			$this->installPlugin('VM - Shipper, By weight, ZIP and countries','plugin', 'weight_countries', 'vmshipment');

			$this->installPlugin('VM - Custom, customer text input','plugin', 'textinput', 'vmcustom');
			$this->installPlugin('VM - Custom, stockable variants','plugin', 'stockable', 'vmcustom');
			$table = '#__virtuemart_customs';
			$fieldname = 'field_type';
			$fieldvalue = 'G';
			$this->addToRequired($table,$fieldname,$fieldvalue,"INSERT INTO `#__virtuemart_customs`
					(`custom_parent_id`, `admin_only`, `custom_title`, `custom_tip`, `custom_value`, `custom_field_desc`,
					 `field_type`, `is_list`, `is_hidden`, `is_cart_attribute`, `published`) VALUES
						(0, 0, 'COM_VIRTUEMART_STOCKABLE_PRODUCT', 'COM_VIRTUEMART_STOCKABLE_PRODUCT_TIP', NULL,
					'COM_VIRTUEMART_STOCKABLE_PRODUCT_DESC', 'G', 0, 0, 0, 1 );");


			$this->installPlugin('VM - Search, Virtuemart Product', 'plugin', 'virtuemart', 'search');

			// modules auto move
			$src= $this->path .DS."modules" ;
			$dst= JPATH_ROOT . DS . "modules" ;
			$this->recurse_copy( $src ,$dst);
			echo " VirtueMart2 modules moved to the joomla modules folder<br/ >" ;

			if(version_compare(JVERSION,'1.6.0','ge')) {
				$defaultParams = '{"text_before":"","product_currency":"","cache":"1","moduleclass_sfx":"","class_sfx":""}';
			} else {
				$defaultParams = "text_before=\nproduct_currency=\ncache=1\nmoduleclass_sfx=\nclass_sfx=\n";
			}
			$this->installModule('VM - Currencies Selector','mod_virtuemart_currencies',4,$defaultParams);


			if(version_compare(JVERSION,'1.6.0','ge')) {
				$defaultParams = '{"product_group":"featured","max_items":"2","products_per_row":"","display_style":"list","show_price":"1","show_addtocart":"1","headerText":"Best products","footerText":"","filter_category":"0","virtuemart_category_id":"0","cache":"0","moduleclass_sfx":"","class_sfx":""}';

			} else {
				$defaultParams = "product_group=featured\nmax_items=2\nproducts_per_row=\ndisplay_style=list\nshow_price=1\nshow_addtocart=1\nheaderText=Best products\nfooterText=\nfilter_category=0\ncategory_id=1\ncache=0\nmoduleclass_sfx=\nclass_sfx=\n";
			}
			 $this->installModule('VM - Featured products', 'mod_virtuemart_product',3,$defaultParams);


			if(version_compare(JVERSION,'1.6.0','ge')) {
				$defaultParams = '{"product_group":"topten","max_items":"3","products_per_row":"","display_style":"list","show_price":"1","show_addtocart":"1","headerText":"","footerText":"","filter_category":"0","virtuemart_category_id":"0","cache":"0","moduleclass_sfx":"","class_sfx":""}';
							} else {
				$defaultParams = "product_group=topten\nmax_items=3\nproducts_per_row=\ndisplay_style=list\nshow_price=1\nshow_addtocart=1\nheaderText=\nfooterText=\nfilter_category=0\ncategory_id=1\ncache=0\nmoduleclass_sfx=\nclass_sfx=\n";
			}
			 $this->installModule('VM - Best Sales','mod_virtuemart_product',1,$defaultParams);




			if(version_compare(JVERSION,'1.6.0','ge')) {

				$defaultParams = '{"width":"20","text":"","button":"","button_pos":"right","imagebutton":"","button_text":""}';
			} else {
				$defaultParams = "width=20\ntext=\nbutton=\nbutton_pos=right\nimagebutton=\nbutton_text=\nmoduleclass_sfx=\ncache=1\ncache_time=900\n";
			}
			$this->installModule('VM - Search in Shop','mod_virtuemart_search',2,$defaultParams);

			if(version_compare(JVERSION,'1.6.0','ge')) {
				$defaultParams = '{"show":"all","display_style":"list","manufacturers_per_row":"","headerText":"","footerText":""}';
			} else {
				$defaultParams = "show=all\ndisplay_style=div\nmanufacturers_per_row=\nheaderText=\nfooterText=\ncache=0\nmoduleclass_sfx=\nclass_sfx=";
			}
			$this->installModule('VM - Manufacturer','mod_virtuemart_manufacturer',5,$defaultParams);


			if(version_compare(JVERSION,'1.6.0','ge')) {
				$defaultParams = '{"moduleclass_sfx":"","show_price":"1","show_product_list":"1"}';
			} else {
				$defaultParams = "moduleclass_sfx=\nshow_price=1\nshow_product_list=1\n";
			}
			$this->installModule('VM - Shopping cart','mod_virtuemart_cart',0,$defaultParams);

			if(version_compare(JVERSION,'1.6.0','ge')) {
				$defaultParams = '{"Parent_Category_id":"0","layout":"default","cache":"0","moduleclass_sfx":"","class_sfx":""}';
			} else {
				$defaultParams = "moduleclass_sfx=\nclass_sfx=\ncategory_name=default\ncache=no\n";
			}
			$this->installModule('VM - Category','mod_virtuemart_category',6,$defaultParams);

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

			echo "<H3>Ignore the message ".JText::_('JLIB_INSTALLER_ABORT_COMP_BUILDADMINMENUS_FAILED')."</h3>";

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
				$data['access']  = 1;
				$tableName = '#__extensions';
				$idfield = 'extension_id';
			} elseif(version_compare(JVERSION,'1.6.0','ge')) {

				// Joomla! 1.6 code here
				$table = JTable::getInstance('extension');
				$data['enabled'] = 1;
				$data['access']  = 1;
				$tableName = '#__extensions';
				$idfield = 'extension_id';
			} else {

				// Joomla! 1.5 code here
				$table = JTable::getInstance('plugin');
				$data['published'] = 1;
				$data['access']  = 0;
				$tableName = '#__plugins';
				$idfield = 'id';
			}

			$data['name'] = $name;
			$data['type'] = $type;
			$data['element'] = $element;
			$data['folder'] = $group;

			$data['client_id'] = 0;


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

			$params = '';

			$table = JTable::getInstance('module');
			if(version_compare(JVERSION,'1.7.0','ge')) {
				// Joomla! 1.7 code here
				// 			$table = JTable::getInstance('module');
				$data['position'] = 'position-4';
				$data['access']  = $access = 1;
			} elseif(version_compare(JVERSION,'1.6.0','ge')) {
				// Joomla! 1.6 code here
				// 			$table = JTable::getInstance('module');
				$data['position'] ='left';
				$data['access']  = $access = 1;
			} else {
				// Joomla! 1.5 code here
				$data['position'] = 'left';
				$data['access']  = $access = 0;
			}

			$src= JPATH_ROOT .DS. 'modules' .DS. $module ;
			if(version_compare(JVERSION,'1.6.0','ge')) {
				$data['manifest_cache'] = json_encode(JApplicationHelper::parseXMLInstallFile($src.DS.$module.'.xml'));
			}
			$data['title'] 	= $title;
			$data['ordering'] = $ordering;
			$data['published'] = 1;
			$data['module'] 	= $module;
			$data['params'] 	= $params;

			$data['client_id'] = $client_id = 0;

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
				$app -> enqueueMessage('VMInstaller table->bind throws error for '.$title.' '.$module.' '.$params);
			}

			if(!$table->check($data)){
				$app = JFactory::getApplication();
				$app -> enqueueMessage('VMInstaller table->check throws error for '.$title.' '.$module.' '.$params);

			}

			if(!$table->store($data)){
				$app = JFactory::getApplication();
				$app -> enqueueMessage('VMInstaller table->store throws error for for '.$title.' '.$module.' '.$params);
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

				//				$manifestCache = str_replace('"', '\'', $data["manifest_cache"]);
				$action = '';
				if(empty($ext_id)){
					$q = 'INSERT INTO `#__extensions` 	(`name`, `type`, `element`, `folder`, `client_id`, `enabled`, `access`, `protected`, `manifest_cache`, `params`, `ordering`) VALUES
																	( "'.$module.'" , "module", "'.$module.'", "", "0", "1","'.$access.'", "0", "'.$db->getEscaped($data["manifest_cache"]).'", "'.$params.'","'.$ordering.'");';
				} else {
					$q = 'UPDATE `#__extensions` SET 	`name`= "'.$module.'",
																	`type`= "module",
																	`element`= "'.$module.'",
																	`folder`= "",
																	`client_id`= "'.$client_id.'",
																	`enabled`= "1",
																	`access`= "'.$access.'",
																	`protected`= "0",
																	`manifest_cache` = "'.$db->getEscaped($data["manifest_cache"]).'",
																	`ordering`= "'.$ordering.'"

					WHERE `extension_id`= "'.$ext_id.'" ';
				}
				$db->setQuery($q);
				if(!$db->query()){
					$app = JFactory::getApplication();
					$app -> enqueueMessage( get_class( $this ).'::  '.$db->getErrorMsg());
				}

			}
		}

		private function addToRequired($table,$fieldname,$fieldvalue,$insert){
			if(empty($this->db)){
				$this->db = JFactory::getDBO();
			}

			$query = 'SELECT * FROM `'.$table.'` WHERE '.$fieldname.' = "'.$fieldvalue.'" ';
			$this->db->setQuery($query);
			$result = $this->db->loadResult();
			if(empty($result) || !$result ){
				$this->db->setQuery($insert);
				if(!$this->db->query()){
					$app = JFactory::getApplication();
					$app->enqueueMessage('Install addToRequired '.$this->db->getErrorMsg() );
				}
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
							if(!JFile::move($src .DS. $file,$dst .DS. $file)){
								$app = JFactory::getApplication();
								$app -> enqueueMessage('Couldnt move '.$src .DS. $file.' to '.$dst .DS. $file);
							}
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

		/**
		 * creates a folder with empty html file
		 *
		 * @author Max Milbers
		 *
		 */
		public function createIndexFolder($path){

			if(JFolder::create($path)) {
				JFile::copy(JPATH_ROOT.DS.'components'.DS.'index.html', $path .DS. 'index.html');
			}

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