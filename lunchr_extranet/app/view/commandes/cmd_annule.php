<?php include_once('../app/view/include/header.inc.php'); ?>
        
        <div class="col-lg-12">
        	<h1> Administration des commandes </h1>
        		<br/>
          		<?php include_once('../app/view/include/header_commande.inc.php'); ?>
          		<br/>
        </div>

        <?php foreach ($afficher_commande_annule as $key => $row){ ?>
            <div class="tableau_carte bordure_commande_annule col-lg-12">

                  <h3>N° de commande <?php echo $row['lc_id']; ?></h3>
                  <br/>
                  <h5>Liste des produits de la commande :</h5>
                  <ul class="liste_commande">
                    <?php foreach ($produit[$key] as $key => $row) { ?>
                      <li><?php echo $row['lp_nom']; ?> (x<?php echo $row['lcl_quantite']; ?>)</li>
                    <?php } ?>
                  </ul>

                  <table>
                      <tr>
                        <th height="40" width="160">Date d'arrivée</th>
                        <th height="40" width="160">Total commande</th>
                        <th height="40" width="160">Détails commande</th>
                      </tr>

                      <tr>
                        <td><?php echo date('d/ m/ y', strtotime($row['lc_date_dish'])); ?></td>
                        <td><?php echo $row['lc_total']; echo" €";?></td>
                        <td><?php echo'<a href="index.php?module=commandes&action=cmd_details&id_commande='.$row['lc_id'].'">Détails</a>'; ?></td></td>
                      </tr>
                  </table>
                  <br/>
            </div>
            <br/>
            <br/>

            <?php
            }
            ?>
      		
<?php include_once('../app/view/include/footer.inc.php'); ?>