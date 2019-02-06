<?php date_default_timezone_set('Asia/Manila'); 
    class auth extends CI_Controller{
		
/*-----------------------------------------------------------------------------------------------------------------------
|													MEMBER AREA 														|
------------------------------------------------------------------------------------------------------------------------*/
	
		 public function home(){
			
			$this->load->view('home');
			
        }
		

		

		// public function __construct(){
		// 		parent::__construct();
		// 		$this->load->model("accounts_model");
		// 		if(!isset($_SESSION['admin_logged'])){
		// 			$this->session->set_flashdata("success","Please login first");
		// 			redirect("login/start");
		// 		}
		// }
		// public function index(){
			
		// 	$data['info'] = $this->accounts_->read();
		// 	if(isset($_POST['addrecord'])){
		// 		$data = array(
		// 			"username" => $_POST['username'],
		// 			"password" => $_POST['password'],
		// 			"accesslevel" => $_POST['accesslevel'],

		// 		);
		// 		$this->dab->create($data);
		// 		redirect("crud/index",'refresh');
		// 	}
		// 	else{
		// 		$this->load->view("home",$data);
		// 	}
			
		// }


		public function add_member(){
			
			$this->load->model('accounts_model');
			
			$this->load->view('add_member');
		}
		

		
		public function save_member_from_admin(){
			
				$id=$this->input->post('member_id');
				$this->load->model('accounts_model');
				$data =array(
						'member_id'=>$this->input->post('member_id'),
						'lastname'=>$this->input->post('lastname'),
						'firstname'=>$this->input->post('firstname'),
						'middlename'=>$this->input->post('middlename'),
						'sss_num'=>$this->input->post('sss_num'),
						'hdmf'=>$this->input->post('hdmf'),
						'philhealth_num'=>$this->input->post('philhealth_num')
						);
				$check = $this->accounts_model->verify_email($id);
				if($check){
					$_SESSION['errMsg'] = "Member ID is already existing!"; 
					header("Location: add_member");}
				else{
					$this->accounts_model->add_record($data);
					
					redirect("auth/success_add_member");
				}
			
		}
		
		
		public function success_add_member(){ 
		
			$this->load->view('success_add_member');
		}

		
		public function update_member_from_admin(){
			$id = $this->input->post('member_id');
			$new_id=$this->input->post('new_member_id');
			$this->load->model('accounts_model');
			if($id==$new_id){
				$data =array(
					'member_id'=>$this->input->post('member_id'),
						'lastname'=>$this->input->post('lastname'),
						'firstname'=>$this->input->post('firstname'),
						'middlename'=>$this->input->post('middlename'),
						'sss_num'=>$this->input->post('sss_num'),
						'hdmf'=>$this->input->post('hdmf'),
						'philhealth_num'=>$this->input->post('philhealth_num')
						);		
				$this->accounts_model->update_member_record($data,$id);
			}
			else{
				$record_contri=$this->accounts_model->get_contri($id);
				$record_remarks=$this->accounts_model->get_remarks($id);
				$data =array(
					'member_id'=>$this->input->post('new_member_id'),
					'lastname'=>$this->input->post('lastname'),
						'firstname'=>$this->input->post('firstname'),
						'middlename'=>$this->input->post('middlename'),
						'sss_num'=>$this->input->post('sss_num'),
						'hdmf'=>$this->input->post('hdmf'),
						'philhealth_num'=>$this->input->post('philhealth_num')
					);	
				$check_email = $this->accounts_model->check_for_duplicate_email($new_id);
				if($check_email){
					$_SESSION['errMsg'] = "The Member ID you specified is already in use. Please try another."; 
					header("Location: update_member?id=$id");}
							
				else{
					$this->accounts_model->add_record($data);
					if($record_contri){
						foreach($record_contri as $records_contri){
						$datas=array('month'=>$records_contri['month'],

									'year'=>$records_contri['year'],
									'amount'=>$records_contri['amount'],
									'member_id'=>$new_id

									);
						$this->accounts_model->insert_contribution($datas);
						}
					}

					if($record_remarks){
						foreach($record_remarks as $recordss){
						$datas=array(
									'member_id'=>$new_id,
									
									'remarks'=>$recordss['remarks'],
									'year'=>$recordss['year']

									);
						$this->accounts_model->insert_remarks($datas);
						}
					}
				
					
					$this->accounts_model->delete_member_from_admin($id);

				}



			}
			

			
			$datas['record']=$new_id;
			//redirect("auth/success_member_update"); 
			$this->load->view('success_member_update',$datas);
					
			
		}
		
		
		
		
	
		
		public function update_member(){
			$id = $_GET['id'];
			$this->load->model('accounts_model');
		 
			$data=array();
			if($query = $this->accounts_model->get_member_data_for_update($id))
			{
				$users['records'] = $query;
			}

			$this->load->view('update_member',$users);
	
		}
		public function add_contribution(){
			$id = $_GET['id'];
			$this->load->model('accounts_model');
	
			$data=array();
			if($query = $this->accounts_model->get_member_data_for_update($id))
			{
				$users['records'] = $query;
			}
			$this->load->view('add_contribution',$users);
	
		}
		public function update_contribution_from_admin(){
			$datas['record']=$this->input->post('member_id');
			$this->load->model('accounts_model');
		
			$data=array(

						
						'member_id'=>$this->input->post('member_id'),
						'amount'=>$this->input->post('amount'),
						'month'=>$this->input->post('month'),
						'year'=>$this->input->post('year'));
			$this->accounts_model->add_contribution_model($data);
			$this->load->view('success_reset_member',$datas);
	
		}
		
			public function add_contribution_pagibig(){
			$id = $_GET['id'];
			$this->load->model('accounts_model');
	
			$data=array();
			if($query = $this->accounts_model->get_member_data_for_update($id))
			{
				$users['records'] = $query;
			}
			$this->load->view('add_contribution_pagibig',$users);
	
		}
		public function update_contribution_from_admins(){
			$datas['record']=$this->input->post('member_id');
			$this->load->model('accounts_model');
		
			$data=array(

						
						'member_id'=>$this->input->post('member_id'),
						'amount'=>$this->input->post('amount'),
						'month'=>$this->input->post('month'),
						'year'=>$this->input->post('year'));
			$this->accounts_model->add_contribution_pagibig_model($data);
			$this->load->view('success_reset_member',$datas);
	
		}

		public function add_contribution_philhealth(){
			$id = $_GET['id'];
			$this->load->model('accounts_model');
	
			$data=array();
			if($query = $this->accounts_model->get_member_data_for_update($id))
			{
				$users['records'] = $query;
			}
			$this->load->view('add_contribution_philhealth',$users);
	
		}
		public function update_contribution_from_adminss(){
			$datas['record']=$this->input->post('member_id');
			$this->load->model('accounts_model');
		
			$data=array(

						
						'member_id'=>$this->input->post('member_id'),
						'amount'=>$this->input->post('amount'),
						'month'=>$this->input->post('month'),
						'year'=>$this->input->post('year'));
			$this->accounts_model->add_contribution_philhealth_model($data);
			$this->load->view('success_reset_member',$datas);
	
		}
		
		public function search(){
			
			$this->load->model('accounts_model');
			



			$this->load->library('pagination');
			$config['base_url'] = "http://localhost/sss/auth/search";
			$config['per_page'] = 10;
			$config['num_links'] = 3;
			$config['full_tag_open'] = '<ul class="pagination">';
			$config['full_tag_close'] = '</ul>';
			$config['prev_link'] = '&laquo;';
			$config['prev_tag_open'] = '<li>';
			$config['prev_tag_close'] = '</li>';
			$config['next_tag_open'] = '<li >';
			$config['next_tag_close'] = '</li>';
			$config['cur_tag_open'] = '<li class="active"><a href="#">';
			$config['cur_tag_close'] = '</a></li>';
			$config['num_tag_open'] = '<li>';
			$config['num_tag_close'] = '</li>';
			$config['next_link'] = '&raquo;';
			$config['total_rows'] = $this->accounts_model->member_account_total_rows();
			$this->pagination->initialize($config);
			$data["fetch_data"] = $this->db->get('member', $config['per_page'], $this->uri->segment(3), $this->db->order_by("lastname", "asc"));
			//$data["fetch_data"] = $this->accounts_model->fetch_data();
			 
			$this->load->view('search',$data);
		}
		
		
		
		
		public function delete_member_record(){     
		
			$this->load->view('delete_member_record');
			
		}
		
		
		
		public function delete_member_from_admin(){
			if(isset($_POST['yes'])){
				$id=$this->input->post('id');
				$this->load->model('accounts_model');
				
				$this->accounts_model->delete_member_from_admin($id);
				redirect("auth/success_delete_member");
			}
			else if(isset($_POST['no'])){
				$id=$this->input->post('id');	
				$this->load->model('accounts_model');
				$data["search_account"] = $this->accounts_model->search_account($id);
			
				$this->load->view('search_account',$data); 
				
			}
			
		}
		

		public function success_reset_member(){
	
			$this->load->view('success_reset_member');
		}
		
		
		
		public function success_delete_member(){
		
			$this->load->view('success_delete_member');
		}
		
		public function search_account(){
	
			$this->load->model('accounts_model');
		
	
			
				$lastname = $this->input->post('search');

				$data["search_account"] = $this->accounts_model->search_account($lastname);
				
				$this->load->view('search_account',$data);
			
			
		}
		public function for_search_account(){
			
			$this->load->model('accounts_model');
		
			$id=$_GET['id'];
				$data["search_account"] = $this->accounts_model->search_account($id);
			
				$this->load->view('search_account',$data);
			
			
			
		}

		public function update(){

			$this->load->model('accounts_model');
		

			
			if($this->input->post('edit')=="CONTRIBUTION"){
				$data['id']=$this->input->post('member_id');
			$data['amount']=$this->input->post('amount');
			$data['month']=$this->input->post('month');
			$data['year']=$this->input->post('year');
			$data['edit']=$this->input->post('edit');
			}
			else{
				$data['id']=$this->input->post('member_id');
			$data['amount']=$this->input->post('amount');
		
			$data['year']=$this->input->post('year');
			$data['edit']=$this->input->post('edit');
			}
			
			$this->load->view('update',$data);  
		}
		public function update_claims_and_contri(){
			$id = $this->input->post('member_id');
			$this->load->model('accounts_model');
	
			$year=$this->input->post('year');
			$previous=$this->input->post('previous');
			$amount=$this->input->post('amount');
			$edit=$this->input->post('edit');
		
			if($edit=="CONTRIBUTION"){
				$this->accounts_model->edit_contrib($this->input->post('month'),$year,$previous,$id);
				$data=array(
					
					'month'=>$this->input->post('month'),
					'year'=>$this->input->post('year'),
					
					'amount'=>$this->input->post('amount'),
					'member_id'=>$this->input->post('member_id')
					);
				$this->accounts_model->insert_contribution($data);
			}
			else if($edit=="REMARKS"){
				$this->accounts_model->edit_remarks($year,$previous,$id);
				$data=array(
					
					'member_id'=>$this->input->post('member_id'),
					'remarks'=>$this->input->post('amount'),
					'year'=>$this->input->post('year')
					
					
					
					);
				$this->accounts_model->insert_remarks($data);
			}
			$datas['record']=$id;
			//redirect("auth/success_member_update"); 
			$this->load->view('success_update',$datas);
					
			
		}

		public function member_details(){
			$id = $_GET['id'];
			$this->load->model('accounts_model');

			$data['record']=$this->accounts_model->fetch_details($id);
			$this->load->view('member_details', $data);
		}


		public function details_member(){
			$id = $_GET['id'];
			$this->load->model('accounts_model');
		


			$month=array('JANUARY','FEBRUARY','MARCH','APRIL','MAY','JUNE','JULY','AUGUST','SEPTEMBER','OCTOBER','NOVEMBER','DECEMBER');  
			//2017
			$now_date=date('Y');

						$previous=$now_date-2;
						$contribution_2016=array();
						

						
						foreach($month as $mon)
						{
							if($record=$this->accounts_model->fetch_details_member($id,$mon,$previous))
							{
								$contri_2016=0;
								foreach($record as $records)
								{
									$contri_2016+=$records['amount'];
								}
								$contribution_2016[]+=$contri_2016;
								
								
							}
							else
							{
								$contribution_2016[]+=0;
								
							}


						}

						$start=$now_date;
						$previous=$now_date-2;
						$contributions_2016=array();
						

						
						foreach($month as $mon)
						{
							if($record=$this->accounts_model->fetch_details_members($id,$mon,$previous))
							{
								$contri_2016=0;
								foreach($record as $records)
								{
									$contri_2016+=$records['amount'];
								}
								$contributions_2016[]+=$contri_2016;
								
								
							}
							else
							{
								$contributions_2016[]+=0;
								
							}


						}

						$start=$now_date;
						$previous=$now_date-2;
						$contributionss_2016=array();
						

						
						foreach($month as $mon)
						{
							if($record=$this->accounts_model->fetch_details_memberss($id,$mon,$previous))
							{
								$contri_2016=0;
								foreach($record as $records)
								{
									$contri_2016+=$records['amount'];
								}
								$contributionss_2016[]+=$contri_2016;
								
								
							}
							else
							{
								$contributionss_2016[]+=0;
								
							}


						}

						$remarks_now=array();
						$now=$this->accounts_model->fetch_remarks($id,$start);
						
						if($now){
							foreach($now as $nw){
								$remarks_now[]=$nw['remarks'];
							}
						}
						else{
							$data=array(
					
							'member_id'=>$id,
							'remarks'=>"_",
							'year'=>$start
							
							
							
							);
							$this->accounts_model->insert_remarks($data);
							$now1=$this->accounts_model->fetch_remarks($id,$start);
							
							if($now1){
								foreach($now1 as $nw){
									$remarks_now[]=$nw['remarks'];
								}
							}
							
						}
		
						$start=$now_date;
						$previous=$now_date-1;
						$contribution_2017=array();
						

						
						foreach($month as $mon)
						{
							if($record=$this->accounts_model->fetch_details_member($id,$mon,$start))
							{
								$contri_2017=0;
								foreach($record as $records)
								{
									$contri_2017+=$records['amount'];
								}
								$contribution_2017[]+=$contri_2017;
								
								
							}
							else
							{
								$contribution_2017[]+=0;
								
							}


						}

						$start=$now_date;
						$previous=$now_date-1;
						$contributions_2017=array();
						

						
						foreach($month as $mon)
						{
							if($record=$this->accounts_model->fetch_details_members($id,$mon,$start))
							{
								$contri_2017=0;
								foreach($record as $records)
								{
									$contri_2017+=$records['amount'];
								}
								$contributions_2017[]+=$contri_2017;
								
								
							}
							else
							{
								$contributions_2017[]+=0;
								
							}


						}

						$start=$now_date;
						$previous=$now_date-1;
						$contributionss_2017=array();
						

						
						foreach($month as $mon)
						{
							if($record=$this->accounts_model->fetch_details_memberss($id,$mon,$start))
							{
								$contri_2017=0;
								foreach($record as $records)
								{
									$contri_2017+=$records['amount'];
								}
								$contributionss_2017[]+=$contri_2017;
								
								
							}
							else
							{
								$contributionss_2017[]+=0;
								
							}


						}

						$remarks_now=array();
						$now=$this->accounts_model->fetch_remarks($id,$start);
						
						if($now){
							foreach($now as $nw){
								$remarks_now[]=$nw['remarks'];
							}
						}
						else{
							$data=array(
					
							'member_id'=>$id,
							'remarks'=>"_",
							'year'=>$start
							
							
							
							);
							$this->accounts_model->insert_remarks($data);
							$now1=$this->accounts_model->fetch_remarks($id,$start);
							
							if($now1){
								foreach($now1 as $nw){
									$remarks_now[]=$nw['remarks'];
								}
							}
							
						}



						$start=$now_date;
						$previous=$now_date-1;
						$contribution=array();
						
						foreach($month as $mon)
						{
							if($record=$this->accounts_model->fetch_details_member($id,$mon,$previous))
							{
								$contri=0;
								foreach($record as $records)
								{
									$contri+=$records['amount'];
								}
								$contribution[]+=$contri;
								
								
							}
							else
							{
								$contribution[]+=0;
								
							}


							
						}
						$start=$now_date;
						$previous=$now_date-1;
						$contributions=array();
						
						foreach($month as $mon)
						{
							if($record=$this->accounts_model->fetch_details_members($id,$mon,$previous))
							{
								$contri=0;
								foreach($record as $records)
								{
									$contri+=$records['amount'];
								}
								$contributions[]+=$contri;
								
								
							}
							else
							{
								$contributions[]+=0;
								
							}


							
						}
						$start=$now_date;
						$previous=$now_date-1;
						$contributionss=array();
						
						foreach($month as $mon)
						{
							if($record=$this->accounts_model->fetch_details_memberss($id,$mon,$previous))
							{
								$contri=0;
								foreach($record as $records)
								{
									$contri+=$records['amount'];
								}
								$contributionss[]+=$contri;
								
								
							}
							else
							{
								$contributionss[]+=0;
								
							}


							
						}
						
						$prev=$this->accounts_model->fetch_remarks($id,$previous);
						$remarks_prev=array();
						if($prev){
							foreach($prev as $nw2){
								$remarks_prev[]=$nw2['remarks'];
							}
						}
						else{
							$data=array(
					
							'member_id'=>$id,
							'remarks'=>"_",
							'year'=>$previous
							
							
							
							);
							$this->accounts_model->insert_remarks($data);
							$prev1=$this->accounts_model->fetch_remarks($id,$previous);
							
							if($prev1){
								foreach($prev1 as $nw2){
									$remarks_prev[]=$nw2['remarks'];
								}
							}
							
						}

						$start=$now_date;
						$now_date=$now_date+1;
						$contribution_2019=array();
						

						
						foreach($month as $mon)
						{
							if($record=$this->accounts_model->fetch_details_member($id,$mon,$now_date))
							{
								$contri_2019=0;
								foreach($record as $records)
								{
									$contri_2019+=$records['amount'];
								}
								$contribution_2019[]+=$contri_2019;
								
								
							}
							else
							{
								$contribution_2019[]+=0;
								
							}


						}

						$start=$now_date;
						$now_date=$now_date+1;
						$contributions_2019=array();
						

						
						foreach($month as $mon)
						{
							if($record=$this->accounts_model->fetch_details_members($id,$mon,$start))
							{
								$contri_2019=0;
								foreach($record as $records)
								{
									$contri_2019+=$records['amount'];
								}
								$contributions_2019[]+=$contri_2019;
								
								
							}
							else
							{
								$contributions_2019[]+=0;
								
							}


						}

						$start=$now_date;
						$now_date=$now_date+1;
						$contributionss_2019=array();
						

						
						foreach($month as $mon)
						{
							if($record=$this->accounts_model->fetch_details_memberss($id,$mon,$start))
							{
								$contri_2019=0;
								foreach($record as $records)
								{
									$contri_2019+=$records['amount'];
								}
								$contributionss_2019[]+=$contri_2019;
								
								
							}
							else
							{
								$contributionss_2019[]+=0;
								
							}


						}

						$remarks_now=array();
						$now=$this->accounts_model->fetch_remarks($id,$start);
						
						if($now){
							foreach($now as $nw){
								$remarks_now[]=$nw['remarks'];
							}
						}
						else{
							$data=array(
					
							'member_id'=>$id,
							'remarks'=>"_",
							'year'=>$start
							
							
							
							);
							$this->accounts_model->insert_remarks($data);
							$now1=$this->accounts_model->fetch_remarks($id,$start);
							
							if($now1){
								foreach($now1 as $nw){
									$remarks_now[]=$nw['remarks'];
								}
							}
							
						}

						
						$now_date=$now_date+2;
						$contribution_2020=array();
						

						
						foreach($month as $mon)
						{
							if($record=$this->accounts_model->fetch_details_member($id,$mon,$start))
							{
								$contri_2020=0;
								foreach($record as $records)
								{
									$contri_2020+=$records['amount'];
								}
								$contribution_2020[]+=$contri_2020;
								
								
							}
							else
							{
								$contribution_2020[]+=0;
								
							}


						}

						$start=$now_date;
						$now_date=$now_date+2;
						$contributions_2020=array();
						

						
						foreach($month as $mon)
						{
							if($record=$this->accounts_model->fetch_details_members($id,$mon,$start))
							{
								$contri_2020=0;
								foreach($record as $records)
								{
									$contri_2020+=$records['amount'];
								}
								$contributions_2020[]+=$contri_2020;
								
								
							}
							else
							{
								$contributions_2020[]+=0;
								
							}


						}

						$start=$now_date;
						$now_date=$now_date+2;
						$contributionss_2020=array();
						

						
						foreach($month as $mon)
						{
							if($record=$this->accounts_model->fetch_details_memberss($id,$mon,$start))
							{
								$contri_2020=0;
								foreach($record as $records)
								{
									$contri_2020+=$records['amount'];
								}
								$contributionss_2020[]+=$contri_2020;
								
								
							}
							else
							{
								$contributionss_2020[]+=0;
								
							}


						}

						$remarks_now=array();
						$now=$this->accounts_model->fetch_remarks($id,$start);
						
						if($now){
							foreach($now as $nw){
								$remarks_now[]=$nw['remarks'];
							}
						}
						else{
							$data=array(
					
							'member_id'=>$id,
							'remarks'=>"_",
							'year'=>$start
							
							
							
							);
							$this->accounts_model->insert_remarks($data);
							$now1=$this->accounts_model->fetch_remarks($id,$start);
							
							if($now1){
								foreach($now1 as $nw){
									$remarks_now[]=$nw['remarks'];
								}
							}
							
						}


			$data['contribution']=$contribution;
			$data['contributions']=$contributions;
			$data['contributionss']=$contributionss;
			$data['contribution_2016']=$contribution_2016;
			$data['contributions_2016']=$contributions_2016;
			$data['contributionss_2016']=$contributionss_2016;
			$data['contribution_2017']=$contribution_2017;
			$data['contributions_2017']=$contributions_2017;
			$data['contributionss_2017']=$contributionss_2017;
			$data['contribution_2019']=$contribution_2019;
			$data['contributions_2019']=$contributions_2019;
			$data['contributionss_2019']=$contributionss_2019;
			$data['contribution_2020']=$contribution_2020;
			$data['contributions_2020']=$contributions_2020;
			$data['contributionss_2020']=$contributionss_2020;
			$data['now']=$remarks_now;
			$data['prev']=$remarks_prev;
			$data['year']=$now_date;	
			$data['record']=$this->accounts_model->fetch_details($id);
			$this->load->view('details_member',$data);
		}
		

	
		
}
?>