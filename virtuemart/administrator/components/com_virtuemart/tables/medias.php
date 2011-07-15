<?php
/**
*
* Media table
*
* @package	VirtueMart
* @subpackage Media
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

if(!class_exists('VmTable'))require(JPATH_VM_ADMINISTRATOR.DS.'helpers'.DS.'vmtable.php');

/**
 * Media table class
 * The class is is used to manage the countries in the shop.
 *
 * @author Max Milbers
 * @package		VirtueMart
 */
class TableMedias extends VmTable {

	/** @var int Primary key */
	var $virtuemart_media_id				= 0;
	var $virtuemart_vendor_id				= 0;

	/** @var string File title */
	var $file_title				= '';
    /** @var string File description */
	var $file_description		= '';
    /** @var string File Meta or alt  */
	var $file_meta		= '';

	/** @var string File mime type */
	var $file_mimetype			= '';
	/** @var string File typ, this determines where a media is stored */
	var $file_type			= '';
	/** @var string File URL */
	var $file_url				= '';
	var $file_url_thumb			= '';

	/** @var int File published or not */
	var $published			= 0;
	/** @var int File is an image or other */
	var $file_is_downloadable	= 0;
	var $file_is_forSale		= 0;
	var $file_is_product_image 	= 0;


	var $shared = 0;
	var $file_params	= '';

	/**
	 * @author Max Milbers
	 * @param $db A database connector object
	 */
	function __construct(&$db) {
		parent::__construct('#__virtuemart_medias', 'virtuemart_media_id', $db);
		$this->setPrimaryKey('virtuemart_media_id');
//		$this->setUniqueName('file_title');

		$this->setLoggable();

	}

     /**
      *
      * @author Max Milbers
      * @return boolean True if the table buffer is contains valid data, false otherwise.
      */
   function check(){

      $ok = true;
      $notice = true;

      if(!empty($this->file_url)){
      	if(strlen($this->file_url)>254){
      		$this->setError(JText::sprintf('COM_VIRTUEMART_URL_TOO_LONG',strlen($this->file_url) ) );
      	}
      	if(strpos($this->file_url,'..')!==false){
      		$ok = false;
      		$this->setError(JText::sprintf('COM_VIRTUEMART_URL_NOT_VALID',strlen($this->file_url) ) );
      	}
      } else{
      	$this->setError(JText::_('COM_VIRTUEMART_MEDIA_MUST_HAVE_URL'));
      	$ok = false;
      }

      if(empty($this->file_title) && !empty($this->file_name)) $this->file_title = $this->file_name ;

      if(!empty($this->file_title)){
			if(strlen($this->file_title)>126){
				$this->setError(JText::sprintf('COM_VIRTUEMART_TITLE_TOO_LONG',strlen($this->file_title) ) );
			}

			$q = 'SELECT * FROM `'.$this->_tbl.'` ';
			$q .= 'WHERE `file_title`="' .  $this->_db->getEscaped($this->file_title) . '" AND `file_type`="' . $this->_db->getEscaped( $this->file_type) . '"';
			$this->_db->setQuery($q);
			$unique_id = $this->_db->loadAssocList();

			$tblKey = 'virtuemart_media_id';
			if (!empty($unique_id)){
				foreach($unique_id as $id){
					if($id!=$this->virtuemart_media_id) {
						$this->file_title = $this->file_title.rand(10,99);
					}
				}
			}
      }else{
				$this->setError(JText::_('COM_VIRTUEMART_MEDIA_MUST_HAVE_TITLE'));
				$ok = false;
      }

		if(!empty($this->file_description)){
			if(strlen($this->file_description)>254){
				$this->setError(JText::sprintf('COM_VIRTUEMART_DESCRIPTION_TOO_LONG',strlen($this->file_description) ) );
			}
		} else{
			//$this->setError(JText::_('COM_VIRTUEMART_MEDIA_MUST_HAVE_DESCRIPTION'));
			//$ok = false;
		}

//		$app = JFactory::getApplication();

 	//$this->setError('Checking '.$this->file_url);


		if(empty($this->file_mimetype)){

			$rel_path = str_replace('/',DS,$this->file_url);
//			return JPATH_ROOT.DS.$rel_path.$this->file_name.'.'.$this->file_extension;
			if(function_exists('mime_content_type') ){
				$ok = true;
				$app = JFactory::getApplication();
//				set_error_handler(array($this, 'handleError'));
//				try{
					$this->file_mimetype = mime_content_type(JPATH_ROOT.DS.$rel_path);
					if(!empty($this->file_mimetype)){
						if($this->file_mimetype == 'directory'){
							$this->setError('cant store this media, is a directory '.$rel_path);
							return false;
						} else if(strpos($this->file_mimetype,'corrupt')!==false){
							$this->setError('cant store this media, Document corrupt: Cannot read summary info '.$rel_path);
							return false;
						}
						//$this->setError('file_mime '.$this->file_mimetype.' for '.$rel_path);
					} else {
						$this->setError('Couldnt resolve mime '.$rel_path);
						return false;
					}
// 				     $this->setError('mime'.$this->file_mimetype);
// 				     if($this->file_mimetype == 'directory'){
// 				     		$this->setError('Couldnt resolve mime, because it is a '.$rel_path);
// 					     return false;
// 				     }
// 				} catch (ErrorException $e){

// 					$ok = false;
// 				     $app->enqueueMessage('Couldnt resolve mime type for '.$rel_path);
// 				    return false;
// 				}
//				restore_error_handler();
			     //$this->file_mimetype = mime_content_type(JPATH_ROOT.DS.$rel_path);
		     } else {
			     if(!class_exists('JFile')) require(JPATH_LIBRARIES.DS.'joomla'.DS.'filesystem'.DS.'file.php');

			     $lastIndexOfSlash= strrpos($this->file_url,'/');
			     $name = substr($this->file_url,$lastIndexOfSlash+1);
			     $file_extension = strtolower(JFile::getExt($name));
			     if( empty($name) ){
				     $this->setError(JText::_('COM_VIRTUEMART_NO_MEDIA'));
			     }
			     elseif($file_extension === 'jpg' || $file_extension === 'jpeg'){
				     $this->file_mimetype = 'image/jpeg';
			     }
			     elseif($file_extension === 'gif'){
				     $this->file_mimetype = 'image/gif';
			     }
			     elseif($file_extension === 'png'){
				     $this->file_mimetype = 'image/png';
			     }
			     elseif($file_extension === 'bmp'){
				     $this->setError(JText::_('COM_VIRTUEMART_MEDIA_SHOULD_NOT_BMP'));
				     $notice = true;
			     }
			     else{
				     $this->setError(JText::_('COM_VIRTUEMART_MEDIA_SHOULD_HAVE_MIMETYPE'));
				     $notice = true;
			     }
		     }
	     }


	     if($ok){
		     return parent::check();
	     } else {
		     return false;
	     }

	}

	/**
	 * We need a customised error handler to catch the errors maybe thrown by
	 * mime_content_type
	 *
	 * @author Max Milbers derived from Philippe Gerber
	 */
	function handleError($errno, $errstr){

	    // error was suppressed with the @-operator
	    if (0 === error_reporting()) {
	        return false;
	    }
	    throw new ErrorException($errstr, 0);
	    //echo 'I throw exception';
	   //throw new ErrorException($errstr, 0, $errno, $errfile, $errline);
	}

}
// pure php no closing tag
