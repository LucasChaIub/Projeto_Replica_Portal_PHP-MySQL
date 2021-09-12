<?php

function conecta () {
	$host = "localhost";
	$banco = "aprender";
	$usuario = "root";
	$senha = "";
	$con = mysqli_connect('localhost', 'root', '', 'aprender');
	return $con;
}

 //conexao banco

?> 