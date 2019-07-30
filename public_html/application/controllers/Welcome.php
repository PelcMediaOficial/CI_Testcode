<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct(){
		parent::__construct();

		$this->load->helper('url');
	}

	public function index()
	{
		$this->load->model('Task');

		

		$data = array(
			'tasks' => $this->Task->GetAll()
		);

		$this->load->view('welcome_message',$data);
		
	}

// 	/**
//     * Get Download PDF File
//     *
//     * @return Response
//    */
	function mypdf(){


		//$this->load->view('welcome_message');
		$this->load->library('Pdf');
		$this->pdf->load_view('welcome_message');
		$this->pdf->render();
		$this->pdf->stream("welcome.pdf");
	}
}
