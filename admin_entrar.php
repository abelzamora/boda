<?
// Configura los datos de tu cuenta
include('config.php');

session_start();

// Conectar a la base de datos
mysql_connect ($dbhost, $dbusername, $dbuserpass);
$link = mysqli_init();
$success = mysqli_real_connect(
		$link,
		$host,
		$user,
		$password,
		$db,
		$port
) or die('Error al seleccionar la base de datos');
//mysql_select_db($dbname) or die('No se puede seleccionar la base de datos a');

$code=$_POST['code'];
if (!empty($code)) {
	//Comprobacion del envio del nombre de usuario y password
	
		$query = mysql_query("SELECT email,name,ID FROM ".$dbname." WHERE code = '$code' and name ='{$_POST['name']}'") or die(mysql_error());
		$data = mysql_fetch_array($query);
		
		if($data['email'] == null || $data['email'] == "") {
			$error = '<p class="error">El codigo no es correcto</p>';
			include('admin.php');
			exit;
		}else{
			$_SESSION["name"] = $data['name'];
			$_SESSION["email"] = $data['email'];
			$_SESSION["ID"] = $data['ID'];
			$_SESSION["code"] = $code;
			$_SESSION["logeado_admin"] = "SI";
			include('listado.php');
			exit;
		}
	
}else{
	$error = '<p class="error">El codigo esta vacio</p>';
	include('admin.php');
	exit;
}
?> 
