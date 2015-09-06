<?php
include('config.php');
    // Primero comprobamos que ning�n campo est� vac�o y que todos los campos existan.
    if(isset($_POST['name']) && !empty($_POST['name']) &&
    isset($_POST['code']) && !empty($_POST['code']) &&
    isset ($_POST['email']) && !empty($_POST['email'])) {

        // Si entramos es que todo se ha realizado correctamente
        $link = mysql_connect ($dbhost, $dbusername, $dbuserpass);
        mysql_select_db($dbname,$link);

        // Con esta sentencia SQL insertaremos los datos en la base de datos
        mysql_query("INSERT INTO usuarios (name,code,email,confirmed)
        VALUES ('{$_POST['name']}','{$_POST['code']}','{$_POST['email']}',false)",$link);

        // Ahora comprobaremos que todo ha ido correctamente
        $my_error = mysql_error($link);

        if(!empty($my_error)) {

            echo "Ha habido un error al insertar los valores. $my_error";

        } else {

            echo "Los datos han sido introducidos satisfactoriamente";

        }

    } else {

        echo "Error, no ha introducido todos los datos";

    }

?>