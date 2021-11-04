<?php

class customers
{
    private $customer_id;
    private $company_name;
    private $contact_name;
    private $contact_title;
    private $address;
    private $city;
    private $region;
    private $postal_code;
    private $country;
    private $phone;
    private $fax;
    public function getEmployee_id()
    {
        return $this->employee_id;
    }

    public function setEmployee_id($employee_id)
    {
        $this->employee_id = $employee_id;
    }

    public function getLast_name(){
        return $this->last_name;
    }

    public function setLast_name($last_name){
        $this->last_name = $last_name;
    }

    public function getFirst_name(){
        return $this->first_name;
    }

    public function setFirst_name($first_name){
        $this->first_name = $first_name;
    }

    public function getTitle(){
        return $this->title;
    }

    public function setTitle($title){
        $this->title = $title;
    }

    public function getTitle_of_courtesy(){
        return $this->title_of_courtesy;
    }

    public function setTitle_of_courtesy($title_of_courtesy){
        $this->title_of_courtesy = $title_of_courtesy;
    }

    public function getHire_date(){
        return $this->hire_date;
    }

    public function setHire_date($hire_date){
        $this->hire_date = $hire_date;
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

    public function getRegion(){
        return $this->region;
    }

    public function setRegion($region){
        $this->region = $region;
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

    public function getHome_phone(){
        return $this->home_phone;
    }

    public function setHome_phone($home_phone){
        $this->home_phone = $home_phone;
    }

    public function getExtension(){
        return $this->extension;
    }

    public function setExtension($extension){
        $this->extension = $extension;
    }

    public function getPhoto(){
        return $this->photo;
    }

    public function setPhoto($photo){
        $this->photo = $photo;
    }

    public function getNotes(){
        return $this->notes;
    }

    public function setNotes($notes){
        $this->notes = $notes;
    }

    public function getReports_to(){
        return $this->reports_to;
    }

    public function setReports_to($reports_to){
        $this->reports_to = $reports_to;
    }

    public function getPhoto_path(){
        return $this->photo_path;
    }

    public function setPhoto_path($photo_path){
        $this->photo_path = $photo_path;
    }

    public function getEmail(){
        return $this->email;
    }

    public function setEmail($email){
        $this->email = $email;
    }

    public function getRol_id(){
        return $this->rol_id;
    }

    public function setRol_id($rol_id){
        $this->rol_id = $rol_id;
    }



}