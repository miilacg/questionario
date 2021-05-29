@extends('layoutAssay')

@section('title', 'Mercado de trabalho')
@section('value', '50%')

@section('content')
  <form method="POST" action="#">
    {{ csrf_field() }}

    <div class="form-group">    
			<label>Classifique os itens abaixo de acordo com a importância deles para entrada no mercado de trabalho.</label>
			<label class="subtitle">(Considere 1 como menor indice de importancia e 5 como maior indice)</label>		
			<table class="table">
				<thead class="thead-light">
					<tr>
						<th scope="col">#</th>
						<th scope="col">1</th>
						<th scope="col">2</th>
						<th scope="col">3</th>
						<th scope="col">4</th>
						<th scope="col">5</th>
						<th scope="col">Não se aplica</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>Intituição de ensino</td>			
						<td><input type="radio" name="47A" value="A" required/></td>
						<td><input type="radio" name="47A" value="B"/></td>
						<td><input type="radio" name="47A" value="C"/></td>
						<td><input type="radio" name="47A" value="D"/></td>
						<td><input type="radio" name="47A" value="E"/></td>
						<td><input type="radio" name="47A" value="F"/></td>		
					</tr>
					<tr>
						<td>Trabalho em equipe</td>
						<td><input type="radio" name="47B" value="A" required/></td>
						<td><input type="radio" name="47B" value="B"/></td>
						<td><input type="radio" name="47B" value="C"/></td>
						<td><input type="radio" name="47B" value="D"/></td>
						<td><input type="radio" name="47B" value="E"/></td>
						<td><input type="radio" name="47B" value="F"/></td>	
					</tr>
					<tr>
						<td>Experiência no mercado</td>
						<td><input type="radio" name="47C" value="A" required/></td>
						<td><input type="radio" name="47C" value="B"/></td>
						<td><input type="radio" name="47C" value="C"/></td>
						<td><input type="radio" name="47C" value="D"/></td>
						<td><input type="radio" name="47C" value="E"/></td>
						<td><input type="radio" name="47C" value="F"/></td>		
					</tr>
					<tr>	
						<td>Fluência em línguas</td>
						<td><input type="radio" name="47D" value="A" required/></td>
						<td><input type="radio" name="47D" value="B"/></td>
						<td><input type="radio" name="47D" value="C"/></td>
						<td><input type="radio" name="47D" value="D"/></td>
						<td><input type="radio" name="47D" value="E"/></td>
						<td><input type="radio" name="47D" value="F"/></td>		
					</tr>
					<tr>	
						<td>Disponibilidade para trabalhar horas extras</td>
						<td><input type="radio" name="47E" value="A" required/></td>
						<td><input type="radio" name="47E" value="B"/></td>
						<td><input type="radio" name="47E" value="C"/></td>
						<td><input type="radio" name="47E" value="D"/></td>
						<td><input type="radio" name="47E" value="E"/></td>
						<td><input type="radio" name="47E" value="F"/></td>		
					</tr>				
					<tr>	
						<td>Mestrado / Doutorado / Especialização</td>
						<td><input type="radio" name="47F" value="A" required/></td>
						<td><input type="radio" name="47F" value="B"/></td>
						<td><input type="radio" name="47F" value="C"/></td>
						<td><input type="radio" name="47F" value="D"/></td>
						<td><input type="radio" name="47F" value="E"/></td>
						<td><input type="radio" name="47F" value="F"/></td>	
					</tr>
				</tbody>
			</table>
		</div>

		<div class="form-group"> 
			<label>Como os itens abaixo ofereceram uma base diferenciada comparada com os seus colegas de trabalho?</label>
			<label class="subtitle">(Considere 1 como menor indice de importancia e 5 como maior indice)</label>		
			<table class="table">
				<thead class="thead-light">
					<tr>
						<th scope="col">#</th>
						<th scope="col">1</th>
						<th scope="col">2</th>
						<th scope="col">3</th>
						<th scope="col">4</th>
						<th scope="col">5</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>Adaptação às mudanças</td>			
						<td><input type="radio" name="48A" value="A" required/></td>
						<td><input type="radio" name="48A" value="B"/></td>
						<td><input type="radio" name="48A" value="C"/></td>
						<td><input type="radio" name="48A" value="D"/></td>
						<td><input type="radio" name="48A" value="E"/></td>		
					</tr>
					<tr>
						<td>Aprendizado de novas técnicas</td>
						<td><input type="radio" name="48B" value="A" required/></td>
						<td><input type="radio" name="48B" value="B"/></td>
						<td><input type="radio" name="48B" value="C"/></td>
						<td><input type="radio" name="48B" value="D"/></td>
						<td><input type="radio" name="48B" value="E"/></td>	
					</tr>
					<tr>
						<td>Aptidão empreendedora</td>
						<td><input type="radio" name="48C" value="A" required/></td>
						<td><input type="radio" name="48C" value="B"/></td>
						<td><input type="radio" name="48C" value="C"/></td>
						<td><input type="radio" name="48C" value="D"/></td>
						<td><input type="radio" name="48C" value="E"/></td>		
					</tr>
					<tr>	
						<td>Capacidade analítica</td>
						<td><input type="radio" name="48D" value="A" required/></td>
						<td><input type="radio" name="48D" value="B"/></td>
						<td><input type="radio" name="48D" value="C"/></td>
						<td><input type="radio" name="48D" value="D"/></td>
						<td><input type="radio" name="48D" value="E"/></td>		
					</tr>
					<tr>	
						<td>Criatividade</td>
						<td><input type="radio" name="48E" value="A" required/></td>
						<td><input type="radio" name="48E" value="B"/></td>
						<td><input type="radio" name="48E" value="C"/></td>
						<td><input type="radio" name="48E" value="D"/></td>
						<td><input type="radio" name="48E" value="E"/></td>		
					</tr>				
					<tr>	
						<td>Eficiência na produção</td>
						<td><input type="radio" name="48F" value="A" required/></td>
						<td><input type="radio" name="48F" value="B"/></td>
						<td><input type="radio" name="48F" value="C"/></td>
						<td><input type="radio" name="48F" value="D"/></td>
						<td><input type="radio" name="48F" value="E"/></td>	
					</tr>
					<tr>	
						<td>Liderança</td>
						<td><input type="radio" name="48G" value="A" required/></td>
						<td><input type="radio" name="48G" value="B"/></td>
						<td><input type="radio" name="48G" value="C"/></td>
						<td><input type="radio" name="48G" value="D"/></td>
						<td><input type="radio" name="48G" value="E"/></td>	
					</tr>
					<tr>	
						<td>Visão ampla de organização</td>
						<td><input type="radio" name="48H" value="A" required/></td>
						<td><input type="radio" name="48H" value="B"/></td>
						<td><input type="radio" name="48H" value="C"/></td>
						<td><input type="radio" name="48H" value="D"/></td>
						<td><input type="radio" name="48H" value="E"/></td>	
					</tr>
					<tr>	
						<td>Visão de novas tendências</td>
						<td><input type="radio" name="48I" value="A" required/></td>
						<td><input type="radio" name="48I" value="B"/></td>
						<td><input type="radio" name="48I" value="C"/></td>
						<td><input type="radio" name="48I" value="D"/></td>
						<td><input type="radio" name="48I" value="E"/></td>	
					</tr>
				</tbody>
			</table>
		</div>

		<div class="form-group">
			<label>Com qual frequência você utiliza as disciplinas abaixo no seu ambiente de trabalho?</label>
			<table class="table" id="header-fixed">
				<thead class="thead-light">
					<tr>
						<th scope="col" style="width: 320px;">#</th>
						<th scope="col" style="width: 150px;">Uso efetivamente</th>
						<th scope="col" style="width: 250px;">Uso indiretamente e é indispensável</th>
						<th scope="col" style="width: 250px;">Uso indiretamente e é dispensável</th>
						<th scope="col" style="width: 100px;">Nunca usei</th>
						<th scope="col" style="width: 190px;">Não fiz a disciplina</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>Algoritmo e estrutura de dados</td>	
						<td><input type="radio" name="49A" value="A" required/></td>
						<td><input type="radio" name="49A" value="B"/></td>
						<td><input type="radio" name="49A" value="C"/></td>
						<td><input type="radio" name="49A" value="D"/></td>
						<td><input type="radio" name="49A" value="E"/></td>	
					</tr>
					<tr>
						<td>Arquitetura de software</td>		
						<td><input type="radio" name="49B" value="A" required/></td>
						<td><input type="radio" name="49B" value="B"/></td>
						<td><input type="radio" name="49B" value="C"/></td>
						<td><input type="radio" name="49B" value="D"/></td>
						<td><input type="radio" name="49B" value="E"/></td>	
					</tr>
					<tr>
						<td>Banco de dados</td>	
						<td><input type="radio" name="49C" value="A" required/></td>
						<td><input type="radio" name="49C" value="B"/></td>
						<td><input type="radio" name="49C" value="C"/></td>
						<td><input type="radio" name="49C" value="D"/></td>
						<td><input type="radio" name="49C" value="E"/></td>
					</tr>
					<tr>
						<td>Cálculo diferencial e integral</td>	
						<td><input type="radio" name="49D" value="A" required/></td>
						<td><input type="radio" name="49D" value="B"/></td>
						<td><input type="radio" name="49D" value="C"/></td>
						<td><input type="radio" name="49D" value="D"/></td>
						<td><input type="radio" name="49D" value="E"/></td>
					</tr>
					<tr>
						<td>Compiladores</td>		
						<td><input type="radio" name="49E" value="A" required/></td>
						<td><input type="radio" name="49E" value="B"/></td>
						<td><input type="radio" name="49E" value="C"/></td>
						<td><input type="radio" name="49E" value="D"/></td>
						<td><input type="radio" name="49E" value="E"/></td>	
					</tr>
					<tr>
						<td>Computador e sociedade</td>		
						<td><input type="radio" name="49F" value="A" required/></td>
						<td><input type="radio" name="49F" value="B"/></td>
						<td><input type="radio" name="49F" value="C"/></td>
						<td><input type="radio" name="49F" value="D"/></td>
						<td><input type="radio" name="49F" value="E"/></td>
					</tr>
					<tr>
						<td>Contabilidade</td>
						<td><input type="radio" name="49G" value="A" required/></td>
						<td><input type="radio" name="49G" value="B"/></td>
						<td><input type="radio" name="49G" value="C"/></td>
						<td><input type="radio" name="49G" value="D"/></td>
						<td><input type="radio" name="49G" value="E"/></td>	
					</tr>
					<tr>
						<td>Economia</td>		
						<td><input type="radio" name="49H" value="A" required/></td>
						<td><input type="radio" name="49H" value="B"/></td>
						<td><input type="radio" name="49H" value="C"/></td>
						<td><input type="radio" name="49H" value="D"/></td>
						<td><input type="radio" name="49H" value="E"/></td>
					</tr>
					<tr>
						<td>Empreendedorismo e inovação</td>	
						<td><input type="radio" name="49I" value="A" required/></td>
						<td><input type="radio" name="49I" value="B"/></td>
						<td><input type="radio" name="49I" value="C"/></td>
						<td><input type="radio" name="49I" value="D"/></td>
						<td><input type="radio" name="49I" value="E"/></td>	
					</tr>
					<tr>
						<td>Engenharia de software</td>			
						<td><input type="radio" name="49K" value="A" required/></td>
						<td><input type="radio" name="49K" value="B"/></td>
						<td><input type="radio" name="49K" value="C"/></td>
						<td><input type="radio" name="49K" value="D"/></td>
						<td><input type="radio" name="49K" value="E"/></td>	
					</tr>
					<tr>
						<td>Fisica</td>			
						<td><input type="radio" name="49L" value="A" required/></td>
						<td><input type="radio" name="49L" value="B"/></td>
						<td><input type="radio" name="49L" value="C"/></td>
						<td><input type="radio" name="49L" value="D"/></td>
						<td><input type="radio" name="49L" value="E"/></td>		
					</tr>
					<tr>
						<td>Fundamentos da teoria da computação</td>			
						<td><input type="radio" name="49M" value="A" required/></td>
						<td><input type="radio" name="49M" value="B"/></td>
						<td><input type="radio" name="49M" value="C"/></td>
						<td><input type="radio" name="49M" value="D"/></td>
						<td><input type="radio" name="49M" value="E"/></td>	
					</tr>
					<tr>
						<td>Geometria analitica e algebra linear</td>
						<td><input type="radio" name="49N" value="A" required/></td>
						<td><input type="radio" name="49N" value="B"/></td>
						<td><input type="radio" name="49N" value="C"/></td>
						<td><input type="radio" name="49N" value="D"/></td>
						<td><input type="radio" name="49N" value="E"/></td>		
					</tr>
					<tr>
						<td>Gestão ambiental</td>
						<td><input type="radio" name="49O" value="A" required/></td>
						<td><input type="radio" name="49O" value="B"/></td>
						<td><input type="radio" name="49O" value="C"/></td>
						<td><input type="radio" name="49O" value="D"/></td>
						<td><input type="radio" name="49O" value="E"/></td>		
					</tr>
					<tr>
						<td>Gestão da diversidade nas organizações</td>			
						<td><input type="radio" name="49P" value="A" required/></td>
						<td><input type="radio" name="49P" value="B"/></td>
						<td><input type="radio" name="49P" value="C"/></td>
						<td><input type="radio" name="49P" value="D"/></td>
						<td><input type="radio" name="49P" value="E"/></td>	
					</tr>
					<tr>
						<td>Gestão de projetos</td>	
						<td><input type="radio" name="49Q" value="A" required/></td>
						<td><input type="radio" name="49Q" value="B"/></td>
						<td><input type="radio" name="49Q" value="C"/></td>
						<td><input type="radio" name="49Q" value="D"/></td>
						<td><input type="radio" name="49Q" value="E"/></td>	
					</tr>
					<tr>
						<td>Gestão, recuperação e análise de informações (Topicos II)</td>			
						<td><input type="radio" name="49R" value="A" required/></td>
						<td><input type="radio" name="49R" value="B"/></td>
						<td><input type="radio" name="49R" value="C"/></td>
						<td><input type="radio" name="49R" value="D"/></td>
						<td><input type="radio" name="49R" value="E"/></td>	
					</tr>
					<tr>
						<td>Inglês</td>			
						<td><input type="radio" name="49S" value="A" required/></td>
						<td><input type="radio" name="49S" value="B"/></td>
						<td><input type="radio" name="49S" value="C"/></td>
						<td><input type="radio" name="49S" value="D"/></td>
						<td><input type="radio" name="49S" value="E"/></td>	
					</tr>
					<tr>
						<td>Iniciação a estatística</td>		
						<td><input type="radio" name="49T" value="A" required/></td>
						<td><input type="radio" name="49T" value="B"/></td>
						<td><input type="radio" name="49T" value="C"/></td>
						<td><input type="radio" name="49T" value="D"/></td>
						<td><input type="radio" name="49T" value="E"/></td>	
					</tr>
					<tr>
						<td>Introdução à ciência dos dados (Tópicos I)</td>
						<td><input type="radio" name="49U" value="A" required/></td>
						<td><input type="radio" name="49U" value="B"/></td>
						<td><input type="radio" name="49U" value="C"/></td>
						<td><input type="radio" name="49U" value="D"/></td>
						<td><input type="radio" name="49U" value="E"/></td>
					</tr>
					<tr>
						<td>Introdução aos sistemas lógicos e digitais</td>			
						<td><input type="radio" name="49V" value="A" required/></td>
						<td><input type="radio" name="49V" value="B"/></td>
						<td><input type="radio" name="49V" value="C"/></td>
						<td><input type="radio" name="49V" value="D"/></td>
						<td><input type="radio" name="49V" value="E"/></td>	
					</tr>
					<tr>
						<td>Libras</td>			
						<td><input type="radio" name="49W" value="A" required/></td>
						<td><input type="radio" name="49W" value="B"/></td>
						<td><input type="radio" name="49W" value="C"/></td>
						<td><input type="radio" name="49W" value="D"/></td>
						<td><input type="radio" name="49W" value="E"/></td>		
					</tr>
					<tr>
						<td>Linguagem de programação</td>		
						<td><input type="radio" name="49X" value="A" required/></td>
						<td><input type="radio" name="49X" value="B"/></td>
						<td><input type="radio" name="49X" value="C"/></td>
						<td><input type="radio" name="49X" value="D"/></td>
						<td><input type="radio" name="49X" value="E"/></td>	
					</tr>
					<tr>
						<td>Meta-heurística</td>		
						<td><input type="radio" name="49Y" value="A" required/></td>
						<td><input type="radio" name="49Y" value="B"/></td>
						<td><input type="radio" name="49Y" value="C"/></td>
						<td><input type="radio" name="49Y" value="D"/></td>
						<td><input type="radio" name="49Y" value="E"/></td>	
					</tr>
					<tr>
						<td>Matemática discreta</td>	
						<td><input type="radio" name="49Z" value="A" required/></td>
						<td><input type="radio" name="49Z" value="B"/></td>
						<td><input type="radio" name="49Z" value="C"/></td>
						<td><input type="radio" name="49Z" value="D"/></td>
						<td><input type="radio" name="49Z" value="E"/></td>
					</tr>
					<tr>
						<td>Matemática financeira</td>			
						<td><input type="radio" name="49AA" value="A" required/></td>
						<td><input type="radio" name="49AA" value="B"/></td>
						<td><input type="radio" name="49AA" value="C"/></td>
						<td><input type="radio" name="49AA" value="D"/></td>
						<td><input type="radio" name="49AA" value="E"/></td>	
					</tr>
					<tr>
						<td>O ser e as organizações</td>		
						<td><input type="radio" name="49AB" value="A" required/></td>
						<td><input type="radio" name="49AB" value="B"/></td>
						<td><input type="radio" name="49AB" value="C"/></td>
						<td><input type="radio" name="49AB" value="D"/></td>
						<td><input type="radio" name="49AB" value="E"/></td>	
					</tr>
					<tr>
						<td>Organização de computadores</td>
						<td><input type="radio" name="49AC" value="A" required/></td>
						<td><input type="radio" name="49AC" value="B"/></td>
						<td><input type="radio" name="49AC" value="C"/></td>
						<td><input type="radio" name="49AC" value="D"/></td>
						<td><input type="radio" name="49AC" value="E"/></td>	
					</tr>
					<tr>
						<td>Pesquisa operacional</td>
						<td><input type="radio" name="49AD" value="A" required/></td>
						<td><input type="radio" name="49AD" value="B"/></td>
						<td><input type="radio" name="49AD" value="C"/></td>
						<td><input type="radio" name="49AD" value="D"/></td>
						<td><input type="radio" name="49AD" value="E"/></td>	
					</tr>
					<tr>
						<td>Português instrumental</td>
						<td><input type="radio" name="49AE" value="A" required/></td>
						<td><input type="radio" name="49AE" value="B"/></td>
						<td><input type="radio" name="49AE" value="C"/></td>
						<td><input type="radio" name="49AE" value="D"/></td>
						<td><input type="radio" name="49AE" value="E"/></td>	
					</tr>
					<tr>
						<td>Processamento digital de imagens</td>
						<td><input type="radio" name="49AF" value="A" required/></td>
						<td><input type="radio" name="49AF" value="B"/></td>
						<td><input type="radio" name="49AF" value="C"/></td>
						<td><input type="radio" name="49AF" value="D"/></td>
						<td><input type="radio" name="49AF" value="E"/></td>
					</tr>
					<tr>
						<td>Programação</td>
						<td><input type="radio" name="49AG" value="A" required/></td>
						<td><input type="radio" name="49AG" value="B"/></td>
						<td><input type="radio" name="49AG" value="C"/></td>
						<td><input type="radio" name="49AG" value="D"/></td>
						<td><input type="radio" name="49AG" value="E"/></td>
					</tr>
					<tr>
						<td>Programação orientada a objeto</td>
						<td><input type="radio" name="49AH" value="A" required/></td>
						<td><input type="radio" name="49AH" value="B"/></td>
						<td><input type="radio" name="49AH" value="C"/></td>
						<td><input type="radio" name="49AH" value="D"/></td>
						<td><input type="radio" name="49AH" value="E"/></td>
					</tr>
					<tr>
						<td>Projeto de sistemas para web</td>
						<td><input type="radio" name="49AI" value="A" required/></td>
						<td><input type="radio" name="49AI" value="B"/></td>
						<td><input type="radio" name="49AI" value="C"/></td>
						<td><input type="radio" name="49AI" value="D"/></td>
						<td><input type="radio" name="49AI" value="E"/></td>
					</tr>
					<tr>
						<td>Projeto e análise de algoritmos</td>
						<td><input type="radio" name="49AJ" value="A" required/></td>
						<td><input type="radio" name="49AJ" value="B"/></td>
						<td><input type="radio" name="49AJ" value="C"/></td>
						<td><input type="radio" name="49AJ" value="D"/></td>
						<td><input type="radio" name="49AJ" value="E"/></td>
					</tr>
					<tr>
						<td>Redes de computadores</td>
						<td><input type="radio" name="49AK" value="A" required/></td>
						<td><input type="radio" name="49AK" value="B"/></td>
						<td><input type="radio" name="49AK" value="C"/></td>
						<td><input type="radio" name="49AK" value="D"/></td>
						<td><input type="radio" name="49AK" value="E"/></td>
					</tr>
					<tr>
						<td>Sistemas distribuídos e paralelos</td>
						<td><input type="radio" name="49AL" value="A" required/></td>
						<td><input type="radio" name="49AL" value="B"/></td>
						<td><input type="radio" name="49AL" value="C"/></td>
						<td><input type="radio" name="49AL" value="D"/></td>
						<td><input type="radio" name="49AL" value="E"/></td>
					</tr>
					<tr>
						<td>Sistemas embarcados</td>
						<td><input type="radio" name="49AM" value="A" required/></td>
						<td><input type="radio" name="49AM" value="B"/></td>
						<td><input type="radio" name="49AM" value="C"/></td>
						<td><input type="radio" name="49AM" value="D"/></td>
						<td><input type="radio" name="49AM" value="E"/></td>
					</tr>
					<tr>
						<td>Sistemas operacionais</td>
						<td><input type="radio" name="49AN" value="A" required/></td>
						<td><input type="radio" name="49AN" value="B"/></td>
						<td><input type="radio" name="49AN" value="C"/></td>
						<td><input type="radio" name="49AN" value="D"/></td>
						<td><input type="radio" name="49AN" value="E"/></td>
					</tr>
					<tr>
						<td>Teoria e modelo de grafos</td>
						<td><input type="radio" name="49AO" value="A" required/></td>
						<td><input type="radio" name="49AO" value="B"/></td>
						<td><input type="radio" name="49AO" value="C"/></td>
						<td><input type="radio" name="49AO" value="D"/></td>
						<td><input type="radio" name="49AO" value="E"/></td>
					</tr>
					<tr>
						<td>Teoria geral da administração</td>
						<td><input type="radio" name="49AP" value="A" required/></td>
						<td><input type="radio" name="49AP" value="B"/></td>
						<td><input type="radio" name="49AP" value="C"/></td>
						<td><input type="radio" name="49AP" value="D"/></td>
						<td><input type="radio" name="49AP" value="E"/></td>
					</tr>
					<tr>
						<td>Tópicos especiais III</td>
						<td><input type="radio" name="49AQ" value="A" required/></td>
						<td><input type="radio" name="49AQ" value="B"/></td>
						<td><input type="radio" name="49AQ" value="C"/></td>
						<td><input type="radio" name="49AQ" value="D"/></td>
						<td><input type="radio" name="49AQ" value="E"/></td>
					</tr>
					<tr>
						<td>Tópicos especiais IV</td>
						<td><input type="radio" name="49AR" value="A" required/></td>
						<td><input type="radio" name="49AR" value="B"/></td>
						<td><input type="radio" name="49AR" value="C"/></td>
						<td><input type="radio" name="49AR" value="D"/></td>
						<td><input type="radio" name="49AR" value="E"/></td>
					</tr>
				</tbody>
			</table>
		</div>

    <div class="buttons">
      <a href="{{ route('companySuperior') }}">
        <input type="button" class="btn" value="Anterior"/>
      </a>
      <input type="submit" class="btn" name="proximo" value="Próximo"/>
    </div> 
	</form>
@endsection