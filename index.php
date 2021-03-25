<?php
	session_start();
?>

<!DOCTYPE HTML>
<html lang="pt-br">
	<head>
		<meta charset = "UTF-8">
        <meta name = "viewport" content = "width=device-width, initial-scale=1, shrink-to-fit=no">

        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Exo+2:wght@500&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">

        <link rel = "stylesheet" href = "https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity = "sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin = "anonymous">
        <link rel = "stylesheet" href = "login.css">
		<title>Questionário</title>
	</head>
	
	<body>		
		<!-- <form method="POST" action="tratamentologin.php">
            <br>
            <div class="cabecalho">
                <h1 class="display-4">SCADA-E - EGRESSOS UFV</h1>
            </div><br>
			
			<?php
                if (isset ($_SESSION['msg'])){
    				echo $_SESSION['msg'];
    				unset ($_SESSION['msg']);
				}	
    		?>
    			
            <div class = "corpo">                 
                <div class = "login-form"> 
                    <h4 class="modal-title">Entre com seu CPF e modalidade</h4><br>
                        
                    <div class="form-group">
                        <input type = "number" min="1" name = "cpf" placeholder = "Digite apenas os numeros do seu CPF" id = "number" class = "form-control" required = "required">
                    </div>

                    <div class="form-group">
                        <select class= "form-control" name = "curso" id = "curso" required>
                            <option value="">Escolha a modalidade</option>
                            <option value = "Tecnico">Técnico</option> 
                            <option value = "Superior">Superior</option> 
                            <option value = "Administrador">Gerente</option>
                        </select>
                    </div>                   
                    
                </div>
                
                <div class = "botao">
                    <input id = "botao" type = "submit" class= "btn btn-primary" name = "entrar" value = "Entrar"/>
                </div>   
            </div>
            
        </form> -->

        <div id="triangulos">
            <img src="./images/triangulos.png">
        </div>

        <div id="brasao">
            <img src="./images/brasao.svg">
        </div> 

        <form method="POST" action="tratamentologin.php">            
            <main>
                <img id="logo" src="./images/logo.svg" alt="logo scada-e">

                <div class="formulario">                        
                    <div class="form-group">
                        <label>CPF</label>
                        <input id="number" class="form-control" type="number" min="1" name="cpf" placeholder="Digite apenas os números" required>
                    </div>

                    <div class="form-group">
                        <label>Modalidade</label>
                        <select id="curso" class="form-control" name="curso"  required>
                            <option value="">Escolha a modalidade</option>
                            <option value="Tecnico">Técnico</option> 
                            <option value="Superior">Superior</option> 
                            <option value="Administrador">Gerente</option>
                        </select>
                    </div> 
                </div>
                    
                <input id="botao" class="btn" type="submit" name="entrar" value="Entrar"/>
            </main>           
        </form>        
	</body>
</html>