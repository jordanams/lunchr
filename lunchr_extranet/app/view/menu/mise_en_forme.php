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
		  			<li role="presentation"<?php if($_GET['action']=='mise_en_forme') { echo' class="active"'; } ?>><a href="index.php?module=menu&action=mise_en_forme">Mise en forme</a></li>
				</ul>
				<br/>
				<?php echo 'Restaurant sélectionné : &nbsp;&nbsp; '; foreach ($select_resto_afficher as $key => $row) { echo '<span style="text-decoration:underline;">'.$row['lr_nom'].'</span>'; } ?>
				<br/><br/>

			
        		<form class="form-horizontal" id="formu_carte" name="formu_users" action="" method="POST" enctype="multipart/form-data">
					<fieldset>

						<!-- Form Name -->
						<legend>Mise en Forme de la carte</legend>

						<div class="form-group">
						  <label class="col-md-3 control-label" for="selectbasic">Séléctioner une carte</label>
						  <div class="col-md-5">
						    <select id="id_carte" name="id_carte" class="form-control">
						    	<option value="">-- Carte --</option>
						    </select>
						  </div>
						</div><br/><br/>

						<div class="form-group">
							<span>
								<p align="center">Séléctioner les menus que vous désirez mettre en place dans la carte, et affectez leur une position</p>
							</span>
						</div>

						<div class="form-group">
							<img id="img_position" class="col-md-12" src="http://localhost:8888/LunchR/lunchr_extranet/public/images/img_position.jpg" />
						</div>

						<div class="row">
							<div class="col-md-4">
								<label>Position n°1</label>
								    <select id="id_menu_1" name="id_menu_1" class="form-control">
								    	<option value="0">-- Menu --</option>
								    	<option value="">-- Menu --</option>
								    </select>
							</div>

							<div class="col-md-4">
								<label>Position n°2</label>
								    <select id="id_menu_2" name="id_menu_2" class="form-control">
								    	<option value="">-- Menu --</option>
								    </select>
							</div>

							<div class="col-md-4">
								<label>Position n°3</label>
								    <select id="id_menu_3" name="id_menu_3" class="form-control">
								    	<option value="">-- Menu --</option>
								    </select>
							</div>
						</div><br/><br/>


						<div class="row">
							<div class="col-md-4">
								<label>Position n°4</label>
								    <select id="id_menu_4" name="id_menu_4" class="form-control">
								    	<option value="">-- Menu --</option>
								    </select>
							</div>

							<div class="col-md-4">
								<label>Position n°5</label>
								    <select id="id_menu_5" name="id_menu_5" class="form-control">
								    	<option value="">-- Menu --</option>
								    </select>
							</div>

							<div class="col-md-4">
								<label>Position n°6</label>
								    <select id="id_menu_6" name="id_menu_6" class="form-control">
								    	<option value="">-- Menu --</option>
								    </select>
							</div>
						</div><br/><br/>


						<div class="row">
							<div class="col-md-4">
								<label>Position n°7</label>
								    <select id="id_menu_7" name="id_menu_7" class="form-control">
								    	<option value="">-- Menu --</option>
								    </select>
							</div>

							<div class="col-md-4">
								<label>Position n°8</label>
								    <select id="id_menu_8" name="id_menu_8" class="form-control">
								    	<option value="">-- Menu --</option>
								    </select>
							</div>
						</div><br/><br/>



					<script type="text/javascript">
						$(document).ready(function() {
						    var id_carte = $('#id_carte');
						    var id_menu_1 = $('#id_menu_1');
						    var id_menu_2 = $('#id_menu_2');
						    var id_menu_3 = $('#id_menu_3');
						    var id_menu_4 = $('#id_menu_4');
						    var id_menu_5 = $('#id_menu_5');
						    var id_menu_6 = $('#id_menu_6');
						    var id_menu_7 = $('#id_menu_7');
						    var id_menu_8 = $('#id_menu_8');
						     
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

						    ////////// MENU 1
						    // à la sélection d une région dans la liste
						    id_carte.on('change', function() {
						        var val = $(this).val(); // on récupère la valeur de la carte
						 
						        if(val != '') {
						            id_menu_1.empty(); // on vide la liste des menu
						             
						            $.ajax({
						                url: '../app/model/menu/select_menu_carte.php',
						                data: 'id_carte='+ val, // on envoie $_GET['id_carte']
						                dataType: 'json',
						                success: function(json) {
						                    $.each(json, function(index, value) {
						                        id_menu_1.append('<option value="'+ index +'">'+ value +'</option>');
						                    });
						                }
						            });
						        }
						    });

						    ////////// MENU 2
						    // à la sélection d une région dans la liste
						    id_carte.on('change', function() {
						        var val = $(this).val(); // on récupère la valeur de la carte
						 
						        if(val != '') {
						            id_menu_2.empty(); // on vide la liste des menu
						             
						            $.ajax({
						                url: '../app/model/menu/select_menu_carte.php',
						                data: 'id_carte='+ val, // on envoie $_GET['id_carte']
						                dataType: 'json',
						                success: function(json) {
						                    $.each(json, function(index, value) {
						                        id_menu_2.append('<option value="'+ index +'">'+ value +'</option>');
						                    });
						                }
						            });
						        }
						    });

						    ////////// MENU 3
						    // à la sélection d une région dans la liste
						    id_carte.on('change', function() {
						        var val = $(this).val(); // on récupère la valeur de la carte
						 
						        if(val != '') {
						            id_menu_3.empty(); // on vide la liste des menu
						             
						            $.ajax({
						                url: '../app/model/menu/select_menu_carte.php',
						                data: 'id_carte='+ val, // on envoie $_GET['id_carte']
						                dataType: 'json',
						                success: function(json) {
						                    $.each(json, function(index, value) {
						                        id_menu_3.append('<option value="'+ index +'">'+ value +'</option>');
						                    });
						                }
						            });
						        }
						    });

						    ////////// MENU 4
						    // à la sélection d une région dans la liste
						    id_carte.on('change', function() {
						        var val = $(this).val(); // on récupère la valeur de la carte
						 
						        if(val != '') {
						            id_menu_4.empty(); // on vide la liste des menu
						             
						            $.ajax({
						                url: '../app/model/menu/select_menu_carte.php',
						                data: 'id_carte='+ val, // on envoie $_GET['id_carte']
						                dataType: 'json',
						                success: function(json) {
						                    $.each(json, function(index, value) {
						                        id_menu_4.append('<option value="'+ index +'">'+ value +'</option>');
						                    });
						                }
						            });
						        }
						    });

						    ////////// MENU 5
						    // à la sélection d une région dans la liste
						    id_carte.on('change', function() {
						        var val = $(this).val(); // on récupère la valeur de la carte
						 
						        if(val != '') {
						            id_menu_5.empty(); // on vide la liste des menu
						             
						            $.ajax({
						                url: '../app/model/menu/select_menu_carte.php',
						                data: 'id_carte='+ val, // on envoie $_GET['id_carte']
						                dataType: 'json',
						                success: function(json) {
						                    $.each(json, function(index, value) {
						                        id_menu_5.append('<option value="'+ index +'">'+ value +'</option>');
						                    });
						                }
						            });
						        }
						    });

						    ////////// MENU 6
						    // à la sélection d une région dans la liste
						    id_carte.on('change', function() {
						        var val = $(this).val(); // on récupère la valeur de la carte
						 
						        if(val != '') {
						            id_menu_6.empty(); // on vide la liste des menu
						             
						            $.ajax({
						                url: '../app/model/menu/select_menu_carte.php',
						                data: 'id_carte='+ val, // on envoie $_GET['id_carte']
						                dataType: 'json',
						                success: function(json) {
						                    $.each(json, function(index, value) {
						                        id_menu_6.append('<option value="'+ index +'">'+ value +'</option>');
						                    });
						                }
						            });
						        }
						    });

						    ////////// MENU 7
						    // à la sélection d une région dans la liste
						    id_carte.on('change', function() {
						        var val = $(this).val(); // on récupère la valeur de la carte
						 
						        if(val != '') {
						            id_menu_7.empty(); // on vide la liste des menu
						             
						            $.ajax({
						                url: '../app/model/menu/select_menu_carte.php',
						                data: 'id_carte='+ val, // on envoie $_GET['id_carte']
						                dataType: 'json',
						                success: function(json) {
						                    $.each(json, function(index, value) {
						                        id_menu_7.append('<option value="'+ index +'">'+ value +'</option>');
						                    });
						                }
						            });
						        }
						    });

						    ////////// MENU 8
						    // à la sélection d une région dans la liste
						    id_carte.on('change', function() {
						        var val = $(this).val(); // on récupère la valeur de la carte
						 
						        if(val != '') {
						            id_menu_8.empty(); // on vide la liste des menu
						             
						            $.ajax({
						                url: '../app/model/menu/select_menu_carte.php',
						                data: 'id_carte='+ val, // on envoie $_GET['id_carte']
						                dataType: 'json',
						                success: function(json) {
						                    $.each(json, function(index, value) {
						                        id_menu_8.append('<option value="'+ index +'">'+ value +'</option>');
						                    });
						                }
						            });
						        }
						    });



						});
					</script>
					

						<!-- Button -->
						<div class="form-group">
						  <label class="col-md-3 control-label" for="singlebutton"></label>
						  <div class="col-md-5">
						    <button id="singlebutton" name="singlebutton" class="btn btn-primary col-md-12" type="submit">Valider</button>
						  </div>
						</div>

					</fieldset>
				</form>
		</div>


<?php include_once('../app/view/include/footer.inc.php'); ?>              