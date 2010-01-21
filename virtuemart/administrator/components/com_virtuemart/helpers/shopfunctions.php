<?php
/**
 * General helper class
 *
 * This class provides some shop functions that are used throughout the VirtueMart shop.
 *
 * @package	VirtueMart
 * @subpackage Helpers
 * @author RolandD
 * @copyright Copyright (c) 2004-2008 Soeren Eberhardt-Biermann, 2009 VirtueMart Team. All rights reserved.
 */

class ShopFunctions {
	
	/**
	 * @var global database object
	 */
	private $_db = null;
	
	
	/**
	 * Contructor
	 */
	public function __construct(){
		
		$this->_db = JFactory::getDBO();
	}
	
	
	/**
	* Initialise the mailer object to start sending mails
	* @author RolandD
	* @todo Add vendor data
	*/
	public function loadMailer() {
		$mainframe = JFactory::getApplication();
		jimport('joomla.mail.helper');
		
		/* Start the mailer object */
		$mailer = JFactory::getMailer();
		$mailer->isHTML(true);
		/* This has to be replaced by the vendor data */
		//$mailer->From = $mainframe->getCfg('mailfrom');
		//$mailer->FromName = $mainframe->getCfg('sitename');
		//$mailer->AddReplyTo(array($mainframe->getCfg('mailfrom'), $mainframe->getCfg('sitename')));
		
		return $mailer;
	}
	
		/**
	 * Creates a Drop Down list of available Shopper Groups
	 *
	 * @author Max Milbers
	 * @param string $name
	 * @param int $shopper_group_id
	 * @param string $extra
	 * @return string
	 */
	public function renderShopperGroupList($shopper_group_id='0', $multiple) {
		
		$shopperModel = self::getModel('shoppergroup');
	
		$shoppergrps = $shopperModel->getShopperGroups(true);
		
		$emptyOption = new stdClass();
		$emptyOption->shopper_id = '';
		$emptyOption->shopper_group_name = '-- '.JText::_('Select').' --';

		array_unshift($shoppergrps, $emptyOption);
		if($multiple){
			$multiple = 'multiple="multiple"';
		}else{
			$multiple = '';
		}
		$listHTML = JHTML::_('Select.genericlist', $shoppergrps, 'shopper_group_id[]', $multiple, 'shopper_group_id', 'shopper_group_name', $shopper_group_id , 'shopper_group_id');
		return $listHTML;
	}
	
	/**
	* Render a simple country list
	* @author jseros
	* 
	* @param int $countryId Selected country id
	* @return string HTML containing the <select />
	*/
	public function renderCountryList( $countryId = 0 , $multiple=0){
		
		$countryModel = self::getModel('country');
				
		$countries = $countryModel->getCountries(false, true);
		
		$emptyOption = new stdClass();
		$emptyOption->country_id = '';
		$emptyOption->country_name = '-- '.JText::_('Select').' --';
		
		array_unshift($countries, $emptyOption);
		if($multiple){
			$multiple = 'multiple="multiple"';
		}else{
			$multiple = '';
		}
		$listHTML = JHTML::_('Select.genericlist', $countries, 'country_id[]', $multiple, 'country_id', 'country_name', $countryId , 'country_id');
		return $listHTML;
	}
	
	
	/**
	* Render a simple state list
	* @author jseros
	* 
	* @param int $stateID Selected state id
	* @param int $countryID Selected country id
	* @param string $dependentField Parent <select /> ID attribute
	* @return string HTML containing the <select />
	*/
	public function renderStateList( $stateId = 0, $countryId = 0, $dependentField = '', $multiple=0){
		
		$document = JFactory::getDocument();
		$stateModel = self::getModel('state');
		$states = array();

//		if( $countryId ){
//			if (!is_array($countryId)) $countryId = array($countryId);
//			foreach ($countryId as $country){
//				JError::raiseNotice(1,'die CountryId '.$country);
//				$states = array_merge($states, $stateModel->getFullStates( $country ));
//			}
//		}
		
		$emptyOption = new stdClass();
		$emptyOption->state_id = '';
		$emptyOption->state_name = '-- '.JText::_('Select').' --';
			
		array_unshift($states, $emptyOption);			
		if($multiple){
			$multiple = 'multiple="multiple"';
		}else{
			$multiple = '';
		}
		
		$attribs = array(
			'class' => 'dependent['. $dependentField .']'
		);
		
		$document->addScriptDeclaration('jQuery(function(){VM.countryStateList();});');
		
		$listHTML = JHTML::_('Select.genericlist', $states, 'state_id',  $attribs, 'state_id', 'state_name', $stateId, 'state_id');
		return $listHTML;
	}
	
	
	/**
	 * Gets the total number of product for category
	 *
     * @author jseros
     * @param int $categoryId Own category id
	 * @return int Total number of products
	 */
	public function countProductsByCategory( $categoryId = 0 ) 
	{
		$categoryModel = self::getModel('category');
        return $categoryModel->countProducts($categoryId);
    } 
	
	
	/**
	 * Print a select-list with enumerated categories
	 *
     * @author jseros
     * 	 
	 * @param boolean $onlyPublished Show only published categories?
	 * @param boolean $withParentId Keep in mind $parentId param?
	 * @param integer $parentId Show only its childs
	 * @param string $attribs HTML attributes for the list
	 * @return string <Select /> HTML
	 */
	public function getEnumeratedCategories( $onlyPublished = true, $withParentId = false, $parentId = 0, $name = '', $attribs = '', $key = '', $text = '', $selected = null ) 
	{
		$categoryModel = self::getModel('category');
		
		$categories = $categoryModel->getCategoryTree($onlyPublished, $withParentId, (int)$parentId);
		
		foreach($categories as $index => $cat){
			$cat->category_name = $cat->ordering .'. '. $cat->category_name;
			$categories[$index] = $cat;
		}
		
		return JHTML::_('Select.genericlist', $categories, $name, $attribs, $key, $text, $selected, $name);
    } 

	
	/**
	 * Creates structured option fields for all categories
	 *
	 * @todo: Connect to vendor data
	 * 
	 * @param int $categoryId A single category to be pre-selected
	 * @param int $cid Internally used for recursion
	 * @param int $level Internally used for recursion
	 * @param array $selectedCategories All category IDs that will be pre-selected
	 * @return string $category_tree HTML: Category tree list
	 */
	public function categoryListTree($categoryId = 0, $cid = 0, $level = 0, $selectedCategories = array(), $disabledFields=array()) {
		//global $perm, $hVendor;
		
		//$vendor_id = $hVendor->getLoggedVendor();
		static $categoryTree = '';
		$vendor_id = 1;

		$categoryModel = self::getModel('category');
		$level++;

		/*
		$q = "SELECT category_id, category_child_id, category_name 
			  FROM #__vm_category, #__vm_category_xref
			  WHERE #__vm_category_xref.category_parent_id = ". $cid."
			  AND #__vm_category.category_id=#__vm_category_xref.category_child_id ";
		
		if (!$perm->check("admin")) {
			//This shows for the admin everything, but for normal vendors only their own AND shared categories by Max Milbers
			$q .= "AND (#__vm_category.vendor_id = '$vendor_id' OR #__vm_category_xref.category_shared = 'Y') ";
			
		}
		$GLOBALS['vmLogger']->debug('$hVendor_id='.$vendor_id);
		
		
		$q .= "ORDER BY #__vm_category.ordering, #__vm_category.category_name ASC";
		$db->setQuery($q);   
		$records = $db->loadObjectList();*/
		
		$records = $categoryModel->getCategoryTree(true, true, $cid);
		
		foreach ($records as $key => $category) {
			
			$childId = $category->category_child_id;
			
			if ($childId != $cid) {
				
				$selected = ($childId == $categoryId) ? "selected=\"selected\"" : "";
				if( $selected == "" && in_array($childId, $selectedCategories)) {
					$selected = "selected=\"selected\"";
				}
				
				$disabled = '';
				if( in_array( $childId, $disabledFields )) {
					$disabled = 'disabled="disabled"';
				}
				
				
				if( $disabled != '' && stristr($_SERVER['HTTP_USER_AGENT'], 'msie') ) {
					//IE7 suffers from a bug, which makes disabled option fields selectable
				}
				else{
					$categoryTree .= '<option '. $selected .' '. $disabled .' value="'. $childId .'">'."\n";
					$categoryTree .= str_repeat(' - ', ($level-1) );
					

					$categoryTree .= $category->category_name .'</option>';
				}
			}
			
			self::categoryListTree($categoryId, $childId, $level, $selectedCategories, $disabledFields);
		}
		
		return $categoryTree;
	}
    
    
	/**
	* Return model instance. This is a DRY solution!
	* 
	* @author jseros
	* @access private
	* 
	* @param string $name Model name
	* @return JModel Instance any model
	*/
	public function getModel($name = ''){
		
		$name = strtolower($name);
		$className = ucfirst($name);
		
		//retrieving country model
		if( !class_exists('VirtueMartModel'.$className) ){
			
			$modelPath = JPATH_ADMINISTRATOR.DS."components".DS."com_virtuemart".DS."models".DS.$name.".php";
			
			if( file_exists($modelPath) ){
				require_once( $modelPath );
			}
			else{
				JError::raiseWarning( 0, 'Model '. $name .' not found.' );
				return false;
			}
		}
		
		$className = 'VirtueMartModel'.$className;
		//instancing the object
		$model = new $className();
		return $model;
	}
	
	/**
	* This function allows you to get an object list of user fields
	*
	* @param string $section The section the fields belong to (e.g. 'registration' or 'account')
	* @param boolean $required_only
	* @param mixed $sys When left empty, doesn't filter by sys
	* @return array
	*/
	public function getUserFields( $section = 'registration', $required_only=false, $sys = '', $exclude_delimiters=false, $exclude_skipfields=false ) {
		$db = JFactory::getDBO();
		$fields = array();
		$skipfields = self::getSkipFields();
		
		$q = "SELECT f.* FROM `#__vm_userfield` f"
			. "\n WHERE f.published=1";
		if( $section != 'bank' && $section != '') {
			$q .= "\n AND f.`$section`=1";
		}
		elseif( $section == 'bank' ) {
			$q .= "\n AND f.name LIKE '%bank%'";
		}
		if( $exclude_delimiters ) {
			$q .= "\n AND f.type != 'delimiter' ";
			}
		if( $required_only ) {
			$q .= "\n AND f.required=1";
		}
		if( $sys !== '') {
			if( $sys == '1') { $q .= "\n AND f.sys=1"; }
			elseif( $sys == '0') { $q .= "\n AND f.sys=0"; }
		}
		if ($exclude_skipfields ) {
			$q .= "\n AND FIND_IN_SET( f.name, '".implode(',', $skipfields)."') = 0 ";
		}
		$q .= "\n ORDER BY f.ordering";
		
		$db->setQuery($q);
		$fields['details'] = $db->loadObjectList();
		
		/* Collect extra field information */
		foreach ($fields['details'] as $key => $field) {
			if ($field->required == 1) $fields['required_fields'][$field->name] = $field->type;
			/* Create a list of all fields */
			$fields['allfields'][$field->name] = $field->title;
			/* Get the details for several types */
			switch ($field->type) {
				case 'multicheckbox':
				case 'select':
				case 'multiselect':
				case 'radio':
					$q = "SELECT fieldtitle,fieldvalue 
						FROM #__vm_userfield_values
						WHERE fieldid = ".$field->fieldid."
						ORDER BY ordering";
					$db->setQuery($q);
					$fields['details'][$key]->values = $db->loadObjectList();
				break;
			}
			
		}
		foreach ($skipfields as $skip ) {		
			unset($fields['required_fields'][$skip]); 
		}
		return $fields;
	}
	
	/**
	* Returns an array of fieldnames which are NOT used for VirtueMart tables
	*
	* @return array Field names which are to be skipped by VirtueMart db functions
	*/
	public function getSkipFields() {
		return array( 'username', 'password', 'password2', 'agreed' );
	}
	
	/**
	* Gets the user details, it joins 
	* #__users ju, #__{vm}_user_info u, #__{vm}_country c and #__{vm}_state s
	* @author Max Milbers
	* @author RolandD
	* @param int $user_id user_id of the user same ID for joomla and VM
	* @param array $fields Columns to get
	* @param String $orderby should be ordered by $field
	* @param String $and this is for an additional AND condition
	*/
	public function getUserDetails($user_id=0, $fields=array(), $orderby='', $filter='') {
		$db = JFactory::getDBO();

		/* Set the selectors */		
		if (empty($fields)) $selector = '*';
		else $selector = implode(",", $fields);
		
		$q = "SELECT ".$selector." 
			FROM #__vm_user_info u
			LEFT JOIN #__users ju 
			ON ju.id = u.user_id
			LEFT JOIN #__vm_country c 
			ON c.country_id = u.country_id 
			LEFT JOIN jos_vm_state s 
			ON s.state_id = u.state_id ";
			
		if (!empty($user_id)) $q .= "WHERE u.user_id = ".$user_id;
		if (!empty($filter)) $q .= $filter." ";
		if (!empty($orderby)) $q .= "ORDER BY ".$orderby." ";
		
//		$GLOBALS['vmLogger']->info('get_user_details query '.$q);				
		$db->setQuery($q);
		return $db->loadObject();
	}
	
	/**
	 * Lists titles for people
	 *
	 * @param string $t The selected title value
	 * @param string $extra More attributes when needed
	 */
	public function listUserTitle($t, $extra="") {
		$options = array();
		$options[] = JHTML::_('select.option', JText::_('VM_REGISTRATION_FORM_MR'), JText::_('VM_REGISTRATION_FORM_MR'));
		$options[] = JHTML::_('select.option', JText::_('VM_REGISTRATION_FORM_MRS'), JText::_('VM_REGISTRATION_FORM_MRS'));
		$options[] = JHTML::_('select.option', JText::_('VM_REGISTRATION_FORM_DR'), JText::_('VM_REGISTRATION_FORM_DR'));
		$options[] = JHTML::_('select.option', JText::_('VM_REGISTRATION_FORM_PROF'), JText::_('VM_REGISTRATION_FORM_PROF'));
		
		return JHTML::_('select.genericlist', $options, 'title', $extra, 'value', 'text', $t);
	}
	
	/**
	 * Creates an drop-down list with numbers from 1 to 31 or of the selected range
	 *
	 * @param string $list_name The name of the select element
	 * @param string $selected_item The pre-selected value
	 */
	function listDays($list_name,$selected=false, $start=null, $end=null) {
		$options = array();
		if (!$selected) $selected = date('d');
		$start = $start ? $start : 1;
		$end = $end ? $end : $start + 30;
		$options[] = JHTML::_('select.option', 0, JText::_('DAY'));
		for ($i=$start; $i<=$end; $i++) {
			$options[] = JHTML::_('select.option', $i, $i);
		}
		return JHTML::_('select.genericlist', $options, $list_name, '', 'value', 'text', $selected);
	}
	/**
	 * Creates a Drop-Down List for the 12 months in a year
	 *
	 * @param string $list_name The name for the select element
	 * @param string $selected_item The pre-selected value
	 * 
	 */
	function listMonths($list_name, $selected=false) {
		$options = array();
		if (!$selected) $selected = date('m');
		
		$options[] = JHTML::_('select.option', 0, JText::_('MONTH'));
		$options[] = JHTML::_('select.option', "01", JText::_('JAN'));
		$options[] = JHTML::_('select.option', "02", JText::_('FEB'));
		$options[] = JHTML::_('select.option', "03", JText::_('MAR'));
		$options[] = JHTML::_('select.option', "04", JText::_('APR'));
		$options[] = JHTML::_('select.option', "05", JText::_('MAY'));
		$options[] = JHTML::_('select.option', "06", JText::_('JUN'));
		$options[] = JHTML::_('select.option', "07", JText::_('JUL'));
		$options[] = JHTML::_('select.option', "08", JText::_('AUG'));
		$options[] = JHTML::_('select.option', "09", JText::_('SEP'));
		$options[] = JHTML::_('select.option', "10", JText::_('OCT'));
		$options[] = JHTML::_('select.option', "11", JText::_('NOV'));
		$options[] = JHTML::_('select.option', "12", JText::_('DEC'));
		return JHTML::_('select.genericlist', $options, $list_name, '', 'value', 'text', $selected);
	}

	/**
	 * Creates an drop-down list with years of the selected range or of the next 7 years
	 *
	 * @param string $list_name The name of the select element
	 * @param string $selected_item The pre-selected value
	 */
	function listYears($list_name, $selected=false, $start=null, $end=null) {
		$options = array();
		if (!$selected) $selected = date('Y');
		$start = $start ? $start : date('Y');
		$end = $end ? $end : $start + 7;
		$options[] = JHTML::_('select.option', 0, JText::_('YEAR'));
		for ($i=$start; $i<=$end; $i++) {
			$options[] = JHTML::_('select.option', $i, $i);
		}
		return JHTML::_('select.genericlist', $options, $list_name, '', 'value', 'text', $selected);
	}
	
	function checkboxListArr( $arr, $tag_name, $tag_attribs,  $key='value', $text='text',$selected=null, $required=0  ) {
		reset( $arr );
		$html = array();
		$n=count( $arr );
		for ($i=0; $i < $n; $i++ ) {
				$k = $arr[$i]->$key;
				$t = $arr[$i]->$text;
				$id = isset($arr[$i]->id) ? $arr[$i]->id : null;

				$extra = '';
				$extra .= $id ? " id=\"" . $arr[$i]->id . "\"" : '';
				if (is_array( $selected )) {
						foreach ($selected as $obj) {
								$k2 = $obj->$key;
								if ($k == $k2) {
										$extra .= " checked=\"checked\"";
										break;
								}
						}
				} else {
						$extra .= ($k == $selected ? " checked=\"checked\"" : '');
				}
				$tmp = "<input type=\"checkbox\" name=\"$tag_name\" id=\"".str_replace('[]', '', $tag_name)."_field$i\" value=\"".$k."\"$extra $tag_attribs />" . "<label for=\"".str_replace('[]', '', $tag_name)."_field$i\">";
				$tmp .= JText::_($t);
				$tmp .= "</label>";
				$html[] = $tmp;
		}
		return $html;
	}
        
	function checkboxList( $arr, $tag_name, $tag_attribs,  $key='value', $text='text',$selected=null, $required=0 ) {
			return "\n\t".implode("\n\t", vmCommonHTML::checkboxListArr( $arr, $tag_name, $tag_attribs,  $key, $text,$selected, $required ))."\n";
	}
	function checkboxListTable( $arr, $tag_name, $tag_attribs,  $key='value', $text='text',$selected=null, $cols=0, $rows=0, $size=0, $required=0 ) {
			$cellsHtml = self::checkboxListArr( $arr, $tag_name, $tag_attribs,  $key, $text,$selected, $required );
			return self::list2Table( $cellsHtml, $cols, $rows, $size );
	}
	// private methods:
	private function list2Table( $cellsHtml, $cols, $rows, $size ) {
		$cells = count($cellsHtml);
		if ($size == 0) {
				$localstyle = ""; //" style='width:100%'";
		} else {
				$size = (($size-($size % 3)) / 3  ) * 2; // int div  3 * 2 width/heigh ratio
				$localstyle = " style='width:".$size."em;'";
		}
		$return="";
		if ($cells) {
				if ($rows) {
						$return = "\n\t<table class='vmMulti'".$localstyle.">";
						$cols = ($cells-($cells % $rows)) / $rows;      // int div
						if ($cells % $rows) $cols++;
						$lineIdx=0;
						for ($lineIdx=0 ; $lineIdx < min($rows, $cells) ; $lineIdx++) {
								$return .= "\n\t\t<tr>";
								for ($i=$lineIdx ; $i < $cells; $i += $rows) {
										$return .= "<td>".$cellsHtml[$i]."</td>";
								}
								$return .= "</tr>\n";
						}
						$return .= "\t</table>\n";
				} else if ($cols) {
						$return = "\n\t<table class='vmMulti'".$localstyle.">";
						$idx=0;
						while ($cells) {
								$return .= "\n\t\t<tr>";
								for ($i=0, $n=min($cells,$cols); $i < $n; $i++, $cells-- ) {
										$return .= "<td>".$cellsHtml[$idx++]."</td>";
								}
								$return .= "</tr>\n";
						}
						$return .= "\t</table>\n";
				} else {
						$return = "\n\t".implode("\n\t ", $cellsHtml)."\n";
				}
		}
		return $return;
	}
	
	/**
	 * Prints a JS function to validate all fields
	 * given in the array $required_fields
	 * Does only test if non-empty (or if no options are selected)
	 * Includes a check for a valid email-address
	 *
	 * @param array $required_fields The list of form elements that are to be validated
	 * @param string $formname The name for the form element
	 * @param string $div_id_postfix The ID postfix to identify the label for the field
	 */
	function printJsFormValidation( $required_fields, $allfields, $formname = 'adminForm', $functioname='submitregistration', $div_id_postfix = '_div' ) {
        $field_list = implode( "','", array_keys( $required_fields ) );
        $field_list = str_replace( "'email',", '', $field_list );
        $field_list = str_replace( "'username',", '', $field_list );
        $field_list = str_replace( "'password',", '', $field_list );
        $field_list = str_replace( "'password2',", '', $field_list );
        
        echo '
            <script language="javascript" type="text/javascript">//<![CDATA[
            function '.$functioname.'() {
                var form = document.'.$formname.';
                var r = new RegExp("[\<|\>|\"|\'|\%|\;|\(|\)|\&|\+|\-]", "i");
                var isvalid = true;
                var required_fields = new Array(\''. $field_list.'\');
            	for (var i=0; i < required_fields.length; i++) {
                    formelement = eval( \'form.\' + required_fields[i] );
                    ';
       	echo "
                    if( !formelement ) { 
                            formelement = document.getElementById( required_fields[i]+'_field0' );
                            var loopIds = true;
                    }
                    if( !formelement ) { continue; }
                    if (formelement.type == 'radio' || formelement.type == 'checkbox') {
                        if( loopIds ) {
                                var rOptions = new Array();
                                for(var j=0; j<30; j++ ) {
                                        rOptions[j] = document.getElementById( required_fields[i] + '_field' + j );
                                        if( !rOptions[j] ) { break; }
                                }
                        } else {
                                var rOptions = form[formelement.getAttribute('name')];
                        }
                        var rChecked = 0;
                        if(rOptions.length > 1) {
                                for (var r=0; r < rOptions.length; r++) {
                                        if( !rOptions[r] ) { continue; }
                                        if (rOptions[r].checked) {      rChecked=1; }
                                }
                        } else {
                                if (formelement.checked) {
                                        rChecked=1;
                                }
                        }
                        if(rChecked==0) {
                        	document.getElementById(required_fields[i]+'$div_id_postfix').className += ' missing';
                            isvalid = false;
                    	}
                    	else if (document.getElementById(required_fields[i]+'$div_id_postfix').className == 'formLabel missing') {
                            document.getElementById(required_fields[i]+'$div_id_postfix').className = 'formLabel';
                        }                               
                    }
                    else if( formelement.options ) {
                        if(formelement.selectedIndex.value == '') {
                                document.getElementById(required_fields[i]+'$div_id_postfix').className += ' missing';
                                isvalid = false;
                        } 
                        else if (document.getElementById(required_fields[i]+'$div_id_postfix').className == 'formLabel missing') {
                                document.getElementById(required_fields[i]+'$div_id_postfix').className = 'formLabel';
                        }
                    }
                    else {
                        if (formelement.value == '') {
                            document.getElementById(required_fields[i]+'$div_id_postfix').className += ' missing';
                            isvalid = false;
                        }
                        else if (document.getElementById(required_fields[i]+'$div_id_postfix').className == 'formLabel missing') {
                            document.getElementById(required_fields[i]+'$div_id_postfix').className = 'formLabel';
	                    }
    	        	}
	            }
            ";
       	$optional_check = '';
		if (VmConfig::get('vm_registration_type') == 'OPTIONAL_REGISTRATION') {
			$optional_check = '&& form.register_account.checked';
		}
	    // We have skipped email in the first loop above!
	    // Now let's handle email address validation
	    if( isset( $required_fields['email'] )) {
	    
	   		echo '
			if( !(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,4})+$/.test(form.email.value))) {
				alert( \''. str_replace("'","\\'",JText::_('REGWARN_MAIL',false)) .'\');
				return false;
			}';

		}
		if( isset( $required_fields['username'] )) {
		
			echo '
			if ((r.exec(form.username.value) || form.username.value.length < 3)'.$optional_check.') {
				alert( "'. sprintf(JText::_('VALID_AZ09',false), JText::_('USERNAME',false), 2) .'" );
				return false;
            }';
        }
        if( isset($required_fields['password']) ) {
			if( JRequest::getVar('view') == 'checkout.index') {
                echo '
                if (form.password.value.length < 6 '.$optional_check.') {
                    alert( "'.JText::_('REGWARN_PASS',false) .'" );
					return false;
                } else if (form.password2.value == ""'.$optional_check.') {
                    alert( "'. JText::_('REGWARN_VPASS1',false) .'" );
                    return false;
                } else if (r.exec(form.password.value)'.$optional_check.') {
                    alert( "'. sprintf( JText::_('VALID_AZ09',false), JText::_('PASSWORD',false), 6 ) .'" );
                    return false;
                }';
        	}
            echo '
                if ((form.password.value != "") && (form.password.value != form.password2.value)'.$optional_check.'){
                    alert( "'. JText::_('REGWARN_VPASS2',false) .'" );
                    return false;
                }';
        }
        if( isset( $required_fields['agreed'] )) {
			echo '
            if (!form.agreed.checked) {
				alert( "'. JText::_('VM_AGREE_TO_TOS',false) .'" );
				return false;
			}';
		}
		foreach( $allfields as $field ) {		
			if(  $field->type == 'euvatid' ) {
				$euvatid = $field->name;
				break;
			}			
		}
		if (!empty($euvatid) ) {
			$document = JFactory::getDocument();
			$document->addScript(JURI::root().'components/com_virtuemart/js/euvat_check.js');
			echo '
			if( form.'.$euvatid.'.value != \'\' ) {
				if( !isValidVATID( form.'.$euvatid.'.value )) {
					alert( \''.addslashes(JText::_('VALID_EUVATID',false)).'\' );
					return false;
				}
			}';
		}
		// Finish the validation function
		echo '
			if( !isvalid) {
				alert("'.addslashes( JText::_('CONTACT_FORM_NC',false) ) .'" );
			}
			return isvalid;
		}
	            //]]>
	    </script>';
	}
	
	/**
	* Validates an EU-vat number
	* @author RolandD
	* @param string $euvat EU-vat number to validate
	* @return boolean The result of the validation
	*/
	public function validateEUVat($euvat) {
		require_once(JPATH_SITE.DS.'administrator'.DS.'components'.DS.'com_virtuemart'.DS.'helpers'.DS.'euvatcheck.php');
		$vatcheck = new VmEUVatCheck($euvat);
		return $vatcheck->validvatid;
	}
	
	/**
	* Validates an email address by using regular expressions
	* Does not resolve the domain name!
	*
	* Joomla has it's own e-mail checker but is no good JMailHelper::isEmailAddress()
	* maybe in the future it will be better
	*
	* @param string $email
	* @return boolean The result of the validation
	*/
	function validateEmail($email) {
		$valid = preg_match( '/^[\w\.\-]+@\w+[\w\.\-]*?\.\w{1,4}$/', $email );
		return $valid;
	}
	
	/**
	 * This is a very time consuming function.
	 * It fetches the category flypage for a specific product id
	 *
	 * @todo Check how the function can be optimized
	 *
	 * @param int $product_id
	 * @return string The flypage value for that product
	 */
	function getFlypage($product_id) {
		$session = JFactory::getSession();
		$product_sess = $session->get("product_sess", null);
		if (empty($product_sess[$product_id]['flypage'])) {
			$db = JFactory::getDBO();
			$productParentId = (int)$product_id;
			do {
				$q = "SELECT `#__vm_product`.`product_parent_id` AS product_parent_id, `#__vm_category`.`category_flypage`
						FROM `#__vm_product`
						LEFT JOIN `#__vm_product_category_xref` 
						ON `#__vm_product_category_xref`.`product_id` = `#__vm_product`.`product_id`
						LEFT JOIN `#__vm_category` 
						ON `#__vm_product_category_xref`.`category_id` = `#__vm_category`.`category_id`
						WHERE `#__vm_product`.`product_id`=".$productParentId;
				$db->setQuery($q);
				$product = $db->loadObject();
				$productParentId = $product->product_parent_id;
			}
			while ($product->product_parent_id && !$product->category_flypage);

			if ($product->category_flypage) {
				$product_sess[$product_id]['flypage'] = $product->category_flypage;
			} 
			else {
				$product_sess[$product_id]['flypage'] = VmConfig::get('flypage');
			}
			$session->set('product_sess', $product_sess);
		}
		return $product_sess[$product_id]['flypage'];
	}
	
	/**
	 * Creates the Quantity Input Boxes/Radio Buttons/Lists for Products
	 *
	 * @param object $product The product details
	 * @param string $child
	 * @param string $use_parent
	 * @return string
	 */
	function getQuantityBoxOptions($product, $child = false, $use_parent = 'N') {
		$session = JFactory::getSession();
		$cart = $session->get("cart", null);
		
		if ($child == 'Y') {
			//We have a child list so get the current quantity;
			$quantity = 0 ;
			for ($i = 0 ; $i < $cart["idx"] ; $i ++ ) {
				if ($cart[$i]["product_id"] == $product->product_id) {
					$quantity = $cart[$i]["quantity"];
				}
			}
		} 
		else {
			$quantity = JRequest::getInt('quantity', 1);
		}
		
		// Detremine which style to use
		if ($use_parent == 'Y' && $product->parent_product_id !=0) $id = $product->parent_product_id;
		else $id = $product->product_id ;
		
		//Get style to use
		extract($product->quantity_options);
		
		//Start output of quantity
		//Check for incompatabilities and reset to normal
		$display_type = null;
		if (VmConfig::get('check_stock') == '1' && ! $product->product_in_stock ) {
			$display_type = 'hide' ;
		}
		if (empty($display_type) 
			|| ($display_type == "hide" && $child == 'Y') 
			|| ($display_type == "radio" && $child == 'YM') 
			|| ($display_type == "radio" && !$child) ) {
				$display_type = "none" ;
		}
		
		?><pre><?php
		print_r($quantity_options);
		?></pre><?php
		exit;
		
		$tpl->set( 'prod_id', $prod_id ) ;
		$tpl->set( 'quantity', $quantity ) ;
		$tpl->set( 'display_type', $display_type ) ;
		$tpl->set( 'child', $child ) ;
		$tpl->set( 'quantity_options', $quantity_options ) ;
		
		//Determine if label to be used
		$html = $tpl->fetch( 'product_details/includes/quantity_box_general.tpl.php' ) ;
		
		return $html ;
	
	}
}
?>