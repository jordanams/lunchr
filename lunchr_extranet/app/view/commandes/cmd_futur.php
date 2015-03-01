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
                    <th height="40" width="110">Nom du produit</th>
                    <th height="40" width="110">Commentaire</th>
                    <th height="40" width="110">Quantitées</th>
                    <th height="40" width="110">Prix total</th>
                    <th height="40" width="110">Mode de paiement</th>
                    <th height="40" width="110">Heure d'arrivée</th>
                    <th height="40" width="110">Date d'arrivée</th>
                    <th height="40" width="110">Valider la commande</th>
                    <th height="40" width="110">Détails commande</th>
                  </tr>

                  	<?php foreach ($afficher_commande_futur as $key => $row) {
                  		  $prix_total = $row['lp_prix'] * $row['lcl_quantite'];
                          echo'<tr>';
                          echo"<td class='desc_produit'>".$row['lp_nom']."</td>";
                          echo"<td class='desc_produit'>".$row['lc_commentaire']."</td>";
                          echo"<td class='desc_produit'>x "; echo"".$row['lcl_quantite']." "; echo"".$row['lp_nom'].""; echo"</td>";
                          echo"<td class='desc_prix_mp'>"; echo $prix_total; echo" €</td>";
                          echo"<td class='desc_prix_mp'>".$row['lc_type_paiment']."</td>";
                          echo"<td class='desc_heure'>"; echo date('H:i', strtotime($row['lc_date'])); echo"</td>";
                          echo"<td class='desc_heure'>"; echo date('d/ m/ o', strtotime($row['lc_date'])); echo"</td>";
                          echo'<td><a href="index.php?module=commandes&action=gestion_etat_commande&id_commande='.$row['lc_id'].'&page=3">Valider</a></td>';
                          echo'<td><a href="index.php?module=commandes&action=cmd_details&id_commande='.$row['lc_id'].'">Détails</a></td>';
                          echo"</tr>";
                        }
                    ?>     
            </table>
      	</div>

<?php include_once('../app/view/include/footer.inc.php'); ?>
     
             
                         