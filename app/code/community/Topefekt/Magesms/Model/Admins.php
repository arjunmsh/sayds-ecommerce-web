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
 class Topefekt_Magesms_Model_Admins extends Mage_Core_Model_Abstract { public function _construct() { parent::_construct(); $this->_init('magesms/admins'); } public function validate() { $ieeea3fa58a065e13acdb42aab551831a98e9444c = array(); $i0d09b2a4f282150bf47b02f9f3d82586fe313844 = Mage::helper('magesms'); if (!Zend_Validate::is($this->getName(), 'NotEmpty')) { $ieeea3fa58a065e13acdb42aab551831a98e9444c[] = $i0d09b2a4f282150bf47b02f9f3d82586fe313844->__('Invalid name'); } if (!Zend_Validate::is($this->getNumber(), 'NotEmpty')) { $ieeea3fa58a065e13acdb42aab551831a98e9444c[] = $i0d09b2a4f282150bf47b02f9f3d82586fe313844->__('Invalid number'); } elseif (!Mage::helper('magesms')->isPhoneNumber($this->getNumber())) { $ieeea3fa58a065e13acdb42aab551831a98e9444c[] = $i0d09b2a4f282150bf47b02f9f3d82586fe313844->__('Invalid number'); } if (empty($ieeea3fa58a065e13acdb42aab551831a98e9444c)) { return true; } return $ieeea3fa58a065e13acdb42aab551831a98e9444c; } public function _afterDelete() { if ($this->getId()) { $if739aceffec69fa2733946a3d319defaa354082d = Mage::getModel('magesms/hooks_admins') ->getCollection() ->addFieldToFilter('admin_id', $this->getId()); foreach ($if739aceffec69fa2733946a3d319defaa354082d as $i42ee48f418943c9662de0976069476c7dc8f620d) $i42ee48f418943c9662de0976069476c7dc8f620d->delete(); } return parent::_afterDelete(); } }