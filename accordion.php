<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<title>S1 - Accordions</title>
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
				<div class="span3">
					<div class="accordion-group">
						<div class="accordion-heading">
						<a class="accordion-toggle" data-toggle="collapse" href="#collapse">
						Categorias
						</a>
						</div>
						<div id="collapse" class="accordion-body collapse in">
						<div class="accordion-inner">
							<ul class="nav">
								<li><a href="#">Culinária</a></li>
								<li><a href="#">Esportes</a></li>
								<li><a href="#">Entretenimento</a></li>								
							</ul>
						</div>
						</div>
					</div>
					<div class="accordion-group">
						<div class="accordion-heading">
						<a class="accordion-toggle" data-toggle="collapse" href="#collapse2">
						Sub-categorias
						</a>
						</div>
						<div id="collapse2" class="accordion-body collapse">
						<div class="accordion-inner">
							<ul class="nav">
								<li><a href="#">Culinária</a></li>
								<li><a href="#">Esportes</a></li>
								<li><a href="#">Entretenimento</a></li>								
							</ul>
						</div>
						</div>
					</div>
				</div>
				<div class="span3">
					<button type="button" class="btn btn-danger" data-toggle="collapse" data-target="#demo">
						Close
					</button>
					<div id="demo" class="collapse in">Lorem</div>
				</div>
				<div class="span3">
					<button type="button" class="btn btn-success" data-toggle="collapse" data-target="#demo2">
						Open
					</button>
					<div id="demo2" class="collapse">Lorem</div>
				</div>
				<div class="span3">
					<a class="btn btn-warning" data-toggle="collapse" href="#demo3">
						Link
					</a>
				<div id="demo3" class="collapse in">Lorem</div>
				</div>
			</div>
		</div>

		<!-- Javascript -->
		<script src="http://code.jquery.com/jquery.js"></script>
		<script src="js/bootstrap-collapse.js"></script>
		<script src="js/bootstrap-transition.js"></script>
	</body>
</html>