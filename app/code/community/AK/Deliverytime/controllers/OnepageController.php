<?php

require_once 'Mage/Checkout/controllers/OnepageController.php';

class AK_Deliverytime_OnepageController extends Mage_Checkout_OnepageController
{
    public function doSomestuffAction()
    {
		if(true) {
			$result['update_section'] = array(
            	'name' => 'payment-method',
                'html' => $this->_getPaymentMethodsHtml()
			);					
		}
    	else {
			$result['goto_section'] = 'shipping';
		}		
    }    

    public function savePaymentAction()
    {
    	$this->_expireAjax();
        if ($this->getRequest()->isPost()) {
            $data = $this->getRequest()->getPost('payment', array());

             try {
                $result = $this->getOnepage()->savePayment($data);
            }
            catch (Mage_Payment_Exception $e) {
                if ($e->getFields()) {
                    $result['fields'] = $e->getFields();
                }
                $result['error'] = $e->getMessage();
            }
            catch (Exception $e) {
                $result['error'] = $e->getMessage();
            }
            $redirectUrl = $this->getOnePage()->getQuote()->getPayment()->getCheckoutRedirectUrl();
            if (empty($result['error']) && !$redirectUrl) {
            	
            	//check the module is enable or not
            	if (Mage::getStoreConfig('deliverytime/deliverytime_general/enabled')){
					$this->loadLayout('checkout_onepage_deliverytime');
					$result['goto_section'] = 'deliverytime';
            	}
            	else {
            		$this->loadLayout('checkout_onepage_review');
            		
            		$result['goto_section'] = 'review';
            		$result['update_section'] = array(
            				'name' => 'review',
            				'html' => $this->_getReviewHtml()
            		);
            	}
            }

            if ($redirectUrl) {
                $result['redirect'] = $redirectUrl;
            }

            $this->getResponse()->setBody(Zend_Json::encode($result));
        }
    }

    public function saveDeliverytimeAction()
    {
    	$this->_expireAjax();
        if ($this->getRequest()->isPost()) {
            
        	$timeslot = $this->getRequest()->getPost('timeslot',"");
        	
        		
        	Mage::getSingleton('core/session')->setAkDeliverytime(serialize(array(				
			'timeslot' =>$timeslot,			
			)));

			$result = array();
            
            $redirectUrl = $this->getOnePage()->getQuote()->getPayment()->getCheckoutRedirectUrl();
            if (!$redirectUrl) {
                $this->loadLayout('checkout_onepage_review');

                $result['goto_section'] = 'review';
                $result['update_section'] = array(
                    'name' => 'review',
                    'html' => $this->_getReviewHtml()
                );

            }

            if ($redirectUrl) {
                $result['redirect'] = $redirectUrl;
            }

            $this->getResponse()->setBody(Zend_Json::encode($result));
        }
    }    
}