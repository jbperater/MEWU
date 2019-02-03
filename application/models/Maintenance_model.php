<?php defined('BASEPATH') OR exit('No direct script access allowed');

Class Maintenance_model extends CI_Model {
	
	public function __construct() {
		
		parent::__construct();
		$this->load->database();
		
	}
	
	function select() {
		
		$this->db->select('*');
		$this->db->from('modules');	
		$query = $this->db->get();
        return $result = $query->result();
				
	}

	 function view_sched(){

		  /*$this->db->select("job_id,date,description,bldg_no,location");
		  $this->db->from('job_req');*/

		  $this->db->select("job_id,item_no,date_req,work_description,bldg_no,location,fname,mname,lname");
		  $this->db->from('job_req');
		  $this->db->where('remark','approve');

		  $query = $this->db->get();
		  return $query->result();
 	}
}


	