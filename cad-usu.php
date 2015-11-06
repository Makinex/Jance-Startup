<?php
include 'config/conexao.php';

$nome=$_POST ['nome'];
$sobrenome=$_POST ['sobrenome'];
$email=$_POST ['email'];
$usuario=$_POST ['usuario'];
$senha1=$_POST ['senha1'];
$senha2=$_POST ['senha2'];

if(($usuario != "")
        &&($nome!= "")
        &&($sobrenome!= "")
        &&($email!= "")
        &&($usuario!= "")
        &&($senha1 != "")
        &&($senha2!= "")
        && ($senha1==$senha2)){
     $query = "INSERT INTO usuarios (nome, sobrenome, email, usuario,senha)
                           Values ('$nome','$sobrenome','$email','$usuario','$senha1')";
       
    mysql_query($query,$conexao) or die (mysql_error());
    
    header ('location:login.php');
  //  echo "sdfsdf";
}else{
   echo"Algum campo não foi preenchido corretamente";
   echo" <a href=\"cadastro-usu.php\">Voltar</a>";
}

?>
