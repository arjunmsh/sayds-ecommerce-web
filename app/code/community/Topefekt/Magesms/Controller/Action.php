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
 class Topefekt_Magesms_Controller_Action extends Mage_Adminhtml_Controller_Action { public $profile; protected $_filterData; protected function _construct() { $this->profile = Mage::getSingleton('magesms/smsprofile'); } public function preDispatch() { parent::preDispatch(); if (!$this->profile->user->getUser()) { $this->setFlag('', self::FLAG_NO_DISPATCH, true); if (!empty($this->profile->_error)) { Mage::getSingleton('adminhtml/session')->addError(Mage::helper('magesms')->__($this->profile->_error)); } else { Mage::getSingleton('adminhtml/session')->addSuccess(Mage::helper('magesms')->__('Not registered yet? Create account now!')); } $this->_redirect('*/magesms_profile'); } else { $i5b3aa260bb208b1f4c5808ffd6ec3b60c98869aa = Mage::helper('adminhtml')->prepareFilterString($this->getRequest()->getParam('filter')); $i5b3aa260bb208b1f4c5808ffd6ec3b60c98869aa = $this->_filterDates($i5b3aa260bb208b1f4c5808ffd6ec3b60c98869aa, array('reg_from', 'reg_to', 'birth_from', 'birth_to')); $ia8a35a47a8e61218e15d1a33dac64bdc2449c01a = new Varien_Object(); foreach ($i5b3aa260bb208b1f4c5808ffd6ec3b60c98869aa as $i670253c23c6fcba76bc4256a88fdd8fbc1041039 => $if2eee0665f163a28f4adcfe84e3fc666bf1bcd89) { if (!empty($if2eee0665f163a28f4adcfe84e3fc666bf1bcd89) || is_numeric($if2eee0665f163a28f4adcfe84e3fc666bf1bcd89)) { $ia8a35a47a8e61218e15d1a33dac64bdc2449c01a->setData($i670253c23c6fcba76bc4256a88fdd8fbc1041039, $if2eee0665f163a28f4adcfe84e3fc666bf1bcd89); } } $this->_filterData = $ia8a35a47a8e61218e15d1a33dac64bdc2449c01a; } return $this; } public function getBlockCustomer() { $i21e55df616c305955791876c1eb4da83448beba2 = $this->getLayout()->createBlock('magesms/customer_grid'); return $i21e55df616c305955791876c1eb4da83448beba2; } protected function _initAction() { $this->loadLayout() ->_title(Mage::helper('magesms')->__('MageSMS')) ; $this->getLayout()->getBlock('head') ->addCss('css/topefekt/magesms/stylesheet.css') ->addJs('topefekt/functions.js') ; if ($i458778f43fe9c6d565ec84d06bb5438f060a17d8 = $this->getLayout()->getBlock('head')) { $i458778f43fe9c6d565ec84d06bb5438f060a17d8->addItem('js', 'prototype/window.js') ->addItem('js_css', 'prototype/windows/themes/default.css') ->addCss('lib/prototype/windows/themes/magento.css') ->addItem('js', 'mage/adminhtml/variables.js'); } return $this; } } 