<?php

class Admin {

    private $db;

    public function __construct()
    {
      $this->db =new Database;

    }

    public function loginadmin($username , $password)
    {

        $this->db->query('SELECT * FROM admins WHERE username= :username');
        $this->db->bind(':username',$username);

        $row = $this->db->single();
        
            
         
             if($row != null){
                $getPassword = $row->password;
             }else {
                $getPassword = '';
             }
           
          
        if( $getPassword ==  $password)
        {
            return $row;


        }else{


            return false;
        }

    }
    


}


?>