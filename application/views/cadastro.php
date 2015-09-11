<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Lista</title>
	<link rel="stylesheet" href="<?php echo base_url("css/bootstrap.min.css");?>">
	<link rel="stylesheet" href="<?php echo base_url("css/main.css");?>">
</head>
<?= $this->load->view("nav"); ?>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-6 well col-md-offset-3">
				<?php echo form_open("gesseiro/novo");?>
				<fieldset>
					<!-- Form Name -->
					<legend class="text-center"><b>Cadastro de Gesseiro</b></legend>
					<?php if($this->session->flashdata("sucesso")) { ?>
					<div>
						<h5 class="alert alert-success text-center"><p class="glyphicon glyphicon-ok"></p><b> Gesseiro cadastrado com secesso !</b></h5>
					</div>
					<?php } ?>

					<?php if($this->session->flashdata("erro")) { ?>
					<div>
						<h5 class="alert alert-danger text-center"><p class="glyphicon glyphicon-remove"></p><b> Erro ao efetuar cadastro, verifique as informações fornecidas !</b></h5>
					</div>
					<?php } ?>

					<!-- Text input-->
					<div class="form-group row col-md-12">
						<label class="col-md-3 control-label" for="nome">Nome:</label>  
						<div class="col-md-12">
							<input id="nome" name="nome" type="text" placeholder="" class="form-control input-md" required="">

						</div>
					</div>

					<!-- Text input-->
					<div class="form-group row col-md-12">
						<label class="col-md-3 control-label" for="telefoneA">Telefone¹:</label>  
						<div class="col-md-12">
							<input id="telefoneA" name="telefoneA" type="text" placeholder="" class="form-control input-md" required="">

						</div>
					</div>

					<!-- Text input-->
					<div class="form-group row col-md-12">
						<label class="col-md-3 control-label" for="telefoneB">Telefone²:</label>  
						<div class="col-md-12">
							<input id="telefoneB" name="telefoneB" type="text" placeholder="" class="form-control input-md">

						</div>
					</div>

					<!-- Text input-->
					<div class="form-group row col-md-12">
						<label class="col-md-3 control-label" for="telefoneC">Telefone³:</label>  
						<div class="col-md-12">
							<input id="telefoneC" name="telefoneC" type="text" placeholder="" class="form-control input-md">

						</div>
					</div>

					<!-- Text input-->
					<div class="form-group row col-md-12">
						<label class="col-md-3 control-label" for="endereco">Endereço:</label>  
						<div class="col-md-12">
							<input id="endereco" name="endereco" type="text" placeholder="" class="form-control input-md" required="">

						</div>
					</div>

					<!-- Textarea -->
					<div class="form-group row col-md-12">
						<label class="col-md-3 control-label" for="descricao">Descrição:</label>
						<div class="col-md-12">                     
							<textarea class="form-control" id="descricao" name="descricao" rows="3" placeholder="Digite aqui o que você faz, seus preços e o que achar relevante"></textarea>

						</div>
					</div>

					<!-- Button -->
					<div class="form-group row col-md-12">
						<label class="col-md-3 control-label" for="cadastrar"></label>
						<div class="col-md-12">
							<button id="cadastrar" name="cadastrar" class="btn btn-success form-control">Cadastrar</button>

						</div>
					</div>
				</fieldset>
				<?php echo form_close(); ?>
			</div>
		</div>
	</div>
</body>
</html>