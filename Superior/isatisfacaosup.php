<?php    
    include '../acessobancosup.php';
    include 'vSuperior.php';

    $teste_satisfacaosup = "SELECT * 
                            FROM resposta
	                        WHERE CPF = '$cpf' AND id_perguntas = (SELECT id_perguntas FROM pergunta  WHERE numeracao = 58)";
	          
	$verifica_satisfacaosup = mysqli_query($conn, $teste_satisfacaosup);

    if (mysqli_num_rows($verifica_satisfacaosup) >= 1){
        $delete58 = "DELETE FROM resposta WHERE cpf = '$cpf' AND id_perguntas = (SELECT id_perguntas FROM pergunta WHERE numeracao = 58);";
        $delete59 = "DELETE FROM resposta WHERE cpf = '$cpf' AND id_perguntas = (SELECT id_perguntas FROM pergunta WHERE numeracao = 59);";
        $delete60 = "DELETE FROM resposta WHERE cpf = '$cpf' AND id_perguntas = (SELECT id_perguntas FROM pergunta WHERE numeracao = 60);";
        $delete61 = "DELETE FROM resposta WHERE cpf = '$cpf' AND id_perguntas = (SELECT id_perguntas FROM pergunta WHERE numeracao = 61);";
        $delete62 = "DELETE FROM resposta WHERE cpf = '$cpf' AND id_perguntas = (SELECT id_perguntas FROM pergunta WHERE numeracao = 62);"; 
        $delete63 = "DELETE FROM resposta WHERE cpf = '$cpf' AND id_perguntas = (SELECT id_perguntas FROM pergunta WHERE numeracao = 63);";
        
        $d58 = mysqli_query($conn, $delete58);
        $d59 = mysqli_query($conn, $delete59);
        $d60 = mysqli_query($conn, $delete60);
        $d61 = mysqli_query($conn, $delete61);
        $d62 = mysqli_query($conn, $delete62);
        $d63 = mysqli_query($conn, $delete63);
    }

	
	$opt58A = filter_input (INPUT_POST, '58A', FILTER_SANITIZE_STRING);
    $opt58B = filter_input (INPUT_POST, '58B', FILTER_SANITIZE_STRING);
    $opt58C = filter_input (INPUT_POST, '58C', FILTER_SANITIZE_STRING);
    $opt58D = filter_input (INPUT_POST, '58D', FILTER_SANITIZE_STRING);
    $opt58E = filter_input (INPUT_POST, '58E', FILTER_SANITIZE_STRING);
    $opt59A = filter_input (INPUT_POST, '59A', FILTER_SANITIZE_STRING);
    $opt59B = filter_input (INPUT_POST, '59B', FILTER_SANITIZE_STRING);
    $opt59C = filter_input (INPUT_POST, '59C', FILTER_SANITIZE_STRING);
    $opt59D = filter_input (INPUT_POST, '59D', FILTER_SANITIZE_STRING);
    $opt59E = filter_input (INPUT_POST, '59E', FILTER_SANITIZE_STRING);
    $opt59F = filter_input (INPUT_POST, '59F', FILTER_SANITIZE_STRING);
    $opt60 = filter_input (INPUT_POST, 'perg60', FILTER_SANITIZE_STRING);
    $opt61 = filter_input (INPUT_POST, 'perg61', FILTER_SANITIZE_STRING);
    $opt62A = filter_input (INPUT_POST, '62A', FILTER_SANITIZE_STRING);
    $opt62B = filter_input (INPUT_POST, '62B', FILTER_SANITIZE_STRING);
    $opt62C = filter_input (INPUT_POST, '62C', FILTER_SANITIZE_STRING);
    $opt62D = filter_input (INPUT_POST, '62D', FILTER_SANITIZE_STRING);
    $opt62E = filter_input (INPUT_POST, '62E', FILTER_SANITIZE_STRING);
    $opt63 = filter_input (INPUT_POST, 'perg63', FILTER_SANITIZE_STRING);

    $insert58A = "INSERT INTO resposta(cpf, resposta, id_perguntas, id_alternativa, id_subpergunta) VALUES ('$cpf', (SELECT opcao FROM pergunta NATURAL JOIN subpergunta_has_pergunta NATURAL JOIN subpergunta NATURAL JOIN subpergunta_has_alternativa NATURAL JOIN alternativa where alternativa = '$opt58A' AND numeracao = 58 AND numero = 'A'), (SELECT id_perguntas FROM pergunta where numeracao = 58), (SELECT id_alternativa FROM pergunta NATURAL JOIN subpergunta_has_pergunta NATURAL JOIN subpergunta NATURAL JOIN subpergunta_has_alternativa NATURAL JOIN alternativa WHERE numeracao = 58 AND numero = 'A' AND alternativa = '$opt58A'), (SELECT id_subpergunta FROM pergunta NATURAL JOIN subpergunta_has_pergunta NATURAL JOIN subpergunta WHERE numero = 'A' AND numeracao = 58));";
    $insert58B = "INSERT INTO resposta(cpf, resposta, id_perguntas, id_alternativa, id_subpergunta) VALUES ('$cpf', (SELECT opcao FROM pergunta NATURAL JOIN subpergunta_has_pergunta NATURAL JOIN subpergunta NATURAL JOIN subpergunta_has_alternativa NATURAL JOIN alternativa where alternativa = '$opt58B' AND numeracao = 58 AND numero = 'B'), (SELECT id_perguntas FROM pergunta where numeracao = 58), (SELECT id_alternativa FROM pergunta NATURAL JOIN subpergunta_has_pergunta NATURAL JOIN subpergunta NATURAL JOIN subpergunta_has_alternativa NATURAL JOIN alternativa WHERE numeracao = 58 AND numero = 'B' AND alternativa = '$opt58B'), (SELECT id_subpergunta FROM pergunta NATURAL JOIN subpergunta_has_pergunta NATURAL JOIN subpergunta WHERE numero = 'B' AND numeracao = 58));";
    $insert58C = "INSERT INTO resposta(cpf, resposta, id_perguntas, id_alternativa, id_subpergunta) VALUES ('$cpf', (SELECT opcao FROM pergunta NATURAL JOIN subpergunta_has_pergunta NATURAL JOIN subpergunta NATURAL JOIN subpergunta_has_alternativa NATURAL JOIN alternativa where alternativa = '$opt58C' AND numeracao = 58 AND numero = 'C'), (SELECT id_perguntas FROM pergunta where numeracao = 58), (SELECT id_alternativa FROM pergunta NATURAL JOIN subpergunta_has_pergunta NATURAL JOIN subpergunta NATURAL JOIN subpergunta_has_alternativa NATURAL JOIN alternativa WHERE numeracao = 58 AND numero = 'C' AND alternativa = '$opt58C'), (SELECT id_subpergunta FROM pergunta NATURAL JOIN subpergunta_has_pergunta NATURAL JOIN subpergunta WHERE numero = 'C' AND numeracao = 58));";
    $insert58D = "INSERT INTO resposta(cpf, resposta, id_perguntas, id_alternativa, id_subpergunta) VALUES ('$cpf', (SELECT opcao FROM pergunta NATURAL JOIN subpergunta_has_pergunta NATURAL JOIN subpergunta NATURAL JOIN subpergunta_has_alternativa NATURAL JOIN alternativa where alternativa = '$opt58D' AND numeracao = 58 AND numero = 'D'), (SELECT id_perguntas FROM pergunta where numeracao = 58), (SELECT id_alternativa FROM pergunta NATURAL JOIN subpergunta_has_pergunta NATURAL JOIN subpergunta NATURAL JOIN subpergunta_has_alternativa NATURAL JOIN alternativa WHERE numeracao = 58 AND numero = 'D' AND alternativa = '$opt58D'), (SELECT id_subpergunta FROM pergunta NATURAL JOIN subpergunta_has_pergunta NATURAL JOIN subpergunta WHERE numero = 'D' AND numeracao = 58));";
    $insert58E = "INSERT INTO resposta(cpf, resposta, id_perguntas, id_alternativa, id_subpergunta) VALUES ('$cpf', (SELECT opcao FROM pergunta NATURAL JOIN subpergunta_has_pergunta NATURAL JOIN subpergunta NATURAL JOIN subpergunta_has_alternativa NATURAL JOIN alternativa where alternativa = '$opt58E' AND numeracao = 58 AND numero = 'E'), (SELECT id_perguntas FROM pergunta where numeracao = 58), (SELECT id_alternativa FROM pergunta NATURAL JOIN subpergunta_has_pergunta NATURAL JOIN subpergunta NATURAL JOIN subpergunta_has_alternativa NATURAL JOIN alternativa WHERE numeracao = 58 AND numero = 'E' AND alternativa = '$opt58E'), (SELECT id_subpergunta FROM pergunta NATURAL JOIN subpergunta_has_pergunta NATURAL JOIN subpergunta WHERE numero = 'E' AND numeracao = 58));";
    $insert59A = "INSERT INTO resposta(cpf, resposta, id_perguntas, id_alternativa, id_subpergunta) VALUES ('$cpf', (SELECT opcao FROM pergunta NATURAL JOIN subpergunta_has_pergunta NATURAL JOIN subpergunta NATURAL JOIN subpergunta_has_alternativa NATURAL JOIN alternativa where alternativa = '$opt59A' AND numeracao = 59 AND numero = 'A'), (SELECT id_perguntas FROM pergunta where numeracao = 59), (SELECT id_alternativa FROM pergunta NATURAL JOIN subpergunta_has_pergunta NATURAL JOIN subpergunta NATURAL JOIN subpergunta_has_alternativa NATURAL JOIN alternativa WHERE numeracao = 59 AND numero = 'A' AND alternativa = '$opt59A'), (SELECT id_subpergunta FROM pergunta NATURAL JOIN subpergunta_has_pergunta NATURAL JOIN subpergunta WHERE numero = 'A' AND numeracao = 59));";
    $insert59B = "INSERT INTO resposta(cpf, resposta, id_perguntas, id_alternativa, id_subpergunta) VALUES ('$cpf', (SELECT opcao FROM pergunta NATURAL JOIN subpergunta_has_pergunta NATURAL JOIN subpergunta NATURAL JOIN subpergunta_has_alternativa NATURAL JOIN alternativa where alternativa = '$opt59B' AND numeracao = 59 AND numero = 'B'), (SELECT id_perguntas FROM pergunta where numeracao = 59), (SELECT id_alternativa FROM pergunta NATURAL JOIN subpergunta_has_pergunta NATURAL JOIN subpergunta NATURAL JOIN subpergunta_has_alternativa NATURAL JOIN alternativa WHERE numeracao = 59 AND numero = 'B' AND alternativa = '$opt59B'), (SELECT id_subpergunta FROM pergunta NATURAL JOIN subpergunta_has_pergunta NATURAL JOIN subpergunta WHERE numero = 'B' AND numeracao = 59));";
    $insert59C = "INSERT INTO resposta(cpf, resposta, id_perguntas, id_alternativa, id_subpergunta) VALUES ('$cpf', (SELECT opcao FROM pergunta NATURAL JOIN subpergunta_has_pergunta NATURAL JOIN subpergunta NATURAL JOIN subpergunta_has_alternativa NATURAL JOIN alternativa where alternativa = '$opt59C' AND numeracao = 59 AND numero = 'C'), (SELECT id_perguntas FROM pergunta where numeracao = 59), (SELECT id_alternativa FROM pergunta NATURAL JOIN subpergunta_has_pergunta NATURAL JOIN subpergunta NATURAL JOIN subpergunta_has_alternativa NATURAL JOIN alternativa WHERE numeracao = 59 AND numero = 'C' AND alternativa = '$opt59C'), (SELECT id_subpergunta FROM pergunta NATURAL JOIN subpergunta_has_pergunta NATURAL JOIN subpergunta WHERE numero = 'C' AND numeracao = 59));";
    $insert59D = "INSERT INTO resposta(cpf, resposta, id_perguntas, id_alternativa, id_subpergunta) VALUES ('$cpf', (SELECT opcao FROM pergunta NATURAL JOIN subpergunta_has_pergunta NATURAL JOIN subpergunta NATURAL JOIN subpergunta_has_alternativa NATURAL JOIN alternativa where alternativa = '$opt59D' AND numeracao = 59 AND numero = 'D'), (SELECT id_perguntas FROM pergunta where numeracao = 59), (SELECT id_alternativa FROM pergunta NATURAL JOIN subpergunta_has_pergunta NATURAL JOIN subpergunta NATURAL JOIN subpergunta_has_alternativa NATURAL JOIN alternativa WHERE numeracao = 59 AND numero = 'D' AND alternativa = '$opt59D'), (SELECT id_subpergunta FROM pergunta NATURAL JOIN subpergunta_has_pergunta NATURAL JOIN subpergunta WHERE numero = 'D' AND numeracao = 59));";
    $insert59E = "INSERT INTO resposta(cpf, resposta, id_perguntas, id_alternativa, id_subpergunta) VALUES ('$cpf', (SELECT opcao FROM pergunta NATURAL JOIN subpergunta_has_pergunta NATURAL JOIN subpergunta NATURAL JOIN subpergunta_has_alternativa NATURAL JOIN alternativa where alternativa = '$opt59E' AND numeracao = 59 AND numero = 'E'), (SELECT id_perguntas FROM pergunta where numeracao = 59), (SELECT id_alternativa FROM pergunta NATURAL JOIN subpergunta_has_pergunta NATURAL JOIN subpergunta NATURAL JOIN subpergunta_has_alternativa NATURAL JOIN alternativa WHERE numeracao = 59 AND numero = 'E' AND alternativa = '$opt59E'), (SELECT id_subpergunta FROM pergunta NATURAL JOIN subpergunta_has_pergunta NATURAL JOIN subpergunta WHERE numero = 'E' AND numeracao = 59));";
    $insert59F = "INSERT INTO resposta(cpf, resposta, id_perguntas, id_alternativa, id_subpergunta) VALUES ('$cpf', (SELECT opcao FROM pergunta NATURAL JOIN subpergunta_has_pergunta NATURAL JOIN subpergunta NATURAL JOIN subpergunta_has_alternativa NATURAL JOIN alternativa where alternativa = '$opt59F' AND numeracao = 59 AND numero = 'F'), (SELECT id_perguntas FROM pergunta where numeracao = 59), (SELECT id_alternativa FROM pergunta NATURAL JOIN subpergunta_has_pergunta NATURAL JOIN subpergunta NATURAL JOIN subpergunta_has_alternativa NATURAL JOIN alternativa WHERE numeracao = 59 AND numero = 'F' AND alternativa = '$opt59F'), (SELECT id_subpergunta FROM pergunta NATURAL JOIN subpergunta_has_pergunta NATURAL JOIN subpergunta WHERE numero = 'F' AND numeracao = 59));";
    $insert60 = "INSERT INTO resposta(cpf, resposta, id_perguntas, id_alternativa) VALUES ('$cpf', '$opt60', (SELECT id_perguntas FROM pergunta where numeracao = 60), (SELECT id_alternativa FROM pergunta NATURAL JOIN pergunta_has_alternativa NATURAL JOIN alternativa where opcao = '$opt60' AND numeracao = 60));";
    $insert61 = "INSERT INTO resposta(cpf, resposta, id_perguntas, id_alternativa) VALUES ('$cpf', '$opt61', (SELECT id_perguntas FROM pergunta where numeracao = 61), (SELECT id_alternativa FROM pergunta NATURAL JOIN pergunta_has_alternativa NATURAL JOIN alternativa where opcao = '$opt61' AND numeracao = 61));";
    $insert62A = "INSERT INTO resposta(cpf, resposta, id_perguntas, id_alternativa, id_subpergunta) VALUES ('$cpf', '$opt62A', (SELECT id_perguntas FROM pergunta where numeracao = 62),(SELECT id_alternativa FROM pergunta NATURAL JOIN subpergunta_has_pergunta NATURAL JOIN subpergunta NATURAL JOIN subpergunta_has_alternativa NATURAL JOIN alternativa WHERE numeracao = 62 AND numero = 'A' AND opcao = '$opt62A'), (SELECT id_subpergunta FROM pergunta NATURAL JOIN subpergunta_has_pergunta NATURAL JOIN subpergunta WHERE numero = 'A' AND numeracao = 62));";
    $insert62B = "INSERT INTO resposta(cpf, resposta, id_perguntas, id_alternativa, id_subpergunta) VALUES ('$cpf', '$opt62B', (SELECT id_perguntas FROM pergunta where numeracao = 62),(SELECT id_alternativa FROM pergunta NATURAL JOIN subpergunta_has_pergunta NATURAL JOIN subpergunta NATURAL JOIN subpergunta_has_alternativa NATURAL JOIN alternativa WHERE numeracao = 62 AND numero = 'B' AND opcao = '$opt62B'), (SELECT id_subpergunta FROM pergunta NATURAL JOIN subpergunta_has_pergunta NATURAL JOIN subpergunta WHERE numero = 'B' AND numeracao = 62));";
    $insert62C = "INSERT INTO resposta(cpf, resposta, id_perguntas, id_alternativa, id_subpergunta) VALUES ('$cpf', '$opt62C', (SELECT id_perguntas FROM pergunta where numeracao = 62),(SELECT id_alternativa FROM pergunta NATURAL JOIN subpergunta_has_pergunta NATURAL JOIN subpergunta NATURAL JOIN subpergunta_has_alternativa NATURAL JOIN alternativa WHERE numeracao = 62 AND numero = 'C' AND opcao = '$opt62C'), (SELECT id_subpergunta FROM pergunta NATURAL JOIN subpergunta_has_pergunta NATURAL JOIN subpergunta WHERE numero = 'C' AND numeracao = 62));";
    $insert62D = "INSERT INTO resposta(cpf, resposta, id_perguntas, id_alternativa, id_subpergunta) VALUES ('$cpf', '$opt62D', (SELECT id_perguntas FROM pergunta where numeracao = 62),(SELECT id_alternativa FROM pergunta NATURAL JOIN subpergunta_has_pergunta NATURAL JOIN subpergunta NATURAL JOIN subpergunta_has_alternativa NATURAL JOIN alternativa WHERE numeracao = 62 AND numero = 'D' AND opcao = '$opt62D'), (SELECT id_subpergunta FROM pergunta NATURAL JOIN subpergunta_has_pergunta NATURAL JOIN subpergunta WHERE numero = 'D' AND numeracao = 62));";
    $insert62E = "INSERT INTO resposta(cpf, resposta, id_perguntas, id_alternativa, id_subpergunta) VALUES ('$cpf', '$opt62E', (SELECT id_perguntas FROM pergunta where numeracao = 62),(SELECT id_alternativa FROM pergunta NATURAL JOIN subpergunta_has_pergunta NATURAL JOIN subpergunta NATURAL JOIN subpergunta_has_alternativa NATURAL JOIN alternativa WHERE numeracao = 62 AND numero = 'E' AND opcao = '$opt62E'), (SELECT id_subpergunta FROM pergunta NATURAL JOIN subpergunta_has_pergunta NATURAL JOIN subpergunta WHERE numero = 'E' AND numeracao = 62));";
    $insert63 = "INSERT INTO resposta(cpf, resposta, id_perguntas, id_alternativa) VALUES ('$cpf', '$opt63', (SELECT id_perguntas FROM pergunta where numeracao = 63), (SELECT id_alternativa FROM pergunta NATURAL JOIN pergunta_has_alternativa NATURAL JOIN alternativa where opcao = '$opt63' AND numeracao = 63));";
	
	$resultado58A = mysqli_query($conn, $insert58A);
    $resultado58B = mysqli_query($conn, $insert58B);
    $resultado58C = mysqli_query($conn, $insert58C);
    $resultado58D = mysqli_query($conn, $insert58D);
    $resultado58E = mysqli_query($conn, $insert58E);
    $resultado59A = mysqli_query($conn, $insert59A);
    $resultado59B = mysqli_query($conn, $insert59B);
    $resultado59C = mysqli_query($conn, $insert59C);
    $resultado59D = mysqli_query($conn, $insert59D);
    $resultado59E = mysqli_query($conn, $insert59E);
    $resultado59F = mysqli_query($conn, $insert59F);
    $resultado60 = mysqli_query($conn, $insert60);
    $resultado61 = mysqli_query($conn, $insert61);
    $resultado62A = mysqli_query($conn, $insert62A);
    $resultado62B = mysqli_query($conn, $insert62B);
    $resultado62C = mysqli_query($conn, $insert62C);
    $resultado62D = mysqli_query($conn, $insert62D);
    $resultado62E = mysqli_query($conn, $insert62E);
    $resultado63 = mysqli_query($conn, $insert63);    
    
    mysqli_close($conn);
    
    header ("Location: ../resultado.html");
?>