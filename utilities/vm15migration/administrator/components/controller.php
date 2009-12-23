<?php
/**
 * @package		Course
 */

jimport('joomla.application.component.controller');
jimport('joomla.filesystem.folder');
jimport('joomla.filesystem.file');
jimport('joomla.filesystem.archive');

/**
 * Default Controller
 *
 * @package		Course
 */
class VmmigrationController extends JController
{
    /**
     * Constructor
     */
    function __construct() {
        parent::__construct();

        $document = JFactory::getDocument();
        $viewType = $document->getType();
        $view = $this->getView('vmmigration', $viewType);

        // Push a model into the view
        $model = $this->getModel('vmmigration');
        if (!JError::isError($model)) {
            $view->setModel($model, true);
        }
    }


    /**
     * Perform the migration.
     *
     * Step 1: Backup virtuemart.cfg
     * Step 2: Remove the old Virtuemart files leaving templates and shop images
     * Step 3: Unzip the new 1.5 files
     * Step 4: Run the database conversion sript.
     * Step 5: Insert old config values into DB and cleanup backup.
     *
     * @author RickG
     */
    function migrateData() {
        $config = JFactory::getConfig();
        $source = JPATH_ROOT.DS.'administrator'.DS.'components'.DS.'com_virtuemart'.DS.'virtuemart.cfg.php';
        $destn = $config->getValue('config.tmp_path').DS.'virtuemart.cfg.php';
        if (!JFile::copy($source, $destn)) {
            $msg = JText::_('Error backing up old configuration file!');
            $this->setRedirect('index.php?option=com_vmmigration&layout=failure', $msg);
        }
        else {
            $model = $this->getModel();

            $model->removeOldVmFiles();
            if ($model->unzipVmFiles()) {
                $filename = JPATH_ROOT.DS.'administrator'.DS.'components'.DS.'com_vmmigration'.DS.'UPDATE-SCRIPT_VM_1.1.x_to_1.5.0.sql';
                if ($model->execSQLFile($filename)) {
                    $model->parseOldCfg($destn);
                    JFile::delete($destn);
                    $this->setRedirect('index.php?option=com_vmmigration&layout=success');
                }
                else {
                    $msg = JText::_('Error executing migration script!');
                    $this->setRedirect('index.php?option=com_vmmigration&layout=failure', $msg);
                }
            }
            else {
                $msg = JText::_('Error extracting Virtuemart files!');
                $this->setRedirect('index.php?option=com_vmmigration&layout=failure', $msg);
            }
        }
    }












}
?>
