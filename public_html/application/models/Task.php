<?php


class Task extends CI_Model
{
    private $table_name = 'task';
    private $id_task; // int AUTO_INCREMENT primary key,
    public $title; // varchar(100) not null,
    public $description; // varchar(100) not null,
    public $priority; // int not null,
    public $author; // varchar(100)

    public function __construct(){
        parent::__construct();
        $this->load->database();
    }


    public function GetAll(){

        $query = $this->db->query('SELECT * FROM '.$this->table_name);
        //var_dump($query)
        return $query->result();
    }

    public function insert(){

        $data = array(
            'title'         => 'TASK 3',
            'description'   => 'Loren Ipsum.....'
        );

        $sql_insert  = $this->db->insert($this->table_name,$data);

        //$this->db->insert_id()

        echo $sql_insert;
        die();
    }
}
