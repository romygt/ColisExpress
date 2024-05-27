<?php

class News{

    private $db;

    public function __construct()
    {
      $this->db =new Database;

    }

    public function getNews()
    {
        $this->db->query('SELECT * FROM news ');
        $result= $this->db->resultSet();
        return $result;

    }

    public function getNewaById($id)
    {
        $this->db->query('SELECT *  FROM news WHERE idnews = :id' );
         
        $this->db->bind(':id',$id);

        $row =$this->db->single();
        
            return $row;




    }

   



    


}


?>