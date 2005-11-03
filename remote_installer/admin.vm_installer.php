<?php
/* VirtueMart remote Installer Script */
defined('_VALID_MOS') or die('Direct access to this location is not allowed.');

$task = mosGetParam( $_REQUEST, 'task', null );
$remote_url = mosGetParam( $_REQUEST, 'remote_url' );
$element = mosGetParam( $_REQUEST, 'element' );

switch ($task) {
  case "install":
	if( installVirtueMart( $remote_url ) ) {
	  installFromDir( $element );
	}
	break;
	
  default:
	$component_installed = false;
	$module_installed = false;
	$q = "SELECT id FROM #__components as c WHERE c.option='com_virtuemart'";
	$database->setQuery( $q );
	$database->query();
	if( $database->getNumRows() ) {
	  $component_installed = true;
	}
	$q = "SELECT id FROM #__modules as m WHERE m.module='mod_virtuemart'";
	$database->setQuery( $q );
	$database->query();
	if( $database->getNumRows() ) {
	  $module_installed = true;
	}
	
	echo "<img align=\"center\" hspace=\"3\" src=\"components/com_vm_installer/cart.gif\" border=\"0\" alt=\"Cart\" />\n";
	echo "<span class=\"sectionname\">VirtueMart Getter / Downloader Script</span>";
	echo "<br /><br />\n<div align=\"left\">";
	echo "<strong>This script will help you to transfer the Installation files for VirtueMart to this server. It downloads the latest component or module file directly ";
	echo "from mamboforge.net to your server.\n This is especially helpful when your Joomla/Mambo site is located on a remote server with a fast internet connection,";
	echo " but it will also work for a local server. Note that an Internet Connection is needed anyway! Just click on 'Begin Download' and the script will do the rest.</strong></div><br />";
	
	echo "<table class=\"adminlist\" align=\"center\"><tr>";
	echo "<th><h3>1. Component Download</h3></th><th><h3>2. Module Download</h3></th></tr><tr>";
	
	if( $component_installed ) {
	 echo "<td><span class=\"message\">You already have installed the VirtueMart Component.</span></td>";
	}
	else {
	  echo "<td><form action=\"".$_SERVER['PHP_SELF']."\" method=\"post\">\n";
	  echo "<input type=\"hidden\" name=\"task\" value=\"install\" />\n";
	  echo "<input type=\"hidden\" name=\"element\" value=\"component\" />\n";
	  echo "<input type=\"hidden\" name=\"option\" value=\"com_vm_installer\" />\n<br /><br />";
	  echo "<img align=\"center\" hspace=\"3\" src=\"components/com_vm_installer/remote.png\" border=\"0\" alt=\"Remote URL\" />\n";
	  echo "Download from....(Remote URL)<br />\n";
	  echo "<input type=\"text\" class=\"inputbox\" size=\"64\" name=\"remote_url\" value=\"http://virtuemart.net/latestcomponent.php\" />\n<br /><br /><br />";
	  echo "<img align=\"center\" hspace=\"3\" src=\"components/com_vm_installer/local.png\" border=\"0\" alt=\"Local Directory\" />\n";
	  echo "Download to this directory...<br />\n";
	  echo "<input type=\"text\" class=\"inputbox\" size=\"64\" name=\"downloaddir\" value=\"$mosConfig_absolute_path/media\" />\n<br /><br /><br />";
	  echo "<input type=\"submit\" class=\"button\" value=\"Download Component\" /><br /><br /><br />\n";
	  echo "</form></td>";
	}
	if( $module_installed ) {
	 echo "<td><span class=\"message\">You already have installed the VirtueMart Main Module.</span></td>";
	}
	else {
	  echo "<td><form action=\"".$_SERVER['PHP_SELF']."\" method=\"post\">\n";
	  echo "<input type=\"hidden\" name=\"task\" value=\"install\" />\n";
	  echo "<input type=\"hidden\" name=\"element\" value=\"module\" />\n";
	  echo "<input type=\"hidden\" name=\"option\" value=\"com_vm_installer\" />\n<br /><br />";
	  echo "<img align=\"center\" hspace=\"3\" src=\"components/com_vm_installer/remote.png\" border=\"0\" alt=\"Remote URL\" />\n";
	  echo "Download from....(Remote URL)<br />\n";
	  echo "<input type=\"text\" class=\"inputbox\" size=\"64\" name=\"remote_url\" value=\"http://virtuemart.net/latestmodule.php\" />\n<br /><br /><br />";
	  echo "<img align=\"center\" hspace=\"3\" src=\"components/com_vm_installer/local.png\" border=\"0\" alt=\"Local Directory\" />\n";
	  echo "Download to this directory...<br />\n";
	  echo "<input type=\"text\" class=\"inputbox\" size=\"64\" name=\"downloaddir\" value=\"$mosConfig_absolute_path/media\" />\n<br /><br /><br />";
  
	  echo "<input type=\"submit\" class=\"button\" value=\"Download Module\" /><br /><br /><br />\n";
	  echo "</form></td>";
	}
	echo "</tr></table>";
	
	if( $module_installed && $component_installed ) {
		$q = "SELECT id FROM #__components as c WHERE c.option='com_vm_installer'";
		$database->setQuery( $q );
		$Item = Array();
		$database->loadObject( $Item );
		echo "<br /><br /><div align=\"center\">";
		echo "<span class=\"sectionname\">Uninstall this component</span>";
		echo "<form action=\"".$_SERVER['PHP_SELF']."\" method=\"get\"><br />";
		echo "<input type=\"hidden\" name=\"task\" value=\"remove\" />";
		echo "<input type=\"hidden\" name=\"cid[]\" value=\"".$Item->id."\" />";
		echo "<input type=\"hidden\" name=\"element\" value=\"component\" />";
		echo "<input type=\"hidden\" name=\"option\" value=\"com_installer\" />";
		echo "<input type=\"submit\" value=\"Uninstall this component\" /><br /><br /><br />";
		echo "</form></div>";
	}
	break;	
}

function installVirtueMart( $remote_file ) {
	global $database, $mosConfig_absolute_path, $mosConfig_live_site, $my, $extract_dir;
	
	
	////////////////////////////////////////////////////////////////////////////
	// Step 1: Download the file com_phpshop_x.x_for_Mambo_4.5.x.tar.gz
	//        from mamboforge.net
	//
	if( empty($_POST['downloaddir']))
	  $downloaddir = "$mosConfig_absolute_path/media";
	else
	  $downloaddir = $_POST['downloaddir'];
	if( !is_writable( $downloaddir ) ) {
	  return false;
	}
	$local_file = $downloaddir."/".basename( $remote_file ).".tar.gz";
	
	require_once( dirname( __FILE__ ) . "/downloader.php");
	$downloader = new classDownloader;
	$downloader->download( $remote_file, $local_file );
	
	////////////////////////////////////////////////////////////////////////////
	// Step 2: Extract the file com_phpshop_x.x_for_Mambo_4.5.x.tar.gz
	//        to downloaddir/XXXXXXXX/
	//	
	$g_pcltar_lib_dir = $mosConfig_absolute_path."/administrator/includes/pcl/";
	require_once( $mosConfig_absolute_path."/administrator/includes/pcl/pcltar.lib.php" );
	
	$uniqueid = uniqid( "vm_" );
	if( @mkdir( $downloaddir."/$uniqueid" ) )
	  $extract_dir = $downloaddir."/$uniqueid";
	else
	  $extract_dir = $downloaddir;
	  
	if( PclTarExtract($local_file, $extract_dir ) ) {
	  echo "<br /><br />Extraction successful!<br />";
	  unlink( $local_file );
	  return true;
	}
	else {
	  return false;
	}
}


function installFromDir( $element ) {
  global $database, $extract_dir;
  echo "<span class=\"sectionname\">Success</span>";
  echo "<br /><br /><div align=\"center\">";
  echo "<hr />The script has successfully downloaded and extracted the VirtueMart $element on your Server.<hr />";
  echo "<form enctype=\"multipart/form-data\" action=\"index2.php\" method=\"post\" name=\"adminForm_dir\">
			<input type=\"hidden\" name=\"task\" value=\"installfromdir\" />
			<input type=\"hidden\" name=\"option\" value=\"com_installer\">
			<input type=\"hidden\" name=\"element\" value=\"$element\">
			<input type=\"hidden\" name=\"client\" value=\"\">
			<table class=\"adminform\">
			  <tr>
				<th>Install from directory</th>
			  </tr>
			  <tr>
				<td align=\"Left\">
					Install directory:&nbsp;
					<input type=\"text\" readonly=\"readonly\" name=\"userfile\" class=\"text_area\" size=\"50\" value=\"$extract_dir\"/>&nbsp;
					<input type=\"submit\" class=\"button\" value=\"Install\" />
				</td>
			  </tr>
			</table>
		</form></div>";
  echo "<h2>Just click on 'Install' to Install the VirtueMart $element now.</h2><br /><hr /><br /><br />";
}
?>
