<?php if(!defined('BASEPATH')) exit('no direct access script allowed');

class Maintenance extends CI_Controller {

	public function __construct() {
		
		parent::__construct();
		$this->load->database(); 
		$this->load->helper('url');
		$this->load->library('session');
		 $this->load->model('Login_auth_db');		
		// to protect the controller to be accessed only by registered users
	    

	}
		
	public function index() {
		
		$data['content'] = 'blank_page1';
		$this->load->view('base_view_maintenancel', $data);
		
	}
	
	public function Maintenance_view_equip() {

		 $query = $this->Login_auth_db->get_equipment();
		  $data['equipment'] = null;
		  if($query){
		   $data['equipment'] =  $query;
		   $data['content'] ='Maintenance_view_equip';
		   $this->load->view('base_view_maintenance', $data);
  }

		//$data['content'] ='Maintenance_view_equip';
		//$this->load->view('base_view_maintenance', $data);
	}
	
	public function Maintenance_add_report() {
		
		$data['content'] = 'Maintenance_add_report';
		$this->load->view('base_view_maintenance', $data);
	}

	public function Maintenance_repair_sched() {
		
		$data['content'] = 'Maintenance_repair_sched';
		$this->load->view('base_view_maintenance', $data);
	}


	public function Maintenance_all_sched() {
		
		$data['content'] = 'Maintenance_all_sched';
		$this->load->view('base_view_maintenance', $data);
	}


}