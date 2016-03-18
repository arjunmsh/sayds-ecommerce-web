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
 $iddb18dc4afa6663cf07a52c741943ff87cbe3896 = $this; $iddb18dc4afa6663cf07a52c741943ff87cbe3896->startSetup(); $iddb18dc4afa6663cf07a52c741943ff87cbe3896->addAttribute('catalog_product', 'magesms_optout', array( 'global' => Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_WEBSITE, 'type' => 'int', 'backend' => '', 'frontend' => '', 'label' => 'MageSMS Opt-out', 'input' => 'hidden', 'visible' => false, 'required' => false, 'user_defined' => false, 'default' => '1', 'searchable' => false, 'filterable' => false, 'comparable' => false, 'visible_on_front' => false, 'unique' => false, )); $iddb18dc4afa6663cf07a52c741943ff87cbe3896->run("
	CREATE TABLE IF NOT EXISTS `{$this->getTable('magesms_optout_order')}` (
	`id` int(10) unsigned NOT NULL AUTO_INCREMENT,
	`order_id` int(10) unsigned NOT NULL,
	`disabled` tinyint(1) NOT NULL,
	PRIMARY KEY (`id`),
	KEY `order_id` (`order_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
"); $iddb18dc4afa6663cf07a52c741943ff87cbe3896->addAttribute('customer', 'magesms_customer_marketing', array( 'global' => Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_STORE, 'type' => 'int', 'backend' => '', 'frontend' => '', 'label' => 'MageSMS Customer Marketing', 'input' => 'select', 'visible' => true, 'required' => false, 'user_defined' => true, 'default' => '1', 'searchable' => false, 'filterable' => false, 'comparable' => false, 'visible_on_front' => true, 'unique' => false, 'source' => 'eav/entity_attribute_source_boolean', )); $i1b4202c93885bea895a6d1a03d58657ba01d9342 = Mage::getSingleton('eav/config'); $i76200fed8240be52de0fc75ec3367898a197407f = $i1b4202c93885bea895a6d1a03d58657ba01d9342->getAttribute('customer', 'magesms_customer_marketing'); $i76200fed8240be52de0fc75ec3367898a197407f->setData('used_in_forms', array('adminhtml_customer','customer_account_create','customer_account_edit', 'checkout_register')); $i76200fed8240be52de0fc75ec3367898a197407f->save(); $iddb18dc4afa6663cf07a52c741943ff87cbe3896->endSetup(); if (version_compare(Mage::getVersion(), '1.6', '<')) { include_once dirname(__FILE__).'/../../data/magesms_setup/data-upgrade-1.2.0-1.2.1.php'; include_once dirname(__FILE__).'/../../data/magesms_setup/data-upgrade-1.3.1-1.3.2.php'; } 