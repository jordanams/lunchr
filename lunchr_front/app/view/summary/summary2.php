<?php include_once('../app/view/include/header.inc.php'); ?>
 <section class="section account_content">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 clearfix no_pad no_marg summary_content">
                	<div class="col-lg-2 col-md-4 col-sm-5 col-xs-12 no_pad ">
                        <div class="cart_summary_content pull_fixed">
                            <div class="info_restau_summary text-center">
                                <h3>The Leemon Tree</h3>
                                <p>113 rue montmatre 75002 Pairs</p>
                            </div>                    		
                            <div class="title_cart_summary pull_relative text-center">
                    			<h2>YOUR CART</h2>
                    			<div class="cart_summary pull_absolute fa fa-shopping-cart"></div>
                                <p><span>10 </span> articles</p>
                		    </div>
                            <div class="articles_summary_content">
                                <div class="clearfix article_summary_bloc">
                                    <div class="pull_left article_summary">Coca Zero</div>
                                    <div class="pull_right price_summary">4,00€</div>
                                </div>
                                <div class="clearfix article_summary_bloc">
                                    <div class="pull_left article_summary">
                                        <div>Entrecôte</div>
                                        <div class="options_summary">Cuisson : <span>Saignante</span></div>
                                        <div class="options_summary">Sauce : <span>Bernaise</span></div>
                                    </div>
                                    <div class="pull_right price_summary">14,00€</div>
                                </div>
                                <div class="clearfix article_summary_bloc">
                                    <div class="pull_left article_summary">Burger Frites</div>
                                    <div class="pull_right price_summary">15,00€</div>
                                </div>
                                <div class="clearfix article_summary_bloc">
                                    <div class="pull_left article_summary">Fondant au chocolat  </div>
                                    <div class="pull_right price_summary">7,00€</div>
                                </div>
                            </div>
                            <div class="clearfix total_summary_bloc">
                                <div class="pull_left article_summary">Total</div>
                                <div class="pull_right price_summary">40,00€</div>
                            </div>
                            <p class="text-center lunch_yum">Your order will net you 15 Lunch Yum !</p>
                        </div>
                	</div>
                	<div class="pull_right col-lg-10 col-md-8 col-sm-7 col-xs-12 recap_summary_content">
                        <div class="row">
                            <h1 class="col-lg-8 col-lg-offset-2 text-center">Summary</h1>
                            <p class="col-lg-8 col-lg-offset-2 text-center">Finalize your booking at the restaurant <span class='name_restaurant_summary'>The Lemon Tree</span></p>
                            <div class="col-lg-6 details_summary_order text-center">
                                <div class="text-center">For Wednesday</div>
                                <div> - 4 Février</div>
                                <div> - 12:30 p.m</div>
                                <div> - 3 people</div>
                            </div>
                            <div class="col-lg-6 details_summary_order">
                                <div class="text-center">Location</div>
                                <div class="text-center">113 rue Montmartre , 75002 Paris</div>
                            </div>
                        </div>
                        <div class="text-center"><button class="btn btn-danger print_button">Change my booking</button></div>
                        <div class="col-lg-10 col-lg-offset-1 comments_summary_content">
                            <p>Do you have any comments ? ( anything about your dish , the restaurant .. )</p>
                            <textarea class="col-lg-12"></textarea>
                        </div>
                        <div class="col-lg-12 finalize_booking_summary text-center">
                            <p>To finalize your booking, check your information below. </p>
                            <form class="form_summary form-horizontal col-sm-10" role="form" method="post">
                            <div class="own_content_register col-lg-10 col-lg-offset-1">
                                <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-4 control-label">Name</label>
                                    <div class="col-sm-8">
                                        <input name="nom_user" type="text" class="form-control" placeholder="First name" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-4 control-label">Email</label>
                                    <div class="col-sm-8">
                                        <input name="email_user" type="email" class="form-control" id="inputEmail3" placeholder="Email" required>
                                    </div>
                                </div>
                                 <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-4 control-label">Phone</label>
                                    <div class="col-sm-8">
                                        <input name="phone_user" type="tel" class="form-control" id="inputEmail3" placeholder="Phone" required>
                                    </div>
                                </div>
                            </div>
                            <button class="btn btn-danger">Confirm your table</button>
                        </form>
                        </div>
                    </div>
                </div>
            </div>      
        </div>
    </section>
<?php include_once('../app/view/include/footer.inc.php'); ?>

