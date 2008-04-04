<?php
/**
* @version $Id: languagemanager.class.php 735 2007-02-28 15:07:26Z gregdev $
* @package martlanguages
* @copyright (C) 2005 Soeren Eberhardt
*
* @license http://www.gnu.org/copyleft/gpl.html GNU/GPL
*/

class vmLanguageManager {
	var $modules = array();
	function initModule($module,&$vars) {
		$this->modules[$module] =& $vars;
	}
}
?>