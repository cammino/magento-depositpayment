<?php
/**
* 
*/
class Cammino_Depositpayment_Block_Success extends Mage_Payment_Block_Form
{
	private $_order;

	public function _construct() {
		$this->_orderValue = Mage::registry("depositpayment_ordervalue");
		$this->_orderId = Mage::registry("depositpayment_orderid");
		$this->setTemplate("depositpayment/success.phtml");
		parent::_construct();
	}

	public function getOrderValue(){
		return $this->_orderValue;
	}

	public function getInstructions() {
		return Mage::getStoreConfig('payment/depositpayment/instructions');
	}

	public function getAdditionalInstructions() {
		return Mage::getStoreConfig('payment/depositpayment/additional_instructions');
	}

	public function getOrderId(){
		return $this->_orderId;
	}
	
}