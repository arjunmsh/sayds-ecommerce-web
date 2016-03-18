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
 class Topefekt_Magesms_Model_Routes_Alternative extends Mage_Core_Model_Abstract { protected function _construct() { $this->_init('magesms/routes_alternative'); } public function validate() { $ieeea3fa58a065e13acdb42aab551831a98e9444c = array(); $i0d09b2a4f282150bf47b02f9f3d82586fe313844 = Mage::helper('magesms'); if (!Zend_Validate::is($this->getData('textsender'), 'NotEmpty')) { $ieeea3fa58a065e13acdb42aab551831a98e9444c[] = $i0d09b2a4f282150bf47b02f9f3d82586fe313844->__('possible characters: ').'a-z A-Z 0-9 _ .'; } elseif (!Mage::helper('magesms')->isTextSender($this->getData('textsender'))) { $ieeea3fa58a065e13acdb42aab551831a98e9444c[] = $i0d09b2a4f282150bf47b02f9f3d82586fe313844->__('possible characters: ').'a-z A-Z 0-9 _ .'; } if (empty($ieeea3fa58a065e13acdb42aab551831a98e9444c)) { return true; } return $ieeea3fa58a065e13acdb42aab551831a98e9444c; } public function _beforeSave() { $ibdd27a8dd714410289189d318feb96fe6ed8e07f = $this->validate(); if (is_array($ibdd27a8dd714410289189d318feb96fe6ed8e07f) && sizeof($ibdd27a8dd714410289189d318feb96fe6ed8e07f)) { Mage::throwException(implode('<br />', $ibdd27a8dd714410289189d318feb96fe6ed8e07f)); } return parent::_beforeSave(); } } 