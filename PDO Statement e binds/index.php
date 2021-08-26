<?php

$dsn = "mysql:dbname=controle_usuarios;host=127.0.0.1";
$dbuser = "root";
$dbpass = "P63H65P";

try {
    $pdo = new PDO($dsn, $dbuser, $dbpass);

    $nome = 'Alessandro';
    $id = 10;
    //Os dois pontos (:) eu estou avisando para o PDO que vou mandar uma variavel
    $sql = "UPDATE usuarios SET nome = :nome WHERE id = :id";
    $sql = $pdo->prepare($sql);
    $sql->bindValue(':nome',$nome);
    $sql->bindValue(':id',$id);
    $sql->execute();

    echo "Usuario atualizado com sucesso!";

} catch(PDOException $e) {
    echo "Falhou: ".$e->getMessage();
}

?>