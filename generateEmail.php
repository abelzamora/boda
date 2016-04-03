<?php

function getCode()
{
    include('config.php');
    if (!empty($_GET['id'])) {
        $query_str = "SELECT code FROM " . $dbname . " WHERE ID = {$_GET['id']}";
        $query = mysql_query($query_str) or die(mysql_error());
        $data = mysql_fetch_array($query);

        return $data['code'];
    }else{
        return null;
    }

}

function getName()
{
    include('config.php');
    if (!empty($_GET['id'])) {
        $query_str = "SELECT name FROM " . $dbname . " WHERE ID = {$_GET['id']}";
        $query = mysql_query($query_str) or die(mysql_error());
        $data = mysql_fetch_array($query);

        if (strpos($data['name'], ' y ') !== false) {
            $str = "Queridos " . $data['name'] . ",<br>";
        } else {
            $str = "Querido " . $data['name'] . ",<br>";
        }

        return $str;

    }else{
        return null;
    }
}

?>
<html>
<head>
    <style type="text/css" media="all">@IMPORT url("css/email.css");</style>
    <script type="text/javascript">

    </script>
</head>
<body>


</body>
</html>
