<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Soon - Website Under Construction Template</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="<?php echo URLROOT ?>/public/lib/img/favicon.png" rel="icon">
  <link href="<?php echo URLROOT ?>/public/lib/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="<?php echo URLROOT ?>/public/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="<?php echo URLROOT ?>/public/lib/ionicons/css/ionicons.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="<?php echo URLROOT ?>/public/css2/styles.css" type="text/css" rel="stylesheet">

  <!-- =======================================================
    Template Name: Soon
    Template URL: https://templatemag.com/soon-website-under-construction-template/
    Author: TemplateMag.com
    License: https://templatemag.com/license/
  ======================================================= -->
</head>


<body>

    
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



<div id="section-landing">


<?php
    require APPROOT . '/views/includes/navigation.php';
?>
  

</div>

</br></br></br></br></br></br></br></br>

  <div id="h">
    <div class="container">
      <div class="row">
        <div class="col-md-8 col-md-offset-2">
          <h1>NEWS</h1>
          <h5>  Lisez le monde aujourd'hui </h5>
          <h2>et suivez l'actualite</h2>
          <div class="countdown-header">
            <div class="countdown" data-date="2018/11/15"></div>
          </div>
        </div>
      </div>
      <!--/row-->
    </div>
    <!--/container-->
  </div>
  <!--/H-->



  <div class="container ptb">

<div class="box">

<?php  $i=1; foreach($data['news'] as $new): ?>


    <div class="warning">
    <img src="<?php echo URLROOT ?>/public/img/deliver<?php  echo $i ?>.jpeg"
         alt="An intimidating leopard.">
    <p> <?php echo $new->titre ?></p>
    
         
    <p id='descannonce'> <?php echo implode(' ', array_slice(explode(' ',  $new->contenu ), 0, 20)).'....';?><a href="<?php echo URLROOT; ?>/Pages/newsdetails?id=<?php echo $new->idnews ; ?>">Lire la suite</a></p>
    </div>

<?php endforeach; ?>


</div>

  </div>
  <!--/container-->

 

  
 <div id="copyrights">
    <div class="container">
      <p>
        &copy; Copyrights <strong>Soon</strong>. All Rights Reserved
      </p>
      <div class="credits">
       
      </div>
    </div>
  </div>
  <!-- / copyrights -->

  <!-- JavaScript Libraries -->
  <script src="<?php echo URLROOT ?>/public/lib/jquery/jquery.min.js"></script>
  <script src="<?php echo URLROOT ?>/public/lib/bootstrap/js/bootstrap.min.js"></script>
  <script src="<?php echo URLROOT ?>/public/lib/php-mail-form/validate.js"></script>
  <script src="<?php echo URLROOT ?>/public/lib/countdown/jquery.plugin.min.js"></script>
  <script src="<?php echo URLROOT ?>/public/lib/countdown/jquery.countdown.min.js"></script>

  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>

</body>

<style>
  


.box {
  
   width:100%; 
   display: flex;
  flex-direction: row;
  justify-content: center;

   
  
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
    font: bolder 1.4rem sans-serif;
    text-align: center;
    color:black;
}

#descannonce{

  font: bold 1.1rem sans-serif;
    text-align: center;
    color:black;



}






</style>

  







</html>
