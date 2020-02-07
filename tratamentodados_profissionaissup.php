<?php	
    include 'acessobancosup.php';
    include 'vsup.php';

    $teste_dadosprofissionaissup = "SELECT * 
                                    FROM resposta
	                                WHERE CPF = '$cpf' AND id_perguntas = (SELECT id_perguntas 
                                                                           FROM pergunta 
                                                                           WHERE numeracao = 32)";
	          
	$verifica_dadosprofissionaissup = mysqli_query($conn, $teste_dadosprofissionaissup);

	if (mysqli_num_rows($verifica_dadosprofissionaissup) >= 1){
        $delete32 = "DELETE FROM resposta WHERE cpf = '$cpf' AND id_perguntas = (SELECT id_perguntas FROM pergunta WHERE numeracao = 32);";
        $delete33 = "DELETE FROM resposta WHERE cpf = '$cpf' AND id_perguntas = (SELECT id_perguntas FROM pergunta WHERE numeracao = 33);";
        $delete34 = "DELETE FROM resposta WHERE cpf = '$cpf' AND id_perguntas = (SELECT id_perguntas FROM pergunta WHERE numeracao = 34);";
        $delete35 = "DELETE FROM resposta WHERE cpf = '$cpf' AND id_perguntas = (SELECT id_perguntas FROM pergunta WHERE numeracao = 35);";
        $delete36 = "DELETE FROM resposta WHERE cpf = '$cpf' AND id_perguntas = (SELECT id_perguntas FROM pergunta WHERE numeracao = 36);";
        $delete37 = "DELETE FROM resposta WHERE cpf = '$cpf' AND id_perguntas = (SELECT id_perguntas FROM pergunta WHERE numeracao = 37);";
        $delete38 = "DELETE FROM resposta WHERE cpf = '$cpf' AND id_perguntas = (SELECT id_perguntas FROM pergunta WHERE numeracao = 38);";
        $delete39 = "DELETE FROM resposta WHERE cpf = '$cpf' AND id_perguntas = (SELECT id_perguntas FROM pergunta WHERE numeracao = 39);";
        $delete40 = "DELETE FROM resposta WHERE cpf = '$cpf' AND id_perguntas = (SELECT id_perguntas FROM pergunta WHERE numeracao = 40);";
        $delete41 = "DELETE FROM resposta WHERE cpf = '$cpf' AND id_perguntas = (SELECT id_perguntas FROM pergunta WHERE numeracao = 41);";
        $delete42 = "DELETE FROM resposta WHERE cpf = '$cpf' AND id_perguntas = (SELECT id_perguntas FROM pergunta WHERE numeracao = 42);";
        $delete43 = "DELETE FROM resposta WHERE cpf = '$cpf' AND id_perguntas = (SELECT id_perguntas FROM pergunta WHERE numeracao = 43);";
        $delete44 = "DELETE FROM resposta WHERE cpf = '$cpf' AND id_perguntas = (SELECT id_perguntas FROM pergunta WHERE numeracao = 44);"; 
        
        $d32 = mysqli_query($conn, $delete32);
        $d33 = mysqli_query($conn, $delete33);
        $d34 = mysqli_query($conn, $delete34);
        $d35 = mysqli_query($conn, $delete35);
        $d36 = mysqli_query($conn, $delete36);
        $d37 = mysqli_query($conn, $delete37);
        $d38 = mysqli_query($conn, $delete38);
        $d39 = mysqli_query($conn, $delete39);
        $d40 = mysqli_query($conn, $delete40);
        $d41 = mysqli_query($conn, $delete41);
        $d42 = mysqli_query($conn, $delete42);
        $d43 = mysqli_query($conn, $delete43);
        $d44 = mysqli_query($conn, $delete44);
    }

    $opt32 = filter_input (INPUT_POST, 'perg32', FILTER_SANITIZE_STRING);
    $insert32 = "INSERT INTO resposta(cpf, resposta, id_perguntas, id_alternativa) VALUES ('$cpf', '$opt32', (SELECT id_perguntas FROM pergunta where numeracao = 32), (SELECT id_alternativa FROM pergunta NATURAL JOIN pergunta_has_alternativa NATURAL JOIN alternativa where opcao = '$opt32' AND numeracao = 32));";
    $resultado32 = mysqli_query($conn, $insert32);

    if ($opt32 == "A"){
        $opt33 = filter_input (INPUT_POST, 'perg33', FILTER_SANITIZE_STRING);
        $opt34 = filter_input (INPUT_POST, 'perg34', FILTER_SANITIZE_STRING);
        $opt35 = filter_input (INPUT_POST, 'perg35', FILTER_SANITIZE_STRING);
        
        $insert33 = "INSERT INTO resposta(cpf, resposta, id_perguntas, id_alternativa) VALUES ('$cpf', '$opt33', (SELECT id_perguntas FROM pergunta where numeracao = 33), (SELECT id_alternativa FROM pergunta NATURAL JOIN pergunta_has_alternativa NATURAL JOIN alternativa where opcao = '$opt33' AND numeracao = 33));";
        $insert34 = "INSERT INTO resposta(cpf, resposta, id_perguntas, id_alternativa) VALUES ('$cpf', '$opt34', (SELECT id_perguntas FROM pergunta where numeracao = 34), (SELECT id_alternativa FROM pergunta NATURAL JOIN pergunta_has_alternativa NATURAL JOIN alternativa where opcao = '$opt34' AND numeracao = 34));";
        $insert35 = "INSERT INTO resposta(cpf, resposta, id_perguntas, id_alternativa) VALUES ('$cpf', '$opt35', (SELECT id_perguntas FROM pergunta where numeracao = 35), (SELECT id_alternativa FROM pergunta NATURAL JOIN pergunta_has_alternativa NATURAL JOIN alternativa where opcao = '$opt35' AND numeracao = 35));";
        
        $resultado33 = mysqli_query($conn, $insert33);
        $resultado34 = mysqli_query($conn, $insert34);
        $resultado35 = mysqli_query($conn, $insert35);
        
        $delete44 = "DELETE FROM resposta WHERE cpf = '$cpf' AND id_perguntas = (SELECT id_perguntas FROM pergunta WHERE numeracao = 44);"; 
        $d44 = mysqli_query($conn, $delete44);
        
        if ($opt35 == "A"){
            $opt36 = filter_input (INPUT_POST, 'perg36', FILTER_SANITIZE_STRING);
            $opt37 = filter_input (INPUT_POST, 'perg37', FILTER_SANITIZE_STRING);
            $opt38 = filter_input (INPUT_POST, 'perg38', FILTER_SANITIZE_STRING);
            
            $insert36 = "INSERT INTO resposta(cpf, resposta, id_perguntas, id_alternativa) VALUES ('$cpf', '$opt36', (SELECT id_perguntas FROM pergunta where numeracao = 36), (SELECT id_alternativa FROM pergunta NATURAL JOIN pergunta_has_alternativa NATURAL JOIN alternativa where opcao = '$opt36' AND numeracao = 36));";
            $insert37 = "INSERT INTO resposta(cpf, resposta, id_perguntas, id_alternativa) VALUES ('$cpf', '$opt37', (SELECT id_perguntas FROM pergunta where numeracao = 37), (SELECT id_alternativa FROM pergunta NATURAL JOIN pergunta_has_alternativa NATURAL JOIN alternativa where opcao = '$opt37' AND numeracao = 37));";
            $insert38 = "INSERT INTO resposta(cpf, resposta, id_perguntas, id_alternativa) VALUES ('$cpf', '$opt38', (SELECT id_perguntas FROM pergunta where numeracao = 38), (SELECT id_alternativa FROM pergunta NATURAL JOIN pergunta_has_alternativa NATURAL JOIN alternativa where opcao = '$opt38' AND numeracao = 38));";

            $resultado36 = mysqli_query($conn, $insert36);
            $resultado37 = mysqli_query($conn, $insert37);
            $resultado38 = mysqli_query($conn, $insert38);
            
            $delete44 = "DELETE FROM resposta WHERE cpf = '$cpf' AND id_perguntas = (SELECT id_perguntas FROM pergunta WHERE numeracao = 44);"; 
            $d44 = mysqli_query($conn, $delete44);
            
            if ($opt38 == "A"){
                $opt39 = filter_input (INPUT_POST, 'perg39', FILTER_SANITIZE_STRING);
                $opt40 = filter_input (INPUT_POST, 'perg40', FILTER_SANITIZE_STRING);
                $opt41 = filter_input (INPUT_POST, 'perg41', FILTER_SANITIZE_STRING);
                $opt42A = filter_input (INPUT_POST, 'perg42A', FILTER_SANITIZE_STRING);
                $opt42B = filter_input (INPUT_POST, 'perg42B', FILTER_SANITIZE_STRING);
                $opt42C = filter_input (INPUT_POST, 'perg42C', FILTER_SANITIZE_STRING);
                $opt42D = filter_input (INPUT_POST, 'perg42D', FILTER_SANITIZE_STRING);
                $opt42E = filter_input (INPUT_POST, 'perg42E', FILTER_SANITIZE_STRING);
                
                $insert39 = "INSERT INTO resposta(cpf, resposta, id_perguntas, id_alternativa) VALUES ('$cpf', '$opt39', (SELECT id_perguntas FROM pergunta where numeracao = 39), (SELECT id_alternativa FROM pergunta NATURAL JOIN pergunta_has_alternativa NATURAL JOIN alternativa where opcao = '$opt39' AND numeracao = 39));";
                $insert40 = "INSERT INTO resposta(cpf, resposta, id_perguntas, id_alternativa) VALUES ('$cpf', '$opt40', (SELECT id_perguntas FROM pergunta where numeracao = 40), (SELECT id_alternativa FROM pergunta NATURAL JOIN pergunta_has_alternativa NATURAL JOIN alternativa where opcao = '$opt40' AND numeracao = 40));";
                $insert41 = "INSERT INTO resposta(cpf, resposta, id_perguntas, id_alternativa) VALUES ('$cpf', '$opt41', (SELECT id_perguntas FROM pergunta where numeracao = 41), (SELECT id_alternativa FROM pergunta NATURAL JOIN pergunta_has_alternativa NATURAL JOIN alternativa where opcao = '$opt41' AND numeracao = 41));";
                $insert42A = "INSERT INTO resposta(cpf, resposta, id_perguntas, id_alternativa, id_subpergunta) VALUES ('$cpf', (SELECT opcao FROM pergunta NATURAL JOIN subpergunta_has_pergunta NATURAL JOIN subpergunta NATURAL JOIN subpergunta_has_alternativa NATURAL JOIN alternativa where alternativa = '$opt42A' AND numeracao = 42 AND numero = 'A'), (SELECT id_perguntas FROM pergunta where numeracao = 42),   (SELECT id_alternativa FROM pergunta NATURAL JOIN subpergunta_has_pergunta NATURAL JOIN subpergunta NATURAL JOIN subpergunta_has_alternativa NATURAL JOIN alternativa WHERE numeracao = 42 AND numero = 'A' AND alternativa = '$opt42A'),  (SELECT id_subpergunta FROM pergunta NATURAL JOIN subpergunta_has_pergunta NATURAL JOIN subpergunta WHERE numero = 'A' AND numeracao = 42));";
                $insert42B = "INSERT INTO resposta(cpf, resposta, id_perguntas, id_alternativa, id_subpergunta) VALUES ('$cpf', (SELECT opcao FROM pergunta NATURAL JOIN subpergunta_has_pergunta NATURAL JOIN subpergunta NATURAL JOIN subpergunta_has_alternativa NATURAL JOIN alternativa where alternativa = '$opt42B' AND numeracao = 42 AND numero = 'B'), (SELECT id_perguntas FROM pergunta where numeracao = 42), (SELECT id_alternativa FROM pergunta NATURAL JOIN subpergunta_has_pergunta NATURAL JOIN subpergunta NATURAL JOIN subpergunta_has_alternativa NATURAL JOIN alternativa WHERE numeracao = 42 AND numero = 'B' AND alternativa = '$opt42B'), (SELECT id_subpergunta FROM pergunta NATURAL JOIN subpergunta_has_pergunta NATURAL JOIN subpergunta WHERE numero = 'B' AND numeracao = 42));";    
                $insert42C = "INSERT INTO resposta(cpf, resposta, id_perguntas, id_alternativa, id_subpergunta) VALUES ('$cpf', (SELECT opcao FROM pergunta NATURAL JOIN subpergunta_has_pergunta NATURAL JOIN subpergunta NATURAL JOIN subpergunta_has_alternativa NATURAL JOIN alternativa where alternativa = '$opt42C' AND numeracao = 42 AND numero = 'C'), (SELECT id_perguntas FROM pergunta where numeracao = 42), (SELECT id_alternativa FROM pergunta NATURAL JOIN subpergunta_has_pergunta NATURAL JOIN subpergunta NATURAL JOIN subpergunta_has_alternativa NATURAL JOIN alternativa WHERE numeracao = 42 AND numero = 'C' AND alternativa = '$opt42C'), (SELECT id_subpergunta FROM pergunta NATURAL JOIN subpergunta_has_pergunta NATURAL JOIN subpergunta WHERE numero = 'C' AND numeracao = 42));";               
                $insert42D = "INSERT INTO resposta(cpf, resposta, id_perguntas, id_alternativa, id_subpergunta) VALUES ('$cpf', (SELECT opcao FROM pergunta NATURAL JOIN subpergunta_has_pergunta NATURAL JOIN subpergunta NATURAL JOIN subpergunta_has_alternativa NATURAL JOIN alternativa where alternativa = '$opt42D' AND numeracao = 42 AND numero = 'D'), (SELECT id_perguntas FROM pergunta where numeracao = 42),(SELECT id_alternativa FROM pergunta NATURAL JOIN subpergunta_has_pergunta NATURAL JOIN subpergunta NATURAL JOIN subpergunta_has_alternativa NATURAL JOIN alternativa WHERE numeracao = 42 AND numero = 'D' AND alternativa = '$opt42D'), (SELECT id_subpergunta FROM pergunta NATURAL JOIN subpergunta_has_pergunta NATURAL JOIN subpergunta WHERE numero = 'D' AND numeracao = 42));";
                $insert42E = "INSERT INTO resposta(cpf, resposta, id_perguntas, id_alternativa, id_subpergunta) VALUES ('$cpf', (SELECT opcao FROM pergunta NATURAL JOIN subpergunta_has_pergunta NATURAL JOIN subpergunta NATURAL JOIN subpergunta_has_alternativa NATURAL JOIN alternativa where alternativa = '$opt42E' AND numeracao = 42 AND numero = 'E'), (SELECT id_perguntas FROM pergunta where numeracao = 42), (SELECT id_alternativa FROM pergunta NATURAL JOIN subpergunta_has_pergunta NATURAL JOIN subpergunta NATURAL JOIN subpergunta_has_alternativa NATURAL JOIN alternativa WHERE numeracao = 42 AND numero = 'E' AND alternativa = '$opt42E'), (SELECT id_subpergunta FROM pergunta NATURAL JOIN subpergunta_has_pergunta NATURAL JOIN subpergunta WHERE numero = 'E' AND numeracao = 42));";
                
                $resultado39 = mysqli_query($conn, $insert39);
                $resultado40 = mysqli_query($conn, $insert40);
                $resultado41 = mysqli_query($conn, $insert41);
                $resultado42A = mysqli_query($conn, $insert42A);
                $resultado42B = mysqli_query($conn, $insert42B);
                $resultado42C = mysqli_query($conn, $insert42C);
                $resultado42D = mysqli_query($conn, $insert42D);
                $resultado42E = mysqli_query($conn, $insert42E);
                
                $delete43 = "DELETE FROM resposta WHERE cpf = '$cpf' AND id_perguntas = (SELECT id_perguntas FROM pergunta WHERE numeracao = 43);"; 
                $d43 = mysqli_query($conn, $delete43);                
            }else{
                $opt43 = filter_input (INPUT_POST, 'perg43', FILTER_SANITIZE_STRING);
                $insert43 = "INSERT INTO resposta(cpf, resposta, id_perguntas, id_alternativa) VALUES ('$cpf', '$opt43', (SELECT id_perguntas FROM pergunta where numeracao = 43), (SELECT id_alternativa FROM pergunta NATURAL JOIN pergunta_has_alternativa NATURAL JOIN alternativa where opcao = '$opt43' AND numeracao = 43));";   
                $resultado43 = mysqli_query($conn, $insert43);
                
                $delete39 = "DELETE FROM resposta WHERE cpf = '$cpf' AND id_perguntas = (SELECT id_perguntas FROM pergunta WHERE numeracao = 39);"; 
                $d39 = mysqli_query($conn, $delete39);
                $delete40 = "DELETE FROM resposta WHERE cpf = '$cpf' AND id_perguntas = (SELECT id_perguntas FROM pergunta WHERE numeracao = 40);"; 
                $d40 = mysqli_query($conn, $delete40);
                $delete41 = "DELETE FROM resposta WHERE cpf = '$cpf' AND id_perguntas = (SELECT id_perguntas FROM pergunta WHERE numeracao = 41);"; 
                $d41 = mysqli_query($conn, $delete41);
                $delete42 = "DELETE FROM resposta WHERE cpf = '$cpf' AND id_perguntas = (SELECT id_perguntas FROM pergunta WHERE numeracao = 42);"; 
                $d42 = mysqli_query($conn, $delete42);
            }
        }else{            
            $opt44 = filter_input (INPUT_POST, 'perg44', FILTER_SANITIZE_STRING);
            $insert44 = "INSERT INTO resposta(cpf, resposta, id_perguntas, id_alternativa) VALUES ('$cpf', '$opt44', (SELECT id_perguntas FROM pergunta where numeracao = 44), (SELECT id_alternativa FROM pergunta NATURAL JOIN pergunta_has_alternativa NATURAL JOIN alternativa where opcao = '$opt44' AND numeracao = 44));";   
            $resultado44 = mysqli_query($conn, $insert44);
            
            $delete36 = "DELETE FROM resposta WHERE cpf = '$cpf' AND id_perguntas = (SELECT id_perguntas FROM pergunta WHERE numeracao = 36);"; 
            $d36 = mysqli_query($conn, $delete36);
            $delete37 = "DELETE FROM resposta WHERE cpf = '$cpf' AND id_perguntas = (SELECT id_perguntas FROM pergunta WHERE numeracao = 37);"; 
            $d37 = mysqli_query($conn, $delete37);
            $delete38 = "DELETE FROM resposta WHERE cpf = '$cpf' AND id_perguntas = (SELECT id_perguntas FROM pergunta WHERE numeracao = 38);"; 
            $d38 = mysqli_query($conn, $delete38);
        }
    }else{
        $opt44 = filter_input (INPUT_POST, 'perg44', FILTER_SANITIZE_STRING);
        $insert44 = "INSERT INTO resposta(cpf, resposta, id_perguntas, id_alternativa) VALUES ('$cpf', '$opt44', (SELECT id_perguntas FROM pergunta where numeracao = 44), (SELECT id_alternativa FROM pergunta NATURAL JOIN pergunta_has_alternativa NATURAL JOIN alternativa where opcao = '$opt44' AND numeracao = 44));";   
        $resultado44 = mysqli_query($conn, $insert44);
            
        $delete36 = "DELETE FROM resposta WHERE cpf = '$cpf' AND id_perguntas = (SELECT id_perguntas FROM pergunta WHERE numeracao = 36);"; 
        $d36 = mysqli_query($conn, $delete36);
        $delete37 = "DELETE FROM resposta WHERE cpf = '$cpf' AND id_perguntas = (SELECT id_perguntas FROM pergunta WHERE numeracao = 37);"; 
        $d37 = mysqli_query($conn, $delete37);
        $delete38 = "DELETE FROM resposta WHERE cpf = '$cpf' AND id_perguntas = (SELECT id_perguntas FROM pergunta WHERE numeracao = 38);"; 
        $d38 = mysqli_query($conn, $delete38);
        $delete39 = "DELETE FROM resposta WHERE cpf = '$cpf' AND id_perguntas = (SELECT id_perguntas FROM pergunta WHERE numeracao = 39);"; 
        $d39 = mysqli_query($conn, $delete39);
        $delete40 = "DELETE FROM resposta WHERE cpf = '$cpf' AND id_perguntas = (SELECT id_perguntas FROM pergunta WHERE numeracao = 40);"; 
        $d40 = mysqli_query($conn, $delete40);
        $delete41 = "DELETE FROM resposta WHERE cpf = '$cpf' AND id_perguntas = (SELECT id_perguntas FROM pergunta WHERE numeracao = 41);"; 
        $d41 = mysqli_query($conn, $delete41);        
        $delete42 = "DELETE FROM resposta WHERE cpf = '$cpf' AND id_perguntas = (SELECT id_perguntas FROM pergunta WHERE numeracao = 42);"; 
        $d42 = mysqli_query($conn, $delete42);
        $delete43 = "DELETE FROM resposta WHERE cpf = '$cpf' AND id_perguntas = (SELECT id_perguntas FROM pergunta WHERE numeracao = 43);"; 
        $d43 = mysqli_query($conn, $delete43);
    }
	
	if ($opt32 == "A"){
		if ($opt35 == "A"){
            if ($opt38 == "A"){
                header("Location: empresasup.php");
            }else{
                if ($opt38 == "B"){
                    header("Location: lazersaudecidadaniasup.php");
                }
            }
        }else{
            if ($opt35 == "B"){
                header("Location: lazersaudecidadaniasup.php");
            }
        }
	}else{
		if ($opt32 == "B"){
			header("Location: lazersaudecidadaniasup.php");		
		}
	}
?>