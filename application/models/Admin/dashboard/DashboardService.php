<?php

Class DashboardService extends CI_Model{

	function saveCategory($categorymodel){

		$data = array(

			'name' => $categorymodel->getName(),
			'parent_category' => $categorymodel->getParent_category(),
			'category_created_date' => $categorymodel->getCreated_date()

		);

		return $this->db->insert('categories',$data);

	}

	function allCategories(){
		$this->db->select('*');
		$this->db->from('categories');
		$query = $this->db->get();
		return $query->result();
	}

	function countProjects(){
		$this->db->select('*');
        $this->db->from('project');
		// $this->db->where('client_id='.$id);
        $query = $this->db->get();
        return $query->num_rows();
	}

	function countProposal(){
		$this->db->select('*');
        $this->db->from('proposal');
		// $this->db->where('client_id='.$id);
        $query = $this->db->get();
        return $query->num_rows();
	}

	function countInvoices(){
		$this->db->select('*');
        $this->db->from('invoice');
		// $this->db->where('client_id='.$id);
        $query = $this->db->get();
        return $query->num_rows();
	}

	function allProjects($id){

		$this->db->select('*,user-login.company_name');
		$this->db->from('project');
		$this->db->join('user-login','user-login.client_id = project.client_id');
		$this->db->where('project.client_id='.$id);
		$this->db->order_by("project.project_created_date", "desc");
		$query = $this->db->get();
		return $query->result();
	}

	function getAdminInfo($id){
			$this->db->select('*');
			$this->db->from('admin-login');
			$this->db->where('admin_id='.$id);
			$query = $this->db->get();
			return $query->result();
		
	
	}

	function allProjects1(){
			$this->db->select('*,user-login.company_name');
			$this->db->from('project');
			$this->db->join('user-login','user-login.client_id = project.client_id');
			// $this->db->join('invoice','invoice.project_id = project.project_id','left',false);
			$this->db->order_by("project.project_created_date", "desc");
			$query = $this->db->get();
			return $query->result();
	}
}
?>
