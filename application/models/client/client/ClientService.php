<?php

Class ClientService extends CI_Model{


	function saveClient($clientmodel){

		$data =  array(

			'firstname' => $clientmodel->getFirstname(),
			'lastname' => $clientmodel->getLastname(),
			'email' => $clientmodel->getEmail(),
			'company_name' => $clientmodel->getCompany_name(),
			'industry' => $clientmodel->getIndustry(),
			'no_of_emp' => $clientmodel->getNo_of_emp(),
			'country' => $clientmodel->getCountry(),
			'contact' => $clientmodel->getContact(),
			'username' => $clientmodel->getUsername(),
			'password' => $clientmodel->getPassword(),
			'client_created_date' => $clientmodel->getCreated_date(),
			'client_del_ind' => '1',

		);

		return $this->db->insert('user-login',$data);
	}

	function loginUser($email, $password){

		$query = $this->db->get_where('user-login',['email' => $email,
			'password' => $password,
			'client_del_ind' => '1'
		
		]);
		return $query->row();

	}

	function getEmail($email){

		$this->db->select('client_id');
        $this->db->from('user-login');
		$this->db->where("email like '".$email."'");
        $query = $this->db->get();
        return $query->num_rows();

		
	}

	function getUsername($username){
		$this->db->select('client_id');
        $this->db->from('user-login');
		$this->db->where("username like '".$username."'");
        $query = $this->db->get();
        return $query->num_rows();
	}

	function getRecode($id){
		$this->db->select('*');
        $this->db->from('user-login');
		$this->db->where("client_id=".$id);
        $query = $this->db->get();
		return $query->result();
	}

	function getCountry(){
		$this->db->select('*');
        $this->db->from('countries');
        $query = $this->db->get();
		return $query->result();
	}
	
	function updateProfile($clientmodel){

		$data =  array(

			'firstname' => $clientmodel->getFirstname(),
			'lastname' => $clientmodel->getLastname(),
			'email' => $clientmodel->getEmail(),
			'role' => $clientmodel->getRole(),
			
		);

		$this->db->where('client_id='.$clientmodel->getClient_id());
	   	return $this->db->update('user-login',$data);
	}


	function updateCompany($clientmodel){

		$data =  array(

			'company_name' => $clientmodel->getCompany_name(),
			'industry' => $clientmodel->getIndustry(),
			'no_of_emp' => $clientmodel->getNo_of_emp(),
			'country' => $clientmodel->getCountry(),
			'contact' => $clientmodel->getContact(),
			
		);

		$this->db->where('client_id='.$clientmodel->getClient_id());
	   	return $this->db->update('user-login',$data);
	}

	function delAccount($id){

		$data =  array(

			'client_del_ind' => '0',
			
		);

		$this->db->where('client_id='.$id);
	   	return $this->db->update('user-login',$data);
	}

	function updatePassword($clientmodel){

		$data =  array(

			'password' => $clientmodel->getPassword(),
			
		);

		$this->db->where('client_id='.$clientmodel->getClient_id());
	   	return $this->db->update('user-login',$data);

	}

	function checkPassword($password,$id){

		$this->db->select('client_id');
        $this->db->from('user-login');
		$this->db->where('client_id='.$id);
		$this->db->where("password like '".$password."'");
        $query = $this->db->get();
        return $query->num_rows();

		// $query = $this->db->get_where('user-login',['client_id' => $id,
		// 	'password' => $password,
		// 	'client_del_ind' => '1'
		
		// ]);
		return $query->row();
	}

	function updateImage($clientmodel){

		$data =  array(

			'image' => $clientmodel->getImage(),
				
		);

		$this->db->where('client_id='.$clientmodel->getClient_id());
	   	return $this->db->update('user-login',$data);
	}
}
?>
