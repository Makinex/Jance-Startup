<?php
$COD_RE=$_GET ['COD_RE'];

    if ($COD_RE != '') {
        include 'config/conexao.php';
        $sql_remedio="DELETE FROM remedios WHERE COD_RE = '$COD_RE'";
        echo $sql_remedio;
        $return = mysql_query($sql_remedio,$conexao);
        
        if ($return) {
            echo 'registro removido com sucesso!';
            header('location:listar-re-adm.php');
        }else{
            echo "Este registro possui vinculo em outra tabela";
        }
    }
?>
