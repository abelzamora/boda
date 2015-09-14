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
	$dbname='boda';
}
?>