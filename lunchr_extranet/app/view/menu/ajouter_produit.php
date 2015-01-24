<?php include_once('../app/view/include/header.inc.php'); ?>

		<div class="col-lg-12">

           		<h1> Administration des menus </h1>
		        <ul class="nav nav-tabs nav-justified" role="tablist">
		        	<?php if ($_SESSION['id_resto'] ==! "") {echo '<li role="presentation"'; if($_GET["action"]=="changer_resto") { echo' class="active"'; } echo'><a href="index.php?module=menu&action=changer_resto">Changer de restaurant</a></li>'; }?>
			        <li role="presentation"<?php if($_GET['action']=='index') { echo' class="active"'; } ?>><a href="index.php?module=menu&action=index">Listes des cartes</a></li>
			        <li role="presentation"<?php if($_GET['action']=='liste_menu') { echo' class="active"'; } ?>><a href="index.php?module=menu&action=liste_menu">Listes des menus</a></li>
			        <li role="presentation"<?php if($_GET['action']=='liste_produit') { echo' class="active"'; } ?>><a href="index.php?module=menu&action=liste_produit">Liste des produits</a></li>
		  			<li role="presentation"<?php if($_GET['action']=='ajouter_carte') { echo' class="active"'; } ?>><a href="index.php?module=menu&action=ajouter_carte">Ajouter une carte</a></li>
		  			<li role="presentation"<?php if($_GET['action']=='ajouter_menu') { echo' class="active"'; } ?>><a href="index.php?module=menu&action=ajouter_menu">Ajouter un menu</a></li>
		  			<li role="presentation"<?php if($_GET['action']=='ajouter_produit') { echo' class="active"'; } ?>><a href="index.php?module=menu&action=ajouter_produit">Ajouter des produits</a></li>
				</ul>
				<br/>
				<?php echo 'Restaurant sélectionné : &nbsp;&nbsp; '; foreach ($select_resto_afficher as $key => $row) { echo '<span style="text-decoration:underline;">'.$row['lr_nom'].'</span>'; } ?>
				<br/><br/>

			
        		<form class="form-horizontal" id="formu_carte" name="formu_users" action="" method="POST" enctype="multipart/form-data">
					<fieldset>

						<!-- Form Name -->
						<legend>Ajouter des produits</legend>

						<div class="form-group">
						  <label class="col-md-3 control-label" for="selectbasic">Séléctioner une carte</label>
						  <div class="col-md-5">
						    <select id="id_carte" name="id_carte" class="form-control">
						    <?php foreach ($afficher_carte as $key => $row) {
						    echo'<option value="'.$row['lce_id'].'">'.$row['lce_nom'].'</option>';
						    }
							?>
						    </select>
						  </div>
						</div>

						<div class="form-group">
						  <label class="col-md-3 control-label" for="selectbasic">Séléctioner un menu</label>
						  <div class="col-md-5">
						    <select id="id_menu" name="id_menu" class="form-control">
						    <?php foreach ($afficher_menu as $key => $row) {
						    echo'<option value="'.$row['lm_id'].'">'.$row['lce_nom'].' - '.$row['lm_nom'].'</option>';
						    }
							?>
						    </select>
						  </div>
						</div><br/>
					

						<div class="col-md-12 column ui-sortable">
							<br/><br/>
							<label>Produit 1</label>
							<div class="form-group">
								<div class="col-md-5">
									<label>Nom du/des produit(s)</label>
									<input id="nom_produit" name="nom_produit" type="text" placeholder="Nom du/des produit(s)" class="form-control input-md">
								</div>
							</div>

							<div class="form-group">
								<div class="col-md-5">
									<label>Prix du/des produit(s)</label>
									<textarea id="prix_produit" name="prix_produit" class="form-control" placeholder="Prix du/des produit(s)"></textarea>
								</div>
							</div>

							<div class="form-group">
								<div class="col-md-5">
									<label>Description du/des produit(s)</label>
									<textarea id="desc_produit" name="desc_produit" class="form-control" placeholder="Description du/des produit(s)"></textarea>
								</div>
							</div>

							<div class="form-group">
								<div class="col-md-5">
									<label>Ajouter une image</label>
									<input id="ch_file1" name="ch_file1" class="input-file" type="file">
								</div>
							</div>
						</div>


						
						<!-- <div class="col-md-12 column ui-sortable">
							<br/><br/>
							<label>Produit 2</label>
							<div class="form-group">
								<div class="col-md-5">
									<label>Nom du/des produit(s)</label>
									<input id="nom_produit" name="nom_produit" type="text" placeholder="Nom du/des produit(s)" class="form-control input-md">
								</div>
							</div>

							<div class="form-group">
								<div class="col-md-5">
									<label>Description du/des produit(s)</label>
									<textarea class="form-control" id="desc_text" name="desc_text" placeholder="Description du/des produit(s)"></textarea>
								</div>
							</div>

							<div class="form-group">
								<div class="col-md-5">
									<label>Ajouter une image</label>
									<input id="ad_image" name="ad_image" class="input-file" type="file">
								</div>
							</div>
						</div>


						
						<div class="col-md-12 column ui-sortable">
							<br/><br/>
							<label>Produit 3</label>
							<div class="form-group">
								<div class="col-md-5">
									<label>Nom du/des produit(s)</label>
									<input id="nom_produit" name="nom_produit" type="text" placeholder="Nom du/des produit(s)" class="form-control input-md">
								</div>
							</div>

							<div class="form-group">
								<div class="col-md-5">
									<label>Description du/des produit(s)</label>
									<textarea class="form-control" id="desc_text" name="desc_text" placeholder="Description du/des produit(s)"></textarea>
								</div>
							</div>

							<div class="form-group">
								<div class="col-md-5">
									<label>Ajouter une image</label>
									<input id="ad_image" name="ad_image" class="input-file" type="file">
								</div>
							</div>
						</div>



						<div class="col-md-12 column ui-sortable">
							<br/><br/>
							<label>Produit 4</label>
							<div class="form-group">
								<div class="col-md-5">
									<label>Nom du/des produit(s)</label>
									<input id="nom_produit" name="nom_produit" type="text" placeholder="Nom du/des produit(s)" class="form-control input-md">
								</div>
							</div>

							<div class="form-group">
								<div class="col-md-5">
									<label>Description du/des produit(s)</label>
									<textarea class="form-control" id="desc_text" name="desc_text" placeholder="Description du/des produit(s)"></textarea>
								</div>
							</div>

							<div class="form-group">
								<div class="col-md-5">
									<label>Ajouter une image</label>
									<input id="ad_image" name="ad_image" class="input-file" type="file">
								</div>
							</div>
						</div> -->


						<!-- Button -->
						<div class="form-group">
						  <label class="col-md-1 control-label" for="singlebutton">Valider</label>
						  <div class="col-md-4">
						    <button id="singlebutton" name="singlebutton" class="btn btn-primary col-md-12" type="submit">Valider</button>
						  </div>
						</div>

					</fieldset>
				</form>
		</div>


<?php include_once('../app/view/include/footer.inc.php'); ?>              