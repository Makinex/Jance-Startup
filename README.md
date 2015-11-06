<!DOCTYPE html>
	<html>
		<head>
		<title>Cadastro Remedio</title>
		</head>
		<body>
                    <?php
                    include'menu-adm.php';
                    ?>
		<h1 style="text-align:center">Cadastre o remedio</h1>
		<form action="cad-re.php" method="post">
		<fieldset>
				Remedio<input type="text" name="nom_re" size="26" ><br/>
				Descrição<textarea cols="21" rows="5" name="desc_re" ></textarea><br/>
				Img Bula<input type="text" name="bul_re"><br/>
				Img Remedio<input type="text" name="rem_re"><br/>
                                Categoria<select name="rem_cat"> <br/>
                                <option>Selecione</option> 
                                    <?php
                                        include 'config/conexao.php';

                                            $query = "SELECT * FROM categoria ORDER BY COD_CAT ASC";
                                            $result = mysql_query($query,$conexao);

                                                while ($array = mysql_fetch_array($result)) {
                                                    $COD_CAT =   $array['COD_CAT'];
                                                    $descricao =   $array['descricao'];
                                                    $esp=" - "
                                    ?>
                                       <option value="<?php echo $COD_CAT;?>"><?php echo $COD_CAT.$esp.$descricao; ?></option>
                                        <?php
                                        }
                                        ?>
                                </select><br/>
				</fieldset>
				</br>
				<input type="submit" name="cadastrar" value="Cadastrar">
				
				
			
		
		</body>
		</html>
