<?php include_once('../app/view/include/header.inc.php'); ?>

	          <div>
	                  <?php 
foreach ($afficher_resto2 as $key => $row) {
	                  			  echo"<div>";
	                              echo"<b>".$row['lr_nom']."</b><br/>";
	                              echo"".$row['lr_adresse']."<br/>";
	                              echo"<i>";
	                              echo"".$row[0]."km<br/>";
	                              echo"</i>";
	                              echo'<a href="index.php?module=restaurants&action=details_resto&id='.$row['lr_id'].'">Détails</a>';
	                              echo"</div>";
	                              echo"<br/>";
	                              
	                                                                  }
	                                                                 // array_multisort($afficher_resto2, $row[0]);

	                  ?>
	          </div>

<?php include_once('../app/view/include/footer.inc.php'); ?>              