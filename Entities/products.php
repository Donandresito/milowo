<?php

class products {
    private $product_id;
    private $product_name; 
    private $supplier_id; 
    private $category_id; 
    private $quantity_per_unit; 
    private $unit_price; 
    private $units_in_stock;
    private $units_on_order; 
    private $reorder_level; 
    private $discontinued; 

    public function getProduct_id(){
		return $this->product_id;
	}

	public function setProduct_id($product_id){
		$this->product_id = $product_id;
	}

	public function getProduct_name(){
		return $this->product_name;
	}

	public function setProduct_name($product_name){
		$this->product_name = $product_name;
	}

	public function getSupplier_id(){
		return $this->supplier_id;
	}

	public function setSupplier_id($supplier_id){
		$this->supplier_id = $supplier_id;
	}

	public function getCategory_id(){
		return $this->category_id;
	}

	public function setCategory_id($category_id){
		$this->category_id = $category_id;
	}

	public function getQuantity_per_unit(){
		return $this->quantity_per_unit;
	}

	public function setQuantity_per_unit($quantity_per_unit){
		$this->quantity_per_unit = $quantity_per_unit;
	}

	public function getUnit_price(){
		return $this->unit_price;
	}

	public function setUnit_price($unit_price){
		$this->unit_price = $unit_price;
	}

	public function getUnits_in_stock(){
		return $this->units_in_stock;
	}

	public function setUnits_in_stock($units_in_stock){
		$this->units_in_stock = $units_in_stock;
	}

	public function getUnits_on_order(){
		return $this->units_on_order;
	}

	public function setUnits_on_order($units_on_order){
		$this->units_on_order = $units_on_order;
	}

	public function getReorder_level(){
		return $this->reorder_level;
	}

	public function setReorder_level($reorder_level){
		$this->reorder_level = $reorder_level;
	}

	public function getDiscontinued(){
		return $this->discontinued;
	}

	public function setDiscontinued($discontinued){
		$this->discontinued = $discontinued;
	}
}