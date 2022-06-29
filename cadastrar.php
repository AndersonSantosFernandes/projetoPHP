<?php
    include_once("conexao.php");
    include("menu.php");

    $nome = $_POST['nome'];
    $sobrenome = $_POST['sobrenome'];
    $telefone = $_POST['telefone'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $confSenha = $_POST['confSenha'];

    $verificarEmail = null;
    $verificarSenha = null;

    $sql1 = "SELECT email FROM usuarios WHERE email = '$email'";
    $salvar1 = mysqli_query($conexao, $sql1);
    $linhas1 = mysqli_affected_rows($conexao);
    if($linhas1 == 1)
    {
        $verificarEmail = "O e-mail $email já está em uso!<br><br>
        <a href='telaCadastro.php'>Clique aqui e tente novamente</a>
        ";
    print "";
    }
    else
    {
        if($senha != $confSenha)
        {
            $verificarSenha = "Senhas não conferem! <br><br>
            <a href='telaCadastro.php'>Clique aqui e tente novamente</a>";
        }
        else
        {
            $sql = "INSERT into usuarios(nome, sobrenome, telefone, email,senha, administrador ,dataCadastro)
            values('$nome', '$sobrenome', '$telefone','$email', md5('$senha'),'nao', CURRENT_DATE());";

            $salvar = mysqli_query($conexao, $sql);
            $linhas = mysqli_affected_rows($conexao);
            if($linhas ==1)
            {
                $verificarSenha = "Cadástro efetuado com sucesso com o e-mail $email !<br>
                Utilize-o junto com a senha criada para logar no sistema";
            }
            else
            {
                $verificarSenha = "O e-mail $email já está em uso <br> Tente se cadastrar com um diferente";
            }
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
    <title>Cadastrado</title>
</head>
<style>
div#sucesso
{
    width: 600px;
    height: 300px;
    border: 1px solid black;
    margin: 100px auto;
    font-size: 30px;
    text-align: center;
    padding: 20px;
}

a
{
    text-decoration: none;
    color: black;
}

a:hover
{
    color: rgba(0,0,0,0.5);
    text-decoration: underline;    
}

div#sucessoIn
{
    width: 400px;
    height: 150px;
    border: 1px solid black;
    margin: 20px auto;
    font-size: 20px;
    text-align: center;
    padding: 20px;
}

</style>
<header id="cabecalho">
<h1>Confirmação de cadáastro</h1>
</header>

<body>
    
    <div id="sucesso">
        
        <div id="sucessoIn">
            <?php       
                print "$verificarSenha ";  
                print "$verificarEmail";  
                    
                mysqli_close($conexao);
            ?>
        </div>
        <h2>
            <a href="index.php">Página de login</a>
        </h2>
    </div>
</body>
</html>