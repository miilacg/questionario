<?php
	include '../acessobancosup.php';
    include 'vSuperior.php';
?>

<!DOCTYPE HTML>
<html lang="pt-br">
	<head>
		<meta charset = "UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <script src = "superior.js"></script>

        <link rel = "stylesheet" href = "https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity = "sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin = "anonymous">  
        <link rel = "stylesheet" href = "../estilo.css">
        <link rel = "stylesheet" href = "superior.css">
        
		<title>Questionario</title>
	</head>
	<body>       
		<form method = "POST" action = "tratamentodados_profissionaissup.php">
            <br>
            <div class = "corpo">
                <div class= "card text-center"> 
                    <div class= "card-header">
                        <br><br><h1>Responda ao questionário abaixo</h1>			
			            <br><h2>Dados profissionais</h2><br>
                    </div>
                    
                    <div class= "card-body">
                        <label for = "perg32">Você já trabalhou?</label><br>
                        <div class= "form-check">
                            <input class= "form-check-input" type = "radio" name = "perg32" value = "A" onChange = "abre32();" required/>Sim<br>
                            <input class= "form-check-input" type = "radio" name = "perg32" value = "B" onChange = "abre32();"/>Não<br><br>
                        </div>     
                        
                        <div id = "trintaetres" class = "esconde">
                            <label for = "perg33">Quando foi o inicio da sua atividade profissional?</label><br>
                            <div class= "form-check">
                                <input class= "form-check-input" type = "radio" name = "perg33" id = "perg33" value = "A"/>Antes da graduação<br>
                                <input class= "form-check-input" type = "radio" name = "perg33" id = "perg33" value = "B"/>Durante a formação<br>
                                <input class= "form-check-input" type = "radio" name = "perg33" id = "perg33" value = "C"/>Até um ano depois da formatura<br>
                                <input class= "form-check-input" type = "radio" name = "perg33" id = "perg33" value = "D"/>1 a 3 anos depois da formatura<br>
                                <input class= "form-check-input" type = "radio" name = "perg33" id = "perg33" value = "E"/>Mais de 3 anos depois da formatura<br><br>
                            </div>                            

                            <label for = "perg34">Como obteve seu primeiro emprego?</label><br>
                            <div class= "form-check">
                                <input class= "form-check-input" type = "radio" name = "perg34" id = "perg34" value = "A"/>Abriu uma empresa<br>
                                <input class= "form-check-input" class= "form-check-input" type = "radio" name = "perg34" id = "perg34" value = "B"/>Enviou currículo e foi selecionado<br>
                                <input class= "form-check-input" type = "radio" name = "perg34" id = "perg34" value = "C"/>Fez estágio e foi admitido ao término do mesmo<br>
                                <input class= "form-check-input" type = "radio" name = "perg34" id = "perg34" value = "D"/>Indicação de um amigo<br>
                                <input class= "form-check-input" type = "radio" name = "perg34" id = "perg34" value = "E"/>Indicação de um professor<br>                     
                                <input class= "form-check-input" type = "radio" name = "perg34" id = "perg34" value = "F"/>Outro<br><br>
                            </div>                            

                            <label for = "perg35">Você está trabalhando?</label><br>
                            <div class= "form-check">
                                <input class= "form-check-input" type = "radio" name = "perg35" id = "perg35" value = "A" onChange = "abre35();"/>Sim<br>
                                <input class= "form-check-input" type = "radio" name = "perg35" id = "perg35" value = "B" onChange = "abre35();"/>Não<br><br>
                            </div>                            
                        </div>		

                        <div id = trintaeseis class = "esconde">
                            <label for = "perg36">Qual o seu vínculo empregatício?</label><br>
                            <div class= "form-check">
                                <input class= "form-check-input" type = "radio" name = "perg36" id = "perg36" value = "A"/>Autônomo<br>
                                <input class= "form-check-input" type = "radio" name = "perg36" id = "perg36" value = "B"/>Emprego com carteira assinada<br>                
                                <input class= "form-check-input" type = "radio" name = "perg36" id = "perg36" value = "C"/>Empregado sem carteira assinada<br>
                                <input class= "form-check-input" type = "radio" name = "perg36" id = "perg36" value = "D"/>Empregador<br>  
                                <input class= "form-check-input" type = "radio" name = "perg36" id = "perg36" value = "E"/>Outro<br><br>
                            </div>                            

                            <label for = "perg37">Qual a área que você atua?</label><br>
                            <div class= "form-check">
                                <input class= "form-check-input" type = "radio" name = "perg37" id = "perg37" value = "A"/>Informática/ Sistemas/ Tecnologia<br>
                                <input class= "form-check-input" type = "radio" name = "perg37" id = "perg37" value = "B"/>Planejamento/ Desenvolvimento/ Análise<br>
                                <input class= "form-check-input" type = "radio" name = "perg37" id = "perg37" value = "C"/>Industrial/ Produção/ Manutenção<br>
                                <input class= "form-check-input" type = "radio" name = "perg37" id = "perg37" value = "D"/>Acadêmica<br>
                                <input class= "form-check-input" type = "radio" name = "perg37" id = "perg37" value = "E"/>Administração<br> 
                                <input class= "form-check-input" type = "radio" name = "perg37" id = "perg37" value = "F"/>Comercial/ Vendas<br>
                                <input class= "form-check-input" type = "radio" name = "perg37" id = "perg37" value = "G"/>Consultoria<br>
                                <input class= "form-check-input" type = "radio" name = "perg37" id = "perg37" value = "H"/>Jurídica/ Legal<br>
                                <input class= "form-check-input" type = "radio" name = "perg37" id = "perg37" value = "I"/>Presidência/ Diretoria/ Gerência Geral<br> 
                                <input class= "form-check-input" type = "radio" name = "perg37" id = "perg37" value = "J"/>Telecomunicações<br>
                                <input class= "form-check-input" type = "radio" name = "perg37" id = "perg37" value = "K"/>Outro<br><br>
                            </div>                            

                            <label for = "perg38">A função que você exerce está alinhada a área de ciência da computação?</label><br>
                            <div class= "form-check">
                                <input class= "form-check-input" type = "radio" name = "perg38" id = "perg38" value = "A" onChange = "abre38();">Sim<br>
                                <input class= "form-check-input" type = "radio" name = "perg38" id = "perg38" value = "B" onChange = "abre38();"/>Não<br><br>
                            </div>                            
                        </div>			

                        <div id = "trintaenove" class = "esconde">
                            <label for = "perg39">Qual o cargo você ocupa?</label><br>
                            <div class= "form-check">
                                <input class= "form-check-input" type = "radio" name = "perg39" id = "perg39" value = "A"/>Acadêmico<br>
                                <input class= "form-check-input" type = "radio" name = "perg39" id = "perg39" value = "B"/>Administrador de banco de dados<br>
                                <input class= "form-check-input" type = "radio" name = "perg39" id = "perg39" value = "C"/>Administrador de redes<br>
                                <input class= "form-check-input" type = "radio" name = "perg39" id = "perg39" value = "D"/>Analista de sistemas<br>
                                <input class= "form-check-input" type = "radio" name = "perg39" id = "perg39" value = "E"/>Coordenador de projetos<br>
                                <input class= "form-check-input" type = "radio" name = "perg39" id = "perg39" value = "F"/>Diretor<br>
                                <input class= "form-check-input" type = "radio" name = "perg39" id = "perg39" value = "G"/>Gerente<br>
                                <input class= "form-check-input" type = "radio" name = "perg39" id = "perg39" value = "H"/>Programador<br>
                                <input class= "form-check-input" type = "radio" name = "perg39" id = "perg39" value = "I"/>Sócio/ Proprietário<br>            
                                <input class= "form-check-input" type = "radio" name = "perg39" id = "perg39" value = "J"/>Outro<br><br>
                            </div>                            

                            <label for = "perg40">Quantas horas você trabalha por semana?</label><br>
                            <div class= "form-check">
                                <input class= "form-check-input" type = "radio" name = "perg40" id = "perg40" value = "A"/>Menos de 40<br>
                                <input class= "form-check-input" type = "radio" name = "perg40" id = "perg40" value = "B"/>Entre 40 e 44<br>
                                <input class= "form-check-input" type = "radio" name = "perg40" id = "perg40" value = "C"/>Entre 45 e 48<br>
                                <input class= "form-check-input" type = "radio" name = "perg40" id = "perg40" value = "D"/>Mais de 48<br><br>
                            </div>                            

                            <label for = "perg41">Qual a faixa salarial?</label><br>
                            <div class= "form-check">
                                <input class= "form-check-input" type = "radio" name = "perg41" id = "perg41" value = "A"/>Menos de R$2000,00<br>
                                <input class= "form-check-input" type = "radio" name = "perg41" id = "perg41" value = "B"/>Entre R$2000,00 e R$5000,00<br>
                                <input class= "form-check-input" type = "radio" name = "perg41" id = "perg41" value = "C"/>Entre R$5001,00 e R$8000,00<br>
                                <input class= "form-check-input" type = "radio" name = "perg41" id = "perg41" value = "D"/>Entre R$8001,00 e R$12000,00<br>  
                                <input class= "form-check-input" type = "radio" name = "perg41" id = "perg41" value = "E"/>Mais de R$12000,00<br><br>
                            </div>                            

                            <label for = "perg42">Avalie como foram as dificuldades que você encontrou na profissão</label><br>
                            <label>(Utilize o lado mais a esquerda para pouca dificuldade e o mais a direita para muita dificuldade)</label><br>               
                            <div class = "slider-wrapper" id = "q42">
                                Apresentação em público<br><input type = "range" list = "tickmarks" name = "perg42A" id = "perg42" min = "1" max = "5"/> 
                                <datalist id="tickmarks">
                                  <option value="1">
                                  <option value="2">
                                  <option value="3">
                                  <option value="4">
                                  <option value="5">
                                </datalist><br>
                                
                                Falta de cursos relacionados a área<br><input type = "range" list = "tickmarks" name = "perg42B" id = "perg42" min = "1" max = "5"/> 
                                <datalist id="tickmarks">
                                  <option value="1">
                                  <option value="2">
                                  <option value="3">
                                  <option value="4">
                                  <option value="5">
                                </datalist><br>
                                
                                Língua estrangeira<br><input type = "range" list = "tickmarks" name = "perg42C" id = "perg42" min = "1" max = "5"/> 
                                <datalist id="tickmarks">
                                  <option value="1">
                                  <option value="2">
                                  <option value="3">
                                  <option value="4">
                                  <option value="5">
                                </datalist><br>
                                
                                Motivação da equipe<br><input type = "range" list = "tickmarks" name = "perg42D" id = "perg42" min = "1" max = "5"/>   
                                <datalist id="tickmarks">
                                  <option value="1">
                                  <option value="2">
                                  <option value="3">
                                  <option value="4">
                                  <option value="5">
                                </datalist><br>
                                
                                Outras<br><input type = "range" list = "tickmarks" name = "perg42E" id = "perg42" min = "1" max = "5"/>
                                <datalist id="tickmarks">
                                  <option value="1">
                                  <option value="2">
                                  <option value="3">
                                  <option value="4">
                                  <option value="5">
                                </datalist><br><br>    
                            </div>
                        </div>	

                        <div id = "quarentaetres" class = "esconde1"> 
                            <label for = "perg43">Qual o principal motivo para você não atuar na área da computação?</label><br>
                            <div class= "form-check">
                                <input class= "form-check-input" type = "radio" name = "perg43" id = "perg43" value = "A"/>Falta de perpectiva de carreira<br>         
                                <input class= "form-check-input" type = "radio" name = "perg43" id = "perg43" value = "B"/>Mercado de trabalho atual saturado<br>
                                <input class= "form-check-input" type = "radio" name = "perg43" id = "perg43" value = "C"/>Melhor oportunidade em outra profissão<br>
                                <input class= "form-check-input" type = "radio" name = "perg43" id = "perg43" value = "D"/>Trabalho na área da minha segunda formação<br>  
                                <input class= "form-check-input" type = "radio" name = "perg43" id = "perg43" value = "E"/>Outros<br><br>
                            </div>                            
                        </div>

                        <div id = "quarentaequatro" class = "esconde1"> 
                            <label for = "perg44">Por que você não está empregado?</label><br>
                            <div class= "form-check">
                                <input class= "form-check-input" type = "radio" name = "perg44" id = "perg44" value = "A"/>Falta de oportunidade<br>
                                <input class= "form-check-input" type = "radio" name = "perg44" id = "perg44" value = "B"/>Não preciso/Não quero<br>
                                <input class= "form-check-input" type = "radio" name = "perg44" id = "perg44" value = "C"/>Me dedico aos estudos<br><br>
                            </div>
                        </div>

                        <div class = "botao">
                            <a href = "conhecimentosup.php"><input id = "botao" type = "button" class= "btn btn-primary" value = "Anterior"/></a>
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
        
        <script src = "https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity ="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin = "anonymous"></script>
        <script src = "https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity = "sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin = "anonymous" ></script> 
        <script src = "https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity = "sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin = "anonymous" ></script> 
        <script src = "https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity = "sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin = "anonymous" ></script> 
	</body>
</html>