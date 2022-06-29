<?php
include('menu.php');
include_once("conexao.php");






?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php mostraCss() ?>
    <title>Página de cadástro</title>
</head>
<body>
    <header id="cabecalho">
        <h1>
            CodMaster
        </h1>
    </header>

<div id="cadastro">
    <form method="POST" action="cadastrar.php">
        <input type="text" name="nome" id="" placeholder="Nome" required autofocus>
        <input type="text" name="sobrenome" id="" placeholder="Sobrenome" required>
        <input type="tel" name="telefone" id="" placeholder="Telefone" required>
        <input type="email" name="email" id="" placeholder="E-mail" required>
        <input type="password" name="senha" id="" placeholder="Senha" required>
        <input type="password" name="confSenha" id="" placeholder="Confirmar" required>
        <input type="submit" value="Cadastrar">
    </form>
    <div id="msgCadastro">
        
        <p><a href="index.php">Página de login</a></p>
    </div>
</div>

</body>
</html>