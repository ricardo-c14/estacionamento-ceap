<?php

error_reporting(E_ERROR);
$login_cookie = $_COOKIE['username'];

?>

<!DOCTYPE html>
<html lang="pt">
<head>
	<title>CEAP | Cadastro de dados</title>

	<meta charset="utf-8">

	<link rel="stylesheet" href="../bs/bootstrap.min.css">

	<script src="../js/format.js"></script>
</head>

<style type="text/css">
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
				<li class="nav-item">
					<a class="nav-link" href="../index.php">Home</a>
				</li>

				<li class="nav-item active">
					<a class="nav-link" href="#">Cadastrar dados <span class="mr-only">(atual)</span></a>
				</li>

				<li class="nav-item">
					<a class="nav-link" href="../php/acessar_dados.php">Acessar dados</a>
				</li>
			</ul>
				<form class="form-inline my-2 my-lg-0">
					<a id="perfil" href="perfil.php"><span class="navbar-text">Bem-vindo, ' . $login_cookie . '!</span></a>
				</form>
		</div>
	</nav>

		<div class="container">
			<iframe name="enviar_form" style="width: 0; height: 0; border: 0; border: none; visibility: hidden;"></iframe>
			<h2>Dados do proprietário</h2>
			<br>

			<form method="post" action="../php/conectar.php" class="was-validated" target="enviar_form">
				<div class="form-group">
					<label for="nome">Nome:</label>
					<input type="text" class="form-control" id="nome" placeholder="Nome do proprietário do veículo" name="nome" required>
					<div class="invalid-feedback">* é necessário inserir o nome do proprietário do veículo.</div>
				</div>

				<div class="form-group">
					<label for="rg">RG:</label>
					<input type="text" class="form-control" id="rg" placeholder="xx.xxx.xxx-x" name="rg" required maxlength="12">
					<div class="invalid-feedback">* é necessário inserir o RG do proprietário.</div>
				</div>

				<div class="form-group">
					<label for="endereco">Endereço</label>
					<input type="text" class="form-control" name="endereco" id="endereco" placeholder="Rua do proprietário" required>
					<div class="invalid-feedback">* é necessário inserir o endereço.</div>
				</div>

				<h2>Dados do veículo</h2>
				<div class="form-group">
					<label for="modelo">Modelo</label>
					<input type="text" class="form-control" name="modelo" id="modelo" placeholder="Modelo do veículo" required>
					<div class="invalid-feedback">* é necessário inserir o modelo do veículo.</div>
				</div>

				<div class="form-group">
					<label for="marca">Marca:</label>
					<input type="text" class="form-control" name="marca" id="marca" placeholder="Marca do veículo" required>
					<div class="invalid-feedback">* é necessário inserir a marca do veículo.</div>
				</div>

				<div class="form-group">
					<label for="placa">Placa:</label>
					<input type="text" class="form-control" name="placa" id="placa" placeholder="xxx-XXXX" required maxlength="8">
					<div class="invalid-feedback">* é necessário inserir a placa do veículo.</div>
				</div>

				<center>
					<button type="submit" class="btn btn-primary">Enviar dados</button>
				</center>
			</form>
	</div>';
		} else {
			echo '<div class="page-wrap d-flex flex-row align-items-center" style="min-height: 100vh">
				<div class="container">
					<div class="row justify-content-center">
						<div class="col-md-12 text-center">
							<span class="display-1 d-block">404</span>
							<div class="mb-4 lead">A página que você estava procurando está inacessível ou você não tem as permissões necessárias para acessá-la.<br>Você pode tentar <a href="../admin.html">entrar como administrador</a> ou <a href="../index.php">retornar à página inicial</a>.
							</div>
						</div>
					</div>
				</div>
			</div>';
			}
	?>

</body>
</html>
