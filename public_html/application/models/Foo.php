<?php

class Foo extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        // $this->load->database();
    }

    public function entregarTexto()
    {
        return 'Hola mundo ñandú!';
    }
}