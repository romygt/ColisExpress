
<?php

class Signalement{

    private $db;

    public function __construct()
    {
      $this->db =new Database;

    }

    public function getSignalements()
    {
        $this->db->query("SELECT  *, signaleur.username as nomsignaleur ,signaleur.iduser as idsignaleur , signaleur.etat as etat ,signaleur.transporteur as transporteur ,signaleur.transporteurcertifie as transporteurcertifie ,signale.username as nomsignale ,signale.iduser as idsignale   FROM signalements 
        INNER JOIN annonces ON signalements.idannonce  = annonces.idannonce 
        INNER JOIN users as signaleur ON signaleur.iduser  = signalements.idsignaleur 
        INNER JOIN users as signale ON signale.iduser  = signalements.idsignale  ");


        $result= $this->db->resultSet();
        return $result;

    }


    public function setSignalement($data)
    {
        $this->db->query('INSERT INTO signalements(idsignaleur, idsignale,idannonce,contenu) VALUES (:idsignaleur, :idsignale, :idannonce, :contenu)');
        $this->db->bind('idsignaleur',$data['idsignaleur']);
        $this->db->bind(':idsignale',$data['idsignale']);
        $this->db->bind(':idannonce',$data['idannonce']);
        $this->db->bind(':contenu',$data['contenu']);

       

        if($this->db->execute()){
            return true ;
        }else{

            return false;
        }

    }



   


}


?>