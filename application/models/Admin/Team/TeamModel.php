<?php

Class TeamModel extends CI_Model{

	var $team_id;
	var $name;
	var $parent_category;
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
	 * Get the value of parent_category
	 */ 
	public function getParent_category()
	{
		return $this->parent_category;
	}

	/**
	 * Set the value of parent_category
	 *
	 * @return  self
	 */ 
	public function setParent_category($parent_category)
	{
		$this->parent_category = $parent_category;

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
	 * Get the value of team_id
	 */ 
	public function getTeam_id()
	{
		return $this->team_id;
	}

	/**
	 * Set the value of team_id
	 *
	 * @return  self
	 */ 
	public function setTeam_id($team_id)
	{
		$this->team_id = $team_id;

		return $this;
	}
}


?>
