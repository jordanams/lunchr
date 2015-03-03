<?php include_once('../app/view/include/header.inc.php'); ?>
        
        <div class="col-lg-12">
        	<h1> Liste des clients </h1>
        	<br/>
          		<ul class="nav nav-tabs nav-justified" role="tablist">
			        <li role="presentation"<?php if($_GET['action']=='index') { echo' class="active"'; } ?>><a href="index.php?module=clients&action=index">Liste des clients</a></li>
				</ul>
			<br/>
        </div>

        <div class="tableau_carte col-lg-12">
            <table id="tableau" class="table table-bordered table-hover">

                  <tr>
                    <th height="40" width="110">Nom</th>
                    <th height="40" width="110">Numéro de téléphone</th>
                    <th height="40" width="110">E-mail</th>
                    <th height="40" width="110">Total dépensé</th>
                    <th height="40" width="110">Détails des commandes</th>
                  </tr>

                  	<?php	foreach ($afficher_client as $key => $row) {
                  			//$prix_total = $row['lp_prix'] * $row['lcl_quantite'];
                            echo'<tr>';
                            echo"<td>".$row['lu_nom']."</td>";
                            echo"<td>".$row['lu_tel']."</td>";
                            echo"<td>".$row['lu_mail']."</td>";
                            echo"<td></td>";
                            echo'<td><a href="index.php?module=commandes&action=cmd_details&id_commande=">Détails</a></td>';
                            echo"</tr>";
                        }
                    ?>          
            </table>
      	</div>

<?php include_once('../app/view/include/footer.inc.php'); ?>