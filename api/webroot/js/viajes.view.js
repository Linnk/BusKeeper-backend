window.addEvent('domready', function(){

	function initialize()
	{
      var polylineCoordinates = [];
      var points = $$('#GPSPoints tbody tr');
      var limit = points.length;
      var center = null;
      var steps = 3;
      var n = 0;
      var k = 0;
      points.each(function(e,i) {
      	if(n < steps)
      	{
	      	n++;
	      	return;
      	}
      	var latitude = e.getElement('.latitude').get('text').toFloat();
      	var longitude = e.getElement('.longitude').get('text').toFloat();
		polylineCoordinates[k] = new google.maps.LatLng(latitude, longitude);
		k++;
      	if(!center)
      	{
	      center = new google.maps.LatLng(latitude, longitude);
      	}
      	n=0;
      });

       var myOptions = {
                zoom: 14,
                center: center,
                mapTypeControl: true,
                mapTypeControlOptions: {style: google.maps.MapTypeControlStyle.DROPDOWN_MENU},
                navigationControl: true,
                mapTypeId: google.maps.MapTypeId.ROADMAP,
       }     
      var map = new google.maps.Map(document.getElementById("map_canvas"), myOptions);

      var polyline = new google.maps.Polyline({
          path: polylineCoordinates,
          strokeColor: '#3333FF',
          strokeOpacity: 0.75,
          strokeWeight: 5,
          editable: false
      });

      polyline.setMap(map);
    }
    initialize();

});