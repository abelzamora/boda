<?php
include('config.php');

$asistencia = "";

if(isset($_POST['voy'])){
	$asistencia = "viene";
}else if(isset($_POST['noVoy'])){
	$asistencia = "no viene";
}

$to = "mevsmyself@gmail.com";
$subject = "[BODA] "+ $_POST['name'];

$message = $_POST['name'] + $asistencia;

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: <confirmacion@abelymaria.com>' . "\r\n";
$headers .= 'Cc: mariaza66@hotmail.com' . "\r\n";


//mail($to,$subject,$message,$headers);
?>