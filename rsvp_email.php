<?php
include('config.php');
session_start();
$asistencia = "";
$asistencia_str = "";

if (isset($_POST['voy'])) {
    $asistencia = true;
    $asistencia_str = "va a venir";
} else if (isset($_POST['noVoy'])) {
    $asistencia = false;
    $asistencia_str = "NO va a venir";
}


$subject = "[BODA] " . $_POST['name'];

$message = "
<html>
<head>
<title>Confirmacion Asistencia</title>
</head>
<body>
<p>" . $_POST['name'] . ' ' . $asistencia_str . "</p>
<table>
<tr>
<th>Color de Vestido</th>
<th>Talla de Pie</th>
<th>Mensaje</th>
</tr>
<tr>
<td>" . $_POST['color'] . "</td>
<td>" . $_POST['talla'] . "</td>
<td>" . $_POST['mensaje'] . "</td>
</tr>
</table>
</body>
</html>
";
// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$to = $email_boda;
$headers .= 'From: <info@abelymariacom.ipage.com>' . "\r\n";
$headers .= 'Cc: mariaza66@hotmail.com,mevsmyself@gmail.com' . "\r\n";

// Si entramos es que todo se ha realizado correctamente
mysql_select_db($dbname, $link);

$query_str = "UPDATE " . $dbname . " SET name='{$_POST['name']}', email='{$_POST['email']}', colorVestido='{$_POST['color']}', confirmed='$asistencia', tallaPie='{$_POST['talla']}', message='{$_POST['mensaje']}' WHERE ID='{$_SESSION['ID']}'";
$query = mysql_query($query_str);

$my_error = mysql_fetch_array($query);

if (!empty($my_error)) {

    echo "Ha habido un error al insertar los valores. $my_error";

} else {
    mail($to, $subject, $message, $headers);
    //echo "Los datos han sido introducidos satisfactoriamente. $query_str";
    include('rsvp_confirmation.php');
    exit;
}


?>