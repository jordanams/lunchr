<?php include_once('../app/view/include/header.inc.php'); ?>

           <div class="col-lg-12">

           		<h1> Administration des cartes / menus / produits</h1> 
           		<br/>
           		<?php if(isset($_SESSION['id_resto'])) { 
		        	  include_once('../app/view/include/header_carte_menu.inc.php'); 
					  echo'<br/>';
					  if ($_SESSION['id_resto'] ==! ""){
					  echo 'Restaurant sélectionné : &nbsp;&nbsp; '; foreach ($select_resto_afficher as $key => $row) { echo '<span style="text-decoration:underline;">'.$row['lr_nom'].'</span>'; }
					  }
					}
				?>
				<br/><br/>

           </div>
        <?php
		if(!isset($_SESSION['id_resto'])) {
				
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
	                            echo'<tr class="'; if($row['lce_actif'] == 0) {echo"actif_warning";} else {echo"actif_success";} echo'">';
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