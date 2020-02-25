<?php
	include '../acessobancotec.php';
    include 'vTecnico.php';

    $teste_satisfacaotec = "SELECT * 
                            FROM resposta
	                        WHERE CPF = '$cpf' AND id_perguntas = (SELECT id_perguntas 
                                                                            FROM pergunta 
                                                                            WHERE numeracao = 49)";
	          
	$verifica_satisfacaotec = mysqli_query($conn, $teste_satisfacaotec);

    if (mysqli_num_rows($verifica_satisfacaotec) >= 1){
        $delete49 = "DELETE FROM resposta WHERE cpf = '$cpf' AND id_perguntas = (SELECT id_perguntas FROM pergunta WHERE numeracao = 49);";
        $delete50 = "DELETE FROM resposta WHERE cpf = '$cpf' AND id_perguntas = (SELECT id_perguntas FROM pergunta WHERE numeracao = 50);";
        $delete51 = "DELETE FROM resposta WHERE cpf = '$cpf' AND id_perguntas = (SELECT id_perguntas FROM pergunta WHERE numeracao = 51);";
        $delete52 = "DELETE FROM resposta WHERE cpf = '$cpf' AND id_perguntas = (SELECT id_perguntas FROM pergunta WHERE numeracao = 52);";
        $delete53 = "DELETE FROM resposta WHERE cpf = '$cpf' AND id_perguntas = (SELECT id_perguntas FROM pergunta WHERE numeracao = 53);"; 
        $delete54 = "DELETE FROM resposta WHERE cpf = '$cpf' AND id_perguntas = (SELECT id_perguntas FROM pergunta WHERE numeracao = 54);";
        $delete55 = "DELETE FROM resposta WHERE cpf = '$cpf' AND id_perguntas = (SELECT id_perguntas FROM pergunta WHERE numeracao = 55);";
        $delete56 = "DELETE FROM resposta WHERE cpf = '$cpf' AND id_perguntas = (SELECT id_perguntas FROM pergunta WHERE numeracao = 56);"; 
        
        $d49 = mysqli_query($conn, $delete49);
        $d50 = mysqli_query($conn, $delete50);
        $d51 = mysqli_query($conn, $delete51);
        $d52 = mysqli_query($conn, $delete52);
        $d53 = mysqli_query($conn, $delete53);
        $d54 = mysqli_query($conn, $delete54);
        $d55 = mysqli_query($conn, $delete55);
        $d56 = mysqli_query($conn, $delete56);
    }

	
	$opt49A = filter_input (INPUT_POST, '49A', FILTER_SANITIZE_STRING);
    $opt49B = filter_input (INPUT_POST, '49B', FILTER_SANITIZE_STRING);
    $opt49C = filter_input (INPUT_POST, '49C', FILTER_SANITIZE_STRING);
    $opt49D = filter_input (INPUT_POST, '49D', FILTER_SANITIZE_STRING);
    $opt49E = filter_input (INPUT_POST, '49E', FILTER_SANITIZE_STRING);
    $opt49F = filter_input (INPUT_POST, '49F', FILTER_SANITIZE_STRING);
    $opt50A = filter_input (INPUT_POST, '50A', FILTER_SANITIZE_STRING);
    $opt50B = filter_input (INPUT_POST, '50B', FILTER_SANITIZE_STRING);
    $opt50C = filter_input (INPUT_POST, '50C', FILTER_SANITIZE_STRING);
    $opt50D = filter_input (INPUT_POST, '50D', FILTER_SANITIZE_STRING);
    $opt51 = filter_input (INPUT_POST, 'perg51', FILTER_SANITIZE_STRING);
    $opt52 = filter_input (INPUT_POST, 'perg52', FILTER_SANITIZE_STRING);
    $opt53 = filter_input (INPUT_POST, 'perg53', FILTER_SANITIZE_STRING);
    $opt54 = filter_input (INPUT_POST, 'perg54', FILTER_SANITIZE_STRING);
    $opt55A = filter_input (INPUT_POST, '55A', FILTER_SANITIZE_STRING);
    $opt55B = filter_input (INPUT_POST, '55B', FILTER_SANITIZE_STRING);
    $opt55C = filter_input (INPUT_POST, '55C', FILTER_SANITIZE_STRING);
    $opt55D = filter_input (INPUT_POST, '55D', FILTER_SANITIZE_STRING);
    $opt55E = filter_input (INPUT_POST, '55E', FILTER_SANITIZE_STRING);
    $opt56 = filter_input (INPUT_POST, 'perg56', FILTER_SANITIZE_STRING);

    $insert49A = "INSERT INTO resposta(cpf, resposta, id_perguntas, id_alternativa, id_subpergunta) VALUES ('$cpf', (SELECT opcao FROM pergunta NATURAL JOIN subpergunta_has_pergunta NATURAL JOIN subpergunta NATURAL JOIN subpergunta_has_alternativa NATURAL JOIN alternativa where alternativa = '$opt49A' AND numeracao = 49 AND numero = 'A'), (SELECT id_perguntas FROM pergunta where numeracao = 49), (SELECT id_alternativa FROM pergunta NATURAL JOIN subpergunta_has_pergunta NATURAL JOIN subpergunta NATURAL JOIN subpergunta_has_alternativa NATURAL JOIN alternativa WHERE numeracao = 49 AND numero = 'A' AND alternativa = '$opt49A'), (SELECT id_subpergunta FROM pergunta NATURAL JOIN subpergunta_has_pergunta NATURAL JOIN subpergunta WHERE numero = 'A' AND numeracao = 49));";
    $insert49B = "INSERT INTO resposta(cpf, resposta, id_perguntas, id_alternativa, id_subpergunta) VALUES ('$cpf', (SELECT opcao FROM pergunta NATURAL JOIN subpergunta_has_pergunta NATURAL JOIN subpergunta NATURAL JOIN subpergunta_has_alternativa NATURAL JOIN alternativa where alternativa = '$opt49B' AND numeracao = 49 AND numero = 'B'), (SELECT id_perguntas FROM pergunta where numeracao = 49), (SELECT id_alternativa FROM pergunta NATURAL JOIN subpergunta_has_pergunta NATURAL JOIN subpergunta NATURAL JOIN subpergunta_has_alternativa NATURAL JOIN alternativa WHERE numeracao = 49 AND numero = 'B' AND alternativa = '$opt49B'), (SELECT id_subpergunta FROM pergunta NATURAL JOIN subpergunta_has_pergunta NATURAL JOIN subpergunta WHERE numero = 'B' AND numeracao = 49));";
    $insert49C = "INSERT INTO resposta(cpf, resposta, id_perguntas, id_alternativa, id_subpergunta) VALUES ('$cpf', (SELECT opcao FROM pergunta NATURAL JOIN subpergunta_has_pergunta NATURAL JOIN subpergunta NATURAL JOIN subpergunta_has_alternativa NATURAL JOIN alternativa where alternativa = '$opt49C' AND numeracao = 49 AND numero = 'C'), (SELECT id_perguntas FROM pergunta where numeracao = 49), (SELECT id_alternativa FROM pergunta NATURAL JOIN subpergunta_has_pergunta NATURAL JOIN subpergunta NATURAL JOIN subpergunta_has_alternativa NATURAL JOIN alternativa WHERE numeracao = 49 AND numero = 'C' AND alternativa = '$opt49C'), (SELECT id_subpergunta FROM pergunta NATURAL JOIN subpergunta_has_pergunta NATURAL JOIN subpergunta WHERE numero = 'C' AND numeracao = 49));";
    $insert49D = "INSERT INTO resposta(cpf, resposta, id_perguntas, id_alternativa, id_subpergunta) VALUES ('$cpf', (SELECT opcao FROM pergunta NATURAL JOIN subpergunta_has_pergunta NATURAL JOIN subpergunta NATURAL JOIN subpergunta_has_alternativa NATURAL JOIN alternativa where alternativa = '$opt49D' AND numeracao = 49 AND numero = 'D'), (SELECT id_perguntas FROM pergunta where numeracao = 49), (SELECT id_alternativa FROM pergunta NATURAL JOIN subpergunta_has_pergunta NATURAL JOIN subpergunta NATURAL JOIN subpergunta_has_alternativa NATURAL JOIN alternativa WHERE numeracao = 49 AND numero = 'D' AND alternativa = '$opt49D'), (SELECT id_subpergunta FROM pergunta NATURAL JOIN subpergunta_has_pergunta NATURAL JOIN subpergunta WHERE numero = 'D' AND numeracao = 49));";
    $insert49E = "INSERT INTO resposta(cpf, resposta, id_perguntas, id_alternativa, id_subpergunta) VALUES ('$cpf', (SELECT opcao FROM pergunta NATURAL JOIN subpergunta_has_pergunta NATURAL JOIN subpergunta NATURAL JOIN subpergunta_has_alternativa NATURAL JOIN alternativa where alternativa = '$opt49E' AND numeracao = 49 AND numero = 'E'), (SELECT id_perguntas FROM pergunta where numeracao = 49), (SELECT id_alternativa FROM pergunta NATURAL JOIN subpergunta_has_pergunta NATURAL JOIN subpergunta NATURAL JOIN subpergunta_has_alternativa NATURAL JOIN alternativa WHERE numeracao = 49 AND numero = 'E' AND alternativa = '$opt49E'), (SELECT id_subpergunta FROM pergunta NATURAL JOIN subpergunta_has_pergunta NATURAL JOIN subpergunta WHERE numero = 'E' AND numeracao = 49));";
    $insert49F = "INSERT INTO resposta(cpf, resposta, id_perguntas, id_alternativa, id_subpergunta) VALUES ('$cpf', (SELECT opcao FROM pergunta NATURAL JOIN subpergunta_has_pergunta NATURAL JOIN subpergunta NATURAL JOIN subpergunta_has_alternativa NATURAL JOIN alternativa where alternativa = '$opt49F' AND numeracao = 49 AND numero = 'F'), (SELECT id_perguntas FROM pergunta where numeracao = 49), (SELECT id_alternativa FROM pergunta NATURAL JOIN subpergunta_has_pergunta NATURAL JOIN subpergunta NATURAL JOIN subpergunta_has_alternativa NATURAL JOIN alternativa WHERE numeracao = 49 AND numero = 'F' AND alternativa = '$opt49F'), (SELECT id_subpergunta FROM pergunta NATURAL JOIN subpergunta_has_pergunta NATURAL JOIN subpergunta WHERE numero = 'F' AND numeracao = 49));";
    $insert50A = "INSERT INTO resposta(cpf, resposta, id_perguntas, id_alternativa, id_subpergunta) VALUES ('$cpf', (SELECT opcao FROM pergunta NATURAL JOIN subpergunta_has_pergunta NATURAL JOIN subpergunta NATURAL JOIN subpergunta_has_alternativa NATURAL JOIN alternativa where alternativa = '$opt50A' AND numeracao = 50 AND numero = 'A'), (SELECT id_perguntas FROM pergunta where numeracao = 50), (SELECT id_alternativa FROM pergunta NATURAL JOIN subpergunta_has_pergunta NATURAL JOIN subpergunta NATURAL JOIN subpergunta_has_alternativa NATURAL JOIN alternativa WHERE numeracao = 50 AND numero = 'A' AND alternativa = '$opt50A'), (SELECT id_subpergunta FROM pergunta NATURAL JOIN subpergunta_has_pergunta NATURAL JOIN subpergunta WHERE numero = 'A' AND numeracao = 50));";
    $insert50B = "INSERT INTO resposta(cpf, resposta, id_perguntas, id_alternativa, id_subpergunta) VALUES ('$cpf', (SELECT opcao FROM pergunta NATURAL JOIN subpergunta_has_pergunta NATURAL JOIN subpergunta NATURAL JOIN subpergunta_has_alternativa NATURAL JOIN alternativa where alternativa = '$opt50B' AND numeracao = 50 AND numero = 'B'), (SELECT id_perguntas FROM pergunta where numeracao = 50), (SELECT id_alternativa FROM pergunta NATURAL JOIN subpergunta_has_pergunta NATURAL JOIN subpergunta NATURAL JOIN subpergunta_has_alternativa NATURAL JOIN alternativa WHERE numeracao = 50 AND numero = 'B' AND alternativa = '$opt50B'), (SELECT id_subpergunta FROM pergunta NATURAL JOIN subpergunta_has_pergunta NATURAL JOIN subpergunta WHERE numero = 'B' AND numeracao = 50));";
    $insert50C = "INSERT INTO resposta(cpf, resposta, id_perguntas, id_alternativa, id_subpergunta) VALUES ('$cpf', (SELECT opcao FROM pergunta NATURAL JOIN subpergunta_has_pergunta NATURAL JOIN subpergunta NATURAL JOIN subpergunta_has_alternativa NATURAL JOIN alternativa where alternativa = '$opt50C' AND numeracao = 50 AND numero = 'C'), (SELECT id_perguntas FROM pergunta where numeracao = 50), (SELECT id_alternativa FROM pergunta NATURAL JOIN subpergunta_has_pergunta NATURAL JOIN subpergunta NATURAL JOIN subpergunta_has_alternativa NATURAL JOIN alternativa WHERE numeracao = 50 AND numero = 'C' AND alternativa = '$opt50C'), (SELECT id_subpergunta FROM pergunta NATURAL JOIN subpergunta_has_pergunta NATURAL JOIN subpergunta WHERE numero = 'C' AND numeracao = 50));";
    $insert50D = "INSERT INTO resposta(cpf, resposta, id_perguntas, id_alternativa, id_subpergunta) VALUES ('$cpf', (SELECT opcao FROM pergunta NATURAL JOIN subpergunta_has_pergunta NATURAL JOIN subpergunta NATURAL JOIN subpergunta_has_alternativa NATURAL JOIN alternativa where alternativa = '$opt50D' AND numeracao = 50 AND numero = 'D'), (SELECT id_perguntas FROM pergunta where numeracao = 50), (SELECT id_alternativa FROM pergunta NATURAL JOIN subpergunta_has_pergunta NATURAL JOIN subpergunta NATURAL JOIN subpergunta_has_alternativa NATURAL JOIN alternativa WHERE numeracao = 50 AND numero = 'D' AND alternativa = '$opt50D'), (SELECT id_subpergunta FROM pergunta NATURAL JOIN subpergunta_has_pergunta NATURAL JOIN subpergunta WHERE numero = 'D' AND numeracao = 50));";
    $insert51 = "INSERT INTO resposta(cpf, resposta, id_perguntas, id_alternativa) VALUES ('$cpf', '$opt51', (SELECT id_perguntas FROM pergunta where numeracao = 51), (SELECT id_alternativa FROM pergunta NATURAL JOIN pergunta_has_alternativa NATURAL JOIN alternativa where opcao = '$opt51' AND numeracao = 51));";
    $insert52 = "INSERT INTO resposta(cpf, resposta, id_perguntas, id_alternativa) VALUES ('$cpf', '$opt52', (SELECT id_perguntas FROM pergunta where numeracao = 52), (SELECT id_alternativa FROM pergunta NATURAL JOIN pergunta_has_alternativa NATURAL JOIN alternativa where opcao = '$opt52' AND numeracao = 52));";
    $insert53 = "INSERT INTO resposta(cpf, resposta, id_perguntas, id_alternativa) VALUES ('$cpf', '$opt53', (SELECT id_perguntas FROM pergunta where numeracao = 53), (SELECT id_alternativa FROM pergunta NATURAL JOIN pergunta_has_alternativa NATURAL JOIN alternativa where opcao = '$opt53' AND numeracao = 53));";
    $insert54 = "INSERT INTO resposta(cpf, resposta, id_perguntas, id_alternativa) VALUES ('$cpf', '$opt54', (SELECT id_perguntas FROM pergunta where numeracao = 54), (SELECT id_alternativa FROM pergunta NATURAL JOIN pergunta_has_alternativa NATURAL JOIN alternativa where opcao = '$opt54' AND numeracao = 54));";
    $insert55A = "INSERT INTO resposta(cpf, resposta, id_perguntas, id_alternativa, id_subpergunta) VALUES ('$cpf', '$opt55A', (SELECT id_perguntas FROM pergunta where numeracao = 55),(SELECT id_alternativa FROM pergunta NATURAL JOIN subpergunta_has_pergunta NATURAL JOIN subpergunta NATURAL JOIN subpergunta_has_alternativa NATURAL JOIN alternativa WHERE numeracao = 55 AND numero = 'A' AND opcao = '$opt55A'), (SELECT id_subpergunta FROM pergunta NATURAL JOIN subpergunta_has_pergunta NATURAL JOIN subpergunta WHERE numero = 'A' AND numeracao = 55));";
    $insert55B = "INSERT INTO resposta(cpf, resposta, id_perguntas, id_alternativa, id_subpergunta) VALUES ('$cpf', '$opt55B', (SELECT id_perguntas FROM pergunta where numeracao = 55),(SELECT id_alternativa FROM pergunta NATURAL JOIN subpergunta_has_pergunta NATURAL JOIN subpergunta NATURAL JOIN subpergunta_has_alternativa NATURAL JOIN alternativa WHERE numeracao = 55 AND numero = 'B' AND opcao = '$opt55B'), (SELECT id_subpergunta FROM pergunta NATURAL JOIN subpergunta_has_pergunta NATURAL JOIN subpergunta WHERE numero = 'B' AND numeracao = 55));";
    $insert55C = "INSERT INTO resposta(cpf, resposta, id_perguntas, id_alternativa, id_subpergunta) VALUES ('$cpf', '$opt55C', (SELECT id_perguntas FROM pergunta where numeracao = 55),(SELECT id_alternativa FROM pergunta NATURAL JOIN subpergunta_has_pergunta NATURAL JOIN subpergunta NATURAL JOIN subpergunta_has_alternativa NATURAL JOIN alternativa WHERE numeracao = 55 AND numero = 'C' AND opcao = '$opt55C'), (SELECT id_subpergunta FROM pergunta NATURAL JOIN subpergunta_has_pergunta NATURAL JOIN subpergunta WHERE numero = 'C' AND numeracao = 55));";
    $insert55D = "INSERT INTO resposta(cpf, resposta, id_perguntas, id_alternativa, id_subpergunta) VALUES ('$cpf', '$opt55D', (SELECT id_perguntas FROM pergunta where numeracao = 55),(SELECT id_alternativa FROM pergunta NATURAL JOIN subpergunta_has_pergunta NATURAL JOIN subpergunta NATURAL JOIN subpergunta_has_alternativa NATURAL JOIN alternativa WHERE numeracao = 55 AND numero = 'D' AND opcao = '$opt55D'), (SELECT id_subpergunta FROM pergunta NATURAL JOIN subpergunta_has_pergunta NATURAL JOIN subpergunta WHERE numero = 'D' AND numeracao = 55));";
    $insert55E = "INSERT INTO resposta(cpf, resposta, id_perguntas, id_alternativa, id_subpergunta) VALUES ('$cpf', '$opt55E', (SELECT id_perguntas FROM pergunta where numeracao = 55),(SELECT id_alternativa FROM pergunta NATURAL JOIN subpergunta_has_pergunta NATURAL JOIN subpergunta NATURAL JOIN subpergunta_has_alternativa NATURAL JOIN alternativa WHERE numeracao = 55 AND numero = 'E' AND opcao = '$opt55E'), (SELECT id_subpergunta FROM pergunta NATURAL JOIN subpergunta_has_pergunta NATURAL JOIN subpergunta WHERE numero = 'E' AND numeracao = 55));";
    $insert56 = "INSERT INTO resposta(cpf, resposta, id_perguntas, id_alternativa) VALUES ('$cpf', '$opt56', (SELECT id_perguntas FROM pergunta where numeracao = 56), (SELECT id_alternativa FROM pergunta NATURAL JOIN pergunta_has_alternativa NATURAL JOIN alternativa where opcao = '$opt56' AND numeracao = 56));";
	
	$resultado49A = mysqli_query($conn, $insert49A);
    $resultado49B = mysqli_query($conn, $insert49B);
    $resultado49C = mysqli_query($conn, $insert49C);
    $resultado49D = mysqli_query($conn, $insert49D);
    $resultado49E = mysqli_query($conn, $insert49E);
    $resultado49F = mysqli_query($conn, $insert49F);
    $resultado50A = mysqli_query($conn, $insert50A);
    $resultado50B = mysqli_query($conn, $insert50B);
    $resultado50C = mysqli_query($conn, $insert50C);
    $resultado50D = mysqli_query($conn, $insert50D);
    $resultado51 = mysqli_query($conn, $insert51);
    $resultado52 = mysqli_query($conn, $insert52);
    $resultado53 = mysqli_query($conn, $insert53);
    $resultado54 = mysqli_query($conn, $insert54);
    $resultado55A = mysqli_query($conn, $insert55A);
    $resultado55B = mysqli_query($conn, $insert55B);
    $resultado55C = mysqli_query($conn, $insert55C);
    $resultado55D = mysqli_query($conn, $insert55D);
    $resultado55E = mysqli_query($conn, $insert55E);
    $resultado56 = mysqli_query($conn, $insert56);

    mysqli_close($conn);
    //session_destroy();

    header ("Location: resultadotec.php");
?>