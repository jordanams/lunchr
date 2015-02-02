<?php include_once('../app/view/include/header.inc.php'); ?>

           <div class="col-lg-12">

           		<h1> Administration des cartes / menus </h1>
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
				<?php echo '<span class="titre_cmp">Carte sélectionné :</span> &nbsp;&nbsp; '; echo'<br/><br/>'; echo $verif_details[0]['lce_nom']; ?>
				<br/><br/>

           </div>

           	<div class="form-group">

					<div class="details_cmp">
						<span class="titre_cmp">Menus de la carte sélectionné :</span> <br/><br/>
				           	<?php foreach ($verif_details as $key => $row) {
				           			echo ''.$row['lm_nom'].'<br/>';
				           		}
					        ?>
					</div><br/>

					<span class="titre_cmp">Produits de la carte sélectionné :</span> <br/><br/>
					<table id="tableau" class="table table-bordered table-hover">

	                  <tr>
	                  	<th height="40" width="110">Nom du menu</th>
	                    <th height="40" width="110">Nom du produit</th>
	                    <th height="40" width="110">Modifier</th>
	                    <th height="40" width="110">Supprimer</th>
	                  </tr>
						
				           	<?php foreach ($verif_details as $key => $row) {
				           			echo"<tr>";
	                              	echo"<td>".$row['lm_nom']."</td>";
	                              	echo"<td>".$row['lp_nom']."</td>";
	                             	echo'<td><a href="index.php?module=menu&action=modifier_produit&id_produit='.$row['lp_id'].'"> Modifier</a></td>';
	                              	echo'<td id="supp1"><a href="index.php?module=menu&action=supp_produit&id='.$row['lm_id'].'" onclick="return confirm_delete_produit()">Supprimer</a></td>';
	                              	echo"</tr>";
				           		}
					        ?>
					</div>

			
			</div>


<?php include_once('../app/view/include/footer.inc.php'); ?>              