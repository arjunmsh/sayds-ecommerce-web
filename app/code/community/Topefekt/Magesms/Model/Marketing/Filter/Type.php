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
class Topefekt_Magesms_Model_Marketing_Filter_Type extends Varien_Object { public $filter; public function __construct() { $this->filter = array( 'title' => Mage::helper('magesms')->__('Type'), 'firstItem' => Mage::helper('magesms')->__('All customers'), 'type' => 'select', 'name' => 'type', 'color' => '#9acd32', ); } public function getValues() { return array( '' => $this->filter['firstItem'], '1' => Mage::helper('magesms')->__('company customers'), '2' => Mage::helper('magesms')->__('private customers') ); } public function getFilter($iff7e46827cbb6547116c592bf800f4687428abf9, $i2d8fb6b6f17ec9aa17899ea311cc26bc493cd9a2) { $i717aafa07eeca1a7c0f40cc18a0eb90e0984de3e = array(); foreach($i2d8fb6b6f17ec9aa17899ea311cc26bc493cd9a2 as $iba20acc78644ac0e9cd48ea35d8ad03b058f6b5a) { if ($iba20acc78644ac0e9cd48ea35d8ad03b058f6b5a instanceof $this) { if ($iba20acc78644ac0e9cd48ea35d8ad03b058f6b5a->getValue() == 1) $i717aafa07eeca1a7c0f40cc18a0eb90e0984de3e[] = array(array('notnull' => true)); if ($iba20acc78644ac0e9cd48ea35d8ad03b058f6b5a->getValue() == 2) $i717aafa07eeca1a7c0f40cc18a0eb90e0984de3e[] = array(array('null' => true)); } } if (count($i717aafa07eeca1a7c0f40cc18a0eb90e0984de3e)) $iff7e46827cbb6547116c592bf800f4687428abf9->joinAttribute('billing_vat_id', 'customer_address/vat_id', 'default_billing', null, 'left') ->addFieldToFilter('billing_vat_id', $i717aafa07eeca1a7c0f40cc18a0eb90e0984de3e); return $iff7e46827cbb6547116c592bf800f4687428abf9; } } 