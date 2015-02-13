<?php include_once('../app/view/include/header.inc.php'); ?>

           	<form class="form-horizontal" id="formu_users" name="formu_users" action="" method="POST">
					<fieldset>

						<!-- Form Name -->
						<legend>Nom de l'utilisateur</legend>

						<!-- Text input-->
						<div class="form-group">
						  <label class="col-md-4 control-label" for="textinput">Nom</label>  
						  <div class="col-md-4">
						  	<input required id="nom_users" name="nom_users" type="text" placeholder="Nom" class="form-control input-md">  
						  </div>
						</div>

						<!-- Text input-->
						<div class="form-group">
						  <label class="col-md-4 control-label" for="textinput">Prénom</label>  
						  <div class="col-md-4">
						  	<input required id="prenom_users" name="prenom_users" type="text" placeholder="Prénom" class="form-control input-md">  
						  </div>
						</div>

						<!-- Text input-->
						<div class="form-group">
						  <label class="col-md-4 control-label" for="textinput">Téléphone</label>  
						  <div class="col-md-4">
						  	<input required id="phone_users" name="phone_users" type="text" placeholder="Téléphone" class="form-control input-md">  
						  </div>
						</div>

						<!-- Text input-->
						<div class="form-group">
						  <label class="col-md-4 control-label" for="textinput">Email</label>  
						  <div class="col-md-4">
						  <input required id="mail_users" name="mail_users" type="email" placeholder="Email" class="form-control input-md">  
						  </div>
						</div>

						<!-- Password input-->
						<div class="form-group">
						  <label class="col-md-4 control-label" for="passwordinput">Mot de passe</label>
						  <div class="col-md-4">
						    <input required id="mdp_users" name="mdp_users" type="password" placeholder="Mot de passe" class="form-control input-md">
						  </div>
						</div>

						<!-- Select Basic -->
						<div class="form-group">
						  <label class="col-md-4 control-label" for="selectbasic">Type</label>
						  <div class="col-md-4">
						    <select id="admin_users" name="admin_users" class="form-control">
						      <option value="0">Utilisateur</option>
						      <option value="1">Restaurateur</option>
						      <option value="2">Admin</option>
						    </select>
						  </div>
						</div>

						<!-- Button -->
						<div class="form-group">
						  <label class="col-md-4 control-label" for="singlebutton">Valider</label>
						  <div class="col-md-4">
						    <button id="singlebutton" name="singlebutton" class="btn btn-primary" type="submit">Valider</button>
						  </div>
						</div>

					</fieldset>
				</form>

<?php include_once('../app/view/include/footer.inc.php'); ?>