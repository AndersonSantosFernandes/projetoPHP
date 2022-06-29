<?php
    session_start();
    include_once('conexao.php');

    if (empty($_POST['emails']) || empty($_POST['senhas']) ){
        header('location: index.php');
    }

    $email = mysqli_real_escape_string($conexao, $_POST['emails']);
    $pass = mysqli_real_escape_string($conexao, $_POST['senhas']);


    $query = "SELECT id, email  FROM usuarios WHERE email = '{$email}' and senha = md5('{$pass}')";

    $result = mysqli_query($conexao, $query);
    $row = mysqli_num_rows($result);

    if($row ==1){
        $_SESSION['email'] = $email;
        header("location: pagina inicial.php");
        exit();
    }else{
        header("location: index.php");
        exit();
    }
    
   // mysql_close($conexao);

?>