<?php
	include 'config/conexao.php';
	session_start();
	$usuario = $_POST['usuario'];
	$senha = $_POST['senha'];
	
	$sql = "SELECT usuario,senha FROM usuarios WHERE usuario = '$usuario' && senha = '$senha'";
	$query = mysql_query($sql) or die (mysql_error());
	$linha = mysql_fetch_array($query);
	
	if ( ($usuario == $linha['usuario'])
		&&($senha == $linha['senha'])
		&&($usuario != "")
		&&($senha != "")){
			header('location:index2.php');
            $_SESSION['login'] = $usuario;
			}else{
			
			echo" <a href=\"login.php\">Voltar</a><br/>";
			echo "Usuario ou senha invalidos";
			}
			?>
			
			
		
