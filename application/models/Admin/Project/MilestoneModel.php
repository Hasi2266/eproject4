<?php

Class MilestoneModel extends CI_Model{

	var $project_id;
	var $milestone_id;
	var $milestone_name;
	var $milestone_weight;
	var $milestone_progress;
	var $milestone_description;
	var $amount;
	var $start_date;
	var $end_date;
	var $created_date;

	

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
	 * Get the value of milestone_id
	 */ 
	public function getMilestone_id()
	{
		return $this->milestone_id;
	}

	/**
	 * Set the value of milestone_id
	 *
	 * @return  self
	 */ 
	public function setMilestone_id($milestone_id)
	{
		$this->milestone_id = $milestone_id;

		return $this;
	}

	/**
	 * Get the value of milestone_name
	 */ 
	public function getMilestone_name()
	{
		return $this->milestone_name;
	}

	/**
	 * Set the value of milestone_name
	 *
	 * @return  self
	 */ 
	public function setMilestone_name($milestone_name)
	{
		$this->milestone_name = $milestone_name;

		return $this;
	}

	/**
	 * Get the value of milestone_weight
	 */ 
	public function getMilestone_weight()
	{
		return $this->milestone_weight;
	}

	/**
	 * Set the value of milestone_weight
	 *
	 * @return  self
	 */ 
	public function setMilestone_weight($milestone_weight)
	{
		$this->milestone_weight = $milestone_weight;

		return $this;
	}

	/**
	 * Get the value of milestone_progress
	 */ 
	public function getMilestone_progress()
	{
		return $this->milestone_progress;
	}

	/**
	 * Set the value of milestone_progress
	 *
	 * @return  self
	 */ 
	public function setMilestone_progress($milestone_progress)
	{
		$this->milestone_progress = $milestone_progress;

		return $this;
	}

	/**
	 * Get the value of milestone_description
	 */ 
	public function getMilestone_description()
	{
		return $this->milestone_description;
	}

	/**
	 * Set the value of milestone_description
	 *
	 * @return  self
	 */ 
	public function setMilestone_description($milestone_description)
	{
		$this->milestone_description = $milestone_description;

		return $this;
	}

	/**
	 * Get the value of start_date
	 */ 
	public function getStart_date()
	{
		return $this->start_date;
	}

	/**
	 * Set the value of start_date
	 *
	 * @return  self
	 */ 
	public function setStart_date($start_date)
	{
		$this->start_date = $start_date;

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
	 * Get the value of amount
	 */ 
	public function getAmount()
	{
		return $this->amount;
	}

	/**
	 * Set the value of amount
	 *
	 * @return  self
	 */ 
	public function setAmount($amount)
	{
		$this->amount = $amount;

		return $this;
	}
}
	
?>
