<?php include_once('../app/view/include/header.inc.php'); ?>

		<div class="col-lg-12">

           		<h1> Administration des cartes / menus / produits</h1>
           		<br/>
		        <?php include_once('../app/view/include/header_carte_menu.inc.php'); ?>
				<br/>
				<?php echo 'Restaurant sélectionné : &nbsp;&nbsp; '; foreach ($select_resto_afficher as $key => $row) { echo '<span style="text-decoration:underline;">'.$row['lr_nom'].'</span>'; } ?>
				<br/><br/>

			
        		<form class="form-horizontal" id="formu_carte" name="formu_users" action="" method="POST" enctype="multipart/form-data">
					<fieldset>

						<!-- Form Name -->
						<legend>Ajouter un produit</legend>

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
						        url: '../app/model/menu/select_menu_carte.php?go&id_resto=',
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
								<label class="col-md-3 control-label" for="selectbasic">Nom du produit</label>
								<div class="col-md-5">
									<input id="nom_produit" name="nom_produit" type="text" placeholder="Nom du produit" class="form-control input-md">
								</div>
							</div>

							<div class="form-group">
								<label class="col-md-3 control-label" for="selectbasic">Prix du produit</label>
								<div class="col-md-5">
									<input id="prix_produit" name="prix_produit" type="text" placeholder="Prix du produit" class="form-control input-md">
								</div>
							</div>

							<div class="form-group">
								<label class="col-md-3 control-label" for="selectbasic">Description du produit</label>
								<div class="col-md-5">
									<textarea id="desc_produit" name="desc_produit" class="form-control" placeholder="Description du produit"></textarea>
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