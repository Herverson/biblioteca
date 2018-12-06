<?php include("menu.php"); 
include "verificar.php";?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link href="css/bootstrap.css" rel=stylesheet>
<title>Cadastro Exemplar</title>
</head>

<body>
	<div class="container">
		<form id="form1" name="form1" method="post" action="salva_exemplar.php">
			<div class="form-group">
				<label for="nome">Código do livro</label>
				<input type="hidden" class="form-control" name="cod_livro" id="cod_livro"  placeholder="Código do livro" value="<?php $_GET['cod_livro'];?>">
			</div>
			<div class="form-group">
				<label for="Ano">Ano</label>
				<input type="text" class="form-control"  name="ano" id="ano" placeholder="Ano">
			</div>
			<div class="form-group">
				<label for="estado">Estado</label>
				<input type="text" class="form-control" name="estado" id="estado"  placeholder="Estado">
			</div>
			<div class="form-group">
				<label for="disponibilidade">Disponibilidade</label>
				<input type="text" class="form-control" name="disponibilidade" id="disponibilidade"  placeholder="Disponibilidade">
			</div>
			<input type="submit" value="Cadastrar" name="submit" class="btn btn-primary">
		</form>
	</div>
</body>
	<script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</html>