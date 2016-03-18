<?php

class AK_Deliverytime_Block_Onepage_Deliverytime extends Mage_Checkout_Block_Onepage_Abstract
{
    protected function _construct()
    {    	
        $this->getCheckout()->setStepData('deliverytime', array(
            'label'     => Mage::helper('checkout')->__('Select Delivery Time'),
            'is_show'   => true
        ));
        
        parent::_construct();
    }
}