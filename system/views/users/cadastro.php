<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Cadastre-se | SysEvent</title>
	<link rel="stylesheet" type="text/css" href="../templates/css/cadastro.css">
</head>

<body>
	<!-- Início BARRA MENU -->
	<header class="header">
		<div class="content">
			<div class="logo fl-left">
				<a href="../../index.html">
					<span style="color:#f39c12">Sys</span><span style="color:#fff">Event</span>
				</a>
			</div>

			<a href="#" class="nav-toggle fl-right">
				<img src="https://img.icons8.com/material-rounded/50/ffffff/menu.png">
			</a>

			<nav class="nav">
				<p class="fl-right">
					<span class="nav-close">
						<img src="https://img.icons8.com/ios-glyphs/50/000000/delete-sign.png">
					</span>
				</p>
				<ul>
					<li><a href="#">Como usar</a></li>
					<li><a href="../../devs.html">Devs</a></li>
					<li><a href="#">Perguntas frequentes</a></li>
					<li><a href="login.php">Entrar</a></li>
					<li><a href="cadastro.php" class="btn-destaque">Cadastre-se</a></li>
				</ul>
			</nav>
		</div>
	</header>
	<!-- Fim BARRA MENU -->

	<!-- Início BLOCO DE CADASTRO -->
	<section class="section bloco">
		<div class="content-bloco">
			<header class="row content-bloco-header">
				<h1>Faça seu cadastro e comece a usar o gerenciador de eventos</h1>
			</header>
			<form class="row" action="" method="post">
				<div class="row form-input">
					<label for="nome">Nome completo</label>
					<input type="email" name="email" id="email" required tabindex="1">
				</div>
				<div class="row form-input">
					<label for="email">E-mail</label>
					<input type="email" name="email" id="email" required tabindex="2">
				</div>
				<div class="row">
					<div class="col-2 form-input">
						<label for="senha">Senha</label>
						<input type="text" name="senha" id="senha" required tabindex="3">
					</div>
					<div class="col-2 form-input">
						<label for="cf-senha">Confirmar senha</label>
						<input type="text" name="cf-senha" id="cf-senha" required tabindex="4">
					</div>
				</div>
				<div class="row texto-center termos">
					<input type="checkbox" name="termo-uso" required tabindex="5">
					<small>Eu concordo com o
						<a href="#">Termo de Uso</a> e
						<a href="#">Políticas de Privacidade</a>.
					</small>
				</div>
				<div class="row texto-center btn-submit">
					<button type="submit" class="btn-destaque" tabindex="6">Cadastrar</button>
				</div>
			</form>
			<div class="row texto-center lk-login">
				<a href="login.php" tabindex="7">Já tem uma conta? Faça login</a>
			</div>
		</div>
	</section>
	<!-- Fim BLOCO DE CADASTRO -->

	<!-- Início FOOTER -->
	<footer class="footer">
		<div class="content">
			<div class="row text-center">
				<div class="footer-col">
					<h1>Contatos</h1>
					<ul class="contatos">
						<li>helper@sysevent.ga</li>
						<li>suporte@sysevent.ga</li>
						<li>0800 555 999</li>
					</ul>
				</div>

				<div class="footer-col">
					<h1>Redes Sociais</h1>
					<ul class="sociais">
						<li><a href="">Linked In</a></li>
						<li><a href="">Github</a></li>
						<li><a href="">Facebook</a></li>
					</ul>
				</div>
			</div>
			<div class="row autorais">
				<small>SysEvent 2018 &copy Todos os direitos reservados.</small>
			</div>
		</div>
	</footer>
	<!-- Fim FOOTER -->

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="../templates/js/geral-default.js"></script>
</body>

</html>