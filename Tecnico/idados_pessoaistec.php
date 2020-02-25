<?php
    include '../acessobancotec.php';
    include 'vTecnico.php';
    
    $teste_dadospessoaistec = "SELECT * FROM resposta WHERE CPF = '$cpf' AND id_perguntas = (SELECT id_perguntas FROM pergunta WHERE numeracao = 1);";
	          
	$verifica_dadospessoaistec = mysqli_query($conn, $teste_dadospessoaistec);

	if (mysqli_num_rows($verifica_dadospessoaistec) >=1 ){//Se existir uma resposta
        $delete1 = "DELETE FROM resposta WHERE cpf = '$cpf' AND id_perguntas = (SELECT id_perguntas FROM pergunta WHERE numeracao = 1);"; 
        $delete2 = "DELETE FROM resposta WHERE cpf = '$cpf' AND id_perguntas = (SELECT id_perguntas FROM pergunta WHERE numeracao = 2);";
        $delete3 = "DELETE FROM resposta WHERE cpf = '$cpf' AND id_perguntas = (SELECT id_perguntas FROM pergunta WHERE numeracao = 3);";
        $delete4 = "DELETE FROM resposta WHERE cpf = '$cpf' AND id_perguntas = (SELECT id_perguntas FROM pergunta WHERE numeracao = 4);";
        $delete5 = "DELETE FROM resposta WHERE cpf = '$cpf' AND id_perguntas = (SELECT id_perguntas FROM pergunta WHERE numeracao = 5);";
        $delete6 = "DELETE FROM resposta WHERE cpf = '$cpf' AND id_perguntas = (SELECT id_perguntas FROM pergunta WHERE numeracao = 6);";
        $delete7 = "DELETE FROM resposta WHERE cpf = '$cpf' AND id_perguntas = (SELECT id_perguntas FROM pergunta WHERE numeracao = 7);"; 
        $delete57 = "DELETE FROM resposta WHERE cpf = '$cpf' AND id_perguntas = (SELECT id_perguntas FROM pergunta WHERE numeracao = 57);";
        
        $d1 = mysqli_query($conn, $delete1);
        $d2 = mysqli_query($conn, $delete2);
        $d3 = mysqli_query($conn, $delete3);
        $d4 = mysqli_query($conn, $delete4);
        $d5 = mysqli_query($conn, $delete5);
        $d6 = mysqli_query($conn, $delete6);
        $d7 = mysqli_query($conn, $delete7);
        $d57 = mysqli_query($conn, $delete57);
    }

    $opt1 = filter_input (INPUT_POST, 'perg1', FILTER_SANITIZE_STRING);
    $opt2 = filter_input (INPUT_POST, 'perg2', FILTER_SANITIZE_STRING);
    $opt3 = filter_input (INPUT_POST, 'perg3', FILTER_SANITIZE_STRING);
    $opt4 = filter_input (INPUT_POST, 'perg4', FILTER_SANITIZE_STRING);
    $opt5 = filter_input (INPUT_POST, 'perg5', FILTER_SANITIZE_STRING);
    $opt6 = filter_input (INPUT_POST, 'perg6', FILTER_SANITIZE_STRING);

    $insert1 = "INSERT INTO resposta(cpf, resposta, id_perguntas, id_alternativa) VALUES ('$cpf', '$opt1', (SELECT id_perguntas FROM pergunta where numeracao = 1), (SELECT id_alternativa FROM pergunta NATURAL JOIN pergunta_has_alternativa NATURAL JOIN alternativa where opcao = '$opt1' AND numeracao = 1));";
    $insert2 = "INSERT INTO resposta(cpf, resposta, id_perguntas, id_alternativa) VALUES ('$cpf', (SELECT opcao FROM pergunta NATURAL JOIN pergunta_has_alternativa NATURAL JOIN alternativa where alternativa = '$opt2' AND numeracao = 2), (SELECT id_perguntas FROM pergunta where numeracao = 2), (SELECT id_alternativa FROM pergunta NATURAL JOIN pergunta_has_alternativa NATURAL JOIN alternativa where alternativa = '$opt2' AND numeracao = 2));";
    $insert3 = "INSERT INTO resposta(cpf, resposta, id_perguntas, id_alternativa) VALUES ('$cpf', (SELECT opcao FROM pergunta NATURAL JOIN pergunta_has_alternativa NATURAL JOIN alternativa where alternativa = '$opt3' AND numeracao = 3), (SELECT id_perguntas FROM pergunta where numeracao = 3), (SELECT id_alternativa FROM pergunta NATURAL JOIN pergunta_has_alternativa NATURAL JOIN alternativa where alternativa = '$opt3' AND numeracao = 3));";
    $insert4 = "INSERT INTO resposta(cpf, resposta, id_perguntas, id_alternativa) VALUES ('$cpf', '$opt4', (SELECT id_perguntas FROM pergunta where numeracao = 4), (SELECT id_alternativa FROM pergunta NATURAL JOIN pergunta_has_alternativa NATURAL JOIN alternativa where opcao = '$opt4' AND numeracao = 4));";
    $insert5 = "INSERT INTO resposta(cpf, resposta, id_perguntas, id_alternativa) VALUES ('$cpf', '$opt5', (SELECT id_perguntas FROM pergunta where numeracao = 5), (SELECT id_alternativa FROM pergunta NATURAL JOIN pergunta_has_alternativa NATURAL JOIN alternativa where opcao = '$opt5' AND numeracao = 5));";
    $insert6 = "INSERT INTO resposta(cpf, resposta, id_perguntas, id_alternativa) VALUES ('$cpf', '$opt6', (SELECT id_perguntas FROM pergunta where numeracao = 6), (SELECT id_alternativa FROM pergunta NATURAL JOIN pergunta_has_alternativa NATURAL JOIN alternativa where opcao = '$opt6' AND numeracao = 6));";

    $resultado1 = mysqli_query($conn, $insert1);
    $resultado2 = mysqli_query($conn, $insert2);
    $resultado3 = mysqli_query($conn, $insert3);
    $resultado4 = mysqli_query($conn, $insert4);
    $resultado5 = mysqli_query($conn, $insert5);
    $resultado6 = mysqli_query($conn, $insert6);
    
    if ($opt6 == "BR"){
        $opt7 = filter_input (INPUT_POST, 'perg7', FILTER_SANITIZE_STRING);
        $insert7 = "INSERT INTO resposta(cpf, resposta, id_perguntas, id_alternativa) VALUES ('$cpf', '$opt7', (SELECT id_perguntas FROM pergunta where numeracao = 7), (SELECT id_alternativa FROM pergunta NATURAL JOIN pergunta_has_alternativa NATURAL JOIN alternativa where opcao = '$opt7' AND numeracao = 7));";
        $resultado7 = mysqli_query($conn, $insert7);
    }else{
        $delete7 = "DELETE FROM resposta WHERE cpf = '$cpf' AND id_perguntas = (SELECT id_perguntas FROM pergunta WHERE numeracao = 7);"; 
        $d7 = mysqli_query($conn, $delete7);
    }

    $opt57 = filter_input (INPUT_POST, 'perg57', FILTER_SANITIZE_STRING);
    $insert57 = "INSERT INTO resposta(cpf, resposta, id_perguntas) VALUES ('$cpf', '$opt57', (SELECT id_perguntas FROM pergunta where numeracao = 57));";
    $resultado57 = mysqli_query($conn, $insert57);

    mysqli_close($conn);
    
    header("Location: conhecimentotec.php");
?>