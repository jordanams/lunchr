<?php include_once('../app/view/include/header.inc.php'); ?>
<script>
$(function() {
    $( "#datepicker" ).datepicker({ minDate: 0, maxDate: "15D", altField: "#alternate",
      altFormat: "DD",monthNames: ['Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Août', 'Septembre', 'Octobre', 'Novembre', 'Décembre'],
monthNamesShort: ['Janv.', 'Févr.', 'Mars', 'Avril', 'Mai', 'Juin', 'Juil.', 'Août', 'Sept.', 'Oct.', 'Nov.', 'Déc.'],
dayNames: ['Dimanche', 'Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi', 'Samedi'],
dayNamesShort: ['Dim.', 'Lun.', 'Mar.', 'Mer.', 'Jeu.', 'Ven.', 'Sam.'],
dayNamesMin: ['D', 'L', 'M', 'M', 'J', 'V', 'S'],
dateFormat: 'yy-mm-dd' });
  });
  </script>
   <?php if(isset($_GET['mail_exist'])) {
                          if($_GET['mail_exist'] = 1)
                          {
                            ?>
                            <div class='notifications mail_exist'></div>
                            <?php
                          }
                        }
?>
 <section class="section account_content">
  <div class="container">
    <div class="row">
    	<div class="col-lg-4 col-md-4 col-xs-12 cart_summary_content no_pad">
    		<div class="col-xs-12 title_cart_summary pull_relative text-center">
    			<h2>YOUR CART</h2>
    			<div class="cart_summary pull_absolute fa fa-shopping-cart"></div>
            <p><span><?php echo $count_articles; ?> </span> articles</p>
    		</div>
    		<?php
    		$GrandTotal='';
    		foreach ($panier as $key => $row) {//var_dump($panier);?>
        <div class="articles_summary_content">
          <div class="clearfix article_summary_bloc">
            <div class="pull_left article_summary"><?php echo $panier[$key][0]['lp_nom']; ?></div>
              <div class="pull_left quantity"> : <?php echo $row[1]?></div>
              <div class="pull_right price_summary"><?php echo $panier[$key][0]['lp_prix']*$row[1]; ?>€</div>
            </div>
        </div>
        <?php $prixTotal = ($panier[$key][0]['lp_prix']*$row[1]);$GrandTotal += $prixTotal;
        ?>					
        <?php } ?>
        <br/> 
        <h4 class="total">Total : <?php echo $GrandTotal; ?> €</h4>
    	</div>
        <?php if(!isset($_SESSION['id_user']))
        {
        ?>
    	<div class="pull_right col-lg-8 col-md-7 col-xs-12 recap_summary_content">
        <div class="row">
          <h1 class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 text-center">Summary</h1>
            <p class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 text-center">Finalize your booking at the restaurant <span class='name_restaurant_summary'><?php echo $details[0]['lr_nom']; ?> </span></p>
            <div class="col-lg-12 col-md-12 finalize_booking_summary text-center">
              <p>1 - First, get logged !</p>  
                <!--  <div class="facebook_connect_summary">Connect with facebook</div><br/> -->
                <button class="color_principal button_log button_style font_open_sansbold trigger">Log in</button>
                <br/>
                <div><b>OR</b></div><br/>
                <div class="col-lg-10 col-lg-offset-1">
                  <form class="form_summary" method="post">
                    <div class="overflow form-group">
                      <label for="inputEmail3" class="col-sm-4 control-label">Civility</label>
                      <div class="col-sm-8">
                        <label class="radio-inline" for="radios-0">
                        <input type="radio" name="gender_user" id="radios-0" value="Female" checked="checked">
                        Female
                        </label> 
                        <label class="radio-inline" for="radios-1">
                          <input type="radio" name="gender_user" id="radios-1" value="Male">Male
                        </label> 
                      </div>
                    </div>
                    <div class="overflow form-group">
                      <label for="inputEmail3" class="col-sm-4 control-label">First name</label>
                      <div class="col-sm-8">
                        <input name="nom_user" type="text" class="form-control" placeholder="First name" required>
                      </div>
                    </div>
                    <div class="overflow form-group">
                      <label for="inputEmail3" class="col-sm-4 control-label">Last Name</label>
                      <div class="col-sm-8">
                        <input name="prenom_user" type="text" class="form-control" placeholder="Last Name" required>
                      </div>
                    </div>
                    <div class="overflow form-group">
                      <label for="inputEmail3" class="col-sm-4 control-label">Email</label>
                      <div class="col-sm-8">
                        <input name="email_user" type="email" class="form-control" id="inputEmail3" placeholder="Email" required>
                      </div>
                    </div>                                  
                    <div class="overflow form-group">
                      <label for="inputEmail3" class="col-sm-4 control-label">Phone</label>
                        <div class="col-sm-8">
                          <input name="phone_user" type="tel" class="form-control" id="inputEmail3" placeholder="Phone" required>
                        </div>
                      </div>                                      
                      <div class="overflow form-group">
                        <label for="inputPassword3" class="col-sm-4 control-label">Password</label>
                        <div class="col-sm-8">
                          <input name="mdp_user" type="password" class="form-control" id="inputPassword3" placeholder="Password" required>
                        </div>
                      </div>
                      <div class="overflow form-group">
                        <label class="col-sm-4 control-label">Country</label>
                        <div class="col-sm-8">
                          <select name="country_user" class="form-control">
                            <option selected>France</option>
                            <option>Italie</option>
                            <option>Engleterre</option>
                            <option>Espagne</option>
                            <option>Allemagne</option>
                          </select>
                        </div>
                      </div>
                      <div class="form-group overflow">
                        <div class="col-sm-offset-4 col-sm-8">
                          <input type="submit" class="btn btn-danger btn-default" value="Register" />
                        </div>
                      </div>
                    </form> 
                  </div>
                </div>  
                <?php } else { ?>
                <div class="col-lg-12 details_summary_order text-center">
                  <p class="font_open_sansbold">2 - Finalize your booking by several informations !</p>  
                    <form class=" col-sm-12 form_summary_test" method="post">
                    <div class="col-sm-6">
                    <div class="overflow form-group">
                      <p for="" class="">Choose a date</p>
                      <div class="col-sm-8 col-sm-offset-2">
                       <input class='form-control' name="date_resa" type="text" id="datepicker" required/>
                      </div>
                    </div>
                    <div class="overflow form-group form_group_resp">
                      <p for="" class="">Choose an hour</p>
                      <div class="col-sm-8 col-sm-offset-2">
                        <select class="form-control" name="horraire_resa" id="horraire" required>
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
                  </div>
                  <div class="form-group form_group_resp">
                    <input id="alternate" name="alternate" type="hidden"class="form-control" />
                  </div>
                  <div class="overflow form-group form_group_resp">
                    <p for="" class="">Number of persons</p>
                    <div class="col-sm-8 col-sm-offset-2">
                      <select name="personne_resa" class="form-control" required>
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6 details_summary_order">
                  <div class="text-center">Location</div>
                  <div class="text-center font_open_sansbold"><?php echo $details[0]['lr_adresse']; ?></div>
                  <div class="coments_summary">
                    <p>Do you have any comments ? ( anything about your dish , the restaurant .. )</p>
                    <textarea class="col-lg-12" name="commentaire_commande"></textarea>
                  </div>
                </div>
                <input type="submit" class="btn btn-danger btn-default" value="Checkout" />
              </form> 
              <!-- <a href="<?php echo $paypal ?>">Payer</a> -->
            </div>                
          </div>
        </div>
      </div>      
    </div>
    <?php } ?>    
  </section>
<?php include_once('../app/view/include/footer.inc.php'); ?>
<?php
//var_dump($_SESSION);
?>

