<?php
	include '../acessobancotec.php';
    include 'vTecnico.php';
?>

<!DOCTYPE HTML>
<html lang = "pt-br">
    <head>
        <meta charset = "utf-8">
        <meta name = "viewport" content = "width=device-width, initial-scale=1, shrink-to-fit=no">

        <link rel = "stylesheet" href = "https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity = "sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin = "anonymous"> 
        <link rel = "stylesheet" href = "https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity = "sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin = "anonymous">
        <link rel = "stylesheet" href = "../estilo.css">    
        <link rel = "stylesheet" href = "tecnico.css"> 

        <title>Questionário</title>
	</head>
	<body>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        
		<form method = "POST" action = "imercadotec.php"><br>
            <div class = "corpo">
                <div class = "card text-center" > 
                    <div class = "card-header" > 
                        <br><h1>Responda ao questionário abaixo</h1>
                        <br><h2>Mercado de trabalho</h2><br>
                    </div>

                    <div class= "card-body"> 
                        <label for = "perg38">Classifique os itens abaixo de acordo com a importância deles para entrada no mercado de trabalho.</label><br>
                        <label>(Considere 1 como maior indice de importancia e 5 como menor indice)</label><br>
                        <table class = "table">
                            <thead class= "thead-light">
                                <tr>
                                    <th scope= "col">#</th>
                                    <th scope= "col">1</th>
                                    <th scope= "col">2</th>
                                    <th scope= "col">3</th>
                                    <th scope= "col">4</th>
                                    <th scope= "col">5</th>
                                    <th scope= "col">Não se aplica</th>
                                </tr>
                            </thead>
                            <tr>
                                <td for = "38A">Intituição de ensino</td>			
                                <td><input type = "radio" name = "38A" value = "A" required/></td>
                                <td><input type = "radio" name = "38A" value = "B"/></td>
                                <td><input type = "radio" name = "38A" value = "C"/></td>
                                <td><input type = "radio" name = "38A" value = "D"/></td>
                                <td><input type = "radio" name = "38A" value = "E"/></td>
                                <td><input type = "radio" name = "38A" value = "F"/></td>	
                            </tr>
                            <tr>
                                <td for = "38B">Trabalho em equipe</td>
                                <td><input type = "radio" name = "38B" value = "A" required/></td>
                                <td><input type = "radio" name = "38B" value = "B"/></td>
                                <td><input type = "radio" name = "38B" value = "C"/></td>
                                <td><input type = "radio" name = "38B" value = "D"/></td>
                                <td><input type = "radio" name = "38B" value = "E"/></td>
                                <td><input type = "radio" name = "38B" value = "F"/></td>
                            </tr>
                            <tr>
                                <td for = "38C">Experiência no mercado</td>
                                <td><input type = "radio" name = "38C" value = "A" required/></td>
                                <td><input type = "radio" name = "38C" value = "B"/></td>
                                <td><input type = "radio" name = "38C" value = "C"/></td>
                                <td><input type = "radio" name = "38C" value = "D"/></td>
                                <td><input type = "radio" name = "38C" value = "E"/></td>
                                <td><input type = "radio" name = "38C" value = "F"/></td>
                            </tr>
                            <tr>	
                                <td for = "38D">Fluência em línguas</td>
                                <td><input type = "radio" name = "38D" value = "A" required/></td>
                                <td><input type = "radio" name = "38D" value = "B"/></td>
                                <td><input type = "radio" name = "38D" value = "C"/></td>
                                <td><input type = "radio" name = "38D" value = "D"/></td>
                                <td><input type = "radio" name = "38D" value = "E"/></td>
                                <td><input type = "radio" name = "38D" value = "F"/></td>
                            </tr>
                            <tr>	
                                <td for = "38E">Disponibilidade para trabalhar horas extras</td>
                                <td><input type = "radio" name = "38E" value = "A" required/></td>
                                <td><input type = "radio" name = "38E" value = "B"/></td>
                                <td><input type = "radio" name = "38E" value = "C"/></td>
                                <td><input type = "radio" name = "38E" value = "D"/></td>
                                <td><input type = "radio" name = "38E" value = "E"/></td>
                                <td><input type = "radio" name = "38E" value = "F"/></td>
                            </tr>
                            <tr>	
                                <td for = "38F">Graduação</td>
                                <td><input type = "radio" name = "38F" value = "A" required/></td>
                                <td><input type = "radio" name = "38F" value = "B"/></td>
                                <td><input type = "radio" name = "38F" value = "C"/></td>
                                <td><input type = "radio" name = "38F" value = "D"/></td>
                                <td><input type = "radio" name = "38F" value = "E"/></td>
                                <td><input type = "radio" name = "38F" value = "F"/></td>
                            </tr>
                            <tr>	
                                <td for = "38G">Mestrado/Doutorado/Especialização</td>
                                <td><input type = "radio" name = "38G" value = "A" required/></td>
                                <td><input type = "radio" name = "38G" value = "B"/></td>
                                <td><input type = "radio" name = "38G" value = "C"/></td>
                                <td><input type = "radio" name = "38G" value = "D"/></td>
                                <td><input type = "radio" name = "38G" value = "E"/></td>
                                <td><input type = "radio" name = "38G" value = "F"/></td>
                            </tr>
                        </table><br>

                        <label for = "perg39">Como os itens abaixo ofereceram uma base diferenciada comparada com os seus colegas de trabalho?</label><br>
                        <label>(Considere 1 como menor indice de importancia e 5 como maior indice)</label><br>		
                        <table class = "table">
                            <thead class= "thead-light">
                                <tr>
                                    <th scope= "col">#</th>
                                    <th scope= "col">1</th>
                                    <th scope= "col">2</th>
                                    <th scope= "col">3</th>
                                    <th scope= "col">4</th>
                                    <th scope= "col">5</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td for = "39A">Adaptação às mudanças</td>			
                                    <td><input type = "radio" name = "39A" value = "A" required/></td>
                                    <td><input type = "radio" name = "39A" value = "B"/></td>
                                    <td><input type = "radio" name = "39A" value = "C"/></td>
                                    <td><input type = "radio" name = "39A" value = "D"/></td>
                                    <td><input type = "radio" name = "39A" value = "E"/></td>		
                                </tr>
                                <tr>
                                    <td for = "39B">Aprendizado de novas técnicas</td>
                                    <td><input type = "radio" name = "39B" value = "A" required/></td>
                                    <td><input type = "radio" name = "39B" value = "B"/></td>
                                    <td><input type = "radio" name = "39B" value = "C"/></td>
                                    <td><input type = "radio" name = "39B" value = "D"/></td>
                                    <td><input type = "radio" name = "39B" value = "E"/></td>	
                                </tr>
                                <tr>
                                    <td for = "39C">Aptidão empreendedora</td>
                                    <td><input type = "radio" name = "39C" value = "A" required/></td>
                                    <td><input type = "radio" name = "39C" value = "B"/></td>
                                    <td><input type = "radio" name = "39C" value = "C"/></td>
                                    <td><input type = "radio" name = "39C" value = "D"/></td>
                                    <td><input type = "radio" name = "39C" value = "E"/></td>		
                                </tr>
                                <tr>	
                                    <td for = "39D">Capacidade analítica</td>
                                    <td><input type = "radio" name = "39D" value = "A" required/></td>
                                    <td><input type = "radio" name = "39D" value = "B"/></td>
                                    <td><input type = "radio" name = "39D" value = "C"/></td>
                                    <td><input type = "radio" name = "39D" value = "D"/></td>
                                    <td><input type = "radio" name = "39D" value = "E"/></td>		
                                </tr>
                                <tr>	
                                    <td for = "39E">Criatividade</td>
                                    <td><input type = "radio" name = "39E" value = "A" required/></td>
                                    <td><input type = "radio" name = "39E" value = "B"/></td>
                                    <td><input type = "radio" name = "39E" value = "C"/></td>
                                    <td><input type = "radio" name = "39E" value = "D"/></td>
                                    <td><input type = "radio" name = "39E" value = "E"/></td>		
                                </tr>				
                                <tr>	
                                    <td for = "39F">Eficiência na produção</td>
                                    <td><input type = "radio" name = "39F" value = "A" required/></td>
                                    <td><input type = "radio" name = "39F" value = "B"/></td>
                                    <td><input type = "radio" name = "39F" value = "C"/></td>
                                    <td><input type = "radio" name = "39F" value = "D"/></td>
                                    <td><input type = "radio" name = "39F" value = "E"/></td>	
                                </tr>
                                <tr>	
                                    <td for = "39G">Liderança</td>
                                    <td><input type = "radio" name = "39G" value = "A" required/></td>
                                    <td><input type = "radio" name = "39G" value = "B"/></td>
                                    <td><input type = "radio" name = "39G" value = "C"/></td>
                                    <td><input type = "radio" name = "39G" value = "D"/></td>
                                    <td><input type = "radio" name = "39G" value = "E"/></td>	
                                </tr>
                                <tr>	
                                    <td for = "39H">Visão ampla de organização</td>
                                    <td><input type = "radio" name = "39H" value = "A" required/></td>
                                    <td><input type = "radio" name = "39H" value = "B"/></td>
                                    <td><input type = "radio" name = "39H" value = "C"/></td>
                                    <td><input type = "radio" name = "39H" value = "D"/></td>
                                    <td><input type = "radio" name = "39H" value = "E"/></td>	
                                </tr>
                                <tr>	
                                    <td for = "39I">Visão de novas tendências</td>
                                    <td><input type = "radio" name = "39I" value = "A" required/></td>
                                    <td><input type = "radio" name = "39I" value = "B"/></td>
                                    <td><input type = "radio" name = "39I" value = "C"/></td>
                                    <td><input type = "radio" name = "39I" value = "D"/></td>
                                    <td><input type = "radio" name = "39I" value = "E"/></td>	
                                </tr>
                            </tbody>
                        </table><br>

                        <label for = "perg40">Com qual frequência você utiliza as disciplinas abaixo no seu ambiente de trabalho?</label><br>
                        <table class = "table" id = "header-fixed">
                            <thead class= "thead-light">
                                <tr>
                                    <th scope= "col" style = "width: 320px;">#</th>
                                    <th scope= "col" style = "width: 150px;">Uso efetivamente</th>
                                    <th scope= "col" style = "width: 250px;">Uso indiretamente e é indispensável</th>
                                    <th scope= "col" style = "width: 250px;">Uso indiretamente e é dispensável</th>
                                    <th scope= "col" style = "width: 100px;">Nunca usei</th>
                                    <th scope= "col" style = "width: 190px;">Não fiz a disciplina</th>
                                </tr>
                            </thead>
                                <tbody>
                                    <tr>
                                        <td class = "name" for = "40A">Análise e projeto de sistemas</td>			
                                        <td class = "A"><input type = "radio" name = "40A" value = "A" required/></td>
                                        <td class = "B"><input type = "radio" name = "40A" value = "B"/></td>
                                        <td class = "C"><input type = "radio" name = "40A" value = "C"/></td>
                                        <td class = "D"><input type = "radio" name = "40A" value = "D"/></td>
                                        <td class = "E"><input type = "radio" name = "40A" value = "E"/></td>	
                                    </tr>
                                    <tr>
                                        <td for = "40B">Banco de dados</td>			
                                        <td><input type = "radio" name = "40B" value = "A" required/></td>
                                        <td><input type = "radio" name = "40B" value = "B"/></td>
                                        <td><input type = "radio" name = "40B" value = "C"/></td>
                                        <td><input type = "radio" name = "40B" value = "D"/></td>
                                        <td><input type = "radio" name = "40B" value = "E"/></td>	
                                    </tr>
                                    <tr>
                                        <td for = "40C">Contabilidade</td>			
                                        <td><input type = "radio" name = "40C" value = "A" required/></td>
                                        <td><input type = "radio" name = "40C" value = "B"/></td>
                                        <td><input type = "radio" name = "40C" value = "C"/></td>
                                        <td><input type = "radio" name = "40C" value = "D"/></td>
                                        <td><input type = "radio" name = "40C" value = "E"/></td>	
                                    </tr>
                                    <tr>
                                        <td for = "40D">Estrutura da informação na web</td>	
                                        <td><input type = "radio" name = "40D" value = "A" required/></td>
                                        <td><input type = "radio" name = "40D" value = "B"/></td>
                                        <td><input type = "radio" name = "40D" value = "C"/></td>
                                        <td><input type = "radio" name = "40D" value = "D"/></td>
                                        <td><input type = "radio" name = "40D" value = "E"/></td>	
                                    </tr>
                                    <tr>
                                        <td for = "40E">Fundamentos da administração</td>	
                                        <td><input type = "radio" name = "40E" value = "A" required/></td>
                                        <td><input type = "radio" name = "40E" value = "B"/></td>
                                        <td><input type = "radio" name = "40E" value = "C"/></td>
                                        <td><input type = "radio" name = "40E" value = "D"/></td>
                                        <td><input type = "radio" name = "40E" value = "E"/></td>	
                                    </tr>
                                    <tr>
                                        <td for = "40F">Informática básica</td>			
                                        <td><input type = "radio" name = "40F" value = "A" required/></td>
                                        <td><input type = "radio" name = "40F" value = "B"/></td>
                                        <td><input type = "radio" name = "40F" value = "C"/></td>
                                        <td><input type = "radio" name = "40F" value = "D"/></td>
                                        <td><input type = "radio" name = "40F" value = "E"/></td>	
                                    </tr>
                                    <tr>
                                        <td for = "40G">Inglês técnico</td>		
                                        <td><input type = "radio" name = "40G" value = "A" required/></td>
                                        <td><input type = "radio" name = "40G" value = "B"/></td>
                                        <td><input type = "radio" name = "40G" value = "C"/></td>
                                        <td><input type = "radio" name = "40G" value = "D"/></td>
                                        <td><input type = "radio" name = "40G" value = "E"/></td>	
                                    </tr>
                                    <tr>
                                        <td for = "40H">Introdução a programação</td>		
                                        <td><input type = "radio" name = "40H" value = "A" required/></td>
                                        <td><input type = "radio" name = "40H" value = "B"/></td>
                                        <td><input type = "radio" name = "40H" value = "C"/></td>
                                        <td><input type = "radio" name = "40H" value = "D"/></td>
                                        <td><input type = "radio" name = "40H" value = "E"/></td>	
                                    </tr>
                                    <tr>
                                        <td for = "40I">Legislação para informática</td>	
                                        <td><input type = "radio" name = "40I" value = "A" required/></td>
                                        <td><input type = "radio" name = "40I" value = "B"/></td>
                                        <td><input type = "radio" name = "40I" value = "C"/></td>
                                        <td><input type = "radio" name = "40I" value = "D"/></td>
                                        <td><input type = "radio" name = "40I" value = "E"/></td>	
                                    </tr>
                                    <tr>
                                        <td for = "40J">Lógica de programação</td>			
                                        <td><input type = "radio" name = "40J" value = "A" required/></td>
                                        <td><input type = "radio" name = "40J" value = "B"/></td>
                                        <td><input type = "radio" name = "40J" value = "C"/></td>
                                        <td><input type = "radio" name = "40J" value = "D"/></td>
                                        <td><input type = "radio" name = "40J" value = "E"/></td>	
                                    </tr>
                                    <tr>
                                        <td for = "40K">Manutenção de computadores</td>		
                                        <td><input type = "radio" name = "40K" value = "A" required/></td>
                                        <td><input type = "radio" name = "40K" value = "B"/></td>
                                        <td><input type = "radio" name = "40K" value = "C"/></td>
                                        <td><input type = "radio" name = "40K" value = "D"/></td>
                                        <td><input type = "radio" name = "40K" value = "E"/></td>	
                                    </tr>
                                    <tr>
                                        <td for = "40L">Organização de computadores e Sistemas operacionais</td>
                                        <td><input type = "radio" name = "40L" value = "A" required/></td>
                                        <td><input type = "radio" name = "40L" value = "B"/></td>
                                        <td><input type = "radio" name = "40L" value = "C"/></td>
                                        <td><input type = "radio" name = "40L" value = "D"/></td>
                                        <td><input type = "radio" name = "40L" value = "E"/></td>
                                    </tr>
                                    <tr>
                                        <td for = "40M">Programação</td>
                                        <td><input type = "radio" name = "40M" value = "A" required/></td>
                                        <td><input type = "radio" name = "40M" value = "B"/></td>
                                        <td><input type = "radio" name = "40M" value = "C"/></td>
                                        <td><input type = "radio" name = "40M" value = "D"/></td>
                                        <td><input type = "radio" name = "40M" value = "E"/></td>
                                    </tr>
                                    <tr>
                                        <td for = "40N">Programação web</td>
                                        <td><input type = "radio" name = "40N" value = "A" required/></td>
                                        <td><input type = "radio" name = "40N" value = "B"/></td>
                                        <td><input type = "radio" name = "40N" value = "C"/></td>
                                        <td><input type = "radio" name = "40N" value = "D"/></td>
                                        <td><input type = "radio" name = "40N" value = "E"/></td>
                                    </tr>
                                    <tr>
                                        <td for = "40O">Projeto</td>
                                        <td><input type = "radio" name = "40O" value = "A" required/></td>
                                        <td><input type = "radio" name = "40O" value = "B"/></td>
                                        <td><input type = "radio" name = "40O" value = "C"/></td>
                                        <td><input type = "radio" name = "40O" value = "D"/></td>
                                        <td><input type = "radio" name = "40O" value = "E"/></td>
                                    </tr>
                                    <tr>
                                        <td for = "40P">Redação teórica</td>
                                        <td><input type = "radio" name = "40P" value = "A" required/></td>
                                        <td><input type = "radio" name = "40P" value = "B"/></td>
                                        <td><input type = "radio" name = "40P" value = "C"/></td>
                                        <td><input type = "radio" name = "40P" value = "D"/></td>
                                        <td><input type = "radio" name = "40P" value = "E"/></td>
                                    </tr>
                                    <tr>
                                        <td for = "40Q">Redes de computadores</td>
                                        <td><input type = "radio" name = "40Q" value =  "A" required/></td>
                                        <td><input type = "radio" name = "40Q" value = "B"/></td>
                                        <td><input type = "radio" name = "40Q" value = "C"/></td>
                                        <td><input type = "radio" name = "40Q" value = "D"/></td>
                                        <td><input type = "radio" name = "40Q" value = "E"/></td>
                                    </tr>
                                    <tr>
                                        <td for = "40R">Tópicos especiais em informática</td>
                                        <td><input type = "radio" name = "40R" value = "A" required/></td>
                                        <td><input type = "radio" name = "40R" value = "B"/></td>
                                        <td><input type = "radio" name = "40R" value = "C"/></td>
                                        <td><input type = "radio" name = "40R" value = "D"/></td>
                                        <td><input type = "radio" name = "40R" value = "E"/></td>
                                    </tr>
                                </tbody>
                            </table>

                        <div class = "botao">
                            <a href = "empresatec.php"><input id = "botao" type = "button" class= "btn btn-primary" value = "Anterior"/></a>
                            <input id = "botao" type = "submit" class= "btn btn-primary" name = "proximo" value = "Próximo"/>
                        </div><br>

                        <div class="progress">
                            <div class="progress-bar progress-bar-striped bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                    
                    <div class= "card-footer">  </div>
                    
                </div>    
            </div>
		</form>
        
        <script src= "https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity= "sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin= "anonymous" ></script> 
        <script src= "https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity= "sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin= "anonymous" ></script> 
        <script src= "https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity= "sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin= "anonymous" ></script>
            
	</body>
</html>