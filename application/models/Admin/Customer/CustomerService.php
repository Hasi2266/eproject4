<?php

Class CustomerService extends CI_Model{

	function saveCustomer($customermodel){

		$data = array(

			'name' => $customermodel->getName(),
			'username' => $customermodel->getUsername(),
			'lastActive' => $customermodel->getLastActive(),
			'password' => $customermodel->getPassword(),
			'dateRegister' => $customermodel->getDateRegister(),
			'email' => $customermodel->getEmail(),
			'projects' => $customermodel->getProjects(),
			'totalSpend' => $customermodel->getTotalSpend(),
			'aov' => $customermodel->getAov(),
			'country' => $customermodel->getCountry(),
			'city' => $customermodel->getCity(),
			'region' => $customermodel->getRegion(),
			'postalCode' => $customermodel->getPostalCode(),
			'customer_created_date' => $customermodel->getCreated_date(),
			'customer_del_ind' => '1'
		);

		return $this->db->insert('customer',$data);

	}

	function allCustomers(){
		$this->db->select('*');
		$this->db->from('customer');
		
		$query = $this->db->get();
		return $query->result();
	}

}

?>
