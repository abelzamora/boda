<?php 
session_start();
if($_SESSION["logeado_admin"] != "SI"){
	$error = '<p class="error">Acceso sin codigo no permitido</p>';
	include('admin.php');
	exit;
}
?>
<!DOCTYPE unspecified PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
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
<?php 

include('config.php');
include('admin_links.php');


/* show tables */
$query_str = "SELECT * FROM ".$dbname;
$query = mysql_query($query_str) or die(mysql_error());

if(isset($error)) echo $error;
else if(isset($ok)) echo $ok;
echo '<h3>',Asistentes,'</h3>';
echo '<table class="db-table" cellpadding="0" cellspacing="0"><thead><tr><th>ID</th><th>Nombre</th><th>Email</th><th>Asiste</th><th>Color Vestido</th><th>Talla de Pie</th><th>Mensaje</th></tr></thead><tbody>';

while($data = mysql_fetch_array($query)){
	echo '<tr>';
	echo '<td>'.$data['ID'].'</td>';
	echo '<td>'.$data['name'].'</td>';
	echo '<td>'.$data['email'].'</td>';
	echo asistencia($data['confirmed']);
	echo '<td>'.$data['colorVestido'].'</td>';
	echo '<td>'.$data['tallaPie'].'</td>';
	echo '<td>'.$data['message'].'</td>';
	echo '</tr>';
}
echo '</tbody></table><br>';



//Return label yes or no
function asistencia($asistencia){
	if($asistencia == 0) return "<td>NO</td>";
	else return "<td>SI</td>";
}
?>
<form name="form1" method="post" action="registro.php">
	<input type="submit" name="Submit" value="Dar de alta">
</form>

</body>
