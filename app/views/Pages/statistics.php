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






<div id="section-landing">


<?php
    require APPROOT . '/views/includes/navigation.php';
?>
  

</div>

</br></br></br></br></br></br></br></br>
<body>

  <div id="h">
    <div class="container">
      <div class="row">
        <div class="col-md-8 col-md-offset-2">
          <h1>Statistics</h1>
          <h5>VOYAGEZ AU TOUR DU MONDE ENTIER Á TRAVERS LE MONDE DES COLIS</h5>
          <h2>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</h2>
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

      <center> <h2>Nos chiffres</h2></center>

  <div id="g">
    <div class="container">
      
      <!--/row-->

      <div class="row ">
        <div  class="block">
        <h1 style=" font-weight: bold;">+3000 Annonces</h1>
        </div>
        <div  class="block">
        <h1 style=" font-weight: bold;">+2000 Transporteurss</h1>
        </div>
        <div class="block">
        <h1 style=" font-weight: bold;">+2000 Chauffeurs</h1>
        </div>
      </div>
      <!--/row-->
    </div>
    <!--/container-->
  </div>
  <!--/div-->
  <style>
        .row {
      width: 100%;
      display: flex;
      flex-direction: row;
      justify-content: center;
          }
        .block {
          display: block;
    padding: 30px;
    text-align: justify;
    margin-top: 20px;
   
  
   

        }

    </style>



  
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
</html>
