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
                padding: 2px 0px 0px 7px;
            }
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
                    <br><h1>Respostas</h1><br>
                </div> 	
                
                <div class= "card-body" style = "padding-left: 3vw; padding-right: 3.5vw; padding-top: 2.5vw;">
                    <?php
                        $aspas = "\"";
                        $arquivo = "superior.txt";                    
                        $file = fopen($arquivo, 'w');
                        fwrite($file, "[{");

                        $quantidade = array();
                        $respostas = array();
                        $alternativa = array();
                        
                        //$_POST["questao"] é o id da pergunta
                        for ($questao = 1; $questao < 64; $questao++) { 
                            $string_Total[$questao] = 0;          

                            //questões que não tem subquestoes (grafico de pizza)
                            if ($questao < 21 || $questao == 22 || ($questao > 25 && $questao < 29) || $questao == 30 || ($questao > 31 && $questao < 42) || ($questao > 42 && $questao < 47) || ($questao > 52 && $questao < 57) || $questao == 60 || $questao == 61 || $questao == 63) {
                                $selecaoVerificaco = "SELECT questao FROM `pergunta` NATURAL JOIN `resposta` WHERE id_perguntas = '$questao'";
                                $resultadoVerificaco = mysqli_query($conn, $selecaoVerificaco);
                                $linhaVerificaco = mysqli_fetch_assoc($resultadoVerificaco);
                                $totalVerificaco = mysqli_num_rows($resultadoVerificaco);  //calcula quantos dados foram retornados

                                if ($totalVerificaco == 0){
                                    $selecaoN = "SELECT questao FROM pergunta where id_perguntas = '$questao';";
                                    $resultadoSelecaoN = mysqli_query($conn, $selecaoN);
                                    $linhaN = mysqli_fetch_assoc($resultadoSelecaoN);
                                    
                                    ?><h5><?php echo $linhaN['questao'];?></h5>
                                    <h6 style = "padding-top: 3px; padding-bottom: 6px;">Essa pergunta ainda não teve respostas.<h6><?php
                                }else{
                                    $selecao = "SELECT * from(
                                                    SELECT id_perguntas, questao, opcao AS resposta, alternativa, 0 AS qtd 
                                                    FROM alternativa NATURAL JOIN pergunta_has_alternativa NATURAL JOIN pergunta 
                                                    WHERE id_perguntas = '$questao' AND id_alternativa 
                                                    NOT IN (SELECT id_alternativa FROM resposta WHERE id_perguntas = '$questao') 
                                                    GROUP BY resposta 
                                                    UNION 
                                                    SELECT id_perguntas, questao, resposta, alternativa, count(*) AS qtd 
                                                    FROM pergunta NATURAL JOIN resposta NATURAL JOIN alternativa 
                                                    WHERE id_perguntas = '$questao' 
                                                    GROUP BY resposta 
                                                )AS Resultado ORDER BY Resultado.resposta;";  
                                    
                                    $resultadoSelecao = mysqli_query($conn, $selecao);
                                    $linha = mysqli_fetch_assoc($resultadoSelecao);
                                    $total = mysqli_num_rows($resultadoSelecao);//calcula quantos dados foram retornados
                                    
                                    $selecaoMarcadas = "SELECT id_perguntas, questao, resposta, alternativa, count(*) AS qtd 
                                                        FROM pergunta NATURAL JOIN resposta NATURAL JOIN alternativa 
                                                        WHERE id_perguntas = '$questao' 
                                                        GROUP BY resposta ORDER BY resposta.resposta ASC;";  
                        
                                    $resultadoSelecaoMarcadas = mysqli_query($conn, $selecaoMarcadas);
                                    $totalMarcadas = mysqli_num_rows($resultadoSelecaoMarcadas);//calcula quantos dados foram retornados 
                                    
                                    ?>
                                        <!--impressao da pergunta selecionada-->
                                        <h5><?php echo $linha['questao'];?></h5>
                                    <?php 

                                    fwrite($file, "\n".$aspas."Tipo".$aspas.": ".$aspas."pie".$aspas.",");
                                    fwrite($file, "\n".$aspas."Pergunta".$aspas.": ".$aspas.$linha['questao'].$aspas.",");
                                    fwrite($file, "\n".$aspas."Id_perg".$aspas.": ".$aspas.$linha['id_perguntas'].$aspas.",");   
        
                                    $cont = 0;
                                    do {  
                                        //salvando em arrays os dados colhidos do banco
                                        $respostas[$cont] = $linha['resposta']; 
                                        $quantidade[$cont] = $linha['qtd'];
                                        $alternativa[$cont] = $linha['alternativa']; 
                                        $cont ++;
                                    }while($linha = mysqli_fetch_assoc($resultadoSelecao));
                                    
                                    fwrite($file, "\n".$aspas."Resposta".$aspas.": [");
                                    for ($i = 0; $i < $total; $i++){
                                        fwrite($file, $aspas.$respostas[$i].$aspas);
                                        if ($i < $total - 1){
                                            fwrite($file, ",");
                                        }
                                    }
                                    fwrite($file, "],");

                                    fwrite($file, "\n".$aspas."Alternativa".$aspas.": [");
                                    for ($i = 0; $i < $total; $i++){
                                        fwrite($file, $aspas.$alternativa[$i].$aspas);
                                        if ($i < $total - 1){
                                            fwrite($file, ",");
                                        }
                                    }
                                    fwrite($file, "],");

                                    fwrite($file, "\n".$aspas."Quantidade".$aspas.": [");
                                    for ($i = 0; $i < $total; $i++){
                                        fwrite($file, $aspas.$quantidade[$i].$aspas);
                                        if ($i < $total - 1){
                                            fwrite($file, ",");
                                        }
                                    }
                                    fwrite($file, "]\n}");
                                

                                    if ($totalMarcadas == 0){
                                        ?><h6 style = "padding-top: 3px; padding-bottom: 6px;">Essa pergunta ainda não teve respostas.<h6><?php
                                    }else{
                                        ?>
                                            <!-- espaco em que o grafico será colocado !-->
                                            <canvas class = "grafico" id = "grafico<?php echo $questao ?>"></canvas>
                                        <?php
                                    }
                                    
                                    if ($questao < 63){
                                        fwrite($file, ",\n{"); 
                                    }
                                }
                            }else{
                                if ($questao != 21 && $questao != 29 && $questao != 31 && $questao != 64){
                                    $selecaoVerificaco = "SELECT questao FROM `pergunta` NATURAL JOIN `resposta` WHERE id_perguntas = '$questao'";
                                    $resultadoVerificaco = mysqli_query($conn, $selecaoVerificaco);
                                    $linhaVerificaco = mysqli_fetch_assoc($resultadoVerificaco);
                                    $totalVerificaco = mysqli_num_rows($resultadoVerificaco);  //calcula quantos dados foram retornados

                                    if ($totalVerificaco == 0){
                                        $selecaoN = "SELECT questao FROM pergunta where id_perguntas = '$questao';";
                                        $resultadoSelecaoN = mysqli_query($conn, $selecaoN);
                                        $linhaN = mysqli_fetch_assoc($resultadoSelecaoN);
                                        
                                        ?><h5><?php echo $linhaN['questao'];?></h5>
                                        <h6 style = "padding-top: 3px; padding-bottom: 6px;">Essa pergunta ainda não teve respostas.<h6><?php
                                    }else{
                                        $selecaoConsulta = "SELECT questao, id_perguntas FROM `pergunta` NATURAL JOIN `subpergunta_has_pergunta` WHERE id_perguntas = '$questao'";
                                        $resultadoConsulta = mysqli_query($conn, $selecaoConsulta);
                                        $linhaConsulta = mysqli_fetch_assoc($resultadoConsulta);
                                        $totalConsulta = mysqli_num_rows($resultadoConsulta);  //calcula quantos dados foram retornados

                                        ?><h5><?php echo $linhaConsulta['questao'];?></h5><?php

                                        if ($questao > 22 && $questao < 26){
                                            $contConsulta = 1;
                                        }

                                        if ($questao == 42){
                                            $contConsulta = 5;
                                        }

                                        if ($questao == 47){
                                            $contConsulta = 10;
                                        }

                                        if ($questao == 48){
                                            $contConsulta = 17;
                                        }
                                        
                                        if ($questao == 49){
                                            $contConsulta = 26;
                                        }
                                        
                                        if ($questao == 50){
                                            $contConsulta = 45;
                                        }

                                        if ($questao == 51){
                                            $contConsulta = 71;
                                        }

                                        if ($questao == 52){
                                            $contConsulta = 82;
                                        }

                                        if ($questao == 57){
                                            $contConsulta = 87;
                                        }

                                        if ($questao == 58){
                                            $contConsulta = 93;
                                        }

                                        if ($questao == 59){
                                            $contConsulta = 99;
                                        }

                                        if ($questao == 62){
                                            $contConsulta = 103;
                                        }

                                        do { 
                                            $selecaoSubPergunta = "SELECT * FROM(
                                                                        SELECT questao, opcao AS resposta, alternativa, subquestao, id_subpergunta, id_perguntas, 0 AS qtd 
                                                                        FROM alternativa NATURAL JOIN subpergunta_has_alternativa NATURAL JOIN subpergunta NATURAL JOIN subpergunta_has_pergunta NATURAL JOIN pergunta
                                                                        WHERE id_perguntas = '$questao' AND id_subpergunta = '$contConsulta' AND id_alternativa 
                                                                        NOT IN (SELECT id_alternativa FROM resposta WHERE id_perguntas = '$questao' AND id_subpergunta = '$contConsulta')    
                                                                        GROUP BY resposta    
                                                                        UNION
                                                                        SELECT questao, resposta, alternativa, subquestao, id_subpergunta, id_perguntas, count(*) AS qtd 
                                                                        FROM pergunta NATURAL JOIN resposta NATURAL JOIN alternativa NATURAL JOIN subpergunta 
                                                                        WHERE id_perguntas = '$questao' AND id_subpergunta = '$contConsulta'
                                                                        GROUP BY resposta                                 
                                                                    )AS Resultado ORDER BY Resultado.resposta;"; 

                                            $resultadoSubPergunta = mysqli_query($conn, $selecaoSubPergunta);
                                            $linhaSubPergunta = mysqli_fetch_assoc($resultadoSubPergunta);
                                            $totalSubPergunta = mysqli_num_rows($resultadoSubPergunta);//calcula quantos dados foram retornados
                                                        
                                            fwrite($file, "\n".$aspas."Tipo".$aspas.": ".$aspas."bar".$aspas.",");
                                            fwrite($file, "\n".$aspas."Pergunta".$aspas.": ".$aspas.$linhaSubPergunta['questao'].$aspas.",");
                                            fwrite($file, "\n".$aspas."SubPergunta".$aspas.": ".$aspas.$linhaSubPergunta['subquestao'].$aspas.",");
                                            fwrite($file, "\n".$aspas."Id_perg".$aspas.": ".$aspas.$linhaSubPergunta['id_perguntas'].$aspas.","); 
                                            fwrite($file, "\n".$aspas."Id_sub".$aspas.": ".$aspas.$linhaSubPergunta['id_subpergunta'].$aspas.",");  
                                            
                                            $cont = 0;
                                            do {  
                                                //salvando em arrays os dados colhidos do banco
                                                    $respostasSubPergunta[$cont] = $linhaSubPergunta['resposta']; 
                                                    $quantidadeSubPergunta[$cont] = $linhaSubPergunta['qtd'];
                                                    $alternativaSubPergunta[$cont] = $linhaSubPergunta['alternativa']; 
                                                    $cont ++;
                                            }while($linhaSubPergunta = mysqli_fetch_assoc($resultadoSubPergunta));        
                                            
                                            fwrite($file, "\n".$aspas."Resposta".$aspas.": [");
                                            for ($i = 0; $i < $totalSubPergunta; $i++){
                                                fwrite($file, $aspas.$respostasSubPergunta[$i].$aspas);
                                                if ($i < $totalSubPergunta - 1){
                                                    fwrite($file, ",");
                                                }
                                            }
                                            fwrite($file, "],");

                                            fwrite($file, "\n".$aspas."Alternativa".$aspas.": [");
                                            for ($i = 0; $i < $totalSubPergunta; $i++){
                                                fwrite($file, $aspas.$alternativaSubPergunta[$i].$aspas);
                                                if ($i < $totalSubPergunta - 1){
                                                    fwrite($file, ",");
                                                }
                                            }
                                            fwrite($file, "],");

                                            fwrite($file, "\n".$aspas."Quantidade".$aspas.": [");
                                            for ($i = 0; $i < $totalSubPergunta; $i++){
                                                fwrite($file, $aspas.$quantidadeSubPergunta[$i].$aspas);
                                                if ($i < $totalSubPergunta - 1){
                                                    fwrite($file, ",");
                                                }
                                            }
                                            fwrite($file, "]\n}");


                                            //testa as questoes pra inserir corretamente no arquivo
                                            $teste62 = "SELECT questao FROM `pergunta` NATURAL JOIN `resposta` WHERE id_perguntas = 62;";
                                            $resultado62 = mysqli_query($conn, $teste62);
                                            $total62 = mysqli_num_rows($resultado62);  //calcula quantos dados foram retornados

                                            //se a questao 63 tiver sido respondida e eu estiver na ultima subequestao dela
                                            if ($total62 != 0 && $questao <= 63 ){  
                                                fwrite($file, ",\n{");
                                            //se não tiver, testa a 57
                                            }else{ //57 é a última pergunta da seção anterior
                                                $teste57 = "SELECT questao FROM `pergunta` NATURAL JOIN `resposta` WHERE id_perguntas = 57;";
                                                $resultado57 = mysqli_query($conn, $teste57);
                                                $total57 = mysqli_num_rows($resultado57);  

                                                if ($total57!= 0 && $questao <= 52 && $contConsulta <= 133){ //se a questao 57 tiver sido respondida e eu estiver na questao 52
                                                    fwrite($file, ",\n{");
                                                }else{ //se não tiver, testa a 52
                                                    $teste52 = "SELECT questao FROM `pergunta` NATURAL JOIN `resposta` WHERE id_perguntas = 52;";
                                                    $resultado52 = mysqli_query($conn, $teste52);
                                                    $total52 = mysqli_num_rows($resultado52);  

                                                    if ($total52!= 0 && $questao <= 49 && $contConsulta <= 133){ //se a questao 52 tiver sido respondida e eu estiver na questao 49
                                                        fwrite($file, ",\n{");
                                                    }else{ //se não tiver, testa a 49
                                                        $teste49 = "SELECT questao FROM `pergunta` NATURAL JOIN `resposta` WHERE id_perguntas = 49;";
                                                        $resultado49 = mysqli_query($conn, $teste49);
                                                        $total49 = mysqli_num_rows($resultado49);  

                                                        if ($total49!= 0 && $questao <= 42 && $contConsulta <= 9){ //se a questao 49 tiver sido respondida e eu estiver na questao 42
                                                            fwrite($file, ",\n{");
                                                        }else{ //se não tiver, testa a 42
                                                            $teste42 = "SELECT questao FROM `pergunta` NATURAL JOIN `resposta` WHERE id_perguntas = 42;";
                                                            $resultado42 = mysqli_query($conn, $teste42);
                                                            $total42 = mysqli_num_rows($resultado42); 
                                                            
                                                            if ($total42!= 0 && $questao <= 25 && $contConsulta <= 4){ //se a questao 42 tiver sido respondida e eu estiver na questao 25
                                                                fwrite($file, ",\n{");
                                                            }

                                                            $teste25 = "SELECT questao FROM `pergunta` NATURAL JOIN `resposta` WHERE id_perguntas = 25;";
                                                            $resultado25 = mysqli_query($conn, $teste25);
                                                            $total25 = mysqli_num_rows($resultado25); 
                                                            
                                                            if ($total25!= 0 && $questao <= 25 && $contConsulta <= 4){ //testa a 25 pq a 42 não é todo mundo que responde
                                                                fwrite($file, ",\n{");
                                                            }
                                                        }
                                                    }
                                                }
                                            }

                                            $indice = $questao.$contConsulta;

                                            ?>
                                                <canvas class = "grafico" id = "grafico<?php echo $indice;?>"></canvas>
                                            <?php

                                            if ($questao == 49){
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
                                            }else{
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
                                                    if ($questao == 52){
                                                        if ($contConsulta == 84){
                                                            $contConsulta = 86;
                                                        }else{
                                                            if ($contConsulta == 86){
                                                                $contConsulta = 108;
                                                            }else{
                                                                $contConsulta++;
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
                                                }
                                            } 

                                        }while($linhaConsulta = mysqli_fetch_assoc($resultadoConsulta));          
                                    }                          
                                }else{
                                    $selecao = "SELECT questao, resposta FROM pergunta NATURAL JOIN resposta where id_perguntas = '$questao'";
                                    $resultadoSelecao = mysqli_query($conn, $selecao);
                                    $linha = mysqli_fetch_assoc($resultadoSelecao);
                                    $total = mysqli_num_rows($resultadoSelecao); //calcula quantos dados foram retornados  

                                    if ($total == 0){
                                        $selecaoN = "SELECT questao FROM pergunta where id_perguntas = '$questao';";
                                        $resultadoSelecaoN = mysqli_query($conn, $selecaoN);
                                        $linhaN = mysqli_fetch_assoc($resultadoSelecaoN);
                                        
                                        ?><h5><?php echo $linhaN['questao'];?></h5>
                                        <h6 style = "padding-top: 3px; padding-bottom: 6px;">Essa pergunta ainda não teve respostas.<h6><?php
                                    }else{
                                        if($total > 0){  
                                            ?>
                                            <!--impressao da pergunta selecionada-->
                                            <h5><?php echo $linha['questao'];?></h5><?php 

                                            do {  
                                                ?><div id = "resposta">
                                                    <h6> * <?php echo $linha['resposta'];?>.<h6>
                                                </div><?php  
                                            }while($linha = mysqli_fetch_assoc($resultadoSelecao));
                                            echo "</br>";
                                        }
                                    } 
                                }
                            }                                                      
                        }
                        fwrite($file, "]");
                        
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
                   "#483D8B", "#6495ED", "#66CDAA", "#7FFFD4", "#7FFF00", "#87CEFA", "#E0FFFF", "#B0E0E6", "#98FB98"];
        var posicao = Math.floor(Math.random() * 28 + 1);
        return cor[posicao];
    }

    var url = 'http://localhost/questionario/Administrador/superior.txt';
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
            for (i = 1; i <= 64; i++) {   
                for(c = 0; c < 30; c++){
                    color[c] = randomRgb();
                }

                if(dados[k].Tipo == 'bar'){
                    var indice = dados[k].Id_perg.concat(dados[k].Id_sub);
                    const elementBarra = document.getElementById(`grafico${indice}`);
                    new Chart(elementBarra, {
                        type: dados[k].Tipo,
                        data: {
                            labels: dados[k].Alternativa,
                            datasets: [
                                {
                                    label: dados[k].SubPergunta,
                                    data: dados[k].Quantidade,
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
                                labels: { 
                                    boxWidth: 0,
                                    fontSize: 18 
                                } 
                            } 
                        }
                    }); 
                }else{
                    var indice = dados[k].Id_perg;
                    const elementBarra = document.getElementById(`grafico${indice}`);
                    new Chart(elementBarra, {
                        type: dados[k].Tipo,
                        data: {
                            labels: dados[k].Alternativa,
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
                k++;
            }
        }
    }    
</script>