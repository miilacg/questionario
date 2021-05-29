@extends('layoutAssay')

@section('title', 'Satisfação')
@section('value', '87.5%')

@section('content')
  <form method="POST" action="#">
    {{ csrf_field() }}

    <div class="form-group"> 
			<label>Classifique as opções abaixo de acordo com o grau de influência dela na sua escolha em cursar o bacharelado em Ciência da Computação</label>
			<label class="subtitle">(Utilize o lado mais a esquerda para pouca influência na escolha e o mais a direita para muita influência)</label>
			<div class="slider-wrapper" id="q58">
				Curso fácil de entrar<br>
				<input type="range" list="tickmarks" name="58A" min="1" max="5"/> 
				<datalist id="tickmarks">
					<option value="1">
					<option value="2">
					<option value="3">
					<option value="4" >
					<option value="5">
				</datalist><br>
              
				Curso fácil de fazer<br>
				<input type="range" list="tickmarks" name="58B" min="1" max="5"/> 
				<datalist id="tickmarks">
					<option value="1">
					<option value="2">
					<option value="3">
					<option value="4" >
					<option value="5">
				</datalist><br>
                    
				Interesse na área<br>
				<input type="range" list="tickmarks" name="58C" min="1" max="5"/> 
				<datalist id="tickmarks">
					<option value="1">
					<option value="2">
					<option value="3">
					<option value="4" >
					<option value="5">
				</datalist><br>
                    
				Mercado de trabalho<br>
				<input type="range" list="tickmarks" name="58D" min="1" max="5"/> 
				<datalist id="tickmarks">
					<option value="1">
					<option value="2">
					<option value="3">
					<option value="4" >
					<option value="5">
				</datalist><br>
                    
				Outras<br>
				<input type="range" list="tickmarks" name="58E" min="1" max="5"/>
				<datalist id="tickmarks">
					<option value="1">
					<option value="2">
					<option value="3">
					<option value="4" >
					<option value="5">
				</datalist><br>
			</div>
    </div>

    <div class="form-group"> 
			<label>Classifique as opções abaixo de acordo com o grau de influência dela na sua escolha de estudar na Universidade Federal de Viçosa - Campus  Florestal</label>
			<label class="subtitle">(Utilize o lado mais a esquerda para pouca influência na escolha e o mais a direita para muita influência)</label>
			<div class="slider-wrapper" id="q59">
				Infraestrutura<br>
				<input type="range" list="tickmarks" name="59A" min="1" max="5"/> 
				<datalist id="tickmarks">
					<option value="1">
					<option value="2">
					<option value="3">
					<option value="4">
					<option value="5">
				</datalist><br>
				
				Custo de vida<br>
				<input type="range" list="tickmarks" name="59B" min="1" max="5"/> 
				<datalist id="tickmarks">
					<option value="1">
					<option value="2">
					<option value="3">
					<option value="4">
					<option value="5">
				</datalist><br>
                
				Localidade<br>
				<input type="range" list="tickmarks" name="59C" min="1" max="5"/> 		
				<datalist id="tickmarks">
					<option value="1">
					<option value="2">
					<option value="3">
					<option value="4">
					<option value="5">
				</datalist><br>
					
				Menor nota para entrar<br>
				<input type="range" list="tickmarks" name="59D" min="1" max="5"/> 
				<datalist id="tickmarks">
					<option value="1">
					<option value="2">
					<option value="3">
					<option value="4">
					<option value="5">
				</datalist><br>
					
				Possibilidade de bolsa<br>
				<input type="range" list="tickmarks" name="59E" min="1" max="5"/> 
				<datalist id="tickmarks">
					<option value="1">
					<option value="2">
					<option value="3">
					<option value="4">
					<option value="5">
				</datalist><br>
                
				Outras<br>
				<input type = "range" list = "tickmarks" name = "59F" min="1" max="5"/>
				<datalist id="tickmarks">
					<option value="1">
					<option value="2">
					<option value="3">
					<option value="4">
					<option value="5">
				</datalist><br>
			</div> 
    </div>

		<div class="form-group">
			<label>Como foi atendida suas expectativas do curso em relação à formação profissional?</label>
			<div class="form-check">
				<input class="form-check-input" type="radio" name="perg60" value="A" required/>Péssimo<br>
				<input class="form-check-input" type="radio" name="perg60" value="B"/>Ruim<br>
				<input class="form-check-input" type="radio" name="perg60" value="C"/>Regular<br>
				<input class="form-check-input" type="radio" name="perg60" value="D"/>Bom<br>
				<input class="form-check-input" type="radio" name="perg60" value="E"/>Ótimo
			</div>   
		</div>                     

		<div class="form-group">
			<label>As disciplinas especifícas proporcionaram formação adequada para o bom desempenho da atividade profissional?</label>
			<div class="form-check">
				<input class="form-check-input" type="radio" name="perg61" value="A" required/>Um pouco<br>
				<input class="form-check-input" type="radio" name="perg61" value="B"/>Muito<br>
				<input class="form-check-input" type="radio" name="perg61" value="C"/>Não
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
						<td><input type="radio" name="62A" value="A" required/></td>
						<td><input type="radio" name="62A" value="B"/></td>
						<td><input type="radio" name="62A" value="C"/></td>
						<td><input type="radio" name="62A" value="D"/></td>
						<td><input type="radio" name="62A" value="E"/></td>	
					</tr>
					<tr>
						<td>Laboratórios</td>			
						<td><input type="radio" name="62B" value="A" required/></td>
						<td><input type="radio" name="62B" value="B"/></td>
						<td><input type="radio" name="62B" value="C"/></td>
						<td><input type="radio" name="62B" value="D"/></td>
						<td><input type="radio" name="62B" value="E"/></td>	
					</tr>
					<tr>
						<td>Biblioteca</td>			
						<td><input type="radio" name="62C" value="A" required/></td>
						<td><input type="radio" name="62C" value="B"/></td>
						<td><input type="radio" name="62C" value="C"/></td>
						<td><input type="radio" name="62C" value="D"/></td>
						<td><input type="radio" name="62C" value="E"/></td>	
					</tr>
					<tr>
						<td>Salas de aula</td>			
						<td><input type="radio" name="62D" value="A" required/></td>
						<td><input type="radio" name="62D" value="B"/></td>
						<td><input type="radio" name="62D" value="C"/></td>
						<td><input type="radio" name="62D" value="D"/></td>
						<td><input type="radio" name="62D" value="E"/></td>	
					</tr>
					<tr>
						<td>Outras dependências</td>			
						<td><input type="radio" name="62E" value="A" required/></td>
						<td><input type="radio" name="62E" value="B"/></td>
						<td><input type="radio" name="62E" value="C"/></td>
						<td><input type="radio" name="62E" value="D"/></td>
						<td><input type="radio" name="62E" value="E"/></td>	
					</tr>
				</tbody>
			</table>
		</div>

		<div class="form-group">		
			<label>Como você avalia a importância dessa pesquisa?</label>
			<div class="form-check">
				<input class="form-check-input" type="radio" name="perg63" value="A" required/>Muito importante<br>
				<input class="form-check-input" type="radio" name="perg63" value="B"/>Importante<br>
				<input class="form-check-input" type="radio" name="perg63" value="C"/>Indiferete<br>
				<input class="form-check-input" type="radio" name="perg63" value="D"/>Pouco importante<br>
				<input class="form-check-input" type="radio" name="perg63" value="E"/>Sem importância
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