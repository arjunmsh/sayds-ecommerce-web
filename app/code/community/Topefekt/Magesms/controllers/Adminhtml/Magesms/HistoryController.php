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
 class Topefekt_Magesms_Adminhtml_Magesms_HistoryController extends Topefekt_Magesms_Controller_Action { public function indexAction() { $this->_initAction(); $i8ee45e0018a32fb1a855b82624506e35789cc4d2 = $this->getLayout()->createBlock( 'Topefekt_Magesms_Block_Template', 'my_block_name_here', array('template' => 'topefekt/magesms/history.phtml') ); $this->getLayout()->getBlock('content')->append($i8ee45e0018a32fb1a855b82624506e35789cc4d2); $this->renderLayout(); return $this; } public function filterAction() { $iba20acc78644ac0e9cd48ea35d8ad03b058f6b5a = $this->getRequest()->getParams(); unset($iba20acc78644ac0e9cd48ea35d8ad03b058f6b5a['form_key']); $this->_redirect('*/*/', $iba20acc78644ac0e9cd48ea35d8ad03b058f6b5a); } public function deleteAction() { $i7af9c0bf5c8f0878a0f7c5463d75397834eda9fa = Mage::getSingleton('core/resource')->getTableName('magesms/smshistory'); Mage::getSingleton('core/resource')->getConnection('core_write')->query("TRUNCATE TABLE `$i7af9c0bf5c8f0878a0f7c5463d75397834eda9fa`"); Mage::getSingleton('adminhtml/session')->addSuccess(Mage::helper('magesms')->__('SMS history was deleted.')); $this->_redirect('*/*/'); } protected function _initAction() { parent::_initAction(); $this->_setActiveMenu('magesms/history') ->_title(Mage::helper('magesms')->__('SMS History')) ; return $this; } protected function _isAllowed() { return Mage::getSingleton('admin/session')->isAllowed('magesms/history'); } } 