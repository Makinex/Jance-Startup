<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Listando Farmacias</title>
    </head>
    <body>
        <?php
        include 'menu-adm.php';
        ?>
        
            <table border="1px"
                   style="text-align:center;">
                <tr> <!-- table row -->
                    <th>Codigo</th><!-- tabl head -->
                    <th>Nome da Farmacia</th>
                    <th>Endereco</th>
                    <th>Rua</th>
                    <th>Cidade</th>
                    <th>Estado</th>
                    <th>Remover</th>
                    <th>Editar</th>
                </tr>
                <?php
                    include 'config/conexao.php';
                   $sql_farmacia = "SELECT COD_FARM,nom_farm,endereco,rua,cidade,estado FROM farmacias ORDER BY COD_FARM ASC";
                    $result_farmacia= mysql_query($sql_farmacia) or die (mysql_error());
                    while ($farmacia= mysql_fetch_array($result_farmacia)) {
                            $COD_FARM = $farmacia ['COD_FARM'];
                            $nom_farm_adm = $farmacia ['nom_farm'];
                            $endereco_farm_adm = $farmacia ['endereco'];
                            $rua_farm_adm = $farmacia ['rua'];
                            $cidade_farm_adm = $farmacia ['cidade']; 
                            $estado_farm_adm = $farmacia ['estado'];
                ?>
                <tr>
                    <td><?php echo $COD_FARM;?></td>
                    <td><?php echo $nom_farm_adm;?></td>
                    <td><?php echo $endereco_farm_adm;?></td>
                    <td><?php echo $rua_farm_adm;?></td>
                    <td><?php echo $cidade_farm_adm;?></td>
                    <td><?php echo $estado_farm_adm;?></td>
                    <td><a href="excluir-farm.php?COD_FARM=<?php echo $COD_FARM;?>"><img src="imagens/delete.png" width="23px" height="23px"/>
                    </a></td>
                    <td><a href="update-farm.php?COD_FARM=<?php echo $COD_FARM;?>"><img src="imagens/edit.png" width="23px" height="23px"/>
                        </a></td>
                </tr>
                    <?php
                        }
                    ?>
            </table>
    </body>
</html>
