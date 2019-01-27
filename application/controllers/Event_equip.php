 <?php if(!defined('BASEPATH')) exit('no direct access script allowed');



class Event_equip extends CI_Controller {

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
	
	public function insert() {
		
		// create the data object
		
		
		// load form helper and validation library
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->load->library('session');
		
		// set validation rules
		$this->form_validation->set_rules('name', 'name', 'required');
		$this->form_validation->set_rules('type', 'type', 'required');
		
		if ($this->form_validation->run() == false) {
				$data_to_view['selected'] = 'admin_add_event_equip';
				$data_to_view['content'] = 'admin_add_event_equip';
				$this->load->view('base_view',$data_to_view);
			} else {
				
				$this->load->model('event_equip_model');
			
			$data = array(	
				'name' => $this->input->post('name'),
				'type' => $this->input->post('type')
			);	

			$this->event_equip_model->insert($data);	

				
				
			}
			
		}
		
	}
	
	
