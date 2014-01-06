<?php
/**
 *
 * Paypal  payment plugin
 *
 * @author Jeremy Magne
 * @version $Id: paypal.php 7217 2013-09-18 13:42:54Z alatak $
 * @package VirtueMart
 * @subpackage payment
 * ${PHING.VM.COPYRIGHT}
 * @license http://www.gnu.org/copyleft/gpl.html GNU/GPL, see LICENSE.php
 * VirtueMart is free software. This version may have been modified pursuant
 * to the GNU General Public License, and as distributed it includes or
 * is derivative of works licensed under the GNU General Public License or
 * other free or open source software licenses.
 * See /administrator/components/com_virtuemart/COPYRIGHT.php for copyright notices and details.
 *
 * http://virtuemart.net
 */


defined ('_JEXEC') or die();

class JFormFieldTerm extends JFormFieldList {

	/**
	 * Element name
	 *
	 * @access    protected
	 * @var        string
	 */
	protected $type = 'Term';

	protected function getOptions(){

	$class = $this->element['class'] ? ' class="' . (string) $this->element['class'] . '"' : '';
		$max = $this->element['max'] ? intval($this->element['max']) : 52;

	$options = array();
		for($i=1; $i<=$max; $i++) {
			$options[] = JHTML::_('select.option', $i, $i);
		}

		//return JHTML::_ ('select.genericlist', $options, $control_name . '[' . $name . ']', $class, 'value', 'text', $value, $control_name . $name);
	return JHtml::_('select.genericlist', $options, $this->name, trim($class), 'value', 'text', $this->value, $this->id);

}

}