<?php

include_once("conexao.php");
include("verificaLogin.php");
include("menu.php");

?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?php mostraCss() ?>        
        <script src="script/calcula.js"></script>
        <title>Bhaskara</title>
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
            <div id="menu"> 
            </div>
            <div id="titulo"> 
            </div>          
            <div id="esquerda">
                <form action="">
                    <br>
                    <input type="number" name="" id="valora" placeholder="Valor de A">
                    <br><br>
                    <input type="number" name="" id="valorb" placeholder="Valor de B">
                    <br><br>
                    <input type="number" name="" id="valorc" placeholder="Valor de C">
                    <br><br>
                    <input type="button" value="Calcular" onclick="calcularBhaskara()">
                </form>
                <div id="esquerdaIn">
                    <br>
                    <H2>Inserindo os vlores de A, B e C Serão mostrados no 
                        quadro ao lado
                        os valore de X' e X''.'
                    </H2>
                </div>
            </div> 
            <div id="direita">
                <h2>A fórmula de Bhaskara é um cálculo matemático para determinar as 
                raízes de uma função de segundo grau por meio de seus coeficientes. 
                Esse coeficiente que multiplica a variável desconhecida (x) das equações.
                 A termologia da fórmula é uma homenagem ao seu criador, o professor
                  e astrólogo indiano 
                <a href="https://pt.wikipedia.org/wiki/Bhaskara_II" target="_blank">Bhaskara Akaria</a> .</h2>        
            </div>
                <div id="iframe">
                    <h2>Se resolver a formula acima e obter um resultado onde X' seja -2 e X'' seja 3
                        Aqui aparecerá um vídeo falando sobre a história dessa fórmula.
                    </h2>
                    <br>
                    <img width="500" height="400" src="https://www.oficinadanet.com.br/imagens/post/22543/750xNxcapa.jpg.pagespeed.ic.0dc3f25d3e.jpg" alt="bhaskara">
                    <br><br>               
                </div>            
                    <script>
                    function corFundo() {
                    var btnRadio1 = document.getElementsByName('cores')
                    var backColor = document.getElementById('coloracao').value
                    if(btnRadio1[0].checked){
                        document.getElementById('maior').style.backgroundColor = `${backColor}`
                    }else if(btnRadio1[1].checked){
                        document.getElementById('maior').style.color = `${backColor}`
                    }    
                    }
                    </script>  
        </div>                            
    </body>
    <!--Div onde aparece o player de música-->
    <div id="music">

    </div>
    <footer id="rodape">    
        <h3>Anderson</h3>
    </footer>
</html>