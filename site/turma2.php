<?php
//include 'testar.php';
include('conecta.php');

if (isset($_POST['indo'])) {

	$curso = $_POST['curso'];
	$letra = $_POST['letra'];
	$periodo = $_POST['periodo']; 
	$ano = $_POST['ano'];
	$semestre = $_POST['semestre'];

	$query = "INSERT INTO turma (curso, letra, periodo, ano, semestre ) VALUES 
	('$curso', '$letra', '$periodo', '$ano', '$semestre' )";

	$envia = mysqli_query(conecta(), $query);

		echo "TURMA CADATRADA COM SUCESSO!!!";
		echo '<META http-equiv="refresh" content="4;URL=turma.php">';
}

?>
