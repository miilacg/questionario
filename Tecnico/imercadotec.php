<?php
    include '../acessobancotec.php';
    include 'vTecnico.php';

    $teste_mercadotec = "SELECT * 
                         FROM resposta
	                     WHERE CPF = '$cpf' AND id_perguntas = (SELECT id_perguntas 
                                                                FROM pergunta 
                                                                WHERE numeracao = 38)";
	          
	$verifica_mercadotec = mysqli_query($conn, $teste_mercadotec);

    if (mysqli_num_rows($verifica_mercadotec) >= 1){
        $delete38 = "DELETE FROM resposta WHERE cpf = '$cpf' AND id_perguntas = (SELECT id_perguntas FROM pergunta WHERE numeracao = 38);";
        $delete39 = "DELETE FROM resposta WHERE cpf = '$cpf' AND id_perguntas = (SELECT id_perguntas FROM pergunta WHERE numeracao = 39);";
        $delete40 = "DELETE FROM resposta WHERE cpf = '$cpf' AND id_perguntas = (SELECT id_perguntas FROM pergunta WHERE numeracao = 40);"; 
        
        $d38 = mysqli_query($conn, $delete38);
        $d39 = mysqli_query($conn, $delete39);
        $d40 = mysqli_query($conn, $delete40);
    }

    $opt38A = filter_input (INPUT_POST, '38A', FILTER_SANITIZE_STRING);
    $opt38B = filter_input (INPUT_POST, '38B', FILTER_SANITIZE_STRING);
    $opt38C = filter_input (INPUT_POST, '38C', FILTER_SANITIZE_STRING);
    $opt38D = filter_input (INPUT_POST, '38D', FILTER_SANITIZE_STRING);
    $opt38E = filter_input (INPUT_POST, '38E', FILTER_SANITIZE_STRING);
    $opt38F = filter_input (INPUT_POST, '38F', FILTER_SANITIZE_STRING);
    $opt38G = filter_input (INPUT_POST, '38G', FILTER_SANITIZE_STRING);
    $opt39A = filter_input (INPUT_POST, '39A', FILTER_SANITIZE_STRING);
    $opt39B = filter_input (INPUT_POST, '39B', FILTER_SANITIZE_STRING);
    $opt39C = filter_input (INPUT_POST, '39C', FILTER_SANITIZE_STRING);
    $opt39D = filter_input (INPUT_POST, '39D', FILTER_SANITIZE_STRING);
    $opt39E = filter_input (INPUT_POST, '39E', FILTER_SANITIZE_STRING);
    $opt39F = filter_input (INPUT_POST, '39F', FILTER_SANITIZE_STRING);
    $opt39G = filter_input (INPUT_POST, '39G', FILTER_SANITIZE_STRING);
    $opt39H = filter_input (INPUT_POST, '39H', FILTER_SANITIZE_STRING);
    $opt39I = filter_input (INPUT_POST, '39I', FILTER_SANITIZE_STRING);
    $opt40A = filter_input (INPUT_POST, '40A', FILTER_SANITIZE_STRING);
	$opt40B = filter_input (INPUT_POST, '40B', FILTER_SANITIZE_STRING);
	$opt40C = filter_input (INPUT_POST, '40C', FILTER_SANITIZE_STRING);	
	$opt40D = filter_input (INPUT_POST, '40D', FILTER_SANITIZE_STRING);
	$opt40E = filter_input (INPUT_POST, '40E', FILTER_SANITIZE_STRING);
	$opt40F = filter_input (INPUT_POST, '40F', FILTER_SANITIZE_STRING);
	$opt40G = filter_input (INPUT_POST, '40G', FILTER_SANITIZE_STRING);
	$opt40H = filter_input (INPUT_POST, '40H', FILTER_SANITIZE_STRING);	
	$opt40I = filter_input (INPUT_POST, '40I', FILTER_SANITIZE_STRING);	
	$opt40J = filter_input (INPUT_POST, '40J', FILTER_SANITIZE_STRING);
	$opt40K = filter_input (INPUT_POST, '40K', FILTER_SANITIZE_STRING);
	$opt40L = filter_input (INPUT_POST, '40L', FILTER_SANITIZE_STRING);
	$opt40M = filter_input (INPUT_POST, '40M', FILTER_SANITIZE_STRING);
	$opt40N = filter_input (INPUT_POST, '40N', FILTER_SANITIZE_STRING);
	$opt40O = filter_input (INPUT_POST, '40O', FILTER_SANITIZE_STRING);
	$opt40P = filter_input (INPUT_POST, '40P', FILTER_SANITIZE_STRING);
	$opt40Q = filter_input (INPUT_POST, '40Q', FILTER_SANITIZE_STRING);
	$opt40R = filter_input (INPUT_POST, '40R', FILTER_SANITIZE_STRING);

    $insert38A = "INSERT INTO resposta(cpf, resposta, id_perguntas, id_alternativa, id_subpergunta) VALUES ('$cpf', 
    '$opt38A', (SELECT id_perguntas FROM pergunta where numeracao = 38),(SELECT id_alternativa FROM pergunta NATURAL JOIN subpergunta_has_pergunta NATURAL JOIN subpergunta NATURAL JOIN subpergunta_has_alternativa NATURAL JOIN alternativa WHERE numeracao = 38 AND numero = 'A' AND opcao = '$opt38A'), (SELECT id_subpergunta FROM pergunta NATURAL JOIN subpergunta_has_pergunta NATURAL JOIN subpergunta WHERE numero = 'A' AND numeracao = 38));";    
    $insert38B = "INSERT INTO resposta(cpf, resposta, id_perguntas, id_alternativa, id_subpergunta) VALUES ('$cpf', 
    '$opt38B', (SELECT id_perguntas FROM pergunta where numeracao = 38),(SELECT id_alternativa FROM pergunta NATURAL JOIN subpergunta_has_pergunta NATURAL JOIN subpergunta NATURAL JOIN subpergunta_has_alternativa NATURAL JOIN alternativa WHERE numeracao = 38 AND numero = 'B' AND opcao = '$opt38B'), (SELECT id_subpergunta FROM pergunta NATURAL JOIN subpergunta_has_pergunta NATURAL JOIN subpergunta WHERE numero = 'B' AND numeracao = 38));";
    $insert38C = "INSERT INTO resposta(cpf, resposta, id_perguntas, id_alternativa, id_subpergunta) VALUES ('$cpf', 
    '$opt38C', (SELECT id_perguntas FROM pergunta where numeracao = 38),(SELECT id_alternativa FROM pergunta NATURAL JOIN subpergunta_has_pergunta NATURAL JOIN subpergunta NATURAL JOIN subpergunta_has_alternativa NATURAL JOIN alternativa WHERE numeracao = 38 AND numero = 'C' AND opcao = '$opt38C'), (SELECT id_subpergunta FROM pergunta NATURAL JOIN subpergunta_has_pergunta NATURAL JOIN subpergunta WHERE numero = 'C' AND numeracao = 38));";
    $insert38D = "INSERT INTO resposta(cpf, resposta, id_perguntas, id_alternativa, id_subpergunta) VALUES ('$cpf', 
    '$opt38D', (SELECT id_perguntas FROM pergunta where numeracao = 38),(SELECT id_alternativa FROM pergunta NATURAL JOIN subpergunta_has_pergunta NATURAL JOIN subpergunta NATURAL JOIN subpergunta_has_alternativa NATURAL JOIN alternativa WHERE numeracao = 38 AND numero = 'D' AND opcao = '$opt38D'), (SELECT id_subpergunta FROM pergunta NATURAL JOIN subpergunta_has_pergunta NATURAL JOIN subpergunta WHERE numero = 'D' AND numeracao = 38));";
    $insert38E = "INSERT INTO resposta(cpf, resposta, id_perguntas, id_alternativa, id_subpergunta) VALUES ('$cpf', 
    '$opt38E', (SELECT id_perguntas FROM pergunta where numeracao = 38),(SELECT id_alternativa FROM pergunta NATURAL JOIN subpergunta_has_pergunta NATURAL JOIN subpergunta NATURAL JOIN subpergunta_has_alternativa NATURAL JOIN alternativa WHERE numeracao = 38 AND numero = 'E' AND opcao = '$opt38E'), (SELECT id_subpergunta FROM pergunta NATURAL JOIN subpergunta_has_pergunta NATURAL JOIN subpergunta WHERE numero = 'E' AND numeracao = 38));";
    $insert38F = "INSERT INTO resposta(cpf, resposta, id_perguntas, id_alternativa, id_subpergunta) VALUES ('$cpf', 
    '$opt38F', (SELECT id_perguntas FROM pergunta where numeracao = 38),(SELECT id_alternativa FROM pergunta NATURAL JOIN subpergunta_has_pergunta NATURAL JOIN subpergunta NATURAL JOIN subpergunta_has_alternativa NATURAL JOIN alternativa WHERE numeracao = 38 AND numero = 'F' AND opcao = '$opt38F'), (SELECT id_subpergunta FROM pergunta NATURAL JOIN subpergunta_has_pergunta NATURAL JOIN subpergunta WHERE numero = 'F' AND numeracao = 38));";
    $insert38G = "INSERT INTO resposta(cpf, resposta, id_perguntas, id_alternativa, id_subpergunta) VALUES ('$cpf', '$opt38G', (SELECT id_perguntas FROM pergunta where numeracao = 38),(SELECT id_alternativa FROM pergunta NATURAL JOIN subpergunta_has_pergunta NATURAL JOIN subpergunta NATURAL JOIN subpergunta_has_alternativa NATURAL JOIN alternativa WHERE numeracao = 38 AND numero = 'G' AND opcao = '$opt38G'), (SELECT id_subpergunta FROM pergunta NATURAL JOIN subpergunta_has_pergunta NATURAL JOIN subpergunta WHERE numero = 'G' AND numeracao = 38));";
    $insert39A = "INSERT INTO resposta(cpf, resposta, id_perguntas, id_alternativa, id_subpergunta) VALUES ('$cpf', '$opt39A', (SELECT id_perguntas FROM pergunta where numeracao = 39), (SELECT id_alternativa FROM pergunta NATURAL JOIN subpergunta_has_pergunta NATURAL JOIN subpergunta NATURAL JOIN subpergunta_has_alternativa NATURAL JOIN alternativa WHERE numeracao = 39 AND numero = 'A' AND opcao = '$opt39A'), (SELECT id_subpergunta FROM pergunta NATURAL JOIN subpergunta_has_pergunta NATURAL JOIN subpergunta WHERE numero = 'A' AND numeracao = 39));";
    $insert39B = "INSERT INTO resposta(cpf, resposta, id_perguntas, id_alternativa, id_subpergunta) VALUES ('$cpf', '$opt39B', (SELECT id_perguntas FROM pergunta where numeracao = 39), (SELECT id_alternativa FROM pergunta NATURAL JOIN subpergunta_has_pergunta NATURAL JOIN subpergunta NATURAL JOIN subpergunta_has_alternativa NATURAL JOIN alternativa WHERE numeracao = 39 AND numero = 'B' AND opcao = '$opt39B'), (SELECT id_subpergunta FROM pergunta NATURAL JOIN subpergunta_has_pergunta NATURAL JOIN subpergunta WHERE numero = 'B' AND numeracao = 39));";
    $insert39C = "INSERT INTO resposta(cpf, resposta, id_perguntas, id_alternativa, id_subpergunta) VALUES ('$cpf', '$opt39C', (SELECT id_perguntas FROM pergunta where numeracao = 39), (SELECT id_alternativa FROM pergunta NATURAL JOIN subpergunta_has_pergunta NATURAL JOIN subpergunta NATURAL JOIN subpergunta_has_alternativa NATURAL JOIN alternativa WHERE numeracao = 39 AND numero = 'C' AND opcao = '$opt39C'), (SELECT id_subpergunta FROM pergunta NATURAL JOIN subpergunta_has_pergunta NATURAL JOIN subpergunta WHERE numero = 'C' AND numeracao = 39));";
    $insert39D = "INSERT INTO resposta(cpf, resposta, id_perguntas, id_alternativa, id_subpergunta) VALUES ('$cpf', '$opt39D', (SELECT id_perguntas FROM pergunta where numeracao = 39), (SELECT id_alternativa FROM pergunta NATURAL JOIN subpergunta_has_pergunta NATURAL JOIN subpergunta NATURAL JOIN subpergunta_has_alternativa NATURAL JOIN alternativa WHERE numeracao = 39 AND numero = 'D' AND opcao = '$opt39D'), (SELECT id_subpergunta FROM pergunta NATURAL JOIN subpergunta_has_pergunta NATURAL JOIN subpergunta WHERE numero = 'D' AND numeracao = 39));";
    $insert39E = "INSERT INTO resposta(cpf, resposta, id_perguntas, id_alternativa, id_subpergunta) VALUES ('$cpf', '$opt39E', (SELECT id_perguntas FROM pergunta where numeracao = 39), (SELECT id_alternativa FROM pergunta NATURAL JOIN subpergunta_has_pergunta NATURAL JOIN subpergunta NATURAL JOIN subpergunta_has_alternativa NATURAL JOIN alternativa WHERE numeracao = 39 AND numero = 'E' AND opcao = '$opt39E'), (SELECT id_subpergunta FROM pergunta NATURAL JOIN subpergunta_has_pergunta NATURAL JOIN subpergunta WHERE numero = 'E' AND numeracao = 39));";
    $insert39F = "INSERT INTO resposta(cpf, resposta, id_perguntas, id_alternativa, id_subpergunta) VALUES ('$cpf', '$opt39F', (SELECT id_perguntas FROM pergunta where numeracao = 39), (SELECT id_alternativa FROM pergunta NATURAL JOIN subpergunta_has_pergunta NATURAL JOIN subpergunta NATURAL JOIN subpergunta_has_alternativa NATURAL JOIN alternativa WHERE numeracao = 39 AND numero = 'F' AND opcao = '$opt39F'), (SELECT id_subpergunta FROM pergunta NATURAL JOIN subpergunta_has_pergunta NATURAL JOIN subpergunta WHERE numero = 'F' AND numeracao = 39));";
    $insert39G = "INSERT INTO resposta(cpf, resposta, id_perguntas, id_alternativa, id_subpergunta) VALUES ('$cpf', '$opt39G', (SELECT id_perguntas FROM pergunta where numeracao = 39), (SELECT id_alternativa FROM pergunta NATURAL JOIN subpergunta_has_pergunta NATURAL JOIN subpergunta NATURAL JOIN subpergunta_has_alternativa NATURAL JOIN alternativa WHERE numeracao = 39 AND numero = 'G' AND opcao = '$opt39G'), (SELECT id_subpergunta FROM pergunta NATURAL JOIN subpergunta_has_pergunta NATURAL JOIN subpergunta WHERE numero = 'G' AND numeracao = 39));";
    $insert39H = "INSERT INTO resposta(cpf, resposta, id_perguntas, id_alternativa, id_subpergunta) VALUES ('$cpf', '$opt39H', (SELECT id_perguntas FROM pergunta where numeracao = 39), (SELECT id_alternativa FROM pergunta NATURAL JOIN subpergunta_has_pergunta NATURAL JOIN subpergunta NATURAL JOIN subpergunta_has_alternativa NATURAL JOIN alternativa WHERE numeracao = 39 AND numero = 'H' AND opcao = '$opt39H'), (SELECT id_subpergunta FROM pergunta NATURAL JOIN subpergunta_has_pergunta NATURAL JOIN subpergunta WHERE numero = 'H' AND numeracao = 39));";
    $insert39I = "INSERT INTO resposta(cpf, resposta, id_perguntas, id_alternativa, id_subpergunta) VALUES ('$cpf', '$opt39I', (SELECT id_perguntas FROM pergunta where numeracao = 39), (SELECT id_alternativa FROM pergunta NATURAL JOIN subpergunta_has_pergunta NATURAL JOIN subpergunta NATURAL JOIN subpergunta_has_alternativa NATURAL JOIN alternativa WHERE numeracao = 39 AND numero = 'I' AND opcao = '$opt39I'), (SELECT id_subpergunta FROM pergunta NATURAL JOIN subpergunta_has_pergunta NATURAL JOIN subpergunta WHERE numero = 'I' AND numeracao = 39));";
    $insert40A = "INSERT INTO resposta(cpf, resposta, id_perguntas, id_alternativa, id_subpergunta) VALUES ('$cpf', '$opt40A', (SELECT id_perguntas FROM pergunta where numeracao = 40),(SELECT id_alternativa FROM pergunta NATURAL JOIN subpergunta_has_pergunta NATURAL JOIN subpergunta NATURAL JOIN subpergunta_has_alternativa NATURAL JOIN alternativa WHERE numeracao = 40 AND numero = 'A' AND opcao = '$opt40A'), (SELECT id_subpergunta FROM pergunta NATURAL JOIN subpergunta_has_pergunta NATURAL JOIN subpergunta WHERE numero = 'A' AND numeracao = 40));";
    $insert40B = "INSERT INTO resposta(cpf, resposta, id_perguntas, id_alternativa, id_subpergunta) VALUES ('$cpf', '$opt40B', (SELECT id_perguntas FROM pergunta where numeracao = 40),(SELECT id_alternativa FROM pergunta NATURAL JOIN subpergunta_has_pergunta NATURAL JOIN subpergunta NATURAL JOIN subpergunta_has_alternativa NATURAL JOIN alternativa WHERE numeracao = 40 AND numero = 'B' AND opcao = '$opt40B'), (SELECT id_subpergunta FROM pergunta NATURAL JOIN subpergunta_has_pergunta NATURAL JOIN subpergunta WHERE numero = 'B' AND numeracao = 40));";
    $insert40C = "INSERT INTO resposta(cpf, resposta, id_perguntas, id_alternativa, id_subpergunta) VALUES ('$cpf', '$opt40C', (SELECT id_perguntas FROM pergunta where numeracao = 40),(SELECT id_alternativa FROM pergunta NATURAL JOIN subpergunta_has_pergunta NATURAL JOIN subpergunta NATURAL JOIN subpergunta_has_alternativa NATURAL JOIN alternativa WHERE numeracao = 40 AND numero = 'C' AND opcao = '$opt40C'), (SELECT id_subpergunta FROM pergunta NATURAL JOIN subpergunta_has_pergunta NATURAL JOIN subpergunta WHERE numero = 'C' AND numeracao = 40));";
    $insert40D = "INSERT INTO resposta(cpf, resposta, id_perguntas, id_alternativa, id_subpergunta) VALUES ('$cpf','$opt40D', (SELECT id_perguntas FROM pergunta where numeracao = 40),(SELECT id_alternativa FROM pergunta NATURAL JOIN subpergunta_has_pergunta NATURAL JOIN subpergunta NATURAL JOIN subpergunta_has_alternativa NATURAL JOIN alternativa WHERE numeracao = 40 AND numero = 'D' AND opcao = '$opt40D'), (SELECT id_subpergunta FROM pergunta NATURAL JOIN subpergunta_has_pergunta NATURAL JOIN subpergunta WHERE numero = 'D' AND numeracao = 40));";
    $insert40E = "INSERT INTO resposta(cpf, resposta, id_perguntas, id_alternativa, id_subpergunta) VALUES ('$cpf', '$opt40E', (SELECT id_perguntas FROM pergunta where numeracao = 40),(SELECT id_alternativa FROM pergunta NATURAL JOIN subpergunta_has_pergunta NATURAL JOIN subpergunta NATURAL JOIN subpergunta_has_alternativa NATURAL JOIN alternativa WHERE numeracao = 40 AND numero = 'E' AND opcao = '$opt40E'), (SELECT id_subpergunta FROM pergunta NATURAL JOIN subpergunta_has_pergunta NATURAL JOIN subpergunta WHERE numero = 'E' AND numeracao = 40));";
    $insert40F = "INSERT INTO resposta(cpf, resposta, id_perguntas, id_alternativa, id_subpergunta) VALUES ('$cpf', '$opt40F', (SELECT id_perguntas FROM pergunta where numeracao = 40),(SELECT id_alternativa FROM pergunta NATURAL JOIN subpergunta_has_pergunta NATURAL JOIN subpergunta NATURAL JOIN subpergunta_has_alternativa NATURAL JOIN alternativa WHERE numeracao = 40 AND numero = 'F' AND opcao = '$opt40F'), (SELECT id_subpergunta FROM pergunta NATURAL JOIN subpergunta_has_pergunta NATURAL JOIN subpergunta WHERE numero = 'F' AND numeracao = 40));";   
    $insert40G = "INSERT INTO resposta(cpf, resposta, id_perguntas, id_alternativa, id_subpergunta) VALUES ('$cpf','$opt40G', (SELECT id_perguntas FROM pergunta where numeracao = 40),(SELECT id_alternativa FROM pergunta NATURAL JOIN subpergunta_has_pergunta NATURAL JOIN subpergunta NATURAL JOIN subpergunta_has_alternativa NATURAL JOIN alternativa WHERE numeracao = 40 AND numero = 'G' AND opcao = '$opt40G'), (SELECT id_subpergunta FROM pergunta NATURAL JOIN subpergunta_has_pergunta NATURAL JOIN subpergunta WHERE numero = 'G' AND numeracao = 40));";
    $insert40H = "INSERT INTO resposta(cpf, resposta, id_perguntas, id_alternativa, id_subpergunta) VALUES ('$cpf', '$opt40H', (SELECT id_perguntas FROM pergunta where numeracao = 40),(SELECT id_alternativa FROM pergunta NATURAL JOIN subpergunta_has_pergunta NATURAL JOIN subpergunta NATURAL JOIN subpergunta_has_alternativa NATURAL JOIN alternativa WHERE numeracao = 40 AND numero = 'H' AND opcao = '$opt40H'), (SELECT id_subpergunta FROM pergunta NATURAL JOIN subpergunta_has_pergunta NATURAL JOIN subpergunta WHERE numero = 'H' AND numeracao = 40));";
    $insert40I = "INSERT INTO resposta(cpf, resposta, id_perguntas, id_alternativa, id_subpergunta) VALUES ('$cpf', '$opt40I', (SELECT id_perguntas FROM pergunta where numeracao = 40),(SELECT id_alternativa FROM pergunta NATURAL JOIN subpergunta_has_pergunta NATURAL JOIN subpergunta NATURAL JOIN subpergunta_has_alternativa NATURAL JOIN alternativa WHERE numeracao = 40 AND numero = 'I' AND opcao = '$opt40I'), (SELECT id_subpergunta FROM pergunta NATURAL JOIN subpergunta_has_pergunta NATURAL JOIN subpergunta WHERE numero = 'I' AND numeracao = 40));";
    $insert40J = "INSERT INTO resposta(cpf, resposta, id_perguntas, id_alternativa, id_subpergunta) VALUES ('$cpf', '$opt40J', (SELECT id_perguntas FROM pergunta where numeracao = 40),(SELECT id_alternativa FROM pergunta NATURAL JOIN subpergunta_has_pergunta NATURAL JOIN subpergunta NATURAL JOIN subpergunta_has_alternativa NATURAL JOIN alternativa WHERE numeracao = 40 AND numero = 'J' AND opcao = '$opt40J'), (SELECT id_subpergunta FROM pergunta NATURAL JOIN subpergunta_has_pergunta NATURAL JOIN subpergunta WHERE numero = 'J' AND numeracao = 40));";
    $insert40K = "INSERT INTO resposta(cpf, resposta, id_perguntas, id_alternativa, id_subpergunta) VALUES ('$cpf', '$opt40K', (SELECT id_perguntas FROM pergunta where numeracao = 40), (SELECT id_alternativa FROM pergunta NATURAL JOIN subpergunta_has_pergunta NATURAL JOIN subpergunta NATURAL JOIN subpergunta_has_alternativa NATURAL JOIN alternativa WHERE numeracao = 40 AND numero = 'K' AND opcao = '$opt40K'), (SELECT id_subpergunta FROM pergunta NATURAL JOIN subpergunta_has_pergunta NATURAL JOIN subpergunta WHERE numero = 'K' AND numeracao = 40));";
    $insert40L = "INSERT INTO resposta(cpf, resposta, id_perguntas, id_alternativa, id_subpergunta) VALUES ('$cpf', '$opt40L', (SELECT id_perguntas FROM pergunta where numeracao = 40),(SELECT id_alternativa FROM pergunta NATURAL JOIN subpergunta_has_pergunta NATURAL JOIN subpergunta NATURAL JOIN subpergunta_has_alternativa NATURAL JOIN alternativa WHERE numeracao = 40 AND numero = 'L' AND opcao = '$opt40L'), (SELECT id_subpergunta FROM pergunta NATURAL JOIN subpergunta_has_pergunta NATURAL JOIN subpergunta WHERE numero = 'L' AND numeracao = 40));";
    $insert40M = "INSERT INTO resposta(cpf, resposta, id_perguntas, id_alternativa, id_subpergunta) VALUES ('$cpf', '$opt40M', (SELECT id_perguntas FROM pergunta where numeracao = 40),(SELECT id_alternativa FROM pergunta NATURAL JOIN subpergunta_has_pergunta NATURAL JOIN subpergunta NATURAL JOIN subpergunta_has_alternativa NATURAL JOIN alternativa WHERE numeracao = 40 AND numero = 'M' AND opcao = '$opt40M'), (SELECT id_subpergunta FROM pergunta NATURAL JOIN subpergunta_has_pergunta NATURAL JOIN subpergunta WHERE numero = 'M' AND numeracao = 40));";
    $insert40N = "INSERT INTO resposta(cpf, resposta, id_perguntas, id_alternativa, id_subpergunta) VALUES ('$cpf',  '$opt40N', (SELECT id_perguntas FROM pergunta where numeracao = 40),(SELECT id_alternativa FROM pergunta NATURAL JOIN subpergunta_has_pergunta NATURAL JOIN subpergunta NATURAL JOIN subpergunta_has_alternativa NATURAL JOIN alternativa WHERE numeracao = 40 AND numero = 'N' AND opcao = '$opt40N'), (SELECT id_subpergunta FROM pergunta NATURAL JOIN subpergunta_has_pergunta NATURAL JOIN subpergunta WHERE numero = 'N' AND numeracao = 40));";
    $insert40O = "INSERT INTO resposta(cpf, resposta, id_perguntas, id_alternativa, id_subpergunta) VALUES ('$cpf', '$opt40O', (SELECT id_perguntas FROM pergunta where numeracao = 40),(SELECT id_alternativa FROM pergunta NATURAL JOIN subpergunta_has_pergunta NATURAL JOIN subpergunta NATURAL JOIN subpergunta_has_alternativa NATURAL JOIN alternativa WHERE numeracao = 40 AND numero = 'O' AND opcao = '$opt40O'), (SELECT id_subpergunta FROM pergunta NATURAL JOIN subpergunta_has_pergunta NATURAL JOIN subpergunta WHERE numero = 'O' AND numeracao = 40));";
    $insert40P = "INSERT INTO resposta(cpf, resposta, id_perguntas, id_alternativa, id_subpergunta) VALUES ('$cpf', '$opt40P', (SELECT id_perguntas FROM pergunta where numeracao = 40),(SELECT id_alternativa FROM pergunta NATURAL JOIN subpergunta_has_pergunta NATURAL JOIN subpergunta NATURAL JOIN subpergunta_has_alternativa NATURAL JOIN alternativa WHERE numeracao = 40 AND numero = 'P' AND opcao = '$opt40P'), (SELECT id_subpergunta FROM pergunta NATURAL JOIN subpergunta_has_pergunta NATURAL JOIN subpergunta WHERE numero = 'P' AND numeracao = 40));";
    $insert40Q = "INSERT INTO resposta(cpf, resposta, id_perguntas, id_alternativa, id_subpergunta) VALUES ('$cpf', '$opt40Q', (SELECT id_perguntas FROM pergunta where numeracao = 40),(SELECT id_alternativa FROM pergunta NATURAL JOIN subpergunta_has_pergunta NATURAL JOIN subpergunta NATURAL JOIN subpergunta_has_alternativa NATURAL JOIN alternativa WHERE numeracao = 40 AND numero = 'Q' AND opcao = '$opt40Q'), (SELECT id_subpergunta FROM pergunta NATURAL JOIN subpergunta_has_pergunta NATURAL JOIN subpergunta WHERE numero = 'Q' AND numeracao = 40));";
    $insert40R = "INSERT INTO resposta(cpf, resposta, id_perguntas, id_alternativa, id_subpergunta) VALUES ('$cpf', '$opt40R', (SELECT id_perguntas FROM pergunta where numeracao = 40),(SELECT id_alternativa FROM pergunta NATURAL JOIN subpergunta_has_pergunta NATURAL JOIN subpergunta NATURAL JOIN subpergunta_has_alternativa NATURAL JOIN alternativa WHERE numeracao = 40 AND numero = 'R' AND opcao = '$opt40R'), (SELECT id_subpergunta FROM pergunta NATURAL JOIN subpergunta_has_pergunta NATURAL JOIN subpergunta WHERE numero = 'R' AND numeracao = 40));"; 

    $resultado38A = mysqli_query($conn, $insert38A);
    $resultado38B = mysqli_query($conn, $insert38B);
    $resultado38C = mysqli_query($conn, $insert38C);
    $resultado38D = mysqli_query($conn, $insert38D);
    $resultado38E = mysqli_query($conn, $insert38E);
    $resultado38F = mysqli_query($conn, $insert38F);
    $resultado38G = mysqli_query($conn, $insert38G);
    $resultado39A = mysqli_query($conn, $insert39A);
    $resultado39B = mysqli_query($conn, $insert39B);
    $resultado39C = mysqli_query($conn, $insert39C);
    $resultado39D = mysqli_query($conn, $insert39D);
    $resultado39E = mysqli_query($conn, $insert39E);
    $resultado39F = mysqli_query($conn, $insert39F);
    $resultado39G = mysqli_query($conn, $insert39G);
    $resultado39H = mysqli_query($conn, $insert39H);
    $resultado39I = mysqli_query($conn, $insert39I);
    $resultado40A = mysqli_query($conn, $insert40A);
    $resultado40B = mysqli_query($conn, $insert40B);
    $resultado40C = mysqli_query($conn, $insert40C);
    $resultado40D = mysqli_query($conn, $insert40D);
    $resultado40E = mysqli_query($conn, $insert40E);
    $resultado40F = mysqli_query($conn, $insert40F);
    $resultado40G = mysqli_query($conn, $insert40G);
    $resultado40H = mysqli_query($conn, $insert40H);
    $resultado40I = mysqli_query($conn, $insert40I);
    $resultado40J = mysqli_query($conn, $insert40J);
    $resultado40K = mysqli_query($conn, $insert40K);
    $resultado40L = mysqli_query($conn, $insert40L);
    $resultado40M = mysqli_query($conn, $insert40M);
    $resultado40N = mysqli_query($conn, $insert40N);
    $resultado40O = mysqli_query($conn, $insert40O);
    $resultado40P = mysqli_query($conn, $insert40P);
    $resultado40Q = mysqli_query($conn, $insert40Q);
    $resultado40R = mysqli_query($conn, $insert40R);

    header ("Location: tecnologiatec.php")
?>