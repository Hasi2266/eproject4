<?php 

Class ClientService extends CI_Controller{

	function __construct(){

		parent::__construct();
		if(!$this->session->userdata('CLIENT_ID')){
			redirect('/Client/');
		}else{
			$this->load->model('client/services/ClientServices');
			$this->load->model("client/project/ProjectService");
		}
	}

	public function index(){

		$data["title"] = "client_service";
		$data["active"] = 3;

		$clientservice = new ClientServices();
		$projectservice = new ProjectService();

		$data["teams"] = $clientservice->getTeams();
		$data["services"] = $clientservice->getServices();
		$data["items1"] = $clientservice->getFirstrow();
		$data["projects"] = $projectservice->allProjects($this->session->userdata('CLIENT_ID'));
		

		$partial = array('content' => 'client/pages/services/addService');
		$this->template->load('client/mainpage',$partial,$data);
	}

	public function checkService(){

	
		$project_id = $this->input->post('project_id');
		$selected = $this->input->post('selected');

		$projectservice = new ProjectService();

		$project = $projectservice->checkPackage($project_id);

		$select_list = json_decode("[".$project[0]->services."]");

		// $item = $orderservice->getCity($disctic);

		// $result = !empty(array_intersect($package_list, $selected));
		// echo $result;


		// $result=array_diff($package_list,$selected);
		// print_r($result) ;

		$result=array_diff($selected,$select_list);//24
		$result1 = array_diff($selected,$result);


		if ((empty($result)) && (!empty($result1)) ){

			foreach($result1 as $key => $exitingService){

				$name = $projectservice->getServiceName($exitingService);
				$servicename = $name[0]->service_name;
				$pname = $project[0]->name;

				echo 'Service '.$servicename.' is already exiting in '.$pname.' project.<br/>';

			}
			
		}
		else if ((!empty($result)) && (!empty($result1)) ){

			foreach($result1 as $key => $exitingService){

				$name = $projectservice->getServiceName($exitingService);
				$servicename = $name[0]->service_name;
				$pname = $project[0]->name;

				echo 'Service '.$servicename.' is already exiting in '.$pname.' project.<br/>';

			}
			
		}
		else{
			echo '';
		}

		die;
		// if(!empty($select_list)){

		// 	foreach($select_list as $key => $exitingService){

		// 		foreach($selected  as $key => $selectService){
	
					
		// 			if($exitingService == $selectService) {
	
		// 				$name = $projectservice->getServiceName($selectService);
		// 				$pname = $project[0]->name;
		// 				echo 'Service '.$name[0]->service_name.' is already exiting in '.$pname.' project.<br/>';
						
		// 				// echo 'taken'.$selectPackage.$name[0]->name.$pname;
		// 			}
					
		// 			else{
		// 				echo 'no';
		// 			}
					
					
					
	
		// 		}
		// 		// echo "<option value=".$items->cities_id.">".$items->city_name."</option>";
		// 		// echo $item;
		// 		// print_r($package_list);
				
		// 	}
		// }
		
		
		

		

		
	}

	public function addNewProj(){

		$clientservice = new ClientServices();
		$data["active"] = 3;

		$name = $this->input->post("name");
	
		$btn = $this->input->post("btn_addtoproj");
		
		$checkes1 = $this->input->post("check");
		

		if(($btn == 'AddTo') && (!empty($checkes1))){
			$this->addtoProj($checkes1);
		}
		else{

			foreach($checkes1 as $key => $value){
				// echo $value;die;
				
				$item1 = $clientservice->getServiceName($value);
				
				// foreach($item1 as $key => $item3){
					
					$service_name[$value] = $item1[0]->service_name;
				
				// print_r($package_name);die;
					$team_name[] = $item1[0]->name;
					
				// }
				
				// die;
				
			}
			
			// die;
			
			$projectservice = new ProjectService();
	
			$data["no"] = 2;
			$data["select_non"] = 1;
			$data["items"] = $projectservice->allCategories();
			$data["teams"] = $projectservice->allTeams();
			$data["project_name"] = $name;
			// $data["package_name"] = $package_name;
			$data["team_name"] = $team_name;
			// $data["checkes"] = $checkes ;
			$data["service_name"] = $service_name;
	
			$partial = array('content' => 'client/pages/project/addProject');
			$this->template->load('client/mainpage',$partial,$data);
		}
		
	
		// echo $checkes;die;

		// $x = count($checkes);
		// echo $x;die;

		
	} 

	public function addtoProj($checkes){

		$projectservice = new ProjectService();
		$clientservice = new ClientServices();
		$data["active"] = 3;
		
		$data["projects"] = $projectservice->getProject($this->input->post("project_id"));
		$item = $projectservice->getProject($this->input->post("project_id"));

		// print_r($item[0]->services);die;

		$data["items"] = $projectservice->allCategories();
		$data["teams"] = $projectservice->allTeams();
		$images = $projectservice->ProjectImages2($this->input->post("project_id"));

		// print_r($images);die;
		foreach($checkes as $key => $value){
			// echo $value;die;

			$item1 = $clientservice->getServiceName($value);

			// foreach($item1 as $key => $item3){
				// echo $item3;die;
				$service_name[$value] = $item1[0]->service_name;
				
				// print_r($package_name);die;
				$team_name[] = $item1[0]->name;
				
			// }
			
			// die;
			
		}
		// print_r($team_name);die;

		$select_list = json_decode("[".$item[0]->services."]");
		$package_list = json_decode("[".$item[0]->packages."]");
		
		$service = array();
		$team_name2 = array();

		$package = array();
		$team_name1 = array();
		
		$ids_image = array();
		// print_r ($select_list);die;

		
		if(empty($images)){

			// print_r($ids_image);
			$ids_image;
		}
		else{
			foreach($images as $key => $value){
			
				// print_r($value) ; die;
				// echo '<br/>';
				foreach($value as $key => $value1){
					
					$ids_image = explode(',',$value1);
					// print_r($ids_image);die;
					
				}
				
			}
		}
		
		// print_r ($ids_image);die;

		if(!empty($select_list)){

			foreach($select_list as $key => $value){
				// echo $value;die;
				$item1 = $projectservice->serviceName1($value);
				
				// foreach($item1 as $key =>$item2){
	
					$service[$value] = $item1[0]->service_name;
					$team_name2[] = $item1[0]->name;
					
					
				// }
				
			}
			
			
			$data['service'] = $service;
			$data["team_name2"] = $team_name2;

		}
		else{
			$data['service'] = $service;
			$data["team_name2"] = $team_name2;
		}

		
		if(!empty($package_list)){

			foreach($package_list as $key => $value){

				$item2 =  $projectservice->packagename($value);
				
				// foreach($item2 as $key => $item3){
	
					$package[$value] = $item2[0]->pname;
					$team_name1[] = $item2[0]->name;
		
				// }
			}
			
			$data['package'] = $package;
			$data["team_name1"] = $team_name1;
		
		}
		else{
			$data['package'] = $package;
			$data["team_name1"] = $team_name1;
		}
		
		
		
		// print_r($service);die;

		
// print_r($package);die;
		$data["no"] = 2;
		// $data["package_name"] = $package_name;
		$data["team_name"] = $team_name;
		// $data['service'] = $service;
		// $data['package'] = $package;
		$data['images5'] =  $ids_image;
		// $data["team_name1"] = $team_name1;
		// $data["team_name2"] = $team_name2;
		$data["service_name"] = $service_name;
		
		$partial = array('content' => 'client/pages/project/update1');
		$this->template->load('client/mainpage',$partial,$data);

		// echo $name;die;
	}
}


?>
