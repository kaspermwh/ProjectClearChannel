<!DOCTYPE html>
<html>
  <head>
    <title>Simple Map</title>
    <meta name="viewport" content="initial-scale=1.0">
    <meta charset="utf-8">
    <style>
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
      #map {
        height: 100%;
      }
    </style>
  </head>
  <body>
    <div id="map"></div>
    <script>
      var map;
      function initMap() {
        var directionsService = new google.maps.DirectionsService;
        var directionsDisplay = new google.maps.DirectionsRenderer;
        var map = new google.maps.Map(document.getElementById('map'), {
            center: {lat: 56.162939, lng: 10.203921000000037},
            zoom: 14,
            disableDefaultUI: true,
            mapTypeId: 'roadmap',
            
        });
          
          directionsDisplay.setMap(map);
          
          
          function calculateAndDisplayRoute(directionsService, directionsDisplay) {
            directionsService.route({
              origin: LatLng(56.128753, 10.163309000000027),
              destination: LatLng(56.15391899999999, 10.199715999999967),
              travelMode: 'BUS'
            }, function(response, status) {
              if (status === 'OK') {
                directionsDisplay.setDirections(response);
              } else {
                window.alert('Directions request failed due to ' + status);
              }
        });
          
          /*DirectionsService:
            
                {
                  origin: LatLng(56.128753, 10.163309000000027) | String | google.maps.Place,
                  destination: LatLng(56.15391899999999, 10.199715999999967) | String | google.maps.Place,
                  travelMode: Bus,
                  transitOptions: TransitOptions,
                  drivingOptions: DrivingOptions,
                  unitSystem: UnitSystem,
                  waypoints[]: DirectionsWaypoint,
                  optimizeWaypoints: Boolean,
                  provideRouteAlternatives: Boolean,
                  avoidHighways: Boolean,
                  avoidTolls: Boolean,
                  region: String
                }*/
          
          
      }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCJNLgOGEiBehHNtOfCzsK5r2X249ToPhQ&callback=initMap"
    async defer></script>
  </body>
</html>