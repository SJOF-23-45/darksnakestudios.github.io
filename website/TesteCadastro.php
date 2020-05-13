<!DOCTYPE html>
<?php?>
<html>
<head>
	<title>Dark Snake Studios</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="style.css">
	<script type="text/javascript" src="js/script.js"></script>
</head>
<body>
	<div id="header">
		<h1 align="left" id="titulo">|  Dark Snake Studios  |</h1>
		<h3 align="right" id = "textLogin"><a class="link" href="javascript: abrir()">Iniciar Sessão</a> | <a class="link" href="javascript: abrirCadastro()">Criar conta</a> </h3>
	</div>
	<div class="topnav">
	  	<a href="#">Stories of Kastov</a>
	  	<a href="norsecombat.php">Norse Combat</a>
	  	<a href="#">The Crew of Terror</a>
	  	<a href="#">?</a>
	  	<a href="#">Dark Snake Launcher</a>
	  	<a href="#">Entrar em contato</a>
	</div>
	<div id="popup_Login" class="popup">
		<div class = "modal">
			<h1 id = "tituloForm"><strong>Entrar</strong></h1>
			<form method="POST">
				<input type="email" name="email" placeholder="E-mail ou Usuário">
				<input type="password" name="password" placeholder="Senha">
				<input type="button" name="enviar" value = "ACESSAR" onclick="msg()">
				<a href="javascript: fechar(); javascript: abrirCadastro()">Ainda não é inscrito? <strong>Cadastre-se</strong></a>
			</form>
			<a href="javascript: fechar()">Fechar</a>
		</div>
	</div>
	<div id="popup_Cadastro" class="popup">
		<div class = "modal">
			<h1 id = "tituloForm"><strong>Cadastrar</strong></h1>
			<form method="POST">
				<input type="text" name="nome" placeholder="Nome">
				<input type="text" name="usuario" placeholder="Nome de Usuário">
				<input type="email" name="email" placeholder="E-mail">
				<input type="password" name="password" placeholder="Senha">
				<input type="password" name="confirmPass" placeholder="Confirmar Senha">
				<input type="button" name="enviar" value = "ACESSAR" onclick="msg()">
			</form>
			<a href="javascript: fechar()">Fechar</a>
		</div>
	</div>
</body>
</html>