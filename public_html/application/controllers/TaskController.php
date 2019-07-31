<?php

class TaskController extends CI_Controller
{
    public function __construct(){
        parent::__construct();
        $this->load->helper('url');
    }

    public function index(){       
        $this->load->model('Task');
        
        $data = array(
			'tasks' => $this->Task->GetAll()
        );
         
        $this->load->view('task-list',$data);
    }
}
