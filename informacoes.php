<!DOCTYPE html5>
<html>
<head>
<title>Teste HTML5</title>
<meta charset="UTF-8"/>
<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
<form method="post" action="informacoes.php">
<p><label for="nome" id="txtName">Nome</label>
<input type="text" name="name" id="txtName"/></p>
<p><label for="email" id="email">Email</label>
<input type="email" name="email" id="txtEmail"/></p>
<input id="botao" type="submit" value="Enviar"/>
</form>



<?php
try{
    $pdo = new PDO("mysql:host=localhost;dbname=teste", "root", "");
}catch(PDOException $ex){
    throw $ex;
}

$nome = $_POST["name"];
$email = $_POST["email"];

$inserirUsuario=$pdo->prepare("insert into pessoa (nome, email) values (:nome, :email)");
//$inserirUsuario->bindValue(":nome", $nome);
//$inserirUsuario->bindValue(":email", $email);
$inserirUsuario->execute(array(':nome' => $nome, ':email' => $email));


?>

</body>
</html>