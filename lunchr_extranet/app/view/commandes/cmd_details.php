<?php include_once('../app/view/include/header.inc.php'); ?>


			<div class="col-lg-12">
        		<h1> Administration des commandes </h1>
        			<br/>
          			<?php include_once('../app/view/include/header_commande.inc.php'); ?>
          			<br/>
        	</div>

           	<div class="col-lg-12 form-horizontal">
				<legend>Informations sur la commande<br/> ( Statu : 
					<?php if($afficher_commande_details[0]['lc_statut'] == 3) {echo"commande annulée";} 
						  if($afficher_commande_details[0]['lc_statut'] == 2) {echo"commande terminé";}
						  if($afficher_commande_details[0]['lc_statut'] == 1) {echo"commande validée";}
						  if($afficher_commande_details[0]['lc_statut'] == 0) {echo"commande non validée";} ?> )
				</legend>
				
				<br/><br/>
				<div class="form-group">
				  <label class="col-md-2 control-label" for="textinput">Nom client</label>  
				  <div class="col-md-4">
				  	<span class="form-control input-md"><?php echo $afficher_commande_details[0]['lu_nom'];?></span>
				  </div>
				</div>

				<div class="form-group">
				  <label class="col-md-2 control-label" for="textinput">E-mail client</label>  
				  <div class="col-md-4">
				  	<span class="form-control input-md"><?php echo $afficher_commande_details[0]['lu_mail'];?></span>
				  </div>
				</div>

				<div class="form-group">
				  <label class="col-md-2 control-label" for="textinput">Téléphone client</label>  
				  <div class="col-md-4">
				  	<span class="form-control input-md"><?php echo $afficher_commande_details[0]['lu_tel'];?></span>
				  </div>
				</div>

				<div class="form-group">
				  <label class="col-md-2 control-label" for="textinput">Date commande</label>  
				  <div class="col-md-4">
				  	<span class="form-control input-md"><?php echo date('d/ m/ o', strtotime($afficher_commande_details[0]['lc_date_dish']));?></span>
				  </div>
				</div>

				<div class="form-group">
				  <label class="col-md-2 control-label" for="textinput">Heure commande</label>  
				  <div class="col-md-4">
				  	<span class="form-control input-md"><?php echo date('H:i', strtotime($afficher_commande_details[0]['lc_heure_dish']));?></span>
				  </div>
				</div>

				<div class="form-group">
				  <label class="col-md-2 control-label" for="textinput">N° de commande</label>  
				  <div class="col-md-4">
				  	<span class="form-control input-md"><?php echo"Lunchr N° "; echo $afficher_commande_details[0]['lc_id'];?></span>
				  </div>
				</div>

				<div class="form-group">
				  <label class="col-md-2 control-label" for="textinput">Produit</label>  
				  <div class="col-md-4">
				  	<textarea class="form-control" rows="6"><?php foreach ($afficher_commande_details as $key => $row) { echo"".$row['lp_nom'].", "; } ?></textarea>
				  </div>
				</div>

				<div class="form-group">
				  <label class="col-md-2 control-label" for="textinput">Quantitées de produit</label>  
				  <div class="col-md-4">
				  	<textarea class="form-control" rows="6"><?php foreach ($afficher_commande_details as $key => $row) { echo"x "; echo"".$row['lcl_quantite']." "; echo"".$row['lp_nom']."/ "; } ?></textarea>
				  </div>
				</div>

				<div class="form-group">
				  <label class="col-md-2 control-label" for="textinput">Prix total commande</label>  
				  <div class="col-md-4">
				  	<span class="form-control input-md">
				  	<?php
				  	//$prix_total = $afficher_commande_details[0]['lp_prix'] * $afficher_commande_details[0]['lcl_quantite']; 
				  	echo"Prix total : "; echo $afficher_commande_details[0]['lc_total']; echo" €";?>
				  	</span>
				  </div>
				</div>

				<div class="form-group">
				  <label class="col-md-2 control-label" for="textinput">Mode de paiment</label>  
				  <div class="col-md-4">
				  	<span class="form-control input-md"><?php echo $afficher_commande_details[0]['lc_type_paiment'];?></span>
				</div>
				</div>
			</div>


<?php include_once('../app/view/include/footer.inc.php'); ?>