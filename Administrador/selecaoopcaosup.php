<?php
    include 'vAdministrador.php'; 
?>

<!DOCTYPE HTML>
<html lang = "pt-br">
    <head>
        <meta charset = "utf-8">
        <meta name = "viewport" content = "width=device-width, initial-scale=1, shrink-to-fit=no">

        <link rel = "stylesheet" href = "https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity = "sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin = "anonymous"> 
        <link rel = "stylesheet" href = "https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity = "sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin ="anonymous">        
        <link rel = "stylesheet" href = "../estilo.css">
        <link rel = "stylesheet" href = "selecao.css">
        
        <title>Questionario</title>   
	</head>	
	<body>
        <br>
        <div class = "corpo">
            <div class = "card text-center">
                <div class = "card-header">  </div>    
                    <div class= "card-body">
                        <br><br><br>
                        <h1>Escolha uma opção</h1>	
                        <br><br>
                        <div class = "caixa">
                            <a href = "graficSuperior.php"><input id = "botao" type = "button" class= "btn btn-primary" value = "Gráficos"/></a><br><br>
                            <a href = "discursivosup.php"><input id = "botao" type = "button" class= "btn btn-primary" value = "Discursivo"/></a><br><br>
                            <!-- <a href = "analisesup.php"><input id = "botao" type = "button" class= "btn btn-primary" value = "Analise dos dados"/></a> --><br><br>
                            <a href = "selecaocurso.php"><input id = "botao" type = "button" class= "btn btn-primary" value = "Voltar"/></a>
                        </div>                        
                        <br><br><br>
                    </div>

                    <div class= "card-footer"> </div>
            </div>                   
        </div>
        
        <script src = "https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity = "sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin = "anonymous" ></script>
        <script src = "https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity = "sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin = "anonymous"></script>
        <script src = "https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity = "sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin = "anonymous"></script>
        <script src = "https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity = "sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin = "anonymous"></script>
	</body>
</html>