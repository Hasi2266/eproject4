<?php 

Class ClientPackage extends CI_Controller{

	function __construct(){

		parent::__construct();
		if(!$this->session->userdata('CLIENT_ID')){
			redirect('/Client/');
		}else{
			$this->load->model("client/project/ProjectService");
			$this->load->model('client/packages/PackageServices');
		}
	}

	public function index(){

		$data["title"] = "client_service";
		$data["active"] = 4;

		$packageservice = new PackageServices();
		$projectservice = new ProjectService();

		$data["teams"] = $packageservice->getTeams();
		$data["items1"] = $packageservice->getFirstrow();
		$data["packages"] = $packageservice->getPackages();

		$data["projects"] = $projectservice->allProjects($this->session->userdata('CLIENT_ID'));
		// print_r($data1);die;

		$partial = array('content' => 'client/pages/package/addPackage');
		$this->template->load('client/mainpage',$partial,$data);
	}

	public function checkPackage(){
		$data["active"] = 4;

		$project_id = $this->input->post('project_id');
		$selected = $this->input->post('selected');

		// echo $selected;die;

		$projectservice = new ProjectService();

		$project = $projectservice->checkPackage($project_id);

		$package_list = json_decode("[".$project[0]->packages."]");

		// $item = $orderservice->getCity($disctic);

		// $result = !empty(array_intersect($package_list, $selected));
		// echo $result;


		// $result=array_diff($package_list,$selected);
		// print_r($result) ;


		// print_r($package_list);//4,14
		// print_r($selected);//14 24

		$result=array_diff($selected,$package_list);//24
		$result1 = array_diff($selected,$result);//14

// print_r($result1);

		if ((empty($result)) && (!empty($result1)) ){

			foreach($result1 as $key => $exitingPackage){

				$name = $projectservice->getpackageName($exitingPackage);
				$packagename = $name[0]->name;
					// echo $packagename;
				$pname = $project[0]->name;

				echo 'Package '.$packagename.' is already exiting in '.$pname.' project.<br/>';

			}
			
		}
		else if ((!empty($result)) && (!empty($result1))){

			foreach($result1 as $key => $exitingPackage){

				$name = $projectservice->getpackageName($exitingPackage);
				$packagename = $name[0]->name;
					// echo $packagename;
				$pname = $project[0]->name;

				echo 'Package '.$packagename.' is already exiting in '.$pname.' project.<br/>';

			}
			
		}
		else{
			echo '';
		}

		die;
		// print_r($result);



		// if (in_array("Glenn", $people))
		// 	{
		// 	echo "Match found";
		// 	}
		// 	else
		// 	{
		// 	echo "Match not found";
		// 	}

		// die;
		// foreach($package_list as $key => $exitingPackage){

		// 	foreach($selected  as $key => $selectPackage){
				
		// 		if($exitingPackage == $selectPackage) {
		// 			// echo $exitingPackage;
		// 			$name = $projectservice->getpackageName($selectPackage);
					
		// 			$packagename = $name[0]->name;
		// 			// echo $packagename;
		// 			$pname = $project[0]->name;

		// 			echo 'Package '.$packagename.' is already exiting in '.$pname.' project.<br/>';
					
		// 			// echo 'taken'.$selectPackage.$name[0]->name.$pname;
		// 		}
				
		// 		else{
		// 			echo '';
		// 		}
				

		// 	}
			// die;
			// echo "<option value=".$items->cities_id.">".$items->city_name."</option>";
			// echo $item;
			// print_r($package_list);
			
		
		
		

	

		
	}

	public function addNewProj(){

		$packageservice = new PackageServices();
		$projectservice = new ProjectService();
		
		$name = $this->input->post("name");
		$data["active"] = 4;

		$btn = $this->input->post("btn_addtoproj");
		
		$checkes = $this->input->post("check");
		
		// print_r($checkes);die;
		$checkes1 = $checkes;

		if(($btn == 'AddTo') && (!empty($checkes))){
			$this->addtoProj($checkes);
		}
		else if((!empty($checkes))){
			// print_r($checkes);die;
			foreach($checkes as $key => $value){
				// echo $value;die;
				
				// print_r($checkes1);
				// $item1 = $packageservice->getPackageName($value);
	
				$item1 = $projectservice->packagename($value);

			// foreach($item1 a
				
				$package_name[$value] = $item1[0]->pname;
				
				// print_r($package_name);die;
				$team_name[] = $item1[0]->name;
				
				
			}
			// print_r($package_name);
			// die;
			
			// die;
			
			$projectservice = new ProjectService();
	
	
	
			$data["no"] = 1;
			$data["select_non"] = 2;
			$data["items"] = $projectservice->allCategories();
			$data["teams"] = $projectservice->allTeams();
			$data["project_name"] = $name;
			$data["package_name"] = $package_name;
			$data["team_name"] = $team_name;
			$data["checkes"] = $checkes ;
			
	
			
			$partial = array('content' => 'client/pages/project/addProject');
			$this->template->load('client/mainpage',$partial,$data);
		}
		
	
		// echo $checkes;die;

		// $x = count($checkes);
		// echo $x;die;

		
	}


	public function addtoProj($checkes){

		$data["active"] = 4;

		$projectservice = new ProjectService();
		$packageservice = new PackageServices();

		$data["projects"] = $projectservice->getProject($this->input->post("project_id"));
		$item = $projectservice->getProject($this->input->post("project_id"));
		$data["items"] = $projectservice->allCategories();
		
		$data["teams"] = $projectservice->allTeams();
		$images = $projectservice->ProjectImages2($this->input->post("project_id"));


		
		// print_r($images);die;
		
		foreach($checkes as $key => $value){
			// echo $value;die;

			$item1 = $projectservice->packagename($value);

			// foreach($item1 as $key => $item3){
				
				$package_name[$value] = $item1[0]->pname;
				
				// print_r($package_name);die;
				$team_name[] = $item1[0]->name;
				
			// }
			
			// die;
			
		}

		$select_list = json_decode("[".$item[0]->services."]");

		$package_list = json_decode("[".$item[0]->packages."]");
		
		$ids_image = array();
		$service = array();
		$team_name2 = array();

		$package = array();
		$team_name1 = array();
		// print_r ($select_list);die;

		if(empty($images)){

			// print_r($ids_image);
			$ids_image;
		}
		else{
			foreach($images as $key => $value){
			
				// print_r($value) ; 
				// echo '<br/>';
				foreach($value as $key => $value1){
					
					$ids_image = explode(',',$value1);
					// print_r($ids_image);die;
					
				}
				
			}
		}
		

		if(!empty($select_list)){

			foreach($select_list as $key => $value){
			
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

				$item2 =  $packageservice->getPackageName($value);
				
				// foreach($item2 as $key => $item3){
	
					$package[$value] = $item2[0]->pname;
					$team_name1[] = $item2[0]->name;
				
				// }
			}

			$data['package'] = $package;
			$data["team_name1"] = $team_name1;
		
		}
		

		$data["no"] = 1;
		$data["package_name"] = $package_name;
		$data["team_name"] = $team_name;
		$data['images5'] =  $ids_image;
		
		
		$partial = array('content' => 'client/pages/project/update');
		$this->template->load('client/mainpage',$partial,$data);

		// echo $name;die;
	}
}


?>
