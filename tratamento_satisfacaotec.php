<?php
    include 'acessobancotec.php';
    include 'vtec.php';

    $teste36 = "SELECT * 
                FROM resposta
                WHERE CPF = '$cpf' AND id_perguntas = (SELECT id_perguntas 
                                                       FROM pergunta 
                                                       WHERE numeracao = 36)";
	    
	$verifica36 = mysqli_query($conn, $teste36);

    if (mysqli_num_rows($verifica36) >= 1){
        header("Location: lazertec.php");
    }else{
        header("Location: lazersaudecidadaniatec.php");
    }
?>