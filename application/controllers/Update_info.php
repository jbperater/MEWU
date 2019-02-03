<?php if(!defined('BASEPATH')) exit('no direct access script allowed');

class update_info extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->database(); 
		$this->load->helper('url');
		$this->load->library('session');

		// $this->load->model('Login_auth_db');
		$this->load->view('update_info');


	}
	
	
	public function update_info() {
		
		// $query = $this->Login_auth_db->admin_event_req();
		// $data['event_req'] = null;
		  
		// if($query){
		// $data['event_req'] =  $query;
		// $data['content'] ='Admin_pen_req';
		// $this->load->view('base_view', $data);
		// //$data['content'] = 'Admin_pen_rep';
		// //$this->load->view('base_view', $data);

		// $this->load->view('update_info', $data);

	}
}

?>