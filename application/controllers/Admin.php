<?php if(!defined('BASEPATH')) exit('no direct access script allowed');

class Admin extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->database(); 
		$this->load->helper('url');
		$this->load->library('session');
		 $this->load->model('Login_auth_db');
		  $this->load->model('main_model');

	}
		
	public function index() {
		if($this->check_access()){
			$data['content'] = 'blank_page1';
			$this->load->view('base_view', $data);
	    }
	}

	private function check_access(){
		if($this->session->userdata('logged_in')){
			return true;
		}else{
			redirect('login');
		}
	}
	
	public function Admin_pen_req() {
		
			$data['content'] = 'Admin_pen_req';
		    $this->load->view('base_view', $data);
			
	}

	
	public function Admin_pen_rep() {
		
		 $query = $this->Login_auth_db->view_repair();
		
		 $data['repair'] =  $query;
		 $data['content'] ='Admin_pen_rep';
		 $this->load->view('base_view', $data);
		//$data['content'] = 'Admin_pen_rep';
		//$this->load->view('base_view', $data);
	
}

	public function Admin_set_event() {
		if($this->check_access()){
		    $data['content'] = 'Admin_set_event';
		    $this->load->view('base_view', $data);
	    }
	}


	public function Admin_set_repair() {
		
		$data['content'] = 'Admin_set_repair';
		$this->load->view('base_view', $data);
	}

	public function Admin_view_sched() {
		
		$data['content'] = 'Admin_view_sched';
		$this->load->view('base_view', $data);
	}

	public function Admin_view_repair() {
		
		$data['content'] = 'Admin_view_repair';
		$this->load->view('base_view', $data);
	}

	public function Admin_add_equip() {
		
		$data['content'] = 'Admin_add_equip';
		$this->load->view('base_view', $data);
	}

	public function Admin_view_equip() {
		
		$data['content'] = 'Admin_view_equip';
		$this->load->view('base_view', $data);
	}

	public function Admin_add_event_equip() {
		
		$data['content'] = 'Admin_add_event_equip';
		$this->load->view('base_view', $data);
	}

	public function Admin_view_event_equip() {

		$data['content'] = 'Admin_view_event_equip';
		$data["fetch_data"]=$this->main_model->event_equip_fetch_data();
		$this->load->view('base_view', $data);

	}

	public function Admin_add_venue() {
		
		$data['content'] = 'Admin_add_venue';
		$this->load->view('base_view', $data);
	}

	public function Admin_view_venue() {
		
		/*$data['content'] = 'Admin_view_venue';*/
		$data["fetch_data"]=$this->main_model->fetch_data();
		$data["content"]="Admin_view_venue";
		$this->load->view('base_view',$data);
	}


	public function Admin_forecast() {
		$this->load->model('main_model');
		/*$data2 = $this->main_model->get_data_forecast()->result();*/

	    
	    $data2 = $this->main_model->get_data_forecast()->result();
	    $try = $this->main_model->forecast_data();
	    $data['try'] = json_encode($try);
	    $data['datani'] = json_encode($data2);
		$data['content'] = 'Admin_forecast';
		$this->load->view('base_view', $data);
	}


	public function approve_request() {

		$data["content"]="approve_request";
		$this->load->view('base_view',$data);
	}


}