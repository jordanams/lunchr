<?php include_once('../app/view/include/header.inc.php'); ?>

           	<div class="col-lg-12">
           		<h1> Administration des utilisateurs </h1>
		        	<?php include_once('../app/view/include/header.utilisateurs.inc.php'); ?>
		    </div>

		    <div class="col-lg-12">
	        	<form class="table form-horizontal" name="formu_resto" action="" method="POST">
					<fieldset>

					<!-- Form Name -->
					<legend>Détails modifier utilisateur : <?php echo $verif_details[0]['lu_nom'];?></legend>

					<!-- NOM USER -->
					<div class="form-group">
					  <label class="col-md-4 control-label" for="textinput">Nom</label>  
					  <div class="col-md-4">
					  	<input required id="nom_user" name="nom_user" class="form-control input-md" value='<?php echo $verif_details[0]['lu_nom'];?>'>
					  </div>
					</div>

					<!-- PRENOM USER -->
					<div class="form-group">
					  <label class="col-md-4 control-label" for="textinput">Prenom</label>  
					  <div class="col-md-4">
					  	<input required id="prenom_user" name="prenom_user" class="form-control input-md" value='<?php echo $verif_details[0]['lu_prenom'];?>'>
					  </div>
					</div>

					<!-- TELEPHONE USER -->
					<div class="form-group">
					  <label class="col-md-4 control-label" for="textarea">Téléphone</label>
					  <div class="col-md-4">                     
					    <input required id="phone_user" name="phone_user" class="form-control input-md" value='<?php echo $verif_details[0]['lu_tel'];?>'>
					  </div>
					</div>

					<!-- MAIL USER -->
					<div class="form-group">
					  <label class="col-md-4 control-label" for="textinput">Mail</label>  
					  <div class="col-md-4">
					  	<input required id="mail_user" name="mail_user" class="form-control input-md" value='<?php echo $verif_details[0]['lu_mail'];?>'>
					  </div>
					</div>

					<!-- PASSWORD USER -->
					<div class="form-group">
					  <label class="col-md-4 control-label" for="textinput">Mot de passe</label>  
					  <div class="col-md-4">
					  	<input required type="password" id="mdp_user" name="mdp_user" class="form-control input-md">
					  </div>
					</div>

					<!-- ADMIN USER -->
					<!-- <div class="form-group">
						<label class="col-md-4 control-label" for="selectbasic">Type</label>
						<div class="col-md-4">
						  <select id="admin_user" name="admin_user" class="form-control">
						    <option value="1">Restaurateur</option>
						    <option value="2">Admin</option>
						  </select>
						</div>
					</div> -->

					<!-- Button Valider -->
					<div class="form-group">
					  <label class="col-md-4 control-label" for="singlebutton"></label>
					  <div class="col-md-4">
					    <button id="singlebutton" name="singlebutton" class="btn btn-primary" type="submit">Valider</button>
					  </div>
					</div>

					</fieldset>
				</form>
			</div>


<?php include_once('../app/view/include/footer.inc.php'); ?>              