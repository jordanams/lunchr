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


/***************  Fonction supprimer restaurant  ***************/

function confirm_delete_resto() {
  return confirm('Etes-vous sûr de vouloir supprimer ce restaurant ?');
}

/*Fonction supprimer users*/

function confirm_delete_users() {
  return confirm('Etes-vous sûr de vouloir cette utilisateur ?');
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



