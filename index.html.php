<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?php echo $ip?></title>
	<!---bootstrap css--->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" integrity="sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous">
	<!---fontawesome--->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
  </head>
  
  <body>
	<nav class="navbar navbar-default">
	  <div class="container-fluid">
		<div class="navbar-header">
		  <a class="navbar-brand" href="#">
			<p>What's my ip address?</p>
		  </a>
		  <p class="navbar-text navbar-right"><a href="https://github.com/mrpappas" target="_blank">by Ben Pappas <i class="fa fa-github"></i></a></p>
		</div>
		
	  </div>
	</nav>
	
	<div class="container">
	    <div class="row" align="left">
		  <div class="col-md-6">
			<div class="panel panel-success">
			  <div class="panel-heading">Your ip address is:</div>
			  <div class="panel-body">
				<!---$ip goes here--->
				<h1><?php echo $ip?></h1>
			  </div>
			</div>
		  </div>
	    </div>
		
		
		<!---could be ignorant to network settings--->
		<div class="row" align="left">
		  <div class="col-md-6">
			<h4><strong style="color:red">Note:</strong> if you are using a proxy or VPN this will not be accurate.
		  </div>
	    </div>
	</div>
	
	<!---bootstrap--->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js" integrity="sha512-K1qjQ+NcF2TYO/eI3M6v8EiNYZfA95pQumfvcVrTHtwQVDG+aHRqLi/ETn2uB+1JqwYqVG3LIvdm9lj6imS/pQ==" crossorigin="anonymous"></script>
  </body>
</html>