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
                    <th height="40" width="110"><?php if (!isset($_GET['ordre_commande'])) {echo'<a href="index.php?module=commandes&action=gestion_ordre&ordre_valider&ordre_commande=commande_asc">Numéro de commande</a>';}
                                                      else if ($_GET['ordre_commande'] == "commande_asc") {echo'<a href="index.php?module=commandes&action=gestion_ordre&ordre_valider&ordre_commande=commande_desc">Numéro de commande <i class="fa fa-arrow-up"></i></a>';}
                                                      else if ($_GET['ordre_commande'] == "commande_desc") {echo'<a href="index.php?module=commandes&action=gestion_ordre&ordre_valider&ordre_commande=commande_asc">Numéro de commande <i class="fa fa-arrow-down"></i></a>';}
                                                ?></th>
                    <th height="40" width="110">Produit</th>
                    <th height="40" width="110">Quantitées<br/>
                                                <?php if (!isset($_GET['ordre_prix'])) {echo'<a href="index.php?module=commandes&action=gestion_ordre&ordre_valider&ordre_prix=prix_asc">Prix total</a>';}
                                                      else if ($_GET['ordre_prix'] == "prix_asc") {echo'<a href="index.php?module=commandes&action=gestion_ordre&ordre_valider&ordre_prix=prix_desc">Prix total <i class="fa fa-arrow-up"></i></a>';}
                                                      else if ($_GET['ordre_prix'] == "prix_desc") {echo'<a href="index.php?module=commandes&action=gestion_ordre&ordre_valider&ordre_prix=prix_asc">Prix total <i class="fa fa-arrow-down"></i></a>';}
                                                ?>
                                                <br/>Mode de paiement</th>
                    <th height="40" width="110"><?php if (!isset($_GET['ordre_heure'])) {echo'<a href="index.php?module=commandes&action=gestion_ordre&ordre_valider&ordre_heure=heure_asc">Heure d\'arrivée</a>';}
                                                      else if ($_GET['ordre_heure'] == "heure_asc") {echo'<a href="index.php?module=commandes&action=gestion_ordre&ordre_valider&ordre_heure=heure_desc">Heure d\'arrivée <i class="fa fa-arrow-up"></i></a>';}
                                                      else if ($_GET['ordre_heure'] == "heure_desc") {echo'<a href="index.php?module=commandes&action=gestion_ordre&ordre_valider&ordre_heure=heure_asc">Heure d\'arrivée <i class="fa fa-arrow-down"></i></a>';}
                                                ?></th>
                    <th height="40" width="110"><?php if (!isset($_GET['ordre_date'])) {echo'<a href="index.php?module=commandes&action=gestion_ordre&ordre_valider&ordre_date=date_asc">Date d\'arrivée</a>';}
                                                      else if ($_GET['ordre_date'] == "date_asc") {echo'<a href="index.php?module=commandes&action=gestion_ordre&ordre_valider&ordre_date=date_desc">Date d\'arrivée <i class="fa fa-arrow-up"></i></a>';}
                                                      else if ($_GET['ordre_date'] == "date_desc") {echo'<a href="index.php?module=commandes&action=gestion_ordre&ordre_valider&ordre_date=date_asc">Date d\'arrivée <i class="fa fa-arrow-down"></i></a>';}
                                                ?></th>
                    <th height="40" width="110">Nom client<br/> N°téléphone client</th>
                    <th height="40" width="110">Commande terminé</th>
                    <th height="40" width="110">Client non présent</th>
                    <th height="40" width="110">Détails commande</th>
                  </tr>

                  	<?php	foreach ($afficher_commande_valide as $key => $row) {
                  			  //$prix_total = $row['lp_prix'] * $row['lcl_quantite'];
                          $num_commande = $row['lc_id'] * 1;
                          echo'<tr>';
                          echo"<td class='desc_produit'> Lunchr N° "; echo $num_commande; echo"</td>";
                          echo"<td class='desc_produit'>".$row['lp_nom']."</td>";
                          echo"<td class='desc_produit'>x "; echo"".$row['lcl_quantite']." "; echo"".$row['lp_nom'].""; 
                          echo"<br/>"; echo "<u>Total : </u>".$row['lc_total']." €";
                          echo"<br/>"; echo "<u>Paiement : </u>".$row['lc_type_paiment'].""; echo"</td>";
                          echo"<td class='desc_heure'><b>"; echo date('H:i', strtotime($row['lc_heure_dish'])); echo"</b></td>";
                          echo"<td class='desc_heure'><b>"; echo date('d/ m/ y', strtotime($row['lc_date_dish'])); echo"</b></td>";
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