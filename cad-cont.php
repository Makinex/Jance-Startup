<?php
include 'config/conexao.php';

$nome = $_POST['nome'];
$email = $_POST['email'];
$sujestao = $_POST['sujestao'];

if(       ($nome !="") || ($email !="") || ($sujestao !="")){
       $query = "INSERT INTO contato (nome,email,sujestao)
                        VALUES ('$nome','$email','$sujestao')";
       mysql_query($query,$conexao) or die (mysql_error());
       
       echo"Respoderemos em breve...";
       echo" <a href=\"contato.php\">Continuar</a>";
        }else{
           // echo"Nome não foi preenchido corretamente" || echo"Email que foi preenchido corretamente";
        }
?>
