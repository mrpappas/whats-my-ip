var map;
		function initMap() {
			 
			 //get geolocation data
			 $.get("http://ipinfo.io", function (response) {
				var loc = response.loc;
				var city = response.city;
				var region = response.region;
				var country = response.country;
				var org = response.org;
				$("#address").html("Location: " + city + ", " + region);
				$("#details").html("Country: " + country);
				$("#geo").html("Geographic Location: " + loc);
				$("#isp").html("Origin: " + org);
			
			//parse longitude and lattitude from geo-data
				var longlat = loc.match( /-?\d+\.\d+/g );
				
				var lat = parseFloat(longlat[0]);
				var lng = parseFloat(longlat[1]);
			//new map with long/lat	
				var map = new google.maps.Map(document.getElementById('map'), {
				center: {lat: lat, lng: lng},
				zoom: 11,
				scrollwheel: false,
			  });
			  
			  //keeps centered
			  google.maps.event.addDomListener(window, "resize", function() {
				   var center = map.getCenter();
				   google.maps.event.trigger(map, "resize");
				   map.setCenter(center); 
				});
			  
			}
		
		, "jsonp");
			 
		}