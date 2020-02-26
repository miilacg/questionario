<?php
	include '../acessobancosup.php';
    include 'vSuperior.php';
?>

<!DOCTYPE HTML>
<html lang = "pt-br">
    <head>
        <meta charset = "utf-8">	
        <meta name = "viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <link rel = "stylesheet" href = "https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity = "sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> 
        <link rel = "stylesheet" href = "https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity = "sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel = "stylesheet" href = "../estilo.css">
        <link rel = "stylesheet" href = "superior.css">

        <title>Questionário</title>     
	</head>
	<body>
		<form method = "POST" action = "isatisfacaosup.php">
            <br>
            <div class = "corpo">
                <div class = "card text-center"> 
                    <div class = "card-header"> 
                        <br><h1>Responda ao questionário abaixo</h1>
                        <br><h2>Satisfação</h2><br>
                    </div>
                    
                    <div class= "card-body">			
                        <label type = "perg58">Classifique as opções abaixo de acordo com o grau de influência dela na sua escolha em cursar o bacharelado em Ciência da Computação</label><br>
                        <label>(Utilize o lado mais a esquerda para pouca influência na escolha e o mais a direita para muita influência)</label><br>
                        <div class = "slider-wrapper" id = "q58">
                            Curso fácil de entrar<br><input type = "range" list = "tickmarks" name = "58A" min = "1" max = "5"/> 
                            <datalist id="tickmarks">
                              <option value="1">
                              <option value="2">
                              <option value="3">
                              <option value="4" >
                              <option value="5">
                            </datalist><br>
                            
                            Curso fácil de fazer<br><input type = "range" list="tickmarks" name = "58B" min = "1" max = "5"/> 
                            <datalist id="tickmarks">
                              <option value="1">
                              <option value="2">
                              <option value="3">
                              <option value="4" >
                              <option value="5">
                            </datalist><br>
                            
                            Interesse na área<br><input type = "range" list="tickmarks" name = "58C" min = "1" max = "5"/> 
                            <datalist id="tickmarks">
                              <option value="1">
                              <option value="2">
                              <option value="3">
                              <option value="4" >
                              <option value="5">
                            </datalist><br>
                            
                            Mercado de trabalho<br><input type = "range" list="tickmarks" name = "58D" min = "1" max = "5"/> 
                            <datalist id="tickmarks">
                              <option value="1">
                              <option value="2">
                              <option value="3">
                              <option value="4" >
                              <option value="5">
                            </datalist><br>
                            
                            Outras<br><input type = "range" list="tickmarks" name = "58E" min = "1" max = "5"/>
                            <datalist id="tickmarks">
                              <option value="1">
                              <option value="2">
                              <option value="3">
                              <option value="4" >
                              <option value="5">
                            </datalist><br><br>
                        </div>
			
                        <label type = "perg59">Classifique as opções abaixo de acordo com o grau de influência dela na sua escolha de estudar na Universidade Federal de Viçosa - Campus  Florestal</label><br>
                        <label>(Utilize o lado mais a esquerda para pouca influência na escolha e o mais a direita para muita influência)</label><br>
                        <div class = "slider-wrapper" id = "q59">
                            Infraestrutura<br><input type = "range" list="tickmarks" name = "59A" min = "1" max = "5"/> 
                            <datalist id="tickmarks">
                              <option value="1">
                              <option value="2">
                              <option value="3">
                              <option value="4" >
                              <option value="5">
                            </datalist><br>
                            
                            Custo de vida<br><input type = "range" list="tickmarks" name = "59B" min = "1" max = "5"/> 
                            <datalist id="tickmarks">
                              <option value="1">
                              <option value="2">
                              <option value="3">
                              <option value="4" >
                              <option value="5">
                            </datalist><br>
                            
                            Localidade<br><input type = "range" list="tickmarks" name = "59C" min = "1" max = "5"/> 		
                            <datalist id="tickmarks">
                              <option value="1">
                              <option value="2">
                              <option value="3">
                              <option value="4" >
                              <option value="5">
                            </datalist><br>
                            
                            Menor nota para entrar<br><input type = "range" list="tickmarks" name = "59D" min = "1" max = "5"/> 
                            <datalist id="tickmarks">
                              <option value="1">
                              <option value="2">
                              <option value="3">
                              <option value="4" >
                              <option value="5">
                            </datalist><br>
                            
                            Possibilidade de bolsa<br><input type = "range" list="tickmarks" name = "59E" min = "1" max = "5"/> 
                            <datalist id="tickmarks">
                              <option value="1">
                              <option value="2">
                              <option value="3">
                              <option value="4" >
                              <option value="5">
                            </datalist><br>
                            
                            Outras<br><input type = "range" list = "tickmarks" name = "59F" min = "1" max = "5"/>
                            <datalist id="tickmarks">
                              <option value="1">
                              <option value="2">
                              <option value="3">
                              <option value="4">
                              <option value="5">
                            </datalist><br><br>
                        </div> 

                        <label for = "perg60">Como foi atendida suas expectativas do curso em relação à formação profissional?</label><br>
                        <div class= "form-check">
                            <input class= "form-check-input" type = "radio" name = "perg60" value = "A" required/>Péssimo<br>
                            <input class= "form-check-input" type = "radio" name = "perg60" value = "B"/>Ruim<br>
                            <input class= "form-check-input" type = "radio" name = "perg60" value = "C"/>Regular<br>
                            <input class= "form-check-input" type = "radio" name = "perg60" value = "D"/>Bom<br>
                            <input class= "form-check-input" type = "radio" name = "perg60" value = "E"/>Ótimo<br><br>
                        </div>                        

                        <label for = "perg61">As disciplinas especifícas proporcionaram formação adequada para o bom desempenho da atividade profissional?</label><br>
                        <div class= "form-check">
                            <input class= "form-check-input" type = "radio" name = "perg61" value = "A" required/>Um pouco<br>
                            <input class= "form-check-input" type = "radio" name = "perg61" value = "B"/>Muito<br>
                            <input class= "form-check-input" type = "radio" name = "perg61" value = "C"/>Não<br><br>
                        </div>                        

                        <label for = "perg62">Como você classifica os itens abaixo?</label><br>
                        <table class = "table">
                            <thead class= "thead-light">
                                <tr>
                                    <th scope= "col">#</th>
                                    <th scope= "col">Péssimo</th>
                                    <th scope= "col">Ruim</th>
                                    <th scope= "col">Indiferente</th>
                                    <th scope= "col">Bom</th>
                                    <th scope= "col">Ótimo</th>
                                </tr>
                            </thead>
                            <tr>
                                <td for = "62A">Aulas</td>			
                                <td><input type = "radio" name = "62A" value = "A" required/></td>
                                <td><input type = "radio" name = "62A" value = "B"/></td>
                                <td><input type = "radio" name = "62A" value = "C"/></td>
                                <td><input type = "radio" name = "62A" value = "D"/></td>
                                <td><input type = "radio" name = "62A" value = "E"/></td>	
                            </tr>
                            <tr>
                                <td for = "62B">Laboratórios</td>			
                                <td><input type = "radio" name = "62B" value = "A" required/></td>
                                <td><input type = "radio" name = "62B" value = "B"/></td>
                                <td><input type = "radio" name = "62B" value = "C"/></td>
                                <td><input type = "radio" name = "62B" value = "D"/></td>
                                <td><input type = "radio" name = "62B" value = "E"/></td>	
                            </tr>
                            <tr>
                                <td for = "62C">Biblioteca</td>			
                                <td><input type = "radio" name = "62C" value = "A" required/></td>
                                <td><input type = "radio" name = "62C" value = "B"/></td>
                                <td><input type = "radio" name = "62C" value = "C"/></td>
                                <td><input type = "radio" name = "62C" value = "D"/></td>
                                <td><input type = "radio" name = "62C" value = "E"/></td>	
                            </tr>
                            <tr>
                                <td for = "62D">Salas de aula</td>			
                                <td><input type = "radio" name = "62D" value = "A" required/></td>
                                <td><input type = "radio" name = "62D" value = "B"/></td>
                                <td><input type = "radio" name = "62D" value = "C"/></td>
                                <td><input type = "radio" name = "62D" value = "D"/></td>
                                <td><input type = "radio" name = "62D" value = "E"/></td>	
                            </tr>
                            <tr>
                                <td for = "62E">Outras dependências</td>			
                                <td><input type = "radio" name = "62E" value = "A" required/></td>
                                <td><input type = "radio" name = "62E" value = "B"/></td>
                                <td><input type = "radio" name = "62E" value = "C"/></td>
                                <td><input type = "radio" name = "62E" value = "D"/></td>
                                <td><input type = "radio" name = "62E" value = "E"/></td>	
                            </tr>
                        </table><br>

                        <label for = "perg63">Como você avalia a importância dessa pesquisa?</label><br>
                        <div class= "form-check">
                            <input class= "form-check-input" type = "radio" name = "perg63" value = "A" required/>Muito importante<br>
                            <input class= "form-check-input" type = "radio" name = "perg63" value = "B"/>Importante<br>
                            <input class= "form-check-input" type = "radio" name = "perg63" value = "C"/>Indiferete<br>
                            <input class= "form-check-input" type = "radio" name = "perg63" value = "D"/>Pouco importante<br>
                            <input class= "form-check-input" type = "radio" name = "perg63" value = "E"/>Sem importância<br><br>
                        </div>                        

                        <div class = "botao">
                            <a href = "tratamento_satisfacaosup.php"><input id = "botao" type = "button" class= "btn btn-primary" value = "Anterior"/></a>
                            <input id = "botao" type = "submit" class= "btn btn-primary" name = "Finalizar" value = "Finalizar">
                        </div><br>
                        
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped bg-info" role="progressbar" style="width: 87.5%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
		            </div>
                    
                    <div class= "card-footer" >  </div>                    
                </div>    
            </div>
        </form>
        
        <script src = "https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity = "sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin = "anonymous"></script>
        <script src = "https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity = "sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin = "anonymous" ></script> 
        <script src = "https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity = "sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin = "anonymous" ></script> 
        <script src = "https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity = "sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin = "anonymous" ></script>
        
	</body>
</html>