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
class Topefekt_Magesms_Block_Magesms extends Mage_Core_Block_Template { public function __construct() { parent::__construct(); $iff7e46827cbb6547116c592bf800f4687428abf9 = Mage::getModel('magesms/smshistory')->getCollection(); $this->setCollection($iff7e46827cbb6547116c592bf800f4687428abf9); } protected function _prepareLayout() { parent::_prepareLayout(); $iff0690cb773a7fb817f520d36f525df413577228 = $this->getLayout()->createBlock('page/html_pager', 'custom.pager'); $iff0690cb773a7fb817f520d36f525df413577228->setAvailableLimit(array(2=>2,5=>5,10=>10,20=>20,'all'=>'all')); $iff0690cb773a7fb817f520d36f525df413577228->setCollection($this->getCollection()); $this->setChild('pager', $iff0690cb773a7fb817f520d36f525df413577228); $this->getCollection()->load(); return $this; } public function getPagerHtml() { return $this->getChildHtml('pager'); } }