<?php include_once('../app/view/include/header.inc.php'); ?>
        
        <div class="col-lg-12">
        	<h1> Ajouter la quantité de produits </h1>
        		<br/>
          		<ul class="nav nav-tabs nav-justified" role="tablist">
			        <li role="presentation"<?php if($_GET['action']=='index') { echo' class="active"'; } ?>><a href="index.php?module=quantites-produits&action=index">Liste des quantités de produits</a></li>
              <br/>
              <?php echo 'Restaurant sélectionné : &nbsp;&nbsp; '; foreach ($select_resto_afficher as $key => $row) { echo '<span style="text-decoration:underline;">'.$row['lr_nom'].'</span><br/>'; } ?>
				</ul>
        </div>


        <div class="tableau_carte col-lg-12">
            <table id="tableau" class="table table-bordered table-hover">

                  <tr>
                  	<th height="40" width="110">Nom de la carte</th>
                    <th height="40" width="110">Quantités de produits disponibles</th>
                    <th height="40" width="110">Ajoutés des quantités</th>
                  </tr>

                  <?php foreach ($afficher_quantites as $key => $row) {
                              echo'<tr>';
                              echo"<td>".$row['lce_nom']."</td>";
                              echo"<td>".$row['lp_quantites']." quantités de produits</td>";
                              echo'<td id="supp1"><a href="index.php?module=quantites-produits&action=ajouter_quantites&id_menu='.$row['lm_id'].'&id_carte='.$row['lce_id'].'">Ajoutés des quantités</a></td>';
                              echo"</tr>";
                        }
                  ?>
            </table>
      	</div>

<?php include_once('../app/view/include/footer.inc.php'); ?>