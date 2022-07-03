<?php
    include_once("conexao.php");
    include_once("verificaLogin.php");
    include("menu.php");
    $sql = "SELECT * from usuarios";
    $salvar = mysqli_query($conexao, $sql);
    $linhas = mysqli_affected_rows($conexao);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Titillium+Web:wght@300&display=swap');
body{
    font-family: 'Titillium Web', sans-serif;
}    
table{
    width:100%;
border: black solid 1px;
border-collapse: collapse;
margin: auto;
}
table td{
font-size:17px;
color: black;
border: black solid 1px;
padding:2px;
background-color: rgb(18,230,159);
}
tr#titulo_tabela{
    font-weight: bold;
}
    </style>
<body>
    <div id="lista">
        <table>
        <tr id="titulo_tabela">
            <td>Nome<td>
            <td>Sobrenome<td>
            <td>Telefone<td>
            <td>E-mail<td> 
            <td>Administrador?<td>
            <td>Data cadástro<td>                     
            </tr>
        <?php
        while($exibir = mysqli_fetch_array($salvar)){
            $nome = $exibir[1];
            $Snome = $exibir[2];
            $telefone = $exibir[3];
            $email = $exibir[4];
            $admin = $exibir[6];
            $data = $exibir[7];   
            print "<tr>
            <td>$nome<td>
            <td>$Snome<td>
            <td>$telefone<td>
            <td>$email<td>
            <td>$admin<td>
            <td>$data<td>            
            </tr>";
        }
        ?>
        </table>
    </div>    
</body>
</html>