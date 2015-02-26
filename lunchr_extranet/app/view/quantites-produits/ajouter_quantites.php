<?php include_once('../app/view/include/header.inc.php'); ?>
        
        <div class="col-lg-12">
        	<h1> Ajouter la quantité de produits </h1>
        	<br/>
          	<ul class="nav nav-tabs nav-justified" role="tablist">
            	<li role="presentation"<?php if($_GET['action']=='index') { echo' class="active"'; } ?>><a href="index.php?module=quantites-produits&action=index">Liste des quantités de produits</a></li>
			</ul>
        </div><br/>

        <div class="col-lg-12">

        	<br/>
	        <legend>Ajouter des quantités pour chaques produits</legend>
	        <?php echo 'Restaurant sélectionné : &nbsp;&nbsp; '; foreach ($select_resto_afficher as $key => $row) { echo '<span style="text-decoration:underline;">'.$row['lr_nom'].'</span><br/>'; } ?>
			<?php echo 'Carte sélectionné : &nbsp;&nbsp; '; echo '<span style="text-decoration:underline;">'; echo $afficher_carte_select[0]['lce_nom']; echo '</span>'; ?>
			<br/><br/><br/>

			<ul class="nav nav-tabs nav-justified" role="tablist">
				<?php foreach ($verif_menu as $key => $row) {
	        		echo'<li role="presentation"';  echo'class="active cursor"'; echo '><a href="index.php?module=quantites-produits&action=ajouter_quantites&id_menu='.$row['lm_id'].'&id_carte='.$row['lce_id'].'">'.$row['lm_nom'].'</a></li>';
				}?>
			</ul>

			<div class="tableau_carte">
	            <table id="tableau" class="table table-bordered table-hover">

	                  <tr>
	                  	<th height="40" width="110">Image produit</th>
	                  	<th height="40" width="110">Nom produit</th>
	                    <th height="40" width="110">Quantités produits disponibles</th>
	                    <th height="40" width="110">Ajouter quantités produits</th>
	                    <th height="40" width="110">Valider</th>
	                  </tr>

	                  <?php foreach ($liste_quantites_produits as $key => $row) {
	                              echo'<tr>';
	                              echo"<td>"; echo"<img width='100' class='img-responsive thumbnail' src='".$row['lp_image']."' alt='".$row['lp_nom']."'/>"; echo"</td>";
	                              echo"<td>".$row['lp_nom']."</td>";
	                              echo"<td>".$row['lp_quantites']." produits</td>";
	                              echo'<form class="form-horizontal" action="" method="POST"><fieldset>';
	                              echo'<td><input id="nbr_produit" name="nbr_produit" type="text" placeholder="Ajouter quantités" class="form-control input-md"></td>';
	                              echo'<input type="hidden" id="id_produit" name="id_produit" value="'.$row['lp_id'].'">';
	                              echo'<td><button class="btn btn-primary" type="submit">Valider</button></td>';
	                              echo'</fieldset></form>';
	                              echo"</tr>";
	                        }
	                  ?>
	            </table>
	      	</div>

		</div>


<?php include_once('../app/view/include/footer.inc.php'); ?>