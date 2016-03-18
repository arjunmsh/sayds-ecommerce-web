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
class Topefekt_Magesms_CartController extends Mage_Core_Controller_Front_Action { public function indexAction() { $this->loadLayout(); $this->renderLayout(); } public function addProductAction() { Mage::helper('magesms')->addOptoutProduct(); $this->_redirectReferer(); } public function removeProductAction() { Mage::helper('magesms')->removeOptoutProduct(); $this->_redirectReferer(); } }