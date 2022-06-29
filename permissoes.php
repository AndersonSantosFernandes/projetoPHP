<?php
include_once("conexao.php");
include_once("verificaLogin.php");
include("menu.php");
$alteracao = null;


$confirma = isset($_POST['confirmar'])?$_POST['confirmar']:"";
$email = isset($_POST['email'])?$_POST['email']:"";




if(empty($_POST['email']))
{
    $alteracao = "Preencha o campo e-mail";
}
else
{

    if($confirma == null)
    {
        $sql = "UPDATE `usuarios` SET `administrador` = 'nao' WHERE `usuarios`.`email` = '$email';";
        $salvar = mysqli_query($conexao, $sql);
        $linhas = mysqli_affected_rows($conexao);
    }
    else
    {
        $sql = "UPDATE `usuarios` SET `administrador` = 'sim' WHERE `usuarios`.`email` = '$email';";
        $salvar = mysqli_query($conexao, $sql);
        $linhas = mysqli_affected_rows($conexao);
    }
    $alteracao = "Alteração feita com sucesso!";

}



?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php mostraCss();?>
    <title>Permissões</title>
</head>
<header id="cabecalho">
<h1>Gerenciamento de permissões</h1>
</header>
<body>
    <div class="menu-bar">
        <?php 
        mostraMenu();
        ?>      
    </div>
    <div id="main">
        <div id="sobreForm">
            Para realizar a alteração cole o email do usuário e marque o chekbox para dar permissão de administrador ou deixe
            desmarcado para tirar o privilégio.
        </div>
        <fieldset class="coment">
            <legend>
                Permissão de administrador
            </legend>
            <form action="" method="POST">                
                <input type="checkbox" name="confirmar" id="">      
                <input type="email" name="email" id="" plaeceholder="E-mail">
                
                <input type="submit" value="Alterar">
            </form>
            <div id="subform">
                <?php
                    print "$alteracao";
                ?>
            </div>
        </fieldset >
        
        <iframe id="frame" src="listarUsuarios.php" frameborder="0"></iframe>
        
    </div>
    
    
</body>
</html>