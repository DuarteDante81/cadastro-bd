<!DOCTYPE html>
<!-- cadastro.html -->
<html>
	<head>
	  <title>Cadastro ddo curso</title>
	  <meta charset="utf-8">
	</head>
	<body>
	<h1>Cadastrar novo curso</h1>
		<form action="../curso/insercao_curso.php" 
		      method="GET">
			<label for="id_curso">
			Nome:
			</label>
			<input type="text" name="curso" id="ds_curso">
			<br>
                        <label for="id_curso">
			Curso:
			</label>
			<?php
                          include_once "../inc/conectabd.inc.php";
                          include "../inc/funcoes.inc.php";
                          
                          monta_select_curso();
                        ?>
			<br>
			<input type="submit" value="Ok">
		</form>
	</body>
</html>