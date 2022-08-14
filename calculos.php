<?php
    include("menu.php");
    $mensagem = null;
    $delta = 0;
    $valorA = isset($_POST['valora'])?$_POST['valora']:"";
    $valorB = isset($_POST['valorb'])?$_POST['valorb']:"";
    $valorC = isset($_POST['valorc'])?$_POST['valorc']:"";

    function delta($a, $b, $c){

        return ($b*$b) - 4 * $a * $c;

    }
         

    if(empty($_POST['valora']) || empty($_POST['valorb']) || empty($_POST['valorc']))
    {
        $mensagem = "Preencha todos os campos";
    }
    else
    {
        delta($valorA, $valorB, $valorC);
    }

?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?php mostraCss()?>
        <title>Cálculos</title>
    </head>
    <header id="cabecalho">
        <h1>Formula de Bhaskara</h1>
    </header>
    <body>
        <div class="menu-bar">
            <?php 
            mostraMenu();
            ?>      
        </div>
        <div id="main">
            <h1>Olá seja bem vindo</h1>
            <fieldset>
                <legend>
                    <h2>Insira os valores</h2>
                </legend>
                <form action="" method="POST">
                    <div class="bhaskara">
                        <label for="num1">Valor de A</label>
                        <input type="number" name="valora" id="num1">
                    </div>
                    <div class="bhaskara">
                        <label for="num2">Valor de B</label>
                        <input type="number" name="volorb" id="num2">
                    </div>
                    <div class="bhaskara">
                        <label for="num3">Valor de C</label>
                        <input type="number" name="valorc" id="num3">
                    </div>                    
                    <div class="bhaskara">                        
                        <input type="submit" name="">
                    </div>                    
                </form>
            </fieldset>
            <?php print"$mensagem <br> $delta";?>
        </div>
    </body> 
</html>