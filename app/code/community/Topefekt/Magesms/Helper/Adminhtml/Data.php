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
 class Topefekt_Magesms_Helper_Adminhtml_Data extends Mage_Adminhtml_Helper_Data { public function setPageHelpUrl($ic157485eecbe64d400493d7b9e7f434b83aca5d0=null) { if (strpos(Mage::app()->getRequest()->getControllerName(), 'magesms_') === 0) { $i593f9fb6306ab4cdb862f1ef6769504d63647c90 = Mage::getStoreConfig('magesms/template/language').'/'; if ($i593f9fb6306ab4cdb862f1ef6769504d63647c90 == 'en') $i593f9fb6306ab4cdb862f1ef6769504d63647c90 = ''; $this->_pageHelpUrl = 'http://www.mage-sms.com/'.$i593f9fb6306ab4cdb862f1ef6769504d63647c90.Mage::helper('magesms')->__('manual').'.html'; } else { return parent::setPageHelpUrl($ic157485eecbe64d400493d7b9e7f434b83aca5d0); } return $this; } }