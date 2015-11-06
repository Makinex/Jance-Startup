<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Listando Noticias</title>
    </head>
    <body>
        <?php
        include 'menu-adm.php';
        ?>
        
            <table border="1px"
                   style="text-align:center;">
                <tr> <!-- table row -->
                    <th>Codigo</th><!-- tabl head -->
                    <th>Remedio</th>
                    <th>Descricao do Remedio</th>
                    <th>Bula</th>
                    <th>Imagem da caixa</th>
                    <th>Categoria</th>
                    <th>Remover</th>
                    <th>Editar</th>
                </tr>
                <?php
                    include 'config/conexao.php';
                    $sql_remedio = "SELECT COD_RE,nom_re,descricao,img_bula,img_remedio,categoria FROM remedios ORDER BY COD_RE ASC";
                    $result_remedio= mysql_query($sql_remedio) or die (mysql_error());
                    while ($remedio= mysql_fetch_array($result_remedio)) {
                            $COD_RE = $remedio ['COD_RE'];
                            $nom_re = $remedio ['nom_re'];
                            $descricao = $remedio ['descricao'];
                            $img_bula = $remedio ['img_bula'];
                            $img_remedio = $remedio ['img_remedio']; 
                            $categoria = $remedio ['categoria'];
                ?>
                <tr>
                    <td><?php echo $COD_RE;?></td>
                    <td><?php echo $nom_re;?></td>
                    <td><?php echo $descricao;?></td>
                    <td><?php echo $img_bula;?></td>
                    <td><?php echo $img_remedio;?></td>
                    <td><?php echo $categoria;?></td>
                    <td><a href="excluir-re.php?COD_RE=<?php echo $COD_RE;?>"><img src="imagens/delete.png" width="23px" height="23px"/>
                    </a></td>
                    <td><a href="update-re.php?COD_RE=<?php echo $COD_RE;?>"><img src="imagens/edit.png" width="23px" height="23px"/>
                        </a></td>
                </tr>
                    <?php
                        }
                    ?>
            </table>
    </body>
</html>
