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
 class Topefekt_Magesms_Block_Marketing_Template extends Mage_Adminhtml_Block_Widget_Grid { public function __construct() { parent::__construct(); $this->setSaveParametersInSession(false); $this->setFilterVisibility(false); $this->setPagerVisibility(false); $this->setDefaultSort('date'); $this->setDefaultDir('DESC'); $this->setId('magesms_filter_template_grid'); $this->setUseAjax(true); } protected function _prepareCollection() { $iff7e46827cbb6547116c592bf800f4687428abf9 = Mage::getModel('magesms/marketing_filter')->getCollection(); $this->setCollection($iff7e46827cbb6547116c592bf800f4687428abf9); parent::_prepareCollection(); return $this; } protected function _prepareColumns() { $this->addColumn('name', array( 'header'=>Mage::helper('magesms')->__('Name'), 'index' => 'name', 'sortable' => false, ) ); $this->addColumn('date', array( 'header'=>Mage::helper('magesms')->__('Date'), 'index' => 'date', 'width' => '150px', 'type' => 'datetime', 'sortable' => false, ) ); $this->addColumn('action', array( 'header'=>Mage::helper('magesms')->__('Action'), 'align' => 'center', 'width' => '80px', 'type' => 'action', 'getter' => 'getId', 'actions' => array( array( 'caption' => Mage::helper('magesms')->__('REMOVE'), 'title' => Mage::helper('magesms')->__('REMOVE'), 'url' => array('base'=> '*/*/filter', 'params'=> array('action' => 'remove')), 'field' => 'id', 'onclick' => 'return window.submitRemoveFilter(this);', 'class' => 'action-remove', 'id' => '', ) ), 'sortable' => false, 'index' => 'store', 'is_system' => true, ) ); return parent::_prepareColumns(); } public function getRowClickCallback() { return 'submitRestoreFilter'; } public function getRowUrl($iebe3a16a01f87f9a4ebbb9731163db3e3e64cc3d) { return $this->getUrl('*/*/filter', array('action' => 'restore', 'id' => $iebe3a16a01f87f9a4ebbb9731163db3e3e64cc3d->getId())); } } 