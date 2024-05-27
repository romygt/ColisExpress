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

<body>


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






	
	<div class="container">

		
	
	
		<center><h1>Annonces</h1></center>
	
	
		<table id="itemsTable" class="table"
			data-toggle="table"
			data-url="data.json"
			data-height="320"
			data-filter="true"
			data-icons-prefix="fa">
			<thead>
				<tr>
					<th data-field="Annonce" data-align="center" data-sortable="true">Annonce</th>
					<th data-field="etat" data-align="" data-sortable="true" data-filter-type="input">etat</th>
                    <th data-field="Date" data-align="" data-sortable="true" data-filter-type="datepicker_range">Date</th>
                    <th data-field="TypeClient" data-align="" data-sortable="true" data-filter-type="input">Type Client</th>
                    <th data-field="valider" data-align="" data-sortable="true" data-filter-type="input">Valider</th>


				</tr>
				</thead>
				
			<?php $i=0?>
			<?php foreach($data['annonces'] as $annonce ): ?>

				<?php if( $annonce->etat != 'Bannit'):?>

			    <tr>
			    <td><a href="<?php echo URLROOT; ?>/Users/detailAnnonce?id=<?php echo $annonce->idannonce?>&postule=false&contenu=1"> <?php echo  $annonce->idannonce ?> </a></td>
				<td><?php echo  $annonce->Etat	?></td>
                <td><?php echo  date('m/d/Y',strtotime($annonce->date));?></td>


				<?php if(( $annonce->transporteur=='yes') && ( $annonce->etat =='Valide')):?>
				<td><?php echo 'transporteur'?></td>
				<?php else:?>
				<?php if( ($annonce->transporteurcertifie=='yes') && ( $annonce->etat =='Certifie') ):?>
				<td><?php echo 'transporteur certifie'?></td>
				<?php else :?>
                    <td><?php echo 'Client'?></td>
				<?php endif ;?>
				<?php endif ;?>
                <?php if(( $annonce->Etat=='En attente')):?>	
				<td><center><button onclick="location.href='<?php echo URLROOT; ?>/Users/validerAnnonce?id=<?php echo $annonce->idannonce?>'" style="  color:#fff background-color: #ffa500" >Valider</button></center></td>								
				<?php endif ;?>
			       </tr>
				   <?php endif ;?>
					<?php endforeach; ?>
					
		</table>


		
				</br></br></br></br>

		
		
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