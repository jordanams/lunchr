<?php include_once('../app/view/include/header.inc.php'); ?>

           	<div class="col-lg-12">

           		<h1> Administration des utilisateurs </h1>
          			<?php include_once('../app/view/include/header.utilisateurs.inc.php'); ?>
           	</div>


           	<div class="col-lg-12">
	            <table id="tableau" class="table table-hover">

	                 	<tr>
	                        <th height="40" width="110">Nom</th>
	                        <th height="40" width="110">Prénom</th>
	                        <th height="40" width="110">Téléphone</th>
	                        <th height="40" width="110">Email</th>
	                        <th height="40" width="110">Statut</th>
	                        <th height="40" width="110">Fiche</th>
	                        <th height="40" width="110">Supprimer</th>
	                  	</tr>

	                  <?php foreach ($afficher_users as $key => $row) {
	                              echo"<tr>"; 
	                              echo"<td>".$row['lup_nom']."</td>";
	                              echo"<td>".$row['lup_prenom']."</td>";
	                              echo"<td>".$row['lup_tel']."</td>";
	                              echo"<td>".$row['lup_mail']."</td>";
	                              echo"<td>"; if ($row['lup_admin'] == '2') {echo 'Admin';} else {echo "Restaurateur";}
	                              echo"</td>";
	                              echo'<td><a href="index.php?module=utilisateurs&action=details_users_pro&id='.$row['lup_id'].'">Détails</a></td>';
	                              echo'<td><a href="index.php?module=utilisateurs&action=supp_users&id='.$row['lup_id'].'&type=pro" onclick="return confirm_delete_users()">Supprimer</a></td>';
	                              echo"</tr>";
	                        }
	                  ?>
	            </table>
      		</div>

<?php include_once('../app/view/include/footer.inc.php'); ?>