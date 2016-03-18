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
class Topefekt_Magesms_Model_Marketing_Filter_Product extends Varien_Object { public $filter; public function __construct() { $this->filter = array( 'title' => Mage::helper('magesms')->__('Product'), 'type' => 'input', 'name' => 'product', 'color' => '#77aacc', ); } public function getFilter($iff7e46827cbb6547116c592bf800f4687428abf9, $i2d8fb6b6f17ec9aa17899ea311cc26bc493cd9a2) { $i717aafa07eeca1a7c0f40cc18a0eb90e0984de3e = array(); foreach($i2d8fb6b6f17ec9aa17899ea311cc26bc493cd9a2 as $iba20acc78644ac0e9cd48ea35d8ad03b058f6b5a) { if ($iba20acc78644ac0e9cd48ea35d8ad03b058f6b5a instanceof $this) $i717aafa07eeca1a7c0f40cc18a0eb90e0984de3e[] = (int)$iba20acc78644ac0e9cd48ea35d8ad03b058f6b5a->getValue(); } if (count($i717aafa07eeca1a7c0f40cc18a0eb90e0984de3e)) { if (strpos($iff7e46827cbb6547116c592bf800f4687428abf9->getSelect(), $iff7e46827cbb6547116c592bf800f4687428abf9->getTable('sales/order_grid')) === false) $iff7e46827cbb6547116c592bf800f4687428abf9->joinTable('sales/order_grid', 'customer_id=entity_id', array('entity_id')); $iff7e46827cbb6547116c592bf800f4687428abf9->getSelect() ->join( array('soi' => $iff7e46827cbb6547116c592bf800f4687428abf9->getTable('sales/order_item')), 'soi.`order_id` = `'.$iff7e46827cbb6547116c592bf800f4687428abf9->getTable('sales/order_grid').'`.`entity_id`' ); $iff7e46827cbb6547116c592bf800f4687428abf9->getSelect() ->where('soi.`product_id` IN ('.implode(', ', $i717aafa07eeca1a7c0f40cc18a0eb90e0984de3e).')'); $iff7e46827cbb6547116c592bf800f4687428abf9->getSelect()->group('e.entity_id'); } return $iff7e46827cbb6547116c592bf800f4687428abf9; } } 