<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<title>S1 - Menu</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta charset="utf-8">
		<!-- Bootstrap -->
		<link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
		<!--[if lt IE 9]>
			<script src="js/html5shiv.js"></script>
		<![endif]-->

		<style type="text/css">
			
		</style>

	</head>
	<body>
		<div class="container">
			<hr>
			<div class="row">
				<h3>Menus Dropdown com Ação</h3>
				<div class="span4">
					<div class="btn-group">
						<a class="btn dropdown-toggle btn-info" data-toggle="dropdown" href="#">
						Ral Oliver
						<span class="caret"></span> <!-- Ícone com seta -->
						</a>
						<ul class="dropdown-menu">
						<li><a class="btn-info" href="#"><i class="icon-user icon-white"></i> Perfil</a></li>
						<li><a class="btn-danger" href="#"><i class="icon-remove-sign icon-white"></i> Sair</a></li>
						</ul>
					</div>
				</div>
				<div class="span4">
					<div class="btn-group">
						<button class="btn btn-success">Menu</button> <!-- Para dividir o botão em dois -->
						<button class="btn btn-danger dropdown-toggle" data-toggle="dropdown">
						<span class="caret"></span> <!-- CARET para ser exibido o dropdown -->
						</button>
						<ul class="dropdown-menu">
						<li><a href="#">Portfólio</a></li>
							<li><a href="#">Projetos</a></li>
								<li class="dropdown-submenu">
								<a href="#">Clientes</a>
							<ul class="dropdown-menu">
								<li><a href="#">Web</a></li>
								<li><a href="#">Email Marketing</a></li>
							</ul>
						</li>
						</ul>
					</div>
				</div>
				<div class="span4">
					<div class="btn-group dropup">
						<button class="btn">Menu Pra Cima</button>
						<button class="btn dropdown-toggle" data-toggle="dropdown">
						<span class="caret"></span>
						</button>
						<ul class="dropdown-menu">
						<li><a href="#">Portfólio</a></li>
							<li><a href="#">Projetos</a></li>
								<li class="dropdown-submenu">
								<a href="#">Clientes</a>
							<ul class="dropdown-menu">
								<li><a href="#">Web</a></li>
								<li><a href="#">Email Marketing</a></li>
							</ul>
						</li>
						</ul>
					</div>
				</div>
			</div>
			<div class="row">
				<h3>Menus Dropdown</h3>
				<div class="span4">
					<ul class="dropdown-menu" style="display: block; position: static;"> 
					<!-- Utilize este style para visualizar os componentes de Dropdowns 
					apenas nesta situação, onde não há uma ação de click. -->
						<li class="disabled"><a href="#">Portfólio</a></li>
						<li><a href="#">Sites</a></li>
						<li><a href="#">Sistemas</a></li>
						<li><a href="#">Apps</a></li>
						<li class="disabled"><a href="#">Projetos</a></li>
						<li><a href="#">Tutoriais</a></li>
						<li><a href="#">Vídeos </a></li>
					</ul>
				</div>
				<div class="span4">
					<div class="dropdown">
						<ul class="dropdown-menu" style="display: block; position: static;">
							<li><a href="#">Portfólio</a></li>
							<li><a href="#">Projetos</a></li>
								<li class="dropdown-submenu">
								<a href="#">Clientes</a>
							<ul class="dropdown-menu">
								<li><a href="#">Web</a></li>
								<li><a href="#">Email Marketing</a></li>
							</ul>
						</li>
						</ul>
					</div>
				</div>
				<div class="span4">
					<div class="dropdown">
						<!-- Link ou button para o toggle dropdown -->
						<ul class="dropdown-menu pull-right" style="display: block; position: static;">
							<li><a href="#">Item 1</a></li>
							<li><a href="#">Item 2</a></li>
							<li><a href="#">Item 3</a></li>
							<li class="divider"></li>
							<li class="disabled"><a href="#">Separador</a></li>
						</ul>
					</div>
				</div>
			</div>
			<hr>
			<div class="container">
				<div class="row">
					<div class="span6">
						<div class="dropup"> <!-- Abrir sub-menu para cima -->
							<ul class="dropdown-menu" style="display: block; position: static;">
								<li><a href="#">Portfólio</a></li>
								<li><a href="#">Projetos</a></li>
									<li class="dropdown-submenu">
									<a href="#">Clientes</a>
								<ul class="dropdown-menu">
									<li><a href="#">Web</a></li>
									<li><a href="#">Email Marketing</a></li>
								</ul>
							</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="span6 offset6">
						<div class="dropdown">
							<ul class="dropdown-menu pull-right" style="display: block; position: static;">
								<li><a href="#">Portfólio</a></li>
								<li><a href="#">Projetos</a></li>
									<li class="dropdown-submenu pull-left">
									<a href="#">Clientes</a>
								<ul class="dropdown-menu">
									<li><a href="#">Web</a></li>
									<li><a href="#">Email Marketing</a></li>
								</ul>
							</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<hr>
			<div class="row">
				<h3>Grupo de Botões</h3>
				<div class="span4">
					<div class="btn-group"> <!-- Agrupamento de Botões. Similar a paginação. -->
						<button class="btn btn-danger"><i class="icon-arrow-left"></i></button>
						<button class="btn">1</button>
						<button class="btn">2</button>
						<button class="btn">3</button>
						<button class="btn">4</button>
						<button class="btn">5</button>
						<button class="btn btn-success"><i class="icon-arrow-right"></i></button>
					</div>
				</div>
				<div class="span5">
					<div class="btn-toolbar"> <!-- Para alinhamento como barra. -->
						<div class="btn-group">
							<button class="btn">Ver</button>
							<button class="btn">Editar</button>
							<button class="btn">Excluir</button>
						</div>
						<div class="btn-group">
							<button class="btn">Novo</button>
							<button class="btn">Voltar</button>
						</div>
						<div class="btn-group">
							<button class="btn">Sair</button>
						</div>
					</div>
				</div>
				<div class="span3">
					<div class="btn-group btn-group-vertical"> <!-- Para botões na vertical. -->
						<button class="btn">1</button>
						<button class="btn">2</button>
						<button class="btn">3</button>
					</div>
				</div>
			</div>	
			<br>
			<br>
			<br>
			<br>
			<br>		
		</div>
		<!-- Javascript -->
		<script src="http://code.jquery.com/jquery.js"></script>
		<script src="js/bootstrap.min.js"></script>
	</body>
</html>