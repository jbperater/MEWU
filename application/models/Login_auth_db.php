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
		  $this->db->select("date,description,bldg_no,location");
		  $this->db->from('job_req');
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
	
}