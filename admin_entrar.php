<?
// Configura los datos de tu cuenta
include('config.php');

$code=$_POST['code'];
if (!empty($code)) {
	//Comprobacion del envio del nombre de usuario y password
	
		$query_str = "SELECT email,name,ID FROM ".$dbname." WHERE code = '$code' and name ='{$_POST['name']}'";
		$query = mysql_query($query_str) or die('Error de conexion '.mysql_error().$query_str);
		$data = mysql_fetch_array($query);
		
		if($data['email'] == null || $data['email'] == "") {
			$error = '<p class="error">El codigo no es correcto</p>';
			include('admin.php');
			exit;
		}else{
			session_start();session_save_path('/home/users/web/b1070/ipg.abelymariacom');
			$_SESSION["name"] = $data['name'];
			$_SESSION["email"] = $data['email'];
			$_SESSION["ID"] = $data['ID'];
			$_SESSION["code"] = $code;
			$_SESSION["logeado_admin"] = "SI";
			//session_write_close();
			//session_regenerate_id(true);
			include('listado.php');
			exit;
		}
	
}else{
	$error = '<p class="error">El codigo esta vacio</p>';
	include('admin.php');
	exit;
}
?> 
