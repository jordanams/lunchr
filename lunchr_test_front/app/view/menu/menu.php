<?php include_once('../app/view/include/header.inc.php'); ?>
<div class="container dessous_header">

    <div class="row">
    <?php 
            foreach ($details as $key => $row) {
            
	 ?>
        <div class="col-lg-4 col-md-4 col-sm-4 no_pad description_fiche_resp">
            <h1 class="title_resto text-center"> <?php echo $row['lr_nom'] ?> </h1>
            <div class="prez_restau">
                <img class="zoom" src="<?php echo $row['lr_image_1'] ?>">
            </div>
           <div class="col-lg-12 no_pad pull_relative bloc_favorite">
                <a href="construction.html" class="favourite" onClick="ga('send', 'event', 'favorite', 'icone', 'clic');"><div class="favourite text-center"> ADD TO FAVOURITE </div></a>
                 <a href="construction.html" onClick="ga('send', 'event', 'favorite', 'icone', 'clic');" class="bck_star_icon fa fa-star pull_absolute"></a>
            </div>
        </div>
        <div class="col-lg-8 col-md-8 col-sm-8 text-center chose_critere">
            <h3>Choose your date - your hour et notice the numbers of person before take your menu ! </h3>
            <h4 class="menu_below"> The menu below is changing if you pick some criteras</h4>
            <form class="form-inline" role="form">
                <div class="form-group form_group_resp">
                    Choose a date
                    <select class="form-control">
                      <option>30/11/2014</option>
                    </select>
                </div>

                <div class="form-group form_group_resp">
                    Choose an hour
                    <select class="form-control">
                      <option>18:00</option>
                      <option>19:00</option>
                      <option>20:00</option>
                      <option>21:00</option>
                      <option>22:00</option>
                    </select>
                </div>

                <div class="form-group form_group_resp">
                    Number of persons
                    <select class="form-control">
                      <option>1</option>
                      <option>2</option>
                      <option>3</option>
                      <option>4</option>
                      <option>5</option>
                    </select>
                </div>
            </form>
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
               
                <div class="empty_cart">Empty</div>
                <div class="panier col-lg-12 col-md-12 col-sm-12"></div>
            </div>
            <!-- Fin Panier -->
            <div class="col-lg-12 col-md-12 col-sm-12 no_pad">
                <p class="learn_to_know text-center no_marg">LEARN TO KNOW THEM<br />
                    <span> <?php echo $row['lr_description'] ?> </span>
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
        <div class="col-lg-8 col-md-8 col-sm-8">
            <div role="tabpanel" class="col-lg-12 nav_tab_resp no_pad">
              <!-- Nav tabs -->
              <ul class="choix_plat_div text-center no_pad" role="tablist">
              <a class='tab_style active_tab'" href="" aria-controls="" role="tab" data-toggle="tab">
                    <li role="presentation">Tous</li>
                </a>
              <?php 
            foreach ($menu as $key => $row) {
	 ?>

             
   <a class='tab_style'" href="#<?php echo $row['lm_nom']; ?>" aria-controls="<?php echo $row['lm_nom']; ?>" role="tab" data-toggle="tab">
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
                                    <img class="col-lg-12 col-md-12 col-sm-12 no_pad img_dish"src="img/drink01.jpg">
                                </div>
                            </div>
                            <div class="col-lg-9 col-md-9 col-sm-9 content_fiche no_pad">
                                <h2 class="col-lg-9 col-md-9 col-sm-9 title_dish_fiche no_pad"><?php echo $row['lp_nom'] ?></h2>
                                <div class="col-lg-3 col-md-3 col-sm-3 price_fiche text-center">
                                    <?php echo $row['lp_prix']; ?>€
                                </div>
                                <span class="col-lg-12 col-md-12 col-sm-12 no_pad">
                                    <?php echo $row['lp_description']; ?>
                                </span>
                                <button class="col-lg-3 col-md-3 col-lg-offset-9 col-md-offset-9 col-sm-offset-9 col-sm-3 add_fiche"> <a href="#" onClick="ga('send', 'event', 'button', 'add', 'dish1', 'clic');">ADD</a></button>
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
<?php include_once('../app/view/include/footer.inc.php'); ?>



