<!DOCTYPE html5>
<html>
<head>
<title>Conexão com o banco de dados</title>
<meta charset="UTF-8">
</head>
<body>

<?php
    
    /*
    require "config.php";
    require "connection.php";

    $link = DBConnect();

    
    DBClose($link);
    */

    $pdo = new PDO("mysql:host=localhost;user=bios", "root", "");

?>

</body>
</html>