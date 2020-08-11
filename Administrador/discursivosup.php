<?php
    include 'vAdministrador.php';
    include '../acessobancosup.php';

    $consulta = sprintf("SELECT questao, id_perguntas FROM `pergunta` WHERE id_perguntas");
    $dados = mysqli_query($conn, $consulta);// transforma os dados em um array
    $linha = mysqli_fetch_assoc($dados);// calcula quantos dados retornaram
    $total = mysqli_num_rows($dados);
?>

<script language = javascript type = "text/javascript">          
    function voltar(){
        window.location.assign ("selecaoopcaosup.php");
    }
</script>

<!DOCTYPE HTML>
<html lang = "pt-br">
    <head>
        <meta charset = "utf-8">
        <meta name = "viewport" content = "width=device-width, initial-scale=1, shrink-to-fit=no">

        <link rel = "stylesheet" href = "https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity = "sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin = "anonymous"> 
        <link rel = "stylesheet" href = "https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity = "sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin = "anonymous">        
        <link rel = "stylesheet" href = "../estilo.css">
        <link rel = "stylesheet" href = "selecao.css">

        <title>Questionario</title> 
	</head>	
	<body>
		<form method = "POST" action = "discursivosuperior.php"><br>
			<div class = "corpo">
                <div class = "card text-center">
                    <div class = "card-header"> 
                        <br><h1>Selecione as questões para visualizar as repostas</h1><br>
                    </div> 	
        
                    <div class= "card-body">
                        <br><br>
                        <?php
                            if($total > 0) {// inicia o loop que vai mostrar todos os dados
                                do {
                        ?>
                        <div class= "form-check">
                            <input id = "questao" class= "form-check-input" type = "checkbox" name = "questao[]" value = "<?=$linha['id_perguntas']?>"/><?=$linha['questao']?><br>
                        </div>
                        <?php
                                // finaliza o loop que vai mostrar os dados
                                }while($linha = mysqli_fetch_assoc($dados));
                            }
                        ?>
                    </div>
                    
                    <br><div class = "botao discursivo">
                        <input id = "botao" type = "button" class= "btn btn-primary" value = "Voltar" onClick = "voltar();"/>
                        <input id = "botao" type = "submit" class= "btn btn-primary" name = "constuir" value = "Ver respostas"/>
                    </div><br>
                    
                    <div class= "card-footer">  </div>
                    
                </div>    
            </div>
        </form>   
        
        <script src = "https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity = "sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin = "anonymous"></script>
        <script src = "https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity = "sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin = "anonymous"></script>
        <script src = "https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity = "sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin = "anonymous"></script>
	</body>
</html>