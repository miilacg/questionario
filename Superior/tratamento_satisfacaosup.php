<?php
    include '../acessobancosup.php';
    include 'vSuperior.php';

    $teste45 = "SELECT * 
                FROM resposta
                WHERE CPF = '$cpf' AND id_perguntas = (SELECT id_perguntas 
                                                       FROM pergunta 
                                                       WHERE numeracao = 45)";
	    
	$verifica45 = mysqli_query($conn, $teste45);

    if (mysqli_num_rows($verifica45) >= 1){
        header("Location: lazersup.php");
    }else{
        header("Location: lazersaudecidadaniasup.php");
    }
?>