@extends('layoutAssay')

@section('title', 'Dados Pessoais')
@section('value', '0%')

@section('content')
  <form method="POST" action="#">
    {{ csrf_field() }}
   
    <div class="form-group">
      <label>Ano de nascimento: </label>
      <select class="form-control" id="perg1" name="perg1" required><br>
        <option value="">Escolha uma opção</option> 
        <option value="A">Antes de 1980</option>  
        <option value="B">1980</option> 
        <option value="C">1981</option> 
        <option value="D">1982</option> 
        <option value="E">1983</option> 
        <option value="F">1984</option> 
        <option value="G">1985</option> 
        <option value="H">1986</option>
        <option value="I">1987</option>
        <option value="J">1988</option>
        <option value="K">1989</option>
        <option value="L">1990</option> 
        <option value="M">1991</option> 
        <option value="N">1992</option> 
        <option value="O">1993</option> 
        <option value="P">1994</option> 
        <option value="Q">1995</option> 
        <option value="R">1996</option> 
        <option value="S">1997</option> 
        <option value="T">1998</option> 
        <option value="U">1999</option> 
        <option value="V">2000</option> 
        <option value="W">2001</option>
        <option value="X">2002</option> 
      </select>
    </div>

    <div class="form-group">
      <label>Ano de ingresso no curso: </label>
      <select class="form-control" id="perg2" name="perg2" onChange="testeConclusao1(perg2, perg3)" required><br>
        <option value="">Escolha uma opção</option>
        <option value="2012">2012</option>
        <option value="2013">2013</option>
        <option value="2014">2014</option>
        <option value="2015">2015</option>
        <option value="2016">2016</option>
        <option value="2017">2017</option> 
      </select>
    </div>

    <div class="form-group">
      <label>Ano de conclusão do curso: </label>
      <select class="form-control" id="perg3" name="perg3" onChange="testeConclusao(perg2, perg3)" required><br>
        <option value="">Escolha uma opção</option>
        <option value="2013">2013</option>
        <option value="2014">2014</option>
        <option value="2015">2015</option>
        <option value="2016">2016</option>
        <option value="2017">2017</option>
        <option value="2018">2018</option> 
        <option value="2019">2019</option>
        <option value="2020">2020</option>
      </select>
    </div>

    <div class="form-group">
      <label>Estado civil</label>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="perg4" value="A" required/>Solteiro<br>
        <input class="form-check-input" type="radio" name="perg4" value="B"/>União Estável<br>
        <input class="form-check-input" type="radio" name="perg4" value="C"/>Casado<br>
        <input class="form-check-input" type="radio" name="perg4" value="D"/>Divorciado<br>
        <input class="form-check-input" type="radio" name="perg4" value="E"/>Viúvo 
      </div>  
    </div>                       

    <div class="form-group">
      <label>Sexo</label>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="perg5" value="A" required/>Feminino<br>
        <input class="form-check-input" type="radio" name="perg5" value="B"/>Masculino<br>
        <input class="form-check-input" type="radio" name="perg5" value="C"/>Prefiro não informar<br> 
      </div> 
    </div>
              
    <div class="form-group">
      <label>País onde mora: </label>
      <select class="form-control" id="perg6" name="perg6" onChange="abreEstado()" required><br>
        <option value="">Escolha uma opção</option>
        <option value="BR">Brasil</option>
        <option value="CA">Canadá</option>
        <option value="ES">Espanha</option> 
        <option value="EUA">Estados Unidos</option>			 
        <option value="FR">França</option>     			 
        <option value="IT">Itália</option> 
        <option value="PT">Portugal</option> 
        <option value="O">Outro</option> 
      </select>
    </div>

    <div id="estado7" class="estado form-group">
      <label>Estado onde mora: </label>
      <select class="form-control" id="perg7" name="perg7"> 
        <option value="">Escolha uma opção</option>
        <option value="AC">Acre</option> 
        <option value="AL">Alagoas</option> 
        <option value="AM">Amazonas</option> 
        <option value="AP">Amapá</option> 
        <option value="BA">Bahia</option> 
        <option value="CE">Ceará</option> 
        <option value="DF">Distrito Federal</option> 
        <option value="ES">Espírito Santo</option> 
        <option value="GO">Goiás</option> 
        <option value="MA">Maranhão</option> 
        <option value="MT">Mato Grosso</option> 
        <option value="MS">Mato Grosso do Sul</option> 
        <option value="MG">Minas Gerais</option> 
        <option value="PA">Pará</option> 
        <option value="PB">Paraná</option> 
        <option value="PR">Paraiba</option> 
        <option value="PE">Pernambuco</option> 
        <option value="PI">Piauí</option> 
        <option value="RJ">Rio de Janeiro</option> 
        <option value="RN">Rio Grande do Norte</option> 
        <option value="RO">Rondonia</option> 
        <option value="RS">Rio Grande do Sul</option> 
        <option value="RR">Roraima</option> 
        <option value="SC">Santa Catarina</option> 
        <option value="SE">Sergipe</option> 
        <option value="SP">São Paulo</option> 
        <option value="TO">Tocantins</option> 
      </select>
    </div>	
                    
    <div class="form-group">
      <label>Adicione um e-mail para contato</label>
      <input type="email" class="form-control" name="perg64" id="perg64" placeholder="Digite um e-mail valido">
    </div> 

    <div class="buttons">
      <button class="btn disabled">Anterior</button>
      <input type="submit" class="btn" name="proximo" value="Próximo"/>
    </div>  
  </form> 
@endsection