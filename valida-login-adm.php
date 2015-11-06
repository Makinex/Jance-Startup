<?php
	session_start();
    include 'config/conexao.php';

	$usuario = $_POST['usuario-adm'];
	$senha = $_POST['senha-adm'];
	
	$sql = "SELECT usuario_adm,senha_adm FROM administrador WHERE usuario_adm = '$usuario' && senha_adm = '$senha'";
	$query = mysql_query($sql) or die (mysql_error());
	$linha = mysql_fetch_array($query);
	
	if ( ($usuario == $linha['usuario_adm'])
		&&($senha == $linha['senha_adm'])
		&&($usuario != "")
		&&($senha != "")){
			
            $_SESSION['login_adm'] = $usuario;
            echo $_SESSION['login_adm'];
            header('location:index3.php');
			}else{
			
			echo" <a href=\"login-adm.php\">Voltar</a><br/>";
			echo "Usuario ou senha invalidos";
			}
			?>
			
			
		
