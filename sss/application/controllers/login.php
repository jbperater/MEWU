<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model("accounts_model");
		$this->load->view("login");



	}

	public function start(){

		
		if(isset($_POST['login'])){
			$query = $this->accounts_model->login($_POST['username'],$_POST['password']);
			if($query->row()==TRUE && $query->row()->accesslevel==1){
				$_SESSION['admin_logged'] = TRUE;
				$_SESSION['username'] = $query->row()->username;
				$_SESSION['accesslevel'] = $query->row()->accesslevel;
				$_SESSION['memberid'] = $query->row()->memberid;
				redirect("auth/home",'refresh');
			}
			else if($query->row()==TRUE && $query->row()->accesslevel==0){
				$_SESSION['user_logged'] = TRUE;
				$_SESSION['accesslevel'] = $query->row()->accesslevel;
				$_SESSION['username'] = $query->row()->username;
				$_SESSION['memberid'] = $query->row()->memberid;
				redirect("user/user/".$_SESSION['memberid'],'refresh');
			}
			else{
				$this->session->set_flashdata("success"," Invalid account!Try Again.");
				redirect("login/start");
			}
		}
	}

	public function next(){

		
		if(isset($_POST['submit'])){
			$query = $this->dab->submit($_POST['month'],$_POST['year']);
			if($query->row()==TRUE && $query->row()->accesslevel==1){
				$_SESSION['admin_logged'] = TRUE;
				$_SESSION['month'] = $query->row()->month;
				$_SESSION['year'] = $query->row()->year;
				// $_SESSION['accesslevel'] = $query->row()->accesslevel;
				// $_SESSION['memberid'] = $query->row()->memberid;
				redirect("crud/picker",'refresh');
			}
			
			else{
				$this->session->set_flashdata("success"," Invalid Date & Year!Try Again.");
				redirect("crud/index");
			}
		}
	}
		
		// else{
		// 	$this->load->view("login");
		// }
	// 	 function home()
	// 				{
	// 				    $logged_in = $this->session->userdata('logged_in');
	// 				    if($logged_in == TRUE || empty($logged_in))
	// 				    {
	// 				        #user not logged in
	// 				        $this->session->set_flashdata('error','Session has Expired');
	// 				        redirect('login/start'); # Login view
	// 				    }
	// 				    else
	// 				    {
	// 				        #user Logged in
	// 				        $this->load->view("login",$data);
	// 				    }
	// 				}
	// 				$session = array(
	// 				    'username'  => ('$username'),
	// 				    'logged_in' => TRUE
	// 				);

	// 			$this->session->set_userdata($session);

		
	// }
	function register(){
		if(isset($_POST['register'])){
			$data = array(
				'username'=>$_POST['username'],
				'password'=>$_POST['password'],
				'accesslevel'=>$_POST['accesslevel'],
				);
			$this->dab->create($data);
			$this->session->set_flashdata("success","You can now login!");
			redirect("login/start");
		}
		$this->load->view("register");
	}
}