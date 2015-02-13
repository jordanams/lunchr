<?php include_once('../app/view/include/header.inc.php'); ?>

		<div class="col-lg-12">

           		<h1> Administration des cartes / menus / produits</h1>
           		<br/>
		        <?php include_once('../app/view/include/header_carte_menu.inc.php'); ?>
				<br/>
				<?php echo 'Restaurant sélectionné : &nbsp;&nbsp; '; foreach ($select_resto_afficher as $key => $row) { echo '<span style="text-decoration:underline;">'.$row['lr_nom'].'</span>'; } ?>
				<br/><br/><br/>

			
        		<form class="form-horizontal" id="formu_carte" name="formu_users" action="" method="POST" enctype="multipart/form-data">
					<fieldset>

						<!-- Form Name -->
						<legend>Modifier votre produit</legend>
						<br/><br/>
							
							<div class="form-group">
								<label class="col-md-3 control-label" for="selectbasic">Nom du produit</label>
								<div class="col-md-5">
									<input id="nom_produit" name="nom_produit" type="text" value="<?php echo $verif_produit[0]['lp_nom'];?>" class="form-control input-md">
								</div>
							</div>

							<div class="form-group">
								<label class="col-md-3 control-label" for="selectbasic">Prix du produit</label>
								<div class="col-md-5">
									<input id="prix_produit" name="prix_produit" type="text" value="<?php echo $verif_produit[0]['lp_prix'];?>" class="form-control input-md">
								</div>
							</div>

							<div class="form-group">
								<label class="col-md-3 control-label" for="selectbasic">Description du produit</label>
								<div class="col-md-5">
									<textarea id="desc_produit" name="desc_produit" class="form-control"><?php echo $verif_produit[0]['lp_description']; ?></textarea>
								</div>
							</div>

							<div class="form-group">
								<label class="col-md-3 control-label" for="selectbasic">Ajouter une image</label>
								<div class="col-md-5">
									<input value="test" id="ch_file1" name="ch_file1" class="input-file" type="file">
								</div>
							</div>

							<!-- Button -->
							<div class="form-group">
							  <label class="col-md-3 control-label" for="singlebutton">Valider</label>
							  <div class="col-md-5">
							    <button id="singlebutton" name="singlebutton" class="btn btn-primary col-md-12" type="submit">Valider</button>
							  </div>
							</div>

					</fieldset>
				</form>
		</div>


<?php include_once('../app/view/include/footer.inc.php'); ?>              