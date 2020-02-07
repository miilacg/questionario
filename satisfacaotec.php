<?php
	include 'acessobancotec.php';
    include 'vtec.php';
?>

<script language = javascript type = "text/javascript"> 
    function voltar(){
        window.location.assign ("tratamento_satisfacaotec.php");
    }
</script>

<!DOCTYPE HTML>
<html lang="pt-br">
    <meta charset="utf-8">	
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> 
    
    <title>Questionário</title>
	<head>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        
        <link rel = "stylesheet" href = "estilo.css">
        
        <style>
            .slider-wrapper {
                display: inline-block;
                width: 60%;              
            }  
            .slider-wrapper input {
                width: 50%;
                height: 40px;
                margin: 0;
                transform-origin: 75px 75px;
            }
            #q50{
                height: 270px;  
            }
            #q49{
                height: 400px;  
            }
        </style>
	</head>
	<body>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        
		<form method = "POST" action = "isatisfacaotec.php">
            <br>
            <div class = "corpo">
                <div class = "card text-center" > 
                    <div class = "card-header" > 
                        <br><h1>Responda ao questionário abaixo</h1>
                        <br><h2>Satisfação</h2><br>
                    </div>
                    
                    <div class= "card-body">			
                        <label type = "perg49">Classifique as opções abaixo de acordo com o grau de influência dela na sua escolha em cursar o técnico em informática</label><br>
                        <label>(Utilize o lado mais a esquerda para pouca influência na escolha e o mais a direita para muita influência)</label><br>
                        <div class = "slider-wrapper" id = "q49">
                            Curso fácil de entrar<br><input type = "range" list = "tickmarks" name = "49A" min = "1" max = "5"/> 
                            <datalist id="tickmarks">
                              <option value="1">
                              <option value="2">
                              <option value="3">
                              <option value="4" >
                              <option value="5">
                            </datalist><br>
                            
                            Curso fácil de fazer<br><input type = "range" list = "tickmarks" name = "49B" min = "1" max = "5"/> 
                            <datalist id="tickmarks">
                              <option value="1">
                              <option value="2">
                              <option value="3">
                              <option value="4" >
                              <option value="5">
                            </datalist><br>
                            
                            Falta de outra opção<br><input type = "range" list = "tickmarks" name = "49C" min = "1" max = "5"/> 
                            <datalist id="tickmarks">
                              <option value="1">
                              <option value="2">
                              <option value="3">
                              <option value="4" >
                              <option value="5">
                            </datalist><br>
                            
                            Interesse na área<br><input type = "range" list = "tickmarks" name = "49D" min = "1" max = "5"/> 
                            <datalist id="tickmarks">
                              <option value="1">
                              <option value="2">
                              <option value="3">
                              <option value="4" >
                              <option value="5">
                            </datalist><br>
                            
                            Mercado de trabalho<br><input type = "range" list = "tickmarks" name = "49E" min = "1" max = "5"/> 
                            <datalist id="tickmarks">
                              <option value="1">
                              <option value="2">
                              <option value="3">
                              <option value="4" >
                              <option value="5">
                            </datalist><br>
                            
                            Outras<br><input type = "range" list = "tickmarks" name = "49F" min = "1" max = "5"/>
                            <datalist id="tickmarks">
                              <option value="1">
                              <option value="2">
                              <option value="3">
                              <option value="4">
                              <option value="5">
                            </datalist><br><br>
                        </div>

                        <label for = "perg50">Classifique as opções abaixo de acordo com o grau de influência dela na sua escolha de estudar na Cedaf</label><br>
                        <label>(Utilize o lado mais a esquerda para pouca influência na escolha e o mais a direita para muita influência)</label><br>
                        <div class = "slider-wrapper" id = "q50">
                            Infraestrutura<br><input type = "range" list = "tickmarks" name = "50A" min = "1" max = "5"/> 
                            <datalist id="tickmarks">
                              <option value="1">
                              <option value="2">
                              <option value="3">
                              <option value="4" >
                              <option value="5">
                            </datalist><br>
                            
                            Localidade<br><input type = "range" list = "tickmarks" name = "50B" min = "1" max = "5"/> 			
                            <datalist id="tickmarks">
                              <option value="1">
                              <option value="2">
                              <option value="3">
                              <option value="4" >
                              <option value="5">
                            </datalist><br>
                            
                            Menor nota para entrar<br><input type = "range" list = "tickmarks" name = "50C" min = "1" max = "5"/> 
                            <datalist id="tickmarks">
                              <option value="1">
                              <option value="2">
                              <option value="3">
                              <option value="4" >
                              <option value="5">
                            </datalist><br>
                            
                            Outro<br><input type = "range" list = "tickmarks" name = "50D" min = "1" max = "5"/>
                            <datalist id="tickmarks">
                              <option value="1">
                              <option value="2">
                              <option value="3">
                              <option value="4" >
                              <option value="5">
                            </datalist><br><br>	
                        </div>

                        <label for = "perg51">Como foi atendida suas expectativas do curso em relação à formação profissional?</label><br>
                        <div class= "form-check">
                            <input class= "form-check-input" type = "radio" name = "perg51" value = "A" required/>Péssimo<br>
                            <input class= "form-check-input" type = "radio" name = "perg51" value = "B"/>Ruim<br>
                            <input class= "form-check-input" type = "radio" name = "perg51" value = "C"/>Regular<br>
                            <input class= "form-check-input" type = "radio" name = "perg51" value = "D"/>Bom<br>
                            <input class= "form-check-input" type = "radio" name = "perg51" value = "E"/>Ótimo<br><br>
                        </div>

                        <label for = "perg52">As disciplinas específicas foram adequadas para o bom desempenho da atividade profissional?</label><br>
                        <div class= "form-check">
                            <input class= "form-check-input" type = "radio" name = "perg52" value = "A" required/>Um pouco<br>
                            <input class= "form-check-input" type = "radio" name = "perg52" value = "B"/>Muito<br>
                            <input class= "form-check-input" type = "radio" name = "perg52" value = "C"/>Não<br><br>
                        </div>                         

                        <label for = "perg53">Vocâ acha que o estágio de pelo menos 150h (além das disciplinas obrigatórias) deve ser obrigatório para receber o diploma do curso?</label><br>
                        <div class= "form-check">
                            <input class= "form-check-input" type = "radio" name = "perg53" value = "A" required/>Sim<br>
                            <input class= "form-check-input" type = "radio" name = "perg53" value = "B"/>Não<br>
                            <input class= "form-check-input" type = "radio" name = "perg53" value = "C"/>Indiferente<br><br>
                        </div>                           

                        <label for = "perg54">Você acha que o curso deve ter 120h em atividades complementares obrigatórias? Essas atividades são relacionadas à informática, mas realizadas fora do horário de aula e para isso haveria a diminuição de 120h das disciplinas normais do curso.</label><br>
                        <div class= "form-check">
                            <input class= "form-check-input" type = "radio" name = "perg54" value = "A" required/>Sim<br>
                            <input class= "form-check-input" type = "radio" name = "perg54" value = "B"/>Não<br>
                            <input class= "form-check-input" type = "radio" name = "perg54" value = "C"/>Indiferente<br><br>
                        </div>                        

                        <label for = "perg55">Como você classifica os itens abaixo?</label><br>
                        <table class = "table">
                            <thead class= "thead-light"> 
                                <tr> 
                                    <th scope= "col">#</th> 
                                    <th scope= "col">Péssimo</th>
                                    <th scope= "col">Ruim</th>
                                    <th scope= "col">Indiferente</th>
                                    <th scope= "col"d>Bom</th>
                                    <th scope= "col">Excelente</th>
                                </tr>	
                            </thead>
                            <tr>
                                <td for = "perg55-aulas">Aulas</td>			
                                <td><input type = "radio" name = "55A" value = "A" required/></td>
                                <td><input type = "radio" name = "55A" value = "B"/></td>
                                <td><input type = "radio" name = "55A" value = "C"/></td>
                                <td><input type = "radio" name = "55A" value = "D"/></td>
                                <td><input type = "radio" name = "55A" value = "E"/></td>	
                            </tr>
                            <tr>
                                <td for = "perg55-labs">Laboratórios</td>			
                                <td><input type = "radio" name = "55B" value = "A" required/></td>
                                <td><input type = "radio" name = "55B" value = "B"/></td>
                                <td><input type = "radio" name = "55B" value = "C"/></td>
                                <td><input type = "radio" name = "55B" value = "D"/></td>
                                <td><input type = "radio" name = "55B" value = "E"/></td>	
                            </tr>
                            <tr>
                                <td for = "perg55-bbt">Biblioteca</td>			
                                <td><input type = "radio" name = "55C" value = "A" required/></td>
                                <td><input type = "radio" name = "55C" value = "B"/></td>
                                <td><input type = "radio" name = "55C" value = "C"/></td>
                                <td><input type = "radio" name = "55C" value = "D"/></td>
                                <td><input type = "radio" name = "55C" value = "E"/></td>	
                            </tr>
                            <tr>
                                <td for = "perg55-salas">Salas de aula</td>			
                                <td><input type = "radio" name = "55D" value = "A" required/></td>
                                <td><input type = "radio" name = "55D" value = "B"/></td>
                                <td><input type = "radio" name = "55D" value = "C"/></td>
                                <td><input type = "radio" name = "55D" value = "D"/></td>
                                <td><input type = "radio" name = "55D" value = "E"/></td>	
                            </tr>
                            <tr>
                                <td for = "perg55-outras">Outras dependências</td>			
                                <td><input type = "radio" name = "55E" value = "A" required/></td>
                                <td><input type = "radio" name = "55E" value = "B"/></td>
                                <td><input type = "radio" name = "55E" value = "C"/></td>
                                <td><input type = "radio" name = "55E" value = "D"/></td>
                                <td><input type = "radio" name = "55E" value = "E"/></td>	
                            </tr>
                        </table>
                        <br>

                        <label for = "perg56">Como você avalia a importância dessa pesquisa?</label><br>
                        <div class= "form-check">
                            <input class= "form-check-input" type = "radio" name = "perg56" value = "A" required/>Muito importante<br>
                            <input class= "form-check-input" type = "radio" name = "perg56" value = "B"/>Importante<br>
                            <input class= "form-check-input" type = "radio" name = "perg56" value = "C"/>Indiferete<br>
                            <input class= "form-check-input" type = "radio" name = "perg56" value = "D"/>Pouco importante<br>
                            <input class= "form-check-input" type = "radio" name = "perg56" value = "E"/>Sem importância<br><br>
                        </div>
                        

                        <div class = "botao">
                            <input id = "botao" type = "button" class= "btn btn-primary" value = "Anterior" onClick = "voltar();"/>
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
        
        <script src= "https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity= "sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin= "anonymous" ></script> 
        <script src= "https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity= "sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin= "anonymous" ></script> 
        <script src= "https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity= "sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin= "anonymous" ></script>
        
	</body>
</html>