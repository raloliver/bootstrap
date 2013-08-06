<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<title>S1 - Navegação</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta charset="utf-8">
		<!-- Bootstrap -->
		<link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
		<!--[if lt IE 9]>
			<script src="js/html5shiv.js"></script>
		<![endif]-->

		<style type="text/css">
			body {padding-bottom: 40px;}
		</style>

	</head>
	<body>
		<div class="container">
			<div class="navbar navbar-fixed-bottom navbar-inverse">
				<div class="navbar-inner">
					<a class="brand" href="#">Nome da Empresa</a> <!-- Um link simples para mostrar sua marca ou nome do projeto, requer apenas uma tag de link. -->
						<ul class="nav">
							<li class="divider-vertical"></li>
							<li class="active"><a href="#">Home</a></li>
							<li><a href="#">Sobre</a></li>							
							<li><a href="#">Produtos</a></li>
						</ul>
						<ul class="nav pull-right">
							<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">
							Usuário
							<b class="caret"></b>
							</a>
							<ul class="dropdown-menu">
							<li><a href="#">Perfil</a></li>							
							<li><a href="#">Sair</a></li>
							</ul>
						</li>
						</ul>
						<form class="navbar-search pull-right">
							<input type="text" class="search-query" placeholder="pesquisar...">
						</form>
				</div>
			</div>
			<div class="row">
				<div class="span6">
					<h3>Mapa do Site</h3>
					<ul class="breadcrumb">
						<li><a href="#">Home</a> <span class="divider">></span></li>
						<li><a href="#">Empresa</a> <span class="divider">></span></li>
						<li class="active">Localização</li>
					</ul>
				</div>
			</div>
			<div class="row">
				<div class="span12">
					<h3>Paginação</h3>
					<div class="pagination pagination-right">
						<ul>
							<li><a href="#">Anterior</a></li>
							<li><a href="#">1</a></li>
							<li class="disabled"><a href="#">2</a></li>
							<li><a href="#">3</a></li>
							<li><a href="#">Próximo</a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="span12">
					<h3>Paginador</h3>
					<ul class="pager">
						<li class="previous">
						<a href="#">&larr; Anterior</a>
						</li>
						<li class="next">
						<a href="#">Próximo &rarr;</a>
						</li>
					</ul>
					<br>
					<br>
					<ul class="pager">
						<li class="previous disabled">
						<a href="#">&larr; Mais antigos</a>
						</li>
						...
					</ul>
				</div>
			</div>
		</div>
		<!-- Javascript -->
		<script src="http://code.jquery.com/jquery.js"></script>
		<script src="js/bootstrap.min.js"></script>
	</body>
</html>