<?php
/**
 * Report helper class
 *
 * This class provides some functions that are used by reports in VirtueMart shop.
 *
 * @package	VirtueMart
 * @subpackage Helpers
 * @author Wicksj
 * @copyright Copyright (c) 2004-2008 Soeren Eberhardt-Biermann, 2009 VirtueMart Team. All rights reserved.
 */

class ReportFunctions {

	/**
	 * @var global database object
	 */
	private $_db = null;


	/**
	 * Contructor
	 */
	public function __construct(){

		$this->_db = JFactory::getDBO();
	}

	public function getDatePresets(){
		// set date presets
		$curDate   = JFactory::getDate();
		$curDate   = $curDate->toUnix();
		$curDate   = mktime(0, 0, 0, date('n', $curDate), date('j', $curDate), date('Y', $curDate));
		$monday = (date('w', $curDate) == 1) ? $curDate : strtotime('last Monday', $curDate);
		$date_presets['last90'] = array(
			'name'  => JText::_('COM_VIRTUEMART_REPORT_PERIOD_LAST90'),
			'from'  => date('Y-m-d', strtotime('-89 day', $curDate)),
			'until' => date('Y-m-d', $curDate));
		$date_presets['last60'] = array(
			'name'  => JText::_('COM_VIRTUEMART_REPORT_PERIOD_LAST60'),
			'from'  => date('Y-m-d', strtotime('-59 day', $curDate)),
			'until' => date('Y-m-d', $curDate));
		$date_presets['last30'] = array(
			'name'  => JText::_('COM_VIRTUEMART_REPORT_PERIOD_LAST30'),
			'from'  => date('Y-m-d', strtotime('-29 day', $curDate)),
			'until' => date('Y-m-d', $curDate));
		$date_presets['today'] = array(
			'name'  => JText::_('COM_VIRTUEMART_REPORT_PERIOD_TODAY'),
			'from'  => date('Y-m-d', $curDate),
			'until' => date('Y-m-d', $curDate));
		$date_presets['this-week'] = array(
			'name'  => JText::_('COM_VIRTUEMART_REPORT_PERIOD_THIS_WEEK'),
			'from'  => date('Y-m-d', $monday),
			'until' => date('Y-m-d', strtotime('+6 day', $monday)));
		$date_presets['this-month'] = array(
			'name'  => JText::_('COM_VIRTUEMART_REPORT_PERIOD_THIS_MONTH'),
			'from'  => date('Y-m-d', mktime(0, 0, 0, date('n', $curDate), 1, date('Y', $curDate))),
			'until' => date('Y-m-d', mktime(0, 0, 0, date('n', $curDate)+1, 0, date('Y', $curDate))));
		$date_presets['this-year'] = array(
			'name'  => JText::_('COM_VIRTUEMART_REPORT_PERIOD_THIS_YEAR'),
			'from'  => date('Y-m-d', mktime(0, 0, 0, 1, 1, date('Y', $curDate))),
			'until' => date('Y-m-d', mktime(0, 0, 0, 12, 31, date('Y', $curDate))));

			return $date_presets;

	}

	public function renderDateSelectList($presets, $from_period, $until_period){
		// simpledate select
		$select  = '';
		$options = array(JHTML::_('select.option', '', '- '.JText::_('COM_VIRTUEMART_REPORT_SET_PERIOD').' -', 'text', 'value'));
		foreach ($presets as $name => $value) {
			$options[] = JHTML::_('select.option', $name, JText::_($value['name']), 'text', 'value');
			if ($value['from'] == $from_period && $value['until'] == $until_period) {
				$select = $name;
			}
		}
		$listHTML = JHTML::_('select.genericlist', $options, 'period', 'class="inputbox" size="1"', 'text', 'value', $select);
		return $listHTML;
	}

}

//pure php no tag