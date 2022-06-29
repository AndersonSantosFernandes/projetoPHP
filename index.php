<?php
include('menu.php');

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php mostraCss() ?>
    <title>Página de login</title>
</head>
<body>
    <header id="cabecalho"> 
        <h1>
            CodMaster
        </h1>
    </header>

<div id="login">
    <form action="sessao.php" method="POST">
        <input type="email" name="emails" id="" placeholder="E-mail" required maxlength="50">
        <input type="password" name="senhas" id="" placeholder="Senha" required maxlength="12" minlength="6">
        <input type="submit" value="Logar">
    </form>
    <div id="msgLogin">
        <p>Já é usuário? Faça o login. <br> Se não, se cadastre <a href="telaCadastro.php">aqui</a></p>
    </div>
</div>

</body>
</html>