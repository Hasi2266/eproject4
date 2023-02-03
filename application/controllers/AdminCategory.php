<?php
Class AdminCategory extends CI_Controller{

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
		$data['active'] = 4;

		$categoryservice = new CategoryService();
		$data['items'] = $categoryservice->allCategories();$data["active"] = 4;
		
		$partial = array('content' => 'admin/pages/category/categories');
		$this->template->load('admin/mainpage',$partial,$data);
	}

	public function addCategory(){

		$categoryservice = new CategoryService();
		$data["title"] = "test";
		$data['active'] = 4;

		$partial = array('content' => 'admin/pages/category/addCategory');
		$this->template->load('admin/mainpage',$partial,$data);

		
	}
	
	function saveCategory(){

		$categorymodel = new CategoryModel();
		$categoryservice = new CategoryService();
		$date_now = date("Y-m-d");
		

		$categorymodel->setName($this->input->post('name'));
		$categorymodel->setParent_category($this->input->post('parent_category'));
		$categorymodel->setCreated_date($date_now);

		$categoryservice->saveCategory($categorymodel);

		redirect('/AdminCategory/');
	}

	function editItem($id){

		$categorymodel = new CategoryModel();
		$categoryservice = new CategoryService();

		$data["title"] = "test";
		$data['active'] = 4;

		$data["items"] = $categoryservice->editCategory($id);

		$partial = array('content' => 'admin/pages/category/editCategory');
		$this->template->load('admin/mainpage',$partial,$data);

	}

	function updateItem(){

		$categorymodel = new CategoryModel();
		$categoryservice = new CategoryService();

		$date_now = date("Y-m-d");

		$categorymodel->setCategory_id($this->input->post('category_id'));
		$categorymodel->setName($this->input->post('name'));
		$categorymodel->setParent_category($this->input->post('parent_category'));
		$categorymodel->setCreated_date($date_now);


		$categoryservice->updateItem($categorymodel);

		redirect('/AdminCategory/');

	}

	function deleteItem($id){

		$categorymodel = new CategoryModel();
		$categoryservice = new CategoryService();

		$categoryservice->deleteItem($id);

		redirect('/AdminCategory/');

	}

}

?>
