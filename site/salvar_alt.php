<?php 
include('./conecta.php');
if(isset($_POST['submit'])){
	$id = $_POST['id'];
	$matricula = $_POST['matricula'];
	$nome = $_POST['nome'];
	$telefone = $_POST['telefone'];
	$link = conecta();
	$query = "UPDATE cad_aluno SET matricula = $matricula, nome = '$nome', telefone = $telefone WHERE id_aluno = $id"; 

	if (mysqli_query($link, $query)) {
		echo "ALTERAÇÃO FEITA COM SUCESSO!!!";
		header("refresh:3;url=escolha_aluno.php");
	} else {
		echo "Infelizmente ocorreu um Erro!!!";
		header ("refresh:3;url=principal.php");
	} 
} else header("Location: principal.php");
