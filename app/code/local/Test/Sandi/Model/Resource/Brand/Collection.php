<?php

class Test_Sandi_Model_Resource_Brand_Collection extends Mage_Core_Model_Resource_Db_Collection_Abstract
{
    public function _construct()
    {
        $this->_init('test_sandi/brand');
    }
}
