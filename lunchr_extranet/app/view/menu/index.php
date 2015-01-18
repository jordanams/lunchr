<?php include_once('../app/view/include/header.inc.php'); ?>

           <div class="col-lg-12">

           		<h1> Administration des cartes / menus </h1>
		        <ul class="nav nav-tabs nav-justified" role="tablist">
			        <li role="presentation"<?php if($_GET['action']=='index') { echo' class="active"'; } ?>><a href="index.php?module=menu&action=index">Listes des cartes</a></li>
			        <li role="presentation"<?php if($_GET['action']=='liste_menu') { echo' class="active"'; } ?>><a href="index.php?module=menu&action=liste_menu">Listes des menus</a></li>
			        <li role="presentation"<?php if($_GET['action']=='liste_produit') { echo' class="active"'; } ?>><a href="index.php?module=menu&action=liste_produit">Liste des produits</a></li>
		  			<li role="presentation"<?php if($_GET['action']=='ajouter_carte') { echo' class="active"'; } ?>><a href="index.php?module=menu&action=ajouter_carte">Ajouter une carte</a></li>
		  			<li role="presentation"<?php if($_GET['action']=='ajouter_menu') { echo' class="active"'; } ?>><a href="index.php?module=menu&action=ajouter_menu">Ajouter un menu</a></li>
		  			<li role="presentation"<?php if($_GET['action']=='ajouter_produit') { echo' class="active"'; } ?>><a href="index.php?module=menu&action=ajouter_produit">Ajouter des produits</a></li>
				</ul>

           </div>


           	<div class="tableau_carte">
	            <table id="tableau" class="table">

	                  <tr>
	                  	<th height="40" width="110">Nom du restaurant</th>
	                    <th height="40" width="110">Nom de la carte</th>
	                    <th height="40" width="110">Ajouter un menu</th>
	                    <th height="40" width="110">Fiche détail de la carte</th>
	                    <th height="40" width="110">Supprimer la carte</th>
	                  </tr>

	                  <?php foreach ($afficher_carte as $key => $row) {
	                              echo"<tr>";
	                              echo"<td>".$row['lr_nom']."</td>"; 
	                              echo"<td>".$row['lce_nom']."</td>";
	                              echo'<td><a class="fa fa-plus-square" href="index.php?module=menu&action=ajouter_menu"> Ajouter</a></td>';
	                              echo'<td><a href="index.php?module=restaurants&action=details_resto&id='.$row['lce_id'].'">Détails</a></td>';
	                              echo'<td id="supp1"><a href="index.php?module=restaurants&action=supp_resto&id='.$row['lce_id'].'" onclick="return confirm_delete_carte()">Supprimer</a></td>';
	                              echo"</tr>";
	                        }
	                  ?>
	            </table>
      		</div>


<?php include_once('../app/view/include/footer.inc.php'); ?>              