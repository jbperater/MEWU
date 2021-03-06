 <?php if(!defined('BASEPATH')) exit('no direct access script allowed');



class Login extends CI_Controller {

	public function __construct() {
		
		parent::__construct(); 
		$this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
		$this->load->library('session');
		$this->load->model('Login_auth_db');
		

	}


	private function check_access(){
		if($this->session->userdata('logged_in')){
			redirect('Admin');
		}else{
			redirect('login');
		}
	}
		
	public function index() {
		
		
		$this->load->view('login');

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
				$ses=$this->session->set_userdata('user_data_session', $user_detail);
				echo var_dump($ses);
				/*$this->session->set_userdata('user_data_id', $user_data['person_id']);
				$this->session->set_userdata('user_data_session', $user_data['username']);
				$this->session->set_userdata('user_data_session', $user_data['type']);*/
				// $this->session->set_userdata('logged_in', true);
				$this->session->set_userdata('id', $user_data['person_id']);


				


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
				  // var_dump($user_detail);
				  //   exit;
    	// 			exit();
					$data_to_view['user'] = $lol;
					$data_to_view['selected'] = 'dashboard';
					$data_to_view['content'] = 'dashboard';
					// $this->load->view('base_view',$data_to_view);
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

				
				

				

				

			} else {

				// login failed
				$data->error = 'Wrong username or password.';
				
				// send error to the view
				// $this->load->view('login', $data);
				redirect('login');
				
			}
			
		}
		
	}
	
	public function home() {
		
		$data['content'] = 'dashboard';
		$this->load->view('base_view', $data);
	
	}

}