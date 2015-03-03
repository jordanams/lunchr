<?php include_once('../app/view/include/header.inc.php'); ?>
<script>
$(function() {
    $( "#datepicker" ).datepicker({ minDate: 0, maxDate: "15D", altField: "#alternate",
      altFormat: "DD",monthNames: ['Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Août', 'Septembre', 'Octobre', 'Novembre', 'Décembre'],
monthNamesShort: ['Janv.', 'Févr.', 'Mars', 'Avril', 'Mai', 'Juin', 'Juil.', 'Août', 'Sept.', 'Oct.', 'Nov.', 'Déc.'],
dayNames: ['Dimanche', 'Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi', 'Samedi'],
dayNamesShort: ['Dim.', 'Lun.', 'Mar.', 'Mer.', 'Jeu.', 'Ven.', 'Sam.'],
dayNamesMin: ['D', 'L', 'M', 'M', 'J', 'V', 'S'],
dateFormat: 'dd/mm/yy' });
  });
  </script>
<div class="container dessous_header">
<?php if(isset($_GET['add_favorite'])) {
                          if($_GET['add_favorite'] = 1)
                          {
                            ?>
                            <div class='notifications favorite'></div>
                            <?php
                          }
                        }
                        ?>
                        
                        
                        <?php if(isset($_GET['del_favorite'])) {
                          if($_GET['del_favorite'] = 1)
                          {
                            ?>
                            <div class='notifications favorite_delete'></div>
                            <?php
                          }
                        }
                        ?>

    <div class="row">
    <?php 
            foreach ($details as $key => $row) {
            
	 ?>
        <div class="col-lg-4 col-md-4 col-sm-4 no_pad description_fiche_resp">
            <h1 class="title_resto text-center"> <?php echo $row['lr_nom'] ?> </h1>
            <div class="prez_restau">
                <img class="zoom" src="<?php echo $row['lr_image_1'] ?>">
            </div>
            <?php if(isset($_SESSION['id_user'])) {
	            if(isset($favoris[0]['lf_id']))
	            {
             ?>
           <div class="col-lg-12 no_pad pull_relative bloc_favorite">
                <a href="index.php?module=menu&action=favoris&del_favorite=1&id=<?php echo $_GET['id'] ?>" class="favourite" onClick="ga('send', 'event', 'favorite', 'icone', 'clic');"><div class="favourite text-center"> REMOVE FROM FAVOURITE </div></a>
              

            </div>
        
            <?php }
             else {
             ?>
             <div class="col-lg-12 no_pad pull_relative bloc_favorite">
                <a href="index.php?module=menu&action=favoris&add_favorite=1&id=<?php echo $_GET['id'] ?>" class="favourite" onClick="ga('send', 'event', 'favorite', 'icone', 'clic');"><div class="favourite text-center"> ADD TO FAVOURITE </div></a>
             </div>

             <?php
	             }
	             }
	            if(!isset($_SESSION['id_user']))
	             {
              ?>
            <div class="col-lg-12 no_pad pull_relative bloc_favorite">
            <div class="favourite text-center"> To add this restaurant to your favorite please log in </div>
            </div>
                <?php } ?>
        </div>
        <div class="col-lg-8 col-md-8 col-sm-8 text-center chose_critere">
            <h3>Choose your dish ! </h3>
            <?php 
if(isset($_GET['nom_produit']))
{
	echo "<span class='close_resto'>The maximum for <strong>".$_GET['nom_produit']."</strong> is <strong>".$_GET['max_quantity']."</strong></span>";
}
?>
            <!--<h4 class="menu_below"> The menu below is changing if you pick some criteras</h4>
            <form class="form-inline" method="post">
                <div class="form-group form_group_resp">
                    Choose a date
                    <input class='form-control' name="date_resa" type="text" id="datepicker" />
                    
                </div>
                <div class="form-group form_group_resp">
                <input id="alternate" name="alternate" type="hidden"class="form-control" />
                </div>
                <div class="form-group form_group_resp">
                    Choose an hour
                    <select class="form-control" name="horraire_resa" id="horraire" name="horraire">
                    <?php
                      for ( $heures = $heure[0]['open_day'] ; $heures < $heure[0]['close_night'] ; $heures++ ){
                         for ( $minutes = 0 ; $minutes <= 45 ; $minutes += 15 ){  
                       ?>
                        <option value="<?php echo sprintf('%02d:%02d', $heures, $minutes) ?>:00" <?php if(($heures>$heure[0]['close_day'])){
                        echo"disabled";
                      }
                      if($heures>=$heure[0]['open_night']){
                        echo"disabled";
                      }
                    ?>><?php echo sprintf('%02d:%02d', $heures, $minutes) ?></option>     <?php
                         }
                      }
                       ?>
                    </select>
                </div>
                <div class="form-group form_group_resp">
                    Number of persons
                    <select name="personne_resa" class="form-control">
                      <option>1</option>
                      <option>2</option>
                      <option>3</option>
                      <option>4</option>
                      <option>5</option>
                    </select>
                </div>
            </form>-->
        </div>
    </div>

    <div class="row">
        <!--   LEFT PART COL-LG-4 -->
        <div class="col-lg-4 col-md-4 col-sm-4 no_pad">
            <div class="petites_vignettes col-lg-12 col-md-12 col-sm-12 no_pad">
                <img class="col-lg-3 col-md-3 col-sm-3 no_pad no_marg dezoom" src="<?php echo $row['lr_image_1'] ?>">
                <img class="col-lg-3 col-md-3 col-sm-3 no_pad no_marg dezoom" src="<?php echo $row['lr_image_2'] ?>">
                <img class="col-lg-3 col-md-3 col-sm-3 no_pad no_marg dezoom" src="<?php echo $row['lr_image_3'] ?>">
                <img class="col-lg-3 col-md-3 col-sm-3 no_pad no_marg dezoom" src="<?php echo $row['lr_image_4'] ?>">
            </div>
            
            <!-- Début Panier -->

            <div class="col-lg-12 col-md-12 col-sm-12 text-center cart pull_relative">
                <div class="title_cart"> YOUR CART <span class="pull_absolute fa fa-shopping-cart"></span></div>
                <form method="post">
                <div class="empty_cart">Empty</div>
                  <div class="panier col-lg-12 col-md-12 col-sm-12"></div>
                  <input  class="order_button" type="submit" value="Order now" />           
                </form>
            </div>
            <!-- Fin Panier -->
            <div class="col-lg-12 col-md-12 col-sm-12 no_pad">
                <p class="learn_to_know text-center no_marg">LEARN TO KNOW THEM<br />
                    <span> <?php echo $row['lr_description'] ?> </span>
                </p>
            </div>
            
                        <div class="col-lg-12 col-md-12 col-sm-12 no_pad">
                <p class="learn_to_know text-center no_marg">TIMES<br />
                    <span> 
<?php if(($horraire[0]['lh_open_day']<$datetime) && ($datetime<$horraire[0]['lh_close_day'])) { ?>
<?php if(($horraire[0]['lh_open_day']<$datetime) && ($datetime<$horraire[0]['lh_close_day']))
// && ($horraire[0]['lh_open_night']<$datetime) && ($datetime<$horraire[0]['lh_close_night']))
{
	echo "<span class='open_resto'><b>OPEN</b></span>";
}
}
else if(($horraire[0]['lh_open_night']<$datetime) && ($datetime<$horraire[0]['lh_close_night']))
{
	if(($horraire[0]['lh_open_night']<$datetime) && ($datetime<$horraire[0]['lh_close_night']))
// && ($horraire[0]['lh_open_night']<$datetime) && ($datetime<$horraire[0]['lh_close_night']))
{
	echo "<span class='open_resto'><b>OPEN</b></span>";
}

}
else
{
	echo "<b class='close_resto'>CLOSED</b>";
}?>
 </span>
                </p>
                        </div>
              <!-- <div class="map_bloc_fiche_restaurant col-lg-12 col-md-12 col-sm-12 no_pad"> --> 
               <br/>
                <div id="details_map"> 
				<?php
							require('../app/lib/googlemap/GoogleMapAPIv3.class.php');
							$gmap = new GoogleMapAPI();
							$gmap->setCenter("".$row['lr_adresse']."");
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
							$coordtab []= array("".$row['lr_adresse']."","Paris","<strong>".$row['lr_nom']."<br/></strong>".$row['lr_adresse']."");
							$gmap->addArrayMarkerByAddress($coordtab);
							$gmap->setIconSize(20,34);
							$gmap->generate();
							echo $gmap->getGoogleMap();
							?>
					
			   </div>
          <!--   </div> -->
        </div>
        <br/>
        <br/>
<?php
}
?>
        <!--    PART COL-LG-8 -->
        <div class="col-lg-8 col-md-8 col-sm-8 pannel_menu">
            <div role="tabpanel" class="col-lg-12 nav_tab_resp no_pad">
              <!-- Nav tabs -->
              <ul class="choix_plat_div text-center no_pad" role="tablist">
              <a class='tab_style active_tab display_clic_none' href="" aria-controls="" role="tab" data-toggle="tab">
                    <li role="presentation">Tous</li>
                </a>
              <?php 
            foreach ($menu as $key => $row) {
	 ?>

             
   <a class='tab_style display_clic_yes' href="#<?php echo $row['lm_nom']; ?>" aria-controls="<?php echo $row['lm_nom']; ?>" role="tab" data-toggle="tab">
                    <li role="presentation"><?php echo $row['lm_nom']; ?></li>
                </a>

<?php
}
?>

              </ul>
              <!-- Tab panes -->
              <div class="tab-content">
    <?php 
            foreach ($menu as $key => $row) {
	 ?>
	 <!-- DEBUT ONGLET DRINKS -->
                              <div role="tabpanel" class="tab-pane active" id="<?php echo $row['lm_nom'] ?>">   
     <?php 
            foreach ($produits[$key] as $key => $row) {
	 ?>
                <!-- DEBUT ONGLET TAB -->
     <?php
     if(empty($row['lp_nom']))
     {
     	 echo"<br/>";
	     echo"<div class='text-center'>Pas de produits disponible !</div>";
     }
     else
     {
     ?>
                    <div class="onglet_drinks">
                        <!-- PLAT  --> 
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 marg">
                            <div class="col-lg-3 col-md-3 col-sm-3 content_visuel02">
                                <div class="col-lg-12 col-md-12 col-sm-12 no_pad bloc_visuel02">
                                    <img class="col-lg-12 col-md-12 col-sm-12 no_pad img_dish"src="<?php echo $row['lp_image'] ?>">
                                </div>
                            </div>
                            <div class="col-lg-9 col-md-9 col-sm-9 content_fiche no_pad">
                                <h2 class="col-lg-9 col-md-9 col-sm-9 title_dish_fiche no_pad"><?php echo $row['lp_nom'] ?></h2>
                                <div class="col-lg-3 col-md-3 col-sm-3 price_fiche text-center">
                                    <?php echo $row['lp_prix']; ?>€
                                </div>
                                <input id="id_product" type="hidden" value="<?php echo $row['lp_id']; ?>" />
                                <span class="col-lg-12 col-md-12 col-sm-12 no_pad">
                                    <?php echo $row['lp_description']; ?>
                                </span>
                                <?php if($row['lp_quantites'] == 0)
                                {
	                                echo '<span class="col-lg-3 col-md-3 col-lg-offset-9 col-md-offset-9 col-sm-offset-9 col-sm-3">The product is not available</span>';
                                }
                                else
                                { ?>
                                <button class="col-lg-3 col-md-3 col-lg-offset-9 col-md-offset-9 col-sm-offset-9 col-sm-3 add_fiche"> <a href="#" onClick="ga('send', 'event', 'button', 'add', 'dish1', 'clic');">ADD</a></button>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                           
      
                    <!-- FIN ONGLET TAB -->


<?php
}
}
?>
              </div>
<!-- FIN ONGLET DRINKS -->             
<?php
}
?> 
                        <!-- PLAT  --> 
                <!-- FIN ONGLET DRINKS -->

        <!--   FIN PART COL-LG-8 -->
    </div>
</div>
   </div>
              </div>
            </div>
        </div>
    </div>
</div>

<!--</div>-->
<!--</div>-->
<?php include_once('../app/view/include/footer.inc.php');
 ?>




