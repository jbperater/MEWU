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
		$this->form_validation->set_rules('purpose', 'purpose', 'required');
		$this->form_validation->set_rules('contact_no', 'contact_no', 'required');
		
		if ($this->form_validation->run() == true) {
			$data['content'] = 'Admin_set_event';
			$this->load->view('base_view',$data);
			
			} else {
				
				$this->load->model('main_model');
			
			$data = array(	
				'department' => $this->input->post('department'),
				'date_act' => $this->input->post('date_act'),
				'time_act' => $this->input->post('time_act'),
				'purpose' => $this->input->post('purpose'),
				'title_event' => $this->input->post('contact_no'),
				
			);	

			$this->main_model->reservetion_insert($data);	

				
				
			}
			
		}
		
	}
	
	
