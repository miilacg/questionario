<?php
    include '../acessobancotec.php';
    include 'vTecnico.php';
    	
    $teste_empresatec = "SELECT * 
                         FROM resposta
	                     WHERE CPF = '$cpf' AND id_perguntas = (SELECT id_perguntas 
                                                                FROM pergunta 
                                                                WHERE numeracao = 36)";
	          
	$verifica_empresatec = mysqli_query($conn, $teste_empresatec);

    if (mysqli_num_rows($verifica_empresatec) >= 1){
        $delete36 = "DELETE FROM resposta WHERE cpf = '$cpf' AND id_perguntas = (SELECT id_perguntas FROM pergunta WHERE numeracao = 36);";
        $delete37 = "DELETE FROM resposta WHERE cpf = '$cpf' AND id_perguntas = (SELECT id_perguntas FROM pergunta WHERE numeracao = 37);";
        
        $d36 = mysqli_query($conn, $delete36);
        $d37 = mysqli_query($conn, $delete37);
    }

	$opt36 = filter_input (INPUT_POST, 'perg36', FILTER_SANITIZE_STRING);
	$opt37 = filter_input (INPUT_POST, 'perg37', FILTER_SANITIZE_STRING);
	
	$insert36 = "INSERT INTO resposta(cpf, resposta, id_perguntas, id_alternativa) VALUES ('$cpf', '$opt36', (SELECT id_perguntas FROM pergunta where numeracao = 36), (SELECT id_alternativa FROM pergunta NATURAL JOIN pergunta_has_alternativa NATURAL JOIN alternativa where opcao = '$opt36' AND numeracao = 36));";
	$insert37 = "INSERT INTO resposta(cpf, resposta, id_perguntas, id_alternativa) VALUES ('$cpf', '$opt37', (SELECT id_perguntas FROM pergunta where numeracao = 37), (SELECT id_alternativa FROM pergunta NATURAL JOIN pergunta_has_alternativa NATURAL JOIN alternativa where opcao = '$opt37' AND numeracao = 37));";
	
	$resultado36 = mysqli_query($conn, $insert36);
	$resultado37 = mysqli_query($conn, $insert37);

    mysqli_close($conn);

    header("Location: mercadotec.php");
?>