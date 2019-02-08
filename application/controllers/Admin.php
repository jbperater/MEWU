<?php if(!defined('BASEPATH')) exit('no direct access script allowed');

class Admin extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->database(); 
		$this->load->helper('url');
		$this->load->library('session');

		$this->load->model('Login_auth_db');
		$this->load->model('main_model');

		

	}
	
	public function login_auth() {
		
		// create the data object
	
		
		// load form helper and validation library
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->load->library('session');
		
		// set validation rules
		$this->form_validation->set_rules('username', 'Username', 'required|alpha_numeric');
		$this->form_validation->set_rules('password', 'Password', 'required');
		
		if ($this->form_validation->run() == false) {
			
			// validation not ok, send validation errors to the view
			$this->load->view('login');
			
		} else {
			
			// set variables from the form
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			
			if ($this->Login_auth_db->login($username, $password)) {
				$user_data = $this->Login_auth_db->get_user_data($username);

				
				$user_detail = array(
					'person_id'	=> $user_data['person_id'],
					'username'	=> $user_data['username'],
					'type'	=> $user_data['type'],
					'sign'	=> $user_data['sign']
				);
				$this->session->set_userdata('user_data_session', $user_detail);
				/*$this->session->set_userdata('user_data_id', $user_data['person_id']);
				$this->session->set_userdata('user_data_session', $user_data['username']);
				$this->session->set_userdata('user_data_session', $user_data['type']);*/
				// $this->session->set_userdata('logged_in', true);
				$this->session->set_userdata('id', $user_data['person_id']);

				$idni = $user_data['person_id'];
				echo $idni;
				// exit();
				


				// user login ok
				if ( $user_detail['sign'] ==='0'  ){
					

					$data_to_view['id']=$lol['person_id'];
					$data_to_view['selected'] = 'dashboard';
					$data_to_view['content'] = 'dashboard';


					/*$this->load->view('update_info',$data_to_view);*/

				
				}
				elseif ( $user_detail['type'] ==='admin' ){
					$lol=$this->session->userdata('user_data_session')['person_id'];
					// echo var_dump($lol);
    	// 			exit();
					$data_to_view['user'] = $lol;
					$data_to_view['selected'] = 'dashboard';
					$data_to_view['content'] = 'dashboard';
					$this->load->view('base_view',$data_to_view);
					redirect('Admin/Admin_pen_req');
					var_dump($lol);
					
				
				}
				elseif( $user_data['type'] == 'student'){
					$data_to_view['selected'] = 'Student_view_sched';
					$data_to_view['content'] = 'Student_view_sched';
					$this->load->view('base_view_student',$data_to_view);
				}
				elseif( $user_data['type'] == 'staff'){
					$data_to_view['selected'] = 'Staff_view_sched';
					$data_to_view['content'] = 'Staff_view_sched';
					$this->load->view('base_view_staff',$data_to_view);
				}
				elseif( $user_data['type'] == 'faculty'){
					$data_to_view['selected'] = 'Staff_view_sched';
					$data_to_view['content'] = 'Staff_view_sched';
					$this->load->view('base_view_staff',$data_to_view);
				}
				elseif( $user_data['type'] == 'maintenance'){
					$data_to_view['selected'] = 'Maintenance_all_sched';
					$data_to_view['content'] = 'Maintenance_all_sched';
					/*$this->load->view('base_view_maintenance',$data_to_view);*/
					redirect('maintenance');
					
				}
				else{
					
					$this->load->view('login');
				}

				
				

				

				echo "nothing";

			} else {

				// login failed
				$data->error = 'Wrong username or password.';
				
				// send error to the view
				// $this->load->view('login', $data);
				redirect('login');
				
			}
			
		}
		
	}
	
	
	public function Admin_pen_req() {
		$lol=$this->session->userdata('user_data_session');
		
		var_dump($lol);
		
		$query = $this->Login_auth_db->admin_event_req();
		$data['event_req'] = null;
		 
		if($query){
		$data['event_req'] =  $query;
		$data['content'] ='Admin_pen_req';

		
		$this->load->view('base_view', $data);
		//$data['content'] = 'Admin_pen_rep';
		//$this->load->view('base_view', $data);

		 $this->load->model('Login_auth_db');

	}
}
		
	public function index() {
		
			$data['content'] = 'Admin_view_sched';
			$this->load->view('base_view', $data);
	    }
	

	private function check_access(){
		if($this->session->userdata('logged_in')){
			return true;
		}else{
			redirect('login');
		}
	}

	
	public function Admin_pen_rep() {
		
		 $query = $this->Login_auth_db->view_repair();
		$query2 = $this->main_model->maintenance_personel();
		 $data['repair'] =  $query;
		 $data['option'] =  $query2;
		 $data['content'] ='Admin_pen_rep';


		 $this->load->view('base_view', $data);
		//$data['content'] = 'Admin_pen_rep';
		//$this->load->view('base_view', $data);
	
	}

	public function Admin_set_event() {
	
		$res = $this->session->userdata('id');
		$id = $res;
		echo var_dump($id);
		exit();
		$data['content'] = 'Admin_set_event';
		$this->load->view('base_view', $data);
		/*Check submit button */
		echo "Records Saved Successfully";
		}
	
	public function Admin_add_event() {
		
		$res = $this->session->userdata('user_data_session')['person_id'];

		// $venue1=$this->input->post('venue');
		// $data2=array('venue_id'=>json_encode(implode(",", $venue1)),);
		$data2 = $this->input->post('venue[]');
		$data3 = $this->input->post('event[]');
		$table_no = $this->input->post('table_no');
		$chair_no = $this->input->post('chair_no');
		$data = array(	
				'no_participants' => $this->input->post('no_participants'),
				'department'=>$this->input->post('department'),
				'date_act'=>$this->input->post('date_act'),
				'purpose'=>$this->input->post('purpose'),
				'title_event'=>$this->input->post('title_event'),
				'contact_no'=>$this->input->post('contact_no'),
				'status'=>'pending',
				'date_request'=>$this->input->post('date_request'),
				'res_by'=>		$this->session->userdata('user_data_session')['person_id']
			);	
		/*$no_participants=$this->input->post('no_participants');
		$date_act=$this->input->post('date_act');
		$title_event=$this->input->post('title_event');
		$contact_no=$this->input->post('contact_no');
		$date_request=$this->input->post('date_request');*/
		
		echo 'no';
		/*$this->Login_auth_db->set_event($no_participants,$date_act,$title_event,$contact_no,$date_request);	*/
		
		
		$this->Login_auth_db->set_event_ni($data,$data2);
		$last_id = $this->Login_auth_db->last_id();
		echo $last_id;
		$this->Login_auth_db->set_event_venue($last_id,$data2);
		$this->Login_auth_db->set_equip_event($last_id,$data3,$table_no,$chair_no);

		redirect(base_url().'admin');
		
	
	}

	public function Admin_set_repair() {
		
		$data['content'] = 'Admin_set_repair';
		$this->load->view('base_view', $data);
	}

	public function Admin_view_sched() {
		
		$data['content'] = 'Admin_view_sched';
		$this->load->view('base_view', $data);
	}

	public function Admin_view_repair() {
		
		$data['content'] = 'Admin_view_repair';
		$this->load->view('base_view', $data);
	}

	public function Admin_add_equip() {
		$data['content'] = 'Admin_add_equip';
		$this->load->view('base_view', $data);
		/*Check submit button */
	
		echo "Records Saved Successfully";
	
	}

	public function add_equip() {
		
		/*Check submit button */
		$equip_name=$this->input->post('equip_name');
		$brand=$this->input->post('brand');
		$model=$this->input->post('model');
		$serial_no=$this->input->post('serial_no');
		$office=$this->input->post('office');
		
		$type=$this->input->post('type');
		$year_acc=$this->input->post('year_acc');

		$this->Login_auth_db->add_equipment($equip_name,$brand,$model,$serial_no,$office,$type,$year_acc);	
		
	
	}


	public function Admin_view_equip() {
		
		$data['content'] = 'Admin_view_equip';
		$data["fetch_data"]=$this->Login_auth_db->get_equipment();
		$this->load->view('base_view', $data);
	}

	public function Admin_add_event_equip() {
		
		$data['content'] = 'Admin_add_event_equip';
		$this->load->view('base_view', $data);
	}

	public function Admin_view_event_equip() {

		$data['content'] = 'Admin_view_event_equip';
		$data["fetch_data"]=$this->main_model->event_equip_fetch_data();
		$this->load->view('base_view', $data);

	}

	public function Admin_add_venue() {
		
		$data['content'] = 'Admin_add_venue';
		$this->load->view('base_view', $data);
	}

	public function Admin_view_venue() {
		
		/*$data['content'] = 'Admin_view_venue';*/
		$data["fetch_data"]=$this->main_model->fetch_data();
		$data["content"]="Admin_view_venue";
		$this->load->view('base_view',$data);
	}


	public function Admin_forecast() {
		$this->load->model('main_model');
		/*$data2 = $this->main_model->get_data_forecast()->result();*/

	    
	    $data2 = $this->main_model->get_data_forecast()->result();
	    $try = $this->main_model->forecast_data();
	    $data['try'] = json_encode($try);
	    $data['datani'] = json_encode($data2);
		$data['content'] = 'Admin_forecast';
		$this->load->view('base_view', $data);
	}


	public function approve_request() {

		/*load registration view form*/
		$data['content'] = 'approve_request';
		$this->load->view('base_view', $data);
		/*Check submit button */
		if($this->input->post('submit'))
 		{
		$approve = $this->input->get('approve');
		$person_attend=$this->input->post('person_attend');

		$this->Login_auth_db->person_attend($person_attend,$approve);	
		echo "Records Saved Successfully";
		}
	}

	public function decline_request() {

		/*load registration view form*/
		/*Check submit button */
		if($this->input->post('decline'))
 		{
		$decline = $this->input->get('decline');
		$decline_job_req=$this->input->post('decline_job_req');

		$this->Login_auth_db->decline_job_req($decline);	
		echo "Records Saved Successfully";
		}
	}

	public function admin_rep_app() {
		$this->load->model('main_model');
		$id = $this->input->get('id');
		/*$this->main_model->update_rep_approve($id);*/
		$query = $this->Login_auth_db->view_repair();
		$query2 = $this->main_model->maintenance_personel();
		 $data['repair'] =  $query;
		 $data['option'] =  $query2;
		 $data['content'] ='Admin_pen_rep';
		 $this->load->view('base_view', $data);
		/*redirect( base_url(). "Admin/Admin_pen_rep" );*/
		$dat['per'] =  $id;
		$this->load->view('Modal_personel',$dat);
		$this->main_model->update_rep_approve($id);
	}

	public function admin_rep_dec() {
		$this->load->model('main_model');
		$id = $this->input->get('id');
		$this->main_model->update_rep_dec($id);
		redirect( base_url(). "Admin/Admin_pen_rep" );
	}

	public function admin_per_ass() {
		$this->load->model('main_model');
		$per_id = $this->input->post('personel');
		$job_id = $this->input->get('id');
		$this->main_model->update_per_ass($per_id,$job_id);
		redirect( base_url(). "Admin/Admin_pen_rep" );
	}

	public function admin_equip_add(){

		// create the data object
		
		
		// load form helper and validation library
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->load->library('session');
		
		// set validation rules
		$this->form_validation->set_rules('Brand', 'Brand', 'required|alpha_numeric');
		$this->form_validation->set_rules('name', 'name', 'required');
		$this->form_validation->set_rules('type', 'type', 'required');
		
		if ($this->form_validation->run() == false) {
			
			$this->load->view('Admin_add_venue');
			
			} else {
				
				$this->load->model('main_model');
			
			$data = array(	
				'brand' => $this->input->post('Brand'),
				'equip_name' => $this->input->post('name'),
				'model' => $this->input->post('Model'),
				'serial_no' => $this->input->post('SerailNo'),
				'office' => $this->input->post('Office'),
				'depart' => $this->input->post('Department'),
				'type' => $this->input->post('Brand'),
				'year_acc' => $this->input->post('year')
				
			);	

			$this->main_model->insert_equip($data);	
			redirect('admin/admin_add_event');

				
				
			}
	}
		public function Admin_set_account() {

		
		$data['content'] = 'Admin_set_account';
		$this->load->view('base_view', $data);
		/*Check submit button */
		echo "Records Saved Successfully";
		}
	
	public function Admin_add_account() {
	
		
		$username=$this->input->post('username');
		$password=$this->input->post('password');
		$type=$this->input->post('type');
		$status=$this->input->post('status');
		$date_created=$this->input->post('date_created');

		$this->Login_auth_db->set_account($username,$password,$type,$status,$date_created);
		
	
	}

}
?>