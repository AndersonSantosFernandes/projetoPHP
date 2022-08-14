<?php
    include("verificaLogin.php");
    include("menu.php");
    include_once("conexao.php");

    $usuario = $_SESSION['email'];
    $mensagem = null;
    $comentario = isset($_POST['comentar'])?$_POST['comentar']:"";

    $sqlNome = "SELECT nome from usuarios where email = '$usuario'";
    $salvaNome = mysqli_query($conexao, $sqlNome);
    $buscar = mysqli_fetch_array($salvaNome);
    $mostrar = $buscar[0];



    if(empty($_POST['comentar']))
    {
        $mensagem = "Comentar";
    }
    else
    {
        $sql = "INSERT into comentarios (email_usuario, comentario, nome_comentario, data_comentario)
        VALUES('$usuario','$comentario', '$mostrar', CURRENT_DATE);";
        $salvar = mysqli_query($conexao, $sql);
        $linhas = mysqli_affected_rows($conexao);

        if($linhas == 1)
        {
            $mensagem = "Comentário enviado com sucesso!";
        }
        else
        {
            $mensagem = "Walgo deu errado, Tente novamente!";
        }
    }
        $sql1 = "SELECT nome_comentario, comentario, data_comentario 
        from comentarios";
        $salvar1 = mysqli_query($conexao, $sql1);

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php mostraCss();?>
    <title>Comentários</title>
</head>
<header id="cabecalho">
<h1>Comentários</h1>
</header>
<body>
    <div class="menu-bar">
        <?php 
        mostraMenu();
        ?>      
    </div>
    <div id="main">
        <h2>Insira um comentário de até 200 caracteres</h2>    
        <fieldset class="coment">
            <legend>Comentário</legend>
            <form action="" method="POST">
            <textarea name="comentar" id="areaText" cols="70" rows="5" maxlength="200">
            </textarea>
            <input type="submit" value="Salvar comentário">
            </form>
        </fieldset>
        <div id="subform">
            <?php
                echo $mensagem;
            ?>
        </div>
        <div id="comentarios">

        <?php
            while($exibir = mysqli_fetch_array($salvar1))
            {
                $nome = $exibir[0];
                $coment = $exibir[1];
                $data = $exibir[2];

                print"<div class='titulo_comentario'>$nome </div>";
                print"$coment <br>";
                print"Data: $data <br><br>";
            }
        ?>
       </div>
    </div>
</body>
</html>