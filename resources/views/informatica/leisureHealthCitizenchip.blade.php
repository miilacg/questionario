@extends('layoutAssay')

@section('title', 'Lazer, saúde e cidadania')
@section('value', '75%')

@section('content')
  <form method="POST" action="#">
    {{ csrf_field() }}

    <div class="form-group"> 
      <label>Você fuma?</label>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="perg44" value="A" required/>Sim<br>
        <input class="form-check-input" type="radio" name="perg44" value="B"/>Não
      </div>
    </div>

    <div class="form-group"> 
      <label>Você faz algum trabalho voluntário?</label>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="perg45" value="A" required/>Sim<br>
        <input class="form-check-input" type="radio" name="perg45" value="B"/>Não
      </div>
    </div>

    <div class="form-group"> 
      <label>Qual a sua média de sono?</label>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="perg46" value="A" required/>Menos de 2 horas<br>
        <input class="form-check-input" type="radio" name="perg46" value="B"/>2 a 4 horas<br>
        <input class="form-check-input" type="radio" name="perg46" value="C"/>4 a 6 horas<br>
        <input class="form-check-input" type="radio" name="perg46" value="D"/>6 a 8 horas<br>
        <input class="form-check-input" type="radio" name="perg46" value="E"/>8 a 10 horas<br>
        <input class="form-check-input" type="radio" name="perg46" value="F"/>Mais de 10 horas
      </div> 
    </div>

    <div class="form-group"> 
      <label>Você pratica esporte?</label>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="perg47" value="A" onChange="abre48()" required/>Sim<br>
        <input class="form-check-input" type="radio" name="perg47" value="B" onChange = "abre48()"/>Não
      </div> 
    </div>

    <div class="form-group"> 
      <div id="quarentaeoito" class="esconde">   
        <label>Marque os esportes que você pratica</label>
        <div class="form-check">
          <input class="form-check-input" type="checkbox" name="48A" value="on"/>Atletismo<br>
          <input class="form-check-input" type="checkbox" name="48B" value="on"/>Basquete<br>
          <input class="form-check-input" type="checkbox" name="48C" value="on"/>Futebol<br>
          <input class="form-check-input" type="checkbox" name="48D" value="on"/>Musculação<br>
          <input class="form-check-input" type="checkbox" name="48E" value="on"/>Vôlei<br>             
          <input class="form-check-input" type="checkbox" name="48F" value="on"/>Outro
        </div>
      </div>
    </div>
             
    <div class="buttons">
      <a href="{{ route('technologyTecnico') }}">
        <input type="button" class="btn" value="Anterior"/>
      </a>
      <input type="submit" class="btn" name="proximo" value="Próximo"/>
    </div>       
  </form>
@endsection