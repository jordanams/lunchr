<?php include_once('../app/view/include/header.inc.php'); ?>


			<div class="col-lg-12">
           		<h1> Administration de votre compte</h1><br/><br/>
           	</div>

           	<div class="col-lg-12">
	           	<form class="form-horizontal" id="formu_users" name="formu_users" action="" method="POST">
						<fieldset>

							<!-- Form Name -->
							<legend>Modifier vos informations</legend>


							<br/><br/>
							<!-- Name -->
							<div class="form-group">
							  <label class="col-md-4 control-label" for="textinput">Nom</label>  
							  <div class="col-md-4">
							  	<input required id="nom_user" name="nom_user" type="text" value="<?php echo $verif_details[0]['lup_nom'];?>" class="form-control input-md">  
							  </div>
							</div>

							<!-- Surname -->
							<div class="form-group">
							  <label class="col-md-4 control-label" for="textinput">Prénom</label>  
							  <div class="col-md-4">
							  	<input required id="prenom_user" name="prenom_user" type="text" value="<?php echo $verif_details[0]['lup_prenom'];?>" class="form-control input-md">  
							  </div>
							</div>

							<!-- Phone -->
							<div class="form-group">
							  <label class="col-md-4 control-label" for="textinput">Téléphone</label>  
							  <div class="col-md-4">
							  	<input required id="phone_user" name="phone_user" type="text" value="<?php echo $verif_details[0]['lup_tel'];?>" class="form-control input-md">  
							  </div>
							</div>

							<!-- Email -->
							<div class="form-group">
							  <label class="col-md-4 control-label" for="textinput">Email</label>  
							  <div class="col-md-4">
							  <input required id="mail_user" name="mail_user" type="email" value="<?php echo $verif_details[0]['lup_mail'];?>" class="form-control input-md">  
							  </div>
							</div>

							<!-- Password-->
							<div class="form-group">
							  <label class="col-md-4 control-label" for="textinput">Mot de passe</label>  
							  <div class="col-md-4">
							  	<a href="javascript: fonction_mdp()">Pour modifier cliquer ici</a>
							  </div>
							</div>

							<script>
								function fonction_mdp() {
									if(document.getElementById('invisible').style.display == 'none') {
							    		document.getElementById('invisible').style.display = 'block';
							  		}
							  		else {
							    		document.getElementById('invisible').style.display = 'none';
									}
								}

								function checkPass() {
									var champA = document.getElementById("new_mdp_user").value;
									var champB = document.getElementById("new_try_mdp_user").value;
									var div_comp = document.getElementById("div_erreur");
									 
									if(champA == champB) {
										div_erreur.innerHTML = "Correct";
									}
									else {
										div_erreur.innerHTML = "Les mots de passe saisis ne sont pas identiques";
										return false;
									}
								}
							</script>

							<!-- Password input-->
							<div style='display:none;' class="form-group" id="invisible" >

							  <label class="col-md-4 control-label" for="passwordinput">Nouveau mot de passe</label>
							  <div class="col-md-4">
							    <input id="new_mdp_user" name="new_mdp_user" type="password" class="form-control input-md">
							  </div>

							  <br/><br/>
							  <label class="col-md-4 control-label" for="passwordinput">Retaper le mot de passe</label>
							  <div class="col-md-4">
							    <input id="new_try_mdp_user" name="new_try_mdp_user" type="password" class="form-control input-md" onBlur="checkPass()">
							  </div>

							  <br/><br/>
							  <label class="col-md-4 control-label"></label>
							  <div class="col-md-4" id="div_erreur">
							  </div>
							  
							</div>

							<!-- Button -->
							<div class="form-group">
							  <label class="col-md-4 control-label" for="singlebutton"></label>
							  <div class="col-md-4">
							    <button id="singlebutton" name="singlebutton" class="btn btn-primary" type="submit" onclick="return confirm_modifier_compte()">Modifier</button>
							  </div>
							</div>

						</fieldset>
					</form>
				</div>

				<br/><br/><br/>
				<div class="col-lg-12">
					<div class="form-horizontal">
						<!-- Suppression compte -->
						<div class="form-group">
							<label align="col-md-4" for="textinput">Supprimer votre compte</label>  
							<div align="col-md-4">
								<?php echo '<a href="index.php?module=compte&action=supp_compte&id_user='.$verif_details[0]['lup_id'].'" onclick="return confirm_supprimer_compte()">Pour supprimer votre compte cliquer ici</a>';?>
							</div>
						</div>
					</div>
				</div>

<?php include_once('../app/view/include/footer.inc.php'); ?>