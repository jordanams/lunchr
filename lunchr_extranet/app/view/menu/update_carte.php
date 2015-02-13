<?php include_once('../app/view/include/header.inc.php'); ?>

		<div class="col-lg-12">

           		<h1> Administration des cartes / menus / produits</h1>
           		<br/>
		        <?php include_once('../app/view/include/header_carte_menu.inc.php'); ?>
				<br/>
				<?php echo 'Restaurant sélectionné : &nbsp;&nbsp; '; foreach ($select_resto_afficher as $key => $row) { echo '<span style="text-decoration:underline;">'.$row['lr_nom'].'</span>'; } ?>
				<br/><br/><br/>

			
        		<form class="form-horizontal" id="formu_carte" action="" method="POST">
					<fieldset>

						<!-- Form Name -->
						<legend>Modifier le nom de la carte</legend>

						<!-- Text input-->
						<div class="form-group">
						  <label class="col-md-3 control-label" for="textinput">Nom</label>  
						  <div class="col-md-5">
						  	<input value="<?php echo $verif_carte[0]['lce_nom']; ?>" required id="nom_carte" name="nom_carte" type="text" class="form-control input-md">  
						  </div>
						</div>


						<!-- Button -->
						<div class="form-group">
						  <label class="col-md-3 control-label" for="singlebutton">Valider</label>
						  <div class="col-md-5">
						    <button id="singlebutton" name="singlebutton" class="btn btn-primary" type="submit">Valider</button>
						  </div>
						</div>

					</fieldset>
				</form>
		</div>


<?php include_once('../app/view/include/footer.inc.php'); ?>              