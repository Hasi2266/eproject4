<?php

Class ClientModel extends CI_Model{

	var $client_id;
	var $firstname;
	var $lastname;
	var $email;
	var $company_name;
	var $industry;
	var $no_of_emp;
	var $country;
	var $contact;
	var $username;
	var $password;
	var $confirm_password;
	var $created_date;
	var $image;
	var $role;


	/**
	 * Get the value of firstname
	 */ 
	public function getFirstname()
	{
		return $this->firstname;
	}

	/**
	 * Set the value of firstname
	 *
	 * @return  self
	 */ 
	public function setFirstname($firstname)
	{
		$this->firstname = $firstname;

		return $this;
	}

	/**
	 * Get the value of lastname
	 */ 
	public function getLastname()
	{
		return $this->lastname;
	}

	/**
	 * Set the value of lastname
	 *
	 * @return  self
	 */ 
	public function setLastname($lastname)
	{
		$this->lastname = $lastname;

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
	 * Get the value of company_name
	 */ 
	public function getCompany_name()
	{
		return $this->company_name;
	}

	/**
	 * Set the value of company_name
	 *
	 * @return  self
	 */ 
	public function setCompany_name($company_name)
	{
		$this->company_name = $company_name;

		return $this;
	}

	/**
	 * Get the value of industry
	 */ 
	public function getIndustry()
	{
		return $this->industry;
	}

	/**
	 * Set the value of industry
	 *
	 * @return  self
	 */ 
	public function setIndustry($industry)
	{
		$this->industry = $industry;

		return $this;
	}

	/**
	 * Get the value of no_of_emp
	 */ 
	public function getNo_of_emp()
	{
		return $this->no_of_emp;
	}

	/**
	 * Set the value of no_of_emp
	 *
	 * @return  self
	 */ 
	public function setNo_of_emp($no_of_emp)
	{
		$this->no_of_emp = $no_of_emp;

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
	 * Get the value of confirm_password
	 */ 
	public function getConfirm_password()
	{
		return $this->confirm_password;
	}

	/**
	 * Set the value of confirm_password
	 *
	 * @return  self
	 */ 
	public function setConfirm_password($confirm_password)
	{
		$this->confirm_password = $confirm_password;

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
	 * Get the value of client_id
	 */ 
	public function getClient_id()
	{
		return $this->client_id;
	}

	/**
	 * Set the value of client_id
	 *
	 * @return  self
	 */ 
	public function setClient_id($client_id)
	{
		$this->client_id = $client_id;

		return $this;
	}

	/**
	 * Get the value of contact
	 */ 
	public function getContact()
	{
		return $this->contact;
	}

	/**
	 * Set the value of contact
	 *
	 * @return  self
	 */ 
	public function setContact($contact)
	{
		$this->contact = $contact;

		return $this;
	}

	/**
	 * Get the value of image
	 */ 
	public function getImage()
	{
		return $this->image;
	}

	/**
	 * Set the value of image
	 *
	 * @return  self
	 */ 
	public function setImage($image)
	{
		$this->image = $image;

		return $this;
	}

		/**
	 * Get the value of image
	 */ 
	public function getRole()
	{
		return $this->role;
	}

	/**
	 * Set the value of image
	 *
	 * @return  self
	 */ 
	public function setRole($role)
	{
		$this->role = $role;

		return $this;
	}
}

?>
