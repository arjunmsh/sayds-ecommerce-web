<?php
class AK_Deliverytime_Model_Observer {
	
	const ORDER_ATTRIBUTE_FHC_ID = 'deliverytime';
	
	public function hookToOrderSaveEvent() {
		//if (Mage::helper('deliverytime')->isEnabled()) {
			$order = new Mage_Sales_Model_Order ();
			$incrementId = Mage::getSingleton ( 'checkout/session' )->getLastRealOrderId ();
			$order->loadByIncrementId ( $incrementId );
			
			// Fetch the data 
			$_deliverytime_data = null;
			$_deliverytime_data = Mage::getSingleton ( 'core/session' )->getAkDeliverytime();
			$model = Mage::getModel ( 'deliverytime/timeslot' )->setData ( unserialize ( $_deliverytime_data ) );
			$model->setData ( "order_id",$order["entity_id"] );
			try {
				$insertId = $model->save ()->getId ();
				Mage::log ( "Data successfully inserted. Insert ID: " . $insertId, null, 'mylog.log');
			} catch ( Exception $e ) {
				Mage::log ( "EXCEPTION " . $e->getMessage (), null, 'mylog.log' );
			}
		//}
	}
}