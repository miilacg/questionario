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
						<td>Algoritmo e estrutura de dados</td>	
						<td><input type="radio" name="perg49_25" value="195" required/></td>
						<td><input type="radio" name="perg49_25" value="196"/></td>
						<td><input type="radio" name="perg49_25" value="197"/></td>
						<td><input type="radio" name="perg49_25" value="198"/></td>
						<td><input type="radio" name="perg49_25" value="199"/></td>	
					</tr>
					<tr>
						<td>Arquitetura de software</td>		
						<td><input type="radio" name="perg49_27" value="195" required/></td>
						<td><input type="radio" name="perg49_27" value="196"/></td>
						<td><input type="radio" name="perg49_27" value="197"/></td>
						<td><input type="radio" name="perg49_27" value="198"/></td>
						<td><input type="radio" name="perg49_27" value="199"/></td>	
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
						<td>Cálculo diferencial e integral</td>	
						<td><input type="radio" name="perg49_29" value="195" required/></td>
						<td><input type="radio" name="perg49_29" value="196"/></td>
						<td><input type="radio" name="perg49_29" value="197"/></td>
						<td><input type="radio" name="perg49_29" value="198"/></td>
						<td><input type="radio" name="perg49_29" value="199"/></td>	
					</tr>
					<tr>
						<td>Compiladores</td>		
						<td><input type="radio" name="perg49_30" value="195" required/></td>
						<td><input type="radio" name="perg49_30" value="196"/></td>
						<td><input type="radio" name="perg49_30" value="197"/></td>
						<td><input type="radio" name="perg49_30" value="198"/></td>
						<td><input type="radio" name="perg49_30" value="199"/></td>		
					</tr>
					<tr>
						<td>Computador e sociedade</td>		
						<td><input type="radio" name="perg49_31" value="195" required/></td>
						<td><input type="radio" name="perg49_31" value="196"/></td>
						<td><input type="radio" name="perg49_31" value="197"/></td>
						<td><input type="radio" name="perg49_31" value="198"/></td>
						<td><input type="radio" name="perg49_31" value="199"/></td>	
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
						<td>Economia</td>		
						<td><input type="radio" name="perg49_33" value="195" required/></td>
						<td><input type="radio" name="perg49_33" value="196"/></td>
						<td><input type="radio" name="perg49_33" value="197"/></td>
						<td><input type="radio" name="perg49_33" value="198"/></td>
						<td><input type="radio" name="perg49_33" value="199"/></td>	
					</tr>
					<tr>
						<td>Empreendedorismo e inovação</td>	
						<td><input type="radio" name="perg49_34" value="195" required/></td>
						<td><input type="radio" name="perg49_34" value="196"/></td>
						<td><input type="radio" name="perg49_34" value="197"/></td>
						<td><input type="radio" name="perg49_34" value="198"/></td>
						<td><input type="radio" name="perg49_34" value="199"/></td>	
					</tr>
					<tr>
						<td>Engenharia de software</td>			
						<td><input type="radio" name="perg49_35" value="195" required/></td>
						<td><input type="radio" name="perg49_35" value="196"/></td>
						<td><input type="radio" name="perg49_35" value="197"/></td>
						<td><input type="radio" name="perg49_35" value="198"/></td>
						<td><input type="radio" name="perg49_35" value="199"/></td>
					</tr>
					<tr>
						<td>Fisica</td>			
						<td><input type="radio" name="perg49_37" value="195" required/></td>
						<td><input type="radio" name="perg49_37" value="196"/></td>
						<td><input type="radio" name="perg49_37" value="197"/></td>
						<td><input type="radio" name="perg49_37" value="198"/></td>
						<td><input type="radio" name="perg49_37" value="199"/></td>		
					</tr>
					<tr>
						<td>Fundamentos da teoria da computação</td>			
						<td><input type="radio" name="perg49_39" value="195" required/></td>
						<td><input type="radio" name="perg49_39" value="196"/></td>
						<td><input type="radio" name="perg49_39" value="197"/></td>
						<td><input type="radio" name="perg49_39" value="198"/></td>
						<td><input type="radio" name="perg49_39" value="199"/></td>	
					</tr>
					<tr>
						<td>Geometria analitica e algebra linear</td>
						<td><input type="radio" name="perg49_40" value="195" required/></td>
						<td><input type="radio" name="perg49_40" value="196"/></td>
						<td><input type="radio" name="perg49_40" value="197"/></td>
						<td><input type="radio" name="perg49_40" value="198"/></td>
						<td><input type="radio" name="perg49_40" value="199"/></td>		
					</tr>
					<tr>
						<td>Gestão ambiental</td>
						<td><input type="radio" name="perg49_41" value="195" required/></td>
						<td><input type="radio" name="perg49_41" value="196"/></td>
						<td><input type="radio" name="perg49_41" value="197"/></td>
						<td><input type="radio" name="perg49_41" value="198"/></td>
						<td><input type="radio" name="perg49_41" value="199"/></td>		
					</tr>
					<tr>
						<td>Gestão da diversidade nas organizações</td>			
						<td><input type="radio" name="perg49_42" value="195" required/></td>
						<td><input type="radio" name="perg49_42" value="196"/></td>
						<td><input type="radio" name="perg49_42" value="197"/></td>
						<td><input type="radio" name="perg49_42" value="198"/></td>
						<td><input type="radio" name="perg49_42" value="199"/></td>	
					</tr>
					<tr>
						<td>Gestão de projetos</td>	
						<td><input type="radio" name="perg49_44" value="195" required/></td>
						<td><input type="radio" name="perg49_44" value="196"/></td>
						<td><input type="radio" name="perg49_44" value="197"/></td>
						<td><input type="radio" name="perg49_44" value="198"/></td>
						<td><input type="radio" name="perg49_44" value="199"/></td>	
					</tr>
					<tr>
						<td>Gestão, recuperação e análise de informações (Topicos II)</td>			
						<td><input type="radio" name="perg49_43" value="195" required/></td>
						<td><input type="radio" name="perg49_43" value="196"/></td>
						<td><input type="radio" name="perg49_43" value="197"/></td>
						<td><input type="radio" name="perg49_43" value="198"/></td>
						<td><input type="radio" name="perg49_43" value="199"/></td>	
					</tr>
					<tr>
						<td>Inglês</td>			
						<td><input type="radio" name="perg49_1" value="195" required/></td>
						<td><input type="radio" name="perg49_1" value="196"/></td>
						<td><input type="radio" name="perg49_1" value="197"/></td>
						<td><input type="radio" name="perg49_1" value="198"/></td>
						<td><input type="radio" name="perg49_1" value="199"/></td>
					</tr>
					<tr>
						<td>Iniciação a estatística</td>		
						<td><input type="radio" name="perg49_45" value="195" required/></td>
						<td><input type="radio" name="perg49_45" value="196"/></td>
						<td><input type="radio" name="perg49_45" value="197"/></td>
						<td><input type="radio" name="perg49_45" value="198"/></td>
						<td><input type="radio" name="perg49_45" value="199"/></td>	
					</tr>
					<tr>
						<td>Introdução à ciência dos dados (Tópicos I)</td>
						<td><input type="radio" name="perg49_48" value="195" required/></td>
						<td><input type="radio" name="perg49_48" value="196"/></td>
						<td><input type="radio" name="perg49_48" value="197"/></td>
						<td><input type="radio" name="perg49_48" value="198"/></td>
						<td><input type="radio" name="perg49_48" value="199"/></td>
					</tr>
					<tr>
						<td>Introdução aos sistemas lógicos e digitais</td>			
						<td><input type="radio" name="perg49_50" value="195" required/></td>
						<td><input type="radio" name="perg49_50" value="196"/></td>
						<td><input type="radio" name="perg49_50" value="197"/></td>
						<td><input type="radio" name="perg49_50" value="198"/></td>
						<td><input type="radio" name="perg49_50" value="199"/></td>
					</tr>
					<tr>
						<td>Libras</td>			
						<td><input type="radio" name="perg49_53" value="195" required/></td>
						<td><input type="radio" name="perg49_53" value="196"/></td>
						<td><input type="radio" name="perg49_53" value="197"/></td>
						<td><input type="radio" name="perg49_53" value="198"/></td>
						<td><input type="radio" name="perg49_53" value="199"/></td>		
					</tr>
					<tr>
						<td>Linguagem de programação</td>		
						<td><input type="radio" name="perg49_54" value="195" required/></td>
						<td><input type="radio" name="perg49_54" value="196"/></td>
						<td><input type="radio" name="perg49_54" value="197"/></td>
						<td><input type="radio" name="perg49_54" value="198"/></td>
						<td><input type="radio" name="perg49_54" value="199"/></td>	
					</tr>					
					<tr>
						<td>Matemática discreta</td>	
						<td><input type="radio" name="perg49_56" value="195" required/></td>
						<td><input type="radio" name="perg49_56" value="196"/></td>
						<td><input type="radio" name="perg49_56" value="197"/></td>
						<td><input type="radio" name="perg49_56" value="198"/></td>
						<td><input type="radio" name="perg49_56" value="199"/></td>
					</tr>
					<tr>
						<td>Matemática financeira</td>			
						<td><input type="radio" name="perg49_57" value="195" required/></td>
						<td><input type="radio" name="perg49_57" value="196"/></td>
						<td><input type="radio" name="perg49_57" value="197"/></td>
						<td><input type="radio" name="perg49_57" value="198"/></td>
						<td><input type="radio" name="perg49_57" value="199"/></td>	
					</tr>
					<tr>
						<td>Meta-heurística</td>		
						<td><input type="radio" name="perg49_58" value="195" required/></td>
						<td><input type="radio" name="perg49_58" value="196"/></td>
						<td><input type="radio" name="perg49_58" value="197"/></td>
						<td><input type="radio" name="perg49_58" value="198"/></td>
						<td><input type="radio" name="perg49_58" value="199"/></td>
					</tr>
					<tr>
						<td>O ser e as organizações</td>		
						<td><input type="radio" name="perg49_59" value="195" required/></td>
						<td><input type="radio" name="perg49_59" value="196"/></td>
						<td><input type="radio" name="perg49_59" value="197"/></td>
						<td><input type="radio" name="perg49_59" value="198"/></td>
						<td><input type="radio" name="perg49_59" value="199"/></td>	
					</tr>
					<tr>
						<td>Organização de computadores</td>
						<td><input type="radio" name="perg49_60" value="195" required/></td>
						<td><input type="radio" name="perg49_60" value="196"/></td>
						<td><input type="radio" name="perg49_60" value="197"/></td>
						<td><input type="radio" name="perg49_60" value="198"/></td>
						<td><input type="radio" name="perg49_60" value="199"/></td>	
					</tr>
					<tr>
						<td>Pesquisa operacional</td>
						<td><input type="radio" name="perg49_62" value="195" required/></td>
						<td><input type="radio" name="perg49_62" value="196"/></td>
						<td><input type="radio" name="perg49_62" value="197"/></td>
						<td><input type="radio" name="perg49_62" value="198"/></td>
						<td><input type="radio" name="perg49_62" value="199"/></td>	
					</tr>
					<tr>
						<td>Português instrumental</td>
						<td><input type="radio" name="perg49_63" value="195" required/></td>
						<td><input type="radio" name="perg49_63" value="196"/></td>
						<td><input type="radio" name="perg49_63" value="197"/></td>
						<td><input type="radio" name="perg49_63" value="198"/></td>
						<td><input type="radio" name="perg49_63" value="199"/></td>	
					</tr>
					<tr>
						<td>Processamento digital de imagens</td>
						<td><input type="radio" name="perg49_64" value="195" required/></td>
						<td><input type="radio" name="perg49_64" value="196"/></td>
						<td><input type="radio" name="perg49_64" value="197"/></td>
						<td><input type="radio" name="perg49_64" value="198"/></td>
						<td><input type="radio" name="perg49_64" value="199"/></td>
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
						<td>Programação orientada a objeto</td>
						<td><input type="radio" name="perg49_66" value="195" required/></td>
						<td><input type="radio" name="perg49_66" value="196"/></td>
						<td><input type="radio" name="perg49_66" value="197"/></td>
						<td><input type="radio" name="perg49_66" value="198"/></td>
						<td><input type="radio" name="perg49_66" value="199"/></td>
					</tr>
					<tr>
						<td>Projeto de sistemas para web</td>
						<td><input type="radio" name="perg49_69" value="195" required/></td>
						<td><input type="radio" name="perg49_69" value="196"/></td>
						<td><input type="radio" name="perg49_69" value="197"/></td>
						<td><input type="radio" name="perg49_69" value="198"/></td>
						<td><input type="radio" name="perg49_69" value="199"/></td>
					</tr>
					<tr>
						<td>Projeto e análise de algoritmos</td>
						<td><input type="radio" name="perg49_71" value="195" required/></td>
						<td><input type="radio" name="perg49_71" value="196"/></td>
						<td><input type="radio" name="perg49_71" value="197"/></td>
						<td><input type="radio" name="perg49_71" value="198"/></td>
						<td><input type="radio" name="perg49_71" value="199"/></td>
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
						<td>Sistemas distribuídos e paralelos</td>
						<td><input type="radio" name="perg49_74" value="195" required/></td>
						<td><input type="radio" name="perg49_74" value="196"/></td>
						<td><input type="radio" name="perg49_74" value="197"/></td>
						<td><input type="radio" name="perg49_74" value="198"/></td>
						<td><input type="radio" name="perg49_74" value="199"/></td>
					</tr>
					<tr>
						<td>Sistemas embarcados</td>
						<td><input type="radio" name="perg49_75" value="195" required/></td>
						<td><input type="radio" name="perg49_75" value="196"/></td>
						<td><input type="radio" name="perg49_75" value="197"/></td>
						<td><input type="radio" name="perg49_75" value="198"/></td>
						<td><input type="radio" name="perg49_75" value="199"/></td>
					</tr>
					<tr>
						<td>Sistemas operacionais</td>
						<td><input type="radio" name="perg49_76" value="195" required/></td>
						<td><input type="radio" name="perg49_76" value="196"/></td>
						<td><input type="radio" name="perg49_76" value="197"/></td>
						<td><input type="radio" name="perg49_76" value="198"/></td>
						<td><input type="radio" name="perg49_76" value="199"/></td>
					</tr>
					<tr>
						<td>Teoria e modelo de grafos</td>
						<td><input type="radio" name="perg49_77" value="195" required/></td>
						<td><input type="radio" name="perg49_77" value="196"/></td>
						<td><input type="radio" name="perg49_77" value="197"/></td>
						<td><input type="radio" name="perg49_77" value="198"/></td>
						<td><input type="radio" name="perg49_77" value="199"/></td>
					</tr>
					<tr>
						<td>Teoria geral da administração</td>
						<td><input type="radio" name="perg49_78" value="195" required/></td>
						<td><input type="radio" name="perg49_78" value="196"/></td>
						<td><input type="radio" name="perg49_78" value="197"/></td>
						<td><input type="radio" name="perg49_78" value="198"/></td>
						<td><input type="radio" name="perg49_78" value="199"/></td>
					</tr>
					<tr>
						<td>Tópicos especiais III</td>
						<td><input type="radio" name="perg49_79" value="195" required/></td>
						<td><input type="radio" name="perg49_79" value="196"/></td>
						<td><input type="radio" name="perg49_79" value="197"/></td>
						<td><input type="radio" name="perg49_79" value="198"/></td>
						<td><input type="radio" name="perg49_79" value="199"/></td>
					</tr>
					<tr>
						<td>Tópicos especiais IV</td>
						<td><input type="radio" name="perg49_80" value="195" required/></td>
						<td><input type="radio" name="perg49_80" value="196"/></td>
						<td><input type="radio" name="perg49_80" value="197"/></td>
						<td><input type="radio" name="perg49_80" value="198"/></td>
						<td><input type="radio" name="perg49_80" value="199"/></td>
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