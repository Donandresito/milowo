<?php
class order_details {
    private $order_id;
    private $product_id; 
    private $unit_price; 
    private $quantity; 
    private $discount;

    public function getOrder_id(){
		return $this->order_id;
	}

	public function setOrder_id($order_id){
		$this->order_id = $order_id;
	}

	public function getProduct_id(){
		return $this->product_id;
	}

	public function setProduct_id($product_id){
		$this->product_id = $product_id;
	}

	public function getUnit_price(){
		return $this->unit_price;
	}

	public function setUnit_price($unit_price){
		$this->unit_price = $unit_price;
	}

	public function getQuantity(){
		return $this->quantity;
	}

	public function setQuantity($quantity){
		$this->quantity = $quantity;
	}

	public function getDiscount(){
		return $this->discount;
	}

	public function setDiscount($discount){
		$this->discount = $discount;
	}
}
