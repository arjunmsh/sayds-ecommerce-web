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
 $iddb18dc4afa6663cf07a52c741943ff87cbe3896 = $this; $iddb18dc4afa6663cf07a52c741943ff87cbe3896->startSetup(); $iddb18dc4afa6663cf07a52c741943ff87cbe3896->run("
CREATE TABLE IF NOT EXISTS `{$this->getTable('magesms_routes_alternative')}` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `route_id` int(10) unsigned NOT NULL,
  `store_group_id` smallint(5) unsigned NOT NULL,
  `textsender` varchar(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `alternative_unique` (`route_id`,`store_group_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

"); $iddb18dc4afa6663cf07a52c741943ff87cbe3896->endSetup(); if (version_compare(Mage::getVersion(), '1.6', '<')) { include_once dirname(__FILE__).'/../../data/magesms_setup/data-upgrade-1.0.1-1.0.2.php'; include_once dirname(__FILE__).'/../../data/magesms_setup/data-upgrade-1.0.3-1.0.4.php'; include_once dirname(__FILE__).'/../../data/magesms_setup/data-upgrade-1.1.0-1.1.1.php'; include_once dirname(__FILE__).'/../../data/magesms_setup/data-upgrade-1.1.1-1.1.2.php'; } 