<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if($this->auth->is_logged_user() == true){ 			       
			redirect('home','refresh');
        }
	}

	public function index()
	{
		$this->load->view('index');
	}

	public function en()
	{
		$this->load->view('index_en');		
	}

	public function registrasi()
	{
		$cek = $this->db->get_where('employee', array('epf' => $this->input->post('epf')))->num_rows();
		if (empty($cek)) {
			$this->db->insert('employee', array(
				'epf' => $this->input->post('epf'),
				'name' => $this->input->post('name'),
				'grade' => $this->input->post('grade'),
				'department' => $this->input->post('department'),
				'alamat' => $this->input->post('alamat'),
				'password' => md5($this->input->post('password'))
			));
			$this->session->set_flashdata('msg', '
				<hr>
	            <div class="alert alert-success">                
	                <strong>Registrasi Berhasil ! Silahkan klik tombol Masuk</strong>
	            </div>
			');			
		}else{
			$this->session->set_flashdata('msg', '
				<hr>
	            <div class="alert alert-danger">                
	                <strong>Maaf Registrasi Gagal ! EPF sudah terdaftar</strong>
	            </div>
			');
		}
		redirect('welcome','refresh');
	}

	public function registrasi_en()
	{
		$cek = $this->db->get_where('employee', array('epf' => $this->input->post('epf')))->num_rows();	
		if (empty($cek)) {
			$this->db->insert('employee', array(
				'epf' => $this->input->post('epf'),
				'name' => $this->input->post('name'),
				'grade' => $this->input->post('grade'),
				'department' => $this->input->post('department'),
				'alamat' => $this->input->post('alamat'),
				'password' => md5($this->input->post('password'))
			));
			$this->session->set_flashdata('msg', '
				<hr>
	            <div class="alert alert-success">                
	                <strong>Signup Successfull ! Please Login</strong>
	            </div>
				');			
		}else{
			$this->session->set_flashdata('msg', '
				<hr>
	            <div class="alert alert-danger">                
	                <strong>Signup Failed ! EPF already registered</strong>
	            </div>
			');
		}	
		redirect('welcome/en','refresh');
	}

	public function login()
	{
		$epf = $this->input->post('epf');
		$password = md5($this->input->post('password'));
		$cek = $this->db->get_where('employee', array('epf' => $epf, 'password' => $password))->num_rows();
		if (empty($cek)) {
			$this->session->set_flashdata('msg', '<hr>
				<div class="alert alert-danger">					
					<strong>Username atau Password salah !</strong>
				</div>
				');
			redirect('welcome','refresh');
		}else{
			$array = array(
				'epf' => $epf,
				'password' => $password
			);			
			$this->session->set_userdata( $array );
			redirect('home','refresh');			
		}
	}	

	public function login_en()
	{
		$epf = $this->input->post('epf');
		$password = md5($this->input->post('password'));
		$cek = $this->db->get_where('employee', array('epf' => $epf, 'password' => $password))->num_rows();
		if (empty($cek)) {
			$this->session->set_flashdata('msg', '<hr>
				<div class="alert alert-danger">					
					<strong>Username atau Password salah !</strong>
				</div>
				');
			redirect('welcome','refresh');
		}else{
			$array = array(
				'epf' => $epf,
				'password' => $password
			);			
			$this->session->set_userdata( $array );
			redirect('home/en','refresh');			
		}
	}	

	public function submit()
	{
		
	}
}
