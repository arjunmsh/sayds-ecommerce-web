<?php
class AK_Deliverytime_Block_Adminhtml_Deliverytime_Edit_Tabs extends Mage_Adminhtml_Block_Widget_Tabs
{
		public function __construct()
		{
				parent::__construct();
				$this->setId("deliverytime_tabs");
				$this->setDestElementId("edit_form");
				$this->setTitle(Mage::helper("deliverytime")->__("Item Information"));
		}
		protected function _beforeToHtml()
		{
				$this->addTab("form_section", array(
				"label" => Mage::helper("deliverytime")->__("Item Information"),
				"title" => Mage::helper("deliverytime")->__("Item Information"),
				"content" => $this->getLayout()->createBlock("deliverytime/adminhtml_deliverytime_edit_tab_form")->toHtml(),
				));
				return parent::_beforeToHtml();
		}

}
