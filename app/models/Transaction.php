<?php

class Transaction{

    private $db;

    
    public function __construct()
    {
      $this->db =new Database;

    }

    public function getTransactionsClient()
    {
        $this->db->query("SELECT * FROM ((transactions
        INNER JOIN annonces ON transactions.id_annonce = annonces.idannonce)
        INNER JOIN users ON users.iduser = transactions.id_transporteur);");

        $result= $this->db->resultSet();
        return $result;

    }

    public function getTransactionsClientByID($id)
    {
        $this->db->query("SELECT * FROM ((transactions
        INNER JOIN annonces ON transactions.id_annonce = annonces.idannonce)
        INNER JOIN users ON users.iduser = transactions.id_transporteur)
        WHERE idtrans=:id ");

        $this->db->bind(':id',$id);
        $result= $this->db->resultSet();
        return $result;

    }

    public function getTransactionsTransporteur()
    {
        $this->db->query("SELECT * FROM ((transactions
        INNER JOIN annonces ON transactions.id_annonce = annonces.idannonce)
        INNER JOIN users ON users.iduser = annonces.userid);");

        $result= $this->db->resultSet();
        return $result;

    }

    public function getTransactionsTransporteurByID($id)
    {
        $this->db->query("SELECT * FROM ((transactions
        INNER JOIN annonces ON transactions.id_annonce = annonces.idannonce)
        INNER JOIN users ON users.iduser = annonces.userid)
        WHERE idtrans=:id;");

        $this->db->bind(':id',$id);
        $result= $this->db->resultSet();
        return $result;

    }



    public function setTransactions($data){

        $this->db->query('INSERT INTO transactions(id_annonce, id_transporteur,Avisclient,Avistrans) VALUES(:id_annonce, :id_transporteur,:Avisclient,:Avistrans)');
        $this->db->bind(':id_annonce',$data['id_annonce']);
        $this->db->bind(':id_transporteur',$data['id_transporteur']);
        $this->db->bind(':Avisclient',$data['Avisclient']);
        $this->db->bind(':Avistrans',$data['Avistrans']);

        $this->db->execute();
       

    }

    public function updateAvisClient($Avisclient,$idtrans){
        $this->db->query("UPDATE `transactions`   
        SET `Avisclient` = :Avisclient
           
        WHERE `idtrans` = :idtrans ");

        $this->db->bind(':Avisclient',$Avisclient);
        $this->db->bind(':idtrans',$idtrans);

        $this->db->execute();


    }

    public function updateAvisTransporteur($Avistrans,$idtrans){

        $this->db->query("UPDATE `transactions`   
        SET `Avistrans` = :Avistrans  
        WHERE `idtrans` = :idtrans  " );

        $this->db->bind(':Avistrans',$Avistrans);
        $this->db->bind(':idtrans',$idtrans);

        $this->db->execute();


    }


    

    


}


?>