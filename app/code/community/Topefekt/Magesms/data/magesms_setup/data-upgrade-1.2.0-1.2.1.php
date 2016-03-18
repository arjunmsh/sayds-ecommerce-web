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
$iddb18dc4afa6663cf07a52c741943ff87cbe3896 = $this; $iddb18dc4afa6663cf07a52c741943ff87cbe3896->startSetup(); $i0933475b5bd80561a9f50282fd9eb0b8345cec4b = Mage::getModel('magesms/variables')->getCollection()->addFieldToFilter('name', 'order_payment_html'); if (!$i0933475b5bd80561a9f50282fd9eb0b8345cec4b->count()) { Mage::getModel('magesms/variables')->setName('order_payment_html')->setTemplate('Bank Transfer Payment Account number: 1234567890 Sort code 1234')->setTranslate(0)->save(); } $iddb18dc4afa6663cf07a52c741943ff87cbe3896->run("
	UPDATE `{$this->getTable('magesms_hooks')}`
		SET `notice` = REPLACE(`notice`, '{order_payment}', '{order_payment}, {order_payment_html}')
		WHERE `notice` LIKE '%{order_payment}%' AND `notice` NOT LIKE '%{order_payment_html}%';
"); $iddb18dc4afa6663cf07a52c741943ff87cbe3896->endSetup(); 