<?php

function getCode()
{
    include('config.php');
    if (!empty($_GET['id'])) {
        $query_str = "SELECT code FROM " . $dbname . " WHERE ID = {$_GET['id']}";
        $query = mysql_query($query_str) or die(mysql_error());
        $data = mysql_fetch_array($query);

        return $data['code'];
    }else{
        return null;
    }

}

function getName()
{
    include('config.php');
    if (!empty($_GET['id'])) {
        $query_str = "SELECT name FROM " . $dbname . " WHERE ID = {$_GET['id']}";
        $query = mysql_query($query_str) or die(mysql_error());
        $data = mysql_fetch_array($query);

        if (strpos($data['name'], ' y ') !== false) {
            $str = "Queridos " . $data['name'] . ",<br>";
        } else {
            $str = "Querido " . $data['name'] . ",<br>";
        }

        return $str;

    }else{
        return null;
    }
}

?>
<html>
<head>
    <style type="text/css" media="all">@IMPORT url("css/email.css");</style>
</head>
<body>
<div align="center"><br>
    <?php echo getName(); ?>
    Se necesitan invitados con o sin experiencia para bodorrio porque...<br>Nos Casamos!!!!<br>Y como testigos nuestros
    que sois no podeis faltar.<br><br>Todos los detalles del bodorrio estan en la pagina web que hemos hecho.<br>
    <a href="http://abelymariacom.ipage.com/login.php">Enlace a la boda</a><br>
    Para entrar, teneis que utilizar este codigo unico: <?php echo getCode(); ?>.
    <br>Por favor, confirmad vuestra asistencia antes del XX.<br><br>NO FALTEIS!!!<br>Muchos besos y abrazos.<br>Abel y
    Maria.
</div>
</body>
</html>
