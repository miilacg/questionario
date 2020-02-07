<?php
    include 'acessobancosup.php';
    include 'vsup.php';
          
    $testedados_pessoaissup = "SELECT * 
                               FROM resposta
	                           WHERE CPF = '$cpf' AND id_perguntas = (SELECT id_perguntas 
                                                                      FROM pergunta
                                                                      WHERE numeracao = 1);";         
	$verificadados_pessoaissup = mysqli_query($conn, $testedados_pessoaissup);

    if (mysqli_num_rows($verificadados_pessoaissup) < 1){//Se não existir resposta
        header("Location: dados_pessoaissup.php");
    }else{
        $teste_conhecimentosup = "SELECT * 
                                  FROM resposta
	                              WHERE CPF = '$cpf' AND id_perguntas = (SELECT id_perguntas 
                                                                         FROM pergunta 
                                                                         WHERE numeracao = 8)";       
	    $verifica_conhecimentosup = mysqli_query($conn, $teste_conhecimentosup);
        
        if (mysqli_num_rows($verifica_conhecimentosup) < 1){
            header("Location: conhecimentosup.php");
        }else{
            $teste_dadosprofissionaissup = "SELECT * 
                                            FROM resposta
	                                        WHERE CPF = '$cpf' AND id_perguntas = (SELECT id_perguntas 
                                                                                   FROM pergunta 
                                                                                   WHERE numeracao = 32)";	          
	        $verifica_dadosprofissionaissup = mysqli_query($conn, $teste_dadosprofissionaissup);

	        if (mysqli_num_rows($verifica_dadosprofissionaissup) < 1){
                header("Location: dados_profissionaissup.php");
            }else{
                $teste44sup = "SELECT * 
                               FROM resposta
	                           WHERE CPF = '$cpf' AND id_perguntas = (SELECT id_perguntas 
                                                                      FROM pergunta 
                                                                      WHERE numeracao = 44)";	          
	            $verifica44sup = mysqli_query($conn, $teste44sup);
                
                if (mysqli_num_rows($verifica44sup) >= 1){
                    $teste_lazersup = "SELECT * 
                                       FROM resposta
	                                   WHERE CPF = '$cpf' AND id_perguntas = (SELECT id_perguntas 
                                                                              FROM pergunta 
                                                                              WHERE numeracao = 53)";	          
	                $verifica_lazersup = mysqli_query($conn, $teste_lazersup);

                    if (mysqli_num_rows($verifica_lazersup) < 1){
                        header("Location: lazersaudecidadaniasup.php");
                    }else{
                        $teste_satisfacaosup = "SELECT * 
                                                FROM resposta
	                                            WHERE CPF = '$cpf' AND id_perguntas = (SELECT id_perguntas 
                                                                                       FROM pergunta 
                                                                                       WHERE numeracao = 58)";	          
	                    $verifica_satisfacaosup = mysqli_query($conn, $teste_satisfacaosup);

                        if (mysqli_num_rows($verifica_satisfacaosup) < 1){
                            header("Location: satisfacaosup.php");
                        }else{
                            header("Location: fimsup.php");
                        }
                    }
                }else{
                    $teste43sup = "SELECT * 
                                   FROM resposta
	                               WHERE CPF = '$cpf' AND id_perguntas = (SELECT id_perguntas 
                                                                          FROM pergunta 
                                                                          WHERE numeracao = 43)";	          
                    $verifica43sup = mysqli_query($conn, $teste43sup);
                    if (mysqli_num_rows($verifica43sup) < 1){   
                    
                        $teste_empresasup = "SELECT * 
                                             FROM resposta
                                             WHERE CPF = '$cpf' AND id_perguntas = (SELECT id_perguntas 
                                                                                    FROM pergunta 
                                                                                    WHERE numeracao = 45)";	          
                        $verifica_empresasup = mysqli_query($conn, $teste_empresasup);

                        if (mysqli_num_rows($verifica_empresasup) < 1){
                            header("Location: empresasup.php");
                        }else{
                            $teste_mercadosup = "SELECT * 
                                                 FROM resposta
                                                 WHERE CPF = '$cpf' AND id_perguntas = (SELECT id_perguntas 
                                                                                        FROM pergunta 
                                                                                        WHERE numeracao = 47)";	          
                            $verifica_mercadosup = mysqli_query($conn, $teste_mercadosup);

                            if (mysqli_num_rows($verifica_mercadosup) < 1){
                                header("Location: mercadosup.php");
                            }else{
                               $teste_tecnologiasup = "SELECT * 
                                                       FROM resposta
                                                       WHERE CPF = '$cpf' AND id_perguntas = (SELECT id_perguntas 
                                                                                              FROM pergunta 
                                                                                              WHERE numeracao = 50)";
                               $verifica_tecnologiasup = mysqli_query($conn, $teste_tecnologiasup);

                               if (mysqli_num_rows($verifica_tecnologiasup) < 1){
                                   header("Location: tecnologiasup.php");
                                }else{
                                    $teste_lazersup = "SELECT * 
                                                       FROM resposta
                                                       WHERE CPF = '$cpf' AND id_perguntas = (SELECT id_perguntas 
                                                                                              FROM pergunta 
                                                                                              WHERE numeracao = 53)";
                                    $verifica_lazersup = mysqli_query($conn, $teste_lazersup);

                                    if (mysqli_num_rows($verifica_lazersup) < 1){
                                        header("Location: lazersup.php");
                                    }else{
                                        $teste_satisfacaosup = "SELECT * 
                                                                FROM resposta
                                                                WHERE CPF = '$cpf' AND id_perguntas = (SELECT id_perguntas 
                                                                                                       FROM pergunta 
                                                                                                       WHERE numeracao = 58)";	          
                                        $verifica_satisfacaosup = mysqli_query($conn, $teste_satisfacaosup);

                                        if (mysqli_num_rows($verifica_satisfacaosup) < 1){
                                            header("Location: satisfacaosup.php");
                                        }else{
                                            header("Location: fimsup.php");
                                        }
                                    }
                                }                                        
                            }
                        }
                    }
                }
            }
        }
    }

	mysqli_close($conn);
?>	