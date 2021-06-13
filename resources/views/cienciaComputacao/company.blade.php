@extends('layoutAssay')

@section('title', 'Empresa')
@section('value', '37.5%')

@section('content')
  <form method="POST" action="#">
    {{ csrf_field() }}

    <div class="form-group"> 
      <label>Qual o ramo da empresa que você trabalha?</label>
      <div class="form-check"> 
        <input class="form-check-input" type="radio" name="perg45" value="178" required/>Aeroespacial e defesa<br>
        <input class="form-check-input" type="radio" name="perg45" value="179"/>Automobilística<br>
        <input class="form-check-input" type="radio" name="perg45" value="180"/>Fundos de aposentatoria e pensão<br>
        <input class="form-check-input" type="radio" name="perg45" value="181"/>Industria farmacêutica<br>
        <input class="form-check-input" type="radio" name="perg45" value="182"/>Maquinas e equipamentos<br>
        <input class="form-check-input" type="radio" name="perg45" value="183"/>Organização sem fins lucrativos<br>
        <input class="form-check-input" type="radio" name="perg45" value="184"/>Serviços<br>
        <input class="form-check-input" type="radio" name="perg45" value="185"/>Setor público<br>
        <input class="form-check-input" type="radio" name="perg45" value="186"/>Tecnologia da informação<br>
        <input class="form-check-input" type="radio" name="perg45" value="146"/>Telecomunicações<br>
        <input class="form-check-input" type="radio" name="perg45" value="55"/>Outro
      </div>
    </div>

    <div class="form-group"> 
      <label>Quantas pessoas trabalham na empresa?</label>
      <div class="form-check"> 
        <input class="form-check-input" type="radio" name="perg46" value="187" required/>Menos de 10<br>
        <input class="form-check-input" type="radio" name="perg46" value="189"/>Entre 10 e 30<br>
        <input class="form-check-input" type="radio" name="perg46" value="191"/>Entre 31 e 50<br>
        <input class="form-check-input" type="radio" name="perg46" value="193"/>Entre 51 e 100<br>
        <input class="form-check-input" type="radio" name="perg46" value="194"/>Mais de 100
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