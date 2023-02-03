<?php

Class ClientServices extends CI_Model{


	function getTeams(){
		$this->db->select('*');
        $this->db->from('teams');
        $query = $this->db->get();
		return $query->result();

	}
	function getFirstrow(){
		$this->db->limit(1);
		$query = $this->db->get('teams');
		return $query->row();
	}
	
	function getServices(){

		$this->db->select('*,name');
        $this->db->from('service');
		$this->db->join('teams','teams.team_id = service.category_id','left',false);
        $query = $this->db->get();
		return $query->result();
	}

	function getServiceName($value){

		$this->db->select('*,teams.name,teams.team_id');
        $this->db->from('service');
		$this->db->join('teams','teams.team_id = service.category_id','left',false);
		$this->db->where('service.service_id='.$value);
        $query = $this->db->get();
		return $query->result();
	}
}
?>
