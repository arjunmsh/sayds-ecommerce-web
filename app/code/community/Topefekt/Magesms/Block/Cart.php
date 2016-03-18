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
 class Topefekt_Magesms_Block_Cart extends Mage_Checkout_Block_Cart { protected function _construct() { $i69a1201e93806d55c970dfb18feec53d221ba37b = Mage::helper('magesms')->getOptoutProduct(); if ($i69a1201e93806d55c970dfb18feec53d221ba37b && Mage::helper('magesms')->isActive()) { $this->setOptoutProduct($i69a1201e93806d55c970dfb18feec53d221ba37b); $i705fa7c9639d497e1179d7d5691c212668a8c9c8 = $this->getQuote()->getItemByProduct($i69a1201e93806d55c970dfb18feec53d221ba37b); if ($i705fa7c9639d497e1179d7d5691c212668a8c9c8) $this->setOptoutUrl(Mage::app()->getDefaultStoreView()->getBaseUrl().'magesms/cart/removeProduct'); else $this->setOptoutUrl(Mage::app()->getDefaultStoreView()->getBaseUrl().'magesms/cart/addProduct'); $this->setOptoutAuto(!!$i705fa7c9639d497e1179d7d5691c212668a8c9c8); } return parent::_construct(); } } 