<?php

class Transporttype{

    private $db;

    public function __construct()
    {
      $this->db =new Database;


    }
     

    public function getTransporttype()
    {
        $this->db->query('SELECT * FROM typetransport');
        $result= $this->db->resultSet();
        return $result;

    }

   


}


?>