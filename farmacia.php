	<html>
		<head>
		<title>Cadastro Remedio</title>
		</head>
		<body>
                    <?php
                    include'menu-adm.php';
                    ?>
		<h1 style="text-align:center">Cadastre o remedio</h1>
		<form action="cad-farm.php" method="post">
		<fieldset>
				Nome da Farmacia: <input type="text" name="nom_farm" size="26" ><br/>
                                Endereco: <input type="text" name="endereco_farm"><br/>
                                Rua: <input type="text" name="rua_farm"><br/>
				Cidade: <input type="text" name="cidade_farm"> <br/>
                                Estado: <select name="estado_farm">
                                <option>Selecione</option> 
                                    <?php
                                        include 'config/conexao.php';

                                            $query = "SELECT * FROM estado ORDER BY COD_EST ASC";
                                            $result = mysql_query($query,$conexao);

                                                while ($array = mysql_fetch_array($result)) {
                                                    $COD_EST =   $array['COD_EST'];
                                                    $descricao =   $array['descricao'];
                                                    $esp=" - "
                                    ?>
                                       <option value="<?php echo $COD_EST;?>"><?php echo $COD_EST.$esp.$descricao; ?></option>
                                        <?php
                                        }
                                        ?>
                                </select><br/>
				</fieldset>
				</br>
				<input type="submit" name="cadastrar" value="Cadastrar">
				
				
			
		
		</body>
		</html>
