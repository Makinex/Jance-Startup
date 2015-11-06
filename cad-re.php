<?php
    include'config/conexao.php';

    $nom_re = $_POST ['nom_re'];
    $desc_re = $_POST ['desc_re'];
    $bul_re = $_POST ['bul_re'];
    $rem_re = $_POST ['rem_re'];
    $rem_cat = $_POST ['rem_cat'];
    
    if (    ($nom_re != "")
            &&($desc_re !="")
            &&($bul_re != ""))  {
            $query = "INSERT INTO remedios (nom_re, descricao, img_bula, img_remedio, categoria    )
                           Values ('$nom_re','$desc_re','$bul_re','$rem_re', $rem_cat)";
        mysql_query($query,$conexao) or die (mysql_error());
        
        header ('location:index3.php');
    }else{
        echo"Algum campo não foi preenchido corretamente";
        echo" <a href=\"remedio.php\">Voltar</a>";
    }
?>
