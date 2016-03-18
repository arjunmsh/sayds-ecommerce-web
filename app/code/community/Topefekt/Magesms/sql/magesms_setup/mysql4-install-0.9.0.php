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

-- DROP TABLE IF EXISTS {$this->getTable('magesms_admins')};
CREATE TABLE {$this->getTable('magesms_admins')} (
	`ID` int(10) unsigned NOT NULL AUTO_INCREMENT,
	`name` varchar(100) NOT NULL,
	`number` varchar(20) NOT NULL,
	PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- DROP TABLE IF EXISTS {$this->getTable('magesms_answers')};
CREATE TABLE {$this->getTable('magesms_answers')} (
	`ID` int(10) unsigned NOT NULL AUTO_INCREMENT,
	`text` text NOT NULL,
	`from` varchar(50) NOT NULL DEFAULT '',
	`prohlednuto` tinyint(3) NOT NULL DEFAULT '0',
	`smsc` varchar(100) NOT NULL DEFAULT '',
	`cas` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
	PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- DROP TABLE IF EXISTS {$this->getTable('magesms_country')};
CREATE TABLE {$this->getTable('magesms_country')} (
	`name` varchar(100) NOT NULL,
	`vat` tinyint(1) unsigned NOT NULL DEFAULT '0',
	`currency` varchar(3) NOT NULL,
	PRIMARY KEY (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- DROP TABLE IF EXISTS {$this->getTable('magesms_country_area')};
CREATE TABLE {$this->getTable('magesms_country_area')} (
	`ID` int(10) unsigned NOT NULL AUTO_INCREMENT,
	`country_name` varchar(100) NOT NULL,
	`area` int(11) NOT NULL,
	PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- DROP TABLE IF EXISTS {$this->getTable('magesms_country_lang')};
CREATE TABLE {$this->getTable('magesms_country_lang')} (
	`ID` int(10) unsigned NOT NULL AUTO_INCREMENT,
	`country_name` varchar(100) NOT NULL,
	`lang` varchar(10) NOT NULL,
	`iso2` varchar(2) NOT NULL,
	PRIMARY KEY (`ID`),
	KEY `country_name` (`country_name`,`lang`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- DROP TABLE IF EXISTS {$this->getTable('magesms_hooks')};
CREATE TABLE {$this->getTable('magesms_hooks')} (
	`id` int(10) unsigned NOT NULL AUTO_INCREMENT,
	`name` varchar(100) CHARACTER SET utf8 NOT NULL,
	`info` text NOT NULL,
	`status` tinyint(3) NOT NULL,
	`owner` tinyint(3) NOT NULL,
	`group` tinyint(3) NOT NULL,
	`background` varchar(20) NOT NULL,
	`icon` varchar(30) NOT NULL,
	`template` text NOT NULL,
	`template2` text NOT NULL,
	`notice` text NOT NULL,
	`lang` varchar(10) NOT NULL,
	PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- DROP TABLE IF EXISTS {$this->getTable('magesms_hooks_admins')};
CREATE TABLE {$this->getTable('magesms_hooks_admins')} (
	`id` int(10) unsigned NOT NULL AUTO_INCREMENT,
	`name` varchar(100) NOT NULL,
	`smstext` text NOT NULL,
	`admin_id` int(11) NOT NULL,
	`store_group_id` smallint(5) unsigned NOT NULL,
	PRIMARY KEY (`id`),
	UNIQUE KEY `uniq` (`name`,`admin_id`,`store_group_id`),
	KEY `store_group_id` (`store_group_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- DROP TABLE IF EXISTS {$this->getTable('magesms_hooks_customers')};
CREATE TABLE {$this->getTable('magesms_hooks_customers')} (
	`id` int(10) unsigned NOT NULL AUTO_INCREMENT,
	`name` varchar(100) NOT NULL,
	`smstext` text NOT NULL,
	`active` tinyint(3) NOT NULL,
	`mutation` varchar(20) NOT NULL,
	PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- DROP TABLE IF EXISTS {$this->getTable('magesms_hooks_teplates')};
CREATE TABLE {$this->getTable('magesms_hooks_templates')} (
	`id` int(10) unsigned NOT NULL AUTO_INCREMENT,
	`area` varchar(10) NOT NULL,
	`area_text` varchar(100) NOT NULL,
	PRIMARY KEY (`id`),
	UNIQUE KEY `area` (`area`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- DROP TABLE IF EXISTS {$this->getTable('magesms_hooks_unicode')};
CREATE TABLE {$this->getTable('magesms_hooks_unicode')} (
	`id` int(10) unsigned NOT NULL AUTO_INCREMENT,
	`area` varchar(10) NOT NULL,
	`unicode` tinyint(3) NOT NULL,
	`type` varchar(10) NOT NULL,
	PRIMARY KEY (`id`),
	UNIQUE KEY `area` (`area`,`type`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- DROP TABLE IF EXISTS {$this->getTable('magesms_maps')};
CREATE TABLE {$this->getTable('magesms_maps')} (
	`id` int(10) unsigned NOT NULL AUTO_INCREMENT,
	`area` int(10) NOT NULL,
	`number` int(5) NOT NULL DEFAULT '1',
	PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- DROP TABLE IF EXISTS {$this->getTable('magesms_outofstock')};
CREATE TABLE {$this->getTable('magesms_outofstock')} (
	`ID` int(10) unsigned NOT NULL AUTO_INCREMENT,
	`datum` date NOT NULL,
	`product_id` int(8) NOT NULL,
	PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- DROP TABLE IF EXISTS {$this->getTable('magesms_ownnumbersender')};
CREATE TABLE {$this->getTable('magesms_ownnumbersender')} (
	`id` int(10) unsigned NOT NULL AUTO_INCREMENT,
	`val` varchar(30) NOT NULL,
	PRIMARY KEY `id` (`id`),
	UNIQUE KEY `val` (`val`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- DROP TABLE IF EXISTS {$this->getTable('magesms_routes')};
CREATE TABLE {$this->getTable('magesms_routes')} (
	`ID` int(10) unsigned NOT NULL AUTO_INCREMENT,
	`area` int(5) NOT NULL,
	`type` varchar(20) NOT NULL,
	`isms` int(5) NOT NULL,
	`sendertype` tinyint(3) NOT NULL,
	`senderID` varchar(30) NOT NULL,
	`info` text NOT NULL,
	`area_text` varchar(50) NOT NULL,
	PRIMARY KEY (`ID`),
	UNIQUE KEY `unique` (`area_text`,`type`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- DROP TABLE IF EXISTS {$this->getTable('magesms_smshistory')};
CREATE TABLE {$this->getTable('magesms_smshistory')} (
	`ID` int(10) unsigned NOT NULL AUTO_INCREMENT,
	`number` varchar(30) NOT NULL,
	`date` datetime NOT NULL,
	`text` text NOT NULL,
	`status` tinyint(3) NOT NULL,
	`price` double(5,3) NOT NULL,
	`credit` double(15,3) NOT NULL,
	`sender` varchar(30) NOT NULL,
	`unicode` tinyint(3) NOT NULL,
	`type` tinyint(3) NOT NULL,
	`smsID` varchar(100) NOT NULL,
	`note` varchar(100) NOT NULL,
	`total` tinyint(3) NOT NULL,
	`admin_id` int(8) NOT NULL,
	`customer_id` int(8) NOT NULL,
	`recipient` varchar(100) NOT NULL,
	`subject` varchar(100) NOT NULL,
	PRIMARY KEY (`ID`),
	KEY `vyber1` (`date`),
	KEY `vyber2` (`date`,`type`),
	KEY `vyber3` (`date`,`type`,`status`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- DROP TABLE IF EXISTS {$this->getTable('magesms_smsuser')};
CREATE TABLE {$this->getTable('magesms_smsuser')} (
	`ID` int(10) unsigned NOT NULL AUTO_INCREMENT,
	`user` varchar(55) NOT NULL,
	`passwd` varchar(55) NOT NULL,
	`email` varchar(100) NOT NULL,
	`regtype` varchar(10) NOT NULL,
	`companyname` varchar(100) NOT NULL,
	`addressstreet` varchar(100) NOT NULL,
	`addresscity` varchar(100) NOT NULL,
	`addresszip` varchar(100) NOT NULL,
	`country0` varchar(100) NOT NULL,
	`companyid` varchar(100) NOT NULL,
	`companyvat` varchar(100) NOT NULL,
	`simulatesms` tinyint(3) NOT NULL,
	`deletedb` tinyint(3) NOT NULL,
	`pocetkredit` int(6) NOT NULL,
	`deliveryemail` varchar(100) NOT NULL,
	`URLreports` tinyint(3) NOT NULL,
	`prefbilling` tinyint(3) NOT NULL,
	`firstname` varchar(50) NOT NULL,
	`lastname` varchar(50) NOT NULL,
	PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- DROP TABLE IF EXISTS {$this->getTable('magesms_textsender')};
CREATE TABLE {$this->getTable('magesms_textsender')} (
	`id` int(10) unsigned NOT NULL AUTO_INCREMENT,
	`val` varchar(11) NOT NULL,
	PRIMARY KEY `id` (`id`),
	UNIQUE KEY `val` (`val`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- DROP TABLE IF EXISTS {$this->getTable('magesms_variables')};
CREATE TABLE {$this->getTable('magesms_variables')} (
	`id` int(10) unsigned NOT NULL AUTO_INCREMENT,
	`name` varchar(200) NOT NULL,
	`template` text NOT NULL,
	`translate` tinyint(4) NOT NULL,
	PRIMARY KEY (`id`),
	UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

"); $iddb18dc4afa6663cf07a52c741943ff87cbe3896->endSetup(); 