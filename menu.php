<!DOCTYPE html>
<?php session_start(); ?>
  <head>
  <title>JANCE</title>
  <link rel="stylesheet" type="text/css" href="style/style.css"/>
  </head>
	<body>
	  <?php echo $_SESSION['login']; ?>
                    <a href="sair-session.php">Sair</a>
		<div id="header">
		 <div class="backgr"><img src="imagens/Fundosite.gif";></div>
		  <div class="logo"><img src="imagens/logo.gif"></div>
		 
		
		<div id="menu">
		 <div class="menu"><img src="imagens/layout.gif">
		 </div>
		 
		 <div id="table">
		  <div class="inic"><a href="index2.php">Inicio</a></div>
		  <div class="cat"><a  href="listar-re.php">Produtos</a></div>
		  <div class="cons"><a href="consulte.php">Consulte</a></div>
		  <div class="farm"><a href="listar-farm.php">Farmacia</a></div>
		 </div>
		 <div id="propaganda">
		  <div class="propag">
		  <a href="jance.php"><img src="imagens/banner941.jpg" height="195px" width="573px" border="2px solid black"></a>
		<div id="baixopre">
		<div class="baixopro"><p>Produtos que baixaram de preço</p></div>
		<div id="promo">
		<div class="imgone">
		</div>
		<div id="rodape">
		<div class="borda"><img src="imagens/borda.png" height="1px" width="800px"></div>
		<div class="institucional"><p>INSTITUCIONAL</p></div>
		
		<div class="sobrempresa"><a href="jance.php"><p>Sobre a empresa</a></div>
		<div class="faleconosco"><a href="contato.php"><p>Fale conosco</a></div>
		<div class="atendimento"><p>ATENDIMENTO</a></div>
		<div class="tel"><img src="imagens/fonerodape.png">
		<div class="numtel"><p>(48)<span>3632-2424</span></p>
