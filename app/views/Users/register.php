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
 
 


  

 <div class="container-login">
    <div class="wrapper-login">
        <h2>Register</h2>

            <form
                id="register-form"
                method="POST"
                action="<?php echo URLROOT; ?>/users/register"
                >

             
            <input type="text" placeholder="Username *" name="username">
            <span class="invalidFeedback">
                <?php echo $data['usernameError']; ?>
            </span>

            <input type="text" placeholder="Numéro de téléphone *" name="numtel">
            <span class="invalidFeedback">
                <?php echo $data['numtel']; ?>
            </span>

            <input type="email" placeholder="Email *" name="email">
            <span class="invalidFeedback">
                <?php echo $data['emailError']; ?>
            </span>

            <input type="password" placeholder="Password *" name="password">
            <span class="invalidFeedback">
                <?php echo $data['passwordError']; ?>
            </span>

            <input type="password" placeholder="Confirm Password *" name="confirmPassword">
            <span class="invalidFeedback">
                <?php echo $data['confirmPasswordError']; ?>
            </span>

            <div id='yesno' style="display: inline-block;">Voulez vous devenir un transporteur? 
             </br> 
             </br> 
             
             <div style="display: inline-block;">
            Oui <input type="radio" onclick="javascript:yesnoCheck();" name="yesnotran" id="yesCheck" value='yes'>   </div>
            <div style="display: inline-block;">
            Non <input type="radio" onclick="javascript:yesnoCheck();" name="yesnotran" id="noCheck" value='no' checked> </div>
        
        </div>
            <br>
            
            
           <div id="ifYes" style="display:none" >

           <div  id='yesno' style="display: inline-block;">
           <label>Veuillez introduire les wilayas que vous comptez deservir</label>
            </br></br>

           <div style="display: inline-block;">
           <select  name="wilayadepart" id="search_categories">

           <option value="" class="inputFields">--Wilaya de depart--</option>
           <?php   foreach($data['wilayas'] as $wilaya): ?>
            <option value= <?php echo $wilaya->idwilaya ?> ><?php echo  $wilaya->nomwilaya?></option>
            <?php endforeach; ?>

            </select>  </div>
        
            <div style="display: inline-block;">
            <select name="wilayaarrive" id="search_categories">

            <option value="" class="inputFields">--Wilaya de d'arrivee--</option>
            <?php   foreach($data['wilayas'] as $wilaya): ?>
            <option value= <?php echo $wilaya->idwilaya?>><?php echo $wilaya->nomwilaya?></option>
            <?php endforeach; ?>>
             </select>          
            </div>
            </div>
          
           
            </br></br></br>


           <div id='yesno' style="display: inline-block;">Voulez-vous devenir un transporteur certifie? 
             </br> 
             </br> 
             
             <div style="display: inline-block;">
            Oui <input type="radio" onclick="javascript:yesnoCheck();" name="yesnocert" id="yesCheckcert" value='yes' >   </div>
            <div style="display: inline-block;">
            Non <input type="radio" onclick="javascript:yesnoCheck();" name="yesnocert" id="noCheckcert" value='no' checked> </div>
        
            </div>
 
           </div>

          

            <button id="submit" type="submit" value="submit">Submit</button>

            <p class="options">Not registered yet? <a href="<?php echo URLROOT; ?>/users/register">Create an account!</a></p>
        </form>

        </br></br></br></br></br></br>
    </div>
</div>





<script type="text/javascript">

function yesnoCheck() {
    if (document.getElementById('yesCheck').checked) {
        document.getElementById('ifYes').style.display = 'block';
    }
    else document.getElementById('ifYes').style.display = 'none';

}



</script>