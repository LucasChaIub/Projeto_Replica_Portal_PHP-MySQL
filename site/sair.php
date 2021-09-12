<?php 
session_start();
if (!empty($_SESSION['usu_cod'])) {
	echo ($_SESSION['usu_cod'] .", VOCÊ ESTÁ SAINDO DO SISTEMA!");
	header('refresh:3;url=index.php');
	session_destroy();
	exit;
}
?>