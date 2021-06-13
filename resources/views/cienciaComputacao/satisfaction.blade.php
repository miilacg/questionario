@extends('layoutAssay')

@section('title', 'Satisfação')
@section('value', '87.5%')

@section('content')
  <form method="POST" action="#">
    {{ csrf_field() }}

    <div class="form-group"> 
			<label>Classifique as opções abaixo de acordo com o grau de influência dela na sua escolha em cursar o Bacharel em Ciência da Computação</label>
			<label class="subtitle">(Utilize o lado mais a esquerda para pouca influência na escolha e o mais a direita para muita influência)</label>
			<div class="slider-wrapper" id="q58">
				Curso fácil de entrar<br>
				<input type="range" list="tickmarks" name="perg58_125" min="1" max="5"/> 
				<datalist id="tickmarks">
					<option value="117">
					<option value="118">
					<option value="119">
					<option value="126">
					<option value="127">
				</datalist><br>
              
				Curso fácil de fazer<br>
				<input type="range" list="tickmarks" name="perg58_126" min="1" max="5"/> 
				<datalist id="tickmarks">
					<option value="117">
          <option value="118">
          <option value="119">
          <option value="126">
          <option value="127">
				</datalist><br>
                    
				Falta de outra opção<br>
				<input type="range" list="tickmarks" name="perg58_140" min="1" max="5"/> 
				<datalist id="tickmarks">
					<option value="117">
          <option value="118">
          <option value="119">
          <option value="126">
          <option value="127">
				</datalist><br>		 

				Interesse na área<br>
				<input type="range" list="tickmarks" name="perg58_127" min="1" max="5"/> 
				<datalist id="tickmarks">
					<option value="117">
          <option value="118">
          <option value="119">
          <option value="126">
          <option value="127">
				</datalist><br>
                    
				Mercado de trabalho<br>
				<input type="range" list="tickmarks" name="perg58_128" min="1" max="5"/> 
				<datalist id="tickmarks">
					<option value="117">
          <option value="118">
          <option value="119">
          <option value="126">
          <option value="127">
				</datalist><br>
                    
				Outras<br>
				<input type="range" list="tickmarks" name="perg58_9" min="1" max="5"/>
				<datalist id="tickmarks">
					<option value="117">
          <option value="118">
          <option value="119">
          <option value="126">
          <option value="127">
				</datalist><br>
			</div>
    </div>

    <div class="form-group"> 
			<label>Classifique as opções abaixo de acordo com o grau de influência dela na sua Universidade Federal de Viçosa - Campus Florestal</label>
			<label class="subtitle">(Utilize o lado mais a esquerda para pouca influência na escolha e o mais a direita para muita influência)</label>
			<div class="slider-wrapper" id="q59">
				Infraestrutura<br>
				<input type="range" list="tickmarks" name="perg59_130" min="1" max="5"/> 
				<datalist id="tickmarks">
					<option value="117">
          <option value="118">
          <option value="119">
          <option value="126">
          <option value="127">
				</datalist><br>
				
				Custo de vida<br>
				<input type="range" list="tickmarks" name="perg59_129" min="1" max="5"/> 
				<datalist id="tickmarks">
					<option value="117">
          <option value="118">
          <option value="119">
          <option value="126">
          <option value="127">
				</datalist><br>
                
				Localidade<br>
				<input type="range" list="tickmarks" name="perg59_131" min="1" max="5"/> 		
				<datalist id="tickmarks">
					<option value="117">
          <option value="118">
          <option value="119">
          <option value="126">
          <option value="127">
				</datalist><br>
					
				Menor nota para entrar<br>
				<input type="range" list="tickmarks" name="perg59_132" min="1" max="5"/> 
				<datalist id="tickmarks">
					<option value="117">
          <option value="118">
          <option value="119">
          <option value="126">
          <option value="127">
				</datalist><br>
					
				Possibilidade de bolsa<br>
				<input type="range" list="tickmarks" name="perg59_133" min="1" max="5"/> 
				<datalist id="tickmarks">
					<option value="117">
          <option value="118">
          <option value="119">
          <option value="126">
          <option value="127">
				</datalist><br>
                
				Outras<br>
				<input type="range" list="tickmarks" name="perg59_9" min="1" max="5"/>
				<datalist id="tickmarks">
					<option value="117">
          <option value="118">
          <option value="119">
          <option value="126">
          <option value="127">
				</datalist><br>
			</div> 
    </div>

		<div class="form-group">
			<label>Como foi atendida suas expectativas do curso em relação à formação profissional?</label>
			<div class="form-check">
				<input class="form-check-input" type="radio" name="perg60" value="208" required/>Péssima<br>
				<input class="form-check-input" type="radio" name="perg60" value="209"/>Ruim<br>
				<input class="form-check-input" type="radio" name="perg60" value="210"/>Regular<br>
				<input class="form-check-input" type="radio" name="perg60" value="211"/>Bom<br>
				<input class="form-check-input" type="radio" name="perg60" value="212"/>Ótimo
			</div>   
		</div>                     

		<div class="form-group">
			<label>As disciplinas específicas foram adequadas para o bom desempenho da atividade profissional?</label>
			<div class="form-check">
				<input class="form-check-input" type="radio" name="perg61" value="213" required/>Um pouco<br>
				<input class="form-check-input" type="radio" name="perg61" value="214"/>Muito<br>
				<input class="form-check-input" type="radio" name="perg61" value="98"/>Não
			</div>      
		</div>                  

		<div class="form-group">
			<label>Como você classifica os itens abaixo?</label>
			<table class="table">
				<thead class="thead-light">
					<tr>
						<th scope="col">#</th>
						<th scope="col">Péssimo</th>
						<th scope="col">Ruim</th>
						<th scope="col">Indiferente</th>
						<th scope="col">Bom</th>
						<th scope="col">Ótimo</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>Aulas</td>			
						<td><input type="radio" name="perg62_134" value="215" required/></td>
						<td><input type="radio" name="perg62_134" value="209"/></td>
						<td><input type="radio" name="perg62_134" value="99"/></td>
						<td><input type="radio" name="perg62_134" value="211"/></td>
						<td><input type="radio" name="perg62_134" value="212"/></td>	
					</tr>
					<tr>
						<td>Laboratórios</td>			
						<td><input type="radio" name="perg62_136" value="215" required/></td>
						<td><input type="radio" name="perg62_136" value="209"/></td>
						<td><input type="radio" name="perg62_136" value="99"/></td>
						<td><input type="radio" name="perg62_136" value="211"/></td>
						<td><input type="radio" name="perg62_136" value="212"/></td>
					</tr>
					<tr>
						<td>Biblioteca</td>			
						<td><input type="radio" name="perg62_135" value="215" required/></td>
						<td><input type="radio" name="perg62_135" value="209"/></td>
						<td><input type="radio" name="perg62_135" value="99"/></td>
						<td><input type="radio" name="perg62_135" value="211"/></td>
						<td><input type="radio" name="perg62_135" value="212"/></td>
					</tr>
					<tr>
						<td>Salas de aula</td>			
						<td><input type="radio" name="perg62_137" value="215" required/></td>
						<td><input type="radio" name="perg62_137" value="209"/></td>
						<td><input type="radio" name="perg62_137" value="99"/></td>
						<td><input type="radio" name="perg62_137" value="211"/></td>
						<td><input type="radio" name="perg62_137" value="212"/></td>	
					</tr>
					<tr>
						<td>Outras dependências</td>			
						<td><input type="radio" name="perg62_138" value="215" required/></td>
						<td><input type="radio" name="perg62_138" value="209"/></td>
						<td><input type="radio" name="perg62_138" value="99"/></td>
						<td><input type="radio" name="perg62_138" value="211"/></td>
						<td><input type="radio" name="perg62_138" value="212"/></td>
					</tr>
				</tbody>
			</table>
		</div>

		<div class="form-group">		
			<label>Como você avalia a importância dessa pesquisa?</label>
			<div class="form-check">
				<input class="form-check-input" type="radio" name="perg63" value="216" required/>Muito importante<br>
				<input class="form-check-input" type="radio" name="perg63" value="217"/>Importante<br>
				<input class="form-check-input" type="radio" name="perg63" value="99"/>Indiferete<br>
				<input class="form-check-input" type="radio" name="perg63" value="218"/>Pouco importante<br>
				<input class="form-check-input" type="radio" name="perg63" value="219"/>Sem importância
			</div>       
		</div>              
             
    <div class="buttons">
      <a href="{{ route('leisureHealthCitizenchipSuperior') }}">
        <input type="button" class="btn" value="Anterior"/>
      </a>
      <input type="submit" class="btn" name="proximo" value="Próximo"/>
    </div>       
  </form>
@endsection