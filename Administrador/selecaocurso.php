<?php
    include 'vAdministrador.php'; 
?>

<!DOCTYPE HTML>
<html lang = "pt-br">
    <head>
        <meta charset = "utf-8">
        <meta name = "viewport" content = "width=device-width, initial-scale=1, shrink-to-fit=no">

        <link rel = "stylesheet" href = "https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity = "sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> 
        <link rel = "stylesheet" href = "https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity = "sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">        
        <link rel = "stylesheet" href = "../estilo.css">
        <link rel = "stylesheet" href = "selecao.css">

        <title>Questionario</title>
	</head>	
	<body>        
        <br>
        <div class = "corpo selecao">
            <div class = "card text-center">
                <div class = "card-header">  </div>    
                    <div class = "card-body">
                        <br><br><br><br><br><br>
                        <h1>Escolha uma opção</h1>	
                        <br><br>
                        <div class = "caixa">
                            <a href = "selecaoopcaotec.php"><input id = "botao" type = "button" class= "btn btn-primary" value = "Visualizar dados do curso técnico"/></a><br><br>
                            <a href = "selecaoopcaosup.php"><input id = "botao" type = "button" class= "btn btn-primary" value = "Visualizar dados do curso superior"/></a>
                        </div>                        
                        <br><br><br><br>
                    </div>

                    <div class= "card-footer" >  </div>
            </div>                   
        </div>
        
    </body>
</html>