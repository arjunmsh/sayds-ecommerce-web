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
class Topefekt_Magesms_Block_Answers_Renderer_Actions extends Mage_Adminhtml_Block_Widget_Grid_Column_Renderer_Abstract { public function render(Varien_Object $iebe3a16a01f87f9a4ebbb9731163db3e3e64cc3d) { $id82aaf2f437652c4b6efbd55703199f614e8e516 = ''; if (!$iebe3a16a01f87f9a4ebbb9731163db3e3e64cc3d->getProhlednuto() && Mage::getSingleton('admin/session')->isAllowed('magesms/answers/mark_as_read')) { $id82aaf2f437652c4b6efbd55703199f614e8e516 = '<a href="'. $this->getUrl('*/*/markAsRead/', array('_current' => true, 'id' => $iebe3a16a01f87f9a4ebbb9731163db3e3e64cc3d->getId())).'">'. Mage::helper('magesms')->__('Mark as Read') .'</a>'; } if (Mage::getSingleton('admin/session')->isAllowed('magesms/answers/remove')) { if ($id82aaf2f437652c4b6efbd55703199f614e8e516) $id82aaf2f437652c4b6efbd55703199f614e8e516 .= ' | '; $id82aaf2f437652c4b6efbd55703199f614e8e516 .= sprintf('<a href="%s" onClick="deleteConfirm(\'%s\', this.href); return false;">%s</a>', $this->getUrl('*/*/remove/', array( '_current'=>true, 'id' => $iebe3a16a01f87f9a4ebbb9731163db3e3e64cc3d->getId(), Mage_Core_Controller_Front_Action::PARAM_NAME_URL_ENCODED => $this->helper('core/url')->getEncodedUrl()) ), Mage::helper('magesms')->__('Are you sure?'), Mage::helper('magesms')->__('Remove') ); } return $id82aaf2f437652c4b6efbd55703199f614e8e516; } }