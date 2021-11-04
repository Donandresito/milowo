<?php


Class territories {
    private $territory_id;
    private $territory_description;
    private $region_id;

    public function getTerritory_id(){
		return $this->territory_id;
	}

	public function setTerritory_id($territory_id){
		$this->territory_id = $territory_id;
	}

	public function getTerritory_description(){
		return $this->territory_description;
	}

	public function setTerritory_description($territory_description){
		$this->territory_description = $territory_description;
	}

	public function getRegion_id(){
		return $this->region_id;
	}

	public function setRegion_id($region_id){
		$this->region_id = $region_id;
	}
}