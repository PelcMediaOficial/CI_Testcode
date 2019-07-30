<?php


class PdfController extends CI_Controller
{
    
    public function __construct(){
		parent::__construct();

		$this->load->helper('url');
	}

    public function index(){
        //$this->load->view('pdf-example');
        $this->load->library('Pdf');
        $this->pdf->load_view('pdf-example');
        $this->pdf->render();
        
        //$this->pdf->stream("welcome.pdf");

        //file_get_contents is standard function
        $content = $this->pdf->output();
        header('Content-Type: application/pdf');
        header('Content-Length: '.strlen( $content ));
        header('Content-disposition: inline; filename="descarga-pdf"');
        header('Cache-Control: public, must-revalidate, max-age=0');
        header('Pragma: public');
        header('Expires: Sat, 26 Jul 1997 05:00:00 GMT');
        header('Last-Modified: '.gmdate('D, d M Y H:i:s').' GMT');
        echo $content;
    }
}
