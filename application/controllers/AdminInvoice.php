<?php

Class AdminInvoice extends CI_Controller{

	function __construct(){

		parent::__construct();
		if(!$this->session->userdata('ADMIN_ID')){
			redirect('/Admin/');
		}else{
			$this->load->model('Admin/invoice/InvoiceDataModel');
			$this->load->model('Admin/invoice/InvoiceModel');
            $this->load->model('Admin/invoice/InvoiceService');
		}
		
	}

	public function index(){

		$invoiceService =  new InvoiceService();
		$data['items'] = $invoiceService->allInvoies();
        $data["active"] = 7;

        $partial = array('content' => 'admin/pages/invoice/invoices');
		$this->template->load('admin/mainpage',$partial,$data);
	}

	public function submitInvoice(){

       
		$date_now = date("Y-m-d");
		
		$invoiceModel = new InvoiceModel();
        $invoiceService = new InvoiceService();
		

        $invoiceModel->setProject_id($this->input->post("project_id"));
        $invoiceModel->setTotal_amount($this->input->post("total_amount"));
		$invoiceModel->setBalance($this->input->post("total_amount"));
        $invoiceModel->setClient_id($this->input->post("client_id"));
        $invoiceModel->setCreated_date($date_now);
       
       
        $invoiceService->save($invoiceModel);
        
        $items = $invoiceService->getID($this->input->post("project_id"));
        $invoice_id = $items[0]->invoice_id;
        // echo $invoice_id;

        $invoicedataModel = new InvoiceDataModel();

        $description =  $this->input->post('invoice_des');
		$date =  $this->input->post('date_value');
		$weight =  $this->input->post('weight');
		$amount =  $this->input->post('amount');

        $count = count($description);
		// echo $count;die;
		// $status =  $this->input->post('start_date');


		for($i=0;$i<$count;$i++){
			
			
			$col1 = $description[$i];
			$col2 = $date[$i];
			$col3 = $weight[$i];
			$col4 = $amount[$i];
			
			// echo $col1;
			
			if(!empty($col1) || !empty($col2)  || !empty($col3)  || !empty($col4)){
				
				// echo 'hi';

				$invoicedataModel->setInvoice_id($invoice_id);
				$invoicedataModel->setInvoice_des($col1);
				$invoicedataModel->setDate($col2);
				$invoicedataModel->setWeight($col3);
				$invoicedataModel->setAmount($col4);
				
				$invoiceService->saveInvoiceData($invoicedataModel);
			}

		}
		
		
		// die;
		// $projectmodel = new ProjectModel();

		// $projectmodel->setProject_id($id);
		// // echo $id;die;
		// $projectmodel->setUpdate_date($date_now);

		// $projectservice->createProposal($proposalmodel);
		// // $projectservice->updateAddProposalStatus($id);
		
		
		redirect('/AdminProject/');

	}

	function viewInvoice($id){

		$invoiceService = new InvoiceService();

		$item = $invoiceService->getInvoiceID($id);
		
		$data['items'] = $invoiceService->getInvoice($item[0]->invoice_id);
        $data['items1'] = $invoiceService->getInvoiceData($item[0]->invoice_id);
        $data["active"] = 7;

        $partial = array('content' => 'admin/pages/invoice/viewInvoice');
		$this->template->load('admin/mainpage',$partial,$data);

	}

	public function updateInvoice($id){

        $invoiceService =  new InvoiceService();
		$data['items'] = $invoiceService->getInvoice($id);
        $data['items1'] = $invoiceService->getInvoiceData($id);
        $data["active"] = 7;

        $partial = array('content' => 'admin/pages/invoice/viewInvoice');
		$this->template->load('admin/mainpage',$partial,$data);
    }
}


?>
