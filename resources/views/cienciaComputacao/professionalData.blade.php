@extends('layoutAssay')

@section('title', 'Dados profissionais')
@section('value', '25%')

@section('content')
  <form method="POST" action="#">
    {{ csrf_field() }}	

    <div class="form-group">
      <label>Você já trabalhou?</label>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="perg32" value="97" onChange="abre33()" required/>Sim<br>
        <input class="form-check-input" type="radio" name="perg32" value="98" onChange="abre33()"/>Não
      </div>     
    </div>  
                          
    <div id="trintaetres" class="esconde">
      <div class="form-group">
        <label>Quando foi o início da sua atividade profissional?</label>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="perg33" id="perg33" value="90"/>Antes de começar a graduação<br>
          <input class="form-check-input" type="radio" name="perg33" id="perg33" value="91"/>Durante a graduação<br>
          <input class="form-check-input" type="radio" name="perg33" id="perg33" value="94"/>Até um ano depois da formatura<br>
          <input class="form-check-input" type="radio" name="perg33" id="perg33" value="95"/>1 a 3 anos depois da formatura<br>
          <input class="form-check-input" type="radio" name="perg33" id="perg33" value="96"/>Mais de 3 anos depois da formatura
        </div> 
      </div>  
      
      <div class="form-group">                            
        <label>Como obteve o primeiro emprego?</label>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="perg34" id="perg34" value="121"/>Abriu uma empresa<br>
          <input class="form-check-input" type="radio" name="perg34" id="perg34" value="122"/>Enviou currículo e foi selecionado<br>
          <input class="form-check-input" type="radio" name="perg34" id="perg34" value="123"/>Fez estágio e foi admitido ao término do mesmo<br>
          <input class="form-check-input" type="radio" name="perg34" id="perg34" value="124"/>Indicação de um amigo<br>
          <input class="form-check-input" type="radio" name="perg34" id="perg34" value="125"/>Indicação de um professor<br>                     
          <input class="form-check-input" type="radio" name="perg34" id="perg34" value="55"/>Outro
        </div>      
      </div> 
    
      <div class="form-group">
        <label>Você está trabalhando?</label>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="perg35" id="perg35" value="97" onChange="abre36()"/>Sim<br>
            <input class="form-check-input" type="radio" name="perg35" id="perg35" value="98" onChange="abre36()"/>Não
        </div> 
      </div>                        
    </div>		

    <div id="trintaeseis" class="esconde">
      <div class="form-group">
        <label>Qual o seu vínculo empregatício?</label>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="perg36" id="perg36" value="133"/>Autônomo<br>
          <input class="form-check-input" type="radio" name="perg36" id="perg36" value="134"/>Empregado com carteira assinada<br>                
          <input class="form-check-input" type="radio" name="perg36" id="perg36" value="135"/>Empregado sem carteira assinada<br>
          <input class="form-check-input" type="radio" name="perg36" id="perg36" value="136"/>Empregador<br>  
          <input class="form-check-input" type="radio" name="perg36" id="perg36" value="55"/>Outro
        </div> 
      </div> 
      
      <div class="form-group">
        <label>Qual a área que você atua?</label>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="perg37" id="perg37" value="137"/>Informática/ Sistemas/ Tecnologia<br>
          <input class="form-check-input" type="radio" name="perg37" id="perg37" value="138"/>Planejamento/ Desenvolvimento/ Análise<br>
          <input class="form-check-input" type="radio" name="perg37" id="perg37" value="139"/>Industrial/ Produção/ Manutenção<br>
          <input class="form-check-input" type="radio" name="perg37" id="perg37" value="140"/>Acadêmica<br>
          <input class="form-check-input" type="radio" name="perg37" id="perg37" value="141"/>Administração<br> 
          <input class="form-check-input" type="radio" name="perg37" id="perg37" value="142"/>Comercial/ Vendas<br>
          <input class="form-check-input" type="radio" name="perg37" id="perg37" value="143"/>Consultoria<br>
          <input class="form-check-input" type="radio" name="perg37" id="perg37" value="144"/>Jurídica/ Legal<br>
          <input class="form-check-input" type="radio" name="perg37" id="perg37" value="145"/>Presidência/ Diretoria/ Gerência Geral<br> 
          <input class="form-check-input" type="radio" name="perg37" id="perg37" value="146"/>Telecomunicações<br>
          <input class="form-check-input" type="radio" name="perg37" id="perg37" value="55"/>Outro
        </div> 
      </div>                         

      <div class="form-group">
        <label>A função que você exerce está alinhada a área de ciência da computação?</label>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="perg38" id="perg38" value="97" onChange="abre39();">Sim<br>
          <input class="form-check-input" type="radio" name="perg38" id="perg38" value="98" onChange="abre39();"/>Não
        </div>   
      </div>                         
    </div>			

    <div id="trintaenove" class="esconde">
      <div class="form-group"> 
        <label>Qual cargo você ocupa?</label>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="perg39" id="perg39" value="147"/>Acadêmico<br>
          <input class="form-check-input" type="radio" name="perg39" id="perg39" value="148"/>Administrador de banco de dados<br>
          <input class="form-check-input" type="radio" name="perg39" id="perg39" value="149"/>Administrador de redes<br>
          <input class="form-check-input" type="radio" name="perg39" id="perg39" value="150"/>Analista de sistemas<br>
          <input class="form-check-input" type="radio" name="perg39" id="perg39" value="151"/>Coordenador de projetos<br>
          <input class="form-check-input" type="radio" name="perg39" id="perg39" value="152"/>Diretor<br>
          <input class="form-check-input" type="radio" name="perg39" id="perg39" value="153"/>Gerente<br>
          <input class="form-check-input" type="radio" name="perg39" id="perg39" value="154"/>Programador<br>
          <input class="form-check-input" type="radio" name="perg39" id="perg39" value="155"/>Sócio/ Proprietário<br>
          <input class="form-check-input" type="radio" name="perg39" id="perg39" value="156"/>Suporte técnico<br>            
          <input class="form-check-input" type="radio" name="perg39" id="perg39" value="55"/>Outro
        </div> 
      </div>  
      
      <div class="form-group">
        <label>Quantas horas você trabalha por semana?</label>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="perg40" id="perg40" value="157"/>Menos de 40<br>
          <input class="form-check-input" type="radio" name="perg40" id="perg40" value="158"/>Entre 40 e 44<br>
          <input class="form-check-input" type="radio" name="perg40" id="perg40" value="159"/>Entre 45 e 48<br>
          <input class="form-check-input" type="radio" name="perg40" id="perg40" value="160"/>Mais de 48
        </div> 
      </div>                        

      <div class="form-group">
        <label>Qual a faixa salarial?</label>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="perg41" id="perg41" value="166"/>Menos de R$2000,00<br>
          <input class="form-check-input" type="radio" name="perg41" id="perg41" value="167"/>Entre R$2000,00 e R$4999,00<br>
          <input class="form-check-input" type="radio" name="perg41" id="perg41" value="168"/>Entre R$5000,00 e R$7999,00<br>
          <input class="form-check-input" type="radio" name="perg41" id="perg41" value="169"/>Entre R$8000,00 e R$12000,00<br>  
          <input class="form-check-input" type="radio" name="perg41" id="perg41" value="170"/>Mais de R$12000,00
        </div>  
      </div>                          

      <div class="form-group">
        <label>Avalie como foram as dificuldades que você encontrou na profissão</label>
        <label class="subtitle">(Utilize o lado mais a esquerda para pouca dificuldade e o mais a direita para muita dificuldade)</label>
        <div class="slider-wrapper">
          Apresentação em público<br>
          <input type="range" list="tickmarks" name="perg42_5" id="perg42_5" min="1" max="5"/> 
          <datalist id="tickmarks">
            <option value="117">
            <option value="118">
            <option value="119">
            <option value="126">
            <option value="127">
          </datalist><br>
            
          Falta de cursos relacionados a área<br>
          <input type="range" list="tickmarks" name="perg42_6" id="perg42_6" min="1" max="5"/> 
          <datalist id="tickmarks">
            <option value="117">
            <option value="118">
            <option value="119">
            <option value="126">
            <option value="127">
          </datalist><br>
            
          Fluência em línguas estrangeiras<br>
          <input type="range" list="tickmarks" name="perg42_7" id="perg42_7" min="1" max="5"/> 
          <datalist id="tickmarks">
            <option value="117">
            <option value="118">
            <option value="119">
            <option value="126">
            <option value="127">
          </datalist><br>
          
          Motivação da equipe<br>
          <input type="range" list="tickmarks" name="perg42_8" id="perg42_8" min="1" max="5"/> 
          <datalist id="tickmarks">
            <option value="117">
            <option value="118">
            <option value="119">
            <option value="126">
            <option value="127">
          </datalist><br>
          
          Outras<br>
          <input type="range" list="tickmarks" name="perg42_9" id="perg42_9" min="1" max="5"/>
          <datalist id="tickmarks">
            <option value="117">
            <option value="118">
            <option value="119">
            <option value="126">
            <option value="127">
          </datalist><br>
        </div> 
      </div>
    </div>	

    <div id="quarentaetres" class="form-group esconde1"> 
      <label>Qual o principal motivo para você não atuar na área da computação?</label>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="perg43" id="perg43" value="171"/>Falta de perpectiva de carreira<br>         
        <input class="form-check-input" type="radio" name="perg43" id="perg43" value="172"/>Mercado de trabalho atual saturado<br>
        <input class="form-check-input" type="radio" name="perg43" id="perg43" value="173"/>Melhor oportunidade em outra profissão<br>
        <input class="form-check-input" type="radio" name="perg43" id="perg43" value="174"/>Trabalho na área da minha segunda formação<br>  
        <input class="form-check-input" type="radio" name="perg43" id="perg43" value="55"/>Outros
      </div>                            
    </div>

    <div id="nao" class="form-group esconde1">   
      <label>Por que você não está empregado?</label>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="perg44" id="perg44" value="175"/>Falta de oportunidade<br>
        <input class="form-check-input" type="radio" name="perg44" id="perg44" value="176"/>Não preciso/ Não quero<br>
        <input class="form-check-input" type="radio" name="perg44" id="perg44" value="177"/>Me dedico aos estudos
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