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
class Topefekt_Magesms_ApiController extends Mage_Core_Controller_Front_Action {
	public function indexAction() {
		if (!Mage::getStoreConfig('magesms/api/active') || !Mage::getStoreConfig('magesms/api/apikey'))
			die('DISABLED');
		$params = $this->getRequest();
		$auth = $params->getParam('key') == Mage::getStoreConfig('magesms/api/apikey') ? true : false;
		$to = $params->getParam('to');
		$text = $params->getParam('text');
		$unicode = $params->getParam('unicode') ? true : false;

		if ($auth && $to && $text) {
			$sms = Mage::getModel('magesms/sms');
			$sms->setRecipient($to)
				->setMessage($text)
				->setType(Topefekt_Magesms_Model_Sms::TYPE_SIMPLE)	// simple sms
				->setUnicode($unicode)
				->send();
			if ($sms->isError())
				echo "SMSSTATUS:ERROR";
			else
				echo "SMSSTATUS:OK";
		} else {
			echo "SMSSTATUS:ERROR";
		}
	}
}
