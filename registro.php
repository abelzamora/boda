
<?php		
session_start();
if($_SESSION["logeado_admin"] != "SI"){
	$error = '<p class="error">Acceso sin codigo no permitido</p>';
	include('admin.php');
	exit;
}

include('admin_links.php');
			


				//Generate a random code number
                function generateRandomString($length = 8) {
                	$characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
                	$charactersLength = strlen($characters);
                	$randomString = '';
                	for ($i = 0; $i < $length; $i++) {
                		$randomString .= $characters[rand(0, $charactersLength - 1)];
                	}
                	return $randomString;
                }
                
                if(isset($error)) echo $error;
				else if(isset($ok)) echo $ok;
?>

<html>
<head>
<title>Formulario de Registro Invitados</title>
<style type="text/css">
table.db-table          { border-right:1px solid #ccc; border-bottom:1px solid #ccc; }
table.db-table th       { background:#eee; padding:5px; border-left:1px solid #ccc; border-top:1px solid #ccc; }
table.db-table td       { padding:5px; border-left:1px solid #ccc; border-top:1px solid #ccc; }
</style>
</head>

<body>

<form name="form1" method="post" action="insertar.php">
  Nombre:<br>
  <label>
  <input name="name" type="text" id="name" autocomplete="off" autofocus="autofocus" value="<?php echo $_POST['name'];?>">
  </label>
  <p>Codigo:<br>
    <label>
      <input name="code" type="text" id="code" value="<?php echo generateRandomString();?>" autocomplete="off">
    </label>
  </p>
  <p>Email:<br>
    <label>
      <input name="email" type="text" id="email" autocomplete="off" value="<?php echo $_POST['email'];?>">
    </label>
  </p>
  <p>
    <label></label>
    <label>
    <input type="submit" name="Submit" value="Enviar Registro">
    </label>
  </p>
</form>
<form name="listado" method="post" action="listado.php">
	<input type="submit" name="listado" value="Listado">
</form>
</body>
</html>
