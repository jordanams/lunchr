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
		  			<li role="presentation"<?php if($_GET['action']=='select_mise_en_forme') { echo' class="active"'; } ?>><a href="index.php?module=menu&action=select_mise_en_forme">Mise en forme</a></li>
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
						    	<option value="">-- Carte --</option>
						    </select>
						  </div>
						</div>

						<div class="form-group">
						  <label class="col-md-3 control-label" for="selectbasic">Séléctioner un menu</label>
						  <div class="col-md-5">
						    <select id="id_menu" name="id_menu" class="form-control">
						    	<option value="">-- Menu --</option>
						    </select>
						  </div>
						</div><br/>


					<script type="text/javascript">
						$(document).ready(function() {
						    var id_carte = $('#id_carte');
						    var id_menu = $('#id_menu');
						     
						    // chargement des carte
						    $.ajax({
						        url: '../app/model/menu/select_menu_carte.php?go',
						        data: 'go', // on envoie $_GET['go']
						        dataType: 'json', // on veut un retour JSON
						        success: function(json) {
						            $.each(json, function(index, value) { // pour chaque noeud JSON
						                // on ajoute l option dans la liste
						                id_carte.append('<option value="'+ index +'">'+ value +'</option>');
						            });
						        }
						    });
						 
						    // à la sélection d une carte dans la liste
						    id_carte.on('change', function() {
						        var val = $(this).val(); // on récupère la valeur de la carte
						 
						        if(val != '') {
						            id_menu.empty(); // on vide la liste des menu
						             
						            $.ajax({
						                url: '../app/model/menu/select_menu_carte.php',
						                data: 'id_carte='+ val, // on envoie $_GET['id_carte']
						                data: 'id_resto='+ 65,
						                dataType: 'json',
						                success: function(json) {
						                    $.each(json, function(index, value) {
						                        id_menu.append('<option value="'+ index +'">'+ value +'</option>');
						                    });
						                }
						            });
						        }
						    });
						});
					</script>
					


						<div>

							<div class="form-group">
								<label class="col-md-5 control-label" for="selectbasic">Produit</label>
							</div>
							
							<div class="form-group">
								<label class="col-md-3 control-label" for="selectbasic">Nom du/des produit(s)</label>
								<div class="col-md-5">
									<input id="nom_produit" name="nom_produit" type="text" placeholder="Nom du/des produit(s)" class="form-control input-md">
								</div>
							</div>

							<div class="form-group">
								<label class="col-md-3 control-label" for="selectbasic">Prix du/des produit(s)</label>
								<div class="col-md-5">
									<textarea id="prix_produit" name="prix_produit" class="form-control" placeholder="Prix du/des produit(s)"></textarea>
								</div>
							</div>

							<div class="form-group">
								<label class="col-md-3 control-label" for="selectbasic">Description du/des produit(s)</label>
								<div class="col-md-5">
									<textarea id="desc_produit" name="desc_produit" class="form-control" placeholder="Description du/des produit(s)"></textarea>
								</div>
							</div>

							<div class="form-group">
								<label class="col-md-3 control-label" for="selectbasic">Ajouter une image</label>
								<div class="col-md-5">
									<input id="ch_file1" name="ch_file1" class="input-file" type="file">
								</div>
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