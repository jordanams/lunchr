<?php 
if(!isset($_GET['module']))
{
	header('location:index.php?module=accueil&action=index');
}
if($_GET['module'] == 'accueil')
{
	include_once('../app/view/include/header_accueil.inc.php');
}
else
{
	include_once('../app/view/include/header.inc.php');
} 
?>
    <section class="section">
        <div class="container-fluid">
            <div class="row">
                <div class="homeslide pull_relative">
                    <div class="col-lg-12  text-center section_catch_phrase">
                        <p class="catch_phrase">
                            <span class="findr">Find a restaurant</span> <br/> 
                            <span class="waitr">Order your dish among many restaurants<br/>Dont wait anymore , your dish is ready !</span>
                        </p>
                    </div>
                    <div class="div_search col-lg-12">
                        <div class="container">
                            <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <label class="sr-only" for="form">Search</label>
								<form class="form-inline col-lg-12 form_recherche text-center" role="form" method="post" action="">
									<input class="search_div form-control col-lg-12" type="text" name="search" 
									placeholder="Search (Restaurant, Town, Adress...)" required>
									<input type="submit" value="Search" 
									class="search_button btn btn-danger font_open_sansbold olor_principal" />
									<button class="fa fa-map-marker" id="geolocalisation"></button>    
                        		</form>
                            </div>
                    </div>
                    <!-- Large modal -->
                    <div class="modal fade bs-example-modal-lg" id="mymodal_register" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content col-lg-12 col-sm-12 col-md-12">
                                <button type="button" class="close close_absolute" data-dismiss="modal" aria-hidden="true">×</button>
                                <div class="col-lg-6 col-sm-6 col-md-6 lightbox_part_left padding_lightbox border_mid text-center">
                                    <h1 class="font_open_sansbold">Are you a Professional ?</h1>
                                    <span class="col-lg-12">You want to register your restaurant <br/>in our platform</span><br/>
                                    <div class="marg_register col-lg-12"><a href="index.php?module=register_pro&action=register_pro" class="button_style register_button font_open_sansbold">Register as a pro</a></div>
                                </div>
                                <div class="col-lg-6 col-sm-6 col-md-6 lightbox_part_right padding_lightbox text-center">
                                    <h1 class="font_open_sansbold">Are you a client ?</h1>
                                    <span class="col-lg-12">You want to register as <br/>a simple client</span><br/>
                                    <div class="marg_register col-lg-12"><a href="index.php?module=login&action=login" class="button_style register_button font_open_sansbold">Register as a client</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Large modal -->
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="barre col-lg-4"></div>
                    <h2 class='col-lg-4 text-center main_color font_open_sansbold'>OUR SUGGESTIONS</h2>
                    <div class="barre col-lg-4"></div>
                </div>
                <div class="col-lg-12 pad20 suggestions">
                 <?php foreach ($suggestion as $key => $row) {
	                  ?>

                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6 col-sxs text-center marg global_hover">
                        <img src="<?php echo $row['lr_image_1']?>" width="" height="" alt="restaurant"/>
                        <a href="index.php?module=menu&action=menu&id=<?php echo $row['lr_id'] ?>" onClick="ga('send', 'event', 'groupe','suggestions', 'clic')" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                        <p class="fond_rouge_hover">
                            <span> 
                                <span class="titre"><?php echo $row['lr_nom'] ?></span><br/>
                                <span class="sous_titre"><?php echo $row['lr_adresse'] ?><br /></span>
                                <span class="glyphicon glyphicon-star"></span>
                                <span class="glyphicon glyphicon-star"></span>
                                <span class="glyphicon glyphicon-star"></span><br/>
                                <span class="line_h_50">More details</span>
                            </span>
                        </p>
                        </a>
                    </div>
               
                
<?php
}
?>
<!--

                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6 col-sxs text-center marg global_hover">
                        <img src="img/suggestion2.jpg" alt="restaurant"/>
                        <a href="index.php?module=menu&action=menu" onClick="ga('send', 'event', 'groupe','suggestions', 'clic')" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                        <p class="fond_rouge_hover">
                            <span> 
                                <span class="titre">Pietro</span><br />
                                <span class="sous_titre">28, rue Jean Mermoz<br/> 75008, Paris <br /></span>
                                <span class="glyphicon glyphicon-star"></span>
                                <span class="glyphicon glyphicon-star"></span>
                                <span class="glyphicon glyphicon-star"></span><br/>
                                <span class="line_h_50">More details</span>
                            </span>
                        </p>
                        </a>
                    </div>

                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6 col-sxs text-center marg global_hover">
                        <img src="img/suggestion3.jpg" alt="restaurant"/>
                        <a href="index.php?module=menu&action=menu" onClick="ga('send', 'event', 'groupe','suggestions', 'clic')" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                        <p class="fond_rouge_hover">
                            <span> 
                                <span class="titre">Auberge de Venise</span><br />
                                <span class="sous_titre">2, rue de la Bastille<br> 75004, Paris <br /></span>
                                <span class="glyphicon glyphicon-star"></span>
                                <span class="glyphicon glyphicon-star"></span>
                                <span class="glyphicon glyphicon-star"></span><br/>
                                <span class="line_h_50">More details</span>
                            </span>
                        </p>
                        </a>
                    </div>

                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6 col-sxs text-center marg global_hover">
                        <img src="img/suggestion4.jpg" alt="restaurant"/>
                        <a href="index.php?module=menu&action=menu" onClick="ga('send', 'event', 'groupe','suggestions', 'clic')" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                            <p class="fond_rouge_hover">
                                <span> 
                                    <span class="titre">La Bouteille d'Or</span><br />
                                    <span class="sous_titre">9, quai Montebello<br> 75005, Paris <br /></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span><br/>
                                    <span class="line_h_50">More details</span>
                                </span>
                            </p>
                        </a>
                    </div>

                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6 col-sxs text-center display-responsiv-none-sxs marg global_hover">
                        <img src="img/suggestion5.jpg" alt="restaurant"/>
                        <a href="index.php?module=menu&action=menu" onClick="ga('send', 'event', 'groupe','suggestions', 'clic')" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                            <p class="fond_rouge_hover">
                                <span> 
                                    <span class="titre">Le Reminet </span><br />
                                    <span class="sous_titre">3, rue des Grands Degrés <br> 75005 Paris, Paris <br /></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span><br/>
                                    <span class="line_h_50">More details</span>
                                </span>
                            </p>
                        </a>
                    </div>

                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6 col-sxs text-center display-responsiv-none-sxs marg global_hover">
                        <img src="img/suggestion6.jpg" alt="restaurant"/>
                        <a href="index.php?module=menu&action=menu" onClick="ga('send', 'event', 'groupe','suggestions', 'clic')" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                            <p class="fond_rouge_hover">
                                <span> 
                                    <span class="titre">Julie Rivière</span><br />
                                    <span class="sous_titre">112 rue Bellechasse <br> 75010, Paris <br /></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span><br/>
                                    <span class="line_h_50">More details</span>
                                </span>
                            </p>
                        </a>
                    </div>

                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6 col-sxs text-center display-responsiv-none-sxs marg global_hover">
                        <img src="img/suggestion7.jpg" alt="restaurant"/>
                        <a href="index.php?module=menu&action=menu" onClick="ga('send', 'event', 'groupe','suggestions', 'clic')" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                            <p class="fond_rouge_hover">
                                <span> 
                                    <span class="titre">La Nouvelle Seine</span><br />
                                    <span class="sous_titre">3 quai de Montebello<br> 75005, Paris <br /></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span><br/>
                                    <span class="line_h_50">More details</span>
                                </span>
                            </p>
                        </a>
                    </div>

                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6 col-sxs text-center display-responsiv-none-sxs marg global_hover">
                        <img src="img/suggestion1.jpg" alt="restaurant"/>
                        <a href="index.php?module=menu&action=menu" onClick="ga('send', 'event', 'groupe','suggestions', 'clic')" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                        <p class="fond_rouge_hover">
                                <span> 
                                    <span class="titre">L'ETOILE </span><br />
                                    <span class="sous_titre">116 rue Montmartre <br> 75002, Paris <br /></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span><br/>
                                    <span class="line_h_50">More details</span>
                                </span>
                            </p>
                        </a>
                    </div>
-->
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="barre col-lg-4"></div>
                    <h2 class='col-lg-4 text-center main_color font_open_sansbold'>HOW DOES IT WORK</h2>
                    <div class="barre col-lg-4"></div>
                </div>

                <a class="how_work_clic_test marg" href="construction.html"
                onClick=" ga('send', 'event', 'groupe','hdiw','clic');">
                    <div class="col-lg-12 pad20">
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 col-sxs text-center">
                            <img alt="" src="img/icone1_find.png"/>
                            <p class="title_how_work"> Find your<br> restaurant</p>
                            <p class="ss_title_how_work">Choose around more <br>than 150000 restaurants</p>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 col-sxs text-center">
                            <img alt="" src="img/icone2_choose.png"/>
                            <p class="title_how_work">Choose <br>your dish</p>
                             <p class="ss_title_how_work">Think about what <br>you want eat</p>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 col-sxs text-center">
                            <img alt="" src="img/icone3_pay.png"/>
                            <p class="title_how_work">Pick the best  <br/>way to pay</p>
                             <p class="ss_title_how_work">Pay online or leave a deposit<br> for restaurant vouchers</p>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 col-sxs text-center">
                            <img alt="" src="img/icone4_ready.png"/>
                            <p class="title_how_work">Enjoy<br/>your meal</p>
                             <p class="ss_title_how_work">Go to your restaurant<br>your dish is ready </p>   
                      </div>
                    </div>
                </a>
            </div>
        </div>
    </section>
    <div class="modal_newsletter col-lg-12">
        <div class="modal fade bs-example-modal-sm newsletter" id="myModal" tabindex="1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true" data-backdrop="false">
          <div class="modal-dialog modal-sm">
            <div class="modal-content">
              <div class="modal-header modal_header_newsletter">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title" id="myModalLabel">Subscribe to our mailing list</h4>
              </div>
              <div class="modal-body text-center">
                <span class="newsletter_information">Be informed of new offers and new available restaurants</span>
                <!-- Begin MailChimp Signup Form -->
                <link href="//cdn-images.mailchimp.com/embedcode/slim-081711.css" rel="stylesheet" type="text/css">
                <style type="text/css">
                    #mc_embed_signup{background:#fff; clear:left; font:14px Helvetica,Arial,sans-serif; }
                    /* Add your own MailChimp form style overrides in your site stylesheet or in this style block.
                       We recommend moving this block and the preceding CSS link to the HEAD of your HTML file. */
                </style>
                    <div id="mc_embed_signup">
                        <form action="//ovh.us4.list-manage.com/subscribe/post?u=5b5bd38badb7bdb8e93634afb&amp;id=9dc0dfc0d4" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
                            <div id="mc_embed_signup_scroll">
                            <input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="email address" required>
                            <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                            <div style="position: absolute; left: -5000px;"><input type="text" name="b_5b5bd38badb7bdb8e93634afb_9dc0dfc0d4" tabindex="-1" value=""></div>
                            <div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
                            </div>
                        </form>
                    </div>
                <!--End mc_embed_signup-->
              </div>
            </div>
          </div>
        </div>
    </div>

    <div class="box_newsletter modal-content">
        <div class="head_newsletter">
            <button type="button" class="close close_newsletter"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
            <h4 class="modal-title" id="myModalLabel">Subscribe to our mailing list</h4>
        </div>

        <div class="body_newsletter text-center">
            <span class="newsletter_information">Be informed of new offers and new available restaurants</span>
            <!-- Begin MailChimp Signup Form -->
            <link href="//cdn-images.mailchimp.com/embedcode/slim-081711.css" rel="stylesheet" type="text/css">
            <style type="text/css">
                #mc_embed_signup{background:#fff; clear:both; font:14px Helvetica,Arial,sans-serif;}
                /* Add your own MailChimp form style overrides in your site stylesheet or in this style block.
                   We recommend moving this block and the preceding CSS link to the HEAD of your HTML file. */
            </style>
            <div id="mc_embed_signup">
                <form action="//ovh.us4.list-manage.com/subscribe/post?u=5b5bd38badb7bdb8e93634afb&amp;id=9dc0dfc0d4" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
                    <div id="mc_embed_signup_scroll">
                    <input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" style='width: 200px; margin: auto; margin-bottom: 10px;' placeholder="email address" required>
                    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                    <div style="position: absolute; left: -5000px;"><input type="text" name="b_5b5bd38badb7bdb8e93634afb_9dc0dfc0d4" tabindex="-1" value=""></div>
                    <div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" style="width: 100px; margin: auto;" class="button"></div>
                    </div>
                </form>
            </div>
            <!--End mc_embed_signup-->
        </div>
    </div>

<?php include_once('../app/view/include/footer.inc.php'); ?>

