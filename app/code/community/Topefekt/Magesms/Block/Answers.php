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
 class Topefekt_Magesms_Block_Answers extends Mage_Adminhtml_Block_Widget_Grid_Container { public function __construct() { $this->_controller = 'answers'; $this->_blockGroup = 'magesms'; $this->_headerText = $this->__('SMS Answers'); parent::__construct(); $this->_removeButton('add'); } public function getFilterUrl() { $this->getRequest()->setParam('filter', null); return $this->getUrl('*/*/filter', array('_current' => true)); } public function getHeaderHtml() { return '<h3 class="' . $this->getHeaderCssClass() . '">' . $this->getHeaderText() . '</h3><div style="clear: both">'. $this->__('SMS answer from customer is displayed only when customer receives SMS from your shop with SMS sender type „System number“ and customer replies using his own mobile phone.'). '</div>'; } public function getHeaderWidth() { return 'width: 100%'; } } 