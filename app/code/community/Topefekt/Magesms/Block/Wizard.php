<?php
/**
 * Mage SMS - SMS notification & SMS marketing
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the BSD 3-Clause License
 * It is available through the world-wide-web at this URL:
 * http://opensource.org/licenses/BSD-3-Clause
 *
 * @category    TOPefekt
 * @package     TOPefekt_Magesms
 * @copyright   Copyright (c) 2012-2015 TOPefekt s.r.o. (http://www.mage-sms.com)
 * @license     http://opensource.org/licenses/BSD-3-Clause
 */
 class Topefekt_Magesms_Block_Wizard extends Mage_Adminhtml_Block_Widget_Grid_Container { protected function _prepareLayout() { Mage_Adminhtml_Block_Widget_Container::_prepareLayout(); } public function __construct() { $this->_controller = 'wizard'; $this->_headerText = Mage::helper('magesms')->__('SMS Settings'); parent::__construct(); } } 