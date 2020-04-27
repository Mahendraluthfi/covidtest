<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {


	public function index()
	{
		if($this->auth->is_logged_in() == false){ 			       
        	$this->load->view('login');
        }else{
        	redirect('admin/dashboard','refresh');
        }		
	}

	public function submit()
	{
		$username = $this->input->post('username');
		$password = md5($this->input->post('password'));
		$get = $this->db->get_where('users', array('username' => $username, 'password' => $password))->num_rows();		
		if (empty($get)) {
			$this->session->set_flashdata('msg', '
				<div class="alert alert-danger">					
					<strong>Username or Password is wrong !</strong>
				</div>
				');
			redirect('admin','refresh');
		}else{
			$array = array(
				'username' => $username,
				'password' => $password
			);
			
			$this->session->set_userdata( $array );
			redirect('admin','refresh');
		}		
	}

	public function logout()
	{
		session_destroy();
		redirect('admin','refresh');
	}

}

/* End of file Login.php */
/* Location: ./application/controllers/admin/Login.php */