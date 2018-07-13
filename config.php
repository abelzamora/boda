<?php
if (gethostname() == "Abels-MacBook-Pro.local") {
    $dbhost = 'localhost';
    $port = '3306';
    $dbusername = 'root';
    $dbuserpass = 'root';
    $dbname = 'users.boda';
} else {
    $dbhost = 'abelymariacom.ipagemysql.com';
    $port = '3306';
    $dbusername = 'abel';
    $dbuserpass = 'abel';
    $dbname = 'boda.boda';
}

$link = mysql_connect($dbhost, $dbusername, $dbuserpass);
if (!$link) {
    die('Could not connect: ' . mysql_error());
}

// Variables for email
$email_abel = 'mevsmyself@gmail.com';
$email_maria = 'mariaza66@hotmail.com';
$email_boda = 'info@abelymariacom.ipage.com';

?>