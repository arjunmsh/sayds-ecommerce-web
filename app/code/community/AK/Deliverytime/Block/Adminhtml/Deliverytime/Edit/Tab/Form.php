<?php
class AK_Deliverytime_Block_Adminhtml_Deliverytime_Edit_Tab_Form extends Mage_Adminhtml_Block_Widget_Form
{
		protected function _prepareForm()
		{

				$form = new Varien_Data_Form();
				$this->setForm($form);
				$fieldset = $form->addFieldset("deliverytime_form", array("legend"=>Mage::helper("deliverytime")->__("Item information")));

				
						$fieldset->addField("title", "text", array(
						"label" => Mage::helper("deliverytime")->__("Title"),					
						"class" => "required-entry",
						"required" => true,
						"name" => "title",
						));
					
						$fieldset->addField("deliverytime_start", "text", array(
						"label" => Mage::helper("deliverytime")->__("Start Time"),					
						"class" => "required-entry",
						"required" => true,
						"name" => "deliverytime_start",
						));
					
						$fieldset->addField("deliverytime_end", "text", array(
						"label" => Mage::helper("deliverytime")->__("End Time"),					
						"class" => "required-entry",
						"required" => true,
						"name" => "deliverytime_end",
						));
									
						 $fieldset->addField('mon', 'select', array(
						'label'     => Mage::helper('deliverytime')->__('Monday'),
						'values'   => AK_Deliverytime_Block_Adminhtml_Deliverytime_Grid::getValueArray3(),
						'name' => 'mon',
						));				
						 $fieldset->addField('tue', 'select', array(
						'label'     => Mage::helper('deliverytime')->__('Tuesday'),
						'values'   => AK_Deliverytime_Block_Adminhtml_Deliverytime_Grid::getValueArray4(),
						'name' => 'tue',
						));				
						 $fieldset->addField('wed', 'select', array(
						'label'     => Mage::helper('deliverytime')->__('Wednesday'),
						'values'   => AK_Deliverytime_Block_Adminhtml_Deliverytime_Grid::getValueArray5(),
						'name' => 'wed',
						));				
						 $fieldset->addField('thu', 'select', array(
						'label'     => Mage::helper('deliverytime')->__('Thursday'),
						'values'   => AK_Deliverytime_Block_Adminhtml_Deliverytime_Grid::getValueArray6(),
						'name' => 'thu',
						));				
						 $fieldset->addField('fri', 'select', array(
						'label'     => Mage::helper('deliverytime')->__('Friday'),
						'values'   => AK_Deliverytime_Block_Adminhtml_Deliverytime_Grid::getValueArray7(),
						'name' => 'fri',
						));				
						 $fieldset->addField('sat', 'select', array(
						'label'     => Mage::helper('deliverytime')->__('Saturday'),
						'values'   => AK_Deliverytime_Block_Adminhtml_Deliverytime_Grid::getValueArray8(),
						'name' => 'sat',
						));				
						 $fieldset->addField('sun', 'select', array(
						'label'     => Mage::helper('deliverytime')->__('Sunday'),
						'values'   => AK_Deliverytime_Block_Adminhtml_Deliverytime_Grid::getValueArray9(),
						'name' => 'sun',
						));				
						 $fieldset->addField('status', 'select', array(
						'label'     => Mage::helper('deliverytime')->__('Status'),
						'values'   => AK_Deliverytime_Block_Adminhtml_Deliverytime_Grid::getValueArray10(),
						'name' => 'status',
						));

				if (Mage::getSingleton("adminhtml/session")->getDeliverytimeData())
				{
					$form->setValues(Mage::getSingleton("adminhtml/session")->getDeliverytimeData());
					Mage::getSingleton("adminhtml/session")->setDeliverytimeData(null);
				} 
				elseif(Mage::registry("deliverytime_data")) {
				    $form->setValues(Mage::registry("deliverytime_data")->getData());
				}
				return parent::_prepareForm();
		}
}
