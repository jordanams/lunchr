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
				<?php echo 'Restaurant sélectionné : &nbsp;&nbsp; '; foreach ($select_resto_afficher as $key => $row) { echo '<span style="text-decoration:underline;">'.$row['lr_nom'].'</span><br/>'; } ?>
				<?php //echo 'Carte sélectionné : &nbsp;&nbsp; '; echo '<span style="text-decoration:underline;"> </span>'; } ?>
				<br/><br/>


						<!-- Form Name -->
						<legend>Mise en forme actuel de la carte</legend>
						<br/>


						<div class="row">

							<?php foreach ($afficher_menu as $key => $row) {
								$ordre = $row['lm_ordre']+1;
								echo '<div class="col-md-4">';
								echo '<label class="mise_ef">Position n°'.$ordre.'</label>';
								echo '<select id="id_menu" name="id_menu" class="form-control">';
								echo '<option value="'.$row['lm_ordre'].'">'.$row['lm_nom'].'</option>';
								echo '</select> </div>';
							}
							?>

						</div><br/><br/>
					<br/><br/><br/><br/><br/><br/><br/>



			
        		<form class="form-horizontal" id="menu_select" name="menu_select" action="" method="POST">
					<fieldset>

						<!-- Form Name -->
						<legend>Mettre en forme la carte</legend>
						<br/><br/>

						<div class="form-group">
							<span>
								<p align="center">Séléctioner les menus que vous désirez mettre en place dans la carte, et affectez leur une position</p>
							</span>
						</div>

						<div class="form-group">
							<img id="img_position" class="col-md-12" src="http://localhost:8888/LunchR/lunchr_extranet/public/images/img_position.jpg" />
						</div><br/><br/>

						<div class="row">

								<?php foreach ($afficher_menu as $key => $row) {
								$ordre = $key+1;
								echo'<div class="col-md-4">';
								echo'<label class="mise_ef">Position n°'.$ordre.'</label>';
								echo'<select id="id_menu_ordre" name="id_menu_ordre'.$key.'" class="form-control">';
								echo'<option value="">-- Sélectionner un menu --</option>';
								foreach ($afficher_menu as $key => $row) {
								echo '<option value="'.$row['lm_id'].'">'.$row['lm_nom'].'</option>';
								}
								echo'</select>';
								echo'</div>';
								}?>
						</div>	
						<br/><br/>
					

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