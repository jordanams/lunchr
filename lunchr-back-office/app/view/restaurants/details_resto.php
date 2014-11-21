<?php include_once('../app/view/include/header.inc.php'); ?>

           <div class="col-lg-12">

           		<h1> Administration des restaurants </h1>
		        <ul class="nav nav-tabs nav-justified" role="tablist">
			        <li role="presentation"<?php if($_GET['action']=='index') { echo' class="active"'; } ?>><a href="index.php?module=restaurants&action=index">Listes des restaurants</a></li>
		  			<li role="presentation"<?php if($_GET['action']=='ajouter_resto') { echo' class="active"'; } ?>><a href="index.php?module=restaurants&action=ajouter_resto">Ajouter un restaurant</a></li>
				</ul>


        	<form class="form-horizontal" name="formu_resto" action="" method="POST">
				<fieldset>

					<!-- Form Name -->
					<legend>Détails restaurant : <?php echo $verif_details[0]['lr_nom'];?></legend>

					<div id="details_gauche_resto">
						<!-- Nom -->
						<div class="form-group">
						  <label class="col-md-1 control-label" for="textinput">Nom</label>  
						  <div class="col-md-1">
						  	<?php echo $verif_details[0]['lr_nom'];?> 
						  </div>
						</div>

						<!-- Adresse -->
						<div class="form-group">
						  <label class="col-md-1 control-label" for="textinput">Adresse</label>  
						  <div class="col-md-1">
						  	<?php echo $verif_details[0]['lr_adresse'];?>
						  </div>
						</div>

						<!-- Description -->
						<div class="form-group">
						  <label class="col-md-1 control-label" for="textarea">Description</label>
						  <div class="col-md-1">                     
						    <?php echo $verif_details[0]['lr_description'];?>
						  </div>
						</div>
					</div>

					<div>
			            <table id="tableau" class="table">

			                  <tr>
			                  		<th height="40" width="110"></th>
			                        <th height="40" width="110"><?php echo $verif_details[0]['lh_day'];?></th>
			                        <th height="40" width="110"><?php echo $verif_details[1]['lh_day'];?></th>
			                        <th height="40" width="110"><?php echo $verif_details[2]['lh_day'];?></th>
			                        <th height="40" width="110"><?php echo $verif_details[3]['lh_day'];?></th>
			                        <th height="40" width="110"><?php echo $verif_details[4]['lh_day'];?></th>
			                        <th height="40" width="110"><?php echo $verif_details[5]['lh_day'];?></th>
			                        <th height="40" width="110"><?php echo $verif_details[6]['lh_day'];?></th>
			                  </tr>
									<tr>
										<td>Midi</td>
			                            <?php echo"<td>".$verif_details[0]['lh_open_day']. " - ".$verif_details[0]['lh_close_day']."</td>";?>
			                            <?php echo"<td>".$verif_details[1]['lh_open_day']. " - ".$verif_details[0]['lh_close_day']."</td>";?>
			                            <?php echo"<td>".$verif_details[2]['lh_open_day']. " - ".$verif_details[0]['lh_close_day']."</td>";?>
			                            <?php echo"<td>".$verif_details[3]['lh_open_day']. " - ".$verif_details[0]['lh_close_day']."</td>";?>
			                            <?php echo"<td>".$verif_details[4]['lh_open_day']. " - ".$verif_details[0]['lh_close_day']."</td>";?>
			                            <?php echo"<td>".$verif_details[5]['lh_open_day']. " - ".$verif_details[0]['lh_close_day']."</td>";?>
			                            <?php echo"<td>".$verif_details[6]['lh_open_day']. " - ".$verif_details[0]['lh_close_day']."</td>";?>
			                        </tr>
			                        <tr>
										<td>Soir</td>
			                            <?php echo"<td>".$verif_details[0]['lh_open_night']." - ".$verif_details[0]['lh_close_night']."</td>";?>
			                            <?php echo"<td>".$verif_details[0]['lh_open_night']." - ".$verif_details[1]['lh_close_night']."</td>";?>
			                            <?php echo"<td>".$verif_details[0]['lh_open_night']." - ".$verif_details[2]['lh_close_night']."</td>";?>
			                            <?php echo"<td>".$verif_details[0]['lh_open_night']." - ".$verif_details[3]['lh_close_night']."</td>";?>
			                            <?php echo"<td>".$verif_details[0]['lh_open_night']." - ".$verif_details[4]['lh_close_night']."</td>";?>
			                            <?php echo"<td>".$verif_details[0]['lh_open_night']." - ".$verif_details[5]['lh_close_night']."</td>";?>
			                            <?php echo"<td>".$verif_details[0]['lh_open_night']." - ".$verif_details[6]['lh_close_night']."</td>";?>
			                        </tr>
			            </table>
      				</div>

					<!-- Photo -->
					<div class="form-group">
					  <label class="col-md-4 control-label" for="textinput">Photo</label>  
					  <div class="col-md-4">
					  	<?php echo "<img src='".$verif_details[0]['lr_image_1']."'/>" ;?>
					  </div>
					</div>

					<div class="form-group">
					  <label class="col-md-4 control-label" for="textinput"></label>  
					  <div class="col-md-4">
					  	<?php echo '<a href="index.php?module=restaurants&action=update_resto&id='.$verif_details[0]['lr_id'].'">Modifier</a>';?>
					  </div>
					</div>


					</fieldset>
				</form>

</div>


<?php include_once('../app/view/include/footer.inc.php'); ?>              