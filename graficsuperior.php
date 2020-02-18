<?php
    session_start();

    $cpf = $_SESSION['cpf'];
    $curso = $_SESSION['curso'];

    if ($curso == 'Administrador'){
        $valor = isset($_SESSION['cpf']) ? 's' : 'n';

        if ($valor == 'n'){
            header("Location: index.php");
        }
    }else{
       header("Location: index.php"); 
    } 

    include 'acessobancosup.php';
?>

<!DOCTYPE HTML>
<html lang = "pt-br">
	<meta charset = "utf-8">
    <meta name = "viewport" content = "initial-scale=1, user-scalable = no">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> 
    
    <title>Questionario</title>
    
	<head>
        <link rel = "stylesheet" href = "https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity = "sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin = "anonymous">  
        
        <script src= "https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js" ></script>
        <script src= "https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.js" ></script>
        
        <link rel = "stylesheet" href = "estilo.css">
        
		<style>	
            #botao{
                width:200;
                height:40;
            }
		</style>
	</head>	
	<body onload = "createChart();">
        <br>
        <div class = "corpo">
            <div class = "card text-center">
                <div class = "card-header"> 
                    <br><h1>Gráficos</h1><br>
                </div> 	
                
                <div class= "card-body">
                    <?php
                        $aspas = "\"";
                        $nomeArquivo = "graficoSuperior.txt";
                        $file = fopen($nomeArquivo, 'w');
                        fwrite($file, "[");

                        $quantidade = array();
                        $respostas = array();
                        $alternativa = array();
                        
                        //$_POST["questao"] é o id da pergunta
                        for ($questao = 1; $questao < 64; $questao++) {                            
                            if ($questao != 21 && $questao != 29 && $questao != 31 && $questao != 45){
                                $selecao = "SELECT questao, resposta, alternativa, count(*) AS qtd 
                                            FROM pergunta NATURAL JOIN resposta NATURAL JOIN alternativa 
                                            WHERE id_perguntas = '$questao' 
                                            GROUP BY resposta  ORDER BY resposta.resposta;"; 
                                
                                $resultadoSelecao = mysqli_query($conn, $selecao);
                                $linha = mysqli_fetch_assoc($resultadoSelecao);
                                $total = mysqli_num_rows($resultadoSelecao);//calcula quantos dados foram retornados   

                                if ($total == 0){ // se a pergunta nao tiver tido respostas
                                    $selecaoN = "SELECT questao FROM pergunta where id_perguntas = '$questao';"; 
                                    $resultadoSelecaoN = mysqli_query($conn, $selecaoN);
                                    $linhaN = mysqli_fetch_assoc($resultadoSelecaoN);
                                    
                                    ?><h5><?php echo $linhaN['questao'];?></h5><?php
                                    echo "Essa pergunta não teve respostas.</br>";

                                }else{ //se a questão tiver alguma resposta
                                    if($total > 0){   
                                        $selecaoS = "SELECT * from(
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
                
                                        $resultadoSelecaoS = mysqli_query($conn, $selecaoS);
                                        $linhaS = mysqli_fetch_assoc($resultadoSelecaoS);
                                        $totalS = mysqli_num_rows($resultadoSelecaoS);//calcula quantos dados foram retornados   
                                        ?>
                            
                                        <!--impressao da pergunta selecionada-->
                                        <h5><?php echo $linhaS['questao'];?></h5><?php 
                                        fwrite($file, "{\n".$aspas."Titulo".$aspas.": ".$aspas.$linhaS['questao'].$aspas.",");
                                        
                                        $cont = 0;
                                        do {  
                                            //salvando em arrays os dados colhidos do banco
                                                $respostas[$cont] = $linhaS['resposta']; 
                                                $quantidade[$cont] = $linhaS['qtd'];
                                                $alternativa[$cont] = $linhaS['alternativa']; 
                                                $cont ++;
                                        }while($linhaS = mysqli_fetch_assoc($resultadoSelecaoS));

                                        fwrite($file, "\n".$aspas."Alternativa".$aspas.": [");
                                        for ($i = 0; $i < $totalS; $i++){
                                            fwrite($file, $aspas.$respostas[$i].$aspas);
                                            if ($i < $totalS - 1){
                                                fwrite($file, ",");
                                            }
                                        }
                                        fwrite($file, "}],");
                                        fwrite($file, "\n".$aspas."Quantidade".$aspas.": [");
                                        for ($i = 0; $i < $totalS; $i++){
                                            fwrite($file, $aspas.$quantidade[$i].$aspas);
                                            if ($i < $totalS - 1){
                                                fwrite($file, ",");
                                            }
                                        }
                                        fwrite($file, "]\n");
                                        fwrite($file, "");
    
                                        fwrite($file, "\n");
                                        echo "</br>";
                                    }
                                }
                            }
                        }
                        fwrite($file, "]");
                    ?>                 
                </div>   
                
                <div class = "botao">
                    <input id = "botao" type = "button" class= "btn btn-primary" value = "Voltar" onClick = "voltar();"/>
                </div><br>

                <div class= "card-footer">  </div>

            </div>    
        </div>
        <script src="https://code.jquery.com/jquery-3.3.1.min.js" ></script>
	</body>
</html>

<script language = javascript type = "text/javascript"> 
    function createChart(){         
        var tamanho = "<?php echo $total;?>"; //quantidade de alternativas
        
        //recebendo os dados do php
        var string_quantidade = "<?php echo $string_quantidade?>";
        var string_respostas = "<?php echo $string_respostas?>";
        
        //transformação da string para um vetor
        var quantidade = string_quantidade.split(',');
        var respostas = string_respostas.split(',');
        
    
        var data = {
            labels: [respostas[0], respostas[1], respostas[2], respostas[3]],
            datasets: [
                {
                    data: [quantidade[0], quantidade[1], quantidade[2], quantidade[3]],
                    backgroundColor: ['#007bff', '#6610f2', '#17a2b8', '#4fd8e8']
                }
            ]
        };
        
        //criação do grafico de pizza
        var ctx = document.getElementById("grafico1"); 
        var myChart = new Chart(ctx, {type: 'pie', data});  

        var ctx = document.getElementById("grafico2"); 
        var myChart = new Chart(ctx, {type: 'pie', data}); 
    }   
    
    function voltar(){
        window.location.assign ("graficosup.php");
    }
</script>