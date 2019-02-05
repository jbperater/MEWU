 <?php if(!defined('BASEPATH')) exit('no direct access script allowed');



class Main extends CI_Controller {

	public function __construct() {
		
		parent::__construct(); 
		$this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
		//$this->load->library('session');
		
		$this->load->library('session');

	}
		
	public function index() {
		
		
		
	}
	
	public function reservation_insert() {
		
		// create the data object
		
		
		// load form helper and validation library
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->load->library('session');
		
		// set validation rules
		$this->form_validation->set_rules('tittle', 'tittle', 'required|alpha_numeric');
		$this->form_validation->set_rules('department', 'department', 'required');
		$this->form_validation->set_rules('date_act', 'date_act', 'required');
		$this->form_validation->set_rules('time_act', 'time_act', 'required');
		$this->form_validation->set_rules('contact_no', 'contact_no', 'required');
		$this->form_validation->set_rules('title_event', 'title_event', 'required');
		$this->form_validation->set_rules('venue', 'venue', 'required');
		
		if ($this->form_validation->run() == true) {
			$data['content'] = 'Admin_set_event';
			$this->load->view('base_view',$data);
			
			} else {
				
				$this->load->model('main_model');
			
			$data = array(	
				'department' => $this->input->post('department'),
				'date_act' => $this->input->post('date_act'),
				'time_act' => $this->input->post('time_act'),
				'title_event' => $this->input->post('title_event'),
				'venue' => $this->input->post('venue'),
				'contact_no' => $this->input->post('contact_no'),
				
			);	

			$this->main_model->reservetion_insert($data);	

				public function add_equip_his(){

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
			
		}

	public function forecast(){

		$this->load->model('get_data_forecast');
		
		 $data2 = $this->get_data_forecast->get_data_()->result();
	      $data['data'] = json_encode($data2);
	      $data['content'] = 'Admin_forecast';
	      $this->load->view('base_view',$data  );
		
	}

	public function add_equip_his_form(){

		$data['content'] = 'Maintenance_repair_sched';
		$data['repair'] =  $query;
		$this->load->view('base_view_maintenance', $data);
		
	}


	public function add_equip_his(){

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
	
	
