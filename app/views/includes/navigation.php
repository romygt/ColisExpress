
<nav class="top-nav" id="menu">

    <ul >

    <?php if( (isset($_SESSION['admin_id']))):?>
     
        <li> <a href="<?php echo URLROOT; ?>/Users/admin">Home</a></li>

     
    <?php else:?>

    <?php if( (!isset($_SESSION['user_id']))):?>

        <li> <a href="<?php echo URLROOT; ?>/Pages/index">Home</a></li>

    <?php else:?>

    <li> <a href="<?php echo URLROOT; ?>/Users/indexuser">Home</a></li>

    <?php endif;?>
    <?php endif;?>
 
        <li> <a href="<?php echo URLROOT; ?>/Pages/about">About</a></li>
        <li> <a href="<?php echo URLROOT; ?>/Pages/news">News</a></li>
        <li> <a href="<?php echo URLROOT; ?>/Pages/statistics">Statistics</a></li>
        <li> <a href="<?php echo URLROOT; ?>/Pages/contact">Contact</a></li>
        <li > <a href="<?php echo URLROOT; ?>/Users/register">inscription</a></li>

       

    
    </ul>


  


</nav>