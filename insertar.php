<?php
include('config.php');
    if(isset($_POST['name']) && !empty($_POST['name']) &&
    isset($_POST['code']) && !empty($_POST['code']) &&
    isset ($_POST['email']) && !empty($_POST['email'])) {        
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
	        	sendEmail();
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
  
    function getName(){
    	if (strpos($_POST['name'],' y ') !== false) {
    		$str = "Queridos ".$_POST['name'].",<br>";
    	}else{
    		$str = "Querido ".$_POST['name'].",<br>";
    	}
    		
    	return $str;
    }
    
    
   function sendEmail(){
   		$message = '<html><head><style type="text/css" media="all">@IMPORT url("http://abelymariacom.ipage.com/css/email.css");</style></head>';
   		$message .= '<body><div align="center"><br>';
   		$message .= getName();
   		$message .= 'Se necesitan invitados con o sin experiencia para bodorrio porque...<br>Nos Casamos!!!!<br>Y como testigos nuestros que sois no podeis faltar.<br><br>Todos los detalles del bodorrio estan en la pagina web que hemos hecho.<br>';
   		$message .= '<a href="http://abelymariacom.ipage.com/login.php">Enlace a la boda</a><br>';
   		$message .= 'Para entrar, teneis que utilizar este codigo unico: ';
   		$message .= $_POST['code'].'.';
   		$message .= '<br>Por favor, confirmad vuestra asistencia antes del XX.<br><br>NO FALTEIS!!!<br>Muchos besos y abrazos.<br>Abel y Maria.';
   		$message .= '</div></body></html>';
   		
   		$to = $_POST['email'];
   		$subject = "Invitacion boda Maria y Abel 2016";
   		
   		// Always set content-type when sending HTML email
   		$headers = "MIME-Version: 1.0" . "\r\n";
   		$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
   		
   		// More headers
   		$headers .= 'From: <info@abelymariacom.ipage.com>' . "\r\n";
   		$headers .= 'Cc: mariaza66@hotmail.com, mevsmyself@gmail.com' . "\r\n";
   		
   		
   		
   		mail($to,$subject,$message,$headers);
   }
?>