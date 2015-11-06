<!DOCTYPE html>
<?php session_start(); ?>
	<html>
		<head>
                    <title>Menu</title>
		</head>
		<body>
                <?php echo $_SESSION['login_adm']; ?>
                    <a href="sair-session.php">Sair</a>
			<h1 style="text-align:left; font-family: arial">Jance</h1>
                        <h3 style="text-align:left; font-family: arial">A medicina do futuro</h3>
			
                    <fieldset>
                        <legend>Menu</legend>		
                        <table cellspacing="10">
                            <ul>
                                <li><a href="index3.php">Inicio</a></li>
                                <li><a href="remedio.php">Cadastro de Produto</a></li>
                                <li><a href="listar-re-adm.php">Lista de Remedios</li>
                                <li><a href="farmacia.php">Cadastro de Farmacia</a></li>
                                <li><a href="lista-farm-adm.php">Lista de Farmacias</a></li>
                            </ul>
                        </table>
                    </fieldset>
		</body>
        </html> 
