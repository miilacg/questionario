<?php
    include 'vAdministrador.php';
    include '../acessobancotec.php';
?>

<!DOCTYPE HTML>
<html lang = "pt-br">
    <head>
        <meta charset = "utf-8">
        <meta name = "viewport" content = "initial-scale=1, user-scalable = no">
        
        <link rel = "stylesheet" href = "https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity = "sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin = "anonymous">  
        <link rel = "stylesheet" href = "../estilo.css">
        <link rel = "stylesheet" href = "graficos.css">

        <title>Questionario</title>
                
        <style>	
            h6{
                text-align: left;
                padding: 5px 0px 5px 7px;
            }
            #botao{
                width: 300px;
                height: 50px;
            }
            p{
                font-size: 1vw;
                padding: 0px 0px 5px 7px;
            }
        </style>
	</head>	

	<body>
        <br>
        <div class = "corpo">
            <div class = "card text-center">
                <div class = "card-header"> 
                    <br><h1>Análise dos dados</h1><br>
                </div> 	
                
                <div class= "card-body">
                    <?php  
                        $aspas = "\"";
                        $arquivoMedia = "analiseBarraTecnico.txt";
                        $arquivoPizza = "analisePizzaTecnico.txt";
                        $arquivoLinha = "analiseLinhaTecnico.txt";
                        $fileMedia = fopen($arquivoMedia, 'w');  
                        $filePizza = fopen($arquivoPizza, 'w');   
                        $fileLinha = fopen($arquivoLinha, 'w');                   
                        fwrite($fileMedia, "[{");
                        fwrite($filePizza, "[{");
                        fwrite($fileLinha, "[{");

                        for ($questao = 1; $questao < 56; $questao++){  
                            if ($questao == 13 || $questao == 14 || $questao == 15 || $questao == 30 || $questao == 32 || $questao == 38 || $questao == 40 || $questao == 41 || $questao == 42 || $questao == 49 || $questao == 50 || $questao == 55){
                                if($questao == 30){ //cargo por sexo
                                    $selecaoVerificaco = "SELECT questao FROM `pergunta` NATURAL JOIN `resposta` WHERE id_perguntas = '$questao'";
                                    $resultadoVerificaco = mysqli_query($conn, $selecaoVerificaco);
                                    $linhaVerificaco = mysqli_fetch_assoc($resultadoVerificaco);
                                    $totalVerificaco = mysqli_num_rows($resultadoVerificaco);  //calcula quantos dados foram retornados
                                            
                                    if ($totalVerificaco == 0){
                                        $selecaoN = "SELECT questao FROM pergunta where id_perguntas = '$questao';";
                                        $resultadoSelecaoN = mysqli_query($conn, $selecaoN);
                                        $linhaN = mysqli_fetch_assoc($resultadoSelecaoN);
                                        
                                        ?><h5>Cargo X Gênero</h5>
                                        <h6>Essa análise não pode ser feita por falta de respostas.<h6><?php
                                    }else{
                                        fwrite($fileLinha, "\n".$aspas."Tipo".$aspas.": ".$aspas."line".$aspas.",");
                                        fwrite($fileLinha, "\n".$aspas."Id_Pergunta".$aspas.": ".$aspas.$questao.$aspas.",");
                                          
                                        for ($i = 0; $i < 3; $i++){  
                                            $id_alternativa = 0;     
                                            $id_alternativa = 34 + $i;                                                                                                     
                                                
                                            $criarTabela = "CREATE TABLE sexo(cpf varchar(45));";
                                            $resultadoCriacao = mysqli_query($conn, $criarTabela);

                                            $insereTabela = "INSERT INTO sexo(`cpf`) SELECT cpf FROM resposta WHERE id_alternativa = '$id_alternativa';";
                                            $resultadoInsercao = mysqli_query($conn, $insereTabela);

                                            $selecaoConsulta = "SELECT  alternativa, qtd
                                                                FROM(
                                                                    SELECT alternativa, 0 AS qtd 
                                                                    FROM pergunta as perg NATURAL JOIN pergunta_has_alternativa NATURAL JOIN alternativa NATURAL JOIN sexo 
                                                                    WHERE id_perguntas = 30 AND id_alternativa 
                                                                    NOT IN (SELECT id_alternativa FROM resposta NATURAL JOIN sexo WHERE id_perguntas = 30)
                                                                    GROUP BY alternativa
                                                                    UNION  
                                                                    SELECT alternativa, COUNT(*) AS qtd 
                                                                    FROM `resposta` NATURAL JOIN sexo NATURAL JOIN alternativa   
                                                                    WHERE id_perguntas = 30 
                                                                    GROUP BY alternativa
                                                                )Resultado ORDER BY Resultado.alternativa;";
                                            $resultadoConsulta = mysqli_query($conn, $selecaoConsulta);
                                            $linhaConsulta = mysqli_fetch_assoc($resultadoConsulta);
                                            $totalConsulta = mysqli_num_rows($resultadoConsulta);
                                            
                                            $cont = 0;                                                
                                            do {  
                                                //salvando em arrays os dados colhidos do banco
                                                $alternativa[$cont] = $linhaConsulta['alternativa'];
                                                $quantidade[$cont] = $linhaConsulta['qtd'];                                                
                                                $cont ++;
                                            }while($linhaConsulta = mysqli_fetch_assoc($resultadoConsulta)); 

                                            if($id_alternativa == 34){ 
                                                fwrite($fileLinha, "\n".$aspas."Alternativas".$aspas.": [");
                                                for ($j = 0; $j < $totalConsulta; $j++){
                                                    fwrite($fileLinha, $aspas.$alternativa[$j].$aspas);
                                                    if ($j < ($totalConsulta - 1)){
                                                        fwrite($fileLinha, ",");
                                                    }
                                                }
                                                fwrite($fileLinha, "],");

                                                fwrite($fileLinha, "\n".$aspas."Mulher".$aspas.": [");
                                                for ($j = 0; $j < $totalConsulta; $j++){
                                                    fwrite($fileLinha, $aspas.$quantidade[$j].$aspas);
                                                    if ($j < ($totalConsulta - 1)){
                                                        fwrite($fileLinha, ",");
                                                    }
                                                }
                                                fwrite($fileLinha, "],");                                                    
                                            }else{
                                                if($id_alternativa == 35){     
                                                    fwrite($fileLinha, "\n".$aspas."Homem".$aspas.": [");
                                                    for ($j = 0; $j < $totalConsulta; $j++){
                                                        fwrite($fileLinha, $aspas.$quantidade[$j].$aspas);
                                                        if ($j < ($totalConsulta - 1)){
                                                            fwrite($fileLinha, ",");
                                                        }
                                                    }
                                                    fwrite($fileLinha, "],");
                                                }else{
                                                    fwrite($fileLinha, "\n".$aspas."naoInformar".$aspas.": [");                                                    
                                                    for ($j = 0; $j < $totalConsulta; $j++){
                                                        fwrite($fileLinha, $aspas.$quantidade[$j].$aspas);
                                                        if ($j < ($totalConsulta - 1)){
                                                            fwrite($fileLinha, ",");
                                                        }
                                                    }
                                                    fwrite($fileLinha, "]\n},\n{");
                                                }
                                            }   

                                            $deletaTabela = "DROP TABLE sexo;";
                                            $resultadoExclusão = mysqli_query($conn, $deletaTabela);                                                 
                                        }                                                                                                 
                                    } 
                                    
                                    ?>
                                        <h5>Cargo X Gênero</h5>
                                        <canvas class = "grafico" id = "grafico<?php echo $questao;?>"></canvas>
                                    <?php
                                }else{    
                                    if ($questao == 32){ //media salarial geral
                                        $selecaoVerificaco = "SELECT questao FROM `pergunta` NATURAL JOIN `resposta` WHERE id_perguntas = '$questao'";
                                        $resultadoVerificaco = mysqli_query($conn, $selecaoVerificaco);
                                        $linhaVerificaco = mysqli_fetch_assoc($resultadoVerificaco);
                                        $totalVerificaco = mysqli_num_rows($resultadoVerificaco);  //calcula quantos dados foram retornados
                                            
                                        if ($totalVerificaco == 0){
                                            $selecaoN = "SELECT questao FROM pergunta where id_perguntas = '$questao';";
                                            $resultadoSelecaoN = mysqli_query($conn, $selecaoN);
                                            $linhaN = mysqli_fetch_assoc($resultadoSelecaoN);
                                            
                                            ?><h5>Média salarial X Gênero</h5>
                                            <h6>Essa análise não pode ser feita por falta de respostas.<h6><?php
                                        }else{
                                            fwrite($fileMedia, "\n".$aspas."Tipo".$aspas.": ".$aspas."bar".$aspas.",");
                                            fwrite($fileMedia, "\n".$aspas."Id_Pergunta".$aspas.": ".$aspas.$questao.$aspas.",");
                                            
                                            $count = 0;
                                            for ($i = 0; $i < 4; $i++){  
                                                $id_alternativa = 0;                                                   

                                                if($i == 3){ //media dos salarios
                                                    $selecaoConsulta = "SELECT questao, id_perguntas FROM `pergunta` NATURAL JOIN `subpergunta_has_pergunta` WHERE id_perguntas = '$questao'";
                                                    $resultadoConsulta = mysqli_query($conn, $selecaoConsulta);
                                                    $linhaConsulta = mysqli_fetch_assoc($resultadoConsulta);
                                                
                                                    $selecaoMediaSalarial = "SELECT ROUND((SUM(qtd * alternativa)/ SUM(qtd)),2) AS media 
                                                                            FROM( 
                                                                                SELECT opcao AS resposta, alternativa, id_perguntas, id_alternativa, 0 AS qtd 
                                                                                FROM pergunta NATURAL JOIN resposta NATURAL JOIN alternativa 
                                                                                WHERE id_perguntas = '$questao' AND id_alternativa 
                                                                                NOT IN (SELECT id_alternativa FROM resposta WHERE id_perguntas = '$questao')
                                                                                GROUP BY resposta 
                                                                                UNION        
                                                                                SELECT resposta, alternativa, id_perguntas, id_alternativa, qtd     
                                                                                FROM(
                                                                                    SELECT resposta, id_perguntas, 1000 AS alternativa, id_alternativa, COUNT(*) AS qtd
                                                                                    FROM pergunta NATURAL JOIN resposta NATURAL JOIN alternativa 
                                                                                    WHERE id_perguntas = '$questao' AND id_alternativa = 133
                                                                                    GROUP BY resposta
                                                                                    UNION  
                                                                                    SELECT resposta, id_perguntas, 1500 AS alternativa, id_alternativa, COUNT(*) AS qtd 
                                                                                    FROM pergunta NATURAL JOIN resposta NATURAL JOIN alternativa   
                                                                                    WHERE id_perguntas = '$questao' AND id_alternativa = 134 
                                                                                    GROUP BY resposta
                                                                                    UNION 
                                                                                    SELECT resposta, id_perguntas, 3000 AS alternativa, id_alternativa, COUNT(*) AS qtd
                                                                                    FROM pergunta NATURAL JOIN resposta NATURAL JOIN alternativa 
                                                                                    WHERE id_perguntas = '$questao' AND id_alternativa = 135  
                                                                                    GROUP BY resposta
                                                                                    UNION
                                                                                    SELECT resposta, id_perguntas, 5000 AS alternativa, id_alternativa, COUNT(*) AS qtd
                                                                                    FROM pergunta NATURAL JOIN resposta NATURAL JOIN alternativa  
                                                                                    WHERE id_perguntas = '$questao' AND id_alternativa = 136 
                                                                                    GROUP BY resposta
                                                                                    UNION
                                                                                    SELECT resposta, id_perguntas, 6000 AS alternativa, id_alternativa, COUNT(*) AS qtd 
                                                                                    FROM pergunta NATURAL JOIN resposta NATURAL JOIN alternativa   
                                                                                    WHERE id_perguntas = '$questao' AND id_alternativa = 137 
                                                                                    GROUP BY resposta
                                                                                ) AS Media 
                                                                            )AS Resultado ORDER BY Resultado.resposta;"; 
                                    
                                                    $resultadoMediaSalarial = mysqli_query($conn, $selecaoMediaSalarial);
                                                    $linhaMediaSalarial = mysqli_fetch_assoc($resultadoMediaSalarial);
                                                    $mediaSalario = $linhaMediaSalarial['media'];

                                                    $mediaSalarial[$count] = $mediaSalario;
                                                    $alternativa[$count] = "Media Geral";
                                                }else{    
                                                    $id_alternativa = 34 + $i;                                                     
                                                    
                                                    $criarTabela = "CREATE TABLE sexo(cpf varchar(45));";
                                                    $resultadoCriacao = mysqli_query($conn, $criarTabela);

                                                    $insereTabela = "INSERT INTO sexo(`cpf`) SELECT cpf FROM resposta WHERE id_alternativa = '$id_alternativa';";
                                                    $resultadoInsercao = mysqli_query($conn, $insereTabela);

                                                    $selecaoConsulta = "SELECT ROUND((SUM(qtd * alternativa)/ SUM(qtd)),2) AS media     
                                                                        FROM(
                                                                            SELECT resposta, id_perguntas, 1000 AS alternativa, id_alternativa, COUNT(*) AS qtd
                                                                            FROM `resposta` natural join sexo NATURAL JOIN alternativa 
                                                                            WHERE id_perguntas = '$questao' AND id_alternativa = 133
                                                                            GROUP BY resposta
                                                                            UNION  
                                                                            SELECT resposta, id_perguntas, 1500 AS alternativa, id_alternativa, COUNT(*) AS qtd 
                                                                            FROM `resposta` natural join sexo NATURAL JOIN alternativa   
                                                                            WHERE id_perguntas = '$questao' AND id_alternativa = 134 
                                                                            GROUP BY resposta
                                                                            UNION 
                                                                            SELECT resposta, id_perguntas, 3000 AS alternativa, id_alternativa, COUNT(*) AS qtd
                                                                            FROM `resposta` natural join sexo NATURAL JOIN alternativa 
                                                                            WHERE id_perguntas = '$questao' AND id_alternativa = 135  
                                                                            GROUP BY resposta
                                                                            UNION
                                                                            SELECT resposta, id_perguntas, 5000 AS alternativa, id_alternativa, COUNT(*) AS qtd
                                                                            FROM `resposta` natural join sexo NATURAL JOIN alternativa  
                                                                            WHERE id_perguntas = '$questao' AND id_alternativa = 136 
                                                                            GROUP BY resposta
                                                                            UNION
                                                                            SELECT resposta, id_perguntas, 6000 AS alternativa, id_alternativa, COUNT(*) AS qtd 
                                                                            FROM `resposta` natural join sexo NATURAL JOIN alternativa   
                                                                            WHERE id_perguntas = '$questao' AND id_alternativa = 137 
                                                                            GROUP BY resposta
                                                                        )AS Resultado ORDER BY Resultado.resposta;";
                                                    $resultadoConsulta = mysqli_query($conn, $selecaoConsulta);
                                                    $linhaConsulta = mysqli_fetch_assoc($resultadoConsulta);
                                                    $mediaSalario = $linhaConsulta['media'];
                                                    
                                                    if($mediaSalario != 0){    
                                                        //salvando em arrays os dados colhidos do banco
                                                        if($id_alternativa == 34){//Mulher  
                                                            $mediaSalarial[$count] = $mediaSalario;
                                                            $alternativa[$count] = "Mulher";                                                                                                                
                                                        }else{                                                        
                                                            if($id_alternativa == 35){//homem
                                                                $mediaSalarial[$count] = $mediaSalario;
                                                                $alternativa[$count] = "Homem";                                                          
                                                            }else{
                                                                $mediaSalarial[$count] = $mediaSalario;
                                                                $alternativa[$count] = "Preferiu não informar o sexo";                                                          
                                                            }
                                                        } 
                                                        $count++;
                                                    }                                                     
                                                }   
                                                $deletaTabela = "DROP TABLE sexo;";
                                                $resultadoExclusão = mysqli_query($conn, $deletaTabela);                                                   
                                            }                                                                          
                                                                                    
                                            fwrite($fileMedia, "\n".$aspas."Alternativas".$aspas.": [");
                                            for ($j = 0; $j <= $count; $j++){
                                                fwrite($fileMedia, $aspas.$alternativa[$j].$aspas);
                                                if ($j < $count){
                                                    fwrite($fileMedia, ",");
                                                }
                                            }
                                            fwrite($fileMedia, "],");
            
                                            fwrite($fileMedia, "\n".$aspas."Media".$aspas.": [");
                                            for ($j = 0; $j <= $count; $j++){
                                                fwrite($fileMedia, $aspas.$mediaSalarial[$j].$aspas);
                                                if ($j < $count){
                                                    fwrite($fileMedia, ",");
                                                }
                                            }
                                            fwrite($fileMedia, "]\n},\n{");     
                                            
                                            ?>
                                                <h5>Média salarial X Gênero</h5>
                                                <canvas class = "grafico" id = "grafico<?php echo $questao;?>"></canvas>
                                            <?php

                                            ?><p>Obs: para esse calculo foi considerado R$1000,00 para salários abaixo de R$1000,00, 
                                                R$1500,00 para salários entre R$1000,00 e R$2000,00,
                                                R$3000,00 para salários entre R$2000,00 e R$4000,00,
                                                R$5000,00 para salários entre R$4000,00 e R$6000,00 e 
                                                R$6000,00 para salários acima de R$6000,00.
                                            </p><?php 
                                        }
                                    }else{
                                        if ($questao == 40){
                                            $selecaoVerificaco = "SELECT questao FROM `pergunta` NATURAL JOIN `resposta` WHERE id_perguntas = '$questao'";
                                            $resultadoVerificaco = mysqli_query($conn, $selecaoVerificaco);
                                            $linhaVerificaco = mysqli_fetch_assoc($resultadoVerificaco);
                                            $totalVerificaco = mysqli_num_rows($resultadoVerificaco);  //calcula quantos dados foram retornados
                                            
                                            if ($totalVerificaco == 0){
                                                $selecaoN = "SELECT questao FROM pergunta where id_perguntas = '$questao';";
                                                $resultadoSelecaoN = mysqli_query($conn, $selecaoN);
                                                $linhaN = mysqli_fetch_assoc($resultadoSelecaoN);
                                                
                                                ?><h5>Frequência de utilização das disciplinas no mercado de trabalho</h5>
                                                <h6>Essa análise não pode ser feita por falta de respostas.<h6><?php
                                            }else{
                                                $selecaoConsulta = "SELECT questao, id_perguntas FROM `pergunta` NATURAL JOIN `subpergunta_has_pergunta` WHERE id_perguntas = '$questao'";
                                                $resultadoConsulta = mysqli_query($conn, $selecaoConsulta);
                                                $linhaConsulta = mysqli_fetch_assoc($resultadoConsulta);
                                                $totalConsulta = mysqli_num_rows($resultadoConsulta);  //calcula quantos dados foram retornados
                
                                                ?><h5>Frequência de utilização das disciplinas no mercado de trabalho<?php
            
                                                $contConsulta = 26;            
                                                $i = 0;
                                                do { 
                                                    $selecaoMedia = "SELECT subquestao, id_subpergunta, id_perguntas, (SUM(qtd * alternativa)/ SUM(qtd)) AS media FROM( 
                                                                        SELECT opcao AS resposta, alternativa, subquestao, id_subpergunta, id_perguntas, 0 AS qtd 
                                                                        FROM pergunta NATURAL JOIN resposta NATURAL JOIN alternativa NATURAL JOIN subpergunta 
                                                                        WHERE id_perguntas = 40 AND id_subpergunta = '$contConsulta' AND id_alternativa 
                                                                        NOT IN (SELECT id_alternativa FROM resposta WHERE id_perguntas = 40 AND id_subpergunta = '$contConsulta')
                                                                        GROUP BY resposta 
                                                                        UNION        
                                                                        SELECT resposta, alternativa, subquestao, id_subpergunta, id_perguntas, qtd     
                                                                        FROM( /*convertendo a resposta para numero*/
                                                                            SELECT resposta, subquestao, id_subpergunta, id_perguntas, 2 AS alternativa, COUNT(*) AS qtd
                                                                            FROM pergunta NATURAL JOIN resposta NATURAL JOIN alternativa NATURAL JOIN subpergunta  
                                                                            WHERE id_perguntas = 40 AND id_alternativa = 185 AND id_subpergunta = '$contConsulta'
                                                                            GROUP BY resposta
                                                                            UNION  
                                                                            SELECT resposta, subquestao, id_subpergunta, id_perguntas, 3 AS alternativa, COUNT(*) AS qtd 
                                                                            FROM pergunta NATURAL JOIN resposta NATURAL JOIN alternativa NATURAL JOIN subpergunta   
                                                                            WHERE id_perguntas = 40 AND id_alternativa = 184 AND id_subpergunta = '$contConsulta'
                                                                            GROUP BY resposta
                                                                            UNION 
                                                                            SELECT resposta, subquestao, id_subpergunta, id_perguntas, 4 AS alternativa, COUNT(*) AS qtd
                                                                            FROM pergunta NATURAL JOIN resposta NATURAL JOIN alternativa NATURAL JOIN subpergunta 
                                                                            WHERE id_perguntas = 40 AND id_alternativa = 183 AND id_subpergunta = '$contConsulta'
                                                                            GROUP BY resposta
                                                                            UNION
                                                                            SELECT resposta, subquestao, id_subpergunta, id_perguntas, 5 AS alternativa, COUNT(*) AS qtd
                                                                            FROM pergunta NATURAL JOIN resposta NATURAL JOIN alternativa NATURAL JOIN subpergunta  
                                                                            WHERE id_perguntas = 40 AND id_alternativa = 182 AND id_subpergunta = '$contConsulta'
                                                                            GROUP BY resposta
                                                                            UNION
                                                                            SELECT resposta, subquestao, id_subpergunta, id_perguntas, 1 AS alternativa, COUNT(*) AS qtd 
                                                                            FROM pergunta NATURAL JOIN resposta NATURAL JOIN alternativa NATURAL JOIN subpergunta   
                                                                            WHERE id_perguntas = 40 AND id_alternativa = 186 AND id_subpergunta = '$contConsulta'
                                                                            GROUP BY resposta
                                                                        )AS Media GROUP BY resposta 
                                                                    )AS Resultado ORDER BY Resultado.resposta;"; 
                
                                                    $resultadoMedia = mysqli_query($conn, $selecaoMedia);
                                                    $linhaMedia = mysqli_fetch_assoc($resultadoMedia);
                                                    $totalMedia = mysqli_num_rows($resultadoMedia);  
                                                    
                                                    if ($i < $totalConsulta) {
                                                        $subPergunta[$i] = $linhaMedia['subquestao'];
                                                        $mediaSubPergunta[$i] = $linhaMedia['media'];
                                                        $i++;
                                                    }   
                
                                                    if (count($subPergunta) == $totalConsulta){
                                                        //ordenacao do vetor usando selecao
                                                        for ($i = 0; $i < ($totalConsulta - 1); $i++){ 
                                                            $menor = $i; 
                                                            for ($j = ($i + 1); $j < $totalConsulta; $j++){ 
                                                                if($mediaSubPergunta[$j] > $mediaSubPergunta[$menor]) { 
                                                                    $menor = $j; 
                                                                } 
                                                            } 
                                                            if ($i != $menor){ 
                                                                $auxValor = $mediaSubPergunta[$i]; 
                                                                $auxPergunta = $subPergunta[$i];
                                                                $mediaSubPergunta[$i] = $mediaSubPergunta[$menor]; 
                                                                $subPergunta[$i] = $subPergunta[$menor];
                                                                $mediaSubPergunta[$menor] = $auxValor; 
                                                                $subPergunta[$menor] = $auxPergunta;
                                                            } 
                                                        }

                                                        fwrite($fileMedia, "\n".$aspas."Id_Pergunta".$aspas.":".$aspas.$linhaMedia['id_perguntas'].$aspas.",");
                                                        fwrite($fileMedia, "\n".$aspas."Alternativas".$aspas.": [");
                                                        for ($i = 0; $i < $totalConsulta; $i++){
                                                            fwrite($fileMedia, $aspas.$subPergunta[$i].$aspas);
                                                            if ($i < $totalConsulta - 1){
                                                                fwrite($fileMedia, ",");
                                                            }
                                                        }
                                                        fwrite($fileMedia, "],");
                    
                                                        fwrite($fileMedia, "\n".$aspas."Media".$aspas.": [");
                                                        for ($i = 0; $i < $totalConsulta; $i++){
                                                            $media = round($mediaSubPergunta[$i], 3); //arredondamento para 3 casas decimais
                                                            fwrite($fileMedia, $aspas.$media.$aspas);
                                                            if ($i < $totalConsulta - 1){
                                                                fwrite($fileMedia, ",");
                                                            }
                                                        }
                                                        fwrite($fileMedia, "]\n}"); 
                
                                                        $subPergunta = array(); //limpar array para reiniciar a contagem do tamanho
                
                                                        ?>
                                                            <canvas class = "grafico" id = "grafico<?php echo $questao;?>"></canvas>
                                                        <?php
                                                    }
                
                                                    if ($contConsulta == 38){
                                                        $contConsulta = 40;
                                                    }else{
                                                        $contConsulta++;
                                                    }    
                                                }while($linhaMedia = mysqli_fetch_assoc($resultadoConsulta)); 
                                            }
                                        }else{
                                            if ($questao == 55){
                                                $selecaoVerificaco = "SELECT questao FROM `pergunta` NATURAL JOIN `resposta` WHERE id_perguntas = '$questao'";
                                                $resultadoVerificaco = mysqli_query($conn, $selecaoVerificaco);
                                                $linhaVerificaco = mysqli_fetch_assoc($resultadoVerificaco);
                                                $totalVerificaco = mysqli_num_rows($resultadoVerificaco);  //calcula quantos dados foram retornados
                                                
                                                if ($totalVerificaco == 0){
                                                    $selecaoN = "SELECT questao FROM pergunta where id_perguntas = '$questao';";
                                                    $resultadoSelecaoN = mysqli_query($conn, $selecaoN);
                                                    $linhaN = mysqli_fetch_assoc($resultadoSelecaoN);
                                                    
                                                    ?><h5>Grau de satisfação com as estruturas da instituição</h5>
                                                    <h6>Essa análise não pode ser feita por falta de respostas.<h6><?php
                                                }else{
                                                    $selecaoConsulta = "SELECT questao, id_perguntas FROM `pergunta` NATURAL JOIN `subpergunta_has_pergunta` WHERE id_perguntas = 55";
                                                    $resultadoConsulta = mysqli_query($conn, $selecaoConsulta);
                                                    $linhaConsulta = mysqli_fetch_assoc($resultadoConsulta);
                                                    $totalConsulta = mysqli_num_rows($resultadoConsulta);  //calcula quantos dados foram retornados
                    
                                                    ?><h5>Grau de satisfação com as estruturas da instituição</h5><?php
                
                                                    $contConsulta = 103;                
                                                    $i = 0;
                                                    do { 
                                                        $selecaoMedia = "SELECT subquestao, id_subpergunta, id_perguntas, (SUM(qtd * alternativa)/ SUM(qtd)) AS media FROM( 
                                                                            SELECT opcao AS resposta, alternativa, subquestao, id_subpergunta, id_perguntas, 0 AS qtd 
                                                                            FROM pergunta NATURAL JOIN resposta NATURAL JOIN alternativa NATURAL JOIN subpergunta 
                                                                            WHERE id_perguntas = 55 AND id_subpergunta = '$contConsulta' AND id_alternativa 
                                                                            NOT IN (SELECT id_alternativa FROM resposta WHERE id_perguntas = 55 AND id_subpergunta = '$contConsulta')
                                                                            GROUP BY resposta 
                                                                            UNION        
                                                                            SELECT resposta, alternativa, subquestao, id_subpergunta, id_perguntas, qtd     
                                                                            FROM( /*convertendo a resposta para numero*/
                                                                                SELECT resposta, subquestao, id_subpergunta, id_perguntas, 2 AS alternativa, COUNT(*) AS qtd
                                                                                FROM pergunta NATURAL JOIN resposta NATURAL JOIN alternativa NATURAL JOIN subpergunta  
                                                                                WHERE id_perguntas = 55 AND id_alternativa = 194 AND id_subpergunta = '$contConsulta'
                                                                                GROUP BY resposta
                                                                                UNION  
                                                                                SELECT resposta, subquestao, id_subpergunta, id_perguntas, 3 AS alternativa, COUNT(*) AS qtd 
                                                                                FROM pergunta NATURAL JOIN resposta NATURAL JOIN alternativa NATURAL JOIN subpergunta   
                                                                                WHERE id_perguntas = 55 AND id_alternativa = 198 AND id_subpergunta = '$contConsulta'
                                                                                GROUP BY resposta
                                                                                UNION 
                                                                                SELECT resposta, subquestao, id_subpergunta, id_perguntas, 4 AS alternativa, COUNT(*) AS qtd
                                                                                FROM pergunta NATURAL JOIN resposta NATURAL JOIN alternativa NATURAL JOIN subpergunta 
                                                                                WHERE id_perguntas = 55 AND id_alternativa = 196 AND id_subpergunta = '$contConsulta'
                                                                                GROUP BY resposta
                                                                                UNION
                                                                                SELECT resposta, subquestao, id_subpergunta, id_perguntas, 5 AS alternativa, COUNT(*) AS qtd
                                                                                FROM pergunta NATURAL JOIN resposta NATURAL JOIN alternativa NATURAL JOIN subpergunta  
                                                                                WHERE id_perguntas = 55 AND id_alternativa = 197 AND id_subpergunta = '$contConsulta'
                                                                                GROUP BY resposta
                                                                                UNION
                                                                                SELECT resposta, subquestao, id_subpergunta, id_perguntas, 1 AS alternativa, COUNT(*) AS qtd 
                                                                                FROM pergunta NATURAL JOIN resposta NATURAL JOIN alternativa NATURAL JOIN subpergunta   
                                                                                WHERE id_perguntas = 55 AND id_alternativa = 204 AND id_subpergunta = '$contConsulta'
                                                                                GROUP BY resposta
                                                                            )AS Media GROUP BY resposta 
                                                                        )AS Resultado ORDER BY Resultado.resposta;"; 

                                                        $resultadoMedia = mysqli_query($conn, $selecaoMedia);
                                                        $linhaMedia = mysqli_fetch_assoc($resultadoMedia);
                                                        $totalMedia = mysqli_num_rows($resultadoMedia);  
                                                        
                                                        if ($i < $totalConsulta) {
                                                            $subPergunta[$i] = $linhaMedia['subquestao'];
                                                            $mediaSubPergunta[$i] = $linhaMedia['media'];
                                                            $i++;
                                                        }   
                    
                                                        if (count($subPergunta) == $totalConsulta){   
                                                            fwrite($fileLinha, ",\n{\n".$aspas."Tipo".$aspas.": ".$aspas."line".$aspas.",");
                                                            fwrite($fileLinha, "\n".$aspas."Id_Pergunta".$aspas.":".$aspas.$linhaMedia['id_perguntas'].$aspas.",");
                                                            fwrite($fileLinha, "\n".$aspas."Alternativas".$aspas.": [");
                                                            for ($i = 0; $i < $totalConsulta; $i++){
                                                                fwrite($fileLinha, $aspas.$subPergunta[$i].$aspas);
                                                                if ($i < $totalConsulta - 1){
                                                                    fwrite($fileLinha, ",");
                                                                }
                                                            }
                                                            fwrite($fileLinha, "],");
                        
                                                            fwrite($fileLinha, "\n".$aspas."Media".$aspas.": [");
                                                            for ($i = 0; $i < $totalConsulta; $i++){
                                                                $media = round($mediaSubPergunta[$i], 3); //arredondamento para 3 casas decimais
                                                                fwrite($fileLinha, $aspas.$media.$aspas);
                                                                if ($i < $totalConsulta - 1){
                                                                    fwrite($fileLinha, ",");
                                                                }
                                                            }
                                                            fwrite($fileLinha, "]\n}");
                    
                                                            $subPergunta = array(); //limpar array para reiniciar a contagem do tamanho
                    
                                                            ?>
                                                                <canvas class = "grafico" id = "grafico<?php echo $questao;?>"></canvas>
                                                            <?php
                                                        }   

                                                        $contConsulta++;
                                                                
                                                    }while($linhaMedia = mysqli_fetch_assoc($resultadoConsulta)); 
                                                }
                                            }else{
                                                if ($questao == 13 || $questao == 14 || $questao == 15){
                                                    $selecaoVerificaco = "SELECT questao FROM `pergunta` NATURAL JOIN `resposta` WHERE id_perguntas = '$questao'";
                                                    $resultadoVerificaco = mysqli_query($conn, $selecaoVerificaco);
                                                    $linhaVerificaco = mysqli_fetch_assoc($resultadoVerificaco);
                                                    $totalVerificaco = mysqli_num_rows($resultadoVerificaco);  //calcula quantos dados foram retornados
                                                    
                                                    if ($totalVerificaco == 0){
                                                        $selecaoN = "SELECT questao FROM pergunta where id_perguntas = '$questao';";
                                                        $resultadoSelecaoN = mysqli_query($conn, $selecaoN);
                                                        $linhaN = mysqli_fetch_assoc($resultadoSelecaoN);
                                                        
                                                        if ($questao == 13){
                                                            ?><h5>Média do nível de leitura por língua estrangeira<h5><?php
                                                        }else{
                                                            if ($questao == 14){
                                                                ?><h5>Média do nível de fala por língua estrangeira<h5><?php
                                                            }else{
                                                                ?><h5>Média do nível de escrita por língua estrangeira<h5><?php
                                                            }
                                                        }
                                                        ?><h6>Essa análise não pode ser feita por falta de respostas.<h6><?php
                                                    }else{
                                                        $selecaoConsulta = "SELECT questao, id_perguntas FROM `pergunta` NATURAL JOIN `subpergunta_has_pergunta` WHERE id_perguntas = '$questao'";
                                                        $resultadoConsulta = mysqli_query($conn, $selecaoConsulta);
                                                        $linhaConsulta = mysqli_fetch_assoc($resultadoConsulta);
                                                        $totalConsulta = mysqli_num_rows($resultadoConsulta);  //calcula quantos dados foram retornados
                        
                                                        if ($questao == 13){
                                                            ?><h5>Média do nível de leitura por língua estrangeira<h5><?php
                                                        }else{
                                                            if ($questao == 14){
                                                                ?><h5>Média do nível de fala por língua estrangeira<h5><?php
                                                            }else{
                                                                ?><h5>Média do nível de escrita por língua estrangeira<h5><?php
                                                            }
                                                        }

                                                        $contConsulta = 1;
                        
                                                        $i = 0;
                                                        do { 
                                                            $selecaoMedia = "SELECT subquestao, id_subpergunta, id_perguntas, (SUM(qtd * alternativa)/ SUM(qtd)) AS media FROM( 
                                                                                SELECT opcao AS resposta, alternativa, subquestao, id_subpergunta, id_perguntas, 0 AS qtd 
                                                                                FROM pergunta NATURAL JOIN resposta NATURAL JOIN alternativa NATURAL JOIN subpergunta 
                                                                                WHERE id_perguntas = '$questao' AND id_subpergunta = '$contConsulta' AND id_alternativa 
                                                                                NOT IN (SELECT id_alternativa FROM resposta WHERE id_perguntas = '$questao' AND id_subpergunta = '$contConsulta')
                                                                                GROUP BY resposta 
                                                                                UNION        
                                                                                SELECT resposta, alternativa, subquestao, id_subpergunta, id_perguntas, qtd     
                                                                                FROM(                                                                             
                                                                                    SELECT resposta, subquestao, id_subpergunta, id_perguntas, 0 AS alternativa, COUNT(*) AS qtd 
                                                                                    FROM pergunta NATURAL JOIN resposta NATURAL JOIN alternativa NATURAL JOIN subpergunta   
                                                                                    WHERE id_perguntas = '$questao' AND id_alternativa = 83 AND id_subpergunta = '$contConsulta'
                                                                                    GROUP BY resposta
                                                                                    UNION
                                                                                    SELECT resposta, subquestao, id_subpergunta, id_perguntas, 1 AS alternativa, COUNT(*) AS qtd
                                                                                    FROM pergunta NATURAL JOIN resposta NATURAL JOIN alternativa NATURAL JOIN subpergunta  
                                                                                    WHERE id_perguntas = '$questao' AND id_alternativa = 84 AND id_subpergunta = '$contConsulta'
                                                                                    GROUP BY resposta
                                                                                    UNION  
                                                                                    SELECT resposta, subquestao, id_subpergunta, id_perguntas, 2 AS alternativa, COUNT(*) AS qtd 
                                                                                    FROM pergunta NATURAL JOIN resposta NATURAL JOIN alternativa NATURAL JOIN subpergunta   
                                                                                    WHERE id_perguntas = '$questao' AND id_alternativa = 85 AND id_subpergunta = '$contConsulta'
                                                                                    GROUP BY resposta
                                                                                    UNION 
                                                                                    SELECT resposta, subquestao, id_subpergunta, id_perguntas, 3 AS alternativa, COUNT(*) AS qtd
                                                                                    FROM pergunta NATURAL JOIN resposta NATURAL JOIN alternativa NATURAL JOIN subpergunta 
                                                                                    WHERE id_perguntas = '$questao' AND id_alternativa = 86 AND id_subpergunta = '$contConsulta'
                                                                                    GROUP BY resposta                                            
                                                                                )AS Media GROUP BY resposta 
                                                                            )AS Resultado ORDER BY Resultado.resposta;"; 

                                                            $resultadoMedia = mysqli_query($conn, $selecaoMedia);
                                                            $linhaMedia = mysqli_fetch_assoc($resultadoMedia);
                                                            $totalMedia = mysqli_num_rows($resultadoMedia);  
                                                            
                                                            if ($i < $totalConsulta) {
                                                                $subPergunta[$i] = $linhaMedia['subquestao'];
                                                                $mediaSubPergunta[$i] = $linhaMedia['media'];
                                                                $i++;
                                                            }   
                        
                                                            if (count($subPergunta) == $totalConsulta){
                                                                //ordenacao do vetor usando selecao
                                                                for ($i = 0; $i < ($totalConsulta - 1); $i++){ 
                                                                    $menor = $i; 
                                                                    for ($j = ($i + 1); $j < $totalConsulta; $j++){ 
                                                                        if($subPergunta[$j] < $subPergunta[$menor]) { 
                                                                            $menor = $j; 
                                                                        } 
                                                                    } 
                                                                    if ($i != $menor){ 
                                                                        $auxValor = $mediaSubPergunta[$i]; 
                                                                        $auxPergunta = $subPergunta[$i];
                                                                        $mediaSubPergunta[$i] = $mediaSubPergunta[$menor]; 
                                                                        $subPergunta[$i] = $subPergunta[$menor];
                                                                        $mediaSubPergunta[$menor] = $auxValor; 
                                                                        $subPergunta[$menor] = $auxPergunta;
                                                                    } 
                                                                }
                    
                                                                fwrite($fileLinha, "\n".$aspas."Id_Pergunta".$aspas.":".$aspas.$linhaMedia['id_perguntas'].$aspas.",");
                                                                fwrite($fileLinha, "\n".$aspas."Alternativas".$aspas.": [");
                                                                for ($i = 0; $i < $totalConsulta; $i++){
                                                                    fwrite($fileLinha, $aspas.$subPergunta[$i].$aspas);
                                                                    if ($i < $totalConsulta - 1){
                                                                        fwrite($fileLinha, ",");
                                                                    }
                                                                }
                                                                fwrite($fileLinha, "],");
                            
                                                                fwrite($fileLinha, "\n".$aspas."Media".$aspas.": [");
                                                                for ($i = 0; $i < $totalConsulta; $i++){
                                                                    $media = round($mediaSubPergunta[$i], 3); //arredondamento para 3 casas decimais
                                                                    fwrite($fileLinha, $aspas.$media.$aspas);
                                                                    if ($i < $totalConsulta - 1){
                                                                        fwrite($fileLinha, ",");
                                                                    }
                                                                }
                                                                fwrite($fileLinha, "]\n},\n{");
                        
                                                                $subPergunta = array(); //limpar array para reiniciar a contagem do tamanho
                        
                                                                ?>
                                                                    <canvas class = "grafico" id = "grafico<?php echo $questao;?>"></canvas>
                                                                    
                                                                    <p>Obs: para esse calculo foi considerado 0 para 'Não sei', 
                                                                    1 para 'Básico', 2 para 'Intermediário', 3 para 'Fluente'.</p>
                                                                <?php
                                                            }                                                    
                                                            
                                                            $contConsulta++;
                                                                    
                                                        }while($linhaMedia = mysqli_fetch_assoc($resultadoConsulta));
                                                    }

                                                    if ($questao == 15){ /*media das linguas*/                                            
                                                        $selecaoVerificaco = "SELECT questao FROM `pergunta` NATURAL JOIN `resposta` WHERE id_perguntas = 13 OR id_perguntas = 14 OR id_perguntas = 15";
                                                        $resultadoVerificaco = mysqli_query($conn, $selecaoVerificaco);
                                                        $linhaVerificaco = mysqli_fetch_assoc($resultadoVerificaco);
                                                        $totalVerificaco = mysqli_num_rows($resultadoVerificaco);  //calcula quantos dados foram retornados
                                                        
                                                        if ($totalVerificaco == 0){                                                   
                                                            ?><h5>Média de conhecimento por língua estrangeira</h5>
                                                            <h6>Essa análise não pode ser feita por falta de respostas.<h6><?php
                                                        }else{
                                                            ?><h5>Média de conhecimento por língua estrangeira</h5><?php

                                                            for ($contConsulta = 1; $contConsulta < 5; $contConsulta++){       
                                                                $selecaoMedia = "SELECT subquestao, id_subpergunta, (SUM(qtd * alternativa)/ SUM(qtd)) AS media FROM( 
                                                                                    SELECT opcao AS resposta, alternativa, subquestao, id_subpergunta, 0 AS qtd 
                                                                                    FROM pergunta NATURAL JOIN resposta NATURAL JOIN alternativa NATURAL JOIN subpergunta 
                                                                                    WHERE id_subpergunta = '$contConsulta' AND id_alternativa 
                                                                                    NOT IN (SELECT id_alternativa FROM resposta WHERE id_subpergunta = '$contConsulta')
                                                                                    GROUP BY resposta 
                                                                                    UNION        
                                                                                    SELECT resposta, alternativa, subquestao, id_subpergunta, qtd     
                                                                                    FROM(                                                                             
                                                                                        SELECT resposta, subquestao, id_subpergunta, 0 AS alternativa, COUNT(*) AS qtd 
                                                                                        FROM pergunta NATURAL JOIN resposta NATURAL JOIN alternativa NATURAL JOIN subpergunta   
                                                                                        WHERE id_alternativa = 83 AND id_subpergunta = '$contConsulta'
                                                                                        GROUP BY resposta
                                                                                        UNION
                                                                                        SELECT resposta, subquestao, id_subpergunta, 1 AS alternativa, COUNT(*) AS qtd
                                                                                        FROM pergunta NATURAL JOIN resposta NATURAL JOIN alternativa NATURAL JOIN subpergunta  
                                                                                        WHERE id_alternativa = 84 AND id_subpergunta = '$contConsulta'
                                                                                        GROUP BY resposta
                                                                                        UNION  
                                                                                        SELECT resposta, subquestao, id_subpergunta, 2 AS alternativa, COUNT(*) AS qtd 
                                                                                        FROM pergunta NATURAL JOIN resposta NATURAL JOIN alternativa NATURAL JOIN subpergunta   
                                                                                        WHERE id_alternativa = 85 AND id_subpergunta = '$contConsulta'
                                                                                        GROUP BY resposta
                                                                                        UNION 
                                                                                        SELECT resposta, subquestao, id_subpergunta, 3 AS alternativa, COUNT(*) AS qtd
                                                                                        FROM pergunta NATURAL JOIN resposta NATURAL JOIN alternativa NATURAL JOIN subpergunta 
                                                                                        WHERE id_alternativa = 86 AND id_subpergunta = '$contConsulta'
                                                                                        GROUP BY resposta                                            
                                                                                    )AS Media GROUP BY resposta 
                                                                                )AS Resultado ORDER BY Resultado.resposta;"; 

                                                                $resultadoMedia = mysqli_query($conn, $selecaoMedia);
                                                                $linhaMedia = mysqli_fetch_assoc($resultadoMedia);
                                                                $totalMedia = mysqli_num_rows($resultadoMedia);  
                                                                
                                                                $mediaSubPergunta[$contConsulta - 1] = $linhaMedia['media'];
                                                                                                                        
                                                                if ($contConsulta == 4){                                                            
                                                                    $subPergunta = array("Inglês", "Espanhol", "Italiano", "Fracês");
                                                                    //ordenacao do vetor usando selecao
                                                                    for ($i = 0; $i < 4; $i++){ 
                                                                        $menor = $i; 
                                                                        for ($j = ($i + 1); $j < 4; $j++){ 
                                                                            if($subPergunta[$j] > $subPergunta[$menor]) { 
                                                                                $menor = $j; 
                                                                            } 
                                                                        } 
                                                                        if ($i != $menor){ 
                                                                            $auxValor = $mediaSubPergunta[$i]; 
                                                                            $auxPergunta = $subPergunta[$i];
                                                                            $mediaSubPergunta[$i] = $mediaSubPergunta[$menor]; 
                                                                            $subPergunta[$i] = $subPergunta[$menor];
                                                                            $mediaSubPergunta[$menor] = $auxValor; 
                                                                            $subPergunta[$menor] = $auxPergunta;
                                                                        } 
                                                                    }
                        
                                                                    fwrite($fileLinha, "\n".$aspas."Id_Pergunta".$aspas.":".$aspas.'0'.$aspas.",");
                                                                    fwrite($fileLinha, "\n".$aspas."Alternativas".$aspas.": [");
                                                                    for ($i = 0; $i < 4; $i++){
                                                                        fwrite($fileLinha, $aspas.$subPergunta[$i].$aspas);
                                                                        if ($i < 3){
                                                                            fwrite($fileLinha, ",");
                                                                        }
                                                                    }
                                                                    fwrite($fileLinha, "],");
                                
                                                                    fwrite($fileLinha, "\n".$aspas."Media".$aspas.": [");
                                                                    for ($i = 0; $i < 4; $i++){
                                                                        $media = round($mediaSubPergunta[$i], 3); //arredondamento para 3 casas decimais
                                                                        fwrite($fileLinha, $aspas.$media.$aspas);
                                                                        if ($i < 3){
                                                                            fwrite($fileLinha, ",");
                                                                        }
                                                                    }
                                                                    fwrite($fileLinha, "]\n},\n{");
                            
                                                                    $subPergunta = array(); //limpar array para reiniciar a contagem do tamanho
                                                                        
                                                                    $idiomas = 0;

                                                                    ?>
                                                                        <canvas class = "grafico" id = "grafico<?php echo $idiomas;?>"></canvas>
                                                                        
                                                                        <p>Obs: para esse calculo foi considerado 0 para 'Não sei', 
                                                                        1 para 'Básico', 2 para 'Intermediário', 3 para 'Fluente'.</p>
                                                                    <?php
                                                                }                                    
                                                            }
                                                        }
                                                    }
                                                    
                                                }else{                         
                                                    $selecaoVerificaco = "SELECT questao FROM `pergunta` NATURAL JOIN `resposta` WHERE id_perguntas = '$questao'";
                                                    $resultadoVerificaco = mysqli_query($conn, $selecaoVerificaco);
                                                    $totalVerificaco = mysqli_num_rows($resultadoVerificaco);  //calcula quantos dados foram retornados

                                                    if ($totalVerificaco == 0){
                                                        $selecaoN = "SELECT questao FROM pergunta where id_perguntas = '$questao';";
                                                        $resultadoSelecaoN = mysqli_query($conn, $selecaoN);
                                                        $linhaN = mysqli_fetch_assoc($resultadoSelecaoN);
                                                        
                                                        if ($questao == 38){
                                                            ?><h5>Importância das competências em relação ao mercado de trabalho<h5><?php
                                                        }else{
                                                            if ($questao == 41){
                                                                ?><h5>Frequência de utilização das linguagens de programação no mercado de trabalho</h5><?php
                                                            }else{
                                                                if ($questao == 42){
                                                                    ?><h5>Frequência de utilização dos SGBDs no mercado de trabalho</h5><?php
                                                                }else{
                                                                    if ($questao == 49){
                                                                        ?><h5>Motivação para escolher do curso</h5><?php
                                                                    }else{
                                                                        ?><h5>Motivação para escolher a instituição<h5><?php
                                                                    }
                                                                }                                                        
                                                            } 
                                                        }
                                                        ?><h6>Essa análise não pode ser feita por falta de respostas.<h6><?php
                                                    }else{
                                                        $selecaoConsulta = "SELECT questao, id_perguntas FROM `pergunta` NATURAL JOIN `subpergunta_has_pergunta` WHERE id_perguntas = '$questao'";
                                                        $resultadoConsulta = mysqli_query($conn, $selecaoConsulta);
                                                        $linhaConsulta = mysqli_fetch_assoc($resultadoConsulta);
                                                        $totalConsulta = mysqli_num_rows($resultadoConsulta);  //calcula quantos dados foram retornados

                                                        if ($questao == 38){
                                                            ?><h5>Importância das competências em relação ao mercado de trabalho<h5><?php
                                                        }else{
                                                            if ($questao == 41){
                                                                ?><h5>Frequência de utilização das linguagens de programação no mercado de trabalho</h5><?php
                                                            }else{
                                                                if ($questao == 42){
                                                                    ?><h5>Frequência de utilização dos SGBDs no mercado de trabalho</h5><?php
                                                                }else{
                                                                    if ($questao == 49){
                                                                        ?><h5>Motivação para escolher do curso</h5><?php
                                                                    }else{
                                                                        ?><h5>Motivação para escolher a instituição<h5><?php
                                                                    }
                                                                }                                                        
                                                            } 
                                                        }

                                                        if ($questao == 38){
                                                            $contConsulta = 10;
                                                        }

                                                        if ($questao == 41){
                                                            $contConsulta = 45;
                                                        }

                                                        if ($questao == 42){
                                                            $contConsulta = 71;
                                                        }
                                                        
                                                        if ($questao == 49){
                                                            $contConsulta = 93;
                                                        }
                                                        
                                                        if ($questao == 50){
                                                            $contConsulta = 99;
                                                        }

                                                        $i = 0;
                                                        do { 
                                                            $selecaoMedia = "SELECT subquestao, id_subpergunta, id_perguntas, (SUM(qtd * alternativa)/ SUM(qtd)) AS media 
                                                                            FROM( 
                                                                                SELECT opcao AS resposta, alternativa, subquestao, id_subpergunta, id_perguntas, 0 AS qtd 
                                                                                FROM alternativa NATURAL JOIN subpergunta_has_alternativa NATURAL JOIN subpergunta NATURAL JOIN subpergunta_has_pergunta NATURAL JOIN pergunta 
                                                                                WHERE id_perguntas = '$questao' AND id_subpergunta = '$contConsulta' AND id_alternativa 
                                                                                NOT IN (SELECT id_alternativa FROM resposta WHERE id_perguntas = '$questao' AND id_subpergunta = '$contConsulta')
                                                                                GROUP BY resposta 
                                                                                UNION 
                                                                                SELECT resposta, alternativa, subquestao, id_subpergunta, id_perguntas, count(*) AS qtd 
                                                                                FROM pergunta NATURAL JOIN resposta NATURAL JOIN alternativa NATURAL JOIN subpergunta WHERE id_perguntas = '$questao' AND id_subpergunta = '$contConsulta' 
                                                                                GROUP BY resposta 
                                                                            )AS Resultado ORDER BY Resultado.resposta;"; 

                                                            $resultadoMedia = mysqli_query($conn, $selecaoMedia);
                                                            $linhaMedia = mysqli_fetch_assoc($resultadoMedia);
                                                            $totalMedia = mysqli_num_rows($resultadoMedia);  //calcula quantos dados foram retornados
                                                            
                                                            if ($i < $totalConsulta) {
                                                                $subPergunta[$i] = $linhaMedia['subquestao'];
                                                                $mediaSubPergunta[$i] = $linhaMedia['media'];
                                                                $i++;
                                                            }   

                                                            if (count($subPergunta) == $totalConsulta){
                                                                //ordenacao do vetor usando selecao
                                                                for ($i = 0; $i < ($totalConsulta - 1); $i++){ 
                                                                    $menor = $i; 
                                                                    for ($j = ($i + 1); $j < $totalConsulta; $j++){ 
                                                                        if($subPergunta[$j] < $subPergunta[$menor]) { 
                                                                            $menor = $j; 
                                                                        } 
                                                                    } 
                                                                    if ($i != $menor){ 
                                                                        $auxValor = $mediaSubPergunta[$i]; 
                                                                        $auxPergunta = $subPergunta[$i];
                                                                        $mediaSubPergunta[$i] = $mediaSubPergunta[$menor]; 
                                                                        $subPergunta[$i] = $subPergunta[$menor];
                                                                        $mediaSubPergunta[$menor] = $auxValor; 
                                                                        $subPergunta[$menor] = $auxPergunta;
                                                                    } 
                                                                }

                                                                fwrite($fileLinha, "\n".$aspas."Tipo".$aspas.": ".$aspas."line".$aspas.",");
                                                                fwrite($fileLinha, "\n".$aspas."Id_Pergunta".$aspas.":".$aspas.$linhaMedia['id_perguntas'].$aspas.",");
                                                                fwrite($fileLinha, "\n".$aspas."Alternativas".$aspas.": [");
                                                                for ($i = 0; $i < $totalConsulta; $i++){
                                                                    fwrite($fileLinha, $aspas.$subPergunta[$i].$aspas);
                                                                    if ($i < $totalConsulta - 1){
                                                                        fwrite($fileLinha, ",");
                                                                    }
                                                                }
                                                                fwrite($fileLinha, "],");
                            
                                                                fwrite($fileLinha, "\n".$aspas."Media".$aspas.": [");
                                                                for ($i = 0; $i < $totalConsulta; $i++){
                                                                    $media = round($mediaSubPergunta[$i], 3); //arredondamento para 3 casas decimais
                                                                    fwrite($fileLinha, $aspas.$media.$aspas);
                                                                    if ($i < $totalConsulta - 1){
                                                                        fwrite($fileLinha, ",");
                                                                    }
                                                                }
                                                                
                                                                $teste55 = "SELECT questao FROM `pergunta` NATURAL JOIN `resposta` WHERE id_perguntas = 55;";
                                                                $resultado55 = mysqli_query($conn, $teste55);
                                                                $total55 = mysqli_num_rows($resultado55);  //calcula quantos dados foram retornados

                                                                if ($total55 == 0 && $questao == 50){
                                                                    fwrite($fileLinha, "]\n}");
                                                                }else{
                                                                    fwrite($fileLinha, "]\n},\n{");
                                                                }

                                                                $subPergunta = array(); //limpar array para reiniciar a contagem do tamanho

                                                                ?>
                                                                    <canvas class = "grafico" id = "grafico<?php echo $questao;?>"></canvas>
                                                                <?php
                                                            }

                                                            if ($questao == 41){
                                                                if ($contConsulta == 56){
                                                                    $contConsulta = 58;
                                                                }else{
                                                                    if ($contConsulta == 64){
                                                                        $contConsulta = 66;
                                                                    }else{
                                                                        if ($contConsulta == 66){
                                                                            $contConsulta = 68;
                                                                        }else{
                                                                            $contConsulta++;
                                                                        }
                                                                    }
                                                                }
                                                            }else{
                                                                $contConsulta++;
                                                            }   

                                                        }while($linhaMedia = mysqli_fetch_assoc($resultadoConsulta));     
                                                    }
                                                }
                                            }
                                        }  
                                    }
                                }
                            }else{
                                if ($questao == 1){
                                    $selecaoVerificaco = "SELECT questao FROM `pergunta` NATURAL JOIN `resposta` WHERE id_perguntas = '$questao'";
                                    $resultadoVerificaco = mysqli_query($conn, $selecaoVerificaco);
                                    $linhaVerificaco = mysqli_fetch_assoc($resultadoVerificaco);
                                    $totalVerificaco = mysqli_num_rows($resultadoVerificaco);  //calcula quantos dados foram retornados
                                        
                                    if ($totalVerificaco == 0){
                                        $selecaoN = "SELECT questao FROM pergunta where id_perguntas = '$questao';";
                                        $resultadoSelecaoN = mysqli_query($conn, $selecaoN);
                                        $linhaN = mysqli_fetch_assoc($resultadoSelecaoN);
                                        
                                        ?><h5>Idade dos egressos</h5>
                                        <h6>Essa análise não pode ser feita por falta de respostas.<h6><?php
                                    }else{
                                        $anoAtual = date('Y');

                                        $selecaoConsulta = "SELECT questao, id_perguntas FROM `pergunta` WHERE id_perguntas = '$questao'";
                                        $resultadoConsulta = mysqli_query($conn, $selecaoConsulta);
                                        $linhaConsulta = mysqli_fetch_assoc($resultadoConsulta);
                                        $totalConsulta = mysqli_num_rows($resultadoConsulta);  //calcula quantos dados foram retornados
                        
                                        $selecaoIdade = "SELECT * from(
                                                            SELECT questao, opcao AS resposta, alternativa, 0 AS qtd 
                                                            FROM alternativa NATURAL JOIN pergunta_has_alternativa NATURAL JOIN pergunta 
                                                            WHERE id_perguntas = '$questao' AND id_alternativa 
                                                            NOT IN (SELECT id_alternativa FROM resposta WHERE id_perguntas = '$questao') 
                                                            GROUP BY resposta 
                                                            UNION 
                                                            SELECT questao, resposta, alternativa, count(*) AS qtd 
                                                            FROM pergunta NATURAL JOIN resposta NATURAL JOIN alternativa 
                                                            WHERE id_perguntas = '$questao' 
                                                            GROUP BY resposta 
                                                        )AS Resultado ORDER BY Resultado.resposta;"; 
            
                                        $resultadoIdade = mysqli_query($conn, $selecaoIdade);
                                        $linhaIdade = mysqli_fetch_assoc($resultadoIdade);
                                        $total = mysqli_num_rows($resultadoIdade);

                                        fwrite($filePizza, "\n".$aspas."Tipo".$aspas.": ".$aspas."pie".$aspas.",");
                                        fwrite($filePizza, "\n".$aspas."id_pergunta".$aspas.": ".$aspas.$questao.$aspas.",");                                        

                                        $cont = 0;
                                        do {  
                                            //salvando em arrays os dados colhidos do banco
                                            if ($linhaIdade['resposta'] == 'A'){
                                                $respostas[$cont] = "Mais que ".($anoAtual - 1990);
                                            }else{
                                                $anoNascimento = (int)$linhaIdade['alternativa'];
                                                $respostas[$cont] = $anoAtual - $anoNascimento; 
                                            }

                                            $quantidade[$cont] = $linhaIdade['qtd'];
                                            $cont ++;
                                        }while($linhaIdade = mysqli_fetch_assoc($resultadoIdade));                                      
                                                                                
                                
                                        fwrite($filePizza, "\n".$aspas."Resposta".$aspas.": [");
                                        for ($i = 0; $i < $total; $i++){
                                            fwrite($filePizza, $aspas.$respostas[$i].$aspas);
                                            if ($i < $total - 1){
                                                fwrite($filePizza, ",");
                                            }
                                            
                                            if ($i == 0){
                                                $mediaIdade = 41; 
                                            }else{
                                                $mediaIdade = $mediaIdade + $respostas[$i];
                                            }
                                        }
                                        fwrite($filePizza, "],\n");
                                        
                                        fwrite($filePizza, $aspas."Quantidade".$aspas.": [");
                                        for ($i = 0; $i < $total; $i++){
                                            fwrite($filePizza, $aspas.$quantidade[$i].$aspas);
                                            if ($i < $total - 1){
                                                fwrite($filePizza, ",");
                                            }                                            
                                        }
                                        fwrite($filePizza, "],\n");

                                        $mediaIdade = $mediaIdade/$cont;                                                                                
                                        fwrite($filePizza, $aspas."MediaIdades".$aspas.": ".$aspas.$mediaIdade.$aspas."\n}");

                                        ?>
                                            <h5>Idade dos egressos</h5>
                                            <canvas class = "grafico" id = "grafico<?php echo $questao;?>"></canvas>
                                            <h6>Média da idade dos egressos: <?php echo number_format((float)$mediaIdade, 2, '.', '');?> anos<h6>
                                        <?php
                                    }
                                }else{
                                    if($questao == 51){ //ano de formatura por satisfação com o curso
                                        $selecaoVerificaco = "SELECT questao FROM `pergunta` NATURAL JOIN `resposta` WHERE id_perguntas = '$questao' or id_perguntas = 3";
                                        $resultadoVerificaco = mysqli_query($conn, $selecaoVerificaco);
                                        $linhaVerificaco = mysqli_fetch_assoc($resultadoVerificaco);
                                        $totalVerificaco = mysqli_num_rows($resultadoVerificaco);  //calcula quantos dados foram retornados
                                                
                                        if ($totalVerificaco < 2){
                                            $selecaoN = "SELECT questao FROM pergunta where id_perguntas = '$questao';";
                                            $resultadoSelecaoN = mysqli_query($conn, $selecaoN);
                                            $linhaN = mysqli_fetch_assoc($resultadoSelecaoN);
                                            
                                            ?><h5>Nível de satisfação com o curso X Ano de formatura</h5>
                                            <h6>Essa análise não pode ser feita por falta de respostas.<h6><?php
                                        }else{    
                                            for ($i = 0; $i < 8; $i++){  
                                                $id_alternativa = 0;     
                                                $id_alternativa = 21 + $i;                                                                                                     
                                                    
                                                $criarTabela = "CREATE TABLE ano(cpf varchar(45));";
                                                $resultadoCriacao = mysqli_query($conn, $criarTabela);
    
                                                $insereTabela = "INSERT INTO ano(`cpf`) SELECT cpf FROM resposta WHERE id_alternativa = '$id_alternativa';";
                                                $resultadoInsercao = mysqli_query($conn, $insereTabela);
    
                                                $selecaoAlternativa = "SELECT alternativa FROM alternativa WHERE id_alternativa = '$id_alternativa';";
                                                $resultadoAlternativa = mysqli_query($conn, $selecaoAlternativa);
                                                $linhaAlternativa = mysqli_fetch_assoc($resultadoAlternativa);
    
                                                $selecaoConsulta = "SELECT ROUND((SUM(qtd * alternativa)/ SUM(qtd)),2) AS media 
                                                                    FROM(        
                                                                        SELECT resposta, alternativa, id_perguntas, id_alternativa, qtd     
                                                                        FROM(
                                                                            SELECT resposta, id_perguntas, 1 AS alternativa, id_alternativa, COUNT(*) AS qtd
                                                                            FROM pergunta NATURAL JOIN resposta NATURAL JOIN alternativa natural join ano
                                                                            WHERE id_perguntas = 51 AND id_alternativa = 193
                                                                            GROUP BY resposta
                                                                            UNION  
                                                                            SELECT resposta, id_perguntas, 2 AS alternativa, id_alternativa, COUNT(*) AS qtd 
                                                                            FROM pergunta NATURAL JOIN resposta NATURAL JOIN alternativa   natural join ano
                                                                            WHERE id_perguntas = 51 AND id_alternativa = 194
                                                                            GROUP BY resposta
                                                                            UNION 
                                                                            SELECT resposta, id_perguntas, 3 AS alternativa, id_alternativa, COUNT(*) AS qtd
                                                                            FROM pergunta NATURAL JOIN resposta NATURAL JOIN alternativa natural join ano
                                                                            WHERE id_perguntas = 51 AND id_alternativa = 195
                                                                            GROUP BY resposta
                                                                            UNION
                                                                            SELECT resposta, id_perguntas, 4 AS alternativa, id_alternativa, COUNT(*) AS qtd
                                                                            FROM pergunta NATURAL JOIN resposta NATURAL JOIN alternativa  natural join ano
                                                                            WHERE id_perguntas = 51 AND id_alternativa = 196
                                                                            GROUP BY resposta
                                                                            UNION
                                                                            SELECT resposta, id_perguntas, 5 AS alternativa, id_alternativa, COUNT(*) AS qtd 
                                                                            FROM pergunta NATURAL JOIN resposta NATURAL JOIN alternativa   natural join ano
                                                                            WHERE id_perguntas = 51 AND id_alternativa = 197
                                                                            GROUP BY resposta
                                                                        ) AS Media 
                                                                    )AS Resultado ORDER BY Resultado.resposta";
                                                $resultadoConsulta = mysqli_query($conn, $selecaoConsulta);
                                                $linhaConsulta = mysqli_fetch_assoc($resultadoConsulta);
                                                $totalConsulta = mysqli_num_rows($resultadoConsulta);
                                                                                                
                                                $ano[$i] = $linhaAlternativa['alternativa'];
                                                $mediaSatisfacao[$i] = $linhaConsulta['media'];
                                                                                    
                                                $deletaTabela = "DROP TABLE ano;";
                                                $resultadoExclusão = mysqli_query($conn, $deletaTabela);                                                                                               
                                            } 

                                            $selecaoConsulta = "SELECT ROUND((SUM(qtd * alternativa)/ SUM(qtd)),2) AS media 
                                                                FROM(        
                                                                    SELECT resposta, alternativa, id_perguntas, id_alternativa, qtd     
                                                                    FROM(
                                                                        SELECT resposta, id_perguntas, 1 AS alternativa, id_alternativa, COUNT(*) AS qtd
                                                                        FROM pergunta NATURAL JOIN resposta NATURAL JOIN alternativa 
                                                                        WHERE id_perguntas = 51 AND id_alternativa = 193
                                                                        GROUP BY resposta
                                                                        UNION  
                                                                        SELECT resposta, id_perguntas, 2 AS alternativa, id_alternativa, COUNT(*) AS qtd 
                                                                        FROM pergunta NATURAL JOIN resposta NATURAL JOIN alternativa
                                                                        WHERE id_perguntas = 51 AND id_alternativa = 194
                                                                        GROUP BY resposta
                                                                        UNION 
                                                                        SELECT resposta, id_perguntas, 3 AS alternativa, id_alternativa, COUNT(*) AS qtd
                                                                        FROM pergunta NATURAL JOIN resposta NATURAL JOIN alternativa
                                                                        WHERE id_perguntas = 51 AND id_alternativa = 195
                                                                        GROUP BY resposta
                                                                        UNION
                                                                        SELECT resposta, id_perguntas, 4 AS alternativa, id_alternativa, COUNT(*) AS qtd
                                                                        FROM pergunta NATURAL JOIN resposta NATURAL JOIN alternativa  
                                                                        WHERE id_perguntas = 51 AND id_alternativa = 196
                                                                        GROUP BY resposta
                                                                        UNION
                                                                        SELECT resposta, id_perguntas, 5 AS alternativa, id_alternativa, COUNT(*) AS qtd 
                                                                        FROM pergunta NATURAL JOIN resposta NATURAL JOIN alternativa
                                                                        WHERE id_perguntas = 51 AND id_alternativa = 197
                                                                        GROUP BY resposta
                                                                    ) AS Media 
                                                                )AS Resultado ORDER BY Resultado.resposta";
                                            $resultadoConsulta = mysqli_query($conn, $selecaoConsulta);
                                            $linhaConsulta = mysqli_fetch_assoc($resultadoConsulta);
                                            $totalConsulta = mysqli_num_rows($resultadoConsulta);
                                                 
                                            $mediaGeral = $linhaConsulta['media'];
                                            
                                            fwrite($fileLinha, "\n".$aspas."Tipo".$aspas.": ".$aspas."line".$aspas.",");
                                            fwrite($fileLinha, "\n".$aspas."Id_Pergunta".$aspas.": ".$aspas.$questao.$aspas.",");

                                            fwrite($fileLinha, "\n".$aspas."Alternativas".$aspas.": [");
                                            $contador = 0;
                                            for ($j = 0; $j < 8; $j++){ 
                                                if($mediaSatisfacao[$j] > 0) {
                                                    fwrite($fileLinha, $aspas.$ano[$j].$aspas);                                                
                                                }else{
                                                    $contador = $contador + $j;
                                                } 
                                                
                                                if($mediaSatisfacao[7] > 0){
                                                    if (($j < 7) && ($j != ($contador))){
                                                        fwrite($fileLinha, ",");
                                                    }
                                                }else{
                                                    if (($j < 6) && ($j != ($contador))){
                                                        fwrite($fileLinha, ",");
                                                    } 
                                                }                                                
                                            }
                                            fwrite($fileLinha, "],");
    
                                            fwrite($fileLinha, "\n".$aspas."Respostas".$aspas.": [");
                                            $contador = 0;
                                            for ($j = 0; $j < 8; $j++){
                                                if($mediaSatisfacao[$j] > 0) {
                                                    fwrite($fileLinha, $aspas.$mediaSatisfacao[$j].$aspas);                                                
                                                }else{
                                                    $contador = $contador + $j;
                                                } 
                                                
                                                if($mediaSatisfacao[7] > 0){
                                                    if (($j < 7) && ($j != ($contador))){
                                                        fwrite($fileLinha, ",");
                                                    }
                                                }else{
                                                    if (($j < 6) && ($j != ($contador))){
                                                        fwrite($fileLinha, ",");
                                                    } 
                                                }  
                                            }
                                            fwrite($fileLinha, "],"); 

                                            fwrite($fileLinha, "\n".$aspas."Media".$aspas.": [");
                                            $contador = 0;
                                            for ($j = 0; $j < 8; $j++){
                                                if($mediaSatisfacao[$j] > 0) {
                                                    fwrite($fileLinha, $aspas.$mediaGeral.$aspas);                                                
                                                }else{
                                                    $contador = $contador + $j;
                                                } 
                                                
                                                if($mediaSatisfacao[7] > 0){
                                                    if (($j < 7) && ($j != ($contador))){
                                                        fwrite($fileLinha, ",");
                                                    }
                                                }else{
                                                    if (($j < 6) && ($j != ($contador))){
                                                        fwrite($fileLinha, ",");
                                                    } 
                                                }  
                                            }      
                                            fwrite($fileLinha, "]");                                                       
                                            fwrite($fileLinha, "\n}"); 

                                            ?>
                                                <h5>Nível de satisfação com o curso X Ano de formatura</h5>
                                                <canvas class = "grafico" id = "grafico<?php echo $questao;?>"></canvas>
                                                <p>Obs: para esse calculo foi considerado 1 para péssimo, 
                                                    2 para ruim, 3 regular, 4 bom e 5 ótimo.
                                                </p>
                                            <?php    
                                        }      
                                    }else{
                                        if($questao == 54){ //ano de formatura por satisfação com a instituição
                                            $selecaoVerificaco = "SELECT questao FROM `pergunta` NATURAL JOIN `resposta` WHERE id_perguntas = 55 or id_perguntas = 3";
                                            $resultadoVerificaco = mysqli_query($conn, $selecaoVerificaco);
                                            $linhaVerificaco = mysqli_fetch_assoc($resultadoVerificaco);
                                            $totalVerificaco = mysqli_num_rows($resultadoVerificaco);  //calcula quantos dados foram retornados
                                                                        
                                            if ($totalVerificaco < 2){
                                                $selecaoN = "SELECT questao FROM pergunta where id_perguntas = 55;";
                                                $resultadoSelecaoN = mysqli_query($conn, $selecaoN);
                                                $linhaN = mysqli_fetch_assoc($resultadoSelecaoN);
                                                
                                                ?><h5>Nível de satisfação com a instituição X Ano de formatura</h5>
                                                <h6>Essa análise não pode ser feita por falta de respostas.<h6><?php
                                            }else{    
                                                for ($i = 0; $i < 7; $i++){  
                                                    $id_alternativa = 0;     
                                                    $id_alternativa = 21 + $i;                                                                                                     
                                                        
                                                    $criarTabela = "CREATE TABLE ano(cpf varchar(45));";
                                                    $resultadoCriacao = mysqli_query($conn, $criarTabela);
        
                                                    $insereTabela = "INSERT INTO ano(`cpf`) SELECT cpf FROM resposta WHERE id_alternativa = '$id_alternativa';";
                                                    $resultadoInsercao = mysqli_query($conn, $insereTabela);
        
                                                    $selecaoAlternativa = "SELECT alternativa FROM alternativa WHERE id_alternativa = '$id_alternativa';";
                                                    $resultadoAlternativa = mysqli_query($conn, $selecaoAlternativa);
                                                    $linhaAlternativa = mysqli_fetch_assoc($resultadoAlternativa);
                            
                                                    $selecaoConsulta = "SELECT ROUND((SUM(qtd * alternativa)/ SUM(qtd)),2) AS media 
                                                                        FROM(        
                                                                            SELECT resposta, alternativa, id_perguntas, id_alternativa, qtd     
                                                                            FROM(
                                                                                SELECT resposta, id_perguntas, 1 AS alternativa, id_alternativa, COUNT(*) AS qtd
                                                                                FROM pergunta NATURAL JOIN resposta NATURAL JOIN alternativa natural join ano
                                                                                WHERE id_perguntas = 55 AND id_alternativa = 204
                                                                                GROUP BY resposta
                                                                                UNION  
                                                                                SELECT resposta, id_perguntas, 2 AS alternativa, id_alternativa, COUNT(*) AS qtd 
                                                                                FROM pergunta NATURAL JOIN resposta NATURAL JOIN alternativa   natural join ano
                                                                                WHERE id_perguntas = 55 AND id_alternativa = 1904
                                                                                GROUP BY resposta
                                                                                UNION 
                                                                                SELECT resposta, id_perguntas, 3 AS alternativa, id_alternativa, COUNT(*) AS qtd
                                                                                FROM pergunta NATURAL JOIN resposta NATURAL JOIN alternativa natural join ano
                                                                                WHERE id_perguntas = 55 AND id_alternativa = 198
                                                                                GROUP BY resposta
                                                                                UNION
                                                                                SELECT resposta, id_perguntas, 4 AS alternativa, id_alternativa, COUNT(*) AS qtd
                                                                                FROM pergunta NATURAL JOIN resposta NATURAL JOIN alternativa  natural join ano
                                                                                WHERE id_perguntas = 55 AND id_alternativa = 196
                                                                                GROUP BY resposta
                                                                                UNION
                                                                                SELECT resposta, id_perguntas, 5 AS alternativa, id_alternativa, COUNT(*) AS qtd 
                                                                                FROM pergunta NATURAL JOIN resposta NATURAL JOIN alternativa   natural join ano
                                                                                WHERE id_perguntas = 55 AND id_alternativa = 197
                                                                                GROUP BY resposta
                                                                            ) AS Media 
                                                                        )AS Resultado ORDER BY Resultado.resposta";
                                                    $resultadoConsulta = mysqli_query($conn, $selecaoConsulta);
                                                    $linhaConsulta = mysqli_fetch_assoc($resultadoConsulta);
                                                    $totalConsulta = mysqli_num_rows($resultadoConsulta);
                                                                                                    
                                                    $ano[$i] = $linhaAlternativa['alternativa'];
                                                    $mediaSatisfacao[$i] = $linhaConsulta['media'];
                                                                                        
                                                    $deletaTabela = "DROP TABLE ano;";
                                                    $resultadoExclusão = mysqli_query($conn, $deletaTabela);                                                                                               
                                                } 

                                                $selecaoConsulta = "SELECT ROUND((SUM(qtd * alternativa)/ SUM(qtd)),2) AS media 
                                                                    FROM(        
                                                                        SELECT resposta, alternativa, id_perguntas, id_alternativa, qtd     
                                                                        FROM(
                                                                            SELECT resposta, id_perguntas, 1 AS alternativa, id_alternativa, COUNT(*) AS qtd
                                                                            FROM pergunta NATURAL JOIN resposta NATURAL JOIN alternativa
                                                                            WHERE id_perguntas = 55 AND id_alternativa = 204
                                                                            GROUP BY resposta
                                                                            UNION  
                                                                            SELECT resposta, id_perguntas, 2 AS alternativa, id_alternativa, COUNT(*) AS qtd 
                                                                            FROM pergunta NATURAL JOIN resposta NATURAL JOIN alternativa 
                                                                            WHERE id_perguntas = 55 AND id_alternativa = 1904
                                                                            GROUP BY resposta
                                                                            UNION 
                                                                            SELECT resposta, id_perguntas, 3 AS alternativa, id_alternativa, COUNT(*) AS qtd
                                                                            FROM pergunta NATURAL JOIN resposta NATURAL JOIN alternativa
                                                                            WHERE id_perguntas = 55 AND id_alternativa = 198
                                                                            GROUP BY resposta
                                                                            UNION
                                                                            SELECT resposta, id_perguntas, 4 AS alternativa, id_alternativa, COUNT(*) AS qtd
                                                                            FROM pergunta NATURAL JOIN resposta NATURAL JOIN alternativa 
                                                                            WHERE id_perguntas = 55 AND id_alternativa = 196
                                                                            GROUP BY resposta
                                                                            UNION
                                                                            SELECT resposta, id_perguntas, 5 AS alternativa, id_alternativa, COUNT(*) AS qtd 
                                                                            FROM pergunta NATURAL JOIN resposta NATURAL JOIN alternativa
                                                                            WHERE id_perguntas = 55 AND id_alternativa = 197
                                                                            GROUP BY resposta
                                                                        ) AS Media 
                                                                    )AS Resultado ORDER BY Resultado.resposta";
                                                $resultadoConsulta = mysqli_query($conn, $selecaoConsulta);
                                                $linhaConsulta = mysqli_fetch_assoc($resultadoConsulta);
                                                $totalConsulta = mysqli_num_rows($resultadoConsulta);
                                                        
                                                $mediaGeral = $linhaConsulta['media'];
                                                
                                                fwrite($fileLinha, ",\n{\n".$aspas."Tipo".$aspas.": ".$aspas."line".$aspas.",");
                                                fwrite($fileLinha, "\n".$aspas."Id_Pergunta".$aspas.": ".$aspas.$questao.$aspas.",");

                                                fwrite($fileLinha, "\n".$aspas."Alternativas".$aspas.": [");
                                                $contador = 0;
                                                for ($j = 0; $j < 8; $j++){ 
                                                    if($mediaSatisfacao[$j] > 0) {
                                                        fwrite($fileLinha, $aspas.$ano[$j].$aspas);                                                
                                                    }else{
                                                        $contador = $contador + $j;
                                                    } 
                                                    
                                                    if($mediaSatisfacao[7] > 0){
                                                        if (($j < 7) && ($j != ($contador))){
                                                            fwrite($fileLinha, ",");
                                                        }
                                                    }else{
                                                        if (($j < 6) && ($j != ($contador))){
                                                            fwrite($fileLinha, ",");
                                                        } 
                                                    }                                                
                                                }
                                                fwrite($fileLinha, "],");

                                                fwrite($fileLinha, "\n".$aspas."Respostas".$aspas.": [");
                                                $contador = 0;
                                                for ($j = 0; $j < 8; $j++){
                                                    if($mediaSatisfacao[$j] > 0) {
                                                        fwrite($fileLinha, $aspas.$mediaSatisfacao[$j].$aspas);                                                
                                                    }else{
                                                        $contador = $contador + $j;
                                                    } 
                                                    
                                                    if($mediaSatisfacao[7] > 0){
                                                        if (($j < 7) && ($j != ($contador))){
                                                            fwrite($fileLinha, ",");
                                                        }
                                                    }else{
                                                        if (($j < 6) && ($j != ($contador))){
                                                            fwrite($fileLinha, ",");
                                                        } 
                                                    }  
                                                }
                                                fwrite($fileLinha, "],"); 

                                                fwrite($fileLinha, "\n".$aspas."Media".$aspas.": [");
                                                $contador = 0;
                                                for ($j = 0; $j < 8; $j++){
                                                    if($mediaSatisfacao[$j] > 0) {
                                                        fwrite($fileLinha, $aspas.$mediaGeral.$aspas);                                                
                                                    }else{
                                                        $contador = $contador + $j;
                                                    } 
                                                    
                                                    if($mediaSatisfacao[7] > 0){
                                                        if (($j < 7) && ($j != ($contador))){
                                                            fwrite($fileLinha, ",");
                                                        }
                                                    }else{
                                                        if (($j < 6) && ($j != ($contador))){
                                                            fwrite($fileLinha, ",");
                                                        } 
                                                    }  
                                                }
                                                fwrite($fileLinha, "]");                                                       
                                                fwrite($fileLinha, "\n}"); 

                                                ?>
                                                    <h5>Nível de satisfação com a instituição X Ano de formatura</h5>
                                                    <canvas class = "grafico" id = "grafico<?php echo $questao;?>"></canvas>
                                                    <p>Obs: para esse calculo foi considerado 1 para péssimo, 
                                                        2 para ruim, 3 regular, 4 bom e 5 ótimo.
                                                    </p>
                                                <?php    
                                            }    
                                        }
                                    }
                                }
                            }
                        }
                        fwrite($fileMedia, "]");
                        fwrite($filePizza, "]");
                        fwrite($fileLinha, "]");
                    ?>                 
                </div>   
                
                <div class = "botao">
                    <a href = "selecaoopcaosup.php"><input id = "botao" type = "button" class= "btn btn-primary" value = "Voltar"/></a>
                </div><br>

                <div class= "card-footer">  </div>

            </div>    
        </div>
        <script src = "https://code.jquery.com/jquery-3.3.1.min.js" ></script>
        <script src= "https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js" ></script>
        <script src= "https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.js" ></script>
	</body>
</html>

<script>
    //Cor do grafico
    function randomRgbBarra() {
        var cor = ["#000080", "#0000CD", "#0000FF", "#00FA9A", "#008B8B", "#00FFFF", "#00BFFF", "#00CED1", "#006400", "#008000",    
                   "#191970", "#1E90FF", "#20B2AA", "#228B22", "#32CD32", "#3CB371", "#48D1CC", "#40E0D0", "#4682B4", "#4169E1",  
                   "#483D8B", "#6495ED", "#66CDAA", "#66CDAA", "#7FFFD4", "#7FFF00", "#87CEFA", "#E0FFFF", "#B0E0E6", "#98FB98"];
        var posicao = Math.floor(Math.random() * 29 + 1);
        return cor[posicao];
    }

    var urlBarra = 'http://localhost/questionario/Administrador/analiseBarraTecnico.txt';
    var xhttpBarra = new XMLHttpRequest();
    xhttpBarra.open("GET", urlBarra);
    xhttpBarra.send();

    xhttpBarra.onload = function(){
        var dadosBarra = JSON.parse(xhttpBarra.responseText);  
        createChartBarra(dadosBarra);
    }  

    function createChartBarra(dadosBarra){         
        var dadosBarra = dadosBarra;
        var j, i, k = 0, color = [], c;

        for (j in dadosBarra) {                        
            for (i = 0; i <= 60; i++) {                           
                var questao = dadosBarra[k].Id_Pergunta;
                const elementBarra = document.getElementById(`grafico${questao}`);

                for(c = 0; c < 50; c++){
                    color[c] = randomRgbBarra();
                }
                
                new Chart(elementBarra, {
                    type: 'bar',
                    data: {
                        labels: dadosBarra[k].Alternativas,
                        datasets: [
                            {
                                data: dadosBarra[k].Media,
                                backgroundColor: color
                            }
                        ]
                    },
                    options: {
                        scales: {
                            yAxes: [{
                                ticks: {
                                    beginAtZero: true
                                }
                            }]
                        },
                        legend: {
                            display: false //retira a legenda superior dos graficos
                        }
                    }
                }); 
                k++;
            }
        }
    }

    var urlPizza = 'http://localhost/questionario/Administrador/analisePizzaTecnico.txt';
    var xhttpPizza = new XMLHttpRequest();
    xhttpPizza.open("GET", urlPizza);
    xhttpPizza.send();

    xhttpPizza.onload = function(){
        var dadosPizza = JSON.parse(xhttpPizza.responseText);  
        createChartPizza(dadosPizza);
    }  

    function createChartPizza(dadosPizza){         
        var dadosPizza = dadosPizza;
        var j, i, k = 0, color = [], c;

        for (j in dadosPizza) {                        
            for (i = 0; i <= 62; i++) {                           
                var questao = dadosPizza[k].id_pergunta;
                const elementPizza = document.getElementById(`grafico${questao}`);

                for(c = 0; c < 50; c++){
                    color[c] = randomRgbBarra();
                }
                
                new Chart(elementPizza, { 
                    type: dadosPizza[k].Tipo,
                    data: {
                        labels: dadosPizza[k].Resposta,
                        datasets: [
                            {
                                data: dadosPizza[k].Quantidade,
                                backgroundColor: color
                            }
                        ]
                    },
                    options: {
                        scales: false
                    }
                }); 
                k++;                
            }
        }
    }


    var urlLinha = 'http://localhost/questionario/Administrador/analiseLinhaTecnico.txt';
    var xhttpLinha = new XMLHttpRequest();
    xhttpLinha.open("GET", urlLinha);
    xhttpLinha.send();

    xhttpLinha.onload = function(){
        var dadosLinha = JSON.parse(xhttpLinha.responseText);  
        createChartLinha(dadosLinha);
    }  

    function createChartLinha(dadosLinha){         
        var dadosLinha = dadosLinha;
        var j;

        for (j in dadosLinha) {                                   
            var questao = dadosLinha[j].Id_Pergunta;
            const elementLinha = document.getElementById(`grafico${questao}`);            
            
            if(questao == 30){
                new Chart(elementLinha, {                          
                    type: 'line',
                    data: {
                        labels: dadosLinha[j].Alternativas,
                        datasets: [
                            {                                
                                label: 'Homem',
                                fill: false,
                                backgroundColor: '#000080',
                                borderColor: '#000080',
                                data: dadosLinha[j].Homem
                            },
                            {
                                label: 'Mulher',
                                fill: false,
                                backgroundColor: '#0000FF',
                                borderColor: '#0000FF',
                                data: dadosLinha[j].Mulher
                            },            
                            {
                                label: 'Preferiu não informar',
                                fill: false,
                                backgroundColor: '#00BFFF',
                                borderColor: '#00BFFF',
                                data: dadosLinha[j].naoInformar
                            }
                        ]   
                    },
                    options: {
                        scales: {
                            yAxes: [{
                                ticks: {
                                    beginAtZero: true
                                }
                            }]
                        }
                    }                   
                });
            }else{
                if ((questao == 51) || (questao == 54)){
                    new Chart(elementLinha, {                           
                        type: 'line',
                        data: {
                            labels: dadosLinha[j].Alternativas,
                            datasets: [
                                {                                
                                    label: 'Média por ano',
                                    fill: false,
                                    backgroundColor: '#000080',
                                    borderColor: '#000080',
                                    data: dadosLinha[j].Respostas
                                },           
                                {
                                    label: 'Média geral',
                                    fill: false,
                                    backgroundColor: '#00BFFF',
                                    borderColor: '#00BFFF',
                                    data: dadosLinha[j].Media
                                }
                            ]   
                        },
                        options: {
                            scales: {
                                yAxes: [{
                                    ticks: {
                                        beginAtZero: true
                                    }
                                }]
                            }
                        }  
                    });
                }else{
                    new Chart(elementLinha, {                          
                        type: 'line',
                        data: {
                            labels: dadosLinha[j].Alternativas,
                            datasets: [
                                {               
                                    fill: false,
                                    backgroundColor: '#000080',
                                    borderColor: '#000080',
                                    data: dadosLinha[j].Media
                                }
                            ]   
                        },
                        options: {
                            scales: {
                                yAxes: [{
                                    ticks: {
                                        beginAtZero: true
                                    }
                                }]
                            },
                            legend: {
                                display: false //retira a legenda superior dos graficos
                            }
                        }                   
                    });
                }
            }                 
        }
    }

</script>