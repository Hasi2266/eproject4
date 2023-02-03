<?php

Class ProjectModel extends CI_Model{

	var $project_id;
	var $name;
	var $requirement;
	var $estimated_budget;
	var $end_date;
	var $date;
	var $type;
	var $category_id;
	var $required_skills;
	var $created_date;
	var $images;
	var $services;
	var $packages;
	var $milestone_name;
	var $milestone_weight;
	var $milestone_progress;
	var $milestone_description;
	var $start_date;
	var $milestone_end_date;
	var $update_date;
	var $progress;
	
	

	/**
	 * Get the value of project_id
	 */ 
	public function getProject_id()
	{
		return $this->project_id;
	}

	/**
	 * Set the value of project_id
	 *
	 * @return  self
	 */ 
	public function setProject_id($project_id)
	{
		$this->project_id = $project_id;

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
	 * Get the value of requirement
	 */ 
	public function getRequirement()
	{
		return $this->requirement;
	}

	/**
	 * Set the value of requirement
	 *
	 * @return  self
	 */ 
	public function setRequirement($requirement)
	{
		$this->requirement = $requirement;

		return $this;
	}

	/**
	 * Get the value of estimated_budget
	 */ 
	public function getEstimated_budget()
	{
		return $this->estimated_budget;
	}

	/**
	 * Set the value of estimated_budget
	 *
	 * @return  self
	 */ 
	public function setEstimated_budget($estimated_budget)
	{
		$this->estimated_budget = $estimated_budget;

		return $this;
	}

	/**
	 * Get the value of end_date
	 */ 
	public function getEnd_date()
	{
		return $this->end_date;
	}

	/**
	 * Set the value of end_date
	 *
	 * @return  self
	 */ 
	public function setEnd_date($end_date)
	{
		$this->end_date = $end_date;

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
	 * Get the value of type
	 */ 
	public function getType()
	{
		return $this->type;
	}

	/**
	 * Set the value of type
	 *
	 * @return  self
	 */ 
	public function setType($type)
	{
		$this->type = $type;

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
	 * Get the value of required_skills
	 */ 
	public function getRequired_skills()
	{
		return $this->required_skills;
	}

	/**
	 * Set the value of required_skills
	 *
	 * @return  self
	 */ 
	public function setRequired_skills($required_skills)
	{
		$this->required_skills = $required_skills;

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
	 * Get the value of images
	 */ 
	public function getImages()
	{
		return $this->images;
	}

	/**
	 * Set the value of images
	 *
	 * @return  self
	 */ 
	public function setImages($images)
	{
		$this->images = $images;

		return $this;
	}

	/**
	 * Get the value of services
	 */ 
	public function getServices()
	{
		return $this->services;
	}

	/**
	 * Set the value of services
	 *
	 * @return  self
	 */ 
	public function setServices($services)
	{
		$this->services = $services;

		return $this;
	}

	/**
	 * Get the value of packages
	 */ 
	public function getPackages()
	{
		return $this->packages;
	}

	/**
	 * Set the value of packages
	 *
	 * @return  self
	 */ 
	public function setPackages($packages)
	{
		$this->packages = $packages;

		return $this;
	}

	/**
	 * Get the value of update_date
	 */ 
	public function getUpdate_date()
	{
		return $this->update_date;
	}

	/**
	 * Set the value of update_date
	 *
	 * @return  self
	 */ 
	public function setUpdate_date($update_date)
	{
		$this->update_date = $update_date;

		return $this;
	}

	/**
	 * Get the value of progress
	 */ 
	public function getProgress()
	{
		return $this->progress;
	}

	/**
	 * Set the value of progress
	 *
	 * @return  self
	 */ 
	public function setProgress($progress)
	{
		$this->progress = $progress;

		return $this;
	}
}


?>
