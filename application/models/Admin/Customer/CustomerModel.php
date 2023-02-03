<?php

Class CustomerModel extends CI_Model{

	var $customer_id;
	var $name;
	var $username;
	var $password;
	var $lastActive;
	var $dateRegister;
	var $email;
	var $projects;
	var $totalSpend;
	var $aov;
	var $country;
	var $city;
	var $region;
	var $postalCode;
	var $created_date;
	
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
	 * Get the value of username
	 */ 
	public function getUsername()
	{
		return $this->username;
	}

	/**
	 * Set the value of username
	 *
	 * @return  self
	 */ 
	public function setUsername($username)
	{
		$this->username = $username;

		return $this;
	}

	/**
	 * Get the value of lastActive
	 */ 
	public function getLastActive()
	{
		return $this->lastActive;
	}

	/**
	 * Set the value of lastActive
	 *
	 * @return  self
	 */ 
	public function setLastActive($lastActive)
	{
		$this->lastActive = $lastActive;

		return $this;
	}

	/**
	 * Get the value of dateRegister
	 */ 
	public function getDateRegister()
	{
		return $this->dateRegister;
	}

	/**
	 * Set the value of dateRegister
	 *
	 * @return  self
	 */ 
	public function setDateRegister($dateRegister)
	{
		$this->dateRegister = $dateRegister;

		return $this;
	}

	/**
	 * Get the value of email
	 */ 
	public function getEmail()
	{
		return $this->email;
	}

	/**
	 * Set the value of email
	 *
	 * @return  self
	 */ 
	public function setEmail($email)
	{
		$this->email = $email;

		return $this;
	}

	/**
	 * Get the value of orders
	 */ 
	public function getOrders()
	{
		return $this->orders;
	}

	/**
	 * Set the value of orders
	 *
	 * @return  self
	 */ 
	public function setOrders($orders)
	{
		$this->orders = $orders;

		return $this;
	}

	/**
	 * Get the value of totalSpend
	 */ 
	public function getTotalSpend()
	{
		return $this->totalSpend;
	}

	/**
	 * Set the value of totalSpend
	 *
	 * @return  self
	 */ 
	public function setTotalSpend($totalSpend)
	{
		$this->totalSpend = $totalSpend;

		return $this;
	}

	/**
	 * Get the value of aov
	 */ 
	public function getAov()
	{
		return $this->aov;
	}

	/**
	 * Set the value of aov
	 *
	 * @return  self
	 */ 
	public function setAov($aov)
	{
		$this->aov = $aov;

		return $this;
	}

	/**
	 * Get the value of country
	 */ 
	public function getCountry()
	{
		return $this->country;
	}

	/**
	 * Set the value of country
	 *
	 * @return  self
	 */ 
	public function setCountry($country)
	{
		$this->country = $country;

		return $this;
	}

	/**
	 * Get the value of city
	 */ 
	public function getCity()
	{
		return $this->city;
	}

	/**
	 * Set the value of city
	 *
	 * @return  self
	 */ 
	public function setCity($city)
	{
		$this->city = $city;

		return $this;
	}

	/**
	 * Get the value of region
	 */ 
	public function getRegion()
	{
		return $this->region;
	}

	/**
	 * Set the value of region
	 *
	 * @return  self
	 */ 
	public function setRegion($region)
	{
		$this->region = $region;

		return $this;
	}

	/**
	 * Get the value of postalCode
	 */ 
	public function getPostalCode()
	{
		return $this->postalCode;
	}

	/**
	 * Set the value of postalCode
	 *
	 * @return  self
	 */ 
	public function setPostalCode($postalCode)
	{
		$this->postalCode = $postalCode;

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
	 * Get the value of customer_id
	 */ 
	public function getCustomer_id()
	{
		return $this->customer_id;
	}

	/**
	 * Set the value of customer_id
	 *
	 * @return  self
	 */ 
	public function setCustomer_id($customer_id)
	{
		$this->customer_id = $customer_id;

		return $this;
	}

	/**
	 * Get the value of password
	 */ 
	public function getPassword()
	{
		return $this->password;
	}

	/**
	 * Set the value of password
	 *
	 * @return  self
	 */ 
	public function setPassword($password)
	{
		$this->password = $password;

		return $this;
	}

	/**
	 * Get the value of projects
	 */ 
	public function getProjects()
	{
		return $this->projects;
	}

	/**
	 * Set the value of projects
	 *
	 * @return  self
	 */ 
	public function setProjects($projects)
	{
		$this->projects = $projects;

		return $this;
	}
}


?>
