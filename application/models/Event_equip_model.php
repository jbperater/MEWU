<?php defined('BASEPATH') OR exit('No direct script access allowed');

Class Event_equip_model extends CI_Model {
	
	public function __construct() {
		
		parent::__construct();
		$this->load->database();
		
	}
	
	function insert($data) {
		
		$this->db->insert('event_equip',$data);
		
				
	}

	
}