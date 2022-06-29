<?php
include_once("conexao.php");
include_once("verificaLogin.php");
include("menu.php");

$usuario = $_SESSION['email'];
// $administrador = null;



    $sql1 = "SELECT nome, sobrenome, telefone, email, administrador, dataCadastro from usuarios";
$consulta1 = mysqli_query($conexao, $sql1);
// $buscar1 = mysqli_fetch_array($consulta1);
$linhas = mysqli_affected_rows($conexao);


$sql = "SELECT nome, administrador FROM usuarios WHERE email = '$usuario';";
$consulta = mysqli_query($conexao, $sql);
$buscar = mysqli_fetch_array($consulta);
$mostrar1 = $buscar[0];
$mostrar2 = $buscar[1];

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php mostraCss();?>
    <title>Gerenciar usuários</title>
</head>
<header id="cabecalho">
<h1>Gerenciamento de usuários do sistema</h1>
</header>
<body>
    <div class="menu-bar">
        <?php 
        mostraMenu();
        ?>      
    </div>
    <div id="main">
    <div id="msg-admin">
    <?php
        if($mostrar2 == "sim"){
            print "<h3> $mostrar1 você é um administrador do sistema </h3>
            <a href='permissoes.php'> <input class='permisao' type='button' value='permissões'></a>
            ";
        }else{
            print "<h3>$mostrar1 você não é um administrador do sistema </h3>";
        }
    ?>
    
    </div>    
        <?php
         if($mostrar2 == "sim"){
            while($exibir = mysqli_fetch_array($consulta1)){
                $mostraNome = $exibir[0];
                $mostrarSobrenome = $exibir[1];
                $mostrarTelefone = $exibir[2];
                $mostrarEmail = $exibir[3];
                $mostrarAdmin = $exibir[4];
                $moatrarData = $exibir[5];
                print"<div id='listaUsuarios'>
                Nome: $mostraNome<br>
                Sobrenome: $mostrarSobrenome<br>
                Telefone: $mostrarTelefone<br> 
                Email: $mostrarEmail<br>
                Administrador: $mostrarAdmin<br>
                Data cadastro: $moatrarData<br></div>";
            }            
        }else{
            print "<h2>Informações indisponíveis para este usuário</h2>";
        }

        mysqli_close($conexao);
        ?>

    </div>
    
</body>
</html>