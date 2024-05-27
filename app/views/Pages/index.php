
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





<div id="section-landing">


<?php
    require APPROOT . '/views/includes/navigation.php';
?>
  

</div>

<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="<?php echo URLROOT ?>/public/img/landing_back.jpg"  style="width:100%"><a href="<?php echo URLROOT; ?>/Pages/index">Login</a></img>
  <div class="text">Caption Text</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="<?php echo URLROOT ?>/public/img/packages.jpg" style="width:100%">
  <div class="text">Caption Two</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="<?php echo URLROOT ?>/public/img/banner.jpg" style="width:100%">
  <div class="text">Caption Three</div>
</div>

</div>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>


 </br></br></br></br></br></br></br></br></br></br> </br></br></br></br></br> </br>
 </br> </br></br></br></br></br></br></br></br></br></br></br> </br></br></br></br></br> </br></br></br></br></br></br></br> </br></br></br>


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
       <form action="<?php echo URLROOT; ?>/Pages/index " method="POST">
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
    
         
    <p id='descannonce'> <?php echo implode(' ', array_slice(explode(' ',  $annonce->enonce ), 0, 10)).''."\n";?><a href="<?php echo URLROOT; ?>/Users/detailAnnonce?id=<?php echo $annonce->idannonce; ?>&postule=false&contenu=0">Lire la suite</a></p>
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
        
            
        <p id='descannonce'><?php echo implode(' ', array_slice(explode(' ',  $annonce->enonce ), 0, 10)).''."\n";?><a href="<?php echo URLROOT; ?>/Users/detailAnnonce?id=<?php echo $annonce->idannonce; ?>&postule=false&contenu=0">Lire la suite</a></p>
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

  

select.form-control {
    -moz-appearance: none;
    -webkit-appearance: none;
    appearance: none;
    background-position: right center;
    background-repeat: no-repeat;
    background-size: 1ex;
    background-origin: content-box;
    background-image: url("data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9Im5vIj8+CjxzdmcKICAgeG1sbnM6ZGM9Imh0dHA6Ly9wdXJsLm9yZy9kYy9lbGVtZW50cy8xLjEvIgogICB4bWxuczpjYz0iaHR0cDovL2NyZWF0aXZlY29tbW9ucy5vcmcvbnMjIgogICB4bWxuczpyZGY9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkvMDIvMjItcmRmLXN5bnRheC1ucyMiCiAgIHhtbG5zOnN2Zz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciCiAgIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIKICAgdmVyc2lvbj0iMS4xIgogICBpZD0ic3ZnMiIKICAgdmlld0JveD0iMCAwIDM1Ljk3MDk4MyAyMy4wOTE1MTgiCiAgIGhlaWdodD0iNi41MTY5Mzk2bW0iCiAgIHdpZHRoPSIxMC4xNTE4MTFtbSI+CiAgPGRlZnMKICAgICBpZD0iZGVmczQiIC8+CiAgPG1ldGFkYXRhCiAgICAgaWQ9Im1ldGFkYXRhNyI+CiAgICA8cmRmOlJERj4KICAgICAgPGNjOldvcmsKICAgICAgICAgcmRmOmFib3V0PSIiPgogICAgICAgIDxkYzpmb3JtYXQ+aW1hZ2Uvc3ZnK3htbDwvZGM6Zm9ybWF0PgogICAgICAgIDxkYzp0eXBlCiAgICAgICAgICAgcmRmOnJlc291cmNlPSJodHRwOi8vcHVybC5vcmcvZGMvZGNtaXR5cGUvU3RpbGxJbWFnZSIgLz4KICAgICAgICA8ZGM6dGl0bGU+PC9kYzp0aXRsZT4KICAgICAgPC9jYzpXb3JrPgogICAgPC9yZGY6UkRGPgogIDwvbWV0YWRhdGE+CiAgPGcKICAgICB0cmFuc2Zvcm09InRyYW5zbGF0ZSgtMjAyLjAxNDUxLC00MDcuMTIyMjUpIgogICAgIGlkPSJsYXllcjEiPgogICAgPHRleHQKICAgICAgIGlkPSJ0ZXh0MzMzNiIKICAgICAgIHk9IjYyOS41MDUwNyIKICAgICAgIHg9IjI5MS40Mjg1NiIKICAgICAgIHN0eWxlPSJmb250LXN0eWxlOm5vcm1hbDtmb250LXdlaWdodDpub3JtYWw7Zm9udC1zaXplOjQwcHg7bGluZS1oZWlnaHQ6MTI1JTtmb250LWZhbWlseTpzYW5zLXNlcmlmO2xldHRlci1zcGFjaW5nOjBweDt3b3JkLXNwYWNpbmc6MHB4O2ZpbGw6IzAwMDAwMDtmaWxsLW9wYWNpdHk6MTtzdHJva2U6bm9uZTtzdHJva2Utd2lkdGg6MXB4O3N0cm9rZS1saW5lY2FwOmJ1dHQ7c3Ryb2tlLWxpbmVqb2luOm1pdGVyO3N0cm9rZS1vcGFjaXR5OjEiCiAgICAgICB4bWw6c3BhY2U9InByZXNlcnZlIj48dHNwYW4KICAgICAgICAgeT0iNjI5LjUwNTA3IgogICAgICAgICB4PSIyOTEuNDI4NTYiCiAgICAgICAgIGlkPSJ0c3BhbjMzMzgiPjwvdHNwYW4+PC90ZXh0PgogICAgPGcKICAgICAgIGlkPSJ0ZXh0MzM0MCIKICAgICAgIHN0eWxlPSJmb250LXN0eWxlOm5vcm1hbDtmb250LXZhcmlhbnQ6bm9ybWFsO2ZvbnQtd2VpZ2h0Om5vcm1hbDtmb250LXN0cmV0Y2g6bm9ybWFsO2ZvbnQtc2l6ZTo0MHB4O2xpbmUtaGVpZ2h0OjEyNSU7Zm9udC1mYW1pbHk6Rm9udEF3ZXNvbWU7LWlua3NjYXBlLWZvbnQtc3BlY2lmaWNhdGlvbjpGb250QXdlc29tZTtsZXR0ZXItc3BhY2luZzowcHg7d29yZC1zcGFjaW5nOjBweDtmaWxsOiMwMDAwMDA7ZmlsbC1vcGFjaXR5OjE7c3Ryb2tlOm5vbmU7c3Ryb2tlLXdpZHRoOjFweDtzdHJva2UtbGluZWNhcDpidXR0O3N0cm9rZS1saW5lam9pbjptaXRlcjtzdHJva2Utb3BhY2l0eToxIj4KICAgICAgPHBhdGgKICAgICAgICAgaWQ9InBhdGgzMzQ1IgogICAgICAgICBzdHlsZT0iZmlsbDojMzMzMzMzO2ZpbGwtb3BhY2l0eToxIgogICAgICAgICBkPSJtIDIzNy41NjY5Niw0MTMuMjU1MDcgYyAwLjU1ODA0LC0wLjU1ODA0IDAuNTU4MDQsLTEuNDczMjIgMCwtMi4wMzEyNSBsIC0zLjcwNTM1LC0zLjY4MzA0IGMgLTAuNTU4MDQsLTAuNTU4MDQgLTEuNDUwOSwtMC41NTgwNCAtMi4wMDg5MywwIEwgMjIwLDQxOS4zOTM0NiAyMDguMTQ3MzIsNDA3LjU0MDc4IGMgLTAuNTU4MDMsLTAuNTU4MDQgLTEuNDUwODksLTAuNTU4MDQgLTIuMDA4OTMsMCBsIC0zLjcwNTM1LDMuNjgzMDQgYyAtMC41NTgwNCwwLjU1ODAzIC0wLjU1ODA0LDEuNDczMjEgMCwyLjAzMTI1IGwgMTYuNTYyNSwxNi41NDAxNyBjIDAuNTU4MDMsMC41NTgwNCAxLjQ1MDg5LDAuNTU4MDQgMi4wMDg5MiwwIGwgMTYuNTYyNSwtMTYuNTQwMTcgeiIgLz4KICAgIDwvZz4KICA8L2c+Cjwvc3ZnPgo=");
}

  @import url(https://fonts.googleapis.com/css?family=Open+Sans:300);
* {
  font-family: 'Open Sans', sans-serif;
}


h2{
font-size: 40px;
    text-transform: uppercase;
    posiposition: center;
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




.box {
  
   width:80%; padding:60px
   max-width:10500px; margin:0 auto;
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

@import url('https://rsms.me/inter/inter-ui.css');
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
label {
  color: yellow;
  display: block;
  font-size: 14px;
  height: 16px;
  margin-top: 20px;
  margin-bottom: 5px;
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



<script>
var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 7000); // Change image every 2 seconds
}
var current = null;
document.querySelector('#email').addEventListener('focus', function(e) {
  if (current) current.pause();
  current = anime({
    targets: 'path',
    strokeDashoffset: {
      value: 0,
      duration: 700,
      easing: 'easeOutQuart'
    },
    strokeDasharray: {
      value: '240 1386',
      duration: 700,
      easing: 'easeOutQuart'
    }
  });
});
document.querySelector('#password').addEventListener('focus', function(e) {
  if (current) current.pause();
  current = anime({
    targets: 'path',
    strokeDashoffset: {
      value: -336,
      duration: 700,
      easing: 'easeOutQuart'
    },
    strokeDasharray: {
      value: '240 1386',
      duration: 700,
      easing: 'easeOutQuart'
    }
  });
});

document.querySelector('#submit').addEventListener('focus', function(e) {
  if (current) current.pause();
  current = anime({
    targets: 'path',
    strokeDashoffset: {
      value: -730,
      duration: 700,
      easing: 'easeOutQuart'
    },
    strokeDasharray: {
      value: '530 1386',
      duration: 700,
      easing: 'easeOutQuart'
    }
  });
});
</script>


  





