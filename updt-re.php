 <?php

include 'config/conexao.php';
    $COD_RE = $_POST['COD_RE'];
    $nom_re = $_POST['nom_re'];
    $descricao = $_POST['descricao'];
    $img_bula = $_POST['img_bula'];
    $img_remedio = $_POST['img_remedio'];
    $categoria = $_POST['categoria'];
    if(($nom_re !="") && ($descricao != "") && ($img_bula != "") && ($img_remedio != "") && ($categoria != "0")){

    mysql_query("UPDATE remedios SET nom_re = '$nom_re', descricao ='$descricao', img_bula='$img_bula', img_remedio='$img_remedio', categoria='$categoria' WHERE COD_RE = '$COD_RE'", $conexao);
        echo "Noticia alterada com sucesso!";
        echo '<meta http-equiv="refresh" content="2;URL=listar-re-adm.php" />';

        }else{
            echo "Não pode ser atualizado.";
        }
        ?>
