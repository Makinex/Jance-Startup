<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        include 'menu.php'
        ?>
        <fieldset>
            <form action="cad-cont.php" method="post">
        <p> Nome: <input type="text" name="nome"> </p>
        <p> E-mail: <input type="text" name="email"> </p>
        <p>Sujestao: <textarea cols="21" rows="5" name="sujestao"></textarea> </p>
        <p><input type="submit" name="enviar" value="enviar"> </p>
            </form>
        </fieldset>
    </body>
</html>
