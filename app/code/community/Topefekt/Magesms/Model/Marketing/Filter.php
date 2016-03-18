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
class Topefekt_Magesms_Model_Marketing_Filter extends Mage_Core_Model_Abstract { static protected $_websites; static public $colors = array( "#ed6502", "#229922", "#999922", "#229999", "#999999", "#885566", "#9933aa", "#19aba3", "#dcca00", "#96c8a3", ); protected function _construct() { $this->_init( 'magesms/marketing_filter' ); } public function getWebsites() { if (!empty(self::$_websites)) return self::$_websites; self::$_websites = Mage::app()->getWebsites(); $ibcdf76f8c9ddc330c79f805116a8bb146c43749d = 0; foreach(self::$_websites as $ibcdf76f8c9ddc330c79f805116a8bb146c43749d9fdb3b1e2e6984ebdd1220ec199279013c5483fc) { if ($ibcdf76f8c9ddc330c79f805116a8bb146c43749d == count(self::$colors)) $ibcdf76f8c9ddc330c79f805116a8bb146c43749d = 0; $ibcdf76f8c9ddc330c79f805116a8bb146c43749d9fdb3b1e2e6984ebdd1220ec199279013c5483fc->setColorWebsite(self::$colors[$ibcdf76f8c9ddc330c79f805116a8bb146c43749d]); $ibcdf76f8c9ddc330c79f805116a8bb146c43749d++; } return self::$_websites; } public function getColorWebsite($ibcdf76f8c9ddc330c79f805116a8bb146c43749d7d411c0cc32cdb65ec82b9e8d79aa996946f5538) { foreach($this->getWebsites() as $ibcdf76f8c9ddc330c79f805116a8bb146c43749d9fdb3b1e2e6984ebdd1220ec199279013c5483fc) if ($ibcdf76f8c9ddc330c79f805116a8bb146c43749d9fdb3b1e2e6984ebdd1220ec199279013c5483fc->getId() == $ibcdf76f8c9ddc330c79f805116a8bb146c43749d7d411c0cc32cdb65ec82b9e8d79aa996946f5538) return $ibcdf76f8c9ddc330c79f805116a8bb146c43749d9fdb3b1e2e6984ebdd1220ec199279013c5483fc->getColorWebsite(); } } 