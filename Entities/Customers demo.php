<?php
class customer_customer_demo {
    private $customer_id;
    private $customer_type_id;
    public function getCustomer_id(){
		return $this->customer_id;
	}

	public function setCustomer_id($customer_id){
		$this->customer_id = $customer_id;
	}

	public function getCustomer_type_id(){
		return $this->customer_type_id;
	}

	public function setCustomer_type_id($customer_type_id){
		$this->customer_type_id = $customer_type_id;
	}
}
