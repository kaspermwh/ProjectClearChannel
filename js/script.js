function initMap() {
    var directionsDisplay = new google.maps.DirectionsRenderer;
    var directionsService = new google.maps.DirectionsService;
    var map = new google.maps.Map(document.getElementById('map'), {
      zoom: 15,
      center: {lat: 56.153701, lng: 10.2044427}
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
      origin: start,
      destination: end,
      travelMode: buttons
      //travelMode: method
    }, function(response, status) {
      if (status === 'OK') {
        directionsDisplay.setDirections(response);
      } else {
        window.alert('Directions request failed due to ' + status);
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
