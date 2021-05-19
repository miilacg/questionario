@extends('layoutAssay')

@section('title', 'Conhecimento')
@section('value', '12.5%')

@section('content')
  <form method="POST" action="#">
    {{ csrf_field() }}

    <div class="form-group"> 			
      <label>Já iniciou outro curso técnico?</label>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="perg8" value="A" onChange="abre9()" required/>Sim<br>
        <input class="form-check-input" type="radio" name="perg8" value="B" onChange="abre9()"/>Não
      </div> 
    </div>

    <div id="nove" class="form-group esconde">   
      <label>Já concluiu outro curso técnico?</label>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="perg9" id="perg9" value="A"/>Sim<br>
        <input class="form-check-input" type="radio" name="perg9" id="perg9" value="B"/>Não
      </div>
    </div>

    <div class="form-group">
      <label>Você teve bolsa do Pibic ou Pibex?</label>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="perg10" value="A" required/>Não.<br>
        <input class="form-check-input" type="radio" name="perg10" value="B"/>Sim. Pibic.<br>
        <input class="form-check-input" type="radio" name="perg10" value="C"/>Sim. Pibex.<br>
        <input class="form-check-input" type="radio" name="perg10" value="D"/>Sim. Ambas.
      </div> 
    </div>

    <div class="form-group">
      <label>Você fez o técnico concomitante ou subsequente?</label>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="perg11" value="A" required/>Concomitante (junto com o ensino médio)<br>
        <input class="form-check-input" type="radio" name="perg11" value="B"/>Subsquente (depois do ensino médio)	
      </div> 
    </div>

    <div class="form-group">
      <label>Você continuou os seus estudos?</label>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="perg12" value="A" required/>Não<br>                        
        <input class="form-check-input" type="radio" name="perg12" value="B"/>Outro técnico<br>
        <input class="form-check-input" type="radio" name="perg12" value="C"/>Graduação<br>
        <input class="form-check-input" type="radio" name="perg12" value="D"/>Mestrado<br> 
        <input class="form-check-input" type="radio" name="perg12" value="E"/>Doutorado<br>
        <input class="form-check-input" type="radio" name="perg12" value="F"/>Pós-graduação
      </div>
    </div>

    <div class="form-group">
      <label>Língua estrangeira que sabe ler?</label>
      <table class="table"> 
        <thead class="thead-light"> 
          <tr> 
            <th scope="col">#</th> 
            <th scope="col">Não sei</th> 
            <th scope="col">Básico</th>
            <th scope="col">Intermediário</th>
            <th scope="col">Fluente</th> 
          </tr> 
        </thead> 
        <tbody> 
          <tr> 
            <td>Inglês</td> 
            <td><input type="radio" name="13A" value="A" required/></td>
            <td><input type="radio" name="13A" value="B"/></td>
            <td><input type="radio" name="13A" value="C"/></td>
            <td><input type="radio" name="13A" value="D"/></td> 
          </tr> 
          <tr> 
            <td>Espanhol</td> 
            <td><input type="radio" name="13B" value="A" required/></td>
            <td><input type="radio" name="13B" value="B"/></td>
            <td><input type="radio" name="13B" value="C"/></td>
            <td><input type="radio" name="13B" value="D"/></td>
          </tr> 
          <tr> 
            <td>Italiano</td> 
            <td><input type="radio" name="13C" value="A" required/></td>
            <td><input type="radio" name="13C" value="B"/></td>
            <td><input type="radio" name="13C" value="C"/></td>
            <td><input type="radio" name="13C" value="D"/></td>
          </tr>
          <tr> 
            <td>Francês</td> 
            <td><input type="radio" name="13D" value="A" required/></td>
            <td><input type="radio" name="13D" value="B"/></td>
            <td><input type="radio" name="13D" value="C"/></td>
            <td><input type="radio" name="13D" value="D"/></td>
          </tr>
        </tbody> 
      </table> 
    </div>

    <div class="form-group">
      <label>Língua estrangeira que sabe falar?</label>
      <table class="table" > 
        <thead class="thead-light"> 
          <tr> 
            <th scope="col">#</th> 
            <th scope="col">Não sei</th> 
            <th scope="col">Básico</th> 
            <th scope="col">Intermediário</th> 
            <th scope="col">Fluente</th> 
          </tr> 
        </thead> 
        <tbody> 
          <tr> 
            <td>Inglês</td> 
            <td><input type="radio" name="14A" value="A" required/></td>
            <td><input type="radio" name="14A" value="B"/></td>
            <td><input type="radio" name="14A" value="C"/></td>
            <td><input type="radio" name="14A" value="D"/></td> 
          </tr> 
          <tr> 
            <td>Espanhol</td> 
            <td><input type="radio" name="14B" value="A" required/></td>
            <td><input type="radio" name="14B" value="B"/></td>
            <td><input type="radio" name="14B" value="C"/></td>
            <td><input type="radio" name="14B" value="D"/></td>
          </tr> 
          <tr> 
            <td>Italiano</td> 
            <td><input type="radio" name="14C" value="A" required/></td>
            <td><input type="radio" name="14C" value="B"/></td>
            <td><input type="radio" name="14C" value="C"/></td>
            <td><input type="radio" name="14C" value="D"/></td> 
          </tr> 
          <tr> 
            <td>Francês</td> 
            <td><input type="radio" name="14D" value="A" required/></td>
            <td><input type="radio" name="14D" value="B"/></td>
            <td><input type="radio" name="14D" value="C"/></td>
            <td><input type="radio" name="14D" value="D"/></td> 
          </tr> 
        </tbody> 
      </table> 
    </div>

    <div class="form-group">
      <label>Língua estrangeira que sabe escrever?</label>
      <table class="table" > 
        <thead class="thead-light"> 
          <tr> 
            <th scope="col">#</th> 
            <th scope="col">Não sei</th> 
            <th scope="col">Básico</th> 
            <th scope="col">Intermediário</th>
            <th scope="col">Fluente</th> 
          </tr> 
        </thead> 
        <tbody> 
          <tr> 
            <td>Inglês</td> 
            <td><input type="radio" name="15A" value="A" required/></td>
            <td><input type="radio" name="15A" value="B"/></td>
            <td><input type="radio" name="15A" value="C"/></td>
            <td><input type="radio" name="15A" value="D"/></td> 
          </tr> 
          <tr> 
            <td>Espanhol</td> 
            <td><input type="radio" name="15B" value="A" required/></td>
            <td><input type="radio" name="15B" value="B"/></td>
            <td><input type="radio" name="15B" value="C"/></td>
            <td><input type="radio" name="15B" value="D"/></td>
          </tr> 
          <tr> 
            <td>Italiano</td> 
            <td><input type="radio" name="15C" value="A" required/></td>
            <td><input type="radio" name="15C" value="B"/></td>
            <td><input type="radio" name="15C" value="C"/></td>
            <td><input type="radio" name="15C" value="D"/></td>
          </tr> 
          <tr> 
            <td>Francês</td> 
            <td><input type="radio" name="15D" value="A" required/></td>
            <td><input type="radio" name="15D" value="B"/></td>
            <td><input type="radio" name="15D" value="C"/></td>
            <td><input type="radio" name="15D" value="D"/></td>
          </tr>
        </tbody> 
      </table> 
    </div>

    <div class="form-group">
      <label>Quantos cursos/treinamentos você costuma fazer por ano?</label>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="perg16" value="A" required/>0<br>
        <input class="form-check-input" type="radio" name="perg16" value="B"/>1<br>
        <input class="form-check-input" type="radio" name="perg16" value="C"/>2<br>
        <input class="form-check-input" type="radio" name="perg16" value="D"/>3<br>
        <input class="form-check-input" type="radio" name="perg16" value="E"/>Mais de 3
      </div>
    </div>

    <div class="form-group">
      <label>Quantas palestras/congressos você costuma ir por ano?</label>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="perg17" value="A" required/>0<br>
        <input class="form-check-input" type="radio" name="perg17" value="B"/>1<br>
        <input class="form-check-input" type="radio" name="perg17" value="C"/>2<br>
        <input class="form-check-input" type="radio" name="perg17" value="D"/>3<br>
        <input class="form-check-input" type="radio" name="perg17" value="E"/>Mais de 3
      </div> 
    </div>

    <div class="form-group">
      <label>Você estaria disposto a participar como palestrante da semana acadêmica do curso que é realizada anualmente no mês de maio?</label>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="perg18" value="A" onChange="abre19()" required/>Sim<br>
        <input class="form-check-input" type="radio" name="perg18" value="B" onChange="abre19()"/>Não
      </div>
    </div>

    <div id="dezenove" class="form-group esconde">   
      <div class="form-group">
        <label>Qual seria o tema dessa palestra?</label>
        <input type="text" class="form-control" name="perg19" id="caixa">
      </div>
    </div>

    <div class="form-group">
      <label>Você estaria disposto a ministrar um minicurso na semana acadêmca do curso que é realizada anualmente no mês de maio?</label>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="perg20" value="A" onChange="abre21()"required/>Sim<br>
        <input class="form-check-input" type="radio" name="perg20" value="B" onChange="abre21()"/>Não
      </div> 
    </div>

    <div id="vinteeum" class="form-group esconde">   
      <div class="form-group">
        <label>Qual seria o tema desse minicurso?</label>
        <input type="text" class="form-control" name="perg21" id="caixa1">
      </div> 
    </div>

    <div class="buttons">
      <a href="{{ route('personalDataTecnico') }}">
        <input type="button" class="btn" value="Anterior"/>
      </a>
      <input type="submit" class="btn" name="proximo" value="Próximo"/>
    </div>       
  </form>
@endsection