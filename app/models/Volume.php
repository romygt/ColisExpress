<?php

class Volume{

    private $db;

    public function __construct()
    {
      $this->db =new Database;


    }
     

    public function getVolume()
    {
        $this->db->query('SELECT * FROM volume');
        $result= $this->db->resultSet();
        return $result;

    }

   


}


?>