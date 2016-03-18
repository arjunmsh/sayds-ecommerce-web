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
CREATE TABLE `{$this->getTable('magesms_exceptions')}` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `prefix` int(11) NOT NULL,
  `first_prefix` int(11) NOT NULL,
  `length` tinyint(4) NOT NULL,
  `trim` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=INNODB DEFAULT CHARSET=utf8;

"); $iddb18dc4afa6663cf07a52c741943ff87cbe3896->endSetup(); 