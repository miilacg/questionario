@extends('layoutAssay')

@section('title', 'Lazer, saúde e cidadania')
@section('value', '75%')

@section('content')
  <form method="POST" action="#">
    {{ csrf_field() }}

    <div class="form-group"> 
      <label>Você fuma?</label>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="perg53" value="97" required/>Sim<br>
        <input class="form-check-input" type="radio" name="perg53" value="98"/>Não
      </div>
    </div>

    <div class="form-group"> 
      <label>Você faz algum trabalho voluntário?</label>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="perg54" value="97" required/>Sim<br>
        <input class="form-check-input" type="radio" name="perg54" value="98"/>Não
      </div>
    </div>

    <div class="form-group"> 
      <label>Qual a sua média de sono?</label>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="perg55" value="201" required/>Menos de 2 horas<br>
        <input class="form-check-input" type="radio" name="perg55" value="202"/>2 a 4 horas<br>
        <input class="form-check-input" type="radio" name="perg55" value="204"/>5 a 7 horas<br>
        <input class="form-check-input" type="radio" name="perg55" value="206"/>8 a 10 horas<br>
        <input class="form-check-input" type="radio" name="perg55" value="207"/>Mais de 10 horas
      </div> 
    </div>

    <div class="form-group"> 
      <label>Você pratica esporte?</label>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="perg56" value="97" onChange="abre57()" required/>Sim<br>
        <input class="form-check-input" type="radio" name="perg56" value="98" onChange="abre57()"/>Não
      </div> 
    </div>

    <div class="form-group"> 
      <div id="quarentaeoito" class="esconde">   
        <label>Marque os esportes que você pratica</label>
        <div class="form-check">
          <input class="form-check-input" type="checkbox" name="perg57_120" value="on"/>Atletismo<br>
          <input class="form-check-input" type="checkbox" name="perg57_121" value="on"/>Basquete<br>
          <input class="form-check-input" type="checkbox" name="perg57_122" value="on"/>Futebol<br>
          <input class="form-check-input" type="checkbox" name="perg57_123" value="on"/>Musculação<br>
          <input class="form-check-input" type="checkbox" name="perg57_124" value="on"/>Vôlei<br>             
          <input class="form-check-input" type="checkbox" name="perg57_115" value="on"/>Outros
        </div>
      </div>
    </div>
             
    <div class="buttons">
      <a href="{{ route('technologySuperior') }}">
        <input type="button" class="btn" value="Anterior"/>
      </a>
      <input type="submit" class="btn" name="proximo" value="Próximo"/>
    </div>
  </form>
@endsection