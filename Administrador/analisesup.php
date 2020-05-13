<?php
    include 'vAdministrador.php';
    include '../acessobancosup.php';
?>

<!DOCTYPE HTML>
<html lang = "pt-br">
    <head>
        <meta charset = "utf-8">
        <meta name = "viewport" content = "initial-scale=1, user-scalable = no">
        
        <link rel = "stylesheet" href = "https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity = "sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> 
        <link rel = "stylesheet" href = "https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity = "sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin = "anonymous">  
        <link rel = "stylesheet" href = "../estilo.css">
        <link rel = "stylesheet" href = "analise.css">

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
                        $arquivoMedia = "mediaSuperior.txt";
                        $fileMedia = fopen($arquivoMedia, 'w');                        
                        fwrite($fileMedia, "[{");

                        for ($questao = 1; $questao < 60; $questao++){
                            if ($questao == 47 || $questao == 50 || $questao == 51 || $questao == 58 || $questao == 59){
                                $selecaoConsulta = "SELECT questao, id_perguntas FROM `pergunta` NATURAL JOIN `subpergunta_has_pergunta` WHERE id_perguntas = '$questao'";
                                $resultadoConsulta = mysqli_query($conn, $selecaoConsulta);
                                $linhaConsulta = mysqli_fetch_assoc($resultadoConsulta);
                                $totalConsulta = mysqli_num_rows($resultadoConsulta);  //calcula quantos dados foram retornados

                                ?><h5><?php echo $linhaConsulta['questao'];?></h5><?php

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
                                    $selecaoMedia = "SELECT questao, subquestao, id_subpergunta, id_perguntas, (SUM(qtd * alternativa)/ SUM(qtd)) AS media FROM( 
                                                        SELECT questao, opcao AS resposta, alternativa, subquestao, id_subpergunta, id_perguntas, 0 AS qtd 
                                                        FROM alternativa NATURAL JOIN subpergunta_has_alternativa NATURAL JOIN subpergunta NATURAL JOIN subpergunta_has_pergunta NATURAL JOIN pergunta 
                                                        WHERE id_perguntas = '$questao' AND id_subpergunta = '$contConsulta' AND id_alternativa 
                                                        NOT IN (SELECT id_alternativa FROM resposta WHERE id_perguntas = '$questao' AND id_subpergunta = '$contConsulta')
                                                        GROUP BY resposta 
                                                        UNION 
                                                        SELECT questao, resposta, alternativa, subquestao, id_subpergunta, id_perguntas, count(*) AS qtd 
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

                                        if ($questao < 59 || ($questao == 59 && $contConsulta < 137 )){
                                            fwrite($fileMedia, ",\n{"); 
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
                                
                            }else{
                                if ($questao == 49){
                                    $selecaoConsulta = "SELECT questao, id_perguntas FROM `pergunta` NATURAL JOIN `subpergunta_has_pergunta` WHERE id_perguntas = 49";
                                    $resultadoConsulta = mysqli_query($conn, $selecaoConsulta);
                                    $linhaConsulta = mysqli_fetch_assoc($resultadoConsulta);
                                    $totalConsulta = mysqli_num_rows($resultadoConsulta);  //calcula quantos dados foram retornados
    
                                    ?><h5><?php echo $linhaConsulta['questao'];?></h5><?php
    
                                    $contConsulta = 26;
    
                                    $i = 0;
                                    do { 
                                        $selecaoMedia = "SELECT questao, subquestao, id_subpergunta, id_perguntas, (SUM(qtd * alternativa)/ SUM(qtd)) AS media FROM( 
                                                            SELECT questao, opcao AS resposta, alternativa, subquestao, id_subpergunta, id_perguntas, 0 AS qtd 
                                                            FROM alternativa NATURAL JOIN subpergunta_has_alternativa NATURAL JOIN subpergunta NATURAL JOIN subpergunta_has_pergunta NATURAL JOIN pergunta 
                                                            WHERE id_perguntas = '$questao' AND id_subpergunta = '$contConsulta' AND id_alternativa 
                                                            NOT IN (SELECT id_alternativa FROM resposta WHERE id_perguntas = '$questao' AND id_subpergunta = '$contConsulta')
                                                            GROUP BY resposta 
                                                            UNION 
                                                            SELECT questao, resposta, alternativa, subquestao, id_subpergunta, id_perguntas, count(*) AS qtd 
                                                            FROM pergunta NATURAL JOIN resposta NATURAL JOIN alternativa NATURAL JOIN subpergunta WHERE id_perguntas = '$questao' AND id_subpergunta = '$contConsulta' 
                                                            GROUP BY resposta 
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
    
                                            if ($questao < 59 || ($questao == 59 && $contConsulta < 137 )){
                                                fwrite($fileMedia, ",\n{"); 
                                            }
    
                                            $subPergunta = array(); //limpar array para reiniciar a contagem do tamanho
    
                                            ?>
                                                <canvas class = "grafico" id = "grafico<?php echo $questao;?>"></canvas>
                                            <?php
                                        }
    
                                        if ($contConsulta == 26){
                                                $contConsulta = 57;
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
                                    }while($linhaMedia = mysqli_fetch_assoc($resultadoConsulta)); 
                                }
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
        var cor = ["#00FA9A", "#00CED1", "#20B2AA", "#008B8B", "#00FFFF", "#00BFFF",   
                   "#1E90FF", "#4169E1", "#6495ED", "#66CDAA", "#7FFFD4", "#87CEFA"];
        var posicao = Math.floor(Math.random() * 11 + 1);
        return cor[posicao];
    }

    var urlBarra = 'http://localhost/questionario/Administrador/mediaSuperior.txt';
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
                if (i == 47 || i == 50 || i == 51 || i == 58 || i == 59){                
                    var questao = dadosBarra[k].Id_Pergunta;
                    const elementBarra = document.getElementById(`grafico${questao}`);

                    for(c = 0; c < 30; c++){
                        color[c] = randomRgbBarra();
                    }
                    
                    new Chart(elementBarra, {
                        type: 'bar',
                        data: {
                            labels: dadosBarra[k].Alternativas,
                            datasets: [
                                {
                                    label: 'teste',
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
                                display: false
                            }
                        }
                    }); 
                    k++;
                }
            }
        }
    }
</script>