<?php include_once('../app/view/include/header.inc.php'); ?>

           <div class="col-lg-12">

           		<h1> Administrer un autre restaurant</h1>
				<br/>
				<br/><br/>

           </div>



           <div class="col-lg-12">

           	<form class="form-horizontal" id="formu_carte" name="formu_users" action="" method="POST">
				<fieldset>

		           <div class="form-group">
						<label class="col-md-3 control-label" for="selectbasic">Séléctioner un restaurant et valider</label>
						<div class="col-md-5">
							<select id="nom_resto_select" name="nom_resto_select" class="form-control">
									<?php foreach ($select_resto as $key => $row) {
								    echo'<option value="'.$row['lr_id'].'">'.$row['lr_nom'].'</option>';
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