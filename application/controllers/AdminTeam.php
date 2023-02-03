<?php
Class AdminTeam extends CI_Controller{

	function __construct(){

		parent::__construct();
		if(!$this->session->userdata('ADMIN_ID')){
			redirect('/Admin/');
		}else{
			

			$this->load->model('Admin/Team/TeamModel');
			$this->load->model('Admin/Team/TeamService');
		}	
		
	}

	

	public function index(){

		$data["title"] = "test";
		$data['active'] = 3;

		$teamservice = new TeamService();
		$data['items'] = $teamservice->allTeams();
		
		$partial = array('content' => 'admin/pages/team/teams');
		$this->template->load('admin/mainpage',$partial,$data);	
	}

	public function addTeam(){

		$teamservice = new TeamService();
		$data["title"] = "test";
		$data['active'] = 3;

		$partial = array('content' => 'admin/pages/team/addTeam');
		$this->template->load('admin/mainpage',$partial,$data);	  
	
	}

	function saveTeam(){

		$teammodel = new TeamModel();
		$teamservice = new TeamService();

		$date_now = date("Y-m-d");

		$teammodel->setName($this->input->post('name'));
		$teammodel->setParent_category($this->input->post('parent_category'));
		$teammodel->setCreated_date($date_now);

		$teamservice->saveTeam($teammodel);

		redirect('/AdminTeam/');
	}

	function editTeam($team_id){

		$teamservice = new TeamService();
		$data["title"] = "test";
		$data['active'] = 3;

		$data["teams"] = $teamservice->editTeam($team_id);

		$partial = array('content' => 'admin/pages/team/editTeam');
		$this->template->load('admin/mainpage',$partial,$data);	 
	}

	function updateTeam(){

		$teammodel = new TeamModel();
		$teamservice = new TeamService();

		$date_now = date("Y-m-d");

		$teammodel->setTeam_id($this->input->post('team_id'));
		$teammodel->setName($this->input->post('name'));
		$teammodel->setParent_category($this->input->post('parent_category'));
		$teammodel->setCreated_date($date_now);

		$teamservice->updateTeam($teammodel);

		redirect('/AdminTeam/');

	}

	function deleteTeam($id){

		$teamservice = new TeamService();

		$teamservice->deleteTeam($id);

		redirect('/AdminTeam/');

	}

}

?>
