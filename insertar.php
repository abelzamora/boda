<?php
include('config.php');
if (isset($_POST['name']) && !empty($_POST['name']) &&
    isset($_POST['code']) && !empty($_POST['code']) &&
    isset ($_POST['email']) && !empty($_POST['email'])
) {
    //Comprobamos que el usuario no este dado de alta
    $query = mysql_query("SELECT email FROM " . $dbname . " WHERE email = '{$_POST['email']}'") or die(mysql_error());
    $data = mysql_fetch_array($query);

    if ($data['email'] != $_POST['email']) {
        // Con esta sentencia SQL insertaremos los datos en la base de datos
        mysql_query("INSERT INTO " . $dbname . " (name,code,email,confirmed)
	        VALUES ('{$_POST['name']}','{$_POST['code']}','{$_POST['email']}',false)", $link);

        // Ahora comprobaremos que todo ha ido correctamente
        $my_error = mysql_error($link);

        if (!empty($my_error)) {

            $error = "<h3>Ha habido un error al insertar los valores. $my_error </h3>";
            include('registro.php');
            exit;
        } else {
            sendEmail();
            $ok = "<h3>Los datos han sido introducidos satisfactoriamente</h3>";
            include('listado.php');
            exit;
        }
    } else {
        $error = "<h3>El usuario " . $_POST['name'] . " ya esta en la base de datos. $my_error </h3>";
        include('registro.php');
        exit;

    }

} else {

    $error = "<h3>Error, no ha introducido todos los datos</h3>";
    include('registro.php');
    exit;
}

function getName()
{
    if (strpos($_POST['name'], ' y ') !== false) {
        $str = "Queridos " . $_POST['name'] . ",<br>";
    } else {
        $str = "Querido " . $_POST['name'] . ",<br>";
    }

    $str .= "Se necesitan invitados con o sin experiencia para bodorrio porque...<br>Nos Casamos!!!!<br>Y como testigos nuestros que sois no podeis faltar.<br><br>Todos los detalles del bodorrio estan en la página web que hemos hecho.<br><a href=\"http://www.abelymaria.com\">Enlace a la boda</a><br>";

    return $str;
}

function getCode()
{
    $str = "Para entrar, tenéis que utilizar este código generado sólo para tí: " . $_POST['code'] . ".<br>";
    $str .= "Por favor, confirmad vuestra asistencia antes del 15-07-2016.<br><br>NO FALTÉIS!!!<br>Muchos besos y abrazos.<br>Abel y María.";
    return $str;
}


function sendEmail()
{
    $message = '<html><head><style type="text/css" media="all">div { font-family: sans-serif; }  body {  background: radial-gradient(circle closest-side at 60% 43%, #F8F8F8 26%, rgba(0, 0, 0, 0) 27%), radial-gradient(circle closest-side at 40% 43%, #F8F8F8 26%, rgba(0, 0, 0, 0) 27%), radial-gradient(circle closest-side at 40% 22%, #E0E0E0 45%, rgba(221, 51, 85, 0) 46%), radial-gradient(circle closest-side at 60% 22%, #E0E0E0 45%, rgba(221, 51, 85, 0) 46%), radial-gradient(circle closest-side at 50% 35%, #E0E0E0 30%, rgba(221, 51, 85, 0) 31%), radial-gradient(circle closest-side at 60% 43%, #F8F8F8 26%, rgba(0, 0, 0, 0) 27%) 50px 50px, radial-gradient(circle closest-side at 40% 43%, #F8F8F8 26%, rgba(187, 0, 51, 0) 27%) 50px 50px, radial-gradient(circle closest-side at 40% 22%, #E0E0E0 45%, rgba(221, 51, 85, 0) 46%) 50px 50px, radial-gradient(circle closest-side at 60% 22%, #E0E0E0 45%, rgba(221, 51, 85, 0) 46%) 50px 50px, radial-gradient(circle closest-side at 50% 35%, #E0E0E0 30%, rgba(221, 51, 85, 0) 31%) 50px 50px; background-color: #F8F8F8; background-size: 100px 100px;  }</style></head>';
    $message .= '<body style="background-color:#F8F8F8;background-image:none;background-repeat:repeat;background-position:60% 43%;background-attachment:scroll;background-size:100px 100px;" ><div align="center" style="font-family:cursive;font-size:xx-large;" ><br>';
    $message .=  getName();
    $message .=  getCode() ;
    $message .= '</div></body></html>';

    $to = $_POST['email'];
    $subject = "Invitación boda María y Abel 2016";

    // Always set content-type when sending HTML email
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

    // More headers
    $headers .= 'From: <invitaciones@abelymariacom.ipage.com>' . "\r\n";
    $headers .= 'Cc: mariaza66@hotmail.com, mevsmyself@gmail.com' . "\r\n";


    mail($to, $subject, $message, $headers);
}

?>