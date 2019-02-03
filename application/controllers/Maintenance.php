<?php if(!defined('BASEPATH')) exit('no direct access script allowed');

class Maintenance extends CI_Controller {

	public function __construct() {
		
		parent::__construct();
		$this->load->database(); 
		$this->load->helper('url');
		$this->load->library('session');
		$this->load->model('Login_auth_db');
		$this->load->model('Maintenance_model');		
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
		
		/*load registration view form*/
		$data['content'] = 'Maintenance_add_report';
		$this->load->view('base_view_maintenance', $data);
		$this->load->view('Maintenance_add_report', $data);
		/*Check submit button */
		if($this->input->post('submit'))
 		{
		
		$date_req=$this->input->post('date_req');
		$description=$this->input->post('description');
		$parts_rep=$this->input->post('parts_rep');
		$date_rep=$this->input->post('date_rep');
		$time_rep=$this->input->post('time_rep');
		$date_fin=$this->input->post('date_fin');
		$remark=$this->input->post('remark');
		$performed_by=$this->input->post('performed_by');

		$this->Login_auth_db->add_report($date_req,$description,$parts_rep,$date_rep,$time_rep,$date_fin,$remark,$performed_by);	
		echo "Records Saved Successfully";
		}
	
}

	public function Maintenance_repair_sched() {

		$id= $this->session->userdata('user_data_session')['user_id'];

		$query = $this->Maintenance_model->view_sched($id);
		 $data['data'] =  $query;
		 $data['content'] ='Admin_pen_rep';
		$data['content'] = 'Maintenance_repair_sched';
		echo $this->session->userdata('user_id');
		echo 'nothing';
		/*$this->load->view('base_view_maintenance', $data);*/
	}


	public function Maintenance_all_sched() {
		
		$data['content'] = 'Maintenance_all_sched';
		$this->load->view('base_view_maintenance', $data);
	}


}