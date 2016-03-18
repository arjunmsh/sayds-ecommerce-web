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
 $iddb18dc4afa6663cf07a52c741943ff87cbe3896 = $this; $iddb18dc4afa6663cf07a52c741943ff87cbe3896->startSetup(); $i037b855bc01175f2c77d5c3e19eda9a0003feff4 = Mage::getModel('magesms/country')->getCollection()->addFieldToFilter('name', 'Ivory Coast'); if (!$i037b855bc01175f2c77d5c3e19eda9a0003feff4->count()) { $iddb18dc4afa6663cf07a52c741943ff87cbe3896->run("
		INSERT INTO `{$this->getTable('magesms_country')}`
			(`name`, `vat`, `currency`) VALUES ('Ivory Coast', 0, 'EUR')
	"); } $i7492a7ab99a6ff1e0ae253366480ecb40a550224 = Mage::getModel('magesms/country_area')->getCollection()->addFieldToFilter('area', 225)->addFieldToFilter('country_name', 'Ivory Coast'); if (!$i7492a7ab99a6ff1e0ae253366480ecb40a550224->count()) { Mage::getModel('magesms/country_area')->setArea(225)->setCountryName('Ivory Coast')->save(); } $i6e95f7221dac95bab38883c12b6d615a9933e323 = Mage::getModel('magesms/country_lang')->getCollection()->addFieldToFilter('country_name', 'Ivory Coast')->addFieldToFilter('iso2', 'fr'); if (!$i6e95f7221dac95bab38883c12b6d615a9933e323->count()) { Mage::getModel('magesms/country_lang')->setCountryName('Ivory Coast')->setIso2('fr')->setLang('fr')->save(); } $iddb18dc4afa6663cf07a52c741943ff87cbe3896->endSetup(); 