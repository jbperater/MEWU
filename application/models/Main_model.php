<?php defined('BASEPATH') OR exit('No direct script access allowed');

Class Main_model extends CI_Model {
	
	public function __construct() {
		
		parent::__construct();
		$this->load->database();
		
	}
	
	function insert($data) {
		
		$this->db->insert('venue',$data);
		
				
	}

	function fetch_data(){
		$query = $this->db->get("venue");
		return $query; 
	}

	function event_equip_fetch_data(){
		$query = $this->db->get("event_equip");
		return $query;
	}
	
	function reservetion_insert($data) {

		$this->db->insert('reserve_request',$data);
				
	}

	function get_data_forecast(){
      $this->db->select('year,purchase,sale,profit');
      $result = $this->db->get('account2');
      return $result;
  	}

  function forecast_data(){

      $result=$this->db->query("Select * from reserve_request")->num_rows();

      $arrayni = array();
      $num1=78;
      $num2=50;
      $num3=6;
      array_unshift($arrayni,$num1);
      array_unshift($arrayni,$num2);
      array_unshift($arrayni,$num3);

      $numt=0;
      $num = 0;
      $round = count($arrayni);  
  	
  	for($x=0; $x < 12; ++$x) { 

		for($i=0; $i < 2; ++$i) { 
		   $num = $num + $arrayni[$i] ;
		} 

		$numt=$num/3;
		array_unshift($arrayni,$numt);
     	
     	$numt=0;
      }
      return $arrayni;
  }

  function update_rep_approve($id){
		$this->db->set('remark', 'approve');
		$this->db->where('job_id', $id);
		$this->db->update('job_req');
 	}

 function update_rep_dec($id){
		$this->db->set('remark', 'decline');
		$this->db->where('job_id', $id);
		$this->db->update('job_req');
 	}

 	function update_per_ass($id,$id2){
		$this->db->set('person_attend', $id);
		$this->db->where('job_id', $id2);
		$this->db->update('job_req');	
 	}

 	function insert_equip($data) {
		
		$this->db->insert('equipment',$data);
		
				
	}

	function maintenance_personel(){
		  $this->db->select("person_id,fname,mname,lname");
		  $this->db->from('persons');
		  $this->db->where('type','maintenance');
		  $query = $this->db->get();
		  return $query->result();
 	}

 	function get_department(){
      $this->db->select('dep_id,acroname,name');
      $result = $this->db->get('department');
      return $result->result();
  	}

  	function get_venue(){
      $this->db->select('venue_id,bldg_no,name');
      $result = $this->db->get('venue');
      return $result->result();
  	}
	
	function get_equip_event(){
      $this->db->select('equip_id,name');
      $result = $this->db->get('event_equip');
      return $result->result();
  	}

  	function get_pen_req_rep(){
      $this->db->select('equip_id,name');
      $result = $this->db->get('event_equip');
      return $result->result();
  	}
	
}