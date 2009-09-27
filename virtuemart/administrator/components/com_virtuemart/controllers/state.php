<?php
/**
 * State controller
 *
 * @package	JMart
 * @subpackage State
 * @author Rick Glunt 
 * @copyright Copyright (c) 2009 JMart Team. All rights reserved.
 */

defined( '_JEXEC' ) or die( 'Direct Access to this location is not allowed.' );

jimport('joomla.application.component.controller');

/**
 * Product Controller
 *
 * @package    JMart
 * @subpackage State
 * @author Rick Glunt and Max Milbers
 */
class JmartControllerState extends JController
{
	/**
	 * Method to display the view
	 *
	 * @access	public
	 * @author Rick Glunt and Max Milbers
	 */
	function __construct() {
		parent::__construct();
		
	    $document =& JFactory::getDocument();
	    $document->addStyleSheet(JURI::base().'components/com_jmart/assets/css/jmart.css');
	    
		$document =& JFactory::getDocument();				
		$viewType	= $document->getType();
		$view =& $this->getView('state', $viewType);		

		// Push a model into the view					
		$model =& $this->getModel('state');
		if (!JError::isError($model)) {
			$view->setModel($model, true);
		}			
		$model1 =& $this->getModel('ShippingZone');
		if (!JError::isError($model1)) {
			$view->setModel($model1, false);
		}			
	}
	
	/**
	 * Display the state view
	 *
	 * @author Rick Glunt	 
	 */
	function display() {			
		parent::display();
	}
	
	
	/**
	 * Handle the edit task
	 *
     * @author Rick Glunt and Max Milbers
	 */
	function edit()
	{				
		JRequest::setVar('controller', 'state');
		JRequest::setVar('view', 'state');
		JRequest::setVar('layout', 'edit');
		JRequest::setVar('hidemenu', 1);		
		
		parent::display();
	}		
	
	
	/**
	 * Handle the cancel task
	 *
	 * @author Rick Glunt and Max Milbers
	 */
	function cancel()
	{
		$msg = JText::_('Operation Canceled!!');
		
		$this->setRedirect('index.php?option=com_jmart&view=state&state_id='.$data["state_id"], $msg);
	}	
	
	
	/**
	 * Handle the save task
	 *
	 * @author Rick Glunt and Max Milbers	 
	 */	
	function save()
	{
		$data = JRequest::get( 'post' );	
		$model =& $this->getModel( 'state' );		
		
		if ($model->store()) {
			$msg = JText::_('State saved!');
		}
		else {
			$msg = JText::_('Error saving state!');
		}
		
		$this->setRedirect('index.php?option=com_jmart&view=state&state_id='.$data["state_id"], $msg);
	}	
	
	
	/**
	 * Handle the remove task
	 *
	 * @author Rick Glunt and Max Milbers	 
	 */		
	function remove()
	{
		$data = JRequest::get( 'post' );	
		$model = $this->getModel('state');
		if (!$model->delete()) {
			$msg = JText::_('Error: One or more states could not be deleted!');
		}
		else {
			$msg = JText::_( 'States Deleted!');
		}
	
		$this->setRedirect( 'index.php?option=com_jmart&view=state&state_id='.$data["state_id"], $msg);
	}	
	
	
	/**
	 * Handle the publish task
	 *
	 * @author Rick Glunt and Max Milbers	 
	 */		
	function publish()
	{
		$data = JRequest::get( 'post' );	
		$model = $this->getModel('state');
		if (!$model->publish(true)) {
			$msg = JText::_('Error: One or more states could not be published!');
		}
	
		$this->setRedirect( 'index.php?option=com_jmart&view=state&state_id='.$data["state_id"], $msg);
	}		
	
	
	/**
	 * Handle the publish task
	 *
	 * @author Rick Glunt and Max Milbers	 
	 */		
	function unpublish()
	{
		$data = JRequest::get( 'post' );	
		$model = $this->getModel('state');
		if (!$model->publish(false)) {
			$msg = JText::_('Error: One or more states could not be unpublished!');
		}
	
		$this->setRedirect( 'index.php?option=com_jmart&view=state&state_id='.$data["state_id"], $msg);
	}	
}
?>
