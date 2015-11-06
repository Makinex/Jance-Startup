<?php
    include'config/conexao.php';

    $nom_farm = filter_input(INPUT_POST,'nom_farm');
    $rua_farm = filter_input(INPUT_POST,'rua_farm');
    $endereco_farm = filter_input(INPUT_POST,'endereco_farm');
    $cidade_farm = filter_input(INPUT_POST,'cidade_farm');
    $estado_farm = filter_input(INPUT_POST,'estado_farm');
    if (    ($nom_farm != "")
            &&($endereco_farm !="")
            &&($rua_farm !="")
            &&($cidade_farm !="")
            &&($estado_farm != ""))  {
            $query = "INSERT INTO farmacias (nom_farm, rua, cidade, estado, endereco)
                           Values ('$nom_farm','$rua_farm','$cidade_farm',$estado_farm,'$endereco_farm')";
        mysql_query($query,$conexao) or die (mysql_error());
        
        header ('location:farmacia.php');
    }else{
        echo"Algum campo não foi preenchido corretamente";
        echo" <a href=\"remedio.php\">Voltar</a>";
    }
?>
