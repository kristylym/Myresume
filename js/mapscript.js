
        function initMap() {
        var uluru = {lat: 54.944, lng: 83.196};
        var map = new google.maps.Map(document.getElementById('map'), {
        zoom: 9,
        center: uluru
        });
        var marker = new google.maps.Marker({
        position: uluru,
        map: map
        });
        }
        
