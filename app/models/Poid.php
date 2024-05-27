<?php

class Poid{

    private $db;

    public function __construct()
    {
      $this->db =new Database;


    }
     

    public function getPoids()
    {
        $this->db->query('SELECT * FROM poid');
        $result= $this->db->resultSet();
        return $result;

    }

   


}


?>