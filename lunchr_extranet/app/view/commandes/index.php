<?php include_once('../app/view/include/header.inc.php'); ?>
        
        <div class="col-lg-12">
        	<h1> Administration des commandes </h1>
        		<br/>
          		<?php include_once('../app/view/include/header_commande.inc.php'); ?>
          		<br/>
        </div>

        Trier les résultats
        <ol class="breadcrumb">
          <li><a><?php if (!isset($_GET['ordre_heure'])) {echo'<a href="index.php?module=commandes&action=gestion_ordre&ordre_index&ordre_heure=heure_asc">Heure d\'arrivée</a>';}
                                                      else if ($_GET['ordre_heure'] == "heure_asc") {echo'<a href="index.php?module=commandes&action=gestion_ordre&ordre_index&ordre_heure=heure_desc">Heure d\'arrivée <i class="fa fa-arrow-up"></i></a>';}
                                                      else if ($_GET['ordre_heure'] == "heure_desc") {echo'<a href="index.php?module=commandes&action=gestion_ordre&ordre_index&ordre_heure=heure_asc">Heure d\'arrivée <i class="fa fa-arrow-down"></i></a>';}
                                                ?></li>
          <li><a><?php if (!isset($_GET['ordre_nb_personne'])) {echo'<a href="index.php?module=commandes&action=gestion_ordre&ordre_index&ordre_nb_personne=nb_personne_asc">Nombre de personnes</a>';}
                                                      else if ($_GET['ordre_nb_personne'] == "nb_personne_asc") {echo'<a href="index.php?module=commandes&action=gestion_ordre&ordre_index&ordre_nb_personne=nb_personne_desc">Nombre de personnes <i class="fa fa-arrow-up"></i></a>';}
                                                      else if ($_GET['ordre_nb_personne'] == "nb_personne_desc") {echo'<a href="index.php?module=commandes&action=gestion_ordre&ordre_index&ordre_nb_personne=nb_personne_asc">Nombre de personnes <i class="fa fa-arrow-down"></i></a>';}
                                                ?></li>
          <li><a><?php if (!isset($_GET['ordre_prix'])) {echo'<a href="index.php?module=commandes&action=gestion_ordre&ordre_index&ordre_prix=prix_asc">Prix total</a>';}
                                                      else if ($_GET['ordre_prix'] == "prix_asc") {echo'<a href="index.php?module=commandes&action=gestion_ordre&ordre_index&ordre_prix=prix_desc">Prix total <i class="fa fa-arrow-up"></i></a>';}
                                                      else if ($_GET['ordre_prix'] == "prix_desc") {echo'<a href="index.php?module=commandes&action=gestion_ordre&ordre_index&ordre_prix=prix_asc">Prix total <i class="fa fa-arrow-down"></i></a>';}
                                                ?></li>
        </ol>

        
        <?php foreach ($afficher_commande as $key => $row){ ?>
            <div class="tableau_carte bordure_commande col-lg-12">

                  <h3>N° de commande <?php echo $row['lc_id']; ?></h3>
                  <br/>
                  <h5>Liste des produits de la commande :</h5>
                  <ul class="liste_commande">
                    <?php foreach ($produit[$key] as $key => $row) { ?>
                      <li><?php echo $row['lp_nom']; ?> (x<?php echo $row['lcl_quantite']; ?>)</li>
                    <?php } ?>
                  </ul>

                  <h5>Commentaire sur la commande :</h5>
                  <ul class="liste_commantaire">
                    <li><?php echo $row['lc_commentaire']; ?></li>
                  </ul>

                  <table>
                      <tr>
                        <th height="40" width="160">Heure d'arrivée</th>
                        <th height="40" width="160">Nombre de personnes</th>
                        <th height="40" width="160">Mode de paiement</th>
                        <th height="40" width="160">Total commande</th>
                        <th height="40" width="160">Détails commande</th>
                        <th height="40" width="160">Valider la commande</th>
                      </tr>

                      <tr>
                        <td><?php echo date('H:i', strtotime($row['lc_heure_dish'])); echo" h"; ?></td>
                        <td><?php echo $row['lc_nombre_personnes']; echo" personnes";?></td>
                        <td><?php echo $row['lc_type_paiment']; ?></td>
                        <td><?php echo $row['lc_total']; echo" €";?></td>
                        <td><?php echo'<a href="index.php?module=commandes&action=cmd_details&id_commande='.$row['lc_id'].'">Détails</a>'; ?></td>
                        <td><?php echo'<a href="index.php?module=commandes&action=gestion_etat_commande&id_commande='.$row['lc_id'].'&page=1">Valider</a>'; ?></td>
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
     
             
                         