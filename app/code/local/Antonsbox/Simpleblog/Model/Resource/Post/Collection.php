<?php

class Antonsbox_Simpleblog_Model_Resource_Post_Collection extends Mage_Core_Model_Mysql4_Collection_Abstract
{

    public function _construct()
    {
        parent::_construct();
        $this->_init('simpleblog/post');
    }

}