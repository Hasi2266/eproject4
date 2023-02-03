<?php

Class AdminService extends CI_Controller{

	function __construct(){

		parent::__construct();
		if(!$this->session->userdata('ADMIN_ID')){
			redirect('/Admin/');
		}else{
			$this->load->model('Admin/Service/ServiceModel');
			$this->load->model('Admin/Service/ServicesService');
		}
		

	}

	public function index(){

		$servicesService = new ServicesService();

		$data["active"] = 5;
		// $x = $servicesService->getFirstrow();
		// echo $x->team_id;die;
		// print_r($x);die;
		// $data['items'] = $servicesService->allServices();
		// $data["teams"] = $clientservice->getTeams();
		// $data["services"] = $clientservice->getServices();
		// $data["items1"] = $clientservice->getFirstrow();

		$data["teams"] = $servicesService->getTeams(); 
		$data["items1"] = $servicesService->getFirstrow();
		$data["services"] = $servicesService->getServices();

		$partial = array('content' => 'admin/pages/service/services');
		$this->template->load('admin/mainpage',$partial,$data);

		// $this->load->view('admin/pages/service/createService',$data);
	}
	
	public function allServices(){

		$servicesService = new ServicesService();
		$data["active"] = 5;

		$data["items"] = $servicesService->getServices();

		$partial = array('content' => 'admin/pages/service/allServices');
		$this->template->load('admin/mainpage',$partial,$data);
	}

	public function createService(){

		$servicesService = new ServicesService();
		$data["active"] = 5;

		$data['items'] = $servicesService->allTeams();

		$partial = array('content' => 'admin/pages/service/createService');
		$this->template->load('admin/mainpage',$partial,$data);	
	}

	public function saveService(){

		$servicesmodel = new ServiceModel();
		$servicesService = new ServicesService();

		$date_now = date( 'Y-m-d' );
	
		$servicesmodel->setDate($this->input->post('date'));
		$servicesmodel->setCreated_by($this->input->post('created_by'));
		$servicesmodel->setName($this->input->post('name'));
		$servicesmodel->setCategory_id($this->input->post('category'));
		$servicesmodel->setDescription($this->input->post('description'));
		$servicesmodel->setCurrency($this->input->post('currency'));
		$servicesmodel->setPrice($this->input->post('price'));
		$servicesmodel->setCreated_date($date_now);
		
		if($_FILES['img']['size'] == 0 && $_FILES['img']['error'] == 4) {
			$servicesmodel->setImg($this->input->post('img'));
		}

		else{
			$filename = uniqid() . "-" . time(); // 5dab1961e93a7-1571494241
				$extension = pathinfo($_FILES["img"]["name"], PATHINFO_EXTENSION); // jpg
				$image = $filename . '.' . $extension; // 5dab1961e93a7_1571494241.jpg

				$target = "./uploads/" . basename($image);

				if (move_uploaded_file($_FILES['img']['tmp_name'], $target)) {

					$data["message"] = "file uploaded,";
				}
				$servicesmodel->setImg($image);
		}
		// print_r($servicesmodel);die;

		$servicesService->saveService( $servicesmodel );

		redirect('/AdminService/allServices/');
	}

	function editItem($id){

		$servicesmodel = new ServiceModel();
		$servicesService = new ServicesService();

		$data["title"] = "test";
		$data['active'] = 5;

		$data['item3'] = $servicesService->allTeams();

		$data["items"] = $servicesService->editItem($id);

		$partial = array('content' => 'admin/pages/service/editService');
		$this->template->load('admin/mainpage',$partial,$data);

	}

	function updateItem(){

		$servicesmodel = new ServiceModel();
		$servicesService = new ServicesService();
		$date_now = date("Y-m-d");

		$date_now = date( 'Y-m-d' );
	
		$servicesmodel->setService_id($this->input->post('service_id'));
		$servicesmodel->setDate($this->input->post('date'));
		$servicesmodel->setCreated_by($this->input->post('created_by'));
		$servicesmodel->setName($this->input->post('name'));
		$servicesmodel->setCategory_id($this->input->post('category'));
		$servicesmodel->setDescription($this->input->post('description'));
		$servicesmodel->setCurrency($this->input->post('currency'));
		$servicesmodel->setPrice($this->input->post('price'));
		$servicesmodel->setCreated_date($date_now);
		
		if($_FILES['img']['size'] == 0 && $_FILES['img']['error'] == 4) {
			$servicesmodel->setImg($this->input->post('img'));
		}

		else{
			$filename = uniqid() . "-" . time(); // 5dab1961e93a7-1571494241
				$extension = pathinfo($_FILES["img"]["name"], PATHINFO_EXTENSION); // jpg
				$image = $filename . '.' . $extension; // 5dab1961e93a7_1571494241.jpg

				$target = "./uploads/" . basename($image);

				if (move_uploaded_file($_FILES['img']['tmp_name'], $target)) {

					$data["message"] = "file uploaded,";
				}
				$servicesmodel->setImg($image);
		}
		$servicesService->updateItem( $servicesmodel );
		redirect('/AdminService/allServices');

	}

	function deleteItem($id){

		$servicesmodel = new ServiceModel();
		$servicesService = new ServicesService();

		$servicesService->deleteItem($id);

		redirect('/AdminService/allServices');

	}

}

?>
