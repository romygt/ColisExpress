<?php

class Wilaya{

    private $db;

    public function __construct()
    {
      $this->db =new Database;


    }
     

    public function getWilayas()
    {
        $this->db->query('SELECT * FROM wilayas');
        $result= $this->db->resultSet();
        return $result;

    }

    public function getWilayaByid($id)
    {
        $this->db->query('SELECT * FROM wilayas WHERE idwilaya = :id ');
        $this->db->bind(':id',$id);

        $result= $this->db->single();
        return $result;

    }

    public function getPrixWilayas()
    {
        $this->db->query('SELECT * FROM prix ');
        
        $result= $this->db->resultSet();
        return $result;

    }




   


}


?>