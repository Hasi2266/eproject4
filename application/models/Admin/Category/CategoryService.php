<?php

Class CategoryService extends CI_Model{

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
		$this->db->order_by("category_created_date", "desc");
		$query = $this->db->get();
		return $query->result();
	}
	function editCategory($id){
		$this->db->select('*');
		$this->db->from('categories');
		$this->db->where('category_id='.$id);
		$query = $this->db->get();
		return $query->result();
	}

	function updateItem($categorymodel){

		$data = array(

			'name' => $categorymodel->getName(),
			'parent_category' => $categorymodel->getParent_category(),
			// 'category_created_date' => $categorymodel->getCreated_date()

		);


		$this->db->where('category_id='.$categorymodel->getCategory_id());
	   	return $this->db->update('categories',$data);

	}

	function deleteItem($id){

		// $data = array(
		// 	'admin_del_ind' => 0,
		//    );


	   $this->db->where('category_id=' . $id);
	   return  $this->db->delete('categories');
	}
}
?>
