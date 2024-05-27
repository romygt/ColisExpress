





<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
<script src="	https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.cs" rel="stylesheet" id="bootstrap-css">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

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

<?php if($_SESSION['transporteur'] =='no'):?>
<div class="container d-flex justify-content-center">
    <div class="card rounded">
        <div class=" d-block justify-content-center">
            <div class="area1 p-3 py-5"> </div>
            <div class="area2 p- text-center px-3">
                <div class="image mr-3"> <img src="https://cdn.iconscout.com/icon/premium/png-256-thumb/profile-2673119-2217781.png" class="rounded-circle" width="100" />
                    <h4 class=" name mt-3 "><?php echo $data['transactionsclient'][0]->username ?></h4>
                    </br>
                    <p class="information mt-3 text-justify">Numero de téléphone :<?php echo $data['transactionsclient'][0]->numtelephone ?> </p>
                    <p class="information mt-3 text-justify"> Email :<?php echo $data['transactionsclient'][0]->email ?> </p>
                    <?php if( $data['transactionsclient'][0]->transporteur =='oui'  ):?>
                        <p class="information mt-3 text-justify"> Type de transport : Transporteur non certifié</p>
                     <?php else:?>
                        <p class="information mt-3 text-justify"> Type de transport : Transporteur certifié</p>

                    <?php endif;?>
                
                    <div class="d-flex justify-content-center mt-5">
                        <ul class="list-icons">
                            <li > <button id="button" type="button" class="facebook" data-toggle="modal" data-target="#Signaler">
                            <i class="fa fa-facebook">Signaler</i></button></li>
                            <li > <button type="button" id="button" class="instagram" data-toggle="modal" data-target="#Noter">
                            <i class="fa fa-facebook">Noter</i></button></li>
                        </ul>
                    </div>
                </div>
                <div> </div>
            </div>
        </div>
    </div>
</div>

<?php else:?>
  <div class="container d-flex justify-content-center">
    <div class="card rounded">
        <div class=" d-block justify-content-center">
            <div class="area1 p-3 py-5"> </div>
            <div class="area2 p- text-center px-3">
                <div class="image mr-3"> <img src="https://cdn.iconscout.com/icon/premium/png-256-thumb/profile-2673119-2217781.png" class="rounded-circle" width="100" />
                    <h4 class=" name mt-3 "><?php echo $data['transactionstransporteur'][0]->username ?></h4>
                    </br>
                    <p class="information mt-3 text-justify">Numero de téléphone :<?php echo $data['transactionstransporteur'][0]->numtelephone ?> </p>
                    <p class="information mt-3 text-justify"> Email :<?php echo $data['transactionstransporteur'][0]->email ?> </p>
                   
                    <div class="d-flex justify-content-center mt-5">
                        <ul class="list-icons">
                            <li > <button id="button" type="button" class="facebook" data-toggle="modal" data-target="#Signaler">
                            <i class="fa fa-facebook">Signaler</i></button></li>
                            <li > <button type="button" id="button" class="instagram" data-toggle="modal" data-target="#Noter">
                            <i class="fa fa-facebook">Noter</i></button></li>
                    
                    </div>
                </div>
                <div> </div>
            </div>
        </div>
    </div>
</div>

<?php endif;?>


<!-- Button trigger modal -->


<!-- Modal Signalement-->

           
<div class="modal fade" id="Signaler" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Signalemnt de l'utilisateur</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="<?php echo URLROOT; ?>/Users/signalerUtilisateur?id=<?php echo $data['transactionsclient'][0]->idtrans?>" method="POST" >
      <div class="modal-body">
        Voulez-vous vraiment le signaler ?
        <textarea name='contenu' 
   rows="7" cols="40">Vous pouvez écrire ici.</textarea>
      </div>
      
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary"  >Oui</button>
        
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
       </div> 
      </form>
      </div>
    </div>
  </div>
</div>



<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="Noter" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Notation de l'utilisateur</h5>
        <button type="button" class="close" data-dismiss="modaln" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

      <form action="<?php echo URLROOT; ?>/Users/noterTransporteur" method="POST" >
       Veuillez introduire la note que vous voulez appliquer sur le transporteur

      <select name="note">
        <option >--Please choose a mark--</option>
        <option value="0">  0/10 </option> 
        <option value="1">  1/10 </option>
        <option value="2">  2/10 </option>
        <option value="3">  3/10 </option>
        <option value="4">  4/10 </option>
        <option value="5">  5/10 </option>
        <option value="6">  6/10 </option>
        <option value="7">  7/10 </option>
        <option value="8">  8/10 </option>
        <option value="9">  9/10 </option>
        <option value="10"> 10/10 </option>
        </select>
        <?php if($_SESSION['transporteur'] =='no'):?>
        <input name='idtransp' value="<?php  echo $data['transactionsclient'][0]->id_transporteur?>" type='hidden' />
        <?php else: ?>
          <input name='idtransp' value="<?php  echo $data['transactionstransporteur'][0]->iduser?>" type='hidden' />

          <?php endif; ?>


        <input name='idtrans' value="<?php echo $data['transactionsclient'][0]->idtrans?>" type='hidden' />

        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
        <button type="submit" class="btn btn-primary" >Oui</button>

       
      </div>
      </form>
    </div>
  </div>
</div>


<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="exampleModaln" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Signalemnt de l'utilisateur</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <label  >Volume du colis</label>
   
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modaln">Annuler</button>
        <button type="button" class="btn btn-primary"  onclick="location.href= '<?php echo URLROOT; ?>/Users/signalerUtilisateur?id=<?php echo $data['transactionsclient'][0]->idtrans?>'">Oui</button>
      </div>
    </div>
  </div>
</div>






<style>
body {
    background-color: #E6E6FA;
}

.container{

    margin-top:20%;
}

.card {
    width: 400px;
    border: none;
    border-radius: 14px !important

}

.area1 {
    background-color: #FFCC00;
    border-top-left-radius: 14px !important;
    border-top-right-radius: 14px !important;
    padding-top: 83px !important
}

.image {
    top: -62px;
    position: relative
}

.image img {
    box-shadow: 5px 6px 6px 2px #e9ecef
}

.area2 {
    background-color: #F8F8F8;
    border-bottom-left-radius: 14px !important;
    border-bottom-right-radius: 14px !important
}

.name {
    font-size: 25px;
    font-weight: 650
}

.information {
    color: #9FA8DA;
    font-weight: 500;
    font-size: 16px
}

.list-icons {
    display: inline-flex;
    color: white;
}

.list-icons li {
    list-style: none;
   
}

.list-icons li i {
    font-size: 17px;
    color: #fff
}

@media (max-width:700px) {
    .list-icons {
        display: block
    }
}



#button{

    padding: 12px;
    border-radius: 10px;
    width: 100px;
    margin-right: 10px
    
}

.facebook {
    background: #3b5998;
  
}

.instagram {
    background: #FF0066;
}


</style>