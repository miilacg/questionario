@extends('layoutAssay')

@section('title', 'Empresa')
@section('value', '37.5%')

@section('content')
  <form method="POST" action="#">
    {{ csrf_field() }}

    <div class="form-group"> 
      <label>Qual ramo da empresa que você trabalha?</label>
      <div class="form-check"> 
        <input class="form-check-input" type="radio" name="perg36" value="A" required/>Aeroespacial e defesa<br>
        <input class="form-check-input" type="radio" name="perg36" value="B"/>Automobilística<br>
        <input class="form-check-input" type="radio" name="perg36" value="C"/>Fundos de aposentatoria e pensão<br>
        <input class="form-check-input" type="radio" name="perg36" value="D"/>Industria farmacêutica<br>
        <input class="form-check-input" type="radio" name="perg36" value="E"/>Maquinas e equipamentos<br>
        <input class="form-check-input" type="radio" name="perg36" value="F"/>Organização sem fins lucrativos<br>
        <input class="form-check-input" type="radio" name="perg36" value="G"/>Setor público<br>
        <input class="form-check-input" type="radio" name="perg36" value="H"/>Serviços<br>
        <input class="form-check-input" type="radio" name="perg36" value="I"/>Tecnologia da informação<br>
        <input class="form-check-input" type="radio" name="perg36" value="J"/>Telecomunicações<br>
        <input class="form-check-input" type="radio" name="perg36" value="K"/>Outro
      </div>
    </div>

    <div class="form-group"> 
      <label>Quantas pessoas trabalham na empresa?</label>
      <div class="form-check"> 
        <input class="form-check-input" type="radio" name="perg37" value="A" required/>Menos de 10<br>
        <input class="form-check-input" type="radio" name="perg37" value="B"/>Entre 10 e 20<br>
        <input class="form-check-input" type="radio" name="perg37" value="C"/>Entre 21 e 35<br>
        <input class="form-check-input" type="radio" name="perg37" value="D"/>Entre 36 e 50<br>
        <input class="form-check-input" type="radio" name="perg37" value="E"/>Entre 51 e 100<br>
        <input class="form-check-input" type="radio" name="perg37" value="F"/>Mais de 100
      </div>
    </div>
             
    <div class="buttons">
      <a href="{{ route('professionalDataTecnico') }}">
        <input type="button" class="btn" value="Anterior"/>
      </a>
      <input type="submit" class="btn" name="proximo" value="Próximo"/>
    </div>       
  </form>
@endsection