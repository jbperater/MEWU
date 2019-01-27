<?php if(!defined('BASEPATH')) exit('no direct access script allowed');

class Adviser extends CI_Controller {

	public function __construct() {
		
		parent::__construct(); 
		$this->load->helper('url');
		$this->load->library('session');		
		// to protect the controller to be accessed only by registered users
	    

	}
		
	public function index() {
		
		$data['content'] = 'blank_page1';
		$this->load->view('base_view_adviser', $data);
		
	}
	
	public function Adviser_add_event_req() {
				
		$data['content'] = 'Adviser_add_event_req';
		$this->load->view('base_view_adviser', $data);
	}
	
	public function Adviser_add_repair_req() {
		
		$data['content'] = 'Adviser_add_repair_req';
		$this->load->view('base_view_adviser', $data);
	}

	public function Adviser_app_event_req() {
		
		$data['content'] = 'Adviser_app_event_req';
		$this->load->view('base_view_adviser', $data);
	}

	public function Adviser_app_repair_req() {
		
		$data['content'] = 'Adviser_app_repair_req';
		$this->load->view('base_view_adviser', $data);
	}

	public function Adviser_dec_event_req() {
		
		$data['content'] = 'Adviser_dec_event_req';
		$this->load->view('base_view_adviser', $data);
	}

	public function Adviser_dec_repair_req() {
		
		$data['content'] = 'Adviser_dec_repair_req';
		$this->load->view('base_view_adviser', $data);
	}

	public function Adviser_pen_event_req() {
		
		$data['content'] = 'Adviser_pen_event_req';
		$this->load->view('base_view_adviser', $data);
	}

	public function Adviser_pen_repair_req() {
		
		$data['content'] = 'Adviser_pen_repair_req';
		$this->load->view('base_view_adviser', $data);
	}

	public function Adviser_view_sched() {
		
		$data['content'] = 'Adviser_view_sched';
		$this->load->view('base_view_adviser', $data);
	}

	public function Adviser_student_req() {
		
		$data['content'] = 'Adviser_student_req';
		$this->load->view('base_view_adviser', $data);
	}


}