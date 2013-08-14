<!DOCTYPE html>
<html lang="pt-br">
		<head>
			<title>S1 - StartOne</title>
			<meta name="viewport" content="width=device-width,initial-scale=1.0">
			<meta charset="utf-8">
			<!-- Bootstrap -->
			<link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
			<!--[if lt IE 9]>
				<script $src="js/html5shiv.js"></script>
			<![endif]-->
			<style type="text/css">
				/*.container{background: red;}
				.span3{background: green;}
				.span4{background: orange;}
				body {padding-top: 40px;}*/
			</style>
		</head>
		<body>
			<div class="navbar navbar-fixed-top">
				<div class="navbar-inner">
					<a class="brand" href="#">Nome da Empresa</a> <!-- Um link simples para mostrar sua marca ou nome do projeto, requer apenas uma tag de link. -->
						<ul class="nav">
							<li class="divider-vertical"></li>
							<li class="active"><a href="#">Home</a></li>
							<li><a href="#">Sobre</a></li>							
							<li><a href="#">Produtos</a></li>
						</ul>
						<ul class="nav pull-right">
							<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">
							Usuário
							<b class="caret"></b>
							</a>
							<ul class="dropdown-menu">
							<li><a href="#">Perfil</a></li>							
							<li><a href="#">Sair</a></li>
							</ul>
						</li>
						</ul>
						<form class="navbar-search pull-right">
							<input type="text" class="search-query" placeholder="pesquisar...">
						</form>
				</div>
			</div>
			<div class="navbar">
				<div class="navbar-inner">
					<div class="container">
					<!-- .btn-navbar é usado como alternador para conteúdo de barra de navegação colapsável -->
						<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</a>
					<!-- Tenha certeza de deixar a marca se você quer que ela seja mostrada -->
						<a class="brand" href="#">Nome da Empresa</a>
							<ul class="nav">
								<li class="divider-vertical"></li>
								<li class="active"><a href="#">Home</a></li>
								<li><a href="#">Sobre</a></li>							
								<li><a href="#">Produtos</a></li>
							</ul>
						<div class="nav-collapse">
						
						</div>
					</div>
				</div>
			</div>
			<div class="container">
				<div class="row">
					<div class="span3">
						Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odio, deleniti expedita nemo voluptatibus deserunt. Voluptates eum minima quibusdam esse est laudantium saepe iusto reprehenderit error totam. Mollitia amet dicta aspernatur.
					</div>
					<div class="span4 offset1">
						<p class="text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque, atque, iure, repellat pariatur assumenda vel quo in sint consectetur quis consequuntur veritatis autem porro voluptatibus praesentium beatae asperiores mollitia ex.</p>
					</div>				
					<div class="span3 offset1">
						<abbr title="Nome Completo">Nome:</abbr>
						Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odio, deleniti expedita nemo voluptatibus deserunt. Voluptates eum minima quibusdam esse est laudantium saepe iusto reprehenderit error totam. Mollitia amet dicta aspernatur.
					</div>					
				</div>
			<div class="row">
				<div class="span6 text-right">
					<address>
					<strong>Twitter, Inc.</strong><br>
					Av. Paulista, 00-00<br>
					São Paulo, SP - CEP: 09732-00<br>
					<abbr title="Telefone">Tel:</abbr> (11) 0000-0000
					</address>
				</div>
				<div class="span6">
					<address>
					<strong>Nome completo</strong><br>
					<a href="mailto:#">nome.sobrenome@gmail.com</a>
					</address>
				</div>
			</div>
			</div>
			<hr>
			<div class="row">
				<div class="span6 offset3">
					<blockquote class="pull-right">
						<p>
							Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae, modi, minus, ex consequatur reiciendis ratione autem aperiam cum totam eveniet dignissimos fugit magni repudiandae reprehenderit perspiciatis consequuntur architecto ipsam quam.
							<small>
								Israel <cite>g1.com</cite>
							</small>
						</p>
					</blockquote>
				</div>
				<div class="span6">
					<code>TAGS</code>
					<pre>
Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sequi, ex aliquid natus temporibus iste praesentium obcaecati dolor consequatur quo doloremque quae fuga voluptatum at odit earum omnis sapiente veritatis amet.
					</pre>
				</div>
			</div>
			<hr>
				<div class="span12 offset3">
					<table class="table table-bordered table-hover">
						<caption>Tabela 1</caption>
							<thead>
								<tr>
									<th>Coluna 1</th>
									<th>Coluna 2</th>
									<th>Coluna 3</th>
								</tr>
							</thead>
						<tbody>
							<tr class="error">
								<td>Linha 1</td>
								<td>Linha 1</td>
								<td>Linha 1</td>
							</tr>
							<tr class="info">
								<td>Linha 2</td>
								<td>Linha 2</td>
								<td>Linha 2</td>
							</tr>
							<tr class="success">
								<td>Linha 3</td>
								<td>Linha 3</td>
								<td>Linha 3</td>
							</tr>
							<tr class="warning">
								<td>Linha 3</td>
								<td>Linha 3</td>
								<td>Linha 3</td>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="container">				
					<div class="row">
						<div class="span6">
							<form>
								<legend>Formulário</legend>
									<label>Fale Conosco</label>
									<input type="text" placeholder="Nome Completo" required>
									<span class="help-block">Entre em contato conosco para mais informações.</span>
									<label class="checkbox">
									<input type="checkbox"> Assinar nossa newsletter	
									</label>
									<button type="submit" class="btn">Enviar</button>
							</form>
						</div>
						<div class="span6">
							<form class="form-search">
								<legend>Pesquisa</legend>
								<input type="text" class="input-medium search-query" placeholder="pesquisar...">
								<button type="submit" class="btn">Busca</button>
							</form>
						</div>						
					</div>
				</div>
				<div class="container">
					<div class="row">
						<div class="span6">
							<form class="form-inline">
								<legend>Login Horizontal</legend>
								<input type="text" class="input-small" placeholder="Email">
								<input type="password" class="input-small" placeholder="Senha">
								<label class="checkbox">
								<input type="checkbox"> Lembrar senha
								</label>
								<button type="submit" class="btn">Entrar</button>
							</form>
						</div>
						<div class="span6">
							<form class="form-horizontal">
								<legend>Login Vertical</legend>
									<div class="control-group">
										<label class="control-label" for="inputEmail">Email</label>
										<div class="controls">
										<input type="text" id="inputEmail" placeholder="Email">
										</div>
									</div>
									<div class="control-group">
										<label class="control-label" for="inputPassword">Senha</label>
										<div class="controls">
										<input type="password" id="inputPassword" placeholder="Senha">
									</div>
									</div>
									<div class="control-group">
									<div class="controls">
										<label class="checkbox">
										<input type="checkbox">Lembrar senha
										</label>
									<button type="submit" class="btn">Entrar</button>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			<hr>
			<div class="container">
				<div class="row">
					<h1>Formulários</h1>
					<div class="span4">	
						<label>Mensagem</label>
						<textarea rows="3"></textarea>
					</div>
					<div class="span4">
						<label>CheckBox</label>
						<label class="checkbox">
							<input type="checkbox" name="nome1" value="" checked> Opção 1 (selecionado)<br>
							<input type="checkbox" name="nome2" value=""> Opção 2<br>
							<input type="checkbox" name="nome3" value=""> Opção 3
						</label>
						<label>Radio</label>
						<label class="radio">
							<input type="radio" name="nome_radio" value="option1" checked>Opção 1 (selecionado)
						</label>
						<label class="radio">
							<input type="radio" name="nome_radio" value="option2">
							A opção 2 (sem seleção)
						</label>
					</div>
					<div class="span4">
						<label>CheckBox Inline</label>
						<label class="checkbox inline">
							<input type="checkbox" name="checkbox" id="inlineCheckbox1" value="option1"> 1
							</label>
							<label class="checkbox inline">
							<input type="checkbox" name="checkbox" id="inlineCheckbox2" value="option2"> 2
							</label>
							<label class="checkbox inline">
							<input type="checkbox" name="checkbox" id="inlineCheckbox3" value="option3"> 3
						</label>
						<hr>
						<label>Radio Inline</label>
						<label class="radio inline">
							<input type="radio" name="nome_radio" id="inlineCheckbox1" value="option1"> 1
							</label>
							<label class="radio inline">
							<input type="radio" name="nome_radio" id="inlineCheckbox2" value="option2"> 2
							</label>
							<label class="radio inline">
							<input type="radio" name="nome_radio" id="inlineCheckbox3" value="option3"> 3
						</label>
					</div>
					<div class="row">
						<div class="span6">
							<label>Select Simples</label>
							<select multiple="combo">
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
							</select>
						</div>
						<div class="span6">
							<label>Select Múltiplo</label>
							<select multiple="multiple">
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
							</select>
						</div>
					</div>
					<hr>
					<div class="row">
						<div class="span4">
							<label>Extensão Lado Esquerdo</label>
							<div class="input-prepend">
								<span class="add-on">@</span>
								<input type="text" placeholder="Usuário">
							</div>
						</div>
						<div class="span4">
							<label>Extensão Lado Direito</label>
							<div class="input-append">
								<input type="text">
								<span class="add-on">.00</span>
							</div>
						</div>
						<div class="span4">
							<label>Combinados</label>
							<div class="input-prepend input-append">
								<span class="add-on">R$</span>
								<input class="span2" type="text">
								<span class="add-on">.00</span>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="span3">
							<label>Controle de Tamanho</label>
							<form action="">
								<input type="text" class="input-large" placeholder="Assunto"><br>
								<textarea name="" id="" class="input-large" rows="10" placeholder="Mensagem"></textarea>
						</div>						
						<div class="span9 text-right">
							<label>Tamanho Relativo</label>
							inputmini: 	<input class="input-mini" type="text"><br>
							inputsmall: <input class="input-small" type="text"><br>
							inputmedium:<input class="input-medium" type="text"><br>
							inputlarge:	<input class="input-large" type="text"><br>
							inputxlarge:<input class="input-xlarge" type="text"><br>
							inputxxlarge:<input class="input-xxlarge" type="text"><br>
						</div>
								<br><br>
						<div class="span12">
							<label>Controle de Tamanho Full-Width</label>
								<input type="text" class="input-block-level" placeholder="Assunto"><br>
								<textarea name="" id="" class="input-block-level" rows="10" placeholder="Mensagem"></textarea>
							</form>
						</div>
								<br><br>
						<div class="span12">
							<label>Tamanho do Grid</label>
							<input class="span5" type="text"><br>
								<select class="span3">
								...
								</select><br>
							<textarea class="span8" rows="5"></textarea>
						</div>
								<br><br>
						<div class="span12">
							<label>Múltiplos inputs de grid por linha</label>
							<div class="controls-row">
								<input class="span4" type="text">
								<input class="span1" type="text">
								<input class="span3" type="text">
							</div>
						</div>
							<hr>
						<div class="span4">
							<label>Campo apenas para leitura (Reading)</label>
							<span class="input-xlarge uneditable-input">Aceito os termos necessários.</span>
						</div>
						<div class="span4">
							<label>Ações de formulários</label>
							<div class="form-actions">
								<button type="submit" class="btn btn-success">Salvar</button>
								<button type="button" class="btn">Cancelar</button>
							</div>							
						</div>
								<br><br>
						<div class="span6">
							<label>Texto de ajuda - Tooltips</label>
							<input type="text"> <span class="help-block">Texto de ajuda em Bloco e que pode ter multiplas linhas.</span>
						</div>
						<div class="span6">
							<label>Texto de ajuda - Tooltips</label>
							<input type="text"> <span class="help-inline">Preencha com seu nome</span>
							<input type="text"> <span class="help-inline">Preencha com seu email</span>
							<input type="text"> <span class="help-inline">Escreva algo aqui</span>
						</div>
					</div>
					<div class="row">
						<div class="span6">
							<label>Estados de validação</label>
							<div class="control-group warning">
								<label class="control-label">Input com aviso</label>
								<div class="controls">
								<input type="text">
								<span class="help-inline">Algo pode ter dado errado</span>
								</div>
							</div>
						</div>
						<div class="span6">
							<label>Estados de validação</label>
							<div class="control-group error">
								<label class="control-label">Input com erro</label>
								<div class="controls">
								<input type="text">
								<span class="help-inline">Por favor, corrija o erro</span>
								</div>
							</div>
						</div>
						<br><br>
						<div class="span6">
							<label>Estados de validação</label>
							<div class="control-group info">
								<label class="control-label">Input com informação</label>
								<div class="controls">
								<input type="text">
								<span class="help-inline">Preencha o nome de usuário</span>
								</div>
							</div>
						</div>
						<div class="span6">
							<label>Estados de validação</label>
							<div class="control-group success">
								<label class="control-label">Input com sucesso</label>
								<div class="controls">
								<input type="text">
								<span class="help-inline">Campo preenchido corretamente!</span>
								</div>
							</div>
						</div>
						<br><br>
					</div>
				</div>
			</div>
			</div>					
			

			<!-- Javascript -->
			<script src="http://code.jquery.com/jquery.js"></script>
			<script src="js/bootstrap.min.js"></script>
		</body>
</html>