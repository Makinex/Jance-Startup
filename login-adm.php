<?php 
 session_start();
 session_destroy(); 
 ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
            <form action="valida-login-adm.php" method="post">
            <a href="cadastro-adm.php">Cadastrar ADM</a>
           Usuario: <input type="text" name="usuario-adm">
           Senha: <input type="password" name="senha-adm">
            <input type="submit" value="logar" name="enviar">
            <a href="index.php">Logar como usuario</a>
            </form>
    </body>
</html>
