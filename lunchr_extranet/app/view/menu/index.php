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
		  			<?php if ($_SESSION['id_resto'] ==! "") {echo '<li role="presentation"'; if($_GET['action']=='select_mise_en_forme') { echo' class="active"'; } echo'><a href="index.php?module=menu&action=select_mise_en_forme">Mise en forme</a></li>'; }?>
				</ul>
				<br/>
				<?php if ($_SESSION['id_resto'] ==! ""){
					echo 'Restaurant sélectionné : &nbsp;&nbsp; '; foreach ($select_resto_afficher as $key => $row) { echo '<span style="text-decoration:underline;">'.$row['lr_nom'].'</span>'; }
				}?>
				<br/><br/>

           </div>

        <?php

		if ($_SESSION['id_resto'] == "") {
				
           echo'<div class="col-lg-12">

           	<form class="form-horizontal" id="formu_carte" name="formu_users" action="" method="POST">
				<fieldset>

		           <div class="form-group">
						<label class="col-md-3 control-label" for="selectbasic">Séléctioner un restaurant et valider</label>
						<div class="col-md-5">
							<select id="nom_resto_select" name="nom_resto_select" class="form-control">';
									foreach ($select_resto as $key => $row) {
								    echo'<option value="'.$row['lr_id'].'">'.$row['lr_nom'].'</option>';
								}
								
							echo'</select>
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

			</div>';
		}

		else {
           	echo'<div class="tableau_carte">
	            <table id="tableau" class="table table-bordered table-hover">

	                  <tr>
	                    <th height="40" width="110">Nom de la carte</th>
	                    <th height="40" width="110">Ajouter un menu</th>
	                    <th height="40" width="110">Fiche détail de la carte</th>
	                    <th height="40" width="110">Supprimer la carte</th>
	                  </tr>';
	        

	                  		foreach ($afficher_carte as $key => $row) {
	                            echo"<tr>";
	                            echo"<td>".$row['lce_nom']."</td>";
	                            echo'<td><a class="fa fa-plus-square" href="index.php?module=menu&action=ajouter_menu"> Ajouter</a></td>';
	                            echo'<td><a href="index.php?module=menu&action=details_carte&id_carte='.$row['lce_id'].'">Détails</a></td>';
	                            echo'<td id="supp1"><a href="index.php?module=menu&action=supp_carte&id_carte='.$row['lce_id'].'" onclick="return confirm_delete_carte()">Supprimer</a></td>';
	                            echo"</tr>";
	                        }
	                  
	            echo'</table>';
      		echo'</div>';
      	}
	    ?>


<?php include_once('../app/view/include/footer.inc.php'); ?>              