<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<title>S1 - Typeahead</title>
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
					<br><br>
					<label>Nome:</label>
					<input type="text" name="user" data-provide="typeahead" data-itens="4"
					data-source='["Israel","Filippe","Matheus","Felipe","Mateus","Oliver","Ral Oliver"]'
					autocomplete="off">
					<!-- este auto-complete pode também ser feito via array -->
				</div>
			</div>
		</div>

		<!-- Javascript -->
		<script src="http://code.jquery.com/jquery.js"></script>
		<script src="js/bootstrap-typeahead.js"></script>
		<script>$('.typeahead').typeahead()</script>
	</body>
</html>