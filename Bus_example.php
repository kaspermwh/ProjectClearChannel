<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    <title>Directions service</title>
    <style>
        html,
        body {
            height: 100%;
            margin: 0;
            padding: 0;
        }
        
        #map {
            height: 100%;
        }
        
        #floating-panel {
            position: absolute;
            top: 10px;
            left: 25%;
            z-index: 5;
            background-color: #fff;
            padding: 5px;
            border: 1px solid #999;
            text-align: center;
            font-family: 'Roboto', 'sans-serif';
            line-height: 30px;
            padding-left: 10px;
        }
    </style>
</head>

<body>
    <div id="floating-panel"> <b>Start: </b>
        <select id="start">
            <option value="ARoS, dk">Aros</option>
            <option value="viby torv, dk">Viby Torv</option>
        </select> <b>End: </b>
        <select id="end">
            <option value="ARoS, dk">Aros</option>
            <option value="viby torv, dk">Viby Torv</option>
        </select>
    </div>
    <div id="map"></div>
    <script>
        function initMap() {
            var directionsService = new google.maps.DirectionsService;
            var directionsDisplay = new google.maps.DirectionsRenderer;
            var map = new google.maps.Map(document.getElementById('map'), {
                zoom: 8
                , center: {
                    lat: 56.162939
                    , lng: 10.203921000000037
                }
                , styles: [{
                    "featureType": "landscape.man_made"
                    , "elementType": "geometry.fill"
                    , "stylers": [{
                        "visibility": "on"
                    }, {
                        "color": "#0F357B"
                    }]
                }, {
                    "featureType": "landscape.natural"
                    , "elementType": "geometry.fill"
                    , "stylers": [{
                        "color": "#f8f8f8"
                    }]
                }, {
                    "featureType": "poi"
                    , "elementType": "geometry.fill"
                    , "stylers": [{
                        "color": "#cfd5db"
                    }]
                }, {
                    "featureType": "road.highway"
                    , "elementType": "geometry.fill"
                    , "stylers": [{
                        "color": "#676d75"
                    }]
                }, {
                    "featureType": "road.highway"
                    , "elementType": "geometry.stroke"
                    , "stylers": [{
                        "color": "#585d63"
                    }]
                }, {
                    "featureType": "road.highway.controlled_access"
                    , "elementType": "geometry.fill"
                    , "stylers": [{
                        "color": "#666666"
                    }]
                }, {
                    "featureType": "road.highway.controlled_access"
                    , "elementType": "geometry.stroke"
                    , "stylers": [{
                        "visibility": "off"
                    }]
                }, {
                    "featureType": "road.arterial"
                    , "elementType": "geometry.stroke"
                    , "stylers": [{
                        "visibility": "on"
                    }]
                }, {
                    "featureType": "road.local"
                    , "elementType": "geometry.fill"
                    , "stylers": [{
                        "visibility": "on"
                    }, {
                        "color": "#ffffff"
                    }]
                }, {
                    "featureType": "road.local"
                    , "elementType": "geometry.stroke"
                    , "stylers": [{
                        "visibility": "off"
                    }]
                }, {
                    "featureType": "water"
                    , "elementType": "geometry.fill"
                    , "stylers": [{
                        "color": "#43B7EA"
                    }]
                }]
            });
            directionsDisplay.setMap(map);
            var onChangeHandler = function () {
                calculateAndDisplayRoute(directionsService, directionsDisplay);
            };
            document.getElementById('start').addEventListener('change', onChangeHandler);
            document.getElementById('end').addEventListener('change', onChangeHandler);
            calculateAndDisplayRoute(directionsService, directionsDisplay);
        }

        function calculateAndDisplayRoute(directionsService, directionsDisplay) {
            directionsService.route({
                /*origin: LatLng(56.128753, 10.163309000000027),
                    destination: LatLng(56.15391899999999, 10.199715999999967),*/
                origin: document.getElementById('start').value
                , destination: document.getElementById('end').value
                , travelMode: 'TRANSIT'
            }, function (response, status) {
                if (status === 'OK') {
                    directionsDisplay.setDirections(response);
                }
                else {
                    window.alert('Directions request failed due to ' + status);
                }
            });
        }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCJNLgOGEiBehHNtOfCzsK5r2X249ToPhQ&callback=initMap" async defer></script>
</body>

</html>