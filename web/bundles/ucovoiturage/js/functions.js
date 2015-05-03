var map;
var panel;
var initialize;
var calculate;
var direction;
var geocoder;

initialize = function(){
  var latLng = new google.maps.LatLng(36.803818, 10.183790); // Correspond au coordonnées de Lille
  var ult = new google.maps.LatLng(36.821410, 10.190062); // Correspond au coordonnées de Lille
  var myOptions = {
    zoom      : 14, // Zoom par défaut
    center    : latLng, // Coordonnées de départ de la carte de type latLng 
    mapTypeId : google.maps.MapTypeId.TERRAIN, // Type de carte, différentes valeurs possible HYBRID, ROADMAP, SATELLITE, TERRAIN
    maxZoom   : 20
	
	
  };
   var image = "{{ asset('bundles/ucovoiturage/images/ult.png') }}";
  map      = new google.maps.Map(document.getElementById('map'), myOptions);
  geocoder      =   new google.maps.Geocoder();   
  panel    = document.getElementById('panel');
  
  var marker = new google.maps.Marker({
    position : latLng,
    map      : map,
	draggable: true ,
    title    : "origine"
 
  });
  
   var marker2 = new google.maps.Marker({
    position : ult,
    map      : map,
	draggable: true ,
	icon: image,
    title    : "destination"
 
  });
  ////////////////////////////////////
geocoder.geocode({'latLng': latLng }, function(results, status) {
                    if (status == google.maps.GeocoderStatus.OK) {
                        if (results[0]) {
                            $('#origin').val(results[0].formatted_address);
                           // $('#latitude').val(marker.getPosition().lat());
                           // $('#longitude').val(marker.getPosition().lng());
							
                            infowindow.setContent(results[0].formatted_address);
                            infowindow.open(map, marker);
                        }
                    }
                });

                               
                google.maps.event.addListener(marker, 'dragend', function() {

                geocoder.geocode({'latLng': marker.getPosition()}, function(results, status) {
                    if (status == google.maps.GeocoderStatus.OK) {
                        if (results[0]) {
                            $('#origin').val(results[0].formatted_address);
                           // $('#latitude').val(marker.getPosition().lat());
                           // $('#longitude').val(marker.getPosition().lng());
                            infowindow.setContent(results[0].formatted_address);
                            infowindow.open(map, marker);
                        }
                    }
                });
            });
            
				
  //////////////MARKER2//////////////////////
  geocoder.geocode({'latLng': latLng }, function(results, status) {
                    if (status == google.maps.GeocoderStatus.OK) {
                        if (results[0]) {
							
                            $('#destination').val(results[0].formatted_address);
                           // $('#latitude').val(marker.getPosition().lat());
                           // $('#longitude').val(marker.getPosition().lng());
							
                            infowindow.setContent(results[0].formatted_address);
                            infowindow.open(map, marker2);
                        }
                    }
                });

                               
                google.maps.event.addListener(marker2, 'dragend', function() {

                geocoder.geocode({'latLng': marker2.getPosition()}, function(results, status) {
                    if (status == google.maps.GeocoderStatus.OK) {
                        if (results[0]) {
                            $('#destination').val(results[0].formatted_address);
                           // $('#latitude').val(marker.getPosition().lat());
                           // $('#longitude').val(marker.getPosition().lng());
                            infowindow.setContent(results[0].formatted_address);
                            infowindow.open(map, marker2);
                        }
                    }
                });
            });
            
  
  
  /////////////////////////////////////////////
  
  
  
  var contentMarker = [
      '<div id="containerTabs">',
      '<div id="tabs">',
      
      '<div id="tab-1">',
        '<h3>Lille</h3><p>Suspendisse quis magna dapibus orci porta varius sed sit amet purus. Ut eu justo dictum elit malesuada facilisis. Proin ipsum ligula, feugiat sed faucibus a, <a href="http://www.google.fr">google</a> sit amet mauris. In sit amet nisi mauris. Aliquam vestibulum quam et ligula pretium suscipit ullamcorper metus accumsan.</p>',
      '</div>',
      '<div id="tab-2">',
       '<h3>Aliquam vestibulum</h3><p>Aliquam vestibulum quam et ligula pretium suscipit ullamcorper metus accumsan.</p>',
      '</div>',
      '<div id="tab-3">',
        '<h3>Pretium suscipit</h3><ul><li>Lorem</li><li>Ipsum</li><li>Dolor</li><li>Amectus</li></ul>',
      '</div>',
      '</div>',
      '</div>'
  ].join('');

  
 
  
  
  var infoWindow = new google.maps.InfoWindow({
    content  : contentMarker,
    position : latLng
  });
  
  google.maps.event.addListener(marker, 'click', function() {
    infoWindow.open(map,marker);
  });
  
  google.maps.event.addListener(infoWindow, 'domready', function(){ // infoWindow est biensûr notre info-bulle
    jQuery("#tabs").tabs();
  });
  
  
  direction = new google.maps.DirectionsRenderer({
    map   : map,
    panel : panel // Dom element pour afficher les instructions d'itinéraire
  });

};
////////////////////////////

function initAutocomplete()
{
  var options = { 
  componentRestrictions: {country: 'TUN'}
                     };      
 
  var inputFrom = document.getElementById('origin');
  var autocompleteFrom = new  google.maps.places.Autocomplete(inputFrom, options);
 
  var inputTo = document.getElementById('destination');
  var autocompleteTo = new google.maps.places.Autocomplete(inputTo, options);
 
    }
/////////////////////////////

calculate = function(){
    origin      = document.getElementById('origin').value; // Le point départ
    destination = document.getElementById('destination').value; // Le point d'arrivé
    if(origin && destination){
        var request = {
            origin      : origin,
            destination : destination,
            travelMode  : google.maps.DirectionsTravelMode.DRIVING // Mode de conduite
        }
        var directionsService = new google.maps.DirectionsService(); // Service de calcul d'itinéraire
        directionsService.route(request, function(response, status){ // Envoie de la requête pour calculer le parcours
            if(status == google.maps.DirectionsStatus.OK){
                direction.setDirections(response); // Trace l'itinéraire sur la carte et les différentes étapes du parcours
            }
        });

    }
};

initialize();
