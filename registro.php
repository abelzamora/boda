<?php
session_start();
if ($_SESSION["logeado_admin"] != "SI") {
    $error = '<p class="error">Acceso sin codigo no permitido</p>';
    include('admin.php');
    exit;
}

include('admin_links.php');


//Generate a random code number
function generateRandomString($length = 8)
{
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}

if (isset($error)) echo $error;
else if (isset($ok)) echo $ok;
?>

<html>
<head>
    <title>Formulario de Registro Invitados</title>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300' rel='stylesheet' type='text/css'>
    <style type="text/css">
        .form-style-8 {
            font-family: 'Open Sans Condensed', arial, sans;
            width: 500px;
            padding: 30px;
            background: #FFFFFF;
            margin: 50px auto;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.22);
            -moz-box-shadow: 0 0 15px rgba(0, 0, 0, 0.22);
            -webkit-box-shadow: 0 0 15px rgba(0, 0, 0, 0.22);

        }

        .form-style-8 h2 {
            background: #4D4D4D;
            text-transform: uppercase;
            font-family: 'Open Sans Condensed', sans-serif;
            color: #797979;
            font-size: 18px;
            font-weight: 100;
            padding: 20px;
            margin: -30px -30px 30px -30px;
        }

        .form-style-8 input[type="text"],
        .form-style-8 input[type="date"],
        .form-style-8 input[type="datetime"],
        .form-style-8 input[type="email"],
        .form-style-8 input[type="number"],
        .form-style-8 input[type="search"],
        .form-style-8 input[type="time"],
        .form-style-8 input[type="url"],
        .form-style-8 input[type="password"],
        .form-style-8 textarea,
        .form-style-8 select {
            box-sizing: border-box;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            outline: none;
            display: block;
            width: 100%;
            padding: 7px;
            border: none;
            border-bottom: 1px solid #ddd;
            background: transparent;
            margin-bottom: 10px;
            font: 16px Arial, Helvetica, sans-serif;
            height: 45px;
        }

        .form-style-8 textarea {
            resize: none;
            overflow: hidden;
        }

        .form-style-8 input[type="button"],
        .form-style-8 input[type="submit"] {
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

        .form-style-8 input[type="button"]:hover,
        .form-style-8 input[type="submit"]:hover {
            background: linear-gradient(to bottom, #34CACA 5%, #30C9C9 100%);
            background-color: #34CACA;
        }
    </style>
</head>

<body>

<form name="form1" method="post" action="insertar.php">
    <div class="form-style-8">
        Nombre:<br>
        <input title="Nombre" name="name" type="text" id="name" autocomplete="off" autofocus="autofocus"
               value="<?php echo $_POST['name']; ?>">

        <p>Codigo:<br>
            <input title="Codigo" name="code" type="text" id="code" value="<?php echo generateRandomString(); ?>" autocomplete="off">
        </p>

        <p>Email:<br>
            <input title="Email" name="email" type="email" id="email" autocomplete="off" value="<?php echo $_POST['email']; ?>">
        </p>

        <p>
            <input title="Enviar" type="submit" name="Submit" value="Enviar Registro">
        </p>
    </div>
</form>
</body>
<?php include_once("analyticstracking.php") ?>
</html>
