<?php 
    header("Content-Type: text/html; charset=UTF-8");
	session_start();
		
    $cpf = $_POST['cpf'];
	$curso = $_POST['curso'];
	
	$_SESSION['cpf'] = $cpf;
    $_SESSION['curso'] = $curso;
    
    if ($curso == "Tecnico"){
        //criar conexao
        $servidor = "localhost";
        $usuario = "root";
        $senha = "mila";
        $dbname = "tecnico";

        ini_set('default_charset', 'UTF-8'); //esta linha antes de criar a variavel conexao	
        $conn = mysqli_connect($servidor,  $usuario, $senha, $dbname); //conexao com o bd
        $conn->query("SET NAMES utf8"); // esta linha depois dela criada.

        $login = "SELECT *
                  FROM login
                  WHERE cpf = '$cpf'";

        $verifica = mysqli_query($conn, $login);
        if (mysqli_num_rows($verifica) >= 1) {
            header("Location: Tecnico/verificacaotec.php");
        }else{           
            $_SESSION['msg'] = "error";
            header("Location: index.php");
	   }
    }

    if ($curso == "Superior"){
        //criar conexao
        $servidor = "localhost";
        $usuario = "root";
        $senha = "mila";
        $dbname = "superior";

        ini_set('default_charset', 'UTF-8'); //esta linha antes de criar a variavel conexao	
        $conn = mysqli_connect($servidor,  $usuario, $senha, $dbname); //conexao com o bd
        $conn->query("SET NAMES utf8"); // esta linha depois dela criada.
        
        $login = "SELECT *
                  FROM login
                  WHERE cpf = '$cpf'";

        $verifica = mysqli_query($conn, $login);
        if (mysqli_num_rows($verifica) >= 1){
            header("Location: Superior/verificacaosup.php");
        }else{
            $_SESSION['msg'] = "error";
            header("Location: index.php");
	   }
    }
    
    if ($curso == "Administrador"){
        //criar conexao
        $servidor = "localhost";
        $usuario = "root";
        $senha = "mila";
        $dbname = "administrador";

        $conn = mysqli_connect($servidor,  $usuario, $senha, $dbname); //conexao com o bd

        $login = "SELECT *
                  FROM login
                  WHERE cpf = '$cpf'";

        $verifica = mysqli_query($conn, $login);
        if (mysqli_num_rows($verifica) >= 1){
            header("Location: Administrador/selecaocurso.php");
        }else{
		$_SESSION['msg'] = "errorAdm";
		header("Location: index.php");
	   }
    }
?>	