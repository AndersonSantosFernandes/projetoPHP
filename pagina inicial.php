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
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?php mostraCss()?>
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
        <h1>Olá seja bem vindo</h1>
        </div>
    </body>
</html>