<?php
defined( '_VALID_MOS' ) or die( 'Direct Access to this location is not allowed.' ); 
/**
* @version $Id: admin.country_state_form.php,v 1.2 2005/09/25 18:49:29 soeren_nb Exp $
* @package mambo-phpShop
* @subpackage HTML
* @copyright (C) 2005 Soeren Eberhardt
*
* @license http://www.gnu.org/copyleft/gpl.html GNU/GPL
* mambo-phpShop is Free Software.
* mambo-phpShop comes with absolute no warranty.
*
* www.mambo-phpshop.net
*/
mm_showMyFileName( __FILE__ );

$state_id = mosGetParam( $_REQUEST, 'state_id', null );
$country_id = mosGetParam( $_REQUEST, 'country_id', null );
if( is_array( $country_id ))
	$country_id = $country_id[0];
	
if( !empty( $state_id )) {
  $q = "SELECT * FROM #__pshop_state WHERE state_id = '$state_id' AND country_id='$country_id'";
  $db->query($q);
  $db->next_record();
}
//First create the object and let it print a form heading
$formObj = &new formFactory(  );
//Then Start the form
$formObj->startForm();
?>
<table class="adminform">
    <tr> 
      <td colspan="2">&nbsp;</td>
    </tr>
    <tr> 
      <td width="24%" align="right"><?php echo $PHPSHOP_LANG->_PHPSHOP_STATE_LIST_NAME ?>:</td>
      <td width="76%"> 
        <input type="text" class="inputbox" name="state_name" value="<?php $db->sp("state_name") ?>" />
      </td>
    </tr>
    <tr> 
      <td width="24%" align="right"><?php echo $PHPSHOP_LANG->_PHPSHOP_STATE_LIST_2_CODE ?>:</td>
      <td width="76%"> 
        <input type="text" class="inputbox" name="state_2_code" value="<?php $db->sp("state_2_code") ?>" />
      </td>
    </tr>
        <tr> 
      <td width="24%" align="right"><?php echo $PHPSHOP_LANG->_PHPSHOP_STATE_LIST_3_CODE ?>:</td>
      <td width="76%"> 
        <input type="text" class="inputbox" name="state_3_code" value="<?php $db->sp("state_3_code") ?>" />
      </td>
    </tr>
    
  </table>  
<?php
  
// Add necessary hidden fields
$formObj->hiddenField( 'state_id', $state_id );
$formObj->hiddenField( 'country_id', $country_id );

$funcname = !empty($state_id) ? "stateUpdate" : "stateAdd";

// Write your form with mixed tags and text fields
// and finally close the form:
$formObj->finishForm( $funcname, 'admin.country_state_list', $option );
?>