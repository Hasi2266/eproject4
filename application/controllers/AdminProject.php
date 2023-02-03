<?php 

Class AdminProject extends CI_Controller{

	function __construct(){

		parent::__construct();
		if(!$this->session->userdata('ADMIN_ID')){
			redirect('/Admin/');
		}else{
			$this->load->model("Admin/Project/ProjectService");
			$this->load->model("Admin/Project/ProjectModel");
			$this->load->model("Admin/Project/MilestoneModel");
			$this->load->model("Admin/Project/ProposalModel");
		}
		
	}

	

	public function date(){

		$data["title"] = "Admin Projects";
		$partial = array('content' => 'admin/pages/project/test');
		$this->template->load('admin/mainpage',$partial,$data);
		// $this->load->view("admin/pages/project/test");
	}

	public function index(){

		$data["active"] = 2;
		$data["title"] = "Admin Projects";

		$projectservice = new ProjectService();
		$data["items"] = $projectservice->allProjects2();
	
		$partial = array('content' => 'admin/pages/project/projects');
		$this->template->load('admin/mainpage',$partial,$data);
		
	}

	public function addMilestone($project_id){

		$data["title"] = "Admin Projects Milestone";
		$data["active"] = 2;

		$projectservice = new ProjectService();
		$data["items"] = $projectservice->allCategories();
		$item = $projectservice->service($project_id);

		// print_r($item[0]->images);die;
		$images = $projectservice->ProjectImages($project_id);
		// $images1 = $images[0]->images;
		// print_r($images1);die;

		if(!empty($images)){
			// echo 5;die;
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
		
		if(($item[0]->project_status) == 1){
			$data['initial'] = 'Submitted';
		}

		// if(($item[0]->date) == "none"){
		// 	echo ''
		// }
		// print_r($item);die;
		$select_list = json_decode("[".$item[0]->services."]");
		$package_list = json_decode("[".$item[0]->packages."]");
		
		$service = array();
		$package = array();

		$skills = $item[0]->required_skills;
		$skill_list = explode(',',$skills);

		$service = array();
		$package = array();
		
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
				$package[] = $item3->name;
			}
		}
	}
		$data['service'] = $service;
		$data['package'] = $package;
		$data['images'] =  $ids_image;
		$data['skills'] = $skill_list;
 		$data["projects"] = $projectservice->getProject($project_id);
		$data["milestones"] = $projectservice->getMilestone($project_id);
	
		$partial = array('content' => 'admin/pages/project/addMilestone');
		$this->template->load('admin/mainpage',$partial,$data);

	}

	public function saveMilestone(){

		$data["title"] = "Admin Projects";
		$date_now = date("Y-m-d");

		$milestonemodel = new MilestoneModel();
		$projectservice = new ProjectService();
		$data["items"] = $projectservice->allProjects();
		$id = $this->input->post('project_id');

		$name =  $this->input->post('milestone_name');
		$weight =  $this->input->post('milestone_weight');
		$progress =  $this->input->post('milestone_progress');
		$description =  $this->input->post('milestone_description');
		$start_date =  $this->input->post('start_date');
		$end_date =  $this->input->post('end_date');
		$amount = $this->input->post('amount');
		
		$count = count($name);
		$amounts = array();
		$addProposal =  $projectservice->checkProposal($id);
		// echo $addProposal[0]->add_proposal;

		if(($addProposal[0]->add_proposal) == 1){

			for($i=0;$i<$count;$i++){
			
				$col1 = $name[$i];
				$col2 = $weight[$i];
				$col3 = $progress[$i];
				$col4 = $description[$i];
				$col5 = $start_date[$i];
				$col6 = $end_date[$i];
				$col7 = $amount[$i];
	
				$milestone_data = array($col1,$col2,$col3,$col4,$col5,$col6,$col7);
				
				if(array_filter($milestone_data)){

					$milestonemodel->setProject_id($this->input->post('project_id'));
					$milestonemodel->setMilestone_name($col1);
					$milestonemodel->setMilestone_weight($col2);
					$milestonemodel->setMilestone_progress($col3);
					$milestonemodel->setMilestone_description($col4);
					$milestonemodel->setStart_date($col5);
					$milestonemodel->setEnd_date($col6);
					$milestonemodel->setAmount($col7);
					$milestonemodel->setCreated_date($date_now);
					
					$amounts[$i] = $amount[$i];

					$projectservice->saveMilestone($milestonemodel);
						
				}
				
				// echo $col1 . '<br/>';
				// echo $col2 . '<br/>';
				// echo $col3 . '<br/>';
				// echo $col4 . '<br/>';
				// echo $col5 . '<br/>';
				// echo $col6;
				// echo '<br/>';

				
			}

			$getMilestone = $projectservice->getMilestoneTotal($this->input->post('project_id'));
			$total = $getMilestone[0]->milestone_total_price;
			
			foreach($amounts as $key => $value){

				if(!empty($value)){
					$total = $total + $value;
				}
				else{
					$total = $total;
				}
				
			}

			$proposalmodel = new ProposalModel();
			$proposalmodel->setMilestone_total($total);
			$proposalmodel->setProject_id($this->input->post('project_id'));
			$projectservice->calcTotal($proposalmodel);
		
			// print_r($amounts);die;
			redirect('/AdminProject/');
		
		}
		else{
			redirect('/AdminProject/addProposal/'.$id);
		}
		

	}

	public function addProposal($project_id){

		$data['title']  = "test";
		$data["active"] = 2;

		// $partial = array('content' => 'admin/pages/project/addMilestone');
		// $this->template->load('admin/mainpage',$partial,$data);

		$projectservice = new ProjectService();
		$data["projects"] = $projectservice->getProject($project_id);

		$partial = array('content' => 'admin/pages/proposal/addProposal');
		$this->template->load('admin/mainpage',$partial,$data);

	}

	public function saveProposal(){

		$date_now = date("Y-m-d");
		
		
		// $img1 = $this->input->post('images');
		// $count = count($_FILES['images']['name']);
		// echo $count;die;

		$total = $this->input->post('milestone_total');
		$y = $this->input->post('milestone_weight');

		// print_r($y);die;
		// echo $y;die;
		// echo $total;die;
		$data['title']  = "test";
		$projectservice = new ProjectService();

		$milestonemodel = new MilestoneModel();
		$proposalmodel = new ProposalModel();
		$projectservice = new ProjectService();
		$data["items"] = $projectservice->allProjects();
		
		$name =  $this->input->post('milestone_name');
		$weight =  $this->input->post('milestone_weight');
		$progress =  $this->input->post('milestone_progress');
		$description =  $this->input->post('milestone_description');
		$start_date =  $this->input->post('start_date');
		$end_date =  $this->input->post('end_date');
		$amount = $this->input->post('amount');
		
		$count = count($name);
		
		// $name =  $this->input->post('milestone_name');
		// $weight =  $this->input->post('milestone_weight');
		// $progress =  $this->input->post('milestone_progress');
		// $description =  $this->input->post('milestone_description');
		// $start_date =  $this->input->post('start_date');
		// $end_date =  $this->input->post('end_date');
		// $amount = $this->input->post('amount');
		
		// $count = count($name);
		$id = $this->input->post('project_id');
		
		// print_r($name);die;
		for($i=0;$i<$count;$i++){
			
			
			$col1 = $name[$i];
			$col2 = $weight[$i];
			$col3 = $progress[$i];
			$col4 = $description[$i];
			$col5 = $start_date[$i];
			$col6 = $end_date[$i];
			$col7 = $amount[$i];

			// echo $col1;
			
			if(!empty($col1) || !empty($col2)  || !empty($col3)  || !empty($col4)  || !empty($col5)  || !empty($col6)  || !empty($col7)){

				// echo 'hi';
				$milestonemodel->setProject_id($this->input->post('project_id'));
				$milestonemodel->setMilestone_name($col1);
				$milestonemodel->setMilestone_weight($col2);
				$milestonemodel->setMilestone_progress($col3);
				$milestonemodel->setMilestone_description($col4);
				$milestonemodel->setStart_date($col5);
				$milestonemodel->setEnd_date($col6);
				$milestonemodel->setAmount($col7);
				$milestonemodel->setCreated_date($date_now);

				$projectservice->saveMilestone($milestonemodel);
			}

			// $miles_data = array($col1,$col2,$col3,$col4,$col5,$col6,$col7);
			// print_r($miles_data);
			// if(empty($miles_data)){
			// 	echo "s";
			// }
	
			// die;
		
			// echo $col1 . '<br/>';
			// echo $col2 . '<br/>';
			// echo $col3 . '<br/>';
			// echo $col4 . '<br/>';
			// echo $col5 . '<br/>';
			// echo $col6;
			// echo $col7;
			// echo '<br/>';
		
		}

		$proposalmodel->setClient_id($this->input->post('client_id'));
		$proposalmodel->setProject_id($id);
		$proposalmodel->setMilestone_total($total);
		$proposalmodel->setDuration_no($this->input->post('duration_no'));
		$proposalmodel->setDuration_type($this->input->post('duration_type'));
		$proposalmodel->setCover_letter($this->input->post('cover_letter'));
		
		$count = count($_FILES['images']['name']);
		$img = array();
		// print_r($milestonemodel);die;
		// // die;

		if(empty(array_filter($_FILES['images']['name']))) {

			$proposalmodel->setImages("");
			// echo 5;
		}
		else{

		// echo $id;die;
		
			for($i=0;$i<$count;$i++){

				if ($_FILES['images']['size'] == 0 && $_FILES['images']['error'] == 4) {
					$proposalmodel->setImages($this->input->post('images['.$i.']'));
					// $productsmodel->setProduct_image($this->input->post('p_image'));
					// $postmodel->setbusiness_logo();
				}
				else {

					$filename = uniqid() . "-" . time(); // 5dab1961e93a7-1571494241
					// $filename = $this->input->post('client_id')."proposal_".$i;
					// $filename = 
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
	
			$proposalmodel->setImages($img);
		}

		$proposalmodel->setCreated_date($date_now);

		$projectmodel = new ProjectModel();
		$projectmodel->setProject_id($id);
		// echo $id;die;
		$projectmodel->setUpdate_date($date_now);

		$projectservice->createProposal($proposalmodel);
		// $projectservice->updateAddProposalStatus($id);
		
		
		redirect('/AdminProject/');

	}

	public function viewProposal(){

		$data["title"] = "Admin Proposals";
		$data["active"] = 2;

		$projectservice = new ProjectService();
		$data["items"] = $projectservice->allProposals();
	
		$partial = array('content' => 'admin/pages/proposal/proposals');
		$this->template->load('admin/mainpage',$partial,$data);
	}

	public function viewProposal1($id){

		$data["title"] = "Admin Proposals";
		$data["active"] = 2;

		$projectservice = new ProjectService();
		$data["items"] = $projectservice->viewProposal($id);

		$items = $projectservice->viewProposal($id);
		$data["milestones"] = $projectservice->getMilestone($items[0]->project_id);

		$images = $projectservice->ProposalImages($id);
	
		if(!empty($images)){

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

		$data["images"] = $ids_image;
	
		$partial = array('content' => 'admin/pages/proposal/viewProposal');
		$this->template->load('admin/mainpage',$partial,$data);
	}

	public function startProject($project_id){

		$projectservice = new ProjectService();
		$projectmodel = new ProjectModel();
		$date_now = date("Y-m-d");

		$projectmodel->setProject_id($project_id);
		$projectmodel->setUpdate_date($date_now);

		$projectservice->startProject($projectmodel);

		redirect('/AdminProject/');

	}

	public function endProject($project_id){

		$projectservice = new ProjectService();
		$projectmodel = new ProjectModel();
		$date_now = date("Y-m-d");

		$projectmodel->setProject_id($project_id);
		$projectmodel->setUpdate_date($date_now);

		$projectservice->endProject($projectmodel);

		redirect('/AdminProject/');
	}

	public function holdProject($project_id){

		$projectservice = new ProjectService();
		$projectmodel = new ProjectModel();
		$date_now = date("Y-m-d");

		$projectmodel->setProject_id($project_id);
		$projectmodel->setUpdate_date($date_now);

		$projectservice->holdProject($projectmodel);

		redirect('/AdminProject/');
	}
	
	public function startAgainProject($project_id){

		$projectservice = new ProjectService();
		$projectmodel = new ProjectModel();
		$date_now = date("Y-m-d");

		$projectmodel->setProject_id($project_id);
		$projectmodel->setUpdate_date($date_now);
		
		$projectservice->startAgainProject($projectmodel);

		redirect('/AdminProject/');
	}

	
	function editItem($project_id){

		$projectservice = new ProjectService();
		$projectmodel = new ProjectModel();

		$data["title"] = "test";
		$data["active"] = 2;
		$data["no"] = 1;
		$data['item3'] = $projectservice->allTeams();
		$data["projects"] = $projectservice->getProject($project_id);
		$data["items"] = $projectservice->allCategories();
		$item = $projectservice->service($project_id);

		$select_list = json_decode("[".$item[0]->services."]");
		$package_list = json_decode("[".$item[0]->packages."]");

		$service = array();
		$package = array();

		$skills = $item[0]->required_skills;
		$skill_list = explode(',',$skills);
		$data['skills'] = $skill_list;

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
					$package[] = $item3->name;
				}
			}
		}

		

		$data['service'] = $service;
		$data['package'] = $package;

		$partial = array('content' => 'admin/pages/project/editProject');
		$this->template->load('admin/mainpage',$partial,$data);

	}

	function updateProject(){

		$projectservice = new ProjectService();
		$projectmodel = new ProjectModel();
		$date_now = date("Y-m-d");

		$projectmodel->setProgress($this->input->post("progress"));
		$projectmodel->setProject_id($this->input->post("project_id"));
		$projectmodel->setUpdate_date($date_now);

		$projectservice->updateItem($projectmodel);

		redirect('/AdminProject/');

	}
	

	function deleteItem($id){

		$projectservice = new ProjectService();
		$projectmodel = new ProjectModel();

		$projectservice->deleteItem($id);

		redirect('/AdminProject/');

	}

	public function addInvoice($project_id){

		$projectservice = new ProjectService();
		$projectmodel = new ProjectModel();
		$data["active"] = 2;

		$data["projects"] = $projectservice->getProjectd($project_id);

		$partial = array('content' => 'admin/pages/invoice/createInvoice');
		$this->template->load('admin/mainpage',$partial,$data);

	}

	
}



?>
