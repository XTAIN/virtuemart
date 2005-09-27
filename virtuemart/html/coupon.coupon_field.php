<?php 
defined( '_VALID_MOS' ) or die( 'Direct Access to this location is not allowed.' ); 
/**
*
* @version $Id: COPYRIGHT.php 70 2005-09-15 20:45:51Z spacemonkey $
* @package VirtueMart
* @subpackage html
* @copyright Copyright (C) 2004-2005 Soeren Eberhardt. All rights reserved.
* @license http://www.gnu.org/copyleft/gpl.html GNU/GPL, see LICENSE.php
* VirtueMart is free software. This version may have been modified pursuant
* to the GNU General Public License, and as distributed it includes or
* is derivative of works licensed under the GNU General Public License or
* other free or open source software licenses.
* See /administrator/components/com_phpshop/COPYRIGHT.php for copyright notices and details.
* @author Erich Vinson
* http://virtuemart.net
*/

mm_showMyFileName( __FILE__ );

echo "<table width=\"100%\"><tr class=\"sectiontableentry1\"><td width=\"100%\">";

if (@$_SESSION['invalid_coupon'] == true) { 
  echo "<strong>" . $PHPSHOP_LANG->_PHPSHOP_COUPON_CODE_INVALID . "</strong><br/>"; 
}
if( !empty($_REQUEST['coupon_error']) ) {
 echo $_REQUEST['coupon_error']."<br/>";
}
echo $PHPSHOP_LANG->_PHPSHOP_COUPON_ENTER_HERE . "<br/>
    <form action=\"".$_SERVER['PHP_SELF'] . "\" method=\"post\">
		<input type=\"text\" name=\"coupon_code\" width=\"10\" maxlength=\"30\" class=\"inputbox\" />
		<input type=\"hidden\" name=\"Itemid\" value=\"".@$_REQUEST['Itemid']."\" />
		<input type=\"hidden\" name=\"do_coupon\" value=\"yes\" />
		<input type=\"hidden\" name=\"option\" value=\"com_phpshop\" />
		<input type=\"hidden\" name=\"page\" value=\"".$page."\" />
		<input type=\"submit\" value=\"" . $PHPSHOP_LANG->_PHPSHOP_COUPON_SUBMIT_BUTTON . "\" class=\"button\" />
		</form>
	</td>
</tr></table>";
	

?>
