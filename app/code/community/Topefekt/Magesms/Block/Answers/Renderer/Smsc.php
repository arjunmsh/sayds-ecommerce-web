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
class Topefekt_Magesms_Block_Answers_Renderer_Smsc extends Mage_Adminhtml_Block_Widget_Grid_Column_Renderer_Abstract { public function render(Varien_Object $iebe3a16a01f87f9a4ebbb9731163db3e3e64cc3d) { $ia61712c27ea241bd7a543dc2b02ea572274d0322 = trim($iebe3a16a01f87f9a4ebbb9731163db3e3e64cc3d->getData($this->getColumn()->getIndex())); return $ia61712c27ea241bd7a543dc2b02ea572274d0322 ? '+'.$ia61712c27ea241bd7a543dc2b02ea572274d0322 : '-'; } }