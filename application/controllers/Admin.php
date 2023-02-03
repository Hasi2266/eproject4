<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

Class Admin extends CI_Controller{

	function __construct(){

		parent::__construct();
		$this->load->model('Admin/admin/AdminModel');
		$this->load->model('Admin/admin/AdminService');
		// $this->load->model('client/client/CategoryService');
		
	}

	public function index(){

		$data["title"] = "Sign-up";

		$this->load->view('admin/sign-in');
		// $partial = array('content' => 'client/pages/sign-up');
		// $this->template->load('client/mainpage',$partial,$data);
	}


	public function signUp(){

		$data["title"] = "Sign-up";

		$this->load->view('admin/sign-up');
		// $partial = array('content' => 'client/pages/sign-in');
		// $this->template->load('client/mainpage',$partial,$data);

	}

	public function userLogin(){

		$adminservice = new AdminService();

		$email = $this->input->post('email');
        $password = md5($this->input->post('password'));
		
        $login = $adminservice->loginUser($email, $password);

        if ($login->admin_id >= 0) {

            $this->session->set_userdata('ADMIN_ID', $login->admin_id);
       
            $this->session->set_userdata('USER-NAME', $login->username);

            $this->session->userdata('ADMIN_ID');
            $this->session->userdata('NAME');

            // echo 1;
			redirect('/AdminDashboard/');
        } else {

            echo 0;
        }
	}

	public function save(){

		$date_now = date("Y-m-d");
		$adminmodel = new AdminModel();
		$adminservice = new AdminService();

		$adminmodel->setUsername($this->input->post('username'));
		$adminmodel->setEmail($this->input->post('email'));
		$adminmodel->setPassword(md5($this->input->post('password')));
		$adminmodel->setCreated_date($date_now);

		$adminservice->saveAdmin($adminmodel);

		redirect('/Admin/');
		

		
	}

	function Logout() {

        $this->session->sess_destroy();
        redirect('/Admin/');
    }

}


?>
