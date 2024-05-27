<?php

class User{

    private $db;

    public function __construct()
    {
      $this->db =new Database;


    }
     

    public function getJustificatif($userid)
    {
        $this->db->query('SELECT * FROM justificatifs WHERE idtrans=:userid');
        $this->db->bind(':userid',$userid); 
        $row =$this->db->single(); 
    }

    public function getUsers()
    {
        $this->db->query("SELECT * FROM users");
        $result= $this->db->resultSet();
        return $result;

    }

    
    public function getUserById($id)
    {
        $this->db->query("SELECT * FROM users WHERE iduser=:id");
        $this->db->bind(':id',$id );
        $result= $this->db->single();
        return $result;

    }


    public function setNote($iduser,$note)

    {
        $this->db->query('SELECT visiteur,note FROM users WHERE iduser=:iduser');
         $this->db->bind(':iduser',$iduser); 
         $row =$this->db->single(); 
         $visiteur = $row->visiteur+1;
         $noteuser = ($note+($row->note))/$visiteur; 
        $this->db->query('UPDATE users SET note=:note, visiteur=:visiteur WHERE iduser=:iduser ');    
        $this->db->bind(':iduser',$iduser);
        $this->db->bind(':note',$noteuser);
        $this->db->bind(':visiteur',$visiteur);
        $this->db->execute();

    }

    public function findUserByEmail($email)
    {
        $this->db->query('SELECT * FROM users WHERE email= :email');
         
        $this->db->bind(':email',$email);

        if($this->db->rowCount()>0){
            return true ;


        }else 
        {
          return false ;

        }


    }

    public function register($data)
    {     
        
        $this->db->query('INSERT INTO users  (username,email,password,transporteur,transporteurcertifie,numtelephone,note,etat) VALUES (:username, :email, :password,:transporteur,:transporteurcertifie,:numtelephone,:note,:etat )');
        $this->db->bind(':username',$data['username']);
        $this->db->bind(':email',$data['email']);
        $this->db->bind(':password',$data['password']);
        $this->db->bind(':transporteur',$data['transporteur']);
        $this->db->bind(':transporteurcertifie',$data['transporteurcertifie']);
      
        $this->db->bind(':numtelephone',$data['numtel']);
        $this->db->bind(':note','');

         if(($data['transporteur']=='yes')||($data['transporteur']=='yes')){
        $this->db->bind(':etat','En attente');}
        else{

            $this->db->bind(':etat','');
        }
        
         
        $state=$this->db->execute();

        if(($data['wilayadepart']!="") && ($data['wilayaarrive']!="") ){
        $this->db->query('SELECT * FROM users WHERE username= :username');
        $this->db->bind(':username',$data['username']);

        $row = $this->db->single();
        $iduser = $row->iduser;

        $this->db->query('INSERT INTO wilayatransporteur (idtransporteur,wilayadepart,wilayaarrive) VALUES (:iduser, :wilayadepart, :wilayaarrive)');
        $this->db->bind(':iduser',$iduser);
        $this->db->bind(':wilayadepart',$data['wilayadepart']);
        $this->db->bind(':wilayaarrive',$data['wilayaarrive']);
        $state=$this->db->execute();
       
        }

        if($state==true){
            return true ;
        }else{

            return false;
        }

    }



    public function login($username , $password)
    {

        $this->db->query('SELECT * FROM users WHERE username= :username');
        $this->db->bind(':username',$username);

        $row = $this->db->single();
          if($row != null){
             $hashedPassword= $row->password;
          }else {
            $hashedPassword= '';
          }
        if(password_verify($password, $hashedPassword))
        {
            return $row;


        }else{


            return false;
        }

    }

    public function setEtat($etat,$id)
    {
        $this->db->query('UPDATE users SET etat=:etat WHERE iduser=:iduser ');    
        $this->db->bind(':etat',$etat);
        $this->db->bind(':iduser',$id);
        
        $this->db->execute();


    }



}


?>