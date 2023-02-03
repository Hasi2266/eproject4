<?php

Class TeamService extends CI_Model{

	function saveTeam($teammodel){

		$data = array(

			'name' => $teammodel->getName(),
			'parent_category' => $teammodel->getParent_category(),
			'category_created_date' => $teammodel->getCreated_date()

		);

		return $this->db->insert('teams',$data);

	}

	function allTeams(){
		$this->db->select('*');
		$this->db->from('teams');
		$this->db->order_by("category_created_date", "desc");
		$query = $this->db->get();
		return $query->result();
	}
	
	function editTeam($id){
		$this->db->select('*');
		$this->db->from('teams');
		$this->db->where('team_id='.$id);
		$query = $this->db->get();
		return $query->result();
	}

	function updateTeam($teammodel){

		$data = array(

			'name' => $teammodel->getName(),
			'parent_category' => $teammodel->getParent_category(),
			// 'category_created_date' => $teammodel->getCreated_date()

		);

		$this->db->where('team_id='.$teammodel->getTeam_id());
	   	return $this->db->update('teams',$data);

	}

	function deleteTeam($id){

		// $data = array(
		// 	'admin_del_ind' => 0,
		//    );


	   $this->db->where('team_id=' . $id);
	   return  $this->db->delete('teams');
	}
}
?>
