<html>
<head>
<title>Administracion boda Abel y Maria</title>

</head>
<body>
<?php 
				if(isset($error)) echo $error;
			?>
	<form name="form1" method="post" action="admin_entrar.php">
  Nombre:<br>
  <label>
  <input name="name" type="text" id="name" autocomplete="off" autofocus="autofocus" value="">
  </label>
  <p>Codigo:<br>
    <label>
      <input name="code" type="text" id="code" value="" autocomplete="off">
    </label>
  </p>
  <p>
    <label></label>
    <label>
    <input type="submit" name="Submit" value="Enviar Registro">
    </label>
  </p>
</form>
	

</body>
</html>