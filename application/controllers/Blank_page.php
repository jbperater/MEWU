<?php if(!defined('BASEPATH')) exit('no direct access script allowed');

class Blank_Page extends CI_Controller {

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
	
	public function Admin_pen_req() {
				
		$data['content'] = 'Admin_pen_req';
		$this->load->view('base_view', $data);
	}
	
	public function Admin_pen_rep() {
		
		$data['content'] = 'Admin_pen_rep';
		$this->load->view('base_view', $data);
	}

	public function Admin_set_event() {
		
		$data['content'] = 'Admin_set_event';
		$this->load->view('base_view', $data);
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
		$this->load->view('base_view', $data);
	}

	public function Admin_add_venue() {
		
		$data['content'] = 'Admin_add_venue';
		$this->load->view('base_view', $data);
	}

	public function Admin_view_venue() {
		
		$data['content'] = 'Admin_view_venue';
		$this->load->view('base_view', $data);
	}


}