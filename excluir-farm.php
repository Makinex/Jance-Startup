<?php
$COD_FARM=$_GET ['COD_FARM'];

    if ($COD_FARM != '') {
        include 'config/conexao.php';
        $sql_farmacia="DELETE FROM farmacias WHERE COD_FARM = '$COD_FARM'";
        echo $sql_farmacia;
        $return = mysql_query($sql_farmacia,$conexao);
        
        if ($return) {
            echo 'registro removido com sucesso!';
            header('location:lista-farm-adm.php');
        }else{
            echo "Este registro possui vinculo em outra tabela";
        }
    }
?>
