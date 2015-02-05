<?php include_once('../app/view/include/header.inc.php'); ?>

           <div class="col-lg-12">

           		<h1> Administration des cartes / menus / produits</h1>
           		<br/> 
		        <?php include_once('../app/view/include/header_carte_menu.inc.php'); ?>
				<br/>
				<br/><br/>

           </div>



           <div class="col-lg-12">

           	<form class="form-horizontal" id="formu_carte" name="formu_users" action="" method="POST">
				<fieldset>

		           <div class="form-group">
						<label class="col-md-3 control-label" for="selectbasic">Séléctioner une carte</label>
						<div class="col-md-5">
							<select id="id_carte" name="id_carte" class="form-control">
									<?php foreach ($afficher_carte as $key => $row) {
								    echo'<option value="'.$row['lce_id'].'">'.$row['lce_nom'].'</option>';
								}?>
							</select>
						</div>
					</div>

					<div class="form-group">
					<label class="col-md-3 control-label" for="singlebutton">Valider</label>
						<div class="col-md-4">
							<button id="singlebutton" name="singlebutton" class="btn btn-primary" type="submit">Valider</button>
						</div>
					</div>

					</fieldset>
				</form>

			</div>
		


<?php include_once('../app/view/include/footer.inc.php'); ?>              