<?php
    include 'acessobancosup.php';
    include 'vsup.php';

    $teste_lazersup = "SELECT * 
                       FROM resposta
	                   WHERE CPF = '$cpf' AND id_perguntas = (SELECT id_perguntas 
                                                                       FROM pergunta 
                                                                       WHERE numeracao = 53)";
	          
	$verifica_lazersup = mysqli_query($conn, $teste_lazersup);

    if (mysqli_num_rows($verifica_lazersup) >= 1){
        $delete53 = "DELETE FROM resposta WHERE cpf = '$cpf' AND id_perguntas = (SELECT id_perguntas FROM pergunta WHERE numeracao = 53);";
        $delete54 = "DELETE FROM resposta WHERE cpf = '$cpf' AND id_perguntas = (SELECT id_perguntas FROM pergunta WHERE numeracao = 54);";
        $delete55 = "DELETE FROM resposta WHERE cpf = '$cpf' AND id_perguntas = (SELECT id_perguntas FROM pergunta WHERE numeracao = 55);";
        $delete56 = "DELETE FROM resposta WHERE cpf = '$cpf' AND id_perguntas = (SELECT id_perguntas FROM pergunta WHERE numeracao = 56);";
        $delete57 = "DELETE FROM resposta WHERE cpf = '$cpf' AND id_perguntas = (SELECT id_perguntas FROM pergunta WHERE numeracao = 57);"; 
        
        $d53 = mysqli_query($conn, $delete53);
        $d54 = mysqli_query($conn, $delete54);
        $d55 = mysqli_query($conn, $delete55);
        $d56 = mysqli_query($conn, $delete56);
        $d67 = mysqli_query($conn, $delete57);
    }

    $opt53 = filter_input (INPUT_POST, 'perg53', FILTER_SANITIZE_STRING);
    $opt54 = filter_input (INPUT_POST, 'perg54', FILTER_SANITIZE_STRING);
    $opt55 = filter_input (INPUT_POST, 'perg55', FILTER_SANITIZE_STRING);
    $opt56 = filter_input (INPUT_POST, 'perg56', FILTER_SANITIZE_STRING);

    $insert53 = "INSERT INTO resposta(cpf, resposta, id_perguntas, id_alternativa) VALUES ('$cpf', '$opt53', (SELECT id_perguntas FROM pergunta where numeracao = 53), (SELECT id_alternativa FROM pergunta NATURAL JOIN pergunta_has_alternativa NATURAL JOIN alternativa where opcao = '$opt53' AND numeracao = 53));";
    $insert54 = "INSERT INTO resposta(cpf, resposta, id_perguntas, id_alternativa) VALUES ('$cpf', '$opt54', (SELECT id_perguntas FROM pergunta where numeracao = 54), (SELECT id_alternativa FROM pergunta NATURAL JOIN pergunta_has_alternativa NATURAL JOIN alternativa where opcao = '$opt54' AND numeracao = 54));";
    $insert55 = "INSERT INTO resposta(cpf, resposta, id_perguntas, id_alternativa) VALUES ('$cpf', '$opt55', (SELECT id_perguntas FROM pergunta where numeracao = 55), (SELECT id_alternativa FROM pergunta NATURAL JOIN pergunta_has_alternativa NATURAL JOIN alternativa where opcao = '$opt55' AND numeracao = 55));";
    $insert56 = "INSERT INTO resposta(cpf, resposta, id_perguntas, id_alternativa) VALUES ('$cpf', '$opt56', (SELECT id_perguntas FROM pergunta where numeracao = 56), (SELECT id_alternativa FROM pergunta NATURAL JOIN pergunta_has_alternativa NATURAL JOIN alternativa where opcao = '$opt56' AND numeracao = 56));";

    $resultado53 = mysqli_query($conn, $insert53);
    $resultado54 = mysqli_query($conn, $insert54);
    $resultado55 = mysqli_query($conn, $insert55);
    $resultado56 = mysqli_query($conn, $insert56);

    if ($opt56 == "A"){
        $opt57A = filter_input (INPUT_POST, '57A', FILTER_SANITIZE_STRING);
        $opt57B = filter_input (INPUT_POST, '57B', FILTER_SANITIZE_STRING);
        $opt57C = filter_input (INPUT_POST, '57C', FILTER_SANITIZE_STRING);
        $opt57D = filter_input (INPUT_POST, '57D', FILTER_SANITIZE_STRING);
        $opt57E = filter_input (INPUT_POST, '57E', FILTER_SANITIZE_STRING);
        $opt57F = filter_input (INPUT_POST, '57F', FILTER_SANITIZE_STRING);
        
        if ($opt57A == "on"){ 
            $insert57A = "INSERT INTO resposta(cpf, resposta, id_perguntas, id_alternativa, id_subpergunta) VALUES ('$cpf', 'A', (SELECT id_perguntas FROM pergunta where numeracao = 57), (SELECT id_alternativa FROM pergunta NATURAL JOIN subpergunta_has_pergunta NATURAL JOIN subpergunta NATURAL JOIN subpergunta_has_alternativa NATURAL JOIN alternativa WHERE numeracao = 57 AND numero = 'A' AND opcao = 'A'), (SELECT id_subpergunta FROM pergunta NATURAL JOIN subpergunta_has_pergunta NATURAL JOIN subpergunta WHERE numero = 'A' AND numeracao = 57));";            
            $resultado57A = mysqli_query($conn, $insert57A);
            
            $delete57A = "DELETE FROM resposta WHERE cpf = '$cpf' AND id_perguntas = (SELECT id_perguntas FROM pergunta WHERE numeracao = 57) AND resposta = 'B' AND id_subpergunta = (SELECT id_subpergunta FROM pergunta NATURAL JOIN subpergunta_has_pergunta NATURAL JOIN subpergunta WHERE numero = 'A' AND numeracao = 57);";  
            $d57A = mysqli_query($conn, $delete57A);
        }else{
            $insert57A = "INSERT INTO resposta(cpf, resposta, id_perguntas, id_alternativa, id_subpergunta) VALUES ('$cpf', 'B', (SELECT id_perguntas FROM pergunta where numeracao = 57), (SELECT id_alternativa FROM pergunta NATURAL JOIN subpergunta_has_pergunta NATURAL JOIN subpergunta NATURAL JOIN subpergunta_has_alternativa NATURAL JOIN alternativa WHERE numeracao = 57 AND numero = 'A' AND opcao = 'B'), (SELECT id_subpergunta FROM pergunta NATURAL JOIN subpergunta_has_pergunta NATURAL JOIN subpergunta WHERE numero = 'A' AND numeracao = 57));";                
            $resultado57A = mysqli_query($conn, $insert57A);
            
            $delete57A = "DELETE FROM resposta WHERE cpf = '$cpf' AND id_perguntas = (SELECT id_perguntas FROM pergunta WHERE numeracao = 57) AND resposta = 'A' AND id_subpergunta = (SELECT id_subpergunta FROM pergunta NATURAL JOIN subpergunta_has_pergunta NATURAL JOIN subpergunta WHERE numero = 'A' AND numeracao = 57);"; 
            $d57A = mysqli_query($conn, $delete57A);
        }
        
        if ($opt57B == "on"){ 
            $insert57B = "INSERT INTO resposta(cpf, resposta, id_perguntas, id_alternativa, id_subpergunta) VALUES ('$cpf', 'A', (SELECT id_perguntas FROM pergunta where numeracao = 57), (SELECT id_alternativa FROM pergunta NATURAL JOIN subpergunta_has_pergunta NATURAL JOIN subpergunta NATURAL JOIN subpergunta_has_alternativa NATURAL JOIN alternativa WHERE numeracao = 57 AND numero = 'B' AND opcao = 'A'), (SELECT id_subpergunta FROM pergunta NATURAL JOIN subpergunta_has_pergunta NATURAL JOIN subpergunta WHERE numero = 'B' AND numeracao = 57));";            
            $resultado57B = mysqli_query($conn, $insert57B);
            
            $delete57B = "DELETE FROM resposta WHERE cpf = '$cpf' AND id_perguntas = (SELECT id_perguntas FROM pergunta WHERE numeracao = 57) AND resposta = 'B' AND id_subpergunta = (SELECT id_subpergunta FROM pergunta NATURAL JOIN subpergunta_has_pergunta NATURAL JOIN subpergunta WHERE numero = 'B' AND numeracao = 57);";  
            $d57B = mysqli_query($conn, $delete57B);
        }else{
            $insert57B = "INSERT INTO resposta(cpf, resposta, id_perguntas, id_alternativa, id_subpergunta) VALUES ('$cpf', 'B', (SELECT id_perguntas FROM pergunta where numeracao = 57), (SELECT id_alternativa FROM pergunta NATURAL JOIN subpergunta_has_pergunta NATURAL JOIN subpergunta NATURAL JOIN subpergunta_has_alternativa NATURAL JOIN alternativa WHERE numeracao = 57 AND numero = 'B' AND opcao = 'B'), (SELECT id_subpergunta FROM pergunta NATURAL JOIN subpergunta_has_pergunta NATURAL JOIN subpergunta WHERE numero = 'B' AND numeracao = 57));";                
            $resultado57B = mysqli_query($conn, $insert57B);
            
            $delete57B = "DELETE FROM resposta WHERE cpf = '$cpf' AND id_perguntas = (SELECT id_perguntas FROM pergunta WHERE numeracao = 57) AND resposta = 'A' AND id_subpergunta = (SELECT id_subpergunta FROM pergunta NATURAL JOIN subpergunta_has_pergunta NATURAL JOIN subpergunta WHERE numero = 'B' AND numeracao = 57);"; 
            $d57B = mysqli_query($conn, $delete57B);
        }
        
        if ($opt57C == "on"){ 
            $insert57C = "INSERT INTO resposta(cpf, resposta, id_perguntas, id_alternativa, id_subpergunta) VALUES ('$cpf', 'A', (SELECT id_perguntas FROM pergunta where numeracao = 57), (SELECT id_alternativa FROM pergunta NATURAL JOIN subpergunta_has_pergunta NATURAL JOIN subpergunta NATURAL JOIN subpergunta_has_alternativa NATURAL JOIN alternativa WHERE numeracao = 57 AND numero = 'C' AND opcao = 'A'), (SELECT id_subpergunta FROM pergunta NATURAL JOIN subpergunta_has_pergunta NATURAL JOIN subpergunta WHERE numero = 'C' AND numeracao = 57));";            
            $resultado57C = mysqli_query($conn, $insert57C);
            
            $delete57C = "DELETE FROM resposta WHERE cpf = '$cpf' AND id_perguntas = (SELECT id_perguntas FROM pergunta WHERE numeracao = 57) AND resposta = 'B' AND id_subpergunta = (SELECT id_subpergunta FROM pergunta NATURAL JOIN subpergunta_has_pergunta NATURAL JOIN subpergunta WHERE numero = 'C' AND numeracao = 57);";  
            $d57C = mysqli_query($conn, $delete57C);
        }else{
            $insert57C = "INSERT INTO resposta(cpf, resposta, id_perguntas, id_alternativa, id_subpergunta) VALUES ('$cpf', 'B', (SELECT id_perguntas FROM pergunta where numeracao = 57), (SELECT id_alternativa FROM pergunta NATURAL JOIN subpergunta_has_pergunta NATURAL JOIN subpergunta NATURAL JOIN subpergunta_has_alternativa NATURAL JOIN alternativa WHERE numeracao = 57 AND numero = 'C' AND opcao = 'B'), (SELECT id_subpergunta FROM pergunta NATURAL JOIN subpergunta_has_pergunta NATURAL JOIN subpergunta WHERE numero = 'C' AND numeracao = 57));";                
            $resultado57C = mysqli_query($conn, $insert57C);
            
            $delete57C = "DELETE FROM resposta WHERE cpf = '$cpf' AND id_perguntas = (SELECT id_perguntas FROM pergunta WHERE numeracao = 57) AND resposta = 'A' AND id_subpergunta = (SELECT id_subpergunta FROM pergunta NATURAL JOIN subpergunta_has_pergunta NATURAL JOIN subpergunta WHERE numero = 'C' AND numeracao = 57);"; 
            $d57C = mysqli_query($conn, $delete57C);
        }
        
        if ($opt57D == "on"){ 
            $insert57D = "INSERT INTO resposta(cpf, resposta, id_perguntas, id_alternativa, id_subpergunta) VALUES ('$cpf', 'A', (SELECT id_perguntas FROM pergunta where numeracao = 57), (SELECT id_alternativa FROM pergunta NATURAL JOIN subpergunta_has_pergunta NATURAL JOIN subpergunta NATURAL JOIN subpergunta_has_alternativa NATURAL JOIN alternativa WHERE numeracao = 57 AND numero = 'D' AND opcao = 'A'), (SELECT id_subpergunta FROM pergunta NATURAL JOIN subpergunta_has_pergunta NATURAL JOIN subpergunta WHERE numero = 'D' AND numeracao = 57));";            
            $resultado57D = mysqli_query($conn, $insert57D);
            
            $delete57D = "DELETE FROM resposta WHERE cpf = '$cpf' AND id_perguntas = (SELECT id_perguntas FROM pergunta WHERE numeracao = 57) AND resposta = 'B' AND id_subpergunta = (SELECT id_subpergunta FROM pergunta NATURAL JOIN subpergunta_has_pergunta NATURAL JOIN subpergunta WHERE numero = 'D' AND numeracao = 57);";  
            $d57D = mysqli_query($conn, $delete57D);
        }else{
            $insert57D = "INSERT INTO resposta(cpf, resposta, id_perguntas, id_alternativa, id_subpergunta) VALUES ('$cpf', 'B', (SELECT id_perguntas FROM pergunta where numeracao = 57), (SELECT id_alternativa FROM pergunta NATURAL JOIN subpergunta_has_pergunta NATURAL JOIN subpergunta NATURAL JOIN subpergunta_has_alternativa NATURAL JOIN alternativa WHERE numeracao = 57 AND numero = 'D' AND opcao = 'B'), (SELECT id_subpergunta FROM pergunta NATURAL JOIN subpergunta_has_pergunta NATURAL JOIN subpergunta WHERE numero = 'D' AND numeracao = 57));";                
            $resultado57D = mysqli_query($conn, $insert57D);
            
            $delete57D = "DELETE FROM resposta WHERE cpf = '$cpf' AND id_perguntas = (SELECT id_perguntas FROM pergunta WHERE numeracao = 57) AND resposta = 'A' AND id_subpergunta = (SELECT id_subpergunta FROM pergunta NATURAL JOIN subpergunta_has_pergunta NATURAL JOIN subpergunta WHERE numero = 'D' AND numeracao = 57);"; 
            $d57D = mysqli_query($conn, $delete57D);
        }
        
        if ($opt57E == "on"){ 
            $insert57E = "INSERT INTO resposta(cpf, resposta, id_perguntas, id_alternativa, id_subpergunta) VALUES ('$cpf', 'A', (SELECT id_perguntas FROM pergunta where numeracao = 57), (SELECT id_alternativa FROM pergunta NATURAL JOIN subpergunta_has_pergunta NATURAL JOIN subpergunta NATURAL JOIN subpergunta_has_alternativa NATURAL JOIN alternativa WHERE numeracao = 57 AND numero = 'E' AND opcao = 'A'), (SELECT id_subpergunta FROM pergunta NATURAL JOIN subpergunta_has_pergunta NATURAL JOIN subpergunta WHERE numero = 'E' AND numeracao = 57));";            
            $resultado57E = mysqli_query($conn, $insert57E);
            
            $delete57E = "DELETE FROM resposta WHERE cpf = '$cpf' AND id_perguntas = (SELECT id_perguntas FROM pergunta WHERE numeracao = 57) AND resposta = 'B' AND id_subpergunta = (SELECT id_subpergunta FROM pergunta NATURAL JOIN subpergunta_has_pergunta NATURAL JOIN subpergunta WHERE numero = 'E' AND numeracao = 57);";  
            $d57E = mysqli_query($conn, $delete57E);
        }else{
            $insert57E = "INSERT INTO resposta(cpf, resposta, id_perguntas, id_alternativa, id_subpergunta) VALUES ('$cpf', 'B', (SELECT id_perguntas FROM pergunta where numeracao = 57), (SELECT id_alternativa FROM pergunta NATURAL JOIN subpergunta_has_pergunta NATURAL JOIN subpergunta NATURAL JOIN subpergunta_has_alternativa NATURAL JOIN alternativa WHERE numeracao = 57 AND numero = 'E' AND opcao = 'B'), (SELECT id_subpergunta FROM pergunta NATURAL JOIN subpergunta_has_pergunta NATURAL JOIN subpergunta WHERE numero = 'E' AND numeracao = 57));";                
            $resultado57E = mysqli_query($conn, $insert57E);
            
            $delete57E = "DELETE FROM resposta WHERE cpf = '$cpf' AND id_perguntas = (SELECT id_perguntas FROM pergunta WHERE numeracao = 57) AND resposta = 'A' AND id_subpergunta = (SELECT id_subpergunta FROM pergunta NATURAL JOIN subpergunta_has_pergunta NATURAL JOIN subpergunta WHERE numero = 'E' AND numeracao = 57);"; 
            $d57E = mysqli_query($conn, $delete57E);
        }
        
        if ($opt57F == "on"){ 
            $insert57F = "INSERT INTO resposta(cpf, resposta, id_perguntas, id_alternativa, id_subpergunta) VALUES ('$cpf', 'A', (SELECT id_perguntas FROM pergunta where numeracao = 57), (SELECT id_alternativa FROM pergunta NATURAL JOIN subpergunta_has_pergunta NATURAL JOIN subpergunta NATURAL JOIN subpergunta_has_alternativa NATURAL JOIN alternativa WHERE numeracao = 57 AND numero = 'F' AND opcao = 'A'), (SELECT id_subpergunta FROM pergunta NATURAL JOIN subpergunta_has_pergunta NATURAL JOIN subpergunta WHERE numero = 'F' AND numeracao = 57));";            
            $resultado57F = mysqli_query($conn, $insert57F);
            
            $delete57F = "DELETE FROM resposta WHERE cpf = '$cpf' AND id_perguntas = (SELECT id_perguntas FROM pergunta WHERE numeracao = 57) AND resposta = 'B' AND id_subpergunta = (SELECT id_subpergunta FROM pergunta NATURAL JOIN subpergunta_has_pergunta NATURAL JOIN subpergunta WHERE numero = 'F' AND numeracao = 57);";  
            $d57F = mysqli_query($conn, $delete57F);
        }else{
            $insert57F = "INSERT INTO resposta(cpf, resposta, id_perguntas, id_alternativa, id_subpergunta) VALUES ('$cpf', 'B', (SELECT id_perguntas FROM pergunta where numeracao = 57), (SELECT id_alternativa FROM pergunta NATURAL JOIN subpergunta_has_pergunta NATURAL JOIN subpergunta NATURAL JOIN subpergunta_has_alternativa NATURAL JOIN alternativa WHERE numeracao = 57 AND numero = 'F' AND opcao = 'B'), (SELECT id_subpergunta FROM pergunta NATURAL JOIN subpergunta_has_pergunta NATURAL JOIN subpergunta WHERE numero = 'F' AND numeracao = 57));";                
            $resultado57F = mysqli_query($conn, $insert57F);
            
            $delete57F = "DELETE FROM resposta WHERE cpf = '$cpf' AND id_perguntas = (SELECT id_perguntas FROM pergunta WHERE numeracao = 57) AND resposta = 'A' AND id_subpergunta = (SELECT id_subpergunta FROM pergunta NATURAL JOIN subpergunta_has_pergunta NATURAL JOIN subpergunta WHERE numero = 'F' AND numeracao = 57);"; 
            $d57F = mysqli_query($conn, $delete57F);
        }
        
    }else{
        $delete57 = "DELETE FROM resposta WHERE cpf = '$cpf' AND id_perguntas = (SELECT id_perguntas FROM pergunta WHERE numeracao = 57);"; 
        $d57 = mysqli_query($conn, $delete57);
    }

    mysqli_close($conn);

    header ("Location: satisfacaosup.php")
?>