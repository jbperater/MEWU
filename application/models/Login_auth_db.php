<?php defined('BASEPATH') OR exit('No direct script access allowed');

Class Login_auth_db extends CI_Model {
	
	public function __construct() {
		
		parent::__construct();
		$this->load->database();
		
	}
	
	function login($username, $password) {
		
		$this->db->select('*');
		$this->db->from('persons');
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
		$this->db->from('persons');
		$this->db->where('username', $username);	
		$query = $this->db->get();
		
		$user_data = array(
			'person_id'	=> $query->row('person_id'),
			'username'	=> $query->row('username'),
			'type'	=> $query->row('type'),
			'sign'	=> $query->row('sign')
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
		  $this->db->select("equip_id,equip_name,brand,model,serial_no,office,type,year_acc");
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

	$query="insert into reserve_request values('','$no_participants','','','$date_act','','$title_event','','$contact_no','1','','$date_request')";
	$this->db->query($query);
	echo'who';
}		

	function set_event_ni($data,$data2)
	{

	$this->db->insert('reserve_request',$data);
	
	

}
	
	function last_id(){
		$last=$this->db->insert_id('reserve_request',array('form_no' => 'value'));
		return $last;
	}

	function set_event_venue($last,$data)
	{
	// $last=$this->db->insert_id('reserve_request',array('form_no' => 'value'));
	
	echo $last;
	foreach ($data as $data) {
	$query="insert into reserve_ven values('$last','$data')";
	$this->db->query($query);
	
	}
	
	
}	
	
	function set_equip_event($last,$data,$table,$chair)
	{
	// $last=$this->db->insert_id('reserve_request',array('form_no' => 'value'));

	echo $last;

	foreach ($data as $data) {
	$query="insert into reserve_equip_need values('$last','$data',$table,$chair)";
	$this->db->query($query);
	

	}
	
	
}


	function update_rep_approve($id){
		$this->db->set('remark', 'approve');
		$this->db->where('id', $id);
		$this->db->update('job_req');
 	}

 	function Admin_event_req(){

		  $this->db->select("form_no,no_participants,acroname,name,date_act,purpose,title_event,contact_no,date_request");

		  $this->db->select("form_no,no_participants,acroname,name,date_act,purpose,title_event,fname,mname,lname,contact_no,date_request");

		  $this->db->from('reservation_view');
		  $query = $this->db->get();
		  return $query->result();
 	}

 	function add_equipment($equip_name,$brand,$model,$serial_no,$office,$type,$year_acc)
	{

	$query="insert into equipment values('','$equip_name','$brand','$model','$serial_no','$office','','$type','$year_acc')";
	$this->db->query($query);

}

	function set_account($username,$password,$type,$status,$date_created)
	{

	$query="insert into persons values('','','','','','','','','$username','$password','$type','$status','','$date_created')";
	$this->db->query($query);

}

	function insert_info($fname,$mname,$lname,$bday,$position,$contact_no,$email,$sign)
	{
			$query="insert into persons values('','$fname','$mname','$lname','$bday','$position','$contact_no','$email','','','','','$sign','')";
	$this->db->query($query);
		}

	
}