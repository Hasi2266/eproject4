<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

Class Client extends CI_Controller{

	function __construct(){

		parent::__construct();
		$this->load->model('client/client/ClientModel');
		$this->load->model('client/client/ClientService');
		// $this->load->model('client/client/CategoryService');
		
	}

	public function index(){

		$data["title"] = "Sign-up";

		$this->load->view('client/sign-in');
		// $partial = array('content' => 'client/pages/sign-up');
		// $this->template->load('client/mainpage',$partial,$data);
	}


	public function signUp(){

		$data["title"] = "Sign-up";

		$clientservice = new ClientService();
		$data["countires"]= $clientservice->getCountry();

		$this->load->view('client/sign-up',$data);
		// $partial = array('content' => 'client/pages/sign-in');
		// $this->template->load('client/mainpage',$partial,$data);

	}

	public function userLogin(){

		$clientservice = new ClientService();

		$email = $this->input->post('email');
        $password = md5($this->input->post('password'));
		
        $login = $clientservice->loginUser($email, $password);

        if ($login->client_id >= 0) {


            $this->session->set_userdata('CLIENT_ID', $login->client_id);
       
            $this->session->set_userdata('USER-NAME', $login->username);


            $this->session->userdata('CLIENT_ID');
            $this->session->userdata('NAME');

            // echo 1;
			redirect('/ClientDashboard/');
        } else {

            echo 0;
        }
	}

	public function save(){

		$date_now = date("Y-m-d");
		$clientmodel = new ClientModel();
		$clientservice = new ClientService();

		// $v = $this->input->post("company_name");
		// echo $v;die;

		$clientmodel->setFirstname($this->input->post('firstname'));
		$clientmodel->setLastname($this->input->post('lastname'));
		$clientmodel->setEmail($this->input->post('email'));
		$clientmodel->setCompany_name($this->input->post('company_name'));
		$clientmodel->setIndustry($this->input->post('industry'));
		$clientmodel->setNo_of_emp($this->input->post('no_of_emp'));
		$clientmodel->setCountry($this->input->post('country'));
		$clientmodel->setContact($this->input->post('contact'));
		$clientmodel->setUsername($this->input->post('username'));
		$clientmodel->setPassword(md5($this->input->post('password')));
		// $clientmodel->setConfirm_password($this->input->post('confirm_password'));
		$clientmodel->setCreated_date($date_now);

		$clientservice->saveClient($clientmodel);

		redirect('/Client/');
		

		
	}

	function validEmail(){

		$clientservice = new ClientService();

		$email = $this->input->post('email');

		$item = $clientservice->getEmail($email);
		// $clientservice->getEmail($email);
		// echo $item;die;

		if ($item > 0){
			echo 'taken';
		}
		else{
			echo 'not_taken';
		}

		// echo "<option>-- Choose one --</option>";
		// foreach($item as $item1){

		// 	echo "<option value=".$item1->service_id.">".$item1->service_name."</option>";
		// }
	}

	function validUsername(){

		$clientservice = new ClientService();

		$username = $this->input->post('username');

		$item = $clientservice->getUsername($username);
		
		if ($item > 0){
			echo 'taken';
		}
		else{
			echo 'not_taken';
		}

	}

	function Logout() {

        $this->session->sess_destroy();
        redirect('/Client/');
    }


}


?>
