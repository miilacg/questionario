<?php
    include 'vAdministrador.php';
    include '../acessobancotec.php';
?>

<!DOCTYPE HTML>
<html lang = "pt-br">
    <head>
        <meta charset = "utf-8">
        <meta name = "viewport" content = "initial-scale=1, user-scalable = no">
        
        <link rel = "stylesheet" href = "https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity = "sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> 
        <link rel = "stylesheet" href = "https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity = "sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin = "anonymous">  
        <link rel = "stylesheet" href = "../estilo.css">

        <title>Questionario</title>
                
        <style>	
            #botao{
                width: 300px;
                height: 50px;
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
                        $arquivoMedia = "mediaTecnico.txt";
                        $fileMedia = fopen($arquivoMedia, 'w');                        
                        fwrite($fileMedia, "[{");

                        for ($questao = 1; $questao < 56; $questao++){
                            //calculo da media de algumas questoes
                            if ($questao == 38 || $questao == 40 || $questao == 41 || $questao == 42 || $questao == 49 || $questao == 50 || $questao == 55){
                                if ($questao == 40){
                                    $selecaoConsulta = "SELECT questao, id_perguntas FROM `pergunta` NATURAL JOIN `subpergunta_has_pergunta` WHERE id_perguntas = 40";
                                    $resultadoConsulta = mysqli_query($conn, $selecaoConsulta);
                                    $linhaConsulta = mysqli_fetch_assoc($resultadoConsulta);
                                    $totalConsulta = mysqli_num_rows($resultadoConsulta);  //calcula quantos dados foram retornados
    
                                    ?><h5><?php echo $linhaConsulta['questao'];?></h5><?php
    
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
                                            fwrite($fileMedia, "]\n},\n{"); 
    
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
                                }else{
                                    if ($questao == 55){
                                        $selecaoConsulta = "SELECT questao, id_perguntas FROM `pergunta` NATURAL JOIN `subpergunta_has_pergunta` WHERE id_perguntas = 55";
                                        $resultadoConsulta = mysqli_query($conn, $selecaoConsulta);
                                        $linhaConsulta = mysqli_fetch_assoc($resultadoConsulta);
                                        $totalConsulta = mysqli_num_rows($resultadoConsulta);  //calcula quantos dados foram retornados
        
                                        ?><h5><?php echo $linhaConsulta['questao'];?></h5><?php
        
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

                                            $contConsulta++;
                                                    
                                        }while($linhaMedia = mysqli_fetch_assoc($resultadoConsulta)); 
                                    }else{
                                        $selecaoConsulta = "SELECT questao, id_perguntas FROM `pergunta` NATURAL JOIN `subpergunta_has_pergunta` WHERE id_perguntas = '$questao'";
                                        $resultadoConsulta = mysqli_query($conn, $selecaoConsulta);
                                        $linhaConsulta = mysqli_fetch_assoc($resultadoConsulta);
                                        $totalConsulta = mysqli_num_rows($resultadoConsulta);  //calcula quantos dados foram retornados

                                        /*if ($questao == 38){
                                            ?><h5><?php echo "Olá!!";?></h5><?php
                                        }*/

                                        ?><h5><?php echo $linhaConsulta['questao'];?></h5><?php

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
                                                fwrite($fileMedia, "]\n},\n{");

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
                            }else{ //relacao entre duas questoes
                                
                            }   
                        }
                        fwrite($fileMedia, "]");
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

    var urlBarra = 'http://localhost/questionario/Administrador/mediaTecnico.txt';
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
            for (i = 1; i <= 60; i++) {                           
                if (i == 38 || i == 49 || i == 50 || i == 51 || i == 58 || i == 59){                
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
    }
</script>