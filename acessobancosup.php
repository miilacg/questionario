<?php
    header("Content-Type: text/html; charset=UTF-8",true);

    //criar conexao
	$servidor = "localhost";
	$usuario = "root";
	$senha = "mila";
	$dbname = "superior";

    ini_set('default_charset', 'UTF-8'); //esta linha antes de criar a variavel conexao	
	$conn = mysqli_connect($servidor,  $usuario, $senha, $dbname); //conexao com o bd
    $conn->query("SET NAMES utf8"); // esta linha depois dela criada.
?>