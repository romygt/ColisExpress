
<?php 
  require APPROOT . '/views/includes/head.php';

?>



<div id="logo-landing">

  <h3 class="btn-login"><a href="<?php echo URLROOT; ?>/Users/login">Login</a></h3>

<img  id="logoimg" src="<?php echo URLROOT ?>/public/img/logo.png" alt="" height="140%"  >
  

</div>



<div id="section-landing">


<?php
    require APPROOT . '/views/includes/navigation.php';
?>
  

   <!-- Favicon-->
   <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap Icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic" rel="stylesheet" type="text/css" />
        <!-- SimpleLightbox plugin CSS-->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="<?php echo URLROOT ?>/public/css3/styles.css" rel="stylesheet" />


        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap Icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic" rel="stylesheet" type="text/css" />
        <!-- SimpleLightbox plugin CSS-->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="<?php echo URLROOT ?>/public/css3/styles.css" rel="stylesheet" />

</div>
</br></br></br></br></br></br></br></br></br></br></br>

  <!-- Portfolio-->
 <div id="portfolio">
            <div class="container-fluid p-30">
                <div class="row g-0">
                    <div class="col-lg-5 col-sm-6">
                        <a class="portfolio-box" href="<?php echo URLROOT ?>/users/transporteur" title="Project Name">
                            <img id='img' class="img-fluid" src="<?php echo URLROOT ?>/public/img3/portfolio/thumbnails/transporteur.jpeg" alt="..." />
                            <div class="portfolio-box-caption" style="  background: #ffc107;">
                                <div class="project-category text-white-50">Category</div>
                                <div class="project-name">Gestion Transporteurs</div>
                            </div>
                        </a>
                    </div>
                  
                    <div class="col-lg-5 col-sm-6">
                        <a class="portfolio-box" href="<?php echo URLROOT ?>/users/client" title="Project Name">
                            <img id='img' class="img-fluid" src="<?php echo URLROOT ?>/public/img3/portfolio/thumbnails/clients.jpeg" alt="..." />
                            <div class="portfolio-box-caption" style="  background: #ffc107;">
                                <div class="project-category text-white-50">Category</div>
                                <div class="project-name">Gestion Clients </div>
                            </div>
                        </a>
                    </div>
                  
                    
                </div>
            </div>
        </div>

        <style>
                        
                        
        #img 
           {
            float: :right;
            width:  900px;
            height: 300px;
            object-fit: cover;

        }


        #portfolio{
                
            width:  1200px;
                    
                    margin-left:150px;

        }

       

        </style>