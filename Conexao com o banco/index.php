<?php

$dsn = "mysql:dbname=controle_usuarios;host=127.0.0.1";
$dbuser = "root";
$dbpass = "P63H65P";

try {
    $pdo = new PDO($dsn, $dbuser, $dbpass);

    echo "Conexão estabelecida com sucesso";

} catch(PDOException $e) {
    echo "Falhou a conexão: ".$e->getMessage();
}

?>
