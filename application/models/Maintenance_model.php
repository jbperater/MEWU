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

	 function view_sched($id){

		  /*$this->db->select("job_id,date,description,bldg_no,location");
		  $this->db->from('job_req');*/

		  $this->db->select("job_id,item_no,date_req,work_description,bldg_no,location,date_time_start,date_time_fin,remark");
		  $this->db->from('job_req');
		  $this->db->where('remark','approve');
		  

		  $query = $this->db->get();
		  return $query->result();
 	}

 	function update_sched($id){

		  /*$this->db->select("job_id,date,description,bldg_no,location");
		  $this->db->from('job_req');*/

		  $this->db->select("job_id,item_no,date_req,work_description,bldg_no,location,date_time_start,date_time_fin,remark");
		  $this->db->from('job_req');
		  $this->db->where('job_id',$id);
		  

		  $query = $this->db->get();
		  return $query->result();
 	}

 	function update_sched_na($id){
 		$start = $this->input->post('date_time_start');
 		$end  = $this->input->post('date_time_fin');
		$this->db->set('date_time_start', $start);
		$this->db->set('date_time_fin', $end);
		$this->db->where('job_id', $id);
		$this->db->update('job_req');
 	}

 	function Maintenance_add_history($date_req,$description,$parts_rep,$date_rep,$time_rep,$date_fin,$remark,$performed_by)
	{

	$query="insert into maintenance_rec values('','$date_req','$description','$parts_rep','$date_rep','$time_rep','$date_fin','$remark','$performed_by')";
	$this->db->query($query);

}
 	function get_equipment(){
 		$kani = $this->db->get('equipment');
 		return $kani;
 	}

 }


	