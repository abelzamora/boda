<?php 
session_start();
if($_SESSION["logeado_admin"] != "SI"){
	$error = '<p class="error">Acceso sin codigo no permitido</p>';
	include('admin.php');
	exit;
}
?>

<html>
	<head>
	<style type="text/css">
		* {
			margin: 0;
			padding: 0;
			outline: 0;
		}
		
		html, body{
			height: 100px;
			background: #F2F2F2;
		}

		body, a{
			font: normal 16px Helvetica, Verdana, Geneva, sans-serif;
			color: #3F3F3F;		
		}
		
		.container{
			min-height: 100%;
			height: auto !important;
			height: 100%;
			margin: 0 auto -30px;
		}
		
		.container:after{
			content: '';
			display: block;
			height: 30px;
			clear: both;
		}
		
		.footer{
			height: 12px;
			padding: 8px 0;
			background: #FFF;
			border-top: 1px solid #51C1F1;
			font-size: 12px;
			text-align: center;
		}
	</style>
		<link rel="stylesheet" href="css/navigataur.css">
		
	<meta charset="utf-8" />
	<meta name="viewport" content="initial-scale=1.0, width=device-width, maximum-scale=1.0, user-scalable=no" /> 
	</head>
	<body>
		<div class="container">
		<div class="header clearfix">
			<h1><?php echo $_SESSION["name"];?></h1>
			
			<div class="nav">
				<input type="checkbox" id="toggle" />
		<label for="toggle" class="toggle"></label>
			<ul class="menu">
					<li><a href="registro.php">Registro</a></li>
					<li><a href="listado.php">Listado</a></li>
			</ul>
		</div>
		</div>
		</div>
		
	</body>
</html>