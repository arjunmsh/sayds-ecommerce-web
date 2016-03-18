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
class Topefekt_Magesms_Block_System_Config_Apikeygenerator extends Mage_Adminhtml_Block_System_Config_Form_Field { protected function _getElementHtml(Varien_Data_Form_Element_Abstract $id23e685c18c58238831a9a9f8356004faff20ddc) { $i0fc064cffe35dbf98852d574adf2c91e8ad7190b = parent::_getElementHtml($id23e685c18c58238831a9a9f8356004faff20ddc); $this->setElement($id23e685c18c58238831a9a9f8356004faff20ddc); $id82aaf2f437652c4b6efbd55703199f614e8e516 = $this->getLayout()->createBlock('adminhtml/widget_button') ->setType('button') ->setLabel('Generator new API key') ->setOnClick("document.getElementById('magesms_api_apikey').value = 'xxxxxx-xxxx-yxxx-yxxx-xxxxxx'.replace(/[xy]/g, function(c) {var r = Math.random()*16|0, v = c == 'x' ? r : (r&0x3|0x8);return v.toString(16);});") ->toHtml(); return $i0fc064cffe35dbf98852d574adf2c91e8ad7190b.$id82aaf2f437652c4b6efbd55703199f614e8e516; } } 