@extends('layoutAssay')

@section('title', 'Conhecimento')
@section('value', '12.5%')

@section('content')
  <form method="POST" action="#"> 
    {{ csrf_field() }}	

    <div class="form-group"> 
      <label>Você fez curso técnico antes da graduação?</label>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="perg8" id="perg8" value="97" onChange="abre9();" required/>Sim<br>
        <input class="form-check-input" type="radio" name="perg8" id="perg8" value="98" onChange="abre9();"/>Não
      </div>
    </div> 

    <div id="nove" class="esconde">
      <div class="form-group">
        <label>O curso técnico foi na área da computação?</label>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="perg9" id="perg9" value="97" onChange="abre10();"/>Sim<br>
          <input class="form-check-input" type="radio" name="perg9" id="perg9" value="100" onChange="abre10();"/>Outra área, mas na área das exatas<br>
          <input class="form-check-input" type="radio" name="perg9" id="perg9" value="101" onChange="abre10();"/>Outra área diferente
        </div>
      </div>
            
      <div class="form-group">
        <div id="dez" class="esconde1">
          <label>O curso técnico auxiliou na graduação?</label>
          <div class="form-check">
            <input class= "form-check-input" type="radio" name="perg10" id="perg10" value="102"/>Ajudou muito<br>
            <input class= "form-check-input" type="radio" name="perg10" id="perg10" value="103"/>Ajudou pouco<br>
            <input class= "form-check-input" type="radio" name="perg10" id="perg10" value="104"/>Não ajudou
          </div> 
        </div>
      </div> 
    </div>

    <div class="form-group">
      <label>Você publicou artigo durante a gradução?</label>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="perg11" value="220" required/>Sim. Em uma revista<br>
        <input class="form-check-input" type="radio" name="perg11" value="221"/>Sim. Em um congresso<br>
        <input class="form-check-input" type="radio" name="perg11" value="222"/>Sim. Em uma revista e em um congresso<br>
        <input class="form-check-input" type="radio" name="perg11" value="98"/>Não
      </div>
    </div>

    <div class="form-group">
      <label>Qual foi o formato da sua defesa de TCC?</label>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="perg12" value="223" required/>Artigo<br>
        <input class="form-check-input" type="radio" name="perg12" value="224"/>Monografia
      </div>
    </div>

    <div class="form-group">
      <label>Fez estágio na área da computação durante a gradução?</label>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="perg13" value="97" required/>Sim<br>
        <input class="form-check-input" type="radio" name="perg13" value="98"/>Não
      </div>
    </div>

    <div class="form-group">
      <label>Participou da Empresa Jr (SetApp) na graduação?</label>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="perg14" value="225" required/>Sim. Como diretor<br>
        <input class="form-check-input" type="radio" name="perg14" value="226"/>Sim. Como gerente<br>
        <input class="form-check-input" type="radio" name="perg14" value="227"/>Sim. Como efetivo<br>
        <input class="form-check-input" type="radio" name="perg14" value="228"/>Sim. Em outro cargo<br>
        <input class="form-check-input" type="radio" name="perg14" value="229"/>Sim. Em mais de uma função<br>
        <input class="form-check-input" type="radio" name="perg14" value="98"/>Não
      </div>
    </div>

    <div class="form-group">
      <label>Você participou como membro discente em entidades representativas de discentes?</label>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="perg15" value="230" required/>Sim. Na comissão coordenadora do curso<br>
        <input class="form-check-input" type="radio" name="perg15" value="231"/>Sim. No DCE<br>
        <input class="form-check-input" type="radio" name="perg15" value="232"/>Sim. Em ambas as entidades<br>
        <input class="form-check-input" type="radio" name="perg15" value="233"/>Sim. Em outra entidade<br>
        <input class="form-check-input" type="radio" name="perg15" value="98"/>Não
      </div>
    </div>

    <div class="form-group">
      <label>Você participou de algum projeto de iniciação científica?</label>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="perg16" value="234" required/>Sim. Com bolsa<br>
        <input class="form-check-input" type="radio" name="perg16" value="235"/>Sim. Sem bolsa<br>
        <input class="form-check-input" type="radio" name="perg16" value="239"/>Sim. Com e sem bolsa<br>
        <input class="form-check-input" type="radio" name="perg16" value="98"/>Não
      </div>
    </div>

    <div class="form-group">
      <label>Você participou de algum projeto de extensão?</label>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="perg17" value="234" required/>Sim. Com bolsa<br>
        <input class="form-check-input" type="radio" name="perg17" value="235"/>Sim. Sem bolsa<br>
        <input class="form-check-input" type="radio" name="perg17" value="239"/>Sim. Com e sem bolsa<br>
        <input class="form-check-input" type="radio" name="perg17" value="98"/>Não
      </div>
    </div>

    <div class="form-group">
      <label>Você participou de algum projeto de ensino?</label>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="perg18" value="234" required/>Sim. Com bolsa<br>
        <input class="form-check-input" type="radio" name="perg18" value="235"/>Sim. Sem bolsa<br>
        <input class="form-check-input" type="radio" name="perg18" value="236"/>Sim. Com e sem bolsa<br>
        <input class="form-check-input" type="radio" name="perg18" value="98"/>Não
      </div>
    </div>

    <div class="form-group">
      <label>Você foi monitor ou tutor de alguma disciplina?</label>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="perg19" value="236" required/>Sim. De uma matéria específica do curso<br>
        <input class="form-check-input" type="radio" name="perg19" value="237"/>Sim. De uma matéria de outro curso<br>
        <input class="form-check-input" type="radio" name="perg19" value="238"/>Sim. De ambos<br>
        <input class="form-check-input" type="radio" name="perg19" value="98"/>Não
      </div>
    </div>

    <div class="form-group"> 
      <label>Você fez intercâmbio durante a graduação?</label>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="perg20" value="240" onChange="abre21();" required/>Sim. No Brasil<br>
        <input class="form-check-input" type="radio" name="perg20" value="241" onChange="abre21();"/>Sim. No exterior<br>
        <input class="form-check-input" type="radio" name="perg20" value="98" onChange="abre21();"/>Não
      </div>
    </div>
        
    <div id="vinteum" class="form-group esconde">
      <label>Para onde você foi no intercâmbio?</label>
      <input type="text" class="form-control" name="perg21" id="perg21" placeholder="Estado se foi feito no Brasil e país e estado se foi feito no exterior"> 
    </div>

    <div class="form-group"> 
      <label>Você continuou os seus estudos?</label>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="perg22" value="98" required/>Não<br>
        <input class="form-check-input" type="radio" name="perg22" value="105"/>Outra graduação<br>
        <input class="form-check-input" type="radio" name="perg22" value="106"/>Pós-graduação<br>
        <input class="form-check-input" type="radio" name="perg22" value="107"/>Mestrado<br>
        <input class="form-check-input" type="radio" name="perg22" value="108"/>Doutorado<br>
        <input class="form-check-input" type="radio" name="perg22" value="109"/>Outra formação
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
      <label>Quantos cursos/ treinamentos você costuma fazer por ano?</label>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="perg26" value="116" required/>0<br>
        <input class="form-check-input" type="radio" name="perg26" value="117"/>1<br>
        <input class="form-check-input" type="radio" name="perg26" value="118"/>2<br>
        <input class="form-check-input" type="radio" name="perg26" value="119"/>3<br>
        <input class="form-check-input" type="radio" name="perg26" value="120"/>Mais de 3
      </div>
    </div>

    <div class="form-group">
      <label>Quantas palestras/ congressos você costuma ir por ano?</label>
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
      <a href="{{ route('personalDataSuperior') }}">
        <input type="button" class="btn" value="Anterior"/>
      </a>
      <input type="submit" class="btn" name="proximo" value="Próximo"/>
    </div> 
  </form>
@endsection