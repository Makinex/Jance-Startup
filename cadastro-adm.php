<!DOCTYPE html>
	<html>
	<head>
	 <title> Cadastro </title>
	</head>
	<body>
	 <h1 style="text-align:center; font-family:arial">Preencha o formulario</h1>
	  <form action="cad-adm.php" method="post">
	  <fieldset>
	   <legend style="font-family:arial">Cadastro</legend>
		<table cellspacing="10">
		<tr>
				<td style="font-family:arial; font-size:15px;">
				
				<label for="nome">Nome:</label>
			</td>
				<td style="text-align:left">
				<input type="text" name="nome-adm">
			</td>
			<td>
			<td>
			<td>
			<td>
			<td style = "font-family:arial; font-size:15px">
				<label for="cad_usuario">Usuario:</label>
				</td>
				<td syle="text-align:left ">
				<input type="text" name="usuario-adm">
			</td>
		
				
		</tr>
		<tr>
				<td style="font-family:arial; font-size:15px">
			
				<label for="sobrenome">Sobrenome:</label>
			</td>
			<td style="text-align:left">
				<input type="text" name="sobrenome-adm">
			</td>
			<td>
			<td>
			<td>
			<td>
			<td style = "font-size:15px; font-family: arial">
				
				
				
				<label for="cad_senha1">Senha:</label>
			</td>
			<td style="text-align:left">
				<input type="password" name="senha1-adm">
			</td>
		</tr>
		<tr>
			<td style="font-family:arial; font-size:15px">
				<label for="email">Email: </label>
			</td>
			<td style="text-align:left">
				<input type="text" name="email-adm">
			</td>
			<td>
			<td>
			<td>
			<td>
			<td style="font-family: arial; font-size:15px">
				<label for="cad_senha2">Confirme a senha:</label>
				</td>
				<td style="text-align:left">
					<input type="password" name="senha2-adm">
</td>
					</tr>
			</table>
		</fieldset>
          </form>
		<br/>
		
		<input type="submit" name="cadastrar" value="Cadastrar">
		</body>
		</html>
			
		 
