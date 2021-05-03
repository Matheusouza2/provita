<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Provita - Armazém de dados</title>
		<meta name="description" content="A Provita facilita você a se conectar e ter acesso a todos os seus documentos na área da saúde">
		<meta name="autor" content="fernando-lopes">
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="shortcut icon" href="{{ asset('site/img/favicon.png') }}">
		<link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700" rel="stylesheet">
		<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"/>
		<link rel="stylesheet" href="{{ asset('site/css/style.css') }}">
</head>
<body>
	<!--header-->
	<header>
		<div class="logo"><a href="/"><img class="logo-img" src="{{ asset('site/img/logo.svg') }}" alt="logo provita"></a></div>
		<div class="header-btn">
			<a class="btn-cadastro" href="/cadastrar">Cadastre-se</a>
			<a class="btn-login" href="/entrar">Login</a>
		</div>
	</header>

<div class=row>
	<div class="text">
		<div class="text-home">
			<h1>Simples, prático<br>e seguro.</h1>
			<p>A Provita facilita você a se conectar e ter acesso a todos 
		os seus documentos na área da saúde</p>
		</div>
	</div>
	<div class="img-abertura">
		<img src="{{ asset('site/img/doutora.png') }}">
	</div>
</div>

	<!--footer-->
	<footer>
		
		<a class="text-sm-left" href="#">Política de privacidade</a>
		<a class="text-sm-left" href="/termos-uso" target="_blank">Termos de uso</a>
		<a class="legal-links" href="/contato" target="_blank">Contato</a>
		<a class="legal-links" href="https://youfound.com.br" target="_blank">Agência web</a>
		
		<!----float-button---->

		<a href="#" class="float" id="menu-share">
			<i class="fas fa-share-alt fa-2x"></i>
		</a>
			<ul>
				<li>
					<a href="https://www.facebook.com/Provita-100141064824344/" target="_blank">
						<i class="fab fa-facebook-square fa-2x"></i>
					</a>
				</li>
				<li>
					<a href="https://api.whatsapp.com/send?phone=5511947303098 &text=Olá%20Provita%20pode%20me%20ajudar%20?" target="_blank">
						<i class="fab fa-whatsapp fa-2x"></i>
					</a>
				</li>
			</ul>
			
	</footer>
</body>
</html>