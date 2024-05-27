<?php

class Wilayatransporteur{

    private $db;

    public function __construct()
    {
      $this->db =new Database;


    }
     

    public function getTranporteurWilayas()
    {
        $this->db->query('SELECT * , wildep.nomwilaya as wilayadepart, wilarv.nomwilaya as wilayaarrive FROM wilayatransporteur
        INNER JOIN users ON wilayatransporteur.idtransporteur = users.iduser
        INNER JOIN wilayas as wildep ON wildep.idwilaya  = wilayatransporteur.wilayadepart 
        INNER JOIN wilayas as wilarv ON wilarv.idwilaya  = wilayatransporteur.wilayaarrive ');
        $result= $this->db->resultSet();
        return $result;

    }

    

   


}


?>