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
  


</div>

<?php endif;?>


</div>



<div id="section-landing">


<?php
    require APPROOT . '/views/includes/navigation.php';
?>
</div>


<div class="signupSection">
  <div class="info">
    <h2> A la une avec nous </h2>
    <i class="icon ion-ios-ionic-outline" aria-hidden="true"></i>
    <p>à partir d'ici !</p>
</br>
<br>
<img src="<?php echo URLROOT ?>/public/assets/images/new.png" alt=""  >



  </div>

  <form action='<?php echo URLROOT; ?>/Users/postulerAnnonce' method="GET" class="signupForm" name="signupform">
    <h2><?php   print_r($data['news']->titre);  ?></h2>
    <ul class="noBullet">

      <li>
        <div id='a'><p  >Auteur </p></div>
        <div id='a' ><p   class="inputFields"> <?php   print_r($data['news']->auteur);  ?> </p></div>
      </li>
      
      </br>
      </br>
      </br>
      </br>

      <li>
        <div id='b'><p  >Date </p></div>
        <div id='b' ><p   class="inputFields"> <?php   print_r($data['news']->date);  ?> </p></div>
      </li>
      </br>
      </br>
      </br>
      </br>
     
      
       <li>
     
      <p  id='e' cols="100" class="inputFields1"> <?php   print_r($data['news']->contenu);  ?> </p>      
      </li>

       
    </ul>
  </form>
 
  


  
</div>




</br>
</br></br></br></br></br></br></br></br></br></br> </br></br></br></br></br> </br>
</br></br></br></br></br> </br></br>




<style>
  @import url(https://fonts.googleapis.com/css?family=Open+Sans:300);
* {
  font-family: 'Open Sans', sans-serif;
}


.signupSection {
  background: url(https://images.pexels.com/photos/3837464/pexels-photo-3837464.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940);
  background-repeat: no-repeat;
  position: relative;
  top: 75%;
  left: 50%;
  transform: translate(-50%, -50%);
  width: 800px;
  height: 500px;
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
  width: 270px;
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
  margin-top: 70px;
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

#a
{

    display:inline;
    float: left;
      padding: 40 px;
      margin-left:40px;
      margin-top:10px;
}

#b
{

    display:inline;
    float: left;
      padding: 37 px;
      margin-left:50px;
      margin-top:10px;
}

#c
{

    display:inline;
    float: left;
     
      margin-left:50px;
      margin-top:10px;
}

#d
{

    display:inline;
    float: left;
     
      margin-left:12px;
      margin-top:10px;
}

#e
{

    display:inline;
    float: left;
     
      margin-left:110px;
      margin-top:10px;
}

#f
{

    display:inline;
    float: left;
     
      margin-left:23px;
      margin-top:15px;
}

.inputFields1 {
  margin: 15px 0;
  font-size: 16px;
  padding: 10px;
  width: 300px;
  border: 1px solid rgba(10, 180, 180, 1);
  border-top: none;
  border-left: none;
  border-right: none;
  background: rgba(20, 20, 20, .2);
  color: white;
  outline: none;
}




</style>

  
