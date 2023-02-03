<?php

Class ServicesService extends CI_Model{

	function saveService($servicemodel){

		$data = array(

			'date' => $servicemodel->getDate(),
			'created_by' => $servicemodel->getCreated_by(),
			'service_name' => $servicemodel->getName(),
			'category_id' => $servicemodel->getCategory_id(),
			'description' => $servicemodel->getDescription(),
			'currency' => $servicemodel->getCurrency(),
			'price' => $servicemodel->getPrice(),
			'img' => $servicemodel->getImg(),
			'service_created_date' => $servicemodel->getCreated_date(),
			'service_del_ind' => '1'

		);
		return $this->db->insert('service',$data);
	}

	function allTeams(){

		$this->db->select('*');
		$this->db->from('teams');
		
		$query = $this->db->get();
		return $query->result();
	}

	function allServices(){
		$this->db->select('*');
		$this->db->from('service');
		$this->db->order_by("service_created_date", "desc");
		$query = $this->db->get();
		return $query->result();

	}

	function getFirstrow(){
		$this->db->limit(1);
		$query = $this->db->get('teams');
		return $query->row();
	}

	function getTeams(){
		$this->db->select('*');
        $this->db->from('teams');
        $query = $this->db->get();
		return $query->result();

	}
	
	function getServices(){

		$this->db->select('*,name');
        $this->db->from('service');
		$this->db->join('teams','teams.team_id = service.category_id','left',false);
		$this->db->order_by("service.service_created_date", "desc");
        $query = $this->db->get();
		return $query->result();
	}

	function editItem($id){
		$this->db->select('*');
		$this->db->from('service');
		$this->db->where('service_id='.$id);
		$query = $this->db->get();
		return $query->result();
	}

	function updateItem($servicemodel){

		$data = array(

			'date' => $servicemodel->getDate(),
			'created_by' => $servicemodel->getCreated_by(),
			'service_name' => $servicemodel->getName(),
			'category_id' => $servicemodel->getCategory_id(),
			'description' => $servicemodel->getDescription(),
			'currency' => $servicemodel->getCurrency(),
			'price' => $servicemodel->getPrice(),
			// 'img' => $servicemodel->getImg(),
			// 'service_created_date' => $servicemodel->getService_id(),
			'service_del_ind' => '1'

		);


		$this->db->where('service_id='.$servicemodel->getService_id());
	   	return $this->db->update('service',$data);

	}

	function deleteItem($id){

		// $data = array(
		// 	'service_del_ind' => 0,
		//    );


	   $this->db->where('service_id=' . $id);
	   return  $this->db->delete('service');
	}
}
?>
