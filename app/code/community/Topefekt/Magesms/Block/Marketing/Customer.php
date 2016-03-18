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
 class Topefekt_Magesms_Block_Marketing_Customer extends Mage_Adminhtml_Block_Template { public function __construct($i4361b87b8aae0dab8305e7873d3986285df3ff3d = array()) { parent::__construct($i4361b87b8aae0dab8305e7873d3986285df3ff3d); $this->setTemplate('topefekt/magesms/marketing/customer.phtml'); $this->setWebsites(Mage::getSingleton('magesms/marketing_filter')); } protected function _toHtml() { if ($this->getId()) { return '<div id="magesms-marketing-'.$this->getId().'">'.parent::_toHtml().'</div>'; } return parent::_toHtml(); } public function displayByAlphabet() { $i39d2c3f69cb73b5684f101b504090c13c5174bc4 = array(); foreach($this->getCollection() as $i21e55df616c305955791876c1eb4da83448beba2) { $i47b2a41e4081b6f8d8381f411087dcd7042bfb53 = mb_strtoupper(mb_substr(trim($i21e55df616c305955791876c1eb4da83448beba2->lastname), 0, 1, 'utf-8')); if (empty($i39d2c3f69cb73b5684f101b504090c13c5174bc4[$i47b2a41e4081b6f8d8381f411087dcd7042bfb53])) $i39d2c3f69cb73b5684f101b504090c13c5174bc4[$i47b2a41e4081b6f8d8381f411087dcd7042bfb53] = new Varien_Data_Collection(); $i39d2c3f69cb73b5684f101b504090c13c5174bc4[$i47b2a41e4081b6f8d8381f411087dcd7042bfb53]->addItem($i21e55df616c305955791876c1eb4da83448beba2); } ksort($i39d2c3f69cb73b5684f101b504090c13c5174bc4); return $i39d2c3f69cb73b5684f101b504090c13c5174bc4; } } 