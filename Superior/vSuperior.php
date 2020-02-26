<?php
    session_start();
    
    $cpf = $_SESSION['cpf'];
    $curso = $_SESSION['curso'];

    if ($curso == 'Superior'){
        $valor = isset($_SESSION['cpf']) ? 's' : 'n';

        if ($valor == 'n'){
            header("Location: ../index.php");
        }
    }else{
       header("Location: ../index.php"); 
    } 
?>