<?php
/*
* Copyright (c) 2015 www.magebuzz.com 
*/
class Magebuzz_Improvedaddress_Model_City extends Mage_Core_Model_Abstract {
	public function _construct() {
		parent::_construct();
		$this->_init('improvedaddress/city');
	}
	
	public function toOptionArray() {
			$options = $this->_toOptionArray('region_id', 'default_name', array('title' => 'default_name'));
			if (count($options) > 0) {
					array_unshift($options, array(
							'title '=> null,
							'value' => "",
							'label' => Mage::helper('directory')->__('-- Please select --')
					));
			}
			return $options;
	}
}