<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<title>S1 - ScrollSpy</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta charset="utf-8">
		<!-- Bootstrap -->
		<link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
		<!--[if lt IE 9]>
			<script src="js/html5shiv.js"></script>
		<![endif]-->

		<style type="text/css">
			#home{ padding-top: 40px; background: #333; height: 1200px; width: 100%; color: #fff;}
			#sobre{ padding-top: 40px; background: #666; height: 1200px; width: 100%;}
			#contato{ padding-top: 40px; background: #999; height: 1200px; width: 100%; color: #fff;}
		</style>

	</head>

	<body data-spy="scroll" data-target=".navbar">
		
		<div class="navbar-fixed-top">
			<div class="container">
				<div class="navbar">
					<div class="navbar-inner">
					  <ul class="nav">
						<a class="brand" href="#">Branding</a>
						<li class="active"><a href="#home">Home</a></li>
						<li><a href="#sobre">Sobre</a></li>
						<li><a href="#contato">Contato</a></li>
					   </ul>
					</div>
				</div>
			</div>
		</div>

		<div class="container">
			<div id="home"><h2>Home</h2></div>
			<div id="sobre"><h2>Sobre</h2></div>
			<div id="contato"><h2>Contato</h2></div>
		</div>

		<!-- Javascript -->
		<script src="http://code.jquery.com/jquery.js"></script>
		<script src="js/bootstrap-scrollspy.js"></script>
	</body>
</html>