<?php include_once('../app/view/include/header.inc.php'); ?>
        
        <div class="col-lg-12">
        	<h1> Administration des commandes </h1>
        		<br/>
          		<?php include_once('../app/view/include/header_commande.inc.php'); ?>
          		<br/>
        </div>

        <div class="tableau_carte col-lg-12">
            <table id="tableau" class="table table-bordered table-hover2">

                  <tr>
                    <th height="40" width="110">Numéro de commande</th>
                    <th height="40" width="110">Prix total</th>
                    <th height="40" width="110">Mode de paiement</th>
                    <th height="40" width="110">Date</th>
                    <th height="40" width="110">Nom client</th>
                    <th height="40" width="110">Détails commande</th>
                  </tr>

                  	<?php	foreach ($afficher_commande_historique as $key => $row) {
                  			  $prix_total = $row['lp_prix'] * $row['lcl_quantite'];
                          echo'<tr>';
                          echo"<td class='desc_produit'> Lunchr N° ".$row['lc_id']."</td>";
                          echo"<td class='desc_produit'>"; echo $prix_total; echo" €</td>";
                          echo"<td class='.desc_prix_mp'>".$row['lc_type_paiment']."</td>";
                          echo"<td class='desc_heure'>Date : "; echo date('d/ m/ o', strtotime($row['lc_date'])); echo"</td>";
                          echo"<td class='desc_client'>".$row['lu_nom']."</td>";
                          echo'<td><a href="index.php?module=commandes&action=cmd_details&id_commande='.$row['lc_id'].'">Détails</a></td>';
                          echo"</tr>";
                        }
                    ?>          
            </table>
      	</div>



      		
<?php include_once('../app/view/include/footer.inc.php'); ?>