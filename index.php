<?php
    if(!empty($_POST['usuario']) && !empty($_POST['senha'])) {
        $dsn = 'mysql:host=localhost;dbname=php_com_pdo';
        $usuario = 'root';
        $senha = '';

        try {
            $conexao = new PDO($dsn, $usuario, $senha);

            // query
            $query = "select * from tb_usuarios where";
            $query .= "email = '{$_POST['usuario']}'";
            $query .= " AND senha = '{$_POST['senha']}'";
            echo $query;

            $stmt = $conexao->query($query);
            $usuario = $stmt->fetch();

        } catch (PDOException $e) {
            echo 'Erro: ' . $e->getCode() . ' - Mensagem: ' . $e->getMessage();
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login</title>
    </head>
    <body>
        <form action="">
            <input type="text" placeholder="usuario" name="usuario">
            <br/>
            <input type="password" name="senha" id="" placeholder="senha">
            <br/>
            <button type="submit">Entrar</button>
        </form>
    </body>
</html>

