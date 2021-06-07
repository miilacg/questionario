@extends('layoutAssay')

@section('title', 'Conhecimento')
@section('value', '12.5%')

@section('content')
  <form method="POST" action="#">
    {{ csrf_field() }}

    <div class="form-group"> 			
      <label>Já iniciou outro curso técnico?</label>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="perg64" value="97" onChange="abre65()" required/>Sim<br>
        <input class="form-check-input" type="radio" name="perg64" value="98" onChange="abre65()"/>Não
      </div> 
    </div>

    <div id="sessentaCinco" class="form-group esconde">   
      <label>Já concluiu outro curso técnico?</label>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="perg65" id="perg65" value="97"/>Sim<br>
        <input class="form-check-input" type="radio" name="perg65" id="perg65" value="98"/>Não
      </div>
    </div>

    <div class="form-group">
      <label>Você teve bolsa do Pibic ou Pibex?</label>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="perg66" value="98" required/>Não.<br>
        <input class="form-check-input" type="radio" name="perg66" value="128"/>Sim. Pibic.<br>
        <input class="form-check-input" type="radio" name="perg66" value="129"/>Sim. Pibex.<br>
        <input class="form-check-input" type="radio" name="perg66" value="130"/>Sim. Ambas.
      </div> 
    </div>

    <div class="form-group">
      <label>Você fez o técnico concomitante ou subsequente?</label>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="perg67" value="131" required/>Concomitante (junto com o ensino médio)<br>
        <input class="form-check-input" type="radio" name="perg67" value="132"/>Subsquente (depois do ensino médio)	
      </div> 
    </div>

    <div class="form-group">
      <label>Você continuou os seus estudos?</label>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="perg22" value="98" required/>Não<br>                        
        <input class="form-check-input" type="radio" name="perg22" value="110"/>Outro técnico<br>
        <input class="form-check-input" type="radio" name="perg22" value="111"/>Graduação<br>
        <input class="form-check-input" type="radio" name="perg22" value="106"/>Pós-graduação<br>
        <input class="form-check-input" type="radio" name="perg22" value="107"/>Mestrado<br> 
        <input class="form-check-input" type="radio" name="perg22" value="108"/>Doutorado
      </div>
    </div>

    <div class="form-group">
      <label>Língua estrangeira que sabe ler</label>
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
            <td><input type="radio" name="perg23_2" value="112" required/></td>
            <td><input type="radio" name="perg23_2" value="113"/></td>
            <td><input type="radio" name="perg23_2" value="114"/></td>
            <td><input type="radio" name="perg23_2" value="115"/></td>
          </tr> 
          <tr> 
            <td>Espanhol</td> 
            <td><input type="radio" name="perg23_2" value="112" required/></td>
            <td><input type="radio" name="perg23_2" value="113"/></td>
            <td><input type="radio" name="perg23_2" value="114"/></td>
            <td><input type="radio" name="perg23_2" value="115"/></td>
          </tr> 
          <tr> 
            <td>Italiano</td> 
            <td><input type="radio" name="perg23_3" value="112" required/></td>
            <td><input type="radio" name="perg23_3" value="113"/></td>
            <td><input type="radio" name="perg23_3" value="114"/></td>
            <td><input type="radio" name="perg23_3" value="115"/></td>
          </tr>
          <tr> 
            <td>Francês</td> 
            <td><input type="radio" name="perg23_4" value="112" required/></td>
            <td><input type="radio" name="perg23_4" value="113"/></td>
            <td><input type="radio" name="perg23_4" value="114"/></td>
            <td><input type="radio" name="perg23_4" value="115"/></td>
          </tr>
        </tbody> 
      </table> 
    </div>

    <div class="form-group">
      <label>Língua estrangeira que sabe falar</label>
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
            <td><input type="radio" name="perg24_1" value="112" required/></td>
            <td><input type="radio" name="perg24_1" value="113"/></td>
            <td><input type="radio" name="perg24_1" value="114"/></td>
            <td><input type="radio" name="perg24_1" value="115"/></td> 
          </tr> 
          <tr> 
            <td>Espanhol</td> 
            <td><input type="radio" name="perg24_2" value="112" required/></td>
            <td><input type="radio" name="perg24_2" value="113"/></td>
            <td><input type="radio" name="perg24_2" value="114"/></td>
            <td><input type="radio" name="perg24_2" value="115"/></td>
          </tr> 
          <tr> 
            <td>Italiano</td> 
            <td><input type="radio" name="perg24_3" value="112" required/></td>
            <td><input type="radio" name="perg24_3" value="113"/></td>
            <td><input type="radio" name="perg24_3" value="114"/></td>
            <td><input type="radio" name="perg24_3" value="115"/></td> 
          </tr> 
          <tr> 
            <td>Francês</td> 
            <td><input type="radio" name="perg24_4" value="112" required/></td>
            <td><input type="radio" name="perg24_4" value="113"/></td>
            <td><input type="radio" name="perg24_4" value="114"/></td>
            <td><input type="radio" name="perg24_4" value="115"/></td> 
          </tr> 
        </tbody> 
      </table> 
    </div>

    <div class="form-group">
      <label>Língua estrangeira que sabe escrever</label>
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
            <td><input type="radio" name="perg25_1" value="112" required/></td>
            <td><input type="radio" name="perg25_1" value="113"/></td>
            <td><input type="radio" name="perg25_1" value="114"/></td>
            <td><input type="radio" name="perg25_1" value="115"/></td> 
          </tr> 
          <tr> 
            <td>Espanhol</td> 
            <td><input type="radio" name="perg25_2" value="112" required/></td>
            <td><input type="radio" name="perg25_2" value="113"/></td>
            <td><input type="radio" name="perg25_2" value="114"/></td>
            <td><input type="radio" name="perg25_2" value="115"/></td>
          </tr> 
          <tr> 
            <td>Italiano</td> 
            <td><input type="radio" name="perg25_3" value="112" required/></td>
            <td><input type="radio" name="perg25_3" value="113"/></td>
            <td><input type="radio" name="perg25_3" value="114"/></td>
            <td><input type="radio" name="perg25_3" value="115"/></td>
          </tr> 
          <tr> 
            <td>Francês</td> 
            <td><input type="radio" name="perg25_4" value="112" required/></td>
            <td><input type="radio" name="perg25_4" value="113"/></td>
            <td><input type="radio" name="perg25_4" value="114"/></td>
            <td><input type="radio" name="perg25_4" value="115"/></td>
          </tr>
        </tbody> 
      </table> 
    </div>

    <div class="form-group">
      <label>Quantos cursos / treinamentos você costuma fazer por ano?</label>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="perg26" value="116" required/>0<br>
        <input class="form-check-input" type="radio" name="perg26" value="117"/>1<br>
        <input class="form-check-input" type="radio" name="perg26" value="118"/>2<br>
        <input class="form-check-input" type="radio" name="perg26" value="119"/>3<br>
        <input class="form-check-input" type="radio" name="perg26" value="120"/>Mais de 3
      </div>
    </div>

    <div class="form-group">
      <label>Quantas palestras / congressos você costuma ir por ano?</label>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="perg27" value="116" required/>0<br>
        <input class="form-check-input" type="radio" name="perg27" value="117"/>1<br>
        <input class="form-check-input" type="radio" name="perg27" value="118"/>2<br>
        <input class="form-check-input" type="radio" name="perg27" value="119"/>3<br>
        <input class="form-check-input" type="radio" name="perg27" value="120"/>Mais de 3
      </div> 
    </div>

    <div class="form-group">
      <label>Você estaria disposto a participar como palestrante da semana acadêmica do curso que é realizada anualmente no mês de maio?</label>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="perg28" value="97" onChange="abre29()" required/>Sim<br>
        <input class="form-check-input" type="radio" name="perg28" value="98" onChange="abre29()"/>Não
      </div>
    </div>

    <div id="dezenove" class="form-group esconde">   
      <div class="form-group">
        <label>Qual seria o tema dessa palestra?</label>
        <input type="text" class="form-control" name="perg29" id="caixa">
      </div>
    </div>

    <div class="form-group">
      <label>Você estaria disposto a ministrar um minicurso na semana acadêmca do curso que é realizada anualmente no mês de maio?</label>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="perg30" value="97" onChange="abre31()"required/>Sim<br>
        <input class="form-check-input" type="radio" name="perg30" value="98" onChange="abre31()"/>Não
      </div> 
    </div>

    <div id="vinteeum" class="form-group esconde">   
      <div class="form-group">
        <label>Qual seria o tema desse minicurso?</label>
        <input type="text" class="form-control" name="perg31" id="caixa1">
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