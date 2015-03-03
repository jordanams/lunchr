<?php include_once('../app/view/include/header.inc.php'); ?>
 <section class="section account_content">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 no_pad no_marg my_account_content">
                    <ul class="nav nav-tabs col-lg-3 col-md-4 col-sm-4 col-xs-12 onglets_account no_pad" role="tablist" id="myTab">
                        <li role="presentation" class="active col-lg-12 col-md-12 col-sm-12 col-xs-12 no_pad"><a href="#perso" class="onglet_style" aria-controls="perso" role="tab" data-toggle="tab">Personnal information</a></li>
                        <li role="presentation" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 no_pad"><a href="#history" class="onglet_style" aria-controls="history" role="tab" data-toggle="tab">History</a></li>
                        <li role="presentation" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 no_pad"><a href="#fav" class="onglet_style" aria-controls="fav" role="tab" data-toggle="tab">Favourites</a></li>
                        <li role="presentation" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 no_pad"><a href="#subs" class="onglet_style" aria-controls="subs" role="tab" data-toggle="tab">Subscription</a></li>
                    </ul>
                    <div class="tab-content col-lg-8 col-lg-offset-1 col-md-8 col-sm-8 col-xs-12 description_account">
                        <!-- Debut Onglet My Account -->
                        <?php if(isset($_GET['success_modif'])) {
                          if($_GET['success_modif'] = 1)
                          {
                            ?>
                            <div class='notifications top-left'></div>
                            <?php
                          }
                        }
                        ?>
                        
                        <?php if(isset($_GET['delete'])) {
                          if($_GET['delete'] = 1)
                          {
                            ?>
                            <div class='notifications favorite_delete'></div>
                            <?php
                          }
                        }
                        ?>
                          <h1 class="text-center font_open_sansbold">My Account</h1>
                          <hr class="hr_title_account no_pad"></hr>
                          <div role="tabpanel" class="col-lg-10 col-lg-offset-1 tab-pane active onglet_personal information" id="perso">
                            <h3 class="ss_title_account col-lg-12 text-center no_pad no_marg">Personal Information</h3>
                            <div class="col-lg-12 text-center ss_desc_account">Your contact information will be sent to the restaurant when you book a table.</div>
                            <form class="form-horizontal col-sm-10" method="post">
                                <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-4 control-label">Civility</label>
                                    <div class="col-sm-8">
                                        <label class="radio-inline" for="radios-0">
                                            <input name="gender" for="radios-0" type="radio" value="Female" <?php if($details[0]['lu_gender'] == "Female"){echo 'checked="checked"'; } ?> /> Female
                                        </label> 
                                        <label class="radio-inline" for="radios-1">
                                            <input name="gender" for="radios-1" type="radio" value="Male" <?php if($details[0]['lu_gender'] == "Male"){echo 'checked="checked"'; } ?> /> Male
                                        </label> 
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-4 control-label">Last name</label>
                                    <div class="col-sm-8">
                                    <input type="text" name="nom" class="form-control" placeholder="Jean" value="<?php echo $details[0]['lu_nom'] ?>" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-4 control-label">First Name</label>
                                    <div class="col-sm-8">
                                        <input type="text" name="prenom" class="form-control" placeholder="Lebon" value="<?php echo $details[0]['lu_prenom'] ?>" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-4 control-label">Email</label>
                                    <div class="col-sm-8">
                                        <input type="email" name="mail" class="form-control" placeholder="JeanLebon@jeanbon.com" value="<?php echo $details[0]['lu_mail'] ?>" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                <label class="col-sm-4 control-label">Phone</label>
                                    <div class="col-sm-8">
                                        <input type="tel" name="tel" class="form-control" placeholder="01010101010" value="<?php echo $details[0]['lu_tel'] ?>" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                <label class="col-sm-4 control-label">Password</label>
                                    <div class="col-sm-8">
                                        <input type="password" name="password" class="form-control" placeholder="********" value="<?php echo $details[0]['lu_password'] ?>" required>
                                    </div>
                                </div>
<!--                                 <div class="form-group">
                                    <label class="col-sm-4 control-label">Country</label>
                                    <div class="col-sm-8">
                                        <select class="form-control">
                                            <option selected>France</option>
                                            <option>Italie</option>
                                            <option>Angleterre</option>
                                            <option>Espagne</option>
                                            <option>Allemagne</option>
                                        </select>
                                    </div>
                                </div> -->
                                <div class="form-group">
                                    <div class="col-sm-offset-4 col-sm-8">
                                        <input type="submit" class="btn btn-danger" value="Save" />
                                    </div>
                                </div>
                                
                            </form>
                          </div>
                        <!-- Fin onglet My Account -->

                        <!-- Début onglet Historique -->
                        <div role="tabpanel" class="tab-pane onglet_personal information" id="history">
                            <h3 class="ss_title_account col-lg-12 text-center no_pad no_marg">History</h3>
                            <?php if(empty($commande))
                            {
                            ?>
                            <div class="no_fav text-center">You did not make a booking yet ! </div>
                            <?php
                            }
                            else
                            {
                            foreach ($commande as $key => $row) {
                            ?>
                            <div class="col-lg-12 history_content no_pad">
                              <div class="col-lg-6 info_commande">
                                <h2><?php echo $row['lr_nom'] ?></h2>
                                <div>Commandée le : <span><?php echo $row['lc_date_dish'] ?></span></div>
                                <div>Nombre de personne : <span><?php echo $row['lc_nombre_personnes'] ?></span></div>
                                <div>Horaire : <span><?php echo $row['lc_heure_dish'] ?></span></div>
                                <div>Numero de transaction Paypal : <span><?php echo $row['lc_transactionid'] ?></span></div>
                                <div class="price_history font_open_sansbold"><?php echo $row['lc_total'] ?> €</div>
                                <!-- <div class="btn btn-danger button_commande_account">Repasser la commande</div> -->
                              </div>
                            
                              <div class="col-lg-6 details_commande">
                              
                                <div class="article_title_account"><span><?php echo $count ?></span> articles</div>
                                <ul class="article_details_account">
                                  <?php
	                                  foreach ($produit[$key] as $key => $row) {
	                              ?>
                                  <li><?php echo $row['lp_nom'] ?> (x<?php echo $row['lcl_quantite'] ?>)</li>
                                  	<?php } ?>
                                </ul>

                              </div>
                            </div>
                            <?php }
                            	} ?>

                        </div>
                        <!-- Fin onglet Historique -->

                        <!-- Début onglet Favoris -->
                        <div role="tabpanel" class="tab-pane" id="fav">
                            <h3 class="ss_title_account col-lg-12 text-center no_pad no_marg">Favourites</h3>
                            <?php
                            //var_dump($favoris);
                            if(empty($favoris))
                            {
	                            echo '<div class="no_fav text-center">You do not have any favourite restaurants yet !</div>';
                            }
                            else
                            {
                            ?>
                                                        <!--DEBUT BLOC FAVOURITE-->
                             <?php
                            foreach ($favoris as $key => $row) {
                            ?>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 favourite_content no_pad">
                                <div class="col-lg-3 col-md-3 col-sm-4 col-xs-4 no_pad  resp_img">
                                  <div class="dish_img">
                                    <img src="<?php echo $row['lr_image_1']; ?>" alt="favorite02" width="180px" height="155px"/>
                                  </div>
                                </div>
                                <div class="col-lg-9 col-md-9 col-sm-7 col-xs-8 no_pad ">
                                  <div class="col-lg-10 col-md-10 col-sm-10 col-xs-8 no_pad ">
                                   <h2 class="title_restaurant_result pull-left"><?php echo $row['lr_nom']?></h2>
                                   <span class="geoloc_restaurant_result pull-left">
                                    <?php echo $row['lr_adresse']?>
                                    </span>
                                  </div>
                                  <div class="col-lg-2 col-md-2 col-sm-2 col-xs-4 note_result">
                                    <p class="text-center"></p>
                                  </div>
                                  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 info_result no_display no_pad ">
                                    <p>From :  <span>13.00 €</span></p>
                                  </div>
                                  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 info_result no_pad ">
                                    <p>Type of cuisine :  <span>Italian</span></p>
                                  </div>
                                </div>
                                <a href="index.php?module=account&action=delete_favoris&delete=1&id_resto=<?php echo $row['lr_id']; ?>" class="favourite_supp"><span class="close_favourite fa fa-times"></span></a>
                                <a href="index.php?module=menu&action=menu&id=<?php echo $row['lr_id'] ?>" onClick="ga('send', 'event', 'button', 'menu01','page_resultat', 'clic');">
                                  <div class="col-lg-2 col-md-2 col-sm-2 menu_result text-center">Menu</div>
                                </a>
                            </div>
                            <!--DEBUT BLOC FAVOURITE-->
                                                      <?php }
                                                      			} ?>
                            <!--DEBUT BLOC FAVOURITE-->
                        </div>
                        <!-- Fin onglet Favoris-->
                        
                        <!-- Debut onglet Subscription -->
                        <div role="tabpanel" class="tab-pane" id="subs">
                            <h3 class="ss_title_account col-lg-12 text-center no_pad no_marg">Subscriptions</h3>
                            
                            <form class="form_subscription" method='post'>
                              <div class="subscription_bloc">
                                <label class="subscription_lab">LunchR Newsletter</label>
                                <p>A selection of restaurants and special offers in my area.</p>
                                
                                <input name="newsletter" type="radio" <?php if(!empty($abo)){if($abo[0]['la_newsletter'] == 1) { echo "checked=checked"; }} ?> value="1" required> Yes <br/>
                                <input name="newsletter" type="radio" <?php if(!empty($abo)){if($abo[0]['la_newsletter'] == 0) { echo "checked=checked"; }} ?> value="0" required> No
                              </div>
                              <br/>
                              <div class="subscription_bloc">
                                <label class="subscription_lab">What's new on LunchR</label>
                                <p>Customized special offers, news, satisfaction enquiry...</p>
                             <input name="news" type="radio" <?php if(!empty($abo)){if($abo[0]['la_news'] == 1) { echo "checked=checked"; }} ?> value="1" required> Yes <br/>
                                <input name="news" type="radio" <?php if(!empty($abo)){if($abo[0]['la_news'] == 0) { echo "checked=checked"; }} ?> value="0" required> No
                              </div>
                              <br/>

                              <div class="subscription_bloc">
                                <label class="subscription_lab">Communications by text message from LunchR</label>
                                <p>Restaurants pop-up alerts, customized special offers… Your phone number will not be given to any third party.</p>
                              <input name="text_message" type="radio" <?php if(!empty($abo)){if($abo[0]['la_text_message'] == 1) { echo "checked=checked"; }} ?> value="1" required> Yes <br/>
                                <input name="text_message" type="radio" <?php if(!empty($abo)){if($abo[0]['la_text_message'] == 0) { echo "checked=checked"; }} ?> value="0" required> No
                              </div>
                              <br/>

                              <p>FYI : subscriptions do not concern e-mails sent regarding your bookings or your account updates.</p>
                              <input class="btn btn-danger" type="submit" value="Save" />
                            </form>
                            <br/>
                        </div>
                        <!-- Fin onglet Subscription -->

                    </div>
                </div>
            </div>      
        </div>
    </section>
<?php include_once('../app/view/include/footer.inc.php'); ?>

