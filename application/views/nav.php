
<nav class="navbar navbar-default">
	<div class="navbar-header">
		<button aria-controls="navbar" aria-expanded="false" data-target="#navbar" data-toggle="collapse" class="navbar-toggle collapsed" type="button">
			<span class="sr-only">Navegação</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button>
	</div>
	<div class="navbar-collapse collapse" id="navbar">
		<ul class="nav navbar-nav">
			<li><?=anchor("gesseiro","<span class='glyphicon glyphicon-edit'></span>Cadastrar Gesseiro");?></li>
			<form class="navbar-form navbar-left" role="search">
				<div class="form-group">
					<input type="text" class="form-control" placeholder="Pesquisar">
				</div>
				<button type="submit" class="btn btn-default glyphicon glyphicon-search"></button>
			</form>
			<li><a href="#"><span class="glyphicon glyphicon-th-list"></span> Listar Todos</a></li>
		</ul>
	</div>
</nav>