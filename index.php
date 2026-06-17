<?php

$dsn = 'mysql:host=localhost;dbname=php_com_pdo';
$usuario = 'root';
$senha = '';

try {

    $conexao = new PDO($dsn, $usuario, $senha);
} catch (PDOException $e) {
    echo 'Erro: ' . $e->getCode() . ' - Mensagem: ' . $e->getMessage();
}

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login</title>
    </head>
    <body>
        <form action="">
            <input type="text" placeholder="usuario">
            <input type="password" name="" id="" placeholder="senha">
            <button type="submit">entrar</button>
        </form>
    </body>
</html>

?>