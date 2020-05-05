<!doctype html>
<html>

<head>
	<script src="dmxAppConnect/dmxAppConnect.js"></script>
	<meta charset="UTF-8">
	<title>Untitled Document</title>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous" />
	<script src="dmxAppConnect/dmxBootstrap4Navigation/dmxBootstrap4Navigation.js" defer=""></script>
	<link rel="stylesheet" href="css/style.css" />
	<link rel="stylesheet" href="dmxAppConnect/dmxValidator/dmxValidator.css" />
	<script src="dmxAppConnect/dmxValidator/dmxValidator.js" defer=""></script>
	<script src="dmxAppConnect/dmxMasonry/dmxMasonry.js" defer=""></script>
	<link rel="stylesheet" href="dmxAppConnect/dmxBootstrap4TableGenerator/dmxBootstrap4TableGenerator.css" />
</head>

<body is="dmx-app" id="Main" class="style27">

	<dmx-json-datasource id="Jsonoutput" is="dmx-serverconnect"></dmx-json-datasource>
	<dmx-api-datasource id="rss_url" is="dmx-fetch" url="https://api.rss2json.com/v1/api.json" dmx-header:api_key="vcmk6i4vjdentiiwk3rrtoycodah0mqmkvrbjqnw" dmx-param:rss_url="apiform1.rss_url.value"></dmx-api-datasource>

	<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<div class="container">


			<a class="navbar-brand" href="#">SimpleRSS</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapse1" aria-controls="collapse1" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div id="collapse1" class="collapse navbar-collapse">
				<div class="navbar-nav ml-auto">
					<a class="nav-item nav-link" href="#">Link</a>
					<a class="nav-item nav-link" href="#">Link</a>
					<a class="nav-item nav-link" href="#">Link</a>
				</div>
			</div>
		</div>
	</nav>
	<header class="bg-info style28">


		<div class="row text-center">
			<div class="col">
				<h1>{{connection_get_user.data.query1[0].email}} you are logged in.</h1>
			</div>
		</div>
		<div class="container style29">
			<h1 id="rss_url_title" class="text-center">Please enter the RSS Url</h1>
			<form id="rss_url_title" is="dmx-serverconnect-form" action="dmxConnect/api/API.php">
				<input id="rss_url" name="Enter your XML URL" type="url" class="form-control style32">
				<button id="btn1" class="btn btn-primary">Button</button>
			</form>


		</div>
		<table class="table text-center">
			<thead>
				<tr>
					<th>Status</th>
					<th dmx-bind:title="rss_url.data.feed.description">Feed</th>
					<th>Items</th>
				</tr>
			</thead>
			<tbody is="dmx-repeat" dmx-generator="bs4table" dmx-bind:repeat="rss_url.data" id="tableRepeat1">
				<tr>
					<td dmx-text="status"></td>
					<td dmx-text="feed"></td>
					<td dmx-text="items"></td>
				</tr>
			</tbody>
		</table>
	</header>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>