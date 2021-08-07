<?php
//include './testar.php';
include('./conecta.php');
if (isset($_POST['submit'])) {
	$id = $_POST['id'];
	$link = conecta();
	$query = "DELETE FROM cad_aluno WHERE id_aluno = $id"; 
	if (mysqli_query($link,$query)) {
		echo "ALUNO EXCLUIDO COM SUCESSO!!!";
		header("refresh:3;url=escolha_aluno.php");
	} else {
		echo "Infelizmente ocorreu um Erro!!!";
		header ("refresh:3;url=principal.php");
	} 
} else header("Location: principal.php");

?>