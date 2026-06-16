<?php

$dsn = 'mysql:host=localhost;dbname=php_com_pdo';
$usuario = 'root';
$senha = '';

try {

    $conexao = new PDO($dsn, $usuario, $senha);

    $query = '
        select * from tb_usuarios
    ';

    $conexao->query($query);

} catch (PDOException $e) {

    echo 'Erro: ' . $e->getCode() . ' - Mensagem: ' . $e->getMessage();

}

?>