<!DOCTYPE html>
<!-- alteracao.php -->
<html>
	<head>
	  <title>Cadastro do curso - Alteração</title>
	  <meta charset="utf-8">
	</head>
	<body>
<?php 
// efetua alteração do aluno informado em form_alteracao_aluno.php
  $id_curso = $_GET["id_curso"];
  $ds_curso = $_GET["ds_curso"];
  
  
  include_once "../inc/conectabd.inc.php";

  $query = "UPDATE tb_curso 
            SET ds_curso = '$ds_curso'
              , id_curso = $id_curso
	  WHERE id_curso = $id_curso;";
	 // echo $query.'<br>';
  if ($result = mysqli_query($link, $query)) {
	  echo "Alteração efetuada com sucesso";
  } else {
	  echo mysqli_error($link);
  }
  
  // fecha a conexão
  mysqli_close($link);
?>  
 <br>
 <a href="consulta_aluno.php">Ver cursos cadastrados</a>
 
 </body>
</html>

