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
            <option value="viby torv, dk">Viby Torv</option>
        </select> <b>End: </b>
        <select id="end">
            <option value="ARoS, dk">Aros</option>
            <option value="botanisk have aarhus, dk">Botanical Garden</option>
            <option value="dokk1 aarhus, dk">Dokk1</option>
            <option value="moesgaard museum, dk">Moesgaard Museum</option>
        </select>  <b>Type: </b>
        <select id="type">
            <option value="TRANSIT">Public Transport</option>
            <option value="DRIVING">Driving</option>
            <option value="WALKING">On foot</option>
            <option value="BICYCLING">On bicycle</option>
        </select>
    </div>
    <div id="map"></div>
    <script>
        function initMap() {
            var directionsService = new google.maps.DirectionsService;
            var directionsDisplay = new google.maps.DirectionsRenderer;
            var map = new google.maps.Map(document.getElementById('map'), {
                zoom: 8,
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
            var onChangeHandler = function () {
                calculateAndDisplayRoute(directionsService, directionsDisplay);
            };
            document.getElementById('start').addEventListener('change', onChangeHandler);
            document.getElementById('end').addEventListener('change', onChangeHandler);
            document.getElementById('type').addEventListener('change', onChangeHandler);
            calculateAndDisplayRoute(directionsService, directionsDisplay);
        }

        function calculateAndDisplayRoute(directionsService, directionsDisplay) {
            directionsService.route({
                origin: document.getElementById('start').value
                , destination: document.getElementById('end').value
                , travelMode: document.getElementById('type').value
            }, function (response, status) {
                if (status === 'OK') {
                    directionsDisplay.setDirections(response);
                } else {
                    window.alert('Directions request failed due to ' + status);
                }
            });
        }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCJNLgOGEiBehHNtOfCzsK5r2X249ToPhQ&callback=initMap" async defer></script>
</body>

</html>