<?php 
session_start();
include('conecta.php');

$con = conecta();
$login = $_POST['login'];
$password = $_POST['password'];

$sql = "SELECT cod_admin, nome FROM administrar where login like '$login' AND senha like '$password' AND status = 1";

if (mysqli_query($con, $sql)) {
	$_SESSION['usu_cod'] = $login;
	header('Location: principal.php');
} else {
	header('Location: index.php');
}
	//echo "Login ou Senha não conferem!!!"."<meta content='4;url=login.php' http_equiv='refresh'>";
	//echo "<meta content='0;url=index.php' http_equiv='refresh'>";
?>