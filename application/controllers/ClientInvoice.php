<?php

Class ClientInvoice extends CI_Controller{

	function __construct(){

		parent::__construct();
		if(!$this->session->userdata('CLIENT_ID')){
			redirect('/Client/');
		}else{
			$this->load->model('client/invoice/InvoiceDataModel');
			$this->load->model('client/invoice/InvoiceModel');
            $this->load->model('client/invoice/InvoiceService');
		}
		
	}

	public function index(){

		$invoiceService =  new InvoiceService();
		$data['items'] = $invoiceService->allInvoies($this->session->userdata('CLIENT_ID'));
        $data["active"] = 7;

        $partial = array('content' => 'client/pages/invoice/invoices');
		$this->template->load('client/mainpage',$partial,$data);
	}

	public function submitInvoice(){

       
		$date_now = date("Y-m-d");
		
		$invoiceModel = new InvoiceModel();
        $invoiceService = new InvoiceService();
		

        $invoiceModel->setProject_id($this->input->post("project_id"));
        $invoiceModel->setTotal_amount($this->input->post("total_amount"));
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
		// $status =  $this->input->post('start_date');


		for($i=0;$i<$count;$i++){
			
			
			$col1 = $description[$i];
			$col2 = $date[$i];
			$col3 = $weight[$i];
			$col4 = $amount[$i];
			
			// echo $col1;
			
			if(!empty($col1) && !empty($col2)  && !empty($col3)  && !empty($col4)){

				$invoicedataModel->setInvoice_id($invoice_id);
				$invoicedataModel->setInvoice_des($col1);
				$invoicedataModel->setDate($col2);
				$invoicedataModel->setWeight($col3);
				$invoicedataModel->setAmount($col4);
				
				$invoiceService->saveInvoiceData($invoicedataModel);
			}

		}
		
		
		
		// $projectmodel = new ProjectModel();

		// $projectmodel->setProject_id($id);
		// // echo $id;die;
		// $projectmodel->setUpdate_date($date_now);

		// $projectservice->createProposal($proposalmodel);
		// // $projectservice->updateAddProposalStatus($id);
		
		
		die;

	}


    public function updateInvoice($id){

        $invoiceService =  new InvoiceService();
		$data['items'] = $invoiceService->getInvoice($id);
        $data['items1'] = $invoiceService->getInvoiceData($id);
        $data["active"] = 7;

        $partial = array('content' => 'client/pages/invoice/viewInvoice');
		$this->template->load('client/mainpage',$partial,$data);
    }

	public function confirmInvoice(){

		$x = $this->input->post("balance");
		// echo $x;die;

		$date_now = date("Y-m-d");
		
		$invoiceModel = new InvoiceModel();
        $invoiceService = new InvoiceService();

		$checkes = $this->input->post("chk");
		$invoicedataModel = new InvoiceDataModel();

		if(!empty($checkes)){

			foreach($checkes as $key => $value){

				$invoicedataModel->setId($value);
				$invoiceService->updateInvoice($invoicedataModel);

			}
		}
		
		$invoiceModel->setInvoice_id($this->input->post("invoice_id"));
		$invoiceModel->setBalance($this->input->post("balance"));

		$invoiceService->update($invoiceModel);
	
		redirect('/ClientInvoice/');

	}
}

?>
