<?php
defined( '_VALID_MOS' ) or die( 'Direct Access to this location is not allowed.' ); 
/**
*
* @version $Id$
* @package VirtueMart
* @subpackage html
* @copyright Copyright (C) 2004-2005 Soeren Eberhardt. All rights reserved.
* @license http://www.gnu.org/copyleft/gpl.html GNU/GPL, see LICENSE.php
* VirtueMart is free software. This version may have been modified pursuant
* to the GNU General Public License, and as distributed it includes or
* is derivative of works licensed under the GNU General Public License or
* other free or open source software licenses.
* See /administrator/components/com_virtuemart/COPYRIGHT.php for copyright notices and details.
*
* http://virtuemart.net
*/
mm_showMyFileName( __FILE__ );

$registration_enabled = $mosConfig_allowUserRegistration;
$return = mosGetParam( $_SERVER, 'REQUEST_URI', null );
// converts & to &amp; for xhtml compliance
$return = str_replace( '&', '&amp;', $return );
$return = str_replace( 'option', '&amp;option', $return );
if( vmIsJoomla(1.5)) {
	$action = 'com_login&amp;task=login';
} else {
	$action = 'login';
}
?>
<form action="index.php?option=<?php echo $action ?>" method="post" name="login">
  <div style="width:98%;text-align:center;">
        <div style="float:left;width:30%;text-align:right;">
          <label for="username_login"><?php echo $VM_LANG->_USERNAME; ?>:</label>
        </div>
    <div style="float:left;margin-left: 2px;width:60%;text-align:left;">
          <input type="text" id="username_login" name="username" class="inputbox" size="20" />
        </div>
        <br/><br/>
    <div style="float:left;width:30%;text-align:right;">
          <label for="passwd_login"><?php echo $VM_LANG->_PASSWORD; ?>:</label> 
        </div>
        <div style="float:left;margin-left: 2px;width:30%;text-align:left;">
          <input type="password" id="passwd_login" name="passwd" class="inputbox" size="20" />
        </div>
        <div style="float:left;width:30%;text-align:left;">
                <input type="submit" name="Submit" class="button" value="<?php echo $VM_LANG->_BUTTON_LOGIN; ?>" />
        </div>
        <?php 
        if( @VM_SHOW_REMEMBER_ME_BOX ) { ?>
	        <br style="clear:both;" />
	        <input type="checkbox" name="remember" id="remember_login" value="yes" checked="checked" />
	        <label for="remember_login"><?php echo $VM_LANG->_REMEMBER_ME ?></label>
	       <?php
        }
        else {
        	echo '<input type="hidden" name="remember" value="yes" />';
        }
        ?>
  	</div>
  
  	<input type="hidden" name="op2" value="login" />
  
  	<input type="hidden" name="lang" value="<?php echo $mosConfig_lang; ?>" />
  	<input type="hidden" name="return" value="<?php echo $return ?>" />
  	<?php
  	// used for spoof hardening
	$validate = vmSpoofValue(1);
	?>
	<input type="hidden" name="<?php echo $validate; ?>" value="1" />
</form>

