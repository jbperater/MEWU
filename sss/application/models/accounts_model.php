<?php
class Accounts_model extends CI_Model{
	
	public function create($data){
		$this->db->insert("login",$data);
	}
	public function read($memberid = null){
		
		if($memberid !=null){
			$this->db->select("*");
			$this->db->from("login");
			$this->db->where("memberid",$memberid);
			$query = $this->db->get();
			return $query->row();
		}
		else{
			$this->db->select("*");
			$this->db->from("login");
			$query = $this->db->get();
			return $query->result();
		}
	}
	public function check_for_duplicate_email($id)
		{
		$this->db->select()->from('member')->where('member_id',$id);
		$data = $this->db->get();
		return $data->first_row('array');
		}
		public function verify_email($id)
		{
		$this->db->select()->from('member')->where('member_id',$id);
		$data = $this->db->get();
		return $data->first_row('array'); //or row();
		}
		
	
	public function add_record($data)
		{
		$this->db->insert('member',$data);
		return 0;
		}

	public function get_member_data_for_update($id)
		{
		$data = $this->db->select()->from('member')->where('member_id',$id);
		$data = $this->db->get();
		return $data->result();
		}

	public function update_member_record($data,$id){
	
		$this->db->where('member_id',$id);
		$this->db->update('member',$data);

	}
	
	public function member_account_total_rows(){
		$this->db->select()->from('member');
		return $this->db->get()->num_rows();
		
	}	

	public function login($username,$password){
		$this->db->select("*");
        $this->db->from("login");
        $this->db->where(array('username'=>$username,'password'=>$password));
        $query = $this->db->get();
        return $query;   
	}
	
	
	
/*	public function search_account($name){
		
		$query = $this->db->query("SELECT * FROM member where CONCAT(lastname,' ',firstname,' ',middlename) LIKE '%$name%'  or (member_id) like '$name' ");
		//$query = $this->db->query("SELECT * FROM member where CONCAT(member_id) like '%$id%' and status=1");
		return $query;
		
	}*/

	public function search_account($lastname){
		
		$query = $this->db->query("SELECT * FROM member where CONCAT(lastname) LIKE '%$lastname%'  or (member_id) like '$lastname' ");
		//$query = $this->db->query("SELECT * FROM member where CONCAT(member_id) like '%$id%' and status=1");
		return $query;
	}


	public function add_contribution_model($data)
		{
		$this->db->insert('sss_contri',$data);
		return 0;
		}

	public function add_contribution_pagibig_model($data)
		{
		$this->db->insert('pag_ibig_contri',$data);
		return 0;
		}

	public function add_contribution_philhealth_model($data)
		{
		$this->db->insert('philhealth_contri',$data);
		return 0;
		}


	public function delete_member_from_admin($id)
		{
		$query=$this->db->query("DELETE FROM remarks  where  member_id='$id' ;");
		$this->db->query("DELETE  from sss_contri where member_id= '$id';");
		$this->db->query("DELETE  from member where member_id= '$id';");
		}

	public function delete_member_from_admins($id)
		{
		$query=$this->db->query("DELETE FROM remarks  where  member_id='$id' ;");
		$this->db->query("DELETE  from pag_ibig_contri where member_id= '$id';");
		$this->db->query("DELETE  from member where member_id= '$id';");
		}
	public function delete_member_from_adminss($id)
		{
		$query=$this->db->query("DELETE FROM remarks  where  member_id='$id' ;");
		$this->db->query("DELETE  from philhealth_contri where member_id= '$id';");
		$this->db->query("DELETE  from member where member_id= '$id';");
		
	}

	public function fetch_member_details($id){
		$this->db->select()->from('member')->where('member_id',$id);
		$data =  $this->db->get();
		return $data->result();
		}


	public function fetch_details_member($id,$month,$year)
		{
		$this->db->select()->from('sss_contri')->where(array('member_id'=>$id,'month'=>$month,'year'=>$year));
		$data =  $this->db->get();
		return $data->result_array();
		}

	public function fetch_details_members($id,$month,$year)
		{
		$this->db->select()->from('pag_ibig_contri')->where(array('member_id'=>$id,'month'=>$month,'year'=>$year));
		$data =  $this->db->get();
		return $data->result_array();
		}

	public function fetch_details_memberss($id,$month,$year)
		{
		$this->db->select()->from('philhealth_contri')->where(array('member_id'=>$id,'month'=>$month,'year'=>$year));
		$data =  $this->db->get();
		return $data->result_array();
		}


	public function fetch_details($id){
		$this->db->select()->from('member')->where('member_id',$id);
		$data =  $this->db->get();
		return $data->result();
		}



	public function edit_contrib($month,$year,$amount,$id)
	{
		//$this->db->query("UPDATE member set location='$location' where member_id='$id';");
		$query=$this->db->query("DELETE FROM sss_contri  where month ='$month' and member_id='$id' and year='$year' ;");
	}
	public function edit_remarks($year,$amount,$id)
	{
		//$this->db->query("UPDATE member set location='$location' where member_id='$id';");
		$query=$this->db->query("DELETE FROM remarks  where  member_id='$id' and year='$year' ;");
	}
	public function insert_remarks($data)
		{
		$this->db->insert('remarks',$data);
		return 0;
		}


	public function insert_contribution($data)
		{
		$this->db->insert('sss_contri',$data);
		return 0;
		}

	public function insert_contributions($data)
		{
		$this->db->insert('pag_ibig_contri',$data);
		return 0;
		}
	
	public function insert_contributionss($data)
		{
		$this->db->insert('philhealth_contri',$data);
		return 0;
		}
	
	
	public function get_contri($id){
		$this->db->select()->from('sss_contri')->where('member_id',$id);
		$data =  $this->db->get();
		return $data->result_array();
		}

	public function get_contris($id){
		$this->db->select()->from('pag_ibig_contri')->where('member_id',$id);
		$data =  $this->db->get();
		return $data->result_array();
		}

	public function get_contriss($id){
		$this->db->select()->from('philhealth_contri')->where('member_id',$id);
		$data =  $this->db->get();
		return $data->result_array();
		}

	public function get_remarks($id){
		$this->db->select()->from('remarks')->where('member_id',$id);
		$data =  $this->db->get();
		return $data->result_array();
		}




	public function fetch_remarks($id,$year){
		$this->db->select()->from('remarks')->where(array('year'=>$year,'member_id'=>$id));
		$data =  $this->db->get();
		return $data->result_array();
		}

}
?>