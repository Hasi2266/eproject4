<?php

Class ClientInfo extends CI_Controller{

	function __construct(){

		parent::__construct();
		if(!$this->session->userdata('CLIENT_ID')){
			redirect('/Client/');
		}else{
			$this->load->model('client/client/ClientService');
			$this->load->model('client/client/ClientModel');
			// $this->load->model('Admin/Category/CategoryService');
		}
		
	}

	public function index(){

		$data["title"] = "test";
		$data["active"] = 5;

		$clientservice = new ClientService();
		$data['items'] = $clientservice->getRecode($this->session->userdata('CLIENT_ID'));
		
		$partial = array('content' => 'client/pages/clientPages/user-info');
		$this->template->load('client/mainpage',$partial,$data);
	}

	public function updateProfile(){
		$data["active"] = 5;
		$data["title"] = "test";

		$clientmodel = new ClientModel();
		$clientservice = new ClientService();
		
		$clientmodel->setClient_id($this->input->post('client_id'));
		$clientmodel->setFirstname($this->input->post('firstname'));
		$clientmodel->setLastname($this->input->post('lastname'));
		$clientmodel->setEmail($this->input->post('email'));
		$clientmodel->setRole($this->input->post('role'));

		$clientservice = new ClientService();
		$clientservice->updateProfile($clientmodel);
	
		redirect('/ClientInfo/');

	}


	public function updateCompany(){

		$data["active"] = 5;
		$data["title"] = "test";

		$clientmodel = new ClientModel();
		$clientservice = new ClientService();

		$clientmodel->setClient_id($this->input->post('client_id'));
		$clientmodel->setCompany_name($this->input->post('company_name'));
		$clientmodel->setIndustry($this->input->post('industry'));
		$clientmodel->setNo_of_emp($this->input->post('no_of_emp'));
		$clientmodel->setCountry($this->input->post('country'));
		$clientmodel->setContact($this->input->post('contact'));

		$clientservice = new ClientService();
		$clientservice->updateCompany($clientmodel);

		redirect('/ClientInfo/');

	}

	public function delAccount(){
		$data["active"] = 5;

		$data["title"] = "test";

		$clientmodel = new ClientModel();
		$clientservice = new ClientService();

		$clientservice->delAccount($this->session->userdata('CLIENT_ID'));
		die;


	}

	public function changePwd(){

		// $y = $this->input->post('password');
		
		$data["title"] = "test";
		$data["active"] = 5;

		$clientmodel = new ClientModel();
		$clientservice = new ClientService();

		$clientmodel->setClient_id($this->input->post('client_id'));
		$clientmodel->setPassword(md5($this->input->post('password')));

		$clientservice->updatePassword($clientmodel);

		redirect('/ClientInfo/');
		
	}

	function checkPassword(){
		$data["active"] = 5;
		$clientservice = new ClientService();

		$password = md5($this->input->post('password'));

		$id = $this->session->userdata('CLIENT_ID');
		$item = $clientservice->checkPassword($password,$id);
		
		if ($item > 0){

			echo 'exit';
		}

		else{
			echo 'not';
		}

	}

	public function updateImage(){

		$data["active"] = 5;
		$clientmodel = new ClientModel();
		$clientservice = new ClientService();

		if($_FILES['img']['size'] == 0 && $_FILES['img']['error'] == 4) {
			$clientmodel->setImage($this->input->post('img'));
		}

		else{
				$filename = uniqid() . "-" . time(); // 5dab1961e93a7-1571494241
				$extension = pathinfo($_FILES["img"]["name"], PATHINFO_EXTENSION); // jpg
				$image = $filename . '.' . $extension; // 5dab1961e93a7_1571494241.jpg

				$target = "./uploads/" . basename($image);

				if (move_uploaded_file($_FILES['img']['tmp_name'], $target)) {

					$data["message"] = "file uploaded,";
				}
				$clientmodel->setImage($image);
		}

		$clientmodel->setClient_id($this->session->userdata('CLIENT_ID'));
		$clientservice->updateImage($clientmodel);

		redirect('/ClientInfo/');
		
	}
	
}


?>
