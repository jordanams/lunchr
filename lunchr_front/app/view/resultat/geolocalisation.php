<?php include_once('../app/view/include/header.inc.php'); ?>
<section class="section resultat">
    <div class="container">
        <div class="row">
          <a href="#" onClick="ga('send', 'event', 'searchfilter', 'clic');">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mg-t10 num_result">
                <span>Search Filter <img alt="Search icone" src="img/search_icon.png"></span>
                <div><?php echo count($afficher_resto2); ?> restaurants match your criteria</div>
            </div>
          </a>
            <!--DEBUT  SEARCH FILTER -->
            <div class="col-lg-12 col-md-10 col-sm-12 col-xs-12 no_pad  search_filter_content">
                <form class="form-inline form_advanced_search col-lg-10 col-md-10 col-sm-12 col-xs-12 mg-t10" role="form">
                    <p class="text-center text_searchfilter">
                      Search filter
                    </p>
                     <h5> The search filter is coming soon ! </h5>
                    <!--
<div class="form-group col-lg-3 col-md-3 col-sm-3 col-xs-3">
                        <select class="form-control">
                          <option>Note</option>
                          <option>2</option>
                          <option>3</option>
                          <option>4</option>
                          <option>5</option>
                        </select>
                    </div>
                    <div class="form-group col-lg-3 col-md-3 col-sm-3 col-xs-3">
                        <select class="form-control">
                          <option>Type of cuisine</option>
                          <option>2</option>
                          <option>3</option>
                          <option>4</option>
                          <option>5</option>
                        </select>
                    </div>
                    <div class="form-group col-lg-3 col-md-3 col-sm-3 col-xs-3">
                        <select class="form-control">
                          <option>Price</option>
                          <option>2</option>
                          <option>3</option>
                          <option>4</option>
                          <option>5</option>
                        </select>
                    </div>
                    <div class="form-group col-lg-3 col-md-3 col-sm-3 col-xs-3">
                        <select class="form-control">
                          <option>Where</option>
                          <option>2</option>
                          <option>3</option>
                          <option>4</option>
                          <option>5</option>
                        </select>
                    </div>
                </form>
-->
            </div>
            <!-- FIN SEARCH FILTER -->
            <!-- DEBUT DISH CONTENT -->
            <?php 
             if ($_SESSION['Latitude_USER'] == '')
	            {
	            			            echo"<h3>Géolocalisation introuvable ! Veuillez accepter les paramêtres de géolocolisation de votre navigateur pour pouvoir utiliser cette fonction.</h3>";
	            }
	            else
	            {
            foreach ($afficher_resto2 as $key => $row) {
            
	                  ?>
            <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12 marg_tb10 dish_content no_pad ">
              <div class="col-lg-2 col-md-2 col-sm-2 col-xs-4 no_pad  resp_img">
                <div class="dish_img bck_restaurant01"><img src="<?php echo $row['lr_image_1']?>" title="<?php echo $row['lr_nom']?>" alt="<?php echo $row['lr_nom']?>" width="160" height="140"/></div>
              </div>
              <div class="col-lg-10 col-md-10 col-sm-10 col-xs-8 no_pad ">
                <div class="col-lg-10 col-md-10 col-sm-10 col-xs-8 no_pad ">
                  <h2 class="title_restaurant_result pull-left"><?php echo $row['lr_nom']?></h2><i class='distance'><?php echo $row[0]?> km</i>
                  <span class="geoloc_restaurant_result pull-left">
                    <?php echo $row['lr_adresse']?>
                  </span>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-4 note_result">
                  <p class="text-center"></p>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 info_result no_display no_pad ">
                  <p>From : <?php echo $row['lr_from_price']; ?> <span> Euro </span></p>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 info_result no_pad ">
                  <p>Type of cuisine :  <span> </span></p>
                </div>
              </div>
              <a href="index.php?module=menu&action=menu&id=<?php echo $row['lr_id'] ?>" onClick="ga('send', 'event', 'button', 'menu01','page_resultat', 'clic');">
                <div class="col-lg-2 col-md-2 col-sm-2 menu_result text-center">Details</div>
              </a>
            </div>
            <?php
            }
            }
            ?>
            <!-- FIN DISH CONTENT -->
            <!-- DEBUT DISH CONTENT -->
           
        </div>
    </div>
</section>
<?php include_once('../app/view/include/footer.inc.php'); ?>