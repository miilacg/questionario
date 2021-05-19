@extends('layoutAssay')

@section('title', 'Conhecimento')
@section('value', '12.5%')

@section('content')
  <form method="POST" action="#"> 
    {{ csrf_field() }}	

    <div class="form-group"> 
      <label>Você fez curso técnico antes da graduação?</label>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="perg8" id="perg8" value="A" onChange="abre8();" required/>Sim<br>
        <input class="form-check-input" type="radio" name="perg8" id="perg8" value="B" onChange="abre8();"/>Não
      </div>
    </div> 

    <div id="nove" class="esconde">
      <div class="form-group">
        <label>O curso técnico foi na área da computação?</label>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="perg9" id="perg9" value="A" onChange="abre9();"/>Sim<br>
          <input class="form-check-input" type="radio" name="perg9" id="perg9" value="B" onChange="abre9();"/>Outra área, mas na área das exatas<br>
          <input class="form-check-input" type="radio" name="perg9" id="perg9" value="C" onChange="abre9();"/>Outra área diferente
        </div>
      </div>
            
      <div class="form-group">
        <div id="dez" class="esconde1">
          <label>O curso técnico auxiliou na graduação?</label>
          <div class="form-check">
            <input class= "form-check-input" type="radio" name="perg10" id="perg10" value="A"/>Ajudou muito<br>
            <input class= "form-check-input" type="radio" name="perg10" id="perg10" value="B"/>Ajudou pouco<br>
            <input class= "form-check-input" type="radio" name="perg10" id="perg10" value="C"/>Não ajudou
          </div> 
        </div>
      </div> 
    </div>

    <div class="form-group">
      <label>Você publicou artigo durante a gradução?</label>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="perg11" value="A" required/>Sim. Em uma revista<br>
        <input class="form-check-input" type="radio" name="perg11" value="B"/>Sim. Em um congresso<br>
        <input class="form-check-input" type="radio" name="perg11" value="C"/>Sim. Em uma revista e em um congresso<br>
        <input class="form-check-input" type="radio" name="perg11" value="D"/>Não
      </div>
    </div>

    <div class="form-group">
      <label>Qual foi o formato da sua defesa de TCC?</label>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="perg12" value="A" required/>Artigo<br>
        <input class="form-check-input" type="radio" name="perg12" value="B"/>Monografia
      </div>
    </div>

    <div class="form-group">
      <label>Fez estágio na área da computação durante a gradução?</label>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="perg13" value="A" required/>Sim<br>
        <input class="form-check-input" type="radio" name="perg13" value="B"/>Não
      </div>
    </div>

    <div class="form-group">
      <label>Participou da Empresa Jr (SetApp) na graduação?</label>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="perg14" value="A" required/>Sim. Como diretor<br>
        <input class="form-check-input" type="radio" name="perg14" value="B"/>Sim. Como gerente<br>
        <input class="form-check-input" type="radio" name="perg14" value="C"/>Sim. Como efetivo<br>
        <input class="form-check-input" type="radio" name="perg14" value="D"/>Sim. Em outro cargo<br>
        <input class="form-check-input" type="radio" name="perg14" value="E"/>Sim. Em mais de uma função<br>
        <input class="form-check-input" type="radio" name="perg14" value="F"/>Não
      </div>
    </div>

    <div class="form-group">
      <label>Você participou como membro discente em entidades representativas de discentes?</label>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="perg15" value="A" required/>Sim. Na comissão coordenadora do curso<br>
        <input class="form-check-input" type="radio" name="perg15" value="B"/>Sim. No DCE<br>
        <input class="form-check-input" type="radio" name="perg15" value="C"/>Sim. Em ambas as entidades<br>
        <input class="form-check-input" type="radio" name="perg15" value="D"/>Sim. Em outra entidade<br>
        <input class="form-check-input" type="radio" name="perg15" value="E"/>Não
      </div>
    </div>

    <div class="form-group">
      <label>Você participou de algum projeto de iniciação científica?</label>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="perg16" value="A" required/>Sim. Com bolsa<br>
        <input class="form-check-input" type="radio" name="perg16" value="B"/>Sim. Sem bolsa<br>
        <input class="form-check-input" type="radio" name="perg16" value="D"/>Sim. Com e sem bolsa<br>
        <input class="form-check-input" type="radio" name="perg16" value="C"/>Não
      </div>
    </div>

    <div class="form-group">
      <label>Você participou de algum projeto de extensão?</label>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="perg17" value="A" required/>Sim. Com bolsa<br>
        <input class="form-check-input" type="radio" name="perg17" value="B"/>Sim. Sem bolsa<br>
        <input class="form-check-input" type="radio" name="perg17" value="D"/>Sim. Com e sem bolsa<br>
        <input class="form-check-input" type="radio" name="perg17" value="C"/>Não
      </div>
    </div>

    <div class="form-group">
      <label>Você participou de algum projeto de ensino?</label>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="perg18" value="A" required/>Sim. Com bolsa<br>
        <input class="form-check-input" type="radio" name="perg18" value="B"/>Sim. Sem bolsa<br>
        <input class="form-check-input" type="radio" name="perg18" value="D"/>Sim. Com e sem bolsa<br>
        <input class="form-check-input" type="radio" name="perg18" value="C"/>Não
      </div>
    </div>

    <div class="form-group">
      <label>Você foi monitor ou tutor de alguma disciplina?</label>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="perg19" value="A" required/>Sim. De uma matéria do curso<br>
        <input class="form-check-input" type="radio" name="perg19" value="B"/>Sim. De uma matéria de outro curso<br>
        <input class="form-check-input" type="radio" name="perg19" value="C"/>Sim. De ambos<br>
        <input class="form-check-input" type="radio" name="perg19" value="D"/>Não
      </div>
    </div>

    <div class="form-group"> 
      <label>Você fez intercâmbio durante a graduação?</label>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="perg20" value="A" onChange="abre20();" required/>Sim. No Brasil<br>
        <input class="form-check-input" type="radio" name="perg20" value="B" onChange="abre20();"/>Sim. No exterior<br>
        <input class="form-check-input" type="radio" name="perg20" value="C" onChange="abre20();"/>Não
      </div>
    </div>
        
    <div id="vinteum" class="form-group esconde">
      <label>Para onde você foi no intercâmbio?</label>
      <input type="text" class="form-control" name="perg21" id="perg21" placeholder="Estado se foi feito no Brasil e país e estado se foi feito no exterior"> 
    </div>

    <div class="form-group"> 
      <label>Você continuou os seus estudos?</label>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="perg22" value="A" required/>Não<br>
        <input class="form-check-input" type="radio" name="perg22" value="B"/>Outra graduação<br>
        <input class="form-check-input" type="radio" name="perg22" value="C"/>Pós-graduação<br>
        <input class="form-check-input" type="radio" name="perg22" value="D"/>Mestrado<br>
        <input class="form-check-input" type="radio" name="perg22" value="E"/>Doutorado<br>
        <input class="form-check-input" type="radio" name="perg22" value="F"/>Outra formação
      </div>
    </div>
        
    <div class="form-group"> 
      <label>Língua estrangeira que sabe ler</label>
      <table class="table">
        <thead class="thead-light"> 
          <tr> 
            <th scope="col"> # </th> 
            <th scope="col"> Não sei </th> 
            <th scope="col"> Básico </th> 
            <th scope="col"> Intermediário </th>
            <th scope="col"> Fluente </th> 
          </tr> 
        </thead> 
        <tbody>
          <tr>
            <td>Inglês</td>
            <td><input type="radio" name="23A" value="A" required/></td>
            <td><input type="radio" name="23A" value="B"/></td>
            <td><input type="radio" name="23A" value="C"/></td>
            <td><input type="radio" name="23A" value="D"/></td>
          </tr>
          <tr>
            <td>Espanhol</td>
            <td><input type="radio" name="23B" value="A" required/></td>
            <td><input type="radio" name="23B" value="B"/></td>
            <td><input type="radio" name="23B" value="C"/></td>
            <td><input type="radio" name="23B" value="D"/></td>
          </tr>
          <tr>
            <td>Italiano</td>
            <th><input type="radio" name="23C" value="A" required/></th>
            <td><input type="radio" name="23C" value="B"/></td>
            <td><input type="radio" name="23C" value="C"/></td>
            <td><input type="radio" name="23C" value="D"/></td>
          </tr>
          <tr>
            <td>Francês</td>
            <th><input type="radio" name="23D" value="A" required/></th>
            <td><input type="radio" name="23D" value="B"/></td>
            <td><input type="radio" name="23D" value="C"/></td>
            <td><input type="radio" name="23D" value="D"/></td>
          </tr>   
        </tbody>
      </table>
    </div>

    <div class="form-group"> 
      <label>Língua estrangeira que sabe falar</label>
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
            <td><input type="radio" name="24A" value="A" required/></td>
            <td><input type="radio" name="24A" value="B"/></td>
            <td><input type="radio" name="24A" value="C"/></td>
            <td><input type="radio" name="24A" value="D"/></td>
          </tr>
          <tr>
            <td>Espanhol</td>
            <td><input type="radio" name="24B" value="A" required/></td>
            <td><input type="radio" name="24B" value="B"/></td>
            <td><input type="radio" name="24B" value="C"/></td>
            <td><input type="radio" name="24B" value="D"/></td>
          </tr>
          <tr>
            <td>Italiano</td>
            <td><input type="radio" name="24C" value="A" required/></td>
            <td><input type="radio" name="24C" value="B"/></td>
            <td><input type="radio" name="24C" value="C"/></td>
            <td><input type="radio" name="24C" value="D"/></td>
          </tr>
          <tr>
            <td>Francês</td>
            <td><input type="radio" name="24D" value="A" required/></td>
            <td><input type="radio" name="24D" value="B"/></td>
            <td><input type="radio" name="24D" value="C"/></td>
            <td><input type="radio" name="24D" value="D"/></td>
          </tr>
        </tbody>
      </table>
    </div>

    <div class="form-group"> 
      <label>Língua estrangeira que sabe escrever</label>
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
        <tr>
          <td>Inglês</td>
          <td><input type="radio" name="25A" value="A" required/></td>
          <td><input type="radio" name="25A" value="B"/></td>
          <td><input type="radio" name="25A" value="C"/></td>
          <td><input type="radio" name="25A" value="D"/></td>
        </tr>
        <tr>
          <td>Espanhol</td>
          <td><input type="radio" name="25B" value="A" required/></td>
          <td><input type="radio" name="25B" value="B"/></td>
          <td><input type="radio" name="25B" value="C"/></td>
          <td><input type="radio" name="25B" value="D"/></td>
        </tr>
        <tr>
          <td>Italiano</td>
          <td><input type="radio" name="25C" value="A" required/></td>
          <td><input type="radio" name="25C" value="B"/></td>
          <td><input type="radio" name="25C" value="C"/></td>
          <td><input type="radio" name="25C" value="D"/></td>
        </tr>
        <tr>
          <td>Francês</td>
          <td><input type="radio" name="25D" value="A" required/></td>
          <td><input type="radio" name="25D" value="B"/></td>
          <td><input type="radio" name="25D" value="C"/></td>
          <td><input type="radio" name="25D" value="D"/></td>
        </tr>
      </table> 
    </div>

    <div class="form-group"> 
      <label>Quantos cursos/treinamentos você costuma fazer por ano?</label>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="perg26" value="A" required/>0<br>
        <input class="form-check-input" type="radio" name="perg26" value="B"/>1<br>
        <input class="form-check-input" type="radio" name="perg26" value="C"/>2<br>
        <input class="form-check-input" type="radio" name="perg26" value="D"/>3<br>
        <input class="form-check-input" type="radio" name="perg26" value="E"/>Mais de 3
      </div> 
    </div>

    <div class="form-group"> 
      <label>Quantas palestras/congressos você costuma ir por ano?</label>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="perg27" value="A" required/>0<br>
        <input class="form-check-input" type="radio" name="perg27" value="B"/>1<br>
        <input class="form-check-input" type="radio" name="perg27" value="C"/>2<br>
        <input class="form-check-input" type="radio" name="perg27" value="D"/>3<br>
        <input class="form-check-input" type="radio" name="perg27" value="E"/>Mais de 3
      </div>   
    </div>                     

    <div class="form-group"> 
      <label>Você estaria disposto a participar como palestrante da semana acadêmica do curso que é realizada anualmente no mês de maio?</label>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="perg28" value="A" onChange="abre28();" required/>Sim<br>
        <input class="form-check-input" type="radio" name="perg28" value="B" onChange="abre28();"/>Não
      </div>  
    </div>                      

    <div id="vintenove" class="esconde form-group">
      <label>Qual seria o tema dessa palestra?</label>
      <input type="text" class="form-control" name="perg29" id="perg29">
    </div>

    <div class="form-group">
      <label>Você estaria disposto a ministrar um minicurso na semana acadêmica do curso que é realizada anualmente no mês de maio?</label>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="perg30" value="A" onChange="abre30();" required/>Sim<br>
        <input class="form-check-input" type="radio" name="perg30" value="B" onChange="abre30();"/>Não
      </div>  
    </div>                      

    <div id="trintaeum" class="form-group esconde">
      <label>Qual seria o tema desse minicurso?</label>
      <input type = "text" class= "form-control" name="perg31" id = "perg31">
    </div>

    <div class="buttons">
      <a href="{{ route('personalDataSuperior') }}">
        <input type="button" class="btn" value="Anterior"/>
      </a>
      <input type="submit" class="btn" name="proximo" value="Próximo"/>
    </div> 
  </form>
@endsection