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
class Topefekt_Magesms_Model_Marketing_Filter_Website extends Varien_Object { public $filter; public function __construct() { $this->filter = array( 'title' => Mage::helper('magesms')->__('Store'), 'firstItem' => Mage::helper('magesms')->__('All stores'), 'type' => 'select', 'name' => 'website', 'color' => '#8880aa', ); } public function getValues() { $if71cbed623a99cd5a1032d4d3388bfd486053db2 = array('' => $this->filter['firstItem']); foreach (Mage::app()->getWebsites($this->_isAdminScopeAllowed) as $i9fdb3b1e2e6984ebdd1220ec199279013c5483fc) { $if71cbed623a99cd5a1032d4d3388bfd486053db2[$i9fdb3b1e2e6984ebdd1220ec199279013c5483fc->getId()] = $i9fdb3b1e2e6984ebdd1220ec199279013c5483fc->getDataUsingMethod('name'); } return $if71cbed623a99cd5a1032d4d3388bfd486053db2; } public function getFilter($iff7e46827cbb6547116c592bf800f4687428abf9, $i2d8fb6b6f17ec9aa17899ea311cc26bc493cd9a2) { $i717aafa07eeca1a7c0f40cc18a0eb90e0984de3e = array(); foreach($i2d8fb6b6f17ec9aa17899ea311cc26bc493cd9a2 as $iba20acc78644ac0e9cd48ea35d8ad03b058f6b5a) { if ($iba20acc78644ac0e9cd48ea35d8ad03b058f6b5a instanceof $this) $i717aafa07eeca1a7c0f40cc18a0eb90e0984de3e[] = array($iba20acc78644ac0e9cd48ea35d8ad03b058f6b5a->getValue()); } if (count($i717aafa07eeca1a7c0f40cc18a0eb90e0984de3e)) { $iff7e46827cbb6547116c592bf800f4687428abf9->addFieldToFilter('website_id', $i717aafa07eeca1a7c0f40cc18a0eb90e0984de3e); } return $iff7e46827cbb6547116c592bf800f4687428abf9; } } 