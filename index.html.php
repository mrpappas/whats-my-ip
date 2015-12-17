<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?php echo $ip?></title>
	
	<!--bootstrap css-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" integrity="sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous">
	<!--fontawesome-->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="styles.css">
  </head>
  
  <body>
	  <div class="container-fluid">
		<nav class="navbar navbar-default">
		  <div class="container-fluid">
			<div class="navbar-header">
			  <a class="navbar-brand" href="#">
				<p class="visible-md visible-lg">What's my IP address?</p>
				<p class="visible-xs visible-sm">What's my IP?</p>
			  </a>
			  <p class="navbar-text navbar-right"><a href="https://github.com/mrpappas" target="_blank">by Ben Pappas <i class="fa fa-github"></i></span></a></p>
			</div>
		  </div>
		</nav>
		<h1><strong><?php echo $ip?></strong></h1>
	   </div>
	
	   <div id="map"></div>

		<br>
		
	   <div class="container">
	     <div class="row" align="left">
		    <div class="col-md-6">
			  <div class="panel panel-default">
			    <div class="panel-heading">IP Address Info</div>
			    <div class="panel-body">
			  	  
				  <h4>Public IP: <strong><?php echo $ip?><!--$ip goes here--></strong></h4>
				  
				  <h4 id="address"><!--address goes here--></h4>
				  
				  <h5 id="details"><!-- Country of origin go here --></h5>
				  
				  <h5 id="geo"><!-- Longitude and Lattitude go here --></h5>
				  
				  <h5 id="isp"><!-- isp info goes here --></h5>
				  
				</div>
			  </div>
		    </div>
	    
			<div class="col-md-6">
				<h4>
				  <strong style="color:red">Note:</strong> if you are on a cellular network or using a proxy / VPN this will not be accurate.
				</h4>
				<h4>
				  <i class="fa fa-globe"></i> Geolocational data is an estimate derived from <a href="http://ipinfo.io/" target="_blank">ipinfo.io</a>.  It is not an exact location.
				</h4>
				
				<hr class="visible-xs visible-sm">
				
			</div>
		 </div>
	   </div>
		
		 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js" integrity="sha512-K1qjQ+NcF2TYO/eI3M6v8EiNYZfA95pQumfvcVrTHtwQVDG+aHRqLi/ETn2uB+1JqwYqVG3LIvdm9lj6imS/pQ==" crossorigin="anonymous"></script>
		<script src="scripts.js"></script>
		<script async defer
		  src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA6nUlPKYisVJUuxbSvFeJ9Rcjl2LPRA5w&callback=initMap">
		</script>
  </body>
</html>