<?php

class Users extends Controller{


    public function __construct()
    {
        $this->userModel = $this->model('User');
        $this->annonceModel = $this->model('Annonce');
        $this->transactionModel=$this->model('Transaction');
        $this->signalementModel=$this->model('Signalement');
        $this->documentModel=$this->model('Document');
        $this->wilayaModel=$this->model('Wilaya');
        $this->poidModel=$this->model('Poid');
        $this->volumeModel=$this->model('Volume');
        $this->transporttypeModel=$this->model('Transporttype');
        $this->WilayatransporteurModel=$this->model('Wilayatransporteur');
        $this->justificatifModel=$this->model('Justificatif');
        $this->adminModel=$this->model('Admin');
    }



    public function login() {
        
        $data = [
            'title' => 'Login page',
            'username' => '',
            'password' => '',
            'usernameError' => '',
            'passwordError' => ''
        ];

        //Check for post
        if($_SERVER['REQUEST_METHOD'] == 'POST') {
            //Sanitize post data
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            $data = [
                'title' => 'Login page',
                'username' => trim($_POST['username']),
                'password' => trim($_POST['password']),
                'usernameError' => '',
                'passwordError' => '',
            ];


         
            //Validate username
            if (empty($data['username'])) {
                $data['usernameError'] = 'Please enter a username.';
            }

            //Validate password
            if (empty($data['password'])) {
                $data['passwordError'] = 'Please enter a password.';
            }

            //Check if all errors are empty
            if (empty($data['usernameError']) && empty($data['passwordError'])) {
                if($this->adminModel->loginadmin( $data['username'] , $data['password']) ){
                   
                    $_SESSION['admin_id'] = $this->adminModel->loginadmin( $data['username'] , $data['password'])->idadmin;
                    header('location:' . URLROOT . '/users/admin');


                }
                else{
                $loggedInUser = $this->userModel->login($data['username'], $data['password']);

                if ($loggedInUser) {
                    $this->createUserSession($loggedInUser);
                } else {
                    $data['passwordError'] = 'Password or username is incorrect. Please try again.';

                    $this->view('users/login', $data);
                } }
            }

        } else {
            $data = [
                'title' => 'Login page',
                'username' => '',
                'password' => '',
                'usernameError' => '',
                'passwordError' => ''
            ];
        }
        $this->view('users/login', $data);
    }



    public function register() {
        $data = [
            'username' => '',
            'email' => '',
            'password' => '',
            'confirmPassword' => '',
            'wilaya' => '',
            'transporteur'=>'',
            'transporteurcertifie'=>'',
            'usernameError' => '',
            'emailError' => '',
            'passwordError' => '',
            'confirmPasswordError' => '',
            'wilayas' => $this->wilayaModel->getWilayas(),
            'numtel' => '',


        ];

      if($_SERVER['REQUEST_METHOD'] == 'POST'){
        // Process form
        // Sanitize POST data
        $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

              $data = [
                'username' => trim($_POST['username']),
                'email' => trim($_POST['email']),
                'password' => trim($_POST['password']),
                'confirmPassword' => trim($_POST['confirmPassword']),
                'transporteur'=>trim($_POST['yesnotran']),
                'transporteurcertifie'=>trim($_POST['yesnocert']),
                'wilayadepart'=>trim($_POST['wilayadepart']),
                'wilayaarrive'=>trim($_POST['wilayaarrive']),
                'usernameError' => '',
                'emailError' => '',
                'passwordError' => '',
                'confirmPasswordError' => '',
                'numtel' => trim($_POST['numtel']),
                'wilayas' => $this->wilayaModel->getWilayas(),
            ];
                   
            print_r($data);
            $nameValidation = "/^[a-zA-Z0-9]*$/";
            $passwordValidation = "/^(.{0,7}|[^a-z]*|[^\d]*)$/i";

            //Validate username on letters/numbers
            if (empty($data['username'])) {
                $data['usernameError'] = 'Please enter username.';
            } elseif (!preg_match($nameValidation, $data['username'])) {
                $data['usernameError'] = 'Name can only contain letters and numbers.';
            }

            if (empty($data['numtel'])) {
                $data['numtel'] = 'Please enter the number phone.';
            }

            //Validate email
            if (empty($data['email'])) {
                $data['emailError'] = 'Please enter email address.';
            } elseif (!filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
                $data['emailError'] = 'Please enter the correct format.';
            } else {
                //Check if email exists.
                if ($this->userModel->findUserByEmail($data['email'])) {
                $data['emailError'] = 'Email is already taken.';
                }
            }

           // Validate password on length, numeric values,
            if(empty($data['password'])){
              $data['passwordError'] = 'Please enter password.';
            } elseif(strlen($data['password']) < 6){
              $data['passwordError'] = 'Password must be at least 8 characters';
            } elseif (preg_match($passwordValidation, $data['password'])) {
              $data['passwordError'] = 'Password must be have at least one numeric value.';
            }


            //Validate confirm password
             if (empty($data['confirmPassword'])) {
                $data['confirmPasswordError'] = 'Please enter password.';
            } else {
                if ($data['password'] != $data['confirmPassword']) {
                $data['confirmPasswordError'] = 'Passwords do not match, please try again.';
                }
            }

            // Make sure that errors are empty
            if (empty($data['usernameError']) && empty($data['emailError']) && empty($data['passwordError']) && empty($data['confirmPasswordError'])) {

                // Hash password
                $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);

                //Register user from model function
                if ($this->userModel->register($data)) {
                    //Redirect to the login page
                    header('location: ' . URLROOT . '/users/login');
                } else {
                    die('Something went wrong.');
                }
            }

            

            
        }
        $this->view('users/register', $data);
    }
      


    public function createUserSession($user) {
    
        $_SESSION['user_id'] = $user->iduser;
        $_SESSION['username'] = $user->username;
        $_SESSION['email'] = $user->email;
        $_SESSION['numtelephone'] = $user->numtelephone;
        $_SESSION['transporteur'] = $user->transporteur;
        $_SESSION['transporteurcertifie'] = $user->transporteurcertifie;
        $_SESSION['visiteur'] = $user->visiteur;
        $_SESSION['note'] = $user->note;
        $_SESSION['etat'] = $user->etat;

        

        header('location:' . URLROOT . '/users/indexuser');
    }

    public function logout() {
        unset($_SESSION['user_id']);
        unset($_SESSION['username']);
        unset($_SESSION['email']);
        unset($_SESSION['numtelephone']);
        unset($_SESSION['transporteur'] );
        unset($_SESSION['transporteurcertifie']);
        unset($_SESSION['admin_id']);

        

        header('location:' . URLROOT . '/users/login');
    }



    public function indexuser(){
         

        $annonces = $this->annonceModel->getAnnonces(); 
        $data = [
            'pointdepart' => '',
            'pointarrive' => '',
            'transport' => '',
            'fourchettepoid' => '',
            'fourchettevolume' => '',
            'user_id' =>'',
            'annonces'=>$annonces,
            'wilayas' => $this->wilayaModel->getWilayas(),
            'volumes' => $this->volumeModel->getVolume(),
            'poids' => $this->poidModel->getPoids(),
            'transporttype' =>$this->transporttypeModel->getTransporttype(),
            'recherche'=>''


            ];
        


        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
      

      if($_GET['rech']=='vrai'){
        $data = [
            'recherche'=>'vrai',
            'dep' => $_POST['pointdepart'],
            'arv'=>$_POST['pointarrive'],
            'pointdepart' => '',
            'pointarrive' => '',
            'transport' => '',
            'fourchettepoid' => '',
            'fourchettevolume' => '',
            'user_id' =>'',
            'annonces'=>$annonces,
            'wilayas' => $this->wilayaModel->getWilayas(),
            'volumes' => $this->volumeModel->getVolume(),
            'poids' => $this->poidModel->getPoids(),
            'transporttype' =>$this->transporttypeModel->getTransporttype(),
           
    
        ];
       }else{

            $data = [
                'pointdepart' => trim($_POST['pointdepart']),
                'pointarrive' => trim($_POST['pointarrive']),
                'transporttype' => trim($_POST['transporttype']),
                'transport' => trim($_POST['transport']),
                'fourchettepoid' => trim($_POST['forchettepoid']),
                'fourchettevolume' => trim($_POST['forchettevolume']),
                'user_id' => trim($_POST['iduser']),
                'recherche'=>'vrai',
                'dep' => $_POST['pointdepart'],
                'arv'=>$_POST['pointarrive'],
                'enonce' =>$_POST['enonce']
            ];  
              
            if ($this->annonceModel->setAnnonce($data))
            {
             //Redirect to the login page
             header('location: ' . URLROOT . '/Users/indexuser');
         } else {
             die('Something went wrong.');
         }


        }

    
    
         
    }


         



        $this->view('Users/indexuser', $data);
    }



    public function detailAnnonce(){


        if($_SERVER['REQUEST_METHOD'] == 'GET'){
        $detannonce = $this->annonceModel->findAnnonceById($_GET['id']); 
        
        $data = ['detannonce'=> $detannonce,
                    'prix'  => $this->wilayaModel->getPrixWilayas(),
                'postule'=> $_GET['postule'],
                ];
        }
        
         
        $this->view('Users/detailAnnonce', $data);



    }
     




    public function postulerAnnonce(){

        $data = ['annonces'=>'',
        'transactionsclient'=>'',
        'transactionstransporteur'=>'',
        'Avisclient'=>'',
        'id_annonce'=>'',
        'id_transporteur'=> '',
        'Avistrans'=>'' ];

        if($_SERVER['REQUEST_METHOD'] == 'GET'){

            if($_GET['trans']==true){$Avistrans='En Attente';}else{$Avistrans='Confirme';}
            if($_GET['trans']==true){$clt=$_SESSION['user_id'];}else{ $clt=$_GET['idclt'] ; }
             
            $data = ['Avisclient'=>$Avistrans,
          'id_annonce'=>$_GET['id'],
          'id_transporteur'=> $clt,
          'Avistrans'=>'En Attente'
        ];

        $this->transactionModel->setTransactions($data); 
    }

    header('location:' . URLROOT . '/users/userProfile');
}

  public function confirmerClient()
  {
   
    $this->transactionModel->updateAvisClient( 'Confirme', $_GET['idtrans']);

    header('location:' . URLROOT . '/users/userProfile');
    
  }

  public function  refuserClient()
  {
   
    $this->transactionModel->updateAvisClient( 'Refuse', $_GET['idtrans']);

    header('location:' . URLROOT . '/users/userProfile');
    
  }




  public function confirmerTransporteur()
  {
    $this->transactionModel->updateAvisTransporteur( 'Confirme', $_GET['idtrans']);

    $this->annonceModel->updateEtatAnnonce($_GET['idannonce'],'Termine');

    header('location:' . URLROOT . '/users/userProfile');
    
  }
  
    

  public function  modifierAnnonce()
  {

    $data = [
        'pointdepart' => '',
        'pointarrive' => '',
        'transporttype' => '',
        'transport' => '',
        'fourchettepoid' => '',
        'fourchettevolume' => '',
        'user_id' =>'',
        'prix' =>'',
        'Etat' =>'',
        'annonces'=>'',
        ];

    if($_SERVER['REQUEST_METHOD'] == 'GET'){
        $annonces = $this->annonceModel->getAnnonces(); 
        $detannonce = $this->annonceModel->findAnnonceById($_GET['idannonce']); 
        $data = ['detannonce'=>$detannonce, 'annonces'=>$annonces,
        'wilayas' => $this->wilayaModel->getWilayas(),
        'volumes' => $this->volumeModel->getVolume(),
        'poids' => $this->poidModel->getPoids(),
        'transporttype' =>$this->transporttypeModel->getTransporttype()];}
        
    

       if($_SERVER['REQUEST_METHOD'] == 'POST'){

        $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
        $data = [
            'pointdepart' => trim($_POST['pointdepart']),
            'pointarrive' => trim($_POST['pointarrive']),
            'transporttype' => trim($_POST['transporttype']),
            'transport' => trim($_POST['transport']),
            'fourchettepoid' => trim($_POST['forchettepoid']),
            'fourchettevolume' => trim($_POST['forchettevolume']),
            'idannonce' => trim($_POST['idannonce'])
           ];  

     

                if ($this->annonceModel->updateAnnonce($data))
                {
                    //Redirect to the login page
                    header('location: ' . URLROOT . '/users/userProfile');
                } else {
                    die('Something went wrong.');
                }
                        
}
     
$this->view('Users/modifierAnnonce', $data);

  }
  
    
  



  

    

    
    public function userProfile()
    {

        $data = ['annonces'=>'',
              'transactionsclient'=>'',
              'transactionstransporteur'=>'' ];

        
       
        $annonces = $this->annonceModel->getAnnonces(); 

        $transaction = $this->transactionModel->getTransactionsClient(); 
        $transactionstransporteur = $this->transactionModel->getTransactionsTransporteur();
        $justificatif = $this->userModel->getJustificatif($_SESSION['user_id']);
        $documents = $this->documentModel->getDocuments();
        $Wilayatransporteur = $this->WilayatransporteurModel->getTranporteurWilayas();


        $data = ['annonces'=> $annonces,
              'transactionsclient'=> $transaction,
              'transactionstransporteur'=> $transactionstransporteur,
               'justificatif'=> $justificatif ,
                'documents'=>$documents,
                'wilayatransporteur'=>$Wilayatransporteur];

 
        $this->view('Users/userProfile', $data);


    }

    public function supprimerAnnonce(){

        if($_SERVER['REQUEST_METHOD'] == 'GET'){
        $this->annonceModel->supprimerAnnonces($_GET['idannonce']); }
        header('location:' . URLROOT . '/users/userProfile');



    }

    public function userDetails(){

        if($_SERVER['REQUEST_METHOD'] == 'GET'){
            
        $annonces = $this->annonceModel->getAnnonces(); 
        $transaction = $this->transactionModel->getTransactionsClientByID($_GET['id']); 
        $transactionstransporteur = $this->transactionModel->getTransactionsTransporteurByID($_GET['id']);
        

         
       

        $data = ['annonces'=> $annonces,
              'transactionsclient'=> $transaction,
              'transactionstransporteur'=> $transactionstransporteur ];

             
        $this->view('Users/userdetails',$data);}
       

    }
    

    public function signalerUtilisateur(){

        if($_SERVER['REQUEST_METHOD'] == 'POST'){
              
            $annonces = $this->annonceModel->getAnnonces();
            $transaction = $this->transactionModel->getTransactionsClientByID($_GET['id']); 
            $transactionstransporteur = $this->transactionModel->getTransactionsTransporteurByID($_GET['id']);

            $data = ['annonces'=> $annonces,
                    'transactionsclient'=> $transaction,
                    'transactionstransporteur'=> $transactionstransporteur ];
    
          if($_SESSION['transporteur']=='no'){
            $data = [ 'idsignaleur'=> $_SESSION['user_id'] ,
            'idsignale'=>$data['transactionsclient'][0]->iduser,
            'idannonce'=> $data['transactionsclient'][0]->id_annonce,
            'contenu'=> $_POST['contenu'] ];}else{

                $data = [ 'idsignaleur'=> $_SESSION['user_id'] ,
            'idsignale'=>$data['transactionstransporteur'][0]->iduser,
            'idannonce'=> $data['transactionstransporteur'][0]->id_annonce,
            'contenu'=> $_POST['contenu'] ];


            }

        if( $this->signalementModel->setSignalement($data)){
            header('location:' . URLROOT . '/users/userdetails?id='.$_GET['id']);
         
        } 
             
      }
     

    }

    public function noterTransporteur(){

        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $this->userModel->setNote($_POST['idtransp'],$_POST['note'] );
            header('location:' . URLROOT . '/users/userdetails?id='.$_POST['idtrans']);
            

        }


    }
     
    public function Annonce ()
    {    
        $annonces = $this->annonceModel->getAnnonces(); 
        $data = [
            'pointdepart' => '',
            'pointarrive' => '',
            'transport' => '',
            'fourchettepoid' => '',
            'fourchettevolume' => '',
            'user_id' =>'',
            'annonces'=>$annonces,
            'wilayas' => $this->wilayaModel->getWilayas(),
            'volumes' => $this->volumeModel->getVolume(),
            'poids' => $this->poidModel->getPoids(),
            'transporttype' =>$this->transporttypeModel->getTransporttype(),
            'recherche'=>''


            ];
            $this->view('Users/Annonce',$data);

    
    } 
    public function validerAnnonce(){

        $annonces = $this->annonceModel->updateEtatAnnonce($_GET['id'],'Valide'); 
        header('location:' . URLROOT . '/users/Annonce');


    }




    public function Transporteur()
    {

        
        $data=['users'=> $this->userModel->getUsers()];
        $this->view('Users/transporteur',$data);

    }

    public function validerTransporteur(){

        $this->userModel->setEtat('Valide',$_GET['id']);
        header('location:' . URLROOT . '/users/transporteur?id='.$_GET['id']);

    }

    public function banirTransporteur(){

        $this->userModel->setEtat('Bannit',$_GET['id']);
        if($_GET['trans']=='yes'){
        header('location:' . URLROOT . '/users/transporteur?id='.$_GET['id']);}
        else{
        header('location:' . URLROOT . '/users/client?id='.$_GET['id']);}
        

    }

    public function userProfileAdmin() {
        
        $data = ['annonces'=>'',
        'transactionsclient'=>'',
        'transactionstransporteur'=>'' ];

  
        
        $annonces = $this->annonceModel->getAnnonces(); 

        $transaction = $this->transactionModel->getTransactionsClient(); 
        $transactionstransporteur = $this->transactionModel->getTransactionsTransporteur();
        $documents = $this->documentModel->getDocuments();
        $Wilayatransporteur = $this->WilayatransporteurModel->getTranporteurWilayas();
        $justificatif =$this->justificatifModel-> getJustificatif( $_GET['id'] );


        $data = ['annonces'=> $annonces,
                'transactionsclient'=> $transaction,
                'transactionstransporteur'=> $transactionstransporteur,
                'justificatif'=> $justificatif ,
                'documents'=>$documents,
                'wilayatransporteur'=>$Wilayatransporteur,
                'user'=> $this->userModel->getUserById($_GET['id'])];



                $this->view('Users/userprofileadmin',$data);

      }

      public function Signalement ()
    {    
         
        $data = [
             'signalements'=>  $this->signalementModel->getSignalements()
            ];

          
            $this->view('Users/Signalement',$data);

    
    } 

    public function certifierTransporteur()
    
    {
        $this->userModel->setEtat('Certifie',$_GET['id']);

        header('location:' . URLROOT . '/Users/userProfileAdmin?id='.$_GET['id']);

    }


    public function refuserTransporteur()
    {
        $this->userModel->setEtat( 'Refuse', $_GET['id']);
        $this->justificatifModel->setJustificatif( $_GET['id'], $_POST['contenu'] );

      header('location:' . URLROOT . '/Users/userProfileAdmin?id='.$_GET['id']);
      
    }
       

    public function admin()
    {    
        
          
            $this->view('Users/admin');

    
    } 
    public function client()
    {    
        
          
        $data=['users'=> $this->userModel->getUsers()];
        $this->view('Users/client',$data);

    
    }
    
    
    public function utilisateur()
    {    
        
          
        
        $this->view('Users/utilisateur');

    
    } 

    }

  

    

  





    




?>