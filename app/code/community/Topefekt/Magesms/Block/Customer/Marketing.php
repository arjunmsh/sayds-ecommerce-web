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
 class Topefekt_Magesms_Block_Customer_Marketing extends Mage_Core_Block_Template { protected function _construct() { $i4f9132e504066d4a445dfdf8eab82004739a54d4 = Mage::helper('magesms')->isActive() && Mage::getStoreConfig('magesms/optout/marketing'); $this->setOptoutMarketingActive($i4f9132e504066d4a445dfdf8eab82004739a54d4); if ($i4f9132e504066d4a445dfdf8eab82004739a54d4) { $i21e55df616c305955791876c1eb4da83448beba2 = Mage::getSingleton('customer/session')->getCustomer(); $this->setOptoutMarketing($i21e55df616c305955791876c1eb4da83448beba2->getMagesmsCustomerMarketing()); } parent::_construct(); } } 