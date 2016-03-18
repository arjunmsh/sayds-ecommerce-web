<?php
class AK_Deliverytime_Model_Mysql4_Timeslot extends Mage_Core_Model_Mysql4_Abstract
{
    protected function _construct()
    {
        $this->_init("deliverytime/timeslot", "id");
    }
}