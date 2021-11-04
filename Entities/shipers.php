<?php
class shippers {
    private $shipper_id;
    private$company_name; 
    private $phone; 

    public function getShipper_id(){
		return $this->shipper_id;
	}

	public function setShipper_id($shipper_id){
		$this->shipper_id = $shipper_id;
	}

	public function getPhone(){
		return $this->phone;
	}

	public function setPhone($phone){
		$this->phone = $phone;
	}
}