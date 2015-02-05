<?php include_once('../app/view/include/header.inc.php'); ?>

           <div class="col-lg-12">

           		<h1> Administration des cartes / menus / produits</h1>
           		<br/>
		        <?php include_once('../app/view/include/header_carte_menu.inc.php'); ?>
				<br/>
				<?php echo 'Restaurant sélectionné : &nbsp;&nbsp; '; foreach ($select_resto_afficher as $key => $row) { echo '<span style="text-decoration:underline;">'.$row['lr_nom'].'</span>'; } ?>
				<br/><br/>

           </div>


           <div class="tableau_carte">
	            <table id="tableau" class="table table-bordered table-hover">

	                  <tr>
	                  	<th height="40" width="110">Nom de la carte</th>
	                    <th height="40" width="110">Nom du menu</th>
	                    <th height="40" width="110">Fiche détail du menu</th>
	                    <th height="40" width="110">Supprimer le menu</th>
	                  </tr>

	                  <?php foreach ($afficher_menu as $key => $row) {
	                              echo"<tr>";
	                              echo"<td>".$row['lce_nom']."</td>";
	                              echo"<td>".$row['lm_nom']."</td>";
	                              echo'<td><a href="index.php?module=menu&action=details_menu&id='.$row['lm_id'].'">Détails</a></td>';
	                              echo'<td id="supp1"><a href="index.php?module=menu&action=supp_menu&id='.$row['lm_id'].'" onclick="return confirm_delete_menu()">Supprimer</a></td>';
	                              echo"</tr>";
	                        }
	                  ?>
	            </table>
      		</div>


<?php include_once('../app/view/include/footer.inc.php'); ?>              