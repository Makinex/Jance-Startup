<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Listando Remedio</title>
    </head>
    <body>
        <?php
        include 'menu.php';
        ?>
        
            <table border="1px"
                   style="text-align:center;">
                <tr>
                    <th>Remedio</th>
                    <th>Descricao do Remedio</th>
                    <th>Bula</th>
                    <th>Imagem da caixa</th>
                    <th>Categoria</th>
                </tr>
                <?php
                    include 'config/conexao.php';
                    $sql_remedio = "SELECT nom_re,descricao,img_bula,img_remedio,categoria FROM remedios ORDER BY COD_RE ASC";
                    $result_remedio= mysql_query($sql_remedio) or die (mysql_error());
                    while ($remedio= mysql_fetch_array($result_remedio)) {
                            $nom_re = $remedio ['nom_re'];
                            $descricao = $remedio ['descricao'];
                            $img_bula = $remedio ['img_bula'];
                            $img_remedio = $remedio ['img_remedio']; 
                            $categoria = $remedio ['categoria'];
                ?>
                <tr>
                    <td><?php echo $nom_re;?></td>
                    <td><?php echo $descricao;?></td>
                    <td><?php echo $img_bula;?></td>
                    <td><?php echo $img_remedio;?></td>
                    <td><?php echo $categoria;?></td>
                </tr>
                    <?php
                        }
                    ?>
            </table>
    </body>
</html>
