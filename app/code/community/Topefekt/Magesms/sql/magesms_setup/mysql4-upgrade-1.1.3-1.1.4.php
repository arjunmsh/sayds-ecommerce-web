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
DELETE FROM `{$this->getTable('magesms_hooks_admins')}`
	WHERE `admin_id` NOT IN (
		SELECT `ID` FROM `{$this->getTable('magesms_admins')}`);
"); $iddb18dc4afa6663cf07a52c741943ff87cbe3896->endSetup(); if (version_compare(Mage::getVersion(), '1.6', '<')) { include_once dirname(__FILE__).'/../../data/magesms_setup/data-upgrade-1.1.3-1.1.4.php'; } 