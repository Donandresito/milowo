<?php
class region {
    private $region_id;
    private $region_description; 

    public function getRegion_id(){
		return $this->region_id;
	}

	public function setRegion_id($region_id){
		$this->region_id = $region_id;
	}

	public function getRegion_description(){
		return $this->region_description;
	}

	public function setRegion_description($region_description){
		$this->region_description = $region_description;
	}
}
