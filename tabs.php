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
			<div class="row">
				<h3>Conteúdo em Abas</h3>
				<!-- ABAS PADRÃO -->
					<div class="span6">
					<ul class="nav nav-tabs">
						<li class="active">
						<a href="#tab1" data-toggle="tab">Fotos</a>
						</li>
						<li>
						<a href="#tab2" data-toggle="tab">Vídeos</a>
						</li>
						</ul>
						<div class="tab-content">
						<div class="tab-pane active" id="tab1">
						<p><img src="http://lorempixel.com/150/100/business/1/Copyright" class="img-rounded">
						<img src="http://lorempixel.com/150/100/" class="img-rounded">
						<img src="http://lorempixel.com/150/100/sports/" class="img-rounded"></p>				
						<button type="submit" class="btn btn-danger pull-right">Veja <i class="icon-plus icon-white"></i></button>
						</div>
						<div class="tab-pane" id="tab2">
						<p><img src="http://placehold.it/135x100" class="img-polaroid">
						<img src="http://placehold.it/135x100" class="img-polaroid">
						<img src="http://placehold.it/135x100" class="img-polaroid"></p>				
						<button type="submit" class="btn btn-danger pull-right">Veja <i class="icon-plus icon-white"></i></button>
						</div>
					</div>
				</div>
					<!-- ABAS ABAIXO
				<div class="span6">
					<div class="tabbable tabs-bellow">
					<div class="tab-content">
						<div class="tab-pane active" id="tab1">
						<p><img src="http://lorempixel.com/150/100/business/1/Copyright" class="img-rounded">
						<img src="http://lorempixel.com/150/100/" class="img-rounded">
						<img src="http://lorempixel.com/150/100/sports/" class="img-rounded"></p>				
						<button type="submit" class="btn btn-danger pull-right">Veja <i class="icon-plus icon-white"></i></button>
						</div>
						<div class="tab-pane" id="tab2">
						<p><img src="http://placehold.it/135x100" class="img-polaroid">
						<img src="http://placehold.it/135x100" class="img-polaroid">
						<img src="http://placehold.it/135x100" class="img-polaroid"></p>				
						<button type="submit" class="btn btn-danger pull-right">Veja <i class="icon-plus icon-white"></i></button>
						</div>
					</div>
					<ul class="nav nav-tabs">
						<li class="active">
						<a href="#tab1" data-toggle="tab">Fotos</a>
						</li>
						<li>
						<a href="#tab2" data-toggle="tab">Vídeos</a>
						</li>
					</ul>
					</div>
				</div>-->
				<!-- ABAS ESQUERDA E/OU DIREITA 
				<div class="span6">
					<div class="tabbable tabs-right">
					<ul class="nav nav-tabs">
					<li class="active">
						<a href="#tab1" data-toggle="tab">Fotos</a>
						</li>
						<li>
						<a href="#tab2" data-toggle="tab">Vídeos</a>
						</li>
					</ul>
					<div class="tab-content">
						<div class="tab-pane active" id="tab1">
						<p>
						<img src="http://lorempixel.com/150/100/business/1/Copyright" class="img-rounded">
						<img src="http://lorempixel.com/150/100/" class="img-rounded">
						</p>				
						<button type="submit" class="btn btn-danger pull-right">Veja <i class="icon-plus icon-white"></i></button>
						</div>
						<div class="tab-pane" id="tab2">
						<p>
						<img src="http://placehold.it/135x100" class="img-polaroid">
						<img src="http://placehold.it/135x100" class="img-polaroid">
						</p>				
						<button type="submit" class="btn btn-danger pull-right">Veja <i class="icon-plus icon-white"></i></button>
						</div>
					</div>
					</div>
				</div>-->
			</div>
			<hr>
			<div class="row">
				<h3>Abas, Menus e Listas com dropdowns</h3>
				<div class="span4">
					<ul class="nav nav-tabs">
						<li class="active"><a href="#">Painel</a></li>
						<li><a href="#">Notícias</a></li>
						<li class="dropdown">
							<a class="dropdown-toggle" data-toggle="dropdown" href="#">
							Ral Oliver
							<span class="caret"></span>
							</a>
						<ul class="dropdown-menu">
							<li><a href="#">Ver Site</a></li>
							<li><a href="#">Perfil</a></li>
							<li><a href="#">Sair</a></li>
						</ul>
						</li>
					</ul>
				</div>
				<div class="span4">
					<ul class="nav nav-pills">
						<li><a href="#">Painel</a></li>
						<li class="active"><a href="#">Notícias</a></li>
						<li class="dropdown">
							<a class="dropdown-toggle" data-toggle="dropdown" href="#">
							Ral Oliver
							<span class="caret"></span>
							</a>
						<ul class="dropdown-menu">
							<li><a href="#">Ver Site</a></li>
							<li><a href="#">Perfil</a></li>
							<li><a href="#">Sair</a></li>
						</ul>
						</li>
					</ul>
				</div>
				<div class="span4">
					<ul class="nav nav-list well">
						<li class="nav-header">Portfólio</li>
						<li class="active"><a href="#">Sites</a></li>
						<li><a href="#">Sistemas</a></li>
						<li class="nav-header">Projetos</li>
						<li class="divider"></li>
						<li><a href="#">Tutoriais</a></li>
						<li class="divider"></li>
						<li><a href="#">Vídeos</a></li>
						<li class="divider"></li>
						<li><a href="#">Administração</a></li>
					</ul>
				</div>
			</div>
			<hr>
			<div class="row">
				<h3>Navegação Horizontal</h3>
				<hr>
				<div class="span6">
					<h4>Abas</h4>
					<ul class="nav nav-tabs">
					<li class="active">
					<a href="#">Fotos</a>
					</li>
					<li><a href="#">Vídeos</a></li>
					<li><a href="#">Áudios</a></li>
					</ul>
				</div>	
				<div class="span6">
					<h4>Menu</h4>
					<ul class="nav nav-pills">
						<li class="active">
						<a href="#">Fotos</a>
						</li>
						<li><a href="#">Vídeos</a></li>
						<li><a href="#">Áudios</a></li>
					</ul>
				</div>		
			</div>
			<hr>
			<div class="row">
				<h4>Navegação Horizontal por Padrão</h4>
				<div class="span6">
					<ul class="nav nav-pills">
						<li class="active">
						<a href="#">Fotos</a>
						</li>
						<li><a href="#">Vídeos</a></li>
						<li class="disabled" onclick="javascript: return false;"><a href="#">Áudios</a></li>
					</ul>
				</div>
				<div class="span6">
					<ul class="nav nav-pills pull-right">
						<li class="active">
						<a href="#">Fotos</a>
						</li>
						<li><a href="#">Vídeos</a></li>
						<li class="disabled" onclick="javascript: return false;"><a href="#">Áudios</a></li>
					</ul>
				</div>
			</div>
			<div class="row">
			<h3>Navegação Vertical</h3>
				<hr>
				<div class="span6">
					<h4>Abas</h4>
					<ul class="nav nav-tabs nav-stacked">
					<li class="active">
					<a href="#">Fotos</a>
					</li>
					<li><a href="#">Vídeos</a></li>
					<li><a href="#">Áudios</a></li>
					</ul>
				</div>	
				<div class="span6">
					<h4>Menu</h4>
					<ul class="nav nav-pills nav-stacked">
						<li class="active">
						<a href="#">Fotos</a>
						</li>
						<li><a href="#">Vídeos</a></li>
						<li><a href="#">Áudios</a></li>
					</ul>
				</div>	
			</div>					
		</div>
		<!-- Javascript -->
		<script src="http://code.jquery.com/jquery.js"></script>
		<script src="js/bootstrap.min.js"></script>
	</body>
</html>