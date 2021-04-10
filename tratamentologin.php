<?php 
    header("Content-Type: text/html; charset=UTF-8");
	session_start();
		
    $cpf = $_POST['cpf'];
	$curso = $_POST['curso'];
	
	$_SESSION['cpf'] = $cpf;
    $_SESSION['curso'] = $curso;
    
    $servidor = "localhost";
    $usuario = "root";
    $senha = "mila";

    if ($curso == "Tecnico"){   
        $dbname = "tecnico";
        $url = "Tecnico/verificacaotec.php";
    } else{
        if ($curso == "Superior"){
            $dbname = "superior";
            $url = "Superior/verificacaosup.php";
        } else {
            if ($curso == "Administrador"){
                $dbname = "administrador";
                $url = "Administrador/selecaocurso.php";
            }
        }
    }

    //criar conexao
    ini_set('default_charset', 'UTF-8'); //esta linha antes de criar a variavel conexao	
    $conn = mysqli_connect($servidor,  $usuario, $senha, $dbname); //conexao com o bd
    $conn->query("SET NAMES utf8"); // esta linha depois dela criada.

    $login = "SELECT * FROM login WHERE cpf = '$cpf'";

    $verifica = mysqli_query($conn, $login);


    if (mysqli_num_rows($verifica) >= 1) {
        header("Location: ".$url);
    }else{
        if ($curso == "Administrador"){
            $_SESSION['msg'] = "errorAdm";
            header("Location: index.php");
        }else{
            $_SESSION['msg'] = "error";
            header("Location: index.php");
        }
    }
?>	