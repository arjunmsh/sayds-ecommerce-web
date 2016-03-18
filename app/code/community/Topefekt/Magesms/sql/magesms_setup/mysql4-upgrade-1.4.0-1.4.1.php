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
 $iddb18dc4afa6663cf07a52c741943ff87cbe3896 = $this; $iddb18dc4afa6663cf07a52c741943ff87cbe3896->startSetup(); $i4f3b75abfeef0eea3f3858aa24b2cf7c9edfa6ce = Mage::getModel('magesms/maps')->getCollection()->addFieldToFilter('area', 51)->addFieldToFilter('number', 9); if (!$i4f3b75abfeef0eea3f3858aa24b2cf7c9edfa6ce->count()) { Mage::getModel('magesms/maps')->setArea(51)->setNumber(9)->save(); } $i4f3b75abfeef0eea3f3858aa24b2cf7c9edfa6ce = Mage::getModel('magesms/maps')->getCollection()->addFieldToFilter('area', 51)->addFieldToFilter('number', 10); if (!$i4f3b75abfeef0eea3f3858aa24b2cf7c9edfa6ce->count()) { Mage::getModel('magesms/maps')->setArea(51)->setNumber(10)->save(); } $i4f3b75abfeef0eea3f3858aa24b2cf7c9edfa6ce = Mage::getModel('magesms/maps')->getCollection()->addFieldToFilter('area', 51)->addFieldToFilter('number', 11); foreach ($i4f3b75abfeef0eea3f3858aa24b2cf7c9edfa6ce as $iea2646e1bc9c30628936676e18f22d4a02f4a44a) { $iea2646e1bc9c30628936676e18f22d4a02f4a44a->delete(); } $iddb18dc4afa6663cf07a52c741943ff87cbe3896->endSetup(); 