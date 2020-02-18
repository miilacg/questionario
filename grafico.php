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

    <link rel = "stylesheet" href = "https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity = "sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> 
    <link rel = "stylesheet" href = "https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity = "sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin = "anonymous">  
    <link rel = "stylesheet" href = "estilo.css">
    <link rel = "stylesheet" href = "graficos.css">

    <title>Questionario</title>

	<head>         
		<style>	
            #botao{
                width:200;
                height:40;
            }
		</style>
	</head>	

	<body>
        <br>
        <div class = "corpo">
            <div class = "card text-center">
                <div class = "card-header"> 
                    <br><h1>Gráficos</h1><br>
                </div> 	
                
                <div class= "card-body" style = "padding-left: 3vw; padding-right: 3.5vw; padding-top: 2.5vw;">
                    <?php
                        $aspas = "\"";
                        $nomeArquivo = "graficoSuperior.txt";
                        $file = fopen($nomeArquivo, 'w');
                        fwrite($file, "[{");

                        $quantidade = array();
                        $respostas = array();
                        $alternativa = array();
                        $string_Total = array();
                        
                        //$_POST["questao"] é o id da pergunta
                        for ($questao = 1; $questao < 64; $questao++) { 
                            $string_Total[$questao] = 0;          

                            if ($questao < 21 || $questao == 22 || ($questao > 25 && $questao < 29) || $questao == 30 || ($questao > 31 && $questao < 42) || ($questao > 42 && $questao < 47) || ($questao > 52 && $questao < 57) || $questao == 60 || $questao == 61 || $questao == 63) {
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
                                
                                $selecaoMarcadas = "SELECT questao, resposta, alternativa, count(*) AS qtd 
                                                    FROM pergunta NATURAL JOIN resposta NATURAL JOIN alternativa 
                                                    WHERE id_perguntas = '$questao' 
                                                    GROUP BY resposta ORDER BY resposta.resposta ASC;";  
                    
                                $resultadoSelecaoMarcadas = mysqli_query($conn, $selecaoMarcadas);
                                $totalMarcadas = mysqli_num_rows($resultadoSelecaoMarcadas);//calcula quantos dados foram retornados
                                
                                $string_Total[$questao] = $totalMarcadas; 
                                        
                                ?>                            
                                <!--impressao da pergunta selecionada-->
                                <h5><?php echo $linha['questao'];?></h5><?php 
                                fwrite($file, "\n".$aspas."Titulo".$aspas.": ".$aspas.$linha['questao'].$aspas.",");
                                        
                                $cont = 0;
                                do {  
                                    //salvando em arrays os dados colhidos do banco
                                        $respostas[$cont] = $linha['resposta']; 
                                        $quantidade[$cont] = $linha['qtd'];
                                        $alternativa[$cont] = $linha['alternativa']; 
                                        $cont ++;
                                }while($linha = mysqli_fetch_assoc($resultadoSelecao));

                                //convertendo o array para uma string utilizada no JS
                                //os valores são separados por virgula                               
                                $string_total = implode(',', $string_Total);
                                
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
                                    echo "Essa pergunta não teve respostas.</br>";
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
        <script src = "https://code.jquery.com/jquery-3.3.1.min.js" ></script>
        <script src= "https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js" ></script>
        <script src= "https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.js" ></script>
	</body>
</html>

<script language = javascript type = "text/javascript"> 
    var url = 'http://localhost/questionario/graficoSuperior.txt';
    var xhttp = new XMLHttpRequest();
    xhttp.open("GET", url);
    xhttp.send();

    xhttp.onload = function(){
        var dados= JSON.parse(xhttp.responseText);  
        createChart(dados);
    } 

    function getRandomRgb() {
        var cor = ["#000080", "#00008B", "#0000CD", "#0000FF", "#007BFF", "#007FFF", "#008B8B", "#00BDCE", "#00BFFF", "#00CCEE",  
                   "#09ACDB", "#120A8F", "#17A2B8", "#1E90FF", "#248EFF", "#44D7A8", "#483D8B", "#50C878", "#5A4FCF", "#66CDAA",  
                   "#6A5ACD", "#7FFFD4", "#800080", "#8470FF", "#8A2BE2", "#8B008B", "#9932CC", "#9966CC", "#BA55D3", "#DDA0DD"];
        var posicao = Math.floor(Math.random() * 29 + 1);
        return cor[posicao];
       /* var num = Math.round(0xffffff * Math.random());
        var r = (num >> 8) & 255;
        var g = num & 255;
        var b = (num >> 16) & 255;
        return "rgb(" + r + ", " + g + ", " + b + ")";*/
    }

    function createChart(jsonObj){         
        var dados = jsonObj;
        var string_total = "<?php echo $string_total?>";
        var total = string_total.split(',');
        var j, i, k = 0, color = [], c;

        for (j in dados) {                        
            for (i = 1; i < 64; i++) {                            
                if (i < 21 || i == 22 || (i > 25 && i < 29) || i == 30 || (i > 31 && i < 42) || (i > 42 && i < 47) || (i > 52 && i < 57) || i == 60 || i == 61 || i == 63){
                    if (total[i-1] != 0){
                        const element = document.getElementById(`grafico${i}`);

                        for(c = 0; c < 30; c++){
                            color[c] = getRandomRgb();
                        }

                        new Chart(element, {
                            type: "pie",
                            data: {
                                labels: dados[k].Alternativa,
                                datasets: [
                                    {
                                        data: dados[k].Quantidade,
                                        backgroundColor: color
                                    }
                                ]
                            }
                        });  
                    }k++;                                    
                }
            }
        }
    } 
    
    function voltar(){
        window.location.assign ("graficosup.php");
    }
</script>