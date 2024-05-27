
<?php

class Justificatif{

    private $db;

    public function __construct()
    {
      $this->db =new Database;

    }



    public function setJustificatif($idtrans,$contenu)
    {
        $this->db->query('INSERT INTO justificatifs(idtrans,contenu) VALUES (:idtrans,:contenu)');
      
        $this->db->bind(':idtrans',$idtrans);
        $this->db->bind(':contenu',$contenu);

       

        $this->db->execute();
       
    }


    public function getJustificatif($id)
    {
        $this->db->query("SELECT * FROM justificatifs WHERE idtrans=:id");
        $this->db->bind(':id',$id );
        $result= $this->db->single();
        return $result;

    }




}


?>