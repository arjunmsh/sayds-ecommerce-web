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
$iddb18dc4afa6663cf07a52c741943ff87cbe3896 = $this; $iddb18dc4afa6663cf07a52c741943ff87cbe3896->startSetup(); $i4f3b75abfeef0eea3f3858aa24b2cf7c9edfa6ce = Mage::getModel('magesms/maps')->getCollection()->addFieldToFilter('area', 55)->addFieldToFilter('number', 11); if (!$i4f3b75abfeef0eea3f3858aa24b2cf7c9edfa6ce->count()) { Mage::getModel('magesms/maps')->setArea(55)->setNumber(11)->save(); } $iddb18dc4afa6663cf07a52c741943ff87cbe3896->run("
UPDATE `{$this->getTable('magesms_hooks')}` SET `notice` = '{customer_id}, {customer_email}, {customer_password}, {customer_lastname}, {customer_firstname}<br /><br />{shop_domain}, {shop_name}, {shop_email}, {shop_phone}' WHERE `name` LIKE 'customerRegisterSuccess';
"); $i0933475b5bd80561a9f50282fd9eb0b8345cec4b = Mage::getModel('magesms/variables')->getCollection()->addFieldToFilter('name', 'customer_password'); if (!$i0933475b5bd80561a9f50282fd9eb0b8345cec4b->count()) { Mage::getModel('magesms/variables')->setName('customer_password')->setTemplate('********')->setTranslate(0)->save(); } $iddb18dc4afa6663cf07a52c741943ff87cbe3896->endSetup(); 