<?php
/**
*
* shopper_vendor_xref table
*
* @package	VirtueMart
* @subpackage User
* @author Oscar van Eijk
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

/**
 * shopper_vendor_xref table class
 * The class is used to link users to shoppergroups.
 *
 * @package	VirtueMart
 * @author Oscar van Eijk
 */
class TableShopper_vendor_xref extends JTable {

	/** @var int User ID */
	var $user_id			= 0;
		/** @var int Vendor ID */
	var $vendor_id			= 0;
	/** @var int shoppergroup ID */
	var $shopper_group_id	= 0;
	/** @var string Custom number */
	var $custom_number		= null;

	/**
	 * @param $db Class constructor; connect to the database
	 */
	function __construct(&$db)
	{
		parent::__construct('#__vm_shopper_vendor_xref', 'user_id', $db);
	}
}

//No CLosing Tag
