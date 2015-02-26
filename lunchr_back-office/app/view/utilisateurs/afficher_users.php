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
	                        <th height="40" width="110">Fiche</th>
	                        <th height="40" width="110">Supprimer</th>
	                  	</tr>

	                  <?php foreach ($afficher_users as $key => $row) {
	                              echo"<tr>"; 
	                              echo"<td>".$row['lu_nom']."</td>";
	                              echo"<td>".$row['lu_prenom']."</td>";
	                              echo"<td>".$row['lu_tel']."</td>";
	                              echo"<td>".$row['lu_mail']."</td>";
	                              echo'<td><a href="index.php?module=utilisateurs&action=details_users&id='.$row['lu_id'].'">Détails</a></td>';
	                              echo'<td><a href="index.php?module=utilisateurs&action=supp_users&id='.$row['lu_id'].'&type=normal" onclick="return confirm_delete_users()">Supprimer</a></td>';
	                              echo"</tr>";
	                        }
	                  ?>
	            </table>
      		</div>

<?php include_once('../app/view/include/footer.inc.php'); ?>