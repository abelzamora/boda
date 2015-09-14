<?php
include('config.php');
    // Primero comprobamos que ning�n campo est� vac�o y que todos los campos existan.
    if(isset($_POST['name']) && !empty($_POST['name']) &&
    isset($_POST['code']) && !empty($_POST['code']) &&
    isset ($_POST['email']) && !empty($_POST['email'])) {

        // Si entramos es que todo se ha realizado correctamente
        $link = mysql_connect ($dbhost, $dbusername, $dbuserpass);
        mysql_select_db($dbname,$link);
        
        //Comprobamos que el usuario no este dado de alta
        $query = mysql_query("SELECT email FROM ".$dbname." WHERE email = '{$_POST['email']}'") or die(mysql_error());
        $data = mysql_fetch_array($query);

        if($data['email'] != $_POST['email']){
	        // Con esta sentencia SQL insertaremos los datos en la base de datos
	        mysql_query("INSERT INTO ".$dbname." (name,code,email,confirmed)
	        VALUES ('{$_POST['name']}','{$_POST['code']}','{$_POST['email']}',false)",$link);
	
	        // Ahora comprobaremos que todo ha ido correctamente
	        $my_error = mysql_error($link);
	
	        if(!empty($my_error)) {
	
	            $error = "<h3>Ha habido un error al insertar los valores. $my_error </h3>";
	            include('registro.php');
	            exit;
	        } else {
	
	            $ok = "<h3>Los datos han sido introducidos satisfactoriamente</h3>";
	            include('listado.php');
	            exit;
	        }
        }else{
        	$error = "<h3>El usuario ".$_POST['name']." ya esta en la base de datos. $my_error </h3>";
        	include('registro.php');
        	exit;
        	
        }

    } else {
		
        $error = "<h3>Error, no ha introducido todos los datos</h3>";
        include('registro.php');
        exit;
    }
    

    
   function sendEmail($nombre){
   	$saludo = "";
   	if(strpbrk($nombre))
   	$message = "";
   }
?>