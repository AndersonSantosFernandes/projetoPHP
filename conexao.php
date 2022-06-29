<?php
    $hostname = "localhost";
    $user = "root";
    $password = "";
    $database = "novobanco";
    $conexao = mysqli_connect($hostname,$user,$password,$database);
    if(!$conexao){
        echo "Não conectou";
    }
?>