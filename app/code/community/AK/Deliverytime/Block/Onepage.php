<?php

class AK_Deliverytime_Block_Onepage extends Mage_Checkout_Block_Onepage
{
    public function getSteps()
    {
        $steps = array();

        if (!$this->isCustomerLoggedIn()) {
            $steps['login'] = $this->getCheckout()->getStepData('login');
        }
		
        //check that module is enable or not
        if (Mage::getStoreConfig('deliverytime/deliverytime_general/enabled')){
        	$stepCodes = array('billing', 'shipping', 'shipping_method', 'payment', 'deliverytime', 'review');
        }
        else {
        	$stepCodes = array('billing', 'shipping', 'shipping_method', 'payment', 'review');
        }
        foreach ($stepCodes as $step) {
            $steps[$step] = $this->getCheckout()->getStepData($step);
        }
        
        return $steps;
    }
}