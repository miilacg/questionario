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
        .Net<br>
        <input type="range" list="tickmarks" name="perg50_83" min="1" max="5"/>
        <datalist id="tickmarks">
          <option value="117">
          <option value="118">
          <option value="119">
          <option value="126">
          <option value="127">
        </datalist><br>
        
        ASP<br>
        <input type="range" list="tickmarks" name="perg50_84" min="1" max="5"/>
        <datalist id="tickmarks">
          <option value="117">
          <option value="118">
          <option value="119">
          <option value="126">
          <option value="127">
        </datalist><br>
       
        Assembly<br>
        <input type="range" list="tickmarks" name="perg50_85" min="1" max="5"/> 
        <datalist id="tickmarks">
          <option value="117">
          <option value="118">
          <option value="119">
          <option value="126">
          <option value="127">
        </datalist><br>
       
        C<br>
        <input type="range" list="tickmarks" name="perg50_86" min="1" max="5"/>
        <datalist id="tickmarks">
          <option value="117">
          <option value="118">
          <option value="119">
          <option value="126">
          <option value="127">
        </datalist><br>

        C++<br>
        <input type="range" list="tickmarks" name="perg50_87" min="1" max="5"/> 
        <datalist id="tickmarks">
          <option value="117">
          <option value="118">
          <option value="119">
          <option value="126">
          <option value="127">
        </datalist><br>
        
        C#<br>
        <input type="range" list="tickmarks" name="perg50_88" min="1" max="5"/>
        <datalist id="tickmarks">
          <option value="117">
          <option value="118">
          <option value="119">
          <option value="126">
          <option value="127">
        </datalist><br>
 
        Cobol<br>
        <input type="range" list="tickmarks" name="perg50_89" min="1" max="5"/> 
        <datalist id="tickmarks">
          <option value="117">
          <option value="118">
          <option value="119">
          <option value="126">
          <option value="127">
        </datalist><br>

        Delphi<br>
        <input type="range" list="tickmarks" name="perg50_90" min="1" max="5"/>
        <datalist id="tickmarks">
          <option value="117">
          <option value="118">
          <option value="119">
          <option value="126">
          <option value="127">
        </datalist><br>
        
        Go<br>
        <input type="range" list="tickmarks" name="perg50_91" min="1" max="5"/>
        <datalist id="tickmarks">
          <option value="117">
          <option value="118">
          <option value="119">
          <option value="126">
          <option value="127">
        </datalist><br>
        
        Java<br>
        <input type="range" list="tickmarks" name="perg50_92" min="1" max="5"> 
        <datalist id="tickmarks">
          <option value="117">
          <option value="118">
          <option value="119">
          <option value="126">
          <option value="127">
        </datalist><br>

        JavaScript<br>
        <input type="range" list="tickmarks" name="perg50_93" min="1" max="5"> 
        <datalist id="tickmarks">
          <option value="117">
          <option value="118">
          <option value="119">
          <option value="126">
          <option value="127">
        </datalist><br>
                
        Kotlin<br>
        <input type="range" list="tickmarks" name="perg50_94" min="1" max="5"/>
        <datalist id="tickmarks">
          <option value="117">
          <option value="118">
          <option value="119">
          <option value="126">
          <option value="127">
        </datalist><br>

        ML<br>
        <input type="range" list="tickmarks" name="perg50_95" min="1" max="5"/> 
        <datalist id="tickmarks">
          <option value="117">
          <option value="118">
          <option value="119">
          <option value="126">
          <option value="127">
        </datalist><br>

        Objective-C<br>
        <input type="range" list="tickmarks" name="perg50_96" min="1" max="5"/> 
        <datalist id="tickmarks">
          <option value="117">
          <option value="118">
          <option value="119">
          <option value="126">
          <option value="127">
        </datalist><br>
                
        Pascal<br>
        <input type="range" list="tickmarks" name="perg50_97" min="1" max="5"/>
        <datalist id="tickmarks">
          <option value="117">
          <option value="118">
          <option value="119">
          <option value="126">
          <option value="127">
        </datalist><br>

        PHP<br>
        <input type="range" list="tickmarks" name="perg50_98" min="1" max="5"/>
        <datalist id="tickmarks">
          <option value="117">
          <option value="118">
          <option value="119">
          <option value="126">
          <option value="127">
        </datalist><br>

        Python<br>
        <input type="range" list="tickmarks" name="perg50_99" min="1" max="5"/>
        <datalist id="tickmarks">
          <option value="117">
          <option value="118">
          <option value="119">
          <option value="126">
          <option value="127">
        </datalist><br>
                
        R<br>
        <input type="range" list="tickmarks" name="perg50_100" min="1" max="5"/>
        <datalist id="tickmarks">
          <option value="117">
          <option value="118">
          <option value="119">
          <option value="126">
          <option value="127">
        </datalist><br>

        Ruby<br>
        <input type="range" list="tickmarks" name="perg50_101" min="1" max="5"/>
        <datalist id="tickmarks">
          <option value="117">
          <option value="118">
          <option value="119">
          <option value="126">
          <option value="127">
        </datalist><br>
                   
        TypeScript<br>
        <input type="range" list="tickmarks" name="perg50_102" min="1" max="5"/>
        <datalist id="tickmarks">
          <option value="117">
          <option value="118">
          <option value="119">
          <option value="126">
          <option value="127">
        </datalist><br>
                       
        Visul Basic<br>
        <input type="range" list="tickmarks" name="perg50_103" min="1" max="5"/>
        <datalist id="tickmarks">
          <option value="117">
          <option value="118">
          <option value="119">
          <option value="126">
          <option value="127">
        </datalist><br>
                
        Verilog<br>
        <input type="range" list="tickmarks" name="perg50_104" min="1" max="5"/> 
        <datalist id="tickmarks">
          <option value="117">
          <option value="118">
          <option value="119">
          <option value="126">
          <option value="127">
        </datalist><br>
        
        Outras<br>
        <input type="range" list="tickmarks" name="perg50_9" min="1" max="5"/>
        <datalist id="tickmarks">
          <option value="117">
          <option value="118">
          <option value="119">
          <option value="126">
          <option value="127">
        </datalist><br>
      </div>
    </div>

    <div class="form-group">
      <label>Com qual frequência você utiliza os seguintes SGBD no seu trabalho?</label>
      <label class="subtitle">(Utilize o lado mais a esquerda para pouco utilizado e o mais a direita para muito utilizado)</label>
      <div class="slider-wrapper" id="q51">
        Db2<br>
        <input type="range" list="tickmarks" name="perg51_105" min="1" max="5"/>
        <datalist id="tickmarks">
          <option value="117">
          <option value="118">
          <option value="119">
          <option value="126">
          <option value="127">
        </datalist><br>
        
        Cache<br>
        <input type="range" list="tickmarks" name="perg51_106" min="1" max="5"/> 	
        <datalist id="tickmarks">
          <option value="117">
          <option value="118">
          <option value="119">
          <option value="126">
          <option value="127">
        </datalist><br>
 
        Microsoft Acces<br>
        <input type="range" list="tickmarks" name="perg51_107" min="1" max="5"/>
        <datalist id="tickmarks">
          <option value="117">
          <option value="118">
          <option value="119">
          <option value="126">
          <option value="127">
        </datalist><br>

        Microsoft Sql Server<br>
        <input type="range" list="tickmarks" name="perg51_108" min="1" max="5"/>
        <datalist id="tickmarks">
          <option value="117">
          <option value="118">
          <option value="119">
          <option value="126">
          <option value="127">
        </datalist><br>

        MongoDB<br>
        <input type="range" list="tickmarks" name="perg51_109" min="1" max="5"/> 
        <datalist id="tickmarks">
          <option value="117">
          <option value="118">
          <option value="119">
          <option value="126">
          <option value="127">
        </datalist><br>

        Mysql<br>
        <input type="range" list="tickmarks" name="perg51_110" min="1" max="5"/> 
        <datalist id="tickmarks">
          <option value="117">
          <option value="118">
          <option value="119">
          <option value="126">
          <option value="127">
        </datalist><br>
                
        Oracle<br>
        <input type="range" list="tickmarks" name="perg51_111" min="1" max="5"/> 
        <datalist id="tickmarks">
          <option value="117">
          <option value="118">
          <option value="119">
          <option value="126">
          <option value="127">
        </datalist><br>
        
        Paradx<br>
        <input type="range" list="tickmarks" name="perg51_112" min="1" max="5"/> 	
        <datalist id="tickmarks">
          <option value="117">
          <option value="118">
          <option value="119">
          <option value="126">
          <option value="127">
        </datalist><br>

        PostgreSQL<br>
        <input type="range" list="tickmarks" name="perg51_113" min="1" max="5"/> 
        <datalist id="tickmarks">
          <option value="117">
          <option value="118">
          <option value="119">
          <option value="126">
          <option value="127">
        </datalist><br>
                 
        Teradata<br>
        <input type="range" list="tickmarks" name="perg51_114" min="1" max="5"/> 
        <datalist id="tickmarks">
          <option value="117">
          <option value="118">
          <option value="119">
          <option value="126">
          <option value="127">
        </datalist><br>
          
        Outros<br>
        <input type="range" list="tickmarks" name="perg51_115" min="1" max="5"/>
        <datalist id="tickmarks">
          <option value="117">
          <option value="118">
          <option value="119">
          <option value="126">
          <option value="127">
        </datalist><br>
      </div>
    </div>

    <div class="form-group">
      <label>Com qual frequência você utiliza os seguintes sistemas operacionais no seu trabalho?</label>
      <label class="subtitle">(Utilize o lado mais a esquerda para pouco utilizado e o mais a direita para muito utilizado)</label>
      <div class="slider-wrapper" id="q52">
        Linux<br>
        <input type="range" list="tickmarks" name="perg52_116" min="1" max="5"/> 
        <datalist id="tickmarks">
          <option value="117">
          <option value="118">
          <option value="119">
          <option value="126">
          <option value="127">
        </datalist><br>
        
        MacOS<br>
        <input type="range" list="tickmarks" name="perg52_117" min="1" max="5"/> 
        <datalist id="tickmarks">
          <option value="117">
          <option value="118">
          <option value="119">
          <option value="126">
          <option value="127">
        </datalist><br>
        
        Netware<br>
        <input type="range" list="tickmarks" name="perg52_118" min="1" max="5"/> 
        <datalist id="tickmarks">
          <option value="117">
          <option value="118">
          <option value="119">
          <option value="126">
          <option value="127">
        </datalist><br>
        
        Windows<br>
        <input type="range" list="tickmarks" name="perg52_119" min="1" max="5"/> 
        <datalist id="tickmarks">
          <option value="117">
          <option value="118">
          <option value="119">
          <option value="126">
          <option value="127">
        </datalist><br>
        
        Outros<br>
        <input type="range" list="tickmarks" name="perg52_115" min="1" max="5"/>
        <datalist id="tickmarks">
          <option value="117">
          <option value="118">
          <option value="119">
          <option value="126">
          <option value="127">
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