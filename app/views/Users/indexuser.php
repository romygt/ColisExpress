
<?php 
  require APPROOT . '/views/includes/head.php';

?>


<?php if( (!isset($_SESSION['user_id']))):?>
<div id="logo-landing">

  <h3 class="btn-login"><a href="<?php echo URLROOT; ?>/Users/login">Login</a></h3>

<img  id="logoimg" src="<?php echo URLROOT ?>/public/img/logo.png" alt="" height="140%"  >
  

</div>
<?php else:?>

  <div id="logo-landing">

  <h3 class="btn-login"><a href="<?php echo URLROOT; ?>/Users/logout">Log out</a></h3>

<img  id="logoimg" src="<?php echo URLROOT ?>/public/img/logo.png" alt="" height="140%"  >
  
<input  id='userlogo' type="image" src="<?php echo URLROOT ?>/public/img/userlogo.png" onclick="location.href='<?php echo URLROOT; ?>/Users/userprofile'"/> 

</div>

<?php endif;?>



  <style>


  #userlogo{

    margin: 0;
    padding: 0;
    position: absolute;
    left: 80%;
    top: 20%;
    width: 5%;
    height: 40%;

  }


  </style>

</div>


<div id="section-landing">


<?php
    require APPROOT . '/views/includes/navigation.php';
?>
  

</div>






<div class="signupSection">
  <div class="info">
    <h2>créez votre annonce de transport</h2>
    <i class="icon ion-ios-ionic-outline" aria-hidden="true"></i>
    <p>à partir d'ici !</p>
  </div>
  <form action="<?php echo URLROOT; ?>/Users/indexuser " method="POST" class="signupForm" name="signupform">
  </br>
 
  <h2>Votre annonce</h2>


    <ul class="noBullet">
    </br>
        <div class="fourchetteopt">
          <div class="select">
          <li>
          <label for="pet-select" >Wilaya de depart</label>

           <select  name="pointdepart" id="search_categories">
           <option value="" class="inputFields">--Please choose an option--</option>
           <?php   foreach($data['wilayas'] as $wilaya): ?>
           <option value= <?php echo $wilaya->idwilaya ?> ><?php echo  $wilaya->nomwilaya?></option>
           <?php endforeach; ?>
           </select>

          </li>
           </div>
        </div>
        </br>
        </br>

        <div class="fourchetteopt">
          <div class="select">
          <li>
          <label for="pet-select" >Wilaya d'arrive   </label>
      
        <select  name="pointarrive" id="search_categories">
        <option value="" class="inputFields">--Please choose an option--</option>
        <?php   foreach($data['wilayas'] as $wilaya): ?>
        <option value= <?php echo $wilaya->idwilaya ?> ><?php echo  $wilaya->nomwilaya?></option>
        <?php endforeach; ?>

         </select>
         </li>
           </div>
        </div>
        </br>
      </br>
      <div class="fourchetteopt">
      <div class="select">
      <li>
      <label for="pet-select" >Type de transport</label>
        <select name="transporttype" id="search_categories">
        <option value="" class="inputFields">--Please choose an option--</option>
        <?php   foreach($data['transporttype'] as $t): ?>
        <option value= <?php echo $t->idtransport ?> ><?php echo $t->nomtranstype?></option>
        <?php endforeach; ?>
        </select>
        </li>
      </div>
      </div>  
</br>              



      <li>
        <label for="password"> Moyen de transport </label>
        <input type="text" class="inputFields" name="transport" placeholder="transport" value=""  required/>
      </li>

</br>
      <div class="fourchetteopt">
      <div class="select">
      <li>
      <label for="pet-select" >Poids du colis</label>
        <select name="forchettepoid" id="search_categories">
        <option value="" class="inputFields">--Please choose an option--</option>
        <?php   foreach($data['poids'] as $poid): ?>
        <option value= <?php echo $poid -> idpoid ?> ><?php echo  $poid->nompoid?></option>
        <?php endforeach; ?>
        </select>
        </li>
      </div>
      </div>

</br>   
</br>
      <div class="fourchetteopt">
      <div class="select">
       <li>
      <label for="pet-select" >Volume du colis</label>
        <select name="forchettevolume" id="search_categories">
        <option value="" class="inputFields">--Please choose an option--</option>
        <?php   foreach($data['volumes'] as $volume): ?>
        <option value= <?php echo $volume -> idvolume ?> ><?php echo   $volume -> nomvolume ?></option>
        <?php endforeach; ?>
        </select>
        </li>
      </div>
      </div>

        </br>
        

        <div>

        <li id='c'>
        <label  id='a' for="password"> Contenu Annonce </label>
       <textarea id='a' class="inputFields" name='enonce' placeholder="Contenu annonce" cols="100" ></textarea>
       </li>

        </div>

      
      </br>
      </br>
      </br>
      </br>

       <li>
      <input name='iduser' value="<?php  echo $_SESSION['user_id'] ;?>" type='hidden' />
       </li>
      <li id="center-btn">
        <input type="submit" id="join-btn" name="join" alt="Submit" value="Submit">
      </li>
    </ul>
  </form>
  


  
</div>




</br>
</br></br></br></br></br></br></br></br></br></br> </br></br></br></br></br> </br>



<div class="page">
  <div class="container">
    <div class="left">
      <div class="login">Recherchez votre annonce</div>
      <div class="eula">et délivrez votre colis dans les brefs delais</div>
    </div>
    <div class="right">
      <svg viewBox="0 0 320 300">
        <defs>
          <linearGradient
                          inkscape:collect="always"
                          id="linearGradient"
                          x1="13"
                          y1="193.49992"
                          x2="307"
                          y2="193.49992"
                          gradientUnits="userSpaceOnUse">
            <stop
                  style="stop-color:#ffa500;"
                  offset="0"
                  id="stop876" />
            <stop
                  style="stop-color:#69f0ae;"
                  offset="1"
                  id="stop878" />
          </linearGradient>
        </defs>
        <path d="m 40,120.00016 239.99984,-3.2e-4 c 0,0 24.99263,0.79932 25.00016,35.00016 0.008,34.20084 -25.00016,35 -25.00016,35 h -239.99984 c 0,-0.0205 -25,4.01348 -25,38.5 0,34.48652 25,38.5 25,38.5 h 215 c 0,0 20,-0.99604 20,-25 0,-24.00396 -20,-25 -20,-25 h -190 c 0,0 -20,1.71033 -20,25 0,24.00396 20,25 20,25 h 168.57143" />
      </svg>
      <div class="form">
       <form action="<?php echo URLROOT; ?>/Users/indexuser?rech=vrai" method="POST">
      </br></br></br>
        <select class="input" id="mounth" name="pointdepart">
          <option value="hide"> Wilaya de départ</option>
          
          <?php   foreach($data['wilayas'] as $wilaya): ?>
                <option value= <?php echo $wilaya->idwilaya ?> ><?php echo  $wilaya->nomwilaya?></option>
                
              <?php endforeach; ?>
      </select> 
      
      </br></br></br>
      <select class="input" id="mounth" name="pointarrive">
          <option value="hide"> Wilaya d'arrivé</option>
          
          <?php   foreach($data['wilayas'] as $wilaya): ?>
                <option value= <?php echo $wilaya->idwilaya ?> ><?php echo  $wilaya->nomwilaya?></option>
                
              <?php endforeach; ?>
      </select> 
        
        <input type="submit" id="submit" value="Submit">

    </form>
      </div>
    </div>
  </div>
    </div>




</br></br></br></br></br></br></br></br></br></br> </br></br></br></br></br> </br>
 </br> </br></br></br></br></br></br></br></br></br></br></br> </br></br></br></br></br> 
 

<?php if($data['recherche']!='vrai'):?>
  <h1><center>Nos annonces</center></h1>

<div class="box">

<?php  $i=1; foreach($data['annonces'] as $annonce): ?>

  <?php  if($annonce->Etat == 'Valide'): ?>
 
  <?php  if( $i<9): ?>
    <div class="warning">
    <img src="<?php echo URLROOT ?>/public/img/deliver<?php  echo $i ?>.jpeg"
         alt="An intimidating leopard.">
    <p>Transport de <?php echo $annonce->nomtranstype ?></p>

    <?php  if( $_SESSION['transporteur']=='no'){
                  $postule=false;
                }
           else{ 
            if( ($_SESSION['transporteur']=='yes') || ($_SESSION['transporteurcertifie']=='yes')){
                 
                   if($_SESSION['etat']=='En attente'){
                    $postule='false';
                   }else {
                     if(($_SESSION['etat']=='Valide')||($_SESSION['etat']=='Refuse')){
                      if(($annonce->nomtranstype=='Coliers legers')||($annonce->nomtranstype=='Lettre') ){
                        $postule='true';
                      }else {
                        $postule='false';
                      }
                    }elseif($_SESSION['etat']=='Refuse'){
                      $postule='false';
                    }else{
                      $postule='true';    
                    }

                      }
                   


                 }


            }

            if($_SESSION['user_id']==$annonce->userid){$postule = 'false' ; }?>
    
         
    <p id='descannonce'><?php echo implode(' ', array_slice(explode(' ',  $annonce->enonce ), 0, 10)).''."\n";?><a href="<?php echo URLROOT; ?>/Users/detailAnnonce?id=<?php echo $annonce->idannonce; ?>&postule=<?php echo $postule?>&contenu=1">Lire la suite</a></p>
    </div>
    <?php endif; $i++; ?>

    <?php  endif; ?>
<?php endforeach; ?>


</div>

<?php else:?>

  
  <h1><center>Résultat de votre recherche</center></h1>
  <div class="box">

    
 
    <?php  $i=1; foreach($data['annonces'] as $annonce): ?>
      <?php  if(($annonce->	pointdepart == $data['dep']) && ($annonce->pointarrive==$data['arv']) ): ?>
      <?php  if($annonce->Etat == 'Valide'): ?>
    
      
        <div class="warning">
        <img src="<?php echo URLROOT ?>/public/img/deliver<?php  echo $i ?>.jpeg"
            alt="An intimidating leopard.">
        <p>Transport de <?php echo $annonce->nomtranstype ?></p>

        <?php  if( $_SESSION['transporteur']=='no'){
                  $postule=false;
                }
           else{ 
            if( ($_SESSION['transporteur']=='yes') || ($_SESSION['transporteurcertifie']=='yes')){
                 
                   if($_SESSION['etat']=='En attente'){
                    $postule='false';
                   }else {
                     if(($_SESSION['etat']=='Valide')||($_SESSION['etat']=='Refuse')){
                      if(($annonce->nomtranstype=='Coliers legers')||($annonce->nomtranstype=='Lettre') ){
                        $postule='true';
                      }else {
                        $postule='false';
                      }
                    }elseif($_SESSION['etat']=='Refuse'){
                      $postule='false';
                    }else{
                      $postule='true';    
                    }

                      }
                   


                 }


            }

            if($_SESSION['user_id']==$annonce->userid){$postule = 'false' ; }?>
        
            
        <p id='descannonce'><?php echo implode(' ', array_slice(explode(' ',  $annonce->enonce ), 0, 10)).''."\n";?><a href="<?php echo URLROOT; ?>/Users/detailAnnonce?id=<?php echo $annonce->idannonce; ?>&postule=<?php echo $postule?>&contenu=1">Lire la suite</a></p>
        </div>
        <?php endif; $i++; ?>

        <?php  endif; ?>
    <?php endforeach; ?>
      

        <?php if($i==1):?>

    <h4 style="color:red"><center>OOOOpss! Aucun résultat á vous afficher </center></h4>
    <?php endif ;?>
        

     
    </div>
    <?php  endif; ?>





<style>
  @import url(https://fonts.googleapis.com/css?family=Open+Sans:300);
* {
  
}

#a
{

      display:inline;
      float: left;
      margin-left:10px;
      margin-top:10px;
}

#c
{

      display:inline;
      float: left;
      margin-left:37px;
      margin-top:10px;
}


#f
{

    display:inline;
    float: left;
     
      margin-left:23px;
      margin-top:15px;
}

.signupSection {
  background: url(https://dm0qx8t0i9gc9.cloudfront.net/watermarks/image/rDtN98Qoishumwih/storyblocks-business-man-holding-box-on-the-background-of-world-map-and-packages-man-working-in-international-delivery-service-international-delivery-concept-vector-flat-design-illustration-horizontal-layout_HuMM4qzh3-_SB_PM.jpg);
  background-repeat: no-repeat;
  position: relative;
  top: 90%;
  left: 50%;
  transform: translate(-50%, -50%);
  width: 800px;
  height: 700px;
  text-align: center;
  display: flex;
  color: white;
  box-shadow: 3px 10px 20px 5px rgba(0, 0, 0, .5);
}

.info {
  width: 45%;
  background: rgba(20, 20, 20, .8);
  padding: 30px 0;
  border-right: 5px solid rgba(30, 30, 30, .8);
  h2 {
    padding-top: 30px;
    font-weight: 300;
  }
  p {
    font-size: 18px;
  }
  .icon {
    font-size: 8em;
    padding: 20px 0;
    color: rgba(10, 180, 180, 1);
  }
}

.signupForm {
  width: 70%;
  padding: 30px 0;
  background: rgba(20, 40, 40, .8);
  transition: .2s;
  h2 {
    font-weight: 300;
  }
}

.inputFields  {
  margin: 15px 0;
  font-size: 16px;
  padding: 10px;
  width: 250px;
  border: 1px solid rgba(10, 180, 180, 1);
  border-top: none;
  border-left: none;
  border-right: none;
  background: rgba(20, 20, 20, .2);
  color: white;
  outline: none;
}

.noBullet {
  list-style-type: none;
  padding: 0;
}

#join-btn {
  border: 1px solid rgba(10, 180, 180, 1);
  background: rgba(20, 20, 20, .6);
  font-size: 18px;
  color: white;
  margin-top: 20px;
  padding: 10px 50px;
  cursor: pointer;
  transition: .4s;
  &:hover {background: rgba(20, 20, 20, .8);
    padding: 10px 80px;
  }
}

.fourchetteopt{
  
  
  border-radius: 6px;
  position: relative;
  width: 20
}



.fourchetteopt .select select{
  background: transparent;
  line-height: 1;
  border: 0;
  padding: 0;
  border-radius: 0;
  width: 50%;
  position: relative;
  z-index: 2;
  font-size: 1em;
  color:black
}


.box {
  
  width:80%; padding:60px
  width:1400px; margin:0 auto;
  background: #e2e2e5;
 
  
 
}



.warning {
  
 background-color: #ff0;
 display: inline-block;
 width: 260px;
 height: 300px;
 padding: 2px;
 border: 1px ridge rgba(10, 180, 180, 1);    
 background-color: #F8F8FF;
 margin:2px;
 border-radius: 5px;
   
   
}

.warning img {
   width: 100%;
   height:50%
}

.warning p {
   font: small-caps bold 1rem sans-serif;
   text-align: center;
}

#descannonce{

 font: small-caps 0.8rem sans-serif;
   text-align: center;


}
import url('https://rsms.me/inter/inter-ui.css');
::selection {
  background: #2D2F36;
}
::-webkit-selection {
  background: #2D2F36;
}
::-moz-selection {
  background: #2D2F36;
}

.page {
  background: #e2e2e5;
  display: flex;
  flex-direction: column;
  height: calc(100% - 50px);
  position: absolute;
  place-content: center;
  width: 90%;
  margin-left: 85px;
}
@media (max-width: 1000px) {
  .page {
    height: auto;
    margin-bottom: 20px;
    padding-bottom: 20px;
   
  }
}
.container {
  display: flex;
  height: 320px;
  margin: 0 auto;
  width: 640px;
}
@media (max-width: 767px) {
  .container {
    flex-direction: column;
    height: 630px;
    width: 320px;
  }
}
.left {
  background: white;
  height: calc(100% - 40px);
  top: 20px;
  position: relative;
  width: 50%;
}
@media (max-width: 767px) {
  .left {
    height: 100%;
    left: 20px;
    width: calc(100% - 40px);
    max-height: 270px;
  }
}
.login {
  font-size: 30px;
  font-weight: 900;
  margin: 50px 40px 40px;
}
.eula {
  color: #999;
  font-size: 14px;
  line-height: 1.5;
  margin: 40px;
}
.right {
  background: #474A59;
  box-shadow: 0px 0px 40px 16px rgba(0,0,0,0.22);
  color: #F1F1F2;
  position: relative;
  width: 50%;
}
@media (max-width: 767px) {
  .right {
    flex-shrink: 0;
    height: 100%;
    width: 100%;
    max-height: 350px;
  }
}
svg {
  position: absolute;
  width: 320px;
}
path {
  fill: none;
  stroke: url(#linearGradient);;
  stroke-width: 4;
  stroke-dasharray: 240 1386;
}
.form {
  margin: 40px;
  position: absolute;
}

.input {
  background: transparent;
  border: 0;
  color: black;
  font-size: 20px;
  height: 30px;
  line-height: 30px;
  outline: none !important;
  width: 100%;
}
input::-moz-focus-inner { 
  border: 0; 
}


#submit {
  color: #707075;
  margin-top: 40px;
  transition: color 300ms;
}
#submit:focus {
  color: #f2f2f2;
}
#submit:active {
  color: #d0d0d2;
}




</style>

  





