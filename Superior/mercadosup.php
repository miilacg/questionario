<?php
	include '../acessobancosup.php';
    include 'vSuperior.php';
?>

<!DOCTYPE HTML>
<html lang = "pt-br">
    <head>
        <meta charset = "utf-8">
        <meta name = "viewport" content = "width=device-width, initial-scale=1, shrink-to-fit=no">

        <link rel = "stylesheet" href = "https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity = "sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin = "anonymous"> 
        <link rel = "stylesheet" href = "https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity = "sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin = "anonymous">
        <link rel = "stylesheet" href = "../estilo.css">
        <link rel = "stylesheet" href = "superior.css">

        <title>Questionario</title>
	</head>
	<body>
		<form method = "POST" action = "imercadosup.php">
            <br>
            <div class = "corpo">
                <div class = "card text-center"> 
                    <div class = "card-header"> 
                        <br><h1>Responda ao questionário abaixo</h1>
                        <br><h2>Mercado de trabalho</h2><br>
                    </div>

                    <div class= "card-body"> 
                        <label for = "per47">Classifique os itens abaixo de acordo com a importância deles para entrada no mercado de trabalho.</label><br>
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
                                    <th scope= "col">Não se aplica</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td for = "47A">Intituição de ensino</td>			
                                    <td><input type = "radio" name = "47A" value = "A" required/></td>
                                    <td><input type = "radio" name = "47A" value = "B"/></td>
                                    <td><input type = "radio" name = "47A" value = "C"/></td>
                                    <td><input type = "radio" name = "47A" value = "D"/></td>
                                    <td><input type = "radio" name = "47A" value = "E"/></td>
                                    <td><input type = "radio" name = "47A" value = "F"/></td>		
                                </tr>
                                <tr>
                                    <td for = "47B">Trabalho em equipe</td>
                                    <td><input type = "radio" name = "47B" value = "A" required/></td>
                                    <td><input type = "radio" name = "47B" value = "B"/></td>
                                    <td><input type = "radio" name = "47B" value = "C"/></td>
                                    <td><input type = "radio" name = "47B" value = "D"/></td>
                                    <td><input type = "radio" name = "47B" value = "E"/></td>
                                    <td><input type = "radio" name = "47B" value = "F"/></td>	
                                </tr>
                                <tr>
                                    <td for = "47C">Experiência no mercado</td>
                                    <td><input type = "radio" name = "47C" value = "A" required/></td>
                                    <td><input type = "radio" name = "47C" value = "B"/></td>
                                    <td><input type = "radio" name = "47C" value = "C"/></td>
                                    <td><input type = "radio" name = "47C" value = "D"/></td>
                                    <td><input type = "radio" name = "47C" value = "E"/></td>
                                    <td><input type = "radio" name = "47C" value = "F"/></td>		
                                </tr>
                                <tr>	
                                    <td for = "47D">Fluência em línguas</td>
                                    <td><input type = "radio" name = "47D" value = "A" required/></td>
                                    <td><input type = "radio" name = "47D" value = "B"/></td>
                                    <td><input type = "radio" name = "47D" value = "C"/></td>
                                    <td><input type = "radio" name = "47D" value = "D"/></td>
                                    <td><input type = "radio" name = "47D" value = "E"/></td>
                                    <td><input type = "radio" name = "47D" value = "F"/></td>		
                                </tr>
                                <tr>	
                                    <td for = "47E">Disponibilidade para trabalhar horas extras</td>
                                    <td><input type = "radio" name = "47E" value = "A" required/></td>
                                    <td><input type = "radio" name = "47E" value = "B"/></td>
                                    <td><input type = "radio" name = "47E" value = "C"/></td>
                                    <td><input type = "radio" name = "47E" value = "D"/></td>
                                    <td><input type = "radio" name = "47E" value = "E"/></td>
                                    <td><input type = "radio" name = "47E" value = "F"/></td>		
                                </tr>				
                                <tr>	
                                    <td for = "47F">Mestrado/Doutorado/Especialização</td>
                                    <td><input type = "radio" name = "47F" value = "A" required/></td>
                                    <td><input type = "radio" name = "47F" value = "B"/></td>
                                    <td><input type = "radio" name = "47F" value = "C"/></td>
                                    <td><input type = "radio" name = "47F" value = "D"/></td>
                                    <td><input type = "radio" name = "47F" value = "E"/></td>
                                    <td><input type = "radio" name = "47F" value = "F"/></td>	
                                </tr>
                            </tbody>
                        </table><br>

                        <label for = "perg48">Como os itens abaixo ofereceram uma base diferenciada comparada com os seus colegas de trabalho?</label><br>
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
                                    <td for = "48A">Adaptação às mudanças</td>			
                                    <td><input type = "radio" name = "48A" value = "A" required/></td>
                                    <td><input type = "radio" name = "48A" value = "B"/></td>
                                    <td><input type = "radio" name = "48A" value = "C"/></td>
                                    <td><input type = "radio" name = "48A" value = "D"/></td>
                                    <td><input type = "radio" name = "48A" value = "E"/></td>		
                                </tr>
                                <tr>
                                    <td for = "48B">Aprendizado de novas técnicas</td>
                                    <td><input type = "radio" name = "48B" value = "A" required/></td>
                                    <td><input type = "radio" name = "48B" value = "B"/></td>
                                    <td><input type = "radio" name = "48B" value = "C"/></td>
                                    <td><input type = "radio" name = "48B" value = "D"/></td>
                                    <td><input type = "radio" name = "48B" value = "E"/></td>	
                                </tr>
                                <tr>
                                    <td for = "48C">Aptidão empreendedora</td>
                                    <td><input type = "radio" name = "48C" value = "A" required/></td>
                                    <td><input type = "radio" name = "48C" value = "B"/></td>
                                    <td><input type = "radio" name = "48C" value = "C"/></td>
                                    <td><input type = "radio" name = "48C" value = "D"/></td>
                                    <td><input type = "radio" name = "48C" value = "E"/></td>		
                                </tr>
                                <tr>	
                                    <td for = "48D">Capacidade analítica</td>
                                    <td><input type = "radio" name = "48D" value = "A" required/></td>
                                    <td><input type = "radio" name = "48D" value = "B"/></td>
                                    <td><input type = "radio" name = "48D" value = "C"/></td>
                                    <td><input type = "radio" name = "48D" value = "D"/></td>
                                    <td><input type = "radio" name = "48D" value = "E"/></td>		
                                </tr>
                                <tr>	
                                    <td for = "48E">Criatividade</td>
                                    <td><input type = "radio" name = "48E" value = "A" required/></td>
                                    <td><input type = "radio" name = "48E" value = "B"/></td>
                                    <td><input type = "radio" name = "48E" value = "C"/></td>
                                    <td><input type = "radio" name = "48E" value = "D"/></td>
                                    <td><input type = "radio" name = "48E" value = "E"/></td>		
                                </tr>				
                                <tr>	
                                    <td for = "48F">Eficiência na produção</td>
                                    <td><input type = "radio" name = "48F" value = "A" required/></td>
                                    <td><input type = "radio" name = "48F" value = "B"/></td>
                                    <td><input type = "radio" name = "48F" value = "C"/></td>
                                    <td><input type = "radio" name = "48F" value = "D"/></td>
                                    <td><input type = "radio" name = "48F" value = "E"/></td>	
                                </tr>
                                <tr>	
                                    <td for = "48G">Liderança</td>
                                    <td><input type = "radio" name = "48G" value = "A" required/></td>
                                    <td><input type = "radio" name = "48G" value = "B"/></td>
                                    <td><input type = "radio" name = "48G" value = "C"/></td>
                                    <td><input type = "radio" name = "48G" value = "D"/></td>
                                    <td><input type = "radio" name = "48G" value = "E"/></td>	
                                </tr>
                                <tr>	
                                    <td for = "48H">Visão ampla de organização</td>
                                    <td><input type = "radio" name = "48H" value = "A" required/></td>
                                    <td><input type = "radio" name = "48H" value = "B"/></td>
                                    <td><input type = "radio" name = "48H" value = "C"/></td>
                                    <td><input type = "radio" name = "48H" value = "D"/></td>
                                    <td><input type = "radio" name = "48H" value = "E"/></td>	
                                </tr>
                                <tr>	
                                    <td for = "48I">Visão de novas tendências</td>
                                    <td><input type = "radio" name = "48I" value = "A" required/></td>
                                    <td><input type = "radio" name = "48I" value = "B"/></td>
                                    <td><input type = "radio" name = "48I" value = "C"/></td>
                                    <td><input type = "radio" name = "48I" value = "D"/></td>
                                    <td><input type = "radio" name = "48I" value = "E"/></td>	
                                </tr>
                            </tbody>
                        </table><br>

                        <label for = "perg49">Com qual frequência você utiliza as disciplinas abaixo no seu ambiente de trabalho?</label><br>                    
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
                                    <td for = "49A">Algoritmo e estrutura de dados</td>	
                                    <td><input type = "radio" name = "49A" value = "A" required/></td>
                                    <td><input type = "radio" name = "49A" value = "B"/></td>
                                    <td><input type = "radio" name = "49A" value = "C"/></td>
                                    <td><input type = "radio" name = "49A" value = "D"/></td>
                                    <td><input type = "radio" name = "49A" value = "E"/></td>	
                                </tr>
                                <tr>
                                    <td for = "49B">Arquitetura de software</td>		
                                    <td><input type = "radio" name = "49B" value = "A" required/></td>
                                    <td><input type = "radio" name = "49B" value = "B"/></td>
                                    <td><input type = "radio" name = "49B" value = "C"/></td>
                                    <td><input type = "radio" name = "49B" value = "D"/></td>
                                    <td><input type = "radio" name = "49B" value = "E"/></td>	
                                </tr>
                                <tr>
                                    <td for = "49C">Banco de dados</td>	
                                    <td><input type = "radio" name = "49C" value = "A" required/></td>
                                    <td><input type = "radio" name = "49C" value = "B"/></td>
                                    <td><input type = "radio" name = "49C" value = "C"/></td>
                                    <td><input type = "radio" name = "49C" value = "D"/></td>
                                    <td><input type = "radio" name = "49C" value = "E"/></td>
                                </tr>
                                <tr>
                                    <td for = "49D">Cálculo diferencial e integral</td>	
                                    <td><input type = "radio" name = "49D" value = "A" required/></td>
                                    <td><input type = "radio" name = "49D" value = "B"/></td>
                                    <td><input type = "radio" name = "49D" value = "C"/></td>
                                    <td><input type = "radio" name = "49D" value = "D"/></td>
                                    <td><input type = "radio" name = "49D" value = "E"/></td>
                                </tr>
                                <tr>
                                    <td for = "49E">Compiladores</td>		
                                    <td><input type = "radio" name = "49E" value = "A" required/></td>
                                    <td><input type = "radio" name = "49E" value = "B"/></td>
                                    <td><input type = "radio" name = "49E" value = "C"/></td>
                                    <td><input type = "radio" name = "49E" value = "D"/></td>
                                    <td><input type = "radio" name = "49E" value = "E"/></td>	
                                </tr>
                                <tr>
                                    <td for = "49F">Computador e sociedade</td>		
                                    <td><input type = "radio" name = "49F" value = "A" required/></td>
                                    <td><input type = "radio" name = "49F" value = "B"/></td>
                                    <td><input type = "radio" name = "49F" value = "C"/></td>
                                    <td><input type = "radio" name = "49F" value = "D"/></td>
                                    <td><input type = "radio" name = "49F" value = "E"/></td>
                                </tr>
                                <tr>
                                    <td for = "49G">Contabilidade</td>
                                    <td><input type = "radio" name = "49G" value = "A" required/></td>
                                    <td><input type = "radio" name = "49G" value = "B"/></td>
                                    <td><input type = "radio" name = "49G" value = "C"/></td>
                                    <td><input type = "radio" name = "49G" value = "D"/></td>
                                    <td><input type = "radio" name = "49G" value = "E"/></td>	
                                </tr>
                                <tr>
                                    <td for = "49H">Economia</td>		
                                    <td><input type = "radio" name = "49H" value = "A" required/></td>
                                    <td><input type = "radio" name = "49H" value = "B"/></td>
                                    <td><input type = "radio" name = "49H" value = "C"/></td>
                                    <td><input type = "radio" name = "49H" value = "D"/></td>
                                    <td><input type = "radio" name = "49H" value = "E"/></td>
                                </tr>
                                <tr>
                                    <td for = "49I">Empreendedorismo e inovação</td>	
                                    <td><input type = "radio" name = "49I" value = "A" required/></td>
                                    <td><input type = "radio" name = "49I" value = "B"/></td>
                                    <td><input type = "radio" name = "49I" value = "C"/></td>
                                    <td><input type = "radio" name = "49I" value = "D"/></td>
                                    <td><input type = "radio" name = "49I" value = "E"/></td>	
                                </tr>
                                <tr>
                                    <td for = "49K">Engenharia de software</td>			
                                    <td><input type = "radio" name = "49K" value = "A" required/></td>
                                    <td><input type = "radio" name = "49K" value = "B"/></td>
                                    <td><input type = "radio" name = "49K" value = "C"/></td>
                                    <td><input type = "radio" name = "49K" value = "D"/></td>
                                    <td><input type = "radio" name = "49K" value = "E"/></td>	
                                </tr>
                                <tr>
                                    <td for = "49L">Fisica</td>			
                                    <td><input type = "radio" name = "49L" value = "A" required/></td>
                                    <td><input type = "radio" name = "49L" value = "B"/></td>
                                    <td><input type = "radio" name = "49L" value = "C"/></td>
                                    <td><input type = "radio" name = "49L" value = "D"/></td>
                                    <td><input type = "radio" name = "49L" value = "E"/></td>		
                                </tr>
                                <tr>
                                    <td for = "49M">Fundamentos da teoria da computação</td>			
                                    <td><input type = "radio" name = "49M" value = "A" required/></td>
                                    <td><input type = "radio" name = "49M" value = "B"/></td>
                                    <td><input type = "radio" name = "49M" value = "C"/></td>
                                    <td><input type = "radio" name = "49M" value = "D"/></td>
                                    <td><input type = "radio" name = "49M" value = "E"/></td>	
                                </tr>
                                <tr>
                                    <td for = "49N">Geometria analitica e algebra linear</td>
                                    <td><input type = "radio" name = "49N" value = "A" required/></td>
                                    <td><input type = "radio" name = "49N" value = "B"/></td>
                                    <td><input type = "radio" name = "49N" value = "C"/></td>
                                    <td><input type = "radio" name = "49N" value = "D"/></td>
                                    <td><input type = "radio" name = "49N" value = "E"/></td>		
                                </tr>
                                <tr>
                                    <td for = "49O">Gestão ambiental</td>
                                    <td><input type = "radio" name = "49O" value = "A" required/></td>
                                    <td><input type = "radio" name = "49O" value = "B"/></td>
                                    <td><input type = "radio" name = "49O" value = "C"/></td>
                                    <td><input type = "radio" name = "49O" value = "D"/></td>
                                    <td><input type = "radio" name = "49O" value = "E"/></td>		
                                </tr>
                                <tr>
                                    <td for = "49P">Gestão da diversidade nas organizações</td>			
                                    <td><input type = "radio" name = "49P" value = "A" required/></td>
                                    <td><input type = "radio" name = "49P" value = "B"/></td>
                                    <td><input type = "radio" name = "49P" value = "C"/></td>
                                    <td><input type = "radio" name = "49P" value = "D"/></td>
                                    <td><input type = "radio" name = "49P" value = "E"/></td>	
                                </tr>
                                <tr>
                                    <td for = "49Q">Gestão de projetos</td>	
                                    <td><input type = "radio" name = "49Q" value = "A" required/></td>
                                    <td><input type = "radio" name = "49Q" value = "B"/></td>
                                    <td><input type = "radio" name = "49Q" value = "C"/></td>
                                    <td><input type = "radio" name = "49Q" value = "D"/></td>
                                    <td><input type = "radio" name = "49Q" value = "E"/></td>	
                                </tr>
                                <tr>
                                    <td for = "49R">Gestão, recuperação e análise de informações (Topicos II)</td>			
                                    <td><input type = "radio" name = "49R" value = "A" required/></td>
                                    <td><input type = "radio" name = "49R" value = "B"/></td>
                                    <td><input type = "radio" name = "49R" value = "C"/></td>
                                    <td><input type = "radio" name = "49R" value = "D"/></td>
                                    <td><input type = "radio" name = "49R" value = "E"/></td>	
                                </tr>
                                <tr>
                                    <td for = "49S">Inglês</td>			
                                    <td><input type = "radio" name = "49S" value = "A" required/></td>
                                    <td><input type = "radio" name = "49S" value = "B"/></td>
                                    <td><input type = "radio" name = "49S" value = "C"/></td>
                                    <td><input type = "radio" name = "49S" value = "D"/></td>
                                    <td><input type = "radio" name = "49S" value = "E"/></td>	
                                </tr>
                                <tr>
                                    <td for = "49T">Iniciação a estatística</td>		
                                    <td><input type = "radio" name = "49T" value = "A" required/></td>
                                    <td><input type = "radio" name = "49T" value = "B"/></td>
                                    <td><input type = "radio" name = "49T" value = "C"/></td>
                                    <td><input type = "radio" name = "49T" value = "D"/></td>
                                    <td><input type = "radio" name = "49T" value = "E"/></td>	
                                </tr>
                                <tr>
                                    <td for = "49U">Introdução à ciência dos dados (Tópicos I)</td>
                                    <td><input type = "radio" name = "49U" value = "A" required/></td>
                                    <td><input type = "radio" name = "49U" value = "B"/></td>
                                    <td><input type = "radio" name = "49U" value = "C"/></td>
                                    <td><input type = "radio" name = "49U" value = "D"/></td>
                                    <td><input type = "radio" name = "49U" value = "E"/></td>
                                </tr>
                                <tr>
                                    <td for = "49V">Introdução aos sistemas lógicos e digitais</td>			
                                    <td><input type = "radio" name = "49V" value = "A" required/></td>
                                    <td><input type = "radio" name = "49V" value = "B"/></td>
                                    <td><input type = "radio" name = "49V" value = "C"/></td>
                                    <td><input type = "radio" name = "49V" value = "D"/></td>
                                    <td><input type = "radio" name = "49V" value = "E"/></td>	
                                </tr>
                                <tr>
                                    <td for = "49W">Libras</td>			
                                    <td><input type = "radio" name = "49W" value = "A" required/></td>
                                    <td><input type = "radio" name = "49W" value = "B"/></td>
                                    <td><input type = "radio" name = "49W" value = "C"/></td>
                                    <td><input type = "radio" name = "49W" value = "D"/></td>
                                    <td><input type = "radio" name = "49W" value = "E"/></td>		
                                </tr>
                                <tr>
                                    <td for = "49X">Linguagem de programação</td>		
                                    <td><input type = "radio" name = "49X" value = "A" required/></td>
                                    <td><input type = "radio" name = "49X" value = "B"/></td>
                                    <td><input type = "radio" name = "49X" value = "C"/></td>
                                    <td><input type = "radio" name = "49X" value = "D"/></td>
                                    <td><input type = "radio" name = "49X" value = "E"/></td>	
                                </tr>
                                <tr>
                                    <td for = "49Y">Meta-heurística</td>		
                                    <td><input type = "radio" name = "49Y" value = "A" required/></td>
                                    <td><input type = "radio" name = "49Y" value = "B"/></td>
                                    <td><input type = "radio" name = "49Y" value = "C"/></td>
                                    <td><input type = "radio" name = "49Y" value = "D"/></td>
                                    <td><input type = "radio" name = "49Y" value = "E"/></td>	
                                </tr>
                                <tr>
                                    <td for = "49Z">Matemática discreta</td>	
                                    <td><input type = "radio" name = "49Z" value = "A" required/></td>
                                    <td><input type = "radio" name = "49Z" value = "B"/></td>
                                    <td><input type = "radio" name = "49Z" value = "C"/></td>
                                    <td><input type = "radio" name = "49Z" value = "D"/></td>
                                    <td><input type = "radio" name = "49Z" value = "E"/></td>
                                </tr>
                                <tr>
                                    <td for = "49AA">Matemática financeira</td>			
                                    <td><input type = "radio" name = "49AA" value = "A" required/></td>
                                    <td><input type = "radio" name = "49AA" value = "B"/></td>
                                    <td><input type = "radio" name = "49AA" value = "C"/></td>
                                    <td><input type = "radio" name = "49AA" value = "D"/></td>
                                    <td><input type = "radio" name = "49AA" value = "E"/></td>	
                                </tr>
                                <tr>
                                    <td for = "49AB">O ser e as organizações</td>		
                                    <td><input type = "radio" name = "49AB" value = "A" required/></td>
                                    <td><input type = "radio" name = "49AB" value = "B"/></td>
                                    <td><input type = "radio" name = "49AB" value = "C"/></td>
                                    <td><input type = "radio" name = "49AB" value = "D"/></td>
                                    <td><input type = "radio" name = "49AB" value = "E"/></td>	
                                </tr>
                                <tr>
                                    <td for = "49AC">Organização de computadores</td>
                                    <td><input type = "radio" name = "49AC" value = "A" required/></td>
                                    <td><input type = "radio" name = "49AC" value = "B"/></td>
                                    <td><input type = "radio" name = "49AC" value = "C"/></td>
                                    <td><input type = "radio" name = "49AC" value = "D"/></td>
                                    <td><input type = "radio" name = "49AC" value = "E"/></td>	
                                </tr>
                                <tr>
                                    <td for = "49AD">Pesquisa operacional</td>
                                    <td><input type = "radio" name = "49AD" value = "A" required/></td>
                                    <td><input type = "radio" name = "49AD" value = "B"/></td>
                                    <td><input type = "radio" name = "49AD" value = "C"/></td>
                                    <td><input type = "radio" name = "49AD" value = "D"/></td>
                                    <td><input type = "radio" name = "49AD" value = "E"/></td>	
                                </tr>
                                <tr>
                                    <td for = "49AE">Português instrumental</td>
                                    <td><input type = "radio" name = "49AE" value = "A" required/></td>
                                    <td><input type = "radio" name = "49AE" value = "B"/></td>
                                    <td><input type = "radio" name = "49AE" value = "C"/></td>
                                    <td><input type = "radio" name = "49AE" value = "D"/></td>
                                    <td><input type = "radio" name = "49AE" value = "E"/></td>	
                                </tr>
                                <tr>
                                    <td for = "49AF">Processamento digital de imagens</td>
                                    <td><input type = "radio" name = "49AF" value = "A" required/></td>
                                    <td><input type = "radio" name = "49AF" value = "B"/></td>
                                    <td><input type = "radio" name = "49AF" value = "C"/></td>
                                    <td><input type = "radio" name = "49AF" value = "D"/></td>
                                    <td><input type = "radio" name = "49AF" value = "E"/></td>
                                </tr>
                                <tr>
                                    <td for = "49AG">Programação</td>
                                    <td><input type = "radio" name = "49AG" value = "A" required/></td>
                                    <td><input type = "radio" name = "49AG" value = "B"/></td>
                                    <td><input type = "radio" name = "49AG" value = "C"/></td>
                                    <td><input type = "radio" name = "49AG" value = "D"/></td>
                                    <td><input type = "radio" name = "49AG" value = "E"/></td>
                                </tr>
                                <tr>
                                    <td for = "49AH">Programação orientada a objeto</td>
                                    <td><input type = "radio" name = "49AH" value = "A" required/></td>
                                    <td><input type = "radio" name = "49AH" value = "B"/></td>
                                    <td><input type = "radio" name = "49AH" value = "C"/></td>
                                    <td><input type = "radio" name = "49AH" value = "D"/></td>
                                    <td><input type = "radio" name = "49AH" value = "E"/></td>
                                </tr>
                                <tr>
                                    <td for = "49AI">Projeto de sistemas para web</td>
                                    <td><input type = "radio" name = "49AI" value = "A" required/></td>
                                    <td><input type = "radio" name = "49AI" value = "B"/></td>
                                    <td><input type = "radio" name = "49AI" value = "C"/></td>
                                    <td><input type = "radio" name = "49AI" value = "D"/></td>
                                    <td><input type = "radio" name = "49AI" value = "E"/></td>
                                </tr>
                                <tr>
                                    <td for = "49AJ">Projeto e análise de algoritmos</td>
                                    <td><input type = "radio" name = "49AJ" value = "A" required/></td>
                                    <td><input type = "radio" name = "49AJ" value = "B"/></td>
                                    <td><input type = "radio" name = "49AJ" value = "C"/></td>
                                    <td><input type = "radio" name = "49AJ" value = "D"/></td>
                                    <td><input type = "radio" name = "49AJ" value = "E"/></td>
                                </tr>
                                <tr>
                                    <td for = "49AK">Redes de computadores</td>
                                    <td><input type = "radio" name = "49AK" value = "A" required/></td>
                                    <td><input type = "radio" name = "49AK" value = "B"/></td>
                                    <td><input type = "radio" name = "49AK" value = "C"/></td>
                                    <td><input type = "radio" name = "49AK" value = "D"/></td>
                                    <td><input type = "radio" name = "49AK" value = "E"/></td>
                                </tr>
                                <tr>
                                    <td for = "49AL">Sistemas distribuídos e paralelos</td>
                                    <td><input type = "radio" name = "49AL" value = "A" required/></td>
                                    <td><input type = "radio" name = "49AL" value = "B"/></td>
                                    <td><input type = "radio" name = "49AL" value = "C"/></td>
                                    <td><input type = "radio" name = "49AL" value = "D"/></td>
                                    <td><input type = "radio" name = "49AL" value = "E"/></td>
                                </tr>
                                <tr>
                                    <td for = "49AM">Sistemas embarcados</td>
                                    <td><input type = "radio" name = "49AM" value = "A" required/></td>
                                    <td><input type = "radio" name = "49AM" value = "B"/></td>
                                    <td><input type = "radio" name = "49AM" value = "C"/></td>
                                    <td><input type = "radio" name = "49AM" value = "D"/></td>
                                    <td><input type = "radio" name = "49AM" value = "E"/></td>
                                </tr>
                                <tr>
                                    <td for = "49AN">Sistemas operacionais</td>
                                    <td><input type = "radio" name = "49AN" value = "A" required/></td>
                                    <td><input type = "radio" name = "49AN" value = "B"/></td>
                                    <td><input type = "radio" name = "49AN" value = "C"/></td>
                                    <td><input type = "radio" name = "49AN" value = "D"/></td>
                                    <td><input type = "radio" name = "49AN" value = "E"/></td>
                                </tr>
                                <tr>
                                    <td for = "49AO">Teoria e modelo de grafos</td>
                                    <td><input type = "radio" name = "49AO" value = "A" required/></td>
                                    <td><input type = "radio" name = "49AO" value = "B"/></td>
                                    <td><input type = "radio" name = "49AO" value = "C"/></td>
                                    <td><input type = "radio" name = "49AO" value = "D"/></td>
                                    <td><input type = "radio" name = "49AO" value = "E"/></td>
                                </tr>
                                <tr>
                                    <td for = "49AP">Teoria geral da administração</td>
                                    <td><input type = "radio" name = "49AP" value = "A" required/></td>
                                    <td><input type = "radio" name = "49AP" value = "B"/></td>
                                    <td><input type = "radio" name = "49AP" value = "C"/></td>
                                    <td><input type = "radio" name = "49AP" value = "D"/></td>
                                    <td><input type = "radio" name = "49AP" value = "E"/></td>
                                </tr>
                                <tr>
                                    <td for = "49AQ">Tópicos especiais III</td>
                                    <td><input type = "radio" name = "49AQ" value = "A" required/></td>
                                    <td><input type = "radio" name = "49AQ" value = "B"/></td>
                                    <td><input type = "radio" name = "49AQ" value = "C"/></td>
                                    <td><input type = "radio" name = "49AQ" value = "D"/></td>
                                    <td><input type = "radio" name = "49AQ" value = "E"/></td>
                                </tr>

                                <tr>
                                    <td for = "49AR">Tópicos especiais IV</td>
                                    <td><input type = "radio" name = "49AR" value = "A" required/></td>
                                    <td><input type = "radio" name = "49AR" value = "B"/></td>
                                    <td><input type = "radio" name = "49AR" value = "C"/></td>
                                    <td><input type = "radio" name = "49AR" value = "D"/></td>
                                    <td><input type = "radio" name = "49AR" value = "E"/></td>
                                </tr>
                            </tbody>
                        </table><br>

                        <div class = "botao">
                            <a href = "empresasup.php"><input id = "botao" type = "button" class= "btn btn-primary" value = "Anterior"/></a>
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
        
        <script src = "https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity = "sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin = "anonymous"></script>
        <script src = "https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity = "sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin = "anonymous"></script> 
        <script src = "https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity = "sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin = "anonymous"></script> 
        <script src = "https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity = "sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin = "anonymous"></script>      
	</body>
</html>