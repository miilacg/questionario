<?php
	include '../acessobancotec.php';
    include 'vTecnico.php';
?>

<!DOCTYPE HTML>
<html lang = "pt-br">
    <head>
        <meta charset = "utf-8">
        <meta name = "viewport" content = "width=device-width, initial-scale=1, shrink-to-fit=no">

        <script src = "tecnico.js"></script>

        <link rel = "stylesheet" href = "https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity = "sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin = "anonymous">
        <link rel = "stylesheet" href = "https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity = "sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin = "anonymous">
        <link rel = "stylesheet" href = "../estilo.css">
        <link rel = "stylesheet" href = "tecnico.css">

        <title>Questionário</title>
	</head>
	<body>
		<form method = "POST" action = "ilazertec.php">
            <br>
            <div class = "corpo">
                <div class = "card text-center"> 
                    <div class = "card-header"> 
                        <br><h1>Responda ao questionário abaixo</h1>
                        <br><h2>Lazer, saúde e cidadania</h2><br>
                    </div>  

                    <div class= "card-body" >		
                        <label for = "perg44">Você fuma?</label><br>
                        <div class= "form-check">
                            <input class= "form-check-input" type = "radio" name = "perg44" value = "A" required/>Sim<br>
                            <input class= "form-check-input" type = "radio" name = "perg44" value = "B"/>Não<br><br>
                        </div>


                        <label for = "perg45">Você faz algum trabalho voluntário?</label><br>
                        <div class= "form-check">
                            <input class= "form-check-input" type = "radio" name = "perg45" value = "A" required/>Sim<br>
                            <input class= "form-check-input" type = "radio" name = "perg45" value = "B"/>Não<br><br>
                        </div>

                        <label for = "perg46">Qual a sua média de sono?</label><br>
                        <div class= "form-check">
                            <input class= "form-check-input" type = "radio" name = "perg46" value = "A" required/>Menos de 2 horas<br>
                            <input class= "form-check-input" type = "radio" name = "perg46" value = "B"/>2 a 4 horas<br>
                            <input class= "form-check-input" type = "radio" name = "perg46" value = "C"/>4 a 6 horas<br>
                            <input class= "form-check-input" type = "radio" name = "perg46" value = "D"/>6 a 8 horas<br>
                            <input class= "form-check-input" type = "radio" name = "perg46" value = "E"/>8 a 10 horas<br>
                            <input class= "form-check-input" type = "radio" name = "perg46" value = "F"/>Mais de 10 horas<br><br>
                        </div>                    

                        <label for = "perg47">Você pratica esporte?</label><br>
                        <div class= "form-check">
                            <input class= "form-check-input" type = "radio" name = "perg47" value = "A" onChange = "abre48()" required/>Sim<br>
                            <input class= "form-check-input" type = "radio" name = "perg47" value = "B" onChange = "abre48()"/>Não<br><br>
                        </div>

                        <div id = "quarentaeoito" class = "esconde">   
                            <label for = "perg48">Marque os esportes que você pratica</label><br>
                            <div class= "form-check">
                                <input class= "form-check-input" type = "checkbox" name = "48A" value = "on"/>Atletismo<br>
                                <input class= "form-check-input" type = "checkbox" name = "48B" value = "on"/>Basquete<br>
                                <input class= "form-check-input" type = "checkbox" name = "48C" value = "on"/>Futebol<br>
                                <input class= "form-check-input" type = "checkbox" name = "48D" value = "on"/>Musculação<br>
                                <input class= "form-check-input" type = "checkbox" name = "48E" value = "on"/>Vôlei<br>             
                                <input class= "form-check-input" type = "checkbox" name = "48F" value = "on"/>Outro<br><br>
                            </div>
                        </div>

                        <div class = "botao">
                            <a href = "tecnologiatec.php"><input id = "botao" type = "button" class= "btn btn-primary" value = "Anterior"/></a>
                            <input id = "botao" type = "submit" class= "btn btn-primary" name = "proximo" value = "Próximo"/>
                        </div><br>

                        <div class="progress">
                            <div class="progress-bar progress-bar-striped bg-info" role="progressbar" style="width: 75%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                    
                    <div class= "card-footer" >  </div> 
                </div>
            </div>
        </form>
        
        <script src = "https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity = "sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin = "anonymous"></script>
        <script src = "https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity = "sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin = "anonymous"></script> 
        <script src = "https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity = "sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin = "anonymous"></script> 
        <script src = "https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity = "sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin = "anonymous"></script>
	</body>
</html>