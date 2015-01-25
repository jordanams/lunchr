<?php include_once('../app/view/include/header.inc.php'); ?>

           <div class="col-lg-12">

           		<h1> Administration des cartes / menus </h1> 
		        <ul class="nav nav-tabs nav-justified" role="tablist">
		        	<?php if ($_SESSION['id_resto'] ==! "") {echo '<li role="presentation"'; if($_GET["action"]=="changer_resto") { echo' class="active"'; } echo'><a href="index.php?module=menu&action=changer_resto">Changer de restaurant</a></li>'; }?>
			        <?php if ($_SESSION['id_resto'] ==! "") {echo '<li role="presentation"'; if($_GET['action']=='index') { echo' class="active"'; } echo'><a href="index.php?module=menu&action=index">Listes des cartes</a></li>'; }?>
			        <?php if ($_SESSION['id_resto'] ==! "") {echo '<li role="presentation"'; if($_GET['action']=='liste_menu') { echo' class="active"'; } echo'><a href="index.php?module=menu&action=liste_menu">Listes des menus</a></li>'; }?>
			        <?php if ($_SESSION['id_resto'] ==! "") {echo '<li role="presentation"'; if($_GET['action']=='liste_produit') { echo' class="active"'; } echo'><a href="index.php?module=menu&action=liste_produit">Liste des produits</a></li>'; }?>
		  			<?php if ($_SESSION['id_resto'] ==! "") {echo '<li role="presentation"'; if($_GET['action']=='ajouter_carte') { echo' class="active"'; } echo'><a href="index.php?module=menu&action=ajouter_carte">Ajouter une carte</a></li>'; }?>
		  			<?php if ($_SESSION['id_resto'] ==! "") {echo '<li role="presentation"'; if($_GET['action']=='ajouter_menu') { echo' class="active"'; } echo'><a href="index.php?module=menu&action=ajouter_menu">Ajouter un menu</a></li>'; }?>
		  			<?php if ($_SESSION['id_resto'] ==! "") {echo '<li role="presentation"'; if($_GET['action']=='ajouter_produit') { echo' class="active"'; } echo'><a href="index.php?module=menu&action=ajouter_produit">Ajouter des produits</a></li>'; }?>
		  			<?php if ($_SESSION['id_resto'] ==! "") {echo '<li role="presentation"'; if($_GET['action']=='mise_en_forme') { echo' class="active"'; } echo'><a href="index.php?module=menu&action=mise_en_forme">Mise en forme</a></li>'; }?>
				</ul>
				<br/>
				<br/><br/>

           </div>



           <div class="col-lg-12">

           	<form class="form-horizontal" id="formu_carte" name="formu_users" action="" method="POST">
				<fieldset>

		           <div class="form-group">
						<label class="col-md-3 control-label" for="selectbasic">Séléctioner un restaurant et valider</label>
						<div class="col-md-5">
							<select id="nom_resto_select" name="nom_resto_select" class="form-control">
									<?php foreach ($select_resto as $key => $row) {
								    echo'<option value="'.$row['lr_id'].'">'.$row['lr_nom'].'</option>';
								}?>
							</select>
						</div>
					</div>

					<div class="form-group">
					<label class="col-md-3 control-label" for="singlebutton">Valider</label>
						<div class="col-md-4">
							<button id="singlebutton" name="singlebutton" class="btn btn-primary" type="submit">Valider</button>
						</div>
					</div>

					</fieldset>
				</form>

			</div>
		


<?php include_once('../app/view/include/footer.inc.php'); ?>              