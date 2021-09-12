<?php
//include './testar.php';
include('./conecta.php');

if (isset($_POST['enviar'])) {

	$nome = $_POST['nome'];
	$sigla = $_POST['sigla']; 

	$query = "INSERT INTO curso (nome, sigla) VALUES ('$nome', '$sigla' )";

	$envia = mysqli_query(conecta(), $query);

		echo "CURSO CADASTRADO COM SUCESSO!!!";
		echo '<META http-equiv="refresh" content="4;URL=curso.php">';

}

?>
