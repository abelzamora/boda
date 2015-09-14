<?php 
session_start();
if($_SESSION["logeado_admin"] != "SI"){
	$error = '<p class="error">Acceso sin codigo no permitido</p>';
	include('admin.php');
	exit;
}
?>

<html>
	<head>
	</head>
	<body>
		<table>
			<tbody>
				<tr>
					<td><?php echo $_SESSION["logeado_admin"];?></td>
					<td><?php echo $_SESSION["name"];?></td>
					<td><a href="registro.php" id="admin">Registro</a></td>
					<td><a href="listado.php" id="admin">Listado</a></td>
				</tr>
			</tbody>
		</table>
	</body>
</html>