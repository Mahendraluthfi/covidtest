<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Employee extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if($this->auth->is_logged_in() == false){ 			       
			redirect('admin','refresh');
        }	
	}

	public function index()
	{
		$data['get'] = $this->db->get('employee')->result();
		$data['content'] = 'employee';
		$this->load->view('dashboard', $data);
	}

}

/* End of file Employee.php */
/* Location: ./application/controllers/admin/Employee.php */