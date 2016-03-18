<?php

class AK_Deliverytime_Block_Adminhtml_Deliverytime_Grid extends Mage_Adminhtml_Block_Widget_Grid
{

		public function __construct()
		{
				parent::__construct();
				$this->setId("deliverytimeGrid");
				$this->setDefaultSort("deliverytime_id");
				$this->setDefaultDir("DESC");
				$this->setSaveParametersInSession(true);
		}

		protected function _prepareCollection()
		{
				$collection = Mage::getModel("deliverytime/deliverytime")->getCollection();
				$this->setCollection($collection);
				return parent::_prepareCollection();
		}
		protected function _prepareColumns()
		{
				$this->addColumn("deliverytime_id", array(
				"header" => Mage::helper("deliverytime")->__("ID"),
				"align" =>"right",
				"width" => "50px",
			    "type" => "number",
				"index" => "deliverytime_id",
				));
                
				$this->addColumn("title", array(
				"header" => Mage::helper("deliverytime")->__("Title"),
				"index" => "title",
				));
				$this->addColumn("deliverytime_start", array(
				"header" => Mage::helper("deliverytime")->__("Start Time"),
				"index" => "deliverytime_start",
				));
				$this->addColumn("deliverytime_end", array(
				"header" => Mage::helper("deliverytime")->__("End Time"),
				"index" => "deliverytime_end",
				));

						
						$this->addColumn('status', array(
						'header' => Mage::helper('deliverytime')->__('Status'),
						'index' => 'status',
						'type' => 'options',
						'options'=>AK_Deliverytime_Block_Adminhtml_Deliverytime_Grid::getOptionArray10(),				
						));
						
						$this->addColumn('action',array(
						'header' => Mage::helper('catalog')->__('Action'),
						'width' => '50px',
						'type' => 'action',
						'getter' => 'getId',
						'actions' => array(
							array(
								'caption' => Mage::helper('catalog')->__('Edit'),
								'url' => array(
									'base'=>'*/adminhtml_deliverytime/edit',
									'params'=>array('store'=>$this->getRequest()->getParam('store'))
								),
								'field' => 'id'
							)
						),
						'filter' => false,
						'sortable' => false,
						'index' => 'stores',
        		        ));
						
			$this->addExportType('*/*/exportCsv', Mage::helper('sales')->__('CSV')); 
			$this->addExportType('*/*/exportExcel', Mage::helper('sales')->__('Excel'));

				return parent::_prepareColumns();
		}

		public function getRowUrl($row)
		{
			   return $this->getUrl("*/*/edit", array("id" => $row->getId()));
		}


		
		protected function _prepareMassaction()
		{
			$this->setMassactionIdField('deliverytime_id');
			$this->getMassactionBlock()->setFormFieldName('deliverytime_ids');
			$this->getMassactionBlock()->setUseSelectAll(true);
			$this->getMassactionBlock()->addItem('remove_deliverytime', array(
					 'label'=> Mage::helper('deliverytime')->__('Remove Deliverytime'),
					 'url'  => $this->getUrl('*/adminhtml_deliverytime/massRemove'),
					 'confirm' => Mage::helper('deliverytime')->__('Are you sure?')
				));
			return $this;
		}
			
		static public function getOptionArray3()
		{
            $data_array=array(); 
			$data_array[0]='No';
			$data_array[1]='Yes';
            return($data_array);
		}
		static public function getValueArray3()
		{
            $data_array=array();
			foreach(AK_Deliverytime_Block_Adminhtml_Deliverytime_Grid::getOptionArray3() as $k=>$v){
               $data_array[]=array('value'=>$k,'label'=>$v);		
			}
            return($data_array);

		}
		
		static public function getOptionArray4()
		{
            $data_array=array(); 
			$data_array[0]='No';
			$data_array[1]='Yes';
            return($data_array);
		}
		static public function getValueArray4()
		{
            $data_array=array();
			foreach(AK_Deliverytime_Block_Adminhtml_Deliverytime_Grid::getOptionArray4() as $k=>$v){
               $data_array[]=array('value'=>$k,'label'=>$v);		
			}
            return($data_array);

		}
		
		static public function getOptionArray5()
		{
            $data_array=array(); 
			$data_array[0]='No';
			$data_array[1]='Yes';
            return($data_array);
		}
		static public function getValueArray5()
		{
            $data_array=array();
			foreach(AK_Deliverytime_Block_Adminhtml_Deliverytime_Grid::getOptionArray5() as $k=>$v){
               $data_array[]=array('value'=>$k,'label'=>$v);		
			}
            return($data_array);

		}
		
		static public function getOptionArray6()
		{
            $data_array=array(); 
			$data_array[0]='No';
			$data_array[1]='Yes';
            return($data_array);
		}
		static public function getValueArray6()
		{
            $data_array=array();
			foreach(AK_Deliverytime_Block_Adminhtml_Deliverytime_Grid::getOptionArray6() as $k=>$v){
               $data_array[]=array('value'=>$k,'label'=>$v);		
			}
            return($data_array);

		}
		
		static public function getOptionArray7()
		{
            $data_array=array(); 
			$data_array[0]='No';
			$data_array[1]='Yes';
            return($data_array);
		}
		static public function getValueArray7()
		{
            $data_array=array();
			foreach(AK_Deliverytime_Block_Adminhtml_Deliverytime_Grid::getOptionArray7() as $k=>$v){
               $data_array[]=array('value'=>$k,'label'=>$v);		
			}
            return($data_array);

		}
		
		static public function getOptionArray8()
		{
            $data_array=array(); 
			$data_array[0]='No';
			$data_array[1]='Yes';
            return($data_array);
		}
		static public function getValueArray8()
		{
            $data_array=array();
			foreach(AK_Deliverytime_Block_Adminhtml_Deliverytime_Grid::getOptionArray8() as $k=>$v){
               $data_array[]=array('value'=>$k,'label'=>$v);		
			}
            return($data_array);

		}
		
		static public function getOptionArray9()
		{
            $data_array=array(); 
			$data_array[0]='No';
			$data_array[1]='Yes';
            return($data_array);
		}
		static public function getValueArray9()
		{
            $data_array=array();
			foreach(AK_Deliverytime_Block_Adminhtml_Deliverytime_Grid::getOptionArray9() as $k=>$v){
               $data_array[]=array('value'=>$k,'label'=>$v);		
			}
            return($data_array);

		}
		
		static public function getOptionArray10()
		{
            /*$data_array=array(); 
			$data_array[0]='Enable';
			$data_array[1]='Disable';*/
			$data_array=array(''=>'-- Select Status --',1=>'Enable',2=>'Disable'); 
            return($data_array);
		}
		static public function getValueArray10()
		{
            $data_array=array();
			foreach(AK_Deliverytime_Block_Adminhtml_Deliverytime_Grid::getOptionArray10() as $k=>$v){
               $data_array[]=array('value'=>$k,'label'=>$v);		
			}
            return($data_array);

		}
		

}