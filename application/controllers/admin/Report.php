<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require('././vendor/autoload.php');

use PhpOffice\PhpSpreadsheet\Helper\Sample;
use PhpOffice\PhpSpreadsheet\IOFactory;
use PhpOffice\PhpSpreadsheet\Spreadsheet;

class Report extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if($this->auth->is_logged_in() == false){ 			       
			redirect('admin','refresh');
        }	
	}

	public function index()
	{
		if (!empty($this->input->post('date'))) {
			$today = $this->input->post('date');
			$data['labeldate'] = 'Result, '.date('d M', strtotime($today));
			$data['date'] = $today;
			$data['get'] = $this->db->query("SELECT * FROM result JOIN employee ON result.epf = employee.epf WHERE DATE(result.date) = '$today'")->result();		
		}else{
			$today = date('Y-m-d');
			$data['labeldate'] = 'Today, '.date('d M', strtotime($today));
			$data['date'] = $today;			
			$data['get'] = $this->db->query("SELECT * FROM result JOIN employee ON result.epf = employee.epf WHERE DATE(result.date) = '$today'")->result();		
		}
		$data['content'] = 'report';
		$this->load->view('dashboard', $data);
	}

	public function report($date)
	{		
		$dataget = $this->db->query("SELECT * FROM result JOIN employee ON result.epf = employee.epf WHERE DATE(result.date) = '$date'")->result();				
		$spreadsheet = new Spreadsheet();

		// Set document properties
		$spreadsheet->getProperties()->setCreator('MAS Sumbiri')
		->setLastModifiedBy('MAS Sumbiri')
		->setTitle('Office 2007 XLSX Test Document')
		->setSubject('Office 2007 XLSX Test Document')
		->setDescription('Test document for Office 2007 XLSX, generated using PHP classes.')
		->setKeywords('office 2007 openxml php')
		->setCategory('Test result file');

		// Add some data
		$spreadsheet->setActiveSheetIndex(0)
		->setCellValue('A1', 'NO')
		->setCellValue('B1', 'DATE')
		->setCellValue('C1', 'EPF')
		->setCellValue('D1', 'NAME')
		->setCellValue('E1', 'DEPARTMENT')
		->setCellValue('F1', 'GRADE')
		->setCellValue('G1', 'RESULT')		
		;

		$spreadsheet->getActiveSheet()->getStyle('A1:G1')->getFill()->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)->getStartColor()->setARGB('cecece');


		// Miscellaneous glyphs, UTF-8
		$no =1;
		$i=2; foreach($dataget as $data) {

		$spreadsheet->setActiveSheetIndex(0)
		->setCellValue('A'.$i, $no++)		
		->setCellValue('B'.$i, $data->date)
		->setCellValue('C'.$i, $data->epf)
		->setCellValue('D'.$i, $data->name)
		->setCellValue('E'.$i, $data->department)
		->setCellValue('F'.$i, $data->grade)
		->setCellValue('G'.$i, $data->result);
		if ($data->result == "Zona Hijau") {
			$spreadsheet->getActiveSheet()->getStyle('G'.$i)->getFill()->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)->getStartColor()->setARGB('66ff66');			
		}elseif ($data->result == "Zona Kuning") {
			$spreadsheet->getActiveSheet()->getStyle('G'.$i)->getFill()->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)->getStartColor()->setARGB('ffff33');						
		}else{
			$spreadsheet->getActiveSheet()->getStyle('G'.$i)->getFill()->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)->getStartColor()->setARGB('ff6666');						
		}
		$i++;
		}

		// Rename worksheet
		$spreadsheet->getActiveSheet()->setTitle('ReportCovid '.$date);

		// Set active sheet index to the first sheet, so Excel opens this as the first sheet
		$spreadsheet->setActiveSheetIndex(0);

		// Redirect output to a client’s web browser (Xlsx)
		header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
		header('Content-Disposition: attachment;filename="ReportCovid '.$date.'.xlsx"');
		header('Cache-Control: max-age=0');
		// If you're serving to IE 9, then the following may be needed
		header('Cache-Control: max-age=1');

		// If you're serving to IE over SSL, then the following may be needed
		header('Expires: Mon, 26 Jul 1997 05:00:00 GMT'); // Date in the past
		header('Last-Modified: ' . gmdate('D, d M Y H:i:s') . ' GMT'); // always modified
		header('Cache-Control: cache, must-revalidate'); // HTTP/1.1
		header('Pragma: public'); // HTTP/1.0

		$writer = IOFactory::createWriter($spreadsheet, 'Xlsx');
		$writer->save('php://output');
		exit;
	}

	public function get_answer($id)
	{
		$data= $this->db->query("SELECT result.date as dt, answer.* FROM answer JOIN result ON answer.id = result.id_answer WHERE answer.id='$id'")->row();
		echo json_encode($data);
	}
}

/* End of file Report.php */
/* Location: ./application/controllers/admin/Report.php */