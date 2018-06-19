<?php
class Cammino_Depositpayment_Model_Default extends Mage_Payment_Model_Method_Abstract
{
    protected $_code = 'depositpayment';

    public function getOrderPlaceRedirectUrl() {
		return Mage::getUrl('depositpayment/default/success');
	}
}