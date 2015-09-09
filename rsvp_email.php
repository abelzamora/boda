<?php
include('config.php');
session_start();
$asistencia = "";
$asistencia_str = "";

if(isset($_POST['voy'])){
	$asistencia = true;
	$asistencia_str = "va a venir";
}else if(isset($_POST['noVoy'])){
	$asistencia = false;
	$asistencia_str = "NO va a venir";
}

$to = "mevsmyself@gmail.com";
$subject = "[BODA] ". $_POST['name'];

//$message = $_POST['name'] .' '. $asistencia_str . "\nColor de vestido: " . $_POST['color'] . "\nTalla de pie: " . $_POST['talla'] . "\nMensaje:" . $_POST['mensaje'];
$message = "
<html>
<head>
<title>Confirmacion Asistencia</title>
</head>
<body>
<p>".$_POST['name'].' '.$asistencia_str."</p>
<table>
<tr>
<th>Color de Vestido</th>
<th>Talla de Pie</th>
<th>Mensaje</th>
</tr>
<tr>
<td>".$_POST['color']."</td>
<td>".$_POST['talla']."</td>
<td>".$_POST['mensaje']."</td>
</tr>
</table>
</body>
</html>
";
// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: <confirmacion@abelymaria.com>' . "\r\n";
$headers .= 'Cc: mariaza66@hotmail.com' . "\r\n";

// Si entramos es que todo se ha realizado correctamente
$link = mysql_connect ($dbhost, $dbusername, $dbuserpass);
mysql_select_db($dbname,$link);

$query_str = "UPDATE users.boda SET name='{$_POST['name']}', email='{$_POST['email']}', colorVestido='{$_POST['color']}', confirmed='$asistencia', tallaPie='{$_POST['talla']}', message='{$_POST['mensaje']}' WHERE ID='{$_SESSION['ID']}'";
$query = mysql_query($query_str,$link);

$my_error = mysql_error($link);

if(!empty($my_error)) {

	echo "Ha habido un error al insertar los valores. $my_error";

} else {
	mail($to,$subject,$message,$headers);
	//echo "Los datos han sido introducidos satisfactoriamente. $message";
	include('rsvp_confirmation.php');
	exit;
}


?>