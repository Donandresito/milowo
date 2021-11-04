<?php

class orders {
    private $order_id;
    private $customer_id; 
    private $employee_id; 
    private $order_date; 
    private $required_date; 
    private $shipped_date; 
    private $ship_via; 
    private $freight; 
    private $ship_name; 
    private $ship_address; 
    private $ship_city; 
    private $ship_region; 
    private $ship_postal_code;
    private $ship_country;

    public function getOrder_id(){
		return $this->order_id;
	}

	public function setOrder_id($order_id){
		$this->order_id = $order_id;
	}

	public function getCustomer_id(){
		return $this->customer_id;
	}

	public function setCustomer_id($customer_id){
		$this->customer_id = $customer_id;
	}

	public function getEmployee_id(){
		return $this->employee_id;
	}

	public function setEmployee_id($employee_id){
		$this->employee_id = $employee_id;
	}

	public function getOrder_date(){
		return $this->order_date;
	}

	public function setOrder_date($order_date){
		$this->order_date = $order_date;
	}

	public function getRequired_date(){
		return $this->required_date;
	}

	public function setRequired_date($required_date){
		$this->required_date = $required_date;
	}

	public function getShipped_date(){
		return $this->shipped_date;
	}

	public function setShipped_date($shipped_date){
		$this->shipped_date = $shipped_date;
	}

	public function getShip_via(){
		return $this->ship_via;
	}

	public function setShip_via($ship_via){
		$this->ship_via = $ship_via;
	}

	public function getFreight(){
		return $this->freight;
	}

	public function setFreight($freight){
		$this->freight = $freight;
	}

	public function getShip_name(){
		return $this->ship_name;
	}

	public function setShip_name($ship_name){
		$this->ship_name = $ship_name;
	}

	public function getShip_address(){
		return $this->ship_address;
	}

	public function setShip_address($ship_address){
		$this->ship_address = $ship_address;
	}

	public function getShip_city(){
		return $this->ship_city;
	}

	public function setShip_city($ship_city){
		$this->ship_city = $ship_city;
	}

	public function getShip_region(){
		return $this->ship_region;
	}

	public function setShip_region($ship_region){
		$this->ship_region = $ship_region;
	}

	public function getShip_postal_code(){
		return $this->ship_postal_code;
	}

	public function setShip_postal_code($ship_postal_code){
		$this->ship_postal_code = $ship_postal_code;
	}

	public function getShip_country(){
		return $this->ship_country;
	}

	public function setShip_country($ship_country){
		$this->ship_country = $ship_country;
	}
}