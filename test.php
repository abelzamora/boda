<?php
$dom = new DOMDocument('1.0');//Create new document

//Create the CSS styles
$css_text = '';
$css_text .= 'body{width:285px;margin:auto;margin-top:50px;}';
$css_text .= '#my_table{border:1px solid #ececec;}';
$css_text .= '#my_table th{border:1px solid #ececec;padding:5px;text-decoration:underline;}';
$css_text .= '#my_table td{border:1px solid #ececec;padding:5px;}';
$css_text .= '#my_table td:first-child{text-align:right;color:#333333;font-weight:bold;color:#999999;}';

$message = '<html><head><style type="text/css" media="all">@IMPORT url("http://abelymariacom.ipage.com/css/email.css");</style></head>';
$message .= '<body><div align="center"><br>';
$message .= 'A';
$message .= 'Se necesitan invitados con o sin experiencia para bodorrio porque...<br>Nos Casamos!!!!<br>Y como testigos nuestros que sois no podeis faltar.<br><br>Todos los detalles del bodorrio estan en la página web que hemos hecho.<br>';
$message .= '<a href="http://www.abelymaria.com">Enlace a la boda</a><br>';
$message .= 'Para entrar, tenéis que utilizar este código generado sólo para tí: ';
$message .= '.';
$message .= '<br>Por favor, confirmad vuestra asistencia antes del 15-07-2016.<br><br>NO FALTÉIS!!!<br>Muchos besos y abrazos.<br>Abel y María.';
$message .= '</div></body></html>';

echo $dom->saveHTML();
?>