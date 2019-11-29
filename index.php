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

	<script src="extensions/multiple-selection-row/bootstrap-table-multiple-selection-row.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
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

<script type="text/javascript">
	google.charts.load('current', {
		'packages':['corechart', 'bar']});

	google.charts.setOnLoadCallback(drawBasic);

function drawBasic() {
    var data = new google.visualization.DataTable();
	data.addColumn('timeofday', 'Hora do dia');
	data.addColumn('number', 'Número de visitas');

	data.addRows([
		[{v: [7, 0, 0], f: '7h'}, 4],
		[{v: [8, 0, 0], f: '8h'}, 10],
		[{v: [9, 0, 0], f: '9h'}, 8],
		[{v: [10, 0, 0], f: '10h'}, 5],
		[{v: [11, 0, 0], f: '11h'}, 6],
		[{v: [12, 0, 0], f: '12h'}, 2],
		[{v: [13, 0, 0], f: '13h'}, 6],
		[{v: [14, 0, 0], f: '14h'}, 4],
		[{v: [15, 0, 0], f: '15h'}, 3],
		[{v: [16, 0, 0], f: '16h'}, 2],
		[{v: [17, 0, 0], f: '17h'}, 1]
		]);

    var options = {
		title: 'Número de visitas ao CEAP',
		height: 600,
        hAxis: {
          title: 'Hora do dia',
          format: 'h:mm a',
          viewWindow: {
            min: [6, 30, 0],
            max: [19, 0, 0]
          }
        },
        vAxis: {
          title: 'Número de veículos'
        }
      };

    var chart = new google.visualization.ColumnChart(
        document.getElementById('grafico_div'));

    chart.draw(data, options);
    }
</script>

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
						<a class="nav-link" href="/index.php">Home <span class="mr-only">(atual)</span></a>
					</li>

					<li class="nav-item">
						<a class="nav-link" href="php/cadastrar_dados.php">Cadastrar dados</a>
					</li>

					<li class="nav-item">
						<a class="nav-link" href="php/acessar_dados.php">Acessar dados</a>
					</li>

					<li class="nav-item">	
						<a class="nav-link" href="php/atualizar_dados.php">Atualizar dados</a>
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

<div class="container-fluid">
	<br>
	<div class="row">
		<div class="col-sm-3 d-flex">
			<div class="card card-body flex-fill">
				<h5 class="card-title">Valores</h5>
				<p class="card-text">Das sete até 14 horas - R$10,00<br>
					Das 15 até 23 horas - R$15,00<br>
					Das 24 até sete horas - R$20,00
				</p>
			</div>
		</div>

		<div class="col-sm-3 d-flex">
			<div class="card card-body flex-fill">
				<h5 class="card-title">Formas de pagamento</h5>
				<p class="card-text">Pelo aplicativo oficial do estabelecimento;<br>No caixa assistido; ou<br>Pelo totem de dentro do CEAP.</p>
			</div>
		</div>

		<div class="col-sm-3 d-flex">
			<div class="card card-body flex-fill">
				<h5 class="card-title">Endereço</h5>
				<p class="card-text">Praça Nina Rodrigues, 151/153 - Liberdade, São Paulo - SP, 01517-030</p>
				<a class="btn btn-primary" target="_blank" href="https://www.google.com.br/maps/place/INSS/@-23.5607163,-46.6351786,16z/">Acessar</a>
			</div>
		</div>

		<div class="col-sm-3 d-flex">
			<div class="card card-body flex-fill">
				<h5 class="card-title">Tipo do estacionamento</h5>
				<p class="card-text">Estacionamento fechado (com cobertura).</p><br>
				<button type="button" data-toggle="modal" data-target="#myModal" class="btn btn-primary">Ver imagem do estacionamento</button>
			</div>
		</div>
	</div>

	<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"aria-hidden="true">
		<div class="modal-dialog modal-lg modal-dialog-centered">
			<div class="modal-content">
				<div class="modal-body">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<img src="https://images.pexels.com/photos/6517/parking-multi-storey-car-park.jpg" class="img-responsive" style="width: 100%;">
				</div>
			</div>
		</div>
	</div>
	<br>
	
	<div id="grafico_div"></div>

</div>
</body>
</html>
