@extends('layoutAssay')

@section('title', 'Tecnologia')
@section('value', '62.5%')

@section('content')
  <form method="POST" action="#">
    {{ csrf_field() }}

    <div class="form-group">
      <label>Com qual frequência você utiliza as seguintes linguagens de programação no seu trabalho?</label>
      <label class="subtitle">(Utilize o lado mais a esquerda para pouca utilizada e o mais a direita para muita utilizada)</label>
      <div class="slider-wrapper" id="q50">
        Java<br>
        <input type="range" list="tickmarks" name="50A" min="1" max="5"> 
        <datalist id="tickmarks">
          <option value="1">
          <option value="2">
          <option value="3">
          <option value="4">
          <option value="5">
        </datalist><br>

        JavaScript<br>
        <input type="range" list="tickmarks" name="50B" min="1" max="5"> 
        <datalist id="tickmarks">
          <option value="1">
          <option value="2">
          <option value="3">
          <option value="4">
          <option value="5">
        </datalist><br>
                
        Python<br>
        <input type="range" list="tickmarks" name="50C" min="1" max="5"/>
        <datalist id="tickmarks">
          <option value="1">
          <option value="2">
          <option value="3">
          <option value="4">
          <option value="5">
        </datalist><br>
                
        C<br>
        <input type="range" list="tickmarks" name="50D" min="1" max="5"/>
        <datalist id="tickmarks">
          <option value="1">
          <option value="2">
          <option value="3">
          <option value="4">
          <option value="5">
        </datalist><br>
                
        C++<br>
        <input type="range" list="tickmarks" name="50E" min="1" max="5"/> 
        <datalist id="tickmarks">
          <option value="1">
          <option value="2">
          <option value="3">
          <option value="4">
          <option value="5">
        </datalist><br>
        
        C#<br>
        <input type="range" list="tickmarks" name="50F" min="1" max="5"/>
        <datalist id="tickmarks">
          <option value="1">
          <option value="2">
          <option value="3">
          <option value="4">
          <option value="5">
        </datalist><br>
                
        Ruby<br>
        <input type="range" list="tickmarks" name="50G" min="1" max="5"/>
        <datalist id="tickmarks">
          <option value="1">
          <option value="2">
          <option value="3">
          <option value="4">
          <option value="5">
        </datalist><br>
        
        PHP<br>
        <input type="range" list="tickmarks" name="50H" min="1" max="5"/>
        <datalist id="tickmarks">
          <option value="1">
          <option value="2">
          <option value="3">
          <option value="4">
          <option value="5">
        </datalist><br>
                
        R<br>
        <input type="range" list="tickmarks" name="50I" min="1" max="5"/>
        <datalist id="tickmarks">
          <option value="1">
          <option value="2">
          <option value="3">
          <option value="4">
          <option value="5">
        </datalist><br>
        
        Objective-C<br>
        <input type="range" list="tickmarks" name="50J" min="1" max="5"/> 
        <datalist id="tickmarks">
          <option value="1">
          <option value="2">
          <option value="3">
          <option value="4">
          <option value="5">
        </datalist><br>
                
        Kotlin<br>
        <input type="range" list="tickmarks" name="50K" min="1" max="5"/>
        <datalist id="tickmarks">
          <option value="1">
          <option value="2">
          <option value="3">
          <option value="4">
          <option value="5">
        </datalist><br>
        
        Delphi<br>
        <input type="range" list="tickmarks" name="50L" min="1" max="5"/>
        <datalist id="tickmarks">
          <option value="1">
          <option value="2">
          <option value="3">
          <option value="4">
          <option value="5">
        </datalist><br>
        
        TypeScript<br>
        <input type="range" list="tickmarks" name="50M" min="1" max="5"/>
        <datalist id="tickmarks">
          <option value="1">
          <option value="2">
          <option value="3">
          <option value="4">
          <option value="5">
        </datalist><br>
                
        Go<br>
        <input type="range" list="tickmarks" name="50N" min="1" max="5"/>
        <datalist id="tickmarks">
          <option value="1">
          <option value="2">
          <option value="3">
          <option value="4">
          <option value="5">
        </datalist><br>
        
        ASP<br>
        <input type="range" list="tickmarks" name="50O" min="1" max="5"/>
        <datalist id="tickmarks">
          <option value="1">
          <option value="2">
          <option value="3">
          <option value="4">
          <option value="5">
        </datalist><br>
        
        Pascal<br>
        <input type="range" list="tickmarks" name="50P" min="1" max="5"/>
        <datalist id="tickmarks">
          <option value="1">
          <option value="2">
          <option value="3">
          <option value="4">
          <option value="5">
        </datalist><br>
                
        Visul Basic<br><input type="range" list="tickmarks" name="50Q" min="1" max="5"/>
        <datalist id="tickmarks">
          <option value="1">
          <option value="2">
          <option value="3">
          <option value="4">
          <option value="5">
        </datalist><br>
        
        .Net<br>
        <input type="range" list="tickmarks" name="50R" min="1" max="5"/>
        <datalist id="tickmarks">
          <option value="1">
          <option value="2">
          <option value="3">
          <option value="4">
          <option value="5">
        </datalist><br>
        
        Assembly<br>
        <input type="range" list="tickmarks" name="50S" min="1" max="5"/> 
        <datalist id="tickmarks">
          <option value="1">
          <option value="2">
          <option value="3">
          <option value="4">
          <option value="5">
        </datalist><br>
        
        Cobol<br>
        <input type="range" list="tickmarks" name="50T" min="1" max="5"/> 
        <datalist id="tickmarks">
          <option value="1">
          <option value="2">
          <option value="3">
          <option value="4">
          <option value="5">
        </datalist><br>
        
        ML<br>
        <input type="range" list="tickmarks" name="50U" min="1" max="5"/> 
        <datalist id="tickmarks">
          <option value="1">
          <option value="2">
          <option value="3">
          <option value="4">
          <option value="5">
        </datalist><br>
                
        Verilog<br>
        <input type="range" list="tickmarks" name="50V" min="1" max="5"/> 
        <datalist id="tickmarks">
          <option value="1">
          <option value="2">
          <option value="3">
          <option value="4">
          <option value="5">
        </datalist><br>
        
        Outras<br>
        <input type="range" list="tickmarks" name="50W" min="1" max="5"/>
        <datalist id="tickmarks">
          <option value="1">
          <option value="2">
          <option value="3">
          <option value="4">
          <option value="5">
        </datalist><br>
      </div>
    </div>

    <div class="form-group">
      <label>Com qual frequência você utiliza os seguintes SGBD no seu trabalho?</label>
      <label class="subtitle">(Utilize o lado mais a esquerda para pouco utilizado e o mais a direita para muito utilizado)</label>
      <div class="slider-wrapper" id="q51">
        Mysql<br>
        <input type="range" list="tickmarks" name="51A" min="1" max="5"/> 
        <datalist id="tickmarks">
          <option value="1">
          <option value="2">
          <option value="3">
          <option value="4">
          <option value="5">
        </datalist><br>
                
        Oracle<br>
        <input type="range" list="tickmarks" name="51B" min="1" max="5"/> 
        <datalist id="tickmarks">
          <option value="1">
          <option value="2">
          <option value="3">
          <option value="4">
          <option value="5">
        </datalist><br>
        
        Microsoft Sql Server<br>
        <input type="range" list="tickmarks" name="51C" min="1" max="5"/>
        <datalist id="tickmarks">
          <option value="1">
          <option value="2">
          <option value="3">
          <option value="4">
          <option value="5">
        </datalist><br>
                  
        PostgreSQL<br>
        <input type="range" list="tickmarks" name="51D" min="1" max="5"/> 
        <datalist id="tickmarks">
          <option value="1">
          <option value="2">
          <option value="3">
          <option value="4">
          <option value="5">
        </datalist><br>
        
        MongoDB<br>
        <input type="range" list="tickmarks" name="51E" min="1" max="5"/> 
        <datalist id="tickmarks">
          <option value="1">
          <option value="2">
          <option value="3">
          <option value="4">
          <option value="5">
        </datalist><br>
        
        Db2<br>
        <input type="range" list="tickmarks" name="51F" min="1" max="5"/>
        <datalist id="tickmarks">
          <option value="1">
          <option value="2">
          <option value="3">
          <option value="4">
          <option value="5">
        </datalist><br>
        
        Microsoft Acces<br>
        <input type="range" list="tickmarks" name="51G" min="1" max="5"/>
        <datalist id="tickmarks">
          <option value="1">
          <option value="2">
          <option value="3">
          <option value="4">
          <option value="5">
        </datalist><br>
        
        Teradata<br>
        <input type="range" list="tickmarks" name="51H" min="1" max="5"/> 
        <datalist id="tickmarks">
          <option value="1">
          <option value="2">
          <option value="3">
          <option value="4">
          <option value="5">
        </datalist><br>
        
        Paradx<br>
        <input type="range" list="tickmarks" name="51I" min="1" max="5"/> 	
        <datalist id="tickmarks">
          <option value="1">
          <option value="2">
          <option value="3">
          <option value="4">
          <option value="5">
        </datalist><br>
                
        Cache<br>
        <input type="range" list="tickmarks" name="51J" min="1" max="5"/> 	
        <datalist id="tickmarks">
          <option value="1">
          <option value="2">
          <option value="3">
          <option value="4">
          <option value="5">
        </datalist><br>
        
        Outros<br>
        <input type="range" list="tickmarks" name="51K" min="1" max="5"/>
        <datalist id="tickmarks">
          <option value="1">
          <option value="2">
          <option value="3">
          <option value="4">
          <option value="5">
        </datalist><br>
      </div>
    </div>

    <div class="form-group">
      <label>Com qual frequência você utiliza os seguintes sistemas operacionais no seu trabalho?</label>
      <label class="subtitle">(Utilize o lado mais a esquerda para pouco utilizado e o mais a direita para muito utilizado)</label>
      <div class="slider-wrapper" id="q52">
        Windows<br>
        <input type="range" list="tickmarks" name="52A" min="1" max="5"/> 
        <datalist id="tickmarks">
          <option value="1">
          <option value="2">
          <option value="3">
          <option value="4">
          <option value="5">
        </datalist><br>
                
        Linux<br>
        <input type="range" list="tickmarks" name="52B" min="1" max="5"/> 
        <datalist id="tickmarks">
          <option value="1">
          <option value="2">
          <option value="3">
          <option value="4">
          <option value="5">
        </datalist><br>
        
        MacOS<br>
        <input type="range" list="tickmarks" name="52C" min="1" max="5"/> 
        <datalist id="tickmarks">
          <option value="1">
          <option value="2">
          <option value="3">
          <option value="4">
          <option value="5">
        </datalist><br>
        
        Netware<br>
        <input type="range" list="tickmarks" name="52D" min="1" max="5"/> 
        <datalist id="tickmarks">
          <option value="1">
          <option value="2">
          <option value="3">
          <option value="4">
          <option value="5">
        </datalist><br>
                
        Unix<br>
        <input type="range" list="tickmarks" name="52E" min="1" max="5"/>
        <datalist id="tickmarks">
          <option value="1">
          <option value="2">
          <option value="3">
          <option value="4">
          <option value="5">
        </datalist><br>
        
        Outros<br>
        <input type="range" list="tickmarks" name="52F" min="1" max="5"/>
        <datalist id="tickmarks">
          <option value="1">
          <option value="2">
          <option value="3">
          <option value="4">
          <option value="5">
        </datalist><br>
      </div>
    </div>

    <div class="buttons">
      <a href="{{ route('laborMarketSuperior') }}">
        <input type="button" class="btn" value="Anterior"/>
      </a>
      <input type="submit" class="btn" name="proximo" value="Próximo"/>
    </div> 
	</form>
@endsection