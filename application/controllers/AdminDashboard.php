<?php 

Class AdminDashboard extends CI_Controller{

	function __construct(){

		parent::__construct();
		if(!$this->session->userdata('ADMIN_ID')){
			redirect('/Admin/');
		}else{
			$this->load->model('Admin/dashboard/DashboardService');
			$this->load->model("Admin/Project/ProjectService");
		}
	}

	public function index(){

		$data["title"] = "dashboard";
		$dashboardservice = new DashboardService();
		$projectservice = new ProjectService();

		$data["active"] = 1;
		$data["items2"] = $dashboardservice->getAdminInfo($this->session->userdata('ADMIN_ID'));
		$data["items"] = $projectservice->allProjects2();
		// $item = $dashboardservice->allProjects1();

		// $data["invoices"] = $projectservice->invoices($item[0]->project_id);

		$data["noProjects"] = $dashboardservice->countProjects();
		$data["noProposals"] = $dashboardservice->countProposal();
		$data["noInvoices"] = $dashboardservice->countInvoices();

		$partial = array('content' => 'admin/pages/dashboard');
		$this->template->load('admin/mainpage',$partial,$data);
	}
}


?>
