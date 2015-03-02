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
                    <th height="40" width="110"><?php if (!isset($_GET['ordre_produit'])) {echo'<a href="index.php?module=commandes&action=gestion_ordre&ordre_index&ordre_produit=nom_produit_asc">Nom du produit</a>';}
                                                      else if ($_GET['ordre_produit'] == "nom_produit_asc") {echo'<a href="index.php?module=commandes&action=gestion_ordre&ordre_index&ordre_produit=nom_produit_desc">Nom du produit <i class="fa fa-arrow-up"></i></a>';}
                                                      else if ($_GET['ordre_produit'] == "nom_produit_desc") {echo'<a href="index.php?module=commandes&action=gestion_ordre&ordre_index&ordre_produit=nom_produit_asc">Nom du produit <i class="fa fa-arrow-down"></i></a>';}
                                                ?></th>
                    <th height="40" width="110">Commentaire</th>
                    <th height="40" width="110">Quantitées</th>
                    <th height="40" width="110"><?php if (!isset($_GET['ordre_prix'])) {echo'<a href="index.php?module=commandes&action=gestion_ordre&ordre_index&ordre_prix=prix_asc">Prix total</a>';}
                                                      else if ($_GET['ordre_prix'] == "prix_asc") {echo'<a href="index.php?module=commandes&action=gestion_ordre&ordre_index&ordre_prix=prix_desc">Prix total <i class="fa fa-arrow-up"></i></a>';}
                                                      else if ($_GET['ordre_prix'] == "prix_desc") {echo'<a href="index.php?module=commandes&action=gestion_ordre&ordre_index&ordre_prix=prix_asc">Prix total <i class="fa fa-arrow-down"></i></a>';}
                                                ?></th>
                    <th height="40" width="110">Mode de paiement</th>
                    <th height="40" width="110"><?php if (!isset($_GET['ordre_heure'])) {echo'<a href="index.php?module=commandes&action=gestion_ordre&ordre_index&ordre_heure=heure_asc">Heure d\'arrivée</a>';}
                                                      else if ($_GET['ordre_heure'] == "heure_asc") {echo'<a href="index.php?module=commandes&action=gestion_ordre&ordre_index&ordre_heure=heure_desc">Heure d\'arrivée <i class="fa fa-arrow-up"></i></a>';}
                                                      else if ($_GET['ordre_heure'] == "heure_desc") {echo'<a href="index.php?module=commandes&action=gestion_ordre&ordre_index&ordre_heure=heure_asc">Heure d\'arrivée <i class="fa fa-arrow-down"></i></a>';}
                                                ?></th>
                    <th height="40" width="110">Valider la commande</th>
                    <th height="40" width="110">Détails commande</th>
                  </tr>

                  	<?php	foreach ($afficher_commande as $key => $row) {
                  			  //$prix_total = $row['lp_prix'] * $row['lcl_quantite'];
                          echo'<tr>';
                          echo"<td class='desc_produit'>".$row['lp_nom']."</td>";
                          echo"<td class='desc_produit'>".$row['lc_commentaire']."</td>";
                          echo"<td class='desc_produit'>x "; echo"".$row['lcl_quantite']." "; echo"".$row['lp_nom'].""; echo"</td>";
                          echo"<td class='desc_prix_mp'>".$row['lc_total']." €</td>";
                          echo"<td class='desc_prix_mp'>".$row['lc_type_paiment']."</td>";
                          echo"<td class='desc_heure'><b>"; echo date('H:i', strtotime($row['lc_heure_dish'])); echo"</b></td>";
                          echo'<td><a href="index.php?module=commandes&action=gestion_etat_commande&id_commande='.$row['lc_id'].'&page=1">Valider</a></td>';
                          echo'<td><a href="index.php?module=commandes&action=cmd_details&id_commande='.$row['lc_id'].'">Détails</a></td>';
                          echo"</tr>";
                        }
                    ?>     
            </table>
      	</div>
      		
<?php include_once('../app/view/include/footer.inc.php'); ?>
     
             
                         