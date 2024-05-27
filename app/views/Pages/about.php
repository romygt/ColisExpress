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

  <div id="h">
    <div class="container">
      <div class="row">
        <div class="col-md-8 col-md-offset-2">
          <h1>Bienvenue dans notre site!</h1>
          <h5>  VOYAGEZ AU TOUR DU MONDE ENTIER Á TRAVERS LE MONDE DES COLIS </h5>
          <h2>Avec Home Delivey, Delivrez a travers toute l'Algerie</h2>
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
    <div class="row">
      <div class="col-md-6">
        <h2>On travaille jours et nuit pour votre satisfaction</h2>
        <BR/>
        <h4>Voyagez a travers le monde avec home delivery.</h4>

        Selon l'heure à laquelle vous passez votre commande et si l'article est en stock dans l'un des centres de distribution européens, la commande sera expédiée le jour même et, selon le temps de transit nécessaire, vous sera livrée dans les 2 à 5 jours, du lundi au samedi, ainsi que le dimanche dans les zones éligibles.

Pour les membres du programme Amazon Prime, la livraison Express est proposée gratuitement sur les articles éligibles se trouvant dans l'un des centres de distribution européens. Si vous n'êtes pas membre Amazon Prime, la livraison Express sera facturée et les frais de livraison vous seront indiqués avant de valider votre commande. Ils s'élèvent à 5,99 EUR par envoi pour les articles media (Livres, Musique, DVD, Logiciel et Jeux vidéo) et 7,99 EUR par envoi pour les autres articles éligibles. Pour en savoir plus à propos des avantages de livraison d'Amazon Prime, consultez notre page :
        <p><button class="btn btn-conf btn-blue">Learn More</button></p>
      </div>
      <!--/col-md-6-->
      <div class="col-md-6">
      

            <video style="" width="600" height="400" controls width="500" class="aligncenter">
            <source src="<?php echo URLROOT ?>/public/img/video.mp4" type="video/mp4" >
            <source src="<?php echo URLROOT ?>/public/img/video.mp4" type="video/ogg">
            Your browser does not support the video tag.
            </video>
      </div>
      <!--/col-md-6 -->
    </div>
    <!--/row-->
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
</html>
