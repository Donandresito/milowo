<?php
class customer_demographics {
    private $customer_type_id; 
    private $customer_desc;
    public function getCustomer_type_id(){
		return $this->customer_type_id;
	}

	public function setCustomer_type_id($customer_type_id){
		$this->customer_type_id = $customer_type_id;
	}

	public function getCustomer_desc(){
		return $this->customer_desc;
	}

	public function setCustomer_desc($customer_desc){
		$this->customer_desc = $customer_desc;
	}
}