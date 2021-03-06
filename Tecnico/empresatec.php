﻿<?php
    include '../acessobancotec.php';
    include 'vTecnico.php';
?>

<!DOCTYPE HTML>
<html lang = "pt-br">
	<head>
		<meta charset = "utf-8">	
        <meta name = "viewport" content = "width=device-width, initial-scale=1, shrink-to-fit=no">

        <link rel = "stylesheet" href = "https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity = "sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin = "anonymous"> 
        <link rel = "stylesheet" href = "../estilo.css">
        
		<title>Questionário</title>
	</head>
	<body>
		<form method = "POST" action = "iempresatec.php">
            <br>
            <div class = "corpo">
                <div class= "card text-center"> 
                    <div class= "card-header">
                        <br><br><h1>Responda ao questionário abaixo</h1>
			            <br><h2>Empresa em que trabalha</h2><br>
                    </div>
                    
                    <div class= "card-body">	
                        <label for = "perg36">Qual ramo da empresa que você trabalha?</label><br>
                        <div class= "form-check">
                            <input class= "form-check-input" type = "radio" name = "perg36" value = "A" required/>Aeroespacial e defesa<br>
                            <input class= "form-check-input" type = "radio" name = "perg36" value = "B"/>Automobilística<br>
                            <input class= "form-check-input" type = "radio" name = "perg36" value = "C"/>Fundos de aposentatoria e pensão<br>
                            <input class= "form-check-input" type = "radio" name = "perg36" value = "D"/>Industria farmacêutica<br>
                            <input class= "form-check-input" type = "radio" name = "perg36" value = "E"/>Maquinas e equipamentos<br>
                            <input class= "form-check-input" type = "radio" name = "perg36" value = "F"/>Organização sem fins lucrativos<br>
                            <input class= "form-check-input" type = "radio" name = "perg36" value = "G"/>Setor público<br>
                            <input class= "form-check-input" type = "radio" name = "perg36" value = "H"/>Serviços<br>
                            <input class= "form-check-input" type = "radio" name = "perg36" value = "I"/>Tecnologia da informação<br>
                            <input class= "form-check-input" type = "radio" name = "perg36" value = "J"/>Telecomunicações<br>
                            <input class= "form-check-input" type = "radio" name = "perg36" value = "K"/>Outros<br><br>
                        </div>

                        <label for = "perg37">Quantas pessoas trabalham na empresa?</label><br>
                        <div class= "form-check"> 
                            <input class= "form-check-input" type = "radio" name = "perg37" value = "A" required/>Menos de 10<br>
                            <input class= "form-check-input" type = "radio" name = "perg37" value = "B"/>Entre 10 e 20<br>
                            <input class= "form-check-input" type = "radio" name = "perg37" value = "C"/>Entre 21  35<br>
                            <input class= "form-check-input" type = "radio" name = "perg37" value = "D"/>Entre 36 e 50<br>
                            <input class= "form-check-input" type = "radio" name = "perg37" value = "E"/>Entre 51 e 100<br>
                            <input class= "form-check-input" type = "radio" name = "perg37" value = "F"/>Mais de 100<br><br>
                        </div>                        

                        <div class = "botao">
                            <a href = "dados_profissionaistec.php"><input id = "botao" type = "button" class= "btn btn-primary" value = "Anterior"/></a>
                            <input id = "botao" type = "submit" class= "btn btn-primary" name = "proximo" value = "Próximo"/>
                        </div><br>		

                        <div class="progress">
                            <div class="progress-bar progress-bar-striped bg-info" role="progressbar" style="width: 37.5%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>

                    </div>
                        
                    <div class= "card-footer" >  </div>
                </div> 
            </div>
		</form>
	</body>
</html>