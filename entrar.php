<?
// Configura los datos de tu cuenta
include('config.php');

session_start();

$code=$_POST['code'];
if (!empty($code)) {
	
		$query = mysql_query("SELECT email,name,ID FROM ".$dbname." WHERE code = '$code'") or die(mysql_error());
		$data = mysql_fetch_array($query);
		
		if($data['email'] == null || $data['email'] == "") {
			$error = '<p class="error">El codigo no es correcto</p>';
			include('login.php');
			exit;
		}else{
			$_SESSION["name"] = $data['name'];
			$_SESSION["email"] = $data['email'];
			$_SESSION["ID"] = $data['ID'];
			$_SESSION["code"] = $code;
			$_SESSION["logeado"] = "SI";
			include('general.php');
			exit;
		}
	
}else{
	$error = '<p class="error">El codigo esta vacio</p>';
	include('login.php');
	exit;
}
?> 
