<?php

Class AdminCustomer extends CI_Controller{

	function __construct(){

		parent::__construct();
		if(!$this->session->userdata('ADMIN_ID')){
			redirect('/Admin/');
		}else{
			$this->load->model('Admin/Customer/CustomerModel');
			$this->load->model('Admin/Customer/CustomerService');
		}
		
	}

	public function index(){

		$customerservice =  new CustomerService();
		$data['customers'] = $customerservice->allCustomers();

		$this->load->view('admin/pages/customer/customers',$data);
	}

	public function addCustomer(){

		$this->load->view('admin/pages/customer/addCustomer');
	}
	public function createCustomer(){

		$customermodel = new CustomerModel();
		$customerservice = new CustomerService();
		$date_now = date("Y-m-d");

		$customermodel->setName($this->input->post('name'));
		$customermodel->setUsername($this->input->post('username'));
		$customermodel->setPassword(md5($this->input->post('password')));
		$customermodel->setLastActive($this->input->post('lastActive'));
		$customermodel->setDateRegister($this->input->post('dateRegister'));
		$customermodel->setEmail($this->input->post('email'));
		$customermodel->setProjects($this->input->post('projects'));
		$customermodel->setTotalSpend($this->input->post('totalSpend'));
		$customermodel->setAov($this->input->post('aov'));
		$customermodel->setCountry($this->input->post('country'));
		$customermodel->setCity($this->input->post('city'));
		$customermodel->setRegion($this->input->post('region'));
		$customermodel->setPostalCode($this->input->post('postalCode'));
		$customermodel->setCreated_date($date_now);

		$customerservice->saveCustomer($customermodel);
		redirect('/AdminCustomer/');
	}
}

?>
