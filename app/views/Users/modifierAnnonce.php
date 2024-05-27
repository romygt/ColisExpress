
<?php 
  require APPROOT . '/views/includes/head.php';

?>


<div id="logo-landing">

  <h3 class="btn-login"><a href="<?php echo URLROOT; ?>/Users/logout">Log out</a></h3>

<img  id="logoimg" src="<?php echo URLROOT ?>/public/img/logo.png" alt="" height="140%"  >

<input  id='userlogo' type="image" src="<?php echo URLROOT ?>/public/img/userlogo.png" onclick="location.href='<?php echo URLROOT; ?>/Users/userprofile'"/> 
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
    <h2>Modifiez votre annonce de transport</h2>
    <i class="icon ion-ios-ionic-outline" aria-hidden="true"></i>
    <p>à partir d'ici !</p>
  </div>



  <form action="<?php echo URLROOT; ?>/Users/modifierAnnonce" method="POST" class="signupForm" name="signupform">
    <h2>Votre annonce</h2>

    <ul class="noBullet">
    </br>
        <div class="fourchetteopt">
          <div class="select">
          <li>
          <label for="pet-select" >Wilaya de depart</label>

           <select  name="pointdepart" id="search_categories">
           <option value= <?php   print_r($data['detannonce']->pointdepart);?> class="inputFields"> <?php   print_r($data['detannonce']->wilayadepart);?></option>
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
        <option value=' <?php   print_r($data['detannonce']->pointarrive);  ?>' class="inputFields"> <?php  echo  $data['detannonce']->wilayaarrive  ?></option>
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
        <option value="<?php   print_r($data['detannonce']->transporttype);  ?> " class="inputFields"><?php    print_r($data['detannonce']->nomtranstype);  ?></option>
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
        <input type="text" class="inputFields" name="transport" placeholder="transport" value=<?php   print_r($data['detannonce']->transport); ?>   required/>
      </li>

</br>
      <div class="fourchetteopt">
      <div class="select">
      <li>
      <label for="pet-select" >Poids du colis</label>
        <select name="forchettepoid" id="search_categories">
        <option value="<?php   print_r($data['detannonce']->fourchettepoid);  ?>" class="inputFields"><?php   print_r($data['detannonce']->nompoid);  ?></option>
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
        <option value="<?php   print_r($data['detannonce']->fourchettevolume); ?>" class="inputFields"><?php   print_r($data['detannonce']->nomvolume);?></option>
        <?php   foreach($data['volumes'] as $volume): ?>
        <option value= <?php echo $volume -> idvolume ?> ><?php echo   $volume -> nomvolume ?></option>
        <?php endforeach; ?>
        </select>
        </li>
      </div>
      </div>
    

       <li>
      <input name='idannonce' value="<?php  echo $data['detannonce']->idannonce ;?>" type='hidden' />
       </li>

      <li id="center-btn">
        <input type="submit" id="join-btn" name="join" alt="Join" value="Modifier">
      </li>
    </ul>
  </form>
  


  
</div>




</br>
</br></br></br></br></br></br></br></br></br></br> </br></br></br></br></br> </br>











<style>
  @import url(https://fonts.googleapis.com/css?family=Open+Sans:300);
* {
  font-family: 'Open Sans', sans-serif;
}


.signupSection {
  background: url(https://dm0qx8t0i9gc9.cloudfront.net/watermarks/image/rDtN98Qoishumwih/storyblocks-business-man-holding-box-on-the-background-of-world-map-and-packages-man-working-in-international-delivery-service-international-delivery-concept-vector-flat-design-illustration-horizontal-layout_HuMM4qzh3-_SB_PM.jpg);
  background-repeat: no-repeat;
  position: relative;
  top: 90%;
  left: 50%;
  transform: translate(-50%, -50%);
  width: 800px;
  height: 600px;
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

.inputFields {
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

  font: small-caps 1rem sans-serif;
    text-align: center;


}



</style>

  





