<?php	
    include 'acessobancotec.php';  
    include 'vtec.php';
?>

<script language = javascript type = "text/javascript">      
    function abre22(){
        var q22 = document.getElementsByName('perg22');
        if (q22[0].checked){
            var qS = document.getElementById('sim');
            qS.classList.remove("esconde");
            var qN = document.getElementById('nao');
            qN.classList.add("esconde1");
            var p23 = document.getElementById('perg23');
            p23.setAttribute("required", "required");
            var p24 = document.getElementById('perg24');
            p24.setAttribute("required", "required");
            var p25 = document.getElementById('perg25');
            p25.setAttribute("required", "required");
            var p26 = document.getElementById('perg26');
            p26.setAttribute("required", "required");
            var qN = document.getElementById('nao');
            qN.classList.add("esconde1");
            var p35 = document.getElementById('perg35');
            if (p35.hasAttribute("required")){
                p35.removeAttribute("required");
            }
        }else if (q22[1].checked){
            var qS = document.getElementById('sim');
            qS.classList.add("esconde");
            var qN = document.getElementById('nao');
            qN.classList.remove("esconde1");
            var p23 = document.getElementById('perg23');
            if (p23.hasAttribute("required")){
                p23.removeAttribute("required");
            }
            var p24 = document.getElementById('perg24');
            if (p24.hasAttribute("required")){
                p24.removeAttribute("required");
            }
            var p25 = document.getElementById('perg25');
            if (p25.hasAttribute("required")){
                p25.removeAttribute("required");
            }
            var p26 = document.getElementById('perg26');
            if (p26.hasAttribute("required")){
                p26.removeAttribute("required");
            }
            var p35 = document.getElementById('perg35');
            p35.setAttribute("required", "required");            
        }
    }
    
    function abre26(){
        var q26 = document.getElementsByName('perg26');
        if (q26[0].checked){
            var q27 = document.getElementById('vinteesete');
            q27.classList.remove("esconde");
            var qN = document.getElementById('nao');
            qN.classList.add("esconde1");
            var p27 = document.getElementById('perg27');
            p27.setAttribute("required", "required");
            var p28 = document.getElementById('perg28');
            p28.setAttribute("required", "required");
            var p29 = document.getElementById('perg29');
            p29.setAttribute("required", "required");
            var p35 = document.getElementById('perg35');
            if (p35.hasAttribute("required")){
                p35.removeAttribute("required");
            }
        }else if (q26[1].checked){
            var q27 = document.getElementById('vinteesete');
            q27.classList.add("esconde");
            var qN = document.getElementById('nao');
            qN.classList.remove("esconde1");
            var p27 = document.getElementById('perg27');
            if (p27.hasAttribute("required")){
                p27.removeAttribute("required");
            }
            var p28 = document.getElementById('perg28');
            if (p28.hasAttribute("required")){
                p28.removeAttribute("required");
            }
            var p29 = document.getElementById('perg29');
            if (p29.hasAttribute("required")){
                p29.removeAttribute("required");
            }
            var p35 = document.getElementById('perg35');
            p35.setAttribute("required", "required");            
        }
    }
    
    function abre29(){
        var q29 = document.getElementsByName('perg29');
        if (q29[0].checked){
            var q30 = document.getElementById('trinta');
            q30.classList.remove("esconde");
            var q34 = document.getElementById('trintaequatro');
            q34.classList.add("esconde1");
            var p30 = document.getElementById('perg30');
            p30.setAttribute("required", "required");
            var p31 = document.getElementById('perg31');
            p31.setAttribute("required", "required");
            var p32 = document.getElementById('perg32');
            p32.setAttribute("required", "required");
            var p34 = document.getElementById('perg34');
            if (p34.hasAttribute("required")){
                p34.removeAttribute("required");
            }
        }else if (q29[1].checked){
            var q30 = document.getElementById('trinta');
            q30.classList.add("esconde");
            var q34 = document.getElementById('trintaequatro');
            q34.classList.remove("esconde1");
            var p30 = document.getElementById('perg30');
            if (p30.hasAttribute("required")){
                p30.removeAttribute("required");
            }
            var p31 = document.getElementById('perg31');
            if (p31.hasAttribute("required")){
                p31.removeAttribute("required");
            }
            var p32 = document.getElementById('perg32');
            if (p32.hasAttribute("required")){
                p32.removeAttribute("required");
            }
            var p34 = document.getElementById('perg34');
            p34.setAttribute("required", "required");            
        }
    }
    
    function voltar(){
        window.location.assign ("conhecimentotec.php");
    }
</script>

<!DOCTYPE HTML>
<html lang="pt-br">
	<head>
		<meta charset = "UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        
        <link rel = "stylesheet" href = "estilo.css">
        
		<title>Questionário</title>
		<style>
            .slider-wrapper {
                display: inline-block;
                width: 60%;
                height: 360px;
                padding: 5;
            }  
            .slider-wrapper input {
                width: 50%;
                height: 40px;
                margin: 0;
                transform-origin: 75px 75px;
            }
            .esconde{
                display: none;
            }
            .esconde1{
                display: none;
            }
		</style>
	</head>
	<body>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        
		<form method = "POST" action = "tratamentodados_profissionaistec.php">
            <br>
            <div class = "corpo">
                <div class= "card text-center"> 
                    <div class= "card-header">
                        <br><br><h1>Responda ao questionário abaixo</h1>			
			            <br><h2>Dados profissionais</h2><br>
                    </div>
                    
                    <div class= "card-body">
                        <label for = "perg22">Você já trabalhou?</label><br>
                        <div class= "form-check">
                            <input class= "form-check-input" type = "radio" name = "perg22" value = "A" onChange = "abre22()" required/>Sim<br>
                            <input class= "form-check-input" type = "radio" name = "perg22" value = "B" onChange = "abre22()"/>Não<br><br>
                        </div>                         

                        <div id = "sim" class = "esconde">   
                            <label for = "perg23">Você já atuou como técnico em informática?</label><br>
                            <div class= "form-check">
                                <input class= "form-check-input" type = "radio" name = "perg23" id = "perg23" value = "A"/>Sim<br>
                                <input class= "form-check-input" type = "radio" name = "perg23" id = "perg23" value = "B"/>Não<br><br>
                            </div>                            

                            <label for = "perg24">Quando foi o início da sua atividade profissional?</label><br>
                            <div class= "form-check">
                                <input class= "form-check-input" type = "radio" name = "perg24" id = "perg24" value = "A"/>Antes de começar o técnico<br>
                                <input class= "form-check-input" type = "radio" name = "perg24" id = "perg24" value = "B"/>Durante o técnico<br>
                                <input class= "form-check-input" type = "radio" name = "perg24" id = "perg24" value = "C"/>Até um ano depois da formatura<br>
                                <input class= "form-check-input" type = "radio" name = "perg24" id = "perg24" value = "D"/>1 a 3 anos depois da formatura<br>
                                <input class= "form-check-input" type = "radio" name = "perg24" id = "perg24" value = "E"/>Mais de 3 anos depois da formatura<br><br>
                            </div>
                            
                            <label for = "perg25">Como obteve o primeiro emprego?</label><br>
                            <div class= "form-check">
                                <input class= "form-check-input" type = "radio" name = "perg25" id = "perg25" value = "A"/>Abriu uma empresa<br>
                                <input class= "form-check-input" type = "radio" name = "perg25" id = "perg25" value = "B"/>Enviou currículo e foi selecionado<br>
                                <input class= "form-check-input" type = "radio" name = "perg25" id = "perg25" value = "C"/>Fez estágio e foi admitido ao término do mesmo<br>
                                <input class= "form-check-input" type = "radio" name = "perg25" id = "perg25" value = "D"/>Indicação de um amigo<br>
                                <input class= "form-check-input" type = "radio" name = "perg25" id = "perg25" value = "E"/>Indicação de um professor<br>                     
                                <input class= "form-check-input" type = "radio" name = "perg25" id = "perg25" value = "F"/>Outro<br><br>
                            </div>                            

                            <label for = "perg26">Você está trabalhando?</label><br>
                             <div class= "form-check">
                                 <input class= "form-check-input" type = "radio" name = "perg26" id = "perg26" value = "A"  onChange = "abre26()"/>Sim<br>
                                <input class= "form-check-input" type = "radio" name = "perg26" id = "perg26" value = "B" onChange = "abre26()"/>Não<br><br>
                            </div>
                        </div>

                        <div id = "vinteesete" class = "esconde">   
                            <label for = "perg27">Qual o seu vínculo empregatício?</label><br>
                            <div class= "form-check">
                                <input class= "form-check-input" type = "radio" name = "perg27" id = "perg27" value = "A"/>Autônomo<br>
                                <input class= "form-check-input" type = "radio" name = "perg27" id = "perg27" value = "B"/>Emprego com carteira assinada<br>                
                                <input class= "form-check-input" type = "radio" name = "perg27" id = "perg27" value = "C"/>Empregado sem carteira assinada<br>
                                <input class= "form-check-input" type = "radio" name = "perg27" id = "perg27" value = "D"/>Empregador<br>  
                                <input class= "form-check-input" type = "radio" name = "perg27" id = "perg27" value = "E"/>Outro<br><br>
                            </div>
                            
                            <label for = "perg28">Qual a área que você atua?</label><br>
                            <div class= "form-check">
                                <input class= "form-check-input" type = "radio" name = "perg28" id = "perg28" value = "A"/>Informática/ Sistemas/ Tecnologia<br>
                                <input class= "form-check-input" type = "radio" name = "perg28" id = "perg28"value = "B"/>Planejamento/ Desenvolvimento/ Análise<br>
                                <input class= "form-check-input" type = "radio" name = "perg28" id = "perg28"value = "C"/>Industrial/ Produção/ Manutenção<br>
                                <input class= "form-check-input" type = "radio" name = "perg28" id = "perg28"value = "D"/>Acadêmica<br>
                                <input class= "form-check-input" type = "radio" name = "perg28" id = "perg28"value = "E"/>Administração<br> 
                                <input class= "form-check-input" type = "radio" name = "perg28" id = "perg28" value = "F"/>Comercial/Vendas<br>
                                <input class= "form-check-input" type = "radio" name = "perg28" id = "perg28" value = "G"/>Consultoria<br>
                                <input class= "form-check-input" type = "radio" name = "perg28" id = "perg28" value = "H"/>Jurídica/Legal<br>
                                <input class= "form-check-input" type = "radio" name = "perg28" id = "perg28" value = "I"/>Presidência/ Diretoria/ Gerência Geral<br> 
                                <input class = "form-check-input" type = "radio" name = "perg28" id = "perg28" value = "J"/>Telecomunicações<br>
                                <input class = "form-check-input" type = "radio" name = "perg28" id = "perg28" value = "K"/>Outro<br><br>
                            </div>
                            
                            <label for = "perg29">A função que você exerce está alinhada a área de técnico em informática?</label><br>
                            <div class= "form-check">
                                <input class= "form-check-input" type = "radio" name = "perg29" id = "perg29" value = "A" onChange = "abre29()"/>Sim<br>
                                <input class= "form-check-input" type = "radio" name = "perg29" id = "perg29" value = "B" onChange = "abre29()"/>Não<br><br>
                            </div>                            
                        </div>

                        <div id = "trinta" class = "esconde">   
                            <label for = "perg30">Qual cargo você ocupa?</label><br>
                            <div class= "form-check">
                                <input class= "form-check-input" type = "radio" name = "perg30" id = "perg30" value = "A"/>Acadêmico<br>
                                <input class= "form-check-input" type = "radio" name = "perg30" id = "perg30" value = "B"/>Administrador de banco de dados<br>
                                <input class= "form-check-input" type = "radio" name = "perg30" id = "perg30" value = "C"/>Administrador de redes<br>
                                <input class= "form-check-input" type = "radio" name = "perg30" id = "perg30" value = "D"/>Analista de sistemas<br>
                                <input class= "form-check-input" type = "radio" name = "perg30" id = "perg30" value = "E"/>Coordenador de projetos<br>
                                <input class= "form-check-input" type = "radio" name = "perg30" id = "perg30" value = "F"/>Diretor<br>
                                <input class= "form-check-input" type = "radio" name = "perg30" id = "perg30" value = "G"/>Gerente<br>
                                <input class= "form-check-input" type = "radio" name = "perg30" id = "perg30" value = "H"/>Programador<br>
                                <input class= "form-check-input" type = "radio" name = "perg30" id = "perg30" value = "I"/>Sócio/Proprietário<br>
                                <input class= "form-check-input" type = "radio" name = "perg30" id = "perg30" value = "J"/>Suporte técnico<br>            
                                <input class= "form-check-input" type = "radio" name = "perg30" id = "perg30" value = "K"/>Outro<br><br>
                            </div>

                            <label for = "perg31">Quantas horas você trabalha por semana?</label><br>
                            <div class= "form-check">
                                <input class= "form-check-input" type = "radio" name = "perg31" id = "perg31" value = "A"/>Menos de 40<br>
                                <input class= "form-check-input" type = "radio" name = "perg31" id = "perg31" value = "B"/>Entre 40 e 44<br>
                                <input class= "form-check-input" type = "radio" name = "perg31" id = "perg31" value = "C"/>Entre 45 e 48<br>
                                <input class= "form-check-input"  type = "radio" name = "perg31" id = "perg31" value = "D"/>Mais de 48<br><br>
                            </div>

                            <label for = "perg32">Qual a sua faixa salarial bruta?</label><br>
                            <div class= "form-check">
                                <input class= "form-check-input" type = "radio" name = "perg32" id = "perg32" value = "A"/>Menos de R$1000,00<br>
                                <input class= "form-check-input" type = "radio" name = "perg32" id = "perg32" value = "B"/>Entre R$1000,00 e R$2000,00<br>
                                <input class= "form-check-input" type = "radio" name = "perg32" id = "perg32" value = "C"/>Entre R$2000,00 e R$4000,00<br>
                                <input class= "form-check-input" type = "radio" name = "perg32" id = "perg32" value = "D"/>Entre R$4000,00 e R$6000,00<br>  
                                <input class= "form-check-input" type = "radio" name = "perg32" id = "perg32" value = "E"/>Mais de R$6000,00<br><br>
                            </div>                            

                            <label for = "perg33">Avalie como foram as dificuldades que você encontrou na profissão</label><br>
                            <label>(Utilize o lado mais a esquerda para pouca dificuldade e o mais a direita para muita dificuldade)</label><br>
                            <div class = "slider-wrapper">
                                Apresentação em público<br><input type = "range" list = "tickmarks" name = "perg33A" id = "perg33A" min = "1" max = "5"/> 
                                <datalist id="tickmarks">
                                  <option value="1">
                                  <option value="2">
                                  <option value="3">
                                  <option value="4">
                                  <option value="5">
                                </datalist><br>
                                
                                Falta de cursos relacionados a área<br><input type = "range" list="tickmarks" name = "perg33B" id = "perg33B" min = "1" max = "5"/> 
                                <datalist id="tickmarks">
                                  <option value="1">
                                  <option value="2">
                                  <option value="3">
                                  <option value="4">
                                  <option value="5">
                                </datalist><br>
                                
                                Língua estrangeira<br><input type = "range" list="tickmarks" name = "perg33C" id = "perg33C" min = "1" max = "5"/> 
                                <datalist id="tickmarks">
                                  <option value="1">
                                  <option value="2">
                                  <option value="3">
                                  <option value="4">
                                  <option value="5">
                                </datalist><br>
                                
                                Motivação da equipe<br><input type = "range" list="tickmarks" name = "perg33D" id = "perg33D" min = "1" max = "5"/> 
                                <datalist id="tickmarks">
                                  <option value="1">
                                  <option value="2">
                                  <option value="3">
                                  <option value="4">
                                  <option value="5">
                                </datalist><br>
                                
                                Outras<br><input type = "range" list="tickmarks" name = "perg33E" id = "perg33E" min = "1" max = "5"/>
                                <datalist id="tickmarks">
                                  <option value="1">
                                  <option value="2">
                                  <option value="3">
                                  <option value="4">
                                  <option value="5">
                                </datalist><br><br> 
                            </div>
                        </div>

                        <div id = "trintaequatro" class = "esconde1">   
                            <label for = "perg34">Qual o principal motivo para você não atuar na área de informática?</label><br>
                            <div class= "form-check">
                                <input class= "form-check-input" type = "radio" name = "perg34" id = "perg34" value = "A"/>Falta de perpectiva de carreira<br>         
                                <input class= "form-check-input" type = "radio" name = "perg34" id = "perg34" value = "B"/>Mercado de trabalho atual saturado<br>
                                <input class= "form-check-input" type = "radio" name = "perg34" id = "perg34" value = "C"/>Melhor oportunidade em outra profissão<br>
                                <input class= "form-check-input" type = "radio" name = "perg34" id = "perg34" value = "D"/>Trabalho na área da minha segunda formação<br>  
                                <input class= "form-check-input" type = "radio" name = "perg34" id = "perg34" value = "E"/> Outros<br><br>
                            </div>                            
                        </div>

                        <div id = "nao" class = "esconde1">   
                            <label for = "perg35">Por que você não está empregado?</label><br>
                            <div class= "form-check">
                                <input class= "form-check-input" type = "radio" name = "perg35" id = "perg35" value = "A"/>Falta de oportunidade<br>
                                <input class= "form-check-input" type = "radio" name = "perg35" id = "perg35" value = "B"/>Não preciso/Não quero<br>
                                <input class= "form-check-input" type = "radio" name = "perg35" id = "perg35" value = "C"/>Me dedico aos estudos<br><br>
                            </div>                            
                        </div>

                        <div class = "botao">
                            <input id = "botao" type = "button" class= "btn btn-primary" value = "Anterior" onClick = "voltar();"/>
                            <input id = "botao" type = "submit" class= "btn btn-primary" name = "proximo" value = "Próximo"/>
                        </div><br>	

                        <div class="progress">
                              <div class="progress-bar progress-bar-striped bg-info" role="progressbar" style="width: 25%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>

                    </div>

                    <div class= "card-footer" >  </div>
                </div> 
            </div>	
		</form>
        
        <script src= "https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity= "sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin= "anonymous" ></script> 
        <script src= "https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity= "sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin= "anonymous" ></script> 
        <script src= "https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity= "sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin= "anonymous" ></script>
        
	</body>
</html>