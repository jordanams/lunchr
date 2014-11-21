<?php include_once('../app/view/include/header.inc.php'); ?>

           <div class="col-lg-12">

           		<h1> Administration des utilisateurs </h1>
		        	<ul class="nav nav-tabs nav-justified" role="tablist">
	         			<li role="presentation"<?php if($_GET['action']=='index') { echo' class="active"'; } ?>><a href="index.php?module=utilisateurs&action=index">Listes des utilisateurs Pro</a></li>
	         			<li role="presentation"<?php if($_GET['action']=='afficher_users') { echo' class="active"'; } ?>><a href="index.php?module=utilisateurs&action=afficher_users">Listes des utilisateurs</a></li>
  						<li role="presentation"<?php if($_GET['action']=='ajouter_users') { echo' class="active"'; } ?>><a href="index.php?module=utilisateurs&action=ajouter_users">Ajouter un utilisateur</a></li>
					</ul>


        	<form class="form-horizontal" name="formu_resto" action="" method="POST">
				<fieldset>

					<!-- Form Name -->
					<legend>Détails restaurant : <?php echo $verif_details[0]['lup_nom'];?></legend>

					<!-- Text input-->
					<div class="form-group">
					  <label class="col-md-4 control-label" for="textinput">Nom</label>  
					  <div class="col-md-4">
					  	<?php echo $verif_details[0]['lup_nom'];?> 
					  </div>
					</div>

					<!-- Text input-->
					<div class="form-group">
					  <label class="col-md-4 control-label" for="textinput">Prenom</label>  
					  <div class="col-md-4">
					  	<?php echo $verif_details[0]['lup_prenom'];?>
					  </div>
					</div>

					<!-- Textarea -->
					<div class="form-group">
					  <label class="col-md-4 control-label" for="textarea">Téléphone</label>
					  <div class="col-md-4">                     
					    <?php echo $verif_details[0]['lup_tel'];?>
					  </div>
					</div>

					<!-- Text input-->
					<div class="form-group">
					  <label class="col-md-4 control-label" for="textinput">Mail</label>  
					  <div class="col-md-4">
					  	<?php echo $verif_details[0]['lup_mail'];?>
					  </div>
					</div>

					<!-- Text input-->
					<div class="form-group">
					  <label class="col-md-4 control-label" for="textinput">Admin</label>  
					  <div class="col-md-4">
					  	<?php echo $verif_details[0]['lup_admin'];?>
					  </div>
					</div>


					</fieldset>
				</form>

</div>


<?php include_once('../app/view/include/footer.inc.php'); ?>              