<?php

Class ProjectService extends CI_Model{

	

	function allCategories(){
		$this->db->select('*');
		$this->db->from('categories');
		
		$query = $this->db->get();
		return $query->result();
	}

	// function allProjects2(){
	// 	$this->db->select('*,user-login.company_name');
	// 	$this->db->from('project');
	// 	$this->db->join('user-login','user-login.client_id = project.client_id');
	// 	$this->db->order_by("project.project_created_date", "desc");
	// 	$query = $this->db->get();
	// 	return $query->result();
	// }

	function allTeams(){
		$this->db->select('*');
		$this->db->from('teams');
		$query = $this->db->get();
		return $query->result();
	}

	function getService($category_id){

		$this->db->select('*');
		$this->db->from('service');
		$this->db->where('category_id='.$category_id);

		$query = $this->db->get();
		return $query->result();
	}

	function getPackage($team_id){

		$this->db->select('*');
		$this->db->from('package');
		$this->db->where('team='.$team_id);

		$query = $this->db->get();
		return $query->result();
	}
	

	function createProject($projectmodel){

		$requirements = $projectmodel->getRequired_skills();
		// print_r($requirements);die;

		$ids_requirement = array();
		
		foreach($requirements as $key => $value){
		
			$ids_requirement[]= $value;
		}
		$ids_requirement = implode(',',$ids_requirement);
		// print_r($ids_requirement);die;

		$services = $projectmodel->getServices();
		// print_r($services);die;
		$ids_service = array();

		if(empty($services)){
			$ids_service = "";
		}
		else{

			foreach($services as $key => $value){
			
			
				$ids_service[] = $value;
			
			
			// echo $value;die;
			}
			$ids_service = implode(',',$ids_service);
		}
		

		// print_r($ids_service);die;


		$packages = $projectmodel->getPackages();
		$ids_package = array();

		if(empty($packages)){
			$ids_package = "";
		}
		else{

			foreach($packages as $key => $value){

			
				$ids_package[] = $value;
			
			
			}
			$ids_package = implode(',',$ids_package);
		}
		

		$images = $projectmodel->getImages();
		$ids_image = array();

		foreach($images as $key => $value){
		
			$ids_image[]= $value;
		}
		$ids_image = implode(',',$ids_image);

		
		$data = array(

			'client_id' => $projectmodel->getClient_id(),
			'name' => $projectmodel->getName(),
			'requirement' => $projectmodel->getRequirement(),
			'estimated_budget' => $projectmodel->getEstimated_budget(),
			'end_date' => $projectmodel->getEnd_date(),
			'date' => $projectmodel->getDate(),
			'type' => $projectmodel->getType(),
			'category_id' => $projectmodel->getCategory_id(),
			'required_skills' => $ids_requirement,
			'services' => $ids_service,
			'packages' => $ids_package,
			'images' => $ids_image,
			'project_status' => '1',
			'project_progress' => '0%',
			'project_created_date' => $projectmodel->getCreated_date(),
			'project_del_ind' => '1',
			'update_date' => $projectmodel->getUpdate_date(),


		);
		
		return $this->db->insert('project',$data);
		//  print_r($ids);die;
	}

	function allServices(){
		$this->db->select('*');
		$this->db->from('service');
		// $this->db->where('project_id=2');
		$query = $this->db->get();
		return $query->result();
	}
function getService_id(){
	$this->db->select('services');
		$this->db->from('project');
		$query = $this->db->get();
		return $query->result();
}
	function allProjects($id){
		$this->db->select('*,service.service_name');
		$this->db->from('project');
		$this->db->join('service','service.service_id = project.services','left',false);
		$this->db->where('project.client_id='.$id);
		$this->db->where('project.start_project=0');
		$this->db->order_by("project.project_created_date", "desc");
		// $this->db->where('service.service_id='.$service_id);

		$query = $this->db->get();
		return $query->result();
	}

	
	function allProjects2($id){
		$this->db->select('*,project.project_id as pid,service.service_name');
		$this->db->from('project');
		$this->db->join('service','service.service_id = project.services','left',false);
		// $this->db->join('invoice','invoice.project_id = project.project_id','left',false);
		$this->db->order_by("project_created_date", "desc");
		$this->db->where('project.client_id='.$id);

		$query = $this->db->get();
		return $query->result();
	}

	function invoices($id){

		$this->db->select('*');
		$this->db->from('invoice');
		$this->db->where('invoice.project_id='.$id);
		$query = $this->db->get();
		return $query->result();
	}

	function allProjects1($service_id){
		$this->db->select('*,service.service_name');
		$this->db->from('project');
		$this->db->join('service','service.service_id = project.services','left',false);
		$this->db->where('service.service_id='.$service_id);
		$query = $this->db->get();
		return $query->result();
	}

	function serviceName($id){
		$this->db->select('service_name');
		$this->db->from('service');
		$this->db->join('project','project.services = service.service_id');
		$this->db->where('project.project_id='.$id);
		$query = $this->db->get();
		return $query->result();
	}

	
	function serviceName1($id){
		

		$this->db->select('*,teams.name,teams.team_id');
        $this->db->from('service');
		$this->db->join('teams','teams.team_id = service.category_id','left',false);
		$this->db->where('service.service_id='.$id);
        $query = $this->db->get();
		return $query->result();
	}

	

	function packagename($id){
		$this->db->select('*,teams.name,package.name as pname,teams.team_id');
        $this->db->from('package');
		$this->db->join('teams','teams.team_id = package.team','left',false);
		$this->db->where('package.package_id='.$id);
        $query = $this->db->get();
		return $query->result();
	}
	

	function service($id){
		$this->db->select('*');
		$this->db->from('project');
		$this->db->where('project.project_id='.$id);
		$query = $this->db->get();
		return $query->result();
	}
	

	
	function getProject($project_id){
		$this->db->select('*');
		$this->db->from('project');
		$this->db->where('project_id='.$project_id);
		$query = $this->db->get();
		return $query->result();
	}


	function getMilestone($id){
		$this->db->select('*');
		$this->db->from('milestone');
		$this->db->where('project_id='.$id);
		$query = $this->db->get();
		return $query->result();
	}

	function allProposal($id){
		$this->db->select('*,name');
		$this->db->from('proposal');
		$this->db->join('project','project.project_id = proposal.project_id','left',false);
		$this->db->order_by("proposal_created_date", "desc");
		$this->db->where('proposal.client_id='.$id);
		$query = $this->db->get();
		return $query->result();
	}

	function getProposal($proposal_id){

		$this->db->select('*,name');
		$this->db->from('proposal');
		$this->db->join('project','project.project_id = proposal.project_id','left',false);
		$this->db->where('proposal_id='.$proposal_id);
		$query = $this->db->get();
		return $query->result();
	}

	function ProjectImages($id){
		
		$this->db->select('*');
		$this->db->from('proposal');
		$this->db->where('proposal_id='.$id);
		$query = $this->db->get();
		return $query->result();
	}

	function ProjectImages1($id){
		
		$this->db->select('images');
		$this->db->from('project');
		$this->db->where('project_id='.$id);
		$query = $this->db->get();
		return $query->result();
	}

	function updateProject($projectmodel){

		$requirements = $projectmodel->getRequired_skills();
		// print_r($requirements);die;

		$ids_requirement = array();
		
		foreach($requirements as $key => $value){
		
			$ids_requirement[]= $value;
		}
		$ids_requirement = implode(',',$ids_requirement);
		// print_r($ids_requirement);die;

		$services = $projectmodel->getServices();
		$ids_service = array();

		if(empty($services)){
			$ids_service = "";
		}
		else{

			foreach($services as $key => $value){


				$ids_service[] = $value;
			}
			$ids_service = implode(',',$ids_service);
		}
		// print_r($services);die;
		

		$packages = $projectmodel->getPackages();
		$ids_package = array();

		if((empty($packages))){
			$ids_package = "";
		}
		else{
			foreach($packages as $key => $value){
				$ids_package[] = $value;
			}
			$ids_package = implode(',',$ids_package);

		}
		
		$images = $projectmodel->getImages();
		// print_r($images);die;
		$ids_image = array();
		// print_r($ids_image);die;

		if(empty($images)){

			$ids_image = "";
			// print_r($ids_image);die;
			// $output = $this->ProjectImages2($projectmodel->getProject_id());
			// print_r($output);die;
			
		}
		
		else{

			// print_r($images);die;
			foreach($images as $key => $value){
				// echo $value;die;
				$ids_image[]= $value;
			}

			$ids_image = implode(',',$ids_image);

		}
		
		$date_now = date("Y-m-d");
		// print_r($ids_image);die;
		

		$data = array(

			// 'client_id' => $projectmodel->getClient_id(),
			'name' => $projectmodel->getName(),
			'requirement' => $projectmodel->getRequirement(),
			'estimated_budget' => $projectmodel->getEstimated_budget(),
			'end_date' => $projectmodel->getEnd_date(),
			'date' => $projectmodel->getDate(),
			'type' => $projectmodel->getType(),
			'category_id' => $projectmodel->getCategory_id(),
			'required_skills' => $ids_requirement,
			'services' => $ids_service,
			'packages' => $ids_package,
			'images' => $ids_image,
			'project_status' => '1',
			'project_progress' => '0%',
			// 'project_created_date' => $projectmodel->getCreated_date(),
			'project_del_ind' => '1',
			'update_date' => $date_now,

		);
		
		$this->db->where('project_id='.$projectmodel->getProject_id());
	   	return $this->db->update('project',$data);

		  


	}
	
	function giveApprove($projectmodel){


		$data = array(

			'approve_project' => '1',
			'project_status' => '3',
			'update_date' => $projectmodel->getUpdate_date(),

		);

		$this->db->where('project_id='.$projectmodel->getProject_id());
	   	return $this->db->update('project',$data);

	}

	function approveProposal($id){


		$data = array(

			'approve_proposal' => '1',
			'proposal_status' => '2',

		);

		$this->db->where('project_id='.$id);
	   	return $this->db->update('proposal',$data);

	}

	
	function ProjectImages2($id){
		
		
		$this->db->select('images');
		$this->db->from('project');
		$this->db->where('project_id='.$id);
		$query = $this->db->get();
		return $query->result();
	}
	
	function checkPackage($project_id){
		$this->db->select('*');
        $this->db->from('project');
		$this->db->where("project_id like '".$project_id."'");
		$query = $this->db->get();
		return $query->result();
	}

	function getpackageName($id){
		
		$this->db->select('name');
        $this->db->from('package');
		$this->db->where("package_id=".$id);
		$query = $this->db->get();
		return $query->result();
	}

	function getServiceName($id){
		$this->db->select('service_name');
        $this->db->from('service');
		$this->db->where("service_id=".$id);
		$query = $this->db->get();
		return $query->result();
	}
	// function getProjectName($id){

	// 	$this->db->select('name');
	// 	$this->db->from('project');
	// 	$this->db->where('project_id='.$id);
	// 	$query = $this->db->get();
	// 	return $query->result();
	// }
}
?>
