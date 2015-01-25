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

			
        		<form class="form-horizontal" id="formu_carte" name="formu_users" action="" method="POST">
					<fieldset>

						<!-- Form Name -->
						<legend>Nom de la carte</legend>

						<!-- Text input-->
						<div class="form-group">
						  <label class="col-md-1 control-label" for="textinput">Nom</label>  
						  <div class="col-md-3">
						  	<input required id="nom_carte" name="nom_carte" type="text" placeholder="Nom" class="form-control input-md">  
						  </div>
						</div>


						<!-- Button -->
						<div class="form-group">
						  <label class="col-md-1 control-label" for="singlebutton">Valider</label>
						  <div class="col-md-4">
						    <button id="singlebutton" name="singlebutton" class="btn btn-primary" type="submit">Valider</button>
						  </div>
						</div>

					</fieldset>
				</form>
		</div>


<?php include_once('../app/view/include/footer.inc.php'); ?>              