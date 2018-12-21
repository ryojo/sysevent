<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Cadastre-se | SysEvent</title>
	<link rel="stylesheet" type="text/css" href="../templates/css/geral-bloco.css">
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

	<!-- Início BLOCO DE CADASTRO -->
	<section class="section bloco">
		<div class="content-bloco">
			<header class="row content-bloco-header">
				<h1>Faça seu cadastro</h1>
				<p>Comece a usar agora o gerenciador de eventos que é a sua cara</p>
			</header>
			<form class="row" action="" method="post">
				<div class="row form-input">
					<label for="nomecompleto">Nome completo</label>
					<input type="text" name="nomecompleto" id="nomecompleto" required tabindex="1">
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
						<label for="c-senha">Confirmar senha</label>
						<input type="text" name="c-senha" id="c-senha" required tabindex="4">
					</div>
				</div>
				<div class="row texto-center termos">
					<input type="checkbox" name="termo-uso" required tabindex="5">
					<small>Eu concordo com o
						<a href="../legal/termos-uso.html" target="_blank">Termos de Uso</a> e
						<a href="../legal/privacidade.html" target="_blank">Políticas de Privacidade</a>.
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