<?php
error_reporting(E_ERROR);

$login_cookie = $_COOKIE['username'];

?>

<!DOCTYPE html>
<html lang="pt">
<head>
	<title>CEAP | Estacionamento</title>
	
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" href="bs/bootstrap.min.css">
</head>

<style type="text/css">
h1, h2 {
	text-align: center;
}

.bg-img { 
	background-image: url("imgs/est3.jpeg");
	filter: blur(4px);
	-webkit-filter: blur(4px);

	height: 100%;

	background-repeat: no-repeat;
	background-size: cover;
	background-position: center;

	-webkit-background-size: cover;
	-moz-background-size: cover;
	-o-background-size: cover;
	background-size: cover;
}

#perfil:hover {
	font-weight: 500;
}

</style>

<body>
	<?php

		if (isset($login_cookie)){
			echo '<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<span class="navbar-brand">Estacionamento CEAP</span>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Ativar navegação">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="navbarText">
				<ul class="navbar-nav mr-auto">
					<li class="nav-item active">
						<a class="nav-link" href="#">Home <span class="mr-only">(atual)</span></a>
					</li>

					<li class="nav-item">
						<a class="nav-link" href="php/cadastrar_dados.php">Cadastrar dados</a>
					</li>

					<li class="nav-item">
						<a class="nav-link" href="php/acessar_dados.php">Acessar dados</a>
					</li>
				</ul>

				<form class="form-inline my-2 my-lg-0">
					<a id="perfil" href="php/perfil.php"><span class="navbar-text">Bem-vindo, ' . $login_cookie . '!</span></a>
				</form>
			</div>
		</nav>';
		} else {
			echo '<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<span class="navbar-brand">Estacionamento CEAP</span>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Ativar navegação">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="navbarText">
				<ul class="navbar-nav mr-auto">
					<li class="nav-item active">
						<a class="nav-link" href="#">Home <span class="mr-only">(atual)</span></a>
					</li>
				</ul>

				<form class="form-inline my-2 my-lg-0">
					<a id="perfil" href="admin.html"><span class="navbar-text">Bem-vindo(a), convidado(a)!</span></a>
				</form>
			</div>
		</nav>';
		}

	?>
<div class="row">
	<div class="col-sm-6">
		<div class="card">
			<div class="card-body">
				<h5 class="card-title">Valores</h5>
				<p class="card-text">
</div>
</body>
</html>
