<?php 

Class ClientDashboard extends CI_Controller{

	
	function __construct(){

		parent::__construct();
		if(!$this->session->userdata('CLIENT_ID')){
			redirect('/Client/');
		}else{
			$this->load->model('client/dashboard/DashboardService');
		}
	
	}

	public function index(){

		
		
		

		$date1 = "2007-03-24";
		$date2 = "2009-06-26";
		$data["active"] = 1;
		
		$diff = abs(strtotime($date2) - strtotime($date1));

		$years = floor($diff / (365*60*60*24));
		$months = floor(($diff - $years * 365*60*60*24) / (30*60*60*24));
		$days = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24)/ (60*60*24));

		// printf("%d years, %d months, %d days\n", $years, $months, $days);
		// 		$data["title"] = "dashboard";
				

		
		
		$date_now = date("Y-m-d");
		
	
		// echo $date_now;
		$dashboardservice = new DashboardService();

		$data["no"] = $this->session->userdata('CLIENT_ID');
		$data["noProjects"] = $dashboardservice->countProjects($this->session->userdata('CLIENT_ID'));
		$data["noProposals"] = $dashboardservice->countProposal($this->session->userdata('CLIENT_ID'));
		$data["noInvoices"] = $dashboardservice->countInvoice($this->session->userdata('CLIENT_ID'));
		
		$data["items"] = $dashboardservice->allProjects2($this->session->userdata('CLIENT_ID'));
		$items = $dashboardservice->allProjects2($this->session->userdata('CLIENT_ID'));
		// print_r($items);die;
		
		if(empty($items)){
			$data["invoices"] = "";
		}
		else{
			$data["invoices"] = $dashboardservice->invoices($items[0]->project_id);
		}

		
		

		// print_r($data["items"]);die;
		// print_r($items);die;

		// foreach($items as $key => $value){
		// 	print_r ($value);die;

		// 	print_r($value[0]->project_created_date);
		// 	// $items1 =  $value[0]->project_created_date;
		// 	// // echo $items1;die;
		// 	// print_r ($items1);die;
		// 	foreach($value as $key => $value1){
		// 		 echo $value1;die;
		// 	}
		// }
		// echo $items[0]->project_created_date;die; 


		// $date1 = date("Y-m-d");
		// $date2 = "2009-06-26";

		// print_r($dashboardservice->allProjects($this->session->userdata('CLIENT_ID')));

		$data["items2"] = $dashboardservice->getClientInfo($this->session->userdata('CLIENT_ID'));
			
		// echo substr("Hello world",0,1);
		// print_r($items->fname) ;die;
		// echo $items2->fname;die; 
		
		$partial = array('content' => 'client/pages/dashboard');
		$this->template->load('client/mainpage',$partial,$data);
	}
}


?>
