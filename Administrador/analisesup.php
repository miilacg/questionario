<?php
    include 'vAdministrador.php';
    include '../acessobancosup.php';
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
                        $arquivo = "analiseSuperior.txt";
                        $file = fopen($arquivo, 'w');  
                        fwrite($file, "[{");

                        for ($questao = 1; $questao < 63; $questao++){
                            if ($questao == 23 || $questao == 24 || $questao == 25 || $questao == 39 || $questao == 41 || $questao == 47 || $questao == 49 || $questao == 50 || $questao == 51 || $questao == 58 || $questao == 59 || $questao == 62){
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
                                        fwrite($filePizza, "\n".$aspas."Id_pergunta".$aspas.": ".$aspas.$questao.$aspas.",");                                        

                                        $cont = 0;
                                        do {  
                                            //salvando em arrays os dados colhidos do banco
                                            if ($linhaIdade['resposta'] == 'A'){
                                                $respostas[$cont] = "Mais que ".($anoAtual - 1980);
                                            }else{
                                                $anoNascimento = (int)$linhaIdade['alternativa'];
                                                $respostas[$cont] = $anoAtual - $anoNascimento; 
                                            }

                                            $quantidade[$cont] = $linhaIdade['qtd'];
                                            $cont ++;
                                        }while($linhaIdade = mysqli_fetch_assoc($resultadoIdade));                                      
                                                                                  
                                                                                                               
                                        fwrite($filePizza, "\n".$aspas."Alternativas".$aspas.": [");
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
                                        fwrite($filePizza, $aspas."Media".$aspas.": ".$aspas.$mediaIdade.$aspas."\n}");

                                        ?>
                                            <h5>Idade dos egressos</h5>
                                            <canvas class = "grafico" id = "grafico<?php echo $questao;?>"></canvas>
                                        <?php
                                    }
                                }else{ 
                                    if($questao == 39){ //cargo por sexo
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
                                            fwrite($file, "\n".$aspas."Tipo".$aspas.": ".$aspas."line".$aspas.",");
                                            fwrite($file, "\n".$aspas."Id_Pergunta".$aspas.": ".$aspas.$questao.$aspas.",");
                                              
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
                                                                        WHERE id_perguntas = 39 AND id_alternativa 
                                                                        NOT IN (SELECT id_alternativa FROM resposta NATURAL JOIN sexo WHERE id_perguntas = 39)
                                                                        GROUP BY alternativa
                                                                        UNION  
                                                                        SELECT alternativa, COUNT(*) AS qtd 
                                                                        FROM `resposta` NATURAL JOIN sexo NATURAL JOIN alternativa   
                                                                        WHERE id_perguntas = 39 
                                                                        GROUP BY alternativa
                                                                    )Resultado ORDER BY Resultado.qtd DESC;";
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
                                                    fwrite($file, "\n".$aspas."Alternativas".$aspas.": [");
                                                    for ($j = 0; $j < $totalConsulta; $j++){
                                                        fwrite($file, $aspas.$alternativa[$j].$aspas);
                                                        if ($j < ($totalConsulta - 1)){
                                                            fwrite($file, ",");
                                                        }
                                                    }
                                                    fwrite($file, "],");

                                                    fwrite($file, "\n".$aspas."Mulher".$aspas.": [");
                                                    for ($j = 0; $j < $totalConsulta; $j++){
                                                        fwrite($file, $aspas.$quantidade[$j].$aspas);
                                                        if ($j < ($totalConsulta - 1)){
                                                            fwrite($file, ",");
                                                        }
                                                    }
                                                    fwrite($file, "],");                                                    
                                                }else{
                                                    if($id_alternativa == 35){     
                                                        fwrite($file, "\n".$aspas."Homem".$aspas.": [");
                                                        for ($j = 0; $j < $totalConsulta; $j++){
                                                            fwrite($file, $aspas.$quantidade[$j].$aspas);
                                                            if ($j < ($totalConsulta - 1)){
                                                                fwrite($file, ",");
                                                            }
                                                        }
                                                        fwrite($file, "],");
                                                    }else{
                                                        fwrite($file, "\n".$aspas."naoInformar".$aspas.": [");
                                                        for ($j = 0; $j < $totalConsulta; $j++){
                                                            fwrite($file, $aspas.$quantidade[$j].$aspas);
                                                            if ($j < ($totalConsulta - 1)){
                                                                fwrite($file, ",");
                                                            }
                                                        }
                                                        fwrite($file, "]");
                                                    }
                                                }   

                                                $deletaTabela = "DROP TABLE sexo;";
                                                $resultadoExclusão = mysqli_query($conn, $deletaTabela);                                                 
                                            }                                                                                                 
                                        }                                
                                    
                                        fwrite($file, "\n},\n{");    
                                        
                                        ?>
                                            <h5>Cargo X Genêro</h5>
                                            <canvas class = "grafico" id = "grafico<?php echo $questao;?>"></canvas>
                                        <?php
                                    }else{
                                        if ($questao == 41){ //media salarial geral
                                            $selecaoVerificaco = "SELECT questao FROM `pergunta` NATURAL JOIN `resposta` WHERE id_perguntas = '$questao'";
                                            $resultadoVerificaco = mysqli_query($conn, $selecaoVerificaco);
                                            $linhaVerificaco = mysqli_fetch_assoc($resultadoVerificaco);
                                            $totalVerificaco = mysqli_num_rows($resultadoVerificaco);  //calcula quantos dados foram retornados
                                                
                                            if ($totalVerificaco == 0){
                                                $selecaoN = "SELECT questao FROM pergunta where id_perguntas = '$questao';";
                                                $resultadoSelecaoN = mysqli_query($conn, $selecaoN);
                                                $linhaN = mysqli_fetch_assoc($resultadoSelecaoN);
                                                
                                                ?><h5>Média salarial X Genêro</h5>
                                                <h6>Essa análise não pode ser feita por falta de respostas.<h6><?php
                                            }else{
                                                fwrite($file, "\n".$aspas."Tipo".$aspas.": ".$aspas."bar".$aspas.",");
                                                fwrite($file, "\n".$aspas."Id_Pergunta".$aspas.": ".$aspas.$questao.$aspas.",");
                                                
                                                $count = 0;
                                                for ($i = 0; $i < 4; $i++){  
                                                    $id_alternativa = 0;                                                   

                                                    if($i == 3){ //media dos salarios
                                                        $selecaoConsulta = "SELECT questao, id_perguntas FROM `pergunta` NATURAL JOIN `subpergunta_has_pergunta` WHERE id_perguntas = '$questao'";
                                                        $resultadoConsulta = mysqli_query($conn, $selecaoConsulta);
                                                        $linhaConsulta = mysqli_fetch_assoc($resultadoConsulta);
                                                        $totalConsulta = mysqli_num_rows($resultadoConsulta);  //calcula quantos dados foram retornados
                                        
                                                        $selecaoMediaSalarial = "SELECT ROUND((SUM(qtd * alternativa)/ SUM(qtd)),2) AS media 
                                                                                FROM( 
                                                                                    SELECT opcao AS resposta, alternativa, id_perguntas, id_alternativa, 0 AS qtd 
                                                                                    FROM pergunta NATURAL JOIN resposta NATURAL JOIN alternativa 
                                                                                    WHERE id_perguntas = 41 AND id_alternativa 
                                                                                    NOT IN (SELECT id_alternativa FROM resposta WHERE id_perguntas = 41)
                                                                                    GROUP BY resposta 
                                                                                    UNION        
                                                                                    SELECT resposta, alternativa, id_perguntas, id_alternativa, qtd     
                                                                                    FROM(
                                                                                        SELECT resposta, id_perguntas, 2000 AS alternativa, id_alternativa, COUNT(*) AS qtd
                                                                                        FROM pergunta NATURAL JOIN resposta NATURAL JOIN alternativa 
                                                                                        WHERE id_perguntas = 41 AND id_alternativa = 133
                                                                                        GROUP BY resposta
                                                                                        UNION  
                                                                                        SELECT resposta, id_perguntas, 3500 AS alternativa, id_alternativa, COUNT(*) AS qtd 
                                                                                        FROM pergunta NATURAL JOIN resposta NATURAL JOIN alternativa   
                                                                                        WHERE id_perguntas = 41 AND id_alternativa = 134 
                                                                                        GROUP BY resposta
                                                                                        UNION 
                                                                                        SELECT resposta, id_perguntas, 6500 AS alternativa, id_alternativa, COUNT(*) AS qtd
                                                                                        FROM pergunta NATURAL JOIN resposta NATURAL JOIN alternativa 
                                                                                        WHERE id_perguntas = 41 AND id_alternativa = 135  
                                                                                        GROUP BY resposta
                                                                                        UNION
                                                                                        SELECT resposta, id_perguntas, 10000 AS alternativa, id_alternativa, COUNT(*) AS qtd
                                                                                        FROM pergunta NATURAL JOIN resposta NATURAL JOIN alternativa  
                                                                                        WHERE id_perguntas = 41 AND id_alternativa = 136 
                                                                                        GROUP BY resposta
                                                                                        UNION
                                                                                        SELECT resposta, id_perguntas, 12000 AS alternativa, id_alternativa, COUNT(*) AS qtd 
                                                                                        FROM pergunta NATURAL JOIN resposta NATURAL JOIN alternativa   
                                                                                        WHERE id_perguntas = 41 AND id_alternativa = 137 
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
                                                                                SELECT resposta, id_perguntas, 2000 AS alternativa, id_alternativa, COUNT(*) AS qtd
                                                                                FROM `resposta` natural join sexo NATURAL JOIN alternativa 
                                                                                WHERE id_perguntas = 41 AND id_alternativa = 133
                                                                                GROUP BY resposta
                                                                                UNION  
                                                                                SELECT resposta, id_perguntas, 3500 AS alternativa, id_alternativa, COUNT(*) AS qtd 
                                                                                FROM `resposta` natural join sexo NATURAL JOIN alternativa   
                                                                                WHERE id_perguntas = 41 AND id_alternativa = 134 
                                                                                GROUP BY resposta
                                                                                UNION 
                                                                                SELECT resposta, id_perguntas, 6500 AS alternativa, id_alternativa, COUNT(*) AS qtd
                                                                                FROM `resposta` natural join sexo NATURAL JOIN alternativa 
                                                                                WHERE id_perguntas = 41 AND id_alternativa = 135  
                                                                                GROUP BY resposta
                                                                                UNION
                                                                                SELECT resposta, id_perguntas, 10000 AS alternativa, id_alternativa, COUNT(*) AS qtd
                                                                                FROM `resposta` natural join sexo NATURAL JOIN alternativa  
                                                                                WHERE id_perguntas = 41 AND id_alternativa = 136 
                                                                                GROUP BY resposta
                                                                                UNION
                                                                                SELECT resposta, id_perguntas, 12000 AS alternativa, id_alternativa, COUNT(*) AS qtd 
                                                                                FROM `resposta` natural join sexo NATURAL JOIN alternativa   
                                                                                WHERE id_perguntas = 41 AND id_alternativa = 137 
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
                                                                                
                                                fwrite($file, "\n".$aspas."Alternativas".$aspas.": [");
                                                for ($j = 0; $j <= $count; $j++){
                                                    fwrite($file, $aspas.$alternativa[$j].$aspas);
                                                    if ($j < $count){
                                                        fwrite($file, ",");
                                                    }
                                                }
                                                fwrite($file, "],");
                
                                                fwrite($file, "\n".$aspas."Media".$aspas.": [");
                                                for ($j = 0; $j <= $count; $j++){
                                                    fwrite($file, $aspas.$mediaSalarial[$j].$aspas);
                                                    if ($j < $count){
                                                        fwrite($file, ",");
                                                    }
                                                }
                                                fwrite($file, "]\n},\n{");     
                                                
                                                ?>
                                                    <h5>Média salarial X Genêro</h5>
                                                    <canvas class = "grafico" id = "grafico<?php echo $questao;?>"></canvas>
                                                <?php
                                            }   
                                            
                                            /*?><h5>Média salarial</h5>
                                                <h6>R$ <?php echo ($mediaSalarial)?></h6>*/
                                                ?><p>Obs: para esse calculo foi considerado R$2000,00 para salários abaixo de R$2000,00, 
                                                R$3500,00 para salários entre R$2000,00 e R$5000,00,
                                                R$6500,00 para salários entre R$5000,00 e R$8000,00,
                                                R$10000,00 para salários entre R$8000,00 e R$10000,00 e 
                                                R$12000,00 para salários acima de R$12000,00.
                                                </p><?php 

                                        }else{
                                            if ($questao == 49){ //utilização das as disciplinas
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
                    
                                                    ?><h5>Frequência de utilização das disciplinas no mercado de trabalho</h5><?php
                
                                                    $contConsulta = 26;
                    
                                                    $i = 0;
                                                    do { 
                                                        $selecaoMedia = "SELECT subquestao, id_subpergunta, id_perguntas, (SUM(qtd * alternativa)/ SUM(qtd)) AS media FROM( 
                                                                            SELECT opcao AS resposta, alternativa, subquestao, id_subpergunta, id_perguntas, 0 AS qtd 
                                                                            FROM pergunta NATURAL JOIN resposta NATURAL JOIN alternativa NATURAL JOIN subpergunta 
                                                                            WHERE id_perguntas = 49 AND id_subpergunta = '$contConsulta' AND id_alternativa 
                                                                            NOT IN (SELECT id_alternativa FROM resposta WHERE id_perguntas = 49 AND id_subpergunta = '$contConsulta')
                                                                            GROUP BY resposta 
                                                                            UNION        
                                                                            SELECT resposta, alternativa, subquestao, id_subpergunta, id_perguntas, qtd     
                                                                            FROM( /*convertendo a resposta para numero*/
                                                                                SELECT resposta, subquestao, id_subpergunta, id_perguntas, 2 AS alternativa, COUNT(*) AS qtd
                                                                                FROM pergunta NATURAL JOIN resposta NATURAL JOIN alternativa NATURAL JOIN subpergunta  
                                                                                WHERE id_perguntas = 49 AND id_alternativa = 181 AND id_subpergunta = '$contConsulta'
                                                                                GROUP BY resposta
                                                                                UNION  
                                                                                SELECT resposta, subquestao, id_subpergunta, id_perguntas, 3 AS alternativa, COUNT(*) AS qtd 
                                                                                FROM pergunta NATURAL JOIN resposta NATURAL JOIN alternativa NATURAL JOIN subpergunta   
                                                                                WHERE id_perguntas = 49 AND id_alternativa = 180 AND id_subpergunta = '$contConsulta'
                                                                                GROUP BY resposta
                                                                                UNION 
                                                                                SELECT resposta, subquestao, id_subpergunta, id_perguntas, 4 AS alternativa, COUNT(*) AS qtd
                                                                                FROM pergunta NATURAL JOIN resposta NATURAL JOIN alternativa NATURAL JOIN subpergunta 
                                                                                WHERE id_perguntas = 49 AND id_alternativa = 179 AND id_subpergunta = '$contConsulta'
                                                                                GROUP BY resposta
                                                                                UNION
                                                                                SELECT resposta, subquestao, id_subpergunta, id_perguntas, 5 AS alternativa, COUNT(*) AS qtd
                                                                                FROM pergunta NATURAL JOIN resposta NATURAL JOIN alternativa NATURAL JOIN subpergunta  
                                                                                WHERE id_perguntas = 49 AND id_alternativa = 178 AND id_subpergunta = '$contConsulta'
                                                                                GROUP BY resposta
                                                                                UNION
                                                                                SELECT resposta, subquestao, id_subpergunta, id_perguntas, 1 AS alternativa, COUNT(*) AS qtd 
                                                                                FROM pergunta NATURAL JOIN resposta NATURAL JOIN alternativa NATURAL JOIN subpergunta   
                                                                                WHERE id_perguntas = 49 AND id_alternativa = 182 AND id_subpergunta = '$contConsulta'
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
                                                            
                                                            fwrite($file, "\n".$aspas."Tipo".$aspas.":".$aspas."bar".$aspas.",");
                                                            fwrite($file, "\n".$aspas."Id_Pergunta".$aspas.":".$aspas.$linhaMedia['id_perguntas'].$aspas.",");
                                                            fwrite($file, "\n".$aspas."Alternativas".$aspas.": [");
                                                            for ($i = 0; $i < $totalConsulta; $i++){
                                                                fwrite($file, $aspas.$subPergunta[$i].$aspas);
                                                                if ($i < $totalConsulta - 1){
                                                                    fwrite($file, ",");
                                                                }
                                                            }
                                                            fwrite($file, "],");
                        
                                                            fwrite($file, "\n".$aspas."Media".$aspas.": [");
                                                            for ($i = 0; $i < $totalConsulta; $i++){
                                                                $media = round($mediaSubPergunta[$i], 3); //arredondamento para 3 casas decimais
                                                                fwrite($file, $aspas.$media.$aspas);
                                                                if ($i < $totalConsulta - 1){
                                                                    fwrite($file, ",");
                                                                }
                                                            }
                                                            fwrite($file, "]\n},\n{"); 
                    
                                                            $subPergunta = array(); //limpar array para reiniciar a contagem do tamanho
                    
                                                            ?>
                                                                <canvas class = "grafico" id = "grafico<?php echo $questao;?>"></canvas>
                                                            <?php
                                                        }
                    
                                                        if ($contConsulta == 32){
                                                            $contConsulta = 34;
                                                        
                                                        }else{
                                                            if ($contConsulta == 34){
                                                                $contConsulta = 36;
                                                            }else{
                                                                if ($contConsulta == 44){
                                                                    $contConsulta = 57;
                                                                }else{
                                                                    if ($contConsulta == 57){
                                                                        $contConsulta = 65;
                                                                    }else{
                                                                        if ($contConsulta == 65){
                                                                            $contConsulta = 67;
                                                                        }else{
                                                                            if ($contConsulta == 67){
                                                                                $contConsulta = 109;
                                                                            }else{
                                                                                $contConsulta++;
                                                                            }
                                                                        }
                                                                    }
                                                                }
                                                            }
                                                        }    
                                                    }while($linhaMedia = mysqli_fetch_assoc($resultadoConsulta)); 
                                                }
                                            }else{
                                                if ($questao == 62){ //Como você classifica os itens abaixo
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
                                                        $selecaoConsulta = "SELECT questao, id_perguntas FROM `pergunta` NATURAL JOIN `subpergunta_has_pergunta` WHERE id_perguntas = 62";
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
                                                                                WHERE id_perguntas = 62 AND id_subpergunta = '$contConsulta' AND id_alternativa 
                                                                                NOT IN (SELECT id_alternativa FROM resposta WHERE id_perguntas = 62 AND id_subpergunta = '$contConsulta')
                                                                                GROUP BY resposta 
                                                                                UNION        
                                                                                SELECT resposta, alternativa, subquestao, id_subpergunta, id_perguntas, qtd     
                                                                                FROM( /*convertendo a resposta para numero*/
                                                                                    SELECT resposta, subquestao, id_subpergunta, id_perguntas, 2 AS alternativa, COUNT(*) AS qtd
                                                                                    FROM pergunta NATURAL JOIN resposta NATURAL JOIN alternativa NATURAL JOIN subpergunta  
                                                                                    WHERE id_perguntas = 62 AND id_alternativa = 190 AND id_subpergunta = '$contConsulta'
                                                                                    GROUP BY resposta
                                                                                    UNION  
                                                                                    SELECT resposta, subquestao, id_subpergunta, id_perguntas, 3 AS alternativa, COUNT(*) AS qtd 
                                                                                    FROM pergunta NATURAL JOIN resposta NATURAL JOIN alternativa NATURAL JOIN subpergunta   
                                                                                    WHERE id_perguntas = 62 AND id_alternativa = 194 AND id_subpergunta = '$contConsulta'
                                                                                    GROUP BY resposta
                                                                                    UNION 
                                                                                    SELECT resposta, subquestao, id_subpergunta, id_perguntas, 4 AS alternativa, COUNT(*) AS qtd
                                                                                    FROM pergunta NATURAL JOIN resposta NATURAL JOIN alternativa NATURAL JOIN subpergunta 
                                                                                    WHERE id_perguntas = 62 AND id_alternativa = 192 AND id_subpergunta = '$contConsulta'
                                                                                    GROUP BY resposta
                                                                                    UNION
                                                                                    SELECT resposta, subquestao, id_subpergunta, id_perguntas, 5 AS alternativa, COUNT(*) AS qtd
                                                                                    FROM pergunta NATURAL JOIN resposta NATURAL JOIN alternativa NATURAL JOIN subpergunta  
                                                                                    WHERE id_perguntas = 62 AND id_alternativa = 193 AND id_subpergunta = '$contConsulta'
                                                                                    GROUP BY resposta
                                                                                    UNION
                                                                                    SELECT resposta, subquestao, id_subpergunta, id_perguntas, 1 AS alternativa, COUNT(*) AS qtd 
                                                                                    FROM pergunta NATURAL JOIN resposta NATURAL JOIN alternativa NATURAL JOIN subpergunta   
                                                                                    WHERE id_perguntas = 62 AND id_alternativa = 195 AND id_subpergunta = '$contConsulta'
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
                    
                                                                fwrite($file, "\n".$aspas."Tipo".$aspas.":".$aspas."bar".$aspas.",");
                                                                fwrite($file, "\n".$aspas."Id_Pergunta".$aspas.":".$aspas.$linhaMedia['id_perguntas'].$aspas.",");
                                                                fwrite($file, "\n".$aspas."Alternativas".$aspas.": [");
                                                                for ($i = 0; $i < $totalConsulta; $i++){
                                                                    fwrite($file, $aspas.$subPergunta[$i].$aspas);
                                                                    if ($i < $totalConsulta - 1){
                                                                        fwrite($file, ",");
                                                                    }
                                                                }
                                                                fwrite($file, "],");
                            
                                                                fwrite($file, "\n".$aspas."Media".$aspas.": [");
                                                                for ($i = 0; $i < $totalConsulta; $i++){
                                                                    $media = round($mediaSubPergunta[$i], 3); //arredondamento para 3 casas decimais
                                                                    fwrite($file, $aspas.$media.$aspas);
                                                                    if ($i < $totalConsulta - 1){
                                                                        fwrite($file, ",");
                                                                    }
                                                                }
                                                                fwrite($file, "]\n}");
                        
                                                                $subPergunta = array(); //limpar array para reiniciar a contagem do tamanho
                        
                                                                ?>
                                                                    <canvas class = "grafico" id = "grafico<?php echo $questao;?>"></canvas>
                                                                <?php
                                                            }   
            
                                                            $contConsulta++;
                                                                    
                                                        }while($linhaMedia = mysqli_fetch_assoc($resultadoConsulta));
                                                    } 
                                                }else{                                        
                                                    if ($questao == 23 || $questao == 24 || $questao == 25){ //perguntas das linguas estrangeiras
                                                        $selecaoVerificaco = "SELECT questao FROM `pergunta` NATURAL JOIN `resposta` WHERE id_perguntas = '$questao'";
                                                        $resultadoVerificaco = mysqli_query($conn, $selecaoVerificaco);
                                                        $linhaVerificaco = mysqli_fetch_assoc($resultadoVerificaco);
                                                        $totalVerificaco = mysqli_num_rows($resultadoVerificaco);  //calcula quantos dados foram retornados
                                                        
                                                        if ($totalVerificaco == 0){
                                                            $selecaoN = "SELECT questao FROM pergunta where id_perguntas = '$questao';";
                                                            $resultadoSelecaoN = mysqli_query($conn, $selecaoN);
                                                            $linhaN = mysqli_fetch_assoc($resultadoSelecaoN);
                                                            
                                                            if ($questao == 23){
                                                                ?><h5>Média do nível de leitura por língua estrangeira<h5><?php
                                                            }else{
                                                                if ($questao == 24){
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
                            
                                                            if ($questao == 23){
                                                                ?><h5>Média do nível de leitura por língua estrangeira<h5><?php
                                                            }else{
                                                                if ($questao == 24){
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
                        
                                                                    fwrite($file, "\n".$aspas."Tipo".$aspas.":".$aspas."bar".$aspas.",");
                                                                    fwrite($file, "\n".$aspas."Id_Pergunta".$aspas.":".$aspas.$linhaMedia['id_perguntas'].$aspas.",");
                                                                    fwrite($file, "\n".$aspas."Alternativas".$aspas.": [");
                                                                    for ($i = 0; $i < $totalConsulta; $i++){
                                                                        fwrite($file, $aspas.$subPergunta[$i].$aspas);
                                                                        if ($i < $totalConsulta - 1){
                                                                            fwrite($file, ",");
                                                                        }
                                                                    }
                                                                    fwrite($file, "],");
                                
                                                                    fwrite($file, "\n".$aspas."Media".$aspas.": [");
                                                                    for ($i = 0; $i < $totalConsulta; $i++){
                                                                        $media = round($mediaSubPergunta[$i], 3); //arredondamento para 3 casas decimais
                                                                        fwrite($file, $aspas.$media.$aspas);
                                                                        if ($i < $totalConsulta - 1){
                                                                            fwrite($file, ",");
                                                                        }
                                                                    }
                                                                    fwrite($file, "]\n},\n{");
                            
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
            
                                                        if ($questao == 25){ /*media de todas as linguas*/                                            
                                                            $selecaoVerificaco = "SELECT questao FROM `pergunta` NATURAL JOIN `resposta` WHERE id_perguntas = 23 OR id_perguntas = 24 OR id_perguntas = 25";
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

                                                                        fwrite($file, "\n".$aspas."Tipo".$aspas.":".$aspas."bar".$aspas.",");
                                                                        fwrite($file, "\n".$aspas."Id_Pergunta".$aspas.":".$aspas.'0'.$aspas.",");
                                                                        fwrite($file, "\n".$aspas."Alternativas".$aspas.": [");
                                                                        for ($i = 0; $i < 4; $i++){
                                                                            fwrite($file, $aspas.$subPergunta[$i].$aspas);
                                                                            if ($i < 3){
                                                                                fwrite($file, ",");
                                                                            }
                                                                        }
                                                                        fwrite($file, "],");
                                    
                                                                        fwrite($file, "\n".$aspas."Media".$aspas.": [");
                                                                        for ($i = 0; $i < 4; $i++){
                                                                            $media = round($mediaSubPergunta[$i], 3); //arredondamento para 3 casas decimais
                                                                            fwrite($file, $aspas.$media.$aspas);
                                                                            if ($i < 3){
                                                                                fwrite($file, ",");
                                                                            }
                                                                        }
                                                                        fwrite($file, "]\n},\n{");
                                
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
                                                        
                                                    }else{ //outras perguntas que não precisaram de tratamento
                                                        $selecaoVerificaco = "SELECT questao FROM `pergunta` NATURAL JOIN `resposta` WHERE id_perguntas = '$questao'";
                                                        $resultadoVerificaco = mysqli_query($conn, $selecaoVerificaco);
                                                        $totalVerificaco = mysqli_num_rows($resultadoVerificaco);  //calcula quantos dados foram retornados
            
                                                        if ($totalVerificaco == 0){
                                                            $selecaoN = "SELECT questao FROM pergunta where id_perguntas = '$questao';";
                                                            $resultadoSelecaoN = mysqli_query($conn, $selecaoN);
                                                            $linhaN = mysqli_fetch_assoc($resultadoSelecaoN);
                                                            
                                                            if ($questao == 47){
                                                                ?><h5>Importância das competências em relação ao mercado de trabalho<h5><?php
                                                            }else{
                                                                if ($questao == 50){
                                                                    ?><h5>Frequência de utilização das linguagens de programação no mercado de trabalho</h5><?php
                                                                }else{
                                                                    if ($questao == 51){
                                                                        ?><h5>Frequência de utilização dos SGBDs no mercado de trabalho</h5><?php
                                                                    }else{
                                                                        if ($questao == 58){
                                                                            ?><h5>Motivação para escolher do curso</h5><?php
                                                                        }else{
                                                                            ?><h5>Motivação para escolher a Universidade/<i>Campus</i><h5><?php
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
            
                                                            if ($questao == 47){
                                                                ?><h5>Importância das competências em relação ao mercado de trabalho<h5><?php
                                                            }else{
                                                                if ($questao == 50){
                                                                    ?><h5>Frequência de utilização das linguagens de programação no mercado de trabalho</h5><?php
                                                                }else{
                                                                    if ($questao == 51){
                                                                        ?><h5>Frequência de utilização dos SGBDs no mercado de trabalho</h5><?php
                                                                    }else{
                                                                        if ($questao == 58){
                                                                            ?><h5>Motivação para escolher do curso</h5><?php
                                                                        }else{
                                                                            ?><h5>Motivação para escolher a Universidade/<i>Campus</i><h5><?php
                                                                        }
                                                                    }                                                      
                                                                } 
                                                            }
            
                                                            if ($questao == 47){
                                                                $contConsulta = 10;
                                                            }
            
                                                            if ($questao == 50){
                                                                $contConsulta = 45;
                                                            }
            
                                                            if ($questao == 51){
                                                                $contConsulta = 71;
                                                            }
                                                            
                                                            if ($questao == 58){
                                                                $contConsulta = 93;
                                                            }
                                                            
                                                            if ($questao == 59){
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
            
                                                                    fwrite($file, "\n".$aspas."Tipo".$aspas.":".$aspas."bar".$aspas.",");
                                                                    fwrite($file, "\n".$aspas."Id_Pergunta".$aspas.":".$aspas.$linhaMedia['id_perguntas'].$aspas.",");
                                                                    fwrite($file, "\n".$aspas."Alternativas".$aspas.": [");
                                                                    for ($i = 0; $i < $totalConsulta; $i++){
                                                                        fwrite($file, $aspas.$subPergunta[$i].$aspas);
                                                                        if ($i < $totalConsulta - 1){
                                                                            fwrite($file, ",");
                                                                        }
                                                                    }
                                                                    fwrite($file, "],");
                                
                                                                    fwrite($file, "\n".$aspas."Media".$aspas.": [");
                                                                    for ($i = 0; $i < $totalConsulta; $i++){
                                                                        $media = round($mediaSubPergunta[$i], 3); //arredondamento para 3 casas decimais
                                                                        fwrite($file, $aspas.$media.$aspas);
                                                                        if ($i < $totalConsulta - 1){
                                                                            fwrite($file, ",");
                                                                        }
                                                                    }
            
                                                                    $teste62 = "SELECT questao FROM `pergunta` NATURAL JOIN `resposta` WHERE id_perguntas = 62;";
                                                                    $resultado62 = mysqli_query($conn, $teste62);
                                                                    $total62 = mysqli_num_rows($resultado62);  //calcula quantos dados foram retornados
            
                                                                    if ($total62 == 0 && $questao == 59){
                                                                        fwrite($file, "]\n}");
                                                                    }else{
                                                                        fwrite($file, "]\n},\n{");
                                                                    }
                                                                    
                                                                    $subPergunta = array(); //limpar array para reiniciar a contagem do tamanho
            
                                                                    ?>
                                                                        <canvas class = "grafico" id = "grafico<?php echo $questao;?>"></canvas>
                                                                    <?php
                                                                }
            
                                                                if ($questao == 50){
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
                                                                    if ($questao == 58 && $contConsulta == 96){
                                                                        $contConsulta = 98;
                                                                    }else{
                                                                        if ($questao == 59 && $contConsulta == 102){
                                                                            $contConsulta = 136;
                                                                        }else{
                                                                            $contConsulta++;
                                                                        }
                                                                    }                                              
                                                                }     
                                                            }while($linhaMedia = mysqli_fetch_assoc($resultadoConsulta));                               
                                                        }  
                                                    }                                      
                                                }
                                            }
                                        }
                                    }
                                }
                            } 
                        }            
                        fwrite($file, "]");
                        /*fwrite($filePizza, "]");*/       
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
    function randomRgb() {
        var cor = ["#000080", "#0000CD", "#0000FF", "#00FA9A", "#008B8B", "#00FFFF", "#00BFFF", "#00CED1", "#006400", "#008000",    
                   "#191970", "#1E90FF", "#20B2AA", "#228B22", "#32CD32", "#3CB371", "#48D1CC", "#40E0D0", "#4682B4", "#4169E1",  
                   "#483D8B", "#6495ED", "#66CDAA", "#66CDAA", "#7FFFD4", "#7FFF00", "#87CEFA", "#E0FFFF", "#B0E0E6", "#98FB98"];
        var posicao = Math.floor(Math.random() * 29 + 1);
        return cor[posicao];
    }

    var url = 'http://localhost/questionario/Administrador/analiseSuperior.txt';
    var xhttp = new XMLHttpRequest();
    xhttp.open("GET", url);
    xhttp.send();

    xhttp.onload = function(){
        var dados = JSON.parse(xhttp.responseText);  
        createChart(dados);
    }  

    function createChart(dados){         
        var dados = dados;
        var j, i, k = 0, color = [], c;

        for (j in dados) {                        
            for (i = 0; i <= 64; i++) { 
                for(c = 0; c < 50; c++){
                    color[c] = randomRgb();
                }

                var questao = dados[k].Id_Pergunta;
                const element = document.getElementById(`grafico${questao}`);
                
                if(dados[k].Tipo == 'line'){                    
                    new Chart(element, {                          
                        type: 'line',
                        data: {
                            labels: dados[k].Alternativas,
                            datasets: [
                                {                                
                                    label: 'Homem',
                                    fill: false,
                                    backgroundColor: '#000080',
                                    borderColor: '#000080',
                                    data: dados[k].Homem
                                },
                                {
                                    label: 'Mulher',
                                    fill: false,
                                    backgroundColor: '#0000FF',
                                    borderColor: '#0000FF',
                                    data: dados[k].Mulher
                                },            
                                {
                                    label: 'Preferiu não informar',
                                    fill: false,
                                    backgroundColor: '#00BFFF',
                                    borderColor: '#00BFFF',
                                    data: dados[k].naoInformar
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
                    if(dados[k].Tipo == 'bar'){  
                        new Chart(element, {
                            type: 'bar',
                            data: {
                                labels: dados[k].Alternativas,
                                datasets: [
                                    {
                                        data: dados[k].Media,
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
                    }else{
                        new Chart(element, { 
                            type: dados[k].Tipo,
                            data: {
                                labels: dados[k].Resposta,
                                datasets: [
                                    {
                                        data: dados[k].Quantidade,
                                        backgroundColor: color
                                    }
                                ]
                            },
                            options: {
                                scales: false,
                                legend: { 
                                    labels: { 
                                        boxWidth: 45,
                                        fontSize: 14 
                                    } 
                                } 
                            }
                        }); 
                    } 
                }
                k++;            
            }
        }
    }
</script>