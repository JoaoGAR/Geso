<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Lista</title>
	<link rel="stylesheet" href="<?php echo base_url("css/bootstrap.min.css");?>">
</head>
<?= $this->load->view("nav"); ?>
<body>
	<div class="container">
		<table class="table table-hover">
			<legend class="alert alert-info text-center col-md-6 col-md-offset-3"><b>Gesseiros cadastrados</legend>
			<thead>
				<tr class="active">
					<td>Nome</td>
					<td>Telefones</td>
					<td>Endereço</td>
					<td>Descricao</td>
				</tr>
			</thead>
			<tbody>
				<?php foreach($gesseiros as $gesseiro) :?>
					<tr>
						<td><?= $gesseiro["nome"]?></td>
						<td><?= $gesseiro["telefoneA"]?></td>
						<td><?= $gesseiro["endereco"]?></td>
						<td><?= $gesseiro["descricao"]?></td>
					</tr>
				<?php  endforeach; ?>
			</tbody>
		</table>
	</div>
</body>
</html>