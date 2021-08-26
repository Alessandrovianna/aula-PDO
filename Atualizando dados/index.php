<?php

$dsn = "mysql:dbname=controle_usuarios;host=127.0.0.1";
$dbuser = "root";
$dbpass = "P63H65P";

try {
    $pdo = new PDO($dsn, $dbuser, $dbpass);

    $sql = "UPDATE usuarios SET nome = 'Alessandro' WHERE id = '3'";
    $sql = $pdo->query($sql);
    echo "Nome alterado com sucesso!";

} catch(PDOException $e) {
    echo "Falhou: ".$e->getMessage();
}

?>