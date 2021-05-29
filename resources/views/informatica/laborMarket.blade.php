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
						<td><input type="radio" name="38A" value="A" required/></td>
						<td><input type="radio" name="38A" value="B"/></td>
						<td><input type="radio" name="38A" value="C"/></td>
						<td><input type="radio" name="38A" value="D"/></td>
						<td><input type="radio" name="38A" value="E"/></td>
						<td><input type="radio" name="38A" value="F"/></td>		
					</tr>
					<tr>
						<td>Trabalho em equipe</td>
						<td><input type="radio" name="38B" value="A" required/></td>
						<td><input type="radio" name="38B" value="B"/></td>
						<td><input type="radio" name="38B" value="C"/></td>
						<td><input type="radio" name="38B" value="D"/></td>
						<td><input type="radio" name="38B" value="E"/></td>
						<td><input type="radio" name="38B" value="F"/></td>	
					</tr>
					<tr>
						<td>Experiência no mercado</td>
						<td><input type="radio" name="38C" value="A" required/></td>
						<td><input type="radio" name="38C" value="B"/></td>
						<td><input type="radio" name="38C" value="C"/></td>
						<td><input type="radio" name="38C" value="D"/></td>
						<td><input type="radio" name="38C" value="E"/></td>
						<td><input type="radio" name="38C" value="F"/></td>		
					</tr>
					<tr>	
						<td>Fluência em línguas</td>
						<td><input type="radio" name="38D" value="A" required/></td>
						<td><input type="radio" name="38D" value="B"/></td>
						<td><input type="radio" name="38D" value="C"/></td>
						<td><input type="radio" name="38D" value="D"/></td>
						<td><input type="radio" name="38D" value="E"/></td>
						<td><input type="radio" name="38D" value="F"/></td>		
					</tr>
					<tr>	
						<td>Disponibilidade para trabalhar horas extras</td>
						<td><input type="radio" name="38E" value="A" required/></td>
						<td><input type="radio" name="38E" value="B"/></td>
						<td><input type="radio" name="38E" value="C"/></td>
						<td><input type="radio" name="38E" value="D"/></td>
						<td><input type="radio" name="38E" value="E"/></td>
						<td><input type="radio" name="38E" value="F"/></td>		
					</tr>				
					<tr>	
						<td>Graduação</td>
						<td><input type="radio" name="38F" value="A" required/></td>
						<td><input type="radio" name="38F" value="B"/></td>
						<td><input type="radio" name="38F" value="C"/></td>
						<td><input type="radio" name="38F" value="D"/></td>
						<td><input type="radio" name="38F" value="E"/></td>
						<td><input type="radio" name="38F" value="F"/></td>	
					</tr>
					<tr>	
						<td>Mestrado / Doutorado / Especialização</td>
						<td><input type="radio" name="38G" value="A" required/></td>
						<td><input type="radio" name="38G" value="B"/></td>
						<td><input type="radio" name="38G" value="C"/></td>
						<td><input type="radio" name="38G" value="D"/></td>
						<td><input type="radio" name="38G" value="E"/></td>
						<td><input type="radio" name="38G" value="F"/></td>	
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
						<td><input type="radio" name="39A" value="A" required/></td>
						<td><input type="radio" name="39A" value="B"/></td>
						<td><input type="radio" name="39A" value="C"/></td>
						<td><input type="radio" name="39A" value="D"/></td>
						<td><input type="radio" name="39A" value="E"/></td>		
					</tr>
					<tr>
						<td>Aprendizado de novas técnicas</td>
						<td><input type="radio" name="39B" value="A" required/></td>
						<td><input type="radio" name="39B" value="B"/></td>
						<td><input type="radio" name="39B" value="C"/></td>
						<td><input type="radio" name="39B" value="D"/></td>
						<td><input type="radio" name="39B" value="E"/></td>	
					</tr>
					<tr>
						<td>Aptidão empreendedora</td>
						<td><input type="radio" name="39C" value="A" required/></td>
						<td><input type="radio" name="39C" value="B"/></td>
						<td><input type="radio" name="39C" value="C"/></td>
						<td><input type="radio" name="39C" value="D"/></td>
						<td><input type="radio" name="39C" value="E"/></td>		
					</tr>
					<tr>	
						<td>Capacidade analítica</td>
						<td><input type="radio" name="39D" value="A" required/></td>
						<td><input type="radio" name="39D" value="B"/></td>
						<td><input type="radio" name="39D" value="C"/></td>
						<td><input type="radio" name="39D" value="D"/></td>
						<td><input type="radio" name="39D" value="E"/></td>		
					</tr>
					<tr>	
						<td>Criatividade</td>
						<td><input type="radio" name="39E" value="A" required/></td>
						<td><input type="radio" name="39E" value="B"/></td>
						<td><input type="radio" name="39E" value="C"/></td>
						<td><input type="radio" name="39E" value="D"/></td>
						<td><input type="radio" name="39E" value="E"/></td>		
					</tr>				
					<tr>	
						<td>Eficiência na produção</td>
						<td><input type="radio" name="39F" value="A" required/></td>
						<td><input type="radio" name="39F" value="B"/></td>
						<td><input type="radio" name="39F" value="C"/></td>
						<td><input type="radio" name="39F" value="D"/></td>
						<td><input type="radio" name="39F" value="E"/></td>	
					</tr>
					<tr>	
						<td>Liderança</td>
						<td><input type="radio" name="39G" value="A" required/></td>
						<td><input type="radio" name="39G" value="B"/></td>
						<td><input type="radio" name="39G" value="C"/></td>
						<td><input type="radio" name="39G" value="D"/></td>
						<td><input type="radio" name="39G" value="E"/></td>	
					</tr>
					<tr>	
						<td>Visão ampla de organização</td>
						<td><input type="radio" name="39H" value="A" required/></td>
						<td><input type="radio" name="39H" value="B"/></td>
						<td><input type="radio" name="39H" value="C"/></td>
						<td><input type="radio" name="39H" value="D"/></td>
						<td><input type="radio" name="39H" value="E"/></td>	
					</tr>
					<tr>	
						<td>Visão de novas tendências</td>
						<td><input type="radio" name="39I" value="A" required/></td>
						<td><input type="radio" name="39I" value="B"/></td>
						<td><input type="radio" name="39I" value="C"/></td>
						<td><input type="radio" name="39I" value="D"/></td>
						<td><input type="radio" name="39I" value="E"/></td>	
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
						<td>Análise e projeto de sistemas</td>	
						<td><input type="radio" name="40A" value="A" required/></td>
						<td><input type="radio" name="40A" value="B"/></td>
						<td><input type="radio" name="40A" value="C"/></td>
						<td><input type="radio" name="40A" value="D"/></td>
						<td><input type="radio" name="40A" value="E"/></td>	
					</tr>
					<tr>
						<td>Banco de dados</td>		
						<td><input type="radio" name="40B" value="A" required/></td>
						<td><input type="radio" name="40B" value="B"/></td>
						<td><input type="radio" name="40B" value="C"/></td>
						<td><input type="radio" name="40B" value="D"/></td>
						<td><input type="radio" name="40B" value="E"/></td>	
					</tr>
					<tr>
						<td>Contabilidade</td>	
						<td><input type="radio" name="40C" value="A" required/></td>
						<td><input type="radio" name="40C" value="B"/></td>
						<td><input type="radio" name="40C" value="C"/></td>
						<td><input type="radio" name="40C" value="D"/></td>
						<td><input type="radio" name="40C" value="E"/></td>
					</tr>
					<tr>
						<td>Estrutura da informação na web</td>	
						<td><input type="radio" name="40D" value="A" required/></td>
						<td><input type="radio" name="40D" value="B"/></td>
						<td><input type="radio" name="40D" value="C"/></td>
						<td><input type="radio" name="40D" value="D"/></td>
						<td><input type="radio" name="40D" value="E"/></td>
					</tr>
					<tr>
						<td>Fundamentos da administração</td>		
						<td><input type="radio" name="40E" value="A" required/></td>
						<td><input type="radio" name="40E" value="B"/></td>
						<td><input type="radio" name="40E" value="C"/></td>
						<td><input type="radio" name="40E" value="D"/></td>
						<td><input type="radio" name="40E" value="E"/></td>	
					</tr>
					<tr>
						<td>Informática básica</td>		
						<td><input type="radio" name="40F" value="A" required/></td>
						<td><input type="radio" name="40F" value="B"/></td>
						<td><input type="radio" name="40F" value="C"/></td>
						<td><input type="radio" name="40F" value="D"/></td>
						<td><input type="radio" name="40F" value="E"/></td>
					</tr>
					<tr>
						<td>Inglês técnico</td>
						<td><input type="radio" name="40G" value="A" required/></td>
						<td><input type="radio" name="40G" value="B"/></td>
						<td><input type="radio" name="40G" value="C"/></td>
						<td><input type="radio" name="40G" value="D"/></td>
						<td><input type="radio" name="40G" value="E"/></td>	
					</tr>
					<tr>
						<td>Introdução a programação</td>		
						<td><input type="radio" name="40H" value="A" required/></td>
						<td><input type="radio" name="40H" value="B"/></td>
						<td><input type="radio" name="40H" value="C"/></td>
						<td><input type="radio" name="40H" value="D"/></td>
						<td><input type="radio" name="40H" value="E"/></td>
					</tr>
					<tr>
						<td>Legislação para informática</td>	
						<td><input type="radio" name="40I" value="A" required/></td>
						<td><input type="radio" name="40I" value="B"/></td>
						<td><input type="radio" name="40I" value="C"/></td>
						<td><input type="radio" name="40I" value="D"/></td>
						<td><input type="radio" name="40I" value="E"/></td>	
					</tr>
					<tr>
						<td>Manutenção de computadores</td>			
						<td><input type="radio" name="40K" value="A" required/></td>
						<td><input type="radio" name="40K" value="B"/></td>
						<td><input type="radio" name="40K" value="C"/></td>
						<td><input type="radio" name="40K" value="D"/></td>
						<td><input type="radio" name="40K" value="E"/></td>	
					</tr>
					<tr>
						<td>Organização de computadores e Sistemas operacionais</td>			
						<td><input type="radio" name="40L" value="A" required/></td>
						<td><input type="radio" name="40L" value="B"/></td>
						<td><input type="radio" name="40L" value="C"/></td>
						<td><input type="radio" name="40L" value="D"/></td>
						<td><input type="radio" name="40L" value="E"/></td>		
					</tr>
					<tr>
						<td>Programação</td>			
						<td><input type="radio" name="40M" value="A" required/></td>
						<td><input type="radio" name="40M" value="B"/></td>
						<td><input type="radio" name="40M" value="C"/></td>
						<td><input type="radio" name="40M" value="D"/></td>
						<td><input type="radio" name="40M" value="E"/></td>	
					</tr>
					<tr>
						<td>Programação web</td>
						<td><input type="radio" name="40N" value="A" required/></td>
						<td><input type="radio" name="40N" value="B"/></td>
						<td><input type="radio" name="40N" value="C"/></td>
						<td><input type="radio" name="40N" value="D"/></td>
						<td><input type="radio" name="40N" value="E"/></td>		
					</tr>
					<tr>
						<td>Projeto</td>
						<td><input type="radio" name="40O" value="A" required/></td>
						<td><input type="radio" name="40O" value="B"/></td>
						<td><input type="radio" name="40O" value="C"/></td>
						<td><input type="radio" name="40O" value="D"/></td>
						<td><input type="radio" name="40O" value="E"/></td>		
					</tr>
					<tr>
						<td>Redação teórica</td>			
						<td><input type="radio" name="40P" value="A" required/></td>
						<td><input type="radio" name="40P" value="B"/></td>
						<td><input type="radio" name="40P" value="C"/></td>
						<td><input type="radio" name="40P" value="D"/></td>
						<td><input type="radio" name="40P" value="E"/></td>	
					</tr>
					<tr>
						<td>Redes de computadores</td>	
						<td><input type="radio" name="40Q" value="A" required/></td>
						<td><input type="radio" name="40Q" value="B"/></td>
						<td><input type="radio" name="40Q" value="C"/></td>
						<td><input type="radio" name="40Q" value="D"/></td>
						<td><input type="radio" name="40Q" value="E"/></td>	
					</tr>
					<tr>
						<td>Tópicos especiais em informática</td>			
						<td><input type="radio" name="40R" value="A" required/></td>
						<td><input type="radio" name="40R" value="B"/></td>
						<td><input type="radio" name="40R" value="C"/></td>
						<td><input type="radio" name="40R" value="D"/></td>
						<td><input type="radio" name="40R" value="E"/></td>	
					</tr>
				</tbody>
			</table>
		</div>

    <div class="buttons">
      <a href="{{ route('companyTecnico') }}">
        <input type="button" class="btn" value="Anterior"/>
      </a>
      <input type="submit" class="btn" name="proximo" value="Próximo"/>
    </div> 
	</form>
@endsection