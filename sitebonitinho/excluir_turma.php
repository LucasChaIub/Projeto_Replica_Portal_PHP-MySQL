<?php
//include './testar.php';
include('./conecta.php');
if (isset($_POST['submit'])) {
	$id = $_POST['id'];
	$link = conecta();
	$query = "DELETE FROM turma WHERE id = $id"; 
	// mysqli_query($link, $query) or die (mysqli_error ($link));
	if (mysqli_query($link,$query)) {
		echo "TURMA EXCLUIDA COM SUCESSO!!!";
		header("refresh:3;url=escolha_turma.php");
	} else {
		echo "ERRO AO EXCLUIR: ESSA TURMA ESTÁ SENDO UTIZADA NO !!!";
		header ("refresh:3;url=principal.php");
	} 
} else header("Location: principal.php");

?>