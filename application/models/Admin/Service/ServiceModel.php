<?php

Class ServiceModel extends CI_Model{

	var $service_id;
	var $date;
	var $created_by;
	var $name;
	var $category_id;
	var $description;
	var $currency;
	var $price;
	var $img;
	var $created_date;

	

	/**
	 * Get the value of service_id
	 */ 
	public function getService_id()
	{
		return $this->service_id;
	}

	/**
	 * Set the value of service_id
	 *
	 * @return  self
	 */ 
	public function setService_id($service_id)
	{
		$this->service_id = $service_id;

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
	 * Get the value of category_id
	 */ 
	public function getCategory_id()
	{
		return $this->category_id;
	}

	/**
	 * Set the value of category_id
	 *
	 * @return  self
	 */ 
	public function setCategory_id($category_id)
	{
		$this->category_id = $category_id;

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
	 * Get the value of img
	 */ 
	public function getImg()
	{
		return $this->img;
	}

	/**
	 * Set the value of img
	 *
	 * @return  self
	 */ 
	public function setImg($img)
	{
		$this->img = $img;

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
}


?>
