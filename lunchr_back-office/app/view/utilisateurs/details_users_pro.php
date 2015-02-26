<?php include_once('../app/view/include/header.inc.php'); ?>

            <div class="col-lg-12">

           		<h1> Administration des utilisateurs </h1>
		        	<?php include_once('../app/view/include/header.utilisateurs.inc.php'); ?>
		    </div>

		    <div class="col-lg-12">
        		<form class="table form-horizontal" name="formu_resto" action="" method="POST">
					<fieldset>

					<!-- Form Name -->
					<legend>Détails utilisateur : <?php echo $verif_details[0]['lup_nom'];?></legend>

					<!-- NOM USER -->
					<div class="form-group">
					  <label class="col-md-4 control-label" for="textinput">Nom</label>  
					  <div class="col-md-4">
					  	<?php echo $verif_details[0]['lup_nom'];?> 
					  </div>
					</div>

					<!-- PRENOM USER -->
					<div class="form-group">
					  <label class="col-md-4 control-label" for="textinput">Prenom</label>  
					  <div class="col-md-4">
					  	<?php echo $verif_details[0]['lup_prenom'];?>
					  </div>
					</div>

					<!-- TELEPHONE USER -->
					<div class="form-group">
					  <label class="col-md-4 control-label" for="textarea">Téléphone</label>
					  <div class="col-md-4">                     
					    <?php echo $verif_details[0]['lup_tel'];?>
					  </div>
					</div>

					<!-- MAIL USER -->
					<div class="form-group">
					  <label class="col-md-4 control-label" for="textinput">Mail</label>  
					  <div class="col-md-4">
					  	<?php echo $verif_details[0]['lup_mail'];?>
					  </div>
					</div>

					<!-- ADMIN -->
					<div class="form-group">
					  <label class="col-md-4 control-label" for="textinput">Admin</label>  
					  <div class="col-md-4">
					  	<?php echo $verif_details[0]['lup_admin'];?>
					  </div>
					</div>

					<!-- BOUTON MODIFIER -->
					<div class="form-group">
					  <label class="col-md-4 control-label" for="textinput"></label>  
					  <div class="col-md-4">
					  	<?php echo '<a href="index.php?module=utilisateurs&action=update_users_pro&id='.$verif_details[0]['lup_id'].'">Modifier</a>';?>
					  </div>
					</div>

					</fieldset>
				</form>
			</div>


<?php include_once('../app/view/include/footer.inc.php'); ?>              