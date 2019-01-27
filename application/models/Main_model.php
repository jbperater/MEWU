<?php defined('BASEPATH') OR exit('No direct script access allowed');

Class Main_model extends CI_Model {
	
	public function __construct() {
		
		parent::__construct();
		$this->load->database();
		
	}
	
	function insert($data) {
		
		$this->db->insert('venue',$data);
		
				
	}
	
}