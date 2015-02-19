<?php include_once('../app/view/include/header.inc.php'); ?>

			<div class="col-lg-12">
           		<h1> Administration restaurant</h1>
           		<br/>
			        <ul class="nav nav-tabs nav-justified" role="tablist">
				        <li role="presentation"<?php if($_GET['action']=='liste_restaurant') { echo' class="active"'; } ?>><a href="index.php?module=restaurant&action=liste_restaurant">Liste restaurant</a></li>
				        <li role="presentation"<?php if($_GET['action']=='ajouter_resto') { echo' class="active"'; } ?>><a href="index.php?module=restaurant&action=ajouter_resto">Ajouter un restaurant</a></li>
					</ul>
				<br/>
           	</div>

           	<div class="col-lg-12">
        		<form class="form-horizontal" name="formu_resto" action="" method="POST" enctype="multipart/form-data">
					<fieldset>

					<!-- Form Name -->
					<legend>Modifier votre restaurant</legend><br/>


					<!-- Nom -->
					<div class="form-group" align="center">
						<label for="textinput">Si vous désirez changer le nom ou l'adresse de votre restaurant merci de <br/>
							bien vouloir nous contacter en vous rendant dans l'onglet "Nous contacter"</label>
					</div><br/>


					<!-- Description -->
					<div class="form-group">
					  <label class="col-md-4 control-label" for="textarea">Description</label>
					  <div class="col-md-4">                     
					    <textarea required class="form-control" id="desc_resto" name="desc_resto"><?php echo $verif_details[0]['lr_description'];?></textarea>
					  </div>
					</div>


					<!-- Horraire -->
					<div class="form-group">
					  <label class="col-md-4 control-label" for="textinput">Horraire</label> 
					  <br/> 
					  <div class="col-md-8">
					  	<!--<input required id="horraire_resto" name="horraire_resto" type="text" placeholder="Horraire" class="form-control input-md"> -->
					  	<select name="jour1">
					  	<option>Lundi</option>
					  	</select>
					  	<br/>
					  	MIDI
					  	<select name="horraire_midi_ouverture1">
					  	<option>09:00</option>
					  	<option>10:00</option>
					  	<option>11:00</option>
					  	<option selected><?php echo $verif_details[0]['lh_open_day'];?></option>
					  	</select>
					  	à 
					  	<select name="horraire_midi_fermeture1">
					  	<option>13:00</option>
					  	<option selected><?php echo $verif_details[0]['lh_close_day'];?></option>
					  	<option>15:00</option>
					  	</select> 
					  	<br/>
					  	SOIR  
					  	<select name="horraire_soir_ouverture1">
					  	<option selected><?php echo $verif_details[0]['lh_open_night'];?></option>
					  	<option>20:00</option>
					  	<option>21:00</option>
					  	</select>
					  	à 
					  	<select name="horraire_soir_fermeture1">
					  	<option>22:00</option>
					  	<option selected><?php echo $verif_details[0]['lh_close_night'];?></option>
					  	<option>00:00</option>
					  	</select> 
					  	 <br/>
					  	<br/>
					  	<select name="jour2">
					  	<option>Mardi</option>
					  	</select>
					  	<br/>
					  	MIDI
					  	<select name="horraire_midi_ouverture2">
					  	<option>09:00</option>
					  	<option>10:00</option>
					  	<option>11:00</option>
					  	<option selected><?php echo $verif_details[0]['lh_open_day'];?></option>
					  	</select>
					  	à
					  	<select name="horraire_midi_fermeture2">
					  	<option>13:00</option>
					  	<option selected><?php echo $verif_details[0]['lh_close_day'];?></option>
					  	<option>15:00</option>
					  	</select> 
					  	<br/>
					  	SOIR 
					  	<select name="horraire_soir_ouverture2">
					  	<option selected><?php echo $verif_details[0]['lh_open_night'];?></option>
					  	<option>20:00</option>
					  	<option>21:00</option>
					  	</select>
					  	à
					  	<select name="horraire_soir_fermeture2">
					  	<option>22:00</option>
					  	<option selected><?php echo $verif_details[0]['lh_close_night'];?></option>
					  	<option>00:00</option>
					  	</select> 					  	
					  	<br/>
					  	<br/>
					  	<select name="jour3">
					  	<option>Mercredi</option>
					  	</select>
					  	<br/>
					  	MIDI 
					  	<select name="horraire_midi_ouverture3">
					  	<option>09:00</option>
					  	<option>10:00</option>
					  	<option>11:00</option>
					  	<option selected><?php echo $verif_details[0]['lh_open_day'];?></option>
					  	</select>
					  	à
					  	<select name="horraire_midi_fermeture3">
					  	<option>13:00</option>
					  	<option selected><?php echo $verif_details[0]['lh_close_day'];?></option>
					  	<option>15:00</option>
					  	</select>
					  	<br/> 
					  	SOIR
					  	<select name="horraire_soir_ouverture3">
					  	<option selected><?php echo $verif_details[0]['lh_open_night'];?></option>
					  	<option>20:00</option>
					  	<option>21:00</option>
					  	</select>
					  	à
					  	<select name="horraire_soir_fermeture3">
					  	<option>22:00</option>
					  	<option selected><?php echo $verif_details[0]['lh_close_night'];?></option>
					  	<option>00:00</option>
					  	</select> 	
					  	<br/>
					  	<br/>
					  	<select name="jour4">
					  	<option>Jeudi</option>
					  	</select>
					  	<br/>
					  	MIDI  
					  	<select name="horraire_midi_ouverture4">
					  	<option>09:00</option>
					  	<option>10:00</option>
					  	<option>11:00</option>
					  	<option selected><?php echo $verif_details[0]['lh_open_day'];?></option>
					  	</select>
					  	à
					  	<select name="horraire_midi_fermeture4">
					  	<option>13:00</option>
					  	<option selected><?php echo $verif_details[0]['lh_close_day'];?></option>
					  	<option>15:00</option>
					  	</select> 
					  	<br/>
					  	SOIR  
					  	<select name="horraire_soir_ouverture4">
					  	<option selected><?php echo $verif_details[0]['lh_open_night'];?></option>
					  	<option>20:00</option>
					  	<option>21:00</option>
					  	</select>
					  	à
					  	<select name="horraire_soir_fermeture4">
					  	<option>22:00</option>
					  	<option selected><?php echo $verif_details[0]['lh_close_night'];?></option>
					  	<option>00:00</option>
					  	</select>
					  	<br/>
					  	<br/>
					  	<select name="jour5">
					  	<option>Vendredi</option>
					  	</select>
					  	<br/>
					  	MIDI 
					  	<select name="horraire_midi_ouverture5">
					  	<option>09:00</option>
					  	<option>10:00</option>
					  	<option>11:00</option>
					  	<option selected><?php echo $verif_details[0]['lh_open_day'];?></option>
					  	</select>
					  	à 
					  	<select name="horraire_midi_fermeture5">
					  	<option>13:00</option>
					  	<option selected><?php echo $verif_details[0]['lh_close_day'];?></option>
					  	<option>15:00</option>
					  	</select>
					  	<br/> 
					  	SOIR 
					  	<select name="horraire_soir_ouverture5">
					  	<option selected><?php echo $verif_details[0]['lh_open_night'];?></option>
					  	<option>20:00</option>
					  	<option>21:00</option>
					  	</select>
					  	à 
					  	<select name="horraire_soir_fermeture5">
					  	<option>22:00</option>
					  	<option selected><?php echo $verif_details[0]['lh_close_night'];?></option>
					  	<option>00:00</option>
					  	</select>
					  	<br/>
					  	<br/>
					  	<select name="jour6">
					  	<option>Samedi</option>
					  	</select>
					  	<br/>
					  	MIDI 
					  	<select name="horraire_midi_ouverture6">
					  	<option>09:00</option>
					  	<option>10:00</option>
					  	<option>11:00</option>
					  	<option selected><?php echo $verif_details[0]['lh_open_day'];?></option>
					  	</select>
					  	à 
					  	<select name="horraire_midi_fermeture6">
					  	<option>13:00</option>
					  	<option selected><?php echo $verif_details[0]['lh_close_day'];?></option>
					  	<option>15:00</option>
					  	</select>
					  	<br/> 
					  	SOIR 
					  	<select name="horraire_soir_ouverture6">
					  	<option selected><?php echo $verif_details[0]['lh_open_night'];?></option>
					  	<option>20:00</option>
					  	<option>21:00</option>
					  	</select>
					  	à
					  	<select name="horraire_soir_fermeture6">
					  	<option>22:00</option>
					  	<option selected><?php echo $verif_details[0]['lh_close_night'];?></option>
					  	<option>00:00</option>
					  	</select>
					  	<br/>
					  	<br/>
					  	<select name="jour7">
					  	<option>Dimanche</option>
					  	</select>
					  	<br/>
					  	MIDI 
					  	<select name="horraire_midi_ouverture7">
					  	<option>09:00</option>
					  	<option>10:00</option>
					  	<option>11:00</option>
					  	<option selected><?php echo $verif_details[0]['lh_open_day'];?></option>
					  	</select>
					  	à 
					  	<select name="horraire_midi_fermeture7">
					  	<option>13:00</option>
					  	<option selected><?php echo $verif_details[0]['lh_close_day'];?></option>
					  	<option>15:00</option>
					  	</select> 
					  	<br/>
					  	SOIR 
					  	<select name="horraire_soir_ouverture7">
					  	<option selected><?php echo $verif_details[0]['lh_open_night'];?></option>
					  	<option>20:00</option>
					  	<option>21:00</option>
					  	</select>
					  	à
					  	<select name="horraire_soir_fermeture7">
					  	<option>22:00</option>
					  	<option selected><?php echo $verif_details[0]['lh_close_night'];?></option>
					  	<option>00:00</option>
					  	</select> 					  
					  </div>
					</div>

					<!-- Photo -->
					<div class="form-group">
					  <label class="col-md-4 control-label" for="textinput">Photo</label>  
					</div> 
					  
					  <div class="row">
					  	<div class="row">
						  	<?php echo "<div class='col-lg-3 col-md-4 col-xs-6'><img width='300' class='img-responsive thumbnail' "; if($verif_details[0]['lr_image_1'] == ""){echo " src='images/no-picture.jpg' alt='Pas d image 1 !'"; } else {echo " src='".$verif_details[0]['lr_image_1']."' alt='".$verif_details[0]['lr_nom']."'";} echo"/></div>" ;?>
						  	<?php echo "<div class='col-lg-3 col-md-4 col-xs-6'><img width='300' class='img-responsive thumbnail' "; if($verif_details[0]['lr_image_2'] == ""){echo " src='images/no-picture.jpg' alt='Pas d image 2 !'"; } else {echo " src='".$verif_details[0]['lr_image_2']."' alt='".$verif_details[0]['lr_nom']."'";} echo"/></div>" ;?>
						  	<?php echo "<div class='col-lg-3 col-md-4 col-xs-6'><img width='300' class='img-responsive thumbnail' "; if($verif_details[0]['lr_image_3'] == ""){echo " src='images/no-picture.jpg' alt='Pas d image 3 !'"; } else {echo " src='".$verif_details[0]['lr_image_3']."' alt='".$verif_details[0]['lr_nom']."'";} echo"/></div>" ;?>
						  	<?php echo "<div class='col-lg-3 col-md-4 col-xs-6'><img width='300' class='img-responsive thumbnail' "; if($verif_details[0]['lr_image_4'] == ""){echo " src='images/no-picture.jpg' alt='Pas d image 4 !'"; } else {echo " src='".$verif_details[0]['lr_image_4']."' alt='".$verif_details[0]['lr_nom']."'";} echo"/></div>" ;?>
					  	</div>
					  </div>

					<!-- Ajouter image n°1 --> 
					<div class="form-group">
					  <label class="col-md-4 control-label" for="filebutton">Ajouter une image</label>
					  <div class="col-md-4">
					    <input id="img1_resto" name="ch_file1" class="input-file" type="file">
					  </div>
					</div>

					<!-- Ajouter image n°2 --> 
					<div class="form-group">
					  <label class="col-md-4 control-label" for="filebutton">Ajouter une image</label>
					  <div class="col-md-4">
					    <input id="img1_resto" name="ch_file2" class="input-file" type="file">
					  </div>
					</div>

					<!-- Ajouter image n°3 --> 
					<div class="form-group">
					  <label class="col-md-4 control-label" for="filebutton">Ajouter une image</label>
					  <div class="col-md-4">
					    <input id="img1_resto" name="ch_file3" class="input-file" type="file">
					  </div>
					</div>

					<!-- Ajouter image n°4 --> 
					<div class="form-group">
					  <label class="col-md-4 control-label" for="filebutton">Ajouter une image</label>
					  <div class="col-md-4">
					    <input id="img1_resto" name="ch_file4" class="input-file" type="file">
					  </div>
					</div>

					<!-- Button Valider -->
					<div class="form-group">
					  <label class="col-md-4 control-label" for="singlebutton"></label>
					  <div class="col-md-4">
					    <button id="singlebutton" name="singlebutton" class="btn btn-primary" type="submit">Valider</button>
					  </div>
					</div>

					</fieldset>
				</form>
			</div>


<?php include_once('../app/view/include/footer.inc.php'); ?>              