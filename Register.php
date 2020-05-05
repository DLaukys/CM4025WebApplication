<!doctype html>
<html>

<head>
	<base href="/">
	<script src="dmxAppConnect/dmxAppConnect.js"></script>
	<meta charset="UTF-8">
	<title>Register</title>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous" />
	<script src="dmxAppConnect/dmxBootstrap4Navigation/dmxBootstrap4Navigation.js" defer=""></script>
	<link rel="stylesheet" href="css/style.css" />
	<script src="dmxAppConnect/dmxBrowser/dmxBrowser.js" defer=""></script>
	<link rel="stylesheet" href="dmxAppConnect/dmxValidator/dmxValidator.css" />
	<script src="dmxAppConnect/dmxValidator/dmxValidator.js" defer=""></script>
</head>

<body is="dmx-app" id="Register" class="style19">
	<div is="dmx-browser" id="browser1"></div>

	<nav class="navbar navbar-expand-lg navbar-light bg-light">


		<div class="container">
			<a class="navbar-brand" href="index.html">SimpleRSS</a><button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarnav" aria-controls="collapse1" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div id="navbarnav" class="collapse navbar-collapse">
				<div class="navbar-nav ml-auto">
					<a class="nav-item nav-link" href="Register.php">Register</a>
					<a class="nav-item nav-link" href="Login.php">Login</a>
					<a class="nav-item nav-link" href="About.html">About</a>
				</div>
			</div>
		</div>

	</nav>
	<header class="header style20 bg-info text-center">
		<div class="container wappler-block">
			<h1 class="style21">Register</h1>
			<p class="text-h3 style22">Enter your registration details below.</p>
			<div class="row text-center">

				<div class="col-12 col-xl-4 offset-xl-4 text-center bg-light p-5 col-md-8 offset-md-2 style26">




					<form action="dmxConnect/api/newuser.php" dmx-on:success="browser1.goto('Main.php')" is="dmx-serverconnect-form" id="register1" method="post">


						<div class="form-group">
							<label for="input1">Enter your Email</label>
						</div>
						<input id="email" name="email" type="email" class="form-control" required="" data-msg-required="A valid email is required">

						<div class="form-group">
							<label for="input1">Enter your desired password</label>
						</div><input id="password" name="password" type="password" class="form-control" required="" data-msg-required="A password is required"><button id="register1" class="btn btn-primary active" type="submit"
							data-toggle="button">Submit</button>
					</form>


				</div>
			</div>

		</div>
	</header>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>