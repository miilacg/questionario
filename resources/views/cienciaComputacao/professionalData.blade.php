@extends('layoutAssay')

@section('title', 'Dados profissionais')
@section('value', '25%')

@section('content')
  <form method="POST" action="#">
    {{ csrf_field() }}	

    <div class="form-group">         
      <label>Você já trabalhou?</label>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="perg32" value="A" onChange="abre32();" required/>Sim<br>
        <input class="form-check-input" type="radio" name="perg32" value="B" onChange="abre32();"/>Não
      </div>   
    </div>  
                          
    <div id="trintaetres" class="esconde">
      <div class="form-group">
        <label>Quando foi o inicio da sua atividade profissional?</label>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="perg33" id="perg33" value="A"/>Antes da graduação<br>
          <input class="form-check-input" type="radio" name="perg33" id="perg33" value="B"/>Durante a formação<br>
          <input class="form-check-input" type="radio" name="perg33" id="perg33" value="C"/>Até um ano depois da formatura<br>
          <input class="form-check-input" type="radio" name="perg33" id="perg33" value="D"/>1 a 3 anos depois da formatura<br>
          <input class="form-check-input" type="radio" name="perg33" id="perg33" value="E"/>Mais de 3 anos depois da formatura
        </div> 
      </div>   
      
      <div class="form-group">                            
        <label>Como obteve seu primeiro emprego?</label>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="perg34" id="perg34" value="A"/>Abriu uma empresa<br>
          <input class="form-check-input" type="radio" name="perg34" id="perg34" value="B"/>Enviou currículo e foi selecionado<br>
          <input class="form-check-input" type="radio" name="perg34" id="perg34" value="C"/>Fez estágio e foi admitido ao término do mesmo<br>
          <input class="form-check-input" type="radio" name="perg34" id="perg34" value="D"/>Indicação de um amigo<br>
          <input class="form-check-input" type="radio" name="perg34" id="perg34" value="E"/>Indicação de um professor<br>                     
          <input class="form-check-input" type="radio" name="perg34" id="perg34" value="F"/>Outro
        </div>  
      </div>
    
      <div class="form-group">
        <label>Você está trabalhando?</label>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="perg35" id="perg35" value="A" onChange="abre35();"/>Sim<br>
          <input class="form-check-input" type="radio" name="perg35" id="perg35" value="B" onChange="abre35();"/>Não
        </div>    
      </div>                        
    </div>		

    <div id="trintaeseis" class="esconde">
      <div class="form-group">
        <label>Qual o seu vínculo empregatício?</label>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="perg36" id="perg36" value="A"/>Autônomo<br>
          <input class="form-check-input" type="radio" name="perg36" id="perg36" value="B"/>Emprego com carteira assinada<br>                
          <input class="form-check-input" type="radio" name="perg36" id="perg36" value="C"/>Empregado sem carteira assinada<br>
          <input class="form-check-input" type="radio" name="perg36" id="perg36" value="D"/>Empregador<br>  
          <input class="form-check-input" type="radio" name="perg36" id="perg36" value="E"/>Outro
        </div>  
      </div>   
      
      <div class="form-group">
        <label>Qual a área que você atua?</label>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="perg37" id="perg37" value="A"/>Informática/ Sistemas/ Tecnologia<br>
          <input class="form-check-input" type="radio" name="perg37" id="perg37" value="B"/>Planejamento/ Desenvolvimento/ Análise<br>
          <input class="form-check-input" type="radio" name="perg37" id="perg37" value="C"/>Industrial/ Produção/ Manutenção<br>
          <input class="form-check-input" type="radio" name="perg37" id="perg37" value="D"/>Acadêmica<br>
          <input class="form-check-input" type="radio" name="perg37" id="perg37" value="E"/>Administração<br> 
          <input class="form-check-input" type="radio" name="perg37" id="perg37" value="F"/>Comercial/ Vendas<br>
          <input class="form-check-input" type="radio" name="perg37" id="perg37" value="G"/>Consultoria<br>
          <input class="form-check-input" type="radio" name="perg37" id="perg37" value="H"/>Jurídica/ Legal<br>
          <input class="form-check-input" type="radio" name="perg37" id="perg37" value="I"/>Presidência/ Diretoria/ Gerência Geral<br> 
          <input class="form-check-input" type="radio" name="perg37" id="perg37" value="J"/>Telecomunicações<br>
          <input class="form-check-input" type="radio" name="perg37" id="perg37" value="K"/>Outro
        </div>   
      </div>                         

      <div class="form-group">
        <label>A função que você exerce está alinhada a área de ciência da computação?</label>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="perg38" id="perg38" value="A" onChange="abre38();">Sim<br>
          <input class="form-check-input" type="radio" name="perg38" id="perg38" value="B" onChange="abre38();"/>Não
        </div>   
      </div>                         
    </div>			

    <div id="trintaenove" class="esconde">
      <div class="form-group">
        <label>Qual o cargo você ocupa?</label>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="perg39" id="perg39" value="A"/>Acadêmico<br>
          <input class="form-check-input" type="radio" name="perg39" id="perg39" value="B"/>Administrador de banco de dados<br>
          <input class="form-check-input" type="radio" name="perg39" id="perg39" value="C"/>Administrador de redes<br>
          <input class="form-check-input" type="radio" name="perg39" id="perg39" value="D"/>Analista de sistemas<br>
          <input class="form-check-input" type="radio" name="perg39" id="perg39" value="E"/>Coordenador de projetos<br>
          <input class="form-check-input" type="radio" name="perg39" id="perg39" value="F"/>Diretor<br>
          <input class="form-check-input" type="radio" name="perg39" id="perg39" value="G"/>Gerente<br>
          <input class="form-check-input" type="radio" name="perg39" id="perg39" value="H"/>Programador<br>
          <input class="form-check-input" type="radio" name="perg39" id="perg39" value="I"/>Sócio/ Proprietário<br>            
          <input class="form-check-input" type="radio" name="perg39" id="perg39" value="J"/>Outro
        </div>    
      </div>   
      
      <div class="form-group">
        <label>Quantas horas você trabalha por semana?</label>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="perg40" id="perg40" value="A"/>Menos de 40<br>
          <input class="form-check-input" type="radio" name="perg40" id="perg40" value="B"/>Entre 40 e 44<br>
          <input class="form-check-input" type="radio" name="perg40" id="perg40" value="C"/>Entre 45 e 48<br>
          <input class="form-check-input" type="radio" name="perg40" id="perg40" value="D"/>Mais de 48
        </div>   
      </div>                         

      <div class="form-group">
        <label>Qual a faixa salarial?</label>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="perg41" id="perg41" value="A"/>Menos de R$2000,00<br>
          <input class="form-check-input" type="radio" name="perg41" id="perg41" value="B"/>Entre R$2000,00 e R$5000,00<br>
          <input class="form-check-input" type="radio" name="perg41" id="perg41" value="C"/>Entre R$5001,00 e R$8000,00<br>
          <input class="form-check-input" type="radio" name="perg41" id="perg41" value="D"/>Entre R$8001,00 e R$12000,00<br>  
          <input class="form-check-input" type="radio" name="perg41" id="perg41" value="E"/>Mais de R$12000,00
        </div>  
      </div>                          

      <div class="form-group">
        <label>Avalie como foram as dificuldades que você encontrou na profissão</label>
        <label class="subtitle">(Utilize o lado mais a esquerda para pouca dificuldade e o mais a direita para muita dificuldade)</label>               
        <div class="slider-wrapper" id="q42">
          Apresentação em público<br>
          <input type="range" list="tickmarks" name="perg42A" id="perg42" min="1" max="5"/> 
          <datalist id="tickmarks">
            <option value="1">
            <option value="2">
            <option value="3">
            <option value="4">
            <option value="5">
          </datalist><br>
          
          Falta de cursos relacionados a área<br>
          <input type="range" list="tickmarks" name="perg42B" id="perg42" min="1" max="5"/> 
          <datalist id="tickmarks">
            <option value="1">
            <option value="2">
            <option value="3">
            <option value="4">
            <option value="5">
          </datalist><br>
            
          Fluência em línguas estrangeiras<br>
          <input type="range" list="tickmarks" name="perg42C" id="perg42" min="1" max="5"/> 
          <datalist id="tickmarks">
            <option value="1">
            <option value="2">
            <option value="3">
            <option value="4">
            <option value="5">
          </datalist><br>
            
          Motivação da equipe<br>
          <input type="range" list="tickmarks" name="perg42D" id="perg42" min="1" max="5"/>   
          <datalist id="tickmarks">
            <option value="1">
            <option value="2">
            <option value="3">
            <option value="4">
            <option value="5">
          </datalist><br>
          
          Outras<br>
          <input type="range" list="tickmarks" name="perg42E" id="perg42" min="1" max="5"/>
          <datalist id="tickmarks">
            <option value="1">
            <option value="2">
            <option value="3">
            <option value="4">
            <option value="5">
          </datalist><br>    
        </div>
      </div>
    </div>	

    <div id="quarentaetres" class="form-group esconde1"> 
      <label>Qual o principal motivo para você não atuar na área da computação?</label>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="perg43" id="perg43" value="A"/>Falta de perpectiva de carreira<br>         
        <input class="form-check-input" type="radio" name="perg43" id="perg43" value="B"/>Mercado de trabalho atual saturado<br>
        <input class="form-check-input" type="radio" name="perg43" id="perg43" value="C"/>Melhor oportunidade em outra profissão<br>
        <input class="form-check-input" type="radio" name="perg43" id="perg43" value="D"/>Trabalho na área da minha segunda formação<br>  
        <input class="form-check-input" type="radio" name="perg43" id="perg43" value="E"/>Outros
      </div>                            
    </div>

    <div id="quarentaequatro" class="form-group esconde1"> 
      <label>Por que você não está empregado?</label>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="perg44" id="perg44" value="A"/>Falta de oportunidade<br>
        <input class="form-check-input" type="radio" name="perg44" id="perg44" value="B"/>Não preciso/Não quero<br>
        <input class="form-check-input" type="radio" name="perg44" id="perg44" value="C"/>Me dedico aos estudos
      </div>
    </div>
                          
    <div class="buttons">
      <a href="{{ route('knowledgeSuperior') }}">
        <input type="button" class="btn" value="Anterior"/>
      </a>
      <input type="submit" class="btn" name="proximo" value="Próximo"/>
    </div> 
	</form>
@endsection