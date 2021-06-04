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
						<td><input type="radio" name="perg47_10" value="117" required/></td>
						<td><input type="radio" name="perg47_10" value="118"/></td>
						<td><input type="radio" name="perg47_10" value="119"/></td>
						<td><input type="radio" name="perg47_10" value="126"/></td>
						<td><input type="radio" name="perg47_10" value="127"/></td>
						<td><input type="radio" name="perg47_10" value="200"/></td>		
					</tr>
					<tr>
						<td>Trabalho em equipe</td>
						<td><input type="radio" name="perg47_11" value="117" required/></td>
						<td><input type="radio" name="perg47_11" value="118"/></td>
						<td><input type="radio" name="perg47_11" value="119"/></td>
						<td><input type="radio" name="perg47_11" value="126"/></td>
						<td><input type="radio" name="perg47_11" value="127"/></td>
						<td><input type="radio" name="perg47_11" value="200"/></td>	
					</tr>
					<tr>
						<td>Experiência no mercado</td>
						<td><input type="radio" name="perg47_12" value="117" required/></td>
						<td><input type="radio" name="perg47_12" value="118"/></td>
						<td><input type="radio" name="perg47_12" value="119"/></td>
						<td><input type="radio" name="perg47_12" value="126"/></td>
						<td><input type="radio" name="perg47_12" value="127"/></td>
						<td><input type="radio" name="perg47_12" value="200"/></td>			
					</tr>
					<tr>	
						<td>Fluência em línguas</td>
						<td><input type="radio" name="perg47_13" value="117" required/></td>
						<td><input type="radio" name="perg47_13" value="118"/></td>
						<td><input type="radio" name="perg47_13" value="119"/></td>
						<td><input type="radio" name="perg47_13" value="126"/></td>
						<td><input type="radio" name="perg47_13" value="127"/></td>
						<td><input type="radio" name="perg47_13" value="200"/></td>		
					</tr>
					<tr>	
						<td>Disponibilidade para trabalhar horas extras</td>
						<td><input type="radio" name="perg47_14" value="117" required/></td>
						<td><input type="radio" name="perg47_14" value="118"/></td>
						<td><input type="radio" name="perg47_14" value="119"/></td>
						<td><input type="radio" name="perg47_14" value="126"/></td>
						<td><input type="radio" name="perg47_14" value="127"/></td>
						<td><input type="radio" name="perg47_14" value="200"/></td>		
					</tr>				
					<tr>	
						<td>Graduação</td>
						<td><input type="radio" name="perg47_139" value="117" required/></td>
						<td><input type="radio" name="perg47_139" value="118"/></td>
						<td><input type="radio" name="perg47_139" value="119"/></td>
						<td><input type="radio" name="perg47_139" value="126"/></td>
						<td><input type="radio" name="perg47_139" value="127"/></td>
						<td><input type="radio" name="perg47_139" value="200"/></td>	
					</tr>
					<tr>	
						<td>Mestrado / Doutorado / Especialização</td>
						<td><input type="radio" name="perg47_15" value="117" required/></td>
						<td><input type="radio" name="perg47_15" value="118"/></td>
						<td><input type="radio" name="perg47_15" value="119"/></td>
						<td><input type="radio" name="perg47_15" value="126"/></td>
						<td><input type="radio" name="perg47_15" value="127"/></td>
						<td><input type="radio" name="perg47_15" value="200"/></td>	
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
						<td><input type="radio" name="perg48_16" value="117" required/></td>
						<td><input type="radio" name="perg48_16" value="118"/></td>
						<td><input type="radio" name="perg48_16" value="119"/></td>
						<td><input type="radio" name="perg48_16" value="126"/></td>
						<td><input type="radio" name="perg48_16" value="127"/></td>	
					</tr>
					<tr>
						<td>Aprendizado de novas técnicas</td>
						<td><input type="radio" name="perg48_17" value="117" required/></td>
						<td><input type="radio" name="perg48_17" value="118"/></td>
						<td><input type="radio" name="perg48_17" value="119"/></td>
						<td><input type="radio" name="perg48_17" value="126"/></td>
						<td><input type="radio" name="perg48_17" value="127"/></td>
					</tr>
					<tr>
						<td>Aptidão empreendedora</td>
						<td><input type="radio" name="perg48_18" value="117" required/></td>
						<td><input type="radio" name="perg48_18" value="118"/></td>
						<td><input type="radio" name="perg48_18" value="119"/></td>
						<td><input type="radio" name="perg48_18" value="126"/></td>
						<td><input type="radio" name="perg48_18" value="127"/></td>	
					</tr>
					<tr>	
						<td>Capacidade analítica</td>
						<td><input type="radio" name="perg48_19" value="117" required/></td>
						<td><input type="radio" name="perg48_19" value="118"/></td>
						<td><input type="radio" name="perg48_19" value="119"/></td>
						<td><input type="radio" name="perg48_19" value="126"/></td>
						<td><input type="radio" name="perg48_19" value="127"/></td>	
					</tr>
					<tr>	
						<td>Criatividade</td>
						<td><input type="radio" name="perg48_20" value="117" required/></td>
						<td><input type="radio" name="perg48_20" value="118"/></td>
						<td><input type="radio" name="perg48_20" value="119"/></td>
						<td><input type="radio" name="perg48_20" value="126"/></td>
						<td><input type="radio" name="perg48_20" value="127"/></td>	
					</tr>				
					<tr>	
						<td>Eficiência na produção</td>
						<td><input type="radio" name="perg48_21" value="117" required/></td>
						<td><input type="radio" name="perg48_21" value="118"/></td>
						<td><input type="radio" name="perg48_21" value="119"/></td>
						<td><input type="radio" name="perg48_21" value="126"/></td>
						<td><input type="radio" name="perg48_21" value="127"/></td>	
					</tr>
					<tr>	
						<td>Liderança</td>
						<td><input type="radio" name="perg48_22" value="117" required/></td>
						<td><input type="radio" name="perg48_22" value="118"/></td>
						<td><input type="radio" name="perg48_22" value="119"/></td>
						<td><input type="radio" name="perg48_22" value="126"/></td>
						<td><input type="radio" name="perg48_22" value="127"/></td>
					</tr>
					<tr>	
						<td>Visão ampla de organização</td>
						<td><input type="radio" name="perg48_23" value="117" required/></td>
						<td><input type="radio" name="perg48_23" value="118"/></td>
						<td><input type="radio" name="perg48_23" value="119"/></td>
						<td><input type="radio" name="perg48_23" value="126"/></td>
						<td><input type="radio" name="perg48_23" value="127"/></td>
					</tr>
					<tr>	
						<td>Visão de novas tendências</td>
						<td><input type="radio" name="perg48_24" value="117" required/></td>
						<td><input type="radio" name="perg48_24" value="118"/></td>
						<td><input type="radio" name="perg48_24" value="119"/></td>
						<td><input type="radio" name="perg48_24" value="126"/></td>
						<td><input type="radio" name="perg48_24" value="127"/></td>
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
						<td><input type="radio" name="perg49_26" value="195" required/></td>
						<td><input type="radio" name="perg49_26" value="196"/></td>
						<td><input type="radio" name="perg49_26" value="197"/></td>
						<td><input type="radio" name="perg49_26" value="198"/></td>
						<td><input type="radio" name="perg49_26" value="199"/></td>
					</tr>
					<tr>
						<td>Banco de dados</td>		
						<td><input type="radio" name="perg49_28" value="195" required/></td>
						<td><input type="radio" name="perg49_28" value="196"/></td>
						<td><input type="radio" name="perg49_28" value="197"/></td>
						<td><input type="radio" name="perg49_28" value="198"/></td>
						<td><input type="radio" name="perg49_28" value="199"/></td>
					</tr>
					<tr>
						<td>Contabilidade</td>	
						<td><input type="radio" name="perg49_32" value="195" required/></td>
						<td><input type="radio" name="perg49_32" value="196"/></td>
						<td><input type="radio" name="perg49_32" value="197"/></td>
						<td><input type="radio" name="perg49_32" value="198"/></td>
						<td><input type="radio" name="perg49_32" value="199"/></td>
					</tr>
					<tr>
						<td>Estrutura da informação na web</td>	
						<td><input type="radio" name="perg49_36" value="195" required/></td>
						<td><input type="radio" name="perg49_36" value="196"/></td>
						<td><input type="radio" name="perg49_36" value="197"/></td>
						<td><input type="radio" name="perg49_36" value="198"/></td>
						<td><input type="radio" name="perg49_36" value="199"/></td>
					</tr>
					<tr>
						<td>Fundamentos da administração</td>		
						<td><input type="radio" name="perg49_38" value="195" required/></td>
						<td><input type="radio" name="perg49_38" value="196"/></td>
						<td><input type="radio" name="perg49_38" value="197"/></td>
						<td><input type="radio" name="perg49_38" value="198"/></td>
						<td><input type="radio" name="perg49_38" value="199"/></td>	
					</tr>
					<tr>
						<td>Informática básica</td>		
						<td><input type="radio" name="perg49_46" value="195" required/></td>
						<td><input type="radio" name="perg49_46" value="196"/></td>
						<td><input type="radio" name="perg49_46" value="197"/></td>
						<td><input type="radio" name="perg49_46" value="198"/></td>
						<td><input type="radio" name="perg49_46" value="199"/></td>
					</tr>
					<tr>
						<td>Inglês técnico</td>
						<td><input type="radio" name="perg49_47" value="195" required/></td>
						<td><input type="radio" name="perg49_47" value="196"/></td>
						<td><input type="radio" name="perg49_47" value="197"/></td>
						<td><input type="radio" name="perg49_47" value="198"/></td>
						<td><input type="radio" name="perg49_47" value="199"/></td>
					</tr>
					<tr>
						<td>Introdução a programação</td>		
						<td><input type="radio" name="perg49_49" value="195" required/></td>
						<td><input type="radio" name="perg49_49" value="196"/></td>
						<td><input type="radio" name="perg49_49" value="197"/></td>
						<td><input type="radio" name="perg49_49" value="198"/></td>
						<td><input type="radio" name="perg49_49" value="199"/></td>
					</tr>
					<tr>
						<td>Legislação para informática</td>	
						<td><input type="radio" name="perg49_51" value="195" required/></td>
						<td><input type="radio" name="perg49_51" value="196"/></td>
						<td><input type="radio" name="perg49_51" value="197"/></td>
						<td><input type="radio" name="perg49_51" value="198"/></td>
						<td><input type="radio" name="perg49_51" value="199"/></td>
					</tr>
					<tr>
						<td>Manutenção de computadores</td>			
						<td><input type="radio" name="perg49_55" value="195" required/></td>
						<td><input type="radio" name="perg49_55" value="196"/></td>
						<td><input type="radio" name="perg49_55" value="197"/></td>
						<td><input type="radio" name="perg49_55" value="198"/></td>
						<td><input type="radio" name="perg49_55" value="199"/></td>
					</tr>
					<tr>
						<td>Organização de computadores e sistemas operacionais</td>			
						<td><input type="radio" name="perg49_61" value="195" required/></td>
						<td><input type="radio" name="perg49_61" value="196"/></td>
						<td><input type="radio" name="perg49_61" value="197"/></td>
						<td><input type="radio" name="perg49_61" value="198"/></td>
						<td><input type="radio" name="perg49_61" value="199"/></td>		
					</tr>
					<tr>
						<td>Programação</td>			
						<td><input type="radio" name="perg49_65" value="195" required/></td>
						<td><input type="radio" name="perg49_65" value="196"/></td>
						<td><input type="radio" name="perg49_65" value="197"/></td>
						<td><input type="radio" name="perg49_65" value="198"/></td>
						<td><input type="radio" name="perg49_65" value="199"/></td>
					</tr>
					<tr>
						<td>Programação web</td>
						<td><input type="radio" name="perg49_67" value="195" required/></td>
						<td><input type="radio" name="perg49_67" value="196"/></td>
						<td><input type="radio" name="perg49_67" value="197"/></td>
						<td><input type="radio" name="perg49_67" value="198"/></td>
						<td><input type="radio" name="perg49_67" value="199"/></td>		
					</tr>
					<tr>
						<td>Projeto</td>
						<td><input type="radio" name="perg49_68" value="195" required/></td>
						<td><input type="radio" name="perg49_68" value="196"/></td>
						<td><input type="radio" name="perg49_68" value="197"/></td>
						<td><input type="radio" name="perg49_68" value="198"/></td>
						<td><input type="radio" name="perg49_68" value="199"/></td>	
					</tr>
					<tr>
						<td>Redação teórica</td>			
						<td><input type="radio" name="perg49_72" value="195" required/></td>
						<td><input type="radio" name="perg49_72" value="196"/></td>
						<td><input type="radio" name="perg49_72" value="197"/></td>
						<td><input type="radio" name="perg49_72" value="198"/></td>
						<td><input type="radio" name="perg49_72" value="199"/></td>
					</tr>
					<tr>
						<td>Redes de computadores</td>	
						<td><input type="radio" name="perg49_73" value="195" required/></td>
						<td><input type="radio" name="perg49_73" value="196"/></td>
						<td><input type="radio" name="perg49_73" value="197"/></td>
						<td><input type="radio" name="perg49_73" value="198"/></td>
						<td><input type="radio" name="perg49_73" value="199"/></td>	
					</tr>
					<tr>
						<td>Tópicos especiais em informática</td>			
						<td><input type="radio" name="perg49_82" value="195" required/></td>
						<td><input type="radio" name="perg49_82" value="196"/></td>
						<td><input type="radio" name="perg49_82" value="197"/></td>
						<td><input type="radio" name="perg49_82" value="198"/></td>
						<td><input type="radio" name="perg49_82" value="199"/></td>	
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