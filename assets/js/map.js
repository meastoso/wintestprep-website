var map;
jQuery(document).ready(function(){

    map = new GMaps({
        div: '#map',
        lat: 42.440229,
        lng: -71.171011,
    });
    map.addMarker({
        lat: 42.440229,
        lng: -71.171011,
        title: 'Address',      
        infoWindow: {
            content: '<h5 class="title">Win Test Prep</h5><p><span class="region">35 Mayflower Rd.</span><br><span class="postal-code">Winchester, MA</span></p>'
        }
        
    });

});