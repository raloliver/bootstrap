<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<title>S1 - Buttons</title>
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
				<div class="span2">
					<button type="button" class="btn btn_sign btn-primary" data-loading-text="Enviando...">Enviar</button>
				<!-- é ideal usar este recurso caso seja necessário evitar o clique diversas vezes -->
				</div>
				<div class="span2">
					<button type="button" class="btn" data-toggle="button">Selecione Aqui</button>
					<!-- ao clicar o botão é selecionado -->
				</div>
				<div class="span4">
					<div class="btn-group" data-toggle="buttons-checkbox">
						<button type="button" class="btn btn-warning">Voltar</button>
						<button type="button" class="btn btn-success">Atual</button>
						<button type="button" class="btn btn-info">Próximo</button>
					</div>
					<!-- selecao multipla em um menu de navegação horizontal -->
				</div>
				<div class="span4">
					<div class="btn-group" data-toggle="buttons-radio">
						<button type="button" class="btn btn-info">Back</button>
						<button type="button" class="btn btn-success">NOW</button>
						<button type="button" class="btn btn-warning">Next</button>
					</div>
				</div>
			</div>
		</div>

		<!-- Javascript -->
		<script src="http://code.jquery.com/jquery.js"></script>
		<script src="js/bootstrap-button.js"></script>
		<script>$('.btn_sign').button('loading')</script>
	</body>
</html>