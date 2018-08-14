<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
		<script type="text/javascript" src="{{ URL::asset('js/chart.js') }}"></script>
		<link rel="stylesheet" type="text/css" href="{{ URL::asset('css/style.css') }}">
		<style>		
		</style>
	</head>
	<body>
		<div class="mainContent">
			<nav class="navbar navbar-custom">
				<div class="container-fluid">
					<div class="navbar-header text-left">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>                        
						</button>
						<a class="navbar-brand" href="#">Logo</a>
					</div>
					<div class="collapse navbar-collapse navbar-right" id="myNavbar">
						<ul class="nav navbar-nav">
							<li class="active"><a href="#">Home</a></li>
							<li><a href="#">Project</a></li>
							<li><a href="message.html">Message</a></li>
							<li><a href="#">My Profile</a></li>
						</ul>
						<ul class="nav navbar-nav navbar-right">
			        <!-- <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li> -->
			        <div class="dropdown">
					    <a href="" class="dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" style="text-decoration: none !important;">
					    	<img src="{{ URL::asset('/img/sample-profile.jpg') }}" class="img-profile"/>
					    	<span class="caret"/>
					  	</a>
					  	<ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
					    	<li role="presentation"><a role="menuitem" tabindex="-1" href="#">Update Profile</a></li>
					    	<li role="presentation"><a role="menuitem" tabindex="-1" href="#">Another action</a></li>
					    	<li role="presentation"><a role="menuitem" tabindex="-1" href="#">Something else here</a></li>
					    	<li role="presentation" class="divider"></li>
					    	<li role="presentation"><a role="menuitem" tabindex="-1" href="#">Sign Out</a></li>
					  	</ul>
					</div>
			      </ul>
			    </div>
			  </div>
			</nav>
			  
			<div class="container-fluid text-center">
				@yield('content')
			</div>

			<footer class="container-fluid text-center" style="margin-top: 15px;">
			  	<p>Footer Text</p>
			</footer>
		</div>
	</body>
</html>