<?php 
session_start();
if(empty($_SESSION['usu_cod'])){
	echo "ACESSO RESTRITO, FAÇA SEU CADASTRO!!!";
	echo '<META http-equiv="refresh" content="3;URL=index.php">';
	exit;
}
?>