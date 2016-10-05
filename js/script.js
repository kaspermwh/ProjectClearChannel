function initMap() {
    var directionsDisplay = new google.maps.DirectionsRenderer;
    var directionsService = new google.maps.DirectionsService;
    var map = new google.maps.Map(document.getElementById('map'), {
        zoom: 15,        
        disableDefaultUI: true
                , center: {
                    lat: 56.162939
                    , lng: 10.203921000000037
                }
                , styles: [{
                    "featureType": "administrative"
                    , "stylers": [{
                        "visibility": "off"
                    }]
                }, {
                    "featureType": "poi"
                    , "stylers": [{
                        "visibility": "simplified"
                    }]
                }, {
                    "featureType": "road"
                    , "elementType": "labels"
                    , "stylers": [{
                        "visibility": "simplified"
                    }]
                }, {
                    "featureType": "water"
                    , "stylers": [{
                        "visibility": "simplified"
                    }]
                }, {
                    "featureType": "transit"
                    , "stylers": [{
                        "visibility": "simplified"
                    }]
                }, {
                    "featureType": "landscape"
                    , "stylers": [{
                        "visibility": "simplified"
                    }]
                }, {
                    "featureType": "road.highway"
                    , "stylers": [{
                        "visibility": "off"
                    }]
                }, {
                    "featureType": "road.local"
                    , "stylers": [{
                        "visibility": "on"
                    }]
                }, {
                    "featureType": "road.highway"
                    , "elementType": "geometry"
                    , "stylers": [{
                        "visibility": "on"
                    }]
                }, {
                    "featureType": "water"
                    , "stylers": [{
                        "color": "#84afa3"
                    }, {
                        "lightness": 52
                    }]
                }, {
                    "stylers": [{
                        "saturation": -17
                    }, {
                        "gamma": 0.36
                    }]
                }, {
                    "featureType": "transit.line"
                    , "elementType": "geometry"
                    , "stylers": [{
                        "color": "#3f518c"
                    }]
                }]
    });
    directionsDisplay.setMap(map);
    directionsDisplay.setPanel(document.getElementById('right-panel'));

    var control = document.getElementById('floating-panel');
    control.style.display = 'block';
    map.controls[google.maps.ControlPosition.TOP_CENTER].push(control);

    var onChangeHandler = function() {
      calculateAndDisplayRoute(directionsService, directionsDisplay);
        
    };
    document.getElementById('start').addEventListener('change', onChangeHandler);
    document.getElementById('end').addEventListener('change', onChangeHandler);
    document.getElementById('method').addEventListener('change', onChangeHandler);
    document.getElementById('buttons').addEventListener('change', onChangeHandler);
       
}

function calculateAndDisplayRoute(directionsService, directionsDisplay) {
    var start = document.getElementById('start').value;
    var end = document.getElementById('end').value;
    var method = document.getElementById('method').value;
    var buttons = getvalue();
    directionsService.route({
      origin:  start,
      destination: end,
      travelMode: buttons
      //travelMode: method
    }, function(response, status) {
      if (status === 'OK') {
        directionsDisplay.setDirections(response);
      } else {
        window.alert('Directions request failed due to ' + status);
      }
        console.log(start);
        var time = response.routes[0].legs[0].duration.value;
        var minutes = Math.floor(time/60);
        var seconds = time % 60;
        
        if (buttons == "DRIVING") {
            document.getElementById('durationCar').innerHTML = "   ca. " + minutes + " min ";
        }
        if (buttons == "TRANSIT") {
            document.getElementById('durationPublic').innerHTML = "   ca. " + minutes + " min ";
        }
        if (buttons == "BICYCLING") {
            document.getElementById('durationBike').innerHTML = "   ca. " + minutes + " min ";
        }
        if (buttons == "WALKING") {
            document.getElementById('durationWalk').innerHTML = "   ca. " + minutes + " min ";
        }
    });    
}

function getvalue() {
    var car = document.getElementById('car');
    var public = document.getElementById('public');
    var bike = document.getElementById('bike');
    var walk = document.getElementById('walk');
    var buttons;
    if (car.checked) {
        console.log("hey");
        buttons = car.value;
    }
    if (public.checked) {
        console.log("ho");
        buttons = public.value;
    }
    if (bike.checked) {
        console.log("lets");
        buttons = bike.value;
    }
    if (walk.checked) {
        console.log("go");
        buttons = walk.value;
    }
    //console.log(buttons);
    
    return buttons;
}

function pushup() {
  $( "#hideaway" ).slideUp( 1000, "linear", function() {
  });
    $( "#floating-panel" ).css("margin", "50px 0 0 0");
}
