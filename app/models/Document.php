<?php

class Document{

    private $db;

    public function __construct()
    {
      $this->db =new Database;


    }
     

    public function getDocuments()
    {
        $this->db->query("SELECT * FROM documents");
        $result= $this->db->resultSet();
        return $result;

    }


  


}


?>