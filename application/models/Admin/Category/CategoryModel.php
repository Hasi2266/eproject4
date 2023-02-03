<?php

Class CategoryModel extends CI_Model{

	var $category_id;
	var $name;
	var $parent_category;
	var $created_date;

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
}


?>
