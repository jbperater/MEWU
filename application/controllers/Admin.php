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
	
	
	public function Admin_pen_req() {
		
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
		
			$data['content'] = 'blank_page1';
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

		
		$data['content'] = 'Admin_set_event';
		$this->load->view('base_view', $data);
		/*Check submit button */
		echo "Records Saved Successfully";
		}
	
	public function Admin_add_event() {
	
		
		$no_participants=$this->input->post('no_participants');
		$date_act=$this->input->post('date_act');
		$title_event=$this->input->post('title_event');
		$contact_no=$this->input->post('contact_no');
		$date_request=$this->input->post('date_request');

		$this->Login_auth_db->set_event($no_participants,$date_act,$title_event,$contact_no,$date_request);	
		
	
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
		/*redirect( base_url(). "Admin/Admin_pen_rep" );*/
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

	// public function search(){
			
	// 		$this->load->model('Login_auth_db');
			



	// 		$this->load->library('pagination');
	// 		$config['base_url'] = "http://localhost/mewu/Admin/search";
	// 		$config['per_page'] = 10;
	// 		$config['num_links'] = 3;
	// 		$config['full_tag_open'] = '<ul class="pagination">';
	// 		$config['full_tag_close'] = '</ul>';
	// 		$config['prev_link'] = '&laquo;';
	// 		$config['prev_tag_open'] = '<li>';
	// 		$config['prev_tag_close'] = '</li>';
	// 		$config['next_tag_open'] = '<li >';
	// 		$config['next_tag_close'] = '</li>';
	// 		$config['cur_tag_open'] = '<li class="active"><a href="#">';
	// 		$config['cur_tag_close'] = '</a></li>';
	// 		$config['num_tag_open'] = '<li>';
	// 		$config['num_tag_close'] = '</li>';
	// 		$config['next_link'] = '&raquo;';
	// 		$config['total_rows'] = $this->Login_auth_db->account_total_rows();
	// 		$this->pagination->initialize($config);
	// 		$data["fetch_data"] = $this->db->get('persons', $config['per_page'], $this->uri->segment(3), $this->db->order_by("type", "asc"));
	// 		//$data["fetch_data"] = $this->accounts_model->fetch_data();
			 
	// 		$this->load->view('Admin/search',$data);
	// 	}

	// public function update_account(){
	// 		$id = $this->input->get('person_id');
	// 		$this->load->model('Login_auth_db');
		 
	// 		$data=array();
	// 		if($query = $this->Login_auth_db->get_account_data_for_update($id))
	// 		{
	// 			$users['records'] = $query;
	// 		}

	// 		$this->load->view('Admin/update_account',$users);
	
	// 	}



}
?>