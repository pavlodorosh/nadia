function initMap() {
  var directionsService = new google.maps.DirectionsService;
  var directionsDisplay = new google.maps.DirectionsRenderer;
  var map = new google.maps.Map(document.getElementById('map'), {
    zoom: 7,
    center: {lat: 49.1735614, lng: 26.595677}
  });
  directionsDisplay.setMap(map);
  var onChangeHandler = function() {
    calculateAndDisplayRoute(directionsService, directionsDisplay);
  };
  calculateAndDisplayRoute(directionsService, directionsDisplay);
  document.getElementById('myRoute').addEventListener('change', onChangeHandler);
}

//routes:
function calculateAndDisplayRoute(directionsService, directionsDisplay) {
  if (document.getElementById('myRoute').value == 'CherkassyWroclaw') {
      directionsService.route({
        origin: 'Черкаси, Україна',
        destination: 'Вроцлав, Польща',
        waypoints: [
          {
            location:"Київ, Україна",
            stopover:true
          },{
            location:"Житомир, Україна",
            stopover:true
          },{
            location:"Рівне, Україна",
            stopover:true
          },{
            location:"Луцьк, Україна",
            stopover:true
          },{
            location:"Люблін, Польща",
            stopover:true
          },{
            location:"Варшава, Польща",
            stopover:true
          },{
            location:"Лодзь, Польща",
            stopover:true
          }
        ],
        travelMode: google.maps.TravelMode.DRIVING
      }, function(response, status) {
        if (status === google.maps.DirectionsStatus.OK) {
          directionsDisplay.setDirections(response);
        } else {
          window.alert('Directions request failed due to ' + status);
        }
      });
  } else if (document.getElementById('myRoute').value == 'RivneWarshava') {
    directionsService.route({
      origin: 'Рівне, Україна',
      destination: 'Варшава, Польща',
      waypoints: [
        {
          location:"Костопіль, Україна",
          stopover:true
        },{
          location:"Сарни, Україна",
          stopover:true
        },{
          location:"Ковель, Україна",
          stopover:true
        },{
          location:"Хелм, Польща",
          stopover:true
        },{
          location:"Люблін, Польща",
          stopover:true
        }
      ],
      travelMode: google.maps.TravelMode.DRIVING
    }, function(response, status) {
      if (status === google.maps.DirectionsStatus.OK) {
        directionsDisplay.setDirections(response);
      } else {
        window.alert('Directions request failed due to ' + status);
      }
    });
  } else if(document.getElementById('myRoute').value == 'ZarichneTernopil') {
      directionsService.route({
        origin: 'Зарічне, Україна',
        destination: 'Тернопіль, Україна',
        waypoints: [
          {
            location:"Дубровиця, Україна",
            stopover:true
          },{
            location:"Сарни, Україна",
            stopover:true
          },{
            location:"Костопіль, Україна",
            stopover:true
          },{
            location:"Рівне, Україна",
            stopover:true
          },{
            location:"Дубно, Україна",
            stopover:true
          },{
            location:"Кременець, Україна",
            stopover:true
          },{
            location:"Вишнівець, Україна",
            stopover:true
          }
        ],
        travelMode: google.maps.TravelMode.DRIVING
      }, function(response, status) {
        if (status === google.maps.DirectionsStatus.OK) {
          directionsDisplay.setDirections(response);
         } else {
          window.alert('Directions request failed due to ' + status);
        }
      });
  } else if(document.getElementById('myRoute').value == 'ZarichneKyiv') {
    directionsService.route({
      origin: 'Зарічне, Україна',
      destination: 'Київ, Україна',
      waypoints: [
        {
          location:"Дубровиця, Україна",
          stopover:true
        },{
          location:"Сарни, Україна",
          stopover:true
        },{
          location:"Рокитное, Україна",
          stopover:true
        }
      ],
      travelMode: google.maps.TravelMode.DRIVING
    }, function(response, status) {
      if (status === google.maps.DirectionsStatus.OK) {
        directionsDisplay.setDirections(response);
      } else {
        window.alert('Directions request failed due to ' + status);
      }
    });
  } else if(document.getElementById('myRoute').value == 'ZarichneLutsk') {
      directionsService.route({
        origin: 'Зарічне, Україна',
        destination: 'Луцьк, Україна',
        waypoints: [
          {
            location:"Дубровиця, Україна",
            stopover:true
          },{
            location:"Сарни, Україна",
            stopover:true
          },{
            location:"Костопіль, Україна",
            stopover:true
          },{
            location:"Рівне, Україна",
            stopover:true
          }
        ],
        travelMode: google.maps.TravelMode.DRIVING
      }, function(response, status) {
        if (status === google.maps.DirectionsStatus.OK) {
          directionsDisplay.setDirections(response);
        } else {
          window.alert('Directions request failed due to ' + status);
        }
      });
  } else if(document.getElementById('myRoute').value == 'ZarichneRivne') {
      directionsService.route({
        origin: 'Зарічне, Україна',
        destination: 'Рівне, Україна',
        waypoints: [
          {
            location:"Дубровиця, Україна",
            stopover:true
          },{
            location:"Сарни, Україна",
            stopover:true
          },{
            location:"Костопіль, Україна",
            stopover:true
          }
        ],
        travelMode: google.maps.TravelMode.DRIVING
      }, function(response, status) {
        if (status === google.maps.DirectionsStatus.OK) {
          directionsDisplay.setDirections(response);
        } else {
          window.alert('Directions request failed due to ' + status);
        }
      });
  } else if(document.getElementById('myRoute').value == 'KuznetsovskRivne') {
      directionsService.route({
        origin: 'Кузнецовськ, Україна',
        destination: 'Рівне, Україна',
        waypoints: [
          {
            location:"Сарни, Україна",
            stopover:true
          },{
            location:"Костопіль, Україна",
            stopover:true
          }
        ],
        travelMode: google.maps.TravelMode.DRIVING
      }, function(response, status) {
        if (status === google.maps.DirectionsStatus.OK) {
          directionsDisplay.setDirections(response);
        } else {
          window.alert('Directions request failed due to ' + status);
        }
      });
  } else if(document.getElementById('myRoute').value == 'DubrovytsiaRivne') {
    directionsService.route({
      origin: 'Дубровиця, Україна',
      destination: 'Рівне, Україна',
      waypoints: [
        {
          location:"Сарни, Україна",
          stopover:true
        },{
          location:"Костопіль, Україна",
          stopover:true
        }
      ],
      travelMode: google.maps.TravelMode.DRIVING
    }, function(response, status) {
      if (status === google.maps.DirectionsStatus.OK) {
        directionsDisplay.setDirections(response);
      } else {
        window.alert('Directions request failed due to ' + status);
      }
    });
  } else if(document.getElementById('myRoute').value == 'ZarichneBorove') {
      directionsService.route({
        origin: 'Зарічне, Україна',
        //destination: 'Борове, Зарічненського району, Рівненська область, Україна',
        destination: '51.6239232, 25.8458947',
        travelMode: google.maps.TravelMode.DRIVING
      }, function(response, status) {
        if (status === google.maps.DirectionsStatus.OK) {
          directionsDisplay.setDirections(response);
          //var route = response.routes[0];
          // var summaryPanel = document.getElementById('map-distance');
          // summaryPanel.innerHTML = 'протяжність: ' + route.legs[0].distance.text;
        } else {
          window.alert('Directions request failed due to ' + status);
        }
      });
  } else if (document.getElementById('myRoute').value == 'BoryspilGdansk') {
    directionsService.route({
      origin: 'Бориспіль, Україна',
      destination: 'Гданськ, Польща',
      waypoints: [
        {
          location:"Київ, Україна",
          stopover:true
        },{
          location:"Житомир, Україна",
          stopover:true
        },{
          location:"Рівне, Україна",
          stopover:true
        },{
          location:"Луцьк, Україна",
          stopover:true
        },{
          location:"Люблін, Польща",
          stopover:true
        },{
          location:"Варшава, Польща",
          stopover:true
        },{
          location:"Модлин, Польща",
          stopover:true
        },{
          location:"Ольштин, Польща",
          stopover:true
        },{
          location:"Оструда, Польща",
          stopover:true
        },{
          location:"Ельблонг, Польща",
          stopover:true
        }
      ],
      travelMode: google.maps.TravelMode.DRIVING
    }, function(response, status) {
      if (status === google.maps.DirectionsStatus.OK) {
        directionsDisplay.setDirections(response);
      } else {
        window.alert('Directions request failed due to ' + status);
      }
    });
  }   else {
    window.alert('Такого маршруту ще не має.');
  };
}