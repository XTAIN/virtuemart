<?php
/**
 * @package		JMart
 */

jimport('joomla.application.component.controller');

/**
 * JMart Component Controller
 *
 * @package		JMart
 */
class JMartController extends JController
{
    
	function __construct()
	{
		parent::__construct();
				
		$document =& JFactory::getDocument();				
		$viewName = JRequest::getVar('view', 'jmart');
		$viewType	= $document->getType();
		$view =& $this->getView($viewName, $viewType);

		// Push a model into the view		
		$this->addModelPath(JPATH_COMPONENT_ADMINISTRATOR . DS . 'models');
		$model1 =& $this->getModel('vendor');
		$model2 =& $this->getModel('category');
        $model3 =& $this->getModel('product');
		
		if (!JError::isError( $model1 )) {
			$view->setModel( $model1, true );
		}			
		if (!JError::isError( $model2 )) {
			$view->setModel( $model2, false );
		}
		if (!JError::isError( $model3 )) {
			$view->setModel( $model3, false );
		}	
		   		        								
	}    
    
    
	/**
	 * Method to display the view
	 *
	 * @access	public
	 */
	function display()
	{
	    if (JMART_IS_OFFLINE == '1') {
		    JRequest::setVar( 'layout', 'offline' );	
	    }
	    else {
		    JRequest::setVar( 'layout', 'default' );	
	    }	 
	    	    
		parent::display();
	}

}
?>
