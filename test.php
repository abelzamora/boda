<?php
session_start();
if($_SESSION["logeado"] != "SI"){ 
$error = '<p class="error">Acceso sin codigo no permitido</p>';
	include('login.php');
	exit;
}else{
	$error = '<p class="error">Acceso sin codigo no permitido</p>';
	include('login.php');
	exit;
	
}
?>