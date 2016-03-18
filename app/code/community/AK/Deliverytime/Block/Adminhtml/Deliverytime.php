<?php


class AK_Deliverytime_Block_Adminhtml_Deliverytime extends Mage_Adminhtml_Block_Widget_Grid_Container{

	public function __construct()
	{

	$this->_controller = "adminhtml_deliverytime";
	$this->_blockGroup = "deliverytime";
	$this->_headerText = Mage::helper("deliverytime")->__("Deliverytime Manager");
	$this->_addButtonLabel = Mage::helper("deliverytime")->__("Add New Time Slot");
	parent::__construct();
	
	}

}