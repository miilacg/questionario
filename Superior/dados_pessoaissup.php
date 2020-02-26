<?php
	include '../acessobancosup.php';
    include 'vSuperior.php';
?>

<!DOCTYPE html>	
<html>
	<head>
		<meta charset = "UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <script src = "superior.js"></script>

        <link rel = "stylesheet" href = "https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity = "sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin = "anonymous">
        <link rel = "stylesheet" href = "../estilo.css">
        <link rel = "stylesheet" href = "superior.css">

		<title>Questionário</title>
	</head>
	<body>
		<form method = "POST" action = "idados_pessoaissup.php">
            <br>
            <div class = "corpo">
                <div class= "card text-center"> 
                    <div class= "card-header">
                        <br><br><h1>Responda ao questionário abaixo</h1>
                        <br><h2>Dados pessoais</h2><br>
                    </div>
		
                    <div class= "card-body" >
                        <label for = "perg1">Ano de nascimento: </label>
                        <select class= "form-control" id = "perg1" name="perg1" required><br>
                            <option value="">Escolha uma opção</option> 
                            <option value="A">Antes de 1980</option>  
                            <option value="B">1980</option> 
                            <option value="C">1981</option> 
                            <option value="D">1982</option> 
                            <option value="E">1983</option> 
                            <option value="F">1984</option> 
                            <option value="G">1985</option> 
                            <option value="H">1986</option>
                            <option value="I">1987</option>
                            <option value="J">1988</option>
                            <option value="K">1989</option>
                            <option value="L">1990</option> 
                            <option value="M">1991</option> 
                            <option value="N">1992</option> 
                            <option value="O">1993</option> 
                            <option value="P">1994</option> 
                            <option value="Q">1995</option> 
                            <option value="R">1996</option> 
                            <option value="S">1997</option> 
                            <option value="T">1998</option> 
                            <option value="U">1999</option> 
                            <option value="V">2000</option> 
                            <option value="W">2001</option>
                            <option value="X">2002</option> 
                        </select><br>

                        <label for = "perg2">Ano de ingresso no curso: </label>
                        <select class= "form-control" id = "perg2" name="perg2" onChange = "testeConclusao1(perg2, perg3)" required><br>
                            <option value="">Escolha uma opção</option>
                            <option value="2012">2012</option>
                            <option value="2013">2013</option>
                            <option value="2014">2014</option>
                            <option value="2015">2015</option>
                            <option value="2016">2016</option>
                            <option value="2017">2017</option> 
                        </select><br>

                        <label for = "perg3">Ano de conclusão do curso: </label>
                        <select class= "form-control" id = "perg3" name="perg3" onChange = "testeConclusao(perg2, perg3)" required><br>
                            <option value="">Escolha uma opção</option>
                            <option value="2013">2013</option>
                            <option value="2014">2014</option>
                            <option value="2015">2015</option>
                            <option value="2016">2016</option>
                            <option value="2017">2017</option>
                            <option value="2018">2018</option> 
                            <option value="2019">2019</option>
                            <option value="2020">2020</option>
                        </select><br>

                        <label for = "perg4">Estado civil</label><br>
                        <div class= "form-check">
                            <input class= "form-check-input" type = "radio" name = "perg4" value = "A" required/>Solteiro<br>
                            <input class= "form-check-input" type = "radio" name = "perg4" value = "B"/>União Estável<br>
                            <input class= "form-check-input" type = "radio" name = "perg4" value = "C"/>Casado<br>
                            <input class= "form-check-input" type = "radio" name = "perg4" value = "D"/>Divorciado<br>
                            <input class= "form-check-input" type = "radio" name = "perg4" value = "E"/>Viúvo<br><br> 
                        </div>                         

                        <label for = "perg5">Sexo</label><br>
                        <div class = "form-check">
                            <input class= "form-check-input" type = "radio" name = "perg5" value = "A" required/>Feminino<br>
                            <input class= "form-check-input" type = "radio" name = "perg5" value = "B"/>Masculino<br>
                            <input class= "form-check-input" type = "radio" name = "perg5" value = "C"/>Prefiro não informar<br><br> 
                        </div> 
                    
                        <label for = "perg6">País onde mora: </label>
                        <select class= "form-control" id = "perg6" name="perg6" onChange = "abreEstado()" required><br>
                            <option value="">Escolha uma opção</option>
                            <option value="BR">Brasil</option>
                            <option value="CA">Canadá</option>
                            <option value="ES">Espanha</option> 
                            <option value="EUA">Estados Unidos</option>			 
                            <option value="FR">França</option>     			 
                            <option value="IT">Itália</option> 
                            <option value="PT">Portugal</option> 
                            <option value="O">Outro</option> 
                        </select><br>

                        <div id = "estado7" class = "estado">
                            <label for = "perg7">Estado onde mora: </label>
                            <select class= "form-control" id = "perg7" name="perg7"> 
                                <option value="">Escolha uma opção</option>
                                <option value="AC">Acre</option> 
                                <option value="AL">Alagoas</option> 
                                <option value="AM">Amazonas</option> 
                                <option value="AP">Amapá</option> 
                                <option value="BA">Bahia</option> 
                                <option value="CE">Ceará</option> 
                                <option value="DF">Distrito Federal</option> 
                                <option value="ES">Espírito Santo</option> 
                                <option value="GO">Goiás</option> 
                                <option value="MA">Maranhão</option> 
                                <option value="MT">Mato Grosso</option> 
                                <option value="MS">Mato Grosso do Sul</option> 
                                <option value="MG">Minas Gerais</option> 
                                <option value="PA">Pará</option> 
                                <option value="PB">Paraná</option> 
                                <option value="PR">Paraiba</option> 
                                <option value="PE">Pernambuco</option> 
                                <option value="PI">Piauí</option> 
                                <option value="RJ">Rio de Janeiro</option> 
                                <option value="RN">Rio Grande do Norte</option> 
                                <option value="RO">Rondonia</option> 
                                <option value="RS">Rio Grande do Sul</option> 
                                <option value="RR">Roraima</option> 
                                <option value="SC">Santa Catarina</option> 
                                <option value="SE">Sergipe</option> 
                                <option value="SP">São Paulo</option> 
                                <option value="TO">Tocantins</option> 
                            </select><br>
                        </div>	
                        
                        <div class= "form-group">
                            <label for = "perg64">Adicione um e-mail para contato</label>
                            <input type = "email" class= "form-control" name = "perg64" id = "perg64" placeholder = "Digite um e-mail valido"><br>
                        </div> 

                        <div class = "botao">
                            <input id = "botao" type = "submit" class= "btn btn-primary" name = "proximo" value = "Próximo"/>
                        </div><br>
                        
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped bg-info" role="progressbar" style="width: 0%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        
                    </div>
                    
                    <div class= "card-footer" >  </div>
                    
                 </div> 
            </div>
        </form>
        
        <script src = "https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity = "sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin = "anonymous"></script>
        <script src = "https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity = "sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin = "anonymous"></script>
        <script src = "https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity = "sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin = "anonymous"></script>
	</body>
</html>