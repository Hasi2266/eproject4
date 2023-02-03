<?php

Class AdminModel extends CI_Model{

	var $admin_id;
	var $username;
	var $email;
	var $password;
	var $created_date;


	/**
	 * Get the value of admin_id
	 */ 
	public function getAdmin_id()
	{
		return $this->admin_id;
	}

	/**
	 * Set the value of admin_id
	 *
	 * @return  self
	 */ 
	public function setAdmin_id($admin_id)
	{
		$this->admin_id = $admin_id;

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
}

?>
