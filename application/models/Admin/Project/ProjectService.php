<?php

Class ProjectService extends CI_Model{

	

	function allCategories(){
		$this->db->select('*');
		$this->db->from('categories');
		
		$query = $this->db->get();
		return $query->result();
	}

	function allTeams(){
		$this->db->select('*');
		$this->db->from('teams');
		
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
		$ids_service = array();

		foreach($services as $key => $value){
			$ids_service[] = $value;
		}
		$ids_service = implode(',',$ids_service);


		$packages = $projectmodel->getPackages();
		$ids_package = array();

		foreach($packages as $key => $value){
			$ids_package[] = $value;
		}
		$ids_package = implode(',',$ids_package);


		$images = $projectmodel->getImages();
		$ids_image = array();
		
		foreach($images as $key => $value){
		
			$ids_image[]= $value;
		}
		$ids_image = implode(',',$ids_image);

		
		$data = array(

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
	function allProjects(){
		$this->db->select('*');
		$this->db->from('project');
		$query = $this->db->get();
		return $query->result();
	}

	function allProjects2(){
		$this->db->select('*,project.project_id as pid, project.update_date as update, user-login.company_name,invoice.invoice_no');
		$this->db->from('project');
		$this->db->join('user-login','user-login.client_id = project.client_id');
		$this->db->join('invoice','invoice.project_id = project.project_id','left',false);
		$this->db->order_by("project.project_created_date", "desc");
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
		$this->db->select('*');
		$this->db->from('service');
		$this->db->where('service.service_id='.$id);
		$query = $this->db->get();
		return $query->result();
	}

	function packagename($id){
		$this->db->select('*');
		$this->db->from('package');
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

	function ProjectImages($id){
		$this->db->select('images');
		$this->db->from('project');
		$this->db->where('project.project_id='.$id);
		$query = $this->db->get();
		return $query->result();
	}

	function ProposalImages($id){

		$this->db->select('images');
		$this->db->from('proposal');
		$this->db->where('proposal.proposal_id='.$id);
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

	function getProjectd($project_id){
		$this->db->select('*,user-login.company_name,user-login.email,user-login.contact,proposal.milestone_total_price');
		$this->db->from('project');
		$this->db->join('user-login','user-login.client_id = project.client_id');
		$this->db->join('proposal','proposal.project_id = project.project_id','left',false);
		$this->db->where('project.project_id='.$project_id);
		$query = $this->db->get();
		return $query->result();
	}

	function saveMilestone($milestonemodel){

		
		$data = array(

			'project_id' => $milestonemodel->getProject_id(),
			'milestone_name' => $milestonemodel->getMilestone_name(),
			'milestone_weight' => $milestonemodel->getMilestone_weight(),
			'milestone_progress' => $milestonemodel->getMilestone_progress(),
			'milestone_description' => $milestonemodel->getMilestone_description(),
			'start_date' => $milestonemodel->getStart_date(),
			'end_date' => $milestonemodel->getEnd_date(),
			'milestone_amount' => $milestonemodel->getAmount(),
			'milestone_del_ind' => '1',
			'milestone_created_date' => $milestonemodel->getCreated_date(),
			
		);
		
		return $this->db->insert('milestone',$data);

	}

	function getMilestone($id){
		$this->db->select('*');
		$this->db->from('milestone');
		$this->db->where('project_id='.$id);
		$query = $this->db->get();
		return $query->result();
	}

	function createProposal($proposalmodel){

		$images = $proposalmodel->getImages();
		$ids_image = array();
		
		foreach($images as $key => $value){
		
			$ids_image[]= $value;
		}
		$ids_image = implode(',',$ids_image);

		$data = array(

			'client_id' => $proposalmodel->getClient_id(),
			'project_id' => $proposalmodel->getProject_id(),
			'milestone_total_price' => $proposalmodel->getMilestone_total(),
			'duration_no' => $proposalmodel->getDuration_no(),
			'duration_type' => $proposalmodel->getDuration_type(),
			'cover_letter' => $proposalmodel->getCover_letter(),
			'images' => $ids_image,
			'proposal_status' => '1',
			'proposal_del_ind' => '1',
			'proposal_created_date' => $proposalmodel->getCreated_date(),
			
		);
		
		$this->updateAddProposalStatus($proposalmodel->getProject_id());
		return $this->db->insert('proposal',$data);
		


	}

	function updateAddProposalStatus($id){

		// echo $id ;die;
		$date_now = date("Y-m-d");
		$data = array(
			'add_proposal' => '1',
			'project_status' => '2',
			'update_date' => $date_now,
		);
	
		$this->db->where('project_id='.$id);
		return $this->db->update('project',$data);
	}

	function checkProposal($id){

		$this->db->select('add_proposal');
		$this->db->from('project');
		$this->db->where('project_id='.$id);
		$query = $this->db->get();
		return $query->result();
	}

	function getMilestoneTotal($id){

		$this->db->select('*');
		$this->db->from('proposal');
		$this->db->where('project_id='.$id);
		$query = $this->db->get();
		return $query->result();
	}

	function calcTotal($proposalmodel){

		$id = $proposalmodel->getProject_id();

		$data = array(
			'milestone_total_price' => $proposalmodel->getMilestone_total(),
		);

		$this->db->where('project_id='.$id);
		return $this->db->update('proposal',$data);

	}

	function allProposals(){
		
		$this->db->select('*,company_name,name');
		$this->db->from('proposal');
		$this->db->join('user-login','user-login.client_id = proposal.client_id');
		$this->db->join('project','project.project_id = proposal.project_id');
		$this->db->order_by("proposal.proposal_created_date", "desc");
		$query = $this->db->get();
		return $query->result();
	}

	function startProject($projectmodel){

		$data = array(

			'start_project' => '1',
			'project_status' => '4',
			'update_date' => $projectmodel->getUpdate_date(),

		);

		$this->db->where('project_id='.$projectmodel->getProject_id());
	   	return $this->db->update('project',$data);


	}
	function holdProject($projectmodel){

		$data = array(

			'hold_project' => '1',
			'project_status' => '5',
			'update_date' => $projectmodel->getUpdate_date(),

		);

		$this->db->where('project_id='.$projectmodel->getProject_id());
	   	return $this->db->update('project',$data);


	}

	function endProject($projectmodel){

		$data = array(

			'end_project' => '1',
			'project_status' => '6',
			'project_del_ind' => '2',
			'start_project' => '0',
			'update_date' => $projectmodel->getUpdate_date(),

		);

		$this->db->where('project_id='.$projectmodel->getProject_id());
	   	return $this->db->update('project',$data);

	}
	
	function startAgainProject($projectmodel){

		$data = array(

			'hold_project' => '0',
			'project_status' => '4',
			'update_date' => $projectmodel->getUpdate_date(),

		);

		$this->db->where('project_id='.$projectmodel->getProject_id());
	   	return $this->db->update('project',$data);


	}

	function updateItem($projectmodel){

		$data = array(

			
			'project_progress' => $projectmodel->getProgress(),
			'update_date' => $projectmodel->getUpdate_date(),

		);

		$this->db->where('project_id='.$projectmodel->getProject_id());
	   	return $this->db->update('project',$data);
	}

	function viewProposal($id){

		$this->db->select('*,project.name');
		$this->db->from('proposal');
		$this->db->where('proposal_id='.$id);
		$this->db->join('project','project.project_id = proposal.project_id');
		$query = $this->db->get();
		return $query->result();
	}
	
}
?>
