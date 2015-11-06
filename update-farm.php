<?php
    include 'config/conexao.php';
    $COD_FARM = $_GET['COD_FARM'];
    //echo $COD_NOT;
    $sql_farmacias = "SELECT * FROM farmacias WHERE COD_FARM = '$COD_FARM'";
    $result_farmacias = mysql_query($sql_farmacias,$conexao);
    $not= array ();
    $farmacias = mysql_fetch_array($result_farmacias);
    //var_dump($noticias);
    ?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Alteração do Cadastro de Usuario</title>
    </head>
    <body>
        <?php
            include 'menu-adm.php';
        ?>
        <fieldset>
            <legend>Alteração do cadastro de Usuario </legend>
           <form action="updt-farm.php" method="post">
               <label>Codigo</label>
                    <p><input type="text" name="COD_RE" value="<?php echo $farmacias['COD_FARM'];?>"/></p>
                <label>Nome da Farmacia</label>
                    <p><input type="text" name="nom_farm" value="<?php echo $farmacias['nom_farm'];?>"/></p>
                <label>Endereco</label>
                    <p><input type="text" name="endereco_farm" value="<?php echo $farmacias['endereco'];?>"/></p>
                <label>Rua</label>
                    <p><input type="text" name="rua_farm" value="<?php echo $farmacias['rua'];?>"/></p>
                <label>Cidade</label>
                    <p><input type="text" name="cidade_farm" value="<?php echo $farmacias['cidade'];?>"/></p>
                <label>Estado</label>
                    <p><input type="text" name="estado_farm" value="<?php echo $farmacias['estado'];?>"/></p>
                <input type="submit" value="alterar" name="alterar" />
            </form>
        </fieldset>
    </body>
</html>
