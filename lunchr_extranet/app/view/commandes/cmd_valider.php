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
                    <th height="40" width="110">Produit</th>
                    <th height="40" width="110">Quantitées<br/>Prix total<br/>Mode de paiement</th>
                    <th height="40" width="110">Heure d'arrivée</th>
                    <th height="40" width="110">Date d'arrivée</th>
                    <th height="40" width="110">Nom client<br/> N°téléphone client</th>
                    <th height="40" width="110">Commande terminé</th>
                    <th height="40" width="110">Client non présent</th>
                    <th height="40" width="110">Détails commande</th>
                  </tr>

                  	<?php	foreach ($afficher_commande_valide as $key => $row) {
                  			  $prix_total = $row['lp_prix'] * $row['lcl_quantite'];
                          $num_commande = $row['lc_id'] * 1;
                          echo'<tr>';
                          echo"<td class='desc_produit'> Lunchr N° "; echo $num_commande; echo"</td>";
                          echo"<td class='desc_produit'>".$row['lp_nom']."</td>";
                          echo"<td class='desc_produit'>x "; echo"".$row['lcl_quantite']." "; echo"".$row['lp_nom'].""; 
                          echo"<br/>"; echo "<u>Total : </u>"; echo $prix_total; echo" €";
                          echo"<br/>"; echo "<u>Paiement : </u>".$row['lc_type_paiment'].""; echo"</td>";
                          echo"<td class='desc_heure'>Heure : <b>"; echo date('H:i', strtotime($row['lc_date'])); echo"</b></td>";
                          echo"<td class='desc_heure'><b>"; echo date('d/ m/ y', strtotime($row['lc_date'])); echo"</b></td>";
                          echo"<td class='desc_client'>"; echo"Nom : ".$row['lu_nom'].""; echo"<br/>"; echo"Tél : ".$row['lu_tel'].""; echo"</td>";
                          echo'<td><a href="index.php?module=commandes&action=gestion_etat_commande&id_commande_termine='.$row['lc_id'].'&page=4" onclick="return confirm_termine_commande()">Terminer</a></td>';
                          echo'<td><a href="index.php?module=commandes&action=gestion_etat_commande&id_commande_annule='.$row['lc_id'].'&page=4" onclick="return confirm_annuler_commande()">Annulation commande</a></td>';
                          echo'<td><a href="index.php?module=commandes&action=cmd_details&id_commande='.$row['lc_id'].'">Détails</a></td>';
                          echo"</tr>";
                        }
                    ?>          
            </table>
      	</div>



      		
<?php include_once('../app/view/include/footer.inc.php'); ?>