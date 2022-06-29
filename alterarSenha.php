<?php
include_once("conexao.php");
include("menu.php");
include("verificaLogin.php");

$mensagem = null;
$usuario = $_SESSION['email'];
$senha = isset($_POST['senha'])?$_POST['senha']:"";
$confSenha = isset($_POST['confSenha'])?$_POST['confSenha']:"";

if(empty($_POST['senha']) || empty($_POST['confSenha']) ){
    $mensagem = "Preencha os dois campos";
}else{
    if($senha != $confSenha){
        $mensagem = "Senhas não conferem!<br>Tente novamente...";
    }else{
        $sql = "UPDATE `usuarios` SET `senha` = md5('$senha') WHERE `usuarios`.`email` = '$usuario'";
        $salvar = mysqli_query($conexao, $sql);
        $linhas = mysqli_affected_rows($conexao);
        $mensagem = "Senha alterada com sucesso!<br>No proximo login utilizar a nova...";
    }
}


?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php mostraCss();?>
    <title>Alterar senha</title>
</head>
<header id="cabecalho">
<h1>Alteração de senha</h1>
</header>
<body>
    <div class="menu-bar">
        <?php 
        mostraMenu();
        ?>      
    </div>
    <div id="main">
        <div id="sobreForm">
            Para realizar a alteração de senha digite duas vezes igualmente com o mínimo de 6 e máximo de 12 caracteres.
        </div>
        <form action="" method="POST">
            
            <input type="password" name="senha" id="" minlength="6" maxlength="12" placeholder="Senha" autofocus required>
            <input type="password" name="confSenha" id="" minlength="6" maxlength="12" placeholder="Confirmar"required>
            <input type="submit" value="Alterar">
            
        </form>
            <div id="subform">
                <?php
                    echo $mensagem;
                ?>
            </div>
       

    </div>
</body>
</html>