<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if($this->auth->is_logged_user() == false){ 			       
			redirect('welcome','refresh');
        }
        date_default_timezone_set('Asia/Jakarta');
	}

	public function index()
	{
		$data['get'] = $this->db->get_where('result', array('epf' => $this->session->userdata('epf')))->result();
		$data['epf'] = $this->db->get_where('employee', array('epf' => $this->session->userdata('epf')))->row();
		$this->load->view('home', $data);
	}	

	public function en()
	{
		$data['epf'] = $this->db->get_where('employee', array('epf' => $this->session->userdata('epf')))->row();		
		$data['get'] = $this->db->get_where('result', array('epf' => $this->session->userdata('epf')))->result();
		$this->load->view('home_en', $data);
	}	

	public function logout()
	{
		session_destroy();
		redirect('welcome','refresh');
	}

	public function submit()
	{
		$id = substr($this->uuid->v4(), 0, 8);
		$this->db->insert('answer', array(
			'id' => $id,
			'epf' => $this->session->userdata('epf'),
			'date' => date('Y-m-d'),
			'question1' => $this->input->post('question1'),
			'question2' => $this->input->post('question2'),
			'question3' => $this->input->post('question3'),
			'question4' => $this->input->post('question4'),
			'question5' => $this->input->post('question5'),
			'question6' => $this->input->post('question6'),
			'question7' => $this->input->post('question7'),
			'question8' => $this->input->post('question8'),
			'question9' => $this->input->post('question9'),
			'question10' => $this->input->post('question10'),
			'question11' => $this->input->post('question11'),
			'question12' => $this->input->post('question12'),
			'question13' => $this->input->post('question13'),
			'question14' => $this->input->post('question14'),
			'question15' => $this->input->post('question15'),
			'question16' => $this->input->post('question16'),
			'question17' => $this->input->post('question17'),
			'question18' => $this->input->post('question18'),
			'negara1' => $this->input->post('negara1'),
			'negara2' => $this->input->post('negara2'),
			'tempat' => $this->input->post('tempat')			
		));
		$total = 0;
		for ($i=1; $i <= 18 ; $i++) { 
			$hit = $this->input->post('question'.$i);
			$total = $total + $hit;
		}

		if ($total == 0) {
			$result = 'Zona Hijau';
			$this->session->set_flashdata('hasil', '
				<div class="alert alert-success">					
					<strong>Anda berada dalam Zona Hijau</strong><br>
					Tetap jaga kesehatan dan selalu gunakan masker ketika diluar rumah ya.
				</div>
				');
		}elseif($total <= 7){
			$result = 'Zona Kuning';
			$this->session->set_flashdata('hasil', '
				<div class="alert alert-warning">					
					<strong>Anda berada dalam Zona Kuning</strong><br>
					Batasi aktifitas anda dan jaga jarak dengan sekitar.
				</div>
				');			
		}else{
			$result = 'Zona Merah';
			$this->session->set_flashdata('hasil', '
				<div class="alert alert-danger">					
					<strong>Anda berada dalam Zona Merah</strong><br>
					Anda harus isolasi dirumah , dilarang untuk beraktifitas diluar rumah.					
				</div>
				');
		}

		$this->db->insert('result', array(
			'id_answer' => $id,
			'epf' => $this->session->userdata('epf'),
			'date' => date('Y-m-d H:i:s'),
			'result' => $result,
			'poin' => $total
		));
		if ($this->input->post('lang') == 'en') {			
			redirect('home/en/#record','refresh');
		}else{
			redirect('home/#record','refresh');			
		}
		
	}

	public function submit_en()
	{
		$id = substr($this->uuid->v4(), 0, 8);
		$this->db->insert('answer', array(
			'id' => $id,
			'epf' => $this->session->userdata('epf'),
			'date' => date('Y-m-d'),
			'question1' => $this->input->post('question1'),
			'question2' => $this->input->post('question2'),
			'question3' => $this->input->post('question3'),
			'question4' => $this->input->post('question4'),
			'question5' => $this->input->post('question5'),
			'question6' => $this->input->post('question6'),
			'question7' => $this->input->post('question7'),
			'question8' => $this->input->post('question8'),
			'question9' => $this->input->post('question9'),
			'question10' => $this->input->post('question10'),
			'question11' => $this->input->post('question11'),
			'question12' => $this->input->post('question12'),
			'question13' => $this->input->post('question13'),
			'question14' => $this->input->post('question14'),
			'question15' => $this->input->post('question15'),
			'question16' => $this->input->post('question16'),
			'question17' => $this->input->post('question17'),
			'question18' => $this->input->post('question18'),
			'negara1' => $this->input->post('negara1'),
			'negara2' => $this->input->post('negara2'),
			'tempat' => $this->input->post('tempat')			
		));
		$total = 0;
		for ($i=1; $i <= 18 ; $i++) { 
			$hit = $this->input->post('question'.$i);
			$total = $total + $hit;
		}

		if ($total == 0) {
			$result = 'Zona Hijau';
			$this->session->set_flashdata('hasil', '
				<div class = "alert alert-success">
				<strong> You are in the Green Zone </strong> <br>
				Stay healthy and always wear a mask when outside the house.
				</div>
				');
		}elseif($total <= 7){
			$result = 'Zona Kuning';
			$this->session->set_flashdata('hasil', '
				<div class = "alert alert-warning">
				<strong> You are in the Yellow Zone </strong> <br>
				Limit your activities and keep your distance from your surroundings.
				</div>
				');			
		}else{
			$result = 'Zona Merah';
			$this->session->set_flashdata('hasil', '
				<div class = "alert alert-danger">
				<strong> You are in the Red Zone </strong> <br>
				You must be isolated at home, forbidden to do activities outside the home.
				</div>
				');
		}

		$this->db->insert('result', array(
			'id_answer' => $id,
			'epf' => $this->session->userdata('epf'),
			'date' => date('Y-m-d H:i:s'),
			'result' => $result,
			'poin' => $total
		));
		
		redirect('home/en/#record','refresh');				
	}

	public function get_answer($id)
	{
		$data= $this->db->query("SELECT result.date as dt, answer.* FROM answer JOIN result ON answer.id = result.id_answer WHERE answer.id='$id'")->row();
		echo json_encode($data);
	}

}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */