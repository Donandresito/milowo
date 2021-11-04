<?php

include_once ($_SERVER['DOCUMENT_ROOT'].'/miloowo/dir.php');
include(ENTITIES_PATH."employees.php");


class EmployersDao extends conexion
{
    public static function createEmployees($objEmployers): PDO
    {
        $employees_id   = $objEmployers -> getemployeeid();
        $last_name      = $objEmployers -> getLastName();
        $first_name     = $objEmployers -> getFirstName();
        $title          = $objEmployers -> getTitle();
        $title_of_courtesy  = $objEmployers -> getTitleOfCourtesy();
        $birth_date     = $objEmployers -> getBirthDate();
        $hire_date      = $objEmployers -> getHireDate();
        $address        = $objEmployers -> getAddress();
        $city           = $objEmployers -> getCity();
        $region         = $objEmployers -> getRegion();
        $postal_code    = $objEmployers -> getPostalCode();
        $country        = $objEmployers -> getCountry();
        $home_phone     = $objEmployers -> getHomePhone();
        $extension      = $objEmployers -> getExtension();
        $photo          = $objEmployers -> getPhoto();
        $notes          = $objEmployers -> getNotes();
        $reports_to     = $objEmployers -> getReportsTo();
        $photo_path     = $objEmployers -> getPhotoPath();
        $email          = $objEmployers -> etEmail();
        $rol            = $objEmployers -> getRol();
        $query = "INSERT INTO Employees (employees_id,last_name,first_name,tittle,tittle_of_courtesy,birth_date,hire_date,address,city, postal_code,country,home_phone,extension,photo,notes,reports_to,photo_path,email,rol)
                VALUES (:employees_id,:last_name,:first_name,:tittle,:tittle_of_courtesy,:birth_date,:hire_date,:address,:city,:postal_code,:country,:home_phone,:extension,:photo,:notes,:reports_to:,photo_path,:email,:rol)";

    }


}