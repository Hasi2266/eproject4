<?php 

Class ClientProject extends CI_Controller{

	function __construct(){

		parent::__construct();
		if(!$this->session->userdata('CLIENT_ID')){
			redirect('/Client/');
		}else{
			$this->load->model("client/project/ProjectService");
			$this->load->model("client/project/ProjectModel");
		}
		
	}

	public function index(){

		$projectservice = new ProjectService();

		$data["title"] = "client Project";
		$data["active"] = 2;
		$data["items"] = $projectservice->allProjects2($this->session->userdata('CLIENT_ID'));
		$item = $projectservice->allProjects2($this->session->userdata('CLIENT_ID'));

		if(empty($item)){
			$data["invoices"] = "";
		}
		else{
			$data["invoices"] = $projectservice->invoices($item[0]->project_id);
		}
		
		
		// $x = $projectservice->invoices($item[0]->project_id);
		// print_r($x);die;
		// $data["items1"] = $projectservice->allServices();
		
// 		$data["items"] = $projectservice->allProjects();
// 		$items = $projectservice->getService_id();
		

// 		foreach($items as $item){
// 			$select_list = json_decode("[".$item->services."]");
// 			$y = count($select_list);
// 			$data['items3'] = $select_list;
// 			print_r($select_list);die;
// 			echo $y;die;
// 			$num = array();
// 			for($i=0;$i<$y;++$i){
			
// 				$service_id = 	$select_list[$i];
// 				// $data['items3'] = $select_list;
// 				$item  = $projectservice->allProjects1($service_id);
// 				print_r($item[0]->service_name);
// 				echo $service_id;die;
// 				$data["items1"] ;
// 				$num[$i] = $service_id;
// 				$items1  = $projectservice->serviceName($service_id);
// 				print_r($items1);
				
// 			}
// die;
// 			print_r($items);die;

// 			print_r($num);die;
			 
			
// 		}
		
	
	
		$partial = array('content' => 'client/pages/project/projects');
		$this->template->load('client/mainpage',$partial,$data);
	}

	public function cerateProject(){

		$projectservice = new ProjectService();

		$data["no"] = 3;
		$data["active"] = 2;

		$data["items"] = $projectservice->allCategories();
		$data["teams"] = $projectservice->allTeams();

		$partial = array('content' => 'client/pages/project/addProject');
		$this->template->load('client/mainpage',$partial,$data);
	}
	
	public function selectServices(){

		$projectservice = new ProjectService();

		$category_id = $this->input->post('category_id');

		$item = $projectservice->getService($category_id);

		echo "<option disabled selected>-- Choose one --</option>";

		foreach($item as $item1){

			echo "<option value=".$item1->service_id.">".$item1->service_name."</option>";
		}
		
	}

	public function selectPackages(){

		$projectservice = new ProjectService();

		$team_id = $this->input->post('team_id');

		$item = $projectservice->getPackage($team_id);
		// print_r($item);die;
		echo "<option disabled selected>-- Choose one --</option>";

		foreach($item as $item1){

			echo "<option value=".$item1->package_id.">".$item1->name."</option>";
		}
		
	}

	public function save(){

		$projectmodel =  new ProjectModel();
		$projectservice = new ProjectService();
		$date_now = date("Y-m-d");
// $x = ($this->input->post('images'));
// 		echo $x;die;

// echo count($x);die;
		// if(empty($x)){
		// 	echo 'hi';
		// }
		// die;
		// // print_r($x);die;
		// echo $x;die;

		$due_date = $this->input->post('due_date_type');
		

		// if(empty(array_filter($_FILES['images']['name']))){
		// 	echo 1;
		// }
		// die;
		$count = count($_FILES['images']['name']);
		// echo $count;
		// print_r($_FILES['images']['name']);
		// echo $_FILES['images']['name'];
		
		if(empty(array_filter($_FILES['images']['name']))) {
			$projectmodel->setImages("");
			// echo 5;
		}
		else{
			// echo 6;

			for($i=0;$i<$count;$i++){

				if ($_FILES['images']['name'] == 0 && $_FILES['images']['error'] == 0) {
	
					$projectmodel->setImages(0);
					// echo 4;
					// $productsmodel->setProduct_image($this->input->post('p_image'));
					// $postmodel->setbusiness_logo();
				}
				else {
	
					// echo 3;
					// $filename = $this->session->userdata('CLIENT_ID').$this->input->post('name').time();
					$filename = uniqid() . "-" . time(); // 5dab1961e93a7-1571494241
					// echo $filename;
					$extension = pathinfo($_FILES['images']['name'][$i], PATHINFO_EXTENSION); // jpg
					$image = $filename . '.' . $extension; // 5dab1961e93a7_1571494241.jpg
		
					$target = "./uploads/" . basename($image);
		// echo $image;
					if (move_uploaded_file($_FILES['images']['tmp_name'][$i], $target)) {
		
						$data["message"] = "file uploaded,";
					}
					$img[$i] = $image;
				}
				
			}
			$projectmodel->setImages($img);
		}
		// print_r($img);
		// die;
		// foreach ($_FILES['images']['tmp_name'] as $key => $value) {

		// 	echo $_FILES['images']['size'][$key];
		// }
		// die;

	
		
		$img = array();
		
		$projectmodel->setClient_id($this->session->userdata('CLIENT_ID'));
		$projectmodel->setName($this->input->post('name'));
		$projectmodel->setRequirement($this->input->post('requirement'));
		$projectmodel->setEstimated_budget($this->input->post('estimated_budget'));
	
		if(empty($due_date)){
			$projectmodel->setEnd_date("");
			$projectmodel->setDate("");
		}
		else{
			if(($due_date) == "To be decided" ){
				$projectmodel->setEnd_date($due_date);
				$projectmodel->setDate("none");
					
			}
			else{
				$projectmodel->setEnd_date($due_date);
				$projectmodel->setDate($this->input->post('specific_date_value'));
			}
		}

		if(empty($this->input->post("type"))){
			$projectmodel->setType("");
		}
		else{
			$projectmodel->setType($this->input->post('type'));
		}

		if(empty($this->input->post("category_id"))){
			$projectmodel->setCategory_id("");
		}
		else{
			$projectmodel->setCategory_id($this->input->post('category_id'));
		}
		
		$projectmodel->setRequired_skills($this->input->post('required_skills'));
		$projectmodel->setServices($this->input->post('service_id'));
		$projectmodel->setPackages($this->input->post('package_id'));

		
		// print_r($img);die;
		
		$projectmodel->setCreated_date($date_now);
		$projectmodel->setUpdate_date($date_now);

		$projectservice->createProject($projectmodel);
		// $projectservice->pendingProposal($projectmodel);
		// print_r($projectmodel);die;

		redirect('/ClientProject/');
	}

	public function updateProject($project_id){
		
		$projectservice = new ProjectService();
		$data["active"] = 2;

		$item = $projectservice->service($project_id);

		if(($item[0]->project_status) == 1){
			$data['initial'] = 'Submitted';
		}

		// print_r($item[0]->required_skills);die;
		// print_r($item);die;

		$select_list = json_decode("[".$item[0]->services."]");
		$package_list = json_decode("[".$item[0]->packages."]");
		
		// print_r($package_list);die;

		$service = array();
		$package = array();

		$skills = $item[0]->required_skills;
		$skill_list = explode(',',$skills);
		
		// print_r($skill_list);die;

		// if (($select_list == 0) ){
		// 	echo '5';die;
		// }
		// if(!empty($skill_list)){

		// 	foreach($skill_list as $key => $value){
		// 		echo $value;die;
		// 		$item1 = $projectservice->serviceName1($value);
				
		// 		foreach($item1 as $item2){
	
		// 			$item3 = $item2->service_name;
		// 			$service[] = $item3;
					
		// 		}
		// 	}
	
		// }

		if(!empty($select_list)){

			foreach($select_list as $key => $value){
			
				$item1 = $projectservice->serviceName1($value);
				
				foreach($item1 as $item2){
	
					$item3 = $item2->service_name;
					$service[] = $item3;
					
				}
			}
	
		}
		
		if(!empty($package_list)){
			foreach($package_list as $key => $value){

				$item2 =  $projectservice->packagename($value);
				foreach($item2 as $item3){
					$package[] = $item3->pname;
				}
			}
		}
		

		// foreach($service as $key => $value){
		
		// 	echo $value;
		// }
		// die;
	
		// print_r($name);die;
		// die;
		// print_r($select_list);die;
		
		$data['service'] = $service;
		$data['package'] = $package;
		$data['skills'] = $skill_list;
 		$data["projects"] = $projectservice->getProject($project_id);
		$data['milestones'] = $projectservice->getMilestone($project_id);

		$partial = array('content' => 'client/pages/project/update_project');
		$this->template->load('client/mainpage',$partial,$data);

		
	}

	public function Proposal(){

		$projectservice =  new ProjectService();
		
		$data["proposals"] = $projectservice->allProposal($this->session->userdata('CLIENT_ID'));
		$data["active"] = 2;

		$partial = array('content' => 'client/pages/proposal/proposal');
		$this->template->load('client/mainpage',$partial,$data);

	}

	public function viewProposal($porposal_id){

		$projectservice =  new ProjectService();
		$data["active"] = 2;
		// echo $porposal_id;die;
		$id = $projectservice->getProposal($porposal_id);
		
		$data["item"] = $projectservice->getProposal($porposal_id);
		
		// $data["name"] = $projectservice->getProjectName($x[0]->project_id);

		$data["milestones"] = $projectservice->getMilestone($id[0]->project_id);

		$images = $projectservice->ProjectImages($porposal_id);
		$img = $images[0]->images;
		// print_r($img);die;
		$ids_image = array();

		if(empty($img)){
			$data['images'] =  $ids_image;
		}


		else{
			foreach($images as $key => $value){
				// print_r($value) ; 
				// echo '<br/>';
				foreach($value as $key => $value1){
					// print_r($value1); 
					
					$ids_image = explode(',',$value1);
					// print_r($ids_image);die;
					
				}
				
			}
		}

		// die;
		// print_r($ids_image);die; 

		if(($id[0]->duration_type) == 1){
			$data["duration_type"] = "Month";
		}
		else if(($id[0]->duration_type) == 2){
			$data["duration_type"] = "Year";
		}
		else{
			$data["duration_type"] = "Date";
		}

		$data['images'] =  $ids_image;
		
		$partial = array('content' => 'client/pages/proposal/viewProposal');
		$this->template->load('client/mainpage',$partial,$data);

	}

	public function update($id){

		$projectmodel =  new ProjectModel();
		$y = $this->input->post('package_id');
		$x = $this->input->post('images1');
		$v = $this->input->post('images');
		$c = $this->input->post('service_id');

		// echo count($x) ;die;
		// print_r($x);die;
		
		$date_now = date("Y-m-d");
		// print_r($c) ;die;

		$projectservice =  new ProjectService();

		$due_date = $this->input->post('due_date_type');
		// echo $due_date;die;

		// if(empty($v)){

		$count = count($_FILES['images']['name']);

		// }
		if(!empty($v)){
			$count = count($_FILES['images']['name']);
			// echo $count;
		}
		// die;

		// $u = $_FILES['images']['name'];
		// print_r($u);die;

		$img = array();
		
		$projectmodel->setClient_id($this->session->userdata('CLIENT_ID'));
		$projectmodel->setProject_id($this->input->post('project_id'));
		$projectmodel->setName($this->input->post('name'));
		$projectmodel->setRequirement($this->input->post('requirement'));
		$projectmodel->setEstimated_budget($this->input->post('estimated_budget'));
	
		if(($due_date) == "To be decided" ){
			$projectmodel->setEnd_date($due_date);
			$projectmodel->setDate("none");
				
		}
		else{
			$projectmodel->setEnd_date($due_date);
			$projectmodel->setDate($this->input->post('specific_date_value'));
		}

		$projectmodel->setType($this->input->post('type'));
		$projectmodel->setCategory_id($this->input->post('category_id'));
		$projectmodel->setRequired_skills($this->input->post('required_skills'));
		$projectmodel->setServices($this->input->post('service_id'));
		$projectmodel->setPackages($this->input->post('package_id'));


		if(empty(array_filter($_FILES['images']['name'])) && (empty($x))) {
			$projectmodel->setImages("");
			// echo 5;
		}

		if(empty(array_filter($_FILES['images']['name'])) && (!empty($x))){
			// echo 6;
			$projectmodel->setImages($x);
		}
		
		
		if(!empty(array_filter($_FILES['images']['name'])) && (empty($x))){

			// echo 7;
			for($i=0;$i<$count;$i++){

				if ($_FILES['images']['name'] == 0 && $_FILES['images']['error'] == 0) {
					// echo 74;
					$projectmodel->setImages("");
					// $productsmodel->setProduct_image($this->input->post('p_image'));
					// $postmodel->setbusiness_logo();
				}

				else {

					// echo 8;
					// $filename = $this->session->userdata('CLIENT_ID').$this->input->post('name').time();
					$filename = uniqid() . "-" . time(); // 5dab1961e93a7-1571494241
					// echo $filename;die;
					$extension = pathinfo($_FILES['images']['name'][$i], PATHINFO_EXTENSION); // jpg
					$image = $filename . '.' . $extension; // 5dab1961e93a7_1571494241.jpg
					// echo $image;
					$target = "./uploads/" . basename($image);
		
					if (move_uploaded_file($_FILES['images']['tmp_name'][$i], $target)) {
		
						$data["message"] = "file uploaded,";
					}

					$img[$i] = $image;
				}
				
			}
			// print_r($img);
			$projectmodel->setImages($img);
		}

		if(!empty(array_filter($_FILES['images']['name'])) && (!empty($x))){


			// echo "count is".$count;
			
			for($i=0;$i<$count;$i++){

				if ($_FILES['images']['name'] == 0 && $_FILES['images']['error'] == 0) {
					// echo 7;
					$projectmodel->setImages("");
					// $productsmodel->setProduct_image($this->input->post('p_image'));
					// $postmodel->setbusiness_logo();
				}
				else {

					echo 8;
					// $filename = $this->session->userdata('CLIENT_ID').$this->input->post('name').time();
					$filename = uniqid() . "-" . time(); // 5dab1961e93a7-1571494241
					// echo $filename;die;
					$extension = pathinfo($_FILES['images']['name'][$i], PATHINFO_EXTENSION); // jpg
					$image = $filename . '.' . $extension; // 5dab1961e93a7_1571494241.jpg
		
					$target = "./uploads/" . basename($image);
		
					if (move_uploaded_file($_FILES['images']['tmp_name'][$i], $target)) {
		
						$data["message"] = "file uploaded,";
					}
					$img[$i] = $image;
				}
				
			}

			$img  = array_merge($img,$x);
			$projectmodel->setImages($img);


		}
		// die;
		$projectservice->updateProject($projectmodel);
		
		redirect('/ClientProject/');

	}

	function giveApprove($project_id){

		$projectservice =  new ProjectService();
		$projectmodel =  new ProjectModel();
		$date_now = date("Y-m-d");

		$projectmodel->setProject_id($project_id);
		$projectmodel->setUpdate_date($date_now);

		$projectservice->giveApprove($projectmodel);
		$projectservice->approveProposal($project_id);

		redirect('/ClientProject/Proposal/');

	}

	public function editItem($id){

		$data["active"] = 2;

		$projectservice = new ProjectService();
		$data["projects"] = $projectservice->getProject($id);
		$data["items"] = $projectservice->allCategories();

		$item = $projectservice->getProject($id);

		$skills = $item[0]->required_skills;
		$skill_list = explode(',',$skills);
		$data['skills'] = $skill_list;

		$images = $projectservice->ProjectImages2($id);

		$ids_image = array();
		$service = array();
		$team_name2 = array();

		$package = array();
		$team_name1 = array();

		$select_list = json_decode("[".$item[0]->services."]");
		
		$package_list = json_decode("[".$item[0]->packages."]");

		// $images1 = json_decode("[".$images."]");

		// print_r($images);die;

		if(!empty($select_list)){

			foreach($select_list as $key => $value){
				// print_r($select_list);die;

				$item1 = $projectservice->serviceName1($value);
				// print_r($select_list);die;
				
				$service[$value] = $item1[0]->service_name;
				$team_name2[] = $item1[0]->name;
				$service_id[] = $item1[0]->service_id;

				// foreach($item1 as $key =>$item2){
				// 	// echo $key;

				// 	$service[$value] = $item2->service_name;
				// 	// echo $service[$value];
				// 	$team_name2[] = $item2->name;
					
					
				// }
				// print_r($service);
				
			}
			// print_r($service_id);
			
			$data['service'] = $service;
			$data["team_name2"] = $team_name2;
			$data["service_id"] = $service_id;

		}
		else{
			$data['service'] = $service;
			$data["team_name2"] = $team_name2;
			// $data["service_id"] = $service_id;
		}
			
		// print_r($service);die;

// die;
		// print_r($service);die;

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
		
		}else{
			$data['package'] = $package;
			$data["team_name1"] = $team_name1;
		}

		if(empty($images)){

			// print_r($ids_image);
			$ids_image;
			// echo 4;die;
		}
		else{
			foreach($images as $key => $value){
			
				// echo ($value);die;
				// print_r($value) ; die;
				// echo '<br/>';
				foreach($value as $key => $value1){
					
					$ids_image = explode(',',$value1);
					
					
				}
				
			}
			// print_r($ids_image);die;
			// if(empty($ids_image)){
			// 	echo 1 ;
			// }
		}
// die;

		// print_r($ids_image);die;
		// $data['service'] = $service;
		// $data['package'] = $package;
		// $data["no"] = 1;
		$data['images5'] =  $ids_image;
		$data["teams"] = $projectservice->allTeams();

		$partial = array('content' => 'client/pages/project/editProject');
		$this->template->load('client/mainpage',$partial,$data);

	}

	public function getTeams(){

		$projectservice = new ProjectService();

		// $category_id = $this->input->post('category_id');

		$teams = $projectservice->allTeams();

		echo "<option>-- Choose one --</option>";
		
		foreach($teams as $item1){

			echo "<option value=".$item1->team_id.">".$item1->name."</option>";
		}
		
	}

}


?>
