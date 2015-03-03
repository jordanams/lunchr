$(document).ready(function() {
 $('.top-left').notify({
 message: { text: 'Your account has been updated !' }
  }).show(); // for the ones that aren't closable and don't fade out there is a .hide() function.
  
 $('.mail_exist').notify({
 message: { text: 'Choose another mail ! The mail is already exist !' }
  }).show(); // for the ones that aren't closable and don't fade out there is a .hide() function.

  
 $('.favorite').notify({
 message: { text: 'The restaurant has been add to your favorite !' }
  }).show(); // for the ones that aren't closable and don't fade out there is a .hide() function.
  
   $('.favorite_delete').notify({
 message: { text: 'The restaurant has been delete from your favorite !' }
  }).show(); // for the ones that aren't closable and don't fade out there is a .hide() function.
  
  
  
	$('.geoloc_bloc').hide();
	$('.search_filter_content').hide();
	var windowidth = $(window).width();
	if(windowidth < 767){
 		$('.header').removeClass('header_fixed');
	}
	/*DEBUT ACCOUNT*/
	$('.article_details_account').each(function(index){
		$(this).find('li:gt(4)').hide(200);
	}); 

	$('.modal').click(function() {
		$('body').addClass('overflow_scroll');
	});
	
	$('.see_all_account').click(function() {
		
		var Accountext = $(this).text();

		if (Accountext === "Voir tout"){ 
			$(this).parent('div').find('li:gt(4)').slideToggle(200);
			$(this).text('Fermer');
		}

		else{
			$(this).text("Voir tout");
			$(this).parent('div').find('li:gt(4)').slideToggle(200);
		}	
	});
	$('.close_favourite').click(function(){
		confirm('Would you really want to delete it ?');
	})
	/*FIN ACCOUNT*/
	$('.hdiw_bloc').fadeTo(0, 0);

	$(window).scroll(function(){
		var xt = 0;
		var posHDIW= $('.suggestions').offset().top;
	 	if ($(window).scrollTop() > posHDIW) {
		    $('.hdiw_bloc').each(function(xt) { 
				xt++;
		        $(this).delay(xt*400).fadeTo(1000, 1);
		    });
    	}
	});
	/*DEBUT SLIDE TOOGLE LOGIN */
	$('.slide_toogle_login').hide();
	$('.button_log').click(function(){
		$('.slide_toogle_login').slideToggle(300);
	});
	var div_cliquable = $('.slide_toogle_login');
	var div_cliquable02 = $('.button_log');
	$(document.body).click(function(e) {
	// Si ce n'est pas #ma_div ni un de ses enfants
		if( !$(e.target).is(div_cliquable02) && !$.contains(div_cliquable[0],e.target) ) {
    	div_cliquable.fadeOut(); // masque .slide_toogle_login
    	}
	});

	/*FIN SLIDE TOOGLE LOGIN*/

	//$('[data-toggle="popover"]').popover();
	$('.popover-markup>.trigger').popover({
    html: true,
    title: function () {
        return $(this).parent().find('.head').html();
    },
    content: function () {
        return $(this).parent().find('.content').html();
    }
	});


	$('[data-toggle="popover"]').popover();

	$('body').on('click', function (e) {
    $('[data-toggle="popover"]').each(function () {
        //the 'is' for buttons that trigger popups
        //the 'has' for icons within a button that triggers a popup
        if (!$(this).is(e.target) && $(this).has(e.target).length === 0 && $('.popover').has(e.target).length === 0) {
            $(this).popover('hide');
        }
    });
});
	/* FIN POPOVER*/
	/*ANIMATIN SEARCH FILTER*/
	$('.num_result').click(function(){
		$('.search_filter_content').slideToggle();
  	});
	/*MODAL*/
	//$('#myModal').modal("show");
	/*RESTAURANTS IMAGES*/
	$('.dezoom').click(function(){
		var src = $(this).attr('src');
		$('.zoom').prop('src', src);
	});
	/*DEBUT COLOR ONGLET*/
	$('.tab_style').click(function(){
		$('.tab_style').removeClass("active_tab")
		$(this).addClass("active_tab");
	});

	$('.display_clic_yes').click(function(){
		$('.display_clic_none').hide();
	})
	/*FIN COLOR ONGLET*/

	/* DEBUT RESIZE SEARCH FILTER */
	/* INFERIEUR 525PX */
	$( window ).resize(function() {
		var windowidth = $(window).width();
		if (windowidth < 525) {
			$('.search_filter_content').fadeIn(500);	
		}
		else{
			$('.search_filter_content').fadeOut(0);
		}
	});
	/* SUPERIEUR 767PX */
	$(window).resize(function() {
		var windowidth = $(window).width();
		if (windowidth > 767) {
			$('.header').addClass('header_fixed');

			var $top = $('.div_search').offset().top;
			$(window).scroll(function(){
		 	if ($(window).scrollTop()>$top)
		 		{
					$('.div_search').addClass('fixed_search');
				}
		    	else
		     	{
		     		$('.div_search').removeClass('fixed_search');
		    	}
			});
		}
		else{
			$('.header').removeClass('header_fixed');
		}
	});	
	/* FIN RESIZE SEARCH FILTER */



	/*DEBUT PANIER */

	/* AJOUT PANIER*/
	$('.add_fiche').click(function(){
		event.preventDefault();
		var pricedish = $(this).parent('div').children('.price_fiche').text();
		var id_product = $(this).parent('div').children("#id_product").val();
		
		if(isItemInCart($(this).parent('div').children('h2').text(),pricedish) == false){
			var imgsrc = $(this).parent('div').parent('div').children('div').children('.bloc_visuel02').children('img').attr("src");
			var textdish = $(this).parent('div').children('h2').text();
			$('.empty_cart').fadeOut();
			$(".panier").append('<div class="content_panier col-lg-12 col-md-12 col-sm-12 no_pad">\
				<div class="dish_content_panier col-lg-12 col-md-12 col-sm-12 no_pad">\
					<div class="bloc_visuel col-lg-2 col-md-2 col-sm-2 no_pad">\
						<img src="'+imgsrc+'" class="pull-left" style="width:50px;">\
					</div>\
						<div class="bloc_desc_panier col-lg-10 col-md-10 col-sm-10 no_pad">\
							<span class="name_product col-lg-9 col-md-9 col-sm-9 no_pad">'+textdish+'</span>\
							<span class="price_product col-lg-3 col-md-3 col-sm-3 no_pad">'+pricedish+'</span>\
														<input class="col-lg-2 col-md-2 col-sm-2" value="0" name="product['+id_product+']">\
						<div id="close" class="close_icon fa fa-times pull-right no_pad"></div>\
					</div>\
				</div>\
				</div>');
			isItemInCart($(this).parent('div').children('h2').text(),pricedish);
		}
		else{

		}
	});
	






	function isItemInCart(name, price) {
		var item = $('.panier').children();
		//var elem = $(this);
		//var contentFiche = $('.content_fiche').find('.price_fiche').text();
		
		for (var i=0; i<item.length; i++){
    		if ($(item[i]).find('.name_product').text() == name) {
				var nombreProduit = parseInt($(item[i]).find('.bloc_desc_panier input').val())+1;
				var prixProduit = $(item[i]).find('.price_product').text();
				var prixprix = parseInt(price);
				$(item[i]).find('.bloc_desc_panier input').attr('value', nombreProduit);
				$(item[i]).find('.price_product').html(prixprix * nombreProduit + ".00€");
				return true;
			}
		}
		return false;
	}
	/*REMOVE PRODUCT*/
	$(document).on('click', '.close_icon', function() {
		$(this).parent('div').parent('div').parent('.content_panier').remove();
	});
	/*FIN PANIER*/
/* Newsletter*/

$('.box_newsletter').hide();

setTimeout(function() 
  {
    $('.box_newsletter').show("200");
  }, 15000);

$('.close_newsletter').click(function() {
	$('.box_newsletter').hide("200");
})
/* Fin newsletter*/

/*LOG IN */


/* FIN LOG IN */


$(document).ready(function(){
	$('#username2').focus(); // Focus to the username field on body loads
	$('.connexion_login2').click(function(){ // Create `click` event function for login
		var username = $('#login2'); // Get the username field
		var password = $('#password2'); // Get the password field
		var login_result = $('.login_result2'); // Get the login result div
		login_result.html('loading..'); // Set the pre-loader can be an animation
		if(username.val() == ''){ // Check the username values is empty or not
			username.focus(); // focus to the filed
			login_result.html('<span class="error">Please enter your mail</span>');
			return false;
		}
		if(password.val() == ''){ // Check the password values is empty or not
			password.focus();
			login_result.html('<span class="error">Please enter your password</span>');
			return false;
		}
		if(username.val() != '' && password.val() != ''){ // Check the username and password values is not empty and make the ajax request
			var UrlToPass = 'action=login&login='+username.val()+'&password='+password.val();
			$.ajax({ // Send the credential values to another checker.php using Ajax in POST menthod
			type : 'POST',
			data : UrlToPass,
			url  : '../app/controler/accueil/ajaxControler.php',
			success: function(data){ // Get the result and asign to each cases
				
if(data == 0){
					login_result.html('<span class="error">Mail or Password Incorrect!</span>');
				}
				else if(data == 1){
					window.location = 'index.php?module=accueil&action=index&connect=success';
				}
				else{
					alert('Problem with sql query');
				}

			console.log(data);
			},
				error: function (xhr, ajaxOptions, thrownError) {
           console.log(xhr.status);
           console.log(xhr.responseText);
           console.log(thrownError);
       }
			});
		}
	});
});




function maPosition(position) {
  var infopos = "Position déterminée :\n";
  infopos += "Latitude : "+position.coords.latitude +"\n";
  infopos += "Longitude: "+position.coords.longitude+"\n";
  infopos += "Altitude : "+position.coords.altitude +"\n";
  //document.getElementById("infoposition").innerHTML = infopos;
  console.log(position.coords.latitude);
  console.log(position.coords.longitude);
  var lat = position.coords.latitude;
  var lng = position.coords.longitude;
  					$(document).ready(function() {
                    $.ajax({
                            url:'../app/controler/accueil/ajaxControllerGeoloc.php?lat='+position.coords.latitude+'&lng='+position.coords.longitude+'',
                            method:'POST',
                            data:{},
                            success: function(data) {
                              console.log("ok");
                              if(position.coords.latitude != "")
                              {
	                              window.location = 'index.php?module=resultat&action=geolocalisation';
	                          }
                                                    },
                            error: function(jqXHR, textStatus, errorThrown) {
                                console.log("erreur execution requete ajax!");
                                
                            }
                        });
                        });

}

// Fonction de callback en cas d’erreur
function erreurPosition(error) {
    var info = "Erreur lors de la géolocalisation : ";
    switch(error.code) {
    case error.TIMEOUT:
        info += "Timeout !";
    break;
    case error.PERMISSION_DENIED:
    info += "Vous n’avez pas donné la permission";
    break;
    case error.POSITION_UNAVAILABLE:
        info += "La position n’a pu être déterminée";
    break;
    case error.UNKNOWN_ERROR:
    info += "Erreur inconnue";
    break;
    }
    document.getElementById("infoposition").innerHTML = info;
}

$('#geolocalisation').click(function(){
    $("body").css({"overflow": "hidden !important"});
if(navigator.geolocation) 
    navigator.geolocation.getCurrentPosition(maPosition, erreurPosition, {maximumAge:600000,enableHighAccuracy:true});
});
		/*var $top = $('.div_search').offset().top;
		$(window).scroll(function(){
		 	if ($(window).scrollTop()>$top)
		 		{
					$('.div_search').addClass('fixed_search');
				}
	    	else
		     	{
		     		$('.div_search').removeClass('fixed_search');
		    	}
		});*/
			/* DEBUT ANIMATION HOW DOES IT WORK */
	$("#hdiw_button").click(function() {
	    $('html, body').animate({
	         scrollTop:$(".how_work_clic_test").offset().top -40
	    }, 1000);
	    return false;
	});
	/* FIN ANIMATION HOW DOES IT WORK */

});

 













