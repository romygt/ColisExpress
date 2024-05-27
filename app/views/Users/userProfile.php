<?php 
  require APPROOT . '/views/includes/head.php';

?>


<div id="logo-landing">

  <h3 class="btn-login"><a href="<?php echo URLROOT; ?>/Users/logout">Log out</a></h3>

<img  id="logoimg" src="<?php echo URLROOT ?>/public/img/logo.png" alt="" height="140%"  >
  

</div>

<div id="section-landing">


<?php
    require APPROOT . '/views/includes/navigation.php';
?>
</div>

</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>




<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
<script src="	https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.cs" rel="stylesheet" id="bootstrap-css">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

  <link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
<link rel="stylesheet" href="style.css" >
<!------ Include the above in your HEAD tag ---------->

<!--
-->

<div class="container">
    <div class="row profile">
		<div class="col-md-3">
			<div class="profile-sidebar">
				<!-- SIDEBAR USERPIC -->
				<div class="profile-userpic">
					<img src="https://cdn.iconscout.com/icon/premium/png-256-thumb/profile-2673119-2217781.png" class="img-responsive" alt="">
				</div>
				<!-- END SIDEBAR USERPIC -->
				<!-- SIDEBAR USER TITLE -->
				<div class="profile-usertitle">
					<div class="profile-usertitle-name">
          <?php echo $_SESSION['username'] ?>
					</div>
					<div class="profile-usertitle-job">
						<?php if(  ($_SESSION['transporteur'] == 'yes') && ($_SESSION['etat'] == 'Valide') ){echo 'Transporteur';}
                    elseif (( $_SESSION['transporteur'] == 'yes')  &&  ($_SESSION['etat'] == 'Certifie')){
                      echo 'Transporteur Certifie';}
                      else{ echo 'Client';} 
                      ?>
            
             


                   
					</div>
				</div>
				<!-- END SIDEBAR USER TITLE -->
				<!-- SIDEBAR BUTTONS -->
				<div class="profile-userbuttons">
					<button type="button" class="btn btn-success btn-sm">Follow</button>
					<button type="button" class="btn btn-danger btn-sm">Message</button>
				</div>
				<!-- END SIDEBAR BUTTONS -->
				<!-- SIDEBAR MENU -->
				<div class="profile-usermenu">
					<ul class="nav">
						<li class="active">
							<a href="#">
							<i class="glyphicon glyphicon-eye-open"></i>
							 Nombre de vues --  <?php echo $_SESSION['visiteur'] ?></a>
						</li>
						<li>
							<a href="#">
							<i class="glyphicon glyphicon-bookmark"></i>
							 Ma Note -- <?php echo $_SESSION['note']?> </a>
						</li>
					
            
              <?php if($_SESSION['transporteur'] == 'yes') : ?>
						<li>
							<a href="#">
							<i class="glyphicon glyphicon-flag"></i>
							 Statut <?php echo    $_SESSION['etat'] ?> </a>
                 
               <?php if ( $_SESSION['transporteurcertifie'] == 'yes' ) : ?>
                 <?php    switch ( $_SESSION['etat']) {
                  
                 
                  case "Valide":
                    echo '<li>';
                    echo '<a href="#">';
                    echo '<i class="glyphicon glyphicon-paperclip"></i>';
                    echo 'Veuillez-vous présenter á notre  
                    direction accompagé des documents suivants:' ;
                    echo '</a>';
                    echo '</li>';
                    
                    echo '<ol class="profile-usertitle-job">';
                    
                    foreach($data['documents'] as $document){
                      echo '<li>';
                     
                      echo $document ->nom_document;
                      echo '</li>'; 
                    };
                   
                    echo '<ol>';
                    break;
                  case "Refusé":
                    echo "Votre demande a été refusé en raison de \n".$data['justificatif'];
                    break;
                  
                } ?>
                 <?php endif; ?>

						</li>
            <?php endif; ?>
          
					</ul>
				</div>
				<!-- END MENU -->
			</div>
		</div>
		<div class="col-md-9">
            <div class="profile-content">
			  
    <h2>Mes annonces</h2>
<div class="table-wrapper">

    <table class="fl-table">
        <thead>
        <tr>
            
            <th>Annonce</th> 
            <th>Prix</th>
            <th>Etat de l'annonce</th>
            <th>Modifier</th>
            <th>Supprimer</th>
        </tr>
        </thead>
        <tbody>
          
        <?php $i=0?>
        <?php foreach($data['annonces'] as $annonce): ?>
          <?php if( $_SESSION['user_id']==$annonce->userid ): ?>

        <tr>

            <th> <a href="<?php echo URLROOT; ?>/Users/detailAnnonce?id=<?php echo $annonce->idannonce; ?>&postule=false&contenu=1">Annoce <?php echo ++$i; ?></a></th>
            <td><?php echo $annonce->prix ?></td>
            <td><?php echo $annonce->Etat ?></td>
            <?php if( $annonce->Etat =='En attente') :?>
            <td><input class='button1' type='button' onclick="location.href= '<?php echo URLROOT; ?>/Users/modifierAnnonce?idannonce=<?php echo $annonce->idannonce?>'" alt=""  value="Modifier"/></td>
              <?php endif ;?>

              <?php if( $annonce->Etat =='En attente') :?>
            <td><input class='button1' type='button' onclick="location.href= '<?php echo URLROOT; ?>/Users/supprimerAnnonce?idannonce=<?php echo $annonce->idannonce?>'" alt=""  value="Supprimer"/></td>
              <?php endif ;?>
            
        </tr>
        <?php endif;?>
        <?php endforeach ?>
        <tbody>
    </table>
  
</div>





<?php if( ($_SESSION['transporteur']=='no') && ($_SESSION['transporteurcertifie']=='no')): ?>

<h2>Mes Transactions</h2>
<div class="table-wrapper">

<table class="fl-table">
    <thead>
    <tr>
        
        <th>Annonce</th>
        <th>profile Transporteur</th>
        <th>Ma Réponse</th>
        <th>Réponse transport</th>
        <th>Confirmer la transaction</th>
       

    </tr>
    </thead>
    <tbody>
    <?php $i=0?>
    <?php foreach($data['transactionsclient'] as $transaction): ?>
      <?php if( $_SESSION['user_id']== $transaction->userid ): ?>

    <tr>

        <th><a href="<?php echo URLROOT; ?>/Users/detailAnnonce?id=<?php echo $transaction->idannonce; ?>&contenu=1">Annoce<?php echo ++$i; ?></a></th>
        
        <td><a href="<?php echo URLROOT; ?>/Users/userdetails?id=<?php echo $transaction->idtrans; ?>&signaler=true">transporteur<?php echo $i; ?> </a> </td>
        <td><?php echo $transaction->Avisclient?></td>
        <td><?php echo $transaction->Avistrans?></td>

        <?php if($transaction->Avistrans =='En Attente' && ($transaction->Avisclient !='Confirme')) :?>
            <td><input class='button1' type='button' onclick="location.href='<?php echo URLROOT; ?>/Users/confirmerClient?idtrans=<?php echo $transaction->idtrans ?>'" alt="Confirmer"  value="Confirmer"/></td>
        <?php endif ;?>
       
       
        
    </tr>
    <?php endif;?>
    <?php endforeach; ?>
    <tbody>
</table>

</div>


<?php endif;?>




<?php if( ($_SESSION['transporteur']=='yes') ||($_SESSION['transporteurcertifie']=='yes')): ?>

<h2>Mes Transactions</h2>
<div class="table-wrapper">

<table class="fl-table">
    <thead>
    <tr>
        
    <th>Annonce</th>
        <th>profile Client</th>
        <th>Ma Réponse</th>
        <th>Réponse Client</th>
        <th>Confirmer la transaction</th>
       

    </tr>
    </thead>
    <tbody>
      
    
    <?php foreach($data['transactionstransporteur'] as $transaction): ?>
      <?php if( $_SESSION['user_id']== $transaction->id_transporteur ): ?>

        <tr>

        <th><a href="<?php echo URLROOT; ?>/Users/detailAnnonce?id=<?php echo $transaction->idannonce; ?>&postule=false&contenu=1">Annoce<?php echo ++$i; ?></a></th>

        <td><a href="<?php echo URLROOT; ?>/Users/userdetails?id=<?php echo $transaction->idtrans; ?>&signaler=true">Client<?php echo $i; ?> </a> </td>
        <td><?php echo $transaction->Avisclient?></td>
        <td><?php echo $transaction->Avistrans?></td>

        <?php if(($transaction->Avisclient =='Confirme')&&($transaction->Avistrans =='En Attente')) :?>
            <td><input class='button1' type='button' onclick="location.href='<?php echo URLROOT; ?>/Users/confirmerTransporteur?idtrans=<?php echo $transaction->idtrans ?>&idannonce=<?php echo $transaction->id_annonce?>'" alt="Confirmer"  value="Confirmer"/></td>
        <?php endif ;?>

      </tr>
    <?php endif;?>
    <?php endforeach; ?>
    <tbody>
</table>

</div>


<?php endif;?>

            </div>
		</div>
	</div>
</div>

<br>
<br>




<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@2.0.7/css/boxicons.min.css">

<div  class="container">
<div class="row row-cols-1 row-cols-lg-2 row-cols-xl-4">


     
        
        <?php foreach($data['annonces'] as $annonce): ?>
          <?php if( $_SESSION['user_id']==$annonce->userid ): ?>
            <?php foreach($data['wilayatransporteur'] as $trans): ?>
              <?php if(  (($annonce->Etat=='Valide') && ($annonce->Etat!='Termine'))&&(($trans->etat=='Valide')||($trans->etat=='Certifie')) &&(($annonce->wilayaarrive== $trans->wilayaarrive)&&($annonce->wilayadepart== $trans->wilayadepart))): ?>
              
                <?php if ((($annonce->nomtranstype !='Coliers legers') && ($annonce->nomtranstype !='Lettre'))&& ( ($trans->transporteurcertifie=='no') ||( ($trans->transporteurcertifie=='yes') && ($trans->etat=='Valide') ) )){$enter=false;}else{$enter=true;} ?>
               <?php if ($enter == true):?>

               <div class="col-lg-3 col-md-2 col-sm-12">
            <div class="card radius-15">
              <div class="card-body text-center">
                <div class="p-4 border radius-15">
                  <img src="https://cdn.iconscout.com/icon/premium/png-256-thumb/profile-2673119-2217781.png" width="110" height="110" class="rounded-circle shadow" alt="">
                <h5 class="mb-0 mt-5"><a> <?php echo $trans->username ?> </a></h5>
                  <th> <a href="<?php echo URLROOT; ?>/Users/detailAnnonce?id=<?php echo $annonce->idannonce; ?>&postule=false">Annoce</a></th>

                  <div class="list-inline contacts-social mt-3 mb-3"> <a href="javascript:;" class="list-inline-item bg-facebook text-white border-0"><i class="bx bxl-facebook"></i></a>
                    <a href="javascript:;" class="list-inline-item bg-twitter text-white border-0"><i class="bx bxl-twitter"></i></a>
                    <a href="javascript:;" class="list-inline-item bg-linkedin text-white border-0"><i class="bx bxl-linkedin"></i></a>
                  </div>
                  <div class="d-grid"> <a href="<?php echo URLROOT; ?>/Users/postulerAnnonce?trans=<?php echo false;?>&id=<?php echo $annonce->idannonce;?>&idclt=<?php echo $trans->idtransporteur;?>" class="btn btn-outline-primary radius-15" >Contact Me</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <?php endif;?>
          <?php endif;?>
          <?php endforeach ?>
          <?php endif;?>
                <?php endforeach ?>
	
  </div>
</div>





<style>

body{
    background-color: #f7f7ff;
    margin-top:20px;
}
.radius-15 {
    border-radius: 15px;
}
.card {
    position: relative;
    display: flex;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: border-box;
    border: 0px solid rgba(0, 0, 0, 0);
    border-radius: .25rem;
    margin-bottom: 1.5rem;
    box-shadow: 0 2px 6px 0 rgb(218 218 253 / 65%), 0 2px 6px 0 rgb(206 206 238 / 54%);
}

element.style {
}
.list-inline-item:not(:last-child) {
    margin-right: .5rem;
}
.contacts-social a {
    font-size: 16px;
    width: 36px;
    height: 36px;
    line-height: 36px;
    background: #ffffff;
    border: 1px solid #eeecec;
    text-align: center;
    border-radius: 50%;
    color: #2b2a2a;
}
.bg-facebook {
    background-color: #3b5998!important;
}
.bg-twitter {
    background-color: #55acee!important;
}
.bg-linkedin {
    background-color: #0976b4!important;
}
/***
User Profile Sidebar by @keenthemes
A component of Metronic Theme - #1 Selling Bootstrap 3 Admin Theme in Themeforest: http://j.mp/metronictheme
Licensed under MIT
***/

body {
  background: #F1F3FA;
}

/* Profile container */
.profile {
  margin: 20px 0;
}

/* Profile sidebar */
.profile-sidebar {
 
  background: #fff;
}

.profile-userpic img {
  float: none;
  margin: 0 auto;
  width: 50%;
  height: 50%;
  -webkit-border-radius: 50% !important;
  -moz-border-radius: 50% !important;
  border-radius: 50% !important;
}

.profile-usertitle {
  text-align: center;
  margin-top: 20px;
}

.profile-usertitle-name {
  color: #5a7391;
  font-size: 16px;
  font-weight: 600;
  margin-bottom: 7px;
}

.profile-usertitle-job {
  text-transform: uppercase;
  color: #5b9bd1;
  font-size: 12px;
  font-weight: 600;
  margin-bottom: 15px;
}

.profile-userbuttons {
  text-align: center;
  margin-top: 10px;
}

.profile-userbuttons .btn {
  text-transform: uppercase;
  font-size: 11px;
  font-weight: 600;
  padding: 6px 15px;
  margin-right: 5px;
}

.profile-userbuttons .btn:last-child {
  margin-right: 0px;
}
    
.profile-usermenu {
  margin-top: 30px;
}

.profile-usermenu ul li {
  border-bottom: 1px solid #f0f4f7;
}

.profile-usermenu ul li:last-child {
  border-bottom: none;
}

.profile-usermenu ul li a {
  color: #93a3b5;
  font-size: 14px;
  font-weight: 400;
}

.profile-usermenu ul li a i {
  margin-right: 8px;
  font-size: 14px;
}

.profile-usermenu ul li a:hover {
  background-color: #fafcfd;
  color: #5b9bd1;
}

.profile-usermenu ul li.active {
  border-bottom: none;
}

.profile-usermenu ul li.active a {
  color: #5b9bd1;
  background-color: #f6f9fb;
  border-left: 2px solid #5b9bd1;
  margin-left: -2px;
}

/* Profile Content */
.profile-content {
  padding: 20px;
  background: #fff;
  min-height: 460px;
}
/******************************************* */
    *{
    box-sizing: border-box;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
}

h2{
    text-align: center;
    font-size: 18px;
    text-transform: uppercase;
    letter-spacing: 1px;
    color:black;
    padding: 30px 0;
}

/* Table Styles */

.table-wrapper{
    
    box-shadow: 0px 35px 50px rgba( 0, 0, 0, 0.2 );
    margin: 10px ;
    top:50%;
    margin-bottom: 50px;
}

.fl-table {
    border-radius: 5px;
    font-size: 12px;
    font-weight: normal;
    border: none;
    border-collapse: collapse;
    width: 100%;
    max-width: 100%;
    white-space: nowrap;
    background-color: white;
}

.fl-table td, .fl-table th {
    text-align: center;
    padding: 8px;
}

.fl-table td {
    border-right: 1px solid #f8f8f8;
    font-size: 12px;
}

.fl-table thead th {
    color: #ffffff;
    background: #d6d0b8;
}


.fl-table thead th:nth-child(odd) {
    color: #ffffff;
    background: #fac70b;
}

.fl-table tr:nth-child(even) {
    background: #F8F8F8;
}

/* Responsive */

@media (max-width: 767px) {
    .fl-table {
        display: block;
        width: 100%;
    }
    .table-wrapper:before{
        content: "Scroll horizontally >";
        display: block;
        text-align: right;
        font-size: 11px;
        color: white;
        padding: 0 0 10px;
    }
    .fl-table thead, .fl-table tbody, .fl-table thead th {
        display: block;
    }
    .fl-table thead th:last-child{
        border-bottom: none;
    }
    .fl-table thead {
        float: left;
    }
    .fl-table tbody {
        width: auto;
        position: relative;
        overflow-x: auto;
    }
    .fl-table td, .fl-table th {
        padding: 20px .625em .625em .625em;
        height: 60px;
        vertical-align: middle;
        box-sizing: border-box;
        overflow-x: hidden;
        overflow-y: auto;
        width: 120px;
        font-size: 13px;
        text-overflow: ellipsis;
    }
    .fl-table thead th {
        text-align: left;
        border-bottom: 1px solid #f7f7f9;
    }
    .fl-table tbody tr {
        display: table-cell;
    }
    .fl-table tbody tr:nth-child(odd) {
        background: none;
    }
    .fl-table tr:nth-child(even) {
        background: transparent;
    }
    .fl-table tr td:nth-child(odd) {
        background: #F8F8F8;
        border-right: 1px solid #E6E4E4;
    }
    .fl-table tr td:nth-child(even) {
        border-right: 1px solid #E6E4E4;
    }
    .fl-table tbody td {
        display: block;
        text-align: center;
    }
}

    </style>



  