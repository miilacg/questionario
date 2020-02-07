<?php
	include 'acessobancosup.php';
    include 'vsup.php';
?>

<script language = javascript type = "text/javascript"> 
    function voltar(){
        window.location.assign ("mercadosup.php");
    }
</script>

<!DOCTYPE HTML>
<html lang="pt-br">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> 
	
    <title>Questionario</title>
	<head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        
        <link rel = "stylesheet" href = "estilo.css">
        <style>
            .slider-wrapper {
                display: inline-block;
                width: 60%;
                padding: 5;
            }  
            .slider-wrapper input {
                width: 50%;
                height: 40px;
                margin: 0;
                transform-origin: 75px 75px;
            }
            #q50{
                height: 1500px;
            }
            #q51{
                height: 730px;
            }
            #q52{
                height: 400px;
            }
        </style>
	</head>
	<body>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        
		<form method = "POST" action = "itecnologiasup.php"><br>
			<div class = "corpo">
                <div class = "card text-center"> 
                    <div class = "card-header"> 
                        <br><h1>Responda ao questionário abaixo</h1>
                        <br><h2>Tecnologia</h2><br>
                    </div>
                    
                    <div class= "card-body"> 	
                        <label for = "perg50">Com qual frequência você utiliza as seguintes linguagens de programação no seu trabalho?</label><br>
                        <label>(Utilize o lado mais a esquerda para pouca utilizada e o mais a direita para muita utilizada)</label><br>
                        <div class = "slider-wrapper" id = "q50">
                            Java<br><input type = "range" list = "tickmarks" name = "50A" min = "1" max = "5"> 
                            <datalist id="tickmarks">
                              <option value="1">
                              <option value="2">
                              <option value="3">
                              <option value="4">
                              <option value="5">
                            </datalist><br>

                            JavaScript<br><input type = "range" list = "tickmarks" name = "50B" min = "1" max = "5"> 
                            <datalist id="tickmarks">
                              <option value="1">
                              <option value="2">
                              <option value="3">
                              <option value="4">
                              <option value="5">
                            </datalist><br>
                            
                            Python<br><input type = "range" list = "tickmarks" name = "50C" min = "1" max = "5"/>
                            <datalist id="tickmarks">
                              <option value="1">
                              <option value="2">
                              <option value="3">
                              <option value="4">
                              <option value="5">
                            </datalist><br>
                            
                            C<br><input type = "range" list = "tickmarks" name = "50D" min = "1" max = "5"/>
                            <datalist id="tickmarks">
                              <option value="1">
                              <option value="2">
                              <option value="3">
                              <option value="4">
                              <option value="5">
                            </datalist><br>
                            
                            C++<br><input type = "range" list = "tickmarks" name = "50E" min = "1" max = "5"/> 
                            <datalist id="tickmarks">
                              <option value="1">
                              <option value="2">
                              <option value="3">
                              <option value="4">
                              <option value="5">
                            </datalist><br>
                            
                            C#<br><input type = "range" list = "tickmarks" name = "50F" min = "1" max = "5"/>
                            <datalist id="tickmarks">
                              <option value="1">
                              <option value="2">
                              <option value="3">
                              <option value="4">
                              <option value="5">
                            </datalist><br>
                            
                            Ruby<br><input type = "range" list = "tickmarks" name = "50G" min = "1" max = "5"/>
                            <datalist id="tickmarks">
                              <option value="1">
                              <option value="2">
                              <option value="3">
                              <option value="4">
                              <option value="5">
                            </datalist><br>
                            
                            PHP<br><input type = "range" list = "tickmarks" name = "50H" min = "1" max = "5"/>
                            <datalist id="tickmarks">
                              <option value="1">
                              <option value="2">
                              <option value="3">
                              <option value="4">
                              <option value="5">
                            </datalist><br>
                            
                            R<br><input type = "range" list = "tickmarks" name = "50I" min = "1" max = "5"/>
                            <datalist id="tickmarks">
                              <option value="1">
                              <option value="2">
                              <option value="3">
                              <option value="4">
                              <option value="5">
                            </datalist><br>
                            
                            Objective-C<br><input type = "range" list = "tickmarks" name = "50J" min = "1" max = "5"/> 
                            <datalist id="tickmarks">
                              <option value="1">
                              <option value="2">
                              <option value="3">
                              <option value="4">
                              <option value="5">
                            </datalist><br>
                            
                            Kotlin<br><input type = "range" list = "tickmarks" name = "50K" min = "1" max = "5"/>
                            <datalist id="tickmarks">
                              <option value="1">
                              <option value="2">
                              <option value="3">
                              <option value="4">
                              <option value="5">
                            </datalist><br>
                            
                            Delphi<br><input type = "range" list = "tickmarks" name = "50L" min = "1" max = "5"/>
                            <datalist id="tickmarks">
                              <option value="1">
                              <option value="2">
                              <option value="3">
                              <option value="4">
                              <option value="5">
                            </datalist><br>
                            
                            TypeScript<br><input type = "range" list = "tickmarks" name = "50M" min = "1" max = "5"/>
                            <datalist id="tickmarks">
                              <option value="1">
                              <option value="2">
                              <option value="3">
                              <option value="4">
                              <option value="5">
                            </datalist><br>
                            
                            Go<br><input type = "range" list = "tickmarks" name = "50N" min = "1" max = "5"/>
                            <datalist id="tickmarks">
                              <option value="1">
                              <option value="2">
                              <option value="3">
                              <option value="4">
                              <option value="5">
                            </datalist><br>
                            
                            ASP<br><input type = "range" list = "tickmarks" name = "50O" min = "1" max = "5"/>
                            <datalist id="tickmarks">
                              <option value="1">
                              <option value="2">
                              <option value="3">
                              <option value="4">
                              <option value="5">
                            </datalist><br>
                            
                            Pascal<br><input type = "range" list = "tickmarks" name = "50P" min = "1" max = "5"/>
                            <datalist id="tickmarks">
                              <option value="1">
                              <option value="2">
                              <option value="3">
                              <option value="4">
                              <option value="5">
                            </datalist><br>
                            
                            Visul Basic<br><input type = "range" list = "tickmarks" name = "50Q" min = "1" max = "5"/>
                            <datalist id="tickmarks">
                              <option value="1">
                              <option value="2">
                              <option value="3">
                              <option value="4">
                              <option value="5">
                            </datalist><br>
                            
                            .Net<br><input type = "range" list = "tickmarks" name = "50R" min = "1" max = "5"/>
                            <datalist id="tickmarks">
                              <option value="1">
                              <option value="2">
                              <option value="3">
                              <option value="4">
                              <option value="5">
                            </datalist><br>
                            
                            Assembler<br><input type = "range" list = "tickmarks" name = "50S" min = "1" max = "5"/> 
                            <datalist id="tickmarks">
                              <option value="1">
                              <option value="2">
                              <option value="3">
                              <option value="4">
                              <option value="5">
                            </datalist><br>
                            
                            Cobol<br><input type = "range" list = "tickmarks" name = "50T" min = "1" max = "5"/> 
                            <datalist id="tickmarks">
                              <option value="1">
                              <option value="2">
                              <option value="3">
                              <option value="4">
                              <option value="5">
                            </datalist><br>
                            
                            ML<br><input type = "range" list = "tickmarks" name = "50U" min = "1" max = "5"/> 
                            <datalist id="tickmarks">
                              <option value="1">
                              <option value="2">
                              <option value="3">
                              <option value="4">
                              <option value="5">
                            </datalist><br>
                            
                            Verilog<br><input type = "range" list = "tickmarks" name = "50V" min = "1" max = "5"/> 
                            <datalist id="tickmarks">
                              <option value="1">
                              <option value="2">
                              <option value="3">
                              <option value="4">
                              <option value="5">
                            </datalist><br>
                            
                            Outras<br><input type = "range" list = "tickmarks" name = "50W" min = "1" max = "5"/>
                            <datalist id="tickmarks">
                              <option value="1">
                              <option value="2">
                              <option value="3">
                              <option value="4">
                              <option value="5">
                            </datalist><br><br>
                        </div>

                        <label for = "perg51">Com qual frequência você utiliza os seguintes SGBD no seu trabalho?</label><br>
                        <label>(Utilize o lado mais a esquerda para pouco utilizado e o mais a direita para muito utilizado)</label><br>
                        <div class = "slider-wrapper" id = "q51">
                            Mysql<br><input type = "range" list = "tickmarks" name = "51A" min = "1" max = "5"/> 
                            <datalist id="tickmarks">
                              <option value="1">
                              <option value="2">
                              <option value="3">
                              <option value="4" >
                              <option value="5">
                            </datalist><br>
                            
                            Oracle<br><input type = "range" list = "tickmarks" name = "51B" min = "1" max = "5"/> 
                            <datalist id="tickmarks">
                              <option value="1">
                              <option value="2">
                              <option value="3">
                              <option value="4" >
                              <option value="5">
                            </datalist><br>
                            
                            Microsoft Sql Server<br><input type = "range" list = "tickmarks" name = "51C" min = "1" max = "5"/>
                            <datalist id="tickmarks">
                              <option value="1">
                              <option value="2">
                              <option value="3">
                              <option value="4" >
                              <option value="5">
                            </datalist><br>
                             
                            PostgreSQL<br><input type = "range" list = "tickmarks" name = "51D" min = "1" max = "5"/> 
                            <datalist id="tickmarks">
                              <option value="1">
                              <option value="2">
                              <option value="3">
                              <option value="4" >
                              <option value="5">
                            </datalist><br>
                            
                            MongoDB<br><input type = "range" list = "tickmarks" name = "51E" min = "1" max = "5"/> 
                            <datalist id="tickmarks">
                              <option value="1">
                              <option value="2">
                              <option value="3">
                              <option value="4" >
                              <option value="5">
                            </datalist><br>
                            
                            Db2<br><input type = "range" list = "tickmarks" name = "51F" min = "1" max = "5"/>
                            <datalist id="tickmarks">
                              <option value="1">
                              <option value="2">
                              <option value="3">
                              <option value="4" >
                              <option value="5">
                            </datalist><br>
                            
                            Microsoft Acces<br><input type = "range" list = "tickmarks" name = "51G" min = "1" max = "5"/>
                            <datalist id="tickmarks">
                              <option value="1">
                              <option value="2">
                              <option value="3">
                              <option value="4" >
                              <option value="5">
                            </datalist><br>
                            
                            Teradata<br><input type = "range" list = "tickmarks" name = "51H" min = "1" max = "5"/> 
                            <datalist id="tickmarks">
                              <option value="1">
                              <option value="2">
                              <option value="3">
                              <option value="4" >
                              <option value="5">
                            </datalist><br>
                            
                            Paradx<br><input type = "range" list = "tickmarks" name = "51I" min = "1" max = "5"/> 	
                            <datalist id="tickmarks">
                              <option value="1">
                              <option value="2">
                              <option value="3">
                              <option value="4" >
                              <option value="5">
                            </datalist><br>
                            
                            Cache<br><input type = "range" list = "tickmarks" name = "51J" min = "1" max = "5"/> 	
                            <datalist id="tickmarks">
                              <option value="1">
                              <option value="2">
                              <option value="3">
                              <option value="4" >
                              <option value="5">
                            </datalist><br>
                            
                            Outros<br><input type = "range" list = "tickmarks" name = "51K" min = "1" max = "5"/>
                            <datalist id="tickmarks">
                              <option value="1">
                              <option value="2">
                              <option value="3">
                              <option value="4" >
                              <option value="5">
                            </datalist><br><br>
                        </div>

                        <label for = "perg52">Com qual frequência você utiliza os seguintes sistemas operacionais no seu trabalho?</label><br>
                        <label>(Utilize o lado mais a esquerda para pouco utilizado e o mais a direita para muito utilizado)</label><br>
                        <div class = "slider-wrapper" id = "q52">
                            Windows<br><input type = "range" list = "tickmarks" name = "52A" min = "1" max = "5"/> 
                            <datalist id="tickmarks">
                              <option value="1">
                              <option value="2">
                              <option value="3">
                              <option value="4" >
                              <option value="5">
                            </datalist><br>
                            
                            Linux<br><input type = "range" list = "tickmarks" name = "52B" min = "1" max = "5"/> 
                            <datalist id="tickmarks">
                              <option value="1">
                              <option value="2">
                              <option value="3">
                              <option value="4" >
                              <option value="5">
                            </datalist><br>
                            
                            MacOS<br><input type = "range" list = "tickmarks" name = "52C" min = "1" max = "5"/> 
                            <datalist id="tickmarks">
                              <option value="1">
                              <option value="2">
                              <option value="3">
                              <option value="4" >
                              <option value="5">
                            </datalist><br>
                            
                            Netware<br><input type = "range" list = "tickmarks" name = "52D" min = "1" max = "5"/> 
                            <datalist id="tickmarks">
                              <option value="1">
                              <option value="2">
                              <option value="3">
                              <option value="4" >
                              <option value="5">
                            </datalist><br>
                            
                            Unix<br><input type = "range" list = "tickmarks" name = "52E" min = "1" max = "5"/>
                            <datalist id="tickmarks">
                              <option value="1">
                              <option value="2">
                              <option value="3">
                              <option value="4" >
                              <option value="5">
                            </datalist><br>
                            
                            Outros<br><input type = "range" list = "tickmarks" name = "52F" min = "1" max = "5"/>
                            <datalist id="tickmarks">
                              <option value="1">
                              <option value="2">
                              <option value="3">
                              <option value="4" >
                              <option value="5">
                            </datalist><br><br>
                        </div>

                        <div class = "botao">
                            <input id = "botao" type = "button" class= "btn btn-primary" value = "Anterior" onClick = "voltar();"/>
                            <input id = "botao" type = "submit" class= "btn btn-primary" name = "proximo" value = "Próximo"/>
                        </div><br>

                        <div class="progress">
                            <div class="progress-bar progress-bar-striped bg-info" role="progressbar" style="width: 62.5%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
		            </div>
                        
                    <div class= "card-footer" >  </div>
                    
                </div>    
            </div>
		</form>
        
        <script src= "https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity= "sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin= "anonymous" ></script> 
        <script src= "https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity= "sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin= "anonymous" ></script> 
        <script src= "https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity= "sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin= "anonymous" ></script>
        
	</body>
</html>