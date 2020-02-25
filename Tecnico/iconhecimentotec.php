<?php	
    header("Content-Type: text/html; charset=UTF-8");
    include '../acessobancotec.php';
    include 'vTecnico.php';

    $teste_conhecimentotec = "SELECT * 
                              FROM resposta
	                          WHERE CPF = '$cpf' AND id_perguntas = (SELECT id_perguntas 
                                                                     FROM pergunta 
                                                                     WHERE numeracao = 8)";
	          
	$verifica_conhecimentotec = mysqli_query($conn, $teste_conhecimentotec);

	if (mysqli_num_rows($verifica_conhecimentotec) >= 1){
        $delete8 = "DELETE FROM resposta WHERE cpf = '$cpf' AND id_perguntas = (SELECT id_perguntas FROM pergunta WHERE numeracao = 8);"; 
        $delete9 = "DELETE FROM resposta WHERE cpf = '$cpf' AND id_perguntas = (SELECT id_perguntas FROM pergunta WHERE numeracao = 9);";
        $delete10 = "DELETE FROM resposta WHERE cpf = '$cpf' AND id_perguntas = (SELECT id_perguntas FROM pergunta WHERE numeracao = 10);";
        $delete11 = "DELETE FROM resposta WHERE cpf = '$cpf' AND id_perguntas = (SELECT id_perguntas FROM pergunta WHERE numeracao = 11);";
        $delete12 = "DELETE FROM resposta WHERE cpf = '$cpf' AND id_perguntas = (SELECT id_perguntas FROM pergunta WHERE numeracao = 12);";
        $delete13 = "DELETE FROM resposta WHERE cpf = '$cpf' AND id_perguntas = (SELECT id_perguntas FROM pergunta WHERE numeracao = 13);";
        $delete14 = "DELETE FROM resposta WHERE cpf = '$cpf' AND id_perguntas = (SELECT id_perguntas FROM pergunta WHERE numeracao = 14);";
        $delete15 = "DELETE FROM resposta WHERE cpf = '$cpf' AND id_perguntas = (SELECT id_perguntas FROM pergunta WHERE numeracao = 15);";
        $delete16 = "DELETE FROM resposta WHERE cpf = '$cpf' AND id_perguntas = (SELECT id_perguntas FROM pergunta WHERE numeracao = 16);";
        $delete17 = "DELETE FROM resposta WHERE cpf = '$cpf' AND id_perguntas = (SELECT id_perguntas FROM pergunta WHERE numeracao = 17);";
        $delete18 = "DELETE FROM resposta WHERE cpf = '$cpf' AND id_perguntas = (SELECT id_perguntas FROM pergunta WHERE numeracao = 18);";
        $delete19 = "DELETE FROM resposta WHERE cpf = '$cpf' AND id_perguntas = (SELECT id_perguntas FROM pergunta WHERE numeracao = 19);";
        $delete20 = "DELETE FROM resposta WHERE cpf = '$cpf' AND id_perguntas = (SELECT id_perguntas FROM pergunta WHERE numeracao = 20);";
        $delete21 = "DELETE FROM resposta WHERE cpf = '$cpf' AND id_perguntas = (SELECT id_perguntas FROM pergunta WHERE numeracao = 21);";
        
        $d8 = mysqli_query($conn, $delete8);
        $d9 = mysqli_query($conn, $delete9);
        $d10 = mysqli_query($conn, $delete10);
        $d11 = mysqli_query($conn, $delete11);
        $d12 = mysqli_query($conn, $delete12);
        $d13 = mysqli_query($conn, $delete13);
        $d14 = mysqli_query($conn, $delete14);
        $d15 = mysqli_query($conn, $delete15);
        $d16 = mysqli_query($conn, $delete16);
        $d17 = mysqli_query($conn, $delete17);
        $d18 = mysqli_query($conn, $delete18);
        $d19 = mysqli_query($conn, $delete19);
        $d20 = mysqli_query($conn, $delete20);
        $d21 = mysqli_query($conn, $delete21);
    }

    $opt8 = filter_input (INPUT_POST, 'perg8', FILTER_SANITIZE_STRING);
    $insert8 = "INSERT INTO resposta(cpf, resposta, id_perguntas, id_alternativa) VALUES ('$cpf', '$opt8', (SELECT id_perguntas FROM pergunta where numeracao = 8), (SELECT id_alternativa FROM pergunta NATURAL JOIN pergunta_has_alternativa NATURAL JOIN alternativa where opcao = '$opt8' AND numeracao = 8));";
    $resultado8 = mysqli_query($conn, $insert8);

    if ($opt8 == "A"){
        $opt9 = filter_input (INPUT_POST, 'perg9', FILTER_SANITIZE_STRING);
        $insert9 = "INSERT INTO resposta(cpf, resposta, id_perguntas, id_alternativa) VALUES ('$cpf', '$opt9', (SELECT id_perguntas FROM pergunta where numeracao = 9), (SELECT id_alternativa FROM pergunta NATURAL JOIN pergunta_has_alternativa NATURAL JOIN alternativa where opcao = '$opt9' AND numeracao = 9));";
        $resultado9 = mysqli_query($conn, $insert9);
    }else{
        $delete9 = "DELETE FROM resposta WHERE cpf = '$cpf' AND id_perguntas = (SELECT id_perguntas FROM pergunta WHERE numeracao = 9);"; 
        $d9 = mysqli_query($conn, $delete9);
    }

    $opt10 = filter_input (INPUT_POST, 'perg10', FILTER_SANITIZE_STRING);
    $opt11 = filter_input (INPUT_POST, 'perg11', FILTER_SANITIZE_STRING);
    $opt12 = filter_input (INPUT_POST, 'perg12', FILTER_SANITIZE_STRING);
    $opt13_ingles = filter_input (INPUT_POST, '13A', FILTER_SANITIZE_STRING);
    $opt13_espanhol = filter_input (INPUT_POST, '13B', FILTER_SANITIZE_STRING);
    $opt13_italiano = filter_input (INPUT_POST, '13C', FILTER_SANITIZE_STRING);
    $opt13_frances = filter_input (INPUT_POST, '13D', FILTER_SANITIZE_STRING);
    $opt14_ingles = filter_input (INPUT_POST, '14A', FILTER_SANITIZE_STRING);
    $opt14_espanhol = filter_input (INPUT_POST, '14B', FILTER_SANITIZE_STRING);
    $opt14_italiano = filter_input (INPUT_POST, '14C', FILTER_SANITIZE_STRING);
    $opt14_frances = filter_input (INPUT_POST, '14D', FILTER_SANITIZE_STRING);
    $opt15_ingles = filter_input (INPUT_POST, '15A', FILTER_SANITIZE_STRING);
    $opt15_espanhol = filter_input (INPUT_POST, '15B', FILTER_SANITIZE_STRING);
    $opt15_italiano = filter_input (INPUT_POST, '15C', FILTER_SANITIZE_STRING);
    $opt15_frances = filter_input (INPUT_POST, '15D', FILTER_SANITIZE_STRING);
    $opt16 = filter_input (INPUT_POST, 'perg16', FILTER_SANITIZE_STRING);
    $opt17 = filter_input (INPUT_POST, 'perg17', FILTER_SANITIZE_STRING);
    $opt18 = filter_input (INPUT_POST, 'perg18', FILTER_SANITIZE_STRING);
    $opt20 = filter_input (INPUT_POST, 'perg20', FILTER_SANITIZE_STRING);

    $insert10 = "INSERT INTO resposta(cpf, resposta, id_perguntas, id_alternativa) VALUES ('$cpf', '$opt10', (SELECT id_perguntas FROM pergunta where numeracao = 10), (SELECT id_alternativa FROM pergunta NATURAL JOIN pergunta_has_alternativa NATURAL JOIN alternativa where opcao = '$opt10' AND numeracao = 10));";
    $insert11 = "INSERT INTO resposta(cpf, resposta, id_perguntas, id_alternativa) VALUES ('$cpf', '$opt11', (SELECT id_perguntas FROM pergunta where numeracao = 11), (SELECT id_alternativa FROM pergunta NATURAL JOIN pergunta_has_alternativa NATURAL JOIN alternativa where opcao = '$opt11' AND numeracao = 11));";
    $insert12 = "INSERT INTO resposta(cpf, resposta, id_perguntas, id_alternativa) VALUES ('$cpf', '$opt12', (SELECT id_perguntas FROM pergunta where numeracao = 12), (SELECT id_alternativa FROM pergunta NATURAL JOIN pergunta_has_alternativa NATURAL JOIN alternativa where opcao = '$opt12' AND numeracao = 12));";
    $insert13_ingles = "INSERT INTO resposta(cpf, resposta, id_perguntas, id_alternativa, id_subpergunta) VALUES ('$cpf', '$opt13_ingles', (SELECT id_perguntas FROM pergunta where numeracao = 13),(SELECT id_alternativa FROM pergunta NATURAL JOIN subpergunta_has_pergunta NATURAL JOIN subpergunta NATURAL JOIN subpergunta_has_alternativa NATURAL JOIN alternativa WHERE numeracao = 13 AND numero = 'A' AND opcao = '$opt13_ingles'), (SELECT id_subpergunta FROM pergunta NATURAL JOIN subpergunta_has_pergunta NATURAL JOIN subpergunta WHERE numero = 'A' AND numeracao = 13));";
    $insert13_espanhol = "INSERT INTO resposta(cpf, resposta, id_perguntas, id_alternativa, id_subpergunta) VALUES ('$cpf', '$opt13_espanhol', (SELECT id_perguntas FROM pergunta where numeracao = 13),(SELECT id_alternativa FROM pergunta NATURAL JOIN subpergunta_has_pergunta NATURAL JOIN subpergunta NATURAL JOIN subpergunta_has_alternativa NATURAL JOIN alternativa WHERE numeracao = 13 AND numero = 'B' AND opcao = '$opt13_espanhol'), (SELECT id_subpergunta FROM pergunta NATURAL JOIN subpergunta_has_pergunta NATURAL JOIN subpergunta WHERE numero = 'B' AND numeracao = 13));";
    $insert13_italiano = "INSERT INTO resposta(cpf, resposta, id_perguntas, id_alternativa, id_subpergunta) VALUES ('$cpf', '$opt13_italiano', (SELECT id_perguntas FROM pergunta where numeracao = 13),(SELECT id_alternativa FROM pergunta NATURAL JOIN subpergunta_has_pergunta NATURAL JOIN subpergunta NATURAL JOIN subpergunta_has_alternativa NATURAL JOIN alternativa WHERE numeracao = 13 AND numero = 'C' AND opcao = '$opt13_italiano'), (SELECT id_subpergunta FROM pergunta NATURAL JOIN subpergunta_has_pergunta NATURAL JOIN subpergunta WHERE numero = 'C' AND numeracao = 13));";
    $insert13_frances = "INSERT INTO resposta(cpf, resposta, id_perguntas, id_alternativa, id_subpergunta) VALUES ('$cpf', '$opt13_frances', (SELECT id_perguntas FROM pergunta where numeracao = 13),(SELECT id_alternativa FROM pergunta NATURAL JOIN subpergunta_has_pergunta NATURAL JOIN subpergunta NATURAL JOIN subpergunta_has_alternativa NATURAL JOIN alternativa WHERE numeracao = 13 AND numero = 'D' AND opcao = '$opt13_frances'), (SELECT id_subpergunta FROM pergunta NATURAL JOIN subpergunta_has_pergunta NATURAL JOIN subpergunta WHERE numero = 'D' AND numeracao = 13));"; 
    $insert14_ingles = "INSERT INTO resposta(cpf, resposta, id_perguntas, id_alternativa, id_subpergunta) VALUES ('$cpf', '$opt14_ingles', (SELECT id_perguntas FROM pergunta where numeracao = 14),(SELECT id_alternativa FROM pergunta NATURAL JOIN subpergunta_has_pergunta NATURAL JOIN subpergunta NATURAL JOIN subpergunta_has_alternativa NATURAL JOIN alternativa WHERE numeracao = 14 AND numero = 'A' AND opcao = '$opt14_ingles'), (SELECT id_subpergunta FROM pergunta NATURAL JOIN subpergunta_has_pergunta NATURAL JOIN subpergunta WHERE numero = 'A' AND numeracao = 14));";
    $insert14_espanhol = "INSERT INTO resposta(cpf, resposta, id_perguntas, id_alternativa, id_subpergunta) VALUES ('$cpf', '$opt14_espanhol', (SELECT id_perguntas FROM pergunta where numeracao = 14), (SELECT id_alternativa FROM pergunta NATURAL JOIN subpergunta_has_pergunta NATURAL JOIN subpergunta NATURAL JOIN subpergunta_has_alternativa NATURAL JOIN alternativa WHERE numeracao = 14 AND numero = 'B' AND opcao = '$opt14_espanhol'), (SELECT id_subpergunta FROM pergunta NATURAL JOIN subpergunta_has_pergunta NATURAL JOIN subpergunta WHERE numero = 'B' AND numeracao = 14));";
    $insert14_italiano = "INSERT INTO resposta(cpf, resposta, id_perguntas, id_alternativa, id_subpergunta) VALUES ('$cpf', '$opt14_italiano', (SELECT id_perguntas FROM pergunta where numeracao = 14),(SELECT id_alternativa FROM pergunta NATURAL JOIN subpergunta_has_pergunta NATURAL JOIN subpergunta NATURAL JOIN subpergunta_has_alternativa NATURAL JOIN alternativa WHERE numeracao = 14 AND numero = 'C' AND opcao = '$opt14_italiano'), (SELECT id_subpergunta FROM pergunta NATURAL JOIN subpergunta_has_pergunta NATURAL JOIN subpergunta WHERE numero = 'C' AND numeracao = 14));";
    $insert14_frances = "INSERT INTO resposta(cpf, resposta, id_perguntas, id_alternativa, id_subpergunta) VALUES ('$cpf', '$opt14_frances', (SELECT id_perguntas FROM pergunta where numeracao = 14),(SELECT id_alternativa FROM pergunta NATURAL JOIN subpergunta_has_pergunta NATURAL JOIN subpergunta NATURAL JOIN subpergunta_has_alternativa NATURAL JOIN alternativa WHERE numeracao = 14 AND numero = 'D' AND opcao = '$opt14_frances'), (SELECT id_subpergunta FROM pergunta NATURAL JOIN subpergunta_has_pergunta NATURAL JOIN subpergunta WHERE numero = 'D' AND numeracao = 14));"; 
    $insert15_ingles = "INSERT INTO resposta(cpf, resposta, id_perguntas, id_alternativa, id_subpergunta) VALUES ('$cpf', '$opt15_ingles', (SELECT id_perguntas FROM pergunta where numeracao = 15),(SELECT id_alternativa FROM pergunta NATURAL JOIN subpergunta_has_pergunta NATURAL JOIN subpergunta NATURAL JOIN subpergunta_has_alternativa NATURAL JOIN alternativa WHERE numeracao = 15 AND numero = 'A' AND opcao = '$opt15_ingles'), (SELECT id_subpergunta FROM pergunta NATURAL JOIN subpergunta_has_pergunta NATURAL JOIN subpergunta WHERE numero = 'A' AND numeracao = 15));";
    $insert15_espanhol = "INSERT INTO resposta(cpf, resposta, id_perguntas, id_alternativa, id_subpergunta) VALUES ('$cpf', '$opt15_espanhol', (SELECT id_perguntas FROM pergunta where numeracao = 15),(SELECT id_alternativa FROM pergunta NATURAL JOIN subpergunta_has_pergunta NATURAL JOIN subpergunta NATURAL JOIN subpergunta_has_alternativa NATURAL JOIN alternativa WHERE numeracao = 15 AND numero = 'B' AND opcao = '$opt15_espanhol'), (SELECT id_subpergunta FROM pergunta NATURAL JOIN subpergunta_has_pergunta NATURAL JOIN subpergunta WHERE numero = 'B' AND numeracao = 15));";
    $insert15_italiano = "INSERT INTO resposta(cpf, resposta, id_perguntas, id_alternativa, id_subpergunta) VALUES ('$cpf', '$opt15_italiano', (SELECT id_perguntas FROM pergunta where numeracao = 15),(SELECT id_alternativa FROM pergunta NATURAL JOIN subpergunta_has_pergunta NATURAL JOIN subpergunta NATURAL JOIN subpergunta_has_alternativa NATURAL JOIN alternativa WHERE numeracao = 15 AND numero = 'C' AND opcao = '$opt15_italiano'), (SELECT id_subpergunta FROM pergunta NATURAL JOIN subpergunta_has_pergunta NATURAL JOIN subpergunta WHERE numero = 'C' AND numeracao = 15));";
    $insert15_frances = "INSERT INTO resposta(cpf, resposta, id_perguntas, id_alternativa, id_subpergunta) VALUES ('$cpf', '$opt15_frances', (SELECT id_perguntas FROM pergunta where numeracao = 15),(SELECT id_alternativa FROM pergunta NATURAL JOIN subpergunta_has_pergunta NATURAL JOIN subpergunta NATURAL JOIN subpergunta_has_alternativa NATURAL JOIN alternativa WHERE numeracao = 15 AND numero = 'D' AND opcao = '$opt15_frances'), (SELECT id_subpergunta FROM pergunta NATURAL JOIN subpergunta_has_pergunta NATURAL JOIN subpergunta WHERE numero = 'D' AND numeracao = 15));"; 
    $insert16 = "INSERT INTO resposta(cpf, resposta, id_perguntas, id_alternativa) VALUES ('$cpf', '$opt16', (SELECT id_perguntas FROM pergunta where numeracao = 16), (SELECT id_alternativa FROM pergunta NATURAL JOIN pergunta_has_alternativa NATURAL JOIN alternativa where opcao = '$opt16' AND numeracao = 16));";
    $insert17 = "INSERT INTO resposta(cpf, resposta, id_perguntas, id_alternativa) VALUES ('$cpf', '$opt17', (SELECT id_perguntas FROM pergunta where numeracao = 17), (SELECT id_alternativa FROM pergunta NATURAL JOIN pergunta_has_alternativa NATURAL JOIN alternativa where opcao = '$opt17' AND numeracao = 17));";
    $insert18 = "INSERT INTO resposta(cpf, resposta, id_perguntas, id_alternativa) VALUES ('$cpf', '$opt18', (SELECT id_perguntas FROM pergunta where numeracao = 18), (SELECT id_alternativa FROM pergunta NATURAL JOIN pergunta_has_alternativa NATURAL JOIN alternativa where opcao = '$opt18' AND numeracao = 18));";
   
    $resultado10 = mysqli_query($conn, $insert10);
    $resultado11 = mysqli_query($conn, $insert11);
    $resultado12 = mysqli_query($conn, $insert12);
    $resultado13_ingles = mysqli_query($conn, $insert13_ingles);
    $resultado13_espanhol = mysqli_query($conn, $insert13_espanhol);
    $resultado13_italiano = mysqli_query($conn, $insert13_italiano);
    $resultado13_frances = mysqli_query($conn, $insert13_frances);
    $resultado14_ingles = mysqli_query($conn, $insert14_ingles);
    $resultado14_espanhol = mysqli_query($conn, $insert14_espanhol);
    $resultado14_italiano = mysqli_query($conn, $insert14_italiano);
    $resultado14_frances = mysqli_query($conn, $insert14_frances);
    $resultado15_ingles = mysqli_query($conn, $insert15_ingles);
    $resultado15_espanhol = mysqli_query($conn, $insert15_espanhol);
    $resultado15_italiano = mysqli_query($conn, $insert15_italiano);
    $resultado15_frances = mysqli_query($conn, $insert15_frances);
    $resultado16 = mysqli_query($conn, $insert16);
    $resultado17 = mysqli_query($conn, $insert17);
    $resultado18 = mysqli_query($conn, $insert18);

    if ($opt18 == "A"){
        $opt19 = filter_input (INPUT_POST, 'perg19', FILTER_SANITIZE_STRING);
        $insert19 = "INSERT INTO resposta(cpf, resposta, id_perguntas) VALUES ('$cpf', '$opt19', (SELECT id_perguntas FROM pergunta where numeracao = 19));";
        $resultado19 = mysqli_query($conn, $insert19);
    }else{
        $delete19 = "DELETE FROM resposta WHERE cpf = '$cpf' AND id_perguntas = (SELECT id_perguntas FROM pergunta WHERE numeracao = 19);"; 
        $d19 = mysqli_query($conn, $delete19);
    }

    $insert20 = "INSERT INTO resposta(cpf, resposta, id_perguntas, id_alternativa) VALUES ('$cpf', '$opt20', (SELECT id_perguntas FROM pergunta where numeracao = 20), (SELECT id_alternativa FROM pergunta NATURAL JOIN pergunta_has_alternativa NATURAL JOIN alternativa where opcao = '$opt20' AND numeracao = 20));";
    $resultado20 = mysqli_query($conn, $insert20);

    if ($opt20 == "A"){
        $opt21 = $_POST['perg21'];        
        $insert21 = "INSERT INTO resposta(cpf, resposta, id_perguntas) VALUES ('$cpf', '$opt21', (SELECT id_perguntas FROM pergunta where numeracao = 21));";
        $resultado21 = mysqli_query($conn, $insert21);
    }else{
        $delete21 = "DELETE FROM resposta WHERE cpf = '$cpf' AND id_perguntas = (SELECT id_perguntas FROM pergunta WHERE numeracao = 21);"; 
        $d21 = mysqli_query($conn, $delete21);
    }

    mysqli_close($conn);
    
    header ("Location: dados_profissionaistec.php");
?>