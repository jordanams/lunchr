<?php include_once('../app/view/include/header.inc.php'); ?>

           <div class="col-lg-12">

           		<h1> Administration des restaurants </h1>
		        <?php include_once('../app/view/include/header.restaurant.inc.php'); ?>

           </div>

           <div>
	            <table id="tableau" class="table table-hover">

	                  <tr>
	                        <th height="40" width="110">Nom</th>
	                        <th height="40" width="110">Adresse</th>
	                        <th height="40" width="110">Description</th>
	                        <th height="40" width="110">Désactiver</th>
	                        <th height="40" width="110">Fiche</th>
	                        <th height="40" width="110">Supprimer</th>
	                  </tr>

	                  <?php foreach ($afficher_resto as $key => $row) {
	                              echo'<tr class="'; if($row['lr_actif_valid'] == 1) {echo"actif_success";} echo'">';
	                              echo"<td>".$row['lr_nom']."</td>";
	                              echo"<td>".$row['lr_adresse']."</td>";
	                              echo"<td>".$row['lr_description']."</td>";
	                              echo'<td><a href="index.php?module=restaurants&action=details_resto&id='.$row['lr_id'].'">Détails</a></td>';
	                              echo'<td><a href="index.php?module=restaurants&action=activer_desactiver_resto&id_desactiver_resto='.$row['lr_id'].'">Désactiver</a></td>';
	                              echo'<td id="supp1"><a href="index.php?module=restaurants&action=supp_resto&id_carte='.$row['lr_id'].'&id_carte_index" onclick="return confirm_delete_resto()">Supprimer</a></td>';
	                              echo"</tr>";
	                        }
	                  ?>
	            </table>
      		</div>


<?php include_once('../app/view/include/footer.inc.php'); ?>              