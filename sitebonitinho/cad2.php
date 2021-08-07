<?php
// include './testar.php';
include('./conecta.php');

if (isset($_POST['aluno'])) {

	$nome = $_POST['nome'];
	$matricula = $_POST['matricula']; 
	$telefone = $_POST['telefone'];

	$query = "INSERT INTO cad_aluno (nome, matricula, telefone) VALUES ('$nome', '$matricula', '$telefone')";

	$envia = mysqli_query(conecta(), $query);
	
	echo "Aluno Cadastrado com Sucesso!!!";
	echo '<META http-equiv="refresh" content="5;URL=escolha_aluno.php">';

};
?>