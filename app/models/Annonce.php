<?php

class Annonce{

    private $db;

    public function __construct()
    {
      $this->db =new Database;

    }

    public function getAnnonces()
    {
        $this->db->query('SELECT * , wildep.nomwilaya as wilayadepart, wilarv.nomwilaya as wilayaarrive FROM annonces 
        INNER JOIN volume ON annonces.fourchettevolume = volume.idvolume 
        INNER JOIN poid ON annonces.fourchettepoid = poid.idpoid
        INNER JOIN typetransport ON typetransport.idtransport = annonces.transporttype
        INNER JOIN users ON users.iduser = annonces.userid
        INNER JOIN wilayas as wildep ON wildep.idwilaya  = annonces.pointdepart
        INNER JOIN wilayas as wilarv ON wilarv.idwilaya  = annonces.pointarrive' );
        $result= $this->db->resultSet();
        return $result;

    }

   


    public function setAnnonce($data)
    {
        $this->db->query('INSERT INTO annonces (pointdepart, pointarrive,transport,transporttype,fourchettepoid,fourchettevolume,userid,Etat,prix,date,enonce) VALUES (:pointdepart, :pointarrive, :transport, :transporttype, :fourchettepoid, :fourchettevolume, :userid, :Etat, :prix, Now(),:enonce)');
        $this->db->bind('pointdepart',$data['pointdepart']);
        $this->db->bind(':pointarrive',$data['pointarrive']);
        $this->db->bind(':transport',$data['transport']);
        $this->db->bind(':transporttype',$data['transporttype']);
        $this->db->bind(':fourchettepoid',$data['fourchettepoid']);
        $this->db->bind(':fourchettevolume',$data['fourchettevolume']);
        $this->db->bind(':userid',$data['user_id']);
        $this->db->bind(':enonce',$data['enonce']);
        $this->db->bind(':Etat','En attente');
        $this->db->bind(':prix','');

       

        if($this->db->execute()){
            return true ;
        }else{

            return false;
        }

    }



    public function findAnnonceById($id)
    {
        $this->db->query('SELECT * , wildep.nomwilaya as wilayadepart, wilarv.nomwilaya as wilayaarrive FROM annonces 
        INNER JOIN volume ON annonces.fourchettevolume = volume.idvolume 
        INNER JOIN poid ON annonces.fourchettepoid = poid.idpoid
        INNER JOIN typetransport ON typetransport.idtransport = annonces.transporttype
        INNER JOIN wilayas as wildep ON wildep.idwilaya  = annonces.pointdepart
        INNER JOIN wilayas as wilarv ON wilarv.idwilaya  = annonces.pointarrive
        WHERE idannonce = :idannonce ' );
         
        $this->db->bind(':idannonce',$id);

        $row =$this->db->single();
          
       
            return $row;




    }

    public function updateEtatAnnonce($id,$etat){

        $this->db->query("UPDATE `annonces` SET `Etat` = :etat WHERE `idannonce` = :idannonce ");
         
        $this->db->bind(':etat',$etat);
        $this->db->bind(':idannonce',$id);
        

        $this->db->execute();


    }
  
    public function updateAnnonce($data){

         

        $this->db->query(" UPDATE annonces

        SET pointdepart= :pointdepart, pointarrive= :pointarrive, transport = :transport, transporttype= :transporttype, fourchettepoid= :fourchettepoid, fourchettevolume= :fourchettevolume 
       
        WHERE idannonce= :idannonce ");
        
        $this->db->bind(':pointdepart',$data['pointdepart']); 
        $this->db->bind(':pointarrive',$data['pointarrive']); 
        $this->db->bind(':transport', $data['transport']);
        $this->db->bind(':transporttype',$data['transporttype']);
        $this->db->bind(':fourchettepoid',$data['fourchettepoid']);
        $this->db->bind(':fourchettevolume',$data['fourchettevolume']);
        $this->db->bind(':idannonce',$data['idannonce']);
        
       if( $this->db->execute()){

            return true;

       }else{return false ; };
        




    }

    public function supprimerAnnonces($idannonce){
        
        $this->db->query("DELETE FROM transactions WHERE id_annonce= :idannonce");
        $this->db->bind(':idannonce',$idannonce);
        $this->db->execute();

        $this->db->query("DELETE FROM annonces WHERE idannonce= :idannonce");
        $this->db->bind(':idannonce',$idannonce);
        $this->db->execute();
      



    }
    

    


}


?>