<?php
	include 'acessobancosup.php';
    include 'vsup.php';
?>

<script language = javascript type = "text/javascript">
    function abre8(){
        var q8 = document.getElementsByName('perg8');
        if (q8[0].checked){
            var q9 = document.getElementById('nove');
            q9.classList.remove("esconde");
            var p9 = document.getElementById('perg9');
            p9.setAttribute("required", "required");
            var p10 = document.getElementById('perg10');
            p10.setAttribute("required", "required");
        }else if (q8[1].checked){
            var q9 = document.getElementById('nove');
            q9.classList.add("esconde");
            var p9 = document.getElementById('perg9');
            if (p9.hasAttribute("required")){
                p9.removeAttribute("required");
            }     
            var p10 = document.getElementById('perg10');
            if (p10.hasAttribute("required")){
                p10.removeAttribute("required");
            }
        }
    }
    
    function abre9(){
        var q9 = document.getElementsByName('perg9');
        if (q9[0].checked || q9[1].checked){
            var q10 = document.getElementById('dez');
            q10.classList.remove("esconde1");
            var p10 = document.getElementById('perg10');
            p10.setAttribute("required", "required");
        }else if (q9[2].checked){
            var q10 = document.getElementById('dez');
            q10.classList.add("esconde1");
            var p10 = document.getElementById('perg10');
            if (p10.hasAttribute("required")){
                p10.removeAttribute("required");
            }         
        }
    }
    
    function abre20(){
        var q20 = document.getElementsByName('perg20');
        if (q20[0].checked || q20[1].checked){
            var q21 = document.getElementById('vinteum');
            q21.classList.remove("esconde");
            var p21 = document.getElementById('perg21');
            p21.setAttribute("required", "required");
        }else if (q20[2].checked){
            var q21 = document.getElementById('vinteum');
            q21.classList.add("esconde");
            var p21 = document.getElementById('perg21');
            if (p21.hasAttribute("required")){
                p21.removeAttribute("required");
            }         
        }
    }
    
    function abre28(){
        var q28 = document.getElementsByName('perg28');
        if (q28[0].checked){
            var q29 = document.getElementById('vintenove');
            q29.classList.remove("esconde");
            var p29 = document.getElementById('perg29');
            p29.setAttribute("required", "required");
        }else if (q28[1].checked){
            var q29 = document.getElementById('vintenove');
            q29.classList.add("esconde");
            var p29 = document.getElementById('perg29');
            if (p29.hasAttribute("required")){
                p29.removeAttribute("required");
            }         
        }
    }
    
    function abre30(){
        var q30 = document.getElementsByName('perg30');
        if (q30[0].checked){
            var q31 = document.getElementById('trintaeum');
            q31.classList.remove("esconde");
            var p31 = document.getElementById('perg31');
            p31.setAttribute("required", "required");
        }else if (q30[1].checked){
            var q31 = document.getElementById('trintaeum');
            q31.classList.add("esconde");
            var p31 = document.getElementById('perg31');
            if (p31.hasAttribute("required")){
                p31.removeAttribute("required");
            }         
        }
    }
    
    function voltar(){
        window.location.assign ("dados_pessoaissup.php");
    }
</script>

<!DOCTYPE HTML>
<html lang="pt-br">
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> 
    
    <title>Questionario</title>
    
	<head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">        
        <link rel = "stylesheet" href = "estilo.css">
        
		<style>	
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
        
		<form method = "POST" action = "iconhecimentosup.php">
            <br>
			<div class = "corpo">
                <div class = "card text-center">
                    <div class = "card-header"> 
                        <br><h1>Responda ao questionário abaixo</h1>
                        <br><h2>Atualização do conhecimento</h2><br>
                    </div> 	
        
                    <div class= "card-body" >
                        <label for = "perg8">Você fez curso técnico antes da graduação?</label><br>
                        <div class= "form-check">
                            <input class= "form-check-input" type = "radio" name = "perg8" id = "perg8" value = "A" onChange = "abre8();" required/>Sim<br>
                            <input class= "form-check-input" type = "radio" name = "perg8" id = "perg8" value = "B" onChange = "abre8();"/>Não<br><br>
                        </div> 

                        <div id = "nove" class = "esconde">
                            <label for = "perg9">O curso técnico foi na área da computação?</label><br>
                            <div class= "form-check">
                                <input class= "form-check-input" type = "radio" name = "perg9" id = "perg9" value = "A" onChange = "abre9();"/>Sim<br>
                                <input class= "form-check-input" type = "radio" name = "perg9" id = "perg9" value = "B" onChange = "abre9();"/>Outra área, mas na área das exatas<br>
                                <input class= "form-check-input" type = "radio" name = "perg9" id = "perg9" value = "C" onChange = "abre9();"/>Outra área diferente<br><br>
                            </div>
                            
                            <div id = "dez" class = "esconde1">
                                <label for = "perg10">O curso técnico auxiliou na graduação?</label><br>
                                <div class= "form-check">
                                    <input class= "form-check-input" type = "radio" name = "perg10" id = "perg10" value = "A"/>Ajudou muito<br>
                                    <input class= "form-check-input" type = "radio" name = "perg10" id = "perg10" value = "B"/>Ajudou pouco<br>
                                    <input class= "form-check-input" type = "radio" name = "perg10" id = "perg10" value = "C"/>Não ajudou<br><br>
                                </div> 
                            </div>
                        </div> 

                        <label for = "perg11">Você publicou artigo durante a gradução?</label><br>
                        <div class= "form-check">
                            <input class= "form-check-input" type = "radio" name = "perg11" value = "A" required/>Sim. Em uma revista<br>
                            <input class= "form-check-input" type = "radio" name = "perg11" value = "B"/>Sim. Em um congresso<br>
                            <input class= "form-check-input" type = "radio" name = "perg11" value = "C"/>Sim. Em uma revista e em um congresso<br>
                            <input class= "form-check-input" type = "radio" name = "perg11" value = "D"/>Não<br><br>
                        </div>

                        <label for = "perg12">Qual foi o formato da sua defesa de TCC?</label><br>
                        <div class= "form-check">
                            <input class= "form-check-input" type = "radio" name = "perg12" value = "A" required/>Artigo<br>
                            <input class= "form-check-input" type = "radio" name = "perg12" value = "B"/>Monografia<br><br>
                        </div>

                        <label for = "perg13">Fez estágio na área da computação durante a gradução?</label><br>
                        <div class= "form-check">
                            <input class= "form-check-input" type = "radio" name = "perg13" value = "A" required/>Sim<br>
                            <input class= "form-check-input" type = "radio" name = "perg13" value = "B"/>Não<br><br>
                        </div>

                        <label for = "perg14">Participou da Empresa Jr (SetApp) na graduação?</label><br>
                        <div class= "form-check">
                            <input class= "form-check-input" type = "radio" name = "perg14" value = "A" required/>Sim. Como diretor<br>
                            <input class= "form-check-input" type = "radio" name = "perg14" value = "B"/>Sim. Como gerente<br>
                            <input class= "form-check-input" type = "radio" name = "perg14" value = "C"/>Sim. Como efetivo<br>
                            <input class= "form-check-input" type = "radio" name = "perg14" value = "D"/>Sim. Em outro cargo<br>
                            <input class= "form-check-input" type = "radio" name = "perg14" value = "E"/>Sim. Em mais de uma função<br>
                            <input class= "form-check-input" type = "radio" name = "perg14" value = "F"/>Não<br><br>
                        </div>

                        <label for = "perg15">Você participou como membro discente em entidades representativas de discentes?</label><br>
                        <div class= "form-check">
                            <input class= "form-check-input" type = "radio" name = "perg15" value = "A" required/>Sim. Na comissão coordenadora do curso<br>
                            <input class= "form-check-input" type = "radio" name = "perg15" value = "B"/>Sim. No DCE<br>
                            <input class= "form-check-input" type = "radio" name = "perg15" value = "C"/>Sim. Em ambas as entidades<br>
                            <input class= "form-check-input" type = "radio" name = "perg15" value = "D"/>Sim. Em outra entidade<br>
                            <input class= "form-check-input" type = "radio" name = "perg15" value = "E"/>Não<br><br>
                        </div>

                        <label for = "perg16">Você participou de algum projeto de iniciação científica?</label><br>
                        <div class= "form-check">
                            <input class= "form-check-input" type = "radio" name = "perg16" value = "A" required/>Sim. Com bolsa<br>
                            <input class= "form-check-input" type = "radio" name = "perg16" value = "B"/>Sim. Sem bolsa<br>
                            <input class= "form-check-input" type = "radio" name = "perg16" value = "D"/>Sim. Com e sem bolsa<br>
                            <input class= "form-check-input" type = "radio" name = "perg16" value = "C"/>Não<br><br>
                        </div>

                        <label for = "perg17">Você participou de algum projeto de extensão?</label><br>
                        <div class= "form-check">
                            <input class= "form-check-input" type = "radio" name = "perg17" value = "A" required/>Sim. Com bolsa<br>
                            <input class= "form-check-input" type = "radio" name = "perg17" value = "B"/>Sim. Sem bolsa<br>
                            <input class= "form-check-input" type = "radio" name = "perg17" value = "D"/>Sim. Com e sem bolsa<br>
                            <input class= "form-check-input" type = "radio" name = "perg17" value = "C"/>Não<br><br>
                        </div>

                        <label for = "perg18">Você participou de algum projeto de ensino?</label><br>
                        <div class= "form-check">
                            <input class= "form-check-input" type = "radio" name = "perg18" value = "A" required/>Sim. Com bolsa<br>
                            <input class= "form-check-input" type = "radio" name = "perg18" value = "B"/>Sim. Sem bolsa<br>
                            <input class= "form-check-input" type = "radio" name = "perg18" value = "D"/>Sim. Com e sem bolsa<br>
                            <input class= "form-check-input" type = "radio" name = "perg18" value = "C"/>Não<br><br>
                        </div>

                        <label for = "perg19">Você foi monitor ou tutor de alguma disciplina?</label><br>
                        <div class= "form-check">
                            <input class= "form-check-input" type = "radio" name = "perg19" value = "A" required/>Sim. De uma matéria do curso<br>
                            <input class= "form-check-input" type = "radio" name = "perg19" value = "B"/>Sim. De uma matéria de outro curso<br>
                            <input class= "form-check-input" type = "radio" name = "perg19" value = "C"/>Sim. De ambos<br>
                            <input class= "form-check-input" type = "radio" name = "perg19" value = "D"/>Não<br><br>
                        </div>
                        
                        <label for = "perg20">Você fez intercâmbio durante a graduação?</label><br>
                        <div class= "form-check">
                            <input class= "form-check-input" type = "radio" name = "perg20" value = "A" onChange = "abre20();" required/>Sim. No Brasil<br>
                            <input class= "form-check-input" type = "radio" name = "perg20" value = "B" onChange = "abre20();"/>Sim. No exterior<br>
                            <input class= "form-check-input" type = "radio" name = "perg20" value = "C" onChange = "abre20();"/>Não<br><br>
                        </div>
                        
                        <div id = "vinteum" class = "esconde">
                            <div class= "form-group">
                                <label for = "perg21">Para onde você foi no intercâmbio?</label>
                                <input type = "text" class= "form-control" name = "perg21" id = "perg21" placeholder="Estado se foi feito no Brasil e país e estado se foi feito no exterior"> 
                            </div> 
                        </div>

                        <label for = "perg22">Você continuou os seus estudos?</label><br>
                        <div class= "form-check">
                            <input class= "form-check-input" type = "radio" name = "perg22" value = "A" required/>Não<br>
                            <input class= "form-check-input" type = "radio" name = "perg22" value = "B"/>Outra graduação<br>
                            <input class= "form-check-input" type = "radio" name = "perg22" value = "C"/>Pós-graduação<br>
                            <input class= "form-check-input" type = "radio" name = "perg22" value = "D"/>Mestrado<br>
                            <input class= "form-check-input" type = "radio" name = "perg22" value = "E"/>Doutorado<br>
                            <input class= "form-check-input" type = "radio" name = "perg22" value = "F"/>Outra formação<br><br>
                        </div>
                        
                        <label for = "perg23">Língua estrangeira que sabe ler</label><br>
                        <table class = "table">
                            <thead class= "thead-light"> 
                                <tr> 
                                    <th scope= "col"> # </th> 
                                    <th scope= "col"> Não sei </th> 
                                    <th scope= "col"> Básico </th> 
                                    <th scope= "col"> Intermediário </th>
                                    <th scope= "col"> Fluente </th> 
                                </tr> 
                            </thead> 
                            <tbody>
                                <tr>
                                    <td for = "23A">Inglês</td>
                                    <td><input type = "radio" name = "23A" value = "A" required/></td>
                                    <td><input type = "radio" name = "23A" value = "B"/></td>
                                    <td><input type = "radio" name = "23A" value = "C"/></td>
                                    <td><input type = "radio" name = "23A" value = "D"/></td>
                                </tr>
                                <tr>
                                    <td for = "23B">Espanhol</td>
                                    <td><input type = "radio" name = "23B" value = "A" required/></td>
                                    <td><input type = "radio" name = "23B" value = "B"/></td>
                                    <td><input type = "radio" name = "23B" value = "C"/></td>
                                    <td><input type = "radio" name = "23B" value = "D"/></td>
                                </tr>
                                <tr>
                                    <td for = "23C">Italiano</td>
                                    <th><input type = "radio" name = "23C" value = "A" required/></th>
                                    <td><input type = "radio" name = "23C" value = "B"/></td>
                                    <td><input type = "radio" name = "23C" value = "C"/></td>
                                    <td><input type = "radio" name = "23C" value = "D"/></td>
                                </tr>
                                <tr>
                                    <td for = "23D">Francês</td>
                                    <th><input type = "radio" name = "23D" value = "A" required/></th>
                                    <td><input type = "radio" name = "23D" value = "B"/></td>
                                    <td><input type = "radio" name = "23D" value = "C"/></td>
                                    <td><input type = "radio" name = "23D" value = "D"/></td>
                                </tr>   
                            </tbody>
                        </table> <br>

                        <label for = "perg24">Língua estrangeira que sabe falar</label><br>
                        <table class = "table">
                            <thead class= "thead-light">
                                <tr>
                                    <th scope= "col">#</th> 
                                    <th scope= "col">Não sei</th> 
                                    <th scope= "col">Básico</th>
                                    <th scope= "col">Intermediário</th>
                                    <th scope= "col">Fluente</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td for = "24A">Inglês</td>
                                    <td><input type = "radio" name = "24A" value = "A" required/></td>
                                    <td><input type = "radio" name = "24A" value = "B"/></td>
                                    <td><input type = "radio" name = "24A" value = "C"/></td>
                                    <td><input type = "radio" name = "24A" value = "D"/></td>
                                </tr>
                                <tr>
                                    <td for = "24B">Espanhol</td>
                                    <td><input type = "radio" name = "24B" value = "A" required/></td>
                                    <td><input type = "radio" name = "24B" value = "B"/></td>
                                    <td><input type = "radio" name = "24B" value = "C"/></td>
                                    <td><input type = "radio" name = "24B" value = "D"/></td>
                                </tr>
                                <tr>
                                    <td for = "24C">Italiano</td>
                                    <td><input type = "radio" name = "24C" value = "A" required/></td>
                                    <td><input type = "radio" name = "24C" value = "B"/></td>
                                    <td><input type = "radio" name = "24C" value = "C"/></td>
                                    <td><input type = "radio" name = "24C" value = "D"/></td>
                                </tr>
                                <tr>
                                    <td for = "24D">Francês</td>
                                    <td><input type = "radio" name = "24D" value = "A" required/></td>
                                    <td><input type = "radio" name = "24D" value = "B"/></td>
                                    <td><input type = "radio" name = "24D" value = "C"/></td>
                                    <td><input type = "radio" name = "24D" value = "D"/></td>
                                </tr>
                            </tbody>
                        </table><br>

                        <label for = "perg25">Língua estrangeira que sabe escrever</label><br>
                        <table class = "table">
                            <thead class= "thead-light">
                                <tr>
                                    <th scope= "col">#</th> 
                                    <th scope= "col">Não sei</th> 
                                    <th scope= "col">Básico</th>
                                    <th scope= "col">Intermediário</th>
                                    <th scope= "col">Fluente</th>
                                </tr>
                            </thead>
                            <tr>
                                <td for = "25A"> Inglês</td>
                                <td><input type = "radio" name = "25A" value = "A" required/></td>
                                <td><input type = "radio" name = "25A" value = "B"/></td>
                                <td><input type = "radio" name = "25A" value = "C"/></td>
                                <td><input type = "radio" name = "25A" value = "D"/></td>
                            </tr>
                            <tr>
                                <td for = "25B">Espanhol</td>
                                <td><input type = "radio" name = "25B" value = "A" required/></td>
                                <td><input type = "radio" name = "25B" value = "B"/></td>
                                <td><input type = "radio" name = "25B" value = "C"/></td>
                                <td><input type = "radio" name = "25B" value = "D"/></td>
                            </tr>
                            <tr>
                                <td for = "25C">Italiano</td>
                                <td><input type = "radio" name = "25C" value = "A" required/></td>
                                <td><input type = "radio" name = "25C" value = "B"/></td>
                                <td><input type = "radio" name = "25C" value = "C"/></td>
                                <td><input type = "radio" name = "25C" value = "D"/></td>
                            </tr>
                            <tr>
                                <td for = "25D">Francês</td>
                                <td><input type = "radio" name = "25D" value = "A" required/></td>
                                <td><input type = "radio" name = "25D" value = "B"/></td>
                                <td><input type = "radio" name = "25D" value = "C"/></td>
                                <td><input type = "radio" name = "25D" value = "D"/></td>
                            </tr>
                        </table>
                        <br>

                        <label for = "perg26">Quantos cursos/treinamentos você costuma fazer por ano?</label><br>
                        <div class= "form-check">
                            <input class= "form-check-input" type = "radio" name = "perg26" value = "A" required/>0<br>
                            <input class= "form-check-input" type = "radio" name = "perg26" value = "B"/>1<br>
                            <input class= "form-check-input" type = "radio" name = "perg26" value = "C"/>2<br>
                            <input class= "form-check-input" type = "radio" name = "perg26" value = "D"/>3<br>
                            <input class= "form-check-input" type = "radio" name = "perg26" value = "E"/>Mais de 3<br><br>
                        </div>

                        <label for = "perg27">Quantas palestras/congressos você costuma ir por ano?</label><br>
                        <div class= "form-check">
                            <input class= "form-check-input" type = "radio" name = "perg27" value = "A" required/>0<br>
                            <input class= "form-check-input" type = "radio" name = "perg27" value = "B"/>1<br>
                            <input class= "form-check-input" type = "radio" name = "perg27" value = "C"/>2<br>
                            <input class= "form-check-input" type = "radio" name = "perg27" value = "D"/>3<br>
                            <input class= "form-check-input" type = "radio" name = "perg27" value = "E"/>Mais de 3<br><br>
                        </div>                        

                        <label for = "perg28">Você estaria disposto a participar como palestrante da semana acadêmica do curso que é realizada anualmente no mês de maio?</label><br>
                        <div class= "form-check">
                            <input class= "form-check-input" type = "radio" name = "perg28" value = "A" onChange = "abre28();" required/>Sim<br>
                            <input class= "form-check-input" type = "radio" name = "perg28" value = "B" onChange = "abre28();"/>Não<br><br>
                        </div>                        

                        <div id = "vintenove" class = "esconde">
                            <div class= "form-group">
                                <label for = "perg29">Qual seria o tema dessa palestra?</label>
                                <input type = "text" class= "form-control" name="perg29" id = "perg29"><br>
                            </div>
                        </div>

                        <label for = "perg30">Você estaria disposto a ministrar um minicurso na semana acadêmica do curso que é realizada anualmente no mês de maio?</label><br>
                        <div class= "form-check">
                            <input class= "form-check-input" type = "radio" name = "perg30" value = "A" onChange = "abre30();" required/>Sim<br>
                            <input class= "form-check-input" type = "radio" name = "perg30" value = "B" onChange = "abre30();"/>Não<br><br>
                        </div>                        

                        <div id = "trintaeum" class = "esconde">
                            <div class= "form-group">
                                <label for = "perg29">Qual seria o tema desse minicurso?</label>
                                <input type = "text" class= "form-control" name="perg31" id = "perg31"><br>
                            </div> 
                        </div>

                        <div class = "botao">
                            <input id = "botao" type = "button" class= "btn btn-primary" value = "Anterior" onClick = "voltar();"/>
                            <input id = "botao" type = "submit" class= "btn btn-primary" name = "proximo" value = "Próximo"/>
                        </div><br>
                        
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped bg-info" role="progressbar" style="width: 12.5%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
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