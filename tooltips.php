<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<title>S1 - Tooltips</title>
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
				<p><a href="#" rel="tooltip" data-placement="right" class="tooltips" title="Qual a sua dúvida?"><button type="submit" class="btn btn-warning"><i class="icon-question-sign icon-white"></i></button></a></p>
			<br>
				<p><a href="#" rel="tooltip" data-placement="right" class="tooltips" title="Informações"><button type="submit" class="btn btn-info"><i class="icon-info-sign icon-white"></i></button></a></p>
			<br>
				<p><a href="#" rel="tooltip" data-placement="right" class="tooltips" title="Pode Avançar!"><button type="submit" class="btn btn-success"><i class="icon-ok-sign icon-white"></i></button></a></p>
			</div>
		</div>

		<!-- Javascript -->
		<script src="http://code.jquery.com/jquery.js"></script>
		<script src="js/bootstrap-tooltip.js"></script>
		<script>$('.tooltips').tooltip('hide')</script>
	</body>
</html>