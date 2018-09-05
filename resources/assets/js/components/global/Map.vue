<template>
    <div class="col-6 map" id="map"></div>
</template>

<script>
import GoogleMapsLoader from 'google-maps'
export default {
    name: 'v-Map',
    props: ['Lat', 'lng', 'title'],
    ready () {
        GoogleMapsLoader.load((google) => {
            this.initMap(google)
        })
    },
    updated () {
        GoogleMapsLoader.load((google) => {
            this.initMap(google)
        })
    },
    beforeUpdate () {
        GoogleMapsLoader.load((google) => {
            this.initMap(google)
        })
    },
    methods: {
        initMap (google) {
            var myLatlng = new google.maps.LatLng(this.Lat, this.lng)
            var mapOptions = {
                zoom: 17,
                center: myLatlng,
                scrollwheel: false, // we disable de scroll over the map, it is a really annoing when you scroll through page
                styles: [{
                    'featureType': 'water',
                    'stylers': [{ 'saturation': 43 }, { 'lightness': -11 }, { 'hue': '#0088ff' }]
                }, {
                    'featureType': 'road',
                    'elementType': 'geometry.fill',
                    'stylers': [{ 'hue': '#ff0000' }, { 'saturation': -100 }, { 'lightness': 99 }]
                }, {
                    'featureType': 'road',
                    'elementType': 'geometry.stroke',
                    'stylers': [{ 'color': '#808080' }, { 'lightness': 54 }]
                }, {
                    'featureType': 'landscape.man_made',
                    'elementType': 'geometry.fill',
                    'stylers': [{ 'color': '#ece2d9' }]
                }, {
                    'featureType': 'poi.park',
                    'elementType': 'geometry.fill',
                    'stylers': [{ 'color': '#ccdca1' }]
                }, {
                    'featureType': 'road',
                    'elementType': 'labels.text.fill',
                    'stylers': [{ 'color': '#767676' }]
                }, {
                    'featureType': 'road',
                    'elementType': 'labels.text.stroke',
                    'stylers': [{ 'color': '#ffffff' }]
                }, { 'featureType': 'poi', 'stylers': [{ 'visibility': 'off' }] }, {
                    'featureType': 'landscape.natural',
                    'elementType': 'geometry.fill',
                    'stylers': [{ 'visibility': 'on' }, { 'color': '#b8cb93' }]
                }, { 'featureType': 'poi.park', 'stylers': [{ 'visibility': 'on' }] }, {
                    'featureType': 'poi.sports_complex',
                    'stylers': [{ 'visibility': 'on' }]
                }, { 'featureType': 'poi.medical', 'stylers': [{ 'visibility': 'on' }] }, {
                    'featureType': 'poi.business',
                    'stylers': [{ 'visibility': 'simplified' }]
                }]

            }
            var info = '<h5 class="text-danger">' + this.title + '</h5><p></p><img class="d-block img-fluid" src="" alt="' + this.title + '">'
            var map = new google.maps.Map(document.getElementById('map'), mapOptions)
            var infowindow = new google.maps.InfoWindow({
                content: info
            })

            var marker = new google.maps.Marker({
                position: myLatlng,
                title: this.title
            })
            marker.addListener('click', function () {
                infowindow.open(map, marker)
            })
            // To add the marker to the map, call setMap();
            marker.setMap(map)
        }
    },
    mounted () {
        GoogleMapsLoader.KEY = 'AIzaSyD5zckljcogOGoZ0dKc0Lkefncg4GFUzyE'
        GoogleMapsLoader.VERSION = '3.34'
        GoogleMapsLoader.LIBRARIES = ['geometry', 'places']
        GoogleMapsLoader.load((google) => {
            this.initMap(google)
        })
    }
}

</script>


<style scoped>
.map {
  height: 500px;
  display: inline-block;
  color: #fff;
  position: relative;
  z-index: 1;
  top: 18px;
}
</style>
