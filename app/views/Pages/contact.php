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
          <h1>Contact Us</h1>
          <h5>VOYAGEZ AU TOUR DU MONDE ENTIER Á TRAVERS LE MONDE DES COLIS</h5>
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
        <h2>N'hesitez pas á nous contacter.</h2>
        <BR/>
      

        <p>C’est un jour spécial puisque l’entreprise a déjà 5 ans ! De beaux projets réalisés, quelques défaites mais surtout de très belles victoires, et c’est en grande partie grâce à vous ! Je tenais à vous remercier car c’est vous qui construisez l’entreprise au quotidien. Et ce n’est pas fini…Car bonne nouvelle, j’ai l’immense honneur de vous annoncer le lancement de 2 nouveaux produits d’ici quelques mois. De nouveaux défis et des rêves bientôt réalisés. </p>
        <p><button style="  color:#fff background-color: #ffa500" class="btn btn-conf btn-blue">Learn More</button></p>
      </div>
      <!--/col-md-6-->
      <div class="col-md-6">
      <img width="600" height="400" controls width="500" class="aligncenter" src="<?php echo URLROOT ?>/public/img/contact.jpeg" >

      </div>
      <!--/col-md-6 -->
    </div>
    <!--/row-->
  </div>
  <!--/container-->

  <div id="g">
    <div class="container">
      <div class="row centered">
        <h1>Subscribe to stay informed</h1>
        <div class="col-md-6 col-md-offset-3">
          <form role="form" action="register.php" method="post" enctype="plain">
            <input type="email" name="email" class="subscribe-input" placeholder="Enter your e-mail address..." required>
            <button class='btn btn-conf btn-blue' style="  background-color: #ffa500" type="submit">Subscribe</button>
          </form>
        </div>
      </div>
      <!--/row-->

      <div class="row mt">
        <div class="col-md-3">
          <h4>SOCIAL MEDIA</h4>
          <p>
            <a href="#"><i class="ion-social-twitter"></i></a>
            <a href="#"><i class="ion-social-instagram"></i></a>
            <a href="#"><i class="ion-social-facebook"></i></a>
            <a href="#"><i class="ion-social-dribbble"></i></a>
          </p>
        </div>
        <div class="col-md-5">
          <h4>ABOUT COON</h4>
          <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters.</p>
        </div>
        <div class="col-md-4">
          <h4>CONTACT INFORMATION</h4>
          <p>
            HomeDelivery@gmail.com<br/> Rue de la MECCE, <br/> Kouba, Alger.
          </p>
        </div>
      </div>
      <!--/row-->
    </div>
    <!--/container-->
  </div>
  <!--/div-->


  <div id="contact">
    <div class="container">
      <div class="row">
        <div class="col-md-8 col-md-offset-2">
          <h2 class="centered">Contact Form</h2>
          <form class="contact-form php-mail-form" role="form" action="contactform/contactform.php" method="POST">

            <div class="form-group">
              <input type="name" name="name" class="form-control" id="contact-name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" >
              <div class="validate"></div>
            </div>
            <div class="form-group">
              <input type="email" name="email" class="form-control" id="contact-email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email">
              <div class="validate"></div>
            </div>
            <div class="form-group">
              <input type="text" name="subject" class="form-control" id="contact-subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject">
              <div class="validate"></div>
            </div>

            <div class="form-group">
              <textarea class="form-control" name="message" id="contact-message" placeholder="Your Message" rows="5" data-rule="required" data-msg="Please write something for us"></textarea>
              <div class="validate"></div>
            </div>

            <div class="loading"></div>
            <div class="error-message"></div>
            <div class="sent-message">Your message has been sent. Thank you!</div>

            <div class="form-send">
              <button type="submit" style="  background-color: #ffa500" class="btn btn-large">Send Message</button>
            </div>

          </form>

        </div>
      </div>
    </div>
  </div>
  <!-- / contact -->

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
