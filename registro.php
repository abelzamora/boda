<html>
<head>
<title>Formulario de Registro Invitados</title>
<style type="text/css">
table.db-table          { border-right:1px solid #ccc; border-bottom:1px solid #ccc; }
table.db-table th       { background:#eee; padding:5px; border-left:1px solid #ccc; border-top:1px solid #ccc; }
table.db-table td       { padding:5px; border-left:1px solid #ccc; border-top:1px solid #ccc; }
</style>
</head>

<body>

<?php 
include('config.php');

/* connect to the db */
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

/* show tables */
$query_str = "SELECT * FROM ".$dbname;
$query = mysql_query($query_str) or die(mysql_error());
//while($tableName = mysql_fetch_row($result)) {
 
        //$table = $tableName[0];
       
        echo '<h3>',Asistentes,'</h3>';
        //$result2 = mysql_query('SHOW COLUMNS FROM '.$table) or die('cannot show columns from '.$table);
        //if(mysql_num_rows($result)) {
                echo '<table class="db-table" cellpadding="0" cellspacing="0"><thead><tr><th>Nombre</th><th>Email</th><th>Asiste</th><th>Color Vestido</th><th>Talla de Pie</th><th>Mensaje</th></tr></thead><tbody>';
                
                while($data = mysql_fetch_array($query)){
                        echo '<tr>';
                        //foreach($row2 as $key=>$value) {
                                echo '<td>'.$data['name'].'</td>';
                                echo '<td>'.$data['email'].'</td>';
                                echo asistencia($data['confirmed']);
                                echo '<td>'.$data['colorVestido'].'</td>';
                                echo '<td>'.$data['tallaPie'].'</td>';
                                echo '<td>'.$data['message'].'</td>';
                        //}
                        echo '</tr>';
                }
                echo '</tbody></table><br>';
        //}
//}
?>

<form name="form1" method="post" action="insertar.php">
  Nombre:<br>
  <label>
  <input name="name" type="text" id="name" autocomplete="off">
  </label>
  <p>Codigo:<br>
    <label>
      <input name="code" type="text" id="code" value="<?php echo generateRandomString();?>" autocomplete="off" disabled="disabled">
    </label>
  </p>
  <p>Email:<br>
    <label>
      <input name="email" type="text" id="email" autocomplete="off">
    </label>
  </p>
  <p>
    <label></label>
    <label>
    <input type="submit" name="Submit" value="Enviar Registro">
    </label>
  </p>
</form>
</body>
</html>
<?php 

function asistencia($asistencia){
	if($asistencia == 0) return "<td>NO</td>";
	else return "<td>SI</td>";
}

function generateRandomString($length = 8) {
	$characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
	$charactersLength = strlen($characters);
	$randomString = '';
	for ($i = 0; $i < $length; $i++) {
		$randomString .= $characters[rand(0, $charactersLength - 1)];
	}
	return $randomString;
}
?>