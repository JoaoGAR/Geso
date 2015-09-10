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
			<caption class="text-center">Gesseiros cadastrados</caption>
			<thead>
				<tr class="active">
					<td>Nome</td>
					<td>Telefones</td>
					<td>Endereço</td>
					<td>Preço</td>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>Nome</td>
					<td>Telefones</td>
					<td>Endereço</td>
					<td>Preço</td>
				</tr>
			</tbody>
		</table>
	</div>
</body>
</html>