<?php
	session_start();
?>

<!DOCTYPE HTML>
<html lang="pt-br">
	<head>
		<meta charset = "UTF-8">
        <meta name = "viewport" content = "width=device-width, initial-scale=1, shrink-to-fit=no">

        <link rel = "stylesheet" href = "https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity = "sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin = "anonymous">
        <link rel = "stylesheet" href = "index.css">
		<title>Questionário</title>
	</head>
	
	<body>		
		<form method = "POST" action = "tratamentologin.php">
            <br>
            <div class="cabecalho">
                <h1 class="display-4">SCADA - EGRESSOS UFV</h1>
            </div><br>
			
			<?php
                if (isset ($_SESSION['msg'])){
    				echo $_SESSION['msg'];
    				unset ($_SESSION['msg']);
				}	
    		?>
    			
            <div class = "corpo">                 
                <div class = "login-form"> 
                    <h4 class="modal-title">Entre com seu CPF e modalidade</h4><br><br>
                        
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
            
        </form>
        
        <script src = "https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity = "sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin = "anonymous"></script>
        <script src = "https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity = "sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin = "anonymous" ></script> 
        <script src = "https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity = "sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin = "anonymous" ></script> 
        <script src = "https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity = "sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin = "anonymous" ></script> 
	</body>
</html>