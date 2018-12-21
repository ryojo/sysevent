<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Recuperação de Senha</title>
	<link rel="stylesheet" type="text/css" href="../templates/css/senha.css">
</head>

<body>
	<!-- Início BARRA MENU -->
	<header class="header">
		<div class="content">
			<div class="logo fl-left">
				<a href="index.html">
					<span style="color:#f39c12">Sys</span><span style="color:#fff">Event</span>
				</a>
			</div>

			<a href="#" class="nav-toggle fl-right">
				<img src="views/templates/icons/menu-mobile.png">
			</a>
			<nav class="nav">
				<p class="fl-right">
					<span class="nav-close">
						<img src="views/templates/icons/close.png">
					</span>
				</p>
				<ul>
					<li><a href="../../como-usar.html">Como usar</a></li>
					<li><a href="../../devs.html">Devs</a></li>
					<li><a href="#">Perguntas frequentes</a></li>
					<li><a href="login.php">Entrar</a></li>
					<li><a href="cadastro.php" class="btn-destaque">Cadastre-se</a></li>
				</ul>
			</nav>
		</div>
	</header>
	<!-- Fim BARRA MENU -->

	<!-- Início BLOCO ESQUECI MINHA SENHA -->
	<section class="section bloco">
		<div class="content-bloco">
			<header class="row content-bloco-header">
				<h1>Esqueci minha senha</h1>
				<p>Insira o e-mail cadastrado para receber instruções de como recuperar sua senha.</p>
			</header>
			<form class="row" action="" method="post">
				<div class="row form-input">
					<label for="email">E-mail</label>
					<input type="email" name="email" id="email" required tabindex="1">
				</div>
				<div class="row texto-center btn-submit">
					<button type="submit" class="btn-destaque" tabindex="2">Recuperar senha</button>
				</div>
			</form>
			<div class="row texto-center lk-login">
				<a href="login.php" tabindex="7">Já sabe sua senha? Faça login</a>
			</div>
			<div class="row texto-center lk-cadastre-se">
				<a href="cadastro.php" tabindex="5">Ainda não tem uma conta? Cadastre-se</a>
			</div>
		</div>
	</section>
	<!-- Fim BLOCO BLOCO ESQUECI MINHA SENHA -->

	<!-- Início FOOTER -->
	<footer class="footer">
		<div class="content-fluid">
			<div class="row">
				<div class="footer-col">
					<h1>Fale Conosco</h1>
					<small>contato@sysevent.ga</small>
					<ul class="fale-conosco">
						<li><a href="#">Suporte online</a></li>
						<li><a href="#">Quero colaborar</a></li>
					</ul>
				</div>

				<div class="footer-col">
					<h1>Redes Sociais</h1>
					<small>Dev e criador do projeto</small>
					<ul class="sociais">
						<li><a href="https://www.linkedin.com/in/juancleiton30/" target="_blank" title="Perfil do criador do projeto">Linked
								In</a></li>
						<li><a href="https://github.com/juancleiton/sysevent" target="_blank" title="Repositório do projeto">Github</a></li>
						<li><a href="https://www.facebook.com/juancleiton30" target="_blank" title="Perfil do criador do projeto">Facebook</a></li>
					</ul>
				</div>
				<div class="footer-col">
					<h1>SysEvent &copy 2018</h1>
					<small>Todos os direitos reservados</small>
					<ul class="legal">
						<li><a href="../legal/termos-uso.html">Termos de Uso</a></li>
						<li><a href="../legal/privacidade.html">Privacidade</a></li>
					</ul>
				</div>
			</div>
		</div>
	</footer>
	<!-- Fim FOOTER -->

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="../templates/js/geral-default.js"></script>
</body>

</html>