@extends('layoutAssay')

@section('title', 'Dados profissionais')
@section('value', '25%')

@section('content')
  <form method="POST" action="#">
    {{ csrf_field() }}

    <div class="form-group">
      <label>Você já trabalhou?</label>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="perg22" value="A" onChange="abre22()" required/>Sim<br>
        <input class="form-check-input" type="radio" name="perg22" value="B" onChange="abre22()"/>Não
      </div>     
    </div>                    

    <div id="sim" class="esconde">   
      <div class="form-group">
        <label>Você já atuou como técnico em informática?</label>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="perg23" id="perg23" value="A"/>Sim<br>
            <input class="form-check-input" type="radio" name="perg23" id="perg23" value="B"/>Não
        </div>    
      </div>
      
      <div class="form-group">
        <label>Quando foi o início da sua atividade profissional?</label>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="perg24" id="perg24" value="A"/>Antes de começar o técnico<br>
          <input class="form-check-input" type="radio" name="perg24" id="perg24" value="B"/>Durante o técnico<br>
          <input class="form-check-input" type="radio" name="perg24" id="perg24" value="C"/>Até um ano depois da formatura<br>
          <input class="form-check-input" type="radio" name="perg24" id="perg24" value="D"/>1 a 3 anos depois da formatura<br>
          <input class="form-check-input" type="radio" name="perg24" id="perg24" value="E"/>Mais de 3 anos depois da formatura
        </div> 
      </div>

      <div class="form-group">                            
        <label>Como obteve o primeiro emprego?</label>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="perg25" id="perg25" value="A"/>Abriu uma empresa<br>
          <input class="form-check-input" type="radio" name="perg25" id="perg25" value="B"/>Enviou currículo e foi selecionado<br>
          <input class="form-check-input" type="radio" name="perg25" id="perg25" value="C"/>Fez estágio e foi admitido ao término do mesmo<br>
          <input class="form-check-input" type="radio" name="perg25" id="perg25" value="D"/>Indicação de um amigo<br>
          <input class="form-check-input" type="radio" name="perg25" id="perg25" value="E"/>Indicação de um professor<br>                     
          <input class="form-check-input" type="radio" name="perg25" id="perg25" value="F"/>Outro
        </div>      
      </div>    
      
      <div class="form-group">
        <label>Você está trabalhando?</label>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="perg26" id="perg26" value="A" onChange="abre26()"/>Sim<br>
            <input class="form-check-input" type="radio" name="perg26" id="perg26" value="B" onChange="abre26()"/>Não
        </div> 
      </div>
    </div>

    <div id="vinteesete" class="esconde">   
      <div class="form-group">
        <label>Qual o seu vínculo empregatício?</label>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="perg27" id="perg27" value="A"/>Autônomo<br>
          <input class="form-check-input" type="radio" name="perg27" id="perg27" value="B"/>Emprego com carteira assinada<br>                
          <input class="form-check-input" type="radio" name="perg27" id="perg27" value="C"/>Empregado sem carteira assinada<br>
          <input class="form-check-input" type="radio" name="perg27" id="perg27" value="D"/>Empregador<br>  
          <input class="form-check-input" type="radio" name="perg27" id="perg27" value="E"/>Outro
        </div> 
      </div>
      
      <div class="form-group">
        <label>Qual a área que você atua?</label>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="perg28" id="perg28" value="A"/>Informática/ Sistemas/ Tecnologia<br>
          <input class="form-check-input" type="radio" name="perg28" id="perg28" value="B"/>Planejamento/ Desenvolvimento/ Análise<br>
          <input class="form-check-input" type="radio" name="perg28" id="perg28" value="C"/>Industrial/ Produção/ Manutenção<br>
          <input class="form-check-input" type="radio" name="perg28" id="perg28" value="D"/>Acadêmica<br>
          <input class="form-check-input" type="radio" name="perg28" id="perg28" value="E"/>Administração<br> 
          <input class="form-check-input" type="radio" name="perg28" id="perg28" value="F"/>Comercial/Vendas<br>
          <input class="form-check-input" type="radio" name="perg28" id="perg28" value="G"/>Consultoria<br>
          <input class="form-check-input" type="radio" name="perg28" id="perg28" value="H"/>Jurídica/Legal<br>
          <input class="form-check-input" type="radio" name="perg28" id="perg28" value="I"/>Presidência/ Diretoria/ Gerência Geral<br> 
          <input class="form-check-input" type="radio" name="perg28" id="perg28" value="J"/>Telecomunicações<br>
          <input class="form-check-input" type="radio" name="perg28" id="perg28" value="K"/>Outro
        </div> 
      </div>

      <div class="form-group">                            
        <label>A função que você exerce está alinhada a área de técnico em informática?</label>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="perg29" id="perg29" value="A" onChange="abre29()"/>Sim<br>
          <input class="form-check-input" type="radio" name="perg29" id="perg29" value="B" onChange="abre29()"/>Não
        </div>   
      </div>                         
    </div>

    <div id="trinta" class="esconde">  
      <div class="form-group"> 
        <label>Qual cargo você ocupa?</label>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="perg30" id="perg30" value="A"/>Acadêmico<br>
          <input class="form-check-input" type="radio" name="perg30" id="perg30" value="B"/>Administrador de banco de dados<br>
          <input class="form-check-input" type="radio" name="perg30" id="perg30" value="C"/>Administrador de redes<br>
          <input class="form-check-input" type="radio" name="perg30" id="perg30" value="D"/>Analista de sistemas<br>
          <input class="form-check-input" type="radio" name="perg30" id="perg30" value="E"/>Coordenador de projetos<br>
          <input class="form-check-input" type="radio" name="perg30" id="perg30" value="F"/>Diretor<br>
          <input class="form-check-input" type="radio" name="perg30" id="perg30" value="G"/>Gerente<br>
          <input class="form-check-input" type="radio" name="perg30" id="perg30" value="H"/>Programador<br>
          <input class="form-check-input" type="radio" name="perg30" id="perg30" value="I"/>Sócio/Proprietário<br>
          <input class="form-check-input" type="radio" name="perg30" id="perg30" value="J"/>Suporte técnico<br>            
          <input class="form-check-input" type="radio" name="perg30" id="perg30" value="K"/>Outro
        </div> 
      </div>

      <div class="form-group">
        <label>Quantas horas você trabalha por semana?</label>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="perg31" id="perg31" value="A"/>Menos de 40<br>
          <input class="form-check-input" type="radio" name="perg31" id="perg31" value="B"/>Entre 40 e 44<br>
          <input class="form-check-input" type="radio" name="perg31" id="perg31" value="C"/>Entre 45 e 48<br>
          <input class="form-check-input" type="radio" name="perg31" id="perg31" value="D"/>Mais de 48
        </div> 
      </div>

      <div class="form-group">
        <label>Qual a sua faixa salarial bruta?</label>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="perg32" id="perg32" value="A"/>Menos de R$1000,00<br>
          <input class="form-check-input" type="radio" name="perg32" id="perg32" value="B"/>Entre R$1000,00 e R$2000,00<br>
          <input class="form-check-input" type="radio" name="perg32" id="perg32" value="C"/>Entre R$2000,00 e R$4000,00<br>
          <input class="form-check-input" type="radio" name="perg32" id="perg32" value="D"/>Entre R$4000,00 e R$6000,00<br>  
          <input class="form-check-input" type="radio" name="perg32" id="perg32" value="E"/>Mais de R$6000,00
        </div> 
      </div>   
      
      <div class="form-group">
        <label>Avalie como foram as dificuldades que você encontrou na profissão</label>
        <label class="subtitle">(Utilize o lado mais a esquerda para pouca dificuldade e o mais a direita para muita dificuldade)</label>
        <div class="slider-wrapper">
          Apresentação em público<br>
          <input type="range" list="tickmarks" name="perg33A" id="perg33A" min="1" max="5"/> 
          <datalist id="tickmarks">
            <option value="1">
            <option value="2">
            <option value="3">
            <option value="4">
            <option value="5">
          </datalist><br>
            
          Falta de cursos relacionados a área<br>
          <input type="range" list="tickmarks" name="perg33B" id="perg33B" min="1" max="5"/> 
          <datalist id="tickmarks">
            <option value="1">
            <option value="2">
            <option value="3">
            <option value="4">
            <option value="5">
          </datalist><br>
            
          Fluência em línguas estrangeiras<br>
          <input type="range" list="tickmarks" name="perg33C" id="perg33C" min="1" max="5"/> 
          <datalist id="tickmarks">
            <option value="1">
            <option value="2">
            <option value="3">
            <option value="4">
            <option value="5">
          </datalist><br>
          
          Motivação da equipe<br>
          <input type="range" list="tickmarks" name="perg33D" id="perg33D" min="1" max="5"/> 
          <datalist id="tickmarks">
            <option value="1">
            <option value="2">
            <option value="3">
            <option value="4">
            <option value="5">
          </datalist><br>
          
          Outras<br>
          <input type="range" list="tickmarks" name="perg33E" id="perg33E" min="1" max="5"/>
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

    <div id="trintaequatro" class="form-group esconde1"> 
      <label>Qual o principal motivo para você não atuar na área de informática?</label>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="perg34" id="perg34" value="A"/>Falta de perpectiva de carreira<br>         
        <input class="form-check-input" type="radio" name="perg34" id="perg34" value="B"/>Mercado de trabalho atual saturado<br>
        <input class="form-check-input" type="radio" name="perg34" id="perg34" value="C"/>Melhor oportunidade em outra profissão<br>
        <input class="form-check-input" type="radio" name="perg34" id="perg34" value="D"/>Trabalho na área da minha segunda formação<br>  
        <input class="form-check-input" type="radio" name="perg34" id="perg34" value="E"/> Outros
      </div>                            
    </div>

    <div id="nao" class="form-group esconde1">   
      <label>Por que você não está empregado?</label>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="perg35" id="perg35" value="A"/>Falta de oportunidade<br>
        <input class="form-check-input" type="radio" name="perg35" id="perg35" value="B"/>Não preciso/Não quero<br>
        <input class="form-check-input" type="radio" name="perg35" id="perg35" value="C"/>Me dedico aos estudos
      </div>                            
    </div>

    <div class="buttons">
      <a href="{{ route('knowledgeTecnico') }}">
        <input type="button" class="btn" value="Anterior"/>
      </a>
      <input type="submit" class="btn" name="proximo" value="Próximo"/>
    </div> 
	</form>
@endsection