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
                        $quantidade = array();
                        $respostas = array();
                        $alternativa = array();
                        
                        //$_POST["questao"] é o id da pergunta
                        if (isset($_POST["questao"])){//verifica se a variavel foi definida                                     
                            foreach($_POST["questao"] as $questao){ //percorre o vetor  
                                if ($questao >= 23 && $questao <= 25 || $questao == 42 || $questao >= 47 && $questao <= 52 || $questao >= 57 && $questao <= 59 || $questao == 62){
                                    echo "ola";
                                }else{    
                                    $selecao = "SELECT * from(
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
                                    
                                    $resultadoSelecao = mysqli_query($conn, $selecao);
                                    $linha = mysqli_fetch_assoc($resultadoSelecao);
                                    $total = mysqli_num_rows($resultadoSelecao);//calcula quantos dados foram retornados   
                                    ?>
                        
                                    <!--impressao da pergunta selecionada-->
                                    <h5><?php echo $linha['questao'];?></h5><?php  
                                    
                                    if ($total == 0){ // se a pergunta nao tiver tido respostas
                                        $selecaoN = "SELECT questao FROM pergunta where id_perguntas = '$questao';"; 
                                        $resultadoSelecaoN = mysqli_query($conn, $selecaoN);
                                        $linhaN = mysqli_fetch_assoc($resultadoSelecaoN);
                                        
                                        ?><h5><?php echo $linhaN['questao'];?></h5><?php
                                        echo "Essa pergunta não teve respostas.</br>";
                                    }else{ //se a questão tiver alguma resposta
                                        if($total > 0){       
                                            do {  
                                                //salvando em arrays os dados colhidos do banco
                                                ?><div id = "resposta"> <?php
                                                    $respostas[] = $linha['resposta']; 
                                                    $quantidade[] = $linha['qtd'];
                                                    $alternativa[] = $linha ['alternativa'];
                                                ?>
                                                </div><?php  
                                            }while($linha = mysqli_fetch_assoc($resultadoSelecao));
                                            echo "</br>";
                                        }
                                        //convertendo os arrays para uma string utilizada no JS
                                        //os valores são separados por virgula
                                        $string_quantidade = implode(',', $quantidade);
                                        $string_respostas = implode(',', $respostas);
                                    }
                                }
                            }?>  
                            <!-- espaco em que o grafico será colocado !-->
                            <canvas id="grafico"></canvas>
                            <?php
                            echo "</br>";
                            //impressao de uma legenda com os valores de cada alternativa
                            for ($i = 0; $i < $total; $i++){
                                echo $respostas[$i], ": ", $alternativa[$i];
                                echo "</br>";
                            }
                        }else{?>
                            <!-- caso a pessoa não tenho selecionado nenhuma questão !-->
                            <div class = "caixa">
                                <h6><?php echo "</br></br>Você não escolheu selecionou nenhuma pergunta</br></br>";?></h6>
                            </div><?php
                        }                        
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
        var ctx = document.getElementById("grafico"); 
        var myChart = new Chart(ctx, {type: 'pie', data});  
    }   
    
    function voltar(){
        window.location.assign ("graficosup.php");
    }
</script>