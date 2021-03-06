<?php 

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

include_once('constants.php');

if(!isset($_SESSION['username'])) {
	//Redirect if not logged in
	header('Location: ' . URL_HOME);
	
} else {
	
?>

<!DOCTYPE html>
<html>
<head>
<!--Meta-->
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta name="author" content="Rosario Brancato" />
	
	<!--Google jQuery csn-->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" />
	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css" />
	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
	
	<!--My CSS-->
	<link rel="stylesheet" href="css/stile.css" type="text/css" />
	
	<!--Titel-->
	<title>Camera Control Panel</title>
</head>
<body>
	<div class="container-fluid">
		<h1 class="page-header text-center">Camera Control Panel</h1>

		<center><img id="cam_view" class="img-rounded" src="" alt="Camera View" /></center>
		<p>
			<center>
				<button class="left">Left</button>
				<button class="up">Up</button>
				<button class="home">Home</button>
				<button class="down">Down</button>
				<button class="right">Right</button>
			</center>
		</p>
		<p>
			<center>
				<p>
					<span>Speed Pan</span>
					<input class="speedpan" type="number" />
					<button class="set_speedpan">Set</button>
				</p>
			</center>
		</p>
		<p>
			<center>
				<p>
					<span>Create panorama:</span>
					<button class="create_panorama">Go!</button>
				</p>
			</center>
		</p>
		
		<p>
			<center>
				<p>
					<span>Move to archive:</span>
					<button class="move_to_archive">Go!</button>
				</p>
			</center>
		</p>
		
		<p>
			<center>
				<p>
					<span>Clean archive:</span>
					<button class="clean_archive">Go!</button>
				</p>
			</center>
		</p>
		<p>
			<center>
				<p id="feedback"></p>
			</center>
		</p>

		<script src="javascript/constants.js"></script>
		<script src="javascript/ajax.js"></script>
		<script src="javascript/wts_testing.js"></script>
	</div>
</body>

<?php
}
?>