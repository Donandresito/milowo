<?php

class Employees
{
    private  $employee_id;
    private  $last_name;
    private  $first_name;
    private  $title;
    private  $title_of_courtesy;
    private  $birth_date;
    private  $hire_date;
    private  $address;
    private  $city;
    private  $region;
    private  $postal_code;
    private  $country;
    private  $home_phone;
    private  $extension;
    private  $photo;
    private  $notes;
    private  $reports_to;
    private  $photo_path;
    private  $email;
    private  $rol;


    public function getEmployeeId()
    {
        return $this->employee_id;
    }

    public function setEmployeeId($employee_id)
    {
        $this->employee_id = $employee_id;
    }

    public function getLastName()
    {
        return $this->last_name;
    }

    public function setLastName($last_name)
    {
        $this->last_name = $last_name;
    }

    public function getFirstName()
    {
        return $this->first_name;
    }

    public function setFirstName($first_name)
    {
        $this->first_name = $first_name;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function setTitle($title)
    {
        $this->title = $title;
    }

    public function getTitleOfCourtesy()
    {
        return $this->title_of_courtesy;
    }

    public function setTitleOfCourtesy($title_of_courtesy)
    {
        $this->title_of_courtesy = $title_of_courtesy;
    }

    public function getBirthDate()
    {
        return $this->birth_date;
    }

    public function setBirthDate($birth_date)
    {
        $this->birth_date = $birth_date;
    }

    public function getHireDate()
    {
        return $this->hire_date;
    }

    public function setHireDate($hire_date)
    {
        $this->hire_date = $hire_date;
    }

    public function getAddress()
    {
        return $this->address;
    }

    public function setAddress($address)
    {
        $this->address = $address;
    }

    public function getCity()
    {
        return $this->city;
    }

    public function setCity($city)
    {
        $this->city = $city;
    }

    public function getRegion()
    {
        return $this->region;
    }

    public function setRegion($region)
    {
        $this->region = $region;
    }

    public function getPostalCode()
    {
        return $this->postal_code;
    }

    public function setPostalCode($postal_code)
    {
        $this->postal_code = $postal_code;
    }

    public function getCountry()
    {
        return $this->country;
    }

    public function setCountry($country)
    {
        $this->country = $country;
    }

    public function getHomePhone()
    {
        return $this->home_phone;
    }

    public function setHomePhone($home_phone)
    {
        $this->home_phone = $home_phone;
    }

    public function getExtension()
    {
        return $this->extension;
    }

    public function setExtension($extension)
    {
        $this->extension = $extension;
    }

    public function getPhoto()
    {
        return $this->photo;
    }

    public function setPhoto($photo)
    {
        $this->photo = $photo;
    }

    public function getNotes()
    {
        return $this->notes;
    }

    public function setNotes($notes)
    {
        $this->notes = $notes;
    }

    public function getReportsTo()
    {
        return $this->reports_to;
    }

    public function setReportsTo($reports_to)
    {
        $this->reports_to = $reports_to;
    }

    public function getPhotoPath()
    {
        return $this->photo_path;
    }

    public function setPhotoPath($photo_path)
    {
        $this->photo_path = $photo_path;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function getRol()
    {
        return $this->rol;
    }

    public function setRol($rol)
    {
        $this->rol = $rol;
    }
}