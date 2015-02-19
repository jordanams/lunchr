<?php include_once('../app/view/include/header.inc.php'); ?>

           <div class="col-lg-12">
           		<h1> Administration restaurant</h1>
           		<br/>
			        <ul class="nav nav-tabs nav-justified" role="tablist">
				        <li role="presentation"<?php if($_GET['action']=='liste_restaurant') { echo' class="active"'; } ?>><a href="index.php?module=restaurant&action=liste_restaurant">Liste restaurant</a></li>
				        <li role="presentation"<?php if($_GET['action']=='ajouter_resto') { echo' class="active"'; } ?>><a href="index.php?module=restaurant&action=ajouter_resto">Ajouter un restaurant</a></li>
					</ul>
				<br/>
           </div>


           <div class="tableau_carte col-lg-12">
	            <table id="tableau" class="table table-bordered table-hover">

	                  <tr>
	                  	<th height="40" width="110">Nom du restaurant</th>
	                    <th height="40" width="110">Statut du restaurant</th>
	                    <th height="40" width="110">Fiche détail du restaurant</th>
	                    <th height="40" width="110">Supprimer le restaurant</th>
	                  </tr>

	                  <?php foreach ($select_resto as $key => $row) {
	                              echo'<tr class="'; if($row['lr_actif_valid'] == 0) {echo"actif_warning";} else {echo"actif_success";} echo'">';
	                              echo"<td>".$row['lr_nom']."</td>";
	                              echo"<td>"; 	if($row['lr_actif_attente'] == 1) {echo"en attente de validation";} 
	                              				else if ($row['lr_actif_valid'] == 1) {echo"validé";} 
	                              				else if ($row['lr_supp_attente'] == 1) {echo"en attente de suppression";} echo"</td>";
	                              echo'<td><a href="index.php?module=restaurant&action=details_resto&id_resto='.$row['lr_id'].'">Détails</a></td>';
	                              echo'<td id="supp1">'; if ($row['lr_supp_attente'] == 0) {echo'<a href="index.php?module=restaurant&action=supp_resto&id_resto='.$row['lr_id'].'" onclick="return confirm_delete_resto()">Supprimer</a></td>';}
	                              echo"</tr>";
	                        }
	                  ?>
	            </table>
      		</div>


<?php include_once('../app/view/include/footer.inc.php'); ?>              