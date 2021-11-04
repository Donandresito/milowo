<?php
class employee_territories {
    private $employee_id; 
    private $territory_id;
    
    public function getEmployee_id(){
		return $this->employee_id;
	}

	public function setEmployee_id($employee_id){
		$this->employee_id = $employee_id;
	}

	public function getTerritory_id(){
		return $this->territory_id;
	}

	public function setTerritory_id($territory_id){
		$this->territory_id = $territory_id;
	}

}