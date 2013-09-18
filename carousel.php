<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<title>S1 - SlideShow</title>
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
				<div class="span12">
					<div id="myCarousel" class="carousel slide">
						<!-- Carousel indicators -->
						<ol class="carousel-indicators">
						<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
						<li data-target="#myCarousel" data-slide-to="1"></li>
						<li data-target="#myCarousel" data-slide-to="2"></li>
						</ol>
						<!-- Carousel items -->
						<div class="carousel-inner">
						<div class="active item"><img src="http://placehold.it/960x480">
							<div class="carousel-caption">
								<h4>Title 1</h4>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique, corporis, itaque saepe nisi doloribus quod dolor repudiandae harum mollitia eveniet impedit tempora fuga error expedita consectetur cumque provident facere asperiores!<p>
							</div>
						</div>
						<div class="item"><img src="http://placehold.it/960x480">
							<div class="carousel-caption">
								<h4>Title 2</h4>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero, ullam fuga enim voluptas harum qui laborum tempore nam repellendus nobis. Sunt, eius maxime ex similique architecto illum minus deleniti provident!<p>
							</div>
						</div>
						<div class="item"><img src="http://placehold.it/960x480">
							<div class="carousel-caption">
								<h4>Title 3</h4>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe, optio, eos, iusto id commodi maxime debitis ut maiores laborum alias numquam veritatis blanditiis sunt dolores quis placeat necessitatibus neque repellat.<p>
							</div>
						</div>
						</div>
						<!-- Carousel navigations -->
						<a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
						<a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>
					</div>
				</div>
			</div>
		</div>

		<!-- Javascript -->
		<script src="http://code.jquery.com/jquery.js"></script>
		<script src="js/bootstrap-transition.js"></script>
		<script src="js/bootstrap-carousel.js"></script>
		<script>
			$('.carousel').carousel({
				// velocidade do slideshow
				interval: 500,
				pause: "hover"
				// ao passar o mouse o slide pausa
			})		
		</script>
	</body>
</html>