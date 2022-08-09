<template>
    <div class="map">
        <div id="map"></div>
    </div>
</template>

<script>
    export default {
        mounted() {
            if (document.getElementById('map-cdn-script')) return; // was already loaded
            let script = document.createElement('script');
            script.setAttribute('src','https://maps.googleapis.com/maps/api/js?key=AIzaSyBNDPYguQfTbTeHwemlBv-cuJ4TLNwOsHc&callback=initMap');
            script.id = "map-cdn-script";
           
            // map initialization
            script.addEventListener('load', () => {
                // current location
                var location = {lat: 48.111336, lng: 17.110809};
    
                // icon as a marker of current location
                // var icon = 'http://bumiline-frontend/images/pages/contact/map_point.png';

                var icon = '';
    
                // creating a map
                var map = new google.maps.Map(
                    document.getElementById('map'), {zoom: 10, center: location});
                // creating a marker
                // var marker = new google.maps.Marker({position: location, map: map, icon: icon});
                var marker = new google.maps.Marker({position: location, map: map});
            }, {once: true});
            document.body.appendChild(script);
        }
    }
</script>

<style lang="scss" scoped>
    .map {
        width: 100%;
        height: 420px;

        #map {
            width: 100%;
            height: 100%
        }
        
        @media (min-width: 768px) {
            height: 430px;
        }
        @media (min-width: 1024px) {
            height: 450px;
        }
    }
</style>

