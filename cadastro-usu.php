<!DOCTYPE html>
	<html>
	<head>
	 <title> Cadastro </title>
	</head>
	<body>
	 <h1 style="text-align:center; font-family:arial">Preencha o formulario</h1>
	  <form action="cad-usu.php" method="post">
	  <fieldset>
	   <legend style="font-family:arial">Cadastro</legend>
		<table cellspacing="10">
		<tr>
				<td style="font-family:arial; font-size:15px;">
				
				<label for="nome">Nome:</label>
			</td>
				<td style="text-align:left">
				<input type="text" name="nome">
			</td>
			<td>
			<td>
			<td>
			<td>
			<td style = "font-family:arial; font-size:15px">
				<label for="cad_usuario">Usuario:</label>
				</td>
				<td syle="text-align:left ">
				<input type="text" name="usuario">
			</td>
		
				
		</tr>
		<tr>
				<td style="font-family:arial; font-size:15px">
			
				<label for="sobrenome">Sobrenome:</label>
			</td>
			<td style="text-align:left">
				<input type="text" name="sobrenome">
			</td>
			<td>
			<td>
			<td>
			<td>
			<td style = "font-size:15px; font-family: arial">
				
				
				
				<label for="cad_senha1">Senha:</label>
			</td>
			<td style="text-align:left">
				<input type="password" name="senha1">
			</td>
		</tr>
		<tr>
			<td style="font-family:arial; font-size:15px">
				<label for="email">Email: </label>
			</td>
			<td style="text-align:left">
				<input type="text" name="email">
			</td>
			<td>
			<td>
			<td>
			<td>
			<td style="font-family: arial; font-size:15px">
				<label for="cad_senha2">Confirme a senha:</label>
				</td>
				<td style="text-align:left">
					<input type="password" name="senha2">
</td>
					</tr>
			</table>
		</fieldset>
		<br/>
		
		<input type="submit" name="cadastrar" value="Cadastrar">
		</body>
		</html>
			
		 
