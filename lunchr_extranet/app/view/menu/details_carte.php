<?php include_once('../app/view/include/header.inc.php'); ?>

           <div class="col-lg-12">

           		<h1> Administration des cartes / menus / produits</h1>
           		<br/>
		        <?php include_once('../app/view/include/header_carte_menu.inc.php'); ?>
				<br/>
				<br/><br/>

           </div>           
           	<div class="form-group">

           			<div class="details_cmp">
           				<span class="titre_cmp">Carte ( statut : <?php if($select_carte_actif[0]['lce_actif'] == 0) {echo"désactiver";} else {echo"activé";}?> )</span> <br/><br/>
							<table id="tableau" class="table table-bordered table-hover">
								<tr>
			                  		<th height="40" width="110">Nom de la carte</th>
			                    	<th height="40" width="110">Modifier</th>
			                    	<?php if($select_carte_actif[0]['lce_actif'] == 0) {echo'<th height="40" width="110">Activer</th>';} else {echo"";}  ?>
			                		<th height="40" width="110">Supprimer</th>
		                		</tr>

		                		<?php
				           		echo'<tr class="'; if($select_carte_actif[0]['lce_actif'] == 0) {echo"actif_warning";} else {echo"actif_success";} echo'">';
	                            echo"<td>"; echo $select_carte_actif[0]['lce_nom']; echo "</td>";
	                            echo'<td><a href="index.php?module=menu&action=modifier_carte&id_carte='.$verif_carte[0]['lce_id'].'"> Modifier</a></td>';
	                            if($select_carte_actif[0]['lce_actif'] == 0) {echo'<td><a href="index.php?module=menu&action=activer_carte&id_carte='.$verif_carte[0]['lce_id'].'">Activer</a></td>';} else {echo"";} 
	                            echo'<td id="supp1"><a href="index.php?module=menu&action=supp_carte&id_carte='.$verif_carte[0]['lce_id'].'" onclick="return confirm_delete_carte()">Supprimer</a></td>';
	                            echo"</tr>";
	                            ?>
							</table>
           			</div><br/><br/>


					<div class="details_cmp">
						<span class="titre_cmp">Menus présents dans la carte sélectionné</span> <br/><br/>
						<table id="tableau" class="table table-bordered table-hover">
							<tr>
			                  	<th height="40" width="110">Nom du menu</th>
			                    <th height="40" width="110">Modifier</th>
			                    <th height="40" width="110">Activer / Désactiver</th>
			                	<th height="40" width="110">Supprimer</th>
		                	</tr>
				           	<?php foreach ($verif_menu as $key => $row) {
				           			echo'<tr class="'; if($row['lm_actif'] == 0) {echo"actif_warning";} else {echo"actif_success";} echo'">';
	                              	echo"<td>".$row['lm_nom']."</td>";
	                             	echo'<td><a href="index.php?module=menu&action=modifier_menu&id_menu='.$row['lm_id'].'"> Modifier</a></td>';
	                             	if($row['lm_actif'] == 0) {echo'<td><a href="index.php?module=menu&action=activer_menu&id_menu_actif='.$row['lm_id'].'"> Activer</a></td>';} 
	                             	else {echo'<td><a href="index.php?module=menu&action=activer_menu&id_menu_null='.$row['lm_id'].'"> Désactiver</a></td>';}
	                              	echo'<td id="supp1"><a href="index.php?module=menu&action=supp_menu&id_menu='.$row['lm_id'].'&menu_detail" onclick="return confirm_delete_menu()">Supprimer</a></td>';
	                              	echo"</tr>";
				           		}
					        ?>
					    </table>
					</div><br/>

					<div class="details_cmp">
						<span class="titre_cmp">Produits présents dans le menu sélectionné</span> <br/><br/>
						<table id="tableau" class="table table-bordered table-hover">

				                  <tr>
				                  	<th height="40" width="110">Nom du menu</th>
				                    <th height="40" width="110">Nom du produit</th>
				                    <th height="40" width="110">Modifier</th>
				                    <th height="40" width="110">Activer / Désactiver</th>
				                    <th height="40" width="110">Supprimer</th>
				                  </tr>
							
					           	<?php foreach ($verif_produit as $key => $row) {
					           			echo'<tr class="'; if($row['lp_actif'] == 0) {echo"actif_warning";} else {echo"actif_success";} echo'">';
		                              	echo"<td>".$row['lm_nom']."</td>";
		                              	echo"<td>".$row['lp_nom']."</td>";
		                             	echo'<td><a href="index.php?module=menu&action=modifier_produit&id_produit='.$row['lp_id'].'"> Modifier</a></td>';
		                             	if($row['lp_actif'] == 0) {echo'<td><a href="index.php?module=menu&action=activer_produit&id_produit_actif='.$row['lp_id'].'"> Activer</a></td>';} 
		                             	else {echo'<td><a href="index.php?module=menu&action=activer_produit&id_produit_null='.$row['lp_id'].'"> Désactiver</a></td>';}
		                              	echo'<td id="supp1"><a href="index.php?module=menu&action=supp_produit&id_produit='.$row['lp_id'].'&produit_detail" onclick="return confirm_delete_produit()">Supprimer</a></td>';
		                              	echo"</tr>";
					           		}
						        ?>
						</table>
					</div>
			</div>



<?php include_once('../app/view/include/footer.inc.php'); ?>              