<?php

Class InvoiceService extends CI_Model{

    function save($invoiceModel){

       
        $id = uniqid ('#'.'P'.$invoiceModel->getProject_id().$invoiceModel->getClient_id());
        $x = uniqid($id);

       
        // $id1 = substr($x,0,7);
        $invoice_no = substr($x,0,10);
        // echo $invoice_no;die;

        $data = array(

			'invoice_no' => $invoice_no,
			'project_id' => $invoiceModel->getProject_id(),
            'client_id' => $invoiceModel->getClient_id(),
			'total_amount' => $invoiceModel->getTotal_amount(),
			'balance' => $invoiceModel->getBalance(),
			'status' => 'Pending',
			'invoice_del_ind' => '1',
			'invoice_created_date' => $invoiceModel->getCreated_date(),
			
		);

		
		$this->updateAddInvoice($invoiceModel->getProject_id());

		return $this->db->insert('invoice',$data);
    }

	function updateAddInvoice($id){
		echo $id;die;

		$data = array(

			'add_invoice' => '1',
			
		);
	
		$this->db->where('project_id='.$id);
		return $this->db->update('project',$data);
	}

    function saveInvoiceData($invoicedataModel){
        
        $data = array(

			'invoice_id' => $invoicedataModel->getInvoice_id(),
			'description' => $invoicedataModel->getInvoice_des(),
            'date' => $invoicedataModel->getDate(),
			'weight' => $invoicedataModel->getWeight(),
			'amount' => $invoicedataModel->getAmount(),
			'status' => '1',
			
			
		);

		
		// $this->updateAddProposalStatus($proposalmodel->getProject_id());
		return $this->db->insert('invoice-data',$data);
    }

    function getID($id){

        $this->db->select('*');
		$this->db->from('invoice');
		$this->db->where('project_id='.$id);
		$query = $this->db->get();
		return $query->result();
    }

	function allInvoies($id){

        $this->db->select('*,project.name');
		$this->db->from('invoice');
		$this->db->join('project','project.project_id = invoice.project_id','left',false);
		$this->db->order_by("invoice.invoice_created_date", "desc");
		$this->db->where('invoice.client_id='.$id);
		$query = $this->db->get();
		return $query->result();
    }

	function getInvoice($id){

        $this->db->select('*,project.name,user-login.company_name');
		$this->db->from('invoice');
		$this->db->join('project','project.project_id = invoice.project_id');
		$this->db->join('user-login','user-login.client_id = invoice.client_id');
		$this->db->where('invoice_id='.$id);
		$query = $this->db->get();
		return $query->result();
    }

	function getInvoiceData($id){
		$this->db->select('*');
		$this->db->from('invoice-data');
		$this->db->where('invoice_id='.$id);
		$query = $this->db->get();
		return $query->result();  
	}

	function updateInvoice($invoicedataModel){

		$date_now = date("Y-m-d");

		$data = array(
			'status' => '2',
			
		);
	
		$this->db->where('id='.$invoicedataModel->getId());
		return $this->db->update('invoice-data',$data);

	}

	function update($invoiceModel){

		$date_now = date("Y-m-d");

		$data = array(

			'balance' => $invoiceModel->getBalance(),
			'status' => '2',
			'update_date' => $date_now
			
		);
	
		$this->db->where('invoice_id='.$invoiceModel->getInvoice_id());
		return $this->db->update('invoice',$data);
	}
}


?>