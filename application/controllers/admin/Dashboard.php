<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if($this->auth->is_logged_in() == false){ 			       
			redirect('admin','refresh');
        }	
	}

	public function index()
	{
		$today = date('Y-m-d');
		$data['emp'] = $this->db->get('employee')->num_rows();
		$data['today'] = $this->db->query("SELECT * FROM result WHERE DATE(date) = '$today'")->num_rows();
		$data['green'] = $this->db->query("SELECT * FROM result WHERE DATE(date) = '$today' AND result='Zona Hijau'")->num_rows();
		$data['yellow'] = $this->db->query("SELECT * FROM result WHERE DATE(date) = '$today' AND result='Zona Kuning'")->num_rows();
		$data['red'] = $this->db->query("SELECT * FROM result WHERE DATE(date) = '$today' AND result='Zona Merah'")->num_rows();
		$data['content'] = 'depan';
		$this->load->view('dashboard', $data);
	}

}

/* End of file Dashboard.php */
/* Location: ./application/controllers/admin/Dashboard.php */