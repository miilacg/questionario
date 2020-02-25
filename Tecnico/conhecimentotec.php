<?php
    include '../acessobancotec.php';
    include 'vTecnico.php';
?>

<!DOCTYPE HTML>
<html lang = "pt-br">
    <head>
        <meta http-equiv = "content-type" content = "text/html;charset=utf-8">	
        <meta name = "viewport" content = "width=device-width, initial-scale=1, shrink-to-fit=no">

        <script src = "conhecimentotec.js"></script>

        <link rel = "stylesheet" href = "https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity = "sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin = "anonymous"> 
        <link rel = "stylesheet" href = "https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity = "sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin = "anonymous">        
        <link rel = "stylesheet" href = "../estilo.css">

        <title>Questionário</title>      
	            
        <style>
            .esconde{
                display: none;
            }    
        </style>
	</head>	
	<body>        
		<form accept-charset = "utf-8" method = "POST" action = "iconhecimentotec.php">
            <br>
            <div class = "corpo">
                <div class = "card text-center"> 
                    <div class = "card-header"> 
                        <br><h1>Responda ao questionário abaixo</h1>
                        <br><h2>Atualização do conhecimento</h2><br>
                    </div> 
                    
                    <div class= "card-body">   			
                        <label for = "perg8">Já iniciou outro curso técnico?</label><br>
                        <div class= "form-check">
                            <input class= "form-check-input" type = "radio" name = "perg8" value = "A" onChange = "abre9()" required/>Sim<br>
                            <input class= "form-check-input" type = "radio" name = "perg8" value = "B" onChange = "abre9()"/>Não<br><br>
                        </div>

                        <div id = "nove" class = "esconde">   
                            <label for = "perg9">Já concluiu outro curso técnico?</label><br>
                            <div class= "form-check">
                                <input class= "form-check-input" type = "radio" name = "perg9" id = "perg9" value = "A"/>Sim<br>
                                <input class= "form-check-input" type = "radio" name = "perg9" id = "perg9" value = "B"/>Não<br><br>
                            </div>
                        </div>

                        <label for = "perg10">Você teve bolsa do Pibic ou Pibex?</label><br>
                        <div class= "form-check">
                            <input class= "form-check-input" type = "radio" name = "perg10" value = "A" required/>Não<br>
                            <input class= "form-check-input" type = "radio" name = "perg10" value = "B"/>Sim. Pibic<br>
                            <input class= "form-check-input" type = "radio" name = "perg10" value = "C"/>Sim. Pibex<br>
                            <input class= "form-check-input" type = "radio" name = "perg10" value = "D"/>Sim. Ambas<br><br>
                        </div>

                        <label for = "perg11">Você fez o técnico concomitante ou subsequente?</label><br>
                        <div class= "form-check">
                            <input class= "form-check-input" type = "radio" name = "perg11" value = "A" required/>Concomitante (junto com o ensino médio)<br>
                            <input class= "form-check-input" type = "radio" name = "perg11" value = "B"/>Subsquente (depois do ensino médio)<br><br>	
                        </div>

                        <label for = "perg12">Você continuou os seus estudos?</label><br>
                        <div class= "form-check">
                            <input class= "form-check-input" type = "radio" name = "perg12" value = "A" required/>Não<br>                        
                            <input class= "form-check-input" type = "radio" name = "perg12" value = "B"/>Outro técnico<br>
                            <input class= "form-check-input" type = "radio" name = "perg12" value = "C"/>Graduação<br>
                            <input class= "form-check-input" type = "radio" name = "perg12" value = "D"/>Mestrado<br> 
                            <input class= "form-check-input" type = "radio" name = "perg12" value = "E"/>Doutorado<br>
                            <input class= "form-check-input" type = "radio" name = "perg12" value = "F"/>Pós-graduação<br><br>
                        </div>

                        <label for = "perg13">Língua estrangeira que sabe ler?</label><br>
                        <table class= "table"> 
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
                                    <td for = "13A">Inglês</td> 
                                    <td><input type = "radio" name = "13A" value = "A" required/></td>
                                    <td><input type = "radio" name = "13A" value = "B"/></td>
                                    <td><input type = "radio" name = "13A" value = "C"/></td>
                                    <td><input type = "radio" name = "13A" value = "D"/></td> 
                                </tr> 
                                <tr> 
                                    <td for = "13B">Espanhol</td> 
                                    <td><input type = "radio" name = "13B" value = "A" required/></td>
                                    <td><input type = "radio" name = "13B" value = "B"/></td>
                                    <td><input type = "radio" name = "13B" value = "C"/></td>
                                    <td><input type = "radio" name = "13B" value = "D"/></td>
                                </tr> 
                                <tr> 
                                    <td for = "13C">Italiano</td> 
                                    <td><input type = "radio" name = "13C" value = "A" required/></td>
                                    <td><input type = "radio" name = "13C" value = "B"/></td>
                                    <td><input type = "radio" name = "13C" value = "C"/></td>
                                    <td><input type = "radio" name = "13C" value = "D"/></td>
                                </tr>
                                <tr> 
                                    <td for = "13D">Francês</td> 
                                    <td><input type = "radio" name = "13D" value = "A" required/></td>
                                    <td><input type = "radio" name = "13D" value = "B"/></td>
                                    <td><input type = "radio" name = "13D" value = "C"/></td>
                                    <td><input type = "radio" name = "13D" value = "D"/></td>
                                </tr>
                            </tbody> 
                        </table> <br>

                        <label for = "perg14">Língua estrangeira que sabe falar?</label><br>
                        <table class= "table" > 
                            <thead class= "thead-light"> 
                                <tr> 
                                    <th scope= "col" > # </th> 
                                    <th scope= "col" > Não sei </th> 
                                    <th scope= "col" > Básico </th> 
                                    <th scope= "col" > Intermediário </th> 
                                    <th scope= "col" > Fluente </th> 
                                </tr> 
                            </thead> 
                            <tbody> 
                                <tr> 
                                    <td for = "14A">Inglês</td> 
                                    <td><input type = "radio" name = "14A" value = "A" required/></td>
                                    <td><input type = "radio" name = "14A" value = "B"/></td>
                                    <td><input type = "radio" name = "14A" value = "C"/></td>
                                    <td><input type = "radio" name = "14A" value = "D"/></td> 
                                </tr> 
                                <tr> 
                                    <td for = "14B">Espanhol</td> 
                                    <td><input type = "radio" name = "14B" value = "A" required/></td>
                                    <td><input type = "radio" name = "14B" value = "B"/></td>
                                    <td><input type = "radio" name = "14B" value = "C"/></td>
                                    <td><input type = "radio" name = "14B" value = "D"/></td>
                                </tr> 
                                <tr> 
                                    <td for = "14C">Italiano</td> 
                                    <td><input type = "radio" name = "14C" value = "A" required/></td>
                                    <td><input type = "radio" name = "14C" value = "B"/></td>
                                    <td><input type = "radio" name = "14C" value = "C"/></td>
                                    <td><input type = "radio" name = "14C" value = "D"/></td> 
                                </tr> 
                                <tr> 
                                    <td for = "14D">Francês</td> 
                                    <td><input type = "radio" name = "14D" value = "A" required/></td>
                                    <td><input type = "radio" name = "14D" value = "B"/></td>
                                    <td><input type = "radio" name = "14D" value = "C"/></td>
                                    <td><input type = "radio" name = "14D" value = "D"/></td> 
                                </tr> 
                            </tbody> 
                        </table> <br>

                        <label for = "perg15">Língua estrangeira que sabe escrever?</label><br>
                        <table class= "table" > 
                            <thead class= "thead-light"> 
                                <tr> 
                                    <th scope= "col" > # </th> 
                                    <th scope= "col" > Não sei </th> 
                                    <th scope= "col" > Básico </th> 
                                    <th scope= "col" > Intermediário </th>
                                    <th scope= "col" > Fluente </th> 
                                </tr> 
                            </thead> 
                            <tbody> 
                                <tr> 
                                    <td for = "15A"> Inglês</td> 
                                    <td><input type = "radio" name = "15A" value = "A" required/></td>
                                    <td><input type = "radio" name = "15A" value = "B"/></td>
                                    <td><input type = "radio" name = "15A" value = "C"/></td>
                                    <td><input type = "radio" name = "15A" value = "D"/></td> 
                                </tr> 
                                <tr> 
                                    <td for = "15B">Espanhol</td> 
                                    <td><input type = "radio" name = "15B" value = "A" required/></td>
                                    <td><input type = "radio" name = "15B" value = "B"/></td>
                                    <td><input type = "radio" name = "15B" value = "C"/></td>
                                    <td><input type = "radio" name = "15B" value = "D"/></td>
                                </tr> 
                                <tr> 
                                    <td for = "15C">Italiano</td> 
                                    <td><input type = "radio" name = "15C" value = "A" required/></td>
                                    <td><input type = "radio" name = "15C" value = "B"/></td>
                                    <td><input type = "radio" name = "15C" value = "C"/></td>
                                    <td><input type = "radio" name = "15C" value = "D"/></td>
                                </tr> 
                                <tr> 
                                    <td for = "15D">Francês</td> 
                                    <td><input type = "radio" name = "15D" value = "A" required/></td>
                                    <td><input type = "radio" name = "15D" value = "B"/></td>
                                    <td><input type = "radio" name = "15D" value = "C"/></td>
                                    <td><input type = "radio" name = "15D" value = "D"/></td>
                                 </tr>
                            </tbody> 
                        </table> <br>

                        <label for = "perg16">Quantos cursos/treinamentos você costuma fazer por ano?</label><br>
                        <div class= "form-check">
                            <input class= "form-check-input" type = "radio" name = "perg16" value = "A" required/>0<br>
                            <input class= "form-check-input" type = "radio" name = "perg16" value = "B"/>1<br>
                            <input class= "form-check-input" type = "radio" name = "perg16" value = "C"/>2<br>
                            <input class= "form-check-input" type = "radio" name = "perg16" value = "D"/>3<br>
                            <input class= "form-check-input" type = "radio" name = "perg16" value = "E"/>Mais de 3<br><br>
                        </div>

                        <label for = "perg17">Quantas palestras/congressos você costuma ir por ano?</label><br>
                        <div class= "form-check">
                            <input class= "form-check-input" type = "radio" name = "perg17" value = "A" required/>0<br>
                            <input class= "form-check-input" type = "radio" name = "perg17" value = "B"/>1<br>
                            <input class= "form-check-input" type = "radio" name = "perg17" value = "C"/>2<br>
                            <input class= "form-check-input" type = "radio" name = "perg17" value = "D"/>3<br>
                            <input class= "form-check-input" type = "radio" name = "perg17" value = "E"/>Mais de 3<br><br>
                        </div>

                        <label for = "perg18">Você estaria disposto a participar como palestrante da semana acadêmica do curso que é realizada anualmente no mês de maio?</label><br>
                        <div class= "form-check">
                            <input class= "form-check-input" type = "radio" name = "perg18" value = "A" onChange = "abre19()" required/>Sim<br>
                            <input class= "form-check-input" type = "radio" name = "perg18" value = "B" onChange = "abre19()"/>Não<br><br>
                        </div>

                        <div id = "dezenove" class = "esconde">   
                            <div class= "form-group">
                                <label for = "perg19">Qual seria o tema dessa palestra?</label>
                                <input type = "text" class= "form-control" name="perg19" id = "caixa"><br>
                            </div>
                        </div>

                        <label for = "perg20">Você estaria disposto a ministrar um minicurso na semana acadêmca do curso que é realizada anualmente no mês de maio?</label><br>
                        <div class= "form-check">
                            <input class= "form-check-input" type = "radio" name = "perg20" value = "A" onChange = "abre21()"required/>Sim<br>
                            <input class= "form-check-input" type = "radio" name = "perg20" value = "B" onChange = "abre21()"/>Não<br><br>
                        </div>

                        <div id = "vinteeum" class = "esconde">   
                            <div class= "form-group">
                                <label for = "perg21">Qual seria o tema desse minicurso?</label>
                                <input type = "text" class= "form-control" name = "perg21" id = "caixa1"><br>
                            </div> 
                        </div>

                        <div class = "botao">
                            <a href = "dados_pessoaistec.php"><input id = "botao" type = "button" class= "btn btn-primary" value = "Anterior" onClick = "voltar();"/></a>
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
        
        <script src = "https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity = "sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin = "anonymous"></script>
        <script src = "https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity = "sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin = "anonymous"></script> 
        <script src = "https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity = "sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin = "anonymous"></script> 
        <script src = "https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity = "sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin = "anonymous"></script>
	</body>
</html>