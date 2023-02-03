<?php

Class Category extends CI_Controller{

	function __construct(){

		parent::__construct();
		if(!$this->session->userdata('ADMIN_ID')){
			redirect('/Admin/');
		}else{
			$this->load->model('Admin/Category/CategoryModel');
			$this->load->model('Admin/Category/CategoryService');
		}
		

	}

	public function index(){

		$data["title"] = "test";

		$categoryservice = new CategoryService();
		$data['categories'] = $categoryservice->allCategories();
		
		$partial = array('content' => 'pages/Catelog/Category/Categories');
		$this->template->load('admin/mainpage',$partial,$data);
	}

	public function addCategory(){

		$categoryservice = new CategoryService();
		$data["title"] = "test";

		$data['categories'] = $categoryservice->allCategories();
		$partial = array('content' => 'pages/Catelog/Category/addCategory');
		$this->template->load('admin/mainpage',$partial,$data); 

		redirect('/Category/index');
	}

	function saveCategory(){

		$categorymodel = new CategoryModel();
		$categoryservice = new CategoryService();
		$date_now = date("Y-m-d");

		$categorymodel->setName($this->input->post('name'));
		$categorymodel->setParent_category($this->input->post('parent_category'));
		$categorymodel->setCreated_date($date_now);

		$categoryservice->saveCategory($categorymodel);
	}
}


?>
