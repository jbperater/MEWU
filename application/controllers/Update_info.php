<?php if(!defined('BASEPATH')) exit('no direct access script allowed');

class update_info extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->database(); 
		$this->load->helper('url');
		$this->load->library('session');

		$this->load->model('Login_auth_db');

	}
	
	
	// public function Admin_set_event() {

		
	// 	$data['content'] = 'Admin_set_event';
	// 	$this->load->view('base_view', $data);
	// 	/*Check submit button */
	// 	echo "Records Saved Successfully";
	// public function Admin_set_event() {

		
	// 	$data['content'] = 'Admin_set_event';
	// 	$this->load->view('base_view', $data);
	// 	/*Check submit button */
	// 	echo "Records Saved Successfully";
	// 	}
	
	// public function Admin_add_event() {
	
		
	// 	$no_participants=$this->input->post('no_participants');
	// 	$date_act=$this->input->post('date_act');
	// 	$title_event=$this->input->post('title_event');
	// 	$contact_no=$this->input->post('contact_no');
	// 	$date_request=$this->input->post('date_request');

	// 	$this->Login_auth_db->set_event($no_participants,$date_act,$title_event,$contact_no,$date_request);	
		
	
	// }
	// // 	}

	public function insert_infos() {

		
		
		$this->load->view('update_info', $data);
		/*Check submit button */
		echo "Records Saved Successfully";
		}
	
	public function insert_info() {

		
	
		
		$fname=$this->input->post('fname');
		$mname=$this->input->post('mname');
		$lname=$this->input->post('lname');
		$bday=$this->input->post('bday');
		$position=$this->input->post('position');
		$contact_no=$this->input->post('contact_no');
		$email=$this->input->post('email');
		$sign=$this->input->post('sign');

		$this->Login_auth_db->insert_info($fname,$mname,$lname,$bday,$position,$contact_no,$email,$sign);	
		
	
	}

	function update_info()
	{		
		$id=$this->input->get('id');
		$fname=$this->input->post('fname');
			$mname=$this->input->post('mname');
			$lname=$this->input->post('lname');
			$bday=$this->input->post('bday');
			$position=$this->input->post('position');
			$contact_no=$this->input->post('contact_no');
			$email=$this->input->post('email');
			$sign=$this->input->post('sign');
			$this->load->model('Login_auth_db');
			$this->Login_auth_db->update_info($fname,$mname,$lname,$bday,$position,$contact_no,$email,$sign,$id);
		}
}


