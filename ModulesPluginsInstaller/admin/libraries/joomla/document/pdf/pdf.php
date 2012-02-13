<?php defined('_JEXEC') or die('');
/**
* @version		$Id: pdf.php 14401 2010-01-26 14:10:00Z louis $
* @package		Joomla.Framework
* @subpackage	Document
* @copyright	Copyright (C) 2005 - 2010 Open Source Matters. All rights reserved.
* @license		GNU/GPL, see LICENSE.php
* Joomla! is free software. This version may have been modified pursuant
* to the GNU General Public License, and as distributed it includes or
* is derivative of works licensed under the GNU General Public License or
* other free or open source software licenses.
* See COPYRIGHT.php for copyright notices and details.
*/
/*
 * TODO ?
 * possible choice for attached or inline file
 * setting of margin ?
 * Changing the Font type and size ?
 * Look how Attach it to mail?
 * /
// Check to ensure this file is within the rest of the framework
defined('JPATH_BASE') or die();

/**
 * DocumentPDF class, provides an easy interface to parse and display a pdf document
 *
 * @package		Joomla.Framework
 * @subpackage	Document
 * @since		1.5
 */
class JDocumentPDF extends JDocument
{
	var $_engine	= null;

	var $_name		= 'joomla';

	var $_header	= null;
	var $_header_font = array( 'courier','' ,'10' );
	var $_footer_font =  array( 'courier','' ,'8' );
	
	var $_margin_header	= 5;
	var $_margin_footer	= 10;
	var $_margin_top	= 27;
	var $_margin_bottom	= 25;
	var $_margin_left	= 5;
	var $_margin_right	= 5;

	// Scale ratio for images [number of points in user unit]
	var $_image_scale	= 4;
	// default output
	var $_outputDest	= 'I';
	// defaut path
	var $_path = null ;
	/**
	 * Class constructore
	 *
	 * @access protected
	 * @param	array	$options Associative array of options
	 */
	function __construct($options = array())
	{
		parent::__construct($options);

		if (isset($options['margin-header'])) {
			$this->_margin_header = $options['margin-header'];
		}

		if (isset($options['margin-footer'])) {
			$this->_margin_footer = $options['margin-footer'];
		}

		if (isset($options['margin-top'])) {
			$this->_margin_top = $options['margin-top'];
		}

		if (isset($options['margin-bottom'])) {
			$this->_margin_bottom = $options['margin-bottom'];
		}

		if (isset($options['margin-left'])) {
			$this->_margin_left = $options['margin-left'];
		}

		if (isset($options['margin-right'])) {
			$this->_margin_right = $options['margin-right'];
		}

		if (isset($options['image-scale'])) {
			$this->_image_scale = $options['image-scale'];
		}
		$this->_path = JPATH_ROOT.DS.'media'.DS ;
		//set mime type
		$this->_mime = 'application/pdf';

		//set document type
		$this->_type = 'pdf';
		/*
		 * Setup external configuration options
		 */
		define('K_TCPDF_EXTERNAL_CONFIG', true);

		/*
		 * Path options
		 */
		
		// Installation path
		define("K_PATH_MAIN", JPATH_LIBRARIES.DS."tcpdf");

		// URL path
		define("K_PATH_URL", JPATH_BASE);

		// Fonts path
		define("K_PATH_FONTS", K_PATH_MAIN.DS.'fonts'.DS);
		//define("K_PATH_FONTS", JPATH_ADMINISTRATOR.DS.'components'.DS.'com_phocapdf'.DS.'fonts'.DS)

		// Cache directory path
		define("K_PATH_CACHE", K_PATH_MAIN.DS."cache");

		// Cache URL path
		define("K_PATH_URL_CACHE", K_PATH_URL.DS."cache");

		// Images path
		define("K_PATH_IMAGES", K_PATH_MAIN.DS."images");

		// Blank image path
		define("K_BLANK_IMAGE", K_PATH_IMAGES.DS."_blank.png");

		/*
		 * Format options
		 */

		// Cell height ratio
		define("K_CELL_HEIGHT_RATIO", 1.25);

		// Magnification scale for titles
		define("K_TITLE_MAGNIFICATION", 1.3);

		// Reduction scale for small font
		define("K_SMALL_RATIO", 2/3);

		// Magnication scale for head
		define("HEAD_MAGNIFICATION", 1.1);
		define ('PDF_PAGE_ORIENTATION', 'P');
		define ('PDF_UNIT', 'mm');
		define ('PDF_PAGE_FORMAT', 'A4');
		/*
		 * Create the pdf document
		 */

		jimport('tcpdf.tcpdf');

		// Default settings are a portrait layout with an A4 configuration using millimeters as units
		$this->_engine = new TCPDF( PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

		//set margins
		$this->_engine->SetMargins($this->_margin_left, $this->_margin_top, $this->_margin_right);
		//set auto page breaks
		$this->_engine->SetAutoPageBreak(TRUE, $this->_margin_bottom);
		$this->_engine->SetHeaderMargin($this->_margin_header);
		$this->_engine->SetFooterMargin($this->_margin_footer);
		$this->_engine->setImageScale($this->_image_scale);
	}

	 /**
	 * Sets the document name
	 *
	 * @param   string   $name	Document name
	 * @access  public
	 * @return  void
	 */
	function setName($name = 'joomla') {
		$this->_name = $name;
	}

	/**
	 * Returns the document name
	 *
	 * @access public
	 * @return string
	 */
	function getName() {
		return $this->_name;
	}
	/**
	 * Sets the document Output Destination
	 * $dest	(string) Destination where to send the document. It can take one of the following values:
	 * I: send the file inline to the browser (default). The plug-in is used if available. The name given by name is used when one selects the "Save as" option on the link generating the PDF.
	 * D: send to the browser and force a file download with the name given by name.
	 * F: save to a local server file with the name given by name.
	 * S: return the document as a string (name is ignored).
	 * FI: equivalent to F + I option
	 * FD: equivalent to F + D option
	 * E: return the document as base64 mime multi-part email attachment (RFC 2045)
	 * @param   string   $dest
	 * @access  public
	 * @return  void
	 */
	function setOutputDest($dest = 'I') {
		$dests = array('I','D','F','S','FI','FD','E');
		if (in_array($dest,$dests)) {
			$this->_outputDest = $dest;
		}
	}

	/**
	 * Returns the document name
	 *
	 * @access public
	 * @return string
	 */
	function getOutputDest() {
		return $this->_outputDest;
	}

	/**
	 * Sets the document Output Destination
	 * Only needed for $this->_outputDest ="F"
	 * @param   string   $name	Document name
	 * @access  public
	 * @return  void
	 */
	function setOutputPath($path = NULL) {
		if(is_dir($path)) {
			if (is_writable($path)) $this->_path = $path.DS;
		}
	}

	/**
	 * Returns the document name
	 *
	 * @access public
	 * @return string
	 */
	function getOutputPath() {
		return $this->_path;
	}

	 /**
	 * Sets the document header string
	 *
	 * @param   string   $text	Document header string
	 * @access  public
	 * @return  void
	 */
	function setHeader($text) {
		$this->_header = $text;
	}

	/**
	 * Returns the document header string
	 *
	 * @access public
	 * @return string
	 */
	function getHeader() {
		return $this->_header;
	}

	/**
	 * Sets the document header font
	 *
	 * @param   array (Font Family, Font Style, Font Size in Pt)
	 * @access  public
	 * @return  void
	 */
	function setHeaderFont($Family='courier', $Style='', $SizePt='10') {
		$this->_header_font = array( $Family, $Style , $SizePt );
	}

	/**
	 * Returns the document header font
	 *
	 * @access public
	 * @return string
	 */
	function getHeaderFont() {
		return $this->_header_font;
	}
	/**
	 * Sets the document header font
	 *
	 * @param   array (Font Family, Font Style, Font Size in Pt)
	 * @access  public
	 * @return  void
	 */
	function setFooterFont($Family='courier', $Style='', $SizePt='10') {
		$this->_footer_font = array($Family, $Style ,$SizePt );
	}

	/**
	 * Returns the document header font
	 *
	 * @access public
	 * @return string
	 */
	function getFooterFont() {
		return $this->_footer_font;
	}

	/**
	 * Render the document.
	 *
	 * @access public
	 * @param boolean 	$cache		If true, cache the output
	 * @param array		$params		Associative array of attributes
	 * @return 	The rendered data
	 */
	function render( $cache = false, $params = array())
	{
		$pdf = &$this->_engine;

		// Set PDF Metadata
		$pdf->SetCreator($this->getGenerator());
		$pdf->SetTitle($this->getTitle());
		$pdf->SetSubject($this->getDescription());
		$pdf->SetKeywords($this->getMetaData('keywords'));

		// Set PDF Header data
		$pdf->setHeaderData('',0,$this->getTitle(), $this->getHeader());

		// Set PDF Header and Footer fonts
		 $lang = &JFactory::getLanguage();
		// $font = $lang->getPdfFontName();
		// $font = ($font) ? $font : 'freesans';


		$pdf->setRTL($lang->isRTL());

		$pdf->setHeaderFont($this->getHeaderFont() );
		$pdf->setFooterFont($this->getFooterFont() );

		// Initialize PDF Document
		$pdf->AliasNbPages();
		$pdf->AddPage();
		//JResponse::setHeader('Content-Length', strlen($data), true);
		// F= File , S =String for Email attachement, I = inline; d= download(save as) ;
		// JResponse::clearHeaders();
		// JResponse::setHeader('Content-type', 'application/pdf', true);
		// if ($methode == 'S') {
			// JResponse::setHeader('Content-disposition', 'attachment; filename="'.$this->_name.'.pdf"',true);
		// }
		// elseif ($methode == 'I')JResponse::setHeader('Content-disposition', 'inline; filename="'.$this->getName().'.pdf"', true);
		// Build the PDF Document string from the document buffer
		$this->fixLinks();
		// echo $this->getBuffer();
		// jexit();
		
		$pdf->WriteHTML($this->getBuffer(), true);
		if ($this->_outputDest == 'F') {
			$pdf->Output($this->getOutputPath().$this->getName().'.pdf',$this->_outputDest);
			return true;
		}
		else $data = $pdf->Output($this->getName().'.pdf',$this->_outputDest);
		//parent::render();
		//Close and output PDF document
		return $data;

	}

	function fixLinks()
	{

	}
}