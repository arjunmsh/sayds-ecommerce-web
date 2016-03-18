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
class Topefekt_Magesms_MarketingController extends Mage_Core_Controller_Front_Action { public function indexAction() { $i21e55df616c305955791876c1eb4da83448beba2 = Mage::getSingleton('customer/session')->getCustomer(); $i21e55df616c305955791876c1eb4da83448beba2->setMagesmsCustomerMarketing(!$i21e55df616c305955791876c1eb4da83448beba2->getMagesmsCustomerMarketing()); $i21e55df616c305955791876c1eb4da83448beba2->save(); Mage::getSingleton('core/session')->addSuccess(Mage::helper('magesms')->__('Marketing SMS').Mage::helper('magesms')->__(' was saved.')); $this->_redirectReferer(); } }