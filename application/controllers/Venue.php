 <?php if(!defined('BASEPATH')) exit('no direct access script allowed');



class Venue extends CI_Controller {

	public function __construct() {
		
		parent::__construct(); 
		$this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
		//$this->load->library('session');
		
		$this->load->library('session');

	}
		
	public function index() {
		
		$this->load->view('Admin_add_venue');
		
	}
	
	public function venue_insert() {
		
		// create the data object
		
		
		// load form helper and validation library
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->load->library('session');
		
		// set validation rules
		$this->form_validation->set_rules('RoomNo', 'RoomNo', 'required|alpha_numeric');
		$this->form_validation->set_rules('name', 'name', 'required');
		$this->form_validation->set_rules('type', 'type', 'required');
		
		if ($this->form_validation->run() == false) {
			
			$this->load->view('Admin_add_venue');
			
			} else {
				
				$this->load->model('main_model');
			
			$data = array(	
				'bldg_no' => $this->input->post('RoomNo'),
				'name' => $this->input->post('name'),
				'type' => $this->input->post('type')
			);	

			$this->main_model->insert($data);	

				
				
			}
			
		}
		
	}
	
	
