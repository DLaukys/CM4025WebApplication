<!doctype html>
<html>

<head>
	<base href="/">
	<script src="dmxAppConnect/dmxAppConnect.js"></script>
	<meta charset="UTF-8">
	<title>Login</title>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous" />
	<script src="dmxAppConnect/dmxBootstrap4Navigation/dmxBootstrap4Navigation.js" defer=""></script>
	<link rel="stylesheet" href="css/style.css" />
	<script src="dmxAppConnect/dmxTyped/dmxTyped.js" defer=""></script>
	<script src="dmxAppConnect/dmxTyped/typed.min.js" defer=""></script>
	<script src="dmxAppConnect/dmxBrowser/dmxBrowser.js" defer=""></script>
	<link rel="stylesheet" href="dmxAppConnect/dmxNotifications/dmxNotifications.css" />
	<script src="dmxAppConnect/dmxNotifications/dmxNotifications.js" defer=""></script>
</head>

<body id="Login" is="dmx-app" class="style16">
	<dmx-notifications id="notifies1"></dmx-notifications>

	<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<div class="container">
			sssdsadasdasdasdas<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="collapse1" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div id="navbarNav" class="collapse navbar-collapse">
				<div class="navbar-nav ml-auto">
					<a class="nav-item nav-link" href="Register.php">Register</a>
					<a class="nav-item nav-link" href="Login.php">Login</a>
					<a class="nav-item nav-link" href="About.html">About</a>
				</div>
				<div class="nav-item nav-link"></div>
				<div class="nav-item nav-link"></div>
				<div class="nav-item nav-link"></div>
			</div>

		</div>
	</nav>
	<header class="pb-md-5 pb-5 pb-lg-0 style3 bg-info">
		<div class="container wappler-block pt-3 pb-3">
			<h1 class="style18">Login Required</h1>
			<div class="row style17">
				<div class="col-12 col-xl-4 offset-xl-4 text-center bg-light p-5 col-md-8 offset-md-2">
					<form method="post" is="dmx-serverconnect-form" id="serverconnectform1" action="dmxConnect/api/loginuser.php" dmx-on:success="browser1.goto('Main.php')" dmx-on:unauthorized="notifies1.warning('Incorrect Login Information')"
						dmx-on:error="notifies1.warning('Something wrong happened with your request')">
						<div class="form-group">
							<label for="email" id="Email">Email</label>
							<input type="email" class="form-control" id="email" name="email" placeholder="Email">
						</div>
						<div class="form-group">
							<label for="password">Password</label>
							<input type="password" class="form-control" id="password" name="password" placeholder="Password">
						</div>
						<button class="btn btn-primary" type="submit">Log in
						</button>
					</form>
				</div>
			</div>
		</div>
	</header>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>