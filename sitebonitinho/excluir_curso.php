<?php
//include './testar.php';
include('./conecta.php');
if (isset($_POST['submit'])) {
	$id = $_POST['id'];
	$link = conecta();
	$query = "DELETE FROM curso WHERE id = $id"; 
	// mysqli_query($link, $query) or die (mysqli_error ($link));
	if (mysqli_query($link,$query)) {
		echo "CURSO EXCLUIDO COM SUCESSO!!!";
		header("refresh:3;url=escolha_curso.php");
	} else {
		echo "ESSE CURSO ESTÁ CADASTRADO EM UMA TURMA!!!";
		header ("refresh:3;url=principal.php");
	} 
} else header("Location: principal.php");

?>