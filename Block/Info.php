<?php

class Cammino_Depositpayment_Block_Info extends Mage_Payment_Block_Info {
    protected function _construct() {
        parent::_construct();
        $this->setTemplate('depositpayment/info.phtml');
    }
}
