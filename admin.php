<html>
<head>
<title>Administracion boda Abel y Maria</title>
<link rel="stylesheet" href="css/style_admin.css">
</head>
<body>

<div class="container">

  <div id="login-form">

<h3>Login</h3>

    <fieldset>

		<form name="form1" method="post" action="admin_entrar.php">
			<input name="name" required="required" type="text" id="name" autocomplete="off" value="Name" onBlur="if(this.value=='')this.value='Name'" onFocus="if(this.value=='Name')this.value='' ">
			<input name="code" type="password" required="required" id="code" value="Code" autocomplete="off" onBlur="if(this.value=='')this.value='Code'" onFocus="if(this.value=='Code')this.value='' "> 
			<?php
				if (isset ( $error ))
					echo $error;
				?>
			<input type="submit" name="Submit" value="Entrar">
		</form>
	</fieldset>
</div>
</div>

</body>
<?php include_once("analyticstracking.php") ?>
</html>