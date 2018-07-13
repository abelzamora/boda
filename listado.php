<?php
session_start();
if ($_SESSION["logeado_admin"] != "SI") {
    $error = '<p class="error">Acceso sin codigo no permitido</p>';
    include('admin.php');
    exit;
}
?>
<!DOCTYPE unspecified PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <meta charset="UTF-8" name=viewport content="width=device-width, initial-scale=1">
    <title>Formulario de Registro Invitados</title>
    <style type="text/css">
        table.flat-table {
            display: block;
            font-family: sans-serif;
            -webkit-font-smoothing: antialiased;
            font-size: 115%;
            overflow: auto;
            width: auto;
        }

        table.flat-table th {
            background-color: rgb(112, 196, 105);
            color: white;
            font-weight: normal;
            padding: 20px 30px;
            text-align: center;
        }

        table.flat-table td {
            background-color: rgb(238, 238, 238);
            color: rgb(111, 111, 111);
            padding: 20px 30px;
        }

        input[type="submit"] {
            -moz-box-shadow: inset 0 1px 0 0 rgb(112, 196, 105);
            -webkit-box-shadow: inset 0 1px 0 0 rgb(112, 196, 105);
            box-shadow: inset 0 1px 0 0 rgb(112, 196, 105);
            background-color: rgb(112, 196, 105);
            border: 1px solid rgb(112, 196, 105);
            display: inline-block;
            cursor: pointer;
            color: #FFFFFF;
            font-family: 'Open Sans Condensed', sans-serif;
            font-size: 14px;
            padding: 8px 18px;
            text-decoration: none;
            text-transform: uppercase;
        }
    </style>
</head>

<body>
<?php

include('config.php');
include('admin_links.php');


/* show tables */
$query_str = "SELECT * FROM " . $dbname . " order by ID";
$query = mysql_query($query_str) or die(mysql_error());

if (isset($error)) echo $error;
else if (isset($ok)) echo $ok;
echo '<table class="flat-table"><tr><th>ID</th><th>Nombre</th><th>Email</th><th>Asiste</th><th>Color Vestido</th><th>Talla de Pie</th><th>Mensaje</th></tr><tbody>';

while ($data = mysql_fetch_array($query)) {
    echo '<tr>';
    echo '<td>' . $data['ID'] . '</td>';
    echo '<td>' . $data['name'] . '</td>';
    echo '<td>' . $data['email'] . '</td>';
    echo asistencia($data['confirmed']);
    echo '<td>' . $data['colorVestido'] . '</td>';
    echo '<td>' . $data['tallaPie'] . '</td>';
    echo '<td>' . $data['message'] . '</td>';
    echo '</tr>';
}
echo '</tbody></table><br>';


//Return label yes or no
function asistencia($asistencia)
{
    if ($asistencia == 0) return "<td>NO</td>";
    else return "<td>SI</td>";
}

?>

<form name="form1" method="post" action="listado_export.php">
    <input type="submit" name="submit" value="Generar Excel">
</form>

</body>
<?php include_once("analyticstracking.php") ?>
</html>
