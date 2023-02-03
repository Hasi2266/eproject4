<?php

Class PackageServices extends CI_Model{


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
	
	function getPackages(){

		$this->db->select('*,package.name');
        $this->db->from('package');
		$this->db->join('teams','teams.team_id = package.team','left',false);
        $query = $this->db->get();
		return $query->result();
	}

	function getPackageName($value){
		$this->db->select('*,teams.name,package.name as pname,teams.team_id');
        $this->db->from('package');
		$this->db->join('teams','teams.team_id = package.team','left',false);
		$this->db->where('package.package_id='.$value);
        $query = $this->db->get();
		return $query->result();
	}

	
	
}
?>
