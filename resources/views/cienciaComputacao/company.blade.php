@extends('layoutAssay')

@section('title', 'Empresa')
@section('value', '37.5%')

@section('content')
  <form method="POST" action="#">
    {{ csrf_field() }}

    <div class="form-group"> 
      <label>Qual ramo da empresa que você trabalha?</label>
      <div class="form-check"> 
        <input class="form-check-input" type="radio" name="perg45" value="A" required/>Aeroespacial e defesa<br>
        <input class="form-check-input" type="radio" name="perg45" value="B"/>Automobilística<br>
        <input class="form-check-input" type="radio" name="perg45" value="C"/>Fundos de aposentatoria e pensão<br>
        <input class="form-check-input" type="radio" name="perg45" value="D"/>Industria farmacêutica<br>
        <input class="form-check-input" type="radio" name="perg45" value="E"/>Maquinas e equipamentos<br>
        <input class="form-check-input" type="radio" name="perg45" value="F"/>Organização sem fins lucrativos<br>
        <input class="form-check-input" type="radio" name="perg45" value="G"/>Setor público<br>
        <input class="form-check-input" type="radio" name="perg45" value="H"/>Serviços<br>
        <input class="form-check-input" type="radio" name="perg45" value="I"/>Tecnologia da informação<br>
        <input class="form-check-input" type="radio" name="perg45" value="J"/>Telecomunicações<br>
        <input class="form-check-input" type="radio" name="perg45" value="K"/>Outro
      </div>
    </div>

    <div class="form-group"> 
      <label>Quantas pessoas trabalham na empresa?</label>
      <div class="form-check"> 
        <input class="form-check-input" type="radio" name="perg46" value="A" required/>Menos de 10<br>
        <input class="form-check-input" type="radio" name="perg46" value="B"/>Entre 10 e 30<br>
        <input class="form-check-input" type="radio" name="perg46" value="C"/>Entre 31 e 50<br>
        <input class="form-check-input" type="radio" name="perg46" value="D"/>Entre 51 e 100<br>
        <input class="form-check-input" type="radio" name="perg46" value="E"/>Mais de 100
      </div>
    </div>
             
    <div class="buttons">
      <a href="{{ route('professionalDataSuperior') }}">
        <input type="button" class="btn" value="Anterior"/>
      </a>
      <input type="submit" class="btn" name="proximo" value="Próximo"/>
    </div>       
  </form>
@endsection