<?php if(!defined('BASEPATH')) exit('no direct access script allowed');

class Staff extends CI_Controller {

	public function __construct() {
		
		parent::__construct(); 
		$this->load->helper('url');
		$this->load->library('session');		
		// to protect the controller to be accessed only by registered users
	    

	}
		
	public function index() {
		
		//$data['content'] = '?Staff_add_event_req';
		$this->load->view('base_view_staff', $data);
		
	}
	
	public function Staff_add_event_req() {

		
		$data['content'] = 'Staff_add_event_req';
		$this->load->view('base_view_staff', $data);
		/*Check submit button */
		echo "Records Saved Successfully";
		}
	
	public function Staff_set_event_req() {
	
		
		$no_participants=$this->input->post('no_participants');
		$date_act=$this->input->post('date_act');
		$title_event=$this->input->post('title_event');
		$contact_no=$this->input->post('contact_no');
		$date_request=$this->input->post('date_request');

		$this->Login_auth_db->set_event($no_participants,$date_act,$title_event,$contact_no,$date_request);	
		
	
	}

	// public function Staff_add_event_req() {

		
	// 	$data['content'] = 'Staff_add_event_req';
	// 	$this->load->view('base_view_staff', $data);
	// 	/*Check submit button */
	// 	echo "Records Saved Successfully";
	// 	}
	
	// public function Staff_set_event() {
	
		
	// 	$no_participants=$this->input->post('no_participants');
	// 	$date_act=$this->input->post('date_act');
	// 	$title_event=$this->input->post('title_event');
	// 	$contact_no=$this->input->post('contact_no');
	// 	$date_request=$this->input->post('date_request');

	// 	$this->Login_auth_db->set_event($no_participants,$date_act,$title_event,$contact_no,$date_request);	
		
	
	// }

	public function Staff_add_repair_req() {
		
		$data['content'] = 'Staff_add_repair_req';
		$this->load->view('base_view_staff', $data);
	}

	public function Staff_app_event_req() {
		
		$data['content'] = 'Staff_app_event_req';
		$this->load->view('base_view_staff', $data);
	}

	public function Staff_app_repair_req() {
		
		$data['content'] = 'Staff_app_repair_req';
		$this->load->view('base_view_staff', $data);
	}

	public function Staff_dec_event_req() {
		
		$data['content'] = 'Staff_dec_event_req';
		$this->load->view('base_view_staff', $data);
	}

	public function Staff_dec_repair_req() {
		
		$data['content'] = 'Staff_dec_repair_req';
		$this->load->view('base_view_staff', $data);
	}

	public function Staff_pen_event_req() {
		
		$data['content'] = 'Staff_pen_event_req';
		$this->load->view('base_view_staff', $data);
	}

	public function Staff_pen_repair_req() {
		
		$data['content'] = 'Staff_pen_repair_req';
		$this->load->view('base_view_staff', $data);
	}

	public function Staff_view_sched() {
		
		$data['content'] = 'Staff_view_sched';
		$this->load->view('base_view_staff', $data);
	}

}