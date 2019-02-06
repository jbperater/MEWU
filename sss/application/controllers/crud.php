<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Crud extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model("accounts_model");
		if(!isset($_SESSION['admin_logged'])){
			$this->session->set_flashdata("success","Please login first");
			redirect("login/start");
		}
	}
	public function index(){

		
		$data['info'] = $this->accounts_model->read();
		if(isset($_POST['addrecord'])){
			$data = array(
				"username" => $_POST['username'],
				"password" => $_POST['password'],
				"accesslevel" => $_POST['accesslevel'],

			);
			$this->accounts_model->create($data);
			redirect("crud/index",'refresh');
		}
		else{
			$this->load->view("auth/home",$data);
		}
		
	}
	public function delete($memberid){
		
		$this->dab->delete($memberid);
		redirect("crud/index",'refresh');
	}
	public function edit($memberid){
		
		
		if(isset($_POST['updaterec'])){
			$this->dab->update($memberid);
			redirect("crud/index",'refresh');
		}
		else{
			$data['editinfo'] = $this->dab->read($memberid);
			$this->load->view("edit",$data);
		}
	}

	// public function logout(){
	// 	session_destroy();
	// 	redirect("login/start");
	// }

	public function logout()
{
    $this->load->driver('cache');
    $this->session->sess_destroy();
    $this->cache->clean();
    ob_clean();
    redirect('login/start'); # Login form or some other page         
}
	
}
