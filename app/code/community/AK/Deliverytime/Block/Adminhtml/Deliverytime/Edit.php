<?php
	
class AK_Deliverytime_Block_Adminhtml_Deliverytime_Edit extends Mage_Adminhtml_Block_Widget_Form_Container
{
		public function __construct()
		{

				parent::__construct();
				$this->_objectId = "deliverytime_id";
				$this->_blockGroup = "deliverytime";
				$this->_controller = "adminhtml_deliverytime";
				$this->_updateButton("save", "label", Mage::helper("deliverytime")->__("Save Time Slot"));
				$this->_updateButton("delete", "label", Mage::helper("deliverytime")->__("Delete Time Slot"));

				$this->_addButton("saveandcontinue", array(
					"label"     => Mage::helper("deliverytime")->__("Save And Continue Edit"),
					"onclick"   => "saveAndContinueEdit()",
					"class"     => "save",
				), -100);



				$this->_formScripts[] = "

							function saveAndContinueEdit(){
								editForm.submit($('edit_form').action+'back/edit/');
							}
						";
		}

		public function getHeaderText()
		{
				if( Mage::registry("deliverytime_data") && Mage::registry("deliverytime_data")->getId() ){

				    return Mage::helper("deliverytime")->__("Edit Time Slot '%s'", $this->htmlEscape(Mage::registry("deliverytime_data")->getId()));

				} 
				else{

				     return Mage::helper("deliverytime")->__("Add Time Slot");

				}
		}
}