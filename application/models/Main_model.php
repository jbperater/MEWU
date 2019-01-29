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
	
}