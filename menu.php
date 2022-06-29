<?php
    function mostraMenu(){
        echo '  
             
        <a href="pagina inicial.php">Página inicial</a>
        <a href="excluirUsuario.php">Excluir usuários</a>
        <a href="comentarios.php">Comentários</a>
        <a href="alterarSenha.php">Alterar senha</a>
        <a href="gerenciarUsuarios.php">Gerenciar usuários</a>
        <a href="deslogar.php">Encerrar sessão</a>
       
        ';
    }

    function mostraCss(){
        echo '<link rel="stylesheet" href="pastaCss/principal.css">';
    }
?>