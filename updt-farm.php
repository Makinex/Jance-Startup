 <?php

include 'config/conexao.php';
    $COD_FARM = filter_input(INPUT_POST,'COD_FARM');
    $nom_farm = filter_input(INPUT_POST,'nom_farm');
    $rua_farm = filter_input(INPUT_POST,'rua_farm');
    $endereco_farm = filter_input(INPUT_POST,'endereco_farm');
    $cidade_farm = filter_input(INPUT_POST,'cidade_farm');
    $estado_farm = filter_input(INPUT_POST,'estado_farm');
    if(($nom_farm !="") && ($rua_farm != "") && ($endereco_farm != "") && ($cidade_farm != "") && ($estado_farm != "0")){

    mysql_query("UPDATE farmacias SET nom_farm = '$nom_farm', rua='$rua_farm', endereco='$endereco_farm', cidade='$cidade_farm', estado='$estado_farm' WHERE COD_FARM = '$COD_FARM'", $conexao);
        echo "Noticia alterada com sucesso!";
        echo '<meta http-equiv="refresh" content="2;URL=lista-farm-adm.php" />';

        }else{
            echo "Não pode ser atualizado.";
        }
        ?>
