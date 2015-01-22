<?php include_once('../app/view/include/header.inc.php'); ?>

           <div class="col-lg-12">

           		<h1> Administration des restaurants </h1>
		        <ul class="nav nav-tabs nav-justified" role="tablist">
			        <li role="presentation"<?php if($_GET['action']=='index') { echo' class="active"'; } ?>><a href="index.php?module=restaurants&action=index">Listes des restaurants</a></li>
		  			<li role="presentation"<?php if($_GET['action']=='ajouter_resto') { echo' class="active"'; } ?>><a href="index.php?module=restaurants&action=ajouter_resto">Ajouter un restaurant</a></li>
				</ul>

           </div>

           <div>
	            <table id="tableau" class="table">

	                  <tr>
	                        <th height="40" width="110">Nom</th>
	                        <th height="40" width="110">Adresse</th>
	                        <th height="40" width="110">Description</th>
	                        <th height="40" width="110">Fiche</th>
	                        <th height="40" width="110">Supprimer</th>
	                  </tr>

	                  <?php foreach ($afficher_resto as $key => $row) {
	                              echo"<tr>"; 
	                              echo"<td>".$row[0]."</td>";
	                              echo"<td>".$row[1]."</td>";
	                              echo"<td>".$row[2]."</td>";
	                              echo'<td><a href="index.php?module=restaurants&action=details_resto&id='.$row[3].'">Détails</a></td>';
	                              echo'<td id="supp1"><a href="index.php?module=restaurants&action=supp_resto&id='.$row[3].'" onclick="return confirm_delete_resto()">Supprimer</a></td>';
	                              echo"</tr>";
	                        }
	                  ?>
	            </table>
      		</div>


<?php include_once('../app/view/include/footer.inc.php'); ?>              