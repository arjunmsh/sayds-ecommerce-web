<?php
/*
* Copyright (c) 2015 www.magebuzz.com 
*/
class Magebuzz_Improvedaddress_Block_Adminhtml_City_Grid extends Mage_Adminhtml_Block_Widget_Grid {
  public function __construct() {
		parent::__construct();
		$this->setId('cityGrid');
		$this->setDefaultSort('city_id');
		$this->setDefaultDir('ASC');
		$this->setSaveParametersInSession(true);
  }
	
	protected function _addColumnFilterToCollection($column) {
		$field = ( $column->getFilterIndex() ) ? $column->getFilterIndex() : $column->getIndex();
		if ($field == 'region_name') {
			if ($this->getCollection()) {
				$cond = $column->getFilter()->getCondition();
				if ($field && isset($cond)) {
					$this->getCollection()->addFieldToFilter('region.default_name' , $cond);
				}
			}
		}
		else if ($field == 'country_id') {
			$cond = $column->getFilter()->getCondition();
			if ($field && isset($cond)) {
				$this->getCollection()->addFieldToFilter('region.country_id' , $cond);
			}
		}
		else {
			return parent::_addColumnFilterToCollection();
		}
	}

  protected function _prepareCollection() {
		$collection = Mage::getModel('improvedaddress/city')->getCollection();
		$collection->getSelect()->join(
			array('region' => Mage::getSingleton('core/resource')->getTableName('directory_country_region')), 
			'main_table.region_id=region.region_id',
			array('region.default_name as region_name', 'region.country_id as country_id')
		);
		//echo $collection->getSelect()->__toString();die('aa');
		$this->setCollection($collection);
		return parent::_prepareCollection();
  }

  protected function _prepareColumns() {				
		$this->addColumn('city_id', array(
			'header'    => Mage::helper('improvedaddress')->__('ID'),
			'align'     =>'right',
			'width'     => '50px',
			'index'     => 'city_id',
		));
		
		$this->addColumn(
			'country_id', array(
				'header' => Mage::helper('improvedaddress')->__('Country Code'),
				'align'  => 'left',
				'width'  => '110px',
				'index'  => 'country_id',
				'type'   => 'country',
			)
		);
		
		$this->addColumn('region_name', array(
			'header'    => Mage::helper('improvedaddress')->__('Region'),
			'align'     =>'right',
			'width'     => '50px',
			'index'     => 'region_name',
		));
		
		$this->addColumn('code', array(
			'header'           => Mage::helper('improvedaddress')->__('City Code'),
			'align'            => 'left',
			'width'            => '110px',
			'index'            => 'code',
			//'editable' =>true,
			'column_css_class' => 'code_td'
		));
		
		$this->addColumn('default_name', array(
			'header'           => Mage::helper('improvedaddress')->__('Default Name'),
			'align'            => 'left',
			'width'            => '110px',
			'index'            => 'default_name',
			//'editable' =>true,
			'column_css_class' => 'default_name'
		));
	  
		$this->addColumn('action',
			array(
				'header'    =>  Mage::helper('improvedaddress')->__('Action'),
				'width'     => '100',
				'type'      => 'action',
				'getter'    => 'getId',
				'actions'   => array(
					array(
						'caption'   => Mage::helper('improvedaddress')->__('Edit'),
						'url'       => array('base'=> '*/*/edit'),
						'field'     => 'id'
					)
				),
				'filter'    => false,
				'sortable'  => false,
				'index'     => 'stores',
				'is_system' => true,
		));
	  
    return parent::_prepareColumns();
  }

	protected function _prepareMassaction() {
		$this->setMassactionIdField('city_id');
		$this->getMassactionBlock()->setFormFieldName('city');

		$this->getMassactionBlock()->addItem('delete', array(
			'label'    => Mage::helper('improvedaddress')->__('Delete'),
			'url'      => $this->getUrl('*/*/massDelete'),
			'confirm'  => Mage::helper('improvedaddress')->__('Are you sure?')
		));
		
		return $this;
	}

  public function getRowUrl($row) {
    return $this->getUrl('*/*/edit', array('id' => $row->getId()));
  }
}