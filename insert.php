<?php

require_once 'conexao.php';

$contato = array('nome'       => 'João',
                 'sobrenome'  => 'Silva',
                 'endereco'   => 'Rua Pindorama 89',
                 'telefone'   => '17 997542378',
                 'email'      => 'jsilva@mail.com',
                 'nascimento' => '1976-10-23');

$query = "INSERT INTO `contato` (nome, sobrenome, endereco, telefone, email, nascimento) VALUES(:nome, :sobrenome, :endereco, :telefone, :email, :nascimento)";
$stmt = $pdo->prepare($query);
$stmt->bindParam(':nome', $contato['nome']);
$stmt->bindParam(':sobrenome', $contato['sobrenome']);
$stmt->bindParam(':endereco', $contato['endereco']);
$stmt->bindParam(':telefone', $contato['telefone']);
$stmt->bindParam(':email', $contato['email']);
$stmt->bindParam(':nascimento', $contato['nascimento']);
$stmt->execute();
echo 'Quantidades de registros: ' . $stmt->rowCount() . '<br />';
echo 'ID do último registro inserido: ' . $pdo->lastInsertId();

$stmt = null;
$pdo = null;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome" />
        <br />
        <label for="sobrenome">Sobrenome:</label>
        <input type="text" name="sobrenome" id="sobrenome" />
        <br />
        <label for="endereco">Endereço:</label>
        <input type="text" name="endereco" id="endereco" />
        <br />
        <label for="telefone">Telefone:</label>
        <input type="text" name="telefone" id="telefone" />
        <br />
        <label for="email">Email:</label>
        <input type="text" name="email" id="email" />
        <br />
        <label for="nascimento">Nascimento:</label>
        <input type="text" name="nascimento" id="nascimento" />
        <br />
        <input type="submit" value="Enviar" />
    </form>
</body>
</html>
