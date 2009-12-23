<?php
defined( '_JEXEC' ) or die( 'Restricted access' );
/**
*
* @version $Id: admin.virtuemart.php 1755 2009-05-01 22:45:17Z rolandd $
* @package VirtueMart
* @subpackage core
* @copyright Copyright (C) VirtueMart Team - All rights reserved.
* @license http://www.gnu.org/copyleft/gpl.html GNU/GPL, see LICENSE.php
* VirtueMart is free software. This version may have been modified pursuant
* to the GNU General Public License, and as distributed it includes or
* is derivative of works licensed under the GNU General Public License or
* other free or open source software licenses.
* See /administrator/components/com_virtuemart/COPYRIGHT.php for copyright notices and details.
*
* http://virtuemart.org
*/

// Require the base controller
require_once(JPATH_COMPONENT_ADMINISTRATOR.DS.'controller.php');

// Create the controller
$classname	= 'VmmigrationController';
$controller = new $classname();

// Perform the Request task
$controller->execute(JRequest::getVar('task', ''));
$controller->redirect();

?>