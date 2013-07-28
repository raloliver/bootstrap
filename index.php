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
				.span4{background: orange;}*/
			</style>
		</head>
		<body>
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
									<input type="text" placeholder="Nome Completo">
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
				</div>
			</div>
			</div>					
			

			<!-- Javascript -->
			<script src="http://code.jquery.com/jquery.js"></script>
			<script src="js/bootstrap.min.js"></script>
		</body>
</html>