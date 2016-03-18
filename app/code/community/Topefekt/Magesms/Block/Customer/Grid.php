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
 class Topefekt_Magesms_Block_Customer_Grid extends Mage_Adminhtml_Block_Widget_Grid { public function __construct() { parent::__construct(); $this->setSaveParametersInSession(false); $this->setFilterVisibility(false); $this->setPagerVisibility(false); $this->setId('magesms_customer_grid'); } protected function _construct() { parent::_construct(); } protected function _prepareColumns() { $this->addColumn('lastname', array( 'index' => 'lastname', 'header'=>Mage::helper('magesms')->__('Last name'), 'sortable' => false, ) ); $this->addColumn('firstname', array( 'header'=>Mage::helper('magesms')->__('First name'), 'index' => 'firstname', 'sortable' => false, ) ); $this->addColumn('country_id', array( 'header'=>Mage::helper('magesms')->__('Country'), 'width' => '50', 'index' => 'country_id', 'sortable' => false, ) ); $this->addColumn('Telephone', array( 'header'=>Mage::helper('magesms')->__('Mobile number'), 'width' => '130', 'index' => 'telephone', 'sortable' => false, ) ); if (!Mage::app()->isSingleStoreMode()) { $this->addColumn('website_id', array( 'header' => Mage::helper('customer')->__('Website'), 'align' => 'center', 'width' => '100px', 'type' => 'options', 'options' => Mage::getSingleton('adminhtml/system_store')->getWebsiteOptionHash(true), 'index' => 'website_id', 'sortable' => false, )); } $this->addColumn('action', array( 'header'=>Mage::helper('magesms')->__('Action'), 'align' => 'center', 'width' => '80px', 'type' => 'action', 'getter' => 'getId', 'actions' => array( array( 'caption' => Mage::helper('magesms')->__('REMOVE customer from this list'), 'title' => Mage::helper('magesms')->__('REMOVE customer from this list'), 'url' => array('base'=> '*/*/filter/action/removeCustomer/letter/'.$this->getParam('letter')), 'field' => 'id', 'onclick' => 'removeCustomer(this); return false;', 'class' => 'action-remove', 'id' => '', ) ), 'sortable' => false, 'index' => 'store', 'is_system' => true, ) ); return parent::_prepareColumns(); } public function getRowClickCallback() { return 'openGridRowMagesms'; } } 