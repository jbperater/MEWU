<?php defined('BASEPATH') OR exit('No direct script access allowed');

Class Login_auth_db extends CI_Model {
	
	public function __construct() {
		
		parent::__construct();
		$this->load->database();
		
	}
	
	function login($username, $password) {
		
		$this->db->select('*');
		$this->db->from('accounts');
		$this->db->where('username', $username);
		$this->db->where('password', $password);
		$query = $this->db->get()->row();
		
		if (!empty($query)) {
			
			return true;
			
		} else {
			
			return false;
			
		}
		
	}
	
	function get_user_data($username) {
		
		//$this->load->library('session');
		$this->db->select('*');
		$this->db->from('accounts');
		$this->db->where('username', $username);	
		$query = $this->db->get();
		
		$user_data = array(
			'user_id'	=> $query->row('user_id'),
			'username'	=> $query->row('username'),
			'type'	=> $query->row('type')
			);
		
		return $user_data;
		
	}


	 function view_repair(){

		  /*$this->db->select("job_id,date,description,bldg_no,location");
		  $this->db->from('job_req');*/

		  $this->db->select("job_id,item_no,date_req,work_description,bldg_no,location,fname,mname,lname");
		  $this->db->from('job_request_view');
		  $this->db->where('remark','pending');

		  $query = $this->db->get();
		  return $query->result();
 	}

    function get_equipment(){
		  $this->db->select("equip_id,equip_name,brand,model,serial_no,office,depart,year_acc");
		  $this->db->from('equipment');
		  $query = $this->db->get();
		  return $query->result();
 	}

 	function add_report($date_req,$description,$parts_rep,$date_rep,$time_rep,$date_fin,$remark,$performed_by)
	{

	$query="insert into maintenance_rec values('','$date_req','$description','$parts_rep','$date_rep','$time_rep','$date_fin','$remark','$performed_by')";
	$this->db->query($query);

}

	function person_attend($person_attend,$approve)
	{

			$query="update job_req SET person_attend= $person_attend where job_id = $approve";
			$this->db->query($query);
		}
	 function view_event(){
		  $this->db->select("date_request,title_event,venue,purpose,date_act,time_act,department");
		  $this->db->from('reserve_request');
		  $query = $this->db->get();
		  return $query->result();
 	}

 	function set_event($no_participants,$date_act,$title_event,$contact_no,$date_request)
	{

	$query="insert into reserve_request values('','$no_participants','','','$date_act','','$title_event','','$contact_no','','','$date_request')";
	$this->db->query($query);
}


	function update_rep_approve($id){
		$this->db->set('remark', 'approve');
		$this->db->where('id', $id);
		$this->db->update('job_req');
 	}

 	function Admin_event_req(){
		  $this->db->select("form_no,no_participants,acroname,name,date_act,purpose,title_event,contact_no,date_request");
		  $this->db->from('reservation_view');
		  $query = $this->db->get();
		  return $query->result();
 	}

 	function add_equipment($equip_name,$brand,$model,$serial_no,$office,$type,$year_acc)
	{

	$query="insert into equipment values('','$equip_name','$brand','$model','$serial_no','$office','','$type','$year_acc')";
	$this->db->query($query);

}
	
}