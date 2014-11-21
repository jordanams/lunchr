<?php include_once('../app/view/include/header.inc.php'); ?>

           <div class="col-lg-12">

           		<h1> Administration des restaurants </h1>
		        <ul class="nav nav-tabs nav-justified" role="tablist">
			        <li role="presentation"<?php if($_GET['action']=='index') { echo' class="active"'; } ?>><a href="index.php?module=restaurants&action=index">Listes des restaurants</a></li>
		  			<li role="presentation"<?php if($_GET['action']=='ajouter_resto') { echo' class="active"'; } ?>><a href="index.php?module=restaurants&action=ajouter_resto">Ajouter un restaurant</a></li>
				</ul>

           


        	<form class="form-horizontal" name="formu_resto" action="" method="POST" enctype="multipart/form-data">
				<fieldset>

					<!-- Form Name -->
					<legend>Nom du restaurant</legend>

					<!-- Nom -->
					<div class="form-group">
					  <label class="col-md-4 control-label" for="textinput">Nom</label>  
					  <div class="col-md-4">
					  	<input required id="nom_resto" name="nom_resto" type="text" placeholder="Nom" class="form-control input-md"> 
					  </div>
					</div>

					<!-- Adresse -->
					<div class="form-group">
					  <label class="col-md-4 control-label" for="textinput">Adresse</label>  
					  <div class="col-md-4">
					  	<input required id="adresse_resto" name="adresse_resto" type="text" placeholder="Adresse" class="form-control input-md"> 
					  </div>
					</div>

					<!-- Description -->
					<div class="form-group">
					  <label class="col-md-4 control-label" for="textarea">Description</label>
					  <div class="col-md-4">                     
					    <textarea required class="form-control" type="text" id="desc_resto" name="desc_resto" placeholder="Description"></textarea>
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
					  	<option selected>12:00</option>
					  	</select>
					  	à 
					  	<select name="horraire_midi_fermeture1">
					  	<option>13:00</option>
					  	<option selected>14:00</option>
					  	<option>15:00</option>
					  	</select> 
					  	<br/>
					  	SOIR  
					  	<select name="horraire_soir_ouverture1">
					  	<option selected>19:00</option>
					  	<option>20:00</option>
					  	<option>21:00</option>
					  	</select>
					  	à 
					  	<select name="horraire_soir_fermeture1">
					  	<option>22:00</option>
					  	<option selected>23:00</option>
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
					  	<option selected>12:00</option>
					  	</select>
					  	à
					  	<select name="horraire_midi_fermeture2">
					  	<option>13:00</option>
					  	<option selected>14:00</option>
					  	<option>15:00</option>
					  	</select> 
					  	<br/>
					  	SOIR 
					  	<select name="horraire_soir_ouverture2">
					  	<option selected>19:00</option>
					  	<option>20:00</option>
					  	<option>21:00</option>
					  	</select>
					  	à
					  	<select name="horraire_soir_fermeture2">
					  	<option>22:00</option>
					  	<option selected>23:00</option>
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
					  	<option selected>12:00</option>
					  	</select>
					  	à
					  	<select name="horraire_midi_fermeture3">
					  	<option>13:00</option>
					  	<option selected>14:00</option>
					  	<option>15:00</option>
					  	</select>
					  	<br/> 
					  	SOIR
					  	<select name="horraire_soir_ouverture3">
					  	<option selected>19:00</option>
					  	<option>20:00</option>
					  	<option>21:00</option>
					  	</select>
					  	à
					  	<select name="horraire_soir_fermeture3">
					  	<option>22:00</option>
					  	<option selected>23:00</option>
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
					  	<option selected>12:00</option>
					  	</select>
					  	à
					  	<select name="horraire_midi_fermeture4">
					  	<option>13:00</option>
					  	<option selected>14:00</option>
					  	<option>15:00</option>
					  	</select> 
					  	<br/>
					  	SOIR  
					  	<select name="horraire_soir_ouverture4">
					  	<option selected>19:00</option>
					  	<option>20:00</option>
					  	<option>21:00</option>
					  	</select>
					  	à
					  	<select name="horraire_soir_fermeture4">
					  	<option>22:00</option>
					  	<option selected>23:00</option>
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
					  	<option selected>12:00</option>
					  	</select>
					  	à 
					  	<select name="horraire_midi_fermeture5">
					  	<option>13:00</option>
					  	<option selected>14:00</option>
					  	<option>15:00</option>
					  	</select>
					  	<br/> 
					  	SOIR 
					  	<select name="horraire_soir_ouverture5">
					  	<option selected>19:00</option>
					  	<option>20:00</option>
					  	<option>21:00</option>
					  	</select>
					  	à 
					  	<select name="horraire_soir_fermeture5">
					  	<option>22:00</option>
					  	<option selected>23:00</option>
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
					  	<option selected>12:00</option>
					  	</select>
					  	à 
					  	<select name="horraire_midi_fermeture6">
					  	<option>13:00</option>
					  	<option selected>14:00</option>
					  	<option>15:00</option>
					  	</select>
					  	<br/> 
					  	SOIR 
					  	<select name="horraire_soir_ouverture6">
					  	<option selected>19:00</option>
					  	<option>20:00</option>
					  	<option>21:00</option>
					  	</select>
					  	à
					  	<select name="horraire_soir_fermeture6">
					  	<option>22:00</option>
					  	<option selected>23:00</option>
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
					  	<option selected>12:00</option>
					  	</select>
					  	à 
					  	<select name="horraire_midi_fermeture7">
					  	<option>13:00</option>
					  	<option selected>14:00</option>
					  	<option>15:00</option>
					  	</select> 
					  	<br/>
					  	SOIR 
					  	<select name="horraire_soir_ouverture7">
					  	<option selected>19:00</option>
					  	<option>20:00</option>
					  	<option>21:00</option>
					  	</select>
					  	à
					  	<select name="horraire_soir_fermeture7">
					  	<option>22:00</option>
					  	<option selected>23:00</option>
					  	<option>00:00</option>
					  	</select> 					  
					  </div>
					</div>


					<!-- Ajouter une image --> 
					<div class="form-group">
					  <label class="col-md-4 control-label" for="filebutton">Ajouter une image</label>
					  <div class="col-md-4">
					    <input id="img1_resto" name="ch_file" class="input-file" type="file">
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