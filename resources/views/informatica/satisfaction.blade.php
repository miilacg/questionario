@extends('layoutAssay')

@section('title', 'Satisfação')
@section('value', '87.5%')

@section('content')
  <form method="POST" action="#">
    {{ csrf_field() }}

    <div class="form-group"> 
			<label>Classifique as opções abaixo de acordo com o grau de influência dela na sua escolha em cursar o técnico em informática</label>
			<label class="subtitle">(Utilize o lado mais a esquerda para pouca influência na escolha e o mais a direita para muita influência)</label>
			<div class="slider-wrapper" id="q49">
				Curso fácil de entrar<br>
				<input type="range" list="tickmarks" name="49A" min="1" max="5"/> 
				<datalist id="tickmarks">
					<option value="1">
					<option value="2">
					<option value="3">
					<option value="4" >
					<option value="5">
				</datalist><br>
              
				Curso fácil de fazer<br>
				<input type="range" list="tickmarks" name="49B" min="1" max="5"/> 
				<datalist id="tickmarks">
					<option value="1">
					<option value="2">
					<option value="3">
					<option value="4" >
					<option value="5">
				</datalist><br>

				Falta de outra opção<br>
				<input type="range" list="tickmarks" name="49C" min="1" max="5"/> 
				<datalist id="tickmarks">
					<option value="1">
					<option value="2">
					<option value="3">
					<option value="4">
					<option value="5">
				</datalist><br>		 

				Interesse na área<br>
				<input type="range" list="tickmarks" name="49D" min="1" max="5"/> 
				<datalist id="tickmarks">
					<option value="1">
					<option value="2">
					<option value="3">
					<option value="4">
					<option value="5">
				</datalist><br>
                    
				Mercado de trabalho<br>
				<input type="range" list="tickmarks" name="49E" min="1" max="5"/> 
				<datalist id="tickmarks">
					<option value="1">
					<option value="2">
					<option value="3">
					<option value="4">
					<option value="5">
				</datalist><br>
                    
				Outras<br>
				<input type="range" list="tickmarks" name="49F" min="1" max="5"/>
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
			<label>Classifique as opções abaixo de acordo com o grau de influência dela na sua escolha de estudar na Cedaf</label>
			<label class="subtitle">(Utilize o lado mais a esquerda para pouca influência na escolha e o mais a direita para muita influência)</label>
			<div class="slider-wrapper" id="q50">
				Infraestrutura<br>
				<input type="range" list="tickmarks" name="50A" min="1" max="5"/> 
				<datalist id="tickmarks">
					<option value="1">
					<option value="2">
					<option value="3">
					<option value="4">
					<option value="5">
				</datalist><br>
                
				Localidade<br>
				<input type="range" list="tickmarks" name="50B" min="1" max="5"/> 		
				<datalist id="tickmarks">
					<option value="1">
					<option value="2">
					<option value="3">
					<option value="4">
					<option value="5">
				</datalist><br>
					
				Menor nota para entrar<br>
				<input type="range" list="tickmarks" name="50C" min="1" max="5"/> 
				<datalist id="tickmarks">
					<option value="1">
					<option value="2">
					<option value="3">
					<option value="4">
					<option value="5">
				</datalist><br>
                
				Outras<br>
				<input type="range" list="tickmarks" name="50D" min="1" max="5"/>
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
				<input class="form-check-input" type="radio" name="perg51" value="A" required/>Péssimo<br>
				<input class="form-check-input" type="radio" name="perg51" value="B"/>Ruim<br>
				<input class="form-check-input" type="radio" name="perg51" value="C"/>Regular<br>
				<input class="form-check-input" type="radio" name="perg51" value="D"/>Bom<br>
				<input class="form-check-input" type="radio" name="perg51" value="E"/>Ótimo
			</div>   
		</div>                     

		<div class="form-group">
			<label>As disciplinas especifícas proporcionaram formação adequada para o bom desempenho da atividade profissional?</label>
			<div class="form-check">
				<input class="form-check-input" type="radio" name="perg52" value="A" required/>Um pouco<br>
				<input class="form-check-input" type="radio" name="perg52" value="B"/>Muito<br>
				<input class="form-check-input" type="radio" name="perg52" value="C"/>Não
			</div>      
		</div>   

		<div class="form-group">
			<label>As disciplinas específicas foram adequadas para o bom desempenho da atividade profissional?</label>
			<div class="form-check">
				<input class="form-check-input" type="radio" name="perg52" value="A" required/>Um pouco<br>
				<input class="form-check-input" type="radio" name="perg52" value="B"/>Muito<br>
				<input class="form-check-input" type="radio" name="perg52" value="C"/>Não
			</div>   
		</div>    

		<div class="form-group">     
			<label>Vocâ acha que o estágio de pelo menos 150h (além das disciplinas obrigatórias) deve ser obrigatório para receber o diploma do curso?</label>
			<div class="form-check">
				<input class="form-check-input" type="radio" name="perg53" value="A" required/>Sim<br>
				<input class="form-check-input" type="radio" name="perg53" value="B"/>Não<br>
				<input class="form-check-input" type="radio" name="perg53" value="C"/>Indiferente
			</div>  
		</div>

		<div class="form-group">                      
			<label for = "perg54">Você acha que o curso deve ter 120h em atividades complementares obrigatórias? Essas atividades são relacionadas à informática, mas realizadas fora do horário de aula e para isso haveria a diminuição de 120h das disciplinas normais do curso.</label>
			<div class="form-check">
				<input class="form-check-input" type="radio" name="perg54" value="A" required/>Sim<br>
				<input class="form-check-input" type="radio" name="perg54" value="B"/>Não<br>
				<input class="form-check-input" type="radio" name="perg54" value="C"/>Indiferente
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
						<td><input type="radio" name="55A" value="A" required/></td>
						<td><input type="radio" name="55A" value="B"/></td>
						<td><input type="radio" name="55A" value="C"/></td>
						<td><input type="radio" name="55A" value="D"/></td>
						<td><input type="radio" name="55A" value="E"/></td>	
					</tr>
					<tr>
						<td>Laboratórios</td>			
						<td><input type="radio" name="55B" value="A" required/></td>
						<td><input type="radio" name="55B" value="B"/></td>
						<td><input type="radio" name="55B" value="C"/></td>
						<td><input type="radio" name="55B" value="D"/></td>
						<td><input type="radio" name="55B" value="E"/></td>	
					</tr>
					<tr>
						<td>Biblioteca</td>			
						<td><input type="radio" name="55C" value="A" required/></td>
						<td><input type="radio" name="55C" value="B"/></td>
						<td><input type="radio" name="55C" value="C"/></td>
						<td><input type="radio" name="55C" value="D"/></td>
						<td><input type="radio" name="55C" value="E"/></td>	
					</tr>
					<tr>
						<td>Salas de aula</td>			
						<td><input type="radio" name="55D" value="A" required/></td>
						<td><input type="radio" name="55D" value="B"/></td>
						<td><input type="radio" name="55D" value="C"/></td>
						<td><input type="radio" name="55D" value="D"/></td>
						<td><input type="radio" name="55D" value="E"/></td>	
					</tr>
					<tr>
						<td>Outras dependências</td>			
						<td><input type="radio" name="55E" value="A" required/></td>
						<td><input type="radio" name="55E" value="B"/></td>
						<td><input type="radio" name="55E" value="C"/></td>
						<td><input type="radio" name="55E" value="D"/></td>
						<td><input type="radio" name="55E" value="E"/></td>	
					</tr>
				</tbody>
			</table>
		</div>

		<div class="form-group">		
			<label>Como você avalia a importância dessa pesquisa?</label>
			<div class="form-check">
				<input class="form-check-input" type="radio" name="perg56" value="A" required/>Muito importante<br>
				<input class="form-check-input" type="radio" name="perg56" value="B"/>Importante<br>
				<input class="form-check-input" type="radio" name="perg56" value="C"/>Indiferete<br>
				<input class="form-check-input" type="radio" name="perg56" value="D"/>Pouco importante<br>
				<input class="form-check-input" type="radio" name="perg56" value="E"/>Sem importância
			</div>      
		</div>              
             
    <div class="buttons">
      <a href="{{ route('leisureHealthCitizenchipTecnico') }}">
        <input type="button" class="btn" value="Anterior"/>
      </a>
      <input type="submit" class="btn" name="proximo" value="Próximo"/>
    </div>       
  </form>
@endsection