<?php

$dsn = "mysql:dbname=controle_usuarios;host=127.0.0.1";
$dbuser = "root";
$dbpass = "P63H65P";

try {
    $pdo = new PDO($dsn, $dbuser, $dbpass);

    $sql = "SELECT * FROM usuarios WHERE id = 1";
    $sql = $pdo->query($sql);
    
    if($sql->rowCount() > 0) {

        foreach($sql->fetchAll() as $usuario){
            echo "Nome: ".$usuario["nome"]." - ".$usuario["email"]."<br/>";
        }

    } else {
        echo "Dados não encontrados!";
    }

} catch(PDOException $e) {
    echo "Falhou: ".$e->getMessage();
}

?>