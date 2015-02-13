<?php include_once('../app/view/include/header.inc.php'); ?>

		<div class="col-lg-12">

           		<h1> Administration des cartes / menus / produits</h1>
           		<br/>
		        <?php include_once('../app/view/include/header_carte_menu.inc.php'); ?>
				<br/>
				<?php echo 'Restaurant sélectionné : &nbsp;&nbsp; '; foreach ($select_resto_afficher as $key => $row) { echo '<span style="text-decoration:underline;">'.$row['lr_nom'].'</span><br/>'; } ?>
				<?php //echo 'Carte sélectionné : &nbsp;&nbsp; '; echo '<span style="text-decoration:underline;"> </span>'; } ?>
				<br/><br/>


						<!-- Form Name -->
						<legend>Mise en forme actuel de la carte</legend>
						<br/>


						<div class="row">

							<?php foreach ($afficher_menu as $key => $row) {
								$ordre = $row['lm_ordre']+1;
								echo '<div class="col-md-4">';
								echo '<label class="mise_ef">Position n°'.$ordre.'</label>';
								echo '<input disabled="disabled" id="id_menu" name="id_menu" class="form-control" value="'.$row['lm_nom'].'" ">';
								echo '</div>';
							}
							?>

						</div><br/><br/>
					<br/><br/><br/><br/><br/><br/><br/>



			
        		<form class="form-horizontal" id="menu_select" name="menu_select" action="" method="POST">
					<fieldset>

						<!-- Form Name -->
						<legend>Mettre en forme la carte</legend>
						<br/><br/>

						<div class="form-group">
							<span>
								<p align="center">Séléctioner les menus que vous désirez mettre en place dans la carte, et affectez leur une position</p>
							</span>
						</div>

						<div class="form-group">
							<img id="img_position" class="col-md-12" src="http://localhost:8888/LunchR/lunchr_extranet/public/images/img_position.jpg" />
						</div><br/><br/>

						<div class="row">

								<?php foreach ($afficher_menu as $key => $row) {
								$ordre = $key+1;
								echo'<div class="col-md-4">';
								echo'<label class="mise_ef">Position n°'.$ordre.'</label>';
								echo'<select id="id_menu_ordre" name="id_menu_ordre'.$key.'" class="form-control">';
								echo'<option value="">-- Sélectionner un menu --</option>';
								foreach ($afficher_menu as $key => $row) {
								echo '<option value="'.$row['lm_id'].'">'.$row['lm_nom'].'</option>';
								}
								echo'</select>';
								echo'</div>';
								}?>
						</div>	
						<br/><br/>
					

						<!-- Button -->
						<div class="form-group">
						  <label class="col-md-3 control-label" for="singlebutton"></label>
						  <div class="col-md-5">
						    <button id="singlebutton" name="singlebutton" class="btn btn-primary col-md-12" type="submit">Valider</button>
						  </div>
						</div>

					

					</fieldset>
				</form>
		</div>


<?php include_once('../app/view/include/footer.inc.php'); ?>              