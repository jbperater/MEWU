<?php if(!defined('BASEPATH')) exit('no direct access script allowed');

class Student extends CI_Controller {

	public function __construct() {
		
		parent::__construct(); 
		$this->load->helper('url');
		$this->load->library('session');		
		// to protect the controller to be accessed only by registered users
	    

	}
		
	public function index() {
		
		$data['content'] = 'blank_page1';
		$this->load->view('base_view_student', $data);
		
	}
	
	public function Student_add_req() {
				
		$data['content'] = 'Student_add_req';
		$this->load->view('base_view_student', $data);
	}
	
	public function Student_all_req() {
		
		$data['content'] = 'Student_all_req';
		$this->load->view('base_view_student', $data);
	}

	public function Student_app_req() {
		
		$data['content'] = 'Student_app_req';
		$this->load->view('base_view_student', $data);
	}


	public function Student_dec_req() {
		
		$data['content'] = 'Student_dec_req';
		$this->load->view('base_view_student', $data);
	}

	public function Student_pen_req() {
		
		$data['content'] = 'Student_pen_req';
		$this->load->view('base_view_student', $data);
	}

	public function Student_view_sched() {
		
		$data['content'] = 'Student_view_sched';
		$this->load->view('base_view_student', $data);
	}


}