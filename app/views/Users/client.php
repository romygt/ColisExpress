<!DOCTYPE html>
<html>
<head>
	<title>Transporteur</title>
	<link href="<?php echo URLROOT ?>/public/assets/css/bootstrap.css" rel="stylesheet" type="text/css">
	<link href="<?php echo URLROOT ?>/public/assets/css/bootstrap-override.css" rel="stylesheet" type="text/css">
	<link href="<?php echo URLROOT ?>/public/assets/css/bootstrap-table.css" rel="stylesheet" type="text/css">
	<link href="<?php echo URLROOT ?>/public/src/bootstrap-table-filter.css" rel="stylesheet" type="text/css">
	<link href="<?php echo URLROOT ?>/public/assets/css/select2.css" rel="stylesheet" type="text/css">
	<link href="<?php echo URLROOT ?>/public/assets/css/jquery-ui-1.10.3.css" rel="stylesheet" type="text/css">
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" rel="stylesheet">
</head>

<?php 
  require APPROOT . '/views/includes/head.php';

?>



  <div id="logo-landing">

  <h3 class="btn-login"><a href="<?php echo URLROOT; ?>/Users/logout">Log out</a></h3>

<img  id="logoimg" src="<?php echo URLROOT ?>/public/img/logo.png" alt="" height="140%"  >
  
</div>

<div id="section-landing">


<?php
    require APPROOT . '/views/includes/navigation.php';
?>
  

</div>

<link href="<?php echo URLROOT ?>/public/css2/styles.css" type="text/css" rel="stylesheet">


</br></br></br></br></br></br></br></br></br></br></br></br></br>




</body>
	<div class="container">

		
	
	
		<center><h1>Clients</h1></center>
	
	
	
	<table id="itemsTable" class="table"
		data-toggle="table"
		data-url="data.json"
		data-height="320"
		data-filter="true"
		data-icons-prefix="fa">
		<thead>
			<tr>
				<th data-field="Profil" data-align="center" data-sortable="true">Profil</th>
				<th data-field="nom" data-align="center" data-sortable="true" data-filter-type="input">nom</th>
				<th data-field="numero de telephone" data-align="" data-sortable="true" data-filter-type="input">numero de telephone</th>
				<th data-field="email" data-align="" data-sortable="true" data-filter-type="input">email</th>
				<th data-field="Bannir" data-align="" data-sortable="true" >Banir</th>


			</tr>
			</thead>
			
		<?php $i=0?>
		<?php foreach($data['users'] as $user): ?>
			<?php if(( $user->transporteur=='no')):?>


		<tr>

			<td><a href="<?php echo URLROOT; ?>/Users/userProfileAdmin?id=<?php echo $user->iduser?>"> <?php echo  $user->	iduser?> </a></td>
			<td><?php echo  $user->	username?></td>
			<td><?php echo   $user->numtelephone?></td>
			<td><?php echo $user->email?></td>		
			<?php if(( $user->etat!='Bannit')):?>	
				<td><center><button onclick="location.href='<?php echo URLROOT; ?>/Users/banirTransporteur?id=<?php echo $user->iduser ?>&trans=no'" style="  color:#fff background-color: #ffa500" >Bannir</button></center></td>
				<?php else:?>
					<td></td>				
				<?php endif ;?>	


			   </tr>

				<?php endif ;?>
				<?php endforeach; ?>
				
	</table>
		
		
                </br></br> </br></br>
		
	</div>
	
	<script src="<?php echo URLROOT ?>/public/assets/js/jquery-1.11.3.js"></script>
	<script src="<?php echo URLROOT ?>/public/assets/js/bootstrap.js"></script>
	<script src="<?php echo URLROOT ?>/public/assets/js/bootstrap-table.js"></script>
	<script src="<?php echo URLROOT ?>/public/assets/js/bootstrap-table-en-US.js"></script>
	<script src="<?php echo URLROOT ?>/public/assets/js/select2.js"></script>
	<script src="<?php echo URLROOT ?>/public/assets/js/jquery-ui-1.10.3.min.js"></script>
	<script src="<?php echo URLROOT ?>/public/src/bootstrap-table-filter.js"></script>
	<script type="text/javascript">
        var itemPrices = [{ id: 1, text: '$1' }, { id: 2, text: '$2' }];

		$('#itemsTable').on('column-search.bs.table', function () {
				console.log('hello event');
        });
	</script>
</body>
</html>