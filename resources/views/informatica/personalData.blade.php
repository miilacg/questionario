@extends('layoutAssay')

@section('title', 'Dados Pessoais')
@section('value', '0%')

@section('content')
  <form method="POST" action="#">
    {{ csrf_field() }}

    <div class="form-group">
      <label>Ano de nascimento:</label>
      <select class="form-control" id="perg1" name="perg1" required><br>
        <option value="">Escolha uma opção</option> 
        <option value="1">Antes de 1980</option>  
        <option value="3">1980</option> 
        <option value="4">1981</option> 
        <option value="5">1982</option> 
        <option value="6">1983</option> 
        <option value="7">1984</option> 
        <option value="8">1985</option> 
        <option value="9">1986</option>
        <option value="10">1987</option>
        <option value="11">1988</option>
        <option value="12">1989</option>
        <option value="13">1990</option> 
        <option value="14">1991</option> 
        <option value="15">1992</option> 
        <option value="16">1993</option> 
        <option value="17">1994</option> 
        <option value="18">1995</option> 
        <option value="19">1996</option> 
        <option value="20">1997</option> 
        <option value="21">1998</option> 
        <option value="22">1999</option> 
        <option value="23">2000</option> 
        <option value="24">2001</option>
        <option value="25">2002</option> 
      </select>
    </div>

    <div class="form-group">
      <label>Ano de ingresso no curso:</label>
      <select class="form-control" id="perg2" name="perg2" onChange="testeConclusao1(perg2, perg3)" required><br>
        <option value="">Escolha uma opção</option>
        <option value="35">2012</option>
        <option value="36">2013</option>
        <option value="37">2014</option>
        <option value="38">2015</option>
        <option value="39">2016</option>
        <option value="40">2017</option> 
      </select>
    </div>

    <div class="form-group">
      <label>Ano de conclusão do curso:</label>
      <select class="form-control" id="perg3" name="perg3" onChange="testeConclusao(perg2, perg3)" required><br>
        <option value="">Escolha uma opção</option>
        <option value="36">2013</option>
        <option value="37">2014</option>
        <option value="38">2015</option>
        <option value="39">2016</option>
        <option value="40">2017</option>
        <option value="41">2018</option> 
        <option value="42">2019</option>
        <option value="43">2020</option>
      </select>
    </div>

    <div class="form-group">
      <label>Estado civil</label>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="perg4" value="47" required/>Solteiro<br>
        <input class="form-check-input" type="radio" name="perg4" value="48"/>União Estável<br>
        <input class="form-check-input" type="radio" name="perg4" value="49"/>Casado<br>
        <input class="form-check-input" type="radio" name="perg4" value="50"/>Divorciado<br>
        <input class="form-check-input" type="radio" name="perg4" value="51"/>Viúvo
      </div>   
    </div>                      

    <div class="form-group">
      <label>Sexo</label>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="perg5" value="52" required/>Feminino<br>
        <input class="form-check-input" type="radio" name="perg5" value="53"/>Masculino<br>
        <input class="form-check-input" type="radio" name="perg5" value="55"/>Outro<br>
        <input class="form-check-input" type="radio" name="perg5" value="54"/>Prefiro não informar
      </div> 
    </div>
       
    <div class="form-group">
      <label>País onde mora:</label>
      <select class="form-control" id="perg6" name="perg6" onChange="abreEstado()" required><br>
        <option value="">Escolha uma opção</option>
        <option value="56">Brasil</option>
        <option value="57">Canadá</option>
        <option value="58">Espanha</option> 
        <option value="59">Estados Unidos</option>			 
        <option value="60">França</option>     			 
        <option value="61">Itália</option> 
        <option value="62">Portugal</option> 
        <option value="55">Outro</option> 
      </select>
    </div>

    <div id="estado7" class="estado form-group">
      <label>Estado onde mora:</label>
      <select class="form-control" id="perg7" name="perg7"> 
        <option value="">Escolha uma opção</option>
        <option value="63">Acre</option> 
        <option value="64">Alagoas</option> 
        <option value="65">Amazonas</option> 
        <option value="66">Amapá</option> 
        <option value="67">Bahia</option> 
        <option value="68">Ceará</option> 
        <option value="69">Distrito Federal</option> 
        <option value="70">Espírito Santo</option> 
        <option value="71">Goiás</option> 
        <option value="72">Maranhão</option> 
        <option value="73">Mato Grosso</option> 
        <option value="74">Mato Grosso do Sul</option> 
        <option value="75">Minas Gerais</option> 
        <option value="76">Pará</option> 
        <option value="77">Paraná</option> 
        <option value="78">Paraiba</option> 
        <option value="79">Pernambuco</option> 
        <option value="80">Piauí</option> 
        <option value="81">Rio de Janeiro</option> 
        <option value="82">Rio Grande do Norte</option> 
        <option value="83">Rio Grande do Sul</option> 
        <option value="84">Rondonia</option>         
        <option value="85">Roraima</option> 
        <option value="86">Santa Catarina</option> 
        <option value="87">Sergipe</option> 
        <option value="88">São Paulo</option> 
        <option value="89">Tocantins</option> 
      </select>
    </div>
                    
    <div class="form-group">
      <label>Adicione um e-mail para contato</label>
      <input type="email" class="form-control" name="perg75" id="perg75" placeholder="Digite um e-mail valido">
    </div> 

    <div class="buttons">
      <button class="btn disabled">Anterior</button>
      <input type="submit" class="btn" name="proximo" value="Próximo"/>
    </div>                
  </form>   
@endsection