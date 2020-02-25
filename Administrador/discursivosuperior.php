<?php
    include 'vAdministrador.php';
    include '../acessobancosup.php';
?>

<script language = javascript type = "text/javascript">          
    function voltar(){
        window.location.assign ("discursivosup.php");
    }
</script>

<!DOCTYPE HTML>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> 
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">        
        <link rel = "stylesheet" href = "../estilo.css">
        <link rel = "stylesheet" href = "selecao.css">

        <title>Questionario</title>   
	</head>	
	<body>
		<br>
        <div class = "corpo">
            <div class = "card text-center">
                <div class = "card-header"> 
                    <br><h1>Respostas</h1><br>
                </div>

                <div class= "card-body">                            
                    <?php
                        //$_POST["questao"] é o id da pergunta
                        if (isset($_POST["questao"])){//verifica se a variavel foi definido                                
                            foreach($_POST["questao"] as $questao){ //percorre o vetor  
                                $selecao = "SELECT questao, resposta FROM pergunta NATURAL JOIN resposta where id_perguntas = '$questao'";
                                $resultadoSelecao = mysqli_query($conn, $selecao);
                                $linha = mysqli_fetch_assoc($resultadoSelecao);
                                $total = mysqli_num_rows($resultadoSelecao); //calcula quantos dados foram retornados  

                                ?>
                                <!--impressao da pergunta selecionada-->
                                <h5><?php echo $linha['questao'];?></h5><?php

                                if ($total == 0){
                                    $selecaoN = "SELECT questao FROM pergunta where id_perguntas = '$questao';";
                                    $resultadoSelecaoN = mysqli_query($conn, $selecaoN);
                                    $linhaN = mysqli_fetch_assoc($resultadoSelecaoN);
                                    
                                    ?><h5><?php echo $linhaN['questao'];?></h5><?php
                                    echo "Essa pergunta não teve respostas.</br>";
                                }else{
                                    if($total > 0){       
                                        do {  
                                            ?><div id = "resposta"><?php echo $linha['resposta'];?></div><?php  
                                        }while($linha = mysqli_fetch_assoc($resultadoSelecao));
                                        echo "</br>";
                                    }
                                }                                     
                            }                                
                        }else{?>
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

        <script src = "https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity = "sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin = "anonymous"></script>
        <script src = "https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity = "sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin = "anonymous"></script>
	</body>
</html>