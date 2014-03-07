<?php
/**
 *
 * Contains shop functions for the front-end
 *
 * @package    VirtueMart
 * @subpackage Helpers
 *
 * @author RolandD
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
defined( '_JEXEC' ) or die('Restricted access');


class shopFunctionsF {

	/**
	 *
	 */

	static public function getLoginForm ($cart = FALSE, $order = FALSE, $url = 0) {

		$body = '';
		$show = TRUE;

		if($cart) {
			$show = VmConfig::get( 'oncheckout_show_register', 1 );
		}
		if($show == 1) {

			if(!class_exists( 'VirtuemartViewUser' )) require(JPATH_VM_SITE.DS.'views'.DS.'user'.DS.'view.html.php');
			$view = new VirtuemartViewUser();
			$view->setLayout( 'login' );
			$view->assignRef( 'show', $show );

			$view->assignRef( 'order', $order );
			$view->assignRef( 'from_cart', $cart );
			$view->assignRef( 'url', $url );
			ob_start();
			$view->display();
			$body = ob_get_contents();
			ob_end_clean();
		}

		return $body;
	}

	/**
	 * @author Max Milbers
	 */
	static public function getLastVisitedCategoryId ($default = 0) {

		$session = JFactory::getSession();
		return $session->get( 'vmlastvisitedcategoryid', $default, 'vm' );

	}

	/**
	 * @author Max Milbers
	 */
	static public function setLastVisitedCategoryId ($categoryId) {

		$session = JFactory::getSession();
		return $session->set( 'vmlastvisitedcategoryid', (int)$categoryId, 'vm' );

	}

	/**
	 * @author Max Milbers
	 */
	static public function getLastVisitedManuId () {

		$session = JFactory::getSession();
		return $session->get( 'vmlastvisitedmanuid', 0, 'vm' );

	}

	/**
	 * @author Max Milbers
	 */
	static public function setLastVisitedManuId ($manuId) {

		$session = JFactory::getSession();
		return $session->set( 'vmlastvisitedmanuid', (int)$manuId, 'vm' );

	}

	static public function getAddToCartButton ($orderable) {

		if($orderable) {
			$html = '<input type="submit" name="addtocart" class="addtocart-button" rel="nofollow" value="'.vmText::_( 'COM_VIRTUEMART_CART_ADD_TO' ).'" title="'.vmText::_( 'COM_VIRTUEMART_CART_ADD_TO' ).'" />';
		} else {
			$html = '<input name="addtocart" class="addtocart-button-disabled" value="'.vmText::_( 'COM_VIRTUEMART_ADDTOCART_CHOOSE_VARIANT' ).'" title="'.vmText::_( 'COM_VIRTUEMART_ADDTOCART_CHOOSE_VARIANT' ).'" />';
		}
		return $html;
	}

	/**
	 * Render a simple country list
	 *
	 * @author jseros, Max Milbers, Valérie Isaksen
	 *
	 * @param int $countryId Selected country id
	 * @param boolean $multiple True if multiple selections are allowed (default: false)
	 * @param mixed $_attrib string or array with additional attributes,
	 * e.g. 'onchange=somefunction()' or array('onchange'=>'somefunction()')
	 * @param string $_prefix Optional prefix for the formtag name attribute
	 * @return string HTML containing the <select />
	 */
	static public function renderCountryList ($countryId = 0, $multiple = FALSE, $_attrib = array(), $_prefix = '', $required = 0) {

		$countryModel = VmModel::getModel ('country');
		$countries = $countryModel->getCountries (TRUE, TRUE, FALSE);
		$attrs = array();
		$name = 'country_name';
		$id = 'virtuemart_country_id';
		$idA = $_prefix . 'virtuemart_country_id';
		$attrs['class'] = 'virtuemart_country_id';
		$attrs['class'] = 'vm-chzn-select';
		// Load helpers and  languages files
		if (!class_exists( 'VmConfig' )) require(JPATH_COMPONENT_ADMINISTRATOR .'/helpers/config.php');
		VmConfig::loadConfig();
		VmConfig::loadJLang('com_virtuemart_countries');
		vmJsApi::chosenDropDowns();

		$sorted_countries = array();
		$lang = JFactory::getLanguage();
		$prefix="COM_VIRTUEMART_COUNTRY_";
		foreach ($countries as  $country) {
			$country_string = $lang->hasKey($prefix.$country->country_3_code) ?   vmText::_($prefix.$country->country_3_code)  : $country->country_name;
			$sorted_countries[$country->virtuemart_country_id] = $country_string;
		}

		asort($sorted_countries);

		$countries_list=array();
		$i=0;
		foreach ($sorted_countries as  $key=>$value) {
			$countries_list[$i] = new stdClass();
			$countries_list[$i]->$id = $key;
			$countries_list[$i]->$name = $value;
			$i++;
		}

		if ($required != 0) {
			$attrs['class'] .= ' required';
		}

		if ($multiple) {
			$attrs['multiple'] = 'multiple';
			$idA .= '[]';
		} else {
			$emptyOption = JHtml::_ ('select.option', '', vmText::_ ('COM_VIRTUEMART_LIST_EMPTY_OPTION'), $id, $name);
			array_unshift ($countries_list, $emptyOption);
		}

		if (is_array ($_attrib)) {
			$attrs = array_merge ($attrs, $_attrib);
		} else {
			$_a = explode ('=', $_attrib, 2);
			$attrs[$_a[0]] = $_a[1];
		}

		//Todo remove inline style
		//$attrs['style'] = 'width:270px;';
		return JHtml::_ ('select.genericlist', $countries_list, $idA, $attrs, $id, $name, $countryId);
	}

	/**
	 * Render a simple state list
	 *
	 * @author Max Milbers, Valerie Isaksen
	 *
	 * @param int $stateID Selected state id
	 * @param int $countryID Selected country id
	 * @param string $dependentField Parent <select /> ID attribute
	 * @param string $_prefix Optional prefix for the formtag name attribute
	 * @return string HTML containing the <select />
	 */
	static public function renderStateList ($stateId = '0', $_prefix = '', $multiple = FALSE, $required = 0,$attribs=array()) {

		if (is_array ($stateId)) {
			$stateId = implode (",", $stateId);
		}

		vmJsApi::JcountryStateList ($stateId,$_prefix);

		$attrs['class'] = 'vm-chzn-select';
		if ($multiple) {
			$attrs['name'] = $_prefix . 'virtuemart_state_id[]';
			$attrs['multiple'] = 'multiple';
		} else {
			$attrs['name'] = $_prefix . 'virtuemart_state_id';
		}

		/*if ($required != 0) {
			$attrs['class'] .= ' required';
		}*/

		if (is_array ($attribs)) {
			$attrs = array_merge ($attrs, $attribs);
		}

		$attrString= JArrayHelper::toString($attrs);
		$listHTML = '<select  id="'.$_prefix.'virtuemart_state_id" ' . $attrString . '>
						<option value="">' . JText::_ ('COM_VIRTUEMART_LIST_EMPTY_OPTION') . '</option>
						</select>';

		return $listHTML;
	}

	/**
	 *
	 * @author Max Milbers
	 */
	static public function addProductToRecent ($productId) {

		$session = JFactory::getSession();
		$products_ids = $session->get( 'vmlastvisitedproductids', array(), 'vm' );
		$key = array_search( $productId, $products_ids );
		if($key !== FALSE) {
			unset($products_ids[$key]);
		}
		array_unshift( $products_ids, $productId );
		$products_ids = array_unique( $products_ids );

		$recent_products_rows = VmConfig::get('recent_products_rows', 1);
		$products_per_row = VmConfig::get('homepage_products_per_row',3);
		$maxSize = $products_per_row * $recent_products_rows;
		if(count( $products_ids )>$maxSize) {
			array_splice( $products_ids, $maxSize );
		}

		return $session->set( 'vmlastvisitedproductids', $products_ids, 'vm' );
	}

	/**
	 * Gives ids the recently by the shopper visited products
	 *
	 * @author Max Milbers
	 */
	public function getRecentProductIds () {

		$session = JFactory::getSession();
		return $session->get( 'vmlastvisitedproductids', array(), 'vm' );
	}


	/**
	 * Prepares a view for rendering email, then renders and sends
	 *
	 * @param object $controller
	 * @param string $viewName View which will render the email
	 * @param string $recipient shopper@whatever.com
	 * @param array $vars variables to assign to the view
	 */
	//TODO this is quirk, why it is using here $noVendorMail, but everywhere else it is using $doVendor => this make logic trouble
	static public function renderMail ($viewName, $recipient, $vars = array(), $controllerName = NULL, $noVendorMail = FALSE,$useDefault=true) {

		if(!class_exists( 'VirtueMartControllerVirtuemart' )) require(JPATH_VM_SITE.DS.'controllers'.DS.'virtuemart.php');
// 		$format = (VmConfig::get('order_html_email',1)) ? 'html' : 'raw';

		$controller = new VirtueMartControllerVirtuemart();
		//Todo, do we need that? refering to http://forum.virtuemart.net/index.php?topic=96318.msg317277#msg317277
		$controller->addViewPath( JPATH_VM_SITE.DS.'views' );

		$view = $controller->getView( $viewName, 'html' );
		if(!$controllerName) $controllerName = $viewName;
		$controllerClassName = 'VirtueMartController'.ucfirst( $controllerName );
		if(!class_exists( $controllerClassName )) require(JPATH_VM_SITE.DS.'controllers'.DS.$controllerName.'.php');

		//Todo, do we need that? refering to http://forum.virtuemart.net/index.php?topic=96318.msg317277#msg317277
		$view->addTemplatePath( JPATH_VM_SITE.'/views/'.$viewName.'/tmpl' );

		$vmtemplate = VmConfig::get( 'vmtemplate', 'default' );
		$db = JFactory::getDbo();
		if(!empty($template) and is_numeric($vmtemplate)) {
			$query = 'SELECT `template`,`params` FROM `#__template_styles` WHERE `id`="'.$vmtemplate.'" ';
			$db->setQuery($query);
			$res = $db->loadAssoc();
			if($res){
				$registry = new JRegistry;
				$registry->loadString($res['params']);
				$template = $res['template'];
			}
		} else {
			$q = 'SELECT `template` FROM `#__template_styles` WHERE `client_id`="0" AND `home`="1"';
			$db->setQuery( $q );
			$template = $db->loadResult();
		}

		if($template) {
			$view->addTemplatePath( JPATH_ROOT.DS.'templates'.DS.$template.DS.'html'.DS.'com_virtuemart'.DS.$viewName );
		} else {
			if(isset($db)) {
				$err = $db->getErrorMsg();
			} else {
				$err = 'The selected vmtemplate is not existing';
			}
			if($err) vmError( 'renderMail get Template failed: '.$err );
		}

		foreach( $vars as $key => $val ) {
			$view->$key = $val;
		}

		$user = FALSE;
		if(isset($vars['orderDetails'])){

			//If the JRequest is there, the update is done by the order list view BE and so the checkbox does override the defaults.
			//$name = 'orders['.$order['details']['BT']->virtuemart_order_id.'][customer_notified]';
			//$customer_notified = VmRequest::getVar($name,-1);
			if(!$useDefault and isset($vars['newOrderData']['customer_notified']) and $vars['newOrderData']['customer_notified']==1 ){
				$user = self::sendVmMail( $view, $recipient, $noVendorMail );
				vmdebug('renderMail by overwrite');
			} else {
				$orderstatusForShopperEmail = VmConfig::get('email_os_s',array('U','C','S','R','X'));
				if(!is_array($orderstatusForShopperEmail)) $orderstatusForShopperEmail = array($orderstatusForShopperEmail);
				if ( in_array((string) $vars['orderDetails']['details']['BT']->order_status,$orderstatusForShopperEmail) ){
					$user = self::sendVmMail( $view, $recipient, $noVendorMail );
					vmdebug('renderMail by default');
				} else{
					$user = -1;
				}
			}

		} else {
			$user = self::sendVmMail( $view, $recipient, $noVendorMail );
		}

		if(isset($view->doVendor) && !$noVendorMail) {
			if(isset($vars['orderDetails'])){
				$order = $vars['orderDetails'];
				$orderstatusForVendorEmail = VmConfig::get('email_os_v',array('U','C','R','X'));
				if(!is_array($orderstatusForVendorEmail)) $orderstatusForVendorEmail = array($orderstatusForVendorEmail);
				if ( in_array((string)$order['details']['BT']->order_status,$orderstatusForVendorEmail)){
					self::sendVmMail( $view, $view->vendorEmail, TRUE );
				}else{
					$user = -1;
				}
			} else {
				self::sendVmMail( $view, $view->vendorEmail, TRUE );
			}

		}

		return $user;

	}


	/**
	 * With this function you can use a view to sent it by email.
	 * Just use a task in a controller
	 *
	 * @param string $view for example user, cart
	 * @param string $recipient shopper@whatever.com
	 * @param bool $vendor true for notifying vendor of user action (e.g. registration)
	 */

	private static function sendVmMail (&$view, $recipient, $noVendorMail = FALSE) {

		VmConfig::ensureMemoryLimit(96);
		$jlang = JFactory::getLanguage();
		if(VmConfig::get( 'enableEnglish', 1 )) {
			$jlang->load( 'com_virtuemart', JPATH_SITE, 'en-GB', TRUE );
		}
		$jlang->load( 'com_virtuemart', JPATH_SITE, $jlang->getDefault(), TRUE );
		$jlang->load( 'com_virtuemart', JPATH_SITE, NULL, TRUE );

		if(!empty($view->orderDetails['details']['BT']->order_language)) {
			$jlang->load( 'com_virtuemart', JPATH_SITE, $view->orderDetails['details']['BT']->order_language, true );
			$jlang->load( 'com_virtuemart_shoppers', JPATH_SITE, $view->orderDetails['details']['BT']->order_language, true );
			$jlang->load( 'com_virtuemart_orders', JPATH_SITE, $view->orderDetails['details']['BT']->order_language, true );
		} else {
			VmConfig::loadJLang('com_virtuemart_shoppers',TRUE);
			VmConfig::loadJLang('com_virtuemart_orders',TRUE);
		}

		ob_start();

		$view->renderMailLayout( $noVendorMail, $recipient );
		$body = ob_get_contents();
		ob_end_clean();

		$subject = (isset($view->subject)) ? $view->subject : vmText::_( 'COM_VIRTUEMART_DEFAULT_MESSAGE_SUBJECT' );
		$mailer = JFactory::getMailer();
		$mailer->addRecipient( $recipient );
		$mailer->setSubject(  html_entity_decode( $subject) );
		$mailer->isHTML( VmConfig::get( 'order_mail_html', TRUE ) );
		$mailer->setBody( $body );

		if(!$noVendorMail) {
			$replyto[0] = $view->vendorEmail;
			$replyto[1] = $view->vendor->vendor_name;
			$mailer->addReplyTo( $replyto );
		}
		/*	if (isset($view->replyTo)) {
				 $mailer->addReplyTo($view->replyTo);
			 }*/

		if(isset($view->mediaToSend)) {
			foreach( (array)$view->mediaToSend as $media ) {
				$mailer->addAttachment( $media );
			}
		}

		// set proper sender
		$sender = array();
		if(!empty($view->vendorEmail) and VmConfig::get( 'useVendorEmail', 0 )) {
			$sender[0] = $view->vendorEmail;
			$sender[1] = $view->vendor->vendor_name;
		} else {
			// use default joomla's mail sender
			$app = JFactory::getApplication();
			$sender[0] = $app->getCfg( 'mailfrom' );
			$sender[1] = $app->getCfg( 'fromname' );
			if(empty($sender[0])){
				$config = JFactory::getConfig();
				$sender = array( $config->get( 'mailfrom' ), $config->get( 'fromname' ) );
			}
		}
		$mailer->setSender( $sender );

		return $mailer->Send();
	}


	/**
	 * This function sets the right template on the view
	 * @author Max Milbers
	 */
	static function setVmTemplate ($view, $catTpl = 0, $prodTpl = 0, $catLayout = 0, $prodLayout = 0) {

		//Lets get here the template set in the shopconfig, if there is nothing set, get the joomla standard
		$template = VmConfig::get( 'vmtemplate', 'default' );
		$db = JFactory::getDBO();
		//Set specific category template
		if(!empty($catTpl) && empty($prodTpl)) {
			if(is_Int( $catTpl )) {
				$q = 'SELECT `category_template` FROM `#__virtuemart_categories` WHERE `virtuemart_category_id` = "'.(int)$catTpl.'" ';
				$db->setQuery( $q );
				$temp = $db->loadResult();
				if(!empty($temp)) $template = $temp;
			} else {
				$template = $catTpl;
			}
		}

		//Set specific product template
		if(!empty($prodTpl)) {
			if(is_Int( $prodTpl )) {
				$q = 'SELECT `product_template` FROM `#__virtuemart_products` WHERE `virtuemart_product_id` = "'.(int)$prodTpl.'" ';
				$db->setQuery( $q );
				$temp = $db->loadResult();
				if(!empty($temp)) $template = $temp;
			} else {
				$template = $prodTpl;
			}
		}

		shopFunctionsF::setTemplate( $template );

		//Lets get here the layout set in the shopconfig, if there is nothing set, get the joomla standard
		if(VmRequest::getCmd( 'view' ) == 'virtuemart') {
			$layout = VmConfig::get( 'vmlayout', 'default' );
			$view->setLayout( strtolower( $layout ) );
		} else {

			if(empty($catLayout) and empty($prodLayout)) {
				$catLayout = VmConfig::get( 'productlayout', 'default' );
			}

			//Set specific category layout
			if(!empty($catLayout) && empty($prodLayout)) {
				if(is_Int( $catLayout )) {
					$q = 'SELECT `layout` FROM `#__virtuemart_categories` WHERE `virtuemart_category_id` = "'.(int)$catLayout.'" ';
					$db->setQuery( $q );
					$temp = $db->loadResult();
					if(!empty($temp)) $layout = $temp;
				} else {
					$layout = $catLayout;
				}
			}

			//Set specific product layout
			if(!empty($prodLayout)) {
				if(is_Int( $prodLayout )) {
					$q = 'SELECT `layout` FROM `#__virtuemart_products` WHERE `virtuemart_product_id` = "'.(int)$prodLayout.'" ';
					$db->setQuery( $q );
					$temp = $db->loadResult();
					if(!empty($temp)) $layout = $temp;
				} else {
					$layout = $prodLayout;
				}
			}

		}

		if(!empty($layout)) {
			$view->setLayout( strtolower( $layout ) );
		}


	}

	function sendRatingEmailToVendor ($data) {
		if(!class_exists('ShopFunctions')) require(JPATH_VM_ADMINISTRATOR.DS.'helpers'.DS.'shopfunctions.php');
		$vars = array();
		$productModel = VmModel::getModel ('product');
		$product = $productModel->getProduct ($data['virtuemart_product_id']);
		$vars['subject'] = JText::sprintf('COM_VIRTUEMART_RATING_EMAIL_SUBJECT', $product->product_name);
		$vars['mailbody'] = JText::sprintf('COM_VIRTUEMART_RATING_EMAIL_BODY', $product->product_name);

		$vendorModel = VmModel::getModel ('vendor');
		$vendor = $vendorModel->getVendor ($product->virtuemart_vendor_id);
		$vendorModel->addImages ($vendor);
		$vars['vendor'] = $vendor;
		$vars['vendorEmail'] = $vendorModel->getVendorEmail ($product->virtuemart_vendor_id);
		$vars['vendorAddress'] = shopFunctions::renderVendorAddress ($product->virtuemart_vendor_id);

	    shopFunctionsF::renderMail ('productdetails', $vars['vendorEmail'], $vars, 'productdetails', TRUE);

	}

	/**
	 * Final setting of template
	 *
	 * @author Max Milbers
	 */
	static function setTemplate ($template) {

		if(!empty($template) && $template != 'default') {

			$app = JFactory::getApplication( 'site' );

			$registry = null;
			if(is_numeric($template)){
				$db = JFactory::getDbo();
				$query = 'SELECT `template`,`params` FROM `#__template_styles` WHERE `id`="'.$template.'" ';
				$db->setQuery($query);
				$res = $db->loadAssoc();
				if($res){
					$registry = new JRegistry;
					$registry->loadString($res['params']);
					$template = $res['template'];
				}
			} else {
				vmAdminInfo('Your template settings are old, please check your template settings in the vm config and in your categories');
				vmdebug('Your template settings are old, please check your template settings in the vm config and in your categories');
			}
			if(is_dir( JPATH_THEMES.DS.$template )) {
				$app->setTemplate($template,$registry);
			} else {
				vmError( 'The chosen template couldnt find on the filesystem: '.$template );
			}
		}

		return $template;
	}

	/**
	 *
	 * Enter description here ...
	 * @author Max Milbers
	 * @author Iysov
	 * @param string $string
	 * @param int $maxlength
	 * @param string $suffix
	 */
	static public function limitStringByWord ($string, $maxlength, $suffix = '') {

		if(function_exists( 'mb_strlen' )) {
			// use multibyte functions by Iysov
			if(mb_strlen( $string )<=$maxlength) return $string;
			$string = mb_substr( $string, 0, $maxlength );
			$index = mb_strrpos( $string, ' ' );
			if($index === FALSE) {
				return $string;
			} else {
				return mb_substr( $string, 0, $index ).$suffix;
			}
		} else { // original code here
			if(strlen( $string )<=$maxlength) return $string;
			$string = substr( $string, 0, $maxlength );
			$index = strrpos( $string, ' ' );
			if($index === FALSE) {
				return $string;
			} else {
				return substr( $string, 0, $index ).$suffix;
			}
		}
	}

	/**
	 * Admin UI Tabs
	 * Gives A Tab Based Navigation Back And Loads The Templates With A Nice Design
	 * @param $load_template = a key => value array. key = template name, value = Language File contraction
	 * @example 'shop' => 'COM_VIRTUEMART_ADMIN_CFG_SHOPTAB'
	 */
	static function buildTabs ($view, $load_template = array()) {

		vmJsApi::js( 'vmtabs' );
		$html = '<div id="ui-tabs">';
		$i = 1;
		foreach( $load_template as $tab_content => $tab_title ) {
			$html .= '<div id="tab-'.$i.'" class="tabs" title="'.vmText::_( $tab_title ).'">';
			$html .= $view->loadTemplate( $tab_content );
			$html .= '<div class="clear"></div>
			    </div>';
			$i++;
		}
		$html .= '</div>';
		echo $html;
	}


	/**
	 * Checks if Joomla language keys exist and combines it according to existing keys.
	 * @string $pkey : primary string to search for Language key (must have %s in the string to work)
	 * @string $skey : secondary string to search for Language key
	 * @return string
	 * @author Max Milbers
	 * @author Patrick Kohl
	 */
	static function translateTwoLangKeys ($pkey, $skey) {

		$upper = strtoupper( $pkey ).'_2STRINGS';
		if(vmText::_( $upper ) !== $upper) {
			return vmText::sprintf( $upper, vmText::_( $skey ) );
		} else {
			return vmText::_( $pkey ).' '.vmText::_( $skey );
		}
	}

	
	/**
	 * Get Virtuemart itemID from joomla menu
	 * @author Maik K�nnemann
	 */
	static function getMenuItemId( $lang = '*' ) {

		$itemID = '';

		if(empty($lang)) $lang = '*';

		$component	= JComponentHelper::getComponent('com_virtuemart');

		$db = JFactory::getDbo();
		$q = 'SELECT * FROM `#__menu` WHERE `component_id` = "'. $component->id .'" and `language` = "'. $lang .'"';
		$db->setQuery( $q );
		$items = $db->loadObjectList();
		if(empty($items)) {
			$q = 'SELECT * FROM `#__menu` WHERE `component_id` = "'. $component->id .'" and `language` = "*"';
			$db->setQuery( $q );
			$items = $db->loadObjectList();
		}

		foreach ($items as $item) {
			if(strstr($item->link, 'view=virtuemart')) {
				$itemID = $item->id;
				break;
			}
		}

		if(empty($itemID) && !empty($items[0]->id)) {
			$itemID = $items[0]->id;
		}

		return $itemID;
	}

	static function triggerContentPlugin(  $article, $context, $field) {
	// add content plugin //
		$dispatcher = JDispatcher::getInstance ();
		JPluginHelper::importPlugin ('content');
		$article->text = $article->$field;

		jimport ('joomla.registry.registry');
		$params = new JRegistry('');
		if (!isset($article->event)) {
			$article->event = new stdClass();
		}
		$results = $dispatcher->trigger ('onContentPrepare', array('com_virtuemart.'.$context, &$article, &$params, 0));
		// More events for 3rd party content plugins
		// This do not disturb actual plugins, because we don't modify $vendor->text
		$res = $dispatcher->trigger ('onContentAfterTitle', array('com_virtuemart.'.$context, &$article, &$params, 0));
		$article->event->afterDisplayTitle = trim (implode ("\n", $res));

		$res = $dispatcher->trigger ('onContentBeforeDisplay', array('com_virtuemart.'.$context, &$article, &$params, 0));
		$article->event->beforeDisplayContent = trim (implode ("\n", $res));

		$res = $dispatcher->trigger ('onContentAfterDisplay', array('com_virtuemart.'.$context, &$article, &$params, 0));
		$article->event->afterDisplayContent = trim (implode ("\n", $res));

		$article->$field = $article->text;
	}


}
