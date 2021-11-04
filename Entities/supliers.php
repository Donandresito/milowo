<?php
Class suppliers {
    private $supplier_id;
    private $company_name;
    private $contact_name;
    private $contact_title;
    private $address;
    private $city;
    private $region character;
    private $postal_code;
    private $country;
    private $phone;
    private $fax;
    private $homepage;

    public function getSupplier_id(){
		return $this->supplier_id;
	}

	public function setSupplier_id($supplier_id){
		$this->supplier_id = $supplier_id;
	}

	public function getCompany_name(){
		return $this->company_name;
	}

	public function setCompany_name($company_name){
		$this->company_name = $company_name;
	}

	public function getContact_name(){
		return $this->contact_name;
	}

	public function setContact_name($contact_name){
		$this->contact_name = $contact_name;
	}

	public function getContact_title(){
		return $this->contact_title;
	}

	public function setContact_title($contact_title){
		$this->contact_title = $contact_title;
	}

	public function getAddress(){
		return $this->address;
	}

	public function setAddress($address){
		$this->address = $address;
	}

	public function getCity(){
		return $this->city;
	}

	public function setCity($city){
		$this->city = $city;
	}

	public function getRegion character(){
		return $this->region character;
	}

	public function setRegion character($region character){
		$this->region character = $region character;
	}

	public function getPostal_code(){
		return $this->postal_code;
	}

	public function setPostal_code($postal_code){
		$this->postal_code = $postal_code;
	}

	public function getCountry(){
		return $this->country;
	}

	public function setCountry($country){
		$this->country = $country;
	}

	public function getPhone(){
		return $this->phone;
	}

	public function setPhone($phone){
		$this->phone = $phone;
	}

	public function getFax(){
		return $this->fax;
	}

	public function setFax($fax){
		$this->fax = $fax;
	}

	public function getHomepage(){
		return $this->homepage;
	}

	public function setHomepage($homepage){
		$this->homepage = $homepage;
	}
}