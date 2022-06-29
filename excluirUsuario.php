<?php 
    include("verificaLogin.php");
    include("menu.php"); 
    include_once("conexao.php");
    $usuario = $_SESSION['email'];
// $administrador = null;
$sql = "SELECT nome, administrador FROM usuarios WHERE email = '$usuario';";
$consulta = mysqli_query($conexao, $sql);
$buscar = mysqli_fetch_array($consulta);
$mostrar1 = $buscar[0];
$mostrar2 = $buscar[1]; 
$exclusao = null;
$emailExcluir = isset($_POST['emailExcluir'])?$_POST['emailExcluir']:"";

if($mostrar2 == "sim")
{
    if(empty($_POST['emailExcluir']))
    {
    $exclusao = "Insira o e-mail de um usuário cadastrado que queira apagar";
    }
    else
    {
        $sql = "DELETE FROM usuarios WHERE email = '$emailExcluir'; ";
        $salvar = mysqli_query($conexao, $sql);
        $linha = mysqli_affected_rows($conexao);
    
        if($linha ==1)
        {
            $exclusao = "Deletado com sucesso!";
        }
        else
        {
            $exclusao = "O email $emailExcluir não existe na base de dados!";
        }
    }

}
else
{
    $exclusao = "Você não pode realizar alterções nesta página";
}


?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php  mostraCss()  ?>
    <title>Bem vindo</title>    
</head>
<header id="cabecalho">
<h1>Bem vindo(a) <?php echo $mostrar1 ?></h1>
</header>
<body>
    <div class="menu-bar">
        <?php 
        mostraMenu();
        ?>      
    </div>
    <div id="main">
        <div id="sobreForm">
            Para realizar a alteração cole o email do usuário e clique em Executar alteração <br>
            Só administrador pode fazer isso.
        </div>
               
        <fieldset class="coment">
            <legend>
                Excluir usuário
            </legend>
            <form action="" method="POST">                      
                <input type="email" name="emailExcluir" id="" plaeceholder="E-mail">
                <input type="submit" value="Executar alteração">
            </form>
            <div id="subform">
                <?php
                    print "$exclusao";
                ?>   
            </div>     
        </fieldset>
        <iframe id="frame" src="listarUsuarios.php" frameborder="0"></iframe>
    </div>
</body>
</html>