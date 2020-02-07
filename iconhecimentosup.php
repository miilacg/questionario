<?php
    include 'acessobancosup.php';
    include 'vsup.php';

    $teste_conhecimentosup = "SELECT * 
                              FROM resposta
	                          WHERE CPF = '$cpf' AND id_perguntas = (SELECT id_perguntas 
                                                                     FROM pergunta 
                                                                     WHERE numeracao = 8)";
	          
	$verifica_conhecimentosup = mysqli_query($conn, $teste_conhecimentosup);

	if (mysqli_num_rows($verifica_conhecimentosup) >= 1){
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
        $delete22 = "DELETE FROM resposta WHERE cpf = '$cpf' AND id_perguntas = (SELECT id_perguntas FROM pergunta WHERE numeracao = 22);";
        $delete23 = "DELETE FROM resposta WHERE cpf = '$cpf' AND id_perguntas = (SELECT id_perguntas FROM pergunta WHERE numeracao = 23);";
        $delete24 = "DELETE FROM resposta WHERE cpf = '$cpf' AND id_perguntas = (SELECT id_perguntas FROM pergunta WHERE numeracao = 24);";
        $delete25 = "DELETE FROM resposta WHERE cpf = '$cpf' AND id_perguntas = (SELECT id_perguntas FROM pergunta WHERE numeracao = 25);";
        $delete26 = "DELETE FROM resposta WHERE cpf = '$cpf' AND id_perguntas = (SELECT id_perguntas FROM pergunta WHERE numeracao = 26);";
        $delete27 = "DELETE FROM resposta WHERE cpf = '$cpf' AND id_perguntas = (SELECT id_perguntas FROM pergunta WHERE numeracao = 27);";
        $delete28 = "DELETE FROM resposta WHERE cpf = '$cpf' AND id_perguntas = (SELECT id_perguntas FROM pergunta WHERE numeracao = 28);";
        $delete29 = "DELETE FROM resposta WHERE cpf = '$cpf' AND id_perguntas = (SELECT id_perguntas FROM pergunta WHERE numeracao = 29);";
        $delete30 = "DELETE FROM resposta WHERE cpf = '$cpf' AND id_perguntas = (SELECT id_perguntas FROM pergunta WHERE numeracao = 30);";
        $delete31 = "DELETE FROM resposta WHERE cpf = '$cpf' AND id_perguntas = (SELECT id_perguntas FROM pergunta WHERE numeracao = 31);";
        
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
        $d22 = mysqli_query($conn, $delete22);
        $d23 = mysqli_query($conn, $delete23);
        $d24 = mysqli_query($conn, $delete24);
        $d25 = mysqli_query($conn, $delete25);
        $d26 = mysqli_query($conn, $delete26);
        $d27 = mysqli_query($conn, $delete27);
        $d28 = mysqli_query($conn, $delete28);
        $d29 = mysqli_query($conn, $delete29);
        $d30 = mysqli_query($conn, $delete30);
        $d31 = mysqli_query($conn, $delete31);
    }

    $opt8 = filter_input (INPUT_POST, 'perg8', FILTER_SANITIZE_STRING);
    $insert8 = "INSERT INTO resposta(cpf, resposta, id_perguntas, id_alternativa) VALUES ('$cpf', '$opt8', (SELECT id_perguntas FROM pergunta where numeracao = 8), (SELECT id_alternativa FROM pergunta NATURAL JOIN pergunta_has_alternativa NATURAL JOIN alternativa where opcao = '$opt8' AND numeracao = 8));";
    $resultado8 = mysqli_query($conn, $insert8);

    if ($opt8 == "A"){
        $opt9 = filter_input (INPUT_POST, 'perg9', FILTER_SANITIZE_STRING);
        $insert9 = "INSERT INTO resposta(cpf, resposta, id_perguntas, id_alternativa) VALUES ('$cpf', '$opt9', (SELECT id_perguntas FROM pergunta where numeracao = 9), (SELECT id_alternativa FROM pergunta NATURAL JOIN pergunta_has_alternativa NATURAL JOIN alternativa where opcao = '$opt9' AND numeracao = 9));";
        $resultado9 = mysqli_query($conn, $insert9);
        if ($opt9 == "A" | $opt9 == "B"){
            $opt10 = filter_input (INPUT_POST, 'perg10', FILTER_SANITIZE_STRING);
            $insert10 = "INSERT INTO resposta(cpf, resposta, id_perguntas, id_alternativa) VALUES ('$cpf', '$opt10', (SELECT id_perguntas FROM pergunta where numeracao = 10), (SELECT id_alternativa FROM pergunta NATURAL JOIN pergunta_has_alternativa NATURAL JOIN alternativa where opcao = '$opt10' AND numeracao = 10));";
            $resultado10 = mysqli_query($conn, $insert10);
        }else{
            $delete10 = "DELETE FROM resposta WHERE cpf = '$cpf' AND id_perguntas = (SELECT id_perguntas FROM pergunta WHERE numeracao = 10);"; 
            $d10 = mysqli_query($conn, $delete10);
        }
    }else{
        $delete9 = "DELETE FROM resposta WHERE cpf = '$cpf' AND id_perguntas = (SELECT id_perguntas FROM pergunta WHERE numeracao = 9);"; 
        $d9 = mysqli_query($conn, $delete9);
    }
    
    $opt11 = filter_input (INPUT_POST, 'perg11', FILTER_SANITIZE_STRING);
    $opt12 = filter_input (INPUT_POST, 'perg12', FILTER_SANITIZE_STRING);
    $opt13 = filter_input (INPUT_POST, 'perg13', FILTER_SANITIZE_STRING);
    $opt14 = filter_input (INPUT_POST, 'perg14', FILTER_SANITIZE_STRING);
    $opt15 = filter_input (INPUT_POST, 'perg15', FILTER_SANITIZE_STRING);
    $opt16 = filter_input (INPUT_POST, 'perg16', FILTER_SANITIZE_STRING);
    $opt17 = filter_input (INPUT_POST, 'perg17', FILTER_SANITIZE_STRING);
    $opt18 = filter_input (INPUT_POST, 'perg18', FILTER_SANITIZE_STRING);
    $opt19 = filter_input (INPUT_POST, 'perg19', FILTER_SANITIZE_STRING);
    $opt20 = filter_input (INPUT_POST, 'perg20', FILTER_SANITIZE_STRING);

    $insert11 = "INSERT INTO resposta(cpf, resposta, id_perguntas, id_alternativa) VALUES ('$cpf', '$opt11', (SELECT id_perguntas FROM pergunta where numeracao = 11), (SELECT id_alternativa FROM pergunta NATURAL JOIN pergunta_has_alternativa NATURAL JOIN alternativa where opcao = '$opt11' AND numeracao = 11));";
    $insert12 = "INSERT INTO resposta(cpf, resposta, id_perguntas, id_alternativa) VALUES ('$cpf', '$opt12', (SELECT id_perguntas FROM pergunta where numeracao = 12), (SELECT id_alternativa FROM pergunta NATURAL JOIN pergunta_has_alternativa NATURAL JOIN alternativa where opcao = '$opt12' AND numeracao = 12));";
    $insert13 = "INSERT INTO resposta(cpf, resposta, id_perguntas, id_alternativa) VALUES ('$cpf', '$opt13', (SELECT id_perguntas FROM pergunta where numeracao = 13), (SELECT id_alternativa FROM pergunta NATURAL JOIN pergunta_has_alternativa NATURAL JOIN alternativa where opcao = '$opt13' AND numeracao = 13));";
    $insert14 = "INSERT INTO resposta(cpf, resposta, id_perguntas, id_alternativa) VALUES ('$cpf', '$opt14', (SELECT id_perguntas FROM pergunta where numeracao = 14), (SELECT id_alternativa FROM pergunta NATURAL JOIN pergunta_has_alternativa NATURAL JOIN alternativa where opcao = '$opt14' AND numeracao = 14));";
    $insert15 = "INSERT INTO resposta(cpf, resposta, id_perguntas, id_alternativa) VALUES ('$cpf', '$opt15', (SELECT id_perguntas FROM pergunta where numeracao = 15), (SELECT id_alternativa FROM pergunta NATURAL JOIN pergunta_has_alternativa NATURAL JOIN alternativa where opcao = '$opt15' AND numeracao = 15));";
    $insert16 = "INSERT INTO resposta(cpf, resposta, id_perguntas, id_alternativa) VALUES ('$cpf', '$opt16', (SELECT id_perguntas FROM pergunta where numeracao = 16), (SELECT id_alternativa FROM pergunta NATURAL JOIN pergunta_has_alternativa NATURAL JOIN alternativa where opcao = '$opt16' AND numeracao = 16));";
    $insert17 = "INSERT INTO resposta(cpf, resposta, id_perguntas, id_alternativa) VALUES ('$cpf', '$opt17', (SELECT id_perguntas FROM pergunta where numeracao = 17), (SELECT id_alternativa FROM pergunta NATURAL JOIN pergunta_has_alternativa NATURAL JOIN alternativa where opcao = '$opt17' AND numeracao = 17));";
    $insert18 = "INSERT INTO resposta(cpf, resposta, id_perguntas, id_alternativa) VALUES ('$cpf', '$opt18', (SELECT id_perguntas FROM pergunta where numeracao = 18), (SELECT id_alternativa FROM pergunta NATURAL JOIN pergunta_has_alternativa NATURAL JOIN alternativa where opcao = '$opt18' AND numeracao = 18));";
    $insert19 = "INSERT INTO resposta(cpf, resposta, id_perguntas, id_alternativa) VALUES ('$cpf', '$opt19', (SELECT id_perguntas FROM pergunta where numeracao = 19), (SELECT id_alternativa FROM pergunta NATURAL JOIN pergunta_has_alternativa NATURAL JOIN alternativa where opcao = '$opt19' AND numeracao = 19));";
    $insert20 = "INSERT INTO resposta(cpf, resposta, id_perguntas, id_alternativa) VALUES ('$cpf', '$opt20', (SELECT id_perguntas FROM pergunta where numeracao = 20), (SELECT id_alternativa FROM pergunta NATURAL JOIN pergunta_has_alternativa NATURAL JOIN alternativa where opcao = '$opt20' AND numeracao = 20));";

    $resultado11 = mysqli_query($conn, $insert11);
    $resultado12 = mysqli_query($conn, $insert12);
    $resultado13 = mysqli_query($conn, $insert13);
    $resultado14 = mysqli_query($conn, $insert14);
    $resultado15 = mysqli_query($conn, $insert15);
    $resultado16 = mysqli_query($conn, $insert16);
    $resultado17 = mysqli_query($conn, $insert17);
    $resultado18 = mysqli_query($conn, $insert18);
    $resultado19 = mysqli_query($conn, $insert19);
    $resultado20 = mysqli_query($conn, $insert20);

    if ($opt20 == "A" | $opt20 == "B"){        
        $opt21 = filter_input (INPUT_POST, 'perg21', FILTER_SANITIZE_STRING);
        $insert21 = "INSERT INTO resposta(cpf, resposta, id_perguntas) VALUES ('$cpf', '$opt21', (SELECT id_perguntas FROM pergunta where numeracao = 21));";
        $resultado21 = mysqli_query($conn, $insert21);
    }else{
        $delete21 = "DELETE FROM resposta WHERE cpf = '$cpf' AND id_perguntas = (SELECT id_perguntas FROM pergunta WHERE numeracao = 21);"; 
        $d21 = mysqli_query($conn, $delete21);
    }
    
    $opt22 = filter_input (INPUT_POST, 'perg22', FILTER_SANITIZE_STRING);
    $opt23A = filter_input (INPUT_POST, '23A', FILTER_SANITIZE_STRING);
    $opt23B = filter_input (INPUT_POST, '23B', FILTER_SANITIZE_STRING);
    $opt23C = filter_input (INPUT_POST, '23C', FILTER_SANITIZE_STRING);
    $opt23D = filter_input (INPUT_POST, '23D', FILTER_SANITIZE_STRING);
    $opt24A = filter_input (INPUT_POST, '24A', FILTER_SANITIZE_STRING);
    $opt24B = filter_input (INPUT_POST, '24B', FILTER_SANITIZE_STRING);
    $opt24C = filter_input (INPUT_POST, '24C', FILTER_SANITIZE_STRING);
    $opt24D = filter_input (INPUT_POST, '24D', FILTER_SANITIZE_STRING);
    $opt25A = filter_input (INPUT_POST, '25A', FILTER_SANITIZE_STRING);
    $opt25B = filter_input (INPUT_POST, '25B', FILTER_SANITIZE_STRING);
    $opt25C = filter_input (INPUT_POST, '25C', FILTER_SANITIZE_STRING);
    $opt25D = filter_input (INPUT_POST, '25D', FILTER_SANITIZE_STRING); 
    $opt26 = filter_input (INPUT_POST, 'perg26', FILTER_SANITIZE_STRING);
    $opt27 = filter_input (INPUT_POST, 'perg27', FILTER_SANITIZE_STRING);
    $opt28 = filter_input (INPUT_POST, 'perg28', FILTER_SANITIZE_STRING);

    $insert22 = "INSERT INTO resposta(cpf, resposta, id_perguntas, id_alternativa) VALUES ('$cpf', '$opt22', (SELECT id_perguntas FROM pergunta where numeracao = 22), (SELECT id_alternativa FROM pergunta NATURAL JOIN pergunta_has_alternativa NATURAL JOIN alternativa where opcao = '$opt22' AND numeracao = 22));";
    $insert23A = "INSERT INTO resposta(cpf, resposta, id_perguntas, id_alternativa, id_subpergunta) VALUES ('$cpf', '$opt23A', (SELECT id_perguntas FROM pergunta where numeracao = 23),(SELECT id_alternativa FROM pergunta NATURAL JOIN subpergunta_has_pergunta NATURAL JOIN subpergunta NATURAL JOIN subpergunta_has_alternativa NATURAL JOIN alternativa WHERE numeracao = 23 AND numero = 'A' AND opcao = '$opt23A'), (SELECT id_subpergunta FROM pergunta NATURAL JOIN subpergunta_has_pergunta NATURAL JOIN subpergunta WHERE numero = 'A' AND numeracao = 23));";
    $insert23B = "INSERT INTO resposta(cpf, resposta, id_perguntas, id_alternativa, id_subpergunta) VALUES ('$cpf', '$opt23B', (SELECT id_perguntas FROM pergunta where numeracao = 23),(SELECT id_alternativa FROM pergunta NATURAL JOIN subpergunta_has_pergunta NATURAL JOIN subpergunta NATURAL JOIN subpergunta_has_alternativa NATURAL JOIN alternativa WHERE numeracao = 23 AND numero = 'B' AND opcao = '$opt23B'), (SELECT id_subpergunta FROM pergunta NATURAL JOIN subpergunta_has_pergunta NATURAL JOIN subpergunta WHERE numero = 'B' AND numeracao = 23));";
    $insert23C = "INSERT INTO resposta(cpf, resposta, id_perguntas, id_alternativa, id_subpergunta) VALUES ('$cpf', '$opt23C', (SELECT id_perguntas FROM pergunta where numeracao = 23),(SELECT id_alternativa FROM pergunta NATURAL JOIN subpergunta_has_pergunta NATURAL JOIN subpergunta NATURAL JOIN subpergunta_has_alternativa NATURAL JOIN alternativa WHERE numeracao = 23 AND numero = 'C' AND opcao = '$opt23C'), (SELECT id_subpergunta FROM pergunta NATURAL JOIN subpergunta_has_pergunta NATURAL JOIN subpergunta WHERE numero = 'C' AND numeracao = 23));";
    $insert23D = "INSERT INTO resposta(cpf, resposta, id_perguntas, id_alternativa, id_subpergunta) VALUES ('$cpf', '$opt23D', (SELECT id_perguntas FROM pergunta where numeracao = 23),(SELECT id_alternativa FROM pergunta NATURAL JOIN subpergunta_has_pergunta NATURAL JOIN subpergunta NATURAL JOIN subpergunta_has_alternativa NATURAL JOIN alternativa WHERE numeracao = 23 AND numero = 'D' AND opcao = '$opt23D'), (SELECT id_subpergunta FROM pergunta NATURAL JOIN subpergunta_has_pergunta NATURAL JOIN subpergunta WHERE numero = 'D' AND numeracao = 23));"; 
    $insert24A = "INSERT INTO resposta(cpf, resposta, id_perguntas, id_alternativa, id_subpergunta) VALUES ('$cpf', '$opt24A', (SELECT id_perguntas FROM pergunta where numeracao = 24),(SELECT id_alternativa FROM pergunta NATURAL JOIN subpergunta_has_pergunta NATURAL JOIN subpergunta NATURAL JOIN subpergunta_has_alternativa NATURAL JOIN alternativa WHERE numeracao = 24 AND numero = 'A' AND opcao = '$opt24A'), (SELECT id_subpergunta FROM pergunta NATURAL JOIN subpergunta_has_pergunta NATURAL JOIN subpergunta WHERE numero = 'A' AND numeracao = 24));";
    $insert24B = "INSERT INTO resposta(cpf, resposta, id_perguntas, id_alternativa, id_subpergunta) VALUES ('$cpf', '$opt24B', (SELECT id_perguntas FROM pergunta where numeracao = 24), (SELECT id_alternativa FROM pergunta NATURAL JOIN subpergunta_has_pergunta NATURAL JOIN subpergunta NATURAL JOIN subpergunta_has_alternativa NATURAL JOIN alternativa WHERE numeracao = 24 AND numero = 'B' AND opcao = '$opt24B'), (SELECT id_subpergunta FROM pergunta NATURAL JOIN subpergunta_has_pergunta NATURAL JOIN subpergunta WHERE numero = 'B' AND numeracao = 24));";
    $insert24C = "INSERT INTO resposta(cpf, resposta, id_perguntas, id_alternativa, id_subpergunta) VALUES ('$cpf', '$opt24C', (SELECT id_perguntas FROM pergunta where numeracao = 24),(SELECT id_alternativa FROM pergunta NATURAL JOIN subpergunta_has_pergunta NATURAL JOIN subpergunta NATURAL JOIN subpergunta_has_alternativa NATURAL JOIN alternativa WHERE numeracao = 24 AND numero = 'C' AND opcao = '$opt24C'), (SELECT id_subpergunta FROM pergunta NATURAL JOIN subpergunta_has_pergunta NATURAL JOIN subpergunta WHERE numero = 'C' AND numeracao = 24));";
    $insert24D = "INSERT INTO resposta(cpf, resposta, id_perguntas, id_alternativa, id_subpergunta) VALUES ('$cpf', '$opt24D', (SELECT id_perguntas FROM pergunta where numeracao = 24),(SELECT id_alternativa FROM pergunta NATURAL JOIN subpergunta_has_pergunta NATURAL JOIN subpergunta NATURAL JOIN subpergunta_has_alternativa NATURAL JOIN alternativa WHERE numeracao = 24 AND numero = 'D' AND opcao = '$opt24D'), (SELECT id_subpergunta FROM pergunta NATURAL JOIN subpergunta_has_pergunta NATURAL JOIN subpergunta WHERE numero = 'D' AND numeracao = 24));"; 
    $insert25A = "INSERT INTO resposta(cpf, resposta, id_perguntas, id_alternativa, id_subpergunta) VALUES ('$cpf', '$opt25A', (SELECT id_perguntas FROM pergunta where numeracao = 25),(SELECT id_alternativa FROM pergunta NATURAL JOIN subpergunta_has_pergunta NATURAL JOIN subpergunta NATURAL JOIN subpergunta_has_alternativa NATURAL JOIN alternativa WHERE numeracao = 25 AND numero = 'A' AND opcao = '$opt25A'), (SELECT id_subpergunta FROM pergunta NATURAL JOIN subpergunta_has_pergunta NATURAL JOIN subpergunta WHERE numero = 'A' AND numeracao = 25));";
    $insert25B = "INSERT INTO resposta(cpf, resposta, id_perguntas, id_alternativa, id_subpergunta) VALUES ('$cpf', '$opt25B', (SELECT id_perguntas FROM pergunta where numeracao = 25),(SELECT id_alternativa FROM pergunta NATURAL JOIN subpergunta_has_pergunta NATURAL JOIN subpergunta NATURAL JOIN subpergunta_has_alternativa NATURAL JOIN alternativa WHERE numeracao = 25 AND numero = 'B' AND opcao = '$opt25B'), (SELECT id_subpergunta FROM pergunta NATURAL JOIN subpergunta_has_pergunta NATURAL JOIN subpergunta WHERE numero = 'B' AND numeracao = 25));";
    $insert25C = "INSERT INTO resposta(cpf, resposta, id_perguntas, id_alternativa, id_subpergunta) VALUES ('$cpf', '$opt25C', (SELECT id_perguntas FROM pergunta where numeracao = 25),(SELECT id_alternativa FROM pergunta NATURAL JOIN subpergunta_has_pergunta NATURAL JOIN subpergunta NATURAL JOIN subpergunta_has_alternativa NATURAL JOIN alternativa WHERE numeracao = 25 AND numero = 'C' AND opcao = '$opt25C'), (SELECT id_subpergunta FROM pergunta NATURAL JOIN subpergunta_has_pergunta NATURAL JOIN subpergunta WHERE numero = 'C' AND numeracao = 25));";
    $insert25D = "INSERT INTO resposta(cpf, resposta, id_perguntas, id_alternativa, id_subpergunta) VALUES ('$cpf', '$opt25D', (SELECT id_perguntas FROM pergunta where numeracao = 25),(SELECT id_alternativa FROM pergunta NATURAL JOIN subpergunta_has_pergunta NATURAL JOIN subpergunta NATURAL JOIN subpergunta_has_alternativa NATURAL JOIN alternativa WHERE numeracao = 25 AND numero = 'D' AND opcao = '$opt25D'), (SELECT id_subpergunta FROM pergunta NATURAL JOIN subpergunta_has_pergunta NATURAL JOIN subpergunta WHERE numero = 'D' AND numeracao = 25));"; 
    $insert26 = "INSERT INTO resposta(cpf, resposta, id_perguntas, id_alternativa) VALUES ('$cpf', '$opt26', (SELECT id_perguntas FROM pergunta where numeracao = 26), (SELECT id_alternativa FROM pergunta NATURAL JOIN pergunta_has_alternativa NATURAL JOIN alternativa where opcao = '$opt26' AND numeracao = 26));";
    $insert27 = "INSERT INTO resposta(cpf, resposta, id_perguntas, id_alternativa) VALUES ('$cpf', '$opt27', (SELECT id_perguntas FROM pergunta where numeracao = 27), (SELECT id_alternativa FROM pergunta NATURAL JOIN pergunta_has_alternativa NATURAL JOIN alternativa where opcao = '$opt27' AND numeracao = 27));";
    $insert28 = "INSERT INTO resposta(cpf, resposta, id_perguntas, id_alternativa) VALUES ('$cpf', '$opt28', (SELECT id_perguntas FROM pergunta where numeracao = 28), (SELECT id_alternativa FROM pergunta NATURAL JOIN pergunta_has_alternativa NATURAL JOIN alternativa where opcao = '$opt28' AND numeracao = 28));";
    
    $resultado22 = mysqli_query($conn, $insert22);    
    $resultado23A = mysqli_query($conn, $insert23A);
    $resultado23B = mysqli_query($conn, $insert23B);
    $resultado23C = mysqli_query($conn, $insert23C);
    $resultado23D = mysqli_query($conn, $insert23D);
    $resultado24A = mysqli_query($conn, $insert24A);
    $resultado24B = mysqli_query($conn, $insert24B);
    $resultado24C = mysqli_query($conn, $insert24C);
    $resultado24D = mysqli_query($conn, $insert24D);
    $resultado25A = mysqli_query($conn, $insert25A);
    $resultado25B = mysqli_query($conn, $insert25B);
    $resultado25C = mysqli_query($conn, $insert25C);
    $resultado25D = mysqli_query($conn, $insert25D);
    $resultado26 = mysqli_query($conn, $insert26);
    $resultado27 = mysqli_query($conn, $insert27);
    $resultado28 = mysqli_query($conn, $insert28);

    if ($opt28 == "A"){
        $opt29 = filter_input (INPUT_POST, 'perg29', FILTER_SANITIZE_STRING);
        $insert29 = "INSERT INTO resposta(cpf, resposta, id_perguntas) VALUES ('$cpf', '$opt29', (SELECT id_perguntas FROM pergunta where numeracao = 29));";
        $resultado29 = mysqli_query($conn, $insert29);
    }else{
        $delete29 = "DELETE FROM resposta WHERE cpf = '$cpf' AND id_perguntas = (SELECT id_perguntas FROM pergunta WHERE numeracao = 29);"; 
        $d29 = mysqli_query($conn, $delete29);
    }

    $opt30 = filter_input (INPUT_POST, 'perg30', FILTER_SANITIZE_STRING);
    $insert30 = "INSERT INTO resposta(cpf, resposta, id_perguntas, id_alternativa) VALUES ('$cpf', '$opt30', (SELECT id_perguntas FROM pergunta where numeracao = 30), (SELECT id_alternativa FROM pergunta NATURAL JOIN pergunta_has_alternativa NATURAL JOIN alternativa where opcao = '$opt30' AND numeracao = 30));";
    $resultado30 = mysqli_query($conn, $insert30);

    if ($opt30 == "A"){
        $opt31 = filter_input (INPUT_POST, 'perg31', FILTER_SANITIZE_STRING);
        $insert31 = "INSERT INTO resposta(cpf, resposta, id_perguntas) VALUES ('$cpf', '$opt31', (SELECT id_perguntas FROM pergunta where numeracao = 31));";
        $resultado31 = mysqli_query($conn, $insert31);
    }else{
        $delete31 = "DELETE FROM resposta WHERE cpf = '$cpf' AND id_perguntas = (SELECT id_perguntas FROM pergunta WHERE numeracao = 31);"; 
        $d21 = mysqli_query($conn, $delete31);
    }

    mysqli_close($conn);
    header ("Location: dados_profissionaissup.php");
?>