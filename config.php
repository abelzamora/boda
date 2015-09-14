<?php
if(gethostname() == "Abels-MacBook-Pro.local"){
	$dbhost='localhost';
	$port='3306';
	$dbusername='root';
	$dbuserpass='root';
	$dbname='users.boda';
}else{
	$dbhost='abelymariacom.ipagemysql.com';
	$port='3306';
	$dbusername='abel';
	$dbuserpass='abel';
	$dbname='boda.boda';
}

$link = mysql_connect($dbhost, $dbusername, $dbuserpass);
if (!$link) {
	die('Could not connect: ' . mysql_error());
}
?>