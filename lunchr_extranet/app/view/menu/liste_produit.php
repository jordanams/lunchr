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
				</ul>
				<br/>
				<?php echo 'Restaurant sélectionné : &nbsp;&nbsp; '; foreach ($select_resto_afficher as $key => $row) { echo '<span style="text-decoration:underline;">'.$row['lr_nom'].'</span>'; } ?>
				<br/><br/>

           </div>


           <div class="tableau_carte">
	            <table id="tableau" class="table">

	                  <tr>
	                  	<th height="40" width="110">Nom de la carte</th>
	                    <th height="40" width="110">Nom du menu</th>
	                    <th height="40" width="110">Nom du produit</th>
	                    <th height="40" width="110">Fiche détail du produit</th>
	                    <th height="40" width="110">Supprimer le produit</th>
	                  </tr>

	                  <?php foreach ($afficher_produit as $key => $row) {
	                              echo"<tr>";
	                              echo"<td>".$row['lce_nom']."</td>";
	                              echo"<td>".$row['lm_nom']."</td>";
	                              echo"<td>".$row['lp_nom']."</td>";
	                              echo'<td><a href="index.php?module=restaurants&action=details_resto&id='.$row['lm_id'].'">Détails</a></td>';
	                              echo'<td id="supp1"><a href="index.php?module=restaurants&action=supp_resto&id='.$row['lm_id'].'" onclick="return confirm_delete_carte()">Supprimer</a></td>';
	                              echo"</tr>";
	                        }
	                  ?>
	            </table>
      		</div>


<?php include_once('../app/view/include/footer.inc.php'); ?>              