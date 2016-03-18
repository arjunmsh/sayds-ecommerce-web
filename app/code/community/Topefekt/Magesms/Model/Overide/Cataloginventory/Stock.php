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
class Topefekt_Magesms_Model_Overide_Cataloginventory_Stock extends Mage_CatalogInventory_Model_Resource_Stock { public function correctItemsQty($i035599939f2d68a8936ff060ff10cbf982274764, $i18f5dd94efe6ea5893731db7537fa44426b4bba8, $i1db7e26fa11aa195a8425de5fe96b99a8a8eda0e = '-') { $i12f98417e3df53ca8bc49671d89c1a89cdceeb8b = array(); foreach($i18f5dd94efe6ea5893731db7537fa44426b4bba8 as $i670253c23c6fcba76bc4256a88fdd8fbc1041039=>$i3ca4aff6918962dee4a8054ca52f13ef3b6bab08) { $i6e09c956df8f33f0146b262c4774ff2fe53579bd = Mage::getModel('cataloginventory/stock_item')->loadByProduct($i670253c23c6fcba76bc4256a88fdd8fbc1041039); if (Mage::registry('magesms_stock_item_'.$i670253c23c6fcba76bc4256a88fdd8fbc1041039)) Mage::unregister('magesms_stock_item_'.$i670253c23c6fcba76bc4256a88fdd8fbc1041039); Mage::register('magesms_stock_item_'.$i670253c23c6fcba76bc4256a88fdd8fbc1041039, $i6e09c956df8f33f0146b262c4774ff2fe53579bd->getData()); } parent::correctItemsQty($i035599939f2d68a8936ff060ff10cbf982274764, $i18f5dd94efe6ea5893731db7537fa44426b4bba8, $i1db7e26fa11aa195a8425de5fe96b99a8a8eda0e); return $this; } } 