<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap Starter Template</title>

    <!-- Bootstrap -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    
    <style>
 #map {
        width: 100%;
        height: 600px;
     }
    </style>
    
</head>
 
<body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">GMaps Ex</a>
            </div>
            <div id="navbar" class="collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="#">Home</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
            </div>
            <!--/.nav-collapse -->
        </div>
    </nav>

    <div class="container">
        <br><br><br>
        <h1>Google Maps Example</h1>
        
        <div id="map"></div>
        <script>
      function initMap() {
        var mapDiv = document.getElementById('map');
        var map = new google.maps.Map(mapDiv, {
            center: {lat: 56.1171562, lng: 10.149922500000002},
            zoom: 16,
            disableDefaultUI: true,
            
            mapTypeId: 'roadmap',
          styles: [
            {
              featureType: 'road',
              elementType: 'geometry',
              stylers: [
                { color: '#71d230' },
                { weight: 1.6 }
              ]
            }, {
              featureType: 'road',
              elementType: 'labels',
              stylers: [
                { saturation: -100 },
              ]
            }, {
              featureType: 'landscape',
              elementType: 'geometry',
              stylers: [
                { hue: '#ffff00' },
                { gamma: 1.4 },
                { saturation: 82 },
                { lightness: 96 }
              ]
            }, {
              featureType: 'poi.school',
              elementType: 'geometry',
              stylers: [
                { hue: '#fff700' },
                { lightness: -15 },
                { saturation: 99 }
              ]
            }, {
              featureType: 'poi',
              elementType: 'geometry',
              stylers: [
                { visibility: 'off' }
              ]
            }, {
              featureType: 'poi.school',
              elementType: 'geometry',
              stylers: [
                { visibility: 'on' },
                { hue: '#fff700' },
                { lightness: -15 },
                { saturation: 99 }
              ]
            }
          ]
            
        });
        
      }
    </script>
        
    </div>
    <!-- /.container -->


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    
    <script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDUy0ho6T0w6rR8XropbEs0aLsq-fD9DxA&callback=initMap">
    </script>
    
</body>
    
</html>