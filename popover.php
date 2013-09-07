<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<title>S1 - Popover</title>
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
			<div class="span12">
				<br>
				<br>
				<br>
			<a href="#" class="btn btn-danger popovers" data-toogle="popover" data-placement="bottom"data-content="Já que você clicou, agora já sabe pra que serve ;)" title="Não era pra clicar =/">Não clique aqui!</a>
			</div>
		</div>

		<!-- Javascript -->
		<script src="http://code.jquery.com/jquery.js"></script>
		<script src="js/bootstrap-tooltip.js"></script>
		<script src="js/bootstrap-popover.js"></script>
		<script>$('.popovers').popover()</script>
	</body>
</html>