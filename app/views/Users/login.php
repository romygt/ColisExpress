<?php 
  require APPROOT .'/views/includes/head.php';
?>

<div id="logo-landing">
 
 <h3 class="btn-login"><a href="<?php echo URLROOT; ?>/Users/login">Login</a></h3>
 <img  id="logoimg" src="<?php echo URLROOT ?>/public/img/logo.png" alt="" height="140%"  >
   
 </div>
 
 
 <div id="section-landing">
 
 <?php
     require APPROOT . '/views/includes/navigation.php';
 ?>
   
 </div>


  

<div class='container-login'>
    <div class='wrapper-login '>


        <h2>Sign in</h2>

        <form    method="POST" action="<?php echo URLROOT; ?>/Users/login">
            
            <input type="text" placeholder="Username *" name="username">
            <span class="invalidFeedback">
                <?php echo $data['usernameError'];?>

            </span>

            <input type="password" placeholder="Password *" name="password">
            <span class="invalidFeedback">
                <?php echo $data['passwordError'];?>

            </span>

            <button id='submit' type='submit' value='submit'>Submit</button>
           
            <p class='options'> Not registered yet ?<a href='<?php echo URLROOT;?>/users/register'>Create an account !</a></p>

        </form>
        





   </div>
</div>