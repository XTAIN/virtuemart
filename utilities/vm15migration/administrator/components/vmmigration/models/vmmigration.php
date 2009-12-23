<?php
/**
 * Default data module for Virtuemart migration
 *
 * @package	VirtueMart
 * @author      RickG
 * @copyright   Copyright (c) 2009 VirtueMart Team. All rights reserved.
 */

// no direct access
defined('_JEXEC') or die('Restricted access');
jimport( 'joomla.application.component.model');


/**
 * Default model class for Virtuemart migration
 *
 * @package	VirtueMart
 * @author      RickG
 */
class VmmigrationModelVmmigration extends JModel {

    /**
     * Parse the old virtuemart.cfg file and save to dtabase.
     *
     * @author RickG
     */
    function parseOldCfg($cfgfile) {
        require_once(JPATH_ROOT.DS.'administrator'.DS.'components'.DS.'com_vmmigration'.DS.'cfgparse.php');
        $parser = new CfgParse();
        $oldSettings = $parser->parseFile($cfgfile);

        $configParams = new JParameter('');
        foreach ($oldSettings as $k => $v) {
	    if ($k == 'vm_themepath') {
		$k = 'theme';
		$v = basename(rtrim($v, '/'));
	    }

            if (($k != 'vm_tableprefix') && ($k != 'classpath') &&
                ($k != 'adminpath') && ($k != 'componenturl') &&
                ($k != 'secureurl') && ($k != 'imageurl') && 
                ($k != 'vm_themeurl') && ($k != 'vm_admin_icon_url') &&
                ($k != 'vm_themepath') && ($k != 'pagepath')) {

		$k = str_replace('vm_', '', $k);
		$k = str_replace('pshop_', '', $k);

		// Rename some variables
		switch ($k) {
		    case "is_offline":
			$k = 'shop_is_offline';
			break;
		    die($v);
			break;
		    case "offline_message":
			$k = 'offline_message';
			break;
		    case "use_as_catalogue":
			$k = 'use_as_catalog';
			break;
		}

                $configParams->set($k, $v);
            }
        }

        $db = JFactory::getDBO();
        $query = "INSERT INTO #__vm_config (`config_id`, `config`) VALUES (1, " . $db->Quote($configParams->toString()) . ")";
        $db->setQuery($query);
//die($query);
        if (!$db->query()) {
            die($query);
            return false;
        }
    }


    /**
     * Parse a sql file executing each sql statement found.
     *
     * @author Max Milbers
     */
    function execSQLFile($sqlfile) {
        // Check that sql files exists before reading. Otherwise raise error for rollback
        if ( !file_exists($sqlfile) ) {
            return false;
        }
        $buffer = file_get_contents($sqlfile);

        // Graceful exit and rollback if read not successful
        if ( $buffer == false ) {
            return false;
        }

        // Create an array of queries from the sql file
        jimport('joomla.installer.helper');
        $queries = JInstallerHelper::splitSql($buffer);

        if (count($queries) == 0) {
            // No queries to process
            return 0;
        }
        $db = JFactory::getDBO();
        // Process each query in the $queries array (split out of sql file).
        foreach ($queries as $query) {
            $query = trim($query);
            if ($query != '' && $query{0} != '#') {
                $db->setQuery($query);
                if (!$db->query()) {
                    JError::raiseWarning(1, 'JInstaller::install: '.JText::_('SQL Error')." ".$db->stderr(true));
                    return false;
                }
            }
        }

        return true;
    }
    
    
    /**
     * Remove old files and folders
     *
     * @author RickG
     */
    function removeOldVmFiles() {
        // Clean up backend
        JFolder::delete(JPATH_ROOT.DS.'administrator'.DS.'components'.DS.'com_virtuemart'.DS.'classes'.DS.'Log');
        JFolder::delete(JPATH_ROOT.DS.'administrator'.DS.'components'.DS.'com_virtuemart'.DS.'classes'.DS.'nusoap');
        JFolder::delete(JPATH_ROOT.DS.'administrator'.DS.'components'.DS.'com_virtuemart'.DS.'classes'.DS.'pdf');
        JFolder::delete(JPATH_ROOT.DS.'administrator'.DS.'components'.DS.'com_virtuemart'.DS.'classes'.DS.'PEAR');
        JFolder::delete(JPATH_ROOT.DS.'administrator'.DS.'components'.DS.'com_virtuemart'.DS.'classes'.DS.'phpInputFilter');
        $files = JFolder::files(JPATH_ROOT.DS.'administrator'.DS.'components'.DS.'com_virtuemart'.DS.'classes');
        for ($i=0, $n=count($files); $i < $n; $i++) {
            $file = $files[$i];
            JFile::delete(JPATH_ROOT.DS.'administrator'.DS.'components'.DS.'com_virtuemart'.DS.'classes'.DS.$file);
        }
        JFolder::delete(JPATH_ROOT.DS.'administrator'.DS.'components'.DS.'com_virtuemart'.DS.'html');
        JFolder::delete(JPATH_ROOT.DS.'administrator'.DS.'components'.DS.'com_virtuemart'.DS.'languages');
        JFolder::delete(JPATH_ROOT.DS.'administrator'.DS.'components'.DS.'com_virtuemart'.DS.'sql');
        $files = JFolder::files(JPATH_ROOT.DS.'administrator'.DS.'components'.DS.'com_virtuemart');
        for ($i=0, $n=count($files); $i < $n; $i++) {
            $file = $files[$i];
            JFile::delete(JPATH_ROOT.DS.'administrator'.DS.'components'.DS.'com_virtuemart'.DS.$file);
        }
        
        // Clean up frontend
        JFolder::delete(JPATH_ROOT.DS.'components'.DS.'com_virtuemart'.DS.'js');
        $files = JFolder::files(JPATH_ROOT.DS.'components'.DS.'com_virtuemart');
        for ($i=0, $n=count($files); $i < $n; $i++) {
            $file = $files[$i];
            JFile::delete(JPATH_ROOT.DS.'components'.DS.'com_virtuemart'.DS.$file);
        }
    }


    /**
     * Unzip the new Virtemart files
     *
     * @author RickG
     */
    function unzipVmFiles() {
        $zip = JArchive::getAdapter('zip');
        return $zip->extract(JPATH_ROOT.DS.'administrator'.DS.'components'.DS.'com_vmmigration'.DS.'virtuemart_1.5.zip', JPATH_ROOT);
    }
}
?>