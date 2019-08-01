<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class FooController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
    }

    public function index()
    {
        $this->load->model('Foo');

        $aRetorna = array(
            'mensaje' => $this->Foo->entregarTexto()
        );

        $this->load->view('foo-bar', $aRetorna);
    }
}
