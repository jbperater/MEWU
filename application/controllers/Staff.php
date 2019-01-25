<?php if(!defined('BASEPATH')) exit('no direct access script allowed');

class Staff extends CI_Controller {

	public function __construct() {
		
		parent::__construct(); 
		$this->load->helper('url');
		$this->load->library('session');		
		// to protect the controller to be accessed only by registered users
	    

	}
		
	public function index() {
		
		$data['content'] = 'blank_page1';
		$this->load->view('base_view', $data);
		
	}
	
	public function Staff_add_event_req() {
				
		$data['content'] = 'Staff_add_event_req';
		$this->load->view('base_view', $data);
	}
	
	public function Staff_add_repair_req() {
		
		$data['content'] = 'Staff_add_repair_req';
		$this->load->view('base_view', $data);
	}

	public function Staff_app_event_req() {
		
		$data['content'] = 'Staff_app_event_req';
		$this->load->view('base_view', $data);
	}

	public function Staff_app_repair_req() {
		
		$data['content'] = 'Staff_app_repair_req';
		$this->load->view('base_view', $data);
	}

	public function Staff_dec_event_req() {
		
		$data['content'] = 'Staff_dec_event_req';
		$this->load->view('base_view', $data);
	}

	public function Staff_dec_repair_req() {
		
		$data['content'] = 'Staff_dec_repair_req';
		$this->load->view('base_view', $data);
	}

	public function Staff_pen_event_req() {
		
		$data['content'] = 'Staff_pen_event_req';
		$this->load->view('base_view', $data);
	}

	public function Staff_pen_repair_req() {
		
		$data['content'] = 'Staff_pen_repair_req';
		$this->load->view('base_view', $data);
	}

}