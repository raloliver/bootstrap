<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<title>S1 - Formulários</title>
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
			<form method="" action="">
				
				Text: <input type="text" 
							 name="" 
							 id="" 
							 value="" 
							 placeholder="Digite algo aqui..." 
							 required="required"> 

				<button type="submit">Enviar</button>

				<br>

				Password: <input type="password" placeholder="Digite sua senha..."> <br>
				Datetime: <input type="datetime"> <br>
				Datetime-local: <input type="datetime-local"> <br>
				Date: <input type="date"> <br>
				Month: <input type="month"> <br>
				Time: <input type="time"> <br>
				Week: <input type="week"> <br>
				Number: <input type="number"> <br>
				E-mail: <input type="email"> <br>
				URL: <input type="url"> <br>
				Search: <input type="search"> <br>
				Tel: <input type="tel"> <br>
				Color: <input type="color">

			</form>

		</div>
		<div class="row">
			<div class="span6">
				<div class="input-prepend">
					<span class="add-on">@</span>
					<input type="text" placeholder="Username">
				</div>
			</div>
		</div>
		<!-- Javascript -->
		<script src="http://code.jquery.com/jquery.js"></script>
		<script src="js/bootstrap.min.js"></script>
	</body>
</html>