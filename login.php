<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>Maria & Abel</title>
		<link rel="stylesheet" href="css/login_style.css">
		<script src="js/login_prefixfree.min.js"></script>

    
  </head>

  <body>

    <div class="body"></div>
		<div class="grad"></div>
		<div class="header">
			<div>Maria<span>Abel</span></div>
		</div>
		<br>

		<form name="form1" method="post" action="entrar.php">
			<div class="login">
			<?php 
				if(isset($error)) echo $error;
			?>
					<input type="text" placeholder="codigo" name="code" autocomplete="off"><br>
					<input type="submit" value="Entrar">
			</div>
		</form>
    <script src='js/login_jquery.js'></script>
 
    
  </body>
  <?php include_once("analyticstracking.php") ?>
</html>
