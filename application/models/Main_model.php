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
	
}