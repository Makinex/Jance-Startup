<?php
    include 'config/conexao.php';
    $COD_RE = $_GET['COD_RE'];
    //echo $COD_NOT;
    $sql_remedios = "SELECT * FROM remedios WHERE COD_RE = '$COD_RE'";
    $result_remedios = mysql_query($sql_remedios,$conexao);
    $not= array ();
    $remedios = mysql_fetch_array($result_remedios);
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
           <form action="updt-re.php" method="post">
               <label>Codigo</label>
                    <p><input type="text" name="COD_RE" value="<?php echo $remedios['COD_RE'];?>"/></p>
                <label>Nome do Remedio</label>
                    <p><input type="text" name="nom_re" value="<?php echo $remedios['nom_re'];?>"/></p>
                <label>Descricao</label>
                    <p><input type="text" name="descricao" value="<?php echo $remedios['descricao'];?>"/></p>
                <label>Imagem da bula</label>
                    <p><input type="text" name="img_bula" value="<?php echo $remedios['img_bula'];?>"/></p>
                <label>Imagem do remedio</label>
                    <p><input type="text" name="img_remedio" value="<?php echo $remedios['img_remedio'];?>"/></p>
                <label>Categoria</label>
                    <p><input type="text" name="categoria" value="<?php echo $remedios['categoria'];?>"/></p>
                <input type="submit" value="alterar" name="alterar" />
            </form>
        </fieldset>
    </body>
</html>
