$(function() {

    $('#side-menu').metisMenu();

});

//Loads the correct sidebar on window load,
//collapses the sidebar on window resize.
// Sets the min-height of #page-wrapper to window size
$(function() {
    $(window).bind("load resize", function() {
        topOffset = 50;
        width = (this.window.innerWidth > 0) ? this.window.innerWidth : this.screen.width;
        if (width < 768) {
            $('div.navbar-collapse').addClass('collapse')
            topOffset = 100; // 2-row-menu
        } else {
            $('div.navbar-collapse').removeClass('collapse')
        }

        height = (this.window.innerHeight > 0) ? this.window.innerHeight : this.screen.height;
        height = height - topOffset;
        if (height < 1) height = 1;
        if (height > topOffset) {
            $("#page-wrapper").css("min-height", (height) + "px");
        }
    })
})


/***************  Fonction supprimer carte / menu / produit / restaurant /// 
                  Modifier et supprimer compte ///
                  Terminer commande / Annuler commande ///
*************************************************************************/

/*Fonction supprimer carte*/

function confirm_delete_carte() {
  return confirm('Etes-vous sûr de vouloir supprimer cette carte ? Cela effacera aussi tout les menus de cette carte');
}

/*Fonction supprimer menu*/

function confirm_delete_menu() {
  return confirm('Etes-vous sûr de vouloir supprimer ce menu ? Cela effacera aussi tout les produits de ce menu');
}

/*Fonction supprimer produit*/

function confirm_delete_produit() {
  return confirm('Etes-vous sûr de vouloir supprimer ce produit ?');
}

/*Fonction supprimer restaurant*/

function confirm_delete_resto() {
  return confirm('Etes-vous sûr de vouloir supprimer ce restaurant ?');
}

/*Fonction modifier compte*/

function confirm_modifier_compte() {
  var champA = document.getElementById("new_mdp_user").value;
  var champB = document.getElementById("new_try_mdp_user").value;
  if (champA == champB) {
    return confirm('Etes-vous sûr de vouloir modifier vos informations ?');
  }
  else {
    return false;
  }
}

/*Fonction supprimer compte*/

function confirm_supprimer_compte() {
  return confirm('Etes-vous sûr de vouloir supprimer votre compte ? Cela supprimera aussi votre/vos restaurant(s)');
}

/*Fonction Terminer commande*/

function confirm_termine_commande() {
  return confirm('Etes-vous sûr de vouloir terminer cette commande ?');
}

/*Fonction Annuler commande*/

function confirm_annuler_commande() {
  return confirm('Etes-vous sûr de vouloir annuler cette commande ? Essayez de contacter le client via son numéro de téléphone, sinon cliquez sur "OK" pour valider l\'annulation');
}

/***************  Fonction agrandir images  ***************/

    $(document).ready(function(){
       $('img').on('click',function(){
            var src = $(this).attr('src');
            var img = '<img src="' + src + '" class="img-responsive"/>';
            $('#myModal').modal();
            $('#myModal').on('shown.bs.modal', function(){
                $('#myModal .modal-body').html(img);
            });
            $('#myModal').on('hidden.bs.modal', function(){
                $('#myModal .modal-body').html('');
            });
       });  
    })


/***************  Google Maps Api  ***************/
function initialisation(){
        var centreCarte = new google.maps.LatLng(47.389982, 0.688877);
        var optionsCarte = {
            zoom: 8,
            center: centreCarte
        }
        var maCarte = new google.maps.Map(document.getElementById("EmplacementDeMaCarte"), optionsCarte);
    }
google.maps.event.addDomListener(window, 'load', initialisation)

function codeAddress() {
  var address = document.getElementById('address').value;
  geocoder.geocode( { 'address': address}, function(results, status) {
    if (status == google.maps.GeocoderStatus.OK) {
      map.setCenter(results[0].geometry.location);
      var marker = new google.maps.Marker({
          map: map,
          position: results[0].geometry.location
      });
    } else {
      alert('Geocode was not successful for the following reason: ' + status);
    }
  });
}