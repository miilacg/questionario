<?php
    include '../acessobancotec.php';
    include 'vTecnico.php';

    $teste_lazertec = "SELECT * 
                       FROM resposta
	                   WHERE CPF = '$cpf' AND id_perguntas = (SELECT id_perguntas 
                                                                       FROM pergunta 
                                                                       WHERE numeracao = 44)";
	          
	$verifica_lazertec = mysqli_query($conn, $teste_lazertec);

    if (mysqli_num_rows($verifica_lazertec) >= 1){
        $delete44 = "DELETE FROM resposta WHERE cpf = '$cpf' AND id_perguntas = (SELECT id_perguntas FROM pergunta WHERE numeracao = 44);";
        $delete45 = "DELETE FROM resposta WHERE cpf = '$cpf' AND id_perguntas = (SELECT id_perguntas FROM pergunta WHERE numeracao = 45);";
        $delete46 = "DELETE FROM resposta WHERE cpf = '$cpf' AND id_perguntas = (SELECT id_perguntas FROM pergunta WHERE numeracao = 46);";
        $delete47 = "DELETE FROM resposta WHERE cpf = '$cpf' AND id_perguntas = (SELECT id_perguntas FROM pergunta WHERE numeracao = 47);";
        $delete48 = "DELETE FROM resposta WHERE cpf = '$cpf' AND id_perguntas = (SELECT id_perguntas FROM pergunta WHERE numeracao = 48);"; 
        
        $d44 = mysqli_query($conn, $delete44);
        $d45 = mysqli_query($conn, $delete45);
        $d46 = mysqli_query($conn, $delete46);
        $d47 = mysqli_query($conn, $delete47);
        $d48 = mysqli_query($conn, $delete48);
    }

    $opt44 = filter_input (INPUT_POST, 'perg44', FILTER_SANITIZE_STRING);
    $opt45 = filter_input (INPUT_POST, 'perg45', FILTER_SANITIZE_STRING);
    $opt46 = filter_input (INPUT_POST, 'perg46', FILTER_SANITIZE_STRING);
    $opt47 = filter_input (INPUT_POST, 'perg47', FILTER_SANITIZE_STRING);

    $insert44 = "INSERT INTO resposta(cpf, resposta, id_perguntas, id_alternativa) VALUES ('$cpf', '$opt44', (SELECT id_perguntas FROM pergunta where numeracao = 44), (SELECT id_alternativa FROM pergunta NATURAL JOIN pergunta_has_alternativa NATURAL JOIN alternativa where opcao = '$opt44' AND numeracao = 44));";
    $insert45 = "INSERT INTO resposta(cpf, resposta, id_perguntas, id_alternativa) VALUES ('$cpf', '$opt45', (SELECT id_perguntas FROM pergunta where numeracao = 45), (SELECT id_alternativa FROM pergunta NATURAL JOIN pergunta_has_alternativa NATURAL JOIN alternativa where opcao = '$opt45' AND numeracao = 45));";
    $insert46 = "INSERT INTO resposta(cpf, resposta, id_perguntas, id_alternativa) VALUES ('$cpf', '$opt46', (SELECT id_perguntas FROM pergunta where numeracao = 46), (SELECT id_alternativa FROM pergunta NATURAL JOIN pergunta_has_alternativa NATURAL JOIN alternativa where opcao = '$opt46' AND numeracao = 46));";
    $insert47 = "INSERT INTO resposta(cpf, resposta, id_perguntas, id_alternativa) VALUES ('$cpf', '$opt47', (SELECT id_perguntas FROM pergunta where numeracao = 47), (SELECT id_alternativa FROM pergunta NATURAL JOIN pergunta_has_alternativa NATURAL JOIN alternativa where opcao = '$opt47' AND numeracao = 47));";

    $resultado44 = mysqli_query($conn, $insert44);
    $resultado45 = mysqli_query($conn, $insert45);
    $resultado46 = mysqli_query($conn, $insert46);
    $resultado47 = mysqli_query($conn, $insert47);

    if ($opt47 == "A"){
        $opt48A = filter_input (INPUT_POST, '48A', FILTER_SANITIZE_STRING);
        $opt48B = filter_input (INPUT_POST, '48B', FILTER_SANITIZE_STRING);
        $opt48C = filter_input (INPUT_POST, '48C', FILTER_SANITIZE_STRING);
        $opt48D = filter_input (INPUT_POST, '48D', FILTER_SANITIZE_STRING);
        $opt48E = filter_input (INPUT_POST, '48E', FILTER_SANITIZE_STRING);
        $opt48F = filter_input (INPUT_POST, '48F', FILTER_SANITIZE_STRING);
        
        if ($opt48A == "on"){ 
            $insert48A = "INSERT INTO resposta(cpf, resposta, id_perguntas, id_alternativa, id_subpergunta) VALUES ('$cpf', 'A', (SELECT id_perguntas FROM pergunta where numeracao = 48), (SELECT id_alternativa FROM pergunta NATURAL JOIN subpergunta_has_pergunta NATURAL JOIN subpergunta NATURAL JOIN subpergunta_has_alternativa NATURAL JOIN alternativa WHERE numeracao = 48 AND numero = 'A' AND opcao = 'A'), (SELECT id_subpergunta FROM pergunta NATURAL JOIN subpergunta_has_pergunta NATURAL JOIN subpergunta WHERE numero = 'A' AND numeracao = 48));";            
            $resultado48A = mysqli_query($conn, $insert48A);
            
            $delete48A = "DELETE FROM resposta WHERE cpf = '$cpf' AND id_perguntas = (SELECT id_perguntas FROM pergunta WHERE numeracao = 48) AND resposta = 'B' AND id_subpergunta = (SELECT id_subpergunta FROM pergunta NATURAL JOIN subpergunta_has_pergunta NATURAL JOIN subpergunta WHERE numero = 'A' AND numeracao = 48);";  
            $d48A = mysqli_query($conn, $delete48A);
        }else{
            $insert48A = "INSERT INTO resposta(cpf, resposta, id_perguntas, id_alternativa, id_subpergunta) VALUES ('$cpf', 'B', (SELECT id_perguntas FROM pergunta where numeracao = 48), (SELECT id_alternativa FROM pergunta NATURAL JOIN subpergunta_has_pergunta NATURAL JOIN subpergunta NATURAL JOIN subpergunta_has_alternativa NATURAL JOIN alternativa WHERE numeracao = 48 AND numero = 'A' AND opcao = 'B'), (SELECT id_subpergunta FROM pergunta NATURAL JOIN subpergunta_has_pergunta NATURAL JOIN subpergunta WHERE numero = 'A' AND numeracao = 48));";                
            $resultado48A = mysqli_query($conn, $insert48A);
            
            $delete48A = "DELETE FROM resposta WHERE cpf = '$cpf' AND id_perguntas = (SELECT id_perguntas FROM pergunta WHERE numeracao = 48) AND resposta = 'A' AND id_subpergunta = (SELECT id_subpergunta FROM pergunta NATURAL JOIN subpergunta_has_pergunta NATURAL JOIN subpergunta WHERE numero = 'A' AND numeracao = 48);"; 
            $d48A = mysqli_query($conn, $delete48A);
        }
        
        if ($opt48B == "on"){ 
            $insert48B = "INSERT INTO resposta(cpf, resposta, id_perguntas, id_alternativa, id_subpergunta) VALUES ('$cpf', 'A', (SELECT id_perguntas FROM pergunta where numeracao = 48), (SELECT id_alternativa FROM pergunta NATURAL JOIN subpergunta_has_pergunta NATURAL JOIN subpergunta NATURAL JOIN subpergunta_has_alternativa NATURAL JOIN alternativa WHERE numeracao = 48 AND numero = 'B' AND opcao = 'A'), (SELECT id_subpergunta FROM pergunta NATURAL JOIN subpergunta_has_pergunta NATURAL JOIN subpergunta WHERE numero = 'B' AND numeracao = 48));";            
            $resultado48B = mysqli_query($conn, $insert48B);
            
            $delete48B = "DELETE FROM resposta WHERE cpf = '$cpf' AND id_perguntas = (SELECT id_perguntas FROM pergunta WHERE numeracao = 48) AND resposta = 'B' AND id_subpergunta = (SELECT id_subpergunta FROM pergunta NATURAL JOIN subpergunta_has_pergunta NATURAL JOIN subpergunta WHERE numero = 'B' AND numeracao = 48);";  
            $d48B = mysqli_query($conn, $delete48B);
        }else{
            $insert48B = "INSERT INTO resposta(cpf, resposta, id_perguntas, id_alternativa, id_subpergunta) VALUES ('$cpf', 'B', (SELECT id_perguntas FROM pergunta where numeracao = 48), (SELECT id_alternativa FROM pergunta NATURAL JOIN subpergunta_has_pergunta NATURAL JOIN subpergunta NATURAL JOIN subpergunta_has_alternativa NATURAL JOIN alternativa WHERE numeracao = 48 AND numero = 'B' AND opcao = 'B'), (SELECT id_subpergunta FROM pergunta NATURAL JOIN subpergunta_has_pergunta NATURAL JOIN subpergunta WHERE numero = 'B' AND numeracao = 48));";                
            $resultado48B = mysqli_query($conn, $insert48B);
            
            $delete48B = "DELETE FROM resposta WHERE cpf = '$cpf' AND id_perguntas = (SELECT id_perguntas FROM pergunta WHERE numeracao = 48) AND resposta = 'A' AND id_subpergunta = (SELECT id_subpergunta FROM pergunta NATURAL JOIN subpergunta_has_pergunta NATURAL JOIN subpergunta WHERE numero = 'B' AND numeracao = 48);"; 
            $d48B = mysqli_query($conn, $delete48B);
        }
        
        if ($opt48C == "on"){ 
            $insert48C = "INSERT INTO resposta(cpf, resposta, id_perguntas, id_alternativa, id_subpergunta) VALUES ('$cpf', 'A', (SELECT id_perguntas FROM pergunta where numeracao = 48), (SELECT id_alternativa FROM pergunta NATURAL JOIN subpergunta_has_pergunta NATURAL JOIN subpergunta NATURAL JOIN subpergunta_has_alternativa NATURAL JOIN alternativa WHERE numeracao = 48 AND numero = 'C' AND opcao = 'A'), (SELECT id_subpergunta FROM pergunta NATURAL JOIN subpergunta_has_pergunta NATURAL JOIN subpergunta WHERE numero = 'C' AND numeracao = 48));";            
            $resultado48C = mysqli_query($conn, $insert48C);
            
            $delete48C = "DELETE FROM resposta WHERE cpf = '$cpf' AND id_perguntas = (SELECT id_perguntas FROM pergunta WHERE numeracao = 48) AND resposta = 'B' AND id_subpergunta = (SELECT id_subpergunta FROM pergunta NATURAL JOIN subpergunta_has_pergunta NATURAL JOIN subpergunta WHERE numero = 'C' AND numeracao = 48);";  
            $d48C = mysqli_query($conn, $delete48C);
        }else{
            $insert48C = "INSERT INTO resposta(cpf, resposta, id_perguntas, id_alternativa, id_subpergunta) VALUES ('$cpf', 'B', (SELECT id_perguntas FROM pergunta where numeracao = 48), (SELECT id_alternativa FROM pergunta NATURAL JOIN subpergunta_has_pergunta NATURAL JOIN subpergunta NATURAL JOIN subpergunta_has_alternativa NATURAL JOIN alternativa WHERE numeracao = 48 AND numero = 'C' AND opcao = 'B'), (SELECT id_subpergunta FROM pergunta NATURAL JOIN subpergunta_has_pergunta NATURAL JOIN subpergunta WHERE numero = 'C' AND numeracao = 48));";                
            $resultado48C = mysqli_query($conn, $insert48C);
            
            $delete48C = "DELETE FROM resposta WHERE cpf = '$cpf' AND id_perguntas = (SELECT id_perguntas FROM pergunta WHERE numeracao = 48) AND resposta = 'A' AND id_subpergunta = (SELECT id_subpergunta FROM pergunta NATURAL JOIN subpergunta_has_pergunta NATURAL JOIN subpergunta WHERE numero = 'C' AND numeracao = 48);"; 
            $d48C = mysqli_query($conn, $delete48C);
        }
        
        if ($opt48D == "on"){ 
            $insert48D = "INSERT INTO resposta(cpf, resposta, id_perguntas, id_alternativa, id_subpergunta) VALUES ('$cpf', 'A', (SELECT id_perguntas FROM pergunta where numeracao = 48), (SELECT id_alternativa FROM pergunta NATURAL JOIN subpergunta_has_pergunta NATURAL JOIN subpergunta NATURAL JOIN subpergunta_has_alternativa NATURAL JOIN alternativa WHERE numeracao = 48 AND numero = 'D' AND opcao = 'A'), (SELECT id_subpergunta FROM pergunta NATURAL JOIN subpergunta_has_pergunta NATURAL JOIN subpergunta WHERE numero = 'D' AND numeracao = 48));";            
            $resultado48D = mysqli_query($conn, $insert48D);
            
            $delete48D = "DELETE FROM resposta WHERE cpf = '$cpf' AND id_perguntas = (SELECT id_perguntas FROM pergunta WHERE numeracao = 48) AND resposta = 'B' AND id_subpergunta = (SELECT id_subpergunta FROM pergunta NATURAL JOIN subpergunta_has_pergunta NATURAL JOIN subpergunta WHERE numero = 'D' AND numeracao = 48);";  
            $d48D = mysqli_query($conn, $delete48D);
        }else{
            $insert48D = "INSERT INTO resposta(cpf, resposta, id_perguntas, id_alternativa, id_subpergunta) VALUES ('$cpf', 'B', (SELECT id_perguntas FROM pergunta where numeracao = 48), (SELECT id_alternativa FROM pergunta NATURAL JOIN subpergunta_has_pergunta NATURAL JOIN subpergunta NATURAL JOIN subpergunta_has_alternativa NATURAL JOIN alternativa WHERE numeracao = 48 AND numero = 'D' AND opcao = 'B'), (SELECT id_subpergunta FROM pergunta NATURAL JOIN subpergunta_has_pergunta NATURAL JOIN subpergunta WHERE numero = 'D' AND numeracao = 48));";                
            $resultado48D = mysqli_query($conn, $insert48D);
            
            $delete48D = "DELETE FROM resposta WHERE cpf = '$cpf' AND id_perguntas = (SELECT id_perguntas FROM pergunta WHERE numeracao = 48) AND resposta = 'A' AND id_subpergunta = (SELECT id_subpergunta FROM pergunta NATURAL JOIN subpergunta_has_pergunta NATURAL JOIN subpergunta WHERE numero = 'D' AND numeracao = 48);"; 
            $d48D = mysqli_query($conn, $delete48D);
        }
        
        if ($opt48E == "on"){ 
            $insert48E = "INSERT INTO resposta(cpf, resposta, id_perguntas, id_alternativa, id_subpergunta) VALUES ('$cpf', 'A', (SELECT id_perguntas FROM pergunta where numeracao = 48), (SELECT id_alternativa FROM pergunta NATURAL JOIN subpergunta_has_pergunta NATURAL JOIN subpergunta NATURAL JOIN subpergunta_has_alternativa NATURAL JOIN alternativa WHERE numeracao = 48 AND numero = 'E' AND opcao = 'A'), (SELECT id_subpergunta FROM pergunta NATURAL JOIN subpergunta_has_pergunta NATURAL JOIN subpergunta WHERE numero = 'E' AND numeracao = 48));";            
            $resultado48E = mysqli_query($conn, $insert48E);
            
            $delete48E = "DELETE FROM resposta WHERE cpf = '$cpf' AND id_perguntas = (SELECT id_perguntas FROM pergunta WHERE numeracao = 48) AND resposta = 'B' AND id_subpergunta = (SELECT id_subpergunta FROM pergunta NATURAL JOIN subpergunta_has_pergunta NATURAL JOIN subpergunta WHERE numero = 'E' AND numeracao = 48);";  
            $d48E = mysqli_query($conn, $delete48E);
        }else{
            $insert48E = "INSERT INTO resposta(cpf, resposta, id_perguntas, id_alternativa, id_subpergunta) VALUES ('$cpf', 'B', (SELECT id_perguntas FROM pergunta where numeracao = 48), (SELECT id_alternativa FROM pergunta NATURAL JOIN subpergunta_has_pergunta NATURAL JOIN subpergunta NATURAL JOIN subpergunta_has_alternativa NATURAL JOIN alternativa WHERE numeracao = 48 AND numero = 'E' AND opcao = 'B'), (SELECT id_subpergunta FROM pergunta NATURAL JOIN subpergunta_has_pergunta NATURAL JOIN subpergunta WHERE numero = 'E' AND numeracao = 48));";                
            $resultado48E = mysqli_query($conn, $insert48E);
            
            $delete48E = "DELETE FROM resposta WHERE cpf = '$cpf' AND id_perguntas = (SELECT id_perguntas FROM pergunta WHERE numeracao = 48) AND resposta = 'A' AND id_subpergunta = (SELECT id_subpergunta FROM pergunta NATURAL JOIN subpergunta_has_pergunta NATURAL JOIN subpergunta WHERE numero = 'E' AND numeracao = 48);"; 
            $d48E = mysqli_query($conn, $delete48E);
        }
        
        if ($opt48F == "on"){ 
            $insert48F = "INSERT INTO resposta(cpf, resposta, id_perguntas, id_alternativa, id_subpergunta) VALUES ('$cpf', 'A', (SELECT id_perguntas FROM pergunta where numeracao = 48), (SELECT id_alternativa FROM pergunta NATURAL JOIN subpergunta_has_pergunta NATURAL JOIN subpergunta NATURAL JOIN subpergunta_has_alternativa NATURAL JOIN alternativa WHERE numeracao = 48 AND numero = 'F' AND opcao = 'A'), (SELECT id_subpergunta FROM pergunta NATURAL JOIN subpergunta_has_pergunta NATURAL JOIN subpergunta WHERE numero = 'F' AND numeracao = 48));";            
            $resultado48F = mysqli_query($conn, $insert48F);
            
            $delete48F = "DELETE FROM resposta WHERE cpf = '$cpf' AND id_perguntas = (SELECT id_perguntas FROM pergunta WHERE numeracao = 48) AND resposta = 'B' AND id_subpergunta = (SELECT id_subpergunta FROM pergunta NATURAL JOIN subpergunta_has_pergunta NATURAL JOIN subpergunta WHERE numero = 'F' AND numeracao = 48);";  
            $d48F = mysqli_query($conn, $delete48F);
        }else{
            $insert48F = "INSERT INTO resposta(cpf, resposta, id_perguntas, id_alternativa, id_subpergunta) VALUES ('$cpf', 'B', (SELECT id_perguntas FROM pergunta where numeracao = 48), (SELECT id_alternativa FROM pergunta NATURAL JOIN subpergunta_has_pergunta NATURAL JOIN subpergunta NATURAL JOIN subpergunta_has_alternativa NATURAL JOIN alternativa WHERE numeracao = 48 AND numero = 'F' AND opcao = 'B'), (SELECT id_subpergunta FROM pergunta NATURAL JOIN subpergunta_has_pergunta NATURAL JOIN subpergunta WHERE numero = 'F' AND numeracao = 48));";                
            $resultado48F = mysqli_query($conn, $insert48F);
            
            $delete48F = "DELETE FROM resposta WHERE cpf = '$cpf' AND id_perguntas = (SELECT id_perguntas FROM pergunta WHERE numeracao = 48) AND resposta = 'A' AND id_subpergunta = (SELECT id_subpergunta FROM pergunta NATURAL JOIN subpergunta_has_pergunta NATURAL JOIN subpergunta WHERE numero = 'F' AND numeracao = 48);"; 
            $d48F = mysqli_query($conn, $delete48F);
        }
        
    }else{
        $delete48 = "DELETE FROM resposta WHERE cpf = '$cpf' AND id_perguntas = (SELECT id_perguntas FROM pergunta WHERE numeracao = 48);"; 
        $d48 = mysqli_query($conn, $delete48);
    }

    mysqli_close($conn);

    header ("Location: satisfacaotec.php")
?>