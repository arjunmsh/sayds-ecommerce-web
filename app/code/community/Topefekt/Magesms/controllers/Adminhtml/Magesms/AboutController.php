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
 class Topefekt_Magesms_Adminhtml_Magesms_AboutController extends Topefekt_Magesms_Controller_Action { public function preDispatch() { return Mage_Adminhtml_Controller_Action::preDispatch(); } public function indexAction() { $this->_initAction(); $i8ee45e0018a32fb1a855b82624506e35789cc4d2 = $this->getLayout()->createBlock( 'Mage_Core_Block_Template', 'my_block_name_here', array('template' => 'topefekt/magesms/about.phtml') ); $this->getLayout()->getBlock('content')->append($i8ee45e0018a32fb1a855b82624506e35789cc4d2); $this->renderLayout(); } protected function _initAction() { parent::_initAction(); $this->_setActiveMenu('magesms/about') ->_title(Mage::helper('magesms')->__('About')); ; return $this; } protected function _isAllowed() { return Mage::getSingleton('admin/session')->isAllowed('magesms/about'); } } 