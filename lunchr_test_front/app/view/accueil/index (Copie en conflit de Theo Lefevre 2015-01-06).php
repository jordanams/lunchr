<!doctype html>
<html lang="en">
    <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="text/javascript" src="http://www.google-analytics.com/ga.js"></script>
    <meta charset="utf-8"/>
    <title>LunchR</title>
    <meta name="google-site-verification" content="U6PbqhHPt54YXW59rMl_QS5QQV9np_PP6yb2Q6VN1PA" />
    <link href="font-awesome-4.2.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>
    <link rel="stylesheet" type="text/css" href="css/style.css"/>
    </head>
    <body>
    <section class="section">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 resp_logo no_pad">
                    <a href="index.php?module=accueil&action=index" onClick="ga('send', 'event', 'button', 'logo', 'home', 'clic');"><img  class="logo" src="img/new_logo.png"></a>
                </div>
                <div class="section_how_work col-lg-4 col-md-4 col-sm-4 col-xs-4" style="padding:13px">
                    <div class="text-center button_how_work">
                        <span id="hdiw_button" class="font_open_sansbold" onClick="ga('send', 'event', 'button', 'sign-up', 'log', 'clic');">How does it work</span>
                    </div>
                </div>
                <div class="section_connection col-lg-4 col-md-4 col-sm-4 col-xs-4">
                    <div class="pull-right">
                        <!--<button class="color_principal button_log button_style btn font_open_sansbold" onClick="ga('send', 'event', 'button', 'sign-in', 'log', 'clic');" data-container="body" data-toggle="popover" data-placement="bottom" data-content="<form><input type='text'/></form>" data-original-title="Fill in form"> Log in</button>!-->
                        <div class="popover-markup">
                            <button class="color_principal button_log button_style btn font_open_sansbold trigger">Log in</button> 
                            <div class="head hide">Lorem Ipsum</div>
                            <div class="content hide">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Type something…">
                                </div>
                                <button type="submit" class="btn btn-default btn-block">Submit</button>
                            </div>
                            <div class="footer hide">test</div>
                        </div>
                        <button class="button_register button_style font_open_sansbold" data-toggle="modal" data-target=".bs-example-modal-lg" onClick="ga('send', 'event', 'button', 'sign-up', 'log', 'clic');">Register</button>
                    </div>
                </div>
                  <a alt="mon compte" class="compte_icone_resp" href="#"><span class="fa fa-user"></span></a>   
                <a href="#">
                    <div class="panier_resp">
                        <span class="pull-left price_resp">Cart</span>
                        <i class="pull-right panier_icon_resp fa fa-shopping-cart"></i>
                    </div>
                </a>
            </div>
        </div>
    </section>
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
                        <form class="form-inline col-lg-12 form_recherche text-center" role="form">
                            <div class="container">
                                <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <label class="sr-only" for="form">Search</label>
                                    <input class="search_div form-control col-lg-12" type="text" name="Search" placeholder="Search (Restaurant, Town, Adress...)">
                                </div>
                                <a href="index.php?module=resultat&action=resultat" class="color_principal" onClick="ga('send', 'event', 'search', 'clic');">
                                    <button type="submit" class="btn btn-danger font_open_sansbold">Search</button>
                                </a>
                                <a href="#" class="fa fa-map-marker"></a>     
                            </div>
                        </form>
                    </div>
                    <!-- Large modal -->
                    <div class="modal fade bs-example-modal-lg" id="mymodal_register" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content col-lg-12">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                <div class="col-lg-6 lightbox_part_left padding_lightbox border_mid text-center">
                                    <h1 class="font_open_sansbold">Are you a Professional ?</h1>
                                    <span class="col-lg-12">You want to register your restaurant <br/>in our platform</span>
                                    <button class="button_style register_button font_open_sansbold">Register as a pro</button>
                                </div>
                                <div class="col-lg-6 lightbox_part_right padding_lightbox text-center">
                                    <h1 class="font_open_sansbold">Are you a client ?</h1>
                                    <span class="col-lg-12">You want to register as <br/>a simple client</span>
                                    <button class="button_style register_button font_open_sansbold"><a href="index.php?module=login&action=login">Register as a client</a></button>
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
                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6 col-sxs text-center marg global_hover">
                        <img src="img/suggestion8.jpg" alt="restaurant"/>
                        <a href="index.php?module=resultat&action=resultat" onClick="ga('send', 'event', 'groupe','suggestions', 'clic')" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                        <p class="fond_rouge_hover">
                            <span> 
                                <span class="titre">Comme Chai Toi</span><br/>
                                <span class="sous_titre">13, quai de Montebello<br/> 75005, Paris <br /></span>
                                <span class="glyphicon glyphicon-star"></span>
                                <span class="glyphicon glyphicon-star"></span>
                                <span class="glyphicon glyphicon-star"></span><br/>
                                <span class="line_h_50">More details</span>
                            </span>
                        </p>
                        </a>
                    </div>

                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6 col-sxs text-center marg global_hover">
                        <img src="img/suggestion2.jpg" alt="restaurant"/>
                        <a href="index.php?module=resultat&action=resultat" onClick="ga('send', 'event', 'groupe','suggestions', 'clic')" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
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
                        <a href="index.php?module=resultat&action=resultat" onClick="ga('send', 'event', 'groupe','suggestions', 'clic')" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
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
                        <a href="index.php?module=resultat&action=resultat" onClick="ga('send', 'event', 'groupe','suggestions', 'clic')" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
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
                        <a href="index.php?module=resultat&action=resultat" onClick="ga('send', 'event', 'groupe','suggestions', 'clic')" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
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
                        <a href="index.php?module=resultat&action=resultat" onClick="ga('send', 'event', 'groupe','suggestions', 'clic')" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
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
                        <a href="index.php?module=resultat&action=resultat" onClick="ga('send', 'event', 'groupe','suggestions', 'clic')" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
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
                        <a href="index.php?module=resultat&action=resultat" onClick="ga('send', 'event', 'groupe','suggestions', 'clic')" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
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
<?php include_once('../app/view/include/footer.inc.php'); ?>

