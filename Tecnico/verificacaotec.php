<?php
    include '../acessobancotec.php';
    include 'vTecnico.php';
          
    $testedados_pessoaistec = "SELECT * 
                               FROM resposta
	                           WHERE CPF = '$cpf' AND id_perguntas = (SELECT id_perguntas 
                                                                      FROM pergunta
                                                                      WHERE numeracao = 1);";         
	$verificadados_pessoaistec = mysqli_query($conn, $testedados_pessoaistec);

    if (mysqli_num_rows($verificadados_pessoaistec) < 1){//Se não existir resposta
        header("Location: dados_pessoaistec.php");
    }else{
        $teste_conhecimentotec = "SELECT * 
                                  FROM resposta
	                              WHERE CPF = '$cpf' AND id_perguntas = (SELECT id_perguntas 
                                                                         FROM pergunta 
                                                                         WHERE numeracao = 8)";       
	    $verifica_conhecimentotec = mysqli_query($conn, $teste_conhecimentotec);
        
        if (mysqli_num_rows($verifica_conhecimentotec) < 1){
            header("Location: conhecimentotec.php");
        }else{
            $teste_dadosprofissionaistec = "SELECT * 
                                            FROM resposta
	                                        WHERE CPF = '$cpf' AND id_perguntas = (SELECT id_perguntas 
                                                                                   FROM pergunta 
                                                                                   WHERE numeracao = 22)";	          
	        $verifica_dadosprofissionaistec = mysqli_query($conn, $teste_dadosprofissionaistec);

	        if (mysqli_num_rows($verifica_dadosprofissionaistec) < 1){
                header("Location: dados_profissionaistec.php");
            }else{
                $teste35tec = "SELECT * 
                               FROM resposta
	                           WHERE CPF = '$cpf' AND id_perguntas = (SELECT id_perguntas 
                                                                      FROM pergunta 
                                                                      WHERE numeracao = 35)";	          
	            $verifica35tec = mysqli_query($conn, $teste35tec);
                
                if (mysqli_num_rows($verifica35tec) >= 1){
                    $teste_lazertec = "SELECT * 
                                       FROM resposta
	                                   WHERE CPF = '$cpf' AND id_perguntas = (SELECT id_perguntas 
                                                                              FROM pergunta 
                                                                              WHERE numeracao = 44)";	          
	                $verifica_lazertec = mysqli_query($conn, $teste_lazertec);

                    if (mysqli_num_rows($verifica_lazertec) < 1){
                        header("Location: lazersaudecidadaniatec.php");
                    }else{
                        $teste_satisfacaotec = "SELECT * 
                                                FROM resposta
	                                            WHERE CPF = '$cpf' AND id_perguntas = (SELECT id_perguntas 
                                                                                       FROM pergunta 
                                                                                       WHERE numeracao = 49)";	          
	                    $verifica_satisfacaotec = mysqli_query($conn, $teste_satisfacaotec);

                        if (mysqli_num_rows($verifica_satisfacaotec) < 1){
                            header("Location: satisfacaotec.php");
                        }else{
                            $_SESSION['msg'] = "respondidoTec";
		                    header("Location: ../index.php");
                        }
                    }
                }else{ //se respondeu a 22 e não respondeu a 35
                    $teste34tec = "SELECT * 
                                   FROM resposta
	                               WHERE CPF = '$cpf' AND id_perguntas = (SELECT id_perguntas 
                                                                          FROM pergunta 
                                                                          WHERE numeracao = 34)";	          
                    $verifica34tec = mysqli_query($conn, $teste34tec);

                    if (mysqli_num_rows($verifica34tec) < 1){   
                        $teste_empresatec = "SELECT * 
                                             FROM resposta
                                             WHERE CPF = '$cpf' AND id_perguntas = (SELECT id_perguntas 
                                                                                    FROM pergunta 
                                                                                    WHERE numeracao = 36)";	          
                        $verifica_empresatec = mysqli_query($conn, $teste_empresatec);

                        if (mysqli_num_rows($verifica_empresatec) < 1){
                            header("Location: empresatec.php");
                        }else{
                            $teste_mercadotec = "SELECT * 
                                                 FROM resposta
                                                 WHERE CPF = '$cpf' AND id_perguntas = (SELECT id_perguntas 
                                                                                        FROM pergunta 
                                                                                        WHERE numeracao = 38)";	          
                            $verifica_mercadotec = mysqli_query($conn, $teste_mercadotec);

                            if (mysqli_num_rows($verifica_mercadotec) < 1){
                                header("Location: mercadotec.php");
                            }else{
                               $teste_tecnologiatec = "SELECT * 
                                                       FROM resposta
                                                       WHERE CPF = '$cpf' AND id_perguntas = (SELECT id_perguntas 
                                                                                              FROM pergunta 
                                                                                              WHERE numeracao = 41)";
                               $verifica_tecnologiatec = mysqli_query($conn, $teste_tecnologiatec);

                               if (mysqli_num_rows($verifica_tecnologiatec) < 1){
                                   header("Location: tecnologiatec.php");
                                }else{
                                    $teste_lazertec = "SELECT * 
                                                       FROM resposta
                                                       WHERE CPF = '$cpf' AND id_perguntas = (SELECT id_perguntas 
                                                                                              FROM pergunta 
                                                                                              WHERE numeracao = 44)";
                                    $verifica_lazertec = mysqli_query($conn, $teste_lazertec);

                                    if (mysqli_num_rows($verifica_lazertec) < 1){
                                        header("Location: lazertec.php");
                                    }else{
                                        $teste_satisfacaotec = "SELECT * 
                                                                FROM resposta
                                                                WHERE CPF = '$cpf' AND id_perguntas = (SELECT id_perguntas 
                                                                                                       FROM pergunta 
                                                                                                       WHERE numeracao = 49)";	          
                                        $verifica_satisfacaotec = mysqli_query($conn, $teste_satisfacaotec);

                                        if (mysqli_num_rows($verifica_satisfacaotec) < 1){
                                            header("Location: satisfacaotec.php");
                                        }else{
                                            $_SESSION['msg'] = "respondidoTec";
		                                    header("Location: ../index.php");
                                        }
                                    }
                                }                                        
                            }
                        }
                    }else{
                        $teste_lazertec = "SELECT * 
                                           FROM resposta
                                           WHERE CPF = '$cpf' AND id_perguntas = (SELECT id_perguntas 
                                                                                  FROM pergunta 
                                                                                  WHERE numeracao = 44)";
                        $verifica_lazertec = mysqli_query($conn, $teste_lazertec);

                        if (mysqli_num_rows($verifica_lazertec) < 1){
                            header("Location: lazertec.php");
                        }else{
                            $teste_satisfacaotec = "SELECT * 
                                                    FROM resposta
                                                    WHERE CPF = '$cpf' AND id_perguntas = (SELECT id_perguntas 
                                                                                           FROM pergunta 
                                                                                           WHERE numeracao = 49)";	          
                            $verifica_satisfacaotec = mysqli_query($conn, $teste_satisfacaotec);

                            if (mysqli_num_rows($verifica_satisfacaotec) < 1){
                                header("Location: satisfacaotec.php");
                            }else{
                                header("Location: fimtec.html");
                            }
                        }                        
                    }
                }
            }
        }
    }

	mysqli_close($conn);
?>	