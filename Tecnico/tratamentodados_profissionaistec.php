<?php	
    include '../acessobancotec.php';
    include 'vTecnico.php';

    $teste_dadosprofissionaistec = "SELECT * 
                                    FROM resposta
	                                WHERE CPF = '$cpf' AND id_perguntas = (SELECT id_perguntas 
                                                                           FROM pergunta 
                                                                           WHERE numeracao = 22)";
	          
	$verifica_dadosprofissionaistec = mysqli_query($conn, $teste_dadosprofissionaistec);

	if (mysqli_num_rows($verifica_dadosprofissionaistec) >= 1){
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
        $delete32 = "DELETE FROM resposta WHERE cpf = '$cpf' AND id_perguntas = (SELECT id_perguntas FROM pergunta WHERE numeracao = 32);";
        $delete33 = "DELETE FROM resposta WHERE cpf = '$cpf' AND id_perguntas = (SELECT id_perguntas FROM pergunta WHERE numeracao = 33);";
        $delete34 = "DELETE FROM resposta WHERE cpf = '$cpf' AND id_perguntas = (SELECT id_perguntas FROM pergunta WHERE numeracao = 34);";
        $delete35 = "DELETE FROM resposta WHERE cpf = '$cpf' AND id_perguntas = (SELECT id_perguntas FROM pergunta WHERE numeracao = 35);"; 
        
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
        $d32 = mysqli_query($conn, $delete32);
        $d33 = mysqli_query($conn, $delete33);
        $d34 = mysqli_query($conn, $delete34);
        $d35 = mysqli_query($conn, $delete35);
    }

    $op22 = $_SESSION['opt22'];
    $op26 = $_SESSION['opt26'];
    $op29 = $_SESSION['opt29'];

    $opt22 = filter_input (INPUT_POST, 'perg22', FILTER_SANITIZE_STRING);

    $opt22 = filter_input (INPUT_POST, 'perg22', FILTER_SANITIZE_STRING);
    $insert22 = "INSERT INTO resposta(cpf, resposta, id_perguntas, id_alternativa) VALUES ('$cpf', '$opt22', (SELECT id_perguntas FROM pergunta where numeracao = 22), (SELECT id_alternativa FROM pergunta NATURAL JOIN pergunta_has_alternativa NATURAL JOIN alternativa where opcao = '$opt22' AND numeracao = 22));";
    $resultado22 = mysqli_query($conn, $insert22);

    if ($opt22 == "A"){
        $opt23 = filter_input (INPUT_POST, 'perg23', FILTER_SANITIZE_STRING);
        $opt24 = filter_input (INPUT_POST, 'perg24', FILTER_SANITIZE_STRING);
        $opt25 = filter_input (INPUT_POST, 'perg25', FILTER_SANITIZE_STRING);
        $opt26 = filter_input (INPUT_POST, 'perg26', FILTER_SANITIZE_STRING);
        
        $insert23 = "INSERT INTO resposta(cpf, resposta, id_perguntas, id_alternativa) VALUES ('$cpf', '$opt23', (SELECT id_perguntas FROM pergunta where numeracao = 23), (SELECT id_alternativa FROM pergunta NATURAL JOIN pergunta_has_alternativa NATURAL JOIN alternativa where opcao = '$opt23' AND numeracao = 23));";
        $insert24 = "INSERT INTO resposta(cpf, resposta, id_perguntas, id_alternativa) VALUES ('$cpf', '$opt24', (SELECT id_perguntas FROM pergunta where numeracao = 24), (SELECT id_alternativa FROM pergunta NATURAL JOIN pergunta_has_alternativa NATURAL JOIN alternativa where opcao = '$opt24' AND numeracao = 24));";
        $insert25 = "INSERT INTO resposta(cpf, resposta, id_perguntas, id_alternativa) VALUES ('$cpf', '$opt25', (SELECT id_perguntas FROM pergunta where numeracao = 25), (SELECT id_alternativa FROM pergunta NATURAL JOIN pergunta_has_alternativa NATURAL JOIN alternativa where opcao = '$opt25' AND numeracao = 25));";
        $insert26 = "INSERT INTO resposta(cpf, resposta, id_perguntas, id_alternativa) VALUES ('$cpf', '$opt26', (SELECT id_perguntas FROM pergunta where numeracao = 26), (SELECT id_alternativa FROM pergunta NATURAL JOIN pergunta_has_alternativa NATURAL JOIN alternativa where opcao = '$opt26' AND numeracao = 26));";
        
        $resultado23 = mysqli_query($conn, $insert23);
        $resultado24 = mysqli_query($conn, $insert24);
        $resultado25 = mysqli_query($conn, $insert25);
        $resultado26 = mysqli_query($conn, $insert26);
        
        $delete35 = "DELETE FROM resposta WHERE cpf = '$cpf' AND id_perguntas = (SELECT id_perguntas FROM pergunta WHERE numeracao = 35);"; 
        $d35 = mysqli_query($conn, $delete35);
        
        if ($opt26 == "A"){
            $opt27 = filter_input (INPUT_POST, 'perg27', FILTER_SANITIZE_STRING);
            $opt28 = filter_input (INPUT_POST, 'perg28', FILTER_SANITIZE_STRING);
            $opt29 = filter_input (INPUT_POST, 'perg29', FILTER_SANITIZE_STRING);
            
            $insert27 = "INSERT INTO resposta(cpf, resposta, id_perguntas, id_alternativa) VALUES ('$cpf', '$opt27', (SELECT id_perguntas FROM pergunta where numeracao = 27), (SELECT id_alternativa FROM pergunta NATURAL JOIN pergunta_has_alternativa NATURAL JOIN alternativa where opcao = '$opt27' AND numeracao = 27));";
            $insert28 = "INSERT INTO resposta(cpf, resposta, id_perguntas, id_alternativa) VALUES ('$cpf', '$opt28', (SELECT id_perguntas FROM pergunta where numeracao = 28), (SELECT id_alternativa FROM pergunta NATURAL JOIN pergunta_has_alternativa NATURAL JOIN alternativa where opcao = '$opt28' AND numeracao = 28));";
            $insert29 = "INSERT INTO resposta(cpf, resposta, id_perguntas, id_alternativa) VALUES ('$cpf', '$opt29', (SELECT id_perguntas FROM pergunta where numeracao = 29), (SELECT id_alternativa FROM pergunta NATURAL JOIN pergunta_has_alternativa NATURAL JOIN alternativa where opcao = '$opt29' AND numeracao = 29));";

            $resultado27 = mysqli_query($conn, $insert27);
            $resultado28 = mysqli_query($conn, $insert28);
            $resultado29 = mysqli_query($conn, $insert29);
            
            $delete35 = "DELETE FROM resposta WHERE cpf = '$cpf' AND id_perguntas = (SELECT id_perguntas FROM pergunta WHERE numeracao = 35);"; 
            $d35 = mysqli_query($conn, $delete35);
            
            if ($opt29 == "A"){
                $opt30 = filter_input (INPUT_POST, 'perg30', FILTER_SANITIZE_STRING);
                $opt31 = filter_input (INPUT_POST, 'perg31', FILTER_SANITIZE_STRING);
                $opt32 = filter_input (INPUT_POST, 'perg32', FILTER_SANITIZE_STRING);
                $opt33A = filter_input (INPUT_POST, 'perg33A', FILTER_SANITIZE_STRING);
                $opt33B = filter_input (INPUT_POST, 'perg33B', FILTER_SANITIZE_STRING);
                $opt33C = filter_input (INPUT_POST, 'perg33C', FILTER_SANITIZE_STRING);
                $opt33D = filter_input (INPUT_POST, 'perg33D', FILTER_SANITIZE_STRING);
                $opt33E = filter_input (INPUT_POST, 'perg33E', FILTER_SANITIZE_STRING);
                
                $insert30 = "INSERT INTO resposta(cpf, resposta, id_perguntas, id_alternativa) VALUES ('$cpf', '$opt30', (SELECT id_perguntas FROM pergunta where numeracao = 30), (SELECT id_alternativa FROM pergunta NATURAL JOIN pergunta_has_alternativa NATURAL JOIN alternativa where opcao = '$opt30' AND numeracao = 30));";
                $insert31 = "INSERT INTO resposta(cpf, resposta, id_perguntas, id_alternativa) VALUES ('$cpf', '$opt31', (SELECT id_perguntas FROM pergunta where numeracao = 31), (SELECT id_alternativa FROM pergunta NATURAL JOIN pergunta_has_alternativa NATURAL JOIN alternativa where opcao = '$opt31' AND numeracao = 31));";
                $insert32 = "INSERT INTO resposta(cpf, resposta, id_perguntas, id_alternativa) VALUES ('$cpf', '$opt32', (SELECT id_perguntas FROM pergunta where numeracao = 32), (SELECT id_alternativa FROM pergunta NATURAL JOIN pergunta_has_alternativa NATURAL JOIN alternativa where opcao = '$opt32' AND numeracao = 32));";
                $insert33A = "INSERT INTO resposta(cpf, resposta, id_perguntas, id_alternativa, id_subpergunta) VALUES ('$cpf', (SELECT opcao FROM pergunta NATURAL JOIN subpergunta_has_pergunta NATURAL JOIN subpergunta NATURAL JOIN subpergunta_has_alternativa NATURAL JOIN alternativa where alternativa = '$opt33A' AND numeracao = 33 AND numero = 'A'), (SELECT id_perguntas FROM pergunta where numeracao = 33),   (SELECT id_alternativa FROM pergunta NATURAL JOIN subpergunta_has_pergunta NATURAL JOIN subpergunta NATURAL JOIN subpergunta_has_alternativa NATURAL JOIN alternativa WHERE numeracao = 33 AND numero = 'A' AND alternativa = '$opt33A'),  (SELECT id_subpergunta FROM pergunta NATURAL JOIN subpergunta_has_pergunta NATURAL JOIN subpergunta WHERE numero = 'A' AND numeracao = 33));";
                $insert33B = "INSERT INTO resposta(cpf, resposta, id_perguntas, id_alternativa, id_subpergunta) VALUES ('$cpf', (SELECT opcao FROM pergunta NATURAL JOIN subpergunta_has_pergunta NATURAL JOIN subpergunta NATURAL JOIN subpergunta_has_alternativa NATURAL JOIN alternativa where alternativa = '$opt33B' AND numeracao = 33 AND numero = 'B'), (SELECT id_perguntas FROM pergunta where numeracao = 33), (SELECT id_alternativa FROM pergunta NATURAL JOIN subpergunta_has_pergunta NATURAL JOIN subpergunta NATURAL JOIN subpergunta_has_alternativa NATURAL JOIN alternativa WHERE numeracao = 33 AND numero = 'B' AND alternativa = '$opt33B'), (SELECT id_subpergunta FROM pergunta NATURAL JOIN subpergunta_has_pergunta NATURAL JOIN subpergunta WHERE numero = 'B' AND numeracao = 33));";    
                $insert33C = "INSERT INTO resposta(cpf, resposta, id_perguntas, id_alternativa, id_subpergunta) VALUES ('$cpf', (SELECT opcao FROM pergunta NATURAL JOIN subpergunta_has_pergunta NATURAL JOIN subpergunta NATURAL JOIN subpergunta_has_alternativa NATURAL JOIN alternativa where alternativa = '$opt33C' AND numeracao = 33 AND numero = 'C'), (SELECT id_perguntas FROM pergunta where numeracao = 33), (SELECT id_alternativa FROM pergunta NATURAL JOIN subpergunta_has_pergunta NATURAL JOIN subpergunta NATURAL JOIN subpergunta_has_alternativa NATURAL JOIN alternativa WHERE numeracao = 33 AND numero = 'C' AND alternativa = '$opt33C'), (SELECT id_subpergunta FROM pergunta NATURAL JOIN subpergunta_has_pergunta NATURAL JOIN subpergunta WHERE numero = 'C' AND numeracao = 33));";               
                $insert33D = "INSERT INTO resposta(cpf, resposta, id_perguntas, id_alternativa, id_subpergunta) VALUES ('$cpf', (SELECT opcao FROM pergunta NATURAL JOIN subpergunta_has_pergunta NATURAL JOIN subpergunta NATURAL JOIN subpergunta_has_alternativa NATURAL JOIN alternativa where alternativa = '$opt33D' AND numeracao = 33 AND numero = 'D'), (SELECT id_perguntas FROM pergunta where numeracao = 33),(SELECT id_alternativa FROM pergunta NATURAL JOIN subpergunta_has_pergunta NATURAL JOIN subpergunta NATURAL JOIN subpergunta_has_alternativa NATURAL JOIN alternativa WHERE numeracao = 33 AND numero = 'D' AND alternativa = '$opt33D'), (SELECT id_subpergunta FROM pergunta NATURAL JOIN subpergunta_has_pergunta NATURAL JOIN subpergunta WHERE numero = 'D' AND numeracao = 33));";
                $insert33E = "INSERT INTO resposta(cpf, resposta, id_perguntas, id_alternativa, id_subpergunta) VALUES ('$cpf', (SELECT opcao FROM pergunta NATURAL JOIN subpergunta_has_pergunta NATURAL JOIN subpergunta NATURAL JOIN subpergunta_has_alternativa NATURAL JOIN alternativa where alternativa = '$opt33E' AND numeracao = 33 AND numero = 'E'), (SELECT id_perguntas FROM pergunta where numeracao = 33), (SELECT id_alternativa FROM pergunta NATURAL JOIN subpergunta_has_pergunta NATURAL JOIN subpergunta NATURAL JOIN subpergunta_has_alternativa NATURAL JOIN alternativa WHERE numeracao = 33 AND numero = 'E' AND alternativa = '$opt33E'), (SELECT id_subpergunta FROM pergunta NATURAL JOIN subpergunta_has_pergunta NATURAL JOIN subpergunta WHERE numero = 'E' AND numeracao = 33));";
                
                $resultado30 = mysqli_query($conn, $insert30);
                $resultado31 = mysqli_query($conn, $insert31);
                $resultado32 = mysqli_query($conn, $insert32);
                $resultado33A = mysqli_query($conn, $insert33A);
                $resultado33B = mysqli_query($conn, $insert33B);
                $resultado33C = mysqli_query($conn, $insert33C);
                $resultado33D = mysqli_query($conn, $insert33D);
                $resultado33E = mysqli_query($conn, $insert33E);
                
                $delete34 = "DELETE FROM resposta WHERE cpf = '$cpf' AND id_perguntas = (SELECT id_perguntas FROM pergunta WHERE numeracao = 34);"; 
                $d34 = mysqli_query($conn, $delete34);
                
            }else{
                $opt34 = filter_input (INPUT_POST, 'perg34', FILTER_SANITIZE_STRING);
                $insert34 = "INSERT INTO resposta(cpf, resposta, id_perguntas, id_alternativa) VALUES ('$cpf', '$opt34', (SELECT id_perguntas FROM pergunta where numeracao = 34), (SELECT id_alternativa FROM pergunta NATURAL JOIN pergunta_has_alternativa NATURAL JOIN alternativa where opcao = '$opt34' AND numeracao = 34));";   
                $resultado34 = mysqli_query($conn, $insert34);
                
                $delete30 = "DELETE FROM resposta WHERE cpf = '$cpf' AND id_perguntas = (SELECT id_perguntas FROM pergunta WHERE numeracao = 30);"; 
                $d30 = mysqli_query($conn, $delete30);
                $delete31 = "DELETE FROM resposta WHERE cpf = '$cpf' AND id_perguntas = (SELECT id_perguntas FROM pergunta WHERE numeracao = 31);"; 
                $d31 = mysqli_query($conn, $delete31);
                $delete32 = "DELETE FROM resposta WHERE cpf = '$cpf' AND id_perguntas = (SELECT id_perguntas FROM pergunta WHERE numeracao = 32);"; 
                $d32 = mysqli_query($conn, $delete32);
                $delete33 = "DELETE FROM resposta WHERE cpf = '$cpf' AND id_perguntas = (SELECT id_perguntas FROM pergunta WHERE numeracao = 33);"; 
                $d33 = mysqli_query($conn, $delete33);
            }
        }else{            
            $opt35 = filter_input (INPUT_POST, 'perg35', FILTER_SANITIZE_STRING);
            $insert35 = "INSERT INTO resposta(cpf, resposta, id_perguntas, id_alternativa) VALUES ('$cpf', '$opt35', (SELECT id_perguntas FROM pergunta where numeracao = 35), (SELECT id_alternativa FROM pergunta NATURAL JOIN pergunta_has_alternativa NATURAL JOIN alternativa where opcao = '$opt35' AND numeracao = 35));";   
            $resultado35 = mysqli_query($conn, $insert35);
            
            $delete27 = "DELETE FROM resposta WHERE cpf = '$cpf' AND id_perguntas = (SELECT id_perguntas FROM pergunta WHERE numeracao = 27);"; 
            $d27 = mysqli_query($conn, $delete27);
            $delete28 = "DELETE FROM resposta WHERE cpf = '$cpf' AND id_perguntas = (SELECT id_perguntas FROM pergunta WHERE numeracao = 28);"; 
            $d28 = mysqli_query($conn, $delete28);
            $delete29 = "DELETE FROM resposta WHERE cpf = '$cpf' AND id_perguntas = (SELECT id_perguntas FROM pergunta WHERE numeracao = 29);"; 
            $d29 = mysqli_query($conn, $delete29);
        }
    }else{
        $opt35 = filter_input (INPUT_POST, 'perg35', FILTER_SANITIZE_STRING);
        $insert35 = "INSERT INTO resposta(cpf, resposta, id_perguntas, id_alternativa) VALUES ('$cpf', '$opt35', (SELECT id_perguntas FROM pergunta where numeracao = 35), (SELECT id_alternativa FROM pergunta NATURAL JOIN pergunta_has_alternativa NATURAL JOIN alternativa where opcao = '$opt35' AND numeracao = 35));";   
        $resultado35 = mysqli_query($conn, $insert35);
        
        $delete23 = "DELETE FROM resposta WHERE cpf = '$cpf' AND id_perguntas = (SELECT id_perguntas FROM pergunta WHERE numeracao = 23);"; 
        $d23 = mysqli_query($conn, $delete23);
        $delete24 = "DELETE FROM resposta WHERE cpf = '$cpf' AND id_perguntas = (SELECT id_perguntas FROM pergunta WHERE numeracao = 24);"; 
        $d24 = mysqli_query($conn, $delete24);
        $delete25 = "DELETE FROM resposta WHERE cpf = '$cpf' AND id_perguntas = (SELECT id_perguntas FROM pergunta WHERE numeracao = 25);"; 
        $d25 = mysqli_query($conn, $delete25);
        $delete26 = "DELETE FROM resposta WHERE cpf = '$cpf' AND id_perguntas = (SELECT id_perguntas FROM pergunta WHERE numeracao = 26);"; 
        $d26 = mysqli_query($conn, $delete26);
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
	
	if ($opt22 == "A"){
		if ($opt26 == "A"){
            if ($opt29 == "A"){
                header("Location: empresatec.php");
            }else{
                if ($opt29 == "B"){
                    header("Location: lazersaudecidadaniatec.php");
                }
            }
        }else{
            if ($opt26 == "B"){
                header("Location: lazersaudecidadaniatec.php");
            }
        }
	}else{
		if ($opt22 == "B"){
			header("Location: lazersaudecidadaniatec.php");		
		}
	}
?>