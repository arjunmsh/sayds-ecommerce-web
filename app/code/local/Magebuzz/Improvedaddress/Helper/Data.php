<?php
/*
* Copyright (c) 2015 www.magebuzz.com 
*/
class Magebuzz_Improvedaddress_Helper_Data extends Mage_Core_Helper_Abstract {
	protected $_cityJson;
	protected $_subdistrictJson;
	
	public function getLocales() {
		$stores = Mage::app()->getStores();
		$locales = array();
		foreach ($stores as $store) {
				$v = Mage::getStoreConfig('general/locale/code', $store->getId());
				$locales[$v] = $v;
		}
		return $locales;
  }
	
	public function getCityJson() {
		Varien_Profiler::start('TEST: '.__METHOD__);
		$storeId = Mage::app()->getStore()->getId();
		if (!$this->_cityJson) {
			$cacheKey = 'IMPROVEDADDRESS_CITY_JSON_STORE' . (string)$storeId;
			if (Mage::app()->useCache('config')) {
				$json = Mage::app()->loadCache($cacheKey);
			}
			if (empty($json)) {
				$cities = $this->_getCities($storeId);
				$helper = Mage::helper('core');
				$json = $helper->jsonEncode($cities);

				if (Mage::app()->useCache('config')) {
					Mage::app()->saveCache($json, $cacheKey, array('config'));
				}
			}
			$this->_cityJson = $json;
		}

		Varien_Profiler::stop('TEST: ' . __METHOD__);
		return $this->_cityJson;
	}
	
	protected function _getCities($storeId) {
		$cities = array();
		
		$collection = Mage::getSingleton('improvedaddress/city')->getCollection();
			//->addFieldToFilter('region_id', $regionId); 
	
		foreach ($collection as $item) {
			$itemData = $item->getData();
			$cities[$itemData['region_id']][$itemData['city_id']] = array(
				'code'	=> $itemData['city_id'],
				'name'	=> $itemData['default_name']
			);
		}
		return $cities;
	}
}