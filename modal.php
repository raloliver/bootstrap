<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<title>S1 - Modal</title>
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

		<!-- <div class="modal">
			<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal"
			aria-hidden="true">&times;</button>
			<h3>Título do Módulo</h3>
			</div>
			<div class="modal-body">
			<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
			</div>
			<div class="modal-footer">
			<a href="#" class="btn btn-danger">Cancelar</a>
			<a href="#" class="btn btn-success">Salvar</a>
			</div>
		</div> -->

		<!-- Botão para disparar o modal -->
			<!-- <a href="#modal_home" class="btn btn-warning" data-toggle="modal">Não Clique Aqui!</a> -->
			<a data-toggle="modal" class="btn btn-info" href="etc.php" data-target="#modal_home">Iframe</a>
			<!-- Modal -->
				<div class="modal hide fade" id="modal_home">
				<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				<h3 id="myModalLabel">Título do Módulo</h3>
				</div>
				<div class="modal-body">
				<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
				</div>
				<div class="modal-footer">
				<button class="btn btn-danger" data-dismiss="modal" aria-hidden="true">Fechar</button>
				<button class="btn btn-success">Salvar mudanças</button>
			</div>
		</div>

		<!-- Javascript -->
		<script src="http://code.jquery.com/jquery.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/bootstrap-transition.js"></script>
		<script src="js/bootstrap-modal.min.js"></script>
	</body>
</html>