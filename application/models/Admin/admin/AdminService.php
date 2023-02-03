<?php

Class AdminService extends CI_Model{


	function saveAdmin($adminmodel){

		$data =  array(

			'username' => $adminmodel->getUsername(),
			'email' => $adminmodel->getEmail(),
			'password' => $adminmodel->getPassword(),
			'admin_created_date' => $adminmodel->getCreated_date(),
			'admin_del_ind' => '1',

		);

		return $this->db->insert('admin-login',$data);
	}

	function loginUser($email, $password){

		$query = $this->db->get_where('admin-login',['email' => $email,
			'password' => $password,
			'admin_del_ind' => '1'
		
		]);
		return $query->row();

	}
	
}
?>
