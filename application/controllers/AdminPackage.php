<?php

Class AdminPackage extends CI_Controller{

	function __construct(){

		parent::__construct();
		if(!$this->session->userdata('ADMIN_ID')){
			redirect('/Admin/');
		}else{
			$this->load->model('Admin/Package/PackageModel');
			$this->load->model('Admin/Package/PackageService');
		}
	
	}

	public function index(){

		$data ["active"] = 6;

		$packageservice = new PackageService();
		// $data['packages'] = $packageservice->allPackages();
		$data["teams"] = $packageservice->allTeams();
		$data["packages"] = $packageservice->getPackages();
		$data["items1"] = $packageservice->getFirstrow();
		
		// $item = $packageservice->getPackages();
		// $package_list = json_decode("[".$item->flieds."]");
		// echo $package_list;die;
		// print_r($package_list) ;die;

		$partial = array('content' => 'admin/pages/package/packages');
		$this->template->load('admin/mainpage',$partial,$data);	

	}

	public function allPackages(){

		$data ["active"] = 6;

		$packageservice = new PackageService();
	
		$data["items"] = $packageservice->getPackages1();

		$partial = array('content' => 'admin/pages/package/allPackages');
		$this->template->load('admin/mainpage',$partial,$data);

	}

	public function addPackage(){

		$data ["active"] = 6;

		$packageservice = new PackageService();
		$data['item3'] = $packageservice->allTeams();

		$partial = array('content' => 'admin/pages/package/addPackage');
		$this->template->load('admin/mainpage',$partial,$data);	
		
	}

	public function createPackage(){

		$packagemodel = new PackageModel();
		$packageservice = new PackageService();
		$date_now = date( 'Y-m-d' );
		// $y = $this->input->post('team');
		// echo $y;die;

		$packagemodel->setName($this->input->post('name'));
		$packagemodel->setTeam($this->input->post('category'));
		$packagemodel->setDate($this->input->post('date'));
		$packagemodel->setCreated_by($this->input->post('created_by'));
		$packagemodel->setFlieds($this->input->post('fields'));
		$packagemodel->setDescription($this->input->post('description'));
		$packagemodel->setCurrency($this->input->post('currency'));
		$packagemodel->setDuration($this->input->post('duration'));
		$packagemodel->setPrice($this->input->post('price'));
		$packagemodel->setCreated_date($date_now);

		// print_r($packagemodel);die;
		$packageservice->savePackage($packagemodel);

		redirect('/AdminPackage/allPackages');

	}

	public function addNewProj(){

		$name = $this->input->post("name");
		echo $name;die;
	}

	function editItem($id){

		$packagemodel = new PackageModel();
		$packageservice = new PackageService();

		$data["title"] = "test";
		$data['active'] = 6;

		$data['item3'] = $packageservice->allTeams();

		$data["items"] = $packageservice->editItem($id);
		$y = $packageservice->editItem($id);
		$data["fileds"] = explode(',',$y[0]->flieds);

		
		// print_r($y[0]->flieds);die;

		$partial = array('content' => 'admin/pages/package/editPackage');
		$this->template->load('admin/mainpage',$partial,$data);

	}

	function updateItem(){

		$packagemodel = new PackageModel();
		$packageservice = new PackageService();
		$date_now = date( 'Y-m-d' );
		// $y = $this->input->post('team');
		// echo $y;die;

		$packagemodel->setPackage_id($this->input->post('package_id'));
		$packagemodel->setName($this->input->post('name'));
		$packagemodel->setTeam($this->input->post('category'));
		$packagemodel->setDate($this->input->post('date'));
		$packagemodel->setCreated_by($this->input->post('created_by'));
		$packagemodel->setFlieds($this->input->post('fields'));
		$packagemodel->setDescription($this->input->post('description'));
		$packagemodel->setCurrency($this->input->post('currency'));
		$packagemodel->setDuration($this->input->post('duration'));
		$packagemodel->setPrice($this->input->post('price'));
		$packagemodel->setCreated_date($date_now);

		// print_r($packagemodel);die;
		$packageservice->updateItem($packagemodel);

		redirect('/AdminPackage/allPackages');

	}

	function deleteItem($id){

		$packagemodel = new PackageModel();
		$packageservice = new PackageService();

		$packageservice->deleteItem($id);

		redirect('/AdminPackage/allPackages');

	}
}

?>
