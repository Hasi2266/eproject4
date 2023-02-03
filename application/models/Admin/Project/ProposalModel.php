<?php

Class ProposalModel extends CI_Model{

	var $proposal_id;
	var $client_id;
	var $project_id;
	var $milestone_total;
	var $duration_no;
	var $duration_type;
	var $cover_letter;
	var $images;
	var $created_date;
	
	


	/**
	 * Get the value of proposal_id
	 */ 
	public function getProposal_id()
	{
		return $this->proposal_id;
	}

	/**
	 * Set the value of proposal_id
	 *
	 * @return  self
	 */ 
	public function setProposal_id($proposal_id)
	{
		$this->proposal_id = $proposal_id;

		return $this;
	}

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
	 * Get the value of milestone_total
	 */ 
	public function getMilestone_total()
	{
		return $this->milestone_total;
	}

	/**
	 * Set the value of milestone_total
	 *
	 * @return  self
	 */ 
	public function setMilestone_total($milestone_total)
	{
		$this->milestone_total = $milestone_total;

		return $this;
	}

	/**
	 * Get the value of duration_no
	 */ 
	public function getDuration_no()
	{
		return $this->duration_no;
	}

	/**
	 * Set the value of duration_no
	 *
	 * @return  self
	 */ 
	public function setDuration_no($duration_no)
	{
		$this->duration_no = $duration_no;

		return $this;
	}

	/**
	 * Get the value of duration_type
	 */ 
	public function getDuration_type()
	{
		return $this->duration_type;
	}

	/**
	 * Set the value of duration_type
	 *
	 * @return  self
	 */ 
	public function setDuration_type($duration_type)
	{
		$this->duration_type = $duration_type;

		return $this;
	}

	/**
	 * Get the value of cover_letter
	 */ 
	public function getCover_letter()
	{
		return $this->cover_letter;
	}

	/**
	 * Set the value of cover_letter
	 *
	 * @return  self
	 */ 
	public function setCover_letter($cover_letter)
	{
		$this->cover_letter = $cover_letter;

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
}
	
?>
