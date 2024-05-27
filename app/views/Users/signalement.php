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




<body>
	<div class="container">

		
	
	
		<center><h1>Signalements</h1></center>
	
		<table id="itemsTable" class="table"
			data-toggle="table"
			data-url="data.json"
			data-height="320"
			data-icons-prefix="fa">
			<thead>
				<tr>
					<th data-field="Id signaleur" data-align="center" data-sortable="true">Id signaleur</th>
					<th data-field="nom signaleur" data-align="" data-sortable="true" data-filter-type="input">nom signaleur</th>
                    <th data-field="type signaleur" data-align="" data-sortable="true" data-filter-type="input">type signaleur</th>
                    <th data-field="Id annonce" data-align="" data-sortable="true" data-filter-type="datepicker_range">Id annonce</th>
                    <th data-field="Id signalé" data-align="center" data-sortable="true">Id signalé</th>
					<th data-field="nom signalé" data-align="" data-sortable="true" data-filter-type="input">nom signalé</th>
                    <th data-field="Contenu du signalement" data-align="" data-sortable="true" data-filter-type="input"> Contenu du signalement</th>


				</tr>
				</thead>
				
			<?php $i=0?>
			<?php foreach($data['signalements'] as $signalement ): ?>


			    <tr>
			    <td><a href="<?php echo URLROOT; ?>/Users/userProfileAdmin?id=<?php echo $signalement->idsignaleur ?>"> <?php echo  $signalement->idsignaleur ?> </a></td>
				<td><?php echo  $signalement->nomsignaleur	?></td>
                <?php if(( $signalement->transporteur=='yes') && ( $signalement->etat =='Valide')):?>
				<td><?php echo 'transporteur'?></td>
				<?php else:?>
				<?php if( ($signalement->transporteurcertifie=='yes') && ( $signalement->etat =='Certifie') ):?>
				<td><?php echo 'transporteur certifie'?></td>
				<?php else :?>
                    <td><?php echo 'Client'?></td>
				<?php endif ;?>
				<?php endif ;?>
			    <td><a href="<?php echo URLROOT; ?>/Users/detailAnnonce?id=<?php echo  $signalement->idannonce?>&postule=false&contenu=1"> <?php echo  $signalement->idannonce ?> </a></td>
                <td><a href="<?php echo URLROOT; ?>/Users/userProfileAdmin?id=<?php echo $signalement->idsignale ?>"> <?php echo  $signalement->idsignale ?> </a></td>
                <td><?php echo  $signalement->nomsignale?></td>
                <td><?php echo  $signalement->contenu?></td>



				
               
			       </tr>
				  
					<?php endforeach; ?>
					
		</table>


		
		
		<p class="footer">
                </br>
		</p>
		
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