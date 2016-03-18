<?php
$installer = $this;
$installer->startSetup();

$installer->run("
DROP TABLE IF EXISTS {$this->getTable('deliverytime')};
CREATE TABLE {$this->getTable('deliverytime')} (
 	`deliverytime_id` INT(11) UNSIGNED NOT NULL AUTO_INCREMENT,
	`title` VARCHAR(255) NOT NULL DEFAULT '',
	`deliverytime_start` VARCHAR(255) NOT NULL DEFAULT '',
       `deliverytime_end` VARCHAR(255) NOT NULL DEFAULT '',       
       `mon` INT(1) NOT NULL DEFAULT '0',
       `tue` INT(1) NOT NULL DEFAULT '0',
       `wed` INT(1) NOT NULL DEFAULT '0',
       `thu` INT(1) NOT NULL DEFAULT '0',
       `fri` INT(1) NOT NULL DEFAULT '0',
       `sat` INT(1) NOT NULL DEFAULT '0',
       `sun` INT(1) NOT NULL DEFAULT '0',       
	`status` INT(1) NOT NULL DEFAULT '0',		
	PRIMARY KEY (`deliverytime_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS {$installer->getTable('timeslot')};
CREATE TABLE {$installer->getTable('timeslot')} (
 `id` int(11) unsigned NOT NULL auto_increment,
  `timeslot` varchar(100),
  `order_id` int(11) NOT NULL default '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
");


/*$installer->run("
DROP TABLE IF EXISTS {$installer->getTable('timeslot')};
CREATE TABLE {$installer->getTable('timeslot')} (
 `id` int(11) unsigned NOT NULL auto_increment,
  `timeslot` varchar(100),
  `order_id` int(11) NOT NULL default '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
");*/

//demo 
//Mage::getModel('core/url_rewrite')->setId(null);
//demo 
$installer->endSetup();
	 