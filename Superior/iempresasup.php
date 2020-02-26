<?php
    include '../acessobancosup.php';
    include 'vSuperior.php';

    $teste_empresasup = "SELECT * 
                         FROM resposta
	                     WHERE CPF = '$cpf' AND id_perguntas = (SELECT id_perguntas 
                                                                FROM pergunta 
                                                                WHERE numeracao = 45)";
	          
	$verifica_empresasup = mysqli_query($conn, $teste_empresasup);

	if (mysqli_num_rows($verifica_empresasup) >= 1){
        $delete45 = "DELETE FROM resposta WHERE cpf = '$cpf' AND id_perguntas = (SELECT id_perguntas FROM pergunta WHERE numeracao = 45);";
        $delete46 = "DELETE FROM resposta WHERE cpf = '$cpf' AND id_perguntas = (SELECT id_perguntas FROM pergunta WHERE numeracao = 46);";
        
        $d45 = mysqli_query($conn, $delete45);
        $d45 = mysqli_query($conn, $delete46);
    }

    $opt45 = filter_input (INPUT_POST, 'perg45', FILTER_SANITIZE_STRING);
    $opt46 = filter_input (INPUT_POST, 'perg46', FILTER_SANITIZE_STRING);

    $insert45 = "INSERT INTO resposta(cpf, resposta, id_perguntas, id_alternativa) VALUES ('$cpf', '$opt45', (SELECT id_perguntas FROM pergunta where numeracao = 45), (SELECT id_alternativa FROM pergunta NATURAL JOIN pergunta_has_alternativa NATURAL JOIN alternativa where opcao = '$opt45' AND numeracao = 45));";
    $insert46 = "INSERT INTO resposta(cpf, resposta, id_perguntas, id_alternativa) VALUES ('$cpf', '$opt46', (SELECT id_perguntas FROM pergunta where numeracao = 46), (SELECT id_alternativa FROM pergunta NATURAL JOIN pergunta_has_alternativa NATURAL JOIN alternativa where opcao = '$opt46' AND numeracao = 46));";

    $resultado45 = mysqli_query($conn, $insert45);
    $resultado46 = mysqli_query($conn, $insert46);

    header ("Location: mercadosup.php");
?>