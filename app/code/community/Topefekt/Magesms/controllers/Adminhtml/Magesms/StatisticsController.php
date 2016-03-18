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
 class Topefekt_Magesms_Adminhtml_Magesms_StatisticsController extends Topefekt_Magesms_Controller_Action { public function indexAction() { $this->_initAction(); $iea2d876101fbc4dc03450ed5474bbd8a6fb905a2 = $this->getRequest()->getParams(); if (!empty($iea2d876101fbc4dc03450ed5474bbd8a6fb905a2['datefrom'])) $iea2d876101fbc4dc03450ed5474bbd8a6fb905a2['datefrom'] = base64_decode($iea2d876101fbc4dc03450ed5474bbd8a6fb905a2['datefrom']); if (!empty($iea2d876101fbc4dc03450ed5474bbd8a6fb905a2['dateto'])) $iea2d876101fbc4dc03450ed5474bbd8a6fb905a2['dateto'] = base64_decode($iea2d876101fbc4dc03450ed5474bbd8a6fb905a2['dateto']); $ia8a35a47a8e61218e15d1a33dac64bdc2449c01a = new Varien_Object(); foreach ($iea2d876101fbc4dc03450ed5474bbd8a6fb905a2 as $i670253c23c6fcba76bc4256a88fdd8fbc1041039 => $if2eee0665f163a28f4adcfe84e3fc666bf1bcd89) { if (!empty($if2eee0665f163a28f4adcfe84e3fc666bf1bcd89)) $ia8a35a47a8e61218e15d1a33dac64bdc2449c01a->setData($i670253c23c6fcba76bc4256a88fdd8fbc1041039, $if2eee0665f163a28f4adcfe84e3fc666bf1bcd89); } $i8ee45e0018a32fb1a855b82624506e35789cc4d2 = $this->getLayout()->createBlock( 'Topefekt_Magesms_Block_Template', 'my_block_name_here', array('template' => 'topefekt/magesms/statistics.phtml') ); $i8ee45e0018a32fb1a855b82624506e35789cc4d2->setFilterData($ia8a35a47a8e61218e15d1a33dac64bdc2449c01a); $this->getLayout()->getBlock('content')->append($i8ee45e0018a32fb1a855b82624506e35789cc4d2); $this->renderLayout(); return $this; } public function filterAction() { $iba20acc78644ac0e9cd48ea35d8ad03b058f6b5a = $this->getRequest()->getParams(); unset($iba20acc78644ac0e9cd48ea35d8ad03b058f6b5a['form_key']); $iba20acc78644ac0e9cd48ea35d8ad03b058f6b5a['datefrom'] = base64_encode($iba20acc78644ac0e9cd48ea35d8ad03b058f6b5a['datefrom']); $iba20acc78644ac0e9cd48ea35d8ad03b058f6b5a['dateto'] = base64_encode($iba20acc78644ac0e9cd48ea35d8ad03b058f6b5a['dateto']); $this->_redirect('*/*/', $iba20acc78644ac0e9cd48ea35d8ad03b058f6b5a); } protected function _initAction() { parent::_initAction(); $this->_setActiveMenu('magesms/statistics') ->_title(Mage::helper('magesms')->__('Statistics')) ; return $this; } protected function _isAllowed() { return Mage::getSingleton('admin/session')->isAllowed('magesms/statistics'); } } 