<?php
/**
* @package		VirtueMart
*/

jimport( 'joomla.application.component.view');

/**
 * HTML View class for the VirtueMart Component
 *
 * @package		VirtueMart
 */
class VirtueMartViewBrowse extends JView
{
	
	function display($tpl = null)
	{	
		$model =& $this->getModel();
	
		
		parent::display($tpl);
	}
}
?>
