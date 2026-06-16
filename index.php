<?php

$dsn = 'mysql:host=localhost;dbname=php_com_pdo';
$usuario = 'root';
$senha = '';

try {

    $conexao = new PDO($dsn, $usuario, $senha);
    $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Criação da tabela
    $query = "
        CREATE TABLE IF NOT EXISTS tb_usuarios (
            id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
            nome VARCHAR(50) NOT NULL,
            email VARCHAR(100) NOT NULL,
            senha VARCHAR(32) NOT NULL
        )
    ";

    $conexao->exec($query);

    // Inserções
    $query = "
        INSERT INTO tb_usuarios (nome, email, senha)
        VALUES ('Leonardo', 'leodesenvolvedor@gmail.com', '123456')
    ";
    echo $conexao->exec($query) . "<br>";

    $query = "
        INSERT INTO tb_usuarios (nome, email, senha)
        VALUES ('Jose Rivaldo', 'josedesenvolvedor@gmail.com', '654321')
    ";
    echo $conexao->exec($query) . "<br>";

    $query = "
        INSERT INTO tb_usuarios (nome, email, senha)
        VALUES ('Romario', 'romariode@gmail.com', '654321')
    ";
    echo $conexao->exec($query) . "<br>";

    $query = "
        INSERT INTO tb_usuarios (nome, email, senha)
        VALUES ('Jose Romildo', 'romildodesenvolvedor@gmail.com', '654321')
    ";
    echo $conexao->exec($query) . "<br>";

    echo "Registros inseridos com sucesso!";

} catch (PDOException $e) {

    echo 'Erro: ' . $e->getCode() . ' - Mensagem: ' . $e->getMessage();

}

?>