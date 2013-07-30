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
				<button type="submit" class="btn btn-primary">Primary</button>

				<br>
				Password: <input type="password" placeholder="Digite sua senha..."> 
				<button type="submit" class="btn btn-info">Info</button>
				<br>
				Datetime: <input type="datetime"> 
				<button type="submit" class="btn btn-success">Success</button>
				<br>
				Datetime-local: <input type="datetime-local"> 
				<button type="submit" class="btn btn-warning">Warning</button>
				<br>
				Date: <input type="date"> 
				<button type="submit" class="btn btn-danger">Danger</button>
				<br>
				Month: <input type="month"> 
				<button type="submit" class="btn btn-inverse">Inverse</button>
				<br>
				Time: <input type="time"> 
				<button type="submit" class="btn btn-link">Link</button>
				<br>
				Week: <input type="week"> 
				<button type="submit" class="btn">Button</button>
				<br>
				Number: <input type="number"> 
				<button class="btn btn-large btn-primary" type="submit">Botão Grande</button>
				<button class="btn btn-large" type="submit">Botão Grande</button>
				<br>
				E-mail: <input type="email"> 
				<button class="btn btn-primary" type="submit">Padrão de botão</button>
				<button class="btn" type="submit">Padrão de botão</button>
				<br>
				URL: <input type="url"> 
				<button class="btn btn-small btn-primary" type="submit">Botão pequeno</button>
				<button class="btn btn-small" type="submit">Botão pequeno</button>
				<br>
				Search: <input type="search"> 
				<button class="btn btn-mini btn-primary" type="submit">Botão miniatura</button>
				<button class="btn btn-mini" type="submit">Botão miniatura</button>
				<br>
				Tel: <input type="tel"> <br>
				Color: <input type="color">

			</form>
		</div>
		<hr>
		<div class="container">
			<div class="row">
				<div class="span3">
					<button class="btn btn-large btn-block btn-primary" type="submit">Botão em Bloco</button><br>
					<button class="btn btn-large btn-block" type="submit">Botão em Bloco</button>
				</div>
				<div class="span6">
					<button class="btn btn-large btn-block btn-primary" type="submit">Botão em Bloco</button><br>
					<button class="btn btn-large btn-block" type="submit">Botão em Bloco</button><br>
					<a class="btn" href="">Link</a>
					<button class="btn" type="submit">Botões</button>
					<input class="btn" type="button" value="Input">
					<input class="btn" type="submit" value="Enviar">
				</div>
				<div class="span3">
					<a href="#" onclick="return false;" class="btn btn-large btn-primary disabled">Link Desabilitado com JS</a><br>
					<a href="#" class="btn btn-large disabled">Link</a><br>
					<button type="button" class="btn btn-large btn-primary disabled" disabled="disabled">Botão Desabilitado sem JS</button>
					<button type="button" class="btn btn-large" disabled>Botões</button>
				</div>
			</div>
					<br>
					<br>
					<br>
					<br>
				</div>
			</div>
		</div>
		<!-- Javascript -->
		<script src="http://code.jquery.com/jquery.js"></script>
		<script src="js/bootstrap.min.js"></script>
	</body>
</html>