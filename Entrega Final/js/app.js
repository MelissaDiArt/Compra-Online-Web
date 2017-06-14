function initMap() {
    var mapDiv = document.getElementById('map');
    var map = new google.maps.Map(mapDiv, {
      center: {lat: 28.482785, lng: -16.321384},
      zoom: 17
    });
}
