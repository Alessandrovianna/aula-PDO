<?php

$dsn = "mysql:dbname=controle_usuarios;host=127.0.0.1";
$dbuser = "root";
$dbpass = "P63H65P";

try {
    $pdo = new PDO($dsn, $dbuser, $dbpass);

    $nome = "Ciclanp";
    $email = "ciclano@gmail.com";
    $senha = md5("1234");

    $sql = "INSERT INTO usuarios SET nome = '$nome', email = '$email', senha = '$senha'";
    $sql = $pdo->query($sql);

    //Pegando o id do usuario inserido
    echo "Usuario inserido: ".$pdo->lastInsertId();

} catch(PDOException $e) {
    echo "Falhou: ".$e->getMessage();
}

?>