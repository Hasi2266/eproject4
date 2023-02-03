<?php

Class PackageModel extends CI_Model{

	var $package_id;
	var $name;
	var $team;
	var $date;
	var $created_by;
	var $flieds;
	var $description;
	var $currency;
	var $duration;
	var $price;
	var $created_date;

	

	/**
	 * Get the value of package_id
	 */ 
	public function getPackage_id()
	{
		return $this->package_id;
	}


	/**
	 * Set the value of package_id
	 *
	 * @return  self
	 */ 
	public function setPackage_id($package_id)
	{
		$this->package_id = $package_id;

		return $this;
	}

	/**
	 * Get the value of name
	 */ 
	public function getName()
	{
		return $this->name;
	}

	/**
	 * Set the value of name
	 *
	 * @return  self
	 */ 
	public function setName($name)
	{
		$this->name = $name;

		return $this;
	}

	/**
	 * Get the value of date
	 */ 
	public function getDate()
	{
		return $this->date;
	}

	/**
	 * Set the value of date
	 *
	 * @return  self
	 */ 
	public function setDate($date)
	{
		$this->date = $date;

		return $this;
	}

	/**
	 * Get the value of created_by
	 */ 
	public function getCreated_by()
	{
		return $this->created_by;
	}

	/**
	 * Set the value of created_by
	 *
	 * @return  self
	 */ 
	public function setCreated_by($created_by)
	{
		$this->created_by = $created_by;

		return $this;
	}

	/**
	 * Get the value of flieds
	 */ 
	public function getFlieds()
	{
		return $this->flieds;
	}

	/**
	 * Set the value of flieds
	 *
	 * @return  self
	 */ 
	public function setFlieds($flieds)
	{
		$this->flieds = $flieds;

		return $this;
	}

	/**
	 * Get the value of description
	 */ 
	public function getDescription()
	{
		return $this->description;
	}

	/**
	 * Set the value of description
	 *
	 * @return  self
	 */ 
	public function setDescription($description)
	{
		$this->description = $description;

		return $this;
	}

	/**
	 * Get the value of currency
	 */ 
	public function getCurrency()
	{
		return $this->currency;
	}

	/**
	 * Set the value of currency
	 *
	 * @return  self
	 */ 
	public function setCurrency($currency)
	{
		$this->currency = $currency;

		return $this;
	}

	/**
	 * Get the value of price
	 */ 
	public function getPrice()
	{
		return $this->price;
	}

	/**
	 * Set the value of price
	 *
	 * @return  self
	 */ 
	public function setPrice($price)
	{
		$this->price = $price;

		return $this;
	}

	/**
	 * Get the value of created_date
	 */ 
	public function getCreated_date()
	{
		return $this->created_date;
	}

	/**
	 * Set the value of created_date
	 *
	 * @return  self
	 */ 
	public function setCreated_date($created_date)
	{
		$this->created_date = $created_date;

		return $this;
	}

	/**
	 * Get the value of team
	 */ 
	public function getTeam()
	{
		return $this->team;
	}

	/**
	 * Set the value of team
	 *
	 * @return  self
	 */ 
	public function setTeam($team)
	{
		$this->team = $team;

		return $this;
	}

	/**
	 * Get the value of duration
	 */ 
	public function getDuration()
	{
		return $this->duration;
	}

	/**
	 * Set the value of duration
	 *
	 * @return  self
	 */ 
	public function setDuration($duration)
	{
		$this->duration = $duration;

		return $this;
	}
}


?>
