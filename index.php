<?php
    if(!empty($_POST['usuario']) && !empty($_POST['senha'])) {
        $dsn = 'mysql:host=localhost;dbname=php_com_pdo';
        $usuario = 'root';
        $senha = '';

        try {
            $conexao = new PDO($dsn, $usuario, $senha);
        
            $query = "insert into tb_usuarios(nome, email, senha)values('Jorge Sant Ana', 'jorge@teste.com.br','1234')";
            $conexao->query($query); 

            $query = "insert into tb_usuarios(nome, email, senha)values('Leonardo Bernardo', 'leo@teste.com.br','1234')";
            $conexao->query($query);  

            $query = "insert into tb_usuarios(nome, email, senha)values('Francisco Romão Figueiredo', 'francisco@teste.com.br','1234')";
            $conexao->query($query);            

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

