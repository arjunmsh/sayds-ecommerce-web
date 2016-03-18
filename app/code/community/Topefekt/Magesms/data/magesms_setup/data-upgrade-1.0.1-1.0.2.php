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
 $iddb18dc4afa6663cf07a52c741943ff87cbe3896 = $this; $iddb18dc4afa6663cf07a52c741943ff87cbe3896->startSetup(); $i195899c9895b81b9bc75dba762c949638a6f36dd = Mage::getModel('magesms/country')->getCollection()->addFieldToFilter('name', array('like' => 'Cameroon')); if (!$i195899c9895b81b9bc75dba762c949638a6f36dd->count()) { $iddb18dc4afa6663cf07a52c741943ff87cbe3896->run("INSERT INTO {$this->getTable('magesms_country')} (`name`, `vat`, `currency`) VALUES ('Cameroon', 0, 'EUR');"); } $i811abf08a05f6439fe133c7d48adeb58f4cd090e = Mage::getModel('magesms/country_area')->getCollection()->addFieldToFilter('area', 237); if (!$i811abf08a05f6439fe133c7d48adeb58f4cd090e->count()) { Mage::getModel('magesms/country_area')->setCountryName('Cameroon')->setArea(237)->save(); } $i0367352fbb593d8cb942a7be1f36e67a806ea12e = Mage::getModel('magesms/country_lang')->getCollection()->addFieldToFilter('country_name', array('like' => 'Cameroon')); if (!$i0367352fbb593d8cb942a7be1f36e67a806ea12e->count()) { Mage::getModel('magesms/country_lang')->setCountryName('Cameroon')->setLang('en-cm')->setIso2('en')->save(); Mage::getModel('magesms/country_lang')->setCountryName('Cameroon')->setLang('fr-cm')->setIso2('en')->save(); } $iddb18dc4afa6663cf07a52c741943ff87cbe3896->endSetup(); 