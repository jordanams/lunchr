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
                    <th height="40" width="110"><?php if (!isset($_GET['ordre_commande'])) {echo'<a href="index.php?module=commandes&action=gestion_ordre&ordre_annule&ordre_commande=commande_asc">Numéro de commande</a>';}
                                                      else if ($_GET['ordre_commande'] == "commande_asc") {echo'<a href="index.php?module=commandes&action=gestion_ordre&ordre_annule&ordre_commande=commande_desc">Numéro de commande <i class="fa fa-arrow-up"></i></a>';}
                                                      else if ($_GET['ordre_commande'] == "commande_desc") {echo'<a href="index.php?module=commandes&action=gestion_ordre&ordre_annule&ordre_commande=commande_asc">Numéro de commande <i class="fa fa-arrow-down"></i></a>';}
                                                ?></th>
                    <th height="40" width="110"><?php if (!isset($_GET['ordre_prix'])) {echo'<a href="index.php?module=commandes&action=gestion_ordre&ordre_annule&ordre_prix=prix_asc">Prix total</a>';}
                                                      else if ($_GET['ordre_prix'] == "prix_asc") {echo'<a href="index.php?module=commandes&action=gestion_ordre&ordre_annule&ordre_prix=prix_desc">Prix total <i class="fa fa-arrow-up"></i></a>';}
                                                      else if ($_GET['ordre_prix'] == "prix_desc") {echo'<a href="index.php?module=commandes&action=gestion_ordre&ordre_annule&ordre_prix=prix_asc">Prix total <i class="fa fa-arrow-down"></i></a>';}
                                                ?></th>
                    <th height="40" width="110"><?php if (!isset($_GET['ordre_date'])) {echo'<a href="index.php?module=commandes&action=gestion_ordre&ordre_annule&ordre_date=date_asc">Date </a>';}
                                                      else if ($_GET['ordre_date'] == "date_asc") {echo'<a href="index.php?module=commandes&action=gestion_ordre&ordre_annule&ordre_date=date_desc">Date <i class="fa fa-arrow-up"></i></a>';}
                                                      else if ($_GET['ordre_date'] == "date_desc") {echo'<a href="index.php?module=commandes&action=gestion_ordre&ordre_annule&ordre_date=date_asc">Date <i class="fa fa-arrow-down"></i></a>';}
                                                ?></th>
                    <th height="40" width="110"><?php if (!isset($_GET['ordre_nom'])) {echo'<a href="index.php?module=commandes&action=gestion_ordre&ordre_annule&ordre_nom=nom_asc">Nom client</a>';}
                                                      else if ($_GET['ordre_nom'] == "nom_asc") {echo'<a href="index.php?module=commandes&action=gestion_ordre&ordre_annule&ordre_nom=nom_desc">Nom client <i class="fa fa-arrow-up"></i></a>';}
                                                      else if ($_GET['ordre_nom'] == "nom_desc") {echo'<a href="index.php?module=commandes&action=gestion_ordre&ordre_annule&ordre_nom=nom_asc">Nom client <i class="fa fa-arrow-down"></i></a>';}
                                                ?></th>
                    <th height="40" width="110">Détails commande</th>
                  </tr>

                  	<?php	foreach ($afficher_commande_annule as $key => $row) {
                  			  //$prix_total = $row['lp_prix'] * $row['lcl_quantite'];
                          echo'<tr>';
                          echo"<td class='desc_produit'> Lunchr N° ".$row['lc_id']."</td>";
                          echo"<td class='desc_prix_mp'>".$row['lc_total']." €</td>";
                          echo"<td class='desc_heure'><b>"; echo date('d/ m/ o', strtotime($row['lc_date_dish'])); echo"</b></td>";
                          echo"<td class='desc_client'>".$row['lu_nom']."</td>";
                          echo'<td><a href="index.php?module=commandes&action=cmd_details&id_commande='.$row['lc_id'].'">Détails</a></td>';
                          echo"</tr>";
                        }
                    ?>          
            </table>
      	</div>
      		
<?php include_once('../app/view/include/footer.inc.php'); ?>