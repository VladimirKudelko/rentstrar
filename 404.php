<?php @require_once 'config/config.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Rentstar.by</title>
	<!--Import Google Icon Font-->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<!--Import materialize.css-->
	<link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<!--Let browser know website is optimized for mobile-->
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<link rel="icon" href="favicon.jpg" type="images/x-icon">
	<style type="text/css">
		body{
			background-color: #F6BA8C;
		}
		#block-error{
			width: 60%;
			height: 400px;
			border-radius: 5px;
			background-color: #FFFFFF;
			margin-left: 20%;
			margin-top: 10%;
			box-shadow: 0 0 10px rgba(0,0,0,0.5);
			text-align: center;
		}
		#block-error img{
			margin-top: 50px;
		}
	</style>
</head>
<body>
	<div id="block-error">
		<img src="img/404.png" width="128" height="128" alt="404-error" />
		<h3>404</h3>
		<p style="color: #A37B5D;font-size: 1.2em;">Страница, которую вы ищете отсутствует</p>
	</div>
	
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
  	<script type="text/javascript" src="js/materialize.min.js"></script>
</body>
</html>