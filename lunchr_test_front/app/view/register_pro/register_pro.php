<?php include_once('../app/view/include/header.inc.php'); ?>

         <script type='text/javascript'> 
        $(function() {
		var addresspickerMap = $( "#addresspicker" ).addresspicker({
			regionBias: "fr",	
		  		elements: {

			  		lat:      "#lat",
		    		lng:      "#lng",
		    		country:  '#country', 
		    		postal_code: '#postal_code',
		    		locality: '#locality'
		  		}
		});
		});

	</script>
<!-- Affichage et selection de l'adresse --> 
<section class="container login">
    <div class="row">
        <div class="col-lg-10 col-lg-offset-1">
            <div class="fb_content_register col-lg-10 col-lg-offset-1">
                <div class="barre col-lg-4"></div>
                <h1 class='col-lg-4 text-center main_color font_open_sansbold'>Register</h1>
                <div class="barre col-lg-4"></div>
            </div>
            <div class="col-lg-12 col-sm-12 col-xs-12 text-center user_log font_open_sansbold">You</div>
            <form class="form-horizontal col-sm-10" role="form" method="post">
	            <div class="own_content_register col-lg-10 col-lg-offset-1">
	                <div class="form-group">
	                    <label for="inputEmail3" class="col-sm-4 control-label">Civility</label>
	                    <div class="col-sm-8">
	                        <label class="radio-inline" for="radios-0">
	                            <input type="radio" name="gender_user" id="radios-0" value="Female" checked="checked">Female
	                        </label> 
	                        <label class="radio-inline" for="radios-1">
	                            <input type="radio" name="gender_user" id="radios-1" value="Male"> Male
	                        </label> 
	                    </div>
	                </div>
	                <div class="form-group">
	                    <label for="inputEmail3" class="col-sm-4 control-label">First name</label>
	                    <div class="col-sm-8">
	                        <input name="nom_user" type="text" class="form-control" placeholder="First name" required>
	                    </div>
	                </div>
	                <div class="form-group">
	                    <label for="inputEmail3" class="col-sm-4 control-label">Last Name</label>
	                    <div class="col-sm-8">
	                        <input name="prenom_user" type="text" class="form-control" placeholder="Last Name" required>
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
	                <div class="form-group">
	                    <label for="inputPassword3" class="col-sm-4 control-label">Password</label>
	                    <div class="col-sm-8">
	                    <input name="mdp_user" type="password" class="form-control" id="inputPassword3" placeholder="Password" required>
	                    </div>
	                </div>
	                <div class="form-group">
	                    <label for="inputPassword3" class="col-sm-4 control-label">Confirm Password</label>
	                    <div class="col-sm-8">
	                        <input name="confirm_mdp_user" type="password" class="form-control" id="inputPassword3"
	                        placeholder="Password" required>
	                    </div>
	                </div>
	                <div class="form-group">
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
				</div>
	            <div class="col-lg-12 col-sm-12 col-xs-12 text-center user_log font_open_sansbold">Your Restaurant</div>
	            	<div class="own_content_register col-lg-10 col-lg-offset-1">     
	                    <div class="form-group">
	                        <label for="inputEmail3" class="col-sm-4 control-label">Restaurant Name</label>
	                        <div class="col-sm-8">
	                            <input name="nom_resto" type="text" class="form-control" placeholder="Restaurant Name" required>
	                        </div>
	                    </div>
	                    <div class="form-group">
	                        <label for="inputEmail3" class="col-sm-4 control-label">Phone</label>
	                        <div class="col-sm-8">
	                            <input name="tel_resto" type="tel" class="form-control" placeholder="Phone" required>
	                        </div>
	                    </div>
	                    <div class="form-group">
	                        <label for="inputEmail3" class="col-sm-4 control-label">Adress</label>
	                        <div class="col-sm-8">
	                            <input name="adresse_resto" id="addresspicker" type="text" class="form-control" placeholder="Adress" required>
	                        </div>
	                    </div>
	                    <div class="form-group">
	                        <label for="inputPassword3" class="col-sm-4 control-label">Post Code</label>
	                        <div class="col-sm-8">
		                        <input id="postal_code" name="postal_code" type="text" class="form-control" placeholder="Post Code" required>
		                        <input id="lat" name="latitude" type="hidden" class="form-control" placeholder="Post Code">
		                        <input id="lng" name="longitude" type="hidden" class="form-control" placeholder="Post Code">
		                        <input id="country" name="pays" type="hidden" class="form-control" placeholder="Post Code">
		                        <input id="locality" name="ville" type="hidden" class="form-control" placeholder="Post Code">
	                        </div>
	                    </div>
	                    <div class="form-group">
	                        <label for="inputPassword3" class="col-sm-4 control-label">Your Website</label>
	                        <div class="col-sm-8">
		                        <input name="website_resto" type="url" class="form-control" id="inputPassword3"
		                        placeholder="Your Website" required>
	                        </div>
	                    </div>
	                    <div class="form-group">
	                        <label for="inputPassword3" class="col-sm-4 control-label">Your Facebook Page</label>
	                        <div class="col-sm-8">
	                        	<input name="facebook_resto" type="url" class="form-control" id="inputPassword3" 
								placeholder="Your Facebook Page" required>
	                        </div>
	                    </div>
	                    <div class="form-group">
							<div class="col-sm-offset-4 col-sm-8">
								<input type="submit" class="btn btn-default" value='Register'/>
							</div>
                    	</div>
                	</div>      
              	</div>             
            </form>
        </div>
    </div>
</section>
<?php include_once('../app/view/include/footer.inc.php'); ?>