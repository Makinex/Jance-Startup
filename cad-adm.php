<?php
include 'config/conexao.php';

$nome=$_POST ['nome-adm'];
$sobrenome=$_POST ['sobrenome-adm'];
$email=$_POST ['email-adm'];
$usuario=$_POST ['usuario-adm'];
$senha1=$_POST ['senha1-adm'];
$senha2=$_POST ['senha2-adm'];

if(($usuario != "")
        &&($nome!= "")
        &&($sobrenome!= "")
        &&($email!= "")
        &&($usuario!= "")
        &&($senha1 != "")
        &&($senha2!= "")
        && ($senha1==$senha2)){
     $query = "INSERT INTO administrador (nome_adm, sobrenome_adm, email_adm, usuario_adm, senha_adm)
                           Values ('$nome','$sobrenome','$email','$usuario','$senha1')";
       
    mysql_query($query,$conexao) or die (mysql_error());
    
    header ('location:login-adm.php');
  //  echo "sdfsdf";
}else{
   echo"Algum campo não foi preenchido corretamente";
   echo" <a href=\"cadastro-adm.php\">Voltar</a>";
}

?>
