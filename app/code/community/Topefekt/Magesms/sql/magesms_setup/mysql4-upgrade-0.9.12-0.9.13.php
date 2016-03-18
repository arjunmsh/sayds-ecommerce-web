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
ALTER TABLE `{$this->getTable('magesms_smshistory')}`
	ADD `change` TINYINT NOT NULL DEFAULT '1',
	ADD `campaign_id` INT UNSIGNED NULL;

ALTER TABLE `{$this->getTable('magesms_smshistory')}` CHANGE `admin_id` `admin_id` INT UNSIGNED NULL;
UPDATE `{$this->getTable('magesms_smshistory')}` SET `admin_id` = NULL WHERE `admin_id` = 0;

ALTER TABLE `{$this->getTable('magesms_smshistory')}` CHANGE `customer_id` `customer_id` INT UNSIGNED NULL;
UPDATE `{$this->getTable('magesms_smshistory')}` SET `customer_id` = NULL WHERE `customer_id` = 0;

ALTER TABLE `{$this->getTable('magesms_smshistory')}` CHANGE `smsID` `smsid` VARCHAR( 250 ) NOT NULL;

ALTER TABLE `{$this->getTable('magesms_smshistory')}` CHANGE `status` `status` TINYINT( 3 ) UNSIGNED NOT NULL;

ALTER TABLE `{$this->getTable('magesms_smshistory')}` CHANGE `unicode` `unicode` BOOLEAN NOT NULL;

DROP TABLE `magesms_outofstock`;

ALTER TABLE `{$this->getTable('magesms_smsuser')}` CHANGE `simulatesms` `simulatesms` BOOLEAN NOT NULL ,
CHANGE `deletedb` `deletedb` BOOLEAN NOT NULL ,
CHANGE `URLreports` `URLreports` BOOLEAN NOT NULL ,
CHANGE `prefbilling` `prefbilling` TINYINT( 1 ) NOT NULL;

ALTER TABLE `{$this->getTable('magesms_variables')}` CHANGE `translate` `translate` BOOLEAN NOT NULL;

"); $iddb18dc4afa6663cf07a52c741943ff87cbe3896->endSetup(); 