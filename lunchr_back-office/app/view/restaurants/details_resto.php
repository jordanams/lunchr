<?php include_once('../app/view/include/header.inc.php'); ?>

<div class="col-lg-12">

           		<h1> Administration des restaurants </h1>
		        <?php include_once('../app/view/include/header.restaurant.inc.php'); ?>


        	<form class="form-horizontal" name="formu_resto" action="" method="POST">
				<fieldset>

					<!-- Form Name -->
					<legend>Détails restaurant : <?php echo $verif_details[0]['lr_nom'];?></legend>


						<!-- DETAILS RESTAURANTS -->
						<div id="details_gauche_resto" class="col-md-4">	
							<!-- Nom -->
							<div class="form-group">
							  <label class="" for="textinput">Nom</label>  
							  <div class="">
							  	<?php echo $verif_details[0]['lr_nom'];?> 
							  </div>
							</div>

							<!-- Adresse -->
							<div class="form-group">
							  <label class="" for="textinput">Adresse</label>  
							  <div class="" id="adress_resto">
							  	<?php echo $verif_details[0]['lr_adresse'];?>
							  </div>
							</div>

							<!-- Description -->
							<div class="form-group">
							  <label class="" for="textarea">Description</label>
							  <div class="">                     
							    <?php echo $verif_details[0]['lr_description'];?>
							  </div>
							</div>
						</div>


						<div id="details_map">
							<!-- Google Map -->
							<?php
							require('../app/lib/googlemap/GoogleMapAPIv3.class.php');
							$gmap = new GoogleMapAPI();
							$gmap->setCenter("".$verif_details[0]['lr_adresse']."");
							//$gmap->setEnableWindowZoom(true);
							//$gmap->setEnableAutomaticCenterZoom(true);
							//$gmap->setDisplayDirectionFields(FALSE);
							//$gmap->setClusterer(false);
							$gmap->setSize('100%','100%');
							//$gmap->setZoom(18);
							$gmap->setLang('fr');
							//$gmap->setDefaultHideMarker(false);
							//$gmap->addDirection('nantes','paris');

							$coordtab = array();
							$coordtab []= array("".$verif_details[0]['lr_adresse']."","Paris","<strong>".$verif_details[0]['lr_nom']."<br/></strong>".$verif_details[0]['lr_adresse']."");
							$coordtab2 = array();
							$coordtab2 []=array(''.$_SESSION['Latitude_USER'].'',''.$_SESSION['Longitude_USER'].'','Position Actuelle','<strong>Vous êtes ici</strong>');
							$gmap->addArrayMarkerByAddress($coordtab);
							$gmap->addArrayMarkerByCoords($coordtab2);
							$gmap->setIconSize(20,34);
							$gmap->generate();
							echo $gmap->getGoogleMap();
							?>
						</div><br/>

			            <table id="tableau" class="table table-bordered table-hover">

			                  <tr>
			                  		<th height="40" width="110"></th>
			                        <th height="40" width="110">Midi</th>
			                        <th height="40" width="110">Soir</th>
			                  </tr>
									<tr>
										<td><?php echo $verif_details[0]['lh_day'];?></td>
										<?php echo"<td>".$verif_details[0]['lh_open_day']. " - ".$verif_details[0]['lh_close_day']."</td>";?>
										<?php echo"<td>".$verif_details[0]['lh_open_night']. " - ".$verif_details[0]['lh_close_night']."</td>";?>
									<tr>
									<tr>
										<td><?php echo $verif_details[1]['lh_day'];?></td>
										<?php echo"<td>".$verif_details[1]['lh_open_day']. " - ".$verif_details[1]['lh_close_day']."</td>";?>
										<?php echo"<td>".$verif_details[1]['lh_open_night']. " - ".$verif_details[1]['lh_close_night']."</td>";?>
									<tr>
									<tr>
										<td><?php echo $verif_details[2]['lh_day'];?></td>
										<?php echo"<td>".$verif_details[2]['lh_open_day']. " - ".$verif_details[2]['lh_close_day']."</td>";?>
										<?php echo"<td>".$verif_details[2]['lh_open_night']. " - ".$verif_details[2]['lh_close_night']."</td>";?>
									<tr>
									<tr>
										<td><?php echo $verif_details[3]['lh_day'];?></td>
										<?php echo"<td>".$verif_details[3]['lh_open_day']. " - ".$verif_details[3]['lh_close_day']."</td>";?>
										<?php echo"<td>".$verif_details[3]['lh_open_night']. " - ".$verif_details[3]['lh_close_night']."</td>";?>
									<tr>
									<tr>
										<td><?php echo $verif_details[4]['lh_day'];?></td>
										<?php echo"<td>".$verif_details[4]['lh_open_day']. " - ".$verif_details[4]['lh_close_day']."</td>";?>
										<?php echo"<td>".$verif_details[4]['lh_open_night']. " - ".$verif_details[4]['lh_close_night']."</td>";?>
									<tr>
									<tr>
										<td><?php echo $verif_details[5]['lh_day'];?></td>
										<?php echo"<td>".$verif_details[5]['lh_open_day']. " - ".$verif_details[5]['lh_close_day']."</td>";?>
										<?php echo"<td>".$verif_details[5]['lh_open_night']. " - ".$verif_details[5]['lh_close_night']."</td>";?>
									<tr>
									<tr>
										<td><?php echo $verif_details[6]['lh_day'];?></td>
										<?php echo"<td>".$verif_details[6]['lh_open_day']. " - ".$verif_details[6]['lh_close_day']."</td>";?>
										<?php echo"<td>".$verif_details[6]['lh_open_night']. " - ".$verif_details[6]['lh_close_night']."</td>";?>
									<tr>
			            </table>


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

					<noscript>
						<p>Attention : </p>
						<p>Afin de pouvoir utiliser Google Maps, JavaScript doit être activé.</p>
						<p>Or, il semble que JavaScript est désactivé ou qu'il ne soit pas supporté par votre navigateur.</p>
						<p>Pour afficher Google Maps, activez JavaScript en modifiant les options de votre navigateur, puis essayez à nouveau.</p>
					</noscript>




					  <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
					      <div class="modal-dialog">
					        <div class="modal-content">         
					          <div class="modal-body">                
					          </div>
					        </div><!-- /.modal-content -->
					      </div><!-- /.modal-dialog -->
					   </div><!-- /.modal -->

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